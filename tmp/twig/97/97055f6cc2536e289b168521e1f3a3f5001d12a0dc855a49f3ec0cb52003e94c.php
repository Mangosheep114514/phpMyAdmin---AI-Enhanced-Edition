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

/* table/tracking/index.twig */
class __TwigTemplate_35d431c8db3bb96ab745798929519dcb8e7450aeb890ef88cfd173bb5f2beeb0 extends Template
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
        yield ($context["active_message"] ?? null);
        yield "

<br>

";
        // line 5
        yield ($context["action_message"] ?? null);
        yield "

";
        // line 7
        yield ($context["delete_version"] ?? null);
        yield "

";
        // line 9
        yield ($context["create_version"] ?? null);
        yield "

";
        // line 11
        yield ($context["deactivate_tracking"] ?? null);
        yield "

";
        // line 13
        yield ($context["activate_tracking"] ?? null);
        yield "

";
        // line 15
        yield ($context["message"] ?? null);
        yield "

";
        // line 17
        yield ($context["sql_dump"] ?? null);
        yield "

";
        // line 19
        yield ($context["schema_snapshot"] ?? null);
        yield "

";
        // line 21
        yield ($context["tracking_report_rows"] ?? null);
        yield "

";
        // line 23
        yield ($context["tracking_report"] ?? null);
        yield "

";
        // line 25
        yield ($context["main"] ?? null);
        yield "

<br class=\"clearfloat\">
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/index.twig";
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
        return array (  95 => 25,  90 => 23,  85 => 21,  80 => 19,  75 => 17,  70 => 15,  65 => 13,  60 => 11,  55 => 9,  50 => 7,  45 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\tracking\\index.twig");
    }
}
