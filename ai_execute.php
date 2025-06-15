<?php
/**
 * 独立的AI SQL执行接口
 * 用于创建AI生成的表
 */

// 基础安全检查
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method not allowed');
}

// 设置正确的JSON响应头
header('Content-Type: application/json; charset=utf-8');

// 模拟phpMyAdmin环境
define('PHPMYADMIN', true);

try {
    // 引入phpMyAdmin核心文件
    require_once __DIR__ . '/libraries/common.inc.php';
    
    // 获取参数
    $sql = isset($_POST['ai_sql']) ? trim($_POST['ai_sql']) : '';
    $db = isset($_POST['db']) ? trim($_POST['db']) : '';
    
    // 验证输入
    if (empty($sql)) {
        throw new Exception('No SQL provided');
    }
    
    if (empty($db)) {
        throw new Exception('No database specified');
    }
    
    // 验证SQL是CREATE TABLE语句
    if (stripos($sql, 'CREATE TABLE') === false) {
        throw new Exception('Only CREATE TABLE statements are allowed');
    }
    
    // 获取数据库连接
    global $dbi;
    if (!$dbi) {
        throw new Exception('Database connection not available');
    }
    
    // 选择数据库
    if (!$dbi->selectDb($db)) {
        throw new Exception('Failed to select database: ' . $db);
    }
    
    // 执行SQL
    $result = $dbi->tryQuery($sql);
    
    if ($result) {
        // 提取表名
        $tableName = 'table';
        if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?(\w+)`?)/i', $sql, $matches)) {
            $tableName = $matches[1];
        }
        
        // 成功响应
        echo json_encode([
            'success' => true,
            'message' => sprintf('Table %s has been created successfully', $tableName),
            'redirect' => 'index.php?route=/database/structure&db=' . urlencode($db)
        ], JSON_UNESCAPED_UNICODE);
    } else {
        throw new Exception('Failed to execute SQL: ' . $dbi->getError());
    }
    
} catch (Exception $e) {
    // 错误响应
    echo json_encode([
        'success' => false,
        'message' => 'Error creating table: ' . $e->getMessage()
    ], JSON_UNESCAPED_UNICODE);
}
?> 