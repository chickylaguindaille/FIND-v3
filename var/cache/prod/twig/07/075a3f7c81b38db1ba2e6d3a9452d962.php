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
class __TwigTemplate_9fa19596467eff803ad45fd1cfb5a691 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "security/subscribevalidation.html.twig", 1);
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
            ";
        // line 21
        echo "            ";
        // line 24
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
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/validation.gif"), "html", null, true);
        echo "\" alt=\"image\" class=\"w-100\">
            ";
        // line 38
        echo "            <h1 class=\"title\">Tu t'es inscris à FIND!</h1>
            <div class=\"text mb-5\">
                Tu recevra prochainement un mail de validation de ton compte.
            </div>

            <div class=\"fixed-footer\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" class=\"btn btn-primary btn-lg btn-block\">Accueil</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->

";
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
        return array (  94 => 46,  84 => 38,  80 => 36,  66 => 24,  64 => 21,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/subscribevalidation.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/security/subscribevalidation.html.twig");
    }
}
