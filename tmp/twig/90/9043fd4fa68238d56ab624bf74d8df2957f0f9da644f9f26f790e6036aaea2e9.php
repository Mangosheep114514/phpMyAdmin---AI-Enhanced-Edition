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

/* home/index.twig */
class __TwigTemplate_4a3d53d3faabfaaed1621af10ade45256314fddc3c2b09f80af24f6cbbef91a0 extends Template
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
        if (($context["is_git_revision"] ?? null)) {
            // line 2
            yield "  <div id=\"is_git_revision\"></div>
";
        }
        // line 4
        yield "
";
        // line 5
        yield ($context["message"] ?? null);
        yield "

";
        // line 7
        yield ($context["partial_logout"] ?? null);
        yield "

<div id=\"maincontainer\">
  ";
        // line 10
        yield ($context["sync_favorite_tables"] ?? null);
        yield "
  <div class=\"container-fluid\">
    <div class=\"row mb-3\">
      <div class=\"col-lg-7 col-12\">
        ";
        // line 14
        if (($context["has_server"] ?? null)) {
            // line 15
            yield "          ";
            if (($context["is_demo"] ?? null)) {
                // line 16
                yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("phpMyAdmin Demo Server");
                // line 19
                yield "              </div>
              <div class=\"card-body\">
                ";
                // line 21
                $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 22
                    yield "                  ";
yield _gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.");
                    // line 25
                    yield "                ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 21
                yield Twig\Extension\CoreExtension::sprintf($___internal_parse_0_, "<a href=\"url.php?url=https://demo.phpmyadmin.net/\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>");
                // line 26
                yield "              </div>
            </div>
          ";
            }
            // line 29
            yield "
            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("General settings");
            // line 33
            yield "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 35
            if (($context["has_server_selection"] ?? null)) {
                // line 36
                yield "                  <li id=\"li_select_server\" class=\"list-group-item\">
                    ";
                // line 37
                yield PhpMyAdmin\Html\Generator::getImage("s_host");
                yield "
                    ";
                // line 38
                yield ($context["server_selection"] ?? null);
                yield "
                  </li>
                ";
            }
            // line 41
            yield "
                ";
            // line 42
            if ((1 === CoreExtension::compare(($context["server"] ?? null), 0))) {
                // line 43
                yield "                  ";
                if (($context["has_change_password_link"] ?? null)) {
                    // line 44
                    yield "                    <li id=\"li_change_password\" class=\"list-group-item\">
                      <a href=\"";
                    // line 45
                    yield PhpMyAdmin\Url::getFromRoute("/user-password");
                    yield "\" id=\"change_password_anchor\" class=\"ajax\">
                        ";
                    // line 46
                    yield PhpMyAdmin\Html\Generator::getIcon("s_passwd", _gettext("Change password"), true);
                    yield "
                      </a>
                    </li>
                  ";
                }
                // line 50
                yield "
                  <li id=\"li_select_mysql_collation\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 52
                yield PhpMyAdmin\Url::getFromRoute("/collation-connection");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 53
                yield PhpMyAdmin\Url::getHiddenInputs(null, null, 4, "collation_connection");
                yield "
                      <div class=\"col-12\">
                        <label for=\"collationConnectionSelect\" class=\"col-form-label\">
                          ";
                // line 56
                yield PhpMyAdmin\Html\Generator::getImage("s_asci");
                yield "
                          ";
yield _gettext("Server connection collation:");
                // line 58
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::show("charset-connection");
                yield "
                        </label>
                      </div>
                      ";
                // line 61
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["charsets"] ?? null))) {
                    // line 62
                    yield "                      <div class=\"col-12\">
                        <select lang=\"en\" dir=\"ltr\" name=\"collation_connection\" id=\"collationConnectionSelect\" class=\"form-select autosubmit\">
                          <option value=\"\">";
yield _gettext("Collation");
                    // line 64
                    yield "</option>
                          <option value=\"\"></option>
                          ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                        // line 67
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "name", [], "any", false, false, false, 67), "html", null, true);
                        yield "\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "description", [], "any", false, false, false, 67), "html", null, true);
                        yield "\">
                              ";
                        // line 68
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "collations", [], "any", false, false, false, 68));
                        foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                            // line 69
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 69), "html", null, true);
                            yield "\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "description", [], "any", false, false, false, 69), "html", null, true);
                            yield "\"";
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "is_selected", [], "any", false, false, false, 69)) ? (" selected") : (""));
                            yield ">";
                            // line 70
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "name", [], "any", false, false, false, 70), "html", null, true);
                            // line 71
                            yield "</option>
                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        yield "                            </optgroup>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield "                        </select>
                      </div>
                      ";
                }
                // line 78
                yield "                    </form>
                  </li>

                  <li id=\"li_user_preferences\" class=\"list-group-item\">
                    <a href=\"";
                // line 82
                yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
                yield "\">
                      ";
                // line 83
                yield PhpMyAdmin\Html\Generator::getIcon("b_tblops", _gettext("More settings"), true);
                yield "
                    </a>
                  </li>
                ";
            }
            // line 87
            yield "              </ul>
            </div>
          ";
        }
        // line 90
        yield "
            ";
        // line 91
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null)) || ($context["has_theme_manager"] ?? null))) {
            // line 92
            yield "            <div class=\"card mt-4\">
              <div class=\"card-header\">
                ";
yield _gettext("Appearance settings");
            // line 95
            yield "              </div>
              <ul class=\"list-group list-group-flush\">
                ";
            // line 97
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["available_languages"] ?? null))) {
                // line 98
                yield "                  <li id=\"li_select_lang\" class=\"list-group-item\">
                    <form method=\"get\" action=\"";
                // line 99
                yield PhpMyAdmin\Url::getFromRoute("/");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 100
                yield PhpMyAdmin\Url::getHiddenInputs(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                yield "
                      <div class=\"col-12\">
                        <label for=\"languageSelect\" class=\"col-form-label text-nowrap\">
                          ";
                // line 103
                yield PhpMyAdmin\Html\Generator::getImage("s_lang");
                yield "
                          ";
yield _gettext("Language");
                // line 105
                yield "                          ";
                if ((0 !== CoreExtension::compare(_gettext("Language"), "Language"))) {
                    // line 106
                    yield "                                                        <i lang=\"en\" dir=\"ltr\">(Language)</i>
                          ";
                }
                // line 110
                yield "                          ";
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq7-2");
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <select name=\"lang\" class=\"form-select autosubmit w-auto\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\">
                          ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["available_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 116
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 116)), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 116)) ? (" selected") : (""));
                    yield ">";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 117);
                    // line 118
                    yield "</option>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "                        </select>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 125
            yield "
                ";
            // line 126
            if (($context["has_theme_manager"] ?? null)) {
                // line 127
                yield "                  <li id=\"li_select_theme\" class=\"list-group-item\">
                    <form method=\"post\" action=\"";
                // line 128
                yield PhpMyAdmin\Url::getFromRoute("/themes/set");
                yield "\" class=\"row row-cols-lg-auto align-items-center disableAjax\">
                      ";
                // line 129
                yield PhpMyAdmin\Url::getHiddenInputs();
                yield "
                      <div class=\"col-12\">
                        <label for=\"themeSelect\" class=\"col-form-label\">
                          ";
                // line 132
                yield PhpMyAdmin\Html\Generator::getIcon("s_theme", _gettext("Theme"));
                yield "
                        </label>
                      </div>
                      <div class=\"col-12\">
                        <div class=\"input-group\">
                          <select name=\"set_theme\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"themeSelect\">
                            ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                    // line 139
                    yield "                              <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 139), "html", null, true);
                    yield "\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "is_active", [], "any", false, false, false, 139)) ? (" selected") : (""));
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 139), "html", null, true);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "                          </select>
                          <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#themesModal\">
                            ";
yield _pgettext("View all themes", "View all");
                // line 144
                yield "                          </button>
                        </div>
                      </div>
                    </form>
                  </li>
                ";
            }
            // line 150
            yield "              </ul>
            </div>
            ";
        }
        // line 153
        yield "
          ";
        // line 155
        yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              <i class=\"fas fa-robot\"></i> AI PhpMyAdmin Features
            </div>
            <div class=\"card-body\">
              <p class=\"card-text\">Experience the power of AI-enhanced database management with these new intelligent features:</p>
              <ul class=\"list-unstyled\">
                <li class=\"mb-2\">
                  <i class=\"fas fa-brain text-primary\"></i>
                  <strong>AI Natural Language SQL Generation</strong><br>
                  <small class=\"text-muted\">Convert natural language descriptions into optimized SQL queries automatically</small>
                </li>
                <li class=\"mb-2\">
                  <i class=\"fas fa-database text-success\"></i>
                  <strong>AI Test Data Generation</strong><br>
                  <small class=\"text-muted\">Generate realistic and contextual test data for your database tables using AI</small>
                </li>
                <li class=\"mb-2\">
                  <i class=\"fas fa-chart-line text-warning\"></i>
                  <strong>AI SQL Structure Analysis</strong><br>
                  <small class=\"text-muted\">Get intelligent optimization recommendations and performance insights for your database structures</small>
                </li>
              </ul>
              <div class=\"text-center mt-3\">
                <a href=\"https://www.phpmyadmin.pro\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"btn btn-primary btn-sm\">
                  <i class=\"fas fa-external-link-alt\"></i> Learn More
                </a>
              </div>
            </div>
          </div>
          </div>

      <div class=\"col-lg-5 col-12\">
        ";
        // line 188
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_server"] ?? null))) {
            // line 189
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
yield _gettext("Database server");
            // line 192
            yield "            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">
                ";
yield _gettext("Server:");
            // line 196
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "host", [], "any", false, false, false, 196), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server type:");
            // line 200
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "type", [], "any", false, false, false, 200), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server connection:");
            // line 204
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "connection", [], "any", false, false, false, 204);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server version:");
            // line 208
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "version", [], "any", false, false, false, 208), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Protocol version:");
            // line 212
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "protocol", [], "any", false, false, false, 212), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("User:");
            // line 216
            yield "                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "user", [], "any", false, false, false, 216), "html", null, true);
            yield "
              </li>
              <li class=\"list-group-item\">
                ";
yield _gettext("Server charset:");
            // line 220
            yield "                <span lang=\"en\" dir=\"ltr\">
                  ";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["database_server"] ?? null), "charset", [], "any", false, false, false, 221), "html", null, true);
            yield "
                </span>
              </li>
            </ul>
          </div>
        ";
        }
        // line 227
        yield "
        ";
        // line 228
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null)) || ($context["show_php_info"] ?? null))) {
            // line 229
            yield "          <div class=\"card mt-4\">
            <div class=\"card-header\">
              ";
yield _gettext("Web server");
            // line 232
            yield "            </div>
            <ul class=\"list-group list-group-flush\">
              ";
            // line 234
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["web_server"] ?? null))) {
                // line 235
                yield "                ";
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 235))) {
                    // line 236
                    yield "                <li class=\"list-group-item\">
                  ";
                    // line 237
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "software", [], "any", false, false, false, 237), "html", null, true);
                    yield "
                </li>
                ";
                }
                // line 240
                yield "                <li class=\"list-group-item\" id=\"li_mysql_client_version\">
                  ";
yield _gettext("Database client version:");
                // line 242
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "database", [], "any", false, false, false, 242), "html", null, true);
                yield "
                </li>
                <li class=\"list-group-item\">
                  ";
yield _gettext("PHP extension:");
                // line 246
                yield "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_extensions", [], "any", false, false, false, 246));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 247
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["extension"], "html", null, true);
                    yield "
                    ";
                    // line 248
                    yield PhpMyAdmin\Html\Generator::showPHPDocumentation((("book." . $context["extension"]) . ".php"));
                    yield "
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 250
                yield "                </li>
                <li class=\"list-group-item\">
                  ";
yield _gettext("PHP version:");
                // line 253
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["web_server"] ?? null), "php_version", [], "any", false, false, false, 253), "html", null, true);
                yield "
                </li>
              ";
            }
            // line 256
            yield "              ";
            if (($context["show_php_info"] ?? null)) {
                // line 257
                yield "                <li class=\"list-group-item\">
                  <a href=\"";
                // line 258
                yield PhpMyAdmin\Url::getFromRoute("/phpinfo");
                yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    ";
yield _gettext("Show PHP information");
                // line 260
                yield "                  </a>
                </li>
              ";
            }
            // line 263
            yield "            </ul>
          </div>
        ";
        }
        // line 266
        yield "
          <div class=\"card mt-4\">
            <div class=\"card-header\">
              phpMyAdmin
            </div>
            <ul class=\"list-group list-group-flush\">
              <li id=\"li_pma_version\" class=\"list-group-item";
        // line 272
        yield ((($context["is_version_checked"] ?? null)) ? (" jsversioncheck") : (""));
        yield "\">
                ";
yield _gettext("Version information:");
        // line 274
        yield "                <span class=\"version\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["phpmyadmin_version"] ?? null), "html", null, true);
        yield "</span>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 277
        yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Documentation");
        // line 279
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Official Homepage");
        // line 284
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/contribute/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Contribute");
        // line 289
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/support/"), "html", null, true);
        yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
                  ";
yield _gettext("Get support");
        // line 294
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 297
        yield PhpMyAdmin\Url::getFromRoute("/changelog");
        yield "\" target=\"_blank\">
                  ";
yield _gettext("List of changes");
        // line 299
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"";
        // line 302
        yield PhpMyAdmin\Url::getFromRoute("/license");
        yield "\" target=\"_blank\">
                  ";
yield _gettext("License");
        // line 304
        yield "                </a>
              </li>
              <li class=\"list-group-item\">
                <a href=\"https://www.phpmyadmin.pro\" target=\"_blank\" rel=\"noopener noreferrer\">
                  <i class=\"fas fa-robot\"></i> AI PhpMyAdmin
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 317
            yield "        <div class=\"alert ";
            yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 317), "warning"))) ? ("alert-warning") : ("alert-info"));
            yield "\" role=\"alert\">
          ";
            // line 318
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "severity", [], "any", false, false, false, 318), "warning"))) {
                // line 319
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_attention", _gettext("Warning"));
                yield "
          ";
            } else {
                // line 321
                yield "            ";
                yield PhpMyAdmin\Html\Generator::getImage("s_notice", _gettext("Notice"));
                yield "
          ";
            }
            // line 323
            yield "          ";
            yield PhpMyAdmin\Sanitize::sanitizeMessage(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 323));
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        yield "    </div>
  </div>

";
        // line 329
        if (($context["has_theme_manager"] ?? null)) {
            // line 330
            yield "  <div class=\"modal fade\" id=\"themesModal\" tabindex=\"-1\" aria-labelledby=\"themesModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"themesModalLabel\">";
yield _gettext("phpMyAdmin Themes");
            // line 334
            yield "</h5>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Close");
            // line 335
            yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
yield _gettext("Loading…");
            // line 339
            yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Close");
            // line 343
            yield "</button>
          <a href=\"";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Core::linkURL("https://www.phpmyadmin.net/themes/"), "html", null, true);
            yield "#pma_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(($context["phpmyadmin_major_version"] ?? null), ["." => "_"]), "html", null, true);
            yield "\" class=\"btn btn-primary\" rel=\"noopener noreferrer\" target=\"_blank\">
            ";
yield _gettext("Get more themes!");
            // line 346
            yield "          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 352
        yield "
";
        // line 353
        yield ($context["config_storage_message"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.twig";
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
        return array (  760 => 353,  757 => 352,  749 => 346,  742 => 344,  739 => 343,  732 => 339,  725 => 335,  721 => 334,  714 => 330,  712 => 329,  707 => 326,  697 => 323,  691 => 321,  685 => 319,  683 => 318,  678 => 317,  674 => 316,  660 => 304,  655 => 302,  650 => 299,  645 => 297,  640 => 294,  635 => 292,  630 => 289,  625 => 287,  620 => 284,  615 => 282,  610 => 279,  605 => 277,  598 => 274,  593 => 272,  585 => 266,  580 => 263,  575 => 260,  570 => 258,  567 => 257,  564 => 256,  557 => 253,  552 => 250,  544 => 248,  539 => 247,  534 => 246,  526 => 242,  522 => 240,  516 => 237,  513 => 236,  510 => 235,  508 => 234,  504 => 232,  499 => 229,  497 => 228,  494 => 227,  485 => 221,  482 => 220,  474 => 216,  466 => 212,  458 => 208,  450 => 204,  442 => 200,  434 => 196,  428 => 192,  423 => 189,  421 => 188,  386 => 155,  383 => 153,  378 => 150,  370 => 144,  365 => 141,  352 => 139,  348 => 138,  339 => 132,  333 => 129,  329 => 128,  326 => 127,  324 => 126,  321 => 125,  314 => 120,  307 => 118,  305 => 117,  299 => 116,  295 => 115,  286 => 110,  282 => 106,  279 => 105,  274 => 103,  268 => 100,  264 => 99,  261 => 98,  259 => 97,  255 => 95,  250 => 92,  248 => 91,  245 => 90,  240 => 87,  233 => 83,  229 => 82,  223 => 78,  218 => 75,  211 => 73,  204 => 71,  202 => 70,  194 => 69,  190 => 68,  183 => 67,  179 => 66,  175 => 64,  170 => 62,  168 => 61,  161 => 58,  156 => 56,  150 => 53,  146 => 52,  142 => 50,  135 => 46,  131 => 45,  128 => 44,  125 => 43,  123 => 42,  120 => 41,  114 => 38,  110 => 37,  107 => 36,  105 => 35,  101 => 33,  95 => 29,  90 => 26,  88 => 21,  84 => 25,  81 => 22,  79 => 21,  75 => 19,  70 => 16,  67 => 15,  65 => 14,  58 => 10,  52 => 7,  47 => 5,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\home\\index.twig");
    }
}
