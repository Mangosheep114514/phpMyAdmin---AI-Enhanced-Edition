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

/* server/privileges/login_information_fields.twig */
class __TwigTemplate_f143ae42f87f5fac9b0a7c358ddc134573763c49b13b63a2c59027eb293a5a6c extends Template
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
        yield "<fieldset class=\"pma-fieldset\" id=\"fieldset_add_user_login\">
  <legend>";
yield _gettext("Login Information");
        // line 2
        yield "</legend>
  <div class=\"item\">
    <label for=\"select_pred_username\">";
yield _gettext("User name:");
        // line 4
        yield "</label>
    <span class=\"options\">
      <select name=\"pred_username\" id=\"select_pred_username\" title=\"";
yield _gettext("User name");
        // line 6
        yield "\">
        <option value=\"any\"";
        // line 7
        yield (((0 === CoreExtension::compare(($context["pred_username"] ?? null), "any"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Any user");
        yield "</option>
        <option value=\"userdefined\"";
        // line 8
        yield ((((null === ($context["pred_username"] ?? null)) || (0 === CoreExtension::compare(($context["pred_username"] ?? null), "userdefined")))) ? (" selected") : (""));
        yield ">";
yield _gettext("Use text field");
        yield "</option>
      </select>
    </span>
    <input type=\"text\" name=\"username\" id=\"pma_username\" class=\"autofocus\" spellcheck=\"false\" maxlength=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username_length"] ?? null), "html", null, true);
        yield "\" title=\"";
yield _gettext("User name");
        yield "\"";
        // line 12
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["username"] ?? null))) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((( !(null === ($context["new_username"] ?? null))) ? (($context["new_username"] ?? null)) : (($context["username"] ?? null))), "html", null, true);
            yield "\"";
        }
        // line 13
        yield ((((null === ($context["pred_username"] ?? null)) || (0 === CoreExtension::compare(($context["pred_username"] ?? null), "userdefined")))) ? (" required") : (""));
        yield ">

    <div id=\"user_exists_warning\" class=\"hide\">
      ";
        // line 16
        yield $this->env->getFilter('notice')->getCallable()(_gettext("An account already exists with the same username but possibly a different hostname."));
        yield "
    </div>
  </div>

  <div class=\"item\">
    <label for=\"select_pred_hostname\">
      ";
yield _gettext("Host name:");
        // line 23
        yield "    </label>
    <span class=\"options\">
      <select name=\"pred_hostname\" id=\"select_pred_hostname\" title=\"";
yield _gettext("Host name");
        // line 25
        yield "\"";
        // line 26
        (((( !(null === ($context["this_host"] ?? null)) && (0 !== CoreExtension::compare(($context["this_host"] ?? null), "localhost"))) && (0 !== CoreExtension::compare(($context["this_host"] ?? null), "127.0.0.1")))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-thishost=\"" . ($context["this_host"] ?? null)) . "\""), "html", null, true)) : (yield ""));
        yield ">
        <option value=\"any\"";
        // line 27
        yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "any"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Any host");
        yield "</option>
        <option value=\"localhost\"";
        // line 28
        yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "localhost"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Local");
        yield "</option>
        ";
        // line 29
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["this_host"] ?? null))) {
            // line 30
            yield "          <option value=\"thishost\"";
            yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "thishost"))) ? (" selected") : (""));
            yield ">";
yield _gettext("This host");
            yield "</option>
        ";
        }
        // line 32
        yield "        <option value=\"hosttable\"";
        yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "hosttable"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Use host table");
        yield "</option>
        <option value=\"userdefined\"";
        // line 33
        yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "userdefined"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Use text field");
        yield "</option>
      </select>
    </span>
    <input type=\"text\" name=\"hostname\" id=\"pma_hostname\" maxlength=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname_length"] ?? null), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["hostname"]) || array_key_exists("hostname", $context))) ? (Twig\Extension\CoreExtension::default(($context["hostname"] ?? null), "%")) : ("%")), "html", null, true);
        yield "\" title=\"";
yield _gettext("Host name");
        // line 37
        yield "\"";
        yield (((0 === CoreExtension::compare(($context["pred_hostname"] ?? null), "userdefined"))) ? (" required") : (""));
        yield ">

    ";
        // line 39
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("When Host table is used, this field is ignored and values stored in Host table are used instead."));
        yield "
  </div>

  <div class=\"item\">
    <label for=\"select_pred_password\">";
yield _gettext("Password:");
        // line 43
        yield "</label>
    <span class=\"options\">
      <select name=\"pred_password\" id=\"select_pred_password\" title=\"";
yield _gettext("Password");
        // line 45
        yield "\">
        ";
        // line 46
        if (($context["is_change"] ?? null)) {
            // line 47
            yield "          <option value=\"keep\" selected>";
yield _gettext("Do not change the password");
            yield "</option>
        ";
        }
        // line 49
        yield "        <option value=\"none\"";
        yield ((( !(null === ($context["username"] ?? null)) &&  !($context["is_change"] ?? null))) ? (" selected") : (""));
        yield ">";
yield _gettext("No password");
        yield "</option>
        <option value=\"userdefined\"";
        // line 50
        yield (((null === ($context["username"] ?? null))) ? (" selected") : (""));
        yield ">";
yield _gettext("Use text field");
        yield "</option>
      </select>
    </span>
    <input type=\"password\" spellcheck=\"false\" id=\"text_pma_pw\" name=\"pma_pw\" title=\"";
yield _gettext("Password");
        // line 53
        yield "\"";
        yield (((null === ($context["username"] ?? null))) ? (" required") : (""));
        yield ">
    <span>";
yield _pgettext("Password strength", "Strength:");
        // line 54
        yield "</span>
    <meter max=\"4\" id=\"password_strength_meter\" name=\"pw_meter\"></meter>
    <span id=\"password_strength\" name=\"pw_strength\"></span>
  </div>

  <div class=\"item\" id=\"div_element_before_generate_password\">
    <label for=\"text_pma_pw2\">";
yield _gettext("Re-type:");
        // line 60
        yield "</label>
    <span class=\"options\">&nbsp;</span>
    <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_pw2\" title=\"";
yield _gettext("Re-type");
        // line 62
        yield "\"";
        yield (((null === ($context["username"] ?? null))) ? (" required") : (""));
        yield ">
  </div>

  <div class=\"item\" id=\"authentication_plugin_div\">
    <label for=\"select_authentication_plugin\">
      ";
        // line 67
        if (($context["is_new"] ?? null)) {
            // line 68
            yield "        ";
yield _gettext("Authentication plugin");
            // line 69
            yield "      ";
        } else {
            // line 70
            yield "        ";
yield _gettext("Password hashing method");
            // line 71
            yield "      ";
        }
        // line 72
        yield "    </label>
    <span class=\"options\">&nbsp;</span>

    <select name=\"authentication_plugin\" id=\"select_authentication_plugin\">
      ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["active_auth_plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
            // line 77
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_name"], "html", null, true);
            yield "\"";
            yield (((0 === CoreExtension::compare($context["plugin_name"], ($context["auth_plugin"] ?? null)))) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_description"], "html", null, true);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "    </select>

    <div id=\"ssl_reqd_warning\"";
        // line 81
        yield (((0 !== CoreExtension::compare(($context["auth_plugin"] ?? null), "sha256_password"))) ? (" class=\"hide\"") : (""));
        yield ">
      ";
        // line 82
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 83
            yield "        ";
yield _gettext("This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.");
            // line 86
            yield "        ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("sha256-authentication-plugin");
            yield "
      ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 82
        yield $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
        // line 88
        yield "    </div>
  </div>
  ";
        // line 91
        yield "</fieldset>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/login_information_fields.twig";
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
        return array (  288 => 91,  284 => 88,  282 => 82,  275 => 86,  272 => 83,  270 => 82,  266 => 81,  262 => 79,  249 => 77,  245 => 76,  239 => 72,  236 => 71,  233 => 70,  230 => 69,  227 => 68,  225 => 67,  216 => 62,  211 => 60,  202 => 54,  196 => 53,  187 => 50,  180 => 49,  174 => 47,  172 => 46,  169 => 45,  164 => 43,  156 => 39,  150 => 37,  144 => 36,  136 => 33,  129 => 32,  121 => 30,  119 => 29,  113 => 28,  107 => 27,  103 => 26,  101 => 25,  96 => 23,  86 => 16,  80 => 13,  74 => 12,  69 => 11,  61 => 8,  55 => 7,  52 => 6,  47 => 4,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/login_information_fields.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\login_information_fields.twig");
    }
}
