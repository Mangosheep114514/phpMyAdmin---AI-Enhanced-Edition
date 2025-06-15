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

/* table/relation/relational_dropdown.twig */
class __TwigTemplate_65af417165553399b85fd12ef5870e3e9e57f368f3f7b28cfddeb380e7267ab8 extends Template
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
        yield "<select name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "\">
    <option value=\"\"></option>
    ";
        // line 3
        $context["seen_key"] = false;
        // line 4
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            // line 6
            if ((( !(($context["foreign"] ?? null) === false) && (0 === CoreExtension::compare($context["value"], ($context["foreign"] ?? null)))) || (( !            // line 7
($context["foreign"] ?? null) && (isset($context["db"]) || array_key_exists("db", $context))) && (($context["db"] ?? null) === $context["value"])))) {
                // line 8
                yield "                selected=\"selected\"";
                // line 9
                $context["seen_key"] = true;
            }
            // line 10
            yield ">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "    ";
        if ((( !(($context["foreign"] ?? null) === false) && (0 !== CoreExtension::compare(($context["foreign"] ?? null), ""))) &&  !($context["seen_key"] ?? null))) {
            // line 15
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["foreign"] ?? null), "html", null, true);
            yield "\" selected=\"selected\">
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["foreign"] ?? null), "html", null, true);
            yield "
        </option>
    ";
        }
        // line 19
        yield "</select>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/relation/relational_dropdown.twig";
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
        return array (  91 => 19,  85 => 16,  80 => 15,  77 => 14,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  58 => 7,  57 => 6,  53 => 5,  48 => 4,  46 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/relational_dropdown.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\relation\\relational_dropdown.twig");
    }
}
