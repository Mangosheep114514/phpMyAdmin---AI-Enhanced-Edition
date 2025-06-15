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

/* table/tracking/main.twig */
class __TwigTemplate_cfcc5bdea4862239857bd0021bf562d1fab8652f21d707ccabdf19a50890ce33 extends Template
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
        if ((1 === CoreExtension::compare(($context["selectable_tables_num_rows"] ?? null), 0))) {
            // line 2
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            yield "\">
        ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        <select name=\"table\" class=\"autosubmit\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["selectable_tables_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 6), "html", null, true);
                yield "\"";
                // line 7
                yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 7), ($context["selected_table"] ?? null)))) ? (" selected") : (""));
                yield ">
                    ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "db_name", [], "any", false, false, false, 8), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "table_name", [], "any", false, false, false, 8), "html", null, true);
                yield "
                    ";
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "is_tracked", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "                        (";
yield _gettext("active");
                    yield ")
                    ";
                } else {
                    // line 12
                    yield "                        (";
yield _gettext("not active");
                    yield ")
                    ";
                }
                // line 14
                yield "                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </select>
        <input type=\"hidden\" name=\"show_versions_submit\" value=\"1\">
    </form>
";
        }
        // line 20
        yield "<br>
";
        // line 21
        if ((1 === CoreExtension::compare(($context["last_version"] ?? null), 0))) {
            // line 22
            yield "    <form method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
            yield "\" name=\"versionsForm\" id=\"versionsForm\" class=\"ajax\">
        ";
            // line 23
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
        <table id=\"versions\" class=\"table table-striped table-hover table-sm w-auto\">
            <thead>
                <tr>
                    <th></th>
                    <th>";
yield _gettext("Version");
            // line 28
            yield "</th>
                    <th>";
yield _gettext("Created");
            // line 29
            yield "</th>
                    <th>";
yield _gettext("Updated");
            // line 30
            yield "</th>
                    <th>";
yield _gettext("Status");
            // line 31
            yield "</th>
                    <th>";
yield _gettext("Action");
            // line 32
            yield "</th>
                    <th>";
yield _gettext("Show");
            // line 33
            yield "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["versions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 38
                yield "                    <tr>
                        <td class=\"text-center\">
                            <input type=\"checkbox\" name=\"selected_versions[]\"
                                class=\"checkall\" id=\"selected_versions_";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["version"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["version"] ?? null) : null));
                yield "\"
                                value=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["version"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["version"] ?? null) : null));
                yield "\">
                        </td>
                        <td>
                            <label for=\"selected_versions_";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = $context["version"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["version"] ?? null) : null));
                yield "\">
                                <b>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = $context["version"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["version"] ?? null) : null));
                yield "</b>
                            </label>
                        </td>
                        <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = $context["version"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["date_created"] ?? null) : null));
                yield "</td>
                        <td>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = $context["version"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_updated"] ?? null) : null));
                yield "</td>
                        ";
                // line 51
                if ((0 === CoreExtension::compare((($__internal_compile_6 = $context["version"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["tracking_active"] ?? null) : null), 1))) {
                    // line 52
                    yield "                            ";
                    $context["last_version_status"] = 1;
                    // line 53
                    yield "                            <td>";
yield _gettext("active");
                    yield "</td>
                        ";
                } else {
                    // line 55
                    yield "                            ";
                    $context["last_version_status"] = 0;
                    // line 56
                    yield "                            <td>";
yield _gettext("not active");
                    yield "</td>
                        ";
                }
                // line 58
                yield "                        <td>
                            <a class=\"delete_version_anchor ajax\" href=\"";
                // line 59
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 60
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($__internal_compile_7 =                 // line 61
$context["version"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["version"] ?? null) : null), "submit_delete_version" => true]), "", false);
                // line 63
                yield "\">
                                ";
                // line 64
                yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete version"));
                yield "
                            </a>
                        </td>
                        <td>
                            <a href=\"";
                // line 68
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 69
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($__internal_compile_8 =                 // line 70
$context["version"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["version"] ?? null) : null), "report" => "true"]), "", false);
                // line 72
                yield "\">
                                ";
                // line 73
                yield PhpMyAdmin\Html\Generator::getIcon("b_report", _gettext("Tracking report"));
                yield "
                            </a>
                            <a href=\"";
                // line 75
                yield PhpMyAdmin\Url::getFromRoute("/table/tracking");
                yield "\" data-post=\"";
                // line 76
                yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["version" => (($__internal_compile_9 =                 // line 77
$context["version"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["version"] ?? null) : null), "snapshot" => "true"]), "", false);
                // line 79
                yield "\">
                                ";
                // line 80
                yield PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Structure snapshot"));
                yield "
                            </a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "            </tbody>
        </table>
        ";
            // line 87
            yield from             $this->loadTemplate("select_all.twig", "table/tracking/main.twig", 87)->unwrap()->yield(CoreExtension::toArray(["text_dir" =>             // line 88
($context["text_dir"] ?? null), "form_name" => "versionsForm"]));
            // line 91
            yield "        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"delete_version\" title=\"";
yield _gettext("Delete version");
            yield "\">
            ";
            // line 92
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Delete version"));
            yield "
        </button>
    </form>
    ";
            // line 95
            $context["last_version_element"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["versions"] ?? null));
            // line 96
            yield "    <div>
        <form method=\"post\" action=\"";
            // line 97
            yield PhpMyAdmin\Url::getFromRoute("/table/tracking", ($context["url_params"] ?? null));
            yield "\">
            ";
            // line 98
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
            <fieldset class=\"pma-fieldset\">
                <legend>
                    ";
            // line 101
            if ((0 === CoreExtension::compare((($__internal_compile_10 = ($context["last_version_element"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["tracking_active"] ?? null) : null), 0))) {
                // line 102
                yield "                        ";
                $context["legend"] = _gettext("Activate tracking for %s");
                // line 103
                yield "                        ";
                $context["value"] = "activate_now";
                // line 104
                yield "                        ";
                $context["button"] = _gettext("Activate now");
                // line 105
                yield "                    ";
            } else {
                // line 106
                yield "                        ";
                $context["legend"] = _gettext("Deactivate tracking for %s");
                // line 107
                yield "                        ";
                $context["value"] = "deactivate_now";
                // line 108
                yield "                        ";
                $context["button"] = _gettext("Deactivate now");
                // line 109
                yield "                    ";
            }
            // line 110
            yield "
                    ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(($context["legend"] ?? null), ((($context["db"] ?? null) . ".") . ($context["table"] ?? null))), "html", null, true);
            yield "
                </legend>
                <input type=\"hidden\" name=\"version\" value=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_version"] ?? null), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"toggle_activation\" value=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\">
                <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button"] ?? null), "html", null, true);
            yield "\">
            </fieldset>
        </form>
    </div>
";
        }
        // line 120
        yield from         $this->loadTemplate("create_tracking_version.twig", "table/tracking/main.twig", 120)->unwrap()->yield(CoreExtension::toArray(["route" => "/table/tracking", "url_params" =>         // line 122
($context["url_params"] ?? null), "last_version" =>         // line 123
($context["last_version"] ?? null), "db" =>         // line 124
($context["db"] ?? null), "selected" => [        // line 125
($context["table"] ?? null)], "type" =>         // line 126
($context["type"] ?? null), "default_statements" =>         // line 127
($context["default_statements"] ?? null)]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/tracking/main.twig";
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
        return array (  339 => 127,  338 => 126,  337 => 125,  336 => 124,  335 => 123,  334 => 122,  333 => 120,  325 => 115,  321 => 114,  317 => 113,  312 => 111,  309 => 110,  306 => 109,  303 => 108,  300 => 107,  297 => 106,  294 => 105,  291 => 104,  288 => 103,  285 => 102,  283 => 101,  277 => 98,  273 => 97,  270 => 96,  268 => 95,  262 => 92,  257 => 91,  255 => 88,  254 => 87,  250 => 85,  239 => 80,  236 => 79,  234 => 77,  233 => 76,  230 => 75,  225 => 73,  222 => 72,  220 => 70,  219 => 69,  216 => 68,  209 => 64,  206 => 63,  204 => 61,  203 => 60,  200 => 59,  197 => 58,  191 => 56,  188 => 55,  182 => 53,  179 => 52,  177 => 51,  173 => 50,  169 => 49,  163 => 46,  159 => 45,  153 => 42,  149 => 41,  144 => 38,  140 => 37,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  118 => 29,  114 => 28,  105 => 23,  100 => 22,  98 => 21,  95 => 20,  89 => 16,  82 => 14,  76 => 12,  70 => 10,  68 => 9,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  45 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/tracking/main.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\tracking\\main.twig");
    }
}
