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

/* table/operations/index.twig */
class __TwigTemplate_59d57e015a7722f23321d1c342552ca0bcf6bf6dd8d5c3169a220503c9575951 extends Template
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

";
        // line 3
        if ( !($context["hide_order_table"] ?? null)) {
            // line 4
            yield "  <form method=\"post\" id=\"alterTableOrderby\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 5
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
    <input type=\"hidden\" name=\"submitorderby\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">";
yield _gettext("Alter table order by");
            // line 9
            yield "</div>
      <div class=\"card-body\">
        <div class=\"row g-3\">
          <div class=\"col-auto\">
            <label class=\"visually-hidden\" for=\"tableOrderFieldSelect\">";
yield _gettext("Column");
            // line 13
            yield "</label>
            <select id=\"tableOrderFieldSelect\" class=\"form-select\" name=\"order_field\" aria-describedby=\"tableOrderFieldSelectHelp\">
              ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 16
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "Field", [], "any", false, false, false, 16), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "Field", [], "any", false, false, false, 16), "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "            </select>
            <small id=\"tableOrderFieldSelectHelp\" class=\"form-text text-muted\">
              ";
yield _pgettext("Alter table order by a single field.", "(singly)");
            // line 21
            yield "            </small>
          </div>

          <div class=\"col-auto\">
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderAscRadio\" name=\"order_order\" type=\"radio\" value=\"asc\" checked>
              <label class=\"form-check-label\" for=\"tableOrderAscRadio\">";
yield _gettext("Ascending");
            // line 27
            yield "</label>
            </div>
            <div class=\"form-check\">
              <input class=\"form-check-input\" id=\"tableOrderDescRadio\" name=\"order_order\" type=\"radio\" value=\"desc\">
              <label class=\"form-check-label\" for=\"tableOrderDescRadio\">";
yield _gettext("Descending");
            // line 31
            yield "</label>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
            // line 38
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 43
        yield "
<form method=\"post\" action=\"";
        // line 44
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"moveTableForm\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 45
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"what\" value=\"data\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
yield _gettext("Move table to (database.table)");
        // line 50
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 55
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_list"] ?? null))) {
            // line 56
            yield "              <select id=\"moveTableDatabaseInput\" class=\"form-select\" name=\"target_db\" aria-label=\"";
yield _gettext("Database");
            yield "\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 58
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 58)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 58), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "              </select>
            ";
        } else {
            // line 62
            yield "              <input id=\"moveTableDatabaseInput\" class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
yield _gettext("Database");
            yield "\">
            ";
        }
        // line 64
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" required=\"required\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
yield _gettext("Table");
        yield "\">
          </div>
        </div>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_mv\">
        <label class=\"form-check-label\" for=\"checkbox_auto_increment_mv\">";
yield _gettext("Add AUTO_INCREMENT value");
        // line 72
        yield "</label>
      </div>
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_tables_move\"";
        // line 76
        if (($context["has_privileges"] ?? null)) {
            yield " checked";
        } else {
            yield " title=\"";
yield _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 77
            yield "\" disabled";
        }
        yield ">
        <label class=\"form-check-label\" for=\"checkbox_privileges_tables_move\">
          ";
yield _gettext("Adjust privileges");
        // line 80
        yield "          ";
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
        </label>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_move\" value=\"";
yield _gettext("Go");
        // line 86
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 91
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" id=\"tableOptionsForm\" class=\"ajax\">
  ";
        // line 92
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">
  <input type=\"hidden\" name=\"submitoptions\" value=\"1\">
  <input type=\"hidden\" name=\"prev_comment\" value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_comment"] ?? null), "html", null, true);
        yield "\">
  ";
        // line 96
        if (($context["has_auto_increment"] ?? null)) {
            // line 97
            yield "    <input type=\"hidden\" name=\"hidden_auto_increment\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_increment"] ?? null), "html", null, true);
            yield "\">
  ";
        }
        // line 99
        yield "
  <div class=\"card mb-2\">
    <div class=\"card-header\">";
yield _gettext("Table options");
        // line 101
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"renameTableInput\">";
yield _gettext("Rename table to");
        // line 105
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"renameTableInput\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" required>
        </div>
        <div class=\"form-check col-12\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_privileges_table_options\"";
        // line 112
        if (($context["has_privileges"] ?? null)) {
            yield " checked";
        } else {
            yield " title=\"";
yield _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 113
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_privileges_table_options\">
            ";
yield _gettext("Adjust privileges");
        // line 116
        yield "            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"tableCommentsInput\">";
yield _gettext("Table comments");
        // line 123
        yield "</label>
        </div>
        <div class=\"col-6\">
          <input class=\"form-control\" id=\"tableCommentsInput\" type=\"text\" name=\"comment\" maxlength=\"2048\" value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_comment"] ?? null), "html", null, true);
        yield "\">
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label class=\"text-nowrap\" for=\"newTableStorageEngineSelect\">
            ";
yield _gettext("Storage engine");
        // line 134
        yield "            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Storage_engines");
        yield "
          </label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" name=\"new_tbl_storage_engine\" id=\"newTableStorageEngineSelect\">
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
            // line 140
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
            yield "\"";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                yield "\"";
            }
            // line 141
            yield ((((0 === CoreExtension::compare(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)), Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["storage_engine"] ?? null)))) || (Twig\Extension\CoreExtension::testEmpty(($context["storage_engine"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "is_default", [], "any", false, false, false, 141)))) ? (" selected") : (""));
            yield ">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142), "html", null, true);
            // line 143
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        yield "          </select>
        </div>
      </div>

      <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
        <div class=\"col-6\">
          <label for=\"collationSelect\">";
yield _gettext("Collation");
        // line 151
        yield "</label>
        </div>
        <div class=\"col-6\">
          <select class=\"form-select\" id=\"collationSelect\" lang=\"en\" dir=\"ltr\" name=\"tbl_collation\">
            <option value=\"\"></option>
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["charsets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
            // line 157
            yield "              <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 157), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getDescription", [], "method", false, false, false, 157), "html", null, true);
            yield "\">
                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_0 = ($context["collations"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["charset"], "getName", [], "method", false, false, false, 158)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["collation"]) {
                // line 159
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 159), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getDescription", [], "method", false, false, false, 159), "html", null, true);
                yield "\"";
                yield (((0 === CoreExtension::compare(($context["tbl_collation"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 159)))) ? (" selected") : (""));
                yield ">
                    ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["collation"], "getName", [], "method", false, false, false, 160), "html", null, true);
                yield "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "              </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        yield "          </select>
        </div>

        <div class=\"form-check col-12 ms-3\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"change_all_collations\" value=\"1\" id=\"checkbox_change_all_collations\">
          <label class=\"form-check-label\" for=\"checkbox_change_all_collations\">";
yield _gettext("Change all column collations");
        // line 170
        yield "</label>
        </div>
      </div>

      ";
        // line 174
        if (($context["has_pack_keys"] ?? null)) {
            // line 175
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-6\">
            <label for=\"new_pack_keys\">PACK_KEYS</label>
          </div>
          <div class=\"col-6\">
            <select class=\"form-select\" name=\"new_pack_keys\" id=\"new_pack_keys\">
              <option value=\"DEFAULT\"";
            // line 181
            yield (((0 === CoreExtension::compare(($context["pack_keys"] ?? null), "DEFAULT"))) ? (" selected") : (""));
            yield ">DEFAULT</option>
              <option value=\"0\"";
            // line 182
            yield (((0 === CoreExtension::compare(($context["pack_keys"] ?? null), "0"))) ? (" selected") : (""));
            yield ">0</option>
              <option value=\"1\"";
            // line 183
            yield (((0 === CoreExtension::compare(($context["pack_keys"] ?? null), "1"))) ? (" selected") : (""));
            yield ">1</option>
            </select>
          </div>
        </div>
      ";
        }
        // line 188
        yield "
      ";
        // line 189
        if (($context["has_checksum_and_delay_key_write"] ?? null)) {
            // line 190
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_checksum\" id=\"new_checksum\" value=\"1\"";
            // line 191
            yield (((0 === CoreExtension::compare(($context["checksum"] ?? null), "1"))) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_checksum\">CHECKSUM</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_delay_key_write\" id=\"new_delay_key_write\" value=\"1\"";
            // line 196
            yield (((0 === CoreExtension::compare(($context["delay_key_write"] ?? null), "1"))) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_delay_key_write\">DELAY_KEY_WRITE</label>
        </div>
      ";
        }
        // line 200
        yield "
      ";
        // line 201
        if (($context["has_transactional_and_page_checksum"] ?? null)) {
            // line 202
            yield "        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_transactional\" id=\"new_transactional\" value=\"1\"";
            // line 203
            yield (((0 === CoreExtension::compare(($context["transactional"] ?? null), "1"))) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_transactional\">TRANSACTIONAL</label>
        </div>

        <div class=\"mb-3 form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"new_page_checksum\" id=\"new_page_checksum\" value=\"1\"";
            // line 208
            yield (((0 === CoreExtension::compare(($context["page_checksum"] ?? null), "1"))) ? (" checked") : (""));
            yield ">
          <label class=\"form-check-label\" for=\"new_page_checksum\">PAGE_CHECKSUM</label>
        </div>
      ";
        }
        // line 212
        yield "
      ";
        // line 213
        if (($context["has_auto_increment"] ?? null)) {
            // line 214
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"auto_increment_opt\">AUTO_INCREMENT</label>
          </div>
          <div class=\"col-12\">
            <input class=\"form-control\" id=\"auto_increment_opt\" type=\"number\" name=\"new_auto_increment\" value=\"";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["auto_increment"] ?? null), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 223
        yield "
      ";
        // line 224
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["row_formats"] ?? null))) {
            // line 225
            yield "        <div class=\"mb-3 row row-cols-lg-auto g-3 align-items-center\">
          <div class=\"col-12\">
            <label for=\"new_row_format\">ROW_FORMAT</label>
          </div>
          <div class=\"col-12\">
            <select class=\"form-select\" id=\"new_row_format\" name=\"new_row_format\">
              ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["row_formats"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row_format"]) {
                // line 232
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "\"";
                yield (((0 === CoreExtension::compare($context["row_format"], Twig\Extension\CoreExtension::upper($this->env->getCharset(), ($context["row_format_current"] ?? null))))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["row_format"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row_format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "            </select>
          </div>
        </div>
      ";
        }
        // line 238
        yield "    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
        // line 241
        yield "\">
    </div>
  </div>
</form>

<form method=\"post\" action=\"";
        // line 246
        yield PhpMyAdmin\Url::getFromRoute("/table/operations");
        yield "\" name=\"copyTable\" id=\"copyTable\" class=\"ajax\" onsubmit=\"return Functions.emptyCheckTheField(this, 'new_name')\">
  ";
        // line 247
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        yield "
  <input type=\"hidden\" name=\"reload\" value=\"1\">

  <div class=\"card mb-2\">
    <div class=\"card-header\">";
yield _gettext("Copy table to (database.table)");
        // line 251
        yield "</div>
    <div class=\"card-body\">
      <div class=\"mb-3 row g-3\">
        <div class=\"col-auto\">
          <div class=\"input-group\">
            ";
        // line 256
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["database_list"] ?? null))) {
            // line 257
            yield "              <select class=\"form-select\" name=\"target_db\" aria-label=\"";
yield _gettext("Database");
            yield "\">
                ";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["database_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
                // line 259
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 259)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 259), "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            yield "              </select>
            ";
        } else {
            // line 263
            yield "              <input class=\"form-control\" type=\"text\" maxlength=\"100\" name=\"target_db\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
            yield "\" aria-label=\"";
yield _gettext("Database");
            yield "\">
            ";
        }
        // line 265
        yield "            <span class=\"input-group-text\">.</span>
            <input class=\"form-control\" type=\"text\" name=\"new_name\" maxlength=\"64\" value=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table"] ?? null), "html", null, true);
        yield "\" aria-label=\"";
yield _gettext("Table");
        yield "\" required>
          </div>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio1\" value=\"structure\">
          <label class=\"form-check-label\" for=\"whatRadio1\">
            ";
yield _gettext("Structure only");
        // line 276
        yield "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio2\" value=\"data\" checked>
          <label class=\"form-check-label\" for=\"whatRadio2\">
            ";
yield _gettext("Structure and data");
        // line 282
        yield "          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"what\" id=\"whatRadio3\" value=\"dataonly\">
          <label class=\"form-check-label\" for=\"whatRadio3\">
            ";
yield _gettext("Data only");
        // line 288
        yield "          </label>
        </div>
      </div>

      <div class=\"mb-3\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"drop_if_exists\" value=\"true\" id=\"checkbox_drop\">
          <label class=\"form-check-label\" for=\"checkbox_drop\">";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Add %s"), "DROP TABLE"), "html", null, true);
        yield "</label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"sql_auto_increment\" value=\"1\" id=\"checkbox_auto_increment_cp\">
          <label class=\"form-check-label\" for=\"checkbox_auto_increment_cp\">";
yield _gettext("Add AUTO_INCREMENT value");
        // line 300
        yield "</label>
        </div>

        ";
        // line 303
        if (($context["has_foreign_keys"] ?? null)) {
            // line 304
            yield "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"checkbox\" name=\"add_constraints\" value=\"1\" id=\"checkbox_constraints\" checked>
            <label class=\"form-check-label\" for=\"checkbox_constraints\">";
yield _gettext("Add constraints");
            // line 306
            yield "</label>
          </div>
        ";
        }
        // line 309
        yield "
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\"";
        // line 312
        if (($context["has_privileges"] ?? null)) {
            yield " checked";
        } else {
            yield " title=\"";
yield _gettext("You don't have sufficient privileges to perform this operation; Please refer to the documentation for more details.");
            // line 313
            yield "\" disabled";
        }
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_adjust_privileges\">
            ";
yield _gettext("Adjust privileges");
        // line 316
        yield "            ";
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        yield "
          </label>
        </div>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"checkbox\" name=\"switch_to_new\" value=\"true\" id=\"checkbox_switch\"";
        // line 321
        yield ((($context["switch_to_new"] ?? null)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"checkbox_switch\">";
yield _gettext("Switch to copied table");
        // line 322
        yield "</label>
        </div>
      </div>
    </div>

    <div class=\"card-footer text-end\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit_copy\" value=\"";
yield _gettext("Go");
        // line 328
        yield "\">
    </div>
  </div>
</form>

<div class=\"card mb-2\">
  <div class=\"card-header\">";
yield _gettext("Table maintenance");
        // line 334
        yield "</div>
  <ul class=\"list-group list-group-flush\" id=\"tbl_maintenance\">
    ";
        // line 336
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 337
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 338
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/analyze");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
yield _gettext("Analyze table");
            // line 340
            yield "        </a>
        ";
            // line 341
            yield PhpMyAdmin\Html\MySQLDocumentation::show("ANALYZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 344
        yield "
    ";
        // line 345
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "TOKUDB"])) {
            // line 346
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 347
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/check");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
yield _gettext("Check table");
            // line 349
            yield "        </a>
        ";
            // line 350
            yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECK_TABLE");
            yield "
      </li>
    ";
        }
        // line 353
        yield "
    <li class=\"list-group-item\">
      <a href=\"";
        // line 355
        yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/checksum");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
        yield "\">
        ";
yield _gettext("Checksum table");
        // line 357
        yield "      </a>
      ";
        // line 358
        yield PhpMyAdmin\Html\MySQLDocumentation::show("CHECKSUM_TABLE");
        yield "
    </li>

    ";
        // line 361
        if ((0 === CoreExtension::compare(($context["storage_engine"] ?? null), "INNODB"))) {
            // line 362
            yield "      <li class=\"list-group-item\">
        <a class=\"maintain_action ajax\" href=\"";
            // line 363
            yield PhpMyAdmin\Url::getFromRoute("/sql");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " ENGINE = InnoDB;")]), "", false);
            yield "\">
          ";
yield _gettext("Defragment table");
            // line 365
            yield "        </a>
        ";
            // line 366
            yield PhpMyAdmin\Html\MySQLDocumentation::show("InnoDB_File_Defragmenting");
            yield "
      </li>
    ";
        }
        // line 369
        yield "
    <li class=\"list-group-item\">
      <a class=\"maintain_action ajax\" href=\"";
        // line 371
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" data-post=\"";
        yield PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => ("FLUSH TABLE " . PhpMyAdmin\Util::backquote(        // line 372
($context["table"] ?? null))), "message_to_show" => Twig\Extension\CoreExtension::sprintf(_gettext("Table %s has been flushed."), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(        // line 373
($context["table"] ?? null))), "reload" => true]), "", false);
        // line 375
        yield "\">
        ";
yield _gettext("Flush the table (FLUSH)");
        // line 377
        yield "      </a>
      ";
        // line 378
        yield PhpMyAdmin\Html\MySQLDocumentation::show("FLUSH");
        yield "
    </li>

    ";
        // line 381
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA", "INNODB", "BERKELEYDB", "TOKUDB"])) {
            // line 382
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 383
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/optimize");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
yield _gettext("Optimize table");
            // line 385
            yield "        </a>
        ";
            // line 386
            yield PhpMyAdmin\Html\MySQLDocumentation::show("OPTIMIZE_TABLE");
            yield "
      </li>
    ";
        }
        // line 389
        yield "
    ";
        // line 390
        if (CoreExtension::inFilter(($context["storage_engine"] ?? null), ["MYISAM", "ARIA"])) {
            // line 391
            yield "      <li class=\"list-group-item\">
        <a href=\"";
            // line 392
            yield PhpMyAdmin\Url::getFromRoute("/table/maintenance/repair");
            yield "\" data-post=\"";
            yield PhpMyAdmin\Url::getCommon(["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null), "selected_tbl" => [($context["table"] ?? null)]], "", false);
            yield "\">
          ";
yield _gettext("Repair table");
            // line 394
            yield "        </a>
        ";
            // line 395
            yield PhpMyAdmin\Html\MySQLDocumentation::show("REPAIR_TABLE");
            yield "
      </li>
    ";
        }
        // line 398
        yield "  </ul>
</div>

";
        // line 401
        if ( !($context["is_system_schema"] ?? null)) {
            // line 402
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
yield _gettext("Delete data or table");
            // line 403
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 405
            if ( !($context["is_view"] ?? null)) {
                // line 406
                yield "        <li class=\"list-group-item\">
          ";
                // line 407
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 409
($context["url_params"] ?? null), ["sql_query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 410
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Table %s has been emptied."),                 // line 413
($context["table"] ?? null)))]), _gettext("Empty the table (TRUNCATE)"), ["id" => "truncate_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("TRUNCATE TABLE " . PhpMyAdmin\Util::backquote(                // line 419
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 421
                yield "
          ";
                // line 422
                yield PhpMyAdmin\Html\MySQLDocumentation::show("TRUNCATE_TABLE");
                yield "
        </li>
        <li class=\"list-group-item\">
          ";
                // line 425
                yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(                // line 427
($context["url_params"] ?? null), ["sql_query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 428
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/table/structure"), "reload" => true, "message_to_show" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Table %s has been emptied."),                 // line 431
($context["table"] ?? null)))]), _gettext("Empty the table (DELETE FROM)"), ["id" => "delete_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DELETE FROM " . PhpMyAdmin\Util::backquote(                // line 437
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
                // line 439
                yield "
          ";
                // line 440
                yield PhpMyAdmin\Html\MySQLDocumentation::show("DELETE");
                yield "
        </li>
      ";
            }
            // line 443
            yield "      <li class=\"list-group-item\">
        ";
            // line 444
            yield PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), Twig\Extension\CoreExtension::merge(            // line 446
($context["url_params"] ?? null), ["sql_query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 447
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))), "goto" => PhpMyAdmin\Url::getFromRoute("/database/operations"), "reload" => true, "purge" => true, "message_to_show" => ((            // line 451
($context["is_view"] ?? null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("View %s has been dropped."), ($context["table"] ?? null)))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Table %s has been dropped."), ($context["table"] ?? null))))), "table" =>             // line 452
($context["table"] ?? null)]), _gettext("Delete the table (DROP)"), ["id" => "drop_tbl_anchor", "class" => "text-danger ajax", "data-query" => ((("DROP TABLE " . PhpMyAdmin\Util::backquote(            // line 458
($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null)))]);
            // line 460
            yield "
        ";
            // line 461
            yield PhpMyAdmin\Html\MySQLDocumentation::show("DROP_TABLE");
            yield "
      </li>
    </ul>
  </div>
";
        }
        // line 466
        yield "
";
        // line 467
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["partitions"] ?? null))) {
            // line 468
            yield "  <form id=\"partitionsForm\" class=\"ajax\" method=\"post\" action=\"";
            yield PhpMyAdmin\Url::getFromRoute("/table/operations");
            yield "\">
    ";
            // line 469
            yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            yield "
    <input type=\"hidden\" name=\"submit_partition\" value=\"1\">

    <div class=\"card mb-2\">
      <div class=\"card-header\">
        ";
yield _gettext("Partition maintenance");
            // line 475
            yield "        ";
            yield PhpMyAdmin\Html\MySQLDocumentation::show("partitioning_maintenance");
            yield "
      </div>

      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"partition_name\">";
yield _gettext("Partition");
            // line 480
            yield "</label>
          <select class=\"form-select resize-vertical\" id=\"partition_name\" name=\"partition_name[]\" multiple required>
            ";
            // line 482
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partitions"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 483
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 483)) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["partition"], "html", null, true);
                yield "</option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            yield "          </select>
        </div>

        <div class=\"mb-3 form-check-inline\">
          ";
            // line 489
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["partitions_choices"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                // line 490
                yield "            <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"radio\" name=\"partition_operation\" id=\"partitionOperationRadio";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"";
                yield (((0 === CoreExtension::compare($context["value"], "ANALYZE"))) ? (" checked") : (""));
                yield ">
              <label class=\"form-check-label\" for=\"partitionOperationRadio";
                // line 492
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["value"]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["description"], "html", null, true);
                yield "</label>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 495
            yield "        </div>

        <div class=\"form-text\">
          <a href=\"";
            // line 498
            yield PhpMyAdmin\Url::getFromRoute("/sql", Twig\Extension\CoreExtension::merge(($context["url_params"] ?? null), ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 499
($context["table"] ?? null))) . " REMOVE PARTITIONING;")]));
            // line 500
            yield "\">";
yield _gettext("Remove partitioning");
            yield "</a>
        </div>
      </div>

      <div class=\"card-footer text-end\">
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
            // line 505
            yield "\">
      </div>
    </div>
  </form>
";
        }
        // line 510
        yield "
";
        // line 511
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["foreigners"] ?? null))) {
            // line 512
            yield "  <div class=\"card mb-2\">
    <div class=\"card-header\">";
yield _gettext("Check referential integrity");
            // line 513
            yield "</div>
    <ul class=\"list-group list-group-flush\">
      ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["foreigners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign"]) {
                // line 516
                yield "        <li class=\"list-group-item\">
          <a class=\"text-nowrap\" href=\"";
                // line 517
                yield PhpMyAdmin\Url::getFromRoute("/sql", CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "params", [], "any", false, false, false, 517));
                yield "\">
            ";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "master", [], "any", false, false, false, 518), "html", null, true);
                yield " -> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "db", [], "any", false, false, false, 518), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "table", [], "any", false, false, false, 518), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["foreign"], "field", [], "any", false, false, false, 518), "html", null, true);
                yield "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            yield "    </ul>
  </div>
";
        }
        // line 525
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "table/operations/index.twig";
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
        return array (  1137 => 525,  1132 => 522,  1116 => 518,  1112 => 517,  1109 => 516,  1105 => 515,  1101 => 513,  1097 => 512,  1095 => 511,  1092 => 510,  1085 => 505,  1075 => 500,  1073 => 499,  1072 => 498,  1067 => 495,  1056 => 492,  1048 => 491,  1045 => 490,  1041 => 489,  1035 => 485,  1014 => 483,  997 => 482,  993 => 480,  983 => 475,  974 => 469,  969 => 468,  967 => 467,  964 => 466,  956 => 461,  953 => 460,  951 => 458,  950 => 452,  949 => 451,  948 => 447,  947 => 446,  946 => 444,  943 => 443,  937 => 440,  934 => 439,  932 => 437,  931 => 431,  930 => 428,  929 => 427,  928 => 425,  922 => 422,  919 => 421,  917 => 419,  916 => 413,  915 => 410,  914 => 409,  913 => 407,  910 => 406,  908 => 405,  904 => 403,  900 => 402,  898 => 401,  893 => 398,  887 => 395,  884 => 394,  877 => 392,  874 => 391,  872 => 390,  869 => 389,  863 => 386,  860 => 385,  853 => 383,  850 => 382,  848 => 381,  842 => 378,  839 => 377,  835 => 375,  833 => 373,  832 => 372,  829 => 371,  825 => 369,  819 => 366,  816 => 365,  809 => 363,  806 => 362,  804 => 361,  798 => 358,  795 => 357,  788 => 355,  784 => 353,  778 => 350,  775 => 349,  768 => 347,  765 => 346,  763 => 345,  760 => 344,  754 => 341,  751 => 340,  744 => 338,  741 => 337,  739 => 336,  735 => 334,  726 => 328,  717 => 322,  712 => 321,  703 => 316,  696 => 313,  690 => 312,  686 => 309,  681 => 306,  676 => 304,  674 => 303,  669 => 300,  660 => 295,  651 => 288,  643 => 282,  635 => 276,  620 => 266,  617 => 265,  609 => 263,  605 => 261,  592 => 259,  588 => 258,  583 => 257,  581 => 256,  574 => 251,  566 => 247,  562 => 246,  555 => 241,  549 => 238,  543 => 234,  530 => 232,  526 => 231,  518 => 225,  516 => 224,  513 => 223,  506 => 219,  499 => 214,  497 => 213,  494 => 212,  487 => 208,  479 => 203,  476 => 202,  474 => 201,  471 => 200,  464 => 196,  456 => 191,  453 => 190,  451 => 189,  448 => 188,  440 => 183,  436 => 182,  432 => 181,  424 => 175,  422 => 174,  416 => 170,  408 => 165,  401 => 163,  392 => 160,  383 => 159,  379 => 158,  372 => 157,  368 => 156,  361 => 151,  352 => 145,  345 => 143,  343 => 142,  340 => 141,  331 => 140,  327 => 139,  318 => 134,  307 => 126,  302 => 123,  290 => 116,  283 => 113,  277 => 112,  271 => 108,  266 => 105,  259 => 101,  254 => 99,  248 => 97,  246 => 96,  242 => 95,  236 => 92,  232 => 91,  225 => 86,  214 => 80,  207 => 77,  201 => 76,  196 => 72,  183 => 65,  180 => 64,  172 => 62,  168 => 60,  155 => 58,  151 => 57,  146 => 56,  144 => 55,  137 => 50,  128 => 45,  124 => 44,  121 => 43,  114 => 38,  104 => 31,  97 => 27,  88 => 21,  83 => 18,  72 => 16,  68 => 15,  64 => 13,  57 => 9,  49 => 5,  44 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/operations/index.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\table\\operations\\index.twig");
    }
}
