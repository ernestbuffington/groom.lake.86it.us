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

/* @an602_viglink/event/acp_help_an602_stats_after.html */
class __TwigTemplate_b9d5fde61fd2afeae9b39761b941b1b0e97e0e687234e65dac82df021cc4e42f extends \Twig\Template
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
        echo "<div class=\"send-stats-tile\">
    <h2 class=\"viglink-header-h2\"><span class=\"viglink-header\"></span></h2>
    <p>";
        // line 3
        echo $this->extensions['an602\template\twig\extension']->lang("ACP_VIGLINK_SETTINGS_EXPLAIN");
        echo "<br /><br />";
        echo ($context["ACP_VIGLINK_SETTINGS_CHANGE"] ?? null);
        echo "</p>
    <dl class=\"send-stats-settings\">
        <dt>
            <input name=\"enable-viglink\" id=\"enable-viglink\" type=\"checkbox\" ";
        // line 6
        if ((($context["S_ENABLE_VIGLINK"] ?? null) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "/>
            <label for=\"enable-viglink\"></label>
        </dt>
        <dd>";
        // line 9
        echo $this->extensions['an602\template\twig\extension']->lang("ENABLE");
        echo "</dd>
    </dl>
</div>

";
        // line 13
        $asset_file = "@an602_viglink/viglink.css";
        $asset = new \an602\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_an602_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_an602_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_stylesheet($asset);    }

    public function getTemplateName()
    {
        return "@an602_viglink/event/acp_help_an602_stats_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  57 => 9,  49 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@an602_viglink/event/acp_help_an602_stats_after.html", "");
    }
}
