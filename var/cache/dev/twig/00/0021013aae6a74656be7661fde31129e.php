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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7)) {
            if ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "imgprofile", [], "any", true, true, false, 7) && (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "imgprofile", [], "any", false, false, false, 7) != ""))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "imgprofile", [], "any", false, false, false, 7), "html", null, true);
            } else {
                echo "https://www.photoprof.fr/images_dp/photographes/profil_vide.jpg";
            }
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/logos/384x384.png"), "html", null, true);
        }
        echo "\" alt=\"image\" class=\"imaged rounded\">
                </div>
                ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "                    <div class=\"in\">
                        <strong>";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", true, true, false, 11)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 11, $this->source); })()), "lastname", [], "any", false, false, false, 11), "html", null, true);
            }
            echo "</strong>
                        <div class=\"text-muted\">
                            <i class=\"bi bi-mortarboard-fill\"></i>
                            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 14, $this->source); })()), "baptism", [], "any", false, false, false, 14));
            foreach ($context['_seq'] as $context["keybaptism"] => $context["status"]) {
                // line 15
                echo "                                ";
                if (($context["status"] == "on")) {
                    // line 16
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["keybaptism"], "html", null, true);
                    echo "
                                ";
                }
                // line 18
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keybaptism'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                        </div>
                    </div>
                ";
        } else {
            // line 22
            echo "                    <div class=\"in\">
                        <strong>Folklore Is Not Dead</strong>
                    </div>
                ";
        }
        // line 26
        echo "                <a href=\"#\" class=\"close-sidebar-button\" data-bs-dismiss=\"offcanvas\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class=\"listview flush transparent no-line image-listview mt-2\">
                <div class=\"listview-title mt-1 \">
                    <span>FIND</span>
                </div>
                <li>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                ";
            // line 67
            echo "                    <div class=\"listview-title mt-1 \">
                        <span>Modifier mon profil</span>
                    </div>
                    <li>
                        <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification_informations");
            echo "\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"information-circle-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Informations</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"git-branch-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Parcours</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"medal-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Distinctions</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            echo "\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"grid-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Photos</div>
                            </div>
                        </a>
                    </li>
                ";
        }
        // line 111
        echo "            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"contact.html\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120)) {
            // line 121
            echo "                <a href=\"#\" class=\"button\">
                    <ion-icon name=\"settings-outline\"></ion-icon>
                </a>
                <a href=\"";
            // line 124
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"button\">
                    <ion-icon name=\"log-out-outline\"></ion-icon>
                </a>
            ";
        } else {
            // line 128
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"button\">
                    <ion-icon name=\"log-in-outline\"></ion-icon>
                </a>
            ";
        }
        // line 132
        echo "        </div>
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
        return array (  244 => 132,  236 => 128,  229 => 124,  224 => 121,  222 => 120,  211 => 111,  198 => 101,  185 => 91,  172 => 81,  159 => 71,  153 => 67,  151 => 57,  149 => 56,  137 => 47,  124 => 37,  111 => 26,  105 => 22,  100 => 19,  94 => 18,  88 => 16,  85 => 15,  81 => 14,  69 => 11,  66 => 10,  64 => 9,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"{% if app.user %}{% if profile.imgprofile is defined and profile.imgprofile != \"\" %}{{profile.imgprofile}}{% else %}https://www.photoprof.fr/images_dp/photographes/profil_vide.jpg{% endif %}{% else %}{{ asset(\"app/logos/384x384.png\") }}{% endif %}\" alt=\"image\" class=\"imaged rounded\">
                </div>
                {% if app.user %}
                    <div class=\"in\">
                        <strong>{% if profile.username is defined %}{{profile.username}}{% else %}{{profile.firstname}} {{profile.lastname}}{% endif %}</strong>
                        <div class=\"text-muted\">
                            <i class=\"bi bi-mortarboard-fill\"></i>
                            {% for keybaptism, status in profile.baptism %}
                                {% if status == \"on\" %}
                                    {{keybaptism}}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                {% else %}
                    <div class=\"in\">
                        <strong>Folklore Is Not Dead</strong>
                    </div>
                {% endif %}
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
                    <a href=\"{{ path('accueil')}}\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"{{ path('accueil')}}\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                {% if app.user %}
                {# <li>
                    <a href=\"{{ path('accueil')}}\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"bookmark-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Mes favoris</div>
                        </div>
                    </a>
                </li> #}
                    <div class=\"listview-title mt-1 \">
                        <span>Modifier mon profil</span>
                    </div>
                    <li>
                        <a href=\"{{ path('modification_informations')}}\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"information-circle-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Informations</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('accueil')}}\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"git-branch-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Parcours</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('accueil')}}\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"medal-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Distinctions</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('accueil')}}\" class=\"item\">
                            <div class=\"icon-box bg-primary\">
                                <ion-icon name=\"grid-outline\"></ion-icon>
                            </div>
                            <div class=\"in\">
                                <div>Photos</div>
                            </div>
                        </a>
                    </li>
                {% endif %}
            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"contact.html\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            {% if app.user %}
                <a href=\"#\" class=\"button\">
                    <ion-icon name=\"settings-outline\"></ion-icon>
                </a>
                <a href=\"{{path('logout')}}\" class=\"button\">
                    <ion-icon name=\"log-out-outline\"></ion-icon>
                </a>
            {% else %}
                <a href=\"{{path('login')}}\" class=\"button\">
                    <ion-icon name=\"log-in-outline\"></ion-icon>
                </a>
            {% endif %}
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->", "inc/sidebar.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/inc/sidebar.html.twig");
    }
}
