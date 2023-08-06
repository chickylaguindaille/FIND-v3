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

/* find/home.html.twig */
class __TwigTemplate_bc57111c1abd7bdfabd6ce010ec17e64 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/home.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        $this->loadTemplate("find/home.css.twig", "find/home.html.twig", 7)->display($context);
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/autocomplete/library/bootstrap-5/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/autocomplete/library/autocomplete.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
 <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- CARDS COUNTRY -->
            ";
        // line 52
        echo "            <!-- * FIN CARDS COUNTRY-->

            ";
        // line 55
        echo "            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-1 px-4\">
                    <form class=\"search-form\" action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations_hp");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">


                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control inputsearch\" name=\"text\" placeholder=\"Recherche..\" id=\"findinput\" data-urlaction=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_corporations");
        echo "\">
                            
                            ";
        // line 64
        echo "
                            
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                                <button type=\"submit\" class=\"btn btn-primary ms-1 p-0 \" style=\"height: 36px !important;\">
                                    <span class=\"mx-2\">FIND</span>
                                </button>
                        </div>
                         
                        ";
        // line 88
        echo "
                        ";
        // line 104
        echo "                </div>
            </div>
            ";
        // line 107
        echo "
            <!-- BOUTON MODAL TRI -->
            <div>
                <button type=\"button\" class=\"homebtn btn btn-primary p-0 ms-4\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                <span class=\"mx-2\">Filtrer</span>
                </button>

                <span id=\"countrychoice\"></span>
                <span id=\"regionchoice\"></span>
                <span id=\"townchoice\"></span>
                <span id=\"typechoice\"></span>
                <span id=\"hatchoice\"></span>
                <span id=\"genderchoice\"></span>
            </div>


";
        // line 123
        $this->loadTemplate("inc/tri_filtre/filtre.html.twig", "find/home.html.twig", 123)->display($context);
        // line 124
        echo "

</form>
            <!-- cards location -->
            ";
        // line 156
        echo "            <!-- * cards location -->

        </div>

        <div class=\"text-center\" style=\"margin: 5em; \">
            <img src=\"";
        // line 161
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
        // line 199
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
        // line 212
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

    // line 256
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 257
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 258
        $this->loadTemplate("find/home.js.twig", "find/home.html.twig", 258)->display($context);
        // line 259
        echo "    ";
        $this->loadTemplate("find/corporations/corporations.js.twig", "find/home.html.twig", 259)->display($context);
        // line 260
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "find/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 260,  318 => 259,  316 => 258,  311 => 257,  301 => 256,  248 => 212,  232 => 199,  191 => 161,  184 => 156,  178 => 124,  176 => 123,  158 => 107,  154 => 104,  151 => 88,  139 => 64,  134 => 61,  127 => 57,  123 => 55,  119 => 52,  105 => 14,  95 => 13,  82 => 9,  77 => 8,  75 => 7,  70 => 6,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block stylesheets %}
    {{ parent() }}
    {% include 'find/home.css.twig' %}
    <script src=\"{{ asset(\"app/autocomplete/library/bootstrap-5/bootstrap.bundle.min.js\") }}\"></script>
    <script src=\"{{ asset(\"app/autocomplete/library/autocomplete.js\") }}\"></script>

{% endblock %}

{% block content %}

 <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- CARDS COUNTRY -->
            {# <div class=\"section mt-4\">
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
            </div> #}
            <!-- * FIN CARDS COUNTRY-->

            {# INPUT RECHERCHE #}
            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-1 px-4\">
                    <form class=\"search-form\" action=\"{{ path('corporations_hp')}}\" method=\"post\" enctype=\"multipart/form-data\">


                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control inputsearch\" name=\"text\" placeholder=\"Recherche..\" id=\"findinput\" data-urlaction=\"{{ path(\"search_corporations\") }}\">
                            
                            {# <input type=\"text\" name=\"country_name\" id=\"\" class=\"form-control form-control-lg\" placeholder=\"Country Name\" /> #}

                            
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                                <button type=\"submit\" class=\"btn btn-primary ms-1 p-0 \" style=\"height: 36px !important;\">
                                    <span class=\"mx-2\">FIND</span>
                                </button>
                        </div>
                         
                        {# <div class=\"form-group searchbox d-flex\">
                            <div class=\"\">
                                <input type=\"text\" name=\"remote\" class=\"form-control autocomplete inputsearch\" id=\"select-remote\" placeholder=\"Recherche..\"
                                data-full-width=\"1\" data-server=\"\" data-live-server=\"true\" data-server-data-key=\"items\"
                                data-hidden-input=\"true\" data-label-field=\"title\" data-value-field=\"id\" data-url-param=\"url\" data-live-server=\"true\" data-urlaction=\"{{ path(\"search_corporations\") }}\" />
                                <i class=\"input-icon\">
                                    <ion-icon name=\"search-outline\"></ion-icon>
                                </i>

                            </div>
                            <button type=\"submit\" class=\"btn btn-primary ms-1 p-0 \" style=\"height: 36px !important;\">
                                <span class=\"mx-2\">FIND</span>
                            </button>
                        </div> #}

                        {# <div class=\"form-group searchbox d-flex\">
                            <div class=\"\">
                                <input type=\"text\" class=\"form-control autocomplete inputsearch\" id=\"select-remote\" placeholder=\"Recherche..\"
                                data-full-width=\"1\" data-server=\"\" data-live-server=\"true\" data-server-data-key=\"items\"
                                data-hidden-input=\"true\" data-label-field=\"title\" data-value-field=\"id\" data-url-param=\"url\" data-live-server=\"true\" data-urlaction=\"{{ path(\"search_corporations\") }}\" />
                                
                                <i class=\"input-icon\">
                                    <ion-icon name=\"search-outline\"></ion-icon>
                                </i>

                            </div>
                            <button type=\"submit\" class=\"btn btn-primary ms-1 p-0 \" style=\"height: 36px !important;\">
                                <span class=\"mx-2\">FIND</span>
                            </button>
                        </div> #}
                </div>
            </div>
            {# FIN INPUT RECHERCHE #}

            <!-- BOUTON MODAL TRI -->
            <div>
                <button type=\"button\" class=\"homebtn btn btn-primary p-0 ms-4\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                <span class=\"mx-2\">Filtrer</span>
                </button>

                <span id=\"countrychoice\"></span>
                <span id=\"regionchoice\"></span>
                <span id=\"townchoice\"></span>
                <span id=\"typechoice\"></span>
                <span id=\"hatchoice\"></span>
                <span id=\"genderchoice\"></span>
            </div>


{% include 'inc/tri_filtre/filtre.html.twig' %}


</form>
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

{% block javascript %}
    {{ parent() }}
    {% include 'find/home.js.twig' %}
    {% include 'find/corporations/corporations.js.twig' %}


{% endblock %}

", "find/home.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/home.html.twig");
    }
}
