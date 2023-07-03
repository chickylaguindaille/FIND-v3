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

/* connexions/connexions.html.twig */
class __TwigTemplate_34c0aef76691ee05afefe6340c5dcbc0 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "connexions/connexions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3\">

            <!-- cards location -->
                <div class=\"text-center\">
                    <h2 class=\"m-0\">Trouve un ami</h2>
                </div>
            <!-- * cards location -->


            <div class=\"section full\">
                <div class=\"pt-2 pb-2 px-4\">
                    <form class=\"search-form\">
                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                        </div>
                        <button type=\"button\" class=\"rounded btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Faluche</button>
                        <button type=\"button\" class=\"rounded btn btn-outline-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Calotte</button>
                        <button type=\"button\" class=\"rounded btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Penne</button>
                    </form>
                </div>
            </div>




        </div>

        <!-- <div class=\"p-4 text-center\">
            <img src=\"assets/img/logo.png\" alt=\"logo\" class=\"logo w-50\">
        </div> -->


        <div class=\"listview-title\">
            <div>
                Profils trouvés pour <strong class=\"text-primary\">\"Chic\"</strong>
            </div>
        </div>
        <ul class=\"listview image-listview media search-result mb-2\">
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/4.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">ChickenWings</h4>
                            <div class=\"text-muted\">
                                Faluchard IF Paris, Calottin RTM Namur
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/6.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Chicky</h4>
                            <div class=\"text-muted\">
                                Impétrant IF Paris
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/5.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Chickito</h4>
                            <div class=\"text-muted\">
                                Sympathisant
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>


    </div>
    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "connexions/connexions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 88,  122 => 73,  104 => 58,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "connexions/connexions.html.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/connexions/connexions.html.twig");
    }
}
