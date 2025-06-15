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

/* columns_definitions/column_name.twig */
class __TwigTemplate_5f79a6cfd1df782f0437bb4bd853e13c5c5b455205defb9b4043756d474e7ef2 extends Template
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
        $context["title"] = "";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 2)) {
            // line 3
            yield "    ";
            if ((($__internal_compile_0 = (($__internal_compile_1 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["column_status"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["isReferenced"] ?? null) : null)) {
                // line 4
                yield "        ";
                $context["title"] = (($context["title"] ?? null) . Twig\Extension\CoreExtension::sprintf(_gettext("Referenced by %s."), Twig\Extension\CoreExtension::join((($__internal_compile_2 = (($__internal_compile_3 =                 // line 5
($context["column_meta"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["column_status"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["references"] ?? null) : null), ",")));
                // line 7
                yield "    ";
            }
            // line 8
            yield "    ";
            if ((($__internal_compile_4 = (($__internal_compile_5 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["column_status"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["isForeignKey"] ?? null) : null)) {
                // line 9
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
                    // line 10
                    yield "            ";
                    $context["title"] = (($context["title"] ?? null) . "
");
                    // line 11
                    yield "        ";
                }
                // line 12
                yield "        ";
                $context["title"] = (($context["title"] ?? null) . _gettext("Is a foreign key."));
                // line 13
                yield "    ";
            }
        }
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
            // line 16
            yield "    ";
            $context["title"] = _gettext("Column");
        }
        // line 18
        yield "
<input id=\"field_";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        yield "\"
    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 20) &&  !(($__internal_compile_6 = (($__internal_compile_7 =         // line 21
($context["column_meta"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["column_status"] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["isEditable"] ?? null) : null))) {
            // line 22
            yield "        disabled=\"disabled\"
    ";
        }
        // line 24
        yield "    type=\"text\"
    name=\"field_name[";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
        yield "]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\"
    size=\"10\"
    value=\"";
        // line 30
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 30)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = ($context["column_meta"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Field"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">

";
        // line 32
        if ((($context["has_central_columns_feature"] ?? null) &&  !(CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 33) &&  !(($__internal_compile_9 = (($__internal_compile_10 =         // line 34
($context["column_meta"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["column_status"] ?? null) : null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["isEditable"] ?? null) : null)))) {
            // line 35
            yield "    <p class=\"column_name\" id=\"central_columns_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["column_number"] ?? null), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            yield "\">
        <a data-maxrows=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["max_rows"] ?? null), "html", null, true);
            yield "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
yield _gettext("Pick from Central Columns");
            // line 40
            yield "        </a>
    </p>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/column_name.twig";
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
        return array (  131 => 40,  124 => 36,  117 => 35,  115 => 34,  114 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  94 => 24,  90 => 22,  88 => 21,  87 => 20,  81 => 19,  78 => 18,  74 => 16,  72 => 15,  68 => 13,  65 => 12,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_name.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\columns_definitions\\column_name.twig");
    }
}
