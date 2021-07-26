<?php

/* overall_footer.html */
class __TwigTemplate_a2e3762499660b24be9b53decdd070dfa2d68ce0bbb06f0cfa4ecfca1181a93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t";
        // line 2
        echo "</div>

";
        // line 4
        // line 5
        echo "
\t<div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
\t\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        echo ($context["CREDIT_LINE"] ?? null);
        echo "
\t\t";
        // line 12
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        echo "<br />
\t\tStyle: Green-Style by Joyce&Luna <a href=\"https://phpbb-Style-design.de\">phpBB-Style-Design</a>
\t\t";
        // line 14
        // line 15
        echo "\t\t";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 16
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            echo "<br /><strong><a href=\"";
            echo ($context["U_ACP"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
            echo "</a></strong>";
        }
        // line 17
        echo "   </div>

\t\t<div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t<div id=\"darken\" class=\"darken\">&nbsp;</div>
\t\t</div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\">
\t\t\t\t<i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>
\t</div>

</div>
</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 42
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 43
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 45
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>
";
        // line 46
        if (($context["S_ALLOW_CDN"] ?? null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 47
        echo "<script type=\"text/javascript\" src=\"";
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
";
        // line 48
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('36');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 49
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('36');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 50
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 51
            echo "\t<script type=\"text/javascript\">
\t\t(function(\$){
\t\t\tvar \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
\t\t\t\t\$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
\t\t\tif (\$span.css('fontFamily') !== 'FontAwesome' ) { 
\t\t\t\t\$fa_cdn.after('<link href=\"";
            // line 56
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
\t\t\t\t\$fa_cdn.remove();
\t\t\t}
\t\t\t\$span.remove();
\t\t})(jQuery);
\t</script>
";
        }
        // line 63
        echo "
";
        // line 64
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 65
            echo "\t<script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
\t<script>
\t\twindow.addEventListener(\"load\", function(){
\t\t\twindow.cookieconsent.initialise({
\t\t\t\t\"palette\": {
\t\t\t\t\t\"popup\": {
\t\t\t\t\t\t\"background\": \"#0F538A\"
\t\t\t\t\t},
\t\t\t\t\t\"button\": {
\t\t\t\t\t\t\"background\": \"#E5E5E5\"
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\t\"theme\": \"classic\",
\t\t\t\t\"content\": {
\t\t\t\t\t\"message\": \"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
\t\t\t\t\t\"dismiss\": \"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
\t\t\t\t\t\"link\": \"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\"href\": \"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COOKIE_CONSENT_HREF"), "js");
            echo "\"
\t\t\t\t}
\t\t\t})});
\t</script>
";
        }
        // line 87
        echo "
";
        // line 88
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 89
        echo "
";
        // line 90
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 91
        echo $this->getAttribute(($context["definition"] ?? null), "SCRIPTS", array());
        echo "

";
        // line 93
        // line 94
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 94,  262 => 93,  257 => 91,  243 => 90,  240 => 89,  235 => 88,  232 => 87,  224 => 82,  220 => 81,  216 => 80,  212 => 79,  192 => 65,  190 => 64,  187 => 63,  177 => 56,  170 => 51,  168 => 50,  157 => 49,  146 => 48,  139 => 47,  131 => 46,  127 => 45,  123 => 43,  119 => 42,  95 => 23,  80 => 19,  76 => 17,  67 => 16,  61 => 15,  60 => 14,  52 => 12,  47 => 11,  46 => 10,  42 => 8,  30 => 7,  26 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_footer.html", "");
    }
}
