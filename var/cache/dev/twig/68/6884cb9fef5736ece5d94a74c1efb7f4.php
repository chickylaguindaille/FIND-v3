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

/* find/town.html.twig */
class __TwigTemplate_b4b83d228449b70c676e374ed4935a61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/town.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/town.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/town.html.twig", 1);
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
        // line 21
        echo twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 21, $this->source); })()), "html", null, true);
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



        <div class=\"listview-title sticky-title\">
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
                            <h4 class=\"mb-05\">Paris</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


    </div>


    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "find/town.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block content %}

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



        <div class=\"listview-title sticky-title\">
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
                            <h4 class=\"mb-05\">Paris</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


    </div>


    <!-- * App Capsule -->
{% endblock %}", "find/town.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/town.html.twig");
    }
}
