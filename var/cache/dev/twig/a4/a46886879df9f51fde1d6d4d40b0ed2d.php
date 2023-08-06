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

/* inc/tri_filtre/tri.html.twig */
class __TwigTemplate_735450fbc29c1017e2025cf795a4ca07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/tri.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/tri.html.twig"));

        // line 1
        echo "    <!-- Content Action Sheet -->
    <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContentTri\">
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\">Trier la page par</h5>
        </div>
        <div class=\"offcanvas-body\">
            <div class=\"action-sheet-content p-1\">
                <div class=\"section full mb-2\">
                        <div class=\"input-list\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"alphabet\" value=\"alphabet\" checked>
                                <label class=\"form-check-label\" for=\"alphabet\">L'alphabet</label>
                            </div>
                            ";
        // line 14
        if ((array_key_exists("typepage", $context) && (((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 14, $this->source); })()) == "associations") || ((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 14, $this->source); })()) == "associationsbylocalisation")))) {
            // line 15
            echo "                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"typeasso\" value=\"typeasso\">
                                    <label class=\"form-check-label\" for=\"typeasso\">Type d'association</label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"hat\" value=\"hat\">
                                    <label class=\"form-check-label\" for=\"hat\">Couvre-chef</label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"gender\" value=\"gender\">
                                    <label class=\"form-check-label\" for=\"gender\">Mixité</label>
                                </div>
                            ";
        }
        // line 28
        echo "                            ";
        if ((array_key_exists("typepage", $context) && ((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 28, $this->source); })()) == "towns"))) {
            // line 29
            echo "                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"region\" value=\"region\">
                                    <label class=\"form-check-label\" for=\"region\">";
            // line 31
            if (((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 31, $this->source); })()) == "France")) {
                echo "Région";
            } elseif (((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 31, $this->source); })()) == "Belgique")) {
                echo "Province";
            }
            echo "</label>
                                </div>
                            ";
        }
        // line 34
        echo "                        </div>
                </div>
                <div>
                    <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"buttontri\" data-bs-dismiss=\"offcanvas\">
                        <span class=\"mx-2\">Sauvegarder</span>
                    </button>
                </div>
                ";
        // line 42
        echo "            </div>
        </div>
    </div>
    <!-- * Content Action Sheet -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/tri_filtre/tri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  92 => 34,  82 => 31,  78 => 29,  75 => 28,  60 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Content Action Sheet -->
    <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContentTri\">
        <div class=\"offcanvas-header\">
            <h5 class=\"offcanvas-title\">Trier la page par</h5>
        </div>
        <div class=\"offcanvas-body\">
            <div class=\"action-sheet-content p-1\">
                <div class=\"section full mb-2\">
                        <div class=\"input-list\">
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"alphabet\" value=\"alphabet\" checked>
                                <label class=\"form-check-label\" for=\"alphabet\">L'alphabet</label>
                            </div>
                            {% if typepage is defined and (typepage ==\"associations\" or typepage == \"associationsbylocalisation\") %}
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"typeasso\" value=\"typeasso\">
                                    <label class=\"form-check-label\" for=\"typeasso\">Type d'association</label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"hat\" value=\"hat\">
                                    <label class=\"form-check-label\" for=\"hat\">Couvre-chef</label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"gender\" value=\"gender\">
                                    <label class=\"form-check-label\" for=\"gender\">Mixité</label>
                                </div>
                            {% endif %}
                            {% if typepage is defined and typepage ==\"towns\" %}
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"tri\" id=\"region\" value=\"region\">
                                    <label class=\"form-check-label\" for=\"region\">{% if country == \"France\" %}Région{% elseif country == \"Belgique\" %}Province{% endif %}</label>
                                </div>
                            {% endif %}
                        </div>
                </div>
                <div>
                    <button type=\"button\" class=\"btn btn-primary btn-block\" id=\"buttontri\" data-bs-dismiss=\"offcanvas\">
                        <span class=\"mx-2\">Sauvegarder</span>
                    </button>
                </div>
                {# <a href=\"\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a> #}
            </div>
        </div>
    </div>
    <!-- * Content Action Sheet -->", "inc/tri_filtre/tri.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/inc/tri_filtre/tri.html.twig");
    }
}
