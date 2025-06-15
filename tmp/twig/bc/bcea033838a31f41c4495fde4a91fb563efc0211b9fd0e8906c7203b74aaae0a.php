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

/* database/search/main.twig */
class __TwigTemplate_b9378f9274e82467f414f6e4a534752f8de93083b9ca29ab0acf26ff6ced68ae extends Template
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
        yield "<a id=\"db_search\"></a>
<form id=\"db_search_form\" method=\"post\" action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/database/search");
        yield "\" name=\"db_search\" class=\"ajax lock-page\">
    ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
    <fieldset class=\"pma-fieldset\">
        <legend>";
yield _gettext("Search in database");
        // line 5
        yield "</legend>
        <p>
            <label for=\"criteriaSearchString\" class=\"d-block\">
                ";
yield _gettext("Words or values to search for (wildcard: \"%\"):");
        // line 9
        yield "            </label>
            <input id=\"criteriaSearchString\" name=\"criteriaSearchString\" class=\"w-75\" type=\"text\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["criteria_search_string"] ?? null), "html", null, true);
        yield "\">
        </p>

        <fieldset class=\"pma-fieldset\">
            <legend>";
yield _gettext("Find:");
        // line 15
        yield "</legend>

            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"";
        // line 18
        yield (((0 === CoreExtension::compare(($context["criteria_search_type"] ?? null), "1"))) ? (" checked") : (""));
        yield ">
              <label for=\"criteriaSearchTypeRadio1\">";
yield _gettext("at least one of the words");
        // line 19
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"";
        // line 22
        yield (((0 === CoreExtension::compare(($context["criteria_search_type"] ?? null), "2"))) ? (" checked") : (""));
        yield ">
              <label for=\"criteriaSearchTypeRadio2\">";
yield _gettext("all of the words");
        // line 23
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"";
        // line 26
        yield (((0 === CoreExtension::compare(($context["criteria_search_type"] ?? null), "3"))) ? (" checked") : (""));
        yield ">
              <label for=\"criteriaSearchTypeRadio3\">";
yield _gettext("the exact phrase as substring");
        // line 27
        yield "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"";
        // line 30
        yield (((0 === CoreExtension::compare(($context["criteria_search_type"] ?? null), "4"))) ? (" checked") : (""));
        yield ">
              <label for=\"criteriaSearchTypeRadio4\">";
yield _gettext("the exact phrase as whole field");
        // line 31
        yield "</label>
            </div>
            <div>
              <input type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"";
        // line 34
        yield (((0 === CoreExtension::compare(($context["criteria_search_type"] ?? null), "5"))) ? (" checked") : (""));
        yield ">
              <label for=\"criteriaSearchTypeRadio5\">";
yield _gettext("as regular expression");
        // line 35
        yield " ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Regexp");
        yield "</label>
            </div>
        </fieldset>

        <fieldset class=\"pma-fieldset\">
            <legend>";
yield _gettext("Inside tables:");
        // line 40
        yield "</legend>
            <p>
                <a href=\"#\" id=\"select_all\">
                    ";
yield _gettext("Select all");
        // line 44
        yield "                </a> /
                <a href=\"#\" id=\"unselect_all\">
                    ";
yield _gettext("Unselect all");
        // line 47
        yield "                </a>
            </p>
            <select class=\"resize-vertical\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables_names_only"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 51
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "\"
                            ";
            // line 52
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["criteria_tables"] ?? null)), 0))) {
                // line 53
                yield ((CoreExtension::inFilter($context["each_table"], ($context["criteria_tables"] ?? null))) ? (" selected") : (""));
                yield "
                            ";
            } else {
                // line 55
                yield " selected
                            ";
            }
            // line 57
            yield "                        >
                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "            </select>
        </fieldset>

        <p>
            ";
        // line 66
        yield "            <label for=\"criteriaColumnName\" class=\"d-block\">
                ";
yield _gettext("Inside column:");
        // line 68
        yield "            </label>
            <input id=\"criteriaColumnName\" type=\"text\" name=\"criteriaColumnName\" class=\"w-75\" value=\"";
        // line 70
        (( !Twig\Extension\CoreExtension::testEmpty(($context["criteria_column_name"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["criteria_column_name"] ?? null), "html", null, true)) : (yield ""));
        yield "\">
        </p>
    </fieldset>
    <fieldset class=\"pma-fieldset tblFooters\">
        <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"";
yield _gettext("Go");
        // line 74
        yield "\">
    </fieldset>
</form>
<div id=\"togglesearchformdiv\">
    <a id=\"togglesearchformlink\"></a>
</div>
<div id=\"searchresults\"></div>
<div id=\"togglesearchresultsdiv\"><a id=\"togglesearchresultlink\"></a></div>
<br class=\"clearfloat\">
";
        // line 84
        yield "<div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
</div>
";
        // line 88
        yield "<div id=\"browse-results\">
    ";
        // line 90
        yield "</div>
<div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 93
        yield "</div>
";
        // line 95
        yield "<button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/search/main.twig";
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
        return array (  227 => 95,  224 => 93,  220 => 90,  217 => 88,  212 => 84,  201 => 74,  193 => 70,  190 => 68,  186 => 66,  180 => 61,  171 => 58,  168 => 57,  164 => 55,  159 => 53,  157 => 52,  152 => 51,  148 => 50,  143 => 47,  138 => 44,  132 => 40,  122 => 35,  117 => 34,  112 => 31,  107 => 30,  102 => 27,  97 => 26,  90 => 23,  85 => 22,  78 => 19,  73 => 18,  68 => 15,  60 => 11,  57 => 9,  51 => 5,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/search/main.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\search\\main.twig");
    }
}
