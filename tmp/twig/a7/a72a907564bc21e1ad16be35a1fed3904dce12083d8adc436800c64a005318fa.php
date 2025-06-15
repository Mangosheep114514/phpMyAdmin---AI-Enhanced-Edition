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

/* navigation/tree/controls.twig */
class __TwigTemplate_244d6bb458f4a1f341dd76a55fb77ddd31b0fad2c90eea4a3a620dadbce76ca7 extends Template
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
        yield "<!-- CONTROLS START -->
<li id=\"navigation_controls_outer\">
    <div id=\"navigation_controls\">
        ";
        // line 4
        yield ($context["collapse_all"] ?? null);
        yield "
        ";
        // line 5
        yield ($context["unlink"] ?? null);
        yield "
    </div>
</li>
<!-- CONTROLS ENDS -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation/tree/controls.twig";
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
        return array (  47 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/controls.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\navigation\\tree\\controls.twig");
    }
}
