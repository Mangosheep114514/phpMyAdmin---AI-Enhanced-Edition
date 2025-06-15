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

/* table/search/input_box.twig */
class __TwigTemplate_b0bb2ecf60bbb40b65c07c235647bda5f83362dacd5c1bc9cd404bf55063ce60 extends Template
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
        if ((($context["foreigners"] ?? null) && $this->env->getFunction('search_column_in_foreigners')->getCallable()(($context["foreigners"] ?? null), ($context["column_name"] ?? null)))) {
            // line 3
            yield "    ";
            if (is_iterable((($__internal_compile_0 = ($context["foreign_data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["disp_row"] ?? null) : null))) {
                // line 4
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\">
            ";
                // line 6
                yield $this->env->getFunction('foreign_dropdown')->getCallable()((($__internal_compile_1 =                 // line 7
($context["foreign_data"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["disp_row"] ?? null) : null), (($__internal_compile_2 =                 // line 8
($context["foreign_data"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["foreign_field"] ?? null) : null), (($__internal_compile_3 =                 // line 9
($context["foreign_data"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["foreign_display"] ?? null) : null), "",                 // line 11
($context["foreign_max_limit"] ?? null));
                // line 12
                yield "
        </select>
    ";
            } elseif ((0 === CoreExtension::compare((($__internal_compile_4 =             // line 14
($context["foreign_data"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["foreign_link"] ?? null) : null), true))) {
                // line 15
                yield "        <input type=\"text\"
            id=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\"
            name=\"criteriaValues[";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"field_";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_name_hash"] ?? null), "html", null, true);
                yield "[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            class=\"textfield\"
            ";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 20)) {
                    // line 21
                    yield "                value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                    yield "\"
            ";
                }
                // line 22
                yield ">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 23
                yield PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
                yield "\" data-post=\"";
                // line 24
                yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)], "", false);
                // line 25
                yield "&amp;field=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(($context["column_name"] ?? null)), "html", null, true);
                yield "&amp;fieldkey=";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "&amp;fromsearch=1\">
            ";
                // line 27
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", _gettext("Browse foreign values"));
                yield "
        </a>
    ";
            }
        } elseif (CoreExtension::inFilter(        // line 30
($context["column_type"] ?? null), PhpMyAdmin\Utils\Gis::getDataTypes())) {
            // line 31
            yield "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 36
            if (($context["in_fbs"] ?? null)) {
                // line 37
                yield "        <span class=\"open_search_gis_editor\">
            ";
                // line 38
                yield PhpMyAdmin\Html\Generator::linkOrButton("#", null, PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit/Insert")));
                yield "
        </span>
    ";
            }
        } elseif (((is_string($__internal_compile_6 =         // line 41
($context["column_type"] ?? null)) && is_string($__internal_compile_7 = "enum") && str_starts_with($__internal_compile_6, $__internal_compile_7)) || ((is_string($__internal_compile_8 =         // line 42
($context["column_type"] ?? null)) && is_string($__internal_compile_9 = "set") && str_starts_with($__internal_compile_8, $__internal_compile_9)) && ($context["in_zoom_search_edit"] ?? null)))) {
            // line 43
            yield "    ";
            $context["in_zoom_search_edit"] = false;
            // line 44
            yield "    ";
            $context["value"] = PhpMyAdmin\Util::parseEnumSetValues(($context["column_type"] ?? null));
            // line 45
            yield "    ";
            $context["cnt_value"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null));
            // line 46
            yield "    ";
            // line 52
            yield "    ";
            if ((((is_string($__internal_compile_10 = ($context["column_type"] ?? null)) && is_string($__internal_compile_11 = "enum") && str_starts_with($__internal_compile_10, $__internal_compile_11)) &&  !($context["in_zoom_search_edit"] ?? null)) || ((is_string($__internal_compile_12 =             // line 53
($context["column_type"] ?? null)) && is_string($__internal_compile_13 = "set") && str_starts_with($__internal_compile_12, $__internal_compile_13)) && ($context["in_zoom_search_edit"] ?? null)))) {
                // line 54
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\">
    ";
            } else {
                // line 57
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "]\"
            id=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
                yield "\"
            multiple=\"multiple\"
            size=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(3, ($context["cnt_value"] ?? null)), "html", null, true);
                yield "\">
    ";
            }
            // line 62
            yield "    ";
            // line 63
            yield "    <option value=\"\"></option>
    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (($context["cnt_value"] ?? null) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 65
                yield "        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 65) && is_iterable((($__internal_compile_14 =                 // line 66
($context["criteria_values"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["column_index"] ?? null)] ?? null) : null))) && CoreExtension::inFilter((($__internal_compile_15 =                 // line 67
($context["value"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["i"]] ?? null) : null), (($__internal_compile_16 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["column_index"] ?? null)] ?? null) : null)))) {
                    // line 68
                    yield "            <option value=\"";
                    yield (($__internal_compile_17 = ($context["value"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["i"]] ?? null) : null);
                    yield "\" selected>
                ";
                    // line 69
                    yield (($__internal_compile_18 = ($context["value"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[$context["i"]] ?? null) : null);
                    yield "
            </option>
        ";
                } else {
                    // line 72
                    yield "            <option value=\"";
                    yield (($__internal_compile_19 = ($context["value"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["i"]] ?? null) : null);
                    yield "\">
                ";
                    // line 73
                    yield (($__internal_compile_20 = ($context["value"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[$context["i"]] ?? null) : null);
                    yield "
            </option>
        ";
                }
                // line 76
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "    </select>
";
        } else {
            // line 79
            yield "    ";
            $context["the_class"] = "textfield";
            // line 80
            yield "    ";
            if ((0 === CoreExtension::compare(($context["column_type"] ?? null), "date"))) {
                // line 81
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datefield");
                // line 82
                yield "    ";
            } elseif (((0 === CoreExtension::compare(($context["column_type"] ?? null), "datetime")) || (is_string($__internal_compile_21 = ($context["column_type"] ?? null)) && is_string($__internal_compile_22 = "timestamp") && str_starts_with($__internal_compile_21, $__internal_compile_22)))) {
                // line 83
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " datetimefield");
                // line 84
                yield "    ";
            } elseif ((is_string($__internal_compile_23 = ($context["column_type"] ?? null)) && is_string($__internal_compile_24 = "bit") && str_starts_with($__internal_compile_23, $__internal_compile_24))) {
                // line 85
                yield "        ";
                $context["the_class"] = (($context["the_class"] ?? null) . " bit");
                // line 86
                yield "    ";
            }
            // line 87
            yield "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "]\"
        data-type=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_data_type"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 90
            yield ($context["html_attributes"] ?? null);
            yield "
        size=\"40\"
        class=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["the_class"] ?? null), "html", null, true);
            yield "\"
        id=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_id"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_index"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 94
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), ($context["column_index"] ?? null), [], "array", true, true, false, 94)) {
                // line 95
                yield "           value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_25 = ($context["criteria_values"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[($context["column_index"] ?? null)] ?? null) : null), "html", null, true);
                yield "\"";
            }
            // line 96
            yield ">
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/search/input_box.twig";
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
        return array (  287 => 96,  282 => 95,  280 => 94,  275 => 93,  271 => 92,  266 => 90,  262 => 89,  258 => 88,  255 => 87,  252 => 86,  249 => 85,  246 => 84,  243 => 83,  240 => 82,  237 => 81,  234 => 80,  231 => 79,  227 => 77,  221 => 76,  215 => 73,  210 => 72,  204 => 69,  199 => 68,  197 => 67,  196 => 66,  194 => 65,  190 => 64,  187 => 63,  185 => 62,  180 => 60,  174 => 58,  169 => 57,  163 => 55,  158 => 54,  156 => 53,  154 => 52,  152 => 46,  149 => 45,  146 => 44,  143 => 43,  141 => 42,  140 => 41,  134 => 38,  131 => 37,  129 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  108 => 27,  104 => 26,  100 => 25,  98 => 24,  95 => 23,  92 => 22,  86 => 21,  84 => 20,  77 => 18,  73 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 12,  57 => 11,  56 => 9,  55 => 8,  54 => 7,  53 => 6,  48 => 5,  43 => 4,  40 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/search/input_box.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\search\\input_box.twig");
    }
}
