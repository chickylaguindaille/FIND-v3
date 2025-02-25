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

/* find/towns/townfiltered.html.twig */
class __TwigTemplate_f58cd460b846ae2d4242b891fb79649b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/townfiltered.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/townfiltered.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    ";
            if (( !array_key_exists("tri", $context) || ((isset($context["tri"]) || array_key_exists("tri", $context) ? $context["tri"] : (function () { throw new RuntimeError('Variable "tri" does not exist.', 2, $this->source); })()) == "alphabet"))) {
                // line 3
                echo "        ";
                $context["alphabet"] = "?";
                // line 4
                echo "
        ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 5, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
                    // line 6
                    echo "            ";
                    if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 6)) != (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 6, $this->source); })()))) {
                        // line 7
                        echo "                ";
                        $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 7));
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations", ["country" => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 14, $this->source); })()), "villeid" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 14), "ville" => twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 14)]), "html", null, true);
                    echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 17)), "html", null, true);
                    echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 21), "html", null, true);
                    echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 23), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 23), "html", null, true);
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
                // line 32
                echo "    ";
            } else {
                // line 33
                echo "        ";
                $context["region"] = "?";
                // line 34
                echo "
        ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 35, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
                    // line 36
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 36) != (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 36, $this->source); })()))) {
                        // line 37
                        echo "                ";
                        $context["region"] = twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 37);
                        // line 38
                        echo "                <div class=\"listview-title sticky-title\">
                    <strong>";
                        // line 39
                        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 39, $this->source); })()), "html", null, true);
                        echo "</strong>
                </div>
            ";
                    }
                    // line 42
                    echo "            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations", ["country" => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 44, $this->source); })()), "villeid" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 44), "ville" => twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 47)), "html", null, true);
                    echo "\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 51), "html", null, true);
                    echo "</h4>
                                    <div class=\"text-muted\">
                                        <div>";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 53), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 53), "html", null, true);
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
                // line 62
                echo "    ";
            }
        } else {
            // line 64
            echo "
    <div class=\"text-center item\">Aucun résultat</div>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/towns/townfiltered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 64,  179 => 62,  162 => 53,  157 => 51,  150 => 47,  144 => 44,  140 => 42,  134 => 39,  131 => 38,  128 => 37,  125 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  95 => 23,  90 => 21,  83 => 17,  77 => 14,  73 => 12,  67 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if towns is not empty %}
    {% if tri is not defined or tri == \"alphabet\" %}
        {% set alphabet = \"?\" %}

        {% for town in towns %}
            {% if town.name|first != alphabet %}
                {% set alphabet = town.name|first %}
                <div class=\"listview-title sticky-title\">
                    <strong>{{alphabet}}</strong>
                </div>
            {% endif %}
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporations', {'country': country, 'villeid': town.id, 'ville': town.name })}}\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"{{asset(town.blason)}}\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">{{town.name}}</h4>
                                    <div class=\"text-muted\">
                                        <div>{{town.region}}, {{town.country}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        {% endfor %}
    {% else %}
        {% set region = \"?\" %}

        {% for town in towns %}
            {% if town.region != region %}
                {% set region = town.region %}
                <div class=\"listview-title sticky-title\">
                    <strong>{{region}}</strong>
                </div>
            {% endif %}
            <ul class=\"listview image-listview media\">
                <li>
                    <a href=\"{{ path('corporations', {'country': country, 'villeid': town.id, 'ville': town.name })}}\">
                        <div class=\"item\">
                            <div class=\"imageWrapper\">
                                <img src=\"{{asset(town.blason)}}\" alt=\"image\" class=\"blason\">
                            </div>
                            <div class=\"in\">
                                <div>
                                    <h4 class=\"mb-05\">{{town.name}}</h4>
                                    <div class=\"text-muted\">
                                        <div>{{town.region}}, {{town.country}}</div>
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

{% endif %}", "find/towns/townfiltered.html.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/find/towns/townfiltered.html.twig");
    }
}
