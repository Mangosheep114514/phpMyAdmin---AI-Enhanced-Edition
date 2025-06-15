<?php
// 独立的AI数据生成AJAX端点
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
    echo json_encode(['success' => false, 'message' => '只允许POST请求']);
    exit;
}

// 获取POST参数并处理null值
$description = isset($_POST['description']) ? trim($_POST['description']) : '';
if (empty($description) && isset($_POST['data_description'])) {
    $description = trim($_POST['data_description']); // 向后兼容
}
$recordCount = intval($_POST['record_count'] ?? 5);
$db = isset($_POST['db']) ? trim($_POST['db']) : '';
$table = isset($_POST['table']) ? trim($_POST['table']) : '';

// 额外处理 'null' 字符串
if ($db === 'null' || $db === 'NULL') $db = '';
if ($table === 'null' || $table === 'NULL') $table = '';

// 详细的参数调试信息
$debugInfo = [
    'raw_post_data' => $_POST,
    'processed_data' => [
        'data_description' => $description,
        'db' => $db,
        'table' => $table,
        'record_count' => $recordCount
    ],
    'validation' => [
        'description_empty' => empty($description),
        'db_empty' => empty($db),
        'table_empty' => empty($table)
    ]
];

// 验证必需参数
if (empty($description)) {
    echo json_encode([
        'success' => false, 
        'message' => '请提供数据描述',
        'debug_info' => $debugInfo
    ]);
    exit;
}

if (empty($db) || empty($table)) {
    echo json_encode([
        'success' => false, 
        'message' => '数据库名和表名不能为空',
        'debug_info' => $debugInfo
    ]);
    exit;
}

// 验证记录数量
if ($recordCount < 1 || $recordCount > 100) {
    echo json_encode(['success' => false, 'message' => '记录数量必须在1-100之间']);
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
    
    // 构建DSN
    $dsn = "mysql:host=$host";
    if ($port && $port != 3306) {
        $dsn .= ";port=$port";
    }
    $dsn .= ";dbname=$db;charset=utf8mb4";
    
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]);
    
    // 获取表结构
    $tableStructure = getTableStructure($pdo, $db, $table);
    if (empty($tableStructure)) {
        throw new Exception("无法获取表 {$db}.{$table} 的结构信息");
    }
    
    // 引入API配置
    if (!file_exists('api_config.php')) {
        throw new Exception('API配置文件不存在');
    }
    
    require_once 'api_config.php';
    
    if (!function_exists('createApiRequest') || !function_exists('sendApiRequest')) {
        throw new Exception('API函数不可用');
    }
    
    // 构建提示词
    $prompt = buildAiPrompt($tableStructure, $description, $recordCount, $table);
    
    // 调用API
    $data = createApiRequest($prompt, 'You are a helpful assistant that generates SQL INSERT statements for test data.');
    $result = sendApiRequest($data);
    
    if (!$result) {
        throw new Exception('API调用失败 - 返回结果为空');
    }
    
    // 解析并执行INSERT语句
    $insertStatements = explode(';', $result);
    $insertedCount = 0;
    $errors = [];
    
    foreach ($insertStatements as $statement) {
        $statement = trim($statement);
        if (empty($statement) || stripos($statement, 'INSERT') !== 0) {
            continue;
        }
        
        try {
            $pdo->exec($statement);
            $insertedCount++;
        } catch (Exception $e) {
            // 记录错误但继续处理其他语句
            $errors[] = "SQL执行错误: " . $e->getMessage() . " - SQL: " . $statement;
            error_log("SQL执行错误: " . $e->getMessage() . " - SQL: " . $statement);
        }
    }
    
    if ($insertedCount > 0) {
        $response = [
            'success' => true, 
            'message' => "AI数据生成成功！已插入 $insertedCount 条记录",
            'record_count' => $insertedCount,
            'ai_generated_sql' => $result,
            'table_structure' => $tableStructure,
            'debug_info' => $debugInfo
        ];
        
        if (!empty($errors)) {
            $response['warnings'] = $errors;
        }
        
        echo json_encode($response);
    } else {
        throw new Exception('没有成功插入任何记录。可能的原因：SQL语句格式错误或数据库约束问题。');
    }

} catch (Exception $e) {
    // 返回错误结果
    echo json_encode([
        'success' => false, 
        'message' => 'AI数据生成失败: ' . $e->getMessage(),
        'debug_info' => $debugInfo,
        'api_result' => $result ?? null
    ]);
}

/**
 * 获取表结构信息
 */
function getTableStructure($pdo, $db, $table) {
    try {
        $sql = "SHOW FULL COLUMNS FROM `{$db}`.`{$table}`";
        $stmt = $pdo->query($sql);
        $columns = $stmt->fetchAll();
        
        if (empty($columns)) {
            return null;
        }
        
        $structure = [];
        $insertableColumns = [];
        
        foreach ($columns as $column) {
            $field = $column['Field'];
            $type = $column['Type'];
            $isNull = $column['Null'] === 'YES';
            $key = $column['Key'];
            $default = $column['Default'];
            $extra = $column['Extra'];
            $comment = $column['Comment'];
            
            // 构建字段描述
            $fieldDesc = "- {$field}: {$type}";
            
            if ($key === 'PRI') {
                $fieldDesc .= " (主键)";
            }
            
            if (strpos($extra, 'auto_increment') !== false) {
                $fieldDesc .= " (自增)";
            } else {
                // 非自增字段才加入可插入列表
                $insertableColumns[] = $field;
            }
            
            if (!$isNull) {
                $fieldDesc .= " (必填)";
            }
            
            if ($default !== null) {
                $fieldDesc .= " (默认值: {$default})";
            }
            
            if ($comment) {
                $fieldDesc .= " (备注: {$comment})";
            }
            
            $structure[] = $fieldDesc;
        }
        
        return [
            'description' => implode("\n", $structure),
            'insertable_columns' => $insertableColumns,
            'table_name' => $table
        ];
        
    } catch (Exception $e) {
        error_log("获取表结构失败: " . $e->getMessage());
        return null;
    }
}

/**
 * 构建AI提示词
 */
function buildAiPrompt($tableStructure, $description, $recordCount, $table) {
    $structureDesc = $tableStructure['description'];
    $insertableColumns = $tableStructure['insertable_columns'];
    $columnsList = implode(', ', $insertableColumns);
    
    return "请为以下MySQL数据表生成 {$recordCount} 条测试数据。

表名：{$table}
表结构：
{$structureDesc}

可插入的字段：{$columnsList}

数据要求：
{$description}

请直接返回可执行的INSERT语句，每条语句用分号结尾并换行，不需要其他说明文字。
请只使用可插入的字段，不要包含自增主键字段。

示例格式：
INSERT INTO {$table} ({$columnsList}) VALUES (...);

注意：
1. 必须使用表名 {$table}
2. 所有字符串值请用单引号包围
3. 日期时间格式使用 'YYYY-MM-DD HH:MM:SS'，日期使用 'YYYY-MM-DD'
4. 数值类型不需要引号
5. 确保数据符合字段类型和约束
6. 对于可空字段，可以使用NULL值
7. 生成的数据要真实合理，符合业务逻辑";
}
?> 