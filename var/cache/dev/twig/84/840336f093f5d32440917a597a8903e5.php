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

/* inc/tri_filtre/filtre.js.twig */
class __TwigTemplate_3b2cbcde3f2aebd8dd07773c2b51d15f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/filtre.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/tri_filtre/filtre.js.twig"));

        // line 1
        echo "<script>

\$(document).ready(function() {
  // Sélectionnez l'élément <select> par son ID ou sa classe
  var countryselect = \$('#countryfilter');
  var townselect = \$('#townfilter');
  var typefilter = \$('#typefilter');


// GESTION DE VILLE EN FONCTION DE PAYS
  countryselect.on('change', function() {
    // Récupérez la valeur sélectionnée
    var selectedValue = \$(this).val();

        if (selectedValue === \"France\") {
            townselect.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'France' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });

            typefilter.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'France' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        if (selectedValue === \"Belgique\") {
            townselect.find('option').each(function() {
                var dataCountry = \$(this).data('country');
                if (dataCountry === 'Belgique' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });

            typefilter.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'Belgique' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        if (selectedValue === \"\") {
            townselect.find('option').each(function() {
                \$(this).show();
            });

            typefilter.find('option').each(function() {
                \$(this).show();
            });
        }
  });
});


</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/tri_filtre/filtre.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>

\$(document).ready(function() {
  // Sélectionnez l'élément <select> par son ID ou sa classe
  var countryselect = \$('#countryfilter');
  var townselect = \$('#townfilter');
  var typefilter = \$('#typefilter');


// GESTION DE VILLE EN FONCTION DE PAYS
  countryselect.on('change', function() {
    // Récupérez la valeur sélectionnée
    var selectedValue = \$(this).val();

        if (selectedValue === \"France\") {
            townselect.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'France' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });

            typefilter.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'France' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        if (selectedValue === \"Belgique\") {
            townselect.find('option').each(function() {
                var dataCountry = \$(this).data('country');
                if (dataCountry === 'Belgique' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });

            typefilter.find('option').each(function() {
                var dataCountry = \$(this).data('country');

                if (dataCountry === 'Belgique' || dataCountry === \"\") {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }

        if (selectedValue === \"\") {
            townselect.find('option').each(function() {
                \$(this).show();
            });

            typefilter.find('option').each(function() {
                \$(this).show();
            });
        }
  });
});


</script>", "inc/tri_filtre/filtre.js.twig", "/Applications/MAMP/htdocs/FIND-v3/templates/inc/tri_filtre/filtre.js.twig");
    }
}
