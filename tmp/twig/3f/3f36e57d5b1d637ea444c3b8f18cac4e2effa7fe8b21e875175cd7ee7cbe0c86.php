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

/* database/multi_table_query/form.twig */
class __TwigTemplate_cafb1e14b2bcdc8536e1427bb0e93acc17d56ce76379a55fcdbf92eae58dc518 extends Template
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
        yield "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/database/multi-table-query", ["db" => ($context["db"] ?? null)]);
        yield "\">
      ";
yield _gettext("Multi-table query");
        // line 5
        yield "    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 9
        yield PhpMyAdmin\Url::getFromRoute("/database/qbe", ["db" => ($context["db"] ?? null)]);
        yield "\">
      ";
yield _gettext("Query by example");
        // line 11
        yield "    </a>
  </li>
</ul>

<div class=\"mb-3\">
  <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#queryWindow\" aria-expanded=\"true\" aria-controls=\"queryWindow\">
    ";
yield _gettext("Query window");
        // line 18
        yield "  </button>
</div>
<div class=\"collapse show mb-3\" id=\"queryWindow\">

<form action=\"\" id=\"multi_table_query_form\" class=\"multi_table_query_form query_form\">
    <input type=\"hidden\" id=\"db_name\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">
    <fieldset class=\"pma-fieldset\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 26
            yield "            <div class=\"d-none\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 26), "html", null, true);
            yield "\">
                <option value=\"*\">*</option>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "columns", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 29
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["default_no_of_columns"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 35
            yield "            ";
            if ((0 === CoreExtension::compare($context["id"], 0))) {
                yield "<div class=\"d-none\" id=\"new_column_layout\">";
            }
            // line 36
            yield "            <fieldset class=\"pma-fieldset column_details query-form__fieldset--inline position-relative\">
                <select class=\"tableNameSelect query-form__select--inline\">
                    <option value=\"\">";
yield _gettext("select table");
            // line 38
            yield "</option>
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["keyTableName"] => $context["table"]) {
                // line 40
                yield "                      <option data-hash=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 40), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyTableName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                </select>
                <span>.</span>
                <select class=\"columnNameSelect query-form__select--inline\">
                    <option value=\"\">";
yield _gettext("select column");
            // line 45
            yield "</option>
                </select>
                <br>
                <input type=\"checkbox\" checked=\"checked\" class=\"show_col\">
                <span>";
yield _gettext("Show");
            // line 49
            yield "</span>
                <br>
                <input type=\"text\" placeholder=\"";
yield _gettext("Table alias");
            // line 51
            yield "\" class=\"table_alias\">
                <input type=\"text\" placeholder=\"";
yield _gettext("Column alias");
            // line 52
            yield "\" class=\"col_alias\">
                <br>
                <input type=\"checkbox\"
                    title=\"";
yield _gettext("Use this column in criteria");
            // line 55
            yield "\"
                    class=\"criteria_col\">

                <button class=\"btn btn-link p-0 jsCriteriaButton\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#criteriaOptions";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\" aria-expanded=\"false\" aria-controls=\"criteriaOptions";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\">
                  ";
yield _gettext("criteria");
            // line 60
            yield "                </button>
                <div class=\"collapse jsCriteriaOptions\" id=\"criteriaOptions";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\">

                <div>
                    <table class=\"table table-sm table-borderless align-middle w-auto\">

                        <tr class=\"sort_order query-form__tr--bg-none\">
                            <td>";
yield _gettext("Sort");
            // line 67
            yield "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\">";
yield _gettext("Ascending");
            yield "</td>
                            <td><input type=\"radio\" name=\"sort[";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\">";
yield _gettext("Descending");
            yield "</td>
                        </tr>

                        <tr class=\"logical_operator query-form__tr--bg-none query-form__tr--hide\">
                            <td>";
yield _gettext("Add as");
            // line 73
            yield "</td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\"
                                    value=\"AND\"
                                    class=\"logical_op\"
                                    checked=\"checked\">
                                AND
                            </td>
                            <td>
                                <input type=\"radio\"
                                    name=\"logical_op[";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "]\"
                                    value=\"OR\"
                                    class=\"logical_op\">
                                OR
                            </td>
                        </tr>

                        <tr>
                            <td>Column</td>
                            <td colspan=\"2\">
                                <select class=\"columnNameSelect query-form__select--inline opColumn\">
                                    <option value=\"\">";
yield _gettext("select column");
            // line 95
            yield "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"query-form__tr--bg-none\">
                            <td>Op </td>
                            <td>
                                <select class=\"criteria_op\">
                                    <option value=\"=\">=</option>
                                    <option value=\">\">&gt;</option>
                                    <option value=\">=\">&gt;=</option>
                                    <option value=\"<\">&lt;</option>
                                    <option value=\"<=\">&lt;=</option>
                                    <option value=\"!=\">!=</option>
                                    <option value=\"LIKE\">LIKE</option>
                                    <option value=\"LIKE %...%\">LIKE %...%</option>
                                    <option value=\"NOT LIKE\">NOT LIKE</option>
                                    <option value=\"NOT LIKE %...%\">NOT LIKE %...%</option>
                                    <option value=\"IN (...)\">IN (...)</option>
                                    <option value=\"NOT IN (...)\">NOT IN (...)</option>
                                    <option value=\"BETWEEN\">BETWEEN</option>
                                    <option value=\"NOT BETWEEN\">NOT BETWEEN</option>
                                    <option value=\"IS NULL\">IS NULL</option>
                                    <option value=\"IS NOT NULL\">IS NOT NULL</option>
                                    <option value=\"REGEXP\">REGEXP</option>
                                    <option value=\"REGEXP ^...\$\">REGEXP ^...\$</option>
                                    <option value=\"NOT REGEXP\">NOT REGEXP</option>
                                </select>
                            </td>
                            <td>
                                <select class=\"criteria_rhs\">
                                    <option value=\"text\">";
yield _gettext("Text");
            // line 127
            yield "</option>
                                    <option value=\"anotherColumn\">";
yield _gettext("Another column");
            // line 128
            yield "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"rhs_table query-form__tr--hide query-form__tr--bg-none\">
                            <td></td>
                            <td>
                                <select  class=\"tableNameSelect\">
                                    <option value=\"\">";
yield _gettext("select table");
            // line 137
            yield "</option>
                                    ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
            foreach ($context['_seq'] as $context["keyTableName"] => $context["table"]) {
                // line 139
                yield "                                        <option data-hash=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["table"], "hash", [], "any", false, false, false, 139), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyTableName"], "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyTableName'], $context['table'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            yield "                                </select><span>.</span>
                            </td>
                            <td>
                                <select class=\"columnNameSelect query-form__select--inline\">
                                    <option value=\"\">";
yield _gettext("select column");
            // line 145
            yield "</option>
                                </select>
                            </td>
                        </tr>

                        <tr class=\"rhs_text query-form__tr--bg-none\">
                            <td></td>
                            <td colspan=\"2\">
                                <input type=\"text\"
                                    class=\"rhs_text_val query-form__input--wide\"
                                    placeholder=\"";
yield _gettext("Enter criteria as free text");
            // line 155
            yield "\">
                            </td>
                        </tr>

                        </table>
                    </div>
                </div>
                <button type=\"button\" class=\"btn-close position-absolute top-0 end-0 jsRemoveColumn\" aria-label=\"";
yield _gettext("Remove this column");
            // line 162
            yield "\"></button>
            </fieldset>
            ";
            // line 164
            if ((0 === CoreExtension::compare($context["id"], 0))) {
                yield "</div>";
            }
            // line 165
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "
        <fieldset class=\"pma-fieldset query-form__fieldset--inline\">
            <input class=\"btn btn-secondary\" type=\"button\" value=\"";
yield _gettext("+ Add column");
        // line 168
        yield "\" id=\"add_column_button\">
        </fieldset>

        <fieldset class=\"pma-fieldset\">
              ";
        // line 173
        yield "                <textarea id=\"MultiSqlquery\"
                    class=\"query-form__multi-sql-query\"
                    cols=\"80\"
                    rows=\"4\"
                    name=\"sql_query\"
                    dir=\"ltr\"></textarea>
        </fieldset>
    </fieldset>

    <fieldset class=\"pma-fieldset tblFooters\">
        <input class=\"btn btn-secondary\" type=\"button\" id=\"update_query_button\" value=\"";
yield _gettext("Update query");
        // line 183
        yield "\">
        <input class=\"btn btn-primary\" type=\"button\" id=\"submit_query\" value=\"";
yield _gettext("Submit query");
        // line 184
        yield "\">
    </fieldset>
</form>
</div>
<div id=\"sql_results\"></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/multi_table_query/form.twig";
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
        return array (  394 => 184,  390 => 183,  377 => 173,  371 => 168,  366 => 166,  360 => 165,  356 => 164,  352 => 162,  342 => 155,  329 => 145,  322 => 141,  309 => 139,  305 => 138,  302 => 137,  290 => 128,  286 => 127,  251 => 95,  236 => 84,  225 => 76,  220 => 73,  210 => 69,  204 => 68,  201 => 67,  191 => 61,  188 => 60,  181 => 58,  176 => 55,  170 => 52,  166 => 51,  161 => 49,  154 => 45,  148 => 42,  135 => 40,  131 => 39,  128 => 38,  123 => 36,  118 => 35,  114 => 34,  111 => 33,  104 => 31,  93 => 29,  89 => 28,  83 => 26,  79 => 25,  74 => 23,  67 => 18,  58 => 11,  53 => 9,  47 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/multi_table_query/form.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\multi_table_query\\form.twig");
    }
}
