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

/* database/structure/overhead.twig */
class __TwigTemplate_fe1536b942b8f2f6663bf1e12e0d76ebf5adbcf2c666b7f18d7cf1b6cba3b65e extends Template
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
        yield "<a href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/structure", ($context["table_url_params"] ?? null));
        yield "#showusage\" id=\"overhead\">
  <span>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formatted_overhead"] ?? null), "html", null, true);
        yield "</span>&nbsp;<span class=\"unit\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["overhead_unit"] ?? null), "html", null, true);
        yield "</span>
</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/structure/overhead.twig";
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
        return array (  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/overhead.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\structure\\overhead.twig");
    }
}
