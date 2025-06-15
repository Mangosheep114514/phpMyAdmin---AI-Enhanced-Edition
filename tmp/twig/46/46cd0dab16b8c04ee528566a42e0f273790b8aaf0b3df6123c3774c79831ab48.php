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

/* table/search/index.twig */
class __TwigTemplate_e0e409c274449522c2f23661a581995b13cd75b47e6a83c4b971b9a76c840bb4 extends Template
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
        yield PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "pos" => 0]);
        yield "\">
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_search", _gettext("Table search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 9
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Zoom search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 15
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
        yield "\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_find_replace", _gettext("Find and replace"), false, false, "TabsMode");
        yield "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        yield PhpMyAdmin\Url::getFromRoute("/table/search");
        yield "\" name=\"insertForm\" id=\"tbl_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        yield PhpMyAdmin\Url::getFromRoute("/table/search");
        yield "\">

  <div class=\"card\">
    <div class=\"card-header\">";
yield _gettext("Do a \"query by example\" (wildcard: \"%\")");
        // line 27
        yield "</div>

    <div class=\"card-body\">
      <div id=\"fieldset_table_qbe\">
        <div class=\"table-responsive-md jsresponsive\">
          <table class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
              <tr>
                ";
        // line 35
        if (($context["geom_column_flag"] ?? null)) {
            // line 36
            yield "                  <th>";
yield _gettext("Function");
            yield "</th>
                ";
        }
        // line 38
        yield "                <th>";
yield _gettext("Column");
        yield "</th>
                <th>";
yield _gettext("Type");
        // line 39
        yield "</th>
                <th>";
yield _gettext("Collation");
        // line 40
        yield "</th>
                <th>";
yield _gettext("Operator");
        // line 41
        yield "</th>
                <th>";
yield _gettext("Value");
        // line 42
        yield "</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_names"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["column_index"]) {
            // line 47
            yield "                <tr class=\"noclick\">
                  ";
            // line 49
            yield "                  ";
            if (($context["geom_column_flag"] ?? null)) {
                // line 50
                yield "                    ";
                // line 51
                yield "                    <td>
                      ";
                // line 52
                $context["geom_types"] = PhpMyAdmin\Utils\Gis::getDataTypes();
                // line 53
                yield "                      ";
                if (CoreExtension::inFilter((($__internal_compile_0 = ($context["column_types"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["column_index"]] ?? null) : null), ($context["geom_types"] ?? null))) {
                    // line 54
                    yield "                        <select class=\"geom_func\" name=\"geom_func[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_index"], "html", null, true);
                    yield "]\">
                          ";
                    // line 56
                    yield "                          ";
                    $context["funcs"] = PhpMyAdmin\Utils\Gis::getFunctions((($__internal_compile_1 = ($context["column_types"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["column_index"]] ?? null) : null), true, true);
                    // line 57
                    yield "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["funcs"] ?? null));
                    foreach ($context['_seq'] as $context["func_name"] => $context["func"]) {
                        // line 58
                        yield "                            ";
                        $context["name"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["func"], "display", [], "array", true, true, false, 58)) ? ((($__internal_compile_2 = $context["func"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["display"] ?? null) : null)) : ($context["func_name"]));
                        // line 59
                        yield "                            <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                        yield "\">
                              ";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                        yield "
                            </option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['func_name'], $context['func'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    yield "                        </select>
                      ";
                }
                // line 65
                yield "                    </td>
                  ";
            }
            // line 67
            yield "                  ";
            // line 68
            yield "                  <th>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["column_names"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["column_index"]] ?? null) : null), "html", null, true);
            // line 71
            yield "</th>
                  ";
            // line 72
            $context["properties"] = CoreExtension::getAttribute($this->env, $this->source, ($context["self"] ?? null), "getColumnProperties", [$context["column_index"], $context["column_index"]], "method", false, false, false, 72);
            // line 73
            yield "                  <td dir=\"ltr\">
                    ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["properties"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), "html", null, true);
            yield "
                  </td>
                  <td>
                    ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["properties"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["collation"] ?? null) : null), "html", null, true);
            yield "
                  </td>
                  <td>
                    ";
            // line 80
            yield (($__internal_compile_6 = ($context["properties"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["func"] ?? null) : null);
            yield "
                  </td>
                  ";
            // line 83
            yield "                  <td data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = ($context["properties"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null), "html", null, true);
            yield "\">
                    ";
            // line 84
            yield (($__internal_compile_8 = ($context["properties"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["value"] ?? null) : null);
            yield "
                    ";
            // line 86
            yield "                    <input type=\"hidden\" name=\"criteriaColumnNames[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_index"], "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_9 = ($context["column_names"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["column_index"]] ?? null) : null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"criteriaColumnTypes[";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_index"], "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_10 = ($context["column_types"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["column_index"]] ?? null) : null), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["column_index"], "html", null, true);
            yield "]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_11 = ($context["column_collations"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["column_index"]] ?? null) : null), "html", null, true);
            yield "\">
                  </td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column_index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            </tbody>
          </table>
        </div>
        <div id=\"gis_editor\"></div>
        <div id=\"popup_background\"></div>
      </div>

      ";
        // line 99
        if ((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled"))) {
            // line 100
            yield "      <div>
        <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#searchExtraOptions\" aria-expanded=\"";
            // line 101
            yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? ("true") : ("false"));
            yield "\" aria-controls=\"searchExtraOptions\">
          ";
yield _gettext("Extra options");
            // line 103
            yield "        </button>
      </div>
      <div class=\"collapse mt-3";
            // line 105
            yield (((0 === CoreExtension::compare(($context["default_sliders_state"] ?? null), "open"))) ? (" show") : (""));
            yield "\" id=\"searchExtraOptions\">
      ";
        }
        // line 107
        yield "
        ";
        // line 109
        yield "        <fieldset>
          <div class=\"mb-3\">
            <label class=\"form-label\" for=\"columnsToDisplaySelect\">";
yield _gettext("Select columns (at least one):");
        // line 111
        yield "</label>
            <select class=\"form-select resize-vertical\" id=\"columnsToDisplaySelect\" name=\"columnsToDisplay[]\" size=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["column_names"] ?? null)), 10), "html", null, true);
        yield "\" multiple>
              ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 114
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_field"], "html", null, true);
            yield "\" selected>
                  ";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_field"], "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "            </select>
          </div>
          <div class=\"form-check mb-3\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"distinct\" value=\"DISTINCT\" id=\"oDistinct\">
            <label class=\"form-check-label\" for=\"oDistinct\" dir=\"ltr\" lang=\"en\">DISTINCT</label>
          </div>
        </fieldset>

        ";
        // line 127
        yield "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"customWhereClauseInput\">
            <em>";
yield _gettext("Or");
        // line 129
        yield "</em>
            ";
yield _gettext("Add search conditions (body of the \"where\" clause):");
        // line 131
        yield "            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Functions");
        yield "
          </label>
          <input class=\"form-control\" id=\"customWhereClauseInput\" type=\"text\" name=\"customWhereClause\" size=\"64\">
        </div>

        ";
        // line 137
        yield "        <div class=\"mb-3\">
          <label class=\"form-label\" for=\"maxRowsInput\">";
yield _gettext("Number of rows per page");
        // line 138
        yield "</label>
          <input class=\"form-control\" id=\"maxRowsInput\" type=\"number\" name=\"session_max_rows\" min=\"1\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_rows"] ?? null), "html", null, true);
        yield "\" required>
        </div>

        ";
        // line 143
        yield "        <fieldset>
          <legend class=\"visually-hidden\">";
yield _gettext("Display order:");
        // line 144
        yield "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\" for=\"orderByColumnSelect\">";
yield _gettext("Order by:");
        // line 146
        yield "</label>
            <select class=\"form-select\" id=\"orderByColumnSelect\" name=\"orderByColumn\">
              <option value=\"--nil--\" selected></option>
              ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["column_names"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_field"]) {
            // line 150
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_field"], "html", null, true);
            yield "\">
                  ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_field"], "html", null, true);
            yield "
                </option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "            </select>
          </div>

          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"order\" id=\"orderByAscRadio\" value=\"ASC\" checked>
            <label class=\"form-check-label\" for=\"orderByAscRadio\">";
yield _gettext("Ascending");
        // line 159
        yield "</label>
          </div>
          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"order\" id=\"orderByDescRadio\" value=\"DESC\">
            <label class=\"form-check-label\" for=\"orderByDescRadio\">";
yield _gettext("Descending");
        // line 163
        yield "</label>
          </div>
        </fieldset>
      ";
        // line 166
        if ((0 !== CoreExtension::compare(($context["default_sliders_state"] ?? null), "disabled"))) {
            // line 167
            yield "      </div>
      ";
        }
        // line 169
        yield "    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
yield _gettext("Go");
        // line 172
        yield "\">
    </div>
  </div>
</form>

<div class=\"modal fade\" id=\"rangeSearchModal\" tabindex=\"-1\" aria-labelledby=\"rangeSearchModalLabel\" aria-hidden=\"false\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"rangeSearchModalLabel\">";
yield _gettext("Range search");
        // line 181
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 182
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
        <fieldset class=\"pma-fieldset\">
          <legend id=\"rangeSearchLegend\"></legend>
          <label for=\"min_value\">";
yield _gettext("Minimum value:");
        // line 187
        yield "</label>
          <input type=\"text\" id=\"min_value\"><br>
          <span class=\"small_font\" id=\"rangeSearchMin\"></span><br>
          <label for=\"max_value\">";
yield _gettext("Maximum value:");
        // line 190
        yield "</label>
          <input type=\"text\" id=\"max_value\"><br>
          <span class=\"small_font\" id=\"rangeSearchMax\"></span>
        </fieldset>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"rangeSearchModalGo\">";
yield _gettext("Go");
        // line 196
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Cancel");
        // line 197
        yield "</button>
      </div>
    </div>
  </div>
</div>

<div id=\"sqlqueryresultsouter\"></div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/index.twig";
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
        return array (  471 => 197,  467 => 196,  458 => 190,  452 => 187,  444 => 182,  440 => 181,  428 => 172,  422 => 169,  418 => 167,  416 => 166,  411 => 163,  404 => 159,  396 => 154,  387 => 151,  382 => 150,  378 => 149,  373 => 146,  368 => 144,  364 => 143,  358 => 139,  355 => 138,  351 => 137,  342 => 131,  338 => 129,  333 => 127,  323 => 118,  314 => 115,  309 => 114,  305 => 113,  301 => 112,  298 => 111,  293 => 109,  290 => 107,  285 => 105,  281 => 103,  276 => 101,  273 => 100,  271 => 99,  262 => 92,  250 => 88,  244 => 87,  237 => 86,  233 => 84,  228 => 83,  223 => 80,  217 => 77,  211 => 74,  208 => 73,  206 => 72,  203 => 71,  201 => 70,  199 => 68,  197 => 67,  193 => 65,  189 => 63,  180 => 60,  175 => 59,  172 => 58,  167 => 57,  164 => 56,  159 => 54,  156 => 53,  154 => 52,  151 => 51,  149 => 50,  146 => 49,  143 => 47,  139 => 46,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  115 => 38,  109 => 36,  107 => 35,  97 => 27,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  70 => 16,  66 => 15,  58 => 10,  54 => 9,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\search\\index.twig");
    }
}
