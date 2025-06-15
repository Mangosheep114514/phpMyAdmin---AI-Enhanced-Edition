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

/* server/privileges/add_user.twig */
class __TwigTemplate_32b22268d8cb7081f651e3cbffbd06f4912a5d9cbad63427e0615ebfd07e4b71 extends Template
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
        yield "<h2>
  ";
        // line 2
        yield PhpMyAdmin\Html\Generator::getIcon("b_usradd");
        yield "
  ";
yield _gettext("Add user account");
        // line 4
        yield "</h2>

<form name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 6
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\" autocomplete=\"off\">
  ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "

  ";
        // line 9
        yield ($context["login_information_fields_new"] ?? null);
        yield "

  <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user_database\">
    <legend>";
yield _gettext("Database for user account");
        // line 12
        yield "</legend>

    <input type=\"checkbox\" name=\"createdb-1\" id=\"createdb-1\">
    <label for=\"createdb-1\">";
yield _gettext("Create database with same name and grant all privileges.");
        // line 15
        yield "</label>
    <br>

    <input type=\"checkbox\" name=\"createdb-2\" id=\"createdb-2\">
    <label for=\"createdb-2\">";
yield _gettext("Grant all privileges on wildcard name (username\\_%).");
        // line 19
        yield "</label>
    <br>

    ";
        // line 22
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) {
            // line 23
            yield "      <input type=\"checkbox\" name=\"createdb-3\" id=\"createdb-3\" checked>
      <label for=\"createdb-3\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Grant all privileges on database %s."), ($context["database"] ?? null)), "html", null, true);
            yield "</label>
      <input type=\"hidden\" name=\"dbname\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database"] ?? null), "html", null, true);
            yield "\">
      <br>
    ";
        }
        // line 28
        yield "  </fieldset>

  ";
        // line 30
        if (($context["is_grant_user"] ?? null)) {
            // line 31
            yield "    ";
            yield ($context["privileges_table"] ?? null);
            yield "
  ";
        }
        // line 33
        yield "
  <fieldset id=\"fieldset_add_user_footer\" class=\"pma-fieldset tblFooters\">
    <input type=\"hidden\" name=\"adduser_submit\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"adduser_submit\" value=\"";
yield _gettext("Go");
        // line 36
        yield "\">
  </fieldset>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/add_user.twig";
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
        return array (  117 => 36,  111 => 33,  105 => 31,  103 => 30,  99 => 28,  93 => 25,  89 => 24,  86 => 23,  84 => 22,  79 => 19,  72 => 15,  66 => 12,  59 => 9,  54 => 7,  50 => 6,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/add_user.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\add_user.twig");
    }
}
