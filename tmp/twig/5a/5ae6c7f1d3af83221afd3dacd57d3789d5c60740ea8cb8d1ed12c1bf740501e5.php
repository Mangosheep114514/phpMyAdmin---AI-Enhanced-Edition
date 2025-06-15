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

/* table/relation/foreign_key_row.twig */
class __TwigTemplate_c157bdb17ff167fccabadc913a443dc5d704a390b81d6de292acd34f9ab05b48 extends Template
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
        yield "<tr>
    ";
        // line 3
        yield "    <td>
        ";
        // line 4
        $context["js_msg"] = "";
        // line 5
        yield "        ";
        $context["this_params"] = null;
        // line 6
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "constraint", [], "array", true, true, false, 6)) {
            // line 7
            yield "            ";
            $context["drop_fk_query"] = (((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " DROP FOREIGN KEY ") . PhpMyAdmin\Util::backquote((($__internal_compile_0 =             // line 9
($context["one_key"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["constraint"] ?? null) : null))) . ";");
            // line 11
            yield "            ";
            $context["this_params"] = ($context["url_params"] ?? null);
            // line 12
            yield "            ";
            $context["this_params"] = ["goto" => PhpMyAdmin\Url::getFromRoute("/table/relation"), "back" => PhpMyAdmin\Url::getFromRoute("/table/relation"), "sql_query" =>             // line 15
($context["drop_fk_query"] ?? null), "message_to_show" => Twig\Extension\CoreExtension::sprintf(_gettext("Foreign key constraint %s has been dropped"), (($__internal_compile_1 =             // line 17
($context["one_key"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["constraint"] ?? null) : null))];
            // line 20
            yield "            ";
            $context["js_msg"] = (((((("ALTER TABLE " . ($context["db"] ?? null)) . ".") . ($context["table"] ?? null)) . " DROP FOREIGN KEY ") . (($__internal_compile_2 = ($context["one_key"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["constraint"] ?? null) : null)) . ";");
            // line 21
            yield "        ";
        }
        // line 22
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "constraint", [], "array", true, true, false, 22)) {
            // line 23
            yield "            <input type=\"hidden\" class=\"drop_foreign_key_msg\" value=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["js_msg"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 25
            $context["drop_str"] = PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
            // line 26
            yield "            ";
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), ($context["this_params"] ?? null), ($context["drop_str"] ?? null), ["class" => "drop_foreign_key_anchor ajax"]);
            yield "
        ";
        }
        // line 28
        yield "    </td>
    <td>
        <span class=\"formelement clearfloat\">
            <input type=\"text\" name=\"constraint_name[";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
        yield "]\" value=\"";
        // line 32
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "constraint", [], "array", true, true, false, 32)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["one_key"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["constraint"] ?? null) : null), "html", null, true)) : (yield ""));
        // line 33
        yield "\" placeholder=\"";
yield _gettext("Constraint name");
        yield "\" maxlength=\"64\">
        </span>
        <div class=\"float-start\">
            ";
        // line 39
        yield "            ";
        $context["on_delete"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "on_delete", [], "array", true, true, false, 39)) ? ((($__internal_compile_4 =         // line 40
($context["one_key"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["on_delete"] ?? null) : null)) : ("RESTRICT"));
        // line 41
        yield "            ";
        $context["on_update"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "on_update", [], "array", true, true, false, 41)) ? ((($__internal_compile_5 =         // line 42
($context["one_key"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["on_update"] ?? null) : null)) : ("RESTRICT"));
        // line 43
        yield "            <span class=\"formelement\">
                ";
        // line 44
        yield from         $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 44)->unwrap()->yield(CoreExtension::toArray(["dropdown_question" => "ON DELETE", "select_name" => (("on_delete[" .         // line 46
($context["i"] ?? null)) . "]"), "choices" =>         // line 47
($context["options_array"] ?? null), "selected_value" =>         // line 48
($context["on_delete"] ?? null)]));
        // line 50
        yield "            </span>
            <span class=\"formelement\">
                ";
        // line 52
        yield from         $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 52)->unwrap()->yield(CoreExtension::toArray(["dropdown_question" => "ON UPDATE", "select_name" => (("on_update[" .         // line 54
($context["i"] ?? null)) . "]"), "choices" =>         // line 55
($context["options_array"] ?? null), "selected_value" =>         // line 56
($context["on_update"] ?? null)]));
        // line 58
        yield "            </span>
        </div>
    </td>
    <td>
        ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["one_key"] ?? null), "index_list", [], "array", true, true, false, 62)) {
            // line 63
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_6 = ($context["one_key"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["index_list"] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 64
                yield "                <span class=\"formelement clearfloat\">
                    ";
                // line 65
                yield from                 $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 65)->unwrap()->yield(CoreExtension::toArray(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .                 // line 67
($context["i"] ?? null)) . "][]"), "choices" =>                 // line 68
($context["column_array"] ?? null), "selected_value" =>                 // line 69
$context["column"]]));
                // line 71
                yield "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "        ";
        } else {
            // line 74
            yield "            <span class=\"formelement clearfloat\">
                ";
            // line 75
            yield from             $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 75)->unwrap()->yield(CoreExtension::toArray(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .             // line 77
($context["i"] ?? null)) . "][]"), "choices" =>             // line 78
($context["column_array"] ?? null), "selected_value" => ""]));
            // line 81
            yield "            </span>
        ";
        }
        // line 83
        yield "        <a class=\"formelement clearfloat add_foreign_key_field\" data-index=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
        yield "\" href=\"\">
            ";
yield _gettext("+ Add column");
        // line 86
        yield "        </a>
    </td>
    ";
        // line 88
        $context["tables"] = [];
        // line 89
        yield "    ";
        if (($context["foreign_db"] ?? null)) {
            // line 90
            yield "        ";
            $context["tables"] = $this->env->getFunction('get_tables')->getCallable()(($context["foreign_db"] ?? null), ($context["tbl_storage_engine"] ?? null));
            // line 91
            yield "    ";
        } else {
            // line 92
            yield "        ";
            $context["tables"] = $this->env->getFunction('get_tables')->getCallable()(($context["db"] ?? null), ($context["tbl_storage_engine"] ?? null));
            // line 93
            yield "    ";
        }
        // line 94
        yield "    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 96
        yield from         $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 96)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_foreign_db[" .         // line 97
($context["i"] ?? null)) . "]"), "title" => _gettext("Database"), "values" =>         // line 99
($context["databases"] ?? null), "foreign" =>         // line 100
($context["foreign_db"] ?? null), "db" =>         // line 101
($context["db"] ?? null)]));
        // line 103
        yield "        </span>
    </td>
    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 107
        yield from         $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 107)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_foreign_table[" .         // line 108
($context["i"] ?? null)) . "]"), "title" => _gettext("Table"), "values" =>         // line 110
($context["tables"] ?? null), "foreign" =>         // line 111
($context["foreign_table"] ?? null)]));
        // line 113
        yield "        </span>
    </td>
    <td>
        ";
        // line 116
        if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
            // line 117
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_7 = ($context["one_key"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["ref_index_list"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign_column"]) {
                // line 118
                yield "                <span class=\"formelement clearfloat\">
                    ";
                // line 119
                yield from                 $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 119)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_foreign_column[" .                 // line 120
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" =>                 // line 122
($context["unique_columns"] ?? null), "foreign" =>                 // line 123
$context["foreign_column"]]));
                // line 125
                yield "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "        ";
        } else {
            // line 128
            yield "            <span class=\"formelement clearfloat\">
                ";
            // line 129
            yield from             $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 129)->unwrap()->yield(CoreExtension::toArray(["name" => (("destination_foreign_column[" .             // line 130
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" => [], "foreign" => ""]));
            // line 135
            yield "            </span>
        ";
        }
        // line 137
        yield "    </td>
</tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/relation/foreign_key_row.twig";
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
        return array (  260 => 137,  256 => 135,  254 => 130,  253 => 129,  250 => 128,  247 => 127,  240 => 125,  238 => 123,  237 => 122,  236 => 120,  235 => 119,  232 => 118,  227 => 117,  225 => 116,  220 => 113,  218 => 111,  217 => 110,  216 => 108,  215 => 107,  209 => 103,  207 => 101,  206 => 100,  205 => 99,  204 => 97,  203 => 96,  199 => 94,  196 => 93,  193 => 92,  190 => 91,  187 => 90,  184 => 89,  182 => 88,  178 => 86,  173 => 84,  171 => 83,  167 => 81,  165 => 78,  164 => 77,  163 => 75,  160 => 74,  157 => 73,  150 => 71,  148 => 69,  147 => 68,  146 => 67,  145 => 65,  142 => 64,  137 => 63,  135 => 62,  129 => 58,  127 => 56,  126 => 55,  125 => 54,  124 => 52,  120 => 50,  118 => 48,  117 => 47,  116 => 46,  115 => 44,  112 => 43,  110 => 42,  108 => 41,  106 => 40,  104 => 39,  97 => 33,  95 => 32,  92 => 31,  87 => 28,  81 => 26,  79 => 25,  75 => 24,  73 => 23,  70 => 22,  67 => 21,  64 => 20,  62 => 17,  61 => 15,  59 => 12,  56 => 11,  54 => 9,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/foreign_key_row.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\relation\\foreign_key_row.twig");
    }
}
