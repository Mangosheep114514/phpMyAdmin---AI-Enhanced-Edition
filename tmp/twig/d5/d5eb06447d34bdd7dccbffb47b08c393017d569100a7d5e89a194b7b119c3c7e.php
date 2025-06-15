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

/* server/databases/index.twig */
class __TwigTemplate_3fa3bbf480337b07686ce693c7b3afd9c9a7c5f6984e42bc1117cc32a5647685 extends Template
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
        yield PhpMyAdmin\Html\Generator::getIcon("s_db", ((($context["has_statistics"] ?? null)) ? (_gettext("Databases statistics")) : (_gettext("Databases"))));
        yield "
  </h2>

  ";
        // line 6
        if (($context["is_create_database_shown"] ?? null)) {
            // line 7
            yield "    <div class=\"card\">
      <div class=\"card-header\">
        ";
            // line 9
            yield PhpMyAdmin\Html\Generator::getIcon("b_newdb", _gettext("Create database"));
            yield "
        ";
            // line 10
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CREATE_DATABASE");
            yield "
      </div>
      <div class=\"card-body\">
        ";
            // line 13
            if (($context["has_create_database_privileges"] ?? null)) {
                // line 14
                yield "          <form method=\"post\" action=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/databases/create");
                yield "\" id=\"create_database_form\" class=\"ajax row row-cols-md-auto g-3 align-items-center\">
            ";
                // line 15
                yield PhpMyAdmin\Url::getHiddenInputs("", "");
                yield "
            <input type=\"hidden\" name=\"reload\" value=\"1\">
            ";
                // line 17
                if (($context["has_statistics"] ?? null)) {
                    // line 18
                    yield "              <input type=\"hidden\" name=\"statistics\" value=\"1\">
            ";
                }
                // line 20
                yield "
            <div class=\"col-12\">
              <input autocomplete=\"off\" type=\"text\" name=\"new_db\" maxlength=\"64\" class=\"form-control\" value=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_to_create"] ?? null), "html", null, true);
                yield "\" id=\"text_create_db\" placeholder=\"";
yield _gettext("Database name");
                // line 24
                yield "\" aria-label=\"";
yield _gettext("Database name");
                yield "\" required>
            </div>

            ";
                // line 27
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) {
                    // line 28
                    yield "              <div class=\"col-12\">
                <select lang=\"en\" dir=\"ltr\" name=\"db_collation\" class=\"form-select\" aria-label=\"";
yield _gettext("Collation");
                    // line 29
                    yield "\">
                  <option value=\"\">";
yield _gettext("Collation");
                    // line 30
                    yield "</option>
                  <option value=\"\"></option>
                  ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 33
                        yield "                    <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 33), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 33), "html", null, true);
                        yield "\">
                      ";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 34));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 35
                            yield "                        <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 35), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 35), "html", null, true);
                            yield "\"";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 35)) ? (" selected") : (""));
                            yield ">";
                            // line 36
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 36), "html", null, true);
                            // line 37
                            yield "</option>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        yield "                    </optgroup>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    yield "                </select>
              </div>
            ";
                }
                // line 44
                yield "
            <div class=\"col-12\">
              <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Create");
                // line 46
                yield "\">
            </div>
          </form>
        ";
            } else {
                // line 50
                yield "          <span class=\"text-danger\">";
                yield PhpMyAdmin\Html\Generator::getIcon("s_error", _gettext("No privileges to create databases"));
                yield "</span>
        ";
            }
            // line 52
            yield "      </div>
    </div>
  ";
        }
        // line 55
        yield "
  ";
        // line 56
        if ((1 === CoreExtension::compare(($context["database_count"] ?? null), 0))) {
            // line 57
            yield "    <div class=\"d-flex flex-wrap my-3\">
      ";
            // line 58
            if (($context["is_drop_allowed"] ?? null)) {
                // line 59
                yield "        <div>
          <div class=\"input-group\">
            <div class=\"input-group-text\">
              <div class=\"form-check mb-0\">
                <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"dbStatsForm\">
                <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
yield _gettext("Check all");
                // line 64
                yield "</label>
              </div>
            </div>
            <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"Drop\" form=\"dbStatsForm\" title=\"";
yield _gettext("Drop");
                // line 67
                yield "\">
              ";
                // line 68
                yield PhpMyAdmin\Html\Generator::getIcon("db_drop", _gettext("Drop"));
                yield "
            </button>
          </div>
        </div>
      ";
            }
            // line 73
            yield "
      <div class=\"ms-auto\">
        <div class=\"input-group\">
          <span class=\"input-group-text\">";
            // line 76
            yield PhpMyAdmin\Html\Generator::getImage("b_search", _gettext("Search"));
            yield "</span>
          <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
yield _gettext("Search");
            // line 77
            yield "\" aria-label=\"";
yield _gettext("Search");
            yield "\">
        </div>
      </div>
    </div>

    ";
            // line 82
            yield PhpMyAdmin\Html\Generator::getListNavigator(            // line 83
($context["database_count"] ?? null),             // line 84
($context["pos"] ?? null),             // line 85
($context["url_params"] ?? null), PhpMyAdmin\Url::getFromRoute("/server/databases"), "frame_content",             // line 88
($context["max_db_list"] ?? null));
            // line 89
            yield "

    <form class=\"ajax\" action=\"";
            // line 91
            yield PhpMyAdmin\Url::getFromRoute("/server/databases");
            yield "\" method=\"post\" name=\"dbStatsForm\" id=\"dbStatsForm\">
      ";
            // line 92
            yield PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
            yield "
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover w-auto\">
          <thead>
            <tr>
              ";
            // line 97
            if (($context["is_drop_allowed"] ?? null)) {
                // line 98
                yield "                <th></th>
              ";
            }
            // line 100
            yield "              <th>
                <a href=\"";
            // line 101
            yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" => "SCHEMA_NAME", "sort_order" => ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 103
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 103), "SCHEMA_NAME")) && (0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 104), "asc")))) ? ("desc") : ("asc"))]));
            // line 105
            yield "\">
                  ";
yield _gettext("Database");
            // line 107
            yield "                  ";
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 107), "SCHEMA_NAME"))) {
                // line 108
                yield "                    ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 108), "asc"))) {
                    // line 109
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_asc", _gettext("Ascending"));
                    yield "
                    ";
                } else {
                    // line 111
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_desc", _gettext("Descending"));
                    yield "
                    ";
                }
                // line 113
                yield "                  ";
            }
            // line 114
            yield "                </a>
              </th>

              <th>
                <a href=\"";
            // line 118
            yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" => "DEFAULT_COLLATION_NAME", "sort_order" => ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 120
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 120), "DEFAULT_COLLATION_NAME")) && (0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 121
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 121), "asc")))) ? ("desc") : ("asc"))]));
            // line 122
            yield "\">
                  ";
yield _gettext("Collation");
            // line 124
            yield "                  ";
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 124), "DEFAULT_COLLATION_NAME"))) {
                // line 125
                yield "                    ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 125), "asc"))) {
                    // line 126
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_asc", _gettext("Ascending"));
                    yield "
                    ";
                } else {
                    // line 128
                    yield "                      ";
                    yield PhpMyAdmin\Html\Generator::getImage("s_desc", _gettext("Descending"));
                    yield "
                    ";
                }
                // line 130
                yield "                  ";
            }
            // line 131
            yield "                </a>
              </th>

              ";
            // line 134
            if (($context["has_statistics"] ?? null)) {
                // line 135
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["header_statistics"] ?? null));
                foreach ($context['_seq'] as $context["name"] => $context["statistic"]) {
                    // line 136
                    yield "                  <th";
                    yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 136), "byte"))) ? (" colspan=\"2\"") : (""));
                    yield ">
                    <a href=\"";
                    // line 137
                    yield PhpMyAdmin\Url::getFromRoute("/server/databases", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sort_by" =>                     // line 138
$context["name"], "sort_order" => ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                     // line 139
($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 139), $context["name"])) && (0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                     // line 140
($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 140), "asc")))) ? ("desc") : ("asc"))]));
                    // line 141
                    yield "\">
                      ";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "title", [], "any", false, false, false, 142), "html", null, true);
                    yield "
                      ";
                    // line 143
                    if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_by", [], "any", false, false, false, 143), $context["name"]))) {
                        // line 144
                        yield "                        ";
                        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["url_params"] ?? null), "sort_order", [], "any", false, false, false, 144), "asc"))) {
                            // line 145
                            yield "                          ";
                            yield PhpMyAdmin\Html\Generator::getImage("s_asc", _gettext("Ascending"));
                            yield "
                        ";
                        } else {
                            // line 147
                            yield "                          ";
                            yield PhpMyAdmin\Html\Generator::getImage("s_desc", _gettext("Descending"));
                            yield "
                        ";
                        }
                        // line 149
                        yield "                      ";
                    }
                    // line 150
                    yield "                    </a>
                  </th>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['statistic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "              ";
            }
            // line 154
            yield "
              ";
            // line 155
            if (($context["has_primary_replication"] ?? null)) {
                // line 156
                yield "                <th>";
yield _gettext("Primary replication");
                yield "</th>
              ";
            }
            // line 158
            yield "
              ";
            // line 159
            if (($context["has_replica_replication"] ?? null)) {
                // line 160
                yield "                <th>";
yield _gettext("Replica replication");
                yield "</th>
              ";
            }
            // line 162
            yield "
              <th>";
yield _gettext("Action");
            // line 163
            yield "</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["databases"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["database"]) {
                // line 169
                yield "              <tr class=\"db-row";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 169) || CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 169))) ? (" noclick") : (""));
                yield "\" data-filter-row=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 169)), "html", null, true);
                yield "\">
                ";
                // line 170
                if (($context["is_drop_allowed"] ?? null)) {
                    // line 171
                    yield "                  <td class=\"tool\">
                    <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 173), "html", null, true);
                    yield "\" value=\"";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 174), "html", null, true);
                    yield "\"";
                    // line 175
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_system_schema", [], "any", false, false, false, 175) || CoreExtension::getAttribute($this->env, $this->source, $context["database"], "is_pmadb", [], "any", false, false, false, 175))) ? (" disabled") : (""));
                    yield ">
                  </td>
                ";
                }
                // line 178
                yield "
                <td class=\"name\">
                  <a href=\"";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "url", [], "any", false, false, false, 180), "html", null, true);
                yield "\" title=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Jump to database '%s'"), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 181)), "html", null, true);
                yield "\">
                    ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 182), "html", null, true);
                yield "
                  </a>
                </td>

                <td class=\"value\">
                  <dfn title=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 187), "description", [], "any", false, false, false, 187), "html", null, true);
                yield "\">
                    ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "collation", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188), "html", null, true);
                yield "
                  </dfn>
                </td>

                ";
                // line 192
                if (($context["has_statistics"] ?? null)) {
                    // line 193
                    yield "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "statistics", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                        // line 194
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 194) === "byte")) {
                            // line 195
                            yield "                      ";
                            $context["value"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 195), 3, 1);
                            // line 196
                            yield "                      <td class=\"value\">
                        <data value=\"";
                            // line 197
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 197), "html", null, true);
                            yield "\">
                          ";
                            // line 198
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["value"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
                            yield "
                        </data>
                      </td>
                      <td class=\"unit\">";
                            // line 201
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["value"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
                            yield "</td>
                    ";
                        } else {
                            // line 203
                            yield "                      <td class=\"value\">
                        <data value=\"";
                            // line 204
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 204), "html", null, true);
                            yield "\">
                          ";
                            // line 205
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 205), 0), "html", null, true);
                            yield "
                        </data>
                      </td>
                    ";
                        }
                        // line 209
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    yield "                ";
                }
                // line 211
                yield "
                ";
                // line 212
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 212), "primary", [], "any", false, false, false, 212), "status", [], "any", false, false, false, 212)) {
                    // line 213
                    yield "                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 213), "primary", [], "any", false, false, false, 213), "is_replicated", [], "any", false, false, false, 213)) {
                        // line 214
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 215
                        yield PhpMyAdmin\Html\Generator::getIcon("s_success", _gettext("Replicated"));
                        yield "
                    </td>
                  ";
                    } else {
                        // line 218
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 219
                        yield PhpMyAdmin\Html\Generator::getIcon("s_cancel", _gettext("Not replicated"));
                        yield "
                    </td>
                  ";
                    }
                    // line 222
                    yield "                ";
                }
                // line 223
                yield "
                ";
                // line 224
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 224), "replica", [], "any", false, false, false, 224), "status", [], "any", false, false, false, 224)) {
                    // line 225
                    yield "                  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["database"], "replication", [], "any", false, false, false, 225), "replica", [], "any", false, false, false, 225), "is_replicated", [], "any", false, false, false, 225)) {
                        // line 226
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 227
                        yield PhpMyAdmin\Html\Generator::getIcon("s_success", _gettext("Replicated"));
                        yield "
                    </td>
                  ";
                    } else {
                        // line 230
                        yield "                    <td class=\"tool text-center\">
                      ";
                        // line 231
                        yield PhpMyAdmin\Html\Generator::getIcon("s_cancel", _gettext("Not replicated"));
                        yield "
                    </td>
                  ";
                    }
                    // line 234
                    yield "                ";
                }
                // line 235
                yield "
                <td class=\"tool\">
                  <a class=\"server_databases\" data=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 238), "html", null, true);
                yield "\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["db" => CoreExtension::getAttribute($this->env, $this->source,                 // line 239
$context["database"], "name", [], "any", false, false, false, 239), "checkprivsdb" => CoreExtension::getAttribute($this->env, $this->source,                 // line 240
$context["database"], "name", [], "any", false, false, false, 240)]);
                // line 241
                yield "\" title=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Check privileges for database \"%s\"."), CoreExtension::getAttribute($this->env, $this->source, $context["database"], "name", [], "any", false, false, false, 242)), "html", null, true);
                yield "\">
                    ";
                // line 243
                yield PhpMyAdmin\Html\Generator::getIcon("s_rights", _gettext("Check privileges"));
                yield "
                  </a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['database'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            yield "          </tbody>

          <tfoot>
            <tr>
              <th colspan=\"";
            // line 252
            yield ((($context["is_drop_allowed"] ?? null)) ? ("3") : ("2"));
            yield "\">
                ";
yield _gettext("Total:");
            // line 254
            yield "                <span id=\"filter-rows-count\">";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["database_count"] ?? null), "html", null, true);
            // line 256
            yield "</span>
              </th>

              ";
            // line 259
            if (($context["has_statistics"] ?? null)) {
                // line 260
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["total_statistics"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                    // line 261
                    yield "                  ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "format", [], "any", false, false, false, 261) === "byte")) {
                        // line 262
                        yield "                    ";
                        $context["value"] = PhpMyAdmin\Util::formatByteDown(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 262), 3, 1);
                        // line 263
                        yield "                    <th class=\"value\">
                      <data value=\"";
                        // line 264
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 264), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 264), "html", null, true);
                        yield "\">
                        ";
                        // line 265
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["value"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "html", null, true);
                        yield "
                      </data>
                    </th>
                    <th class=\"unit\">";
                        // line 268
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["value"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "html", null, true);
                        yield "</th>
                  ";
                    } else {
                        // line 270
                        yield "                    <th class=\"value\">
                      <data value=\"";
                        // line 271
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 271), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 271), "html", null, true);
                        yield "\">
                        ";
                        // line 272
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "raw", [], "any", false, false, false, 272), 0), "html", null, true);
                        yield "
                      </data>
                    </th>
                  ";
                    }
                    // line 276
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                yield "              ";
            }
            // line 278
            yield "
              ";
            // line 279
            if (($context["has_primary_replication"] ?? null)) {
                // line 280
                yield "                <th></th>
              ";
            }
            // line 282
            yield "
              ";
            // line 283
            if (($context["has_replica_replication"] ?? null)) {
                // line 284
                yield "                <th></th>
              ";
            }
            // line 286
            yield "
              <th></th>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>

    ";
            // line 294
            if ( !($context["has_statistics"] ?? null)) {
                // line 295
                yield "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"alert alert-info\" role=\"alert\">
            ";
                // line 298
                yield PhpMyAdmin\Html\Generator::getIcon("s_notice", _gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server."));
                yield "
          </div>
          <a class=\"card-link\" href=\"";
                // line 300
                yield PhpMyAdmin\Url::getFromRoute("/server/databases");
                yield "\" data-post=\"";
                yield PhpMyAdmin\Url::getCommon(["statistics" => "1"], "", false);
                yield "\" title=\"";
yield _gettext("Enable statistics");
                yield "\">
            ";
yield _gettext("Enable statistics");
                // line 302
                yield "          </a>
        </div>
      </div>
    ";
            }
            // line 306
            yield "  ";
        } else {
            // line 307
            yield "    <div class=\"alert alert-primary my-3\" role=\"alert\">
      ";
            // line 308
            yield PhpMyAdmin\Html\Generator::getIcon("s_notice", _gettext("No databases"));
            yield "
    </div>
  ";
        }
        // line 311
        yield "</div>

";
        // line 313
        if (($context["is_drop_allowed"] ?? null)) {
            // line 314
            yield "  <div class=\"modal fade\" id=\"dropDatabaseModal\" tabindex=\"-1\" aria-labelledby=\"dropDatabaseModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"dropDatabaseModalLabel\">";
yield _gettext("Confirm");
            // line 318
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Cancel");
            // line 319
            yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Cancel");
            // line 323
            yield "</button>
          <button type=\"button\" class=\"btn btn-danger\" id=\"dropDatabaseModalDropButton\">";
yield _gettext("Drop");
            // line 324
            yield "</button>
        </div>
      </div>
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
        return "server/databases/index.twig";
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
        return array (  793 => 324,  789 => 323,  782 => 319,  778 => 318,  771 => 314,  769 => 313,  765 => 311,  759 => 308,  756 => 307,  753 => 306,  747 => 302,  738 => 300,  733 => 298,  728 => 295,  726 => 294,  716 => 286,  712 => 284,  710 => 283,  707 => 282,  703 => 280,  701 => 279,  698 => 278,  695 => 277,  689 => 276,  682 => 272,  676 => 271,  673 => 270,  668 => 268,  662 => 265,  656 => 264,  653 => 263,  650 => 262,  647 => 261,  642 => 260,  640 => 259,  635 => 256,  633 => 255,  631 => 254,  626 => 252,  620 => 248,  609 => 243,  605 => 242,  603 => 241,  601 => 240,  600 => 239,  597 => 238,  593 => 235,  590 => 234,  584 => 231,  581 => 230,  575 => 227,  572 => 226,  569 => 225,  567 => 224,  564 => 223,  561 => 222,  555 => 219,  552 => 218,  546 => 215,  543 => 214,  540 => 213,  538 => 212,  535 => 211,  532 => 210,  526 => 209,  519 => 205,  513 => 204,  510 => 203,  505 => 201,  499 => 198,  493 => 197,  490 => 196,  487 => 195,  484 => 194,  479 => 193,  477 => 192,  470 => 188,  466 => 187,  458 => 182,  454 => 181,  451 => 180,  447 => 178,  441 => 175,  438 => 174,  435 => 173,  432 => 171,  430 => 170,  423 => 169,  419 => 168,  412 => 163,  408 => 162,  402 => 160,  400 => 159,  397 => 158,  391 => 156,  389 => 155,  386 => 154,  383 => 153,  375 => 150,  372 => 149,  366 => 147,  360 => 145,  357 => 144,  355 => 143,  351 => 142,  348 => 141,  346 => 140,  345 => 139,  344 => 138,  343 => 137,  338 => 136,  333 => 135,  331 => 134,  326 => 131,  323 => 130,  317 => 128,  311 => 126,  308 => 125,  305 => 124,  301 => 122,  299 => 121,  298 => 120,  297 => 118,  291 => 114,  288 => 113,  282 => 111,  276 => 109,  273 => 108,  270 => 107,  266 => 105,  264 => 104,  263 => 103,  262 => 101,  259 => 100,  255 => 98,  253 => 97,  245 => 92,  241 => 91,  237 => 89,  235 => 88,  234 => 85,  233 => 84,  232 => 83,  231 => 82,  222 => 77,  217 => 76,  212 => 73,  204 => 68,  201 => 67,  195 => 64,  187 => 59,  185 => 58,  182 => 57,  180 => 56,  177 => 55,  172 => 52,  166 => 50,  160 => 46,  155 => 44,  150 => 41,  143 => 39,  136 => 37,  134 => 36,  126 => 35,  122 => 34,  115 => 33,  111 => 32,  107 => 30,  103 => 29,  99 => 28,  97 => 27,  90 => 24,  86 => 23,  82 => 20,  78 => 18,  76 => 17,  71 => 15,  66 => 14,  64 => 13,  58 => 10,  54 => 9,  50 => 7,  48 => 6,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/databases/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\databases\\index.twig");
    }
}
