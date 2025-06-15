<?php
/**
 * AI SQL 执行专用脚本
 * 避免完整的phpMyAdmin初始化以防止HTML输出污染
 */

// 设置错误报告，但不显示错误
error_reporting(0);
ini_set('display_errors', 0);

// 设置JSON响应头
header('Content-Type: application/json; charset=utf-8');

// 确保没有其他输出
if (ob_get_level()) {
    ob_end_clean();
}

try {
    // 检查请求方法
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo json_encode(['success' => false, 'message' => '只支持POST请求']);
        exit;
    }
    
    // 检查参数
    $ai_sql = $_POST['ai_sql'] ?? '';
    $db = $_POST['db'] ?? '';
    
    if (empty($ai_sql) || empty($db)) {
        echo json_encode(['success' => false, 'message' => '缺少必要参数']);
        exit;
    }
    
    // 验证SQL是CREATE TABLE语句
    if (stripos($ai_sql, 'CREATE TABLE') === false) {
        echo json_encode(['success' => false, 'message' => '只允许执行CREATE TABLE语句']);
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
    
    // 创建数据库连接
    $mysqli = new mysqli($host, $username, $password, '', $port);
    
    if ($mysqli->connect_error) {
        echo json_encode(['success' => false, 'message' => '数据库连接失败: ' . $mysqli->connect_error]);
        exit;
    }
    
    // 设置字符集
    $mysqli->set_charset('utf8mb4');
    
    // 选择数据库
    if (!$mysqli->select_db($db)) {
        echo json_encode(['success' => false, 'message' => "无法选择数据库 $db: " . $mysqli->error]);
        $mysqli->close();
        exit;
    }
    
    // 执行SQL
    $result = $mysqli->query($ai_sql);
    
    if ($result === false) {
        echo json_encode(['success' => false, 'message' => "SQL执行失败: " . $mysqli->error]);
        $mysqli->close();
        exit;
    }
    
    // 提取表名
    $tableName = 'table';
    if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?(\w+)`?\.?`?(\w+)`?|`?(\w+)`?)/i', $ai_sql, $matches)) {
        if (!empty($matches[3])) {
            $tableName = $matches[3]; // 只有表名
        } elseif (!empty($matches[2])) {
            $tableName = $matches[2]; // 数据库.表名格式
        }
    }
    
    $mysqli->close();
    
    // 返回成功结果
    echo json_encode([
        'success' => true, 
        'message' => "表 $tableName 创建成功",
        'redirect' => "index.php?route=/table/structure&db=" . urlencode($db) . "&table=" . urlencode($tableName)
    ]);
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => '执行错误: ' . $e->getMessage()]);
} catch (Error $e) {
    echo json_encode(['success' => false, 'message' => '系统错误: ' . $e->getMessage()]);
}
?> 