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
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/product1.jpg"), "html", null, true);
        echo "\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">France</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/product4.jpg"), "html", null, true);
        echo "\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Belgique</h2>
                            </div>
                        </div>
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


            <!-- cards location -->
            <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/product1.jpg"), "html", null, true);
        echo "\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Faluche</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/product4.jpg"), "html", null, true);
        echo "\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Calotte</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/product4.jpg"), "html", null, true);
        echo "\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Penne</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- * cards location -->

        </div>

        <div class=\"p-4 text-center\">
            <img src=\"";
        // line 90
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
        // line 127
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
        // line 140
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
        return array (  225 => 140,  209 => 127,  169 => 90,  154 => 78,  143 => 70,  132 => 62,  99 => 32,  88 => 24,  68 => 6,  58 => 5,  35 => 1,);
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
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/product1.jpg\") }}\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">France</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/product4.jpg\") }}\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Belgique</h2>
                            </div>
                        </div>
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


            <!-- cards location -->
            <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/product1.jpg\") }}\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Faluche</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/product4.jpg\") }}\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Calotte</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-4\">
                        <div class=\"card product-card\">
                            <div class=\"card-body  text-center\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/product4.jpg\") }}\" class=\"image\" alt=\"product image\">
                                <h2 class=\"title\">Penne</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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