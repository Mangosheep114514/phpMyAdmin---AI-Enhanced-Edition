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

/* preferences/header.twig */
class __TwigTemplate_1e68169807f64f281e4b516d693c049df11d04141d291392ebf92352497bd6ac extends Template
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
        yield "<div class=\"container-fluid\">
  <div class=\"row\">
    <ul id=\"user_prefs_tabs\" class=\"nav nav-pills m-2\">
      <li class=\"nav-item\">
        <a href=\"";
        // line 5
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/manage"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
yield _gettext("Manage your settings");
        // line 7
        yield "        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 11
        yield PhpMyAdmin\Url::getFromRoute("/preferences/two-factor");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/two-factor"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
yield _gettext("Two-factor authentication");
        // line 13
        yield "        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 17
        yield PhpMyAdmin\Url::getFromRoute("/preferences/features");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/features"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 18
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", _gettext("Features"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 23
        yield PhpMyAdmin\Url::getFromRoute("/preferences/sql");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/sql"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 24
        yield PhpMyAdmin\Html\Generator::getIcon("b_sql", _gettext("SQL queries"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 29
        yield PhpMyAdmin\Url::getFromRoute("/preferences/navigation");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/navigation"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 30
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", _gettext("Navigation panel"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 35
        yield PhpMyAdmin\Url::getFromRoute("/preferences/main-panel");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/main-panel"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 36
        yield PhpMyAdmin\Html\Generator::getIcon("b_props", _gettext("Main panel"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 41
        yield PhpMyAdmin\Url::getFromRoute("/preferences/export");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/export"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 42
        yield PhpMyAdmin\Html\Generator::getIcon("b_export", _gettext("Export"), false, false, "TabsMode");
        yield "
        </a>
      </li>

      <li class=\"nav-item\">
        <a href=\"";
        // line 47
        yield PhpMyAdmin\Url::getFromRoute("/preferences/import");
        yield "\" class=\"nav-link";
        yield (((0 === CoreExtension::compare(($context["route"] ?? null), "/preferences/import"))) ? (" active") : (""));
        yield " disableAjax\">
          ";
        // line 48
        yield PhpMyAdmin\Html\Generator::getIcon("b_import", _gettext("Import"), false, false, "TabsMode");
        yield "
        </a>
      </li>
    </ul>
  </div>

  ";
        // line 54
        if (($context["is_saved"] ?? null)) {
            // line 55
            yield "    ";
            yield $this->env->getFilter('raw_success')->getCallable()(_gettext("Configuration has been saved."));
            yield "
  ";
        }
        // line 57
        yield "
  ";
        // line 58
        if ( !($context["has_config_storage"] ?? null)) {
            // line 59
            yield "    ";
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 60
                yield "      ";
yield _gettext("Your preferences will be saved for current session only. Storing them permanently requires %sphpMyAdmin configuration storage%s.");
                // line 61
                yield "    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            yield $this->env->getFilter('notice')->getCallable()(Twig\Extension\CoreExtension::sprintf($___internal_parse_0_, (("<a href=\"" . PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("setup", "linked-tables")) . "\" target=\"_blank\" rel=\"noopener noreferrer\">"), "</a>"));
            // line 62
            yield "  ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "preferences/header.twig";
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
        return array (  180 => 62,  178 => 59,  174 => 61,  171 => 60,  168 => 59,  166 => 58,  163 => 57,  157 => 55,  155 => 54,  146 => 48,  140 => 47,  132 => 42,  126 => 41,  118 => 36,  112 => 35,  104 => 30,  98 => 29,  90 => 24,  84 => 23,  76 => 18,  70 => 17,  64 => 13,  57 => 11,  51 => 7,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "preferences/header.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\preferences\\header.twig");
    }
}
