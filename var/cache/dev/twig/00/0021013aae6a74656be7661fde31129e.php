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

/* inc/sidebar.html.twig */
class __TwigTemplate_32235245def651010f00a7dc9fc218d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/sidebar.html.twig"));

        // line 1
        echo "<!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged rounded\">
                </div>
                <div class=\"in\">
                    <strong>ChickenWings</strong>
                    <div class=\"text-muted\">
                        <i class=\"bi bi-mortarboard-fill\"></i>
                         Faluchard, Calottin
                    </div>
                </div>
                <a href=\"#\" class=\"close-sidebar-button\" data-bs-dismiss=\"offcanvas\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class=\"listview flush transparent no-line image-listview mt-2\">
                <div class=\"listview-title mt-1 \">
                    <span>FIND</span>
                </div>
                <li>
                    <a href=\"index.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"bookmark-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Mes favoris</div>
                        </div>
                    </a>
                </li>
                <div class=\"listview-title mt-1 \">
                    <span>Modifier mon profil</span>
                </div>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"information-circle-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Informations</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Parcours</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"medal-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Distinctions</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Photos</div>
                        </div>
                    </a>
                </li>
            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"contact.html\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"settings-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"log-out-outline\"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"{{ asset(\"assets/img/sample/avatar/avatar1.jpg\") }}\" alt=\"image\" class=\"imaged rounded\">
                </div>
                <div class=\"in\">
                    <strong>ChickenWings</strong>
                    <div class=\"text-muted\">
                        <i class=\"bi bi-mortarboard-fill\"></i>
                         Faluchard, Calottin
                    </div>
                </div>
                <a href=\"#\" class=\"close-sidebar-button\" data-bs-dismiss=\"offcanvas\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class=\"listview flush transparent no-line image-listview mt-2\">
                <div class=\"listview-title mt-1 \">
                    <span>FIND</span>
                </div>
                <li>
                    <a href=\"index.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"bookmark-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Mes favoris</div>
                        </div>
                    </a>
                </li>
                <div class=\"listview-title mt-1 \">
                    <span>Modifier mon profil</span>
                </div>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"information-circle-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Informations</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Parcours</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"medal-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Distinctions</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Photos</div>
                        </div>
                    </a>
                </li>
            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"contact.html\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"settings-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"log-out-outline\"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->", "inc/sidebar.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/inc/sidebar.html.twig");
    }
}
