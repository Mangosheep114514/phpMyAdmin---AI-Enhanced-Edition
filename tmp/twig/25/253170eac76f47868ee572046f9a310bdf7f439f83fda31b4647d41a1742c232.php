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

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_69ed6aa84e1233a10c592e563f082485335e2a1048e8d17d6d3a91624e0b7a62 extends Template
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
        yield "<form id=\"continueForm\" method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/replace");
        yield "\" name=\"continueForm\">
    ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
    <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["goto"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["err_url"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sql_query"] ?? null), "html", null, true);
        yield "\">

    ";
        // line 7
        if (($context["has_where_clause"] ?? null)) {
            // line 8
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["where_clause_array"] ?? null));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                yield "            <input type=\"hidden\" name=\"where_clause[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key_id"], "html", null, true);
                yield "]\" value=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["where_clause"]), "html", null, true);
                yield "\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key_id'], $context['where_clause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            yield "    ";
        }
        // line 13
        yield "
    ";
        // line 14
        $context["insert_rows"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 15
            yield "        <input type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["insert_rows_default"] ?? null), "html", null, true);
            yield "\" min=\"1\">
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        yield "    ";
        yield Twig\Extension\CoreExtension::sprintf(_gettext("Continue insertion with %s rows"), ($context["insert_rows"] ?? null));
        yield "
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/continue_insertion_form.twig";
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
        return array (  95 => 18,  89 => 16,  87 => 15,  85 => 14,  82 => 13,  79 => 12,  71 => 10,  67 => 9,  62 => 8,  60 => 7,  55 => 5,  51 => 4,  47 => 3,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/continue_insertion_form.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\insert\\continue_insertion_form.twig");
    }
}
