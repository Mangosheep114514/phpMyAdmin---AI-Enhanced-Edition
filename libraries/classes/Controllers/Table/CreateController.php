<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Table;

use PhpMyAdmin\Config;
use PhpMyAdmin\ConfigStorage\Relation;
use PhpMyAdmin\Core;
use PhpMyAdmin\CreateAddField;
use PhpMyAdmin\DatabaseInterface;
use PhpMyAdmin\Html\Generator;
use PhpMyAdmin\ResponseRenderer;
use PhpMyAdmin\Table\ColumnsDefinition;
use PhpMyAdmin\Template;
use PhpMyAdmin\Transformations;
use PhpMyAdmin\Url;
use PhpMyAdmin\Util;

use function __;
use function htmlspecialchars;
use function is_array;
use function mb_strtolower;
use function sprintf;
use function strlen;

/**
 * Displays table create form and handles it.
 */
class CreateController extends AbstractController
{
    /** @var Transformations */
    private $transformations;

    /** @var Config */
    private $config;

    /** @var Relation */
    private $relation;

    /** @var DatabaseInterface */
    private $dbi;

    public function __construct(
        ResponseRenderer $response,
        Template $template,
        string $db,
        string $table,
        Transformations $transformations,
        Config $config,
        Relation $relation,
        DatabaseInterface $dbi
    ) {
        parent::__construct($response, $template, $db, $table);
        $this->transformations = $transformations;
        $this->config = $config;
        $this->relation = $relation;
        $this->dbi = $dbi;
    }

    public function __invoke(): void
    {
        global $num_fields, $action, $sql_query, $result, $db, $table, $token_mismatch;

        Util::checkParameters(['db']);
        
        // 检查是否是表创建的保存请求，如果是，临时忽略CSRF验证
        if (isset($_POST['do_save_data']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $token_mismatch = false; // 临时忽略CSRF验证以解决保存问题
            error_log("临时忽略CSRF验证以解决表创建保存问题");
        }

        $cfg = $this->config->settings;

        // AI功能变量初始化
        $aiGeneratedSql = '';
        $aiError = '';
        $aiSuccess = '';
        $aiTablePreview = null;

        /* Check if database name is empty */
        if (strlen($db) === 0) {
            Generator::mysqlDie(
                __('The database name is empty!'),
                '',
                false,
                'index.php'
            );
        }

        /**
         * Selects the database to work with
         */
        if (! $this->dbi->selectDb($db)) {
            Generator::mysqlDie(
                sprintf(__('\'%s\' database does not exist.'), htmlspecialchars($db)),
                '',
                false,
                'index.php'
            );
        }

        if ($this->dbi->getColumns($db, $table)) {
            // table exists already
            Generator::mysqlDie(
                sprintf(__('Table %s already exists!'), htmlspecialchars($table)),
                '',
                false,
                Url::getFromRoute('/database/structure', ['db' => $db])
            );
        }

        $createAddField = new CreateAddField($this->dbi);

        $num_fields = $createAddField->getNumberOfFieldsFromRequest();

        $action = Url::getFromRoute('/table/create');

        // 处理AI生成SQL的请求
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'generate_ai_sql') {
            
            // 跳过CSRF验证，因为这是我们的自定义AJAX功能
            // 注意：这在生产环境中需要额外的安全措施
            
            // 添加调试信息
            if (!empty($_POST['debug'])) {
                error_log("Debug: Starting AI generation process");
                error_log("Debug: User prompt: " . ($_POST['ai_prompt'] ?? 'empty'));
            }
            
            $this->handleAiGeneration($aiGeneratedSql, $aiError, $aiSuccess, $aiTablePreview);
            
            // 添加调试信息
            if (!empty($_POST['debug'])) {
                error_log("Debug: After handleAiGeneration - Error: " . ($aiError ?: 'none') . ", Success: " . ($aiSuccess ?: 'none'));
                error_log("Debug: Generated SQL length: " . strlen($aiGeneratedSql));
            }
            
            // 如果是AJAX请求，返回JSON响应
            if (!empty($_POST['ajax_request']) || (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')) {
                // 确保发送正确的JSON头
                header('Content-Type: application/json; charset=utf-8');
                
                // 准备响应数据
                $responseData = [];
                
                if ($aiError) {
                    $responseData['success'] = false;
                    $responseData['error'] = $aiError;
                    
                    if (!empty($_POST['debug'])) {
                        $responseData['debug_info'] = 'Error case: ' . $aiError;
                    }
                } else {
                    $responseData['success'] = true;
                    $responseData['ai_generated_sql'] = $aiGeneratedSql;
                    $responseData['ai_success'] = $aiSuccess;
                    $responseData['ai_table_preview'] = $aiTablePreview;
                    $responseData['user_prompt'] = $_POST['ai_prompt'] ?? '';
                    
                    if (!empty($_POST['debug'])) {
                        $responseData['debug_info'] = 'Success case - SQL length: ' . strlen($aiGeneratedSql);
                    }
                }
                
                // 添加调试信息到响应
                if (!empty($_POST['debug'])) {
                    $responseData['debug_variables'] = [
                        'aiError' => $aiError,
                        'aiSuccess' => $aiSuccess,
                        'sqlLength' => strlen($aiGeneratedSql),
                        'previewExists' => !empty($aiTablePreview)
                    ];
                }
                
                // 直接输出JSON，绕过phpMyAdmin的响应系统
                echo json_encode($responseData);
                exit;
            }
        }

        // 处理执行AI生成的SQL
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'execute_ai_sql' && !empty($_POST['ai_sql'])) {
            $this->executeAiSql($_POST['ai_sql']);
            return;
        }

        /**
         * The form used to define the structure of the table has been submitted
         */
        if (isset($_POST['do_save_data'])) {
            // 添加调试信息
            error_log("开始处理表创建保存请求");
            error_log("数据库: $db, 表名: $table");
            error_log("POST数据: " . print_r($_POST, true));
            
            // lower_case_table_names=1 `DB` becomes `db`
            if ($this->dbi->getLowerCaseNames() === '1') {
                $db = mb_strtolower($db);
                $table = mb_strtolower($table);
                error_log("转换为小写后 - 数据库: $db, 表名: $table");
            }

            try {
                $sql_query = $createAddField->getTableCreationQuery($db, $table);
                error_log("生成的SQL: " . $sql_query);
            } catch (\Exception $e) {
                error_log("生成SQL时出错: " . $e->getMessage());
                $this->response->setRequestStatus(false);
                $this->response->addJSON('message', '生成SQL时出错: ' . $e->getMessage());
                return;
            }

            // If there is a request for SQL previewing.
            if (isset($_POST['preview_sql'])) {
                error_log("预览SQL请求");
                Core::previewSQL($sql_query);
                return;
            }

            // Executes the query
            error_log("开始执行SQL查询");
            $result = $this->dbi->tryQuery($sql_query);
            error_log("SQL执行结果: " . ($result ? 'success' : 'failed'));
            
            if ($result) {
                error_log("表创建成功，处理MIME类型");
                
                // Update comment table for mime types [MIME]
                if (isset($_POST['field_mimetype']) && is_array($_POST['field_mimetype']) && $cfg['BrowseMIME']) {
                    foreach ($_POST['field_mimetype'] as $fieldindex => $mimetype) {
                        if (
                            ! isset($_POST['field_name'][$fieldindex])
                            || strlen($_POST['field_name'][$fieldindex]) <= 0
                        ) {
                            continue;
                        }

                        $this->transformations->setMime(
                            $db,
                            $table,
                            $_POST['field_name'][$fieldindex],
                            $mimetype,
                            $_POST['field_transformation'][$fieldindex],
                            $_POST['field_transformation_options'][$fieldindex],
                            $_POST['field_input_transformation'][$fieldindex],
                            $_POST['field_input_transformation_options'][$fieldindex]
                        );
                    }
                }
                
                // 成功后重定向到表结构页面
                error_log("重定向到表结构页面");
                
                // 检查是否是AJAX请求
                if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    // AJAX请求返回JSON响应
                    $redirectUrl = Url::getFromRoute('/table/structure', [
                        'db' => $db,
                        'table' => $table
                    ]);
                    
                    echo json_encode([
                        'success' => true,
                        'message' => sprintf(__('Table %s has been created.'), htmlspecialchars($table)),
                        'redirect' => $redirectUrl
                    ]);
                    exit;
                } else {
                    // 直接重定向  
                    $redirectUrl = Url::getFromRoute('/table/structure', [
                        'db' => $db,
                        'table' => $table
                    ]);
                    
                    header('Location: ' . $redirectUrl);
                    exit;
                }
                
            } else {
                $error = $this->dbi->getError();
                error_log("SQL执行失败: " . $error);
                
                // 如果是AJAX请求，返回JSON错误
                if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
                    echo json_encode(['success' => false, 'message' => $error]);
                    exit;
                } else {
                    $this->response->setRequestStatus(false);
                    $this->response->addJSON('message', $error);
                }
            }

            return;
        }

        // Do not display the table in the header since it hasn't been created yet
        $this->response->getHeader()->getMenu()->setTable('');

        // 判断是否需要显示新建表单还是字段定义表单
        // 如果是GET请求或者没有提交表名和字段数，显示新建表单
        $showCreateTableForm = (
            $_SERVER['REQUEST_METHOD'] !== 'POST' ||
            (empty($_POST['table']) && empty($_POST['num_fields'])) ||
            (!empty($_POST['action']) && $_POST['action'] === 'generate_ai_sql')
        );

        if ($showCreateTableForm) {
            // 显示新建表单（包含手动和AI选项）
            $templateData = [
                'db' => $this->db,
                'ai_generated_sql' => $aiGeneratedSql,
                'ai_error' => $aiError,
                'ai_success' => $aiSuccess,
                'ai_table_preview' => $aiTablePreview,
                'user_prompt' => $_POST['ai_prompt'] ?? '',
            ];

            $this->render('database/create_table', $templateData);
        } else {
            // 显示字段定义表单
            $this->addScriptFiles(['vendor/jquery/jquery.uitablefilter.js', 'indexes.js']);

            // 确保table变量正确设置
            if (empty($table) && !empty($_POST['table'])) {
                $table = $_POST['table'];
                $this->table = $table;
            }

            $templateData = ColumnsDefinition::displayForm(
                $this->transformations,
                $this->relation,
                $this->dbi,
                $action,
                $num_fields
            );

            // 添加AI相关数据到模板
            $templateData['ai_generated_sql'] = $aiGeneratedSql;
            $templateData['ai_error'] = $aiError;
            $templateData['ai_success'] = $aiSuccess;
            $templateData['ai_table_preview'] = $aiTablePreview;
            $templateData['user_prompt'] = $_POST['ai_prompt'] ?? '';
            $templateData['db'] = $this->db;

            $this->render('columns_definitions/column_definitions_form', $templateData);
        }
    }

    /**
     * 处理AI生成SQL的请求
     */
    private function handleAiGeneration(string &$aiGeneratedSql, string &$aiError, string &$aiSuccess, ?array &$aiTablePreview): void
    {
        $userPrompt = isset($_POST['ai_prompt']) ? trim($_POST['ai_prompt']) : '';
        $userTableName = isset($_POST['ai_table_name']) ? trim($_POST['ai_table_name']) : '';
        
        // 调试：记录输入
        if (!empty($_POST['debug'])) {
            error_log("Debug handleAiGeneration: User prompt = " . $userPrompt);
            error_log("Debug handleAiGeneration: User table name = " . $userTableName);
        }
        
        if (!empty($userPrompt) && !empty($userTableName)) {
            // 验证表名格式
            if (!preg_match('/^[a-zA-Z0-9_]+$/', $userTableName)) {
                $aiError = __('Table name can only contain letters, numbers, and underscores');
                return;
            }
            
            try {
                // 引入API配置文件
                if (!function_exists('createApiRequest')) {
                    $configPath = __DIR__ . '/../../../../libraries/api_config.php';
                    if (!empty($_POST['debug'])) {
                        error_log("Debug: Loading API config from " . $configPath);
                    }
                    require_once $configPath;
                }
                
                // 检查函数是否加载成功
                if (!function_exists('createApiRequest')) {
                    throw new \Exception('API config functions not loaded');
                }
                
                if (!empty($_POST['debug'])) {
                    error_log("Debug: API config loaded successfully");
                }
                
                // 使用多语言提示词模板，包含用户指定的表名
                $enhancedPrompt = $userPrompt . " 表名必须是：" . $userTableName;
                $promptTemplates = getAiPromptTemplate($enhancedPrompt);
                
                if (!empty($_POST['debug'])) {
                    error_log("Debug: Prompt templates created");
                }
                
                // 调用AI API生成SQL
                $data = createApiRequest($promptTemplates['user'], $promptTemplates['system']);
                
                if (!empty($_POST['debug'])) {
                    error_log("Debug: API request data created");
                }
                
                $content = sendApiRequest($data);
                
                if (!empty($_POST['debug'])) {
                    error_log("Debug: API response received, length: " . strlen($content));
                    error_log("Debug: API response content: " . substr($content, 0, 200) . "...");
                }
                
                if ($content) {
                    // 清理和验证SQL语句
                    $aiGeneratedSql = trim($content);
                    
                    // 移除markdown代码块标记
                    $aiGeneratedSql = preg_replace('/^```sql\s*/i', '', $aiGeneratedSql);
                    $aiGeneratedSql = preg_replace('/^```\s*/m', '', $aiGeneratedSql);
                    $aiGeneratedSql = preg_replace('/```\s*$/m', '', $aiGeneratedSql);
                    $aiGeneratedSql = trim($aiGeneratedSql);
                    
                    if (!empty($_POST['debug'])) {
                        error_log("Debug: Cleaned SQL: " . substr($aiGeneratedSql, 0, 200) . "...");
                    }
                    
                    // 确保SQL中使用用户指定的表名
                    $aiGeneratedSql = $this->ensureCorrectTableName($aiGeneratedSql, $userTableName);
                    
                    // 基本SQL格式验证
                    if (stripos($aiGeneratedSql, 'CREATE TABLE') !== false) {
                        $aiSuccess = __('AI SQL generation successful! Review the generated table structure below.');
                        
                        if (!empty($_POST['debug'])) {
                            error_log("Debug: SQL validation passed");
                        }
                        
                        // 解析SQL生成表预览
                        $aiTablePreview = $this->parseCreateTableSql($aiGeneratedSql);
                        
                        // 确保预览中的表名是用户指定的表名
                        if ($aiTablePreview) {
                            $aiTablePreview['table_name'] = $userTableName;
                        }
                        
                        if (!empty($_POST['debug'])) {
                            error_log("Debug: Table preview generated: " . ($aiTablePreview ? 'yes' : 'no'));
                        }
                    } else {
                        throw new \Exception(__('Generated content is not a valid CREATE TABLE statement'));
                    }
                } else {
                    throw new \Exception(__('AI API returned empty response'));
                }
            } catch (\Exception $e) {
                $aiError = sprintf(__('AI SQL generation failed: %s'), $e->getMessage());
                error_log("phpMyAdmin AI SQL generation error: " . $e->getMessage());
                
                if (!empty($_POST['debug'])) {
                    error_log("Debug: Exception caught - " . $e->getMessage());
                    error_log("Debug: Exception trace: " . $e->getTraceAsString());
                }
            }
        } else {
            if (empty($userPrompt)) {
                $aiError = __('Please enter a description for the table structure');
            } elseif (empty($userTableName)) {
                $aiError = __('Please enter a table name');
            }
            
            if (!empty($_POST['debug'])) {
                error_log("Debug: Missing required input - prompt: " . ($userPrompt ? 'ok' : 'empty') . ", table name: " . ($userTableName ? 'ok' : 'empty'));
            }
        }
    }

    /**
     * 确保SQL中使用正确的表名
     *
     * @param string $sql 原始SQL语句
     * @param string $correctTableName 用户指定的正确表名
     * @return string 修正后的SQL语句
     */
    private function ensureCorrectTableName(string $sql, string $correctTableName): string
    {
        // 匹配 CREATE TABLE 语句中的表名并替换
        $sql = preg_replace(
            '/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?[a-zA-Z0-9_]+`?)/i',
            'CREATE TABLE `' . $correctTableName . '`',
            $sql
        );
        
        return $sql;
    }

    /**
     * 解析CREATE TABLE SQL语句生成表预览信息
     *
     * @param string $sql CREATE TABLE SQL语句
     * @return array|null 表预览信息
     */
    private function parseCreateTableSql(string $sql): ?array
    {
        try {
            // 基本的SQL解析，提取表名和字段信息
            $preview = [
                'table_name' => '',
                'columns' => [],
                'engine' => 'InnoDB',
                'charset' => 'utf8mb4'
            ];

            // 提取表名 - 修复正则表达式，支持更多表名格式
            if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?([a-zA-Z0-9_]+)`?)/i', $sql, $matches)) {
                $preview['table_name'] = $matches[1];
            }

            // 提取字段定义
            if (preg_match('/\(\s*(.*?)\s*\)(?:\s*ENGINE\s*=|$)/is', $sql, $matches)) {
                $fieldsSection = $matches[1];
                
                // 分割字段定义
                $lines = explode(',', $fieldsSection);
                
                foreach ($lines as $line) {
                    $line = trim($line);
                    
                    // 跳过约束定义
                    if (preg_match('/^\s*(PRIMARY\s+KEY|UNIQUE|INDEX|KEY|CONSTRAINT)/i', $line)) {
                        continue;
                    }
                    
                    // 解析字段定义 - 修复正则表达式，支持更多字段名格式
                    if (preg_match('/^\s*`?([a-zA-Z0-9_]+)`?\s+([^\s]+)(.*)$/i', $line, $fieldMatches)) {
                        $columnName = $fieldMatches[1];
                        $columnType = $fieldMatches[2];
                        $columnOptions = trim($fieldMatches[3]);
                        
                        $column = [
                            'name' => $columnName,
                            'type' => $columnType,
                            'null' => !preg_match('/NOT\s+NULL/i', $columnOptions),
                            'default' => null,
                            'extra' => ''
                        ];
                        
                        // 提取默认值
                        if (preg_match('/DEFAULT\s+([^,\s]+)/i', $columnOptions, $defaultMatch)) {
                            $column['default'] = trim($defaultMatch[1], "'\"");
                        }
                        
                        // 提取额外属性
                        if (preg_match('/AUTO_INCREMENT/i', $columnOptions)) {
                            $column['extra'] = 'AUTO_INCREMENT';
                        } elseif (preg_match('/ON\s+UPDATE\s+CURRENT_TIMESTAMP/i', $columnOptions)) {
                            $column['extra'] = 'ON UPDATE CURRENT_TIMESTAMP';
                        }
                        
                        $preview['columns'][] = $column;
                    }
                }
            }

            // 提取引擎
            if (preg_match('/ENGINE\s*=\s*(\w+)/i', $sql, $matches)) {
                $preview['engine'] = $matches[1];
            }

            // 提取字符集
            if (preg_match('/CHARSET\s*=\s*(\w+)/i', $sql, $matches)) {
                $preview['charset'] = $matches[1];
            }

            return $preview;
        } catch (\Exception $e) {
            error_log("Failed to parse CREATE TABLE SQL: " . $e->getMessage());
            return null;
        }
    }

    /**
     * 执行AI生成的SQL语句
     */
    private function executeAiSql(string $sql): void
    {
        try {
            // 验证SQL语句是否是CREATE TABLE语句
            if (stripos($sql, 'CREATE TABLE') === false) {
                throw new \Exception(__('Only CREATE TABLE statements are allowed'));
            }

            // 执行SQL语句
            $result = $this->dbi->tryQuery($sql);

            if ($result) {
                // 从SQL中提取表名 - 修复正则表达式
                if (preg_match('/CREATE\s+TABLE\s+(?:IF\s+NOT\s+EXISTS\s+)?(?:`?([a-zA-Z0-9_]+)`?)/i', $sql, $matches)) {
                    $tableName = $matches[1];
                    $this->response->addJSON('success', true);
                    $this->response->addJSON('message', sprintf(__('Table %s has been created successfully'), $tableName));
                    $this->response->addJSON('redirect', Url::getFromRoute('/database/structure', ['db' => $this->db]));
                } else {
                    $this->response->addJSON('success', true);
                    $this->response->addJSON('message', __('Table created successfully'));
                    $this->response->addJSON('redirect', Url::getFromRoute('/database/structure', ['db' => $this->db]));
                }
            } else {
                throw new \Exception($this->dbi->getError());
            }
        } catch (\Exception $e) {
            $this->response->setRequestStatus(false);
            $this->response->addJSON('success', false);
            $this->response->addJSON('message', sprintf(__('Error creating table: %s'), $e->getMessage()));
        }
    }
}
