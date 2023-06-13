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

/* security/subscribe.html.twig */
class __TwigTemplate_8ba459235e30547e30013d01819e0920 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/subscribe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<body class=\"bg-white\">

    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader no-border transparent position-absolute\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton goBack\">
                <ion-icon name=\"chevron-back-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\"></div>
        <div class=\"right\">
            ";
        // line 27
        echo "        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"login-form\">
            <div class=\"section\">
                <h1>Inscription</h1>
                <h4>Remplis le formulaire pour rejoindre FIND</h4>
            </div>
            <div class=\"section mt-2 mb-5\">
                <form id=\"subscribe-form\" role=\"form\" method=\"post\" action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_ajax_subscribe");
        echo "\">
                ";
        // line 41
        if ((array_key_exists("error", $context) && ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()) != ""))) {
            // line 42
            echo "                    <div class=\"text-danger text-start\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 44
        echo "                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"Prénom\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Nom de famille\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"nickname\" name=\"nickname\" placeholder=\"Surnom\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"password1\" autocomplete=\"off\" placeholder=\"Mot de passe\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    ";
        // line 97
        echo "
                    <div class=\" mt-1 text-start\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheckb1\">
                            <label class=\"form-check-label\" for=\"customCheckb1\">J'accepte les <a href=\"#\">CGU</a></label>
                        </div>

                    </div>

                    <div class=\"form-button-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Inscription</button>
                    </div>

                </form>
            </div>
        </div>



    </div>
    <!-- * App Capsule -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 97,  115 => 44,  109 => 42,  107 => 41,  103 => 40,  88 => 27,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{# {% block title %}Accueil{% endblock %} #}

{% block body %}

<body class=\"bg-white\">

    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader no-border transparent position-absolute\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton goBack\">
                <ion-icon name=\"chevron-back-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\"></div>
        <div class=\"right\">
            {# <a href=\"{{path('login')}}\" class=\"headerButton\">
                Connexion
            </a> #}
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"login-form\">
            <div class=\"section\">
                <h1>Inscription</h1>
                <h4>Remplis le formulaire pour rejoindre FIND</h4>
            </div>
            <div class=\"section mt-2 mb-5\">
                <form id=\"subscribe-form\" role=\"form\" method=\"post\" action=\"{{path('auth_ajax_subscribe')}}\">
                {% if error is defined and error != \"\" %}
                    <div class=\"text-danger text-start\">{{error}}</div>
                {% endif %}
                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"Prénom\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Nom de famille\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"text\" class=\"form-control\" id=\"nickname\" name=\"nickname\" placeholder=\"Surnom\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"password1\" autocomplete=\"off\" placeholder=\"Mot de passe\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    {# <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"password\" class=\"form-control\" id=\"password2\" autocomplete=\"off\" placeholder=\"Password (again)\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div> #}

                    <div class=\" mt-1 text-start\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"customCheckb1\">
                            <label class=\"form-check-label\" for=\"customCheckb1\">J'accepte les <a href=\"#\">CGU</a></label>
                        </div>

                    </div>

                    <div class=\"form-button-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Inscription</button>
                    </div>

                </form>
            </div>
        </div>



    </div>
    <!-- * App Capsule -->

{% endblock %}", "security/subscribe.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/subscribe.html.twig");
    }
}
