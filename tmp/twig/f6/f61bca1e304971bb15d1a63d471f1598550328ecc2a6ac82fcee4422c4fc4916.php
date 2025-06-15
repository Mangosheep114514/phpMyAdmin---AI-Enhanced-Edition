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

/* database/triggers/list.twig */
class __TwigTemplate_187bf00bce4b2bf8d2b8126891edc808aa932a7cad30bce7340c5f9e35cc4896 extends Template
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
        yield "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_triggers", _gettext("Triggers"));
        yield "
    ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("TRIGGERS");
        yield "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) {
            // line 9
            yield "    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
yield _gettext("Check all");
            // line 14
            yield "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
yield _gettext("Export");
            // line 17
            yield "\">
          ";
            // line 18
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", _gettext("Export"));
            yield "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
yield _gettext("Drop");
            // line 20
            yield "\">
          ";
            // line 21
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
            yield "
        </button>
      </div>
    </div>";
        }
        // line 26
        yield "
    <div";
        // line 27
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) ? (" class=\"ms-auto\"") : (""));
        yield ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        yield (( !($context["has_privilege"] ?? null)) ? (" disabled") : (""));
        yield "\" href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/triggers", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "add_item" => true]);
        yield "\" role=\"button\"";
        yield (( !($context["has_privilege"] ?? null)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        yield ">
        ";
        // line 29
        yield PhpMyAdmin\Html\Generator::getIcon("b_trigger_add", _gettext("Create new trigger"));
        yield "
      </a>
    </div>
  </div>

  <form id=\"rteListForm\" class=\"ajax\" action=\"";
        // line 34
        yield PhpMyAdmin\Url::getFromRoute((( !Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) ? ("/table/triggers") : ("/database/triggers")));
        yield "\">
    ";
        // line 35
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "

    <div id=\"nothing2display\"";
        // line 37
        yield (( !Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) ? (" class=\"hide\"") : (""));
        yield ">
      ";
        // line 38
        yield $this->env->getFilter('notice')->getCallable()(_gettext("There are no triggers to display."));
        yield "
    </div>

    <table id=\"triggersTable\" class=\"table table-striped table-hover";
        // line 41
        yield ((Twig\Extension\CoreExtension::testEmpty(($context["items"] ?? null))) ? (" hide") : (""));
        yield " w-auto data\">
      <thead>
        <tr>
          <th></th>
          <th>";
yield _gettext("Name");
        // line 45
        yield "</th>
          ";
        // line 46
        if (Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) {
            // line 47
            yield "            <th>";
yield _gettext("Table");
            yield "</th>
          ";
        }
        // line 49
        yield "          <th>";
yield _gettext("Time");
        yield "</th>
          <th>";
yield _gettext("Event");
        // line 50
        yield "</th>
          <th colspan=\"3\"></th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"hide\">";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((Twig\Extension\CoreExtension::testEmpty(($context["table"] ?? null))) ? (7) : (6))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            yield "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</tr>";
        // line 57
        yield ($context["rows"] ?? null);
        yield "
      </tbody>
    </table>
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
        return "database/triggers/list.twig";
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
        return array (  171 => 57,  161 => 55,  154 => 50,  148 => 49,  142 => 47,  140 => 46,  137 => 45,  129 => 41,  123 => 38,  119 => 37,  114 => 35,  110 => 34,  102 => 29,  94 => 28,  90 => 27,  87 => 26,  80 => 21,  77 => 20,  71 => 18,  68 => 17,  62 => 14,  54 => 9,  52 => 8,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/triggers/list.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\triggers\\list.twig");
    }
}
