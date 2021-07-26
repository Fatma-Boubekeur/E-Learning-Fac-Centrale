<?php

/* overall_header.html */
class __TwigTemplate_c415bfaf937b2dd9f71e7e1b5ba62a910da0c80aa130b9449cf1d6b4c558c124 extends Twig_Template
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
        echo "<?php 
session_start();
?>


<!DOCTYPE html>
<html dir=\"";
        // line 7
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 12
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 13
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 15
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 17
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 18
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 19
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 20
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 21
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => ($context["S_FORUM_ID"] ?? null)));
                echo "\">";
            }
            // line 22
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => ($context["S_TOPIC_ID"] ?? null)));
                echo "\">";
            }
            // line 23
            echo "\t";
        }
        // line 25
        echo "
";
        // line 26
        if (($context["U_CANONICAL"] ?? null)) {
            // line 27
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 29
        echo "
<!--
\tphpBB style name:\tGreen-Style
\tBased on style:\t\tprosilver (this is the default phpBB3 style)
\tOriginal author:\tTom Beddard ( http://www.subBlue.com/ )
\tModified by:\t\tJoyce&Luna ( https://www.phpbb-Style-Design.de )
-->

";
        // line 37
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 38
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 53
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 54
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 55
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 57
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 58
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 62
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 64
        echo "
";
        // line 65
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 66
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 68
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 70
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 73
        // line 74
        echo "
";
        // line 75
        echo $this->getAttribute(($context["definition"] ?? null), "STYLESHEETS", array());
        echo "

";
        // line 77
        // line 78
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 80
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 82
        // line 83
        echo "<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t\t<div id=\"page-header\">

\t\t\t<div class=\"headerbar\" role=\"banner\">

\t\t\t";
        // line 89
        // line 90
        echo "
\t\t\t<a href=\"";
        // line 91
        if (($context["U_SITE_HOME"] ?? null)) {
            echo ($context["U_INDEX"] ?? null);
        }
        echo "\" title=\"";
        if (($context["U_SITE_HOME"] ?? null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\">
\t\t\t\t<img src=\"";
        // line 92
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/images/greenstyle.jpg\" class=\"greenstyle-image-wrapper\" alt=\"\">
\t\t\t</a>

\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 95
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a>
\t\t\t</p>
\t\t\t\t<div class=\"inner\" style=\"margin-bottom: 20px; margin-top: 20px; padding-left: 30px;\"><a href=\"return.php\" style=\"font-size: 35px; font-family: arial;\" ><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJZSURBVGhD7dnJahRRGMXx1qhvIIlLXTlH30GfxeEJXItKVg4EX8FFoqCi4LBT0UdQULcOEdwpqBD9H+gLTXG6q+5U6cY68IOm6fru/ZKqrlu3R0OGDBnyX2c3TuMCbmEDz8f0+ibOYxX67NxFE1vHN/zt6Ct0zEnseE7gMbbhJtuFjn2EY+g9e7GGP3CTS6FaV6DavWQFb+AmU8JrLKNqDuEj3ARKeo+DqBL9JzSAG7gGjbUfRbMPNU+naV6h6DVzDW6gNj/wofFerKsoEn3Fpnw7qYkz0Cn5dvxeit84iuzoPuEGmCU0EXIAOc08RFZ0x4692TWbCFEz7+COaaM56MxIjpYQrvA005pQlnAX7rgutHZLihZ1W3BFnbYm7sAd19UX7EJ0TsEVdGo3ESQtMC/CFWvqqwk5h+jonHTFJqmJs3DRaXAb3xP8hBvvBqJzD65YMKuJ3FyCG3MT0XkKV0xqNqFMa+QJoqODXDFZqEbavvMX5tTSRoErNqnvi/06oqPdDlesSc3M9dev1lmumNNXM0nrLS1RtGXjCjq1m/mEpCWKMk+LRl2zydHaZl6W8ceRFW2eueKzNJvJfbC6j+zoL6HHTTfALKGZEo+6h1Ek2gBwg7RRM7mbD5dRLNqS0daMG6iml9iDotFm2cJv0IVoG7OPZjRGtS3TEG0w19x1fIHqm9ghOm/1E8AvuMmkUC3VLH5NdIl2AB8g9qY5ScfqPnEEOx6tALSE+Aw3WUef1TN49h27RrSoU1N6BNCzg34AfTam13pPS3FNPnkBOGTIkCGLntHoH0OkkCqEjNAmAAAAAElFTkSuQmCC\" style=\"margin-right: 20px;\">Quitter Forum </a>
\t\t\t\t </div>
\t\t\t\t";
        // line 99
        // line 100
        echo "\t\t\t</div>
\t\t";
        // line 101
        // line 102
        echo "\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 102)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 103
        echo "\t\t</div>
    
\t<div class=\"greenstyle_wrap\">
\t<h1>";
        // line 106
        echo ($context["SITENAME"] ?? null);
        echo "</h1>
\t<h5>";
        // line 107
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</h5>
\t\t";
        // line 108
        // line 109
        echo "\t\t";
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 110
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\" role=\"search\">
\t\t\t\t&nbsp;<form action=\"";
            // line 111
            echo ($context["U_SEARCH"] ?? null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo ($context["SEARCH_WORDS"] ?? null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 114
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 115
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
            // line 117
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 118
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 120
            echo ($context["S_SEARCH_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 125
        echo "
\t";
        // line 126
        // line 127
        echo "\t";
        // line 128
        echo "\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 130
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 131
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 133
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 137
        echo "
\t\t";
        // line 138
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 138,  420 => 137,  410 => 133,  406 => 131,  404 => 130,  400 => 128,  398 => 127,  397 => 126,  394 => 125,  386 => 120,  381 => 118,  375 => 117,  370 => 115,  366 => 114,  358 => 113,  353 => 111,  350 => 110,  347 => 109,  346 => 108,  342 => 107,  338 => 106,  333 => 103,  320 => 102,  319 => 101,  316 => 100,  315 => 99,  308 => 95,  302 => 92,  290 => 91,  287 => 90,  286 => 89,  278 => 83,  277 => 82,  268 => 80,  264 => 78,  263 => 77,  258 => 75,  255 => 74,  254 => 73,  246 => 70,  242 => 68,  234 => 66,  232 => 65,  229 => 64,  221 => 62,  219 => 61,  216 => 60,  208 => 58,  206 => 57,  201 => 55,  197 => 54,  192 => 53,  175 => 38,  173 => 37,  163 => 29,  157 => 27,  155 => 26,  152 => 25,  149 => 23,  136 => 22,  123 => 21,  112 => 20,  101 => 19,  90 => 18,  79 => 17,  68 => 16,  66 => 15,  41 => 13,  37 => 12,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}
