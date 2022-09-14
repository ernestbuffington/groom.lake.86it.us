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

/* cron.html */
class __TwigTemplate_cca8717a59d0dd00e70418a9c25217044e480cc81618ee83d11529166f92cd35 extends \Twig\Template
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
        // line 7
        echo "<img class=\"sr-only\" aria-hidden=\"true\" src=\"";
        echo twig_escape_filter($this->env, ($context["CRON_TASK_URL"] ?? null), "html_attr");
        echo "\" width=\"1\" height=\"1\" alt=\"\">
";
    }

    public function getTemplateName()
    {
        return "cron.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "cron.html", "");
    }
}
