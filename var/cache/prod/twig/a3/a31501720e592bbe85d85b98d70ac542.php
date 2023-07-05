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
class __TwigTemplate_21826df1ea8f2eb0fd5306c13f432187 extends Template
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
        // line 1
        echo "<script>
";
        // line 2
        if ((array_key_exists("needtoconnect", $context) && (($context["needtoconnect"] ?? null) == 1))) {
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
        return array (  52 => 11,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.js.twig", "/home/zcsadjyj/public_html/FIND-v3/templates/security/login.js.twig");
    }
}
