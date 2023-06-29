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

/* layout.html.twig */
class __TwigTemplate_431bdfdb52543c21f6503518c0328b1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'sidebar' => [$this, 'block_sidebar'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("base.html.twig", "layout.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        // line 46
        echo "
";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    <style>@import url(\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\");</style>
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('navbar', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('sidebar', $context, $blocks);
        // line 25
        echo "
";
    }

    // line 10
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $this->loadTemplate("inc/navbar.html.twig", "layout.html.twig", 11)->display($context);
        // line 12
        echo "    ";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        ";
        // line 16
        echo "    ";
    }

    // line 18
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        $this->loadTemplate("inc/footer.html.twig", "layout.html.twig", 19)->display($context);
        // line 20
        echo "    ";
    }

    // line 22
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        $this->loadTemplate("inc/sidebar.html.twig", "layout.html.twig", 23)->display($context);
        // line 24
        echo "    ";
    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        // line 30
        echo "
    <!-- Bootstrap -->
    ";
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/js/lib/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    ";
        // line 38
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/js/plugins/splide/splide.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ProgressBar js -->
    ";
        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/js/plugins/progressbar-js/progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Base Js File -->
    ";
        // line 44
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/js/base.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 44,  173 => 41,  167 => 38,  159 => 33,  155 => 30,  153 => 29,  149 => 28,  145 => 24,  142 => 23,  138 => 22,  134 => 20,  131 => 19,  127 => 18,  123 => 16,  121 => 15,  117 => 14,  113 => 12,  110 => 11,  106 => 10,  101 => 25,  99 => 22,  96 => 21,  94 => 18,  91 => 17,  89 => 14,  86 => 13,  84 => 10,  81 => 9,  77 => 8,  72 => 5,  70 => 4,  66 => 3,  61 => 46,  59 => 28,  56 => 27,  54 => 8,  51 => 7,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/layout.html.twig");
    }
}
