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

/* server/privileges/get_user_link.twig */
class __TwigTemplate_155efc481f22b4f0d84468aaa5059e814474c82da8f4bcc7c771b5114d7459b8 extends Template
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
        yield "<a
  ";
        // line 2
        if ( !(($context["link_class"] ?? null) === "")) {
            // line 3
            yield "    class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_class"] ?? null), "html", null, true);
            yield "\"
  ";
        }
        // line 5
        yield "  href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ((($context["is_revoke"] ?? null)) ? ([]) : (($context["url_params"] ?? null))));
        yield "\"
  ";
        // line 6
        if (($context["is_revoke"] ?? null)) {
            // line 7
            yield "    data-post=\"";
            yield PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null), "");
            yield "\"
  ";
        }
        // line 9
        yield ">
  ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon(CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "text", [], "any", false, false, false, 10));
        yield "
</a>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/get_user_link.twig";
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
        return array (  65 => 10,  62 => 9,  56 => 7,  54 => 6,  49 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/get_user_link.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\get_user_link.twig");
    }
}
