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

/* security/login.js.twig */
class __TwigTemplate_1a639991d458e313e48c2152dd3470c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.js.twig"));

        // line 1
        echo "<script>
";
        // line 2
        if ((array_key_exists("needtoconnect", $context) && ((isset($context["needtoconnect"]) || array_key_exists("needtoconnect", $context) ? $context["needtoconnect"] : (function () { throw new RuntimeError('Variable "needtoconnect" does not exist.', 2, $this->source); })()) == 1))) {
            // line 3
            echo "  window.addEventListener('DOMContentLoaded', function() {
    var needtoconnect = document.getElementById('toast-11');
    needtoconnect.classList.add('d-block');
    setTimeout(function() {
      needtoconnect.classList.remove('d-block');
    }, 2000);
  });
";
        }
        // line 11
        echo "</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
{% if needtoconnect is defined and needtoconnect == 1 %}
  window.addEventListener('DOMContentLoaded', function() {
    var needtoconnect = document.getElementById('toast-11');
    needtoconnect.classList.add('d-block');
    setTimeout(function() {
      needtoconnect.classList.remove('d-block');
    }, 2000);
  });
{% endif %}
</script>", "security/login.js.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/security/login.js.twig");
    }
}
