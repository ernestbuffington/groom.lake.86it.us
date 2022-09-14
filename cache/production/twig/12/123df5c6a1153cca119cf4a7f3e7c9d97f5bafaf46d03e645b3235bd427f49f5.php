<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mcp_forum.html */
class __TwigTemplate_39c4e94c5785e1eb69a02c121a04859099a67b8d0a8593fef65773bed1b95553 extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 4
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "mcp_forum.html", 4)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 5
        echo "
<h2><a href=\"";
        // line 6
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " ";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a></h2>

<form method=\"post\" id=\"mcp\" action=\"";
        // line 8
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar bar-top\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 15
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "
\t\t\t";
        // line 16
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 16))) {
            // line 17
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 17)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 18
            echo "\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>

\t";
        // line 24
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 24))) {
            // line 25
            echo "\t\t<ul class=\"topiclist";
            if (($context["S_MERGE_SELECT"] ?? null)) {
                echo " missing-column";
            }
            echo "\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
            echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t\t";
            // line 31
            if ( !($context["S_MERGE_SELECT"] ?? null)) {
                echo "<dd class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
                echo "</dd>";
            }
            // line 32
            echo "\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist";
            // line 35
            if (($context["S_MERGE_SELECT"] ?? null)) {
                echo " missing-column";
            }
            echo "\">

\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topicrow", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 38
                echo "\t\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_ROW_COUNT", [], "any", false, false, false, 38) % 2 != 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 38)) {
                    echo " reported";
                }
                echo "\">
\t\t\t<dl class=\"row-item ";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_IMG_STYLE", [], "any", false, false, false, 39);
                echo "\">
\t\t\t\t<dt ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 40)) {
                    echo "style=\"background-image: url(";
                    echo ($context["T_ICONS_PATH"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ICON_IMG", [], "any", false, false, false, 40);
                    echo "); background-repeat: no-repeat;\"";
                }
                echo ">
\t\t\t\t\t";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_UNREAD_TOPIC", [], "any", false, false, false, 41)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_NEWEST_POST", [], "any", false, false, false, 41);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 42
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t";
                // line 43
                // line 44
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_SELECT_TOPIC", [], "any", false, false, false, 44)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_SELECT_TOPIC", [], "any", false, false, false, 44);
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_MERGE");
                    echo " ]</a>&nbsp;&nbsp; ";
                }
                // line 45
                echo "\t\t\t\t\t";
                // line 46
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_VIEW_TOPIC", [], "any", false, false, false, 46);
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_TITLE", [], "any", false, false, false, 46);
                echo "</a>
\t\t\t\t\t";
                // line 47
                // line 48
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_UNAPPROVED", [], "any", false, false, false, 48) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_UNAPPROVED", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 49);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                    echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 50
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_DELETED", [], "any", false, false, false, 53) || twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_POSTS_DELETED", [], "any", false, false, false, 53))) {
                    // line 54
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_QUEUE", [], "any", false, false, false, 54);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                    echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-recycle fa-fw icon-green\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 55
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_DELETED");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_REPORTED", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_MCP_REPORT", [], "any", false, false, false, 59);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                    echo "\">
\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 60
                    echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
                    echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_MOVED_TOPIC", [], "any", false, false, false, 63) && ($context["S_CAN_DELETE"] ?? null))) {
                    echo "&nbsp;<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "U_DELETE_TOPIC", [], "any", false, false, false, 63);
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_SHADOW_TOPIC");
                    echo " ]</a>";
                }
                // line 64
                echo "\t\t\t\t\t<br />
\t\t\t\t\t";
                // line 65
                // line 66
                echo "\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 67)) {
                    echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 68
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 68);
                echo " &laquo; ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 68);
                echo "<br />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"responsive-show left-box\" style=\"display: none;\">";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 70);
                echo "</strong></span>

\t\t\t\t\t";
                // line 72
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 72))) {
                    // line 73
                    echo "\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topicrow"], "pagination", [], "any", false, false, false, 75));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 76
                        echo "\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_PREV", [], "any", false, false, false, 76)) {
                            // line 77
                            echo "\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source, $context["pagination"], "S_IS_CURRENT", [], "any", false, false, false, 77)) {
                            echo "<li class=\"active\"><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 77);
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 78
$context["pagination"], "S_IS_ELLIPSIS", [], "any", false, false, false, 78)) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 79
$context["pagination"], "S_IS_NEXT", [], "any", false, false, false, 79)) {
                            // line 80
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_URL", [], "any", false, false, false, 80);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["pagination"], "PAGE_NUMBER", [], "any", false, false, false, 80);
                            echo "</a></li>
\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 86
                echo "
\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "ATTACH_ICON_IMG", [], "any", false, false, false, 88)) {
                    echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 89
                echo "\t\t\t\t\t\t";
                // line 90
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_AUTHOR_FULL", [], "any", false, false, false, 90);
                echo " &raquo; ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "FIRST_POST_TIME", [], "any", false, false, false, 90);
                echo "
\t\t\t\t\t\t";
                // line 91
                // line 92
                echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 93
                // line 94
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"posts\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "REPLIES", [], "any", false, false, false, 96);
                echo " <dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPLIES");
                echo "</dfn></dd>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 97
                echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                echo " </dfn>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_AUTHOR_FULL", [], "any", false, false, false, 97);
                echo "<br />";
                echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "LAST_POST_TIME", [], "any", false, false, false, 97);
                echo "</span></dd>
\t\t\t\t";
                // line 98
                if ( !($context["S_MERGE_SELECT"] ?? null)) {
                    // line 99
                    echo "\t\t\t\t<dd class=\"mark\">
\t\t\t\t\t";
                    // line 100
                    if ( !twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_MOVED_TOPIC", [], "any", false, false, false, 100)) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topicrow"], "TOPIC_ID", [], "any", false, false, false, 100);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["topicrow"], "S_TOPIC_CHECKED", [], "any", false, false, false, 100)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 101
                    echo "\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 103
                echo "\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t</ul>
\t";
        } else {
            // line 108
            echo "\t\t<ul class=\"topiclist\">
\t\t\t<li><p class=\"notopics\">";
            // line 109
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPICS");
            echo "</p></li>
\t\t</ul>
\t";
        }
        // line 112
        echo "
\t<div class=\"action-bar bottom\">
\t\t";
        // line 114
        $location = "display_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("display_options.html", "mcp_forum.html", 114)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 115
        echo "
\t\t<div class=\"pagination\">
\t\t\t";
        // line 117
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "
\t\t\t";
        // line 118
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 118))) {
            // line 119
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 119)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 120
            echo "\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t";
        }
        // line 123
        echo "\t\t</div>
\t</div>

\t</div>
</div>

";
        // line 129
        // line 130
        echo "<fieldset class=\"display-actions\">
\t";
        // line 131
        if ( !($context["S_MERGE_SELECT"] ?? null)) {
            // line 132
            echo "\t<select name=\"action\">
\t\t<option value=\"\" selected=\"selected\">";
            // line 133
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_ACTION");
            echo "</option>
\t\t";
            // line 134
            if (($context["S_CAN_DELETE"] ?? null)) {
                echo "<option value=\"delete_topic\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "</option>";
            }
            // line 135
            echo "\t\t";
            if (($context["S_CAN_RESTORE"] ?? null)) {
                echo "<option value=\"restore_topic\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "</option>";
            }
            // line 136
            echo "\t\t";
            if (($context["S_CAN_MERGE"] ?? null)) {
                echo "<option value=\"merge_topics\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MERGE");
                echo "</option>";
            }
            // line 137
            echo "\t\t";
            if (($context["S_CAN_MOVE"] ?? null)) {
                echo "<option value=\"move\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MOVE");
                echo "</option>";
            }
            // line 138
            echo "\t\t";
            if (($context["S_CAN_FORK"] ?? null)) {
                echo "<option value=\"fork\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORK");
                echo "</option>";
            }
            // line 139
            echo "\t\t";
            if (($context["S_CAN_LOCK"] ?? null)) {
                echo "<option value=\"lock\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK");
                echo "</option>";
            }
            // line 140
            echo "\t\t";
            if (($context["S_CAN_SYNC"] ?? null)) {
                echo "<option value=\"resync\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESYNC");
                echo "</option>";
            }
            // line 141
            echo "\t\t";
            if (($context["S_CAN_MAKE_NORMAL"] ?? null)) {
                echo "<option value=\"make_normal\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 142
            echo "\t\t";
            if (($context["S_CAN_MAKE_STICKY"] ?? null)) {
                echo "<option value=\"make_sticky\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 143
            echo "\t\t";
            if (($context["S_CAN_MAKE_ANNOUNCE"] ?? null)) {
                echo "<option value=\"make_announce\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAKE_ANNOUNCE");
                echo "</option>";
            }
            // line 144
            echo "\t\t";
            if (($context["S_CAN_MAKE_ANNOUNCE_GLOBAL"] ?? null)) {
                echo "<option value=\"make_global\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAKE_GLOBAL");
                echo "</option>";
            }
            // line 145
            echo "\t\t";
            // line 146
            echo "\t</select>
\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 147
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
            // line 148
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t";
        }
        // line 150
        echo "\t";
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
";
        // line 152
        // line 153
        echo "</form>

";
        // line 155
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_forum.html", 155)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 155,  615 => 153,  614 => 152,  608 => 150,  601 => 148,  597 => 147,  594 => 146,  592 => 145,  585 => 144,  578 => 143,  571 => 142,  564 => 141,  557 => 140,  548 => 139,  541 => 138,  534 => 137,  527 => 136,  520 => 135,  514 => 134,  510 => 133,  507 => 132,  505 => 131,  502 => 130,  501 => 129,  493 => 123,  487 => 121,  484 => 120,  471 => 119,  469 => 118,  465 => 117,  461 => 115,  449 => 114,  445 => 112,  439 => 109,  436 => 108,  432 => 106,  424 => 103,  420 => 101,  408 => 100,  405 => 99,  403 => 98,  393 => 97,  387 => 96,  383 => 94,  382 => 93,  379 => 92,  378 => 91,  369 => 90,  367 => 89,  363 => 88,  359 => 86,  354 => 83,  348 => 82,  338 => 80,  336 => 79,  330 => 78,  323 => 77,  320 => 76,  316 => 75,  312 => 73,  310 => 72,  302 => 70,  290 => 68,  286 => 67,  283 => 66,  282 => 65,  279 => 64,  270 => 63,  264 => 60,  257 => 59,  254 => 58,  248 => 55,  241 => 54,  238 => 53,  232 => 50,  225 => 49,  222 => 48,  221 => 47,  214 => 46,  212 => 45,  203 => 44,  202 => 43,  199 => 42,  193 => 41,  184 => 40,  180 => 39,  168 => 38,  164 => 37,  157 => 35,  152 => 32,  146 => 31,  142 => 30,  138 => 29,  134 => 28,  125 => 25,  123 => 24,  118 => 21,  112 => 19,  109 => 18,  96 => 17,  94 => 16,  90 => 15,  80 => 8,  70 => 6,  67 => 5,  55 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_forum.html", "");
    }
}
