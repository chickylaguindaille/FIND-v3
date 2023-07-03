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

/* security/login.html.twig */
class __TwigTemplate_b466cf3169748b7be66d0958f742fbb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/login.html.twig", 1);
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


    <!-- App Capsule -->
    <div id=\"appCapsule\" class=\"pt-0\">

        <div class=\"login-form mt-1\">
            <div class=\"section\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/logos/512x512xnb.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"form-image mt-3 mb-3\">
            </div>
            <div class=\"section mt-1\">
                <h1>FIND</h1>
                <h4>Remplis le formulaire pour te connecter</h4>
                ";
        // line 26
        if ((array_key_exists("error", $context) && ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()) != ""))) {
            // line 27
            echo "                    <div class=\"text-danger text-start\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageData", [], "any", false, false, false, 27), 0, [], "any", false, false, false, 27), "html", null, true);
            echo "</div
                ";
        }
        // line 29
        echo "            </div>
            <div class=\"section mt-1 mb-5\">
                <form role=\"form\" method=\"post\">
                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password1\" placeholder=\"Mot de passe\" autocomplete=\"off\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-links mt-2\">
                        <div>
                            <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accéder sans connexion</a>
                        </div>
                        <div><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        echo "\" class=\"text-muted\">Mot de passe oublié?</a></div>
                    </div>

\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

                    <div class=\"row fixed-bottom\">
                        ";
        // line 67
        echo "                        <div class=\"col-12 mb-1\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" style=\"width: 95% !important;\">Connexion</button>
                            ";
        // line 70
        echo "                        </div>
                        <div class=\"col-12 mb-2\">
                            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe");
        echo "\" class=\"btn btn-secondary btn-lg btn-block\" style=\"width: 95% !important;\">Inscription</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>


        <div id=\"toast-11\" class=\"toast-box toast-center\" style=\"\">
            <div class=\"in\">
                <ion-icon name=\"person-circle-outline\" class=\"text-danger\"></ion-icon>
                <div class=\"text\">
                Tu dois être connecté afin d'accéder à cette partie
                </div>
            </div>
        </div>
    <!-- * App Capsule -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 97
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 98
        $this->loadTemplate("security/login.js.twig", "security/login.html.twig", 98)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 98,  200 => 97,  190 => 96,  157 => 72,  153 => 70,  149 => 67,  139 => 60,  132 => 54,  127 => 52,  102 => 29,  96 => 27,  94 => 26,  86 => 21,  69 => 6,  59 => 5,  36 => 1,);
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


    <!-- App Capsule -->
    <div id=\"appCapsule\" class=\"pt-0\">

        <div class=\"login-form mt-1\">
            <div class=\"section\">
                <img src=\"{{ asset('app/logos/512x512xnb.png')}}\" alt=\"image\" class=\"form-image mt-3 mb-3\">
            </div>
            <div class=\"section mt-1\">
                <h1>FIND</h1>
                <h4>Remplis le formulaire pour te connecter</h4>
                {% if error is defined and error != \"\" %}
                    <div class=\"text-danger text-start\">{{error.messageData.0}}</div
                {% endif %}
            </div>
            <div class=\"section mt-1 mb-5\">
                <form role=\"form\" method=\"post\">
                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password1\" placeholder=\"Mot de passe\" autocomplete=\"off\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-links mt-2\">
                        <div>
                            <a href=\"{{path('accueil')}}\">Accéder sans connexion</a>
                        </div>
                        <div><a href=\"{{path('forgot_password')}}\" class=\"text-muted\">Mot de passe oublié?</a></div>
                    </div>

\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t{# <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\">
\t\t\t\t\t\t<label class=\"form-check-label\" for=\"remember_me\">Se souvenir de moi</label> #}
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

                    <div class=\"row fixed-bottom\">
                        {# <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Connexion</button> #}
                        <div class=\"col-12 mb-1\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\" style=\"width: 95% !important;\">Connexion</button>
                            {# <a href=\"app-components.html\" class=\"btn btn-primary btn-lg\" style=\"width: 95% !important;\">Connexion</a> #}
                        </div>
                        <div class=\"col-12 mb-2\">
                            <a href=\"{{path('subscribe')}}\" class=\"btn btn-secondary btn-lg btn-block\" style=\"width: 95% !important;\">Inscription</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>


        <div id=\"toast-11\" class=\"toast-box toast-center\" style=\"\">
            <div class=\"in\">
                <ion-icon name=\"person-circle-outline\" class=\"text-danger\"></ion-icon>
                <div class=\"text\">
                Tu dois être connecté afin d'accéder à cette partie
                </div>
            </div>
        </div>
    <!-- * App Capsule -->

{% endblock %}

{% block javascript %}
    {{ parent() }}
    {% include 'security/login.js.twig' %}
{% endblock %}", "security/login.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/login.html.twig");
    }
}
