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
class __TwigTemplate_72f42f64f1fc2785d1896fdd6f88a8a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribe.html.twig"));

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
    ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 18
        echo "</head>

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
        // line 40
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
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_ajax_subscribe");
        echo "\">
                ";
        // line 54
        if ((array_key_exists("error", $context) && ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()) != ""))) {
            // line 55
            echo "                    <div class=\"text-danger text-start\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "</div>
                ";
        }
        // line 57
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
        // line 110
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



    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/splide/splide.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ProgressBar js -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/progressbar-js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Base Js File -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/base.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  207 => 144,  202 => 142,  197 => 140,  190 => 136,  162 => 110,  115 => 57,  109 => 55,  107 => 54,  103 => 53,  88 => 40,  67 => 18,  62 => 16,  58 => 14,  43 => 1,);
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
    {# <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/img/icon/192x192.png')}}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css')}}\">
    {# <link rel=\"manifest\" href=\"{{ asset('__manifest.json')}}\"> #}
</head>

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

</html>", "security/subscribe.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/subscribe.html.twig");
    }
}
