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

/* config/form_display/group_header.twig */
class __TwigTemplate_f2190c08b02622e9aceb5339015e52c22f3dde6631b2ce196946dcca9b82a146 extends Template
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
        yield "<tr class=\"group-header group-header-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["group"] ?? null), "html", null, true);
        yield "\">
    <th colspan=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["colspan"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header_text"] ?? null), "html", null, true);
        yield "
    </th>
</tr>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "config/form_display/group_header.twig";
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
        return array (  47 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "config/form_display/group_header.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\config\\form_display\\group_header.twig");
    }
}
