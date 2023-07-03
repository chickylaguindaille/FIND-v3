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

/* profile/profile.html.twig */
class __TwigTemplate_145055509e316fc3eff29b0ab5bf0a6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "profile/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"profile-head\">
                <div class=\"avatar\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"imaged w64 rounded\">
                </div>
                <div class=\"in\">
                    <h3 class=\"name\">";
        // line 13
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", false, false, false, 13), "html", null, true))) : (print ("")));
        echo " ";
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", false, false, false, 13), "html", null, true))) : (print ("")));
        echo "</h3>
                    <h5 class=\"subtext\">";
        // line 14
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "</h5>
                </div>

                <button type=\"button\" class=\"mx-4 btn btn-outline-secondary btn-sm\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetShareBox\">Contacter</button>


                <!-- Share Box Action Sheet -->
                <div class=\"offcanvas offcanvas-bottom action-sheet inset\" tabindex=\"-1\" id=\"actionSheetShareBox\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\">Contacter</h5>
                    </div>
                    <div class=\"offcanvas-body\">
                        <div class=\"action-sheet-content text-center\">
                            <div class=\"row justify-content-center\">
                                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 28), "phone", [], "any", true, true, false, 28) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "socialmedia", [], "any", false, false, false, 28), "phone", [], "any", false, false, false, 28)))) {
            // line 29
            echo "                                    <div class=\"col-2\">
                                        <a href=\"tel:";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 30, $this->source); })()), "socialmedia", [], "any", false, false, false, 30), "phone", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-icon btn-success\">
                                            <ion-icon name=\"call-outline\"></ion-icon>
                                        </a>
                                    </div>
                                ";
        }
        // line 35
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 35), "facebook", [], "any", true, true, false, 35) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 35, $this->source); })()), "socialmedia", [], "any", false, false, false, 35), "facebook", [], "any", false, false, false, 35)))) {
            // line 36
            echo "                                    <div class=\"col-2\">
                                        <a href=\"";
            // line 37
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 37), "facebook", [], "any", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 37), "facebook", [], "any", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 37), "facebook", [], "any", false, false, false, 37), "html", null, true))) : (print ("")));
            echo "\" target=\"_blank\" class=\"btn btn-icon btn-facebook\">
                                            <ion-icon name=\"logo-facebook\"></ion-icon>
                                        </a>
                                    </div>
                                ";
        }
        // line 42
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 42), "twitter", [], "any", true, true, false, 42) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 42, $this->source); })()), "socialmedia", [], "any", false, false, false, 42), "twitter", [], "any", false, false, false, 42)))) {
            // line 43
            echo "                                    <div class=\"col-2\">
                                        <a href=\"";
            // line 44
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 44), "twitter", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 44), "twitter", [], "any", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 44), "twitter", [], "any", false, false, false, 44), "html", null, true))) : (print ("")));
            echo "\" target=\"_blank\" class=\"btn btn-icon btn-twitter\">
                                            <ion-icon name=\"logo-twitter\"></ion-icon>
                                        </a>
                                    </div>
                                ";
        }
        // line 49
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 49), "linkedin", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 49, $this->source); })()), "socialmedia", [], "any", false, false, false, 49), "linkedin", [], "any", false, false, false, 49)))) {
            // line 50
            echo "                                    <div class=\"col-2\">
                                        <a href=\"";
            // line 51
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 51), "linkedin", [], "any", true, true, false, 51) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 51), "linkedin", [], "any", false, false, false, 51)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 51), "linkedin", [], "any", false, false, false, 51), "html", null, true))) : (print ("")));
            echo "\" target=\"_blank\" class=\"btn btn-icon btn-linkedin\">
                                            <ion-icon name=\"logo-linkedin\"></ion-icon>
                                        </a>
                                    </div>
                                ";
        }
        // line 56
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 56), "instagram", [], "any", true, true, false, 56) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 56, $this->source); })()), "socialmedia", [], "any", false, false, false, 56), "instagram", [], "any", false, false, false, 56)))) {
            // line 57
            echo "                                    <div class=\"col-2\">
                                        <a href=\"";
            // line 58
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 58), "instagram", [], "any", true, true, false, 58) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 58), "instagram", [], "any", false, false, false, 58)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 58), "instagram", [], "any", false, false, false, 58), "html", null, true))) : (print ("")));
            echo "\" target=\"_blank\" class=\"btn btn-icon btn-instagram\">
                                            <ion-icon name=\"logo-instagram\"></ion-icon>
                                        </a>
                                    </div>
                                ";
        }
        // line 63
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Share Box Action Sheet -->




            </div>
        </div>

        <div class=\"section mt-1 mb-2\">
            <div class=\"profile-info\">
                <div class=\" bio\">
                    ";
        // line 78
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", true, true, false, 78) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 78)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 78), "html", null, true))) : (print ("")));
        echo "
                </div>
                <!-- <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Paris</span>
                </div>
                <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Namur</span>
                </div> -->
            </div>
        </div>

        <div class=\"section full\">
            <div class=\"wide-block transparent p-0\">
                <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#career\" role=\"tab\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#feed\" role=\"tab\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#friends\" role=\"tab\">
                            <ion-icon name=\"people-outline\"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class=\"section full mb-2\">
            <div class=\"tab-content\">

                <!-- feed -->
                <div class=\"tab-pane fade\" id=\"feed\" role=\"tabpanel\">
                    <div class=\"mt-2 p-2 pt-0 pb-0\">
                        <div class=\"row\">
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                        </div>
                    </div>
                    <div class=\"p-2 pt-0 pb-0\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">More Photo</a>
                    </div>
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\">
                    <ul class=\"listview image-listview flush transparent pt-1\">
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Edward Lindgren
                                        <div class=\"text-muted\">532 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Emelda Scandroot
                                        <div class=\"text-muted\">120k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Henry Bove
                                        <div class=\"text-muted\">920k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Ava Gregoraci
                                        <div class=\"text-muted\">5092 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Emmy Elsner
                                        <div class=\"text-muted\">92 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Lisanne Viscaal
                                        <div class=\"text-muted\">893 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Cecilia Pozo
                                        <div class=\"text-muted\">51k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- * friends -->

                <!--  career -->
                <div class=\"tab-pane fade show active\" id=\"career\" role=\"tabpanel\">

                        <div class=\"px-4 pt-2 pb-2\"  style=\"padding-bottom: 68px !important;\">
    
                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#parcours\" role=\"tab\">
                                        Parcours
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#distinctions\" role=\"tab\">
                                        Distinctions
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#associations\" role=\"tab\">
                                        Associations
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"parcours\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Calottin</h4>
                                                <div class=\"text\">Régionale Tournai-Mouscron, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2018</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Béjaune</h4>
                                                <div class=\"text\">Ordre Rabelaisien de Belgique, Belgique</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2019</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Stagiaire</h4>
                                                <div class=\"text\">Musée Belge des Traditions Estudiantines</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2020</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Impétrant</h4>
                                                <div class=\"text\">Interfilière Paris</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2022</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Faluchard</h4>
                                                <div class=\"text\">Interfilière, Paris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"distinctions\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Lindgren
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                        </div>


                </div>
                <!-- * career -->
            </div>
        </div>
        <!-- * tab content -->

    </div>
    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 427,  604 => 416,  590 => 405,  576 => 394,  562 => 383,  548 => 372,  534 => 361,  411 => 241,  397 => 230,  383 => 219,  369 => 208,  355 => 197,  341 => 186,  327 => 175,  309 => 160,  303 => 157,  297 => 154,  291 => 151,  285 => 148,  279 => 145,  273 => 142,  267 => 139,  261 => 136,  255 => 133,  249 => 130,  243 => 127,  191 => 78,  174 => 63,  166 => 58,  163 => 57,  160 => 56,  152 => 51,  149 => 50,  146 => 49,  138 => 44,  135 => 43,  132 => 42,  124 => 37,  121 => 36,  118 => 35,  110 => 30,  107 => 29,  105 => 28,  88 => 14,  82 => 13,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"profile-head\">
                <div class=\"avatar\">
                    <img src=\"{{ asset(\"assets/img/sample/avatar/avatar1.jpg\") }}\" alt=\"avatar\" class=\"imaged w64 rounded\">
                </div>
                <div class=\"in\">
                    <h3 class=\"name\">{{profile.firstname??\"\"}} {{profile.lastname??\"\"}}</h3>
                    <h5 class=\"subtext\">{{profile.username??\"\"}}</h5>
                </div>

                <button type=\"button\" class=\"mx-4 btn btn-outline-secondary btn-sm\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetShareBox\">Contacter</button>


                <!-- Share Box Action Sheet -->
                <div class=\"offcanvas offcanvas-bottom action-sheet inset\" tabindex=\"-1\" id=\"actionSheetShareBox\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\">Contacter</h5>
                    </div>
                    <div class=\"offcanvas-body\">
                        <div class=\"action-sheet-content text-center\">
                            <div class=\"row justify-content-center\">
                                {% if profile.socialmedia.phone is defined and profile.socialmedia.phone is not empty %}
                                    <div class=\"col-2\">
                                        <a href=\"tel:{{profile.socialmedia.phone}}\" class=\"btn btn-icon btn-success\">
                                            <ion-icon name=\"call-outline\"></ion-icon>
                                        </a>
                                    </div>
                                {% endif %}
                                {% if profile.socialmedia.facebook is defined and profile.socialmedia.facebook is not empty %}
                                    <div class=\"col-2\">
                                        <a href=\"{{profile.socialmedia.facebook??\"\"}}\" target=\"_blank\" class=\"btn btn-icon btn-facebook\">
                                            <ion-icon name=\"logo-facebook\"></ion-icon>
                                        </a>
                                    </div>
                                {% endif %}
                                {% if profile.socialmedia.twitter is defined and profile.socialmedia.twitter is not empty %}
                                    <div class=\"col-2\">
                                        <a href=\"{{profile.socialmedia.twitter??\"\"}}\" target=\"_blank\" class=\"btn btn-icon btn-twitter\">
                                            <ion-icon name=\"logo-twitter\"></ion-icon>
                                        </a>
                                    </div>
                                {% endif %}
                                {% if profile.socialmedia.linkedin is defined and profile.socialmedia.linkedin is not empty %}
                                    <div class=\"col-2\">
                                        <a href=\"{{profile.socialmedia.linkedin??\"\"}}\" target=\"_blank\" class=\"btn btn-icon btn-linkedin\">
                                            <ion-icon name=\"logo-linkedin\"></ion-icon>
                                        </a>
                                    </div>
                                {% endif %}
                                {% if profile.socialmedia.instagram is defined and profile.socialmedia.instagram is not empty %}
                                    <div class=\"col-2\">
                                        <a href=\"{{profile.socialmedia.instagram??\"\"}}\" target=\"_blank\" class=\"btn btn-icon btn-instagram\">
                                            <ion-icon name=\"logo-instagram\"></ion-icon>
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Share Box Action Sheet -->




            </div>
        </div>

        <div class=\"section mt-1 mb-2\">
            <div class=\"profile-info\">
                <div class=\" bio\">
                    {{profile.bio??\"\"}}
                </div>
                <!-- <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Paris</span>
                </div>
                <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Namur</span>
                </div> -->
            </div>
        </div>

        <div class=\"section full\">
            <div class=\"wide-block transparent p-0\">
                <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#career\" role=\"tab\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#feed\" role=\"tab\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#friends\" role=\"tab\">
                            <ion-icon name=\"people-outline\"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class=\"section full mb-2\">
            <div class=\"tab-content\">

                <!-- feed -->
                <div class=\"tab-pane fade\" id=\"feed\" role=\"tabpanel\">
                    <div class=\"mt-2 p-2 pt-0 pb-0\">
                        <div class=\"row\">
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                        </div>
                    </div>
                    <div class=\"p-2 pt-0 pb-0\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">More Photo</a>
                    </div>
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\">
                    <ul class=\"listview image-listview flush transparent pt-1\">
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Edward Lindgren
                                        <div class=\"text-muted\">532 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Emelda Scandroot
                                        <div class=\"text-muted\">120k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Henry Bove
                                        <div class=\"text-muted\">920k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Ava Gregoraci
                                        <div class=\"text-muted\">5092 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Emmy Elsner
                                        <div class=\"text-muted\">92 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Lisanne Viscaal
                                        <div class=\"text-muted\">893 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Cecilia Pozo
                                        <div class=\"text-muted\">51k followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- * friends -->

                <!--  career -->
                <div class=\"tab-pane fade show active\" id=\"career\" role=\"tabpanel\">

                        <div class=\"px-4 pt-2 pb-2\"  style=\"padding-bottom: 68px !important;\">
    
                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#parcours\" role=\"tab\">
                                        Parcours
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#distinctions\" role=\"tab\">
                                        Distinctions
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#associations\" role=\"tab\">
                                        Associations
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"parcours\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Calottin</h4>
                                                <div class=\"text\">Régionale Tournai-Mouscron, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2018</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Béjaune</h4>
                                                <div class=\"text\">Ordre Rabelaisien de Belgique, Belgique</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2019</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Stagiaire</h4>
                                                <div class=\"text\">Musée Belge des Traditions Estudiantines</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2020</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Impétrant</h4>
                                                <div class=\"text\">Interfilière Paris</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2022</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Faluchard</h4>
                                                <div class=\"text\">Interfilière, Paris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"distinctions\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Lindgren
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                        </div>


                </div>
                <!-- * career -->
            </div>
        </div>
        <!-- * tab content -->

    </div>
    <!-- * App Capsule -->
{% endblock %}", "profile/profile.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/profile/profile.html.twig");
    }
}
