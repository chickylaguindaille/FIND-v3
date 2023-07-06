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
        $context["alphabet"] = "?";
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["towns"]) || array_key_exists("towns", $context) ? $context["towns"] : (function () { throw new RuntimeError('Variable "towns" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["town"]) {
            // line 4
            echo "    ";
            if ((twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 4)) != (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 4, $this->source); })()))) {
                // line 5
                echo "        ";
                $context["alphabet"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 5));
                // line 6
                echo "        <div class=\"listview-title sticky-title\">
            <strong>";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["alphabet"]) || array_key_exists("alphabet", $context) ? $context["alphabet"] : (function () { throw new RuntimeError('Variable "alphabet" does not exist.', 7, $this->source); })()), "html", null, true);
                echo "</strong>
        </div>
    ";
            }
            // line 10
            echo "    <ul class=\"listview image-listview media\">
        <li>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("corporations", ["country" => (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 12, $this->source); })()), "villeid" => twig_get_attribute($this->env, $this->source, $context["town"], "id", [], "any", false, false, false, 12), "ville" => twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\">
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["town"], "blason", [], "any", false, false, false, 15)), "html", null, true);
            echo "\" alt=\"image\" class=\"blason\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h4>
                            <div class=\"text-muted\">
                                <div>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "region", [], "any", false, false, false, 21), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["town"], "country", [], "any", false, false, false, 21), "html", null, true);
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
        return array (  89 => 21,  84 => 19,  77 => 15,  71 => 12,  67 => 10,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set alphabet = \"?\" %}

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
{% endfor %}", "find/towns/townfiltered.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/towns/townfiltered.html.twig");
    }
}
