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

/* inc/allpage.css.twig */
class __TwigTemplate_8b9bfda6388f3bf07fa2f5d8dcdebf1a extends Template
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

.blason{
    height: 3em;
    width: auto;
    border-radius: 0.25rem!important;
}

.infosmodalimage{
    text-align: center;
    border-bottom: 1px solid rgba(0,0,0,.2);
    border-top: 1px solid rgba(0,0,0,.2);
}

</style>";
    }

    public function getTemplateName()
    {
        return "inc/allpage.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inc/allpage.css.twig", "/opt/lampp/htdocs/FIND-v3/templates/inc/allpage.css.twig");
    }
}
