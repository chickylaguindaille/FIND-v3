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

/* security/subscribevalidation.html.twig */
class __TwigTemplate_326e08fd93a5e6448dfff5d64eac8f32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribevalidation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/subscribevalidation.html.twig"));

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
            ";
        // line 34
        echo "            ";
        // line 37
        echo "        </div>
        <div class=\"pageTitle\">Félicitations !</div>
        <div class=\"right\">

        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"error-page\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/validation.gif"), "html", null, true);
        echo "\" alt=\"image\" class=\"w-100\">
            ";
        // line 51
        echo "            <h1 class=\"title\">Tu t'es inscris à FIND!</h1>
            <div class=\"text mb-5\">
                Tu recevra prochainement un mail de validation de ton compte.
            </div>

            <div class=\"fixed-footer\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-primary btn-lg btn-block\">Accueil</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/splide/splide.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ProgressBar js -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/progressbar-js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Base Js File -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/base.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/subscribevalidation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 79,  139 => 77,  134 => 75,  127 => 71,  112 => 59,  102 => 51,  98 => 49,  84 => 37,  82 => 34,  67 => 18,  62 => 16,  58 => 14,  43 => 1,);
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
            {# <a href=\"#\" class=\"headerButton goBack\">
                <ion-icon name=\"chevron-back-outline\"></ion-icon>
            </a> #}
            {# <a href=\"{{path('login')}}\" class=\"headerButton\">
                Connexion
            </a> #}
        </div>
        <div class=\"pageTitle\">Félicitations !</div>
        <div class=\"right\">

        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"error-page\">
            <img src=\"{{ asset('assets/img/validation.gif')}}\" alt=\"image\" class=\"w-100\">
            {# <img src=\"assets/img/sample/photo/vector6.png\" alt=\"alt\" class=\"imaged square w200\"> #}
            <h1 class=\"title\">Tu t'es inscris à FIND!</h1>
            <div class=\"text mb-5\">
                Tu recevra prochainement un mail de validation de ton compte.
            </div>

            <div class=\"fixed-footer\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <a href=\"{{path('login')}}\" class=\"btn btn-primary btn-lg btn-block\">Accueil</a>
                    </div>
                </div>
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

</html>", "security/subscribevalidation.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/subscribevalidation.html.twig");
    }
}
