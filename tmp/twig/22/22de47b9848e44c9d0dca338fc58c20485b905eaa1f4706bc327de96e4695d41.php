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

/* database/central_columns/main.twig */
class __TwigTemplate_a5c9094e1673af3a035fe84783441f36e9672051ce338981dfbe09fdb2a1ee6b extends Template
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
        // line 2
        yield "<div id=\"add_col_div\" class=\"topmargin\">
    <a href=\"#\">
        <span>";
        // line 4
        yield (((1 === CoreExtension::compare(($context["total_rows"] ?? null), 0))) ? ("+") : ("-"));
        yield "</span>";
yield _gettext("Add new column");
        // line 5
        yield "    </a>
    <form id=\"add_new\" class=\"new_central_col";
        // line 6
        yield (((0 !== CoreExtension::compare(($context["total_rows"] ?? null), 0))) ? (" hide") : (""));
        yield "\"
        method=\"post\" action=\"";
        // line 7
        yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        yield "\">
        ";
        // line 8
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
        <input type=\"hidden\" name=\"add_new_column\" value=\"add_new_column\">
        <div class=\"table-responsive\">
            <table class=\"table w-auto\">
                <thead>
                    <tr>
                        <th></th>
                        <th class=\"\" title=\"\" data-column=\"name\">
                            ";
yield _gettext("Name");
        // line 17
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"type\">
                            ";
yield _gettext("Type");
        // line 21
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"length\">
                            ";
yield _gettext("Length/Value");
        // line 25
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"default\">
                            ";
yield _gettext("Default");
        // line 29
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"collation\">
                            ";
yield _gettext("Collation");
        // line 33
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"attribute\">
                            ";
yield _gettext("Attribute");
        // line 37
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"isnull\">
                            ";
yield _gettext("Null");
        // line 41
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"\" title=\"\" data-column=\"extra\">
                            ";
yield _gettext("A_I");
        // line 45
        yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td name=\"col_name\" class=\"text-nowrap\">
                            ";
        // line 54
        yield from         $this->loadTemplate("columns_definitions/column_name.twig", "database/central_columns/main.twig", 54)->unwrap()->yield(CoreExtension::toArray(["column_number" => 0, "ci" => 0, "ci_offset" => 0, "column_meta" => [], "has_central_columns_feature" => false, "max_rows" =>         // line 60
($context["max_rows"] ?? null)]));
        // line 62
        yield "                        </td>
                        <td name=\"col_type\" class=\"text-nowrap\">
                          <select class=\"column_type\" name=\"field_type[0]\" id=\"field_0_1\">
                            ";
        // line 65
        yield PhpMyAdmin\Util::getSupportedDatatypes(true);
        yield "
                          </select>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_length\">
                          <input id=\"field_0_2\" type=\"text\" name=\"field_length[0]\" size=\"8\" value=\"\" class=\"textfield\">
                          <p class=\"enum_notice\" id=\"enum_notice_0_2\">
                            <a href=\"#\" class=\"open_enum_editor\">";
yield _gettext("Edit ENUM/SET values");
        // line 71
        yield "</a>
                          </p>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_default\">
                          <select name=\"field_default_type[0]\" id=\"field_0_3\" class=\"default_type\">
                            <option value=\"NONE\">";
yield _pgettext("for default", "None");
        // line 76
        yield "</option>
                            <option value=\"USER_DEFINED\">";
yield _gettext("As defined:");
        // line 77
        yield "</option>
                            <option value=\"NULL\">NULL</option>
                            <option value=\"CURRENT_TIMESTAMP\">CURRENT_TIMESTAMP</option>
                          </select>
                          ";
        // line 81
        if ((0 === CoreExtension::compare(($context["char_editing"] ?? null), "textarea"))) {
            // line 82
            yield "                            <textarea name=\"field_default_value[0]\" cols=\"15\" class=\"textfield default_value\"></textarea>
                          ";
        } else {
            // line 84
            yield "                            <input type=\"text\" name=\"field_default_value[0]\" size=\"12\" value=\"\" class=\"textfield default_value\">
                          ";
        }
        // line 86
        yield "                        </td>
                        <td name=\"collation\" class=\"text-nowrap\">
                          <select lang=\"en\" dir=\"ltr\" name=\"field_collation[0]\" id=\"field_0_4\">
                            <option value=\"\"></option>
                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 91
            yield "                              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 91), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 93
                yield "                                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 93), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 93), "html", null, true);
                yield "\">";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 94), "html", null, true);
                // line 95
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                          </select>
                        </td>
                        <td class=\"text-nowrap\" name=\"col_attribute\">
                            ";
        // line 102
        yield from         $this->loadTemplate("columns_definitions/column_attribute.twig", "database/central_columns/main.twig", 102)->unwrap()->yield(CoreExtension::toArray(["column_number" => 0, "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => [], "submit_attribute" => false, "attribute_types" =>         // line 109
($context["attribute_types"] ?? null)]));
        // line 111
        yield "                        </td>
                        <td class=\"text-nowrap\" name=\"col_isNull\">
                          <input name=\"field_null[0]\" id=\"field_0_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\">
                        </td>
                        <td class=\"text-nowrap\" name=\"col_extra\">
                          <input name=\"col_extra[0]\" id=\"field_0_7\" type=\"checkbox\" value=\"auto_increment\">
                        </td>
                        <td>
                            <input id=\"add_column_save\" class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Save");
        // line 119
        yield "\">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
";
        // line 127
        if ((0 >= CoreExtension::compare(($context["total_rows"] ?? null), 0))) {
            // line 128
            yield "  <div class=\"alert alert-info\" role=\"alert\">
    ";
yield _gettext("The central list of columns for the current database is empty");
            // line 130
            yield "  </div>
";
        } else {
            // line 132
            yield "    <table class=\"table table-borderless table-sm w-auto d-inline-block navigation\">
        <tr>
            <td class=\"navigation_separator\"></td>
            ";
            // line 135
            if ((0 <= CoreExtension::compare((($context["pos"] ?? null) - ($context["max_rows"] ?? null)), 0))) {
                // line 136
                yield "                <td>
                    <form action=\"";
                // line 137
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 138
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pos"] ?? null) - ($context["max_rows"] ?? null)), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&lt\">
                    </form>
                </td>
            ";
            }
            // line 145
            yield "            ";
            if ((1 === CoreExtension::compare(($context["tn_nbTotalPage"] ?? null), 1))) {
                // line 146
                yield "                <td>
                    <form action=\"";
                // line 147
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 148
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        ";
                // line 150
                yield ($context["tn_page_selector"] ?? null);
                yield "
                    </form>
                </td>
            ";
            }
            // line 154
            yield "            ";
            if ((-1 === CoreExtension::compare((($context["pos"] ?? null) + ($context["max_rows"] ?? null)), ($context["total_rows"] ?? null)))) {
                // line 155
                yield "                <td>
                    <form action=\"";
                // line 156
                yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
                yield "\" method=\"post\">
                        ";
                // line 157
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                        <input type=\"hidden\" name=\"pos\" value=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pos"] ?? null) + ($context["max_rows"] ?? null)), "html", null, true);
                yield "\">
                        <input type=\"hidden\" name=\"total_rows\" value=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
                yield "\">
                        <input class=\"btn btn-secondary ajax\" type=\"submit\" name=\"navig\" value=\"&gt\">
                    </form>
                </td>
            ";
            }
            // line 164
            yield "            <td class=\"navigation_separator\"></td>
            <td>
                <span>";
yield _gettext("Filter rows");
            // line 166
            yield ":</span>
                <input type=\"text\" class=\"filter_rows\" placeholder=\"";
yield _gettext("Search this table");
            // line 167
            yield "\">
            </td>
            <td class=\"navigation_separator\"></td>
        </tr>
    </table>
";
        }
        // line 173
        yield "
<table class=\"table table-borderless table-sm w-auto d-inline-block\">
    <tr>
        <td class=\"navigation_separator largescreenonly\"></td>
        <td class=\"central_columns_navigation\">
            ";
        // line 178
        yield PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", _gettext("Add column"));
        yield "
            <form id=\"add_column\" action=\"";
        // line 179
        yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
        yield "\" method=\"post\">
                ";
        // line 180
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
                <input type=\"hidden\" name=\"add_column\" value=\"add\">
                <input type=\"hidden\" name=\"pos\" value=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pos"] ?? null), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"total_rows\" value=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total_rows"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 185
        yield "                <select name=\"table-select\" id=\"table-select\">
                    <option value=\"\" disabled=\"disabled\" selected=\"selected\">
                        ";
yield _gettext("Select a table");
        // line 188
        yield "                    </option>
                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 190
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"]);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "                </select>
                <select name=\"column-select\" id=\"column-select\">
                    <option value=\"\" selected=\"selected\">";
yield _gettext("Select a column.");
        // line 194
        yield "</option>
                </select>
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Add");
        // line 196
        yield "\">
            </form>
        </td>
        <td class=\"navigation_separator largescreenonly\"></td>
    </tr>
</table>
";
        // line 202
        if ((1 === CoreExtension::compare(($context["total_rows"] ?? null), 0))) {
            // line 203
            yield "    <form method=\"post\" id=\"del_form\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/database/central-columns");
            yield "\">
        ";
            // line 204
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
            yield "
        <input id=\"del_col_name\" type=\"hidden\" name=\"col_name\" value=\"\">
        <input type=\"hidden\" name=\"pos\" value=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pos"] ?? null), "html", null, true);
            yield "\">
        <input type=\"hidden\" name=\"delete_save\" value=\"delete\">
    </form>
    <div id=\"tableslistcontainer\">
        <form name=\"tableslistcontainer\">
            <table id=\"table_columns\" class=\"table table-striped table-hover tablesorter w-auto\">
                ";
            // line 212
            $context["class"] = "column_heading";
            // line 213
            yield "                ";
            $context["title"] = _gettext("Click to sort.");
            // line 214
            yield "                <thead>
                    <tr>
                        <th class=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\"></th>
                        <th class=\"hide\"></th>
                        <th class=\"column_action\" colspan=\"2\">";
yield _gettext("Action");
            // line 218
            yield "</th>
                        <th class=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"name\">
                            ";
yield _gettext("Name");
            // line 221
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"type\">
                            ";
yield _gettext("Type");
            // line 225
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"length\">
                            ";
yield _gettext("Length/Value");
            // line 229
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"default\">
                            ";
yield _gettext("Default");
            // line 233
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"collation\">
                            ";
yield _gettext("Collation");
            // line 237
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"attribute\">
                            ";
yield _gettext("Attribute");
            // line 241
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"isnull\">
                            ";
yield _gettext("Null");
            // line 245
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                        <th class=\"";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
            yield "\" data-column=\"extra\">
                            ";
yield _gettext("A_I");
            // line 249
            yield "                            <div class=\"sorticon\"></div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 254
            $context["row_num"] = 0;
            // line 255
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 256
                yield "                        ";
                // line 257
                yield "                        <tr data-rownum=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("f_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\">
                            ";
                // line 258
                yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
                yield "
                            <input type=\"hidden\" name=\"edit_save\" value=\"save\">
                            <td class=\"text-nowrap\">
                                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\"
                                value=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["row"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["col_name"] ?? null) : null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("checkbox_row_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\">
                            </td>
                            <td id=\"";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("edit_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\" class=\"edit text-center\">
                                <a href=\"#\"> ";
                // line 265
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                yield "</a>
                            </td>
                            <td class=\"del_row\" data-rownum = \"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\">
                                <a href=\"#\">";
                // line 268
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete"));
                yield "</a>
                                <input type=\"submit\" data-rownum = \"";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-secondary edit_cancel_form\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Cancel"), "html", null, true);
                yield "\">
                            </td>
                            <td id=\"";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("save_" . ($context["row_num"] ?? null)), "html", null, true);
                yield "\" class=\"hide\">
                                <input type=\"submit\" data-rownum=\"";
                // line 272
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-primary edit_save_form\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_gettext("Save"), "html", null, true);
                yield "\">
                            </td>
                            <td name=\"col_name\" class=\"text-nowrap\">
                                <span>";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["row"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["col_name"] ?? null) : null), "html", null, true);
                yield "</span>
                                <input name=\"orig_col_name\" type=\"hidden\" value=\"";
                // line 276
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["row"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["col_name"] ?? null) : null), "html", null, true);
                yield "\">
                                ";
                // line 277
                yield from                 $this->loadTemplate("columns_definitions/column_name.twig", "database/central_columns/main.twig", 277)->unwrap()->yield(CoreExtension::toArray(["column_number" =>                 // line 278
($context["row_num"] ?? null), "ci" => 0, "ci_offset" => 0, "column_meta" => ["Field" => (($__internal_compile_3 =                 // line 282
$context["row"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["col_name"] ?? null) : null)], "has_central_columns_feature" => false, "max_rows" =>                 // line 285
($context["max_rows"] ?? null)]));
                // line 287
                yield "                            </td>
                            <td name=\"col_type\" class=\"text-nowrap\">
                              <span>";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["row"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["col_type"] ?? null) : null), "html", null, true);
                yield "</span>
                              <select class=\"column_type\" name=\"field_type[";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_1\">
                                ";
                // line 291
                yield PhpMyAdmin\Util::getSupportedDatatypes(true, (($__internal_compile_5 = ($context["types_upper"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["row_num"] ?? null)] ?? null) : null));
                yield "
                              </select>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_length\">
                              <span>";
                // line 295
                (((($__internal_compile_6 = $context["row"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["col_length"] ?? null) : null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = $context["row"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["col_length"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "</span>
                              <input id=\"field_";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_2\" type=\"text\" name=\"field_length[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" size=\"8\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = $context["row"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["col_length"] ?? null) : null), "html", null, true);
                yield "\" class=\"textfield\">
                              <p class=\"enum_notice\" id=\"enum_notice_";
                // line 297
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_2\">
                                <a href=\"#\" class=\"open_enum_editor\">";
yield _gettext("Edit ENUM/SET values");
                // line 298
                yield "</a>
                              </p>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_default\">
                              ";
                // line 302
                if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], "col_default", [], "array", true, true, false, 302)) {
                    // line 303
                    yield "                                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = $context["row"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["col_default"] ?? null) : null), "html", null, true);
                    yield "</span>
                              ";
                } else {
                    // line 305
                    yield "                                <span>";
yield _gettext("None");
                    yield "</span>
                              ";
                }
                // line 307
                yield "                              <select name=\"field_default_type[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_3\" class=\"default_type\">
                                <option value=\"NONE\"";
                // line 308
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 308), "DefaultType", [], "array", true, true, false, 308) && (0 === CoreExtension::compare((($__internal_compile_10 = (($__internal_compile_11 = ($context["rows_meta"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["DefaultType"] ?? null) : null), "NONE")))) ? (" selected") : (""));
                yield ">
                                  ";
yield _pgettext("for default", "None");
                // line 310
                yield "                                </option>
                                <option value=\"USER_DEFINED\"";
                // line 311
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 311), "DefaultType", [], "array", true, true, false, 311) && (0 === CoreExtension::compare((($__internal_compile_12 = (($__internal_compile_13 = ($context["rows_meta"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["DefaultType"] ?? null) : null), "USER_DEFINED")))) ? (" selected") : (""));
                yield ">
                                  ";
yield _gettext("As defined:");
                // line 313
                yield "                                </option>
                                <option value=\"NULL\"";
                // line 314
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 314), "DefaultType", [], "array", true, true, false, 314) && (0 === CoreExtension::compare((($__internal_compile_14 = (($__internal_compile_15 = ($context["rows_meta"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["DefaultType"] ?? null) : null), "NULL")))) ? (" selected") : (""));
                yield ">
                                  NULL
                                </option>
                                <option value=\"CURRENT_TIMESTAMP\"";
                // line 317
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["rows_meta"] ?? null), ($context["row_num"] ?? null), [], "array", false, true, false, 317), "DefaultType", [], "array", true, true, false, 317) && (0 === CoreExtension::compare((($__internal_compile_16 = (($__internal_compile_17 = ($context["rows_meta"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[($context["row_num"] ?? null)] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["DefaultType"] ?? null) : null), "CURRENT_TIMESTAMP")))) ? (" selected") : (""));
                yield ">
                                  CURRENT_TIMESTAMP
                                </option>
                              </select>
                              ";
                // line 321
                if ((0 === CoreExtension::compare(($context["char_editing"] ?? null), "textarea"))) {
                    // line 322
                    yield "                                <textarea name=\"field_default_value[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                    yield "]\" cols=\"15\" class=\"textfield default_value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_18 = ($context["default_values"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 324
                    yield "                                <input type=\"text\" name=\"field_default_value[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                    yield "]\" size=\"12\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = ($context["default_values"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[($context["row_num"] ?? null)] ?? null) : null), "html", null, true);
                    yield "\" class=\"textfield default_value\">
                              ";
                }
                // line 326
                yield "                            </td>
                            <td name=\"collation\" class=\"text-nowrap\">
                                <span>";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = $context["row"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["col_collation"] ?? null) : null), "html", null, true);
                yield "</span>
                                <select lang=\"en\" dir=\"ltr\" name=\"field_collation[";
                // line 329
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_4\">
                                  <option value=\"\"></option>
                                  ";
                // line 331
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                    // line 332
                    yield "                                    <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 332), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 332), "html", null, true);
                    yield "\">
                                      ";
                    // line 333
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 333));
                    foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                        // line 334
                        yield "                                        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 334), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 334), "html", null, true);
                        yield "\"";
                        // line 335
                        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 335), (($__internal_compile_21 = $context["row"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["col_collation"] ?? null) : null)))) ? (" selected") : (""));
                        yield ">";
                        // line 336
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 336), "html", null, true);
                        // line 337
                        yield "</option>
                                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 339
                    yield "                                    </optgroup>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                yield "                                </select>
                            </td>
                            <td class=\"text-nowrap\" name=\"col_attribute\">
                                <span>";
                // line 344
                (((($__internal_compile_22 = $context["row"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["col_attribute"] ?? null) : null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_23 = $context["row"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["col_attribute"] ?? null) : null), "html", null, true)) : (yield ""));
                yield "</span>
                                ";
                // line 345
                yield from                 $this->loadTemplate("columns_definitions/column_attribute.twig", "database/central_columns/main.twig", 345)->unwrap()->yield(CoreExtension::toArray(["column_number" =>                 // line 346
($context["row_num"] ?? null), "ci" => 5, "ci_offset" => 0, "extracted_columnspec" => [], "column_meta" => (($__internal_compile_24 =                 // line 350
$context["row"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["col_attribute"] ?? null) : null), "submit_attribute" => false, "attribute_types" =>                 // line 352
($context["attribute_types"] ?? null)]));
                // line 354
                yield "                            </td>
                            <td class=\"text-nowrap\" name=\"col_isNull\">
                                <span>";
                // line 356
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($__internal_compile_25 = $context["row"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["col_isNull"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                yield "</span>
                                <input name=\"field_null[";
                // line 357
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_6\" type=\"checkbox\" value=\"YES\" class=\"allow_null\"";
                // line 358
                yield ((((( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_26 = $context["row"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["col_isNull"] ?? null) : null)) && (0 !== CoreExtension::compare((($__internal_compile_27 = $context["row"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["col_isNull"] ?? null) : null), "NO"))) && (0 !== CoreExtension::compare((($__internal_compile_28 = $context["row"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["col_isNull"] ?? null) : null), "NOT NULL"))) && (0 !== CoreExtension::compare((($__internal_compile_29 = $context["row"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["col_isNull"] ?? null) : null), 0)))) ? (" checked") : (""));
                yield ">
                            </td>
                            <td class=\"text-nowrap\" name=\"col_extra\">
                              <span>";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_30 = $context["row"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["col_extra"] ?? null) : null), "html", null, true);
                yield "</span>
                              <input name=\"col_extra[";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "]\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_num"] ?? null), "html", null, true);
                yield "_7\" type=\"checkbox\" value=\"auto_increment\"";
                // line 363
                yield ((( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_31 = $context["row"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["col_extra"] ?? null) : null)) && (0 === CoreExtension::compare((($__internal_compile_32 = $context["row"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["col_extra"] ?? null) : null), "auto_increment")))) ? (" checked") : (""));
                yield ">
                            </td>
                        </tr>
                        ";
                // line 366
                $context["row_num"] = (($context["row_num"] ?? null) + 1);
                // line 367
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            yield "                </tbody>
            </table>

            ";
            // line 371
            yield from             $this->loadTemplate("select_all.twig", "database/central_columns/main.twig", 371)->unwrap()->yield(CoreExtension::toArray(["text_dir" =>             // line 372
($context["text_dir"] ?? null), "form_name" => "tableslistcontainer"]));
            // line 375
            yield "            <button class=\"btn btn-link mult_submit change_central_columns\" type=\"submit\" name=\"edit_central_columns\"
                    value=\"edit central columns\" title=\"";
yield _gettext("Edit");
            // line 376
            yield "\">
                ";
            // line 377
            yield PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
            yield "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"delete_central_columns\"
                    value=\"remove_from_central_columns\" title=\"";
yield _gettext("Delete");
            // line 380
            yield "\">
                ";
            // line 381
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete"));
            yield "
            </button>
        </form>
    </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/central_columns/main.twig";
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
        return array (  874 => 381,  871 => 380,  864 => 377,  861 => 376,  857 => 375,  855 => 372,  854 => 371,  849 => 368,  843 => 367,  841 => 366,  835 => 363,  830 => 362,  826 => 361,  820 => 358,  815 => 357,  811 => 356,  807 => 354,  805 => 352,  804 => 350,  803 => 346,  802 => 345,  798 => 344,  793 => 341,  786 => 339,  779 => 337,  777 => 336,  774 => 335,  768 => 334,  764 => 333,  757 => 332,  753 => 331,  746 => 329,  742 => 328,  738 => 326,  730 => 324,  722 => 322,  720 => 321,  713 => 317,  707 => 314,  704 => 313,  699 => 311,  696 => 310,  691 => 308,  684 => 307,  678 => 305,  672 => 303,  670 => 302,  664 => 298,  659 => 297,  651 => 296,  647 => 295,  640 => 291,  634 => 290,  630 => 289,  626 => 287,  624 => 285,  623 => 282,  622 => 278,  621 => 277,  617 => 276,  613 => 275,  605 => 272,  601 => 271,  594 => 269,  590 => 268,  586 => 267,  581 => 265,  577 => 264,  570 => 262,  563 => 258,  556 => 257,  554 => 256,  549 => 255,  547 => 254,  540 => 249,  533 => 247,  529 => 245,  522 => 243,  518 => 241,  511 => 239,  507 => 237,  500 => 235,  496 => 233,  489 => 231,  485 => 229,  478 => 227,  474 => 225,  467 => 223,  463 => 221,  456 => 219,  453 => 218,  447 => 216,  443 => 214,  440 => 213,  438 => 212,  429 => 206,  424 => 204,  419 => 203,  417 => 202,  409 => 196,  404 => 194,  399 => 192,  388 => 190,  384 => 189,  381 => 188,  376 => 185,  372 => 183,  368 => 182,  363 => 180,  359 => 179,  355 => 178,  348 => 173,  340 => 167,  336 => 166,  331 => 164,  323 => 159,  319 => 158,  315 => 157,  311 => 156,  308 => 155,  305 => 154,  298 => 150,  294 => 149,  290 => 148,  286 => 147,  283 => 146,  280 => 145,  272 => 140,  268 => 139,  264 => 138,  260 => 137,  257 => 136,  255 => 135,  250 => 132,  246 => 130,  242 => 128,  240 => 127,  230 => 119,  219 => 111,  217 => 109,  216 => 102,  211 => 99,  204 => 97,  197 => 95,  195 => 94,  189 => 93,  185 => 92,  178 => 91,  174 => 90,  168 => 86,  164 => 84,  160 => 82,  158 => 81,  152 => 77,  148 => 76,  140 => 71,  130 => 65,  125 => 62,  123 => 60,  122 => 54,  111 => 45,  105 => 41,  99 => 37,  93 => 33,  87 => 29,  81 => 25,  75 => 21,  69 => 17,  57 => 8,  53 => 7,  49 => 6,  46 => 5,  42 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/central_columns/main.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\central_columns\\main.twig");
    }
}
