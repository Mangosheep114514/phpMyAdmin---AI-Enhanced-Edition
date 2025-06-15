<?php
/**
 * 独立的AI SQL生成接口
 * 绕过phpMyAdmin的CSRF验证机制
 */

// 基础安全检查
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// 设置正确的JSON响应头
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');

// 模拟phpMyAdmin环境
define('PHPMYADMIN', true);

try {
    // 引入API配置
    require_once __DIR__ . '/libraries/api_config.php';
    
    // 获取用户输入
    $userPrompt = isset($_POST['ai_prompt']) ? trim($_POST['ai_prompt']) : '';
    $debug = !empty($_POST['debug']);
    
    if ($debug) {
        error_log("AI Generate API: User prompt = " . $userPrompt);
    }
    
    // 验证输入
    if (empty($userPrompt)) {
        throw new Exception('请输入表结构描述');
    }
    
    // 生成AI SQL
    $promptTemplates = getAiPromptTemplate($userPrompt);
    $data = createApiRequest($promptTemplates['user'], $promptTemplates['system']);
    $content = sendApiRequest($data);
    
    if ($debug) {
        error_log("AI Generate API: Raw response length = " . strlen($content));
    }
    
    if (!$content) {
        throw new Exception('AI API返回空响应');
    }
    
    // 清理SQL
    $aiGeneratedSql = trim($content);
    $aiGeneratedSql = preg_replace('/^```sql\s*/i', '', $aiGeneratedSql);
    $aiGeneratedSql = preg_replace('/^```\s*/m', '', $aiGeneratedSql);
    $aiGeneratedSql = preg_replace('/```\s*$/m', '', $aiGeneratedSql);
    $aiGeneratedSql = trim($aiGeneratedSql);
    
    // 修复常见的SQL语法错误
    $aiGeneratedSql = fixSqlSyntax($aiGeneratedSql);
    
    // 验证SQL
    if (stripos($aiGeneratedSql, 'CREATE TABLE') === false) {
        throw new Exception('生成的内容不是有效的CREATE TABLE语句');
    }
    
    // 简单的表结构解析
    $tablePreview = null;
    if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?(\w+)`?)/i', $aiGeneratedSql, $matches)) {
        $tableName = $matches[1];
        
        // 提取字段信息（简化版）
        $columns = [];
        if (preg_match('/\(\s*(.*?)\s*\)(?:\s*ENGINE\s*=|$)/is', $aiGeneratedSql, $fieldMatches)) {
            $fieldsSection = $fieldMatches[1];
            $lines = explode(',', $fieldsSection);
            
            foreach ($lines as $line) {
                $line = trim($line);
                if (preg_match('/^\s*`?(\w+)`?\s+([^\s]+)(.*)$/i', $line, $fieldMatch)) {
                    if (!preg_match('/^\s*(PRIMARY\s+KEY|UNIQUE|INDEX|KEY|CONSTRAINT)/i', $line)) {
                        $columns[] = [
                            'name' => $fieldMatch[1],
                            'type' => $fieldMatch[2],
                            'null' => !preg_match('/NOT\s+NULL/i', $fieldMatch[3]),
                            'extra' => preg_match('/AUTO_INCREMENT/i', $fieldMatch[3]) ? 'AUTO_INCREMENT' : ''
                        ];
                    }
                }
            }
        }
        
        $tablePreview = [
            'table_name' => $tableName,
            'columns' => $columns,
            'engine' => 'InnoDB',
            'charset' => 'utf8mb4'
        ];
    }
    
    // 成功响应
    $response = [
        'success' => true,
        'ai_generated_sql' => $aiGeneratedSql,
        'ai_success' => 'AI SQL生成成功！请检查生成的表结构。',
        'ai_table_preview' => $tablePreview,
        'user_prompt' => $userPrompt
    ];
    
    if ($debug) {
        $response['debug_info'] = [
            'sql_length' => strlen($aiGeneratedSql),
            'has_create_table' => stripos($aiGeneratedSql, 'CREATE TABLE') !== false,
            'table_preview_generated' => !empty($tablePreview)
        ];
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
    
} catch (Exception $e) {
    // 错误响应
    $response = [
        'success' => false,
        'error' => $e->getMessage()
    ];
    
    if (!empty($_POST['debug'])) {
        $response['debug_info'] = [
            'exception_file' => $e->getFile(),
            'exception_line' => $e->getLine(),
            'exception_trace' => $e->getTraceAsString()
        ];
    }
    
    echo json_encode($response, JSON_UNESCAPED_UNICODE);
}

/**
 * 修复SQL语法错误
 */
function fixSqlSyntax($sql) {
    // 首先检查ENGINE是否在字段列表内部（错误位置）
    if (preg_match('/,\s*ENGINE\s*=\s*([a-zA-Z0-9_]+)(?:\s+DEFAULT\s+CHARSET\s*=\s*([a-zA-Z0-9_]+))?\s*\)/i', $sql, $matches)) {
        // ENGINE在字段列表内部，需要移动到外部
        $engine = $matches[1];
        $charset = isset($matches[2]) ? $matches[2] : 'utf8mb4';
        
        // 移除内部的ENGINE声明
        $sql = preg_replace('/,\s*ENGINE\s*=\s*[a-zA-Z0-9_]+(?:\s+DEFAULT\s+CHARSET\s*=\s*[a-zA-Z0-9_]+)?\s*\)/i', ')', $sql);
        
        // 在右括号后添加ENGINE和CHARSET
        $sql = preg_replace('/\)\s*;?\s*$/', ') ENGINE=' . $engine . ' DEFAULT CHARSET=' . $charset . ';', $sql);
    }
    
    // 修复其他常见的ENGINE和CHARSET语法错误
    $sql = preg_replace('/,\s*CHARSET\s*=\s*([a-zA-Z0-9_]+)/i', ' DEFAULT CHARSET=$1', $sql);
    $sql = preg_replace('/ENGINE\s*=\s*([a-zA-Z0-9_]+)\s*,\s*CHARSET\s*=\s*([a-zA-Z0-9_]+)/i', 'ENGINE=$1 DEFAULT CHARSET=$2', $sql);
    $sql = preg_replace('/ENGINE\s*=\s*([a-zA-Z0-9_]+)\s*CHARSET\s*=\s*([a-zA-Z0-9_]+)/i', 'ENGINE=$1 DEFAULT CHARSET=$2', $sql);
    
    // 确保没有ENGINE声明的表添加默认的ENGINE和CHARSET
    if (!preg_match('/ENGINE\s*=/i', $sql)) {
        $sql = preg_replace('/\)\s*;?\s*$/', ') ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;', $sql);
    }
    
    // 确保末尾有分号
    $sql = preg_replace('/;\s*$/', '', $sql) . ';';
    
    return $sql;
}
?> 