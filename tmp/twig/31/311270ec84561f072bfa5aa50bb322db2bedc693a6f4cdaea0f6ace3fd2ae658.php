<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/create_table.twig */
class __TwigTemplate_42486db34570e70f0d15a5d93c58489da0cae5fcf18c4b6c9b2bbc07b6a44a1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["ai_error"] ?? null)) {
            // line 2
            yield "  <div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 3
            yield PhpMyAdmin\Html\Generator::getIcon("s_error", "", true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ai_error"] ?? null), "html", null, true);
            yield "
  </div>
";
        }
        // line 6
        yield "
";
        // line 7
        if (($context["ai_success"] ?? null)) {
            // line 8
            yield "  <div class=\"alert alert-success\" role=\"alert\">
    ";
            // line 9
            yield PhpMyAdmin\Html\Generator::getIcon("s_success", "", true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ai_success"] ?? null), "html", null, true);
            yield "
  </div>
";
        }
        // line 12
        yield "
<div class=\"card d-print-none lock-page\">
  <div class=\"card-header\">
    ";
        // line 15
        yield PhpMyAdmin\Html\Generator::getIcon("b_table_add", _gettext("Create new table"), true);
        yield "
    <ul class=\"nav nav-tabs card-header-tabs ms-3\" id=\"createTableTabs\" role=\"tablist\">
      <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link";
        // line 18
        if ( !($context["ai_generated_sql"] ?? null)) {
            yield " active";
        }
        yield "\" id=\"manual-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#manual-create\" type=\"button\" role=\"tab\" aria-controls=\"manual-create\" aria-selected=\"";
        if ( !($context["ai_generated_sql"] ?? null)) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">
          ";
        // line 19
        yield PhpMyAdmin\Html\Generator::getIcon("b_edit", "", true);
        yield " ";
yield _gettext("Manual");
        // line 20
        yield "        </button>
      </li>
      <li class=\"nav-item\" role=\"presentation\">
        <button class=\"nav-link";
        // line 23
        if (($context["ai_generated_sql"] ?? null)) {
            yield " active";
        }
        yield "\" id=\"ai-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#ai-create\" type=\"button\" role=\"tab\" aria-controls=\"ai-create\" aria-selected=\"";
        if (($context["ai_generated_sql"] ?? null)) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">
          ";
        // line 24
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", "", true);
        yield " ";
yield _gettext("AI Generate");
        // line 25
        yield "        </button>
      </li>
    </ul>
  </div>
  
  <div class=\"card-body\">
    <div class=\"tab-content\" id=\"createTableTabContent\">
      <!-- 手动创建选项卡 -->
      <div class=\"tab-pane fade";
        // line 33
        if ( !($context["ai_generated_sql"] ?? null)) {
            yield " show active";
        }
        yield "\" id=\"manual-create\" role=\"tabpanel\" aria-labelledby=\"manual-tab\">
        <form id=\"createTableMinimalForm\" method=\"post\" action=\"";
        // line 34
        yield PhpMyAdmin\Url::getFromRoute("/table/create");
        yield "\">
          ";
        // line 35
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
          <div class=\"row row-cols-lg-auto g-3\">
            <div class=\"col-12\">
              <label for=\"createTableNameInput\" class=\"form-label\">";
yield _gettext("Table name");
        // line 38
        yield "</label>
              <input autocomplete=\"off\" type=\"text\" class=\"form-control\" name=\"table\" id=\"createTableNameInput\" maxlength=\"64\" required>
            </div>
            <div class=\"col-12\">
              <label for=\"createTableNumFieldsInput\" class=\"form-label\">";
yield _gettext("Number of columns");
        // line 42
        yield "</label>
              <input type=\"number\" class=\"form-control\" name=\"num_fields\" id=\"createTableNumFieldsInput\" min=\"1\" value=\"4\" required>
            </div>
            <div class=\"col-12 align-self-lg-end\">
              <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Create");
        // line 46
        yield "\">
            </div>
          </div>
        </form>
      </div>
      
      <!-- AI生成选项卡 -->
      <div class=\"tab-pane fade";
        // line 53
        if ((($context["ai_generated_sql"] ?? null) || ($context["ai_error"] ?? null))) {
            yield " show active";
        }
        yield "\" id=\"ai-create\" role=\"tabpanel\" aria-labelledby=\"ai-tab\">
        <form id=\"aiGenerateForm\" method=\"post\" action=\"";
        // line 54
        yield PhpMyAdmin\Url::getFromRoute("/database/structure");
        yield "\">
          ";
        // line 55
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
          <input type=\"hidden\" name=\"action\" value=\"generate_ai_sql\">
          
          <div class=\"row g-3\">
            <!-- 表名输入框 -->
            <div class=\"col-12\">
              <label for=\"aiTableNameInput\" class=\"form-label\">
                ";
        // line 62
        yield PhpMyAdmin\Html\Generator::getIcon("b_table_add", "", true);
        yield " ";
yield _gettext("Table name");
        yield " <span class=\"text-danger\">*</span>
              </label>
              <input type=\"text\" name=\"table_name\" id=\"aiTableNameInput\" class=\"form-control\" 
                     placeholder=\"";
yield _gettext("Enter table name (e.g., users, products, orders)");
        // line 65
        yield "\"
                     value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "table_name", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "table_name", [], "any", false, false, false, 66), "")) : ("")), "html", null, true);
        yield "\" required>
              <div class=\"form-text\">
                ";
        // line 68
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", "", true);
        yield " ";
yield _gettext("Specify the exact table name you want to create.");
        // line 69
        yield "              </div>
            </div>
            
            <div class=\"col-12\">
              <label for=\"aiPromptInput\" class=\"form-label\">
                ";
        // line 74
        yield PhpMyAdmin\Html\Generator::getIcon("b_comment", "", true);
        yield " ";
yield _gettext("Describe your table structure in natural language");
        // line 75
        yield "              </label>
              <textarea name=\"ai_description\" id=\"aiPromptInput\" class=\"form-control\" rows=\"4\" 
                        placeholder=\"";
yield _gettext("Example: I need a user management system with fields for user ID, username, email, password, registration date, and user status...");
        // line 77
        yield "\"
                        required>";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_prompt"] ?? null), "html", null, true);
        yield "</textarea>
              <div class=\"form-text\">
                ";
        // line 80
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", "", true);
        yield " ";
yield _gettext("Describe the data you want to store, and AI will generate the appropriate table structure for you.");
        // line 81
        yield "              </div>
            </div>
            
            ";
        // line 84
        if (($context["ai_generated_sql"] ?? null)) {
            // line 85
            yield "            <div class=\"col-12\">
              <label for=\"aiGeneratedSqlTextarea\" class=\"form-label\">
                ";
            // line 87
            yield PhpMyAdmin\Html\Generator::getIcon("b_sql", "", true);
            yield " ";
yield _gettext("AI Generated SQL");
            // line 88
            yield "              </label>
              <textarea id=\"aiGeneratedSqlTextarea\" class=\"form-control font-monospace\" rows=\"10\" readonly>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ai_generated_sql"] ?? null), "html", null, true);
            yield "</textarea>
              <div class=\"form-text\">
                ";
            // line 91
            yield PhpMyAdmin\Html\Generator::getIcon("s_success", "", true);
            yield " ";
yield _gettext("Review the generated SQL below. You can edit it if needed, then create the table.");
            // line 92
            yield "              </div>
            </div>
            
            <!-- 表结构预览 -->
            ";
            // line 96
            if (($context["ai_table_preview"] ?? null)) {
                // line 97
                yield "            <div class=\"col-12\">
              <div class=\"card\">
                <div class=\"card-header\">
                  ";
                // line 100
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", "", true);
                yield " ";
yield _gettext("Table Structure Preview");
                // line 101
                yield "                </div>
                <div class=\"card-body\">
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover\">
                      <thead class=\"table-light\">
                        <tr>
                          <th scope=\"col\">#</th>
                          <th scope=\"col\">";
yield _gettext("Name");
                // line 108
                yield "</th>
                          <th scope=\"col\">";
yield _gettext("Type");
                // line 109
                yield "</th>
                          <th scope=\"col\">";
yield _gettext("Null");
                // line 110
                yield "</th>
                          <th scope=\"col\">";
yield _gettext("Default");
                // line 111
                yield "</th>
                          <th scope=\"col\">";
yield _gettext("Extra");
                // line 112
                yield "</th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "columns", [], "any", false, false, false, 116));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 117
                    yield "                        <tr>
                          <td>";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 118), "html", null, true);
                    yield "</td>
                          <td><code>";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 119), "html", null, true);
                    yield "</code></td>
                          <td><span class=\"badge bg-info\">";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 120), "html", null, true);
                    yield "</span></td>
                          <td>
                            ";
                    // line 122
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "null", [], "any", false, false, false, 122)) {
                        // line 123
                        yield "                              <span class=\"badge bg-warning\">Yes</span>
                            ";
                    } else {
                        // line 125
                        yield "                              <span class=\"badge bg-success\">No</span>
                            ";
                    }
                    // line 127
                    yield "                          </td>
                          <td>
                            ";
                    // line 129
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default", [], "any", false, false, false, 129)) {
                        // line 130
                        yield "                              <code>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "default", [], "any", false, false, false, 130), "html", null, true);
                        yield "</code>
                            ";
                    } else {
                        // line 132
                        yield "                              <span class=\"text-muted\">";
yield _gettext("None");
                        yield "</span>
                            ";
                    }
                    // line 134
                    yield "                          </td>
                          <td>
                            ";
                    // line 136
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["column"], "extra", [], "any", false, false, false, 136)) {
                        // line 137
                        yield "                              <span class=\"badge bg-secondary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "extra", [], "any", false, false, false, 137), "html", null, true);
                        yield "</span>
                            ";
                    } else {
                        // line 139
                        yield "                              <span class=\"text-muted\">";
yield _gettext("None");
                        yield "</span>
                            ";
                    }
                    // line 141
                    yield "                          </td>
                        </tr>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "                      </tbody>
                    </table>
                  </div>
                  <div class=\"alert alert-info mt-3\">
                    ";
                // line 148
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", "", true);
                yield "
                    <strong>";
yield _gettext("Table name");
                // line 149
                yield ":</strong> <code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "table_name", [], "any", false, false, false, 149), "html", null, true);
                yield "</code><br>
                    <strong>";
yield _gettext("Engine");
                // line 150
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "engine", [], "any", true, true, false, 150)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "engine", [], "any", false, false, false, 150), "InnoDB")) : ("InnoDB")), "html", null, true);
                yield "<br>
                    <strong>";
yield _gettext("Charset");
                // line 151
                yield ":</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "charset", [], "any", true, true, false, 151)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["ai_table_preview"] ?? null), "charset", [], "any", false, false, false, 151), "utf8mb4")) : ("utf8mb4")), "html", null, true);
                yield "
                  </div>
                </div>
              </div>
            </div>
            ";
            }
            // line 157
            yield "            ";
        }
        // line 158
        yield "            
            <div class=\"col-12\">
              <button type=\"submit\" class=\"btn btn-primary\">
                ";
        // line 161
        yield PhpMyAdmin\Html\Generator::getIcon("b_help", "", true);
        yield " ";
yield _gettext("Generate SQL with AI");
        // line 162
        yield "              </button>
              ";
        // line 163
        if (($context["ai_generated_sql"] ?? null)) {
            // line 164
            yield "                <button type=\"button\" class=\"btn btn-success ms-2\" onclick=\"copyAiSql()\">
                  ";
            // line 165
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", "", true);
            yield " ";
yield _gettext("Copy SQL");
            // line 166
            yield "                </button>
                
                <!-- 执行SQL按钮 -->
                <button type=\"button\" class=\"btn btn-outline-primary ms-2\" onclick=\"showExecuteConfirm()\">
                  ";
            // line 170
            yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", "", true);
            yield " ";
yield _gettext("Create Table");
            // line 171
            yield "                </button>
                
                <a href=\"";
            // line 173
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "?";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["db" => ($context["db"] ?? null), "sql_query" => ($context["ai_generated_sql"] ?? null), "show_query" => "1"]), "html", null, true);
            yield "\" 
                   class=\"btn btn-outline-secondary ms-2\" target=\"_blank\">
                  ";
            // line 175
            yield PhpMyAdmin\Html\Generator::getIcon("b_sql", "", true);
            yield " ";
yield _gettext("Execute in SQL tab");
            // line 176
            yield "                </a>
              ";
        }
        // line 178
        yield "            </div>
          </div>
        </form>
        
        <div class=\"mt-4\">
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <h6 class=\"card-title\">
                ";
        // line 186
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", "", true);
        yield " ";
yield _gettext("Tips for better AI generation");
        // line 187
        yield "              </h6>
              <ul class=\"card-text mb-0 small\">
                <li>";
yield _gettext("Describe the purpose of the table clearly");
        // line 189
        yield "</li>
                <li>";
yield _gettext("Mention the main data fields you need");
        // line 190
        yield "</li>
                <li>";
yield _gettext("Specify data types if you have specific requirements");
        // line 191
        yield "</li>
                <li>";
yield _gettext("Include relationships with other tables if applicable");
        // line 192
        yield "</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 执行确认模态框 -->
";
        // line 203
        if (($context["ai_generated_sql"] ?? null)) {
            // line 204
            yield "<div class=\"modal fade\" id=\"executeConfirmModal\" tabindex=\"-1\" aria-labelledby=\"executeConfirmModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"executeConfirmModalLabel\">
          ";
            // line 209
            yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist", "", true);
            yield " ";
yield _gettext("Confirm Table Creation");
            // line 210
            yield "        </h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
            // line 211
            yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"alert alert-warning\">
          ";
            // line 215
            yield PhpMyAdmin\Html\Generator::getIcon("s_attention", "", true);
            yield " ";
yield _gettext("You are about to create a new table with the following SQL:");
            // line 216
            yield "        </div>
        <div class=\"mb-3\">
          <label for=\"editableSql\" class=\"form-label\">
            ";
            // line 219
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", "", true);
            yield " ";
yield _gettext("SQL Statement (Editable)");
            // line 220
            yield "          </label>
          <textarea id=\"editableSql\" class=\"form-control font-monospace\" rows=\"8\" style=\"resize: vertical;\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ai_generated_sql"] ?? null), "html", null, true);
            yield "</textarea>
          <div class=\"form-text\">
            ";
            // line 223
            yield PhpMyAdmin\Html\Generator::getIcon("b_help", "", true);
            yield " ";
yield _gettext("You can modify the SQL before executing it");
            // line 224
            yield "          </div>
        </div>
        <p class=\"mt-3\">";
yield _gettext("Are you sure you want to execute this SQL statement?");
            // line 226
            yield "</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
          ";
yield _gettext("Cancel");
            // line 231
            yield "        </button>
        <form id=\"executeEditedSqlForm\" method=\"post\" action=\"";
            // line 232
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" style=\"display: inline;\">
          ";
            // line 233
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "
          <input type=\"hidden\" id=\"finalSqlQuery\" name=\"sql_query\" value=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ai_generated_sql"] ?? null), "html", null, true);
            yield "\">
          <input type=\"hidden\" name=\"show_query\" value=\"1\">
          <button type=\"submit\" class=\"btn btn-primary\" onclick=\"updateSqlBeforeSubmit()\">
            ";
            // line 237
            yield PhpMyAdmin\Html\Generator::getIcon("b_nextpage", "", true);
            yield " ";
yield _gettext("Create Table");
            // line 238
            yield "          </button>
        </form>
      </div>
    </div>
  </div>
</div>
";
        }
        // line 245
        yield "
<script>
function copyAiSql() {
    const sqlTextarea = document.getElementById('aiGeneratedSqlTextarea');
    sqlTextarea.select();
    sqlTextarea.setSelectionRange(0, 99999);
    
    try {
        document.execCommand('copy');
        // 显示复制成功提示
        const btn = event.target.closest('button');
        const originalText = btn.innerHTML;
        btn.innerHTML = '";
        // line 257
        yield PhpMyAdmin\Html\Generator::getIcon("s_success", "", true);
        yield " ";
yield _gettext("Copied!");
        yield "';
        btn.classList.remove('btn-success');
        btn.classList.add('btn-outline-success');
        
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.classList.remove('btn-outline-success');
            btn.classList.add('btn-success');
        }, 2000);
    } catch (err) {
        console.error('Failed to copy: ', err);
        alert('";
yield _gettext("Copy failed, please select and copy manually");
        // line 268
        yield "');
    }
}

function showExecuteConfirm() {
    const modal = new bootstrap.Modal(document.getElementById('executeConfirmModal'));
    modal.show();
}

function updateSqlBeforeSubmit() {
    const editableSql = document.getElementById('editableSql');
    const finalSqlQuery = document.getElementById('finalSqlQuery');
    
    if (editableSql && finalSqlQuery) {
        finalSqlQuery.value = editableSql.value;
    }
}

/**
 * 从用户描述中自动提取可能的表名
 */
function extractTableNameFromPrompt() {
    const promptInput = document.getElementById('aiPromptInput');
    const tableNameInput = document.getElementById('aiTableNameInput');
    
    if (!promptInput || !tableNameInput || tableNameInput.value.trim()) {
        return; // 如果用户已经输入了表名，不自动提取
    }
    
    const prompt = promptInput.value.toLowerCase();
    
    // 常见的表名关键词匹配
    const patterns = [
        /(?:创建|建立|需要).*?(?:名为|叫做|命名为)\\s*([a-zA-Z0-9_]+)/,
        /(?:表名(?:是|为|：))\\s*([a-zA-Z0-9_]+)/,
        /([a-zA-Z0-9_]+)\\s*(?:表|数据表)/,
        /(?:用户|user)\\s*(?:表|管理|系统)/ && 'users',
        /(?:产品|product)\\s*(?:表|管理|系统)/ && 'products',
        /(?:订单|order)\\s*(?:表|管理|系统)/ && 'orders',
        /(?:评论|comment)\\s*(?:表|管理|系统)/ && 'comments',
        /(?:文章|article|post)\\s*(?:表|管理|系统)/ && 'articles'
    ];
    
    for (const pattern of patterns) {
        if (typeof pattern === 'string') {
            if (prompt.includes(pattern.split('&&')[0].slice(0, -1))) {
                tableNameInput.value = pattern.split('&&')[1];
                return;
            }
        } else {
            const match = prompt.match(pattern);
            if (match && match[1]) {
                tableNameInput.value = match[1];
                return;
            }
        }
    }
}

// 页面加载完成后的初始化
document.addEventListener('DOMContentLoaded', function() {
    // 增强textarea自动调整高度
    const aiPromptInput = document.getElementById('aiPromptInput');
    if (aiPromptInput) {
        aiPromptInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 200) + 'px';
            
            // 自动提取表名
            extractTableNameFromPrompt();
        });
        
        // 失去焦点时也尝试提取表名
        aiPromptInput.addEventListener('blur', extractTableNameFromPrompt);
    }
    
    // 表名输入框验证
    const aiTableNameInput = document.getElementById('aiTableNameInput');
    if (aiTableNameInput) {
        aiTableNameInput.addEventListener('input', function() {
            const value = this.value;
            const isValid = /^[a-zA-Z0-9_]*\$/.test(value);
            
            if (!isValid) {
                this.classList.add('is-invalid');
                this.setCustomValidity('";
yield _gettext("Table name can only contain letters, numbers, and underscores");
        // line 353
        yield "');
            } else {
                this.classList.remove('is-invalid');
                this.setCustomValidity('');
            }
        });
    }
    
    // 如果有AI生成的SQL，自动激活AI选项卡
    ";
        // line 362
        if (($context["ai_generated_sql"] ?? null)) {
            // line 363
            yield "    const aiTab = document.getElementById('ai-tab');
    const aiTabPane = document.getElementById('ai-create');
    const manualTab = document.getElementById('manual-tab');
    const manualTabPane = document.getElementById('manual-create');
    
    if (aiTab && aiTabPane && manualTab && manualTabPane) {
        // 激活AI选项卡
        aiTab.classList.add('active');
        aiTab.setAttribute('aria-selected', 'true');
        aiTabPane.classList.add('show', 'active');
        
        // 取消激活手动选项卡
        manualTab.classList.remove('active');
        manualTab.setAttribute('aria-selected', 'false');
        manualTabPane.classList.remove('show', 'active');
        
        // 滚动到AI选项卡内容，确保用户能看到预览
        setTimeout(() => {
            aiTabPane.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
        }, 100);
    }
    ";
        }
        // line 388
        yield "    
    // 增强表单提交体验
    const aiGenerateForm = document.getElementById('aiGenerateForm');
    if (aiGenerateForm) {
        aiGenerateForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type=\"submit\"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '";
        // line 396
        yield PhpMyAdmin\Html\Generator::getIcon("s_process", "", true);
        yield " ";
yield _gettext("Generating...");
        yield "';
                submitBtn.disabled = true;
                
                // 如果5秒后还没有响应，恢复按钮状态
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }
                }, 5000);
            }
        });
    }
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/create_table.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  794 => 396,  784 => 388,  757 => 363,  755 => 362,  744 => 353,  656 => 268,  639 => 257,  625 => 245,  616 => 238,  612 => 237,  606 => 234,  602 => 233,  598 => 232,  595 => 231,  588 => 226,  583 => 224,  579 => 223,  574 => 221,  571 => 220,  567 => 219,  562 => 216,  558 => 215,  552 => 211,  548 => 210,  544 => 209,  537 => 204,  535 => 203,  522 => 192,  518 => 191,  514 => 190,  510 => 189,  505 => 187,  501 => 186,  491 => 178,  487 => 176,  483 => 175,  476 => 173,  472 => 171,  468 => 170,  462 => 166,  458 => 165,  455 => 164,  453 => 163,  450 => 162,  446 => 161,  441 => 158,  438 => 157,  428 => 151,  422 => 150,  416 => 149,  411 => 148,  405 => 144,  389 => 141,  383 => 139,  377 => 137,  375 => 136,  371 => 134,  365 => 132,  359 => 130,  357 => 129,  353 => 127,  349 => 125,  345 => 123,  343 => 122,  338 => 120,  334 => 119,  330 => 118,  327 => 117,  310 => 116,  304 => 112,  300 => 111,  296 => 110,  292 => 109,  288 => 108,  278 => 101,  274 => 100,  269 => 97,  267 => 96,  261 => 92,  257 => 91,  252 => 89,  249 => 88,  245 => 87,  241 => 85,  239 => 84,  234 => 81,  230 => 80,  225 => 78,  222 => 77,  217 => 75,  213 => 74,  206 => 69,  202 => 68,  197 => 66,  194 => 65,  185 => 62,  175 => 55,  171 => 54,  165 => 53,  156 => 46,  149 => 42,  142 => 38,  135 => 35,  131 => 34,  125 => 33,  115 => 25,  111 => 24,  99 => 23,  94 => 20,  90 => 19,  78 => 18,  72 => 15,  67 => 12,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/create_table.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\create_table.twig");
    }
}
