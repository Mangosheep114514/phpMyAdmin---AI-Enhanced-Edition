<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Table;

use PhpMyAdmin\Config\PageSettings;
use PhpMyAdmin\ConfigStorage\Relation;
use PhpMyAdmin\Core;
use PhpMyAdmin\DbTableExists;
use PhpMyAdmin\Html\Generator;
use PhpMyAdmin\InsertEdit;
use PhpMyAdmin\ResponseRenderer;
use PhpMyAdmin\Template;
use PhpMyAdmin\Url;
use PhpMyAdmin\DatabaseInterface;

use function __;
use function array_fill;
use function count;
use function is_array;
use function str_contains;
use function strlen;
use function strpos;

/**
 * Displays form for editing and inserting new table rows.
 */
class ChangeController extends AbstractController
{
    /** @var InsertEdit */
    private $insertEdit;

    /** @var Relation */
    private $relation;

    /** @var DatabaseInterface */
    private $dbi;

    public function __construct(
        ResponseRenderer $response,
        Template $template,
        string $db,
        string $table,
        InsertEdit $insertEdit,
        Relation $relation,
        DatabaseInterface $dbi
    ) {
        parent::__construct($response, $template, $db, $table);
        $this->insertEdit = $insertEdit;
        $this->relation = $relation;
        $this->dbi = $dbi;
    }

    public function __invoke(): void
    {
        global $cfg, $db, $table, $text_dir, $disp_message, $urlParams;
        global $errorUrl, $where_clause, $unsaved_values, $insert_mode, $where_clause_array, $where_clauses;
        global $result, $rows, $found_unique_key, $after_insert, $comments_map, $table_columns;
        global $chg_evt_handler, $timestamp_seen, $columns_cnt, $tabindex;
        global $tabindex_for_value, $o_rows, $biggest_max_file_size, $has_blob_field;
        global $jsvkey, $vkey, $current_result, $repopulate, $checked;

        // Handle AI test data generation request
        if (isset($_POST['generate_ai_data'])) {
            $this->handleAiTestDataGeneration();
            return;
        }

        $pageSettings = new PageSettings('Edit');
        $this->response->addHTML($pageSettings->getErrorHTML());
        $this->response->addHTML($pageSettings->getHTML());

        DbTableExists::check();

        if (isset($_GET['where_clause'], $_GET['where_clause_signature'])) {
            if (Core::checkSqlQuerySignature($_GET['where_clause'], $_GET['where_clause_signature'])) {
                $where_clause = $_GET['where_clause'];
            }
        }

        /**
         * Determine whether Insert or Edit and set global variables
         */
        [
            $insert_mode,
            $where_clause,
            $where_clause_array,
            $where_clauses,
            $result,
            $rows,
            $found_unique_key,
            $after_insert,
        ] = $this->insertEdit->determineInsertOrEdit($where_clause ?? null, $db, $table);
        // Increase number of rows if unsaved rows are more
        if (! empty($unsaved_values) && count($rows) < count($unsaved_values)) {
            $rows = array_fill(0, count($unsaved_values), false);
        }

        /**
         * Defines the url to return to in case of error in a sql statement
         * (at this point, $GLOBALS['goto'] will be set but could be empty)
         */
        if (empty($GLOBALS['goto'])) {
            if (strlen($table) > 0) {
                // avoid a problem (see bug #2202709)
                $GLOBALS['goto'] = Url::getFromRoute('/table/sql');
            } else {
                $GLOBALS['goto'] = Url::getFromRoute('/database/sql');
            }
        }

        $urlParams = [
            'db' => $db,
            'sql_query' => $_POST['sql_query'] ?? '',
        ];

        if (strpos($GLOBALS['goto'] ?? '', 'index.php?route=/table') === 0) {
            $urlParams['table'] = $table;
        }

        $errorUrl = $GLOBALS['goto'] . Url::getCommon(
            $urlParams,
            ! str_contains($GLOBALS['goto'], '?') ? '?' : '&'
        );
        unset($urlParams);

        $comments_map = $this->insertEdit->getCommentsMap($db, $table);

        /**
         * START REGULAR OUTPUT
         */

        $this->addScriptFiles([
            'makegrid.js',
            'sql.js',
            'table/change.js',
            'vendor/jquery/additional-methods.js',
            'gis_data_editor.js',
        ]);

        /**
         * Displays the query submitted and its result
         *
         * $disp_message come from /table/replace
         */
        if (! empty($disp_message)) {
            $this->response->addHTML(Generator::getMessage($disp_message, null));
        }

        $table_columns = $this->insertEdit->getTableColumns($db, $table);

        // retrieve keys into foreign fields, if any
        $foreigners = $this->relation->getForeigners($db, $table);

        // Retrieve form parameters for insert/edit form
        $_form_params = $this->insertEdit->getFormParametersForInsertForm(
            $db,
            $table,
            $where_clauses,
            $where_clause_array,
            $errorUrl
        );

        /**
         * Displays the form
         */
        // autocomplete feature of IE kills the "onchange" event handler and it
        //        must be replaced by the "onpropertychange" one in this case
        $chg_evt_handler = 'onchange';
        // Had to put the URI because when hosted on an https server,
        // some browsers send wrongly this form to the http server.

        $html_output = '';
        // Set if we passed the first timestamp field
        $timestamp_seen = false;
        $columns_cnt = count($table_columns);

        $tabindex = 0;
        $tabindex_for_value = 0;
        $o_rows = 0;
        $biggest_max_file_size = 0;

        $urlParams['db'] = $db;
        $urlParams['table'] = $table;
        $urlParams = $this->insertEdit->urlParamsInEditMode($urlParams, $where_clause_array);

        $has_blob_field = false;
        foreach ($table_columns as $column) {
            if ($this->insertEdit->isColumn($column, ['blob', 'tinyblob', 'mediumblob', 'longblob'])) {
                $has_blob_field = true;
                break;
            }
        }

        //Insert/Edit form
        //If table has blob fields we have to disable ajax.
        $isUpload = $GLOBALS['config']->get('enable_upload');
        $html_output .= $this->insertEdit->getHtmlForInsertEditFormHeader($has_blob_field, $isUpload);

        $html_output .= Url::getHiddenInputs($_form_params);

        // user can toggle the display of Function column and column types
        // (currently does not work for multi-edits)
        if (! $cfg['ShowFunctionFields'] || ! $cfg['ShowFieldTypesInDataEditView']) {
            $html_output .= __('Show');
        }

        if (! $cfg['ShowFunctionFields']) {
            $html_output .= $this->insertEdit->showTypeOrFunction('function', $urlParams, false);
        }

        if (! $cfg['ShowFieldTypesInDataEditView']) {
            $html_output .= $this->insertEdit->showTypeOrFunction('type', $urlParams, false);
        }

        $GLOBALS['plugin_scripts'] = [];
        foreach ($rows as $row_id => $current_row) {
            if (empty($current_row)) {
                $current_row = [];
            }

            $jsvkey = $row_id;
            $vkey = '[multi_edit][' . $jsvkey . ']';

            $current_result = (isset($result) && is_array($result) && isset($result[$row_id])
                ? $result[$row_id]
                : $result);
            $repopulate = [];
            $checked = true;
            if (isset($unsaved_values[$row_id])) {
                $repopulate = $unsaved_values[$row_id];
                $checked = false;
            }

            if ($insert_mode && $row_id > 0) {
                $html_output .= $this->insertEdit->getHtmlForIgnoreOption($row_id, $checked);
            }

            $html_output .= $this->insertEdit->getHtmlForInsertEditRow(
                $urlParams,
                $table_columns,
                $comments_map,
                $timestamp_seen,
                $current_result,
                $chg_evt_handler,
                $jsvkey,
                $vkey,
                $insert_mode,
                $current_row,
                $o_rows,
                $tabindex,
                $columns_cnt,
                $isUpload,
                $foreigners,
                $tabindex_for_value,
                $table,
                $db,
                $row_id,
                $biggest_max_file_size,
                $text_dir,
                $repopulate,
                $where_clause_array
            );
        }

        $this->addScriptFiles($GLOBALS['plugin_scripts']);

        unset($unsaved_values, $checked, $repopulate, $GLOBALS['plugin_scripts']);

        if (! isset($after_insert)) {
            $after_insert = 'back';
        }

        $isNumeric = InsertEdit::isWhereClauseNumeric($where_clause);
        $html_output .= $this->template->render('table/insert/actions_panel', [
            'where_clause' => $where_clause,
            'after_insert' => $after_insert,
            'found_unique_key' => $found_unique_key,
            'is_numeric' => $isNumeric,
        ]);

        if ($biggest_max_file_size > 0) {
            $html_output .= '<input type="hidden" name="MAX_FILE_SIZE" value="' . $biggest_max_file_size . '">' . "\n";
        }

        $html_output .= '</form>';

        $html_output .= $this->insertEdit->getHtmlForGisEditor();
        // end Insert/Edit form

        if ($insert_mode) {
            //Continue insertion form
            $html_output .= $this->insertEdit->getContinueInsertionForm($table, $db, $where_clause_array, $errorUrl);
        }

        $this->response->addHTML($html_output);
    }

    /**
     * Handle AI test data generation request
     */
    private function handleAiTestDataGeneration(): void
    {
        global $db, $table;

        // 清理输出缓冲区，确保只返回JSON
        if (ob_get_level()) {
            ob_clean();
        }
        
        // 设置JSON响应头
        if (!headers_sent()) {
            header('Content-Type: application/json; charset=utf-8');
        }

        try {
            $description = $_POST['data_description'] ?? '';
            $recordCount = (int) ($_POST['record_count'] ?? 5);

            if (empty($description)) {
                $this->response->setRequestStatus(false);
                $this->response->addJSON('error', '请描述您想要生成的测试数据');
                return;
            }

            if ($recordCount < 1 || $recordCount > 100) {
                $this->response->setRequestStatus(false);
                $this->response->addJSON('error', '记录数量必须在1-100之间');
                return;
            }

            // 获取表结构
            $tableStructure = $this->generateTableStructureDescription($db, $table);
            
            // 构建AI提示
            $prompt = $this->buildAiPrompt($tableStructure, $description, $recordCount, $table);
            
            // 调用AI API
            $aiResponse = $this->callAiApi($prompt);
            
            if (!$aiResponse) {
                throw new \Exception('AI API调用失败');
            }

            // 执行插入语句
            $insertedCount = $this->executeInsertStatements($aiResponse, $db, $table);

            $this->response->setRequestStatus(true);
            $this->response->addJSON('message', "成功生成并插入了 {$insertedCount} 条测试数据");

        } catch (\Exception $e) {
            // 记录详细错误信息以便调试
            error_log('AI测试数据生成错误: ' . $e->getMessage() . ' 在文件 ' . $e->getFile() . ' 第 ' . $e->getLine() . ' 行');
            
            $this->response->setRequestStatus(false);
            $this->response->addJSON('error', '生成测试数据时出错：' . $e->getMessage());
        }
    }

    /**
     * Generate table structure description for AI
     */
    private function generateTableStructureDescription(string $db, string $table): string
    {
        try {
            $sql = "SHOW FULL COLUMNS FROM `{$db}`.`{$table}`";
            $result = $this->dbi->query($sql);
            
            if (!$result) {
                throw new \Exception('无法获取表结构信息');
            }
            
            $structure = [];
            while ($row = $result->fetchAssoc()) {
                $structure[] = "- {$row['Field']}: {$row['Type']}" . 
                              ($row['Comment'] ? " (备注: {$row['Comment']})" : '');
            }
            
            if (empty($structure)) {
                throw new \Exception('表结构为空');
            }
            
            return implode("\n", $structure);
        } catch (\Exception $e) {
            throw new \Exception('获取表结构失败: ' . $e->getMessage());
        }
    }

    /**
     * Build AI prompt for data generation
     */
    private function buildAiPrompt(string $tableStructure, string $description, int $recordCount, string $tableName): string
    {
        return "请为以下MySQL数据表生成 {$recordCount} 条测试数据。

表名：{$tableName}
表结构：
{$tableStructure}

数据要求：
{$description}

请直接返回可执行的INSERT语句，每条语句一行，不需要其他说明文字。
示例格式：
INSERT INTO {$tableName} (column1, column2) VALUES ('value1', 'value2');

注意：
1. 必须使用表名 {$tableName}
2. 所有字符串值请用单引号包围
3. 日期格式使用 'YYYY-MM-DD' 或 'YYYY-MM-DD HH:MM:SS'
4. 数值类型不需要引号
5. 确保数据符合字段类型和约束
6. 如果有自增主键ID，可以省略ID字段或使用NULL";
    }

    /**
     * Call AI API to generate data
     */
    private function callAiApi(string $prompt): ?string
    {
        // 获取PhpMyAdmin根目录路径
        // __DIR__ 是 libraries/classes/Controllers/Table，需要向上4级到达根目录
        $rootDir = dirname(__DIR__, 4);
        $configFile = $rootDir . '/api_config.php';
        
        if (!file_exists($configFile)) {
            throw new \Exception('API配置文件不存在: ' . $configFile);
        }
        
        require_once $configFile;
        
        // 检查函数是否存在
        if (!function_exists('createApiRequest') || !function_exists('sendApiRequest')) {
            throw new \Exception('API配置文件中缺少必要的函数');
        }
        
        try {
            $data = createApiRequest($prompt, 'You are a helpful assistant that generates SQL INSERT statements for test data.');
            
            $result = sendApiRequest($data);
            
            if (!$result) {
                throw new \Exception('AI API返回空结果');
            }
            
            return $result;
        } catch (\Exception $e) {
            throw new \Exception('AI API调用失败: ' . $e->getMessage());
        }
    }

    /**
     * Execute generated INSERT statements
     */
    private function executeInsertStatements(string $aiResponse, string $db, string $table): int
    {
        $statements = explode("\n", trim($aiResponse));
        $insertedCount = 0;
        
        foreach ($statements as $statement) {
            $statement = trim($statement);
            if (empty($statement) || stripos($statement, 'INSERT') !== 0) {
                continue;
            }
            
            try {
                $this->dbi->query($statement);
                $insertedCount++;
            } catch (\Exception $e) {
                // 记录错误但继续执行其他语句
                error_log("执行INSERT语句失败: " . $e->getMessage() . " SQL: " . $statement);
            }
        }
        
        return $insertedCount;
    }
}
