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

/* server/privileges/user_overview.twig */
class __TwigTemplate_5cceddddb3cc33e837c600422bec3a9291a23d9d30fd69e7b7178fbb32e58dfc extends Template
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
        yield "<div class=\"row\">
  <div class=\"col-12\">
    <h2>
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist");
        yield "
      ";
yield _gettext("User accounts overview");
        // line 6
        yield "    </h2>
  </div>
</div>

";
        // line 10
        yield ($context["error_messages"] ?? null);
        yield "

";
        // line 12
        yield ($context["empty_user_notice"] ?? null);
        yield "

";
        // line 14
        yield ($context["initials"] ?? null);
        yield "

";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["users_overview"] ?? null))) {
            // line 17
            yield "  ";
            yield ($context["users_overview"] ?? null);
            yield "
";
        } elseif (        // line 18
($context["is_createuser"] ?? null)) {
            // line 19
            yield "  <div class=\"row\">
    <div class=\"col-12\">
      <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user\">
        <legend>";
yield _pgettext("Create new user", "New");
            // line 22
            yield "</legend>
        <a id=\"add_user_anchor\" href=\"";
            // line 23
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">
          ";
            // line 24
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            yield "
        </a>
      </fieldset>
    </div>
  </div>
";
        }
        // line 30
        yield "
";
        // line 31
        yield ($context["flush_notice"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/user_overview.twig";
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
        return array (  103 => 31,  100 => 30,  91 => 24,  87 => 23,  84 => 22,  78 => 19,  76 => 18,  71 => 17,  69 => 16,  64 => 14,  59 => 12,  54 => 10,  48 => 6,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/user_overview.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\user_overview.twig");
    }
}
