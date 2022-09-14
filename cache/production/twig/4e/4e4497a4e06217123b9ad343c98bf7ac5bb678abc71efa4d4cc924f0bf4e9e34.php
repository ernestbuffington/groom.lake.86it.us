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

/* search_body.html */
class __TwigTemplate_bf6f3056e7bb1ce740f59a02c3f4ec7c689aa7621042d96a50864e01fe82d282 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH");
        echo "</h2>

";
        // line 5
        // line 6
        echo "<form method=\"get\" action=\"";
        echo ($context["S_SEARCH_ACTION"] ?? null);
        echo "\" data-focus=\"keywords\">

<div class=\"panel\">
\t<div class=\"inner\">
\t<h3>";
        // line 10
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_QUERY");
        echo "</h3>

\t";
        // line 12
        // line 13
        echo "\t<fieldset>
\t";
        // line 14
        // line 15
        echo "\t<dl>
\t\t<dt><label for=\"keywords\">";
        // line 16
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 17
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo "\" /></dd>
\t\t<dd><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 18
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_ALL_TERMS");
        echo "</label></dd>
\t\t<dd><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 19
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_ANY_TERMS");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"author\">";
        // line 22
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_AUTHOR");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 23
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_AUTHOR");
        echo "\" /></dd>
\t</dl>
\t";
        // line 25
        // line 26
        echo "\t</fieldset>
\t";
        // line 27
        // line 28
        echo "
\t</div>
</div>

<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<h3>";
        // line 35
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_OPTIONS");
        echo "</h3>

\t";
        // line 37
        // line 38
        echo "\t<fieldset>
\t";
        // line 39
        // line 40
        echo "\t<dl>
\t\t<dt><label for=\"search_forum\">";
        // line 41
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_FORUMS");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 42
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_FORUMS");
        echo "\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_child1\">";
        // line 45
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_SUBFORUMS");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"search_child1\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 47
        echo $this->extensions['an602\template\twig\extension']->lang("YES");
        echo "</label>
\t\t\t<label for=\"search_child2\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 48
        echo $this->extensions['an602\template\twig\extension']->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sf1\">";
        // line 52
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_WITHIN");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 53
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_TITLE_MSG");
        echo "</label></dd>
\t\t<dd><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 54
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_MSG_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 55
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_TITLE_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 56
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH_FIRST_POST");
        echo "</label></dd>
\t</dl>
\t";
        // line 58
        // line 59
        echo "
\t<hr class=\"dashed\" />

\t";
        // line 62
        // line 63
        echo "\t<dl>
\t\t<dt><label for=\"show_results1\">";
        // line 64
        echo $this->extensions['an602\template\twig\extension']->lang("DISPLAY_RESULTS");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"show_results1\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 66
        echo $this->extensions['an602\template\twig\extension']->lang("POSTS");
        echo "</label>
\t\t\t<label for=\"show_results2\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 67
        echo $this->extensions['an602\template\twig\extension']->lang("TOPICS");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sd\">";
        // line 71
        echo $this->extensions['an602\template\twig\extension']->lang("RESULT_SORT");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 72
        echo ($context["S_SELECT_SORT_KEY"] ?? null);
        echo "&nbsp;
\t\t\t<label for=\"sa\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 73
        echo $this->extensions['an602\template\twig\extension']->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t<label for=\"sd\"><input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\" /> ";
        // line 74
        echo $this->extensions['an602\template\twig\extension']->lang("SORT_DESCENDING");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 78
        echo $this->extensions['an602\template\twig\extension']->lang("RESULT_DAYS");
        echo $this->extensions['an602\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 79
        echo ($context["S_SELECT_SORT_DAYS"] ?? null);
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt>
\t\t\t<label for=\"ch\">";
        // line 83
        echo ($this->extensions['an602\template\twig\extension']->lang("RETURN_FIRST") . $this->extensions['an602\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t<br><span>";
        // line 84
        echo $this->extensions['an602\template\twig\extension']->lang("RETURN_FIRST_EXPLAIN");
        echo "</span>
\t\t</dt>
\t\t<dd><input id=\"ch\" name=\"ch\" type=\"number\" value=\"";
        // line 86
        echo ($context["DEFAULT_RETURN_CHARS"] ?? null);
        echo "\" min=\"0\" max=\"9999\" title=\"";
        echo $this->extensions['an602\template\twig\extension']->lang("RETURN_FIRST");
        echo "\"> ";
        echo $this->extensions['an602\template\twig\extension']->lang("POST_CHARACTERS");
        echo "</dd>
\t</dl>
\t";
        // line 88
        // line 89
        echo "\t</fieldset>
\t";
        // line 90
        // line 91
        echo "
\t</div>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 99
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 100
        echo $this->extensions['an602\template\twig\extension']->lang("SEARCH");
        echo "\" class=\"button1\" />
\t</fieldset>

\t</div>
</div>

</form>
";
        // line 107
        // line 108
        echo "
";
        // line 109
        // line 110
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "recentsearch", [], "any", false, false, false, 110))) {
            // line 111
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 117
            echo $this->extensions['an602\template\twig\extension']->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "recentsearch", [], "any", false, false, false, 121));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 122
                echo "\t\t<tr class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["recentsearch"], "S_ROW_COUNT", [], "any", false, false, false, 122) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td><a href=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "U_KEYWORDS", [], "any", false, false, false, 123);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "KEYWORDS", [], "any", false, false, false, 123);
                echo "</a></td>
\t\t\t<td class=\"active\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["recentsearch"], "TIME", [], "any", false, false, false, 124);
                echo "</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 127
                echo "\t\t<tr class=\"bg1\">
\t\t\t<td colspan=\"2\">";
                // line 128
                echo $this->extensions['an602\template\twig\extension']->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t</tbody>
\t</table>

\t</div>
</div>
";
        }
        // line 137
        // line 138
        echo "
";
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 139,  370 => 138,  369 => 137,  361 => 131,  352 => 128,  349 => 127,  341 => 124,  335 => 123,  326 => 122,  321 => 121,  314 => 117,  306 => 111,  304 => 110,  303 => 109,  300 => 108,  299 => 107,  289 => 100,  285 => 99,  275 => 91,  274 => 90,  271 => 89,  270 => 88,  261 => 86,  256 => 84,  252 => 83,  245 => 79,  240 => 78,  233 => 74,  229 => 73,  225 => 72,  220 => 71,  213 => 67,  209 => 66,  203 => 64,  200 => 63,  199 => 62,  194 => 59,  193 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  171 => 52,  164 => 48,  160 => 47,  154 => 45,  146 => 42,  139 => 41,  136 => 40,  135 => 39,  132 => 38,  131 => 37,  126 => 35,  117 => 28,  116 => 27,  113 => 26,  112 => 25,  107 => 23,  100 => 22,  94 => 19,  90 => 18,  86 => 17,  79 => 16,  76 => 15,  75 => 14,  72 => 13,  71 => 12,  66 => 10,  58 => 6,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search_body.html", "");
    }
}
