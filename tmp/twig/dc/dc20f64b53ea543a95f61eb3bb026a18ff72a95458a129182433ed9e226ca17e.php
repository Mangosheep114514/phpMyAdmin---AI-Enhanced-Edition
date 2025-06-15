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

/* display/results/null_display.twig */
class __TwigTemplate_30f17fd58d9d22a4a5b29acf8cb8e4fb8f1df73ee301064724458849764fcf4d extends Template
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
        yield "<td data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_decimals"] ?? null), "html", null, true);
        yield "\"
    data-type=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["data_type"] ?? null), "html", null, true);
        yield "\"
    ";
        // line 4
        yield "    class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classes"] ?? null), "html", null, true);
        yield " null\">
    <em>NULL</em>
</td>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/null_display.twig";
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
        return array (  47 => 4,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/null_display.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\display\\results\\null_display.twig");
    }
}
