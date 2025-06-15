<?php
/**
 * AI SQL 执行调试版本
 */

// 简单的错误处理
header('Content-Type: application/json; charset=utf-8');

try {
    // 检查请求方法
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(['success' => false, 'message' => '只支持POST请求', 'debug' => 'method_check']);
        exit;
    }
    
    // 检查参数
    $ai_sql = $_POST['ai_sql'] ?? '';
    $db = $_POST['db'] ?? '';
    
    if (empty($ai_sql) || empty($db)) {
        echo json_encode(['success' => false, 'message' => '缺少参数', 'debug' => 'params_check', 'ai_sql' => $ai_sql, 'db' => $db]);
        exit;
    }
    
    // 验证SQL
    if (stripos($ai_sql, 'CREATE TABLE') === false) {
        echo json_encode(['success' => false, 'message' => '只允许CREATE TABLE语句', 'debug' => 'sql_validation']);
        exit;
    }
    
    // 引入PhpMyAdmin配置
    require_once 'config.inc.php';
    global $cfg;
    
    // 使用PhpMyAdmin配置连接数据库
    $server = $cfg['Servers'][1];
    $host = $server['host'] ?? 'localhost';
    $username = $server['user'] ?? 'root';
    $password = $server['password'] ?? '';
    $port = $server['port'] ?? 3306;
    
    // 尝试连接数据库
    $mysqli = @new mysqli($host, $username, $password, '', $port);
    
    if ($mysqli->connect_error) {
        echo json_encode(['success' => false, 'message' => '数据库连接失败: ' . $mysqli->connect_error, 'debug' => 'connection_failed']);
        exit;
    }
    
    // 选择数据库
    if (!$mysqli->select_db($db)) {
        echo json_encode(['success' => false, 'message' => "无法选择数据库 $db: " . $mysqli->error, 'debug' => 'database_select_failed']);
        $mysqli->close();
        exit;
    }
    
    // 执行SQL
    $result = $mysqli->query($ai_sql);
    
    if ($result === false) {
        echo json_encode(['success' => false, 'message' => "SQL执行失败: " . $mysqli->error, 'debug' => 'sql_execution_failed']);
        $mysqli->close();
        exit;
    }
    
    // 提取表名
    $tableName = 'unknown_table';
    if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?(\w+)`?\.?`?(\w+)`?|`?(\w+)`?)/i', $ai_sql, $matches)) {
        if (!empty($matches[3])) {
            $tableName = $matches[3];
        } elseif (!empty($matches[2])) {
            $tableName = $matches[2];
        }
    }
    
    $mysqli->close();
    
    // 返回成功结果
    echo json_encode([
        'success' => true, 
        'message' => "表 $tableName 创建成功",
        'redirect' => "index.php?route=/table/structure&db=" . urlencode($db) . "&table=" . urlencode($tableName),
        'debug' => 'success',
        'table_name' => $tableName
    ], JSON_UNESCAPED_UNICODE);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => '异常: ' . $e->getMessage(), 'debug' => 'exception']);
} catch (Error $e) {
    echo json_encode(['success' => false, 'message' => '错误: ' . $e->getMessage(), 'debug' => 'error']);
}
?> 