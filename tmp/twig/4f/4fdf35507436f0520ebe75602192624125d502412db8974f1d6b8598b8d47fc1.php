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

/* table/privileges/index.twig */
class __TwigTemplate_7cfe0a5e7137a9dd954393c87913fbf3c13b0021e634302b6d09e50f80f5876a extends Template
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
        if (($context["is_superuser"] ?? null)) {
            // line 2
            yield "  <form id=\"usersForm\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
            yield "\">
    ";
            // line 3
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "

    <fieldset class=\"pma-fieldset\">
      <legend>
        ";
            // line 7
            yield PhpMyAdmin\Html\Generator::getIcon("b_usrcheck");
            yield "
        ";
            // line 8
            yield Twig\Extension\CoreExtension::sprintf(_gettext("Users having access to \"%s\""), ((((((("<a href=\"" . ($context["table_url"] ?? null)) . PhpMyAdmin\Url::getCommon(["db" =>             // line 9
($context["db"] ?? null), "table" =>             // line 10
($context["table"] ?? null)], "&")) . "\">") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(            // line 11
($context["db"] ?? null), "html")) . ".") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html")) . "</a>"));
            yield "
      </legend>

      <div class=\"table-responsive-md jsresponsive\">
        <table class=\"table table-striped table-hover w-auto\">
          <thead>
            <tr>
              <th></th>
              <th>";
yield _gettext("User name");
            // line 19
            yield "</th>
              <th>";
yield _gettext("Host name");
            // line 20
            yield "</th>
              <th>";
yield _gettext("Type");
            // line 21
            yield "</th>
              <th>";
yield _gettext("Privileges");
            // line 22
            yield "</th>
              <th>";
yield _gettext("Grant");
            // line 23
            yield "</th>
              <th colspan=\"2\">";
yield _gettext("Action");
            // line 24
            yield "</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["privileges"] ?? null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                // line 30
                yield "              ";
                $context["privileges_amount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 30));
                // line 31
                yield "              <tr>
                <td";
                // line 32
                if ((1 === CoreExtension::compare(($context["privileges_amount"] ?? null), 1))) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                  <input type=\"checkbox\" class=\"checkall\" name=\"selected_usr[]\" id=\"checkbox_sel_users_";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 33), "html", null, true);
                yield "\" value=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 34) . "&amp;#27;") . CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 34)), "html", null, true);
                yield "\">
                </td>
                <td";
                // line 36
                if ((1 === CoreExtension::compare(($context["privileges_amount"] ?? null), 1))) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                  ";
                // line 37
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "                    <span class=\"text-danger\">";
yield _gettext("Any");
                    yield "</span>
                  ";
                } else {
                    // line 40
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "user", [], "any", false, false, false, 40), "html", null, true);
                    yield "
                  ";
                }
                // line 42
                yield "                </td>
                <td";
                // line 43
                if ((1 === CoreExtension::compare(($context["privileges_amount"] ?? null), 1))) {
                    yield " class=\"align-middle\" rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["privileges_amount"] ?? null), "html", null, true);
                    yield "\"";
                }
                yield ">
                  ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "host", [], "any", false, false, false, 44), "html", null, true);
                yield "
                </td>
                ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "privileges", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["priv"]) {
                    // line 47
                    yield "                  <td>
                    ";
                    // line 48
                    if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 48), "g"))) {
                        // line 49
                        yield "                      ";
yield _gettext("global");
                        // line 50
                        yield "                    ";
                    } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 50), "d"))) {
                        // line 51
                        yield "                      ";
                        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 51), Twig\Extension\CoreExtension::replace(($context["db"] ?? null), ["_" => "\\_", "%" => "\\%"])))) {
                            // line 52
                            yield "                        ";
yield _gettext("database-specific");
                            // line 53
                            yield "                      ";
                        } else {
                            // line 54
                            yield "                        ";
yield _gettext("wildcard");
                            yield ": <code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 54), "html", null, true);
                            yield "</code>
                      ";
                        }
                        // line 56
                        yield "                    ";
                    } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 56), "t"))) {
                        // line 57
                        yield "                      ";
yield _gettext("table-specific");
                        // line 58
                        yield "                    ";
                    } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 58), "r"))) {
                        // line 59
                        yield "                      ";
yield _gettext("routine");
                        // line 60
                        yield "                    ";
                    }
                    // line 61
                    yield "                  </td>
                  <td>
                    <code>
                      ";
                    // line 64
                    if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "type", [], "any", false, false, false, 64), "r"))) {
                        // line 65
                        yield "                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 65), "html", null, true);
                        yield "
                        (";
                        // line 66
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 66), ", ")), "html", null, true);
                        yield ")
                      ";
                    } else {
                        // line 68
                        yield "                        ";
                        yield Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "privileges", [], "any", false, false, false, 68), ", ");
                        yield "
                      ";
                    }
                    // line 70
                    yield "                    </code>
                  </td>
                  <td>
                    ";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "has_grant", [], "any", false, false, false, 73)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    yield "
                  </td>
                  <td>
                    ";
                    // line 76
                    if (($context["is_grantuser"] ?? null)) {
                        // line 77
                        yield "                      <a class=\"edit_user_anchor\" href=\"";
                        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                         // line 78
$context["privilege"], "user", [], "any", false, false, false, 78), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                         // line 79
$context["privilege"], "host", [], "any", false, false, false, 79), "dbname" => (((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                         // line 80
$context["priv"], "database", [], "any", false, false, false, 80), "*"))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "database", [], "any", false, false, false, 80)) : (($context["db"] ?? null))), "tablename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 81
$context["priv"], "table", [], "any", true, true, false, 81) && (0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81), "*")))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "table", [], "any", false, false, false, 81)) : (($context["table"] ?? null))), "routinename" => (((CoreExtension::getAttribute($this->env, $this->source,                         // line 82
$context["priv"], "routine", [], "any", true, true, false, 82) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["priv"], "routine", [], "any", false, false, false, 82)) : (""))]);
                        // line 83
                        yield "\">
                        ";
                        // line 84
                        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit", _gettext("Edit privileges"));
                        yield "
                      </a>
                    ";
                    }
                    // line 87
                    yield "                  </td>
                  <td class=\"text-center\">
                    <a class=\"export_user_anchor ajax\" href=\"";
                    // line 89
                    yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" => CoreExtension::getAttribute($this->env, $this->source,                     // line 90
$context["privilege"], "user", [], "any", false, false, false, 90), "hostname" => CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["privilege"], "host", [], "any", false, false, false, 91), "export" => true, "initial" => ""]);
                    // line 94
                    yield "\">
                      ";
                    // line 95
                    yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
                    yield "
                    </a>
                  </td>
                </tr>
                  ";
                    // line 99
                    if ((1 === CoreExtension::compare(($context["privileges_amount"] ?? null), 1))) {
                        // line 100
                        yield "                    <tr class=\"noclick\">
                  ";
                    }
                    // line 102
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 104
                yield "              <tr>
                <td colspan=\"7\">
                  ";
yield _gettext("No user found.");
                // line 107
                yield "                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "          </tbody>
        </table>
      </div>

      <div class=\"float-start\">
        <img class=\"selectallarrow\" src=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath((("arrow_" . ($context["text_dir"] ?? null)) . ".png")), "html", null, true);
            yield "\" alt=\"";
yield _gettext("With selected:");
            // line 116
            yield "\" width=\"38\" height=\"22\">
        <input type=\"checkbox\" id=\"usersForm_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
            // line 117
            yield "\">
        <label for=\"usersForm_checkall\">";
yield _gettext("Check all");
            // line 118
            yield "</label>
        <em class=\"with-selected\">";
yield _gettext("With selected:");
            // line 119
            yield "</em>
        <button class=\"btn btn-link mult_submit\" type=\"submit\" name=\"submit_mult\" value=\"export\" title=\"";
yield _gettext("Export");
            // line 120
            yield "\">
          ";
            // line 121
            yield PhpMyAdmin\Html\Generator::getIcon("b_tblexport", _gettext("Export"));
            yield "
        </button>
      </div>
    </fieldset>
  </form>
";
        } else {
            // line 127
            yield "  ";
            yield $this->env->getFilter('error')->getCallable()(_gettext("Not enough privilege to view users."));
            yield "
";
        }
        // line 129
        yield "
";
        // line 130
        if (($context["is_createuser"] ?? null)) {
            // line 131
            yield "  <div class=\"row\">
    <div class=\"col-12\">
      <fieldset class=\"pma-fieldset\" id=\"fieldset_add_user\">
        <legend>";
yield _pgettext("Create new user", "New");
            // line 134
            yield "</legend>
        <a id=\"add_user_anchor\" href=\"";
            // line 135
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true, "dbname" =>             // line 137
($context["db"] ?? null), "tablename" =>             // line 138
($context["table"] ?? null)]);
            // line 139
            yield "\" rel=\"";
            yield PhpMyAdmin\Url::getCommon(["checkprivsdb" => ($context["db"] ?? null), "checkprivstable" => ($context["table"] ?? null)]);
            yield "\">
          ";
            // line 140
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", _gettext("Add user account"));
            yield "
        </a>
      </fieldset>
    </div>
  </div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/privileges/index.twig";
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
        return array (  400 => 140,  395 => 139,  393 => 138,  392 => 137,  391 => 135,  388 => 134,  382 => 131,  380 => 130,  377 => 129,  371 => 127,  362 => 121,  359 => 120,  355 => 119,  351 => 118,  347 => 117,  343 => 116,  339 => 115,  332 => 110,  324 => 107,  319 => 104,  306 => 103,  300 => 102,  296 => 100,  294 => 99,  287 => 95,  284 => 94,  282 => 91,  281 => 90,  280 => 89,  276 => 87,  270 => 84,  267 => 83,  265 => 82,  264 => 81,  263 => 80,  262 => 79,  261 => 78,  259 => 77,  257 => 76,  251 => 73,  246 => 70,  240 => 68,  235 => 66,  230 => 65,  228 => 64,  223 => 61,  220 => 60,  217 => 59,  214 => 58,  211 => 57,  208 => 56,  200 => 54,  197 => 53,  194 => 52,  191 => 51,  188 => 50,  185 => 49,  183 => 48,  180 => 47,  176 => 46,  171 => 44,  163 => 43,  160 => 42,  154 => 40,  148 => 38,  146 => 37,  138 => 36,  133 => 34,  130 => 33,  122 => 32,  119 => 31,  116 => 30,  98 => 29,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  59 => 11,  58 => 10,  57 => 9,  56 => 8,  52 => 7,  45 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/privileges/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\privileges\\index.twig");
    }
}
