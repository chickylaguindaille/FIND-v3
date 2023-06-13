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

/* security/forgotpassword.html.twig */
class __TwigTemplate_9085091eda361f21c4486632b587e007 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgotpassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgotpassword.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "security/forgotpassword.html.twig", 1);
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
                <h1>Réintialiser mot de passe</h1>
                <h4>Tape ton email pour reintialiser ton mot de passe</h4>
            </div>
            <div class=\"section mt-2 mb-5\">
                <form action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_reset_request_password");
        echo "\">

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" class=\"form-control\" id=\"name1\" name=\"email\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-button-group\">
                        ";
        // line 53
        echo "                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Envoyer une demande</button>
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
        return "security/forgotpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  103 => 40,  88 => 27,  68 => 6,  58 => 5,  35 => 1,);
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
            {# <a href=\"page-login.html\" class=\"headerButton\">
                Connexion
            </a> #}
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"login-form\">
            <div class=\"section\">
                <h1>Réintialiser mot de passe</h1>
                <h4>Tape ton email pour reintialiser ton mot de passe</h4>
            </div>
            <div class=\"section mt-2 mb-5\">
                <form action=\"{{path('send_reset_request_password')}}\">

                    <div class=\"form-group boxed\">
                        <div class=\"input-wrapper\">
                            <input type=\"email\" class=\"form-control\" id=\"name1\" name=\"email\" placeholder=\"Adresse email\">
                            <i class=\"clear-input\">
                                <ion-icon name=\"close-circle\"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class=\"form-button-group\">
                        {# <a href=\"{{path('login')}}\" class=\"btn btn-primary btn-lg btn-block\">Accueil</a> #}
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Envoyer une demande</button>
                    </div>

                </form>
            </div>
        </div>



    </div>
    <!-- * App Capsule -->

{% endblock %}", "security/forgotpassword.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/forgotpassword.html.twig");
    }
}
