<?php

/* index_body.html */
class __TwigTemplate_30eac071bfcd68c5dd0d0ca0cafb937dd7ca76e3c14e981900d98cd3129c27c1 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo "\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
";
        // line 18
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 19
            echo "\t<div class=\"forabg\">
\t\t<div class=\"inner\">
\t\t\t<form method=\"post\" action=\"";
            // line 21
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" id=\"headerspace\">
\t\t\t\t<ul class=\"topiclist\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl id=\"icon\">
\t\t\t\t\t\t\t<dt><a href=\"";
            // line 25
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a>";
            }
            echo "</dt>
\t\t\t\t\t\t\t<dd></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<ul class=\"topiclist forums\">
\t\t\t\t\t<li class=\"row login\">
\t\t\t\t\t\t<fieldset class=\"quick-login\">
\t\t\t\t\t\t\t<label for=\"username\"><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" /></label>
\t\t\t\t\t\t\t<label for=\"password\"><span>";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t\t\t\t\t";
            // line 36
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t\t\t\t\t";
            // line 43
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</form>
\t\t</div>
\t</div>
";
        }
        // line 51
        echo "
";
        // line 52
        // line 53
        echo "
";
        // line 54
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 55
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 56
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 57
            echo "\t\t<p>
\t\t\t";
            // line 58
            // line 59
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 60
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 61
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 62
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 63
                echo "\t\t\t";
            }
            // line 64
            echo "\t\t\t";
            // line 65
            echo "\t\t</p>
\t</div>
";
        }
        // line 68
        echo "
";
        // line 69
        // line 70
        echo "
";
        // line 71
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 72
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 75
            // line 76
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 77
            echo "\t\t\t";
            // line 78
            echo "\t\t</p>
\t</div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (($context["NEWEST_USER"] ?? null)) {
            // line 83
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 86
            // line 87
            echo "\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t";
            // line 88
            // line 89
            echo "\t\t</p>
\t</div>
";
        }
        // line 92
        echo "
";
        // line 93
        // line 94
        echo "
";
        // line 95
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 95)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 95,  327 => 94,  326 => 93,  323 => 92,  318 => 89,  317 => 88,  306 => 87,  305 => 86,  300 => 84,  297 => 83,  295 => 82,  292 => 81,  287 => 78,  285 => 77,  259 => 76,  258 => 75,  253 => 73,  250 => 72,  248 => 71,  245 => 70,  244 => 69,  241 => 68,  236 => 65,  234 => 64,  231 => 63,  222 => 62,  217 => 61,  215 => 60,  206 => 59,  205 => 58,  202 => 57,  190 => 56,  187 => 55,  185 => 54,  182 => 53,  181 => 52,  178 => 51,  167 => 43,  162 => 42,  156 => 40,  153 => 39,  145 => 37,  143 => 36,  136 => 35,  129 => 34,  107 => 25,  100 => 21,  96 => 19,  94 => 18,  91 => 17,  90 => 16,  87 => 15,  75 => 14,  72 => 13,  71 => 12,  63 => 9,  60 => 8,  58 => 7,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
