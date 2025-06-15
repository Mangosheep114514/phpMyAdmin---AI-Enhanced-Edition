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

/* home/themes.twig */
class __TwigTemplate_dbdab7f540afd2d29dab3edb89a5a66d64416dc9ec497cf12785ec92290de381 extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/themes/set");
        yield "\" class=\"disableAjax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 5
            yield "      <div class=\"col\">
        <div class=\"card\">
          <img src=\"./themes/";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 7), "html", null, true);
            yield "/screen.png\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Screenshot of the %s theme."), CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 7)), "html", null, true);
            yield "\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield " <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, false, 9), "html", null, true);
            yield ")</small></h5>
          </div>
          <div class=\"card-footer\">
            <button type=\"submit\" class=\"btn btn-primary\" name=\"set_theme\" value=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">";
// l10n: Choose the theme button in the themes list modal
yield _gettext("Take it");
            yield "</button>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "  </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/themes.twig";
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
        return array (  85 => 17,  71 => 12,  63 => 9,  56 => 7,  52 => 5,  48 => 4,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/themes.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\home\\themes.twig");
    }
}
