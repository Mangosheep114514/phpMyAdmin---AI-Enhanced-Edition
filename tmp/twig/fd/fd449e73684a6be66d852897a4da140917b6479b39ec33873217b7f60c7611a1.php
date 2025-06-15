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

/* database/designer/main.twig */
class __TwigTemplate_7d7a9bb4808adfd735581d0c678dfe0c41dfd37d597472bec9c776baa1fc72b2 extends Template
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
        yield "<script type=\"text/javascript\">
var designerConfig = ";
        // line 3
        yield ($context["designer_config"] ?? null);
        yield ";
</script>

";
        // line 7
        if ( !($context["has_query"] ?? null)) {
            // line 8
            yield "    <div id=\"name-panel\">
        <span id=\"page_name\">
            ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((0 === CoreExtension::compare(($context["selected_page"] ?? null), null))) ? (_gettext("Untitled")) : (($context["selected_page"] ?? null))), "html", null, true);
            yield "
        </span>
        <span id=\"saved_state\">
            ";
            // line 13
            yield (((0 === CoreExtension::compare(($context["selected_page"] ?? null), null))) ? ("*") : (""));
            yield "
        </span>
    </div>
";
        }
        // line 17
        yield "<div class=\"designer_header side-menu\" id=\"side_menu\">
    <a class=\"M_butt\" id=\"key_Show_left_menu\" href=\"#\">
        <img title=\"";
yield _gettext("Show/Hide tables list");
        // line 19
        yield "\"
             alt=\"v\"
             src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2_m.png"), "html", null, true);
        yield "\"
             data-down=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2_m.png"), "html", null, true);
        yield "\"
             data-up=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/uparrow2_m.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Show/Hide tables list");
        // line 26
        yield "        </span>
    </a>
    <a href=\"#\" id=\"toggleFullscreen\" class=\"M_butt\">
        <img title=\"";
yield _gettext("View in fullscreen");
        // line 29
        yield "\"
             src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/viewInFullscreen.png"), "html", null, true);
        yield "\"
             data-enter=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/viewInFullscreen.png"), "html", null, true);
        yield "\"
             data-exit=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/exitFullscreen.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\"
              data-exit=\"";
yield _gettext("Exit fullscreen");
        // line 34
        yield "\"
              data-enter=\"";
yield _gettext("View in fullscreen");
        // line 35
        yield "\">
            ";
yield _gettext("View in fullscreen");
        // line 37
        yield "        </span>
    </a>
    <a href=\"#\" id=\"addOtherDbTables\" class=\"M_butt\">
        <img title=\"";
yield _gettext("Add tables from other databases");
        // line 40
        yield "\"
             src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/other_table.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Add tables from other databases");
        // line 44
        yield "        </span>
    </a>
    ";
        // line 46
        if ( !($context["has_query"] ?? null)) {
            // line 47
            yield "        <a id=\"newPage\" href=\"#\" class=\"M_butt\">
            <img title=\"";
yield _gettext("New page");
            // line 48
            yield "\"
                 alt=\"\"
                 src=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_add.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("New page");
            // line 53
            yield "            </span>
        </a>
        <a href=\"#\" id=\"editPage\" class=\"M_butt ajax\">
            <img title=\"";
yield _gettext("Open page");
            // line 56
            yield "\"
                 src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_edit.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Open page");
            // line 60
            yield "            </span>
        </a>
        <a href=\"#\" id=\"savePos\" class=\"M_butt\">
            <img title=\"";
yield _gettext("Save page");
            // line 63
            yield "\"
                 src=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/save.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Save page");
            // line 67
            yield "            </span>
        </a>
        <a href=\"#\" id=\"SaveAs\" class=\"M_butt ajax\">
            <img title=\"";
yield _gettext("Save page as");
            // line 70
            yield "\"
                 src=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/save_as.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Save page as");
            // line 74
            yield "            </span>
        </a>
        <a href=\"#\" id=\"delPages\" class=\"M_butt ajax\">
            <img title=\"";
yield _gettext("Delete pages");
            // line 77
            yield "\"
                 src=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/page_delete.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Delete pages");
            // line 81
            yield "            </span>
        </a>
        <a href=\"#\" id=\"StartTableNew\" class=\"M_butt\">
            <img title=\"";
yield _gettext("Create table");
            // line 84
            yield "\"
                 src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/table.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Create table");
            // line 88
            yield "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"rel_button\">
            <img title=\"";
yield _gettext("Create relationship");
            // line 91
            yield "\"
                 src=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/relation.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Create relationship");
            // line 95
            yield "            </span>
        </a>
        <a href=\"#\" class=\"M_butt\" id=\"display_field_button\">
            <img title=\"";
yield _gettext("Choose column to display");
            // line 98
            yield "\"
                 src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/display_field.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Choose column to display");
            // line 102
            yield "            </span>
        </a>
        <a href=\"#\" id=\"reloadPage\" class=\"M_butt\">
            <img title=\"";
yield _gettext("Reload");
            // line 105
            yield "\"
                 src=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/reload.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Reload");
            // line 109
            yield "            </span>
        </a>
        <a href=\"";
            // line 111
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("faq", "faq6-31");
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"M_butt\">
            <img title=\"";
yield _gettext("Help");
            // line 112
            yield "\"
                 src=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/help.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Help");
            // line 116
            yield "            </span>
        </a>
    ";
        }
        // line 119
        yield "    <a href=\"#\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["params_array"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["angular_direct"] ?? null) : null), "html", null, true);
        yield "\" id=\"angular_direct_button\">
        <img title=\"";
yield _gettext("Angular links");
        // line 120
        yield " / ";
yield _gettext("Direct links");
        yield "\"
             src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/ang_direct.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Angular links");
        // line 123
        yield " / ";
yield _gettext("Direct links");
        // line 124
        yield "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["params_array"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["snap_to_grid"] ?? null) : null), "html", null, true);
        yield "\" id=\"grid_button\">
        <img title=\"";
yield _gettext("Snap to grid");
        // line 127
        yield "\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/grid.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Snap to grid");
        // line 130
        yield "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["params_array"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["small_big_all"] ?? null) : null), "html", null, true);
        yield "\" id=\"key_SB_all\">
        <img title=\"";
yield _gettext("Small/Big All");
        // line 133
        yield "\"
             alt=\"v\"
             src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
             data-down=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
             data-right=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow1.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Small/Big All");
        // line 140
        yield "        </span>
    </a>
    <a href=\"#\" id=\"SmallTabInvert\" class=\"M_butt\">
        <img title=\"";
yield _gettext("Toggle small/big");
        // line 143
        yield "\"
             src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/bottom.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Toggle small/big");
        // line 147
        yield "        </span>
    </a>
    <a href=\"#\" id=\"relLineInvert\" class=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["params_array"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["relation_lines"] ?? null) : null), "html", null, true);
        yield "\" >
        <img title=\"";
yield _gettext("Toggle relationship lines");
        // line 150
        yield "\"
             src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/toggle_lines.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Toggle relationship lines");
        // line 154
        yield "        </span>
    </a>
    ";
        // line 156
        if ( !($context["visual_builder"] ?? null)) {
            // line 157
            yield "        <a href=\"#\" id=\"exportPages\" class=\"M_butt\" >
            <img title=\"";
yield _gettext("Export schema");
            // line 158
            yield "\"
                 src=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/export.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Export schema");
            // line 162
            yield "            </span>
        </a>
    ";
        } else {
            // line 165
            yield "        <a id=\"build_query_button\"
           class=\"M_butt\"
           href=\"#\"
           class=\"M_butt\">
            <img title=\"";
yield _gettext("Build Query");
            // line 169
            yield "\"
                 src=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/query_builder.png"), "html", null, true);
            yield "\">
            <span class=\"hide hidable\">
                ";
yield _gettext("Build Query");
            // line 173
            yield "            </span>
        </a>
    ";
        }
        // line 176
        yield "    <a href=\"#\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["params_array"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["side_menu"] ?? null) : null), "html", null, true);
        yield "\" id=\"key_Left_Right\">
        <img title=\"";
yield _gettext("Move Menu");
        // line 177
        yield "\" alt=\">\"
             data-right=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/2leftarrow_m.png"), "html", null, true);
        yield "\"
             src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/2rightarrow_m.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Move Menu");
        // line 182
        yield "        </span>
    </a>
    <a href=\"#\" class=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["params_array"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["pin_text"] ?? null) : null), "html", null, true);
        yield "\" id=\"pin_Text\">
        <img title=\"";
yield _gettext("Pin text");
        // line 185
        yield "\"
             alt=\">\"
             data-right=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/anchor.png"), "html", null, true);
        yield "\"
             src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/anchor.png"), "html", null, true);
        yield "\">
        <span class=\"hide hidable\">
            ";
yield _gettext("Pin text");
        // line 191
        yield "        </span>
    </a>
</div>
<div id=\"canvas_outer\">
    <form action=\"\" id=\"container-form\" method=\"post\" name=\"form1\">
        <div id=\"osn_tab\">
            <canvas class=\"designer\" id=\"canvas\" width=\"100\" height=\"100\"></canvas>
        </div>
        <div id=\"layer_menu\" class=\"hide\">
            <div class=\"text-center\">
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img title=\"";
yield _gettext("Hide/Show all");
        // line 202
        yield "\"
                        alt=\"v\"
                        id=\"key_HS_all\"
                        src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
                        data-down=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow1.png"), "html", null, true);
        yield "\"
                        data-right=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow1.png"), "html", null, true);
        yield "\">
                </a>
                <a href=\"#\" class=\"M_butt\" target=\"_self\" >
                    <img alt=\"v\"
                        id=\"key_HS\"
                        title=\"";
yield _gettext("Hide/Show tables with no relationship");
        // line 212
        yield "\"
                        src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2.png"), "html", null, true);
        yield "\"
                        data-down=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/downarrow2.png"), "html", null, true);
        yield "\"
                        data-right=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/rightarrow2.png"), "html", null, true);
        yield "\">
                </a>
            </div>
            <div id=\"id_scroll_tab\" class=\"scroll_tab\">
                <table class=\"table table-sm ps-1\"></table>
            </div>
            ";
        // line 222
        yield "            <div class=\"text-center\">
                ";
yield _gettext("Number of tables:");
        // line 223
        yield " <span id=\"tables_counter\">0</span>
            </div>
            <div id=\"layer_menu_sizer\">
                  <img class=\"icon float-start\"
                      id=\"layer_menu_sizer_btn\"
                      data-right=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/resizeright.png"), "html", null, true);
        yield "\"
                      src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/resize.png"), "html", null, true);
        yield "\">
            </div>
        </div>
        ";
        // line 233
        yield "        ";
        yield from         $this->loadTemplate("database/designer/database_tables.twig", "database/designer/main.twig", 233)->unwrap()->yield(CoreExtension::toArray(["db" =>         // line 234
($context["db"] ?? null), "text_dir" =>         // line 235
($context["text_dir"] ?? null), "get_db" =>         // line 236
($context["get_db"] ?? null), "has_query" =>         // line 237
($context["has_query"] ?? null), "tab_pos" =>         // line 238
($context["tab_pos"] ?? null), "display_page" =>         // line 239
($context["display_page"] ?? null), "tab_column" =>         // line 240
($context["tab_column"] ?? null), "tables_all_keys" =>         // line 241
($context["tables_all_keys"] ?? null), "tables_pk_or_unique_keys" =>         // line 242
($context["tables_pk_or_unique_keys"] ?? null), "columns_type" =>         // line 243
($context["columns_type"] ?? null), "tables" =>         // line 244
($context["designerTables"] ?? null)]));
        // line 246
        yield "    </form>
</div>
<div id=\"designer_hint\"></div>
";
        // line 250
        yield "<table id=\"layer_new_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\" >
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless bg-white mb-0 text-center\">
                    <thead>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    ";
yield _gettext("Create relationship");
        // line 272
        yield "                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"foreign_relation\">
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <strong>
                                    FOREIGN KEY
                                </strong>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"text-nowrap\">
                                on delete
                            </td>
                            <td width=\"102\">
                                <select name=\"on_delete\" id=\"on_delete\">
                                    <option value=\"nix\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"text-nowrap\">
                                on update
                            </td>
                            <td>
                                <select name=\"on_update\" id=\"on_update\">
                                    <option value=\"nix\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"CASCADE\">
                                        CASCADE
                                    </option>
                                    <option value=\"SET NULL\">
                                        SET NULL
                                    </option>
                                    <option value=\"NO ACTION\">
                                        NO ACTION
                                    </option>
                                    <option value=\"RESTRICT\">
                                        RESTRICT
                                    </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"text-center text-nowrap\">
                                <input type=\"button\" id=\"ok_new_rel_panel\" class=\"btn btn-secondary butt\"
                                    name=\"Button\" value=\"";
yield _gettext("OK");
        // line 337
        yield "\">
                                <input type=\"button\" id=\"cancel_new_rel_panel\"
                                    class=\"btn btn-secondary butt\" name=\"Button\" value=\"";
yield _gettext("Cancel");
        // line 339
        yield "\">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 361
        yield "<table id=\"layer_upd_relation\" class=\"table table-borderless w-auto hide\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\">
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab p-0\">
                <table class=\"table table-borderless bg-white mb-0 text-center\">
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <strong>
                                ";
yield _gettext("Delete relationship");
        // line 382
        yield "                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=\"3\" class=\"text-center text-nowrap\">
                            <input id=\"del_button\" name=\"Button\" type=\"button\"
                                class=\"btn btn-secondary butt\" value=\"";
yield _gettext("Delete");
        // line 388
        yield "\">
                            <input id=\"cancel_button\" type=\"button\" class=\"btn btn-secondary butt\"
                                name=\"Button\" value=\"";
yield _gettext("Cancel");
        // line 390
        yield "\">
                        </td>
                    </tr>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
        // line 410
        if (($context["has_query"] ?? null)) {
            // line 411
            yield "    ";
            // line 412
            yield "    <table id=\"designer_optionse\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" rowspan=\"2\" id=\"option_col_name\" class=\"text-center text-nowrap\">
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"where\">
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        WHERE
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Relationship operator");
            // line 446
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"rel_opt\" id=\"rel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
yield _gettext("Except");
            // line 475
            yield "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
yield _gettext("Value");
            // line 485
            yield "                                    <br>
                                    ";
yield _gettext("subquery");
            // line 487
            yield "                                </td>
                                <td>
                                    <textarea id=\"Query\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
yield _gettext("Rename to");
            // line 496
            yield "                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("New name");
            // line 502
            yield "                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"new_name\">
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        ";
yield _gettext("Aggregate");
            // line 511
            yield "                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Operator");
            // line 517
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        GROUP BY
                                    </b>
                                </td>
                                <td>
                                    <input type=\"checkbox\" value=\"groupby\" id=\"groupby\">
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-center text-nowrap\">
                                    <b>
                                        ORDER BY
                                    </b>
                                </td>
                                <td>
                                    <select name=\"orderby\" id=\"orderby\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"ASC\" >
                                            ASC
                                        </option>
                                        <option value=\"DESC\">
                                            DESC
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-center text-nowrap\">
                                    <b>
                                        HAVING
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Operator");
            // line 581
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"h_operator\" id=\"h_operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            ";
yield _gettext("None");
            // line 589
            yield "                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Relationship operator");
            // line 611
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"h_rel_opt\" id=\"h_rel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
yield _gettext("Except");
            // line 640
            yield "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Value");
            // line 650
            yield "                                    <br>
                                    ";
yield _gettext("subquery");
            // line 652
            yield "                                </td>
                                <td width=\"102\">
                                    <textarea id=\"having\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"hidden\" id=\"ok_add_object_db_and_table_name_url\" />
                                    <input type=\"hidden\" id=\"ok_add_object_db_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_table_name\" />
                                    <input type=\"hidden\" id=\"ok_add_object_col_name\" />
                                    <input type=\"button\" id=\"ok_add_object\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("OK");
            // line 666
            yield "\">
                                    <input type=\"button\" id=\"cancel_close_option\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("Cancel");
            // line 668
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 690
            yield "    <table id=\"query_rename_to\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
yield _gettext("Rename to");
            // line 712
            yield "                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("New name");
            // line 720
            yield "                                </td>
                                <td width=\"102\">
                                    <input type=\"text\" id=\"e_rename\">
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_rename\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("OK");
            // line 730
            yield "\">
                                    <input id=\"query_rename_to_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
yield _gettext("Cancel");
            // line 734
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 756
            yield "    <table id=\"query_having\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        HAVING
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Operator");
            // line 786
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"hoperator\" id=\"hoperator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"None\" >
                                            None
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <tr>
                                    <td width=\"58\" class=\"text-nowrap\">
                                        ";
yield _gettext("Operator");
            // line 817
            yield "                                    </td>
                                    <td width=\"102\">
                                        <select name=\"hrel_opt\" id=\"hrel_opt\">
                                            <option value=\"--\" selected=\"selected\">
                                                --
                                            </option>
                                            <option value=\"=\">
                                                =
                                            </option>
                                            <option value=\"&gt;\">
                                                &gt;
                                            </option>
                                            <option value=\"&lt;\">
                                                &lt;
                                            </option>
                                            <option value=\"&gt;=\">
                                                &gt;=
                                            </option>
                                            <option value=\"&lt;=\">
                                                &lt;=
                                            </option>
                                            <option value=\"NOT\">
                                                NOT
                                            </option>
                                            <option value=\"IN\">
                                                IN
                                            </option>
                                            <option value=\"EXCEPT\">
                                                ";
yield _gettext("Except");
            // line 846
            yield "                                            </option>
                                            <option value=\"NOT IN\">
                                                NOT IN
                                            </option>
                                        </select>
                                    </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
yield _gettext("Value");
            // line 856
            yield "                                    <br>
                                    ";
yield _gettext("subquery");
            // line 858
            yield "                                </td>
                                <td>
                                    <textarea id=\"hQuery\" cols=\"18\">
                                    </textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_having\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("OK");
            // line 869
            yield "\">
                                    <input id=\"query_having_button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
yield _gettext("Cancel");
            // line 873
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 895
            yield "    <table id=\"query_Aggregate\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        ";
yield _gettext("Aggregate");
            // line 917
            yield "                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Operator");
            // line 925
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"operator\" id=\"e_operator\">
                                        <option value=\"---\" selected=\"selected\">
                                            ---
                                        </option>
                                        <option value=\"sum\" >
                                            SUM
                                        </option>
                                        <option value=\"min\">
                                            MIN
                                        </option>
                                        <option value=\"max\">
                                            MAX
                                        </option>
                                        <option value=\"avg\">
                                            AVG
                                        </option>
                                        <option value=\"count\">
                                            COUNT
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_Aggr\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("OK");
            // line 954
            yield "\">
                                    <input id=\"query_Aggregate_Button\" type=\"button\"
                                        class=\"btn btn-secondary butt\"
                                        name=\"Button\"
                                        value=\"";
yield _gettext("Cancel");
            // line 958
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 980
            yield "    <table id=\"query_where\" class=\"table table-borderless w-auto hide\">
        <tbody>
            <tr>
                <td class=\"frams1\" width=\"10px\">
                </td>
                <td class=\"frams5\" width=\"99%\" >
                </td>
                <td class=\"frams2\" width=\"10px\">
                    <div class=\"bor\">
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"frams8\">
                </td>
                <td class=\"input_tab p-0\">
                    <table class=\"table table-borderless bg-white mb-0 text-center\">
                        <thead>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <strong>
                                        WHERE
                                    </strong>
                                </td>
                            </tr>
                        </thead>
                        <tbody id=\"rename_to\">
                            <tr>
                                <td width=\"58\" class=\"text-nowrap\">
                                    ";
yield _gettext("Operator");
            // line 1010
            yield "                                </td>
                                <td width=\"102\">
                                    <select name=\"erel_opt\" id=\"erel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\" >
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
yield _gettext("Except");
            // line 1039
            yield "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-nowrap\">
                                    ";
yield _gettext("Value");
            // line 1049
            yield "                                    <br>
                                    ";
yield _gettext("subquery");
            // line 1051
            yield "                                </td>
                                <td>
                                    <textarea id=\"eQuery\" cols=\"18\"></textarea>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td colspan=\"2\" class=\"text-center text-nowrap\">
                                    <input type=\"button\" id=\"ok_edit_where\" class=\"btn btn-secondary butt\"
                                        name=\"Button\" value=\"";
yield _gettext("OK");
            // line 1061
            yield "\">
                                    <input id=\"query_where_button\" type=\"button\" class=\"btn btn-secondary butt\" name=\"Button\"
                                           value=\"";
yield _gettext("Cancel");
            // line 1063
            yield "\">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td class=\"frams6\">
                </td>
            </tr>
            <tr>
                <td class=\"frams4\">
                    <div class=\"bor\">
                    </div>
                </td>
                <td class=\"frams7\">
                </td>
                <td class=\"frams3\">
                </td>
            </tr>
        </tbody>
    </table>
    ";
            // line 1085
            yield "    <div class=\"panel\">
        <div class=\"clearfloat\"></div>
        <div id=\"ab\"></div>
        <div class=\"clearfloat\"></div>
    </div>
    <a class=\"trigger\" href=\"#\">";
yield _gettext("Active options");
            // line 1090
            yield "</a>
";
        }
        // line 1092
        yield "<div id=\"PMA_disable_floating_menubar\"></div>
<div class=\"modal fade\" id=\"designerGoModal\" tabindex=\"-1\" aria-labelledby=\"designerGoModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerGoModalLabel\">";
yield _gettext("Loading");
        // line 1097
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Cancel");
        // line 1098
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalGoButton\">";
yield _gettext("Go");
        // line 1102
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Cancel");
        // line 1103
        yield "</button>
      </div>
    </div>
  </div>
</div>
<div class=\"modal fade\" id=\"designerPromptModal\" tabindex=\"-1\" aria-labelledby=\"designerPromptModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-scrollable\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"designerPromptModalLabel\">";
yield _gettext("Loading");
        // line 1112
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
yield _gettext("Cancel");
        // line 1113
        yield "\"></button>
      </div>
      <div class=\"modal-body\"></div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalYesButton\">";
yield _gettext("Yes");
        // line 1117
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalNoButton\">";
yield _gettext("No");
        // line 1118
        yield "</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
yield _gettext("Cancel");
        // line 1119
        yield "</button>
      </div>
    </div>
  </div>
</div>
";
        // line 1124
        if (($context["visual_builder"] ?? null)) {
            // line 1125
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/build_query.twig", ["get_db" => ($context["get_db"] ?? null)]);
            yield "
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/main.twig";
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
        return array (  1597 => 1125,  1595 => 1124,  1588 => 1119,  1584 => 1118,  1580 => 1117,  1573 => 1113,  1569 => 1112,  1557 => 1103,  1553 => 1102,  1546 => 1098,  1542 => 1097,  1534 => 1092,  1530 => 1090,  1522 => 1085,  1499 => 1063,  1494 => 1061,  1481 => 1051,  1477 => 1049,  1465 => 1039,  1434 => 1010,  1402 => 980,  1379 => 958,  1372 => 954,  1340 => 925,  1330 => 917,  1306 => 895,  1283 => 873,  1276 => 869,  1262 => 858,  1258 => 856,  1246 => 846,  1215 => 817,  1182 => 786,  1150 => 756,  1127 => 734,  1120 => 730,  1107 => 720,  1097 => 712,  1073 => 690,  1050 => 668,  1045 => 666,  1028 => 652,  1024 => 650,  1012 => 640,  981 => 611,  957 => 589,  947 => 581,  881 => 517,  873 => 511,  862 => 502,  854 => 496,  843 => 487,  839 => 485,  827 => 475,  796 => 446,  760 => 412,  758 => 411,  756 => 410,  734 => 390,  729 => 388,  720 => 382,  697 => 361,  674 => 339,  669 => 337,  601 => 272,  577 => 250,  572 => 246,  570 => 244,  569 => 243,  568 => 242,  567 => 241,  566 => 240,  565 => 239,  564 => 238,  563 => 237,  562 => 236,  561 => 235,  560 => 234,  558 => 233,  552 => 229,  548 => 228,  541 => 223,  537 => 222,  528 => 215,  524 => 214,  520 => 213,  517 => 212,  508 => 207,  504 => 206,  500 => 205,  495 => 202,  481 => 191,  475 => 188,  471 => 187,  467 => 185,  462 => 184,  458 => 182,  452 => 179,  448 => 178,  445 => 177,  439 => 176,  434 => 173,  428 => 170,  425 => 169,  418 => 165,  413 => 162,  407 => 159,  404 => 158,  400 => 157,  398 => 156,  394 => 154,  388 => 151,  385 => 150,  380 => 149,  376 => 147,  370 => 144,  367 => 143,  361 => 140,  355 => 137,  351 => 136,  347 => 135,  343 => 133,  338 => 132,  334 => 130,  327 => 127,  322 => 126,  318 => 124,  315 => 123,  309 => 121,  304 => 120,  298 => 119,  293 => 116,  287 => 113,  284 => 112,  279 => 111,  275 => 109,  269 => 106,  266 => 105,  260 => 102,  254 => 99,  251 => 98,  245 => 95,  239 => 92,  236 => 91,  230 => 88,  224 => 85,  221 => 84,  215 => 81,  209 => 78,  206 => 77,  200 => 74,  194 => 71,  191 => 70,  185 => 67,  179 => 64,  176 => 63,  170 => 60,  164 => 57,  161 => 56,  155 => 53,  149 => 50,  145 => 48,  141 => 47,  139 => 46,  135 => 44,  129 => 41,  126 => 40,  120 => 37,  116 => 35,  112 => 34,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  89 => 26,  83 => 23,  79 => 22,  75 => 21,  71 => 19,  66 => 17,  59 => 13,  53 => 10,  49 => 8,  47 => 7,  41 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/main.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\designer\\main.twig");
    }
}
