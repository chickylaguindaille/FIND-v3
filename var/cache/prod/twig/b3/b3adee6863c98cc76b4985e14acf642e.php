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

/* find/towns/town.html.twig */
class __TwigTemplate_d9a130690927228066fcbb7b463e1d9d extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "find/towns/town.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("inc/allpage.css.twig", "find/towns/town.html.twig", 7)->display($context);
        // line 8
        echo "    ";
        $this->loadTemplate("find/towns/town.css.twig", "find/towns/town.html.twig", 8)->display($context);
        // line 9
        echo "

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">

                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["country"] ?? null), "html", null, true);
        echo "</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Filtrer</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContent\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Début du mot</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                                                </div>
                                            </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <!-- * Content Action Sheet -->

                </form>
            </div>
        </div>



        ";
        // line 89
        echo "
        ";
        // line 90
        $context["alphabet"] = "?";
        // line 91
        echo "
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["towns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 93
            echo "            ";
            if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 93)) != ($context["alphabet"] ?? null))) {
                // line 94
                echo "                ";
                $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 94));
                // line 95
                echo "                <div class=\"listview-title sticky-title\">
                    <strong>";
                // line 96
                echo twig_escape_filter($this->env, ($context["alphabet"] ?? null), "html", null, true);
                echo "</strong>
                </div>
            ";
            }
            // line 99
            echo "            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations", ["country" => ($context["country"] ?? null), "villeid" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 101), "ville" => twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 104)), "html", null, true);
            echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 110), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 110), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "


    </div>


    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "find/towns/town.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 119,  172 => 110,  167 => 108,  160 => 104,  154 => 101,  150 => 99,  144 => 96,  141 => 95,  138 => 94,  135 => 93,  131 => 92,  128 => 91,  126 => 90,  123 => 89,  76 => 25,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "find/towns/town.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/towns/town.html.twig");
    }
}
