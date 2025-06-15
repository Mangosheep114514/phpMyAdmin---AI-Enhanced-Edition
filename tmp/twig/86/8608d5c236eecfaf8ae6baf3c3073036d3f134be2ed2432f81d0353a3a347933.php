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

/* table/insert/actions_panel.twig */
class __TwigTemplate_2c19c03e576fb13bdb06bec807d6152ee2ca3c8fb16f707475668ffba549b7d2 extends Template
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
        // line 2
        yield "<div class=\"d-print-none mb-3\">
  <fieldset class=\"pma-fieldset\">
    <legend>";
yield _gettext("Data Generation Tools");
        // line 4
        yield "</legend>
    <button type=\"button\" class=\"btn btn-info\" id=\"aiDataBtn\">
      ";
        // line 6
        yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", "Generate AI test data", true);
        yield "
    </button>
  </fieldset>
</div>

<fieldset class=\"pma-fieldset\" id=\"actions_panel\">
  <table class=\"table table-borderless w-auto tdblock\">
    <tr>
      <td class=\"text-nowrap align-middle\">
        <select name=\"submit_type\" class=\"control_at_footer\">
          ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
            // line 17
            yield "            <option value=\"save\">";
yield _gettext("Save");
            yield "</option>
          ";
        }
        // line 19
        yield "          <option value=\"insert\">";
yield _gettext("Insert as new row");
        yield "</option>
          <option value=\"insertignore\">";
yield _gettext("Insert as new row and ignore errors");
        // line 20
        yield "</option>
          <option value=\"showinsert\">";
yield _gettext("Show insert query");
        // line 21
        yield "</option>
        </select>
      </td>
      <td class=\"align-middle\">
        <strong>";
yield _gettext("and then");
        // line 25
        yield "</strong>
      </td>
      <td class=\"text-nowrap align-middle\">
        <select name=\"after_insert\" class=\"control_at_footer\">
          <option value=\"back\"";
        // line 29
        yield (((0 === CoreExtension::compare(($context["after_insert"] ?? null), "back"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Go back to previous page");
        yield "</option>
          <option value=\"new_insert\"";
        // line 30
        yield (((0 === CoreExtension::compare(($context["after_insert"] ?? null), "new_insert"))) ? (" selected") : (""));
        yield ">";
yield _gettext("Insert another new row");
        yield "</option>
          ";
        // line 31
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["where_clause"] ?? null))) {
            // line 32
            yield "            <option value=\"same_insert\"";
            yield (((0 === CoreExtension::compare(($context["after_insert"] ?? null), "same_insert"))) ? (" selected") : (""));
            yield ">";
yield _gettext("Go back to this page");
            yield "</option>
            ";
            // line 33
            if ((($context["found_unique_key"] ?? null) && ($context["is_numeric"] ?? null))) {
                // line 34
                yield "              <option value=\"edit_next\"";
                yield (((0 === CoreExtension::compare(($context["after_insert"] ?? null), "edit_next"))) ? (" selected") : (""));
                yield ">";
yield _gettext("Edit next row");
                yield "</option>
            ";
            }
            // line 36
            yield "          ";
        }
        // line 37
        yield "        </select>
      </td>
    </tr>
    <tr>
      <td>
        ";
        // line 42
        yield PhpMyAdmin\Html\Generator::showHint(_gettext("Use TAB key to move from value to value, or CTRL+arrows to move anywhere."));
        yield "
      </td>
      <td colspan=\"3\" class=\"text-end align-middle\">
        <input type=\"button\" class=\"btn btn-secondary preview_sql control_at_footer\" value=\"";
yield _gettext("Preview SQL");
        // line 45
        yield "\">
        <input type=\"reset\" class=\"btn btn-secondary control_at_footer\" value=\"";
yield _gettext("Reset");
        // line 46
        yield "\">
        <input type=\"submit\" class=\"btn btn-primary control_at_footer\" value=\"";
yield _gettext("Go");
        // line 47
        yield "\" id=\"buttonYes\">
      </td>
    </tr>
  </table>
</fieldset>
<div class=\"modal fade\" id=\"previewSqlModal\" tabindex=\"-1\" aria-labelledby=\"previewSqlModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"previewSqlModalLabel\">";
yield _gettext("Loading");
        // line 56
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
        // line 57
        yield "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"previewSQLCloseButton\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
        // line 62
        yield "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "ai_i18n_modal.twig");
        yield "

<script>
\$(document).ready(function() {
    console.log('AI Data Script loaded');
    
    // 使用jQuery的modal方法，兼容phpMyAdmin的bootstrap版本
    \$('#aiDataBtn').on('click', function() {
        console.log('AI Data button clicked');
        \$('#aiTestDataModal').modal('show');
    });
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/insert/actions_panel.twig";
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
        return array (  179 => 69,  171 => 62,  163 => 57,  159 => 56,  147 => 47,  143 => 46,  139 => 45,  132 => 42,  125 => 37,  122 => 36,  114 => 34,  112 => 33,  105 => 32,  103 => 31,  97 => 30,  91 => 29,  85 => 25,  78 => 21,  74 => 20,  68 => 19,  62 => 17,  60 => 16,  47 => 6,  43 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/insert/actions_panel.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\insert\\actions_panel.twig");
    }
}
