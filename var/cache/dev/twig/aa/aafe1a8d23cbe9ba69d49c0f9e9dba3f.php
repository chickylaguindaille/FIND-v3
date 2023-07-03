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
class __TwigTemplate_7bbadfc3d6e6bb830f3d5c006a82574f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        // line 1
        echo "<!-- App Bottom Menu -->
    <div class=\"appBottomMenu\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexions");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()) == "connexions"))) {
            echo "active";
        }
        echo "\">
            <div class=\"col\">
                <ion-icon name=\"earth-outline\"></ion-icon>
                <strong>Connexions</strong>
            </div>
        </a>
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        echo "\" class=\"item ";
        if ((array_key_exists("page", $context) && ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()) == "calendar"))) {
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
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()) == "FIND"))) {
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
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 23, $this->source); })()) == "revisions"))) {
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
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()) == "profile"))) {
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  104 => 30,  101 => 29,  90 => 23,  87 => 22,  76 => 16,  73 => 15,  60 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- App Bottom Menu -->
    <div class=\"appBottomMenu\">
        <a href=\"{{ path('connexions')}}\" class=\"item {% if page is defined and page == \"connexions\" %}active{% endif %}\">
            <div class=\"col\">
                <ion-icon name=\"earth-outline\"></ion-icon>
                <strong>Connexions</strong>
            </div>
        </a>
        <a href=\"{{ path('calendar')}}\" class=\"item {% if page is defined and page == \"calendar\" %}active{% endif %}\">
            <div class=\"col\">
                <ion-icon name=\"calendar-outline\"></ion-icon>
                <strong>Calendar</strong>
            </div>
        </a>
        <a href=\"{{ path('accueil')}}\" class=\"item {% if page is defined and 
page == \"FIND\" %}active{% endif %}\">
            <div class=\"col\">
                <ion-icon name=\"search-outline\"></ion-icon>
                <strong>FIND</strong>
            </div>
        </a>
        <a href=\"{{ path('revisions')}}\" class=\"item {% if page is defined 
and page == \"revisions\" %}active{% endif %}\">
            <div class=\"col\">
                <ion-icon name=\"book-outline\"></ion-icon>
                <strong>Révisions</strong>
            </div>
        </a>
        <a href=\"{{ path('profile')}}\" class=\"item {% if page is defined and 
page == \"profile\" %}active{% endif %}\">
            <div class=\"col\">
                <ion-icon name=\"person-circle-outline\"></ion-icon>
                <strong>Mon folklore</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

", "inc/footer.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/inc/footer.html.twig");
    }
}
