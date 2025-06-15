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

/* create_tracking_version.twig */
class __TwigTemplate_0d73593f3e89b65ca5349bc2e91e7a7ce14c024df7cdd3cb20877412590ceea5 extends Template
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
        yield "<div class=\"card mt-3\">
    <form method=\"post\" action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute(($context["route"] ?? null), ($context["url_params"] ?? null));
        yield "\">
        ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["selected"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["selected_table"]) {
            // line 5
            yield "            <input type=\"hidden\" name=\"selected[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selected_table"], "html", null, true);
            yield "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selected_table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "
        <div class=\"card-header\">
                ";
        // line 9
        if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["selected"] ?? null)), 1))) {
            // line 10
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Create version %1\$s of %2\$s"), (            // line 11
($context["last_version"] ?? null) + 1), ((            // line 12
($context["db"] ?? null) . ".") . (($__internal_compile_0 = ($context["selected"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null))), "html", null, true);
            // line 13
            yield "
                ";
        } else {
            // line 15
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Create version %1\$s"), (($context["last_version"] ?? null) + 1)), "html", null, true);
            yield "
                ";
        }
        // line 17
        yield "        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["last_version"] ?? null) + 1), "html", null, true);
        yield "\">
            <p>";
yield _gettext("Track these data definition statements:");
        // line 21
        yield "</p>

            ";
        // line 23
        if (((0 === CoreExtension::compare(($context["type"] ?? null), "both")) || (0 === CoreExtension::compare(($context["type"] ?? null), "table")))) {
            // line 24
            yield "                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"";
            // line 25
            yield ((CoreExtension::inFilter("ALTER TABLE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"";
            // line 28
            yield ((CoreExtension::inFilter("RENAME TABLE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"";
            // line 31
            yield ((CoreExtension::inFilter("CREATE TABLE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"";
            // line 34
            yield ((CoreExtension::inFilter("DROP TABLE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                DROP TABLE<br>
            ";
        }
        // line 37
        yield "            ";
        if ((0 === CoreExtension::compare(($context["type"] ?? null), "both"))) {
            // line 38
            yield "                <br>
            ";
        }
        // line 40
        yield "            ";
        if (((0 === CoreExtension::compare(($context["type"] ?? null), "both")) || (0 === CoreExtension::compare(($context["type"] ?? null), "view")))) {
            // line 41
            yield "                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"";
            // line 42
            yield ((CoreExtension::inFilter("ALTER VIEW", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"";
            // line 45
            yield ((CoreExtension::inFilter("CREATE VIEW", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"";
            // line 48
            yield ((CoreExtension::inFilter("DROP VIEW", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
            yield ">
                DROP VIEW<br>
            ";
        }
        // line 51
        yield "            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"";
        // line 54
        yield ((CoreExtension::inFilter("CREATE INDEX", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"";
        // line 57
        yield ((CoreExtension::inFilter("DROP INDEX", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            DROP INDEX<br>

            <p>";
yield _gettext("Track these data manipulation statements:");
        // line 60
        yield "</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"";
        // line 62
        yield ((CoreExtension::inFilter("INSERT", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"";
        // line 65
        yield ((CoreExtension::inFilter("UPDATE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"";
        // line 68
        yield ((CoreExtension::inFilter("DELETE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"";
        // line 71
        yield ((CoreExtension::inFilter("TRUNCATE", ($context["default_statements"] ?? null))) ? (" checked=\"checked\"") : (""));
        yield ">
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Create version");
        // line 77
        yield "\">
        </div>
    </form>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "create_tracking_version.twig";
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
        return array (  194 => 77,  184 => 71,  179 => 68,  174 => 65,  169 => 62,  166 => 60,  159 => 57,  154 => 54,  150 => 51,  144 => 48,  139 => 45,  134 => 42,  132 => 41,  129 => 40,  125 => 38,  122 => 37,  116 => 34,  111 => 31,  106 => 28,  101 => 25,  99 => 24,  97 => 23,  93 => 21,  88 => 20,  83 => 17,  77 => 15,  73 => 13,  71 => 12,  70 => 11,  68 => 10,  66 => 9,  62 => 7,  53 => 5,  49 => 4,  45 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "create_tracking_version.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\create_tracking_version.twig");
    }
}
