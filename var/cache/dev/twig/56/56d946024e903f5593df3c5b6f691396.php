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

/* find/corporations/corporations.js.twig */
class __TwigTemplate_a7f9cc7f3f409c01ae4dd72fb2571c5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporations.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporations/corporations.js.twig"));

        // line 1
        echo "<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function () {


        const selectRemoteInput = \$(\"#select-remote\");

        let country = '";
        // line 10
        (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "country", [], "any", true, true, false, 10) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "country", [], "any", false, false, false, 10)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "country", [], "any", false, false, false, 10), "js", null, true))) : (print ("")));
        echo "';
        let town = '";
        // line 11
        (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "town", [], "any", true, true, false, 11) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "town", [], "any", false, false, false, 11)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "town", [], "any", false, false, false, 11), "js", null, true))) : (print ("")));
        echo "';
        let typeasso = '";
        // line 12
        (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "typeasso", [], "any", true, true, false, 12) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "typeasso", [], "any", false, false, false, 12)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "typeasso", [], "any", false, false, false, 12), "js", null, true))) : (print ("")));
        echo "';
        let hat = '";
        // line 13
        (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "hat", [], "any", true, true, false, 13) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "hat", [], "any", false, false, false, 13)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "hat", [], "any", false, false, false, 13), "js", null, true))) : (print ("")));
        echo "';
        let gender = '";
        // line 14
        (((twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gender", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gender", [], "any", false, false, false, 14)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["allfilter"] ?? null), "gender", [], "any", false, false, false, 14), "js", null, true))) : (print ("")));
        echo "';

    \$('.inputsearch').keyup(searchAssociations);
    \$('.savefilterbutton').click(searchAssociations);
    \$('#buttontri').click(searchAssociations);

    function searchAssociations() {

        let text = \$('.inputsearch').val();
        let urlAction = \$('.inputsearch').attr(\"data-urlaction\");

        ";
        // line 25
        if (((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 25, $this->source); })()) != "associationsbylocalisation")) {
            // line 26
            echo "            let country = \$('#countryfilter').val();
            let town = \$('#townfilter').val();
        ";
        } else {
            // line 29
            echo "            let country = '";
            (((array_key_exists("country", $context) &&  !(null === (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 29, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 29, $this->source); })()), "js", null, true))) : (print ("")));
            echo "';
            let town = '";
            // line 30
            (((twig_get_attribute($this->env, $this->source, ($context["town"] ?? null), "name", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["town"] ?? null), "name", [], "any", false, false, false, 30)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["town"] ?? null), "name", [], "any", false, false, false, 30), "js", null, true))) : (print ("")));
            echo "';
        ";
        }
        // line 32
        echo "        let typeasso = \$('#typefilter').val();
        let hat = \$('#hatfilter').val();
        let gender = \$('#genderfilter').val();
        let search = \$('input[name=\"search\"]:checked').val();
        let tri = \$('input[name=\"tri\"]:checked').val();
        let typepage = \"";
        // line 37
        (((array_key_exists("typepage", $context) &&  !(null === (isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 37, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 37, $this->source); })()), "js", null, true))) : (print ("nohomepage")));
        echo "\";

            \$('#resultassociations').html('<div class=\"justify-content-center d-flex\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>');




            var auto_complete = new Autocomplete(document.getElementById('findinput'), {
                data: [], // Les données seront mises à jour via AJAX
                maximumItems: 10,
                highlightTyped: true,
                highlightClass: 'fw-bold text-primary'
            });



            \$.ajax({
                url: urlAction,
                method: 'GET',
                data: 'text=' + encodeURIComponent(text) + '&country=' + country + '&town=' + town + '&typeasso=' + typeasso + '&hat=' + hat + '&gender=' + gender + '&search=' + search + '&tri=' + tri + '&typepage=' + typepage,
                success: function (data) {
                        ";
        // line 58
        if (((isset($context["typepage"]) || array_key_exists("typepage", $context) ? $context["typepage"] : (function () { throw new RuntimeError('Variable "typepage" does not exist.', 58, $this->source); })()) == "homepage")) {
            // line 59
            echo "
                            console.log(data);

                            if (data.length === 0) {
                                \$('.dropdown-menu').not('.show').remove();
                            }
                            // Sélectionnez tous les div ayant la classe donnée
                            var divsToDelete = \$('.dropdown-menu.show');

                            // Si vous voulez supprimer les div les plus anciens en premier
                            divsToDelete.sort(function(a, b) {
                                return \$(a).data('timestamp') - \$(b).data('timestamp');
                            });

                            // Supprimez les div les plus anciens
                            for (var i = 0; i < divsToDelete.length; i++) {
                                \$(divsToDelete[i]).remove();
                            }

                            auto_complete.setData(data);

                        ";
        } else {
            // line 81
            echo "                            \$('#resultassociations').html('');
                            \$('#resultassociations').append(data);
                        ";
        }
        // line 84
        echo "                },
                error: function (data) {
                    console.log(data);
                    console.log(\"erreur\");
                }
            });

    }

});

</script>

  <script type=\"module\">
    import Autocomplete from \"https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-autocomplete@master/autocomplete.js\";
    // import Autocomplete from \"./autocomplete.min.js\";
    
      var src = [];

      function handleItemSelected(item) {
      console.log(\"Selected item:\", item);
      const selectedUrl = item.url;
      window.location.href = selectedUrl;
    }

    Autocomplete.init(\"input.autocomplete\", {
      onSelectItem: handleItemSelected, // Utilisation de la fonction pour gérer la sélection
    });

  </script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/corporations/corporations.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 84,  158 => 81,  134 => 59,  132 => 58,  108 => 37,  101 => 32,  96 => 30,  91 => 29,  86 => 26,  84 => 25,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://code.jquery.com/jquery-3.6.3.min.js\"></script>

<script>

\$(document).ready(function () {


        const selectRemoteInput = \$(\"#select-remote\");

        let country = '{{allfilter.country??\"\"}}';
        let town = '{{allfilter.town??\"\"}}';
        let typeasso = '{{allfilter.typeasso??\"\"}}';
        let hat = '{{allfilter.hat??\"\"}}';
        let gender = '{{allfilter.gender??\"\"}}';

    \$('.inputsearch').keyup(searchAssociations);
    \$('.savefilterbutton').click(searchAssociations);
    \$('#buttontri').click(searchAssociations);

    function searchAssociations() {

        let text = \$('.inputsearch').val();
        let urlAction = \$('.inputsearch').attr(\"data-urlaction\");

        {% if typepage != \"associationsbylocalisation\" %}
            let country = \$('#countryfilter').val();
            let town = \$('#townfilter').val();
        {% else %}
            let country = '{{country??\"\"}}';
            let town = '{{town.name??\"\"}}';
        {% endif %}
        let typeasso = \$('#typefilter').val();
        let hat = \$('#hatfilter').val();
        let gender = \$('#genderfilter').val();
        let search = \$('input[name=\"search\"]:checked').val();
        let tri = \$('input[name=\"tri\"]:checked').val();
        let typepage = \"{{typepage??\"nohomepage\"}}\";

            \$('#resultassociations').html('<div class=\"justify-content-center d-flex\"><div class=\"spinner-border text-primary\" role=\"status\"></div></div>');




            var auto_complete = new Autocomplete(document.getElementById('findinput'), {
                data: [], // Les données seront mises à jour via AJAX
                maximumItems: 10,
                highlightTyped: true,
                highlightClass: 'fw-bold text-primary'
            });



            \$.ajax({
                url: urlAction,
                method: 'GET',
                data: 'text=' + encodeURIComponent(text) + '&country=' + country + '&town=' + town + '&typeasso=' + typeasso + '&hat=' + hat + '&gender=' + gender + '&search=' + search + '&tri=' + tri + '&typepage=' + typepage,
                success: function (data) {
                        {% if typepage == \"homepage\" %}

                            console.log(data);

                            if (data.length === 0) {
                                \$('.dropdown-menu').not('.show').remove();
                            }
                            // Sélectionnez tous les div ayant la classe donnée
                            var divsToDelete = \$('.dropdown-menu.show');

                            // Si vous voulez supprimer les div les plus anciens en premier
                            divsToDelete.sort(function(a, b) {
                                return \$(a).data('timestamp') - \$(b).data('timestamp');
                            });

                            // Supprimez les div les plus anciens
                            for (var i = 0; i < divsToDelete.length; i++) {
                                \$(divsToDelete[i]).remove();
                            }

                            auto_complete.setData(data);

                        {% else %}
                            \$('#resultassociations').html('');
                            \$('#resultassociations').append(data);
                        {% endif %}
                },
                error: function (data) {
                    console.log(data);
                    console.log(\"erreur\");
                }
            });

    }

});

</script>

  <script type=\"module\">
    import Autocomplete from \"https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-autocomplete@master/autocomplete.js\";
    // import Autocomplete from \"./autocomplete.min.js\";
    
      var src = [];

      function handleItemSelected(item) {
      console.log(\"Selected item:\", item);
      const selectedUrl = item.url;
      window.location.href = selectedUrl;
    }

    Autocomplete.init(\"input.autocomplete\", {
      onSelectItem: handleItemSelected, // Utilisation de la fonction pour gérer la sélection
    });

  </script>", "find/corporations/corporations.js.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/corporations/corporations.js.twig");
    }
}
