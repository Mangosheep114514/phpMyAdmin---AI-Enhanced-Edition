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

/* table/relation/dropdown_generate.twig */
class __TwigTemplate_b63d467244700188856f59b3cd90f74c908d5ceeb2093a42136a21434132bab2 extends Template
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
        (( !Twig\Extension\CoreExtension::testEmpty(($context["dropdown_question"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dropdown_question"] ?? null), "html", null, true)) : (yield ""));
        // line 2
        yield "<select name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["select_name"] ?? null), "html", null, true);
        yield "\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["one_value"] => $context["one_label"]) {
            // line 4
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["one_value"], "html", null, true);
            yield "\"";
            // line 5
            if ((0 === CoreExtension::compare(($context["selected_value"] ?? null), $context["one_value"]))) {
                yield " selected=\"selected\"";
            }
            yield ">
        ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["one_label"], "html", null, true);
            yield "
    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['one_value'], $context['one_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "</select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/relation/dropdown_generate.twig";
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
        return array (  68 => 9,  59 => 6,  53 => 5,  49 => 4,  45 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/dropdown_generate.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\relation\\dropdown_generate.twig");
    }
}
