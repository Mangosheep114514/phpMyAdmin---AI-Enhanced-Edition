<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Database;

use PhpMyAdmin\CheckUserPrivileges;
use PhpMyAdmin\DatabaseInterface;
use PhpMyAdmin\Html\Generator;
use PhpMyAdmin\ResponseRenderer;
use PhpMyAdmin\Template;
use PhpMyAdmin\Url;
use PhpMyAdmin\Util;

use function __;

/**
 * Handles AI table creation logic
 */
class AiCreateTableController extends AbstractController
{
    /** @var DatabaseInterface */
    private $dbi;

    public function __construct(
        ResponseRenderer $response,
        Template $template,
        string $db,
        DatabaseInterface $dbi
    ) {
        parent::__construct($response, $template, $db);
        $this->dbi = $dbi;
    }

    public function __invoke(): void
    {
        global $cfg, $db, $errorUrl;

        // 引入API配置文件
        require_once __DIR__ . '/../../../libraries/api_config.php';
        
        // 处理AI生成SQL的POST请求
        $aiGeneratedSql = '';
        $aiError = '';
        $aiSuccess = '';
        $aiTablePreview = null;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'generate_ai_sql') {
            $userPrompt = isset($_POST['ai_prompt']) ? trim($_POST['ai_prompt']) : '';
            
            if (!empty($userPrompt)) {
                try {
                    // 使用多语言提示词模板
                    $promptTemplates = getAiPromptTemplate($userPrompt);
                    
                    // 调用AI API生成SQL
                    $data = createApiRequest($promptTemplates['user'], $promptTemplates['system']);
                    $content = sendApiRequest($data);
                    
                    if ($content) {
                        // 清理和验证SQL语句
                        $aiGeneratedSql = trim($content);
                        
                        // 移除markdown代码块标记
                        $aiGeneratedSql = preg_replace('/^```sql\s*/i', '', $aiGeneratedSql);
                        $aiGeneratedSql = preg_replace('/^```\s*/m', '', $aiGeneratedSql);
                        $aiGeneratedSql = preg_replace('/```\s*$/m', '', $aiGeneratedSql);
                        $aiGeneratedSql = trim($aiGeneratedSql);
                        
                        // 基本SQL格式验证
                        if (stripos($aiGeneratedSql, 'CREATE TABLE') !== false) {
                            $aiSuccess = __('AI SQL generation successful! Review the generated table structure below.');
                            
                            // 解析SQL生成表预览
                            $aiTablePreview = $this->parseCreateTableSql($aiGeneratedSql);
                        } else {
                            throw new Exception(__('Generated content is not a valid CREATE TABLE statement'));
                        }
                    } else {
                        throw new Exception(__('AI API returned empty response'));
                    }
                } catch (Exception $e) {
                    $aiError = __('AI SQL generation failed: %s', $e->getMessage());
                    error_log("phpMyAdmin AI SQL generation error: " . $e->getMessage());
                }
            } else {
                $aiError = __('Please enter a description for the table structure');
            }
        }

        Util::checkParameters(['db']);

        $errorUrl = Util::getScriptNameForOption($cfg['DefaultTabDatabase'], 'database');
        $errorUrl .= Url::getCommon(['db' => $db], '&');

        if (! $this->hasDatabase()) {
            return;
        }

        $checkUserPrivileges = new CheckUserPrivileges($this->dbi);
        $checkUserPrivileges->getPrivileges();

        $this->addScriptFiles(['database/structure.js', 'table/change.js']);

        $this->render('database/ai_create_table', [
            'db' => $this->db,
            'ai_generated_sql' => $aiGeneratedSql,
            'ai_error' => $aiError,
            'ai_success' => $aiSuccess,
            'ai_table_preview' => $aiTablePreview,
            'user_prompt' => $_POST['ai_prompt'] ?? ''
        ]);
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
} 