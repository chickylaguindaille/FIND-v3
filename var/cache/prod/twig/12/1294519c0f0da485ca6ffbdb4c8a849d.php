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

/* corporations/corporations.html.twig */
class __TwigTemplate_935f359e8f7852ceee907269605f7333 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "corporations/corporations.html.twig", 1);
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
        $this->loadTemplate("inc/allpage.css.twig", "corporations/corporations.html.twig", 7)->display($context);
        // line 8
        echo "    ";
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
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["town"] ?? null), "blason", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" alt=\"image\" class=\"blason\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["town"] ?? null), "name", [], "any", false, false, false, 24), "html", null, true);
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



                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContentTri\">Tri</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContentTri\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Alphabétiquement</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Type d'association</label>
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
        // line 96
        $context["alphabet"] = "?";
        // line 97
        echo "
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 99
            echo "            ";
            if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 99)) != ($context["alphabet"] ?? null))) {
                // line 100
                echo "                ";
                $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 100));
                // line 101
                echo "                <div class=\"listview-title sticky-title\">
                    <strong>";
                // line 102
                echo twig_escape_filter($this->env, ($context["alphabet"] ?? null), "html", null, true);
                echo "</strong>
                </div>
            ";
            }
            // line 105
            echo "            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporation", ["country" => ($context["country"] ?? null), "ville" => ($context["ville"] ?? null), "corpo" => twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 107), "associationid" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", true, true, false, 110) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 110)))) ? (twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 110)) : (""))), "html", null, true);
            echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 114), "html", null, true);
            echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", true, true, false, 116) && (twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 116) != ""))) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 116), "html", null, true);
                echo ")";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "

        ";
        // line 182
        echo "

    </div>


    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "corporations/corporations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 182,  217 => 125,  198 => 116,  193 => 114,  186 => 110,  180 => 107,  176 => 105,  170 => 102,  167 => 101,  164 => 100,  161 => 99,  157 => 98,  154 => 97,  152 => 96,  77 => 24,  72 => 22,  57 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "corporations/corporations.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/corporations/corporations.html.twig");
    }
}
