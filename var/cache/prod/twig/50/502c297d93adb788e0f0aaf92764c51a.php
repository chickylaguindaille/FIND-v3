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

/* inc/footer.html.twig */
class __TwigTemplate_6f98638a67a9e147ecc3738d6bfd8f01 extends Template
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
        echo "<!-- App Bottom Menu -->
    <div class=\"appBottomMenu\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bar");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && (($context["page"] ?? null) == "bar"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"beer-outline\"></ion-icon>
                <strong>Bar</strong>
            </div>
        </a>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && (($context["page"] ?? null) == "calendar"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"calendar-outline\"></ion-icon>
                <strong>Calendar</strong>
            </div>
        </a>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && (        // line 16
($context["page"] ?? null) == "FIND"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"search-outline\"></ion-icon>
                <strong>FIND</strong>
            </div>
        </a>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("revisions");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && (        // line 23
($context["page"] ?? null) == "revisions"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"book-outline\"></ion-icon>
                <strong>Révisions</strong>
            </div>
        </a>
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && (        // line 30
($context["page"] ?? null) == "profile"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"person-circle-outline\"></ion-icon>
                <strong>Mon folklore</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

";
    }

    public function getTemplateName()
    {
        return "inc/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  95 => 29,  84 => 23,  81 => 22,  70 => 16,  67 => 15,  54 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inc/footer.html.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/inc/footer.html.twig");
    }
}
