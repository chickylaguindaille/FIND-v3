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

/* find/home.js.twig */
class __TwigTemplate_6344c8c03b3b513778dc651ba8bc5522 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/home.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/home.js.twig"));

        // line 1
        echo "<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function() {

  \$('.savefilterbutton').click(addTitleFIND);

  function addTitleFIND() {
    if ((\$('#countryfilter').val() === '') && (\$('#townfilter').val() === '') && (\$('#typefilter').val() === '') && (\$('#hatfilter').val() === '') && (\$('#genderfilter').val() === '')) {
      \$('#titleFIND').removeClass('d-none');
      \$('#titleFIND').addClass('d-block');
    }else{
      \$('#titleFIND').addClass('d-none');
      \$('#titleFIND').removeClass('d-block');
    }
  };


  \$('.savefilterbutton').click(filterCountry);
  filterCountry();

  function filterCountry() {
    var selectedOption = \$('#countryfilter').val();

    if (selectedOption === 'France') {
      \$('#countrychoice').html('<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/France.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Belgique') {
      \$('#countrychoice').html('<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/photo/Belgique.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#countrychoice').html('');
    }
  };




  ";
        // line 50
        echo "


  \$('.savefilterbutton').click(filterTown);
  filterTown()

  function filterTown() {
    var selectedOptionId = \$(\"#townfilter\").find(\":selected\").attr(\"id\");

    if (selectedOptionId === '') {
         \$('#townchoice').html('');
    } else{
        var imageElement = '<img src=\"' + selectedOptionId + '\" class=\"ms-1 iconfilter\">';
        \$('#townchoice').html(imageElement);    }
  };



  \$('.savefilterbutton').click(filterTypeasso);
  filterTypeasso()

  function filterTypeasso() {
    var selectedOption = \$('#typefilter').val();

    if (selectedOption === 'Association') {
      \$('#typechoice').html('<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/asso.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Cercle') {
      \$('#typechoice').html('<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/cercle.svg"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Corporation') {
      \$('#typechoice').html('<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/corpo.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Filière') {
      \$('#typechoice').html('<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/filiere.svg"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Ordre') {
      \$('#typechoice').html('<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/ordre.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Régionale') {
      \$('#typechoice').html('<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/type/regio.webp"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#typechoice').html('');
    }
};


  \$('.savefilterbutton').click(filterHat);
  filterHat()

  function filterHat() {
    var selectedOption = \$('#hatfilter').val();

    if (selectedOption === 'Calotte') {
      \$('#hatchoice').html('<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/hat/Calotte.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Faluche') {
      \$('#hatchoice').html('<img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/hat/Faluche.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Penne') {
      \$('#hatchoice').html('<img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/hat/Penne.png"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Aucun') {
      \$('#hatchoice').html('');
    } else if (selectedOption === '') {
      \$('#hatchoice').html('');
    }
};

  \$('.savefilterbutton').click(filterGender);
  filterGender()
  
  function filterGender() {
    var selectedOption = \$('#genderfilter').val();

    if (selectedOption === 'Mixte') {
      \$('#genderchoice').html('<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/gender/male-female.svg"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Masculin') {
      \$('#genderchoice').html('<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/gender/male.svg"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Féminin') {
      \$('#genderchoice').html('<img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app/assets/img/sample/gender/female.svg"), "js", null, true);
        echo "\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#genderchoice').html('');
    }
};




});

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/home.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 122,  190 => 120,  185 => 118,  167 => 103,  162 => 101,  157 => 99,  140 => 85,  135 => 83,  130 => 81,  125 => 79,  120 => 77,  115 => 75,  88 => 50,  76 => 29,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function() {

  \$('.savefilterbutton').click(addTitleFIND);

  function addTitleFIND() {
    if ((\$('#countryfilter').val() === '') && (\$('#townfilter').val() === '') && (\$('#typefilter').val() === '') && (\$('#hatfilter').val() === '') && (\$('#genderfilter').val() === '')) {
      \$('#titleFIND').removeClass('d-none');
      \$('#titleFIND').addClass('d-block');
    }else{
      \$('#titleFIND').addClass('d-none');
      \$('#titleFIND').removeClass('d-block');
    }
  };


  \$('.savefilterbutton').click(filterCountry);
  filterCountry();

  function filterCountry() {
    var selectedOption = \$('#countryfilter').val();

    if (selectedOption === 'France') {
      \$('#countrychoice').html('<img src=\"{{ asset(\"app/assets/img/sample/photo/France.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Belgique') {
      \$('#countrychoice').html('<img src=\"{{ asset(\"app/assets/img/sample/photo/Belgique.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#countrychoice').html('');
    }
  };




  {# \$('#regionchoice').change(function() {
    var selectedOptionId = \$(this).find(\":selected\").attr(\"id\");
    console.log(selectedOptionId);

    if (selectedOption === 'France') {
      \$('#countrychoice').html('<img src=\"{{ asset(\"app/assets/img/sample/photo/France.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Belgique') {
      \$('#countrychoice').html('<img src=\"{{ asset(\"app/assets/img/sample/photo/Belgique.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#countrychoice').html('');
    }
  }); #}



  \$('.savefilterbutton').click(filterTown);
  filterTown()

  function filterTown() {
    var selectedOptionId = \$(\"#townfilter\").find(\":selected\").attr(\"id\");

    if (selectedOptionId === '') {
         \$('#townchoice').html('');
    } else{
        var imageElement = '<img src=\"' + selectedOptionId + '\" class=\"ms-1 iconfilter\">';
        \$('#townchoice').html(imageElement);    }
  };



  \$('.savefilterbutton').click(filterTypeasso);
  filterTypeasso()

  function filterTypeasso() {
    var selectedOption = \$('#typefilter').val();

    if (selectedOption === 'Association') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/asso.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Cercle') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/cercle.svg\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Corporation') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/corpo.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Filière') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/filiere.svg\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Ordre') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/ordre.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Régionale') {
      \$('#typechoice').html('<img src=\"{{ asset(\"app/assets/img/sample/type/regio.webp\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#typechoice').html('');
    }
};


  \$('.savefilterbutton').click(filterHat);
  filterHat()

  function filterHat() {
    var selectedOption = \$('#hatfilter').val();

    if (selectedOption === 'Calotte') {
      \$('#hatchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/hat/Calotte.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Faluche') {
      \$('#hatchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/hat/Faluche.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Penne') {
      \$('#hatchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/hat/Penne.png\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Aucun') {
      \$('#hatchoice').html('');
    } else if (selectedOption === '') {
      \$('#hatchoice').html('');
    }
};

  \$('.savefilterbutton').click(filterGender);
  filterGender()
  
  function filterGender() {
    var selectedOption = \$('#genderfilter').val();

    if (selectedOption === 'Mixte') {
      \$('#genderchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/gender/male-female.svg\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Masculin') {
      \$('#genderchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/gender/male.svg\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === 'Féminin') {
      \$('#genderchoice').html('<img src=\"{{ asset(\"app/assets/img/sample/gender/female.svg\") }}\" class=\"ms-1 iconfilter\">');
    } else if (selectedOption === '') {
      \$('#genderchoice').html('');
    }
};




});

</script>", "find/home.js.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/home.js.twig");
    }
}
