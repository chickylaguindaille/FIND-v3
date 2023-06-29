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
class __TwigTemplate_a7e95b282af97090044e2a33f67a9e51 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "security/subscribe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((array_key_exists("error", $context) && (($context["error"] ?? null) != ""))) {
            // line 42
            echo "                    <div class=\"text-danger text-start\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
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
        return array (  144 => 97,  97 => 44,  91 => 42,  89 => 41,  85 => 40,  70 => 27,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/subscribe.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/subscribe.html.twig");
    }
}
