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

/* server/privileges/privileges_summary.twig */
class __TwigTemplate_6c1c472ccaaeac52dee95e7f69d51fbece322cdbd28ff84ef732d33032dab6fc extends Template
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
        yield "<form class=\"submenu-item\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_id"] ?? null), "html", null, true);
        yield "\" method=\"post\">
    ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"username\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "\">

    <fieldset class=\"pma-fieldset\">
        <legend data-submenu-label=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sub_menu_label"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["legend"] ?? null), "html", null, true);
        yield "
        </legend>

        <table class=\"table table-striped table-hover w-auto\">
            <thead>
                <tr>
                    <th scope=\"col\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type_label"] ?? null), "html", null, true);
        yield "</th>
                    <th scope=\"col\">";
yield _gettext("Privileges");
        // line 15
        yield "</th>
                    <th scope=\"col\">";
yield _gettext("Grant");
        // line 16
        yield "</th>
                    ";
        // line 17
        if ((0 === CoreExtension::compare(($context["type"] ?? null), "database"))) {
            // line 18
            yield "                        <th scope=\"col\">";
yield _gettext("Table-specific privileges");
            yield "</th>
                    ";
        } elseif ((0 === CoreExtension::compare(        // line 19
($context["type"] ?? null), "table"))) {
            // line 20
            yield "                        <th scope=\"col\">";
yield _gettext("Column-specific privileges");
            yield "</th>
                    ";
        }
        // line 22
        yield "                    <th scope=\"col\" colspan=\"2\">";
yield _gettext("Action");
        yield "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 27
        if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["privileges"] ?? null)), 0))) {
            // line 28
            yield "                    ";
            $context["colspan"] = (((0 === CoreExtension::compare(($context["type"] ?? null), "database"))) ? (7) : ((((0 === CoreExtension::compare(($context["type"] ?? null), "table"))) ? (6) : (5))));
            // line 29
            yield "                    <tr>
                        <td class=\"text-center\" colspan=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["colspan"] ?? null), "html", null, true);
            yield "\"><em>";
yield _gettext("None");
            yield "</em></td>
                    </tr>
                ";
        } else {
            // line 33
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["privileges"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 34
                yield "                        <tr>
                            <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["privilege"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null), "html", null, true);
                yield "</td>
                            <td><code>";
                // line 36
                yield (($__internal_compile_1 = $context["privilege"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["privileges"] ?? null) : null);
                yield "</code></td>
                            <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($__internal_compile_2 = $context["privilege"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["grant"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                yield "</td>

                            ";
                // line 39
                if ((0 === CoreExtension::compare(($context["type"] ?? null), "database"))) {
                    // line 40
                    yield "                                <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($__internal_compile_3 = $context["privilege"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["table_privs"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    yield "</td>
                            ";
                } elseif ((0 === CoreExtension::compare(                // line 41
($context["type"] ?? null), "table"))) {
                    // line 42
                    yield "                                <td>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((($__internal_compile_4 = $context["privilege"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["column_privs"] ?? null) : null)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    yield "</td>
                            ";
                }
                // line 44
                yield "
                            <td>";
                // line 45
                yield (($__internal_compile_5 = $context["privilege"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["edit_link"] ?? null) : null);
                yield "</td>
                            <td>";
                // line 46
                yield (($__internal_compile_6 = $context["privilege"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["revoke_link"] ?? null) : null);
                yield "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "                ";
        }
        // line 50
        yield "            </tbody>
        </table>

        ";
        // line 53
        if ((0 === CoreExtension::compare(($context["type"] ?? null), "database"))) {
            // line 54
            yield "            <label for=\"text_dbname\">";
yield _gettext("Add privileges on the following database(s):");
            yield "</label>";
            // line 56
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["databases"] ?? null))) {
                // line 57
                yield "                <select class=\"resize-vertical\" name=\"pred_dbname[]\" multiple=\"multiple\">
                    ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                    // line 59
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_7 = ($context["escaped_databases"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59)] ?? null) : null), "html", null, true);
                    yield "\">
                            ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["database"], "html", null, true);
                    yield "
                        </option>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "                </select>
            ";
            }
            // line 66
            yield "<input type=\"text\" id=\"text_dbname\" name=\"dbname\">
            ";
            // line 67
            yield PhpMyAdmin\Html\Generator::showHint(_gettext("Wildcards % and _ should be escaped with a \\ to use them literally."));
            yield "
        ";
        } elseif ((0 === CoreExtension::compare(        // line 68
($context["type"] ?? null), "table"))) {
            // line 69
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::escapeMysqlWildcards(($context["database"] ?? null)), "html", null, true);
            yield "\">

            <label for=\"text_tablename\">";
yield _gettext("Add privileges on the following table:");
            // line 71
            yield "</label>";
            // line 73
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["tables"] ?? null))) {
                // line 74
                yield "                <select name=\"pred_tablename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
yield _gettext("Use text field");
                // line 75
                yield ":</option>
                    ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
                    // line 77
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                </select>
            ";
            }
            // line 82
            yield "<input type=\"text\" id=\"text_tablename\" name=\"tablename\">
        ";
        } else {
            // line 84
            yield "            <input type=\"hidden\" name=\"dbname\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::escapeMysqlWildcards(($context["database"] ?? null)), "html", null, true);
            yield "\">

            <label for=\"text_routinename\">";
yield _gettext("Add privileges on the following routine:");
            // line 86
            yield "</label>";
            // line 88
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["routines"] ?? null))) {
                // line 89
                yield "                <select name=\"pred_routinename\" class=\"autosubmit\">
                    <option value=\"\" selected=\"selected\">";
yield _gettext("Use text field");
                // line 90
                yield ":</option>
                    ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["routines"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["routine"]) {
                    // line 92
                    yield "                        <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["routine"], "html", null, true);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['routine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                yield "                </select>
            ";
            }
            // line 97
            yield "<input type=\"text\" id=\"text_routinename\" name=\"routinename\">
        ";
        }
        // line 99
        yield "    </fieldset>

    <fieldset class=\"pma-fieldset tblFooters\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
        // line 102
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
        return "server/privileges/privileges_summary.twig";
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
        return array (  335 => 102,  329 => 99,  325 => 97,  321 => 94,  310 => 92,  306 => 91,  303 => 90,  299 => 89,  297 => 88,  295 => 86,  288 => 84,  284 => 82,  280 => 79,  269 => 77,  265 => 76,  262 => 75,  258 => 74,  256 => 73,  254 => 71,  247 => 69,  245 => 68,  241 => 67,  238 => 66,  234 => 63,  217 => 60,  212 => 59,  195 => 58,  192 => 57,  190 => 56,  186 => 54,  184 => 53,  179 => 50,  176 => 49,  167 => 46,  163 => 45,  160 => 44,  154 => 42,  152 => 41,  147 => 40,  145 => 39,  140 => 37,  136 => 36,  132 => 35,  129 => 34,  124 => 33,  116 => 30,  113 => 29,  110 => 28,  108 => 27,  99 => 22,  93 => 20,  91 => 19,  86 => 18,  84 => 17,  81 => 16,  77 => 15,  72 => 14,  63 => 8,  59 => 7,  53 => 4,  49 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/privileges_summary.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\privileges_summary.twig");
    }
}
