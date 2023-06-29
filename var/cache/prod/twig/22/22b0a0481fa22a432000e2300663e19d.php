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

/* revisions/revisions.html.twig */
class __TwigTemplate_37717d2ee8b06adf84a319a2183013aa extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "revisions/revisions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"listview-title mt-2\">Faluche</div>
        <ul class=\"listview image-listview media mb-2\">
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            Code National de la Faluche
                            <div class=\"text-muted\">133 - Circulaires, Insignes </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            Code IPP
                            <div class=\"text-muted\">2023</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>

        <div class=\"listview-title mt-2\">Calotte</div>
        <ul class=\"listview image-listview media mb-2\">
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            Lecture de Calotte
                            <div class=\"text-muted\">Façon Namuroise</div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        
    </div>
    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "revisions/revisions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 42,  76 => 25,  60 => 12,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revisions/revisions.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/revisions/revisions.html.twig");
    }
}
