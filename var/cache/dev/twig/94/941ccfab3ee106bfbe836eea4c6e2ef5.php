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
class __TwigTemplate_edaaf2726c85b59a248323a1d854bdb4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
    <meta name=\"theme-color\" content=\"#000000\">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name=\"description\" content=\"Mobilekit HTML Mobile UI Kit\">
    <meta name=\"keywords\" content=\"bootstrap 5, mobile template, cordova, phonegap, mobile, html\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/192x192.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("__manifest.json"), "html", null, true);
        echo "\">
</head>

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
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/vector4.png"), "html", null, true);
        echo "\" alt=\"image\" class=\"form-image\">
            </div>
            <div class=\"section mt-1\">
                <h1>FIND</h1>
                <h4>Remplis le formulaire pour te connecter</h4>
                ";
        // line 39
        if ((array_key_exists("error", $context) && ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()) != ""))) {
            // line 40
            echo "                    <div class=\"text-danger text-start\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })()), "messageData", [], "any", false, false, false, 40), 0, [], "any", false, false, false, 40), "html", null, true);
            echo "</div
                ";
        }
        // line 42
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
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subscribe");
        echo "\">S'inscrire</a>
                        </div>
                        <div><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        echo "\" class=\"text-muted\">Mot de passe oublié?</a></div>
                    </div>

\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t";
        // line 73
        echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t

                    <div class=\"form-button-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Connexion</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/splide/splide.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ProgressBar js -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/progressbar-js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Base Js File -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/base.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  185 => 102,  180 => 100,  175 => 98,  168 => 94,  143 => 73,  136 => 67,  131 => 65,  106 => 42,  100 => 40,  98 => 39,  90 => 34,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
    <meta name=\"theme-color\" content=\"#000000\">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name=\"description\" content=\"Mobilekit HTML Mobile UI Kit\">
    <meta name=\"keywords\" content=\"bootstrap 5, mobile template, cordova, phonegap, mobile, html\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png')}}\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/img/icon/192x192.png')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\">
    <link rel=\"manifest\" href=\"{{ asset('__manifest.json')}}\">
</head>

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
                <img src=\"{{ asset('assets/img/sample/photo/vector4.png')}}\" alt=\"image\" class=\"form-image\">
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
                            <a href=\"{{path('subscribe')}}\">S'inscrire</a>
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

                    <div class=\"form-button-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-lg\">Connexion</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"{{ asset('assets/js/lib/bootstrap.min.js')}}\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"{{ asset('assets/js/plugins/splide/splide.min.js')}}\"></script>
    <!-- ProgressBar js -->
    <script src=\"{{ asset('assets/js/plugins/progressbar-js/progressbar.min.js')}}\"></script>
    <!-- Base Js File -->
    <script src=\"{{ asset('assets/js/base.js')}}\"></script>

</body>

</html>", "security/login.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/login.html.twig");
    }
}
