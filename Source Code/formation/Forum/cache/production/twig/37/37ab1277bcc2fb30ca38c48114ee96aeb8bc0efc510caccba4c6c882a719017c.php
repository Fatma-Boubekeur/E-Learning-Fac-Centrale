<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_cfd404230e4141a6dcdfcaa9837c11d77312b5459b48d9eabece750ebe69fdc7 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
\t</div>
</div>


";
        // line 9
        if ((($context["S_DISPLAY_HISTORY"] ?? null) && (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null) || ($context["U_VIEW_NEXT_HISTORY"] ?? null)))) {
            // line 10
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 11
            if (($context["U_VIEW_PREVIOUS_HISTORY"] ?? null)) {
                // line 12
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_PREVIOUS_HISTORY"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 13
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 16
            echo "\t\t";
            if (($context["U_VIEW_NEXT_HISTORY"] ?? null)) {
                // line 17
                echo "\t\t\t<a href=\"";
                echo ($context["U_VIEW_NEXT_HISTORY"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icon fa-angle-";
                // line 18
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEXT_HISTORY");
                echo "</span>
\t\t\t</a>
\t\t";
            }
            // line 21
            echo "\t</fieldset>
";
        }
        // line 23
        echo "

<div id=\"post-";
        // line 25
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\" class=\"post pm has-profile";
        if ((($context["S_POST_UNAPPROVED"] ?? null) || ($context["S_POST_REPORTED"] ?? null))) {
            echo " reported";
        }
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
<div class=\"inner\">

\t<dl class=\"postprofile\" id=\"profile";
        // line 28
        echo ($context["MESSAGE_ID"] ?? null);
        echo "\">
\t\t<dt class=\"";
        // line 29
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "has-profile-rank";
        } else {
            echo "no-profile-rank";
        }
        echo " ";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "has-avatar";
        } else {
            echo "no-avatar";
        }
        echo "\">
\t\t\t<div class=\"avatar-container\">
\t\t\t\t";
        // line 31
        // line 32
        echo "\t\t\t\t";
        if (($context["AUTHOR_AVATAR"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_MESSAGE_AUTHOR"] ?? null);
            echo "\" class=\"avatar\">";
            echo ($context["AUTHOR_AVATAR"] ?? null);
            echo "</a>";
        }
        // line 33
        echo "\t\t\t\t";
        // line 34
        echo "\t\t\t</div>
\t\t\t";
        // line 35
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t</dt>

\t\t";
        // line 38
        // line 39
        echo "\t\t";
        if ((($context["RANK_TITLE"] ?? null) || ($context["RANK_IMG"] ?? null))) {
            echo "<dd class=\"profile-rank\">";
            echo ($context["RANK_TITLE"] ?? null);
            if ((($context["RANK_TITLE"] ?? null) && ($context["RANK_IMG"] ?? null))) {
                echo "<br />";
            }
            echo ($context["RANK_IMG"] ?? null);
            echo "</dd>";
        }
        // line 40
        echo "\t\t";
        // line 41
        echo "
\t\t<dd class=\"profile-posts\"><strong>";
        // line 42
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</strong> ";
        if ((($context["U_AUTHOR_POSTS"] ?? null) != "")) {
            echo "<a href=\"";
            echo ($context["U_AUTHOR_POSTS"] ?? null);
            echo "\">";
            echo ($context["AUTHOR_POSTS"] ?? null);
            echo "</a>";
        } else {
            echo ($context["AUTHOR_POSTS"] ?? null);
        }
        echo "</dd>
\t\t";
        // line 43
        if (($context["AUTHOR_JOINED"] ?? null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["AUTHOR_JOINED"] ?? null);
            echo "</dd>";
        }
        // line 44
        echo "
\t\t";
        // line 45
        // line 46
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 47
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 48
                echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 50
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t";
        // line 52
        echo "
\t\t";
        // line 53
        // line 54
        echo "\t\t";
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "contact", array()))) {
            // line 55
            echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"  title=\"";
            // line 58
            echo ($context["CONTACT_USER"] ?? null);
            echo "\"><i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["CONTACT_USER"] ?? null);
            echo "</span></a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "contact", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 63
                echo "\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                // line 64
                echo "\t\t\t\t\t\t\t\t";
                $value = ((($context["REMAINDER"] ?? null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 65
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["REMAINDER"] ?? null) == 0)) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                    echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                } else {
                    echo $this->getAttribute($context["contact"], "U_PROFILE_AUTHOR", array());
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "\"";
                if ($this->getAttribute(($context["definition"] ?? null), "S_LAST_CELL", array())) {
                    echo " class=\"last-cell\"";
                }
                if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 69
                echo $this->getAttribute($context["contact"], "ID", array());
                echo "-icon\">";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                // line 71
                if (((($context["REMAINDER"] ?? null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
        }
        // line 80
        echo "\t\t";
        // line 81
        echo "\t</dl>

\t<div class=\"postbody\">
\t\t<h3 class=\"first\">";
        // line 84
        echo ($context["SUBJECT"] ?? null);
        echo "</h3>

\t\t";
        // line 86
        $value = (((($context["U_EDIT"] ?? null) || ($context["U_DELETE"] ?? null)) || ($context["U_REPORT"] ?? null)) || ($context["U_QUOTE"] ?? null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 87
        echo "\t\t";
        // line 88
        echo "\t\t";
        if ($this->getAttribute(($context["definition"] ?? null), "SHOW_PM_POST_BUTTONS", array())) {
            // line 89
            echo "\t\t<ul class=\"post-buttons\">
\t\t\t";
            // line 90
            // line 91
            echo "\t\t\t";
            if (($context["U_EDIT"] ?? null)) {
                // line 92
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 93
                echo ($context["U_EDIT"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_EDIT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 94
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_EDIT_PM");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 98
            echo "\t\t\t";
            if (($context["U_DELETE"] ?? null)) {
                // line 99
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 100
                echo ($context["U_DELETE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 101
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MESSAGE");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 105
            echo "\t\t\t";
            if (($context["U_REPORT"] ?? null)) {
                // line 106
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 107
                echo ($context["U_REPORT"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 108
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_PM");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 112
            echo "\t\t\t";
            if (($context["U_QUOTE"] ?? null)) {
                // line 113
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 114
                echo ($context["U_QUOTE"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_QUOTE_PM");
                echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 115
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_QUOTE_PM");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 119
            echo "\t\t\t";
            // line 120
            echo "\t\t</ul>
\t\t";
        }
        // line 122
        echo "\t\t";
        // line 123
        echo "
\t\t<p class=\"author\">
\t\t\t<strong>";
        // line 125
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</strong> ";
        echo ($context["SENT_DATE"] ?? null);
        echo "
\t\t\t<br /><strong>";
        // line 126
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</strong> ";
        echo ($context["MESSAGE_AUTHOR_FULL"] ?? null);
        echo "
\t\t\t";
        // line 127
        if (($context["S_TO_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "to_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["to_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 128
        echo "\t\t\t";
        if (($context["S_BCC_RECIPIENT"] ?? null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BCC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "bcc_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 129
        echo "\t\t</p>


\t\t<div class=\"content\">";
        // line 132
        echo ($context["MESSAGE"] ?? null);
        echo "</div>

\t\t";
        // line 134
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 135
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>
\t\t\t\t\t";
            // line 137
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
            echo "
\t\t\t\t</dt>
\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 140
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t</dl>
\t\t";
        }
        // line 144
        echo "
\t\t";
        // line 145
        if (($context["S_DISPLAY_NOTICE"] ?? null)) {
            // line 146
            echo "\t\t\t<div class=\"post-notice error\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t";
        }
        // line 148
        echo "
\t\t";
        // line 149
        if ((($context["EDITED_MESSAGE"] ?? null) || ($context["EDIT_REASON"] ?? null))) {
            // line 150
            echo "\t\t<div class=\"notice\">";
            echo ($context["EDITED_MESSAGE"] ?? null);
            echo "
\t\t\t";
            // line 151
            if (($context["EDIT_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <em>";
                echo ($context["EDIT_REASON"] ?? null);
                echo "</em>";
            }
            // line 152
            echo "\t\t</div>
\t\t";
        }
        // line 154
        echo "
\t\t";
        // line 155
        if (($context["SIGNATURE"] ?? null)) {
            // line 156
            echo "\t\t\t<div id=\"sig";
            echo ($context["MESSAGE_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 158
        echo "\t</div>

\t<div class=\"back2top\">
\t\t<a href=\"#top\" class=\"top\" title=\"";
        // line 161
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
        echo "\">
\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t<span class=\"sr-only\">";
        // line 163
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
        echo "</span>
\t\t</a>
\t</div>

\t</div>
</div>

";
        // line 170
        // line 171
        if (($context["S_VIEW_MESSAGE"] ?? null)) {
            // line 172
            echo "<fieldset class=\"display-options\">

\t";
            // line 174
            if (($context["S_MARK_OPTIONS"] ?? null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo ($context["S_MARK_OPTIONS"] ?? null);
                echo "</select></label>&nbsp;<input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />";
            }
            // line 175
            echo "\t";
            if (($context["U_PREVIOUS_PM"] ?? null)) {
                // line 176
                echo "\t\t<a href=\"";
                echo ($context["U_PREVIOUS_PM"] ?? null);
                echo "\" class=\"left-box arrow-";
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 177
                echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PREVIOUS_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 180
            echo "\t";
            if (($context["U_NEXT_PM"] ?? null)) {
                // line 181
                echo "\t\t<a href=\"";
                echo ($context["U_NEXT_PM"] ?? null);
                echo "\" class=\"right-box arrow-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo "\">
\t\t\t<i class=\"icon fa-angle-";
                // line 182
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " fa-fw icon-black\" aria-hidden=\"true\"></i><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEXT_PM");
                echo "</span>
\t\t</a>
\t";
            }
            // line 185
            echo "\t";
            if (( !($context["S_UNREAD"] ?? null) &&  !($context["S_SPECIAL_FOLDER"] ?? null))) {
                echo "<label for=\"dest_folder\">";
                if (($context["S_VIEW_MESSAGE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_TO_FOLDER");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo ($context["S_TO_FOLDER_OPTIONS"] ?? null);
                echo "</select></label> <input class=\"button2\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />";
            }
            // line 186
            echo "\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 187
            echo ($context["CUR_FOLDER_ID"] ?? null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 188
            echo ($context["MSG_ID"] ?? null);
            echo "\" />
</fieldset>
";
        }
        // line 191
        echo "
";
        // line 192
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 192)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 193
        echo "
";
        // line 194
        if (($context["S_DISPLAY_HISTORY"] ?? null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 194)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 195
        echo "
";
        // line 196
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 196)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 196,  720 => 195,  706 => 194,  703 => 193,  691 => 192,  688 => 191,  682 => 188,  678 => 187,  673 => 186,  656 => 185,  648 => 182,  641 => 181,  638 => 180,  630 => 177,  623 => 176,  620 => 175,  612 => 174,  608 => 172,  606 => 171,  605 => 170,  595 => 163,  590 => 161,  585 => 158,  577 => 156,  575 => 155,  572 => 154,  568 => 152,  559 => 151,  554 => 150,  552 => 149,  549 => 148,  543 => 146,  541 => 145,  538 => 144,  534 => 142,  525 => 140,  521 => 139,  516 => 137,  512 => 135,  510 => 134,  505 => 132,  500 => 129,  469 => 128,  439 => 127,  432 => 126,  425 => 125,  421 => 123,  419 => 122,  415 => 120,  413 => 119,  406 => 115,  400 => 114,  397 => 113,  394 => 112,  387 => 108,  381 => 107,  378 => 106,  375 => 105,  368 => 101,  362 => 100,  359 => 99,  356 => 98,  349 => 94,  343 => 93,  340 => 92,  337 => 91,  336 => 90,  333 => 89,  330 => 88,  328 => 87,  325 => 86,  320 => 84,  315 => 81,  313 => 80,  306 => 75,  300 => 74,  296 => 72,  294 => 71,  287 => 69,  269 => 68,  265 => 66,  262 => 65,  258 => 64,  255 => 63,  251 => 62,  242 => 58,  236 => 56,  233 => 55,  230 => 54,  229 => 53,  226 => 52,  224 => 51,  218 => 50,  207 => 48,  204 => 47,  199 => 46,  198 => 45,  195 => 44,  186 => 43,  171 => 42,  168 => 41,  166 => 40,  155 => 39,  154 => 38,  148 => 35,  145 => 34,  143 => 33,  134 => 32,  133 => 31,  118 => 29,  114 => 28,  101 => 25,  97 => 23,  93 => 21,  85 => 18,  78 => 17,  75 => 16,  67 => 13,  60 => 12,  58 => 11,  55 => 10,  53 => 9,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_pm_viewmessage.html", "");
    }
}
