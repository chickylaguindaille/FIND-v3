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
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Filtrer</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContent\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Début du mot</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                                                </div>
                                            </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <!-- * Content Action Sheet -->

                </form>
            </div>
        </div>



        ";
        // line 89
        echo "
        ";
        // line 90
        $context["alphabet"] = "?";
        // line 91
        echo "
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 93
            echo "            ";
            if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 93)) != (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 93, $this->source); })()))) {
                // line 94
                echo "                ";
                $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 94));
                // line 95
                echo "                <div class=\"listview-title sticky-title\">
                    <strong>";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 96, $this->source); })()), "html", null, true);
                echo "</strong>
                </div>
            ";
            }
            // line 99
            echo "            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations", ["country" => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 101, $this->source); })()), "villeid" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 101), "ville" => twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 104)), "html", null, true);
            echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 110), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 110), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "


    </div>


    <!-- * App Capsule -->
";
        
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
        return array (  207 => 119,  190 => 110,  185 => 108,  178 => 104,  172 => 101,  168 => 99,  162 => 96,  159 => 95,  156 => 94,  153 => 93,  149 => 92,  146 => 91,  144 => 90,  141 => 89,  94 => 25,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
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
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">{{country}}</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Filtrer</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContent\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Début du mot</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                                                </div>
                                            </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <!-- * Content Action Sheet -->

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

        {% set alphabet = \"?\" %}

        {% for town in towns %}
            {% if town.name|first != alphabet %}
                {% set alphabet = town.name|first %}
                <div class=\"listview-title sticky-title\">
                    <strong>{{alphabet}}</strong>
                </div>
            {% endif %}
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporations', {'country': country, 'villeid': town.id, 'ville': town.name })}}\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"{{asset(town.blason)}}\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">{{town.name}}</h4>
                                    <div class=\"text-muted\">
                                        <div>{{town.region}}, {{town.country}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        {% endfor %}



    </div>


    <!-- * App Capsule -->
{% endblock %}", "find/towns/town.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/towns/town.html.twig");
    }
}
