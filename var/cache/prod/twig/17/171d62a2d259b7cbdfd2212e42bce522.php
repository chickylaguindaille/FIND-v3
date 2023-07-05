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

/* inc/navbar.html.twig */
class __TwigTemplate_8e43e594a9430edf0769a5724c521354 extends Template
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
        echo "    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader bg-light\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#sidebarPanel\">
                <ion-icon name=\"menu-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"\" style=\"opacity: 1 !important;\">
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"item\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/logos/512x512xnbxbords.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo\" style=\"max-height: 56px;\">
            </a>
        </div>
        <div class=\"right\">
            <a href=\"#\" class=\"headerButton toggle-searchbox\">
                <ion-icon name=\"search-outline\"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id=\"search\" class=\"appHeader\">
        <form class=\"search-form\">
            <div class=\"form-group searchbox\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                <i class=\"input-icon\">
                    <ion-icon name=\"search-outline\"></ion-icon>
                </i>
                <a href=\"#\" class=\"ms-1 close toggle-searchbox\">
                    <ion-icon name=\"close-circle\"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->
";
    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
<<<<<<< HEAD:var/cache/dev/twig/1e/1ef34cbb3b3805d77939ace1262e16b3.php
        return new Source("    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader bg-light\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#sidebarPanel\">
                <ion-icon name=\"menu-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"\" style=\"opacity: 1 !important;\">
            <a href=\"{{ path('accueil')}}\" class=\"item\">
                <img src=\"{{ asset(\"app/logos/512x512xnbxbords.png\") }}\" alt=\"logo\" class=\"logo\" style=\"max-height: 56px;\">
            </a>
        </div>
        <div class=\"right\">
            <a href=\"#\" class=\"headerButton toggle-searchbox\">
                <ion-icon name=\"search-outline\"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id=\"search\" class=\"appHeader\">
        <form class=\"search-form\">
            <div class=\"form-group searchbox\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                <i class=\"input-icon\">
                    <ion-icon name=\"search-outline\"></ion-icon>
                </i>
                <a href=\"#\" class=\"ms-1 close toggle-searchbox\">
                    <ion-icon name=\"close-circle\"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->
", "inc/navbar.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/inc/navbar.html.twig");
=======
        return new Source("", "inc/navbar.html.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/inc/navbar.html.twig");
>>>>>>> 3af3e57b67cf80732ba95f3617618de2e0d66dc1:var/cache/prod/twig/17/171d62a2d259b7cbdfd2212e42bce522.php
    }
}
