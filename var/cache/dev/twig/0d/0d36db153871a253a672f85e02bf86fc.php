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

/* find/corporations/corporations.html.twig */
class __TwigTemplate_81e7401d1fb1630753a7fac48a6f7aa6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporations.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/corporations/corporations.html.twig", 1);
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
        $this->loadTemplate("inc/allpage.css.twig", "find/corporations/corporations.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("find/home.css.twig", "find/corporations/corporations.html.twig", 8)->display($context);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 22, $this->source); })()), "blason", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" alt=\"image\" class=\"blason\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["town"]) || array_key_exists("town", $context) ? $context["town"] : (function () { throw new RuntimeError('Variable "town" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"\" placeholder=\"FIND\" data-urlaction=\"";
        // line 30
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
        // line 41
        $this->loadTemplate("inc/tri_filtre/filtre.html.twig", "find/corporations/corporations.html.twig", 41)->display($context);
        // line 42
        echo "
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                    ";
        // line 45
        $this->loadTemplate("inc/tri_filtre/tri.html.twig", "find/corporations/corporations.html.twig", 45)->display($context);
        // line 46
        echo "
                    ";
        // line 50
        echo "                    <span id=\"typechoice\"></span>
                    <span id=\"hatchoice\"></span>
                    <span id=\"genderchoice\"></span>

                </form>
            </div>
        </div>


        <div id=\"resultassociations\"  class=\"pb-2\">
        ";
        // line 89
        echo "        ";
        $this->loadTemplate("find/corporations/corporationsfiltered.html.twig", "find/corporations/corporations.html.twig", 89)->display($context);
        // line 90
        echo "        </div>


        ";
        // line 148
        echo "

    </div>


    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 157
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 158
        $this->loadTemplate("find/home.js.twig", "find/corporations/corporations.html.twig", 158)->display($context);
        // line 159
        echo "    ";
        $this->loadTemplate("find/corporations/corporations.js.twig", "find/corporations/corporations.html.twig", 159)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "find/corporations/corporations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 159,  183 => 158,  178 => 157,  168 => 156,  152 => 148,  147 => 90,  144 => 89,  132 => 50,  129 => 46,  127 => 45,  122 => 42,  120 => 41,  106 => 30,  97 => 24,  92 => 22,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

    {% include 'inc/allpage.css.twig' %}
    {% include 'find/home.css.twig' %}

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
                    <img src=\"{{asset(town.blason)}}\" alt=\"image\" class=\"blason\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">{{town.name}}</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control inputsearch\" value=\"\" placeholder=\"FIND\" data-urlaction=\"{{ path(\"search_corporations\") }}\">
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

                    {# <span id=\"countrychoice\"></span>
                    <span id=\"regionchoice\"></span>
                    <span id=\"townchoice\"></span> #}
                    <span id=\"typechoice\"></span>
                    <span id=\"hatchoice\"></span>
                    <span id=\"genderchoice\"></span>

                </form>
            </div>
        </div>


        <div id=\"resultassociations\"  class=\"pb-2\">
        {# {% set alphabet = \"?\" %}

        {% for association in associations %}
            {% if association.name|first != alphabet %}
                {% set alphabet = association.name|first %}
                <div class=\"listview-title sticky-title\">
                    <strong>{{alphabet}}</strong>
                </div>
            {% endif %}
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporation', {'country': country, 'ville': ville, 'corpo': association.name, 'associationid': association.id })}}\">
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
        {% endfor %} #}
        {% include 'find/corporations/corporationsfiltered.html.twig' %}
        </div>


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
{% endblock %}", "find/corporations/corporations.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/find/corporations/corporations.html.twig");
    }
}
