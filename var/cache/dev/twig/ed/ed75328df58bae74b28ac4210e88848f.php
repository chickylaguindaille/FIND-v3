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

/* find/find.html.twig */
class __TwigTemplate_8b151247d8ec851fc541fa30c842860d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/find.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/find.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/find.html.twig", 1);
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
        $this->loadTemplate("inc/allpage.css.twig", "find/find.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("find/find.css.twig", "find/find.html.twig", 8)->display($context);
        // line 9
        echo "
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">
";
        // line 16
        echo "                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <b><h2 id=\"titleFIND\" class=\"my-auto ";
        // line 22
        if (((((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 22, $this->source); })()), "country", [], "any", false, false, false, 22)) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 22, $this->source); })()), "town", [], "any", false, false, false, 22))) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 22, $this->source); })()), "typeasso", [], "any", false, false, false, 22))) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 22, $this->source); })()), "hat", [], "any", false, false, false, 22))) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 22, $this->source); })()), "gendertype", [], "any", false, false, false, 22)))) {
            echo "d-block";
        } else {
            echo "d-none";
        }
        echo "\">FIND</h2></b>
                    <span id=\"countrychoice\"></span>
                    <span id=\"regionchoice\"></span>
                    <span id=\"townchoice\"></span>
                    <span id=\"typechoice\"></span>
                    <span id=\"hatchoice\"></span>
                    <span id=\"genderchoice\"></span>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 34, $this->source); })()), "text", [], "any", false, false, false, 34), "html", null, true);
        echo "\" placeholder=\"FIND\" data-urlaction=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_corporations");
        echo "\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                        <span>Filtrer</span>
                    </button>

                    ";
        // line 44
        $this->loadTemplate("inc/tri_filtre/filtre.html.twig", "find/find.html.twig", 44)->display($context);
        // line 45
        echo "
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                    ";
        // line 48
        $this->loadTemplate("inc/tri_filtre/tri.html.twig", "find/find.html.twig", 48)->display($context);
        // line 49
        echo "
                </form>
            </div>
        </div>


        <div id=\"resultassociations\"  style=\"padding-bottom: 60px !important;\">
        ";
        // line 92
        echo "        ";
        $this->loadTemplate("find/corporations/corporationsfiltered.html.twig", "find/find.html.twig", 92)->display($context);
        // line 93
        echo "

        ";
        // line 150
        echo "

    </div>


    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 159
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 160
        $this->loadTemplate("find/home.js.twig", "find/find.html.twig", 160)->display($context);
        // line 161
        echo "    ";
        $this->loadTemplate("find/corporations/corporations.js.twig", "find/find.html.twig", 161)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "find/find.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 161,  183 => 160,  178 => 159,  168 => 158,  152 => 150,  148 => 93,  145 => 92,  136 => 49,  134 => 48,  129 => 45,  127 => 44,  112 => 34,  93 => 22,  85 => 16,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

    {% include 'inc/allpage.css.twig' %}
    {% include 'find/find.css.twig' %}

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">
{# {{dump(allfilter)}}; #}
                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <b><h2 id=\"titleFIND\" class=\"my-auto {% if allfilter.country is empty and allfilter.town is empty and allfilter.typeasso is empty and allfilter.hat is empty and allfilter.gendertype is empty %}d-block{% else %}d-none{% endif %}\">FIND</h2></b>
                    <span id=\"countrychoice\"></span>
                    <span id=\"regionchoice\"></span>
                    <span id=\"townchoice\"></span>
                    <span id=\"typechoice\"></span>
                    <span id=\"hatchoice\"></span>
                    <span id=\"genderchoice\"></span>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"{{allfilter.text}}\" placeholder=\"FIND\" data-urlaction=\"{{ path(\"search_corporations\") }}\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                        <span>Filtrer</span>
                    </button>

                    {% include 'inc/tri_filtre/filtre.html.twig' %}

                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                    {% include 'inc/tri_filtre/tri.html.twig' %}

                </form>
            </div>
        </div>


        <div id=\"resultassociations\"  style=\"padding-bottom: 60px !important;\">
        {# {% if associations is not empty %}
            {% set alphabet = \"?\" %}

            {% for association in associations %}
                {% if association.name|first != alphabet %}
                    {% set alphabet = association.name|first %}
                    <div class=\"listview-title sticky-title\">
                        <strong>{{alphabet}}</strong>
                    </div>
                {% endif %}
                <ul class=\"listview image-listview media\">
                    <li>
                        <a href=\"{{ path('corporation', {'country': association.country, 'ville': association.town, 'corpo': association.name, 'associationid': association.id })}}\">
                            <div class=\"item\">
                                <div class=\"imageWrapper\">
                                    <img src=\"{{asset(association.logo??\"\")}}\" alt=\"image\" class=\"blason\">
                                </div>
                                <div class=\"in\">
                                    <div>
                                        <h4 class=\"mb-05\">{{association.name}}</h4>
                                        <div class=\"text-muted\">
                                            <div>{% if association.nickname is defined and association.nickname != '' %}({{association.nickname}}){% endif %}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            {% endfor %}
            </div>
        {% else %}

            <div class=\"text-center item\">Aucun résultat</div>

        {% endif %} #}
        {% include 'find/corporations/corporationsfiltered.html.twig' %}


        {# <div class=\"listview-title sticky-title\">
            <strong>I</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Interfilière</h4>
                            <div class=\"text-muted\">
                                <div>(IPP)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Ingénieurs Puceaux Parisiens</h4>
                            <div class=\"text-muted\">
                                <div>(IF)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class=\"listview-title sticky-title\">
            <strong>P</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Parameds</h4>
                            <div class=\"text-muted\">
                                <div>(Roses)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul> #}


    </div>


    <!-- * App Capsule -->
{% endblock %}

{% block javascript %}
    {{ parent() }}
    {% include 'find/home.js.twig' %}
    {% include 'find/corporations/corporations.js.twig' %}
{% endblock %}", "find/find.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/find.html.twig");
    }
}
