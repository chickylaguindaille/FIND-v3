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

/* find/towns/town.js.twig */
class __TwigTemplate_0344829e6e7675465c952d682ae4a0fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/town.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/towns/town.js.twig"));

        // line 1
        echo "<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function () {

    \$('.inputsearch').keyup(searchTowns);
    \$('.filtermodalclose').click(searchTowns);
    \$('#buttonfilter').click(searchTowns);
    \$('#buttontri').click(searchTowns);

    function searchTowns() {

        let text = \$('.inputsearch').val();
        let urlAction = \$('.inputsearch').attr(\"data-urlaction\");
        let country = '";
        // line 16
        (((array_key_exists("country", $context) &&  !(null === (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 16, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 16, $this->source); })()), "js", null, true))) : (print ("")));
        echo "';
        let tri = \$('input[name=\"tri\"]:checked').val();
        let search = \$('input[name=\"search\"]:checked').val();

            \$('#resulttowns').html('<div class=\"justify-content-center d-flex\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>');

            \$.ajax({
                url: urlAction,
                method: 'GET',
                data: 'text=' + encodeURIComponent(text) + '&country=' + country + '&tri=' + tri + '&search=' + search,
                success: function (data) {
                        \$('#resulttowns').html('');
                        console.log(data);
                        \$('#resulttowns').append(data);
                },
                error: function (data) {
                    console.log(data);
                    console.log(\"erreur\");
                }
            });

    }

});

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/towns/town.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function () {

    \$('.inputsearch').keyup(searchTowns);
    \$('.filtermodalclose').click(searchTowns);
    \$('#buttonfilter').click(searchTowns);
    \$('#buttontri').click(searchTowns);

    function searchTowns() {

        let text = \$('.inputsearch').val();
        let urlAction = \$('.inputsearch').attr(\"data-urlaction\");
        let country = '{{country??\"\"}}';
        let tri = \$('input[name=\"tri\"]:checked').val();
        let search = \$('input[name=\"search\"]:checked').val();

            \$('#resulttowns').html('<div class=\"justify-content-center d-flex\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>');

            \$.ajax({
                url: urlAction,
                method: 'GET',
                data: 'text=' + encodeURIComponent(text) + '&country=' + country + '&tri=' + tri + '&search=' + search,
                success: function (data) {
                        \$('#resulttowns').html('');
                        console.log(data);
                        \$('#resulttowns').append(data);
                },
                error: function (data) {
                    console.log(data);
                    console.log(\"erreur\");
                }
            });

    }

});

</script>", "find/towns/town.js.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/find/towns/town.js.twig");
    }
}
