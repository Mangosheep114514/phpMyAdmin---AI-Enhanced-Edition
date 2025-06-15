<?php
/**
 * AI API配置文件
 * 支持阿里云DashScope和DeepSeek API
 */

declare(strict_types=1);

if (!defined('PHPMYADMIN')) {
    exit;
}

// 简单的翻译函数实现，避免依赖phpMyAdmin的完整初始化
if (!function_exists('__')) {
    function __($string, ...$params) {
        return sprintf($string, ...$params);
    }
}

// 引入主配置文件
require_once dirname(__DIR__) . '/api_config.php';

/**
 * 获取多语言提示词模板
 */
function getAiPromptTemplate($userPrompt) {
    global $GLOBALS;
    
    // 获取当前语言，默认为英语
    $lang = isset($GLOBALS['lang']) ? $GLOBALS['lang'] : 'en';
    
    $templates = [
        'zh_CN' => [
            'system' => '您是一个MySQL数据库专家。请根据用户的自然语言描述，生成规范的CREATE TABLE SQL语句。
要求：
1. 只返回SQL语句，不要包含任何解释或markdown格式
2. 使用合适的数据类型（如VARCHAR、INT、TEXT、DATETIME等）
3. 为重要字段添加NOT NULL约束
4. 包含主键（通常是id字段，AUTO_INCREMENT）
5. 根据需要添加索引
6. 表选项ENGINE=InnoDB DEFAULT CHARSET=utf8mb4必须放在字段定义的右括号之后
7. 字段名使用英文，但可以添加中文注释
8. 语法格式：CREATE TABLE name (字段定义) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;',
            'user' => "请为以下需求创建MySQL表结构：{$userPrompt}"
        ],
        'en' => [
            'system' => 'You are a MySQL database expert. Please generate a standard CREATE TABLE SQL statement based on the user\'s natural language description.
Requirements:
1. Return only the SQL statement, no explanations or markdown formatting
2. Use appropriate data types (VARCHAR, INT, TEXT, DATETIME, etc.)
3. Add NOT NULL constraints for important fields
4. Include primary key (usually id field with AUTO_INCREMENT)
5. Add indexes when necessary
6. Table options ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 must be placed after the field definitions closing parenthesis
7. Use English field names with comments if needed
8. Syntax format: CREATE TABLE name (field definitions) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;',
            'user' => "Please create a MySQL table structure for the following requirements: {$userPrompt}"
        ]
    ];
    
    // 如果当前语言不在模板中，默认使用英语
    if (!isset($templates[$lang])) {
        $lang = 'en';
    }
    
    return $templates[$lang];
}


?> 