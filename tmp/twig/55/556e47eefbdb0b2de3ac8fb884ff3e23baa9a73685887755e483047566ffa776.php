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

/* sql/bookmark.twig */
class __TwigTemplate_648e6aa432205400f74a5069c31abfa0eb7ce57df60e4de4f099f996e234bf9e extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" method=\"post\" class=\"bookmarkQueryForm d-print-none\"
    onsubmit=\"return ! Functions.emptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"db\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"goto\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
        yield "\">
    <fieldset class=\"pma-fieldset\">
        <legend>
            ";
        // line 11
        yield PhpMyAdmin\Html\Generator::getIcon("b_bookmark", _gettext("Bookmark this SQL query"), true);
        yield "
        </legend>
        <div class=\"formelement\">
            <label>
                ";
yield _gettext("Label:");
        // line 16
        yield "                <input type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
            </label>
        </div>
        <div class=\"formelement\">
            <label>
                <input type=\"checkbox\" name=\"bkm_all_users\" value=\"true\">
                ";
yield _gettext("Let every user access this bookmark");
        // line 23
        yield "            </label>
        </div>
        <div class=\"clearfloat\"></div>
    </fieldset>
    <fieldset class=\"pma-fieldset tblFooters\">
        <input type=\"hidden\" name=\"store_bkm\" value=\"1\">
        <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
yield _gettext("Bookmark this SQL query");
        // line 29
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
        return "sql/bookmark.twig";
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
        return array (  96 => 29,  87 => 23,  78 => 16,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sql/bookmark.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\sql\\bookmark.twig");
    }
}
