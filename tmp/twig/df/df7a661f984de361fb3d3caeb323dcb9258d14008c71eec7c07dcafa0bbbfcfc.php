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

/* table/relation/common_form.twig */
class __TwigTemplate_910a3ec10657dda438e94b127625bddc54033ef1d18c50ad004713612c8453c6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/relation/common_form.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/relation");
        yield "\">
    ";
        // line 5
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
    ";
        // line 7
        yield "    ";
        if (PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null))) {
            // line 8
            yield "        <fieldset class=\"pma-fieldset mb-3\">
            <legend>";
yield _gettext("Foreign key constraints");
            // line 9
            yield "</legend>
            <div class=\"table-responsive-md jsresponsive\">
            <table class=\"relationalTable table table-striped w-auto\">
                <thead>
                <tr>
                    <th>";
yield _gettext("Actions");
            // line 14
            yield "</th>
                    <th>";
yield _gettext("Constraint properties");
            // line 15
            yield "</th>
                    ";
            // line 16
            if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["tbl_storage_engine"] ?? null)), "INNODB"))) {
                // line 17
                yield "                        <th>
                            ";
yield _gettext("Column");
                // line 19
                yield "                            ";
                yield PhpMyAdmin\Html\Generator::showHint(_gettext("Creating a foreign key over a non-indexed column would automatically create an index on it. Alternatively, you can define an index below, before creating the foreign key."));
                yield "
                        </th>
                    ";
            } else {
                // line 22
                yield "                        <th>
                            ";
yield _gettext("Column");
                // line 24
                yield "                            ";
                yield PhpMyAdmin\Html\Generator::showHint(_gettext("Only columns with index will be displayed. You can define an index below."));
                yield "
                        </th>
                    ";
            }
            // line 27
            yield "                    <th colspan=\"3\">
                        ";
yield _gettext("Foreign key constraint");
            // line 29
            yield "                        (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tbl_storage_engine"] ?? null), "html", null, true);
            yield ")
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>";
yield _gettext("Database");
            // line 36
            yield "</th>
                    <th>";
yield _gettext("Table");
            // line 37
            yield "</th>
                    <th>";
yield _gettext("Column");
            // line 38
            yield "</th>
                </tr></thead>
                ";
            // line 40
            $context["i"] = 0;
            // line 41
            yield "                ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["existrel_foreign"] ?? null))) {
                // line 42
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["existrel_foreign"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["one_key"]) {
                    // line 43
                    yield "                        ";
                    // line 44
                    yield "                        ";
                    $context["foreign_db"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["one_key"], "ref_db_name", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_0 =                     // line 45
$context["one_key"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["ref_db_name"] ?? null) : null)))) ? ((($__internal_compile_1 =                     // line 46
$context["one_key"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ref_db_name"] ?? null) : null)) : (($context["db"] ?? null)));
                    // line 47
                    yield "                        ";
                    $context["foreign_table"] = false;
                    // line 48
                    yield "                        ";
                    if (($context["foreign_db"] ?? null)) {
                        // line 49
                        yield "                            ";
                        $context["foreign_table"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["one_key"], "ref_table_name", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_2 =                         // line 50
$context["one_key"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["ref_table_name"] ?? null) : null)))) ? ((($__internal_compile_3 =                         // line 51
$context["one_key"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["ref_table_name"] ?? null) : null)) : (false));
                        // line 52
                        yield "                        ";
                    }
                    // line 53
                    yield "                        ";
                    $context["unique_columns"] = [];
                    // line 54
                    yield "                        ";
                    if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
                        // line 55
                        yield "                            ";
                        $context["table_obj"] = PhpMyAdmin\Table::get(($context["foreign_table"] ?? null), ($context["foreign_db"] ?? null));
                        // line 56
                        yield "                            ";
                        $context["unique_columns"] = CoreExtension::getAttribute($this->env, $this->source, ($context["table_obj"] ?? null), "getUniqueColumns", [false, false], "method", false, false, false, 56);
                        // line 57
                        yield "                        ";
                    }
                    // line 58
                    yield "                        ";
                    yield from                     $this->loadTemplate("table/relation/foreign_key_row.twig", "table/relation/common_form.twig", 58)->unwrap()->yield(CoreExtension::toArray(["i" =>                     // line 59
($context["i"] ?? null), "one_key" =>                     // line 60
$context["one_key"], "column_array" =>                     // line 61
($context["column_array"] ?? null), "options_array" =>                     // line 62
($context["options_array"] ?? null), "tbl_storage_engine" =>                     // line 63
($context["tbl_storage_engine"] ?? null), "db" =>                     // line 64
($context["db"] ?? null), "table" =>                     // line 65
($context["table"] ?? null), "url_params" =>                     // line 66
($context["url_params"] ?? null), "databases" =>                     // line 67
($context["databases"] ?? null), "foreign_db" =>                     // line 68
($context["foreign_db"] ?? null), "foreign_table" =>                     // line 69
($context["foreign_table"] ?? null), "unique_columns" =>                     // line 70
($context["unique_columns"] ?? null)]));
                    // line 72
                    yield "                        ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 73
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['one_key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                yield "                ";
            }
            // line 75
            yield "                ";
            yield from             $this->loadTemplate("table/relation/foreign_key_row.twig", "table/relation/common_form.twig", 75)->unwrap()->yield(CoreExtension::toArray(["i" =>             // line 76
($context["i"] ?? null), "one_key" => [], "column_array" =>             // line 78
($context["column_array"] ?? null), "options_array" =>             // line 79
($context["options_array"] ?? null), "tbl_storage_engine" =>             // line 80
($context["tbl_storage_engine"] ?? null), "db" =>             // line 81
($context["db"] ?? null), "table" =>             // line 82
($context["table"] ?? null), "url_params" =>             // line 83
($context["url_params"] ?? null), "databases" =>             // line 84
($context["databases"] ?? null), "foreign_db" =>             // line 85
($context["foreign_db"] ?? null), "foreign_table" =>             // line 86
($context["foreign_table"] ?? null), "unique_columns" =>             // line 87
($context["unique_columns"] ?? null)]));
            // line 89
            yield "                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 90
            yield "                <tr>
                    <th colspan=\"6\">
                        <a class=\"formelement clearfloat add_foreign_key\" href=\"\">
                            ";
yield _gettext("+ Add constraint");
            // line 94
            yield "                        </a>
                    </th>
                </tr>
            </table>
            </div>
        </fieldset>
    ";
        }
        // line 101
        yield "
    ";
        // line 102
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "relationFeature", [], "any", false, false, false, 102))) {
            // line 103
            yield "        ";
            if (((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled")) && PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null)))) {
                // line 104
                yield "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#internalRelationships\" aria-expanded=\"";
                // line 105
                yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? ("true") : ("false"));
                yield "\" aria-controls=\"internalRelationships\">
            ";
yield _gettext("Internal relationships");
                // line 107
                yield "          </button>
        </div>
        <div class=\"collapse mb-3";
                // line 109
                yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? (" show") : (""));
                yield "\" id=\"internalRelationships\">
        ";
            }
            // line 111
            yield "
        <fieldset class=\"pma-fieldset\">
            <legend>
                ";
yield _gettext("Internal relationships");
            // line 115
            yield "                ";
            yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("config", "cfg_Servers_relation");
            yield "
            </legend>
            <table class=\"relationalTable table table-striped table-hover table-sm w-auto\">
                <thead>
                  <tr>
                    <th>";
yield _gettext("Column");
            // line 120
            yield "</th>
                    <th>
                      ";
yield _gettext("Internal relation");
            // line 123
            yield "                      ";
            if (PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null))) {
                // line 124
                yield "                        ";
                yield PhpMyAdmin\Html\Generator::showHint(_gettext("An internal relation is not necessary when a corresponding FOREIGN KEY relation exists."));
                yield "
                      ";
            }
            // line 126
            yield "                    </th>
                  </tr>
                </thead>
                <tbody>
                    ";
            // line 130
            $context["saved_row_cnt"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["save_row"] ?? null)) - 1);
            // line 131
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, ($context["saved_row_cnt"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 132
                yield "                        ";
                $context["myfield"] = (($__internal_compile_4 = (($__internal_compile_5 = ($context["save_row"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["i"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Field"] ?? null) : null);
                // line 133
                yield "                        ";
                // line 135
                yield "                        ";
                $context["myfield_md5"] = (($__internal_compile_6 = ($context["column_hash_array"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["myfield"] ?? null)] ?? null) : null);
                // line 136
                yield "
                        ";
                // line 137
                $context["foreign_table"] = false;
                // line 138
                yield "                        ";
                $context["foreign_column"] = false;
                // line 139
                yield "
                        ";
                // line 141
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 141)) {
                    // line 142
                    yield "                            ";
                    $context["foreign_db"] = (($__internal_compile_7 = (($__internal_compile_8 = ($context["existrel"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["foreign_db"] ?? null) : null);
                    // line 143
                    yield "                        ";
                } else {
                    // line 144
                    yield "                            ";
                    $context["foreign_db"] = ($context["db"] ?? null);
                    // line 145
                    yield "                        ";
                }
                // line 146
                yield "
                        ";
                // line 148
                yield "                        ";
                $context["tables"] = [];
                // line 149
                yield "                        ";
                if (($context["foreign_db"] ?? null)) {
                    // line 150
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 150)) {
                        // line 151
                        yield "                                ";
                        $context["foreign_table"] = (($__internal_compile_9 = (($__internal_compile_10 = ($context["existrel"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["foreign_table"] ?? null) : null);
                        // line 152
                        yield "                            ";
                    }
                    // line 153
                    yield "                            ";
                    $context["tables"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dbi"] ?? null), "getTables", [($context["foreign_db"] ?? null)], "method", false, false, false, 153);
                    // line 154
                    yield "                        ";
                }
                // line 155
                yield "
                        ";
                // line 157
                yield "                        ";
                $context["unique_columns"] = [];
                // line 158
                yield "                        ";
                if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
                    // line 159
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["existrel"] ?? null), ($context["myfield"] ?? null), [], "array", true, true, false, 159)) {
                        // line 160
                        yield "                                ";
                        $context["foreign_column"] = (($__internal_compile_11 = (($__internal_compile_12 = ($context["existrel"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["myfield"] ?? null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["foreign_field"] ?? null) : null);
                        // line 161
                        yield "                            ";
                    }
                    // line 162
                    yield "                            ";
                    $context["table_obj"] = PhpMyAdmin\Table::get(($context["foreign_table"] ?? null), ($context["foreign_db"] ?? null));
                    // line 163
                    yield "                            ";
                    $context["unique_columns"] = CoreExtension::getAttribute($this->env, $this->source, ($context["table_obj"] ?? null), "getUniqueColumns", [false, false], "method", false, false, false, 163);
                    // line 164
                    yield "                        ";
                }
                // line 165
                yield "
                        <tr>
                            <td class=\"align-middle\">
                                <strong>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["myfield"] ?? null), "html", null, true);
                yield "</strong>
                                <input type=\"hidden\" name=\"fields_name[";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["myfield_md5"] ?? null), "html", null, true);
                yield "]\"
                                    value=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["myfield"] ?? null), "html", null, true);
                yield "\">
                            </td>

                            <td>
                                ";
                // line 174
                yield from                 $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 174)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_db[" .                 // line 175
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Database"), "values" =>                 // line 177
($context["databases"] ?? null), "foreign" =>                 // line 178
($context["foreign_db"] ?? null)]));
                // line 180
                yield "
                                ";
                // line 181
                yield from                 $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 181)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_table[" .                 // line 182
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Table"), "values" =>                 // line 184
($context["tables"] ?? null), "foreign" =>                 // line 185
($context["foreign_table"] ?? null)]));
                // line 187
                yield "
                                ";
                // line 188
                yield from                 $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/common_form.twig", 188)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_column[" .                 // line 189
($context["myfield_md5"] ?? null)) . "]"), "title" => _gettext("Column"), "values" =>                 // line 191
($context["unique_columns"] ?? null), "foreign" =>                 // line 192
($context["foreign_column"] ?? null)]));
                // line 194
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "                </tbody>
            </table>
        </fieldset>
        ";
            // line 200
            if (((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled")) && PhpMyAdmin\Utils\ForeignKey::isSupported(($context["tbl_storage_engine"] ?? null)))) {
                // line 201
                yield "        </div>
        ";
            }
            // line 203
            yield "    ";
        }
        // line 204
        yield "
    ";
        // line 205
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "displayFeature", [], "any", false, false, false, 205))) {
            // line 206
            yield "        ";
            $context["disp"] = $this->env->getFunction('get_display_field')->getCallable()(($context["db"] ?? null), ($context["table"] ?? null));
            // line 207
            yield "        <fieldset class=\"pma-fieldset\">
            <label>";
yield _gettext("Choose column to display:");
            // line 208
            yield "</label>
            <select name=\"display_field\">
                <option value=\"\">---</option>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["save_row"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 212
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_13 = $context["row"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Field"] ?? null) : null), "html", null, true);
                yield "\"";
                // line 213
                if (((isset($context["disp"]) || array_key_exists("disp", $context)) && (0 === CoreExtension::compare((($__internal_compile_14 = $context["row"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Field"] ?? null) : null), ($context["disp"] ?? null))))) {
                    // line 214
                    yield "                            selected=\"selected\"";
                }
                // line 215
                yield ">
                        ";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_15 = $context["row"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Field"] ?? null) : null), "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "            </select>
        </fieldset>
    ";
        }
        // line 222
        yield "
    <fieldset class=\"pma-fieldset tblFooters\">
        <input class=\"btn btn-secondary preview_sql\" type=\"button\" value=\"";
yield _gettext("Preview SQL");
        // line 224
        yield "\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Save");
        // line 225
        yield "\">
    </fieldset>
</form>

<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
yield _gettext("Loading");
        // line 233
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 234
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 239
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/relation/common_form.twig";
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
        return array (  534 => 239,  526 => 234,  522 => 233,  511 => 225,  507 => 224,  502 => 222,  497 => 219,  488 => 216,  485 => 215,  482 => 214,  480 => 213,  476 => 212,  472 => 211,  467 => 208,  463 => 207,  460 => 206,  458 => 205,  455 => 204,  452 => 203,  448 => 201,  446 => 200,  441 => 197,  433 => 194,  431 => 192,  430 => 191,  429 => 189,  428 => 188,  425 => 187,  423 => 185,  422 => 184,  421 => 182,  420 => 181,  417 => 180,  415 => 178,  414 => 177,  413 => 175,  412 => 174,  405 => 170,  401 => 169,  397 => 168,  392 => 165,  389 => 164,  386 => 163,  383 => 162,  380 => 161,  377 => 160,  374 => 159,  371 => 158,  368 => 157,  365 => 155,  362 => 154,  359 => 153,  356 => 152,  353 => 151,  350 => 150,  347 => 149,  344 => 148,  341 => 146,  338 => 145,  335 => 144,  332 => 143,  329 => 142,  326 => 141,  323 => 139,  320 => 138,  318 => 137,  315 => 136,  312 => 135,  310 => 133,  307 => 132,  302 => 131,  300 => 130,  294 => 126,  288 => 124,  285 => 123,  280 => 120,  270 => 115,  264 => 111,  259 => 109,  255 => 107,  250 => 105,  247 => 104,  244 => 103,  242 => 102,  239 => 101,  230 => 94,  224 => 90,  221 => 89,  219 => 87,  218 => 86,  217 => 85,  216 => 84,  215 => 83,  214 => 82,  213 => 81,  212 => 80,  211 => 79,  210 => 78,  209 => 76,  207 => 75,  204 => 74,  198 => 73,  195 => 72,  193 => 70,  192 => 69,  191 => 68,  190 => 67,  189 => 66,  188 => 65,  187 => 64,  186 => 63,  185 => 62,  184 => 61,  183 => 60,  182 => 59,  180 => 58,  177 => 57,  174 => 56,  171 => 55,  168 => 54,  165 => 53,  162 => 52,  160 => 51,  159 => 50,  157 => 49,  154 => 48,  151 => 47,  149 => 46,  148 => 45,  146 => 44,  144 => 43,  139 => 42,  136 => 41,  134 => 40,  130 => 38,  126 => 37,  122 => 36,  110 => 29,  106 => 27,  99 => 24,  95 => 22,  88 => 19,  84 => 17,  82 => 16,  79 => 15,  75 => 14,  67 => 9,  63 => 8,  60 => 7,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/common_form.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\relation\\common_form.twig");
    }
}
