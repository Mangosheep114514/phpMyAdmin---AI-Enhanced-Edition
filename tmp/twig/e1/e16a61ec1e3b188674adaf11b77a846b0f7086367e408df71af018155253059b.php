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

/* table/index_form.twig */
class __TwigTemplate_d83330af1322d6b5dcbe3865c1ebef4e40bee1293a253567ee96f75f835b88d1 extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/indexes");
        yield "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"ajax\">

    ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        yield "
    ";
        // line 8
        if (($context["is_from_nav"] ?? null)) {
            // line 9
            yield "      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    ";
        }
        // line 11
        yield "
    <fieldset class=\"pma-fieldset\" id=\"index_edit_fields\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
yield _gettext("Index name:");
        // line 19
        yield "                            ";
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 29), "html", null, true);
        yield "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
yield _gettext("Index choice:");
        // line 38
        yield "                            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 43
        yield ((($context["create_edit_table"] ?? null)) ? (" disabled") : (""));
        yield ">
                ";
        // line 44
        if (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 44), "PRIMARY")) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "hasPrimary", [], "method", false, false, false, 44))) {
            // line 45
            yield "                  <option value=\"PRIMARY\"";
            yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 45), "PRIMARY"))) ? (" selected") : (""));
            yield ">PRIMARY</option>
                ";
        }
        // line 47
        yield "                <option value=\"INDEX\"";
        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 47), "INDEX"))) ? (" selected") : (""));
        yield ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 48
        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 48), "UNIQUE"))) ? (" selected") : (""));
        yield ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 49
        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 49), "SPATIAL"))) ? (" selected") : (""));
        yield ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 50
        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 50), "FULLTEXT"))) ? (" selected") : (""));
        yield ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 54
        if ((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled"))) {
            // line 55
            yield "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 56
            yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? ("true") : ("false"));
            yield "\" aria-controls=\"advancedOptions\">
                ";
yield _gettext("Advanced options");
            // line 58
            yield "              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 60
            yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? (" show") : (""));
            yield "\" id=\"advancedOptions\">
            ";
        }
        // line 62
        yield "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
yield _gettext("Key block size:");
        // line 68
        yield "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getKeyBlockSize", [], "method", false, false, false, 76), "html", null, true);
        yield "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
yield _gettext("Index type:");
        // line 85
        yield "                            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["", "BTREE", "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 92
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "\"";
            yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getType", [], "method", false, false, false, 92), $context["index_type"]))) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
yield _gettext("Parser:");
        // line 102
        yield "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getParser", [], "method", false, false, false, 110), "html", null, true);
        yield "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
yield _gettext("Comment:");
        // line 118
        yield "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getComment", [], "method", false, false, false, 127), "html", null, true);
        yield "\">
            </div>

            ";
        // line 130
        if ((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled"))) {
            // line 131
            yield "            </div>
            ";
        }
        // line 133
        yield "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
yield _gettext("Column");
        // line 142
        yield "                    </th>
                    <th>
                        ";
yield _gettext("Size");
        // line 145
        yield "                    </th>
                </tr>
            </thead>
            ";
        // line 148
        $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
        // line 158
        yield "            <tbody>
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getColumns", [], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 160
            yield "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
yield _gettext("Drag to reorder");
            // line 162
            yield "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
yield _gettext("Ignore");
            // line 167
            yield " --
                                </option>
                                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 170
                yield "                                    ";
                if ((((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 170), "FULLTEXT")) || CoreExtension::matches("/(char|text)/i",                 // line 171
$context["field_type"])) && ((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                 // line 172
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 172), "SPATIAL")) || CoreExtension::inFilter(                // line 173
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 174
                    yield "
                                        <option value=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield "\"";
                    // line 176
                    if ((0 === CoreExtension::compare($context["field_name"], CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 176)))) {
                        // line 177
                        yield "                                                selected=\"selected\"";
                    }
                    // line 178
                    yield ">
                                            ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                // line 182
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 191
            (((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 190
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 190), "SPATIAL"))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 191
$context["column"], "getSubPart", [], "method", false, false, false, 191), "html", null, true)) : (yield ""));
            yield "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "                ";
        if ((1 === CoreExtension::compare(($context["add_fields"] ?? null), 0))) {
            // line 196
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 197
                yield "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
yield _gettext("Drag to reorder");
                // line 199
                yield "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
yield _gettext("Ignore");
                // line 203
                yield " --</option>
                                    ";
                // line 204
                $context["j"] = 0;
                // line 205
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 206
                    yield "                                        ";
                    if (($context["create_edit_table"] ?? null)) {
                        // line 207
                        yield "                                            ";
                        $context["col_index"] = (($__internal_compile_0 = $context["field_type"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null);
                        // line 208
                        yield "                                            ";
                        $context["field_type"] = (($__internal_compile_1 = $context["field_type"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 209
                        yield "                                        ";
                    }
                    // line 210
                    yield "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 211
                    yield "                                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["col_index"]) || array_key_exists("col_index", $context))) ? (                    // line 212
($context["col_index"] ?? null)) : ($context["field_name"])), "html", null, true);
                    yield "\"";
                    // line 213
                    yield (((0 === CoreExtension::compare(($context["j"] ?? null), $context["i"]))) ? (" selected=\"selected\"") : (""));
                    yield ">
                                            ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                yield "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "                ";
        }
        // line 229
        yield "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        yield "\">
            </div>
        </div>
        </div>
    </fieldset>
    ";
        // line 243
        if ( !($context["create_edit_table"] ?? null)) {
            // line 244
            yield "<fieldset class=\"pma-fieldset tblFooters\">
        <button class=\"btn btn-primary\" type=\"submit\">";
yield _gettext("Go");
            // line 245
            yield "</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
yield _gettext("Preview SQL");
            // line 246
            yield "</button>
    </fieldset>";
        }
        // line 249
        yield "</form>
";
        // line 250
        if (($context["is_from_nav"] ?? null)) {
            // line 251
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/index_form.twig";
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
        return array (  492 => 251,  490 => 250,  487 => 249,  483 => 246,  479 => 245,  475 => 244,  473 => 243,  465 => 237,  455 => 229,  452 => 228,  436 => 217,  425 => 214,  421 => 213,  418 => 212,  416 => 211,  413 => 210,  410 => 209,  407 => 208,  404 => 207,  401 => 206,  396 => 205,  394 => 204,  391 => 203,  384 => 199,  379 => 197,  374 => 196,  371 => 195,  361 => 191,  360 => 190,  359 => 191,  350 => 183,  344 => 182,  336 => 179,  333 => 178,  330 => 177,  328 => 176,  325 => 175,  322 => 174,  320 => 173,  319 => 172,  318 => 171,  316 => 170,  312 => 169,  308 => 167,  300 => 162,  295 => 160,  291 => 159,  288 => 158,  286 => 148,  281 => 145,  276 => 142,  265 => 133,  261 => 131,  259 => 130,  253 => 127,  242 => 118,  231 => 110,  221 => 102,  211 => 94,  198 => 92,  194 => 91,  184 => 85,  172 => 76,  162 => 68,  154 => 62,  149 => 60,  145 => 58,  140 => 56,  137 => 55,  135 => 54,  128 => 50,  124 => 49,  120 => 48,  115 => 47,  109 => 45,  107 => 44,  103 => 43,  94 => 38,  82 => 29,  68 => 19,  58 => 11,  54 => 9,  52 => 8,  48 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/index_form.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\index_form.twig");
    }
}
