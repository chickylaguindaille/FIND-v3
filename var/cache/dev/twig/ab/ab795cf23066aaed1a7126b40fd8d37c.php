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

/* find/corporations/corporationsfiltered.html.twig */
class __TwigTemplate_74ca1fe12319d65de9f872fe2ae562b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporationsfiltered.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporationsfiltered.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "
    ";
            // line 3
            if (( !array_key_exists("tri", $context) || ((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 3, $this->source); })()) == "alphabet"))) {
                // line 4
                echo "        ";
                $context["alphabet"] = "?";
                // line 5
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 5, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                    // line 6
                    echo "            ";
                    if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 6)) != (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 6, $this->source); })()))) {
                        // line 7
                        echo "                ";
                        $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 7));
                        // line 8
                        echo "                <div class=\"listview-title sticky-title\">
                    <strong>";
                        // line 9
                        echo twig_escape_filter($this->env, (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 9, $this->source); })()), "html", null, true);
                        echo "</strong>
                </div>
            ";
                    }
                    // line 12
                    echo "            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporation", ["country" => twig_get_attribute($this->env, $this->source, $context["association"], "country", [], "any", false, false, false, 14), "ville" => twig_get_attribute($this->env, $this->source, $context["association"], "town", [], "any", false, false, false, 14), "corpo" => twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 14), "associationid" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 14)]), "html", null, true);
                    echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 17)))) ? (twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 17)) : (""))), "html", null, true);
                    echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
                    // line 23
                    if ((twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", true, true, false, 23) && (twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 23) != ""))) {
                        echo "(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 23), "html", null, true);
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
                // line 32
                echo "    ";
            } else {
                // line 33
                echo "
        ";
                // line 34
                $context["typesommaire"] = "?";
                // line 35
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) || array_key_exists("associations", $context) ? $context["associations"] : (function () { throw new RuntimeError('Variable "associations" does not exist.', 35, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                    // line 36
                    echo "

            ";
                    // line 38
                    if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 38, $this->source); })()) == "typeasso")) {
                        // line 39
                        echo "                ";
                        $context["trié"] = twig_get_attribute($this->env, $this->source, $context["association"], "type", [], "array", false, false, false, 39);
                        // line 40
                        echo "            ";
                    }
                    // line 41
                    echo "
            ";
                    // line 42
                    if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 42, $this->source); })()) == "hat")) {
                        // line 43
                        echo "                ";
                        $context["trié"] = twig_get_attribute($this->env, $this->source, $context["association"], "hat", [], "array", false, false, false, 43);
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "            
            ";
                    // line 46
                    if (((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 46, $this->source); })()) == "gender")) {
                        // line 47
                        echo "                ";
                        $context["trié"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "additionalinformations", [], "array", false, true, false, 47), "gendertype", [], "array", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "additionalinformations", [], "array", false, true, false, 47), "gendertype", [], "array", false, false, false, 47)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["association"], "additionalinformations", [], "array", false, true, false, 47), "gendertype", [], "array", false, false, false, 47)) : ("Inconnu"));
                        // line 48
                        echo "            ";
                    }
                    // line 49
                    echo "            

            ";
                    // line 51
                    if (((isset($context["trié"]) || array_key_exists("trié", $context) ? $context["trié"] : (function () { throw new RuntimeError('Variable "trié" does not exist.', 51, $this->source); })()) != (isset($context["typesommaire"]) || array_key_exists("typesommaire", $context) ? $context["typesommaire"] : (function () { throw new RuntimeError('Variable "typesommaire" does not exist.', 51, $this->source); })()))) {
                        // line 52
                        echo "                ";
                        $context["typesommaire"] = (isset($context["trié"]) || array_key_exists("trié", $context) ? $context["trié"] : (function () { throw new RuntimeError('Variable "trié" does not exist.', 52, $this->source); })());
                        // line 53
                        echo "
                <div class=\"listview-title sticky-title\">
                    <strong>";
                        // line 55
                        echo twig_escape_filter($this->env, (isset($context["typesommaire"]) || array_key_exists("typesommaire", $context) ? $context["typesommaire"] : (function () { throw new RuntimeError('Variable "typesommaire" does not exist.', 55, $this->source); })()), "html", null, true);
                        echo "</strong>
                </div>
            ";
                    }
                    // line 58
                    echo "
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporation", ["country" => twig_get_attribute($this->env, $this->source, $context["association"], "country", [], "any", false, false, false, 61), "ville" => twig_get_attribute($this->env, $this->source, $context["association"], "town", [], "any", false, false, false, 61), "corpo" => twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 61), "associationid" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", true, true, false, 64) &&  !(null === twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 64)))) ? (twig_get_attribute($this->env, $this->source, $context["association"], "logo", [], "any", false, false, false, 64)) : (""))), "html", null, true);
                    echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "name", [], "any", false, false, false, 68), "html", null, true);
                    echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
                    // line 70
                    if ((twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", true, true, false, 70) && (twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 70) != ""))) {
                        echo "(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "nickname", [], "any", false, false, false, 70), "html", null, true);
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
                // line 79
                echo "    ";
            }
            // line 80
            echo "
";
        } else {
            // line 82
            echo "
    <div class=\"text-center item\">Aucun résultat</div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/corporations/corporationsfiltered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 82,  225 => 80,  222 => 79,  203 => 70,  198 => 68,  191 => 64,  185 => 61,  180 => 58,  174 => 55,  170 => 53,  167 => 52,  165 => 51,  161 => 49,  158 => 48,  155 => 47,  153 => 46,  150 => 45,  147 => 44,  144 => 43,  142 => 42,  139 => 41,  136 => 40,  133 => 39,  131 => 38,  127 => 36,  122 => 35,  120 => 34,  117 => 33,  114 => 32,  95 => 23,  90 => 21,  83 => 17,  77 => 14,  73 => 12,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if associations is not empty %}

    {% if (tri is not defined) or (tri == \"alphabet\") %}
        {% set alphabet = \"?\" %}
        {% for association in associations %}
            {% if association.name|first != alphabet %}
                {% set alphabet = association.name|first %}
                <div class=\"listview-title sticky-title\">
                    <strong>{{alphabet}}</strong>
                </div>
            {% endif %}
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporation', {'country': association.country, 'ville': association.town, 'corpo': association.name, 'associationid': association.id })}}\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"{{asset(association.logo??\"\")}}\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">{{association.name}}</h4>
                                    <div class=\"text-muted\">
                                        <div>{% if association.nickname is defined and association.nickname != '' %}({{association.nickname}}){% endif %}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        {% endfor %}
    {% else %}

        {% set typesommaire = \"?\" %}
        {% for association in associations %}


            {% if tri == \"typeasso\" %}
                {% set trié =  association['type'] %}
            {% endif %}

            {% if tri == \"hat\" %}
                {% set trié =  association['hat'] %}
            {% endif %}
            
            {% if tri == \"gender\" %}
                {% set trié = association['additionalinformations']['gendertype']??\"Inconnu\" %}
            {% endif %}
            

            {% if trié != typesommaire %}
                {% set typesommaire = trié %}

                <div class=\"listview-title sticky-title\">
                    <strong>{{typesommaire}}</strong>
                </div>
            {% endif %}

            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporation', {'country': association.country, 'ville': association.town, 'corpo': association.name, 'associationid': association.id })}}\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"{{asset(association.logo??\"\")}}\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">{{association.name}}</h4>
                                    <div class=\"text-muted\">
                                        <div>{% if association.nickname is defined and association.nickname != '' %}({{association.nickname}}){% endif %}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        {% endfor %}
    {% endif %}

{% else %}

    <div class=\"text-center item\">Aucun résultat</div>

{% endif %}", "find/corporations/corporationsfiltered.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/find/corporations/corporationsfiltered.html.twig");
    }
}
