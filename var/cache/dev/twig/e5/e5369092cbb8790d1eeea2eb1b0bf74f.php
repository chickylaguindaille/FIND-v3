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

/* inc/tri_filtre/filtre.html.twig */
class __TwigTemplate_99be40ae5bc62f11326717bbc0e8c4d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/filtre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/filtre.html.twig"));

        // line 1
        echo "            <!-- MODAL FILTRE -->
            <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered \">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                            <button type=\"button\" class=\"btn-close filtermodalclose\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                    

                    ";
        // line 12
        if ((((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 12, $this->source); })()) != "towns") && ((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 12, $this->source); })()) != "associationsbylocalisation"))) {
            // line 13
            echo "                        <div class=\"form-group col-12\">
                            <label for=\"country\">Pays</label>
                            <select name=\"country\" class=\"form-select\" id=\"countryfilter\" >
                                <option value=\"\">/</option>
                                <option value=\"France\" ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "country", [], "any", true, true, false, 17) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 17, $this->source); })()), "country", [], "any", false, false, false, 17) == "France"))) {
                echo "selected";
            }
            echo ">France</option>
                                <option value=\"Belgique\" ";
            // line 18
            if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "country", [], "any", true, true, false, 18) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 18, $this->source); })()), "country", [], "any", false, false, false, 18) == "Belgique"))) {
                echo "selected";
            }
            echo ">Belgique</option>
                            </select>
                        </div>

                        ";
            // line 31
            echo "
                        <div class=\"form-group col-12\">
                            <label for=\"town\">Ville</label>
                            <select name=\"town\" class=\"form-select\" id=\"townfilter\" >
                                <option id=\"\" value=\"\" data-country=\"\" >/</option>
                                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 36, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
                // line 37
                echo "                                    <option id=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 37)), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "\" data-country=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 37), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "town", [], "any", true, true, false, 37) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 37, $this->source); })()), "town", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 37)))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                            </select>
                        </div>
                    ";
        }
        // line 42
        echo "                    ";
        if (((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 42, $this->source); })()) != "towns")) {
            // line 43
            echo "                        <div class=\"form-group col-12\">
                            <label for=\"type\">Type</label>
                            <select name=\"typeasso\" class=\"form-select\" id=\"typefilter\" >
                                <option value=\"\">/</option>
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 47), "assotype", [], "array", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 47), "assotype", [], "array", false, false, false, 47), [])) : ([]))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 48
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" data-country=\"";
                if (((($context["name"] == "Filière") || ($context["name"] == "Association")) || ($context["name"] == "Corporation"))) {
                    echo "France";
                } elseif ((($context["name"] == "Cercle") || ($context["name"] == "Régionale"))) {
                    echo "Belgique";
                }
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "typeasso", [], "any", true, true, false, 48) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 48, $this->source); })()), "typeasso", [], "any", false, false, false, 48) == $context["name"]))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Couvre-Chef</label>
                            <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" >
                                <option value=\"\">/</option>
                                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 57), "hats", [], "array", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listes"] ?? null), 0, [], "array", false, true, false, 57), "hats", [], "array", false, false, false, 57), [])) : ([]))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 58
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "hat", [], "any", true, true, false, 58) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 58, $this->source); })()), "hat", [], "any", false, false, false, 58) == $context["name"]))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"gendertype\">Genre</label>
                            <select name=\"gendertype\" class=\"form-select\" id=\"genderfilter\" >
                                <option value=\"\">/</option>
                                <option value=\"Mixte\" ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 67) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 67, $this->source); })()), "gendertype", [], "any", false, false, false, 67) == "Mixte"))) {
                echo "selected";
            }
            echo ">Mixte</option>
                                <option value=\"Masculin\" ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 68) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 68, $this->source); })()), "gendertype", [], "any", false, false, false, 68) == "Masculin"))) {
                echo "selected";
            }
            echo ">Masculin</option>
                                <option value=\"Féminin\" ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 69, $this->source); })()), "gendertype", [], "any", false, false, false, 69) == "Féminin"))) {
                echo "selected";
            }
            echo ">Féminin</option>
                            </select>
                        </div>
                    </div>
                    ";
        }
        // line 74
        echo "
                    <div class=\"input-list justify-content-center d-flex\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"search\" id=\"radioList1\" value=\"startsearch\" ";
        // line 77
        if (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 77) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 77, $this->source); })()), "search", [], "any", false, false, false, 77) != "onsearch")) ||  !twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 77))) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioList1\">Début contenu</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"search\" id=\"radioList2\" value=\"onsearch\" ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gendertype", [], "any", true, true, false, 81) && (twig_get_attribute($this->env, $this->source, (isset($context["allfilter"]) || array_key_exists("allfilter", $context) ? $context["allfilter"] : (function () { throw new RuntimeError('Variable "allfilter" does not exist.', 81, $this->source); })()), "search", [], "any", false, false, false, 81) == "onsearch"))) {
            echo "checked";
        }
        echo ">
                            <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                        </div>
                    </div>
                    ";
        // line 86
        echo "                        <div style=\"margin-left: 1rem; margin-right: 1rem;\">
                            <button type=\"button\" id=\"buttonfilter\" class=\"btn btn-primary btn-block py-3 mb-2 mx-auto savefilterbutton\" data-bs-dismiss=\"modal\">
                                <span class=\"mx-2\">Sauvegarder</span>
                            </button>
                        </div>
                    ";
        // line 92
        echo "                    </div>
                </div>
            </div>
            ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/tri_filtre/filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 92,  230 => 86,  221 => 81,  212 => 77,  207 => 74,  197 => 69,  191 => 68,  185 => 67,  176 => 60,  161 => 58,  157 => 57,  148 => 50,  127 => 48,  123 => 47,  117 => 43,  114 => 42,  109 => 39,  90 => 37,  86 => 36,  79 => 31,  70 => 18,  64 => 17,  58 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("            <!-- MODAL FILTRE -->
            <div class=\"modal fade\" id=\"Modalfilter\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered \">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Filtrer la recherche</h5>
                            <button type=\"button\" class=\"btn-close filtermodalclose\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                        </div>
                    <div class=\"modal-body\">
                    

                    {% if typepage != \"towns\" and typepage != \"associationsbylocalisation\" %}
                        <div class=\"form-group col-12\">
                            <label for=\"country\">Pays</label>
                            <select name=\"country\" class=\"form-select\" id=\"countryfilter\" >
                                <option value=\"\">/</option>
                                <option value=\"France\" {% if allfilter.country is defined and allfilter.country == \"France\" %}selected{% endif %}>France</option>
                                <option value=\"Belgique\" {% if allfilter.country is defined and allfilter.country == \"Belgique\" %}selected{% endif %}>Belgique</option>
                            </select>
                        </div>

                        {# <div class=\"form-group col-12\">
                            <label for=\"region\">Région</label>
                            <select name=\"region\" class=\"form-select\" id=\"regionfilter\" >
                                <option value=\"\">/</option>
                                {% for name in regions|sort %}
                                    <option value=\"{{name}}\">{{name}}</option>
                                {% endfor %}
                            </select>
                        </div> #}

                        <div class=\"form-group col-12\">
                            <label for=\"town\">Ville</label>
                            <select name=\"town\" class=\"form-select\" id=\"townfilter\" >
                                <option id=\"\" value=\"\" data-country=\"\" >/</option>
                                {% for town in towns|sort %}
                                    <option id=\"{{asset(town.blason)}}\" value=\"{{town.name}}\" data-country=\"{{town.country}}\" {% if allfilter.town is defined and allfilter.town == town.name %}selected{% endif %}>{{town.name}}</option>
                                {% endfor %}
                            </select>
                        </div>
                    {% endif %}
                    {% if typepage != \"towns\" %}
                        <div class=\"form-group col-12\">
                            <label for=\"type\">Type</label>
                            <select name=\"typeasso\" class=\"form-select\" id=\"typefilter\" >
                                <option value=\"\">/</option>
                                {% for name in (listes[0]['assotype']|default([]))|sort %}
                                    <option value=\"{{name}}\" data-country=\"{% if name == \"Filière\" or name == \"Association\" or name == \"Corporation\" %}France{% elseif name == \"Cercle\" or name == \"Régionale\" %}Belgique{% endif %}\" {% if allfilter.typeasso is defined and allfilter.typeasso == name %}selected{% endif %}>{{name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"hat\">Couvre-Chef</label>
                            <select name=\"hat\" class=\"form-select\" id=\"hatfilter\" >
                                <option value=\"\">/</option>
                                {% for name in listes[0]['hats']|default([])|sort %}
                                    <option value=\"{{name}}\" {% if allfilter.hat is defined and allfilter.hat == name %}selected{% endif %}>{{name}}</option>
                                {% endfor %}
                            </select>
                        </div>

                        <div class=\"form-group col-12\">
                            <label for=\"gendertype\">Genre</label>
                            <select name=\"gendertype\" class=\"form-select\" id=\"genderfilter\" >
                                <option value=\"\">/</option>
                                <option value=\"Mixte\" {% if allfilter.gendertype is defined and allfilter.gendertype == \"Mixte\" %}selected{% endif %}>Mixte</option>
                                <option value=\"Masculin\" {% if allfilter.gendertype is defined and allfilter.gendertype == \"Masculin\" %}selected{% endif %}>Masculin</option>
                                <option value=\"Féminin\" {% if allfilter.gendertype is defined and allfilter.gendertype == \"Féminin\" %}selected{% endif %}>Féminin</option>
                            </select>
                        </div>
                    </div>
                    {% endif %}

                    <div class=\"input-list justify-content-center d-flex\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"search\" id=\"radioList1\" value=\"startsearch\" {% if (allfilter.gendertype is defined and allfilter.search != \"onsearch\") or (allfilter.gendertype is not defined)  %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"radioList1\">Début contenu</label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"search\" id=\"radioList2\" value=\"onsearch\" {% if allfilter.gendertype is defined and allfilter.search == \"onsearch\" %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                        </div>
                    </div>
                    {# {% if typepage is defined and typepage ==\"homepage\" %} #}
                        <div style=\"margin-left: 1rem; margin-right: 1rem;\">
                            <button type=\"button\" id=\"buttonfilter\" class=\"btn btn-primary btn-block py-3 mb-2 mx-auto savefilterbutton\" data-bs-dismiss=\"modal\">
                                <span class=\"mx-2\">Sauvegarder</span>
                            </button>
                        </div>
                    {# {% endif %} #}
                    </div>
                </div>
            </div>
            {# FIN MODAL FILTRE #}", "inc/tri_filtre/filtre.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/inc/tri_filtre/filtre.html.twig");
    }
}
