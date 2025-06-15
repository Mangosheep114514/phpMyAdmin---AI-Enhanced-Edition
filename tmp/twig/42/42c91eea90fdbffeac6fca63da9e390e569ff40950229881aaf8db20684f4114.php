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

/* columns_definitions/partitions.twig */
class __TwigTemplate_1b3da67bb2cb8e6e0295cb610c57cb5c9dcea710985b5917581560f50982de86 extends Template
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
        $context["partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY", "RANGE", "RANGE COLUMNS", "LIST", "LIST COLUMNS"];
        // line 12
        $context["sub_partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY"];
        // line 13
        $context["value_type_options"] = ["", "LESS THAN", "LESS THAN MAXVALUE", "IN"];
        // line 14
        yield "
<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">";
yield _gettext("Partition by:");
        // line 17
        yield "</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["partition_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\"";
            // line 22
            if ((0 === CoreExtension::compare((($__internal_compile_0 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["partition_by"] ?? null) : null), $context["option"]))) {
                // line 23
                yield "                            selected=\"selected\"";
            }
            // line 24
            yield ">
                        ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"";
yield _gettext("Expression or column list");
        // line 32
        yield "\"
                value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["partition_expr"] ?? null) : null), "html", null, true);
        yield "\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">";
yield _gettext("Partitions:");
        // line 37
        yield "</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"";
        // line 40
        (((($__internal_compile_2 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["partition_count"] ?? null) : null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["partition_count"] ?? null) : null), "html", null, true)) : (yield ""));
        yield "\">
        </td>
    </tr>
    ";
        // line 43
        if ((($__internal_compile_4 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["can_have_subpartitions"] ?? null) : null)) {
            // line 44
            yield "        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">";
yield _gettext("Subpartition by:");
            // line 45
            yield "</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sub_partition_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "\"";
                // line 50
                if ((0 === CoreExtension::compare((($__internal_compile_5 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["subpartition_by"] ?? null) : null), $context["option"]))) {
                    // line 51
                    yield "                            selected=\"selected\"";
                }
                // line 52
                yield ">
                        ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"";
yield _gettext("Expression or column list");
            // line 60
            yield "\"
                    value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["subpartition_expr"] ?? null) : null), "html", null, true);
            yield "\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">";
yield _gettext("Subpartitions:");
            // line 65
            yield "</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"";
            // line 68
            (((($__internal_compile_7 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["subpartition_count"] ?? null) : null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_8 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["subpartition_count"] ?? null) : null), "html", null, true)) : (yield ""));
            yield "\">
            </td>
        </tr>
    ";
        }
        // line 72
        yield "</table>
";
        // line 73
        if ((1 === CoreExtension::compare((($__internal_compile_9 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["partition_count"] ?? null) : null), 1))) {
            // line 74
            yield "    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>";
yield _gettext("Partition");
            // line 76
            yield "</th>
            ";
            // line 77
            if ((($__internal_compile_10 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["value_enabled"] ?? null) : null)) {
                // line 78
                yield "                <th>";
yield _gettext("Values");
                yield "</th>
            ";
            }
            // line 80
            yield "            ";
            if (((($__internal_compile_11 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["can_have_subpartitions"] ?? null) : null) && (1 === CoreExtension::compare((($__internal_compile_12 =             // line 81
($context["partition_details"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["subpartition_count"] ?? null) : null), 1)))) {
                // line 82
                yield "                <th>";
yield _gettext("Subpartition");
                yield "</th>
            ";
            }
            // line 84
            yield "            <th>";
yield _gettext("Engine");
            yield "</th>
            <th>";
yield _gettext("Comment");
            // line 85
            yield "</th>
            <th>";
yield _gettext("Data directory");
            // line 86
            yield "</th>
            <th>";
yield _gettext("Index directory");
            // line 87
            yield "</th>
            <th>";
yield _gettext("Max rows");
            // line 88
            yield "</th>
            <th>";
yield _gettext("Min rows");
            // line 89
            yield "</th>
            <th>";
yield _gettext("Table space");
            // line 90
            yield "</th>
            <th>";
yield _gettext("Node group");
            // line 91
            yield "</th>
        </tr></thead>
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((($__internal_compile_13 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["partitions"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 94
                yield "            ";
                $context["rowspan"] = (( !Twig\Extension\CoreExtension::testEmpty((($__internal_compile_14 = $context["partition"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["subpartition_count"] ?? null) : null))) ? (((($__internal_compile_15 =                 // line 95
$context["partition"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["subpartition_count"] ?? null) : null) + 1)) : (2));
                // line 96
                yield "            <tr>
                <td rowspan=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"text\" name=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = $context["partition"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["prefix"] ?? null) : null), "html", null, true);
                yield "[name]\"
                        value=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_17 = $context["partition"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["name"] ?? null) : null), "html", null, true);
                yield "\">
                </td>
                ";
                // line 101
                if ((($__internal_compile_18 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["value_enabled"] ?? null) : null)) {
                    // line 102
                    yield "                    <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rowspan"] ?? null), "html", null, true);
                    yield "\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_19 = $context["partition"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["prefix"] ?? null) : null), "html", null, true);
                    yield "[value_type]\">
                            ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["value_type_options"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 106
                        yield "                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "\"";
                        // line 107
                        if ((0 === CoreExtension::compare((($__internal_compile_20 = $context["partition"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["value_type"] ?? null) : null), $context["option"]))) {
                            // line 108
                            yield "                                        selected=\"selected\"";
                        }
                        // line 109
                        yield ">
                                    ";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "
                                </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    yield "                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = $context["partition"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["prefix"] ?? null) : null), "html", null, true);
                    yield "[value]\"
                            value=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_22 = $context["partition"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["value"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                ";
                }
                // line 119
                yield "            </tr>

            ";
                // line 121
                if (CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", true, true, false, 121)) {
                    // line 122
                    yield "                ";
                    $context["subpartitions"] = (($__internal_compile_23 = $context["partition"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["subpartitions"] ?? null) : null);
                    // line 123
                    yield "            ";
                } else {
                    // line 124
                    yield "                ";
                    $context["subpartitions"] = [$context["partition"]];
                    // line 125
                    yield "            ";
                }
                // line 126
                yield "
            ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["subpartitions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["subpartition"]) {
                    // line 128
                    yield "                <tr>
                    ";
                    // line 129
                    if (((($__internal_compile_24 = ($context["partition_details"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["can_have_subpartitions"] ?? null) : null) && (1 === CoreExtension::compare((($__internal_compile_25 =                     // line 130
($context["partition_details"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["subpartition_count"] ?? null) : null), 1)))) {
                        // line 131
                        yield "                        <td>
                            <input type=\"text\" name=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_26 = $context["subpartition"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["prefix"] ?? null) : null), "html", null, true);
                        yield "[name]\"
                                value=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_27 = $context["subpartition"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["name"] ?? null) : null), "html", null, true);
                        yield "\">
                        </td>
                    ";
                    }
                    // line 136
                    yield "                    <td>
                      <select name=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_28 = $context["subpartition"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["prefix"] ?? null) : null), "html", null, true);
                    yield "[engine]\" aria-label=\"";
yield _gettext("Storage engine");
                    yield "\">
                        <option value=\"\"></option>
                        ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["storage_engines"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                        // line 140
                        yield "                          <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
                        yield "\"";
                        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) {
                            yield " title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                            yield "\"";
                        }
                        // line 141
                        yield (((0 === CoreExtension::compare(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)), Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($__internal_compile_29 = $context["subpartition"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["engine"] ?? null) : null))))) ? (" selected") : (""));
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
                    yield "                      </select>
                    </td>
                    <td>
                        <textarea name=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_30 = $context["subpartition"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["prefix"] ?? null) : null), "html", null, true);
                    yield "[comment]\">";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_31 = $context["subpartition"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["comment"] ?? null) : null), "html", null, true);
                    // line 150
                    yield "</textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_32 = $context["subpartition"]) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["prefix"] ?? null) : null), "html", null, true);
                    yield "[data_directory]\"
                            value=\"";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_33 = $context["subpartition"]) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["data_directory"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_34 = $context["subpartition"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["prefix"] ?? null) : null), "html", null, true);
                    yield "[index_directory]\"
                            value=\"";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_35 = $context["subpartition"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["index_directory"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_36 = $context["subpartition"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["prefix"] ?? null) : null), "html", null, true);
                    yield "[max_rows]\"
                            value=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_37 = $context["subpartition"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["max_rows"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_38 = $context["subpartition"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["prefix"] ?? null) : null), "html", null, true);
                    yield "[min_rows]\"
                            value=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_39 = $context["subpartition"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["min_rows"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_40 = $context["subpartition"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["prefix"] ?? null) : null), "html", null, true);
                    yield "[tablespace]\"
                            value=\"";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_41 = $context["subpartition"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["tablespace"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_42 = $context["subpartition"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["prefix"] ?? null) : null), "html", null, true);
                    yield "[node_group]\"
                            value=\"";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_43 = $context["subpartition"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["node_group"] ?? null) : null), "html", null, true);
                    yield "\">
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpartition'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "    </table>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "columns_definitions/partitions.twig";
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
        return array (  479 => 179,  473 => 178,  463 => 174,  459 => 173,  453 => 170,  449 => 169,  443 => 166,  439 => 165,  433 => 162,  429 => 161,  423 => 158,  419 => 157,  413 => 154,  409 => 153,  404 => 150,  402 => 149,  399 => 148,  394 => 145,  387 => 143,  385 => 142,  382 => 141,  373 => 140,  369 => 139,  362 => 137,  359 => 136,  353 => 133,  349 => 132,  346 => 131,  344 => 130,  343 => 129,  340 => 128,  336 => 127,  333 => 126,  330 => 125,  327 => 124,  324 => 123,  321 => 122,  319 => 121,  315 => 119,  309 => 116,  305 => 115,  301 => 113,  292 => 110,  289 => 109,  286 => 108,  284 => 107,  280 => 106,  276 => 105,  272 => 104,  266 => 102,  264 => 101,  259 => 99,  255 => 98,  251 => 97,  248 => 96,  246 => 95,  244 => 94,  240 => 93,  236 => 91,  232 => 90,  228 => 89,  224 => 88,  220 => 87,  216 => 86,  212 => 85,  206 => 84,  200 => 82,  198 => 81,  196 => 80,  190 => 78,  188 => 77,  185 => 76,  180 => 74,  178 => 73,  175 => 72,  168 => 68,  163 => 65,  155 => 61,  152 => 60,  145 => 56,  136 => 53,  133 => 52,  130 => 51,  128 => 50,  124 => 49,  120 => 48,  115 => 45,  111 => 44,  109 => 43,  103 => 40,  98 => 37,  90 => 33,  87 => 32,  80 => 28,  71 => 25,  68 => 24,  65 => 23,  63 => 22,  59 => 21,  55 => 20,  50 => 17,  44 => 14,  42 => 13,  40 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/partitions.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\columns_definitions\\partitions.twig");
    }
}
