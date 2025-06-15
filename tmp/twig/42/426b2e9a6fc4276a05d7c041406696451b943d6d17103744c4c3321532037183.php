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

/* server/privileges/change_password.twig */
class __TwigTemplate_50f08d244d8b4a37724df83739e1df78f8465541679a655faee40e513a40b88a extends Template
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
        yield "<form method=\"post\" id=\"change_password_form\" action=\"";
        // line 2
        yield ((($context["is_privileges"] ?? null)) ? (PhpMyAdmin\Url::getFromRoute("/server/privileges")) : (PhpMyAdmin\Url::getFromRoute("/user-password")));
        yield "\" name=\"chgPassword\" class=\"";
        yield ((($context["is_privileges"] ?? null)) ? ("submenu-item") : (""));
        yield "\" autocomplete=\"off\">
  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  ";
        // line 4
        if (($context["is_privileges"] ?? null)) {
            // line 5
            yield "    <input type=\"hidden\" name=\"username\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["username"] ?? null), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
            yield "\">
  ";
        }
        // line 8
        yield "
  <fieldset class=\"pma-fieldset\" id=\"fieldset_change_password\">
    <legend";
        // line 10
        yield ((($context["is_privileges"] ?? null)) ? (" data-submenu-label=\"Change password\"") : (""));
        yield ">";
yield _gettext("Change password");
        yield "</legend>
    <table class=\"table table-borderless w-auto\">
      <tr>
        <td colspan=\"2\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">";
yield _gettext("No Password");
        // line 15
        yield "</label>
        </td>
      </tr>
      <tr class=\"align-middle\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked=\"checked\">
          <label for=\"nopass_0\">";
yield _gettext("Password:");
        // line 21
        yield "&nbsp;</label>
        </td>
        <td>
          ";
yield _gettext("Enter:");
        // line 24
        yield "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type=\"password\" spellcheck=\"false\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield\"
                 onkeyup=\"Functions.checkPasswordStrength(\$(this).val(), \$('#change_password_strength_meter'), meter_obj_label = \$('#change_password_strength'), CommonParams.get('user'));\"
                 onchange=\"nopass[1].checked = true\" autocomplete=\"new-password\">
          <span>";
yield _pgettext("Password strength", "Strength:");
        // line 28
        yield "</span>
          <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
          <br>
          ";
yield _gettext("Re-type:");
        // line 32
        yield "&nbsp;
          <input type=\"password\" spellcheck=\"false\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield\" onchange=\"nopass[1].checked = true\" autocomplete=\"new-password\">
        </td>
      </tr>

      ";
        // line 37
        if (( !($context["is_new"] ?? null) || (($context["is_new"] ?? null) && ($context["has_more_auth_plugins"] ?? null)))) {
            // line 38
            yield "        <tr class=\"align-middle\">
          <td>
            <label for=\"select_authentication_plugin_cp\">";
yield _gettext("Password Hashing:");
            // line 40
            yield "</label>
          </td>
          <td>
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\">
              ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["active_auth_plugins"] ?? null));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
                // line 45
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_name"], "html", null, true);
                yield "\"";
                yield (((0 === CoreExtension::compare($context["plugin_name"], ($context["orig_auth_plugin"] ?? null)))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_description"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "            </select>
          </td>
        </tr>
      ";
        }
        // line 51
        yield "
      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    ";
        // line 55
        if ((($context["is_new"] ?? null) && ($context["has_more_auth_plugins"] ?? null))) {
            // line 56
            yield "      <div";
            yield (((0 !== CoreExtension::compare(($context["orig_auth_plugin"] ?? null), "sha256_password"))) ? (" class=\"hide\"") : (""));
            yield " id=\"ssl_reqd_warning_cp\">
        ";
            // line 57
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 58
                yield "          ";
yield _gettext("This method requires using an '<i>SSL connection</i>' or an '<i>unencrypted connection that encrypts the password using RSA</i>'; while connecting to the server.");
                // line 61
                yield "          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::show("sha256-authentication-plugin");
                yield "
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield $this->env->getFilter('notice')->getCallable()($___internal_parse_0_);
            // line 63
            yield "      </div>
    ";
        }
        // line 65
        yield "
  </fieldset>

  <fieldset id=\"fieldset_change_password_footer\" class=\"pma-fieldset tblFooters\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
        // line 70
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
        return "server/privileges/change_password.twig";
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
        return array (  188 => 70,  180 => 65,  176 => 63,  174 => 57,  167 => 61,  164 => 58,  162 => 57,  157 => 56,  155 => 55,  149 => 51,  143 => 47,  130 => 45,  126 => 44,  120 => 40,  115 => 38,  113 => 37,  106 => 32,  99 => 28,  92 => 24,  86 => 21,  77 => 15,  66 => 10,  62 => 8,  57 => 6,  52 => 5,  50 => 4,  46 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/change_password.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\change_password.twig");
    }
}
