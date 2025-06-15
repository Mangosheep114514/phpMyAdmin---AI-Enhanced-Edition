<?php
session_name("panzuowen_session");
session_start();

// 检查用户是否已登录
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once 'includes/db_connect.php';
require_once 'includes/api_config.php';
require_once 'includes/user_database.php';

// 设置页面标题
$page_title = "任意门 - 数据库设想";
$page_description = "通过自然语言描述创建数据库表结构，或导入已有SQL";

// 处理表单提交
$generated_sql = '';
$error_message = '';
$success_message = '';
$table_created = false;
$table_name = '';
$custom_table_name = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_prompt = isset($_POST['user_prompt']) ? trim($_POST['user_prompt']) : '';
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    $user_id = $_SESSION['user_id'];
    
    // 处理AI生成SQL
    if ($action === 'generate_sql' && !empty($user_prompt)) {
        try {
            // 构建AI提示词
            $system_prompt = "你是一个专业的数据库设计师。根据用户的自然语言描述，生成MySQL CREATE TABLE语句。

要求：
1. 表名使用英文，格式简洁明了，不需要添加前缀
2. 字段名使用英文下划线格式
3. 必须包含id字段作为主键(AUTO_INCREMENT)
4. 必须包含created_time和updated_time时间戳字段
5. 根据用户描述添加合适的字段和数据类型
6. 使用utf8mb4字符集
7. 只返回纯SQL语句，不要包含```sql```或任何其他格式标记
8. 不要添加任何解释或注释

用户描述：{$user_prompt}";

            $prompt = "请为以下需求生成MySQL CREATE TABLE语句：\n" . $user_prompt;
            
            // 调用AI API生成SQL
            $data = createApiRequest($prompt, $system_prompt);
            $content = sendApiRequest($data);
            
            if ($content) {
                // 清理和验证SQL语句
                $generated_sql = trim($content);
                
                // 移除markdown代码块标记
                $generated_sql = preg_replace('/^```sql\s*/i', '', $generated_sql);
                $generated_sql = preg_replace('/^```\s*/m', '', $generated_sql);
                $generated_sql = preg_replace('/```\s*$/m', '', $generated_sql);
                $generated_sql = trim($generated_sql);
                
                // 使用processSqlImport函数处理AI生成的SQL
                $processed_sql = processSqlImport($generated_sql);
                if ($processed_sql) {
                    $_SESSION['generated_sql'] = $processed_sql['sql'];
                    $_SESSION['table_name'] = $processed_sql['table_name'];
                    $_SESSION['user_prompt'] = $user_prompt;
                    
                    // 保存多表信息
                    if ($processed_sql['is_multi_table']) {
                        $_SESSION['tables_info'] = $processed_sql['tables_info'];
                        $_SESSION['is_multi_table'] = true;
                        $_SESSION['total_tables'] = $processed_sql['total_tables'];
                        $success_message = "AI生成了 {$processed_sql['total_tables']} 个相关表的SQL！当前显示第一个表，您可以选择要创建的表。";
                    } else {
                        $_SESSION['is_multi_table'] = false;
                    $success_message = "SQL语句生成成功！您可以自定义表名后执行。";
                    }
                    
                    $generated_sql = $processed_sql['sql'];
                    $table_name = $processed_sql['table_name'];
                } else {
                    throw new Exception("AI生成的SQL语句格式不正确");
                }
            } else {
                throw new Exception("AI API返回为空");
            }
        } catch (Exception $e) {
            $error_message = "生成SQL失败：" . $e->getMessage();
            error_log("任意门SQL生成错误：" . $e->getMessage());
        }
    }
    
    // 处理SQL导入（粘贴）
    if ($action === 'import_sql_text' && isset($_POST['sql_content'])) {
        $sql_content = trim($_POST['sql_content']);
        if (!empty($sql_content)) {
            try {
                // 验证和处理SQL
                $processed_sql = processSqlImport($sql_content);
                if ($processed_sql) {
                    $_SESSION['generated_sql'] = $processed_sql['sql'];
                    $_SESSION['table_name'] = $processed_sql['table_name'];
                    $_SESSION['user_prompt'] = $processed_sql['sql']; // 保存实际SQL语句到原始设想
                    
                    // 保存多表信息
                    if ($processed_sql['is_multi_table']) {
                        $_SESSION['tables_info'] = $processed_sql['tables_info'];
                        $_SESSION['is_multi_table'] = true;
                        $_SESSION['total_tables'] = $processed_sql['total_tables'];
                        $success_message = "检测到 {$processed_sql['total_tables']} 个表的SQL！当前显示第一个表，您可以选择要创建的表。";
                    } else {
                        $_SESSION['is_multi_table'] = false;
                    $success_message = "SQL导入成功！检查无误后可执行建表。";
                    }
                    
                    $generated_sql = $processed_sql['sql'];
                    $table_name = $processed_sql['table_name'];
                } else {
                    throw new Exception("SQL语句格式不正确或不包含有效的CREATE TABLE语句");
                }
            } catch (Exception $e) {
                $error_message = "SQL导入失败：" . $e->getMessage();
            }
        } else {
            $error_message = "请输入SQL语句内容";
        }
    }
    
    // 处理SQL文件上传
    if ($action === 'import_sql_file' && isset($_FILES['sql_file'])) {
        try {
            $file = $_FILES['sql_file'];
            
            // 验证文件
            if ($file['error'] !== UPLOAD_ERR_OK) {
                throw new Exception("文件上传失败，错误代码：" . $file['error']);
            }
            
            if ($file['size'] > 5 * 1024 * 1024) { // 5MB限制
                throw new Exception("文件大小不能超过5MB");
            }
            
            $file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (!in_array($file_extension, ['sql', 'txt'])) {
                throw new Exception("只允许上传.sql或.txt文件");
            }
            
            // 生成时间戳文件名
            $timestamp = date('Y-m-d_H-i-s');
            $filename = $timestamp . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file['name']);
            $upload_path = "uploads/sql/" . $filename;
            
            // 移动文件
            if (move_uploaded_file($file['tmp_name'], $upload_path)) {
                // 读取文件内容
                $sql_content = file_get_contents($upload_path);
                
                // 处理SQL
                $processed_sql = processSqlImport($sql_content);
                if ($processed_sql) {
                    $_SESSION['generated_sql'] = $processed_sql['sql'];
                    $_SESSION['table_name'] = $processed_sql['table_name'];
                    $_SESSION['user_prompt'] = "-- 从文件导入：" . $file['name'] . "\n" . $processed_sql['sql']; // 保存文件信息和SQL语句
                    
                    // 保存多表信息
                    if ($processed_sql['is_multi_table']) {
                        $_SESSION['tables_info'] = $processed_sql['tables_info'];
                        $_SESSION['is_multi_table'] = true;
                        $_SESSION['total_tables'] = $processed_sql['total_tables'];
                        $success_message = "文件导入成功！检测到 {$processed_sql['total_tables']} 个表，文件已保存为：" . $filename;
                    } else {
                        $_SESSION['is_multi_table'] = false;
                    $success_message = "SQL文件导入成功！文件已保存为：" . $filename;
                    }
                    
                    $generated_sql = $processed_sql['sql'];
                    $table_name = $processed_sql['table_name'];
                } else {
                    unlink($upload_path); // 删除无效文件
                    throw new Exception("文件中不包含有效的CREATE TABLE语句");
                }
            } else {
                throw new Exception("文件保存失败");
            }
        } catch (Exception $e) {
            $error_message = "文件导入失败：" . $e->getMessage();
        }
    }
    
    // 处理表选择（多表情况下）
    if ($action === 'select_table' && isset($_POST['selected_table_index'])) {
        $selected_index = intval($_POST['selected_table_index']);
        $tables_info = $_SESSION['tables_info'] ?? [];
        
        if (isset($tables_info[$selected_index])) {
            $_SESSION['generated_sql'] = $tables_info[$selected_index]['sql'];
            $_SESSION['table_name'] = $tables_info[$selected_index]['table_name'];
            $success_message = "已选择表：" . $tables_info[$selected_index]['table_name'];
            $generated_sql = $tables_info[$selected_index]['sql'];
            $table_name = $tables_info[$selected_index]['table_name'];
        } else {
            $error_message = "选择的表不存在";
        }
    }
    
    // 处理执行SQL（包含自定义表名）
    if ($action === 'execute_sql' && isset($_SESSION['generated_sql'])) {
        try {
            $sql = $_SESSION['generated_sql'];
            $original_table_name = $_SESSION['table_name'];
            $user_prompt = $_SESSION['user_prompt'];
            $custom_table_name = isset($_POST['custom_table_name']) ? trim($_POST['custom_table_name']) : '';
            
            // 如果用户提供了自定义表名，则替换SQL中的表名
            if (!empty($custom_table_name)) {
                if (!preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $custom_table_name)) {
                    throw new Exception("表名格式不正确，只能包含字母、数字和下划线，且不能以数字开头");
                }
                
                // 替换SQL中的表名
                $sql = preg_replace('/CREATE TABLE\s+(?:IF NOT EXISTS\s+)?`?' . preg_quote($original_table_name, '/') . '`?/i', 
                                  'CREATE TABLE `' . $custom_table_name . '`', $sql);
                $table_name = $custom_table_name;
            } else {
                $table_name = $original_table_name;
            }
            
            // 检查表是否已存在（在用户数据库中）
            $user_tables = getUserTables($user_id);
            if (in_array($table_name, $user_tables)) {
                throw new Exception("表名 '{$table_name}' 已存在，请使用不同的表名");
            }
            
            // 优化SQL - 处理可能的索引长度问题
            $optimized_sql = optimizeSqlForMySQL($sql);
            
            // 在用户数据库中执行CREATE TABLE语句
            $result = executeInUserDatabase($user_id, $optimized_sql);
            
            if ($result !== false) {
                // 记录到主数据库的user_tables表
                $insert_sql = "INSERT INTO user_tables (user_id, table_name, table_schema, original_prompt, description) VALUES (?, ?, ?, ?, ?)";
                $insert_stmt = mysqli_prepare($conn, $insert_sql);
                $description = "用户在独立数据库中创建的表";
                mysqli_stmt_bind_param($insert_stmt, "issss", $user_id, $table_name, $optimized_sql, $user_prompt, $description);
                
                if (mysqli_stmt_execute($insert_stmt)) {
                    $success_message = "数据表 '{$table_name}' 在您的专属数据库中创建成功！";
                    $table_created = true;
                    
                    // 清理session数据
                    unset($_SESSION['generated_sql']);
                    unset($_SESSION['table_name']);
                    unset($_SESSION['user_prompt']);
                    unset($_SESSION['tables_info']);
                    unset($_SESSION['is_multi_table']);
                    unset($_SESSION['total_tables']);
                } else {
                    throw new Exception("记录表信息失败：" . mysqli_error($conn));
                }
            } else {
                throw new Exception("在用户数据库中执行SQL失败");
            }
        } catch (Exception $e) {
            $error_msg = $e->getMessage();
            
            // 处理特定的MySQL错误
            if (strpos($error_msg, 'Specified key was too long') !== false) {
                $error_msg = "索引键长度超限。建议：1) 将长VARCHAR字段改为TEXT类型 2) 减少VARCHAR字段长度到250字符以下";
            } elseif (strpos($error_msg, 'Duplicate entry') !== false) {
                $error_msg = "表名已存在或记录重复，请使用不同的表名";
            }
            
            $error_message = "创建表失败：" . $error_msg;
            error_log("任意门建表错误：" . $error_msg);
        }
    }
    
    // 处理批量创建所有表
    if ($action === 'execute_all_tables' && isset($_SESSION['tables_info'])) {
        try {
            $tables_info = $_SESSION['tables_info'];
            $user_prompt = $_SESSION['user_prompt'];
            $created_tables = [];
            $failed_tables = [];
            $skipped_tables = [];
            
            // 获取最新的用户表列表
            $user_tables = getUserTables($user_id);
            
            // 检查是否有表名冲突并收集要创建的表
            $tables_to_create = [];
            foreach ($tables_info as $index => $table_info) {
                $table_name = $table_info['table_name'];
                if (in_array($table_name, $user_tables)) {
                    $skipped_tables[] = [
                        'name' => $table_name,
                        'index' => $index + 1,
                        'reason' => '表已存在'
                    ];
                } else {
                    $tables_to_create[] = $table_info;
                }
            }
            
            // 如果所有表都已存在
            if (empty($tables_to_create)) {
                throw new Exception("所有表都已存在，无需创建。如需重新创建，请先删除现有表。");
            }
            
            // 按顺序创建每个表
            foreach ($tables_to_create as $index => $table_info) {
                try {
                    $table_name = $table_info['table_name'];
                    $sql = $table_info['sql'];
                    
                    // 优化SQL - 处理可能的索引长度问题
                    $optimized_sql = optimizeSqlForMySQL($sql);
                    
                    // 在用户数据库中执行CREATE TABLE语句
                    $result = executeInUserDatabase($user_id, $optimized_sql);
                    
                    if ($result !== false) {
                        // 记录到主数据库的user_tables表
                        $insert_sql = "INSERT INTO user_tables (user_id, table_name, table_schema, original_prompt, description) VALUES (?, ?, ?, ?, ?)";
                        $insert_stmt = mysqli_prepare($conn, $insert_sql);
                        $description = "批量创建的表 (" . ($index + 1) . "/" . count($tables_to_create) . ")";
                        mysqli_stmt_bind_param($insert_stmt, "issss", $user_id, $table_name, $optimized_sql, $user_prompt, $description);
                        
                        if (mysqli_stmt_execute($insert_stmt)) {
                            $created_tables[] = [
                                'name' => $table_name,
                                'index' => $index + 1,
                                'has_foreign_key' => $table_info['has_foreign_key']
                            ];
                        } else {
                            $mysql_error = mysqli_error($conn);
                            // 如果是重复键错误，说明表已经在记录中了，但实际表可能不存在
                            if (strpos($mysql_error, 'Duplicate entry') !== false) {
                                $failed_tables[] = [
                                    'name' => $table_name,
                                    'index' => $index + 1,
                                    'error' => '表记录已存在，请检查表管理器'
                                ];
                            } else {
                                throw new Exception("记录表信息失败：" . $mysql_error);
                            }
                        }
                    } else {
                        throw new Exception("执行SQL失败");
                    }
                } catch (Exception $e) {
                    $error_msg = $e->getMessage();
                    
                    // 处理特定的MySQL错误
                    if (strpos($error_msg, 'Specified key was too long') !== false) {
                        $error_msg = "索引键长度超限，请减少VARCHAR字段长度或使用TEXT类型";
                    } elseif (strpos($error_msg, 'Duplicate entry') !== false) {
                        $error_msg = "表名冲突或记录重复";
                    }
                    
                    $failed_tables[] = [
                        'name' => $table_info['table_name'],
                        'index' => $index + 1,
                        'error' => $error_msg
                    ];
                    // 继续创建其他表，不中断流程
                }
            }
            
            // 生成结果消息
            $total_processed = count($created_tables) + count($failed_tables) + count($skipped_tables);
            
            if (!empty($created_tables) && empty($failed_tables) && empty($skipped_tables)) {
                $success_message = "🎉 所有 " . count($created_tables) . " 个表创建成功！已按依赖关系顺序创建：" . 
                                 implode(', ', array_column($created_tables, 'name'));
                $table_created = true;
            } elseif (!empty($created_tables)) {
                $success_message = "✅ " . count($created_tables) . " 个表创建成功：" . 
                                 implode(', ', array_column($created_tables, 'name'));
                
                $issues = [];
                if (!empty($failed_tables)) {
                    $issues[] = "❌ " . count($failed_tables) . " 个表创建失败";
                }
                if (!empty($skipped_tables)) {
                    $issues[] = "⚠️ " . count($skipped_tables) . " 个表已存在，已跳过";
                }
                
                if (!empty($issues)) {
                    $error_message = implode('；', $issues) . "。详情请查看下方。";
                }
                $table_created = true;
            } else {
                if (!empty($skipped_tables)) {
                    $error_message = "所有表都已存在：" . implode(', ', array_column($skipped_tables, 'name'));
                } else {
                    $error_message = "所有表创建失败：" . implode('; ', array_column($failed_tables, 'error'));
                }
            }
            
            // 清理session数据
            unset($_SESSION['generated_sql']);
            unset($_SESSION['table_name']);
            unset($_SESSION['user_prompt']);
            unset($_SESSION['tables_info']);
            unset($_SESSION['is_multi_table']);
            unset($_SESSION['total_tables']);
            
        } catch (Exception $e) {
            $error_message = "批量创建表失败：" . $e->getMessage();
            error_log("任意门批量建表错误：" . $e->getMessage());
        }
    }
}

// 获取生成的SQL（如果存在）
if (isset($_SESSION['generated_sql'])) {
    $generated_sql = $_SESSION['generated_sql'];
    $table_name = $_SESSION['table_name'] ?? '';
}

/**
 * 处理导入的SQL，验证并提取CREATE TABLE语句
 */
function processSqlImport($sql_content) {
    // 保留原始格式的SQL内容
    $original_sql = trim($sql_content);
    
    // 修正常见的SQL语法问题
    $corrected_sql = $original_sql;
    
    // 修正CHARSET语法错误
    $corrected_sql = preg_replace('/\)\s*CHARSET\s*=\s*([^;]+);?/i', ') DEFAULT CHARSET=$1;', $corrected_sql);
    $corrected_sql = preg_replace('/\)\s*CHARACTER\s+SET\s+([^;]+);?/i', ') DEFAULT CHARSET=$1;', $corrected_sql);
    
    // 创建一个副本用于解析
    $sql_for_parsing = trim($corrected_sql);
    
    // 移除注释（仅用于解析）
    $sql_for_parsing = preg_replace('/--.*$/m', '', $sql_for_parsing);
    $sql_for_parsing = preg_replace('/\/\*.*?\*\//s', '', $sql_for_parsing);
    
    // 分割多个CREATE TABLE语句 - 改进的分割逻辑
    $create_table_statements = [];
    
    // 使用更精确的正则表达式匹配CREATE TABLE语句
    preg_match_all('/CREATE\s+TABLE[^;]+(?:\([^)]*(?:\([^)]*\)[^)]*)*\)[^;]*)?;?/is', $corrected_sql, $matches);
    
    if (empty($matches[0])) {
        return false;
    }
    
    // 处理每个CREATE TABLE语句
    $tables_info = [];
    foreach ($matches[0] as $statement) {
        $statement = trim($statement);
        if (empty($statement)) continue;
        
            // 提取表名
        if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?`?(\w+)`?/i', $statement, $table_matches)) {
            $table_name = $table_matches[1];
            
            // 确保语句以分号结尾
            if (!preg_match('/;\s*$/', $statement)) {
                $statement .= ';';
            }
            
            // 检查是否有外键约束
            $has_foreign_key = preg_match('/FOREIGN\s+KEY/i', $statement);
            
            $tables_info[] = [
                'table_name' => $table_name,
                'sql' => $statement,
                'has_foreign_key' => $has_foreign_key,
                'original_order' => count($tables_info)
            ];
        }
    }
    
    if (empty($tables_info)) {
    return false;
    }
    
    // 如果只有一个表，直接返回
    if (count($tables_info) == 1) {
        return [
            'sql' => $tables_info[0]['sql'],
            'table_name' => $tables_info[0]['table_name'],
            'tables_info' => $tables_info,
            'is_multi_table' => false
        ];
    }
    
    // 多表情况：按依赖关系排序（没有外键的表在前面）
    usort($tables_info, function($a, $b) {
        if ($a['has_foreign_key'] == $b['has_foreign_key']) {
            return $a['original_order'] - $b['original_order'];
        }
        return $a['has_foreign_key'] ? 1 : -1;
    });
    
    // 返回多表信息
    return [
        'sql' => $tables_info[0]['sql'], // 默认返回第一个表
        'table_name' => $tables_info[0]['table_name'],
        'tables_info' => $tables_info,
        'is_multi_table' => true,
        'total_tables' => count($tables_info)
    ];
}

/**
 * 优化SQL语句以适配MySQL限制
 */
function optimizeSqlForMySQL($sql) {
    // 修正CHARSET语法错误
    $optimized_sql = preg_replace('/\)\s*CHARSET\s*=\s*([^;]+);?/i', ') DEFAULT CHARSET=$1;', $sql);
    $optimized_sql = preg_replace('/\)\s*CHARACTER\s+SET\s+([^;]+);?/i', ') DEFAULT CHARSET=$1;', $optimized_sql);
    
    // 处理可能导致索引键过长的VARCHAR字段
    // MySQL utf8mb4字符集下，VARCHAR字段创建索引时每个字符占用4字节
    // 索引键最大长度为1000字节，所以VARCHAR字段最大索引长度约为250字符
    
    // 将过长的VARCHAR字段替换为TEXT类型或缩短长度
    $optimized_sql = preg_replace('/VARCHAR\(([5-9]\d{2,}|[1-9]\d{3,})\)/i', 'TEXT', $optimized_sql);
    
    // 将VARCHAR(255)及以上的字段替换为TEXT，避免索引问题
    $optimized_sql = preg_replace('/VARCHAR\((25[5-9]|2[6-9]\d|[3-9]\d{2,})\)/i', 'TEXT', $optimized_sql);
    
    // 处理可能的UNIQUE约束在TEXT字段上的问题
    // MySQL不允许在TEXT字段上创建UNIQUE索引而不指定长度
    // 这个需要更复杂的处理，暂时移除TEXT字段的UNIQUE约束
    $optimized_sql = preg_replace('/(\w+)\s+TEXT\s+UNIQUE/i', '$1 TEXT', $optimized_sql);
    $optimized_sql = preg_replace('/(\w+)\s+TEXT\s+NOT\s+NULL\s+UNIQUE/i', '$1 TEXT NOT NULL', $optimized_sql);
    
    return $optimized_sql;
}

?>

<!DOCTYPE html>
<html lang="zh-CN" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> - 盼作文网</title>
    <link href="css/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gray-900 text-gray-100">
    <?php include 'includes/header.php'; ?>

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-8">
                <span class="bg-gradient-to-r from-[#00d2ff] to-[#3a7bd5] text-transparent bg-clip-text">
                    🚪 任意门 - 数据库设想
                </span>
            </h1>
            
            <div class="text-center mb-8">
                <p class="text-gray-300 text-lg">
                    用自然语言描述你的想法，AI将为你生成相应的数据库表结构，或直接导入现有的SQL
                </p>
            </div>

            <?php if (!empty($error_message)): ?>
                <div class="bg-red-900 text-red-100 p-4 rounded-lg mb-6 shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <?php echo $error_message; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($success_message)): ?>
                <div class="bg-green-900 text-green-100 p-4 rounded-lg mb-6 shadow-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <?php echo $success_message; ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- 左侧：输入区域 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                    <!-- 选项卡导航 -->
                    <div class="flex border-b border-gray-700 mb-6">
                        <button onclick="switchTab('ai_generate')" 
                                id="tab-ai_generate"
                                class="px-4 py-2 text-sm font-medium border-b-2 border-blue-500 text-blue-400 bg-gray-700">
                            <i class="fas fa-magic mr-2"></i>AI生成
                        </button>
                        <button onclick="switchTab('import_sql')" 
                                id="tab-import_sql"
                                class="px-4 py-2 text-sm font-medium border-b-2 border-transparent text-gray-400 hover:text-gray-200">
                            <i class="fas fa-upload mr-2"></i>导入SQL
                        </button>
                    </div>

                    <!-- AI生成选项卡 -->
                    <div id="content-ai_generate" class="tab-content">
                        <h2 class="text-2xl font-semibold mb-4 text-blue-300">
                            <i class="fas fa-lightbulb mr-2"></i>描述你的设想
                        </h2>
                        
                        <form method="post" class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    请用自然语言描述你想要的数据结构：
                                </label>
                                <textarea name="user_prompt" rows="8" 
                                          class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-100 
                                                 focus:outline-none focus:border-blue-500 resize-none"
                                          placeholder="例如：我想创建一个用户评论系统，需要存储评论内容、评论者姓名、评论时间、点赞数等信息..."
                                          required><?php echo isset($_POST['user_prompt']) ? htmlspecialchars($_POST['user_prompt']) : ''; ?></textarea>
                            </div>

                            <button type="submit" name="action" value="generate_sql"
                                    class="w-full px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg 
                                           hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 
                                           focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900 
                                           font-medium transition-all duration-200">
                                <i class="fas fa-magic mr-2"></i>生成SQL表结构
                            </button>
                        </form>
                    </div>

                    <!-- 导入SQL选项卡 -->
                    <div id="content-import_sql" class="tab-content hidden">
                        <h2 class="text-2xl font-semibold mb-4 text-purple-300">
                            <i class="fas fa-upload mr-2"></i>导入SQL语句
                        </h2>
                        
                        <div class="space-y-6">
                            <!-- 粘贴SQL -->
                            <div class="bg-gray-700 rounded-lg p-4">
                                <h3 class="text-lg font-medium text-gray-200 mb-3">
                                    <i class="fas fa-paste mr-2"></i>粘贴SQL语句
                                </h3>
                                <form method="post" class="space-y-4">
                                    <div>
                                        <label class="block text-sm text-gray-300 mb-2">
                                            请粘贴您的CREATE TABLE语句：
                                        </label>
                                        <textarea name="sql_content" rows="6" 
                                                  class="w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded text-gray-100 
                                                         focus:outline-none focus:border-purple-500 font-mono text-sm"
                                                  placeholder="CREATE TABLE example_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);"><?php echo isset($_POST['sql_content']) ? htmlspecialchars($_POST['sql_content']) : ''; ?></textarea>
                                    </div>
                                    <button type="submit" name="action" value="import_sql_text"
                                            class="w-full px-4 py-2 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded 
                                                   hover:from-purple-600 hover:to-purple-700 transition-colors">
                                        <i class="fas fa-check mr-2"></i>导入SQL语句
                                    </button>
                                </form>
                            </div>

                            <!-- 上传SQL文件 -->
                            <div class="bg-gray-700 rounded-lg p-4">
                                <h3 class="text-lg font-medium text-gray-200 mb-3">
                                    <i class="fas fa-file-upload mr-2"></i>上传SQL文件
                                </h3>
                                <form method="post" enctype="multipart/form-data" class="space-y-4">
                                    <div>
                                        <label class="block text-sm text-gray-300 mb-2">
                                            选择SQL文件（支持.sql, .txt格式，最大5MB）：
                                        </label>
                                        <input type="file" name="sql_file" accept=".sql,.txt"
                                               class="w-full px-3 py-2 bg-gray-800 border border-gray-600 rounded text-gray-100 
                                                      focus:outline-none focus:border-purple-500 file:mr-4 file:py-2 file:px-4
                                                      file:rounded file:border-0 file:text-sm file:font-semibold
                                                      file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100"
                                               required>
                                    </div>
                                    <div class="text-xs text-gray-400">
                                        💡 文件将以时间戳重命名保存到 uploads/sql/ 目录中
                                    </div>
                                    <button type="submit" name="action" value="import_sql_file"
                                            class="w-full px-4 py-2 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white rounded 
                                                   hover:from-indigo-600 hover:to-indigo-700 transition-colors">
                                        <i class="fas fa-upload mr-2"></i>上传并导入
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 导航链接 -->
                    <div class="mt-6 pt-6 border-t border-gray-700">
                        <a href="table_manager.php" 
                           class="inline-flex items-center px-4 py-2 bg-gray-700 hover:bg-gray-600 
                                  text-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-table mr-2"></i>查看我的数据表
                        </a>
                    </div>
                </div>

                <!-- 右侧：SQL预览和执行区域 -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl font-semibold mb-4 text-green-300">
                        <i class="fas fa-database mr-2"></i>SQL语句预览
                    </h2>
                    
                    <?php if (!empty($generated_sql)): ?>
                        <div class="space-y-4">
                            <!-- 多表选择区域 -->
                            <?php if (isset($_SESSION['is_multi_table']) && $_SESSION['is_multi_table']): ?>
                                <div class="bg-blue-900 bg-opacity-30 border border-blue-500 border-opacity-30 rounded-lg p-4 mb-4">
                                    <div class="flex justify-between items-start mb-3">
                                        <h3 class="text-lg font-medium text-blue-300">
                                            <i class="fas fa-layer-group mr-2"></i>检测到多个表
                                        </h3>
                                        <div class="flex space-x-2">
                                            <form method="post" style="display: inline;">
                                                <input type="hidden" name="action" value="execute_all_tables">
                                                <button type="submit" 
                                                        class="px-4 py-2 bg-gradient-to-r from-green-500 to-green-600 text-white text-sm rounded 
                                                               hover:from-green-600 hover:to-green-700 transition-colors"
                                                        onclick="return confirm('确定要按依赖关系顺序创建所有 <?php echo $_SESSION['total_tables']; ?> 个表吗？\n\n这将自动按正确顺序创建所有表。')">
                                                    <i class="fas fa-rocket mr-1"></i>
                                                    一键创建全部
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <p class="text-blue-200 text-sm mb-3">
                                        共发现 <?php echo $_SESSION['total_tables']; ?> 个表。您可以：
                                        <span class="block mt-1 text-xs text-blue-300">
                                            • 点击上方"一键创建全部"按钮批量创建所有表
                                            • 或选择单个表分别创建
                                        </span>
                                    </p>
                                    
                                    <!-- 表列表预览 -->
                                    <div class="bg-gray-700 rounded p-3 mb-3">
                                        <div class="text-sm font-medium text-gray-300 mb-2">
                                            <i class="fas fa-list mr-1"></i>创建顺序预览：
                                        </div>
                                        <div class="grid grid-cols-1 gap-2">
                                            <?php 
                                            $tables_info = $_SESSION['tables_info'] ?? [];
                                            foreach ($tables_info as $index => $table_info): 
                                            ?>
                                                <div class="flex items-center space-x-2 text-sm">
                                                    <span class="bg-blue-600 text-white px-2 py-1 rounded text-xs font-medium w-8 text-center">
                                                        <?php echo $index + 1; ?>
                                                    </span>
                                                    <span class="text-blue-300 font-medium">
                                                        <?php echo htmlspecialchars($table_info['table_name']); ?>
                                                    </span>
                                                    <?php if ($table_info['has_foreign_key']): ?>
                                                        <span class="text-xs bg-yellow-600 text-yellow-100 px-2 py-1 rounded">
                                                            <i class="fas fa-link mr-1"></i>依赖其他表
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="text-xs bg-green-600 text-green-100 px-2 py-1 rounded">
                                                            <i class="fas fa-check mr-1"></i>独立表
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    
                                    <!-- 单表选择 -->
                                    <div class="border-t border-blue-500 border-opacity-30 pt-3">
                                        <div class="text-sm font-medium text-blue-300 mb-2">
                                            <i class="fas fa-mouse-pointer mr-1"></i>或选择单个表创建：
                                        </div>
                                        <form method="post" class="space-y-2">
                                            <?php foreach ($tables_info as $index => $table_info): ?>
                                                <label class="flex items-center space-x-3 p-2 bg-gray-700 rounded hover:bg-gray-600 cursor-pointer transition-colors <?php echo $table_info['table_name'] === $table_name ? 'ring-2 ring-blue-500' : ''; ?>">
                                                    <input type="radio" 
                                                           name="selected_table_index" 
                                                           value="<?php echo $index; ?>"
                                                           <?php echo $table_info['table_name'] === $table_name ? 'checked' : ''; ?>
                                                           onchange="this.form.submit()"
                                                           class="radio radio-info radio-sm">
                                                    <div class="flex-1">
                                                        <div class="text-sm text-blue-300">
                                                            <?php echo htmlspecialchars($table_info['table_name']); ?>
                                                        </div>
                                                    </div>
                                                    <div class="text-xs text-gray-400">
                                                        <?php echo $index + 1; ?> / <?php echo count($tables_info); ?>
                                                    </div>
                                                </label>
                                            <?php endforeach; ?>
                                            <input type="hidden" name="action" value="select_table">
                                        </form>
                                    </div>
                                    
                                    <div class="mt-3 p-3 bg-green-900 bg-opacity-30 border border-green-600 border-opacity-30 rounded">
                                        <div class="flex items-start space-x-2">
                                            <i class="fas fa-lightbulb text-green-400 text-sm mt-0.5"></i>
                                            <div class="text-green-200 text-xs">
                                                <p class="font-medium mb-1">💡 推荐使用"一键创建全部"：</p>
                                                <p>系统已自动分析表的依赖关系，将按正确顺序创建所有表，避免外键约束错误。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">
                                    当前表名：<span class="text-blue-300"><?php echo htmlspecialchars($table_name); ?></span>
                                    <?php if (isset($_SESSION['is_multi_table']) && $_SESSION['is_multi_table']): ?>
                                        <span class="text-xs text-gray-400 ml-2">
                                            (<?php 
                                            $current_index = 0;
                                            foreach ($_SESSION['tables_info'] as $i => $info) {
                                                if ($info['table_name'] === $table_name) {
                                                    $current_index = $i + 1;
                                                    break;
                                                }
                                            }
                                            echo $current_index; ?> / <?php echo $_SESSION['total_tables']; ?>)
                                        </span>
                                    <?php endif; ?>
                                </label>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">SQL语句：</label>
                                <pre class="bg-gray-900 p-4 rounded-lg text-green-400 text-sm overflow-x-auto border border-gray-600"><?php echo htmlspecialchars($generated_sql); ?></pre>
                            </div>
                            
                            <form method="post" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-300 mb-2">
                                        自定义表名（可选）：
                                    </label>
                                    <input type="text" name="custom_table_name" 
                                           value="<?php echo htmlspecialchars($custom_table_name); ?>"
                                           class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-gray-100 
                                                  focus:outline-none focus:border-green-500"
                                           placeholder="留空使用原始表名: <?php echo htmlspecialchars($table_name); ?>">
                                    <div class="text-xs text-gray-400 mt-1">
                                        只能包含字母、数字和下划线，不能以数字开头
                                    </div>
                                </div>
                                
                                <button type="submit" name="action" value="execute_sql"
                                        class="w-full px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg 
                                               hover:from-green-600 hover:to-green-700 focus:outline-none focus:ring-2 
                                               focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-gray-900 
                                               font-medium transition-all duration-200"
                                        onclick="return confirm('确定要创建这个数据表吗？')">
                                    <i class="fas fa-play mr-2"></i>执行建表
                                </button>
                            </form>
                        </div>
                    <?php else: ?>
                        <div class="text-center text-gray-400 py-12">
                            <i class="fas fa-code text-4xl mb-4"></i>
                            <p class="mb-2">请选择以下方式之一来获取SQL语句：</p>
                            <ul class="text-sm space-y-1">
                                <li>• 在左侧"AI生成"选项卡中描述你的想法</li>
                                <li>• 在"导入SQL"选项卡中粘贴或上传SQL文件</li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if ($table_created): ?>
                <div class="mt-8">
                    <div class="bg-gradient-to-r from-green-500 to-blue-600 rounded-lg p-6 shadow-lg">
                        <h3 class="text-2xl font-bold text-white mb-4 text-center">
                            🎉 操作完成！
                        </h3>
                        
                        <?php if (isset($created_tables) && !empty($created_tables)): ?>
                            <!-- 批量创建结果 -->
                            <div class="text-green-100 mb-4">
                                <p class="text-lg mb-3 text-center">
                                    成功创建了 <strong><?php echo count($created_tables); ?></strong> 个数据表
                                </p>
                                
                                <!-- 成功创建的表 -->
                                <div class="bg-white bg-opacity-20 rounded-lg p-4 mb-4">
                                    <h4 class="text-white font-medium mb-3">✅ 成功创建的表：</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                                        <?php foreach ($created_tables as $created_table): ?>
                                            <div class="flex items-center justify-between bg-white bg-opacity-10 rounded px-3 py-2">
                                                <span class="font-medium">
                                                    <?php echo $created_table['index']; ?>. <?php echo htmlspecialchars($created_table['name']); ?>
                                                </span>
                                                <?php if ($created_table['has_foreign_key']): ?>
                                                    <span class="text-xs bg-yellow-500 text-white px-2 py-1 rounded">
                                                        <i class="fas fa-link mr-1"></i>有依赖
                                                    </span>
                                                <?php else: ?>
                                                    <span class="text-xs bg-green-500 text-white px-2 py-1 rounded">
                                                        <i class="fas fa-check mr-1"></i>独立
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                
                                <!-- 跳过的表 -->
                                <?php if (isset($skipped_tables) && !empty($skipped_tables)): ?>
                                    <div class="bg-yellow-600 bg-opacity-30 rounded-lg p-4 mb-4">
                                        <h4 class="text-yellow-100 font-medium mb-3">⚠️ 跳过的表（已存在）：</h4>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                                            <?php foreach ($skipped_tables as $skipped_table): ?>
                                                <div class="flex items-center justify-between bg-yellow-700 bg-opacity-50 rounded px-3 py-2">
                                                    <span class="text-yellow-100">
                                                        <?php echo $skipped_table['index']; ?>. <?php echo htmlspecialchars($skipped_table['name']); ?>
                                                    </span>
                                                    <span class="text-xs bg-yellow-500 text-white px-2 py-1 rounded">
                                                        已存在
                                                    </span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <!-- 失败的表 -->
                                <?php if (isset($failed_tables) && !empty($failed_tables)): ?>
                                    <div class="bg-red-600 bg-opacity-30 rounded-lg p-4 mb-4">
                                        <h4 class="text-red-100 font-medium mb-3">❌ 创建失败的表：</h4>
                                        <div class="space-y-2 text-sm">
                                            <?php foreach ($failed_tables as $failed_table): ?>
                                                <div class="bg-red-700 bg-opacity-50 rounded p-3">
                                                    <div class="flex items-start justify-between">
                                                        <span class="text-red-100 font-medium">
                                                            <?php echo $failed_table['index']; ?>. <?php echo htmlspecialchars($failed_table['name']); ?>
                                                        </span>
                                                    </div>
                                                    <div class="text-red-200 text-xs mt-2">
                                                        错误: <?php echo htmlspecialchars($failed_table['error']); ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                <a href="table_manager.php" 
                                   class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-lg 
                                          hover:bg-gray-100 font-medium transition-colors">
                                    <i class="fas fa-table mr-2"></i>查看所有表
                                </a>
                                <a href="dataflow_manager.php" 
                                   class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-lg 
                                          font-medium transition-colors">
                                    <i class="fas fa-project-diagram mr-2"></i>设计数据流
                                </a>
                                <a href="arbitrary_door.php" 
                                   class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg 
                                          font-medium transition-colors">
                                    <i class="fas fa-plus mr-2"></i>创建更多表
                                </a>
                            </div>
                        <?php else: ?>
                            <!-- 单表创建成功 -->
                            <p class="text-green-100 mb-4 text-center">
                            数据表 <strong><?php echo htmlspecialchars($table_name); ?></strong> 已经创建完成
                        </p>
                            <div class="text-center">
                        <a href="table_manager.php?table=<?php echo urlencode($table_name); ?>" 
                           class="inline-flex items-center px-6 py-3 bg-white text-blue-600 rounded-lg 
                                  hover:bg-gray-100 font-medium transition-colors">
                            <i class="fas fa-arrow-right mr-2"></i>立即管理数据
                        </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        // 选项卡切换功能
        function switchTab(tabName) {
            // 隐藏所有选项卡内容
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.add('hidden'));
            
            // 重置所有选项卡样式
            const tabs = document.querySelectorAll('[id^="tab-"]');
            tabs.forEach(tab => {
                tab.classList.remove('border-blue-500', 'text-blue-400', 'bg-gray-700');
                tab.classList.add('border-transparent', 'text-gray-400');
            });
            
            // 显示选中的选项卡内容
            document.getElementById('content-' + tabName).classList.remove('hidden');
            
            // 激活选中的选项卡样式
            const activeTab = document.getElementById('tab-' + tabName);
            activeTab.classList.remove('border-transparent', 'text-gray-400');
            activeTab.classList.add('border-blue-500', 'text-blue-400', 'bg-gray-700');
        }
        
        // 自动调整textarea高度
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach(textarea => {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.min(this.scrollHeight, 300) + 'px';
            });
        });
        
        // 文件上传预览
        const fileInput = document.querySelector('input[type="file"]');
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    if (file.size > 5 * 1024 * 1024) {
                        alert('文件大小不能超过5MB');
                        this.value = '';
                        return;
                    }
                    
                    const allowedTypes = ['sql', 'txt'];
                    const fileExtension = file.name.split('.').pop().toLowerCase();
                    if (!allowedTypes.includes(fileExtension)) {
                        alert('只允许上传.sql或.txt文件');
                        this.value = '';
                        return;
                    }
                }
            });
        }
        
        // 表名验证
        const customTableNameInput = document.querySelector('input[name="custom_table_name"]');
        if (customTableNameInput) {
            customTableNameInput.addEventListener('input', function() {
                const value = this.value.trim();
                if (value && !/^[a-zA-Z_][a-zA-Z0-9_]*$/.test(value)) {
                    this.style.borderColor = '#ef4444';
                    this.style.boxShadow = '0 0 0 1px #ef4444';
                } else {
                    this.style.borderColor = '#10b981';
                    this.style.boxShadow = '0 0 0 1px #10b981';
                }
            });
            
            customTableNameInput.addEventListener('blur', function() {
                this.style.borderColor = '#4b5563';
                this.style.boxShadow = 'none';
            });
        }
    </script>
</body>
</html> 