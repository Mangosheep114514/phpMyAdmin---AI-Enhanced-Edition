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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_9f78e14c4d3cd1dbdaca93426d5bfd0bc7edcf497dc70c925e448d46523256b1 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\" class=\"";
        // line 2
        yield (((0 === CoreExtension::compare(($context["action"] ?? null), PhpMyAdmin\Url::getFromRoute("/table/create")))) ? ("create_table") : ("append_fields"));
        // line 3
        yield "_form ajax lock-page\">
    ";
        // line 4
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "
    ";
        // line 6
        yield "    ";
        // line 7
        yield "    ";
        // line 8
        yield "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 9
        (( !Twig\Extension\CoreExtension::testEmpty(($context["primary_indexes"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["primary_indexes"] ?? null), "html", null, true)) : (yield "[]"));
        yield "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 11
        (( !Twig\Extension\CoreExtension::testEmpty(($context["unique_indexes"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_indexes"] ?? null), "html", null, true)) : (yield "[]"));
        yield "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 13
        (( !Twig\Extension\CoreExtension::testEmpty(($context["indexes"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["indexes"] ?? null), "html", null, true)) : (yield "[]"));
        yield "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 15
        (( !Twig\Extension\CoreExtension::testEmpty(($context["fulltext_indexes"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fulltext_indexes"] ?? null), "html", null, true)) : (yield "[]"));
        yield "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 17
        (( !Twig\Extension\CoreExtension::testEmpty(($context["spatial_indexes"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["spatial_indexes"] ?? null), "html", null, true)) : (yield "[]"));
        yield "\">

    ";
        // line 19
        if ((0 === CoreExtension::compare(($context["action"] ?? null), PhpMyAdmin\Url::getFromRoute("/table/create")))) {
            // line 20
            yield "        <!-- Create Table Mode Selector -->
        <div class=\"row mb-4\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div id=\"table_name_col_no_outer\" class=\"mb-3\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-md-6\">
                                    <label class=\"form-label\">";
yield _gettext("Table name");
            // line 28
            yield ":</label>
                                    <input type=\"text\"
                                        name=\"table\"
                                        class=\"form-control\"
                                        style=\"max-width: 300px;\"
                                        maxlength=\"64\"
                                        value=\"";
            // line 34
            (((isset($context["table"]) || array_key_exists("table", $context))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true)) : (yield ""));
            yield "\"
                                        autofocus required>
                                </div>
                                <div class=\"col-md-6\">
                                    <label class=\"form-label\">";
yield _gettext("Number of columns");
            // line 38
            yield ":</label>
                                    <div class=\"input-group\" style=\"max-width: 200px;\">
                                        <input type=\"number\"
                                            id=\"added_fields\"
                                            name=\"added_fields\"
                                            class=\"form-control\"
                                            value=\"1\"
                                            min=\"1\"
                                            onfocus=\"this.select()\">
                                        <button class=\"btn btn-secondary\" type=\"button\" name=\"submit_num_fields\">
                                            ";
yield _gettext("Go");
            // line 49
            yield "                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 59
        yield "    ";
        if (is_iterable(($context["content_cells"] ?? null))) {
            // line 60
            yield "        ";
            yield from             $this->loadTemplate("columns_definitions/table_fields_definitions.twig", "columns_definitions/column_definitions_form.twig", 60)->unwrap()->yield(CoreExtension::toArray(["is_backup" =>             // line 61
($context["is_backup"] ?? null), "fields_meta" =>             // line 62
($context["fields_meta"] ?? null), "relation_parameters" =>             // line 63
($context["relation_parameters"] ?? null), "content_cells" =>             // line 64
($context["content_cells"] ?? null), "change_column" =>             // line 65
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 66
($context["is_virtual_columns_supported"] ?? null), "server_version" =>             // line 67
($context["server_version"] ?? null), "browse_mime" =>             // line 68
($context["browse_mime"] ?? null), "supports_stored_keyword" =>             // line 69
($context["supports_stored_keyword"] ?? null), "max_rows" =>             // line 70
($context["max_rows"] ?? null), "char_editing" =>             // line 71
($context["char_editing"] ?? null), "attribute_types" =>             // line 72
($context["attribute_types"] ?? null), "privs_available" =>             // line 73
($context["privs_available"] ?? null), "max_length" =>             // line 74
($context["max_length"] ?? null), "charsets" =>             // line 75
($context["charsets"] ?? null)]));
            // line 77
            yield "    ";
        }
        // line 78
        yield "    ";
        if ((0 === CoreExtension::compare(($context["action"] ?? null), PhpMyAdmin\Url::getFromRoute("/table/create")))) {
            // line 79
            yield "        <div class=\"responsivetable\">
        <table class=\"table table-borderless w-auto align-middle mb-0\">
            <tr class=\"align-top\">
                <th>";
yield _gettext("Table comments:");
            // line 82
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
yield _gettext("Collation:");
            // line 84
            yield "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
yield _gettext("Storage Engine:");
            // line 88
            yield "                    ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
            yield "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th id=\"storage-engine-connection\">
                    ";
yield _gettext("Connection:");
            // line 93
            yield "                    ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("federated-create-connection");
            yield "
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"";
            // line 102
            (((isset($context["comment"]) || array_key_exists("comment", $context))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["comment"] ?? null), "html", null, true)) : (yield ""));
            yield "\"
                        class=\"textfield\">
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
                    <option value=\"\"></option>
                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 110
                yield "                      <optgroup label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 110), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 110), "html", null, true);
                yield "\">
                        ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                    // line 112
                    yield "                          <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 112), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 112), "html", null, true);
                    yield "\"";
                    // line 113
                    yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 113), ($context["tbl_collation"] ?? null)))) ? (" selected") : (""));
                    yield ">";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 114), "html", null, true);
                    // line 115
                    yield "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "                      </optgroup>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                  <select class=\"form-select\" name=\"tbl_storage_engine\" aria-label=\"";
yield _gettext("Storage engine");
            // line 123
            yield "\">
                    ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                // line 125
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 125), "html", null, true);
                yield "\"";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 125))) {
                    yield " title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 125), "html", null, true);
                    yield "\"";
                }
                // line 126
                yield ((((0 === CoreExtension::compare(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 126)), Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["tbl_storage_engine"] ?? null)))) || (Twig\Extension\CoreExtension::testEmpty(($context["tbl_storage_engine"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 126)))) ? (" selected") : (""));
                yield ">";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 127), "html", null, true);
                // line 128
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "                  </select>
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 137
            (((isset($context["connection"]) || array_key_exists("connection", $context))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["connection"] ?? null), "html", null, true)) : (yield ""));
            yield "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\">
                </td>
            </tr>
            ";
            // line 143
            if (($context["have_partitioning"] ?? null)) {
                // line 144
                yield "                <tr class=\"align-top\">
                    <th colspan=\"5\">
                        ";
yield _gettext("PARTITION definition:");
                // line 147
                yield "                        ";
                yield PhpMyAdmin\Html\MySQLDocumentation::show("Partitioning");
                yield "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 152
                yield from                 $this->loadTemplate("columns_definitions/partitions.twig", "columns_definitions/column_definitions_form.twig", 152)->unwrap()->yield(CoreExtension::toArray(["partition_details" =>                 // line 153
($context["partition_details"] ?? null), "storage_engines" =>                 // line 154
($context["storage_engines"] ?? null)]));
                // line 156
                yield "                    </td>
                </tr>
            ";
            }
            // line 159
            yield "        </table>
        </div>
    ";
        }
        // line 162
        yield "    <fieldset class=\"pma-fieldset tblFooters\">
        ";
        // line 163
        if (((0 === CoreExtension::compare(($context["action"] ?? null), PhpMyAdmin\Url::getFromRoute("/table/add-field"))) || (0 === CoreExtension::compare(($context["action"] ?? null), PhpMyAdmin\Url::getFromRoute("/table/structure/save"))))) {
            // line 164
            yield "            <input type=\"checkbox\" name=\"online_transaction\" value=\"ONLINE_TRANSACTION_ENABLED\" />";
yield _pgettext("Online transaction part of the SQL DDL for InnoDB", "Online transaction");
            yield PhpMyAdmin\Html\MySQLDocumentation::show("innodb-online-ddl");
            yield "
        ";
        }
        // line 166
        yield "        <input class=\"btn btn-secondary preview_sql\" type=\"button\"
            value=\"";
yield _gettext("Preview SQL");
        // line 167
        yield "\">
        <input class=\"btn btn-primary\" type=\"submit\"
            name=\"do_save_data\"
            value=\"";
yield _gettext("Save");
        // line 170
        yield "\">
    </fieldset>
    <div id=\"properties_message\"></div>
     ";
        // line 173
        if (($context["is_integers_length_restricted"] ?? null)) {
            // line 174
            yield "        <div class=\"alert alert-primary\" id=\"length_not_allowed\" role=\"alert\">
            ";
            // line 175
            yield PhpMyAdmin\Html\Generator::getImage("s_notice");
            yield "
            ";
yield _gettext("The column width of integer types is ignored in your MySQL version unless defining a TINYINT(1) column");
            // line 177
            yield "            ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("", false, "https://dev.mysql.com/doc/relnotes/mysql/8.0/en/news-8-0-19.html");
            yield "
        </div>
     ";
        }
        // line 180
        yield "</form>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
yield _gettext("Loading");
        // line 185
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 186
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 191
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 198
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/enum_set_editor.twig");
        yield "



";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_definitions_form.twig";
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
        return array (  403 => 198,  395 => 191,  387 => 186,  383 => 185,  375 => 180,  368 => 177,  363 => 175,  360 => 174,  358 => 173,  353 => 170,  347 => 167,  343 => 166,  336 => 164,  334 => 163,  331 => 162,  326 => 159,  321 => 156,  319 => 154,  318 => 153,  317 => 152,  308 => 147,  303 => 144,  301 => 143,  292 => 137,  283 => 130,  276 => 128,  274 => 127,  271 => 126,  262 => 125,  258 => 124,  255 => 123,  248 => 119,  241 => 117,  234 => 115,  232 => 114,  229 => 113,  223 => 112,  219 => 111,  212 => 110,  208 => 109,  198 => 102,  185 => 93,  176 => 88,  170 => 84,  165 => 82,  159 => 79,  156 => 78,  153 => 77,  151 => 75,  150 => 74,  149 => 73,  148 => 72,  147 => 71,  146 => 70,  145 => 69,  144 => 68,  143 => 67,  142 => 66,  141 => 65,  140 => 64,  139 => 63,  138 => 62,  137 => 61,  135 => 60,  132 => 59,  120 => 49,  107 => 38,  99 => 34,  91 => 28,  80 => 20,  78 => 19,  73 => 17,  69 => 15,  65 => 13,  61 => 11,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  47 => 4,  44 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_definitions_form.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\columns_definitions\\column_definitions_form.twig");
    }
}
