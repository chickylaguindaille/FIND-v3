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

/* corporations/corporation.css.twig */
class __TwigTemplate_1abe3b2ae833f616307e4a884c3e75b5 extends Template
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
        echo "<style>

.table>:not(caption)>*>* {
    border-bottom-width: 0 !important;
}
.table td, .table th{
    border-top: 0px;
}

.simple-listview > li {
    display: block !important;
}

</style>";
    }

    public function getTemplateName()
    {
        return "corporations/corporation.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "corporations/corporation.css.twig", "/opt/lampp/htdocs/FIND-v3/templates/corporations/corporation.css.twig");
    }
}
