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

/* calendar/calendar.html.twig */
class __TwigTemplate_a028e2feaf2d76a4b58c8e0e5c2e5c56 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "calendar/calendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <!-- App Capsule -->
    <div id=\"appCapsule\" class=\"extra-header-active full-height\">
            <!-- lined tab -->

            <div class=\"section full mt-1\">

                    <div class=\"tab-content mt-2\">
                        <div class=\"tab-pane fade show active\" id=\"national\" role=\"tabpanel\">

                            <div class=\"section full mt-3\">

                                <div class=\"pb-2 px-4\">
                                    <select class=\"form-select w-50\" style=\"margin-left: 25% !important;\">
                                        <option selected value=\"0\">Apéral</option>
                                        <option value=\"1\">Congrès</option>
                                        <option value=\"2\">Ordinesque</option>
                                    </select>
                                </div>
                    
                                <div class=\"section full\">
                                    <div class=\"pb-2 px-4\">
                                        <form class=\"search-form\">
                                            <div class=\"form-group searchbox\">
                                                <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                                                <i class=\"input-icon\">
                                                    <ion-icon name=\"search-outline\"></ion-icon>
                                                </i>
                                            </div>
                                            <button type=\"button\" class=\"rounded btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Alphabet</button>
                                            <button type=\"button\" class=\"rounded btn btn-outline-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Jour</button>
                                        </form>
                                    </div>
                                </div> 
                    
                            </div>
                    
                            <!-- <div class=\"p-4 text-center\">
                                <img src=\"assets/img/logo.png\" alt=\"logo\" class=\"logo w-50\">
                            </div> -->
                    
                            <div class=\"listview-title sticky-title\">
                                <strong>C</strong>
                            </div>
                            <ul class=\"listview image-listview media\">
                                <li>
                                    <div class=\"item\">
                                        <div class=\"imageWrapper\">
                                            <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <h4 class=\"mb-05\">Créteil</h4>
                                                <div class=\"text-muted\">
                                                    <div>Jour : Lundi, premier du mois.</div>
                                                    <div>Bar : 8 rue de l'rgz 77000 Créteil.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"listview-title sticky-title\">
                                <strong>P</strong>
                            </div>
                            <ul class=\"listview image-listview media\">
                                <li>
                                    <div class=\"item\">
                                        <div class=\"imageWrapper\">
                                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w64\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <h4 class=\"mb-05\">Paris</h4>
                                                <div class=\"text-muted\">
                                                    <div>Jour : Mardi.</div>
                                                    <div>Bar : 8 rue de l'rgz 75000 Paris.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>




                        </div>
                        <div class=\"tab-pane fade\" id=\"ville\" role=\"tabpanel\">

                            <div class=\"section full mt-3\">
                                <div class=\"pb-4 px-4\">
                                    <select class=\"form-select w-50\" style=\"margin-left: 25% !important;\">
                                        <option selected value=\"0\">Paris</option>
                                        <option value=\"1\">Namur</option>
                                    </select>
                                </div>

                                <div class=\"container text-left\">
                                    <div class=\"row justify-content-center\">
                                      <div class=\"col-md-10 text-center\">
                                        <form action=\"#\" class=\"row\">
                                          <div class=\"col-md-12\">
                                            <div id=\"inline_cal\"></div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>
                    </div>

            </div>

        <!-- * lined tab -->
    </div>
    <!-- * App Capsule -->
";
    }

    public function getTemplateName()
    {
        return "calendar/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 72,  99 => 51,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendar/calendar.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/calendar/calendar.html.twig");
    }
}