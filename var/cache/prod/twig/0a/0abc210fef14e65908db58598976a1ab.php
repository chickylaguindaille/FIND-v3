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

/* construction.html.twig */
class __TwigTemplate_5e44a992f1f53bfae5df5f0c6fc86d98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "construction.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div id=\"appCapsule\">

        <div class=\"error-page\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/vector6.png"), "html", null, true);
        echo "\" alt=\"alt\" class=\"imaged square w200\">
            <h1 class=\"title\">Nous travaillons là dessus!</h1>
            <div class=\"text mb-5\">
                La partie ";
        // line 12
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo " est en construction.
            </div>

        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "construction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 9,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "construction.html.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/construction.html.twig");
    }
}
