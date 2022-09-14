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

/* mcp_header.html */
class __TwigTemplate_5ecbf956ffd553ca064f4142f254e10131d86adac12d180492bd74510d3572c5 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
        echo "</h2>

";
        // line 5
        if (($context["U_MCP"] ?? null)) {
            // line 6
            echo "\t<p class=\"linkmcp responsive-center\">
\t\t[";
            // line 7
            if (($context["U_ACP"] ?? null)) {
                echo "&nbsp;<a href=\"";
                echo ($context["U_ACP"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
                echo "</a>&nbsp;|";
            }
            echo "&nbsp;<a href=\"";
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" data-responsive-text=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "</a>";
            if (($context["U_MCP_FORUM"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_FORUM"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
                echo "</a>";
            }
            if (($context["U_MCP_TOPIC"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_TOPIC"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            if (($context["U_MCP_POST"] ?? null)) {
                echo "&nbsp;|&nbsp;<a href=\"";
                echo ($context["U_MCP_POST"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_POST");
                echo "</a>";
            }
            echo "&nbsp;]
\t</p>
";
        }
        // line 10
        echo "
<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 14
            echo "\t\t<li class=\"tab";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 14)) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "U_TITLE", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["l_block1"], "L_TITLE", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\" class=\"cp-menu\">
\t\t<div id=\"navigation\" class=\"navigation\" role=\"navigation\">
\t\t\t<ul>
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "l_block1", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 28
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["l_block1"], "S_SELECTED", [], "any", false, false, false, 28)) {
                // line 29
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["l_block1"], "l_block2", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 30
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "S_SELECTED", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 31);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 31);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 31)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 31);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t<li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "U_TITLE", [], "any", false, false, false, 33);
                        echo "\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "L_TITLE", [], "any", false, false, false, 33);
                        if (twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 33)) {
                            echo " (";
                            echo twig_get_attribute($this->env, $this->source, $context["l_block2"], "ADD_ITEM", [], "any", false, false, false, 33);
                            echo ")";
                        }
                        echo "</span></a></li>
\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div id=\"cp-main\" class=\"cp-main mcp-main panel-container\">
\t\t";
        // line 43
        if (($context["MESSAGE"] ?? null)) {
            // line 44
            echo "\t\t<div class=\"content\">
\t\t\t<h2 class=\"message-title\">";
            // line 45
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE");
            echo "</h2>
\t\t\t<p class=\"error\">";
            // line 46
            echo ($context["MESSAGE"] ?? null);
            echo "</p>
\t\t\t<p>";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "return_links", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo twig_get_attribute($this->env, $this->source, $context["return_links"], "MESSAGE_LINK", [], "any", false, false, false, 47);
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 47,  217 => 46,  213 => 45,  210 => 44,  208 => 43,  201 => 38,  195 => 37,  192 => 36,  186 => 35,  173 => 33,  160 => 31,  157 => 30,  152 => 29,  149 => 28,  145 => 27,  132 => 16,  117 => 14,  113 => 13,  108 => 10,  62 => 7,  59 => 6,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_header.html", "");
    }
}
