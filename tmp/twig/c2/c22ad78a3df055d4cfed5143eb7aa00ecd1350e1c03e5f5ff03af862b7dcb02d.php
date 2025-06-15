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

/* navigation/tree/state.twig */
class __TwigTemplate_24348c10bfd5f82a815325b4c568e3581dcac3d67a4c8d9917296d1173fe22cb extends Template
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
        yield ($context["quick_warp"] ?? null);
        yield "

<div class=\"clearfloat\"></div>

<ul>
  ";
        // line 6
        yield ($context["fast_filter"] ?? null);
        yield "
  ";
        // line 7
        yield ($context["controls"] ?? null);
        yield "
</ul>

";
        // line 10
        yield ($context["page_selector"] ?? null);
        yield "

<div id='pma_navigation_tree_content'>
  <ul>
    ";
        // line 14
        yield ($context["nodes"] ?? null);
        yield "
  </ul>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/state.twig";
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
        return array (  63 => 14,  56 => 10,  50 => 7,  46 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/state.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\navigation\\tree\\state.twig");
    }
}
