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

/* server/privileges/privileges_table.twig */
class __TwigTemplate_1479a486abc5b05c3048cff5da989186b82155ee6031a180f0875e88577a18f3 extends Template
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
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["columns"] ?? null))) {
            // line 2
            yield "
  <input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["row"] ?? null)), "html", null, true);
            yield "\">
  <input type=\"hidden\" name=\"column_count\" value=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["columns"] ?? null)), "html", null, true);
            yield "\">
  <fieldset class=\"pma-fieldset\" id=\"fieldset_user_priv\">
    <legend data-submenu-label=\"";
yield _gettext("Table");
            // line 6
            yield "\">
      ";
yield _gettext("Table-specific privileges");
            // line 8
            yield "    </legend>
    <p>
      <small><em>";
yield _gettext("Note: MySQL privilege names are expressed in English.");
            // line 10
            yield "</em></small>
    </p>

    <div class=\"item\" id=\"div_item_select\">
      <label for=\"select_select_priv\">
        <code><dfn title=\"";
yield _gettext("Allows reading data.");
            // line 15
            yield "\">SELECT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_select_priv\" name=\"Select_priv[]\" size=\"8\" multiple>
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 20
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((0 === CoreExtension::compare((($__internal_compile_0 = ($context["row"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Select_priv"] ?? null) : null), "Y")) || (($__internal_compile_1 = $context["curr_col_privs"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Select"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"select_priv_all\" type=\"button\" data-select-target=\"#select_select_priv\">
          ";
yield _gettext("Select all");
            // line 29
            yield "        </button>
      </div>

      <em>";
yield _gettext("Or");
            // line 32
            yield "</em>
      <label for=\"checkbox_Select_priv_none\">
        <input type=\"checkbox\" name=\"Select_priv_none\" id=\"checkbox_Select_priv_none\" title=\"";
yield _pgettext("None privileges", "None");
            // line 35
            yield "\">
        ";
yield _pgettext("None privileges", "None");
            // line 37
            yield "      </label>
    </div>

    <div class=\"item\" id=\"div_item_insert\">
      <label for=\"select_insert_priv\">
        <code><dfn title=\"";
yield _gettext("Allows inserting and replacing data.");
            // line 42
            yield "\">INSERT</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_insert_priv\" name=\"Insert_priv[]\" size=\"8\" multiple>
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 47
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((0 === CoreExtension::compare((($__internal_compile_2 = ($context["row"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Insert_priv"] ?? null) : null), "Y")) || (($__internal_compile_3 = $context["curr_col_privs"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Insert"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"insert_priv_all\" type=\"button\" data-select-target=\"#select_insert_priv\">
          ";
yield _gettext("Select all");
            // line 56
            yield "        </button>
      </div>

      <em>";
yield _gettext("Or");
            // line 59
            yield "</em>
      <label for=\"checkbox_Insert_priv_none\">
        <input type=\"checkbox\" name=\"Insert_priv_none\" id=\"checkbox_Insert_priv_none\" title=\"";
yield _pgettext("None privileges", "None");
            // line 62
            yield "\">
        ";
yield _pgettext("None privileges", "None");
            // line 64
            yield "      </label>
    </div>

    <div class=\"item\" id=\"div_item_update\">
      <label for=\"select_update_priv\">
        <code><dfn title=\"";
yield _gettext("Allows changing data.");
            // line 69
            yield "\">UPDATE</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_update_priv\" name=\"Update_priv[]\" size=\"8\" multiple>
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 74
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((0 === CoreExtension::compare((($__internal_compile_4 = ($context["row"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Update_priv"] ?? null) : null), "Y")) || (($__internal_compile_5 = $context["curr_col_privs"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Update"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"update_priv_all\" type=\"button\" data-select-target=\"#select_update_priv\">
          ";
yield _gettext("Select all");
            // line 83
            yield "        </button>
      </div>

      <em>";
yield _gettext("Or");
            // line 86
            yield "</em>
      <label for=\"checkbox_Update_priv_none\">
        <input type=\"checkbox\" name=\"Update_priv_none\" id=\"checkbox_Update_priv_none\" title=\"";
yield _pgettext("None privileges", "None");
            // line 89
            yield "\">
        ";
yield _pgettext("None privileges", "None");
            // line 91
            yield "      </label>
    </div>

    <div class=\"item\" id=\"div_item_references\">
      <label for=\"select_references_priv\">
        <code><dfn title=\"";
yield _gettext("Has no effect in this MySQL version.");
            // line 96
            yield "\">REFERENCES</dfn></code>
      </label>

      <select class=\"resize-vertical\" id=\"select_references_priv\" name=\"References_priv[]\" size=\"8\" multiple>
        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["columns"] ?? null));
            foreach ($context['_seq'] as $context["curr_col"] => $context["curr_col_privs"]) {
                // line 101
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "\"";
                yield ((((0 === CoreExtension::compare((($__internal_compile_6 = ($context["row"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["References_priv"] ?? null) : null), "Y")) || (($__internal_compile_7 = $context["curr_col_privs"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["References"] ?? null) : null))) ? (" selected") : (""));
                yield ">
            ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["curr_col"], "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['curr_col'], $context['curr_col_privs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "      </select>

      <div>
        <button class=\"btn btn-link p-0\" id=\"references_priv_all\" type=\"button\" data-select-target=\"#select_references_priv\">
          ";
yield _gettext("Select all");
            // line 110
            yield "        </button>
      </div>

      <em>";
yield _gettext("Or");
            // line 113
            yield "</em>
      <label for=\"checkbox_References_priv_none\">
        <input type=\"checkbox\" name=\"References_priv_none\" id=\"checkbox_References_priv_none\" title=\"";
yield _pgettext("None privileges", "None");
            // line 116
            yield "\">
        ";
yield _pgettext("None privileges", "None");
            // line 118
            yield "      </label>
    </div>

    <div class=\"item\">
      <div class=\"item\">
        <input type=\"checkbox\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
yield _gettext("Allows deleting data.");
            // line 124
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_8 = ($context["row"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Delete_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Delete_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows deleting data.");
            // line 127
            yield "\">
              DELETE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating new tables.");
            // line 136
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_9 = ($context["row"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Create_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating new tables.");
            // line 139
            yield "\">
              CREATE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
yield _gettext("Allows dropping tables.");
            // line 148
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_10 = ($context["row"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Drop_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Drop_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows dropping tables.");
            // line 151
            yield "\">
              DROP
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
yield _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 160
            yield "\"";
            // line 161
            yield (((0 === CoreExtension::compare((($__internal_compile_11 = ($context["row"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Grant_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
            // line 164
            yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating and dropping indexes.");
            // line 173
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_12 = ($context["row"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Index_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Index_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating and dropping indexes.");
            // line 176
            yield "\">
              INDEX
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
yield _gettext("Allows altering the structure of existing tables.");
            // line 185
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_13 = ($context["row"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Alter_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Alter_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows altering the structure of existing tables.");
            // line 188
            yield "\">
              ALTER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating new views.");
            // line 197
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_14 = ($context["row"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Create View_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating new views.");
            // line 200
            yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
yield _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 209
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_15 = ($context["row"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Show view_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Show_view_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 212
            yield "\">
              SHOW VIEW
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        <input type=\"checkbox\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating and dropping triggers.");
            // line 221
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_16 = ($context["row"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Trigger_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating and dropping triggers.");
            // line 224
            yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>

      ";
            // line 231
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Delete versioning rows_priv", [], "array", true, true, false, 231)) {
                // line 232
                yield "        <div class=\"item\">
          <input type=\"checkbox\" name=\"Delete_history_priv\" id=\"checkbox_Delete_history_priv\" value=\"Y\" title=\"";
yield _gettext("Allows deleting historical rows.");
                // line 234
                yield "\"";
                // line 235
                yield (((0 === CoreExtension::compare((($__internal_compile_17 = ($context["row"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Delete versioning rows_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
          <label for=\"checkbox_Delete_history_priv\">
            <code>
              <dfn title=\"";
yield _gettext("Allows deleting historical rows.");
                // line 238
                yield "\">
                DELETE HISTORY
              </dfn>
            </code>
          </label>
        </div>
      ";
            }
            // line 245
            yield "    </div>
    <div class=\"clearfloat\"></div>
  </fieldset>

";
        } else {
            // line 250
            yield "
";
            // line 251
            $context["grant_count"] = 0;
            // line 252
            yield "<fieldset class=\"pma-fieldset\" id=\"fieldset_user_global_rights\">
  <legend data-submenu-label=\"";
            // line 254
            if (($context["is_global"] ?? null)) {
yield _gettext("Global");
            } elseif (            // line 256
($context["is_database"] ?? null)) {
yield _gettext("Database");
            } else {
yield _gettext("Table");
            }
            // line 260
            yield "\">
    ";
            // line 261
            if (($context["is_global"] ?? null)) {
                // line 262
                yield "      ";
yield _gettext("Global privileges");
                // line 263
                yield "    ";
            } elseif (($context["is_database"] ?? null)) {
                // line 264
                yield "      ";
yield _gettext("Database-specific privileges");
                // line 265
                yield "    ";
            } else {
                // line 266
                yield "      ";
yield _gettext("Table-specific privileges");
                // line 267
                yield "    ";
            }
            // line 268
            yield "    <input type=\"checkbox\" id=\"addUsersForm_checkall\" class=\"checkall_box\" title=\"";
yield _gettext("Check all");
            yield "\">
    <label for=\"addUsersForm_checkall\">";
yield _gettext("Check all");
            // line 269
            yield "</label>
  </legend>
  <p>
    <small><em>";
yield _gettext("Note: MySQL privilege names are expressed in English.");
            // line 272
            yield "</em></small>
  </p>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Data_priv\" title=\"";
yield _gettext("Check all");
            // line 277
            yield "\">
      <label for=\"checkall_Data_priv\">";
yield _gettext("Data");
            // line 278
            yield "</label>
    </legend>

    <div class=\"item\">
      ";
            // line 282
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 283
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Select_priv\" id=\"checkbox_Select_priv\" value=\"Y\" title=\"";
yield _gettext("Allows reading data.");
            // line 284
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_18 = ($context["row"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["Select_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Select_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows reading data.");
            // line 287
            yield "\">
            SELECT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 295
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 296
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Insert_priv\" id=\"checkbox_Insert_priv\" value=\"Y\" title=\"";
yield _gettext("Allows inserting and replacing data.");
            // line 297
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_19 = ($context["row"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Insert_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Insert_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows inserting and replacing data.");
            // line 300
            yield "\">
            INSERT
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 308
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 309
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Update_priv\" id=\"checkbox_Update_priv\" value=\"Y\" title=\"";
yield _gettext("Allows changing data.");
            // line 310
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_20 = ($context["row"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Update_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Update_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows changing data.");
            // line 313
            yield "\">
            UPDATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 321
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 322
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Delete_priv\" id=\"checkbox_Delete_priv\" value=\"Y\" title=\"";
yield _gettext("Allows deleting data.");
            // line 323
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_21 = ($context["row"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Delete_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Delete_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows deleting data.");
            // line 326
            yield "\">
            DELETE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 333
            if (($context["is_global"] ?? null)) {
                // line 334
                yield "      <div class=\"item\">
        ";
                // line 335
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 336
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"File_priv\" id=\"checkbox_File_priv\" value=\"Y\" title=\"";
yield _gettext("Allows importing data from and exporting data into files.");
                // line 337
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_22 = ($context["row"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["File_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_File_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows importing data from and exporting data into files.");
                // line 340
                yield "\">
              FILE
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 347
            yield "  </fieldset>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Structure_priv\" title=\"";
yield _gettext("Check all");
            // line 351
            yield "\">
      <label for=\"checkall_Structure_priv\">";
yield _gettext("Structure");
            // line 352
            yield "</label>
    </legend>

    <div class=\"item\">
      ";
            // line 356
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 357
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_priv\" id=\"checkbox_Create_priv\" value=\"Y\" title=\"";
            // line 358
            if (($context["is_database"] ?? null)) {
yield _gettext("Allows creating new databases and tables.");
            } else {
yield _gettext("Allows creating new tables.");
            }
            // line 362
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_23 = ($context["row"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Create_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_priv\">
        <code>
          <dfn title=\"";
            // line 366
            if (($context["is_database"] ?? null)) {
yield _gettext("Allows creating new databases and tables.");
            } else {
yield _gettext("Allows creating new tables.");
            }
            // line 370
            yield "\">
            CREATE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 378
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 379
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_priv\" id=\"checkbox_Alter_priv\" value=\"Y\" title=\"";
yield _gettext("Allows altering the structure of existing tables.");
            // line 380
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_24 = ($context["row"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Alter_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows altering the structure of existing tables.");
            // line 383
            yield "\">
            ALTER
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 391
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 392
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Index_priv\" id=\"checkbox_Index_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating and dropping indexes.");
            // line 393
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_25 = ($context["row"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Index_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Index_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows creating and dropping indexes.");
            // line 396
            yield "\">
            INDEX
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 404
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 405
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Drop_priv\" id=\"checkbox_Drop_priv\" value=\"Y\" title=\"";
            // line 406
            if (($context["is_database"] ?? null)) {
yield _gettext("Allows dropping databases and tables.");
            } else {
yield _gettext("Allows dropping tables.");
            }
            // line 410
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_26 = ($context["row"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Drop_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Drop_priv\">
        <code>
          <dfn title=\"";
            // line 414
            if (($context["is_database"] ?? null)) {
yield _gettext("Allows dropping databases and tables.");
            } else {
yield _gettext("Allows dropping tables.");
            }
            // line 418
            yield "\">
            DROP
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 426
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 427
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_tmp_table_priv\" id=\"checkbox_Create_tmp_table_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating temporary tables.");
            // line 428
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_27 = ($context["row"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Create_tmp_table_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_tmp_table_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows creating temporary tables.");
            // line 431
            yield "\">
            CREATE TEMPORARY TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 439
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 440
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Show_view_priv\" id=\"checkbox_Show_view_priv\" value=\"Y\" title=\"";
yield _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 441
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_28 = ($context["row"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Show_view_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Show_view_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows performing SHOW CREATE VIEW queries.");
            // line 444
            yield "\">
            SHOW VIEW
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 452
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 453
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Create_routine_priv\" id=\"checkbox_Create_routine_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating stored routines.");
            // line 454
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_29 = ($context["row"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["Create_routine_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Create_routine_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows creating stored routines.");
            // line 457
            yield "\">
            CREATE ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 465
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 466
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Alter_routine_priv\" id=\"checkbox_Alter_routine_priv\" value=\"Y\" title=\"";
yield _gettext("Allows altering and dropping stored routines.");
            // line 467
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_30 = ($context["row"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["Alter_routine_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Alter_routine_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows altering and dropping stored routines.");
            // line 470
            yield "\">
            ALTER ROUTINE
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 478
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 479
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Execute_priv\" id=\"checkbox_Execute_priv\" value=\"Y\" title=\"";
yield _gettext("Allows executing stored routines.");
            // line 480
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_31 = ($context["row"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["Execute_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Execute_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows executing stored routines.");
            // line 483
            yield "\">
            EXECUTE
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 490
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create_view_priv", [], "array", true, true, false, 490)) {
                // line 491
                yield "      <div class=\"item\">
        ";
                // line 492
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 493
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_view_priv\" id=\"checkbox_Create_view_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating new views.");
                // line 494
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_32 = ($context["row"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["Create_view_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_view_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating new views.");
                // line 497
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 504
            yield "
    ";
            // line 505
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Create View_priv", [], "array", true, true, false, 505)) {
                // line 506
                yield "      <div class=\"item\">
        ";
                // line 507
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 508
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create View_priv\" id=\"checkbox_Create View_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating new views.");
                // line 509
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_33 = ($context["row"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["Create View_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create View_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating new views.");
                // line 512
                yield "\">
              CREATE VIEW
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 519
            yield "
    ";
            // line 520
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Event_priv", [], "array", true, true, false, 520)) {
                // line 521
                yield "      <div class=\"item\">
        ";
                // line 522
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 523
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Event_priv\" id=\"checkbox_Event_priv\" value=\"Y\" title=\"";
yield _gettext("Allows to set up events for the event scheduler.");
                // line 524
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_34 = ($context["row"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["Event_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Event_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows to set up events for the event scheduler.");
                // line 527
                yield "\">
              EVENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 535
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 536
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Trigger_priv\" id=\"checkbox_Trigger_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating and dropping triggers.");
                // line 537
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_35 = ($context["row"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["Trigger_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Trigger_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating and dropping triggers.");
                // line 540
                yield "\">
              TRIGGER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 547
            yield "  </fieldset>

  <fieldset class=\"pma-fieldset\">
    <legend>
      <input type=\"checkbox\" class=\"sub_checkall_box\" id=\"checkall_Administration_priv\" title=\"";
yield _gettext("Check all");
            // line 551
            yield "\">
      <label for=\"checkall_Administration_priv\">";
yield _gettext("Administration");
            // line 552
            yield "</label>
    </legend>

    ";
            // line 555
            if (($context["is_global"] ?? null)) {
                // line 556
                yield "      <div class=\"item\">
        ";
                // line 557
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 558
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
yield _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 559
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_36 = ($context["row"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["Grant_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows adding users and privileges without reloading the privilege tables.");
                // line 562
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 570
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 571
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Super_priv\" id=\"checkbox_Super_priv\" value=\"Y\" title=\"";
yield _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 572
                yield "\"";
                // line 573
                yield (((0 === CoreExtension::compare((($__internal_compile_37 = ($context["row"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["Super_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Super_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows connecting, even if maximum number of connections is reached; required for most administrative operations like setting global variables or killing threads of other users.");
                // line 576
                yield "\">
              SUPER
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 584
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 585
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Process_priv\" id=\"checkbox_Process_priv\" value=\"Y\" title=\"";
yield _gettext("Allows viewing processes of all users.");
                // line 586
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_38 = ($context["row"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["Process_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Process_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows viewing processes of all users.");
                // line 589
                yield "\">
              PROCESS
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 597
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 598
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Reload_priv\" id=\"checkbox_Reload_priv\" value=\"Y\" title=\"";
yield _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 599
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_39 = ($context["row"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["Reload_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Reload_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows reloading server settings and flushing the server's caches.");
                // line 602
                yield "\">
              RELOAD
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 610
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 611
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Shutdown_priv\" id=\"checkbox_Shutdown_priv\" value=\"Y\" title=\"";
yield _gettext("Allows shutting down the server.");
                // line 612
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_40 = ($context["row"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["Shutdown_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Shutdown_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows shutting down the server.");
                // line 615
                yield "\">
              SHUTDOWN
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 623
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 624
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Show_db_priv\" id=\"checkbox_Show_db_priv\" value=\"Y\" title=\"";
yield _gettext("Gives access to the complete list of databases.");
                // line 625
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_41 = ($context["row"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["Show_db_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Show_db_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Gives access to the complete list of databases.");
                // line 628
                yield "\">
              SHOW DATABASES
            </dfn>
          </code>
        </label>
      </div>
    ";
            } else {
                // line 635
                yield "      <div class=\"item\">
        ";
                // line 636
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 637
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Grant_priv\" id=\"checkbox_Grant_priv\" value=\"Y\" title=\"";
yield _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 638
                yield "\"";
                // line 639
                yield (((0 === CoreExtension::compare((($__internal_compile_42 = ($context["row"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["Grant_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Grant_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows user to give to other users or remove from other users the privileges that user possess yourself.");
                // line 642
                yield "\">
              GRANT
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 649
            yield "
    <div class=\"item\">
      ";
            // line 651
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 652
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"Lock_tables_priv\" id=\"checkbox_Lock_tables_priv\" value=\"Y\" title=\"";
yield _gettext("Allows locking tables for the current thread.");
            // line 653
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_43 = ($context["row"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["Lock_tables_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_Lock_tables_priv\">
        <code>
          <dfn title=\"";
yield _gettext("Allows locking tables for the current thread.");
            // line 656
            yield "\">
            LOCK TABLES
          </dfn>
        </code>
      </label>
    </div>

    <div class=\"item\">
      ";
            // line 664
            $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
            // line 665
            yield "      <input type=\"checkbox\" class=\"checkall\" name=\"References_priv\" id=\"checkbox_References_priv\" value=\"Y\" title=\"";
yield _gettext("Has no effect in this MySQL version.");
            // line 666
            yield "\"";
            yield (((0 === CoreExtension::compare((($__internal_compile_44 = ($context["row"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["References_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
            yield ">
      <label for=\"checkbox_References_priv\">
        <code>
          ";
            // line 670
            yield "          <dfn title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((($context["supports_references_privilege"] ?? null)) ? (_gettext("Allows creating foreign key relations.")) : (((($context["is_mariadb"] ?? null)) ? (_gettext("Not used on MariaDB.")) : (_gettext("Not used for this MySQL version."))))), "html", null, true);
            yield "\">
            REFERENCES
          </dfn>
        </code>
      </label>
    </div>

    ";
            // line 677
            if (($context["is_global"] ?? null)) {
                // line 678
                yield "      <div class=\"item\">
        ";
                // line 679
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 680
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_client_priv\" id=\"checkbox_Repl_client_priv\" value=\"Y\" title=\"";
yield _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 681
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_45 = ($context["row"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["Repl_client_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_client_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows the user to ask where the replicas / primaries are.");
                // line 684
                yield "\">
              REPLICATION CLIENT
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 692
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 693
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Repl_slave_priv\" id=\"checkbox_Repl_slave_priv\" value=\"Y\" title=\"";
yield _gettext("Needed for the replication replicas.");
                // line 694
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_46 = ($context["row"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["Repl_slave_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Repl_slave_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Needed for the replication replicas.");
                // line 697
                yield "\">
              REPLICATION SLAVE
            </dfn>
          </code>
        </label>
      </div>

      <div class=\"item\">
        ";
                // line 705
                $context["grant_count"] = (($context["grant_count"] ?? null) + 1);
                // line 706
                yield "        <input type=\"checkbox\" class=\"checkall\" name=\"Create_user_priv\" id=\"checkbox_Create_user_priv\" value=\"Y\" title=\"";
yield _gettext("Allows creating, dropping and renaming user accounts.");
                // line 707
                yield "\"";
                yield (((0 === CoreExtension::compare((($__internal_compile_47 = ($context["row"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["Create_user_priv"] ?? null) : null), "Y"))) ? (" checked") : (""));
                yield ">
        <label for=\"checkbox_Create_user_priv\">
          <code>
            <dfn title=\"";
yield _gettext("Allows creating, dropping and renaming user accounts.");
                // line 710
                yield "\">
              CREATE USER
            </dfn>
          </code>
        </label>
      </div>
    ";
            }
            // line 717
            yield "  </fieldset>

  ";
            // line 719
            if (($context["is_global"] ?? null)) {
                // line 720
                yield "    <fieldset class=\"pma-fieldset\">
      <legend>";
yield _gettext("Resource limits");
                // line 721
                yield "</legend>
      <p>
        <small><em>";
yield _gettext("Note: Setting these options to 0 (zero) removes the limit.");
                // line 723
                yield "</em></small>
      </p>

      <div class=\"item\">
        <label for=\"text_max_questions\">
          <code>
            <dfn title=\"";
yield _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 729
                yield "\">
              MAX QUERIES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_questions\" id=\"text_max_questions\" value=\"";
                // line 735
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", true, true, false, 735) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 735)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_questions", [], "any", false, false, false, 735), "html", null, true)) : (yield "0"));
                yield "\" title=\"";
yield _gettext("Limits the number of queries the user may send to the server per hour.");
                // line 736
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_updates\">
          <code>
            <dfn title=\"";
yield _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 742
                yield "\">
              MAX UPDATES PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_updates\" id=\"text_max_updates\" value=\"";
                // line 748
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", true, true, false, 748) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 748)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_updates", [], "any", false, false, false, 748), "html", null, true)) : (yield "0"));
                yield "\" title=\"";
yield _gettext("Limits the number of commands that change any table or database the user may execute per hour.");
                // line 749
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_connections\">
          <code>
            <dfn title=\"";
yield _gettext("Limits the number of new connections the user may open per hour.");
                // line 755
                yield "\">
              MAX CONNECTIONS PER HOUR
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_connections\" id=\"text_max_connections\" value=\"";
                // line 761
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", true, true, false, 761) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 761)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_connections", [], "any", false, false, false, 761), "html", null, true)) : (yield "0"));
                yield "\" title=\"";
yield _gettext("Limits the number of new connections the user may open per hour.");
                // line 762
                yield "\">
      </div>

      <div class=\"item\">
        <label for=\"text_max_user_connections\">
          <code>
            <dfn title=\"";
yield _gettext("Limits the number of simultaneous connections the user may have.");
                // line 768
                yield "\">
              MAX USER_CONNECTIONS
            </dfn>
          </code>
        </label>
        <input type=\"number\" name=\"max_user_connections\" id=\"text_max_user_connections\" value=\"";
                // line 774
                (((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", true, true, false, 774) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 774)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "max_user_connections", [], "any", false, false, false, 774), "html", null, true)) : (yield "0"));
                yield "\" title=\"";
yield _gettext("Limits the number of simultaneous connections the user may have.");
                // line 775
                yield "\">
      </div>
    </fieldset>

    <fieldset class=\"pma-fieldset\">
      <legend>SSL</legend>
      <div id=\"require_ssl_div\">
        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_NONE\" title=\"";
yield _gettext("Does not require SSL-encrypted connections.");
                // line 784
                yield "\" value=\"NONE\"";
                // line 785
                yield ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 785), "NONE")) || (0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 785), "")))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_NONE\">
            <code>REQUIRE NONE</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_ANY\" title=\"";
yield _gettext("Requires SSL-encrypted connections.");
                // line 793
                yield "\" value=\"ANY\"";
                // line 794
                yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 794), "ANY"))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_ANY\">
            <code>REQUIRE SSL</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_X509\" title=\"";
yield _gettext("Requires a valid X509 certificate.");
                // line 802
                yield "\" value=\"X509\"";
                // line 803
                yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 803), "X509"))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_X509\">
            <code>REQUIRE X509</code>
          </label>
        </div>

        <div class=\"item\">
          <input type=\"radio\" name=\"ssl_type\" id=\"ssl_type_SPECIFIED\" value=\"SPECIFIED\"";
                // line 811
                yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 811), "SPECIFIED"))) ? (" checked") : (""));
                yield ">
          <label for=\"ssl_type_SPECIFIED\">
            <code>SPECIFIED</code>
          </label>
        </div>

        <div id=\"specified_div\" style=\"padding-left:20px;\">
          <div class=\"item\">
            <label for=\"text_ssl_cipher\">
              <code>REQUIRE CIPHER</code>
            </label>
            <input type=\"text\" name=\"ssl_cipher\" id=\"text_ssl_cipher\" value=\"";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_cipher", [], "any", false, false, false, 822), "html", null, true);
                yield "\" size=\"80\" title=\"";
yield _gettext("Requires that a specific cipher method be used for a connection.");
                // line 823
                yield "\"";
                // line 824
                yield (((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 824), "SPECIFIED"))) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_issuer\">
              <code>REQUIRE ISSUER</code>
            </label>
            <input type=\"text\" name=\"x509_issuer\" id=\"text_x509_issuer\" value=\"";
                // line 831
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_issuer", [], "any", false, false, false, 831), "html", null, true);
                yield "\" size=\"80\" title=\"";
yield _gettext("Requires that a valid X509 certificate issued by this CA be presented.");
                // line 832
                yield "\"";
                // line 833
                yield (((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 833), "SPECIFIED"))) ? (" disabled") : (""));
                yield ">
          </div>

          <div class=\"item\">
            <label for=\"text_x509_subject\">
              <code>REQUIRE SUBJECT</code>
            </label>
            <input type=\"text\" name=\"x509_subject\" id=\"text_x509_subject\" value=\"";
                // line 840
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "x509_subject", [], "any", false, false, false, 840), "html", null, true);
                yield "\" size=\"80\" title=\"";
yield _gettext("Requires that a valid X509 certificate with this subject be presented.");
                // line 841
                yield "\"";
                // line 842
                yield (((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "ssl_type", [], "any", false, false, false, 842), "SPECIFIED"))) ? (" disabled") : (""));
                yield ">
          </div>
        </div>
      </div>
    </fieldset>
  ";
            }
            // line 848
            yield "
  <div class=\"clearfloat\"></div>
</fieldset>
<input type=\"hidden\" name=\"grant_count\" value=\"";
            // line 851
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["grant_count"] ?? null) - ((CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "Grant_priv", [], "array", true, true, false, 851)) ? (1) : (0))), "html", null, true);
            yield "\">

";
        }
        // line 854
        yield "
";
        // line 855
        if (($context["has_submit"] ?? null)) {
            // line 856
            yield "  <fieldset id=\"fieldset_user_privtable_footer\" class=\"pma-fieldset tblFooters\">
    <input type=\"hidden\" name=\"update_privs\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
yield _gettext("Go");
            // line 858
            yield "\">
  </fieldset>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "server/privileges/privileges_table.twig";
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
        return array (  1570 => 858,  1565 => 856,  1563 => 855,  1560 => 854,  1554 => 851,  1549 => 848,  1540 => 842,  1538 => 841,  1534 => 840,  1524 => 833,  1522 => 832,  1518 => 831,  1508 => 824,  1506 => 823,  1502 => 822,  1488 => 811,  1478 => 803,  1476 => 802,  1465 => 794,  1463 => 793,  1452 => 785,  1450 => 784,  1439 => 775,  1435 => 774,  1428 => 768,  1419 => 762,  1415 => 761,  1408 => 755,  1399 => 749,  1395 => 748,  1388 => 742,  1379 => 736,  1375 => 735,  1368 => 729,  1359 => 723,  1354 => 721,  1350 => 720,  1348 => 719,  1344 => 717,  1335 => 710,  1327 => 707,  1324 => 706,  1322 => 705,  1312 => 697,  1304 => 694,  1301 => 693,  1299 => 692,  1289 => 684,  1281 => 681,  1278 => 680,  1276 => 679,  1273 => 678,  1271 => 677,  1260 => 670,  1253 => 666,  1250 => 665,  1248 => 664,  1238 => 656,  1230 => 653,  1227 => 652,  1225 => 651,  1221 => 649,  1212 => 642,  1205 => 639,  1203 => 638,  1200 => 637,  1198 => 636,  1195 => 635,  1186 => 628,  1178 => 625,  1175 => 624,  1173 => 623,  1163 => 615,  1155 => 612,  1152 => 611,  1150 => 610,  1140 => 602,  1132 => 599,  1129 => 598,  1127 => 597,  1117 => 589,  1109 => 586,  1106 => 585,  1104 => 584,  1094 => 576,  1087 => 573,  1085 => 572,  1082 => 571,  1080 => 570,  1070 => 562,  1062 => 559,  1059 => 558,  1057 => 557,  1054 => 556,  1052 => 555,  1047 => 552,  1043 => 551,  1036 => 547,  1027 => 540,  1019 => 537,  1016 => 536,  1014 => 535,  1004 => 527,  996 => 524,  993 => 523,  991 => 522,  988 => 521,  986 => 520,  983 => 519,  974 => 512,  966 => 509,  963 => 508,  961 => 507,  958 => 506,  956 => 505,  953 => 504,  944 => 497,  936 => 494,  933 => 493,  931 => 492,  928 => 491,  926 => 490,  917 => 483,  909 => 480,  906 => 479,  904 => 478,  894 => 470,  886 => 467,  883 => 466,  881 => 465,  871 => 457,  863 => 454,  860 => 453,  858 => 452,  848 => 444,  840 => 441,  837 => 440,  835 => 439,  825 => 431,  817 => 428,  814 => 427,  812 => 426,  802 => 418,  796 => 414,  789 => 410,  783 => 406,  781 => 405,  779 => 404,  769 => 396,  761 => 393,  758 => 392,  756 => 391,  746 => 383,  738 => 380,  735 => 379,  733 => 378,  723 => 370,  717 => 366,  710 => 362,  704 => 358,  702 => 357,  700 => 356,  694 => 352,  690 => 351,  683 => 347,  674 => 340,  666 => 337,  663 => 336,  661 => 335,  658 => 334,  656 => 333,  647 => 326,  639 => 323,  636 => 322,  634 => 321,  624 => 313,  616 => 310,  613 => 309,  611 => 308,  601 => 300,  593 => 297,  590 => 296,  588 => 295,  578 => 287,  570 => 284,  567 => 283,  565 => 282,  559 => 278,  555 => 277,  547 => 272,  541 => 269,  535 => 268,  532 => 267,  529 => 266,  526 => 265,  523 => 264,  520 => 263,  517 => 262,  515 => 261,  512 => 260,  506 => 256,  503 => 254,  500 => 252,  498 => 251,  495 => 250,  488 => 245,  479 => 238,  472 => 235,  470 => 234,  466 => 232,  464 => 231,  455 => 224,  447 => 221,  436 => 212,  428 => 209,  417 => 200,  409 => 197,  398 => 188,  390 => 185,  379 => 176,  371 => 173,  360 => 164,  353 => 161,  351 => 160,  340 => 151,  332 => 148,  321 => 139,  313 => 136,  302 => 127,  294 => 124,  286 => 118,  282 => 116,  277 => 113,  271 => 110,  264 => 105,  255 => 102,  248 => 101,  244 => 100,  238 => 96,  230 => 91,  226 => 89,  221 => 86,  215 => 83,  208 => 78,  199 => 75,  192 => 74,  188 => 73,  182 => 69,  174 => 64,  170 => 62,  165 => 59,  159 => 56,  152 => 51,  143 => 48,  136 => 47,  132 => 46,  126 => 42,  118 => 37,  114 => 35,  109 => 32,  103 => 29,  96 => 24,  87 => 21,  80 => 20,  76 => 19,  70 => 15,  62 => 10,  57 => 8,  53 => 6,  47 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/privileges/privileges_table.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\server\\privileges\\privileges_table.twig");
    }
}
