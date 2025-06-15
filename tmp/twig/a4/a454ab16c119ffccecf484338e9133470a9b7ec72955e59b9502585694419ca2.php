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

/* server/privileges/user_properties.twig */
class __TwigTemplate_61990f8257e55df3e0a73d515a94d6d1da5d7ff45b7b941eb8f16af99509509f extends Template
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
        yield "<div id=\"edit_user_dialog\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_usredit");
        yield "
    ";
yield _gettext("Edit privileges:");
        // line 5
        yield "    ";
yield _gettext("User account");
        // line 6
        yield "
    ";
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database"] ?? null))) {
            // line 8
            yield "      <em>
        <a class=\"edit_user_anchor\" href=\"";
            // line 9
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>             // line 10
($context["username"] ?? null), "hostname" =>             // line 11
($context["hostname"] ?? null), "dbname" => "", "tablename" => ""]);
            // line 14
            yield "\">
          '";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
            yield "'
        </a>
      </em>
      -
      ";
            // line 19
            if (($context["is_databases"] ?? null)) {
                // line 20
                yield "        ";
yield _gettext("Databases");
                // line 21
                yield "      ";
            } else {
                // line 22
                yield "        ";
yield _gettext("Database");
                // line 23
                yield "      ";
            }
            // line 24
            yield "
      ";
            // line 25
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) {
                // line 26
                yield "        <em>
          <a href=\"";
                // line 27
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["username" =>                 // line 28
($context["username"] ?? null), "hostname" =>                 // line 29
($context["hostname"] ?? null), "dbname" =>                 // line 30
($context["dbname"] ?? null), "tablename" => ""]);
                // line 32
                yield "\">
            ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database"] ?? null), "html", null, true);
                yield "
          </a>
        </em>
        -
        ";
yield _gettext("Table");
                // line 38
                yield "        <em>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
                yield "</em>
      ";
            } else {
                // line 40
                yield "        ";
                if ( !is_iterable(($context["database"] ?? null))) {
                    // line 41
                    yield "          ";
                    $context["database"] = [($context["database"] ?? null)];
                    // line 42
                    yield "        ";
                }
                // line 43
                yield "        <em>
          ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["database"] ?? null), ", "), "html", null, true);
                yield "
        </em>
      ";
            }
            // line 47
            yield "    ";
        } else {
            // line 48
            yield "      <em>'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "'@'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
            yield "'</em>
    ";
        }
        // line 50
        yield "  </h2>

  ";
        // line 52
        if ((0 === CoreExtension::compare(($context["current_user"] ?? null), ((($context["username"] ?? null) . "@") . ($context["hostname"] ?? null))))) {
            // line 53
            yield "    ";
            yield $this->env->getFilter('notice')->getCallable()(_gettext("Note: You are attempting to edit privileges of the user with which you are currently logged in."));
            yield "
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if (($context["user_does_not_exists"] ?? null)) {
            // line 57
            yield "    ";
            yield $this->env->getFilter('error')->getCallable()(_gettext("The selected user was not found in the privilege table."));
            yield "
  ";
        }
        // line 59
        yield "
  <form class=\"submenu-item\" name=\"usersForm\" id=\"addUsersForm\" action=\"";
        // line 60
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" method=\"post\">
    ";
        // line 61
        yield PhpMyAdmin\Url::getHiddenInputs(($context["params"] ?? null));
        yield "

    ";
        // line 63
        yield ($context["privileges_table"] ?? null);
        yield "
  </form>

  ";
        // line 66
        yield ($context["table_specific_rights"] ?? null);
        yield "

  ";
        // line 68
        if ((( !is_iterable(($context["database"] ?? null)) && (1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["database"] ?? null)), 0))) &&  !($context["is_wildcard"] ?? null))) {
            // line 69
            yield "    [
    ";
yield _gettext("Database");
            // line 71
            yield "    <a href=\"";
            yield ($context["database_url"] ?? null);
            yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(            // line 72
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "reload" => true], "&");
            // line 74
            yield "\">
      ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "html", null, true);
            yield ":
      ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_url_title"] ?? null), "html", null, true);
            yield "
    </a>
    ]
    ";
            // line 79
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["table"] ?? null)), 0))) {
                // line 80
                yield "      [
      ";
yield _gettext("Table");
                // line 82
                yield "      <a href=\"";
                yield ($context["table_url"] ?? null);
                yield PhpMyAdmin\Url::getCommon(["db" => Twig\Extension\CoreExtension::replace(                // line 83
($context["database"] ?? null), ["\\_" => "_", "\\%" => "%"]), "table" =>                 // line 84
($context["table"] ?? null), "reload" => true], "&");
                // line 86
                yield "\">
        ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
                yield ":
        ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_url_title"] ?? null), "html", null, true);
                yield "
      </a>
      ]
    ";
            }
            // line 92
            yield "  ";
        }
        // line 93
        yield "
  ";
        // line 94
        yield ($context["change_password"] ?? null);
        yield "

  <form action=\"";
        // line 96
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges");
        yield "\" id=\"copyUserForm\" method=\"post\" class=\"copyUserForm submenu-item\" autocomplete=\"off\">
    ";
        // line 97
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
    <input type=\"hidden\" name=\"old_username\" value=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"old_hostname\" value=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 100
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["user_group"] ?? null))) {
            // line 101
            yield "      <input type=\"hidden\" name=\"old_usergroup\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["user_group"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 103
        yield "
    <fieldset class=\"pma-fieldset\" id=\"fieldset_change_copy_user\">
      <legend data-submenu-label=\"";
yield _gettext("Login Information");
        // line 105
        yield "\">
        ";
yield _gettext("Change login information / Copy user account");
        // line 107
        yield "      </legend>

      ";
        // line 109
        yield ($context["change_login_info_fields"] ?? null);
        yield "

      <fieldset class=\"pma-fieldset\" id=\"fieldset_mode\">
        <legend>
          ";
yield _gettext("Create a new user account with the same privileges and …");
        // line 114
        yield "        </legend>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_4\" value=\"4\" checked>
          <label class=\"form-check-label\" for=\"mode_4\">
            ";
yield _gettext("… keep the old one.");
        // line 120
        yield "          </label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_1\" value=\"1\">
          <label class=\"form-check-label\" for=\"mode_1\">
            ";
yield _gettext("… delete the old one from the user tables.");
        // line 127
        yield "          </label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_2\" value=\"2\">
          <label class=\"form-check-label\" for=\"mode_2\">
            ";
yield _gettext("… revoke all active privileges from the old one and delete it afterwards.");
        // line 134
        yield "          </label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_3\" value=\"3\">
          <label class=\"form-check-label\" for=\"mode_3\">
            ";
yield _gettext("… delete the old one from the user tables and reload the privileges afterwards.");
        // line 141
        yield "          </label>
        </div>
      </fieldset>
    </fieldset>

    <fieldset id=\"fieldset_change_copy_user_footer\" class=\"pma-fieldset tblFooters\">
      <input type=\"hidden\" name=\"change_copy\" value=\"1\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
        // line 148
        yield "\">
    </fieldset>
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
        return "server/privileges/user_properties.twig";
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
        return array (  344 => 148,  334 => 141,  325 => 134,  316 => 127,  307 => 120,  299 => 114,  291 => 109,  287 => 107,  283 => 105,  278 => 103,  272 => 101,  270 => 100,  266 => 99,  262 => 98,  258 => 97,  254 => 96,  249 => 94,  246 => 93,  243 => 92,  236 => 88,  232 => 87,  229 => 86,  227 => 84,  226 => 83,  223 => 82,  219 => 80,  217 => 79,  211 => 76,  207 => 75,  204 => 74,  202 => 72,  199 => 71,  195 => 69,  193 => 68,  188 => 66,  182 => 63,  177 => 61,  173 => 60,  170 => 59,  164 => 57,  162 => 56,  159 => 55,  153 => 53,  151 => 52,  147 => 50,  139 => 48,  136 => 47,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  118 => 40,  112 => 38,  104 => 33,  101 => 32,  99 => 30,  98 => 29,  97 => 28,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  74 => 19,  65 => 15,  62 => 14,  60 => 11,  59 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  47 => 5,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/user_properties.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\user_properties.twig");
    }
}
