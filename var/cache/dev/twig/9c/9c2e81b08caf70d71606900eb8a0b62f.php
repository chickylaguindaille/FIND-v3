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
class __TwigTemplate_2305f3cfde6719876ef17fec023b50f5 extends Template
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
        echo " <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- cards location -->
            <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-2\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "France"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body text-center\">
                                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/France.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">France</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "Belgique"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body  text-center\">
                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Belgique.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">Belgique</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- * cards location -->


            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-2 px-4\">
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


                                    <!-- Button trigger modal tri -->
                                    <div>
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    <!-- Modal tri -->
                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Pays</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 79, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        <option value=\"France\">France</option>
                                                        <option value=\"Belgique\">Belgique</option>
                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Région</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"regionfilter\" ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 90, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 91
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"town\">Ville</label>
                                                    <select name=\"town\" class=\"form-select\" id=\"townfilter\" ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 98, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 100, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 101
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"type\">Type</label>
                                                    <select name=\"type\" class=\"form-select\" id=\"typefilter\" ";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 108, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 110, $this->source); })()), 0, [], "array", false, false, false, 110), "assotype", [], "array", false, false, false, 110)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 111
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Couvre-Chef</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 118, $this->source); })()), "html", null, true);
        echo ">
                                                        <option value=\"\">/</option>
                                                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 120, $this->source); })()), 0, [], "array", false, false, false, 120), "hats", [], "array", false, false, false, 120)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 121
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                                    </select>
                                                </div>

                                                <div class=\"form-group col-12\">
                                                    <label for=\"hat\">Genre</label>
                                                    <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" ";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 128, $this->source); })()), "html", null, true);
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

            <!-- cards location -->
            ";
        // line 173
        echo "            <!-- * cards location -->

        </div>

        <div class=\"p-4 text-center\">
            <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo w-50\">
        </div>
        <!-- app footer -->


        <div class=\"section inset mt-2 mb-2\">

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
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
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
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar2.jpg"), "html", null, true);
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
        return array (  358 => 228,  342 => 215,  302 => 178,  295 => 173,  275 => 128,  268 => 123,  257 => 121,  253 => 120,  248 => 118,  241 => 113,  230 => 111,  226 => 110,  221 => 108,  214 => 103,  203 => 101,  199 => 100,  194 => 98,  187 => 93,  176 => 91,  172 => 90,  167 => 88,  155 => 79,  108 => 35,  102 => 32,  92 => 25,  86 => 22,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}
 <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- cards location -->
            <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-2\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('ville', {'country': 'France'})}}\">
                            <div class=\"card product-card\">
                                <div class=\"card-body text-center\">
                                    <img src=\"{{ asset(\"assets/img/sample/photo/France.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">France</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"{{ path('ville', {'country': 'Belgique'})}}\">
                            <div class=\"card product-card\">
                                <div class=\"card-body  text-center\">
                                    <img src=\"{{ asset(\"assets/img/sample/photo/Belgique.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">Belgique</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- * cards location -->


            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-2 px-4\">
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


                                    <!-- Button trigger modal tri -->
                                    <div>
                                        <button type=\"button\" class=\"btn btn-primary p-2\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                                        <span class=\"mx-2\">Filtrer</span><i class=\"bi bi-chevron-down\"></i>
                                        </button>
                                    </div>

                                    <!-- Modal tri -->
                                    <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
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

            <!-- cards location -->
            {# <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <div><img src=\"{{ asset(\"assets/img/sample/photo/Faluche.png\") }}\" class=\"image w-75\" alt=\"product image\"></div>
                                <h2 class=\"title\">Faluche</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/Calotte.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                <h2 class=\"title\">Calotte</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/Penne.png\") }}\" class=\"image w-75\" alt=\"product image\">
                                <h2 class=\"title\">Penne</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> #}
            <!-- * cards location -->

        </div>

        <div class=\"p-4 text-center\">
            <img src=\"{{ asset(\"assets/img/logo.png\") }}\" alt=\"logo\" class=\"logo w-50\">
        </div>
        <!-- app footer -->


        <div class=\"section inset mt-2 mb-2\">

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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar1.jpg\") }}\" alt=\"image\" class=\"imaged w64\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar2.jpg\") }}\" alt=\"image\" class=\"imaged w64\">
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
{% endblock %}", "home.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/home.html.twig");
    }
}
