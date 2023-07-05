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
class __TwigTemplate_8d418dfdfbe066e1158d247220e2ebcb extends Template
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
        // line 1
        echo "<!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/logos/384x384.png"), "html", null, true);
        }
        echo "\" alt=\"image\" class=\"imaged rounded\">
                </div>
                ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "                    <div class=\"in\">
                        <strong>";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", true, true, false, 11)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 11), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", false, false, false, 11), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", false, false, false, 11), "html", null, true);
            }
            echo "</strong>
                        <div class=\"text-muted\">
                            <i class=\"bi bi-mortarboard-fill\"></i>
                            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "baptism", [], "any", false, false, false, 14));
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
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 56)) {
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 120)) {
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
        return array (  219 => 132,  211 => 128,  204 => 124,  199 => 121,  197 => 120,  186 => 111,  143 => 71,  137 => 67,  135 => 57,  133 => 56,  101 => 26,  95 => 22,  90 => 19,  84 => 18,  78 => 16,  75 => 15,  71 => 14,  59 => 11,  56 => 10,  54 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inc/sidebar.html.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/inc/sidebar.html.twig");
    }
}
