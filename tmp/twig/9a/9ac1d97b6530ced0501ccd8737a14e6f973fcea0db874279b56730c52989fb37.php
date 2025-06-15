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

/* import/javascript.twig */
class __TwigTemplate_ea51ad04ead04ba7900d56baaec864d7be7ba9d4f51e89c677cc02a2d8709ecd extends Template
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
        yield "\$( function() {
    ";
        // line 3
        yield "    \$(\"#buttonGo\").on(\"click\", function() {
        ";
        // line 5
        yield "        \$(\"#upload_form_form\").css(\"display\", \"none\");

        ";
        // line 7
        if ((0 !== CoreExtension::compare(($context["handler"] ?? null), "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin"))) {
            // line 8
            yield "            ";
            // line 9
            yield "            ";
            $context["ajax_url"] = (("index.php?route=/import-status&id=" . ($context["upload_id"] ?? null)) . PhpMyAdmin\Url::getCommonRaw(["import_status" => 1], "&"));
            // line 12
            yield "            ";
            $context["promot_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("The file being uploaded is probably larger than the maximum allowed size or this is a known bug in webkit based (Safari, Google Chrome, Arora etc.) browsers."), false);
            // line 13
            yield "            ";
            $context["statustext_str"] = PhpMyAdmin\Sanitize::escapeJsString(_gettext("%s of %s"));
            // line 14
            yield "            ";
            $context["second_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("%s/sec."), false);
            // line 15
            yield "            ";
            $context["remaining_min"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("About %MIN min. %SEC sec. remaining."), false);
            // line 16
            yield "            ";
            $context["remaining_second"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("About %SEC sec. remaining."), false);
            // line 17
            yield "            ";
            $context["processed_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("The file is being processed, please be patient."), false);
            // line 18
            yield "            ";
            $context["import_url"] = PhpMyAdmin\Url::getCommonRaw(["import_status" => 1], "&");
            // line 19
            yield "
            ";
            // line 20
            $context["upload_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 21
                yield "                    <div class=\"upload_progress\">
                        <div class=\"upload_progress_bar_outer\">
                            <div class=\"percentage\"></div>
                            <div id=\"status\" class=\"upload_progress_bar_inner\">
                                <div class=\"percentage\"></div>
                            </div>
                        </div>
                        <div>
                            <img src=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
                yield "\" width=\"16\" height=\"16\" alt=\"ajax clock\"> ";
                yield PhpMyAdmin\Sanitize::jsFormat(_gettext("Uploading your import file…"), false);
                // line 30
                yield "</div>
                        <div id=\"statustext\"></div>
                    </div>
            ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield "
            ";
            // line 36
            yield "            var finished = false;
            var percent  = 0.0;
            var total    = 0;
            var complete = 0;
            var original_title = parent && parent.document ? parent.document.title : false;
            var import_start;

            var perform_upload = function () {
            new \$.getJSON(
                \"";
            // line 45
            yield ($context["ajax_url"] ?? null);
            yield "\",
                {},
                function(response) {
                    finished = response.finished;
                    percent = response.percent;
                    total = response.total;
                    complete = response.complete;

                    if (total==0 && complete==0 && percent==0) {
                        \$(\"#upload_form_status_info\").html('<img src=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
            yield "\" width=\"16\" height=\"16\" alt=\"ajax clock\"> ";
            yield ($context["promot_str"] ?? null);
            yield "');
                        \$(\"#upload_form_status\").css(\"display\", \"none\");
                    } else {
                        var now = new Date();
                        now = Date.UTC(
                            now.getFullYear(),
                            now.getMonth(),
                            now.getDate(),
                            now.getHours(),
                            now.getMinutes(),
                            now.getSeconds())
                            + now.getMilliseconds() - 1000;
                        var statustext = Functions.sprintf(
                            \"";
            // line 67
            yield ($context["statustext_str"] ?? null);
            yield "\",
                            Functions.formatBytes(
                                complete, 1, Messages.strDecimalSeparator
                            ),
                            Functions.formatBytes(
                                total, 1, Messages.strDecimalSeparator
                            )
                        );

                        if (\$(\"#importmain\").is(\":visible\")) {
                            ";
            // line 78
            yield "                            \$(\"#importmain\").hide();
                            \$(\"#import_form_status\")
                            .html('";
            // line 80
            yield ($context["upload_html"] ?? null);
            yield "')
                            .show();
                            import_start = now;
                        }
                        else if (percent > 9 || complete > 2000000) {
                            ";
            // line 86
            yield "                            var used_time = now - import_start;
                            var seconds = parseInt(((total - complete) / complete) * used_time / 1000);
                            var speed = Functions.sprintf(
                                \"";
            // line 89
            yield ($context["second_str"] ?? null);
            yield "\",
                                Functions.formatBytes(complete / used_time * 1000, 1, Messages.strDecimalSeparator)
                            );

                            var minutes = parseInt(seconds / 60);
                            seconds %= 60;
                            var estimated_time;
                            if (minutes > 0) {
                                estimated_time = \"";
            // line 97
            yield ($context["remaining_min"] ?? null);
            yield "\"
                                    .replace(\"%MIN\", minutes)
                                    .replace(\"%SEC\", seconds);
                            }
                            else {
                                estimated_time = \"";
            // line 102
            yield ($context["remaining_second"] ?? null);
            yield "\"
                                .replace(\"%SEC\", seconds);
                            }

                            statustext += \"<br>\" + speed + \"<br><br>\" + estimated_time;
                        }

                        var percent_str = Math.round(percent) + \"%\";
                        \$(\"#status\").animate({width: percent_str}, 150);
                        \$(\".percentage\").text(percent_str);

                        ";
            // line 114
            yield "                        if (original_title !== false) {
                            parent.document.title
                                = percent_str + \" - \" + original_title;
                        }
                        else {
                            document.title
                                = percent_str + \" - \" + original_title;
                        }
                        \$(\"#statustext\").html(statustext);
                    }

                    if (finished == true) {
                        if (original_title !== false) {
                            parent.document.title = original_title;
                        }
                        else {
                            document.title = original_title;
                        }
                        \$(\"#importmain\").hide();
                        ";
            // line 134
            yield "                        \$(\"#import_form_status\")
                        .html('<img src=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
            yield "\" width=\"16\" height=\"16\" alt=\"ajax clock\"> ";
            yield ($context["processed_str"] ?? null);
            yield "')
                        .show();
                        \$(\"#import_form_status\").load(\"index.php?route=/import-status&message=true&";
            // line 137
            yield ($context["import_url"] ?? null);
            yield "\");
                        Navigation.reload();

                        ";
            // line 141
            yield "                    }
                    else {
                        setTimeout(perform_upload, 1000);
                    }
                });
            };
            setTimeout(perform_upload, 1000);
        ";
        } else {
            // line 149
            yield "            ";
            // line 150
            yield "            ";
            $context["image_tag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 151
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PhpMyAdmin\Twig\AssetExtension']->getImagePath("ajax_clock_small.gif"), "html", null, true);
                yield "\" width=\"16\" height=\"16\" alt=\"ajax clock\">";
                // line 152
                yield PhpMyAdmin\Sanitize::jsFormat(_gettext("Please be patient, the file is being uploaded. Details about the upload are not available."), false);
                // line 153
                yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq2-9");
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 155
            yield "            \$('#upload_form_status_info').html('";
            yield ($context["image_tag"] ?? null);
            yield "');
            \$(\"#upload_form_status\").css(\"display\", \"none\");
        ";
        }
        // line 158
        yield "    });
});
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "import/javascript.twig";
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
        return array (  278 => 158,  271 => 155,  267 => 153,  265 => 152,  261 => 151,  258 => 150,  256 => 149,  246 => 141,  240 => 137,  233 => 135,  230 => 134,  209 => 114,  195 => 102,  187 => 97,  176 => 89,  171 => 86,  163 => 80,  159 => 78,  146 => 67,  128 => 54,  116 => 45,  105 => 36,  102 => 34,  95 => 30,  91 => 29,  81 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 9,  50 => 8,  48 => 7,  44 => 5,  41 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "import/javascript.twig", "O:\\panzuowen\\arbitrary\\phpmyadmin522\\templates\\import\\javascript.twig");
    }
}
