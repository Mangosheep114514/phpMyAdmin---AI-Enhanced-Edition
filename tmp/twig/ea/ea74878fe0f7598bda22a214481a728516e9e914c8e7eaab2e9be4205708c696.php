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

/* database/designer/database_tables.twig */
class __TwigTemplate_c1f1633f3ee1e1d434200f1acbdb14744fccbf8a21eb9872dc1b714976efc09b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["designerTable"]) {
            // line 2
            yield "    ";
            $context["i"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 2);
            // line 3
            yield "    ";
            $context["t_n_url"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDbTableString", [], "method", false, false, false, 3), "url");
            // line 4
            yield "    ";
            $context["db"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 4);
            // line 5
            yield "    ";
            $context["db_url"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "url");
            // line 6
            yield "    ";
            $context["t_n"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDbTableString", [], "method", false, false, false, 6);
            // line 7
            yield "    ";
            $context["table_name"] = $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 7), "html");
            // line 8
            yield "    <input name=\"t_x[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_x_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_y[";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_y_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_v[";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_v_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <input name=\"t_h[";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "]\" type=\"hidden\" id=\"t_h_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "_\" />
    <table id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
        db_url=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 13), "url"), "html", null, true);
            yield "\"
        table_name_url=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 14), "url"), "html", null, true);
            yield "\"
        cellpadding=\"0\"
        cellspacing=\"0\"
        class=\"table table-sm table-striped table-hover w-auto designer_tab\"
        style=\"position:absolute; ";
            // line 18
            yield (((0 === CoreExtension::compare(($context["text_dir"] ?? null), "rtl"))) ? ("right") : ("left"));
            yield ":";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 19)) ? ((($__internal_compile_0 = (($__internal_compile_1 = ($context["tab_pos"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["X"] ?? null) : null)) : (Twig\Extension\CoreExtension::random($this->env->getCharset(), range(20, 700)))), "html", null, true);
            yield "px; top:";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 20)) ? ((($__internal_compile_2 = (($__internal_compile_3 = ($context["tab_pos"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Y"] ?? null) : null)) : (Twig\Extension\CoreExtension::random($this->env->getCharset(), range(20, 550)))), "html", null, true);
            yield "px; display:";
            // line 21
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 21) || (0 === CoreExtension::compare(($context["display_page"] ?? null),  -1)))) ? ("block") : ("none"));
            yield "; z-index: 1;\"> <!--\"-->
        <thead>
            <tr class=\"header\">
                ";
            // line 24
            if (($context["has_query"] ?? null)) {
                // line 25
                yield "                    <td class=\"select_all\">
                        <input class=\"select_all_1\"
                            type=\"checkbox\"
                            style=\"margin: 0;\"
                            value=\"select_all_";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "\"
                            id=\"select_all_";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                yield "\"
                            title=\"";
yield _gettext("Select all");
                // line 31
                yield "\"
                            table_name=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                yield "\"
                            db_name=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                yield "\">
                    </td>
                ";
            }
            // line 36
            yield "                <td class=\"small_tab\"
                    title=\"";
yield _gettext("Show/hide columns");
            // line 37
            yield "\"
                    id=\"id_hide_tbody_";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    table_name=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\">";
            yield ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 39) ||  !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_4 = (($__internal_compile_5 = ($context["tab_pos"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["V"] ?? null) : null)))) ? ("v") : ("&gt;"));
            yield "</td>
                <td class=\"small_tab_pref small_tab_pref_1\"
                    db=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 41), "html", null, true);
            yield "\"
                    db_url=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 42), "url"), "html", null, true);
            yield "\"
                    table_name=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 43), "html", null, true);
            yield "\"
                    table_name_url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 44), "url"), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/exec_small.png"), "html", null, true);
            yield "\"
                        title=\"";
yield _gettext("See table structure");
            // line 46
            yield "\">
                </td>
                <td id=\"id_zag_";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    class=\"tab_zag text-nowrap tab_zag_noquery\"
                    table_name=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"
                    query_set=\"";
            // line 51
            yield ((($context["has_query"] ?? null)) ? (1) : (0));
            yield "\">
                    <span class=\"owner\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDatabaseName", [], "method", false, false, false, 52), "html", null, true);
            yield "</span>
                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 53), "html", null, true);
            yield "
                </td>
                ";
            // line 55
            if (($context["has_query"] ?? null)) {
                // line 56
                yield "                    <td class=\"tab_zag tab_zag_query\"
                        id=\"id_zag_";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "_2\"
                        table_name=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield "\">
                    </td>
               ";
            }
            // line 61
            yield "            </tr>
        </thead>
        <tbody id=\"id_tbody_";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
            yield "\"";
            // line 64
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["tab_pos"] ?? null), ($context["t_n"] ?? null), [], "array", true, true, false, 64) && Twig\Extension\CoreExtension::testEmpty((($__internal_compile_6 = (($__internal_compile_7 = ($context["tab_pos"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["V"] ?? null) : null)))) ? (" style=\"display: none\"") : (""));
            yield ">
            ";
            // line 65
            $context["display_field"] = CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getDisplayField", [], "method", false, false, false, 65);
            // line 66
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($__internal_compile_8 = (($__internal_compile_9 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["COLUMN_ID"] ?? null) : null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 67
                yield "                ";
                $context["col_name"] = (($__internal_compile_10 = (($__internal_compile_11 = (($__internal_compile_12 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[$context["j"]] ?? null) : null);
                // line 68
                yield "                ";
                $context["tmp_column"] = ((($context["t_n"] ?? null) . ".") . (($__internal_compile_13 = (($__internal_compile_14 = (($__internal_compile_15 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["j"]] ?? null) : null));
                // line 69
                yield "                ";
                $context["click_field_param"] = [$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["designerTable"], "getTableName", [], "method", false, false, false, 70), "url"), Twig\Extension\CoreExtension::urlencode((($__internal_compile_16 = (($__internal_compile_17 = (($__internal_compile_18 =                 // line 71
($context["tab_column"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["j"]] ?? null) : null))];
                // line 73
                yield "                ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "supportsForeignkeys", [], "method", false, false, false, 73)) {
                    // line 74
                    yield "                    ";
                    $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [((CoreExtension::getAttribute($this->env, $this->source, ($context["tables_pk_or_unique_keys"] ?? null), ($context["tmp_column"] ?? null), [], "array", true, true, false, 74)) ? (1) : (0))]);
                    // line 75
                    yield "                ";
                } else {
                    // line 76
                    yield "                    ";
                    // line 78
                    yield "                    ";
                    $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [((CoreExtension::getAttribute($this->env, $this->source, ($context["tables_all_keys"] ?? null), ($context["tmp_column"] ?? null), [], "array", true, true, false, 78)) ? (1) : (0))]);
                    // line 79
                    yield "                ";
                }
                // line 80
                yield "                ";
                $context["click_field_param"] = Twig\Extension\CoreExtension::merge(($context["click_field_param"] ?? null), [($context["db"] ?? null)]);
                // line 81
                yield "                <tr id=\"id_tr_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["designerTable"], "getTableName", [], "method", false, false, false, 81), "url"), "html", null, true);
                yield ".";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = (($__internal_compile_20 = (($__internal_compile_21 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[$context["j"]] ?? null) : null), "html", null, true);
                yield "\" class=\"tab_field";
                // line 82
                yield (((0 === CoreExtension::compare(($context["display_field"] ?? null), (($__internal_compile_22 = (($__internal_compile_23 = (($__internal_compile_24 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["j"]] ?? null) : null)))) ? ("_3") : (""));
                yield "\" click_field_param=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["click_field_param"] ?? null), ","), "html", null, true);
                yield "\">
                    ";
                // line 84
                if (($context["has_query"] ?? null)) {
                    // line 85
                    yield "                        <td class=\"select_all\">
                            <input class=\"select_all_store_col\"
                                value=\"";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($__internal_compile_25 = (($__internal_compile_26 = (($__internal_compile_27 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["j"]] ?? null) : null)), "html", null, true);
                    yield "\"
                                type=\"checkbox\"
                                id=\"select_";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield "._";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($__internal_compile_28 = (($__internal_compile_29 = (($__internal_compile_30 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["j"]] ?? null) : null)), "html", null, true);
                    yield "\"
                                style=\"margin: 0;\"
                                title=\"";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Select \"%s\""), ($context["col_name"] ?? null)), "html", null, true);
                    yield "\"
                                id_check_all=\"select_all_";
                    // line 92
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["i"] ?? null), "html", null, true);
                    yield "\"
                                db_name=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                    yield "\"
                                table_name=\"";
                    // line 94
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                    yield "\"
                                col_name=\"";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
                    yield "\">
                        </td>
                    ";
                }
                // line 98
                yield "                    <td width=\"10px\" colspan=\"3\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                yield ".";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($__internal_compile_31 = (($__internal_compile_32 = (($__internal_compile_33 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["j"]] ?? null) : null)), "html", null, true);
                yield "\">
                        <div class=\"text-nowrap\">
                            ";
                // line 101
                $context["type"] = (($__internal_compile_34 = ($context["columns_type"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[((($context["t_n"] ?? null) . ".") . (($__internal_compile_35 = (($__internal_compile_36 = (($__internal_compile_37 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[$context["j"]] ?? null) : null))] ?? null) : null);
                // line 102
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath(($context["type"] ?? null)), "html", null, true);
                yield ".png\" alt=\"*\">
                            ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_38 = (($__internal_compile_39 = (($__internal_compile_40 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["COLUMN_NAME"] ?? null) : null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[$context["j"]] ?? null) : null), "html", null, true);
                yield " : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_41 = (($__internal_compile_42 = (($__internal_compile_43 = ($context["tab_column"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[($context["t_n"] ?? null)] ?? null) : null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["TYPE"] ?? null) : null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[$context["j"]] ?? null) : null), "html", null, true);
                yield "
                        </div>
                    </td>
                    ";
                // line 106
                if (($context["has_query"] ?? null)) {
                    // line 107
                    yield "                        <td class=\"small_tab_pref small_tab_pref_click_opt\"
                            ";
                    // line 109
                    yield "                            option_col_name_modal=\"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_gettext("Add an option for column \"%s\"."), ($context["col_name"] ?? null)), "html"), "html");
                    yield "</strong>\"
                            db_name=\"";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["db"] ?? null), "html", null, true);
                    yield "\"
                            table_name=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["table_name"] ?? null), "html", null, true);
                    yield "\"
                            col_name=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["col_name"] ?? null), "html", null, true);
                    yield "\"
                            db_table_name_url=\"";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["t_n_url"] ?? null), "html", null, true);
                    yield "\">
                            <img src=\"";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("designer/exec_small.png"), "html", null, true);
                    yield "\" title=\"";
yield _gettext("Options");
                    yield "\" />
                        </td>
                    ";
                }
                // line 117
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "        </tbody>
    </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['designerTable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "database/designer/database_tables.twig";
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
        return array (  406 => 119,  399 => 117,  391 => 114,  387 => 113,  383 => 112,  379 => 111,  375 => 110,  370 => 109,  367 => 107,  365 => 106,  357 => 103,  352 => 102,  350 => 101,  345 => 99,  341 => 98,  335 => 95,  331 => 94,  327 => 93,  323 => 92,  319 => 91,  312 => 89,  306 => 87,  302 => 85,  300 => 84,  296 => 83,  293 => 82,  287 => 81,  284 => 80,  281 => 79,  278 => 78,  276 => 76,  273 => 75,  270 => 74,  267 => 73,  265 => 71,  264 => 70,  262 => 69,  259 => 68,  256 => 67,  251 => 66,  249 => 65,  245 => 64,  242 => 63,  238 => 61,  232 => 58,  228 => 57,  225 => 56,  223 => 55,  218 => 53,  214 => 52,  210 => 51,  206 => 50,  201 => 48,  197 => 46,  192 => 45,  188 => 44,  184 => 43,  180 => 42,  176 => 41,  169 => 39,  165 => 38,  162 => 37,  158 => 36,  152 => 33,  148 => 32,  145 => 31,  140 => 30,  136 => 29,  130 => 25,  128 => 24,  122 => 21,  119 => 20,  116 => 19,  113 => 18,  106 => 14,  102 => 13,  98 => 12,  92 => 11,  86 => 10,  80 => 9,  73 => 8,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/database_tables.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\database\\designer\\database_tables.twig");
    }
}
