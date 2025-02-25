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

/* find/towns/town.html.twig */
class __TwigTemplate_ec46fec5356c426516b05292f3ba02ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/town.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/town.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/towns/town.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("inc/allpage.css.twig", "find/towns/town.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("find/towns/town.css.twig", "find/towns/town.html.twig", 8)->display($context);
        // line 9
        echo "
    <!-- App Capsule -->
    <div id=\"appCapsule\">
        
        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">

                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <img src=\"";
        // line 22
        if (((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 22, $this->source); })()) == "France")) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/France.png"), "html", null, true);
        } elseif (((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 22, $this->source); })()) == "Belgique")) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/Belgique.png"), "html", null, true);
        }
        echo "\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"\" placeholder=\"FIND\" data-urlaction=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_towns");
        echo "\" >
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                        <span>Filtrer</span>
                    </button>

                    ";
        // line 40
        $this->loadTemplate("inc/tri_filtre/filtre.html.twig", "find/towns/town.html.twig", 40)->display($context);
        echo "</div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                    ";
        // line 44
        $this->loadTemplate("inc/tri_filtre/tri.html.twig", "find/towns/town.html.twig", 44)->display($context);
        // line 45
        echo "
                </form>
            </div>
        </div>



        ";
        // line 72
        echo "        <div id=\"resulttowns\"  class=\"pb-2\" >
            ";
        // line 73
        $this->loadTemplate("find/towns/townfiltered.html.twig", "find/towns/town.html.twig", 73)->display($context);
        // line 74
        echo "        </div>



    </div>


    <!-- * App Capsule -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 87
        $this->loadTemplate("find/towns/town.js.twig", "find/towns/town.html.twig", 87)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "find/towns/town.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 87,  175 => 86,  165 => 85,  146 => 74,  144 => 73,  141 => 72,  132 => 45,  130 => 44,  123 => 40,  110 => 30,  101 => 24,  92 => 22,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

    {% include 'inc/allpage.css.twig' %}
    {% include 'find/towns/town.css.twig' %}

    <!-- App Capsule -->
    <div id=\"appCapsule\">
        
        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">

                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <img src=\"{% if country == \"France\" %}{{ asset(\"app/assets/img/sample/photo/France.png\") }}{% elseif country == \"Belgique\" %}{{ asset(\"app/assets/img/sample/photo/Belgique.png\") }}{% endif %}\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">{{country}}</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"\" placeholder=\"FIND\" data-urlaction=\"{{ path(\"search_towns\") }}\" >
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                        <span>Filtrer</span>
                    </button>

                    {% include 'inc/tri_filtre/filtre.html.twig' %}</div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                    {% include 'inc/tri_filtre/tri.html.twig' %}

                </form>
            </div>
        </div>



        {# <div class=\"listview-title sticky-title\">
            <strong>C</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Créteil</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> #}
        <div id=\"resulttowns\"  class=\"pb-2\" >
            {% include 'find/towns/townfiltered.html.twig' %}
        </div>



    </div>


    <!-- * App Capsule -->

{% endblock %}

{% block javascript %}
    {{ parent() }}
    {% include 'find/towns/town.js.twig' %}
{% endblock %}", "find/towns/town.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/find/towns/town.html.twig");
    }
}
