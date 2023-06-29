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

/* home.html.twig */
class __TwigTemplate_8364afb999b9c7a96c58fb4f493f9865 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
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
        $this->loadTemplate("home/home.css.twig", "home.html.twig", 7)->display($context);
        // line 8
        echo " <!-- App Capsule -->
    <div id=\"appCapsule\">

        <!-- <div class=\"header-large-title text-center\">
            <h1 class=\"title\">Folklore Is Not Dead</h1> -->
            <!-- <h4 class=\"subtitle\">Welcome to Mobilekit</h4> -->
        <!-- </div> -->

        <div class=\"section full mt-3 mb-3\">

            <!-- CARDS COUNTRY -->
            <div class=\"section mt-2\">
                <div class=\"row\">
                    <div class=\"col-2\">
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "France"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body text-center\">
                                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/France.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">France</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-4\">
                        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville", ["country" => "Belgique"]);
        echo "\">
                            <div class=\"card product-card\">
                                <div class=\"card-body  text-center\">
                                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Belgique.png"), "html", null, true);
        echo "\" class=\"image w-75\" alt=\"product image\">
                                    <h2 class=\"title\">Belgique</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- * FIN CARDS COUNTRY-->

            ";
        // line 48
        echo "            <div class=\"section full mt-2\">
                <div class=\"pt-2 pb-1 px-4\">
                    <form class=\"search-form\">
                        <div class=\"form-group searchbox\">
                            <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                            <i class=\"input-icon\">
                                <ion-icon name=\"search-outline\"></ion-icon>
                            </i>
                        </div>
                    </form>
                </div>
            </div>
            ";
        // line 61
        echo "
            <!-- BOUTON MODAL TRI -->
            <div>
                <button type=\"button\" class=\"btn btn-primary p-0 ms-4\" data-bs-toggle=\"modal\" data-bs-target=\"#Modalfilter\">
                <span class=\"mx-2\">Filtrer</span>
                </button>
            </div>

            <!-- MODAL TRI -->
            <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered \">
                    <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Pays</label>
                            <select name=\"hat\" class=\"form-select\" id=\"countryfilter\" ";
        // line 81
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                <option value=\"France\">France</option>
                                <option value=\"Belgique\">Belgique</option>
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Région</label>
                            <select name=\"town\" class=\"form-select\" id=\"regionfilter\" ";
        // line 90
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["regions"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 93
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Ville</label>
                            <select name=\"town\" class=\"form-select\" id=\"townfilter\" ";
        // line 100
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["towns"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 103
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"type\">Type</label>
                            <select name=\"type\" class=\"form-select\" id=\"typefilter\" ";
        // line 110
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["listes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["assotype"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 113
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Couvre-Chef</label>
                            <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" ";
        // line 120
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["listes"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["hats"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 123
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Genre</label>
                            <select name=\"hat\" class=\"form-select\" id=\"genderfilter\" ";
        // line 130
        echo twig_escape_filter($this->env, ($context["required"] ?? null), "html", null, true);
        echo ">
                                <option value=\"\">/</option>
                                <option value=\"Mixte\">Mixte</option>
                                <option value=\"Masculin\">Masculin</option>
                                <option value=\"Féminin\">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                        <button id=\"btntrier\" type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Trier</button>
                    </div>
                    </div>
                </div>
            </div>
            ";
        // line 146
        echo "
            <!-- cards location -->
            ";
        // line 176
        echo "            <!-- * cards location -->

        </div>

        <div class=\"p-4 text-center\">
            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo w-50\">
        </div>
        <!-- app footer -->


        <div class=\"section inset mt-2 mb-2\">

            <div class=\"accordion\" id=\"accordionExample3\">
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion001\">
                            <ion-icon name=\"help-circle-outline\"></ion-icon>
                            Le projet FIND
                        </button>
                    </h2>
                    <div id=\"accordion001\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            FIND est une initiative ayant pour but la découverte, le partage et la sauvegarde du folklore étudiant. Vous pourrez y retrouver un grand nombre d’associations étudiantes folkloriques avec des informations tel leur fondation, leurs particularités, leurs goodies et bien d’autres choses !
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion002\">
                            <ion-icon name=\"document-outline\"></ion-icon>
                            Les contributeurs
                        </button>
                    </h2>
                    <div id=\"accordion002\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <!-- <div class=\"section full mt-2 mb-2\"> -->
                                <ul class=\"listview image-listview media\">
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Estudiantinerie
                                                    <div class=\"text-muted\">Musée Français du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"item\">
                                            <div class=\"imageWrapper\">
                                                <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                            </div>
                                            <div class=\"in\">
                                                <div>
                                                    Musée Belge des Traditions Estudiantines
                                                    <div class=\"text-muted\">Musée Belge du folklore étudiant</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <div class=\"accordion-item\">
                    <h2 class=\"accordion-header\">
                        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#accordion003\">
                            <ion-icon name=\"chatbox-ellipses-outline\"></ion-icon>
                            Technologies utilisées
                        </button>
                    </h2>
                    <div id=\"accordion003\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample3\">
                        <div class=\"accordion-body\">
                            <ion-icon name=\"logo-html5\"></ion-icon>
                            <ion-icon name=\"logo-css3\"></ion-icon>
                            <ion-icon name=\"logo-javascript\"></ion-icon>
                            <i class=\"bi bi-bootstrap-fill\"></i>
                            <ion-icon name=\"logo-sass\"></ion-icon>
                            <ion-icon name=\"logo-pwa\"></ion-icon>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 231,  333 => 218,  293 => 181,  286 => 176,  282 => 146,  264 => 130,  257 => 125,  246 => 123,  242 => 122,  237 => 120,  230 => 115,  219 => 113,  215 => 112,  210 => 110,  203 => 105,  192 => 103,  188 => 102,  183 => 100,  176 => 95,  165 => 93,  161 => 92,  156 => 90,  144 => 81,  122 => 61,  108 => 48,  95 => 37,  89 => 34,  79 => 27,  73 => 24,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/home.html.twig");
    }
}
