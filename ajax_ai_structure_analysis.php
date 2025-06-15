<?php
// AI表结构分析API端点
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

// 设置错误报告
error_reporting(E_ALL);
ini_set('display_errors', 0); // 不显示错误到浏览器，避免破坏JSON

// 加载PhpMyAdmin配置
require_once 'config.inc.php';
global $cfg;

// 使用PhpMyAdmin配置连接数据库
$server = $cfg['Servers'][1];
$host = $server['host'] ?? 'localhost';
$username = $server['user'] ?? 'root';
$password = $server['password'] ?? '';
$port = $server['port'] ?? 3306;

// 检查是否为POST请求
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Only POST requests are allowed']);
    exit;
}

// 获取POST参数
$description = isset($_POST['description']) ? trim($_POST['description']) : '';
$expectedLoad = isset($_POST['expected_load']) ? trim($_POST['expected_load']) : 'medium';
$accessPattern = isset($_POST['access_pattern']) ? trim($_POST['access_pattern']) : 'read_heavy';
$db = isset($_POST['db']) ? trim($_POST['db']) : '';
$table = isset($_POST['table']) ? trim($_POST['table']) : '';

// 参数验证
if (empty($description)) {
    echo json_encode(['success' => false, 'message' => 'Table description is required']);
    exit;
}

if (empty($db) || empty($table)) {
    echo json_encode(['success' => false, 'message' => 'Database and table parameters are required']);
    exit;
}

try {
    // 引入PhpMyAdmin配置
    global $cfg;
    
    // 使用PhpMyAdmin配置连接数据库
    $server = $cfg['Servers'][1];
    $host = $server['host'] ?? 'localhost';
    $username = $server['user'] ?? 'root';
    $password = $server['password'] ?? '';
    $port = $server['port'] ?? 3306;
    
    // 创建数据库连接
    $mysqli = new mysqli($host, $username, $password, $db, $port);
    
    if ($mysqli->connect_error) {
        throw new Exception('Database connection failed: ' . $mysqli->connect_error);
    }
    
    $mysqli->set_charset('utf8mb4');

    // 获取表结构信息
    $tableStructure = getTableStructure($mysqli, $table);
    
    // 获取表的索引信息
    $indexInfo = getIndexInfo($mysqli, $table);
    
    // 获取表的统计信息
    $tableStats = getTableStats($mysqli, $db, $table);
    
    // 生成AI分析请求
    $analysisResult = performAIAnalysis($tableStructure, $indexInfo, $tableStats, $description, $expectedLoad, $accessPattern);
    
    echo json_encode([
        'success' => true,
        'analysis' => $analysisResult,
        'debug_info' => [
            'table_columns' => count($tableStructure),
            'index_count' => count($indexInfo),
            'table_rows' => $tableStats['rows'] ?? 0
        ]
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Analysis failed: ' . $e->getMessage()
    ]);
} finally {
    if (isset($mysqli)) {
        $mysqli->close();
    }
}

function getTableStructure($mysqli, $table) {
    $escapedTable = $mysqli->real_escape_string($table);
    $sql = "DESCRIBE `{$escapedTable}`";
    $result = $mysqli->query($sql);
    $structure = [];
    
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $structure[] = $row;
        }
        $result->free();
    }
    
    return $structure;
}

function getIndexInfo($mysqli, $table) {
    $escapedTable = $mysqli->real_escape_string($table);
    $sql = "SHOW INDEX FROM `{$escapedTable}`";
    $result = $mysqli->query($sql);
    $indexes = [];
    
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $indexes[] = $row;
        }
        $result->free();
    }
    
    return $indexes;
}

function getTableStats($mysqli, $db, $table) {
    $escapedDb = $mysqli->real_escape_string($db);
    $escapedTable = $mysqli->real_escape_string($table);
    
    $sql = "SELECT 
                TABLE_ROWS as `rows`,
                DATA_LENGTH as data_length,
                INDEX_LENGTH as index_length,
                AVG_ROW_LENGTH as avg_row_length,
                AUTO_INCREMENT as auto_increment,
                CREATE_TIME as create_time,
                UPDATE_TIME as update_time,
                ENGINE as engine
            FROM INFORMATION_SCHEMA.TABLES 
            WHERE TABLE_SCHEMA = '{$escapedDb}' 
            AND TABLE_NAME = '{$escapedTable}'";
    
    $result = $mysqli->query($sql);
    $stats = [];
    
    if ($result) {
        $stats = $result->fetch_assoc() ?: [];
        $result->free();
    }
    
    return $stats;
}

function performAIAnalysis($structure, $indexes, $stats, $description, $expectedLoad, $accessPattern) {
    // 准备表结构信息
    $structureInfo = "Table Structure Analysis:\n";
    $structureInfo .= "Table: " . ($stats['engine'] ?? 'Unknown') . " engine\n";
    $structureInfo .= "Current rows: " . ($stats['rows'] ?? 0) . "\n\n";
    
    $structureInfo .= "Columns:\n";
    foreach ($structure as $column) {
        $structureInfo .= "- {$column['Field']}: {$column['Type']} ";
        $structureInfo .= ($column['Null'] === 'YES' ? 'NULL' : 'NOT NULL') . " ";
        $structureInfo .= ($column['Default'] !== null ? "DEFAULT {$column['Default']}" : '') . " ";
        $structureInfo .= ($column['Extra'] !== '' ? $column['Extra'] : '') . "\n";
    }
    
    $structureInfo .= "\nIndexes:\n";
    $indexGroups = [];
    foreach ($indexes as $index) {
        $indexGroups[$index['Key_name']][] = $index['Column_name'];
    }
    foreach ($indexGroups as $indexName => $columns) {
        $structureInfo .= "- {$indexName}: " . implode(', ', $columns) . "\n";
    }
    
    // 构建AI分析提示
    $aiPrompt = "Analyze this MySQL table structure and provide optimization recommendations:\n\n";
    $aiPrompt .= $structureInfo . "\n";
    $aiPrompt .= "User Description: {$description}\n";
    $aiPrompt .= "Expected Load: {$expectedLoad}\n";
    $aiPrompt .= "Access Pattern: {$accessPattern}\n\n";
    $aiPrompt .= "Please provide analysis in JSON format with the following structure:\n";
    $aiPrompt .= "{\n";
    $aiPrompt .= '  "summary": "Brief overview of the table structure analysis",\n';
    $aiPrompt .= '  "issues": ["List of potential issues or problems"],\n';
    $aiPrompt .= '  "recommendations": ["List of improvement recommendations"],\n';
    $aiPrompt .= '  "sql_suggestions": ["SQL statements for implementing improvements"]\n';
    $aiPrompt .= "}\n\n";
    $aiPrompt .= "Focus on: indexing strategies, data types optimization, normalization issues, performance considerations for the specified load and access patterns.";
    
    // 调用AI API
    $aiResponse = callAIAPI($aiPrompt);
    
    if ($aiResponse) {
        try {
            // 尝试解析AI返回的JSON
            $analysisData = json_decode($aiResponse, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($analysisData)) {
                return $analysisData;
            }
        } catch (Exception $e) {
            // JSON解析失败，返回原始响应
        }
        
        // 如果JSON解析失败，尝试手动解析响应
        return parseAIResponse($aiResponse);
    }
    
    // AI分析失败时的默认分析
    return performBasicAnalysis($structure, $indexes, $stats, $expectedLoad, $accessPattern);
}

function callAIAPI($prompt) {
    // 引入API配置
    if (!file_exists(__DIR__ . '/api_config.php')) {
        error_log('API配置文件不存在');
        return false;
    }
    
    require_once __DIR__ . '/api_config.php';
    
    if (!function_exists('createApiRequest') || !function_exists('sendApiRequest')) {
        error_log('API函数不可用');
        return false;
    }
    
    try {
        // 使用统一的API配置
        $systemPrompt = 'You are a database optimization expert. Analyze MySQL table structures and provide optimization recommendations in JSON format. Always return valid JSON with the requested structure.';
        $data = createApiRequest($prompt, $systemPrompt);
        
        // 调整参数以适应结构分析需求
        $data['max_tokens'] = 1500;
        $data['temperature'] = 0.7;
        
        return sendApiRequest($data);
    } catch (Exception $e) {
        error_log('AI API调用错误: ' . $e->getMessage());
        return false;
    }
}

function parseAIResponse($response) {
    // 尝试从响应中提取有用信息
    $lines = explode("\n", $response);
    $summary = '';
    $issues = [];
    $recommendations = [];
    $sqlSuggestions = [];
    
    $currentSection = '';
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line)) continue;
        
        if (stripos($line, 'summary') !== false || stripos($line, 'overview') !== false) {
            $currentSection = 'summary';
            continue;
        } elseif (stripos($line, 'issue') !== false || stripos($line, 'problem') !== false) {
            $currentSection = 'issues';
            continue;
        } elseif (stripos($line, 'recommend') !== false || stripos($line, 'suggest') !== false) {
            $currentSection = 'recommendations';
            continue;
        } elseif (stripos($line, 'sql') !== false || stripos($line, 'ALTER') !== false || stripos($line, 'CREATE') !== false) {
            $currentSection = 'sql';
            continue;
        }
        
        switch ($currentSection) {
            case 'summary':
                if (!preg_match('/^[-*:]/', $line)) {
                    $summary .= $line . ' ';
                }
                break;
            case 'issues':
                if (preg_match('/^[-*]\s*(.+)/', $line, $matches)) {
                    $issues[] = $matches[1];
                } elseif (!empty($line) && !preg_match('/^[-*:]/', $line)) {
                    $issues[] = $line;
                }
                break;
            case 'recommendations':
                if (preg_match('/^[-*]\s*(.+)/', $line, $matches)) {
                    $recommendations[] = $matches[1];
                } elseif (!empty($line) && !preg_match('/^[-*:]/', $line)) {
                    $recommendations[] = $line;
                }
                break;
            case 'sql':
                if (stripos($line, 'ALTER') !== false || stripos($line, 'CREATE') !== false || stripos($line, 'DROP') !== false) {
                    $sqlSuggestions[] = $line;
                }
                break;
        }
    }
    
    return [
        'summary' => trim($summary) ?: 'AI analysis completed for the table structure.',
        'issues' => $issues ?: ['No specific issues identified by AI analysis.'],
        'recommendations' => $recommendations ?: ['No specific recommendations provided by AI analysis.'],
        'sql_suggestions' => $sqlSuggestions ?: []
    ];
}

function performBasicAnalysis($structure, $indexes, $stats, $expectedLoad, $accessPattern) {
    $issues = [];
    $recommendations = [];
    $sqlSuggestions = [];
    
    // 基本结构分析
    $hasAutoIncrement = false;
    $hasPrimaryKey = false;
    $textColumns = [];
    $dateColumns = [];
    $nullableColumns = [];
    
    foreach ($structure as $column) {
        if (strpos($column['Extra'], 'auto_increment') !== false) {
            $hasAutoIncrement = true;
        }
        if (strpos($column['Type'], 'text') !== false || strpos($column['Type'], 'blob') !== false) {
            $textColumns[] = $column['Field'];
        }
        if (strpos($column['Type'], 'date') !== false || strpos($column['Type'], 'timestamp') !== false) {
            $dateColumns[] = $column['Field'];
        }
        if ($column['Null'] === 'YES') {
            $nullableColumns[] = $column['Field'];
        }
    }
    
    // 检查主键
    foreach ($indexes as $index) {
        if ($index['Key_name'] === 'PRIMARY') {
            $hasPrimaryKey = true;
            break;
        }
    }
    
    // 分析问题
    if (!$hasPrimaryKey) {
        $issues[] = "Table lacks a primary key, which is essential for replication and performance";
        $recommendations[] = "Add a primary key, preferably an auto-incrementing integer";
        $sqlSuggestions[] = "ALTER TABLE `{$GLOBALS['table']}` ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;";
    }
    
    if ($expectedLoad === 'large' || $expectedLoad === 'enterprise') {
        if (!empty($textColumns)) {
            $issues[] = "Large TEXT/BLOB columns detected: " . implode(', ', $textColumns);
            $recommendations[] = "Consider moving large text fields to separate tables for better performance";
        }
        
        if (count($indexes) < 3) {
            $issues[] = "Limited indexing strategy for high-volume table";
            $recommendations[] = "Add indexes on frequently queried columns, especially for WHERE and JOIN conditions";
        }
    }
    
    if ($accessPattern === 'write_heavy') {
        if (count($indexes) > 6) {
            $issues[] = "Too many indexes might slow down write operations";
            $recommendations[] = "Review and optimize index strategy for write-heavy workloads";
        }
    }
    
    if ($accessPattern === 'read_heavy') {
        $recommendations[] = "Consider adding covering indexes for frequently accessed column combinations";
        $recommendations[] = "Ensure all WHERE clause columns are properly indexed";
    }
    
    // 检查过多的nullable字段
    if (count($nullableColumns) > (count($structure) * 0.5)) {
        $issues[] = "Many columns allow NULL values, which can impact query performance";
        $recommendations[] = "Consider adding NOT NULL constraints where appropriate";
    }
    
    // 日期字段建议
    if (!empty($dateColumns)) {
        $recommendations[] = "Add indexes on date/timestamp columns for efficient date range queries";
        foreach ($dateColumns as $dateCol) {
            $sqlSuggestions[] = "CREATE INDEX idx_{$dateCol} ON `test_table` ({$dateCol});";
        }
    }
    
    // 默认建议
    if ($expectedLoad === 'enterprise') {
        $recommendations[] = "Consider partitioning for very large tables";
        $recommendations[] = "Monitor query performance and adjust indexes based on actual usage patterns";
    }
    
    $summary = "Basic table structure analysis completed. ";
    if (!empty($issues)) {
        $summary .= count($issues) . " potential issues identified. ";
    }
    if (!empty($recommendations)) {
        $summary .= count($recommendations) . " recommendations provided.";
    }
    
    return [
        'summary' => $summary,
        'issues' => $issues ?: ['No significant issues found with current table structure.'],
        'recommendations' => $recommendations ?: ['Table structure appears adequate for current requirements.'],
        'sql_suggestions' => $sqlSuggestions
    ];
}
?> 