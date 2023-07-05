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

/* home.html.twig */
class __TwigTemplate_1119040b6e52d882d2b80b931bbcdfa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
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
        $this->loadTemplate("home/home.css.twig", "home.html.twig", 7)->display($context);
        // line 8
        echo " <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- CARDS COUNTRY -->
            <div class=\"section mt-4\">
                <div class=\"row\">
                    <div class=\"col-2\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "France"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body text-center\">
                                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/France.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">France</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "Belgique"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body  text-center\">
                                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/Belgique.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">Belgique</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- * FIN CARDS COUNTRY-->

            ";
        // line 48
        echo "            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-1 px-4\">
                    <form class=\"search-form\">
                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                        </div>
                    </form>
                </div>
            </div>
            ";
        // line 61
        echo "
            <!-- BOUTON MODAL TRI -->
            <div>
                <button type=\"button\" class=\"btn btn-primary p-0 ms-4\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                <span class=\"mx-2\">Filtrer</span>
                </button>
            </div>

            <!-- MODAL TRI -->
            <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered \">
                    <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Pays</label>
                            <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 81, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                <option value=\"France\">France</option>
                                <option value=\"Belgique\">Belgique</option>
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Région</label>
                            <select name=\"town\" class=\"form-select\" id=\"regionfilter\" ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 90, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 92, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 93
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Ville</label>
                            <select name=\"town\" class=\"form-select\" id=\"townfilter\" ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 102, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 103
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"type\">Type</label>
                            <select name=\"type\" class=\"form-select\" id=\"typefilter\" ";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 110, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 112, $this->source); })()), 0, [], "array", false, false, false, 112), "assotype", [], "array", false, false, false, 112)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 113
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Couvre-Chef</label>
                            <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 120, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 122, $this->source); })()), 0, [], "array", false, false, false, 122), "hats", [], "array", false, false, false, 122)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 123
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Genre</label>
                            <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" ";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 130, $this->source); })()), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                <option value=\"Mixte\">Mixte</option>
                                <option value=\"Masculin\">Masculin</option>
                                <option value=\"Féminin\">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        <button id=\"btntrier\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Trier</button>
                    </div>
                    </div>
                </div>
            </div>
            ";
        // line 146
        echo "
            <!-- cards location -->
            ";
        // line 176
        echo "            <!-- * cards location -->

        </div>

        <div class=\"text-center\" style=\"margin: 5em; \">
            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo 
w-75\">
        </div>
        <!-- app footer -->


        <div class=\"section inset mt-2\" style=\"padding-bottom: 68px !important;\">

            <div class=\"accordion\" id=\"accordionExample3\">
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion001\">
                            <ion-icon name=\"help-circle-outline\"></ion-icon>
                            Le projet FIND
                        </button>
                    </h2>
                    <div id=\"accordion001\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            FIND est une initiative ayant pour but la découverte, le partage et la sauvegarde du folklore étudiant. Vous pourrez y retrouver un grand nombre d’associations étudiantes folkloriques avec des informations tel leur fondation, leurs particularités, leurs goodies et bien d’autres choses !
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion002\">
                            <ion-icon name=\"document-outline\"></ion-icon>
                            Les contributeurs
                        </button>
                    </h2>
                    <div id=\"accordion002\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <!-- <div class=\"section full mt-2 mb-2\"> -->
                                <ul class=\"listview image-listview media\">
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Estudiantinerie
                                                    <div class=\"text-muted\">Musée Français du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/avatar/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Musée Belge des Traditions Estudiantines
                                                    <div class=\"text-muted\">Musée Belge du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion003\">
                            <ion-icon name=\"chatbox-ellipses-outline\"></ion-icon>
                            Technologies utilisées
                        </button>
                    </h2>
                    <div id=\"accordion003\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <ion-icon name=\"logo-html5\"></ion-icon>
                            <ion-icon name=\"logo-css3\"></ion-icon>
                            <ion-icon name=\"logo-javascript\"></ion-icon>
                            <i class=\"bi bi-bootstrap-fill\"></i>
                            <ion-icon name=\"logo-sass\"></ion-icon>
                            <ion-icon name=\"logo-pwa\"></ion-icon>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 232,  352 => 219,  311 => 181,  304 => 176,  300 => 146,  282 => 130,  275 => 125,  264 => 123,  260 => 122,  255 => 120,  248 => 115,  237 => 113,  233 => 112,  228 => 110,  221 => 105,  210 => 103,  206 => 102,  201 => 100,  194 => 95,  183 => 93,  179 => 92,  174 => 90,  162 => 81,  140 => 61,  126 => 48,  113 => 37,  107 => 34,  97 => 27,  91 => 24,  73 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

{% include 'home/home.css.twig' %}
 <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- CARDS COUNTRY -->
            <div class=\"section mt-4\">
                <div class=\"row\">
                    <div class=\"col-2\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('ville', {'country': 'France'})}}\">
                            <div class=\"card product-card\">
                                <div class=\"card-body text-center\">
                                    <img src=\"{{ asset(\"app/assets/img/sample/photo/France.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">France</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('ville', {'country': 'Belgique'})}}\">
                            <div class=\"card product-card\">
                                <div class=\"card-body  text-center\">
                                    <img src=\"{{ asset(\"app/assets/img/sample/photo/Belgique.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">Belgique</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- * FIN CARDS COUNTRY-->

            {# INPUT RECHERCHE #}
            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-1 px-4\">
                    <form class=\"search-form\">
                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                        </div>
                    </form>
                </div>
            </div>
            {# FIN INPUT RECHERCHE #}

            <!-- BOUTON MODAL TRI -->
            <div>
                <button type=\"button\" class=\"btn btn-primary p-0 ms-4\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                <span class=\"mx-2\">Filtrer</span>
                </button>
            </div>

            <!-- MODAL TRI -->
            <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered \">
                    <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Pays</label>
                            <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" {{required}}>
                                <option value=\"\">/</option>
                                <option value=\"France\">France</option>
                                <option value=\"Belgique\">Belgique</option>
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Région</label>
                            <select name=\"town\" class=\"form-select\" id=\"regionfilter\" {{required}}>
                                <option value=\"\">/</option>
                                {% for name in regions|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Ville</label>
                            <select name=\"town\" class=\"form-select\" id=\"townfilter\" {{required}}>
                                <option value=\"\">/</option>
                                {% for town in towns|sort %}
                                    <option value=\"{{town.name}}\">{{town.name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"type\">Type</label>
                            <select name=\"type\" class=\"form-select\" id=\"typefilter\" {{required}}>
                                <option value=\"\">/</option>
                                {% for name in listes[0]['assotype']|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Couvre-Chef</label>
                            <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" {{required}}>
                                <option value=\"\">/</option>
                                {% for name in listes[0]['hats']|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Genre</label>
                            <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" {{required}}>
                                <option value=\"\">/</option>
                                <option value=\"Mixte\">Mixte</option>
                                <option value=\"Masculin\">Masculin</option>
                                <option value=\"Féminin\">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        <button id=\"btntrier\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Trier</button>
                    </div>
                    </div>
                </div>
            </div>
            {# FIN MODAL TRI #}

            <!-- cards location -->
            {# <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <div><img src=\"{{ asset(\"app/assets/img/sample/photo/Faluche.png\") }}\" class=\"image w-75\" alt=\"product image\"></div>
                                <h2 class=\"title\">Faluche</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"app/assets/img/sample/photo/Calotte.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                <h2 class=\"title\">Calotte</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"app/assets/img/sample/photo/Penne.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                <h2 class=\"title\">Penne</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> #}
            <!-- * cards location -->

        </div>

        <div class=\"text-center\" style=\"margin: 5em; \">
            <img src=\"{{ asset(\"app/assets/img/logo.png\") }}\" alt=\"logo\" class=\"logo 
w-75\">
        </div>
        <!-- app footer -->


        <div class=\"section inset mt-2\" style=\"padding-bottom: 68px !important;\">

            <div class=\"accordion\" id=\"accordionExample3\">
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion001\">
                            <ion-icon name=\"help-circle-outline\"></ion-icon>
                            Le projet FIND
                        </button>
                    </h2>
                    <div id=\"accordion001\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            FIND est une initiative ayant pour but la découverte, le partage et la sauvegarde du folklore étudiant. Vous pourrez y retrouver un grand nombre d’associations étudiantes folkloriques avec des informations tel leur fondation, leurs particularités, leurs goodies et bien d’autres choses !
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion002\">
                            <ion-icon name=\"document-outline\"></ion-icon>
                            Les contributeurs
                        </button>
                    </h2>
                    <div id=\"accordion002\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <!-- <div class=\"section full mt-2 mb-2\"> -->
                                <ul class=\"listview image-listview media\">
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"{{ asset(\"app/assets/img/sample/avatar/avatar1.jpg\") }}\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Estudiantinerie
                                                    <div class=\"text-muted\">Musée Français du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"{{ asset(\"app/assets/img/sample/avatar/avatar2.jpg\") }}\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Musée Belge des Traditions Estudiantines
                                                    <div class=\"text-muted\">Musée Belge du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion003\">
                            <ion-icon name=\"chatbox-ellipses-outline\"></ion-icon>
                            Technologies utilisées
                        </button>
                    </h2>
                    <div id=\"accordion003\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <ion-icon name=\"logo-html5\"></ion-icon>
                            <ion-icon name=\"logo-css3\"></ion-icon>
                            <ion-icon name=\"logo-javascript\"></ion-icon>
                            <i class=\"bi bi-bootstrap-fill\"></i>
                            <ion-icon name=\"logo-sass\"></ion-icon>
                            <ion-icon name=\"logo-pwa\"></ion-icon>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
{% endblock %}
", "home.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/home.html.twig");
    }
}
