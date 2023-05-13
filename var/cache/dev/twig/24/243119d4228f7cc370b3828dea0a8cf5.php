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

/* corporations/corporation.html.twig */
class __TwigTemplate_03b7bed213f6250bd84ceced3f381654 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "corporations/corporation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "corporations/corporation.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "corporations/corporation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("inc/allpage.css.twig", "corporations/corporation.html.twig", 5)->display($context);
        // line 6
        echo "
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"card\">
                <div class=\"row p-2 align-items-center\">
                    <div class=\"col-4 text-center\">
                        <img src=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", true, true, false, 14) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 14, $this->source); })()), "logo", [], "any", false, false, false, 14)))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 14, $this->source); })()), "logo", [], "any", false, false, false, 14)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
        }
        echo "\" class=\"card-img w-75\" alt=\"image\" >
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
                        <h6 class=\"card-subtitle\">";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", true, true, false, 19) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "nickname", [], "any", false, false, false, 19) != ""))) {
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "nickname", [], "any", false, false, false, 19), "html", null, true);
            echo ")";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "town", [], "any", false, false, false, 19), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "region", [], "any", false, false, false, 19), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "country", [], "any", false, false, false, 19), "html", null, true);
        echo "</h6>
                        <h6 class=\"card-subtitle\">";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "creation", [], "any", true, true, false, 20)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 20, $this->source); })()), "creation", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
        }
        echo "</h6>
                        <!-- <p class=\"card-text\">Paris, France</p> -->
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div class=\"section full mt-2\">
            <div class=\"section full\">
                <div class=\"wide-block transparent p-0\">
                    <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#informations\" role=\"tab\">
                                <ion-icon name=\"information-circle-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#decorum\" role=\"tab\">
                                <ion-icon name=\"trophy-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#chant\" role=\"tab\">
                                <ion-icon name=\"musical-notes-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#membres\" role=\"tab\">
                                <ion-icon name=\"people-outline\"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            
            ";
        // line 58
        echo "                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"informations\" role=\"tabpanel\">
                        ";
        // line 60
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 60) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 60, $this->source); })()), "resume", [], "any", false, false, false, 60))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 60, $this->source); })()), "resume", [], "any", false, false, false, 60) != ""))) {
            // line 61
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Résumé</div>
                                <div class=\"wide-block pt-2 pb-1\">
                                    <p>
                                    ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 65, $this->source); })()), "resume", [], "any", false, false, false, 65), "html", null, true);
            echo "
                                    </p>
                                </div>
                            </div>
                        ";
        }
        // line 70
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 70) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 70, $this->source); })()), "resume", [], "any", false, false, false, 70))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 70, $this->source); })()), "resume", [], "any", false, false, false, 70) != ""))) {
            // line 71
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Particularités</div>
                                <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 74, $this->source); })()), "particularity", [], "any", false, false, false, 74));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["particu"]) {
                // line 75
                echo "                                        <li class=\"list-group-item border-0\">";
                echo twig_escape_filter($this->env, $context["particu"], "html", null, true);
                echo "</li>
                                        ";
                // line 76
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                            <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                        ";
                }
                // line 79
                echo "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['particu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                </ol>
                            </div>
                        ";
        }
        // line 83
        echo "                        
                        ";
        // line 84
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", true, true, false, 84) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 84, $this->source); })()), "anecdote", [], "any", false, false, false, 84))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 84, $this->source); })()), "anecdote", [], "any", false, false, false, 84) != ""))) {
            // line 85
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>
                            <div class=\"section full mt-0\">
                                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 88, $this->source); })()), "anecdote", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["key"] => $context["anecdo"]) {
                // line 89
                echo "                                    <div class=\"accordion\" id=\"accordionExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\">
                                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#accordion";
                // line 93
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                                    ";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "title", [], "any", false, false, false, 94), "html", null, true);
                echo "
                                                </button>
                                            </h2>
                                            <div id=\"accordion";
                // line 97
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                                <div class=\"accordion-body\">
                                                    ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "text", [], "any", false, false, false, 99), "html", null, true);
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['anecdo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                            </div>
                        </div>
                        ";
        }
        // line 108
        echo "
                        ";
        // line 109
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", true, true, false, 109) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 109, $this->source); })()), "document", [], "any", false, false, false, 109))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 109, $this->source); })()), "document", [], "any", false, false, false, 109) != ""))) {
            // line 110
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Documents</div>
                            <div class=\"section full mt-0\">
                                <ul class=\"listview link-listview\">
                                    ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 114, $this->source); })()), "document", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["key"] => $context["docu"]) {
                // line 115
                echo "                                        <li>
                                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal";
                // line 116
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                                <div>
                                                    <span class=\"mb-05\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "title", [], "any", false, false, false, 118), "html", null, true);
                echo "</span>
                                                    <div class=\"text-muted\">
                                                        <div>
                                                            ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "type", [], "any", false, false, false, 121), "html", null, true);
                echo " ";
                if (((twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", true, true, false, 121) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 121))) && (twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 121) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
                }
                // line 122
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"documentModal";
                // line 128
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                    <div class=\"modal-body\">
                                                        <iframe src=\"https://cdn.1j1ju.com/medias/2f/ab/e1-its-a-wonderful-world-corruption-ascension-regle.pdf\" height=\"100%\" width=\"100%\"></iframe>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['docu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 146
        echo "
                        <div class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-primary m-2\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalBasic\">Soumettre une information</button>
                        </div>
                    </div>

                    <!-- Modal Basic -->
                    <div class=\"modal fade modalbox\" id=\"ModalBasic\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Soumission d'information</h5>
                                    <a href=\"#\" data-bs-dismiss=\"modal\">Close</a>
                                </div>
                                <div class=\"modal-body\">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                                        fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                                        varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                                        auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                                        cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                                    </p>
                                    <p>
                                        Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                                        Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                                        dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                                        vulputate ligula.
                                    </p>
                                    <p>
                                        Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                                        egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                                        vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                                        Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                                        sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- * Modal Basic -->

                    ";
        // line 189
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", true, true, false, 189) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 189, $this->source); })()), "decorum", [], "any", false, false, false, 189))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 189, $this->source); })()), "decorum", [], "any", false, false, false, 189) != ""))) {
            // line 190
            echo "                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">

                            ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 194, $this->source); })()), "decorum", [], "any", false, false, false, 194));
            foreach ($context['_seq'] as $context["key"] => $context["deco"]) {
                // line 195
                echo "                                <li class=\"multi-level\">
                                    <a href=\"#\" class=\"item\">
                                        <div class=\"imageWrapper\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageDecorum";
                // line 197
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 198
                if ((twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", true, true, false, 198) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 198)))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 198), 0, [], "any", false, false, false, 198), "path", [], "any", false, false, false, 198)), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
                }
                echo "\" alt=\"image\" class=\"imaged w64\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <span>";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "title", [], "any", false, false, false, 202), "html", null, true);
                echo "</span>
                                                <div class=\"text-muted\">
                                                    ";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "type", [], "any", false, false, false, 204), "html", null, true);
                echo " ";
                if (((twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", true, true, false, 204) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 204))) && (twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 204) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 204), "d/m/Y"), "html", null, true);
                }
                // line 205
                echo "                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                        <li>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "text", [], "any", false, false, false, 210), "html", null, true);
                echo "</li>
                                    </ul>
                                </li>
                                ";
                // line 213
                if (twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", true, true, false, 213)) {
                    // line 214
                    echo "                                    <!-- Dialog Image -->
                                    <div class=\"modal fade dialogbox\" id=\"DialogImageDecorum";
                    // line 215
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <img src=\"";
                    // line 218
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 218), 0, [], "any", false, false, false, 218), "path", [], "any", false, false, false, 218)), "html", null, true);
                    echo "\" alt=\"image\" class=\"img-fluid\">
                                                <div class=\"modal-footer\">
                                                    <div class=\"btn-inline\">
                                                        <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">Fermer</a>
                                                        <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 229
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['deco'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "
                        </ul>
                        ";
        }
        // line 233
        echo "
                        ";
        // line 234
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", true, true, false, 234) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 234, $this->source); })()), "goodies", [], "any", false, false, false, 234))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 234, $this->source); })()), "goodies", [], "any", false, false, false, 234) != ""))) {
            // line 235
            echo "                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 240, $this->source); })()), "goodies", [], "any", false, false, false, 240));
            foreach ($context['_seq'] as $context["key"] => $context["goodie"]) {
                // line 241
                echo "                                        <div class=\"col-4 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageGoodies";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["goodie"], "file", [], "any", false, false, false, 242), 0, [], "any", false, false, false, 242), "path", [], "any", false, false, false, 242)), "html", null, true);
                echo "\" alt=\"image\" class=\"imaged w-100\">
                                        </div>
                                    
                                        <!-- Dialog Image -->
                                        <div class=\"modal fade dialogbox\" id=\"DialogImageGoodies";
                // line 246
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <img src=\"";
                // line 249
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["goodie"], "file", [], "any", false, false, false, 249), 0, [], "any", false, false, false, 249), "path", [], "any", false, false, false, 249)), "html", null, true);
                echo "\" alt=\"image\" class=\"img-fluid\">
                                                    <div class=\"modal-footer\">
                                                        <div class=\"infosmodalimage m-0 p-1\">
                                                            <b>";
                // line 252
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "title", [], "any", false, false, false, 252), "html", null, true);
                echo "</b>
                                                            <i>(";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "type", [], "any", false, false, false, 253), "html", null, true);
                if (((twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", true, true, false, 253) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 253))) && (twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 253) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 253), "d/m/Y"), "html", null, true);
                    echo "</i>";
                }
                echo ")</i><br>
                                                            ";
                // line 254
                if (((twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", true, true, false, 254) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 254))) && (twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 254) != ""))) {
                    echo "<span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 254), "html", null, true);
                    echo "</span>";
                }
                echo "<br>
                                                            <div class=\"text-muted\">Source : ";
                // line 255
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "source", [], "any", false, false, false, 255), "html", null, true);
                echo "</div>
                                                        </div>
                                                        <div class=\"btn-inline\">
                                                            <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">Fermer</a>
                                                            <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['goodie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 270
        echo "                        
                <!-- * Dialog Image -->
                <!-- * feed -->
                    </div>

                    ";
        // line 275
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", true, true, false, 275) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 275, $this->source); })()), "sing", [], "any", false, false, false, 275))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 275, $this->source); })()), "sing", [], "any", false, false, false, 275) != ""))) {
            // line 276
            echo "                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">
                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 278, $this->source); })()), "sing", [], "any", false, false, false, 278), "title", [], "any", false, false, false, 278), "html", null, true);
            echo "</h2>
                
                            <div class=\"post-body\">
                                ";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 281, $this->source); })()), "sing", [], "any", false, false, false, 281), "text", [], "any", false, false, false, 281), "html", null, true);
            echo "
                            </div>
                            ";
            // line 283
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 283), "author", [], "any", true, true, false, 283) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 283), "year", [], "any", true, true, false, 283))) {
                // line 284
                echo "                                <div class=\"post-header\">
                                    <div>
                                        <a href=\"#\">
                                            ";
                // line 287
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 287), "author", [], "any", true, true, false, 287)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 287, $this->source); })()), "sing", [], "any", false, false, false, 287), "author", [], "any", false, false, false, 287), "html", null, true);
                }
                // line 288
                echo "                                        </a>
                                    </div>
                                    ";
                // line 290
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 290), "year", [], "any", true, true, false, 290)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 290, $this->source); })()), "sing", [], "any", false, false, false, 290), "year", [], "any", false, false, false, 290), "d/m/Y"), "html", null, true);
                }
                // line 291
                echo "                                </div>
                            ";
            }
            // line 293
            echo "                        </div>
                    </div>
                    ";
        }
        // line 296
        echo "


                    <div class=\"tab-pane fade\" id=\"membres\" role=\"tabpanel\">
                        <div class=\"wide-block pt-2 pb-2\">

                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#comite\" role=\"tab\">
                                        Comité
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#baptise\" role=\"tab\">
                                        Baptisé
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#impetrant\" role=\"tab\">
                                        Impétrant
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <!-- comite -->
                                <div class=\"tab-pane fade show active\" id=\"comite\" role=\"tabpanel\">

                                    <div class=\"section full mb-2 mt-2\">
                                        <div class=\"wide-block p-0\">
                            
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"col-2\">Année</th>
                                                            <th class=\"col-2\">Poste</th>
                                                            <th class=\"col-8\">Personne</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>2022</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark Repère</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob Nickolson</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Larry Bird</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>2021</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>2020</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Larry</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                            
                                        </div>
                                    </div>





                                </div>
                                <!-- comite -->
                                <!-- baptise -->
                                <div class=\"tab-pane fade\" id=\"baptise\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar3.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Baptise
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar2.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar5.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar4.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar6.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar7.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar10.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- baptise -->
                                <!-- impetrant -->
                                <div class=\"tab-pane fade\" id=\"impetrant\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar3.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Impet
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar2.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar5.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar4.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar6.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar7.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar10.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- impetrant -->
                            </div>
    
                        </div>
            <!-- </div> -->
        </div>

    </div>
    <!-- * App Capsule -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "corporations/corporation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 296,  623 => 293,  619 => 291,  615 => 290,  611 => 288,  607 => 287,  602 => 284,  600 => 283,  595 => 281,  589 => 278,  585 => 276,  583 => 275,  576 => 270,  570 => 266,  553 => 255,  545 => 254,  536 => 253,  532 => 252,  526 => 249,  520 => 246,  513 => 242,  508 => 241,  504 => 240,  497 => 235,  495 => 234,  492 => 233,  487 => 230,  481 => 229,  467 => 218,  461 => 215,  458 => 214,  456 => 213,  450 => 210,  443 => 205,  436 => 204,  431 => 202,  420 => 198,  416 => 197,  412 => 195,  408 => 194,  402 => 190,  400 => 189,  355 => 146,  349 => 142,  329 => 128,  321 => 122,  314 => 121,  308 => 118,  303 => 116,  300 => 115,  296 => 114,  290 => 110,  288 => 109,  285 => 108,  280 => 105,  268 => 99,  261 => 97,  255 => 94,  251 => 93,  243 => 89,  239 => 88,  234 => 85,  232 => 84,  229 => 83,  224 => 80,  210 => 79,  206 => 77,  204 => 76,  199 => 75,  182 => 74,  177 => 71,  174 => 70,  166 => 65,  160 => 61,  158 => 60,  154 => 58,  112 => 20,  98 => 19,  94 => 18,  83 => 14,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}

    {% include 'inc/allpage.css.twig' %}

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"card\">
                <div class=\"row p-2 align-items-center\">
                    <div class=\"col-4 text-center\">
                        <img src=\"{% if association.logo is defined and association.logo is not empty %}{{asset(association.logo)}}{% else %}{{asset(\"assets/img/sample/photo/Faluche.png\")}}{% endif %}\" class=\"card-img w-75\" alt=\"image\" >
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">{{association.name}}</h5>
                        <h6 class=\"card-subtitle\">{% if association.nickname is defined and association.nickname != '' %}({{association.nickname}}){% endif %} {{association.town}}, {{association.region}}, {{association.country}}</h6>
                        <h6 class=\"card-subtitle\">{% if association.creation is defined %}{{association.creation|date(\"d/m/Y\")}}{% endif %}</h6>
                        <!-- <p class=\"card-text\">Paris, France</p> -->
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>

        <div class=\"section full mt-2\">
            <div class=\"section full\">
                <div class=\"wide-block transparent p-0\">
                    <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#informations\" role=\"tab\">
                                <ion-icon name=\"information-circle-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#decorum\" role=\"tab\">
                                <ion-icon name=\"trophy-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#chant\" role=\"tab\">
                                <ion-icon name=\"musical-notes-outline\"></ion-icon>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#membres\" role=\"tab\">
                                <ion-icon name=\"people-outline\"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            
            {# <div class=\"section full mb-2\"> #}
                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"informations\" role=\"tabpanel\">
                        {% if association.resume is defined and association.resume is not empty and association.resume != '' %}
                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Résumé</div>
                                <div class=\"wide-block pt-2 pb-1\">
                                    <p>
                                    {{association.resume}}
                                    </p>
                                </div>
                            </div>
                        {% endif %}
                        {% if association.resume is defined and association.resume is not empty and association.resume != '' %}
                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Particularités</div>
                                <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                    {% for particu in association.particularity %}
                                        <li class=\"list-group-item border-0\">{{particu}}</li>
                                        {% if not loop.last %}
                                            <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                        {% endif %}
                                    {% endfor %}
                                </ol>
                            </div>
                        {% endif %}
                        
                        {% if association.anecdote is defined and association.anecdote is not empty and association.anecdote != '' %}
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>
                            <div class=\"section full mt-0\">
                                {% for key, anecdo in association.anecdote %}
                                    <div class=\"accordion\" id=\"accordionExample{{key}}\">
                                        <div class=\"accordion-item\">
                                            <h2 class=\"accordion-header\">
                                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                    data-bs-target=\"#accordion{{key}}\">
                                                    {{anecdo.title}}
                                                </button>
                                            </h2>
                                            <div id=\"accordion{{key}}\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample{{key}}\">
                                                <div class=\"accordion-body\">
                                                    {{anecdo.text}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                        {% endif %}

                        {% if association.document is defined and association.document is not empty and association.document != '' %}
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Documents</div>
                            <div class=\"section full mt-0\">
                                <ul class=\"listview link-listview\">
                                    {% for key, docu in association.document %}
                                        <li>
                                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#documentModal{{key}}\">
                                                <div>
                                                    <span class=\"mb-05\">{{docu.title}}</span>
                                                    <div class=\"text-muted\">
                                                        <div>
                                                            {{docu.type}} {% if docu.year is defined and docu.year is not empty and docu.year != '' %} - {{docu.year|date(\"d/m/Y\")}}{% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"documentModal{{key}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                    <div class=\"modal-body\">
                                                        <iframe src=\"https://cdn.1j1ju.com/medias/2f/ab/e1-its-a-wonderful-world-corruption-ascension-regle.pdf\" height=\"100%\" width=\"100%\"></iframe>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-primary m-2\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalBasic\">Soumettre une information</button>
                        </div>
                    </div>

                    <!-- Modal Basic -->
                    <div class=\"modal fade modalbox\" id=\"ModalBasic\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Soumission d'information</h5>
                                    <a href=\"#\" data-bs-dismiss=\"modal\">Close</a>
                                </div>
                                <div class=\"modal-body\">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                                        fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                                        varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                                        auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                                        cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                                    </p>
                                    <p>
                                        Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                                        Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                                        dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                                        vulputate ligula.
                                    </p>
                                    <p>
                                        Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                                        egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                                        torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                                        vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                                        Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                                        sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- * Modal Basic -->

                    {% if association.decorum is defined and association.decorum is not empty and association.decorum != '' %}
                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">

                            {% for key, deco in association.decorum %}
                                <li class=\"multi-level\">
                                    <a href=\"#\" class=\"item\">
                                        <div class=\"imageWrapper\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageDecorum{{key}}\">
                                            <img src=\"{% if deco.file is defined and deco.file is not empty %}{{asset(deco.file.0.path)}}{% else %}{{asset(\"assets/img/sample/photo/Faluche.png\")}}{% endif %}\" alt=\"image\" class=\"imaged w64\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <span>{{deco.title}}</span>
                                                <div class=\"text-muted\">
                                                    {{deco.type}} {% if deco.year is defined and deco.year is not empty and deco.year != '' %} - {{deco.year|date(\"d/m/Y\")}}{% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                        <li>{{deco.text}}</li>
                                    </ul>
                                </li>
                                {% if deco.file is defined %}
                                    <!-- Dialog Image -->
                                    <div class=\"modal fade dialogbox\" id=\"DialogImageDecorum{{key}}\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <img src=\"{{asset(deco.file.0.path)}}\" alt=\"image\" class=\"img-fluid\">
                                                <div class=\"modal-footer\">
                                                    <div class=\"btn-inline\">
                                                        <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">Fermer</a>
                                                        <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}

                        </ul>
                        {% endif %}

                        {% if association.goodies is defined and association.goodies is not empty and association.goodies != '' %}
                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    {% for key, goodie in association.goodies %}
                                        <div class=\"col-4 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageGoodies{{key}}\">
                                            <img src=\"{{asset(goodie.file.0.path)}}\" alt=\"image\" class=\"imaged w-100\">
                                        </div>
                                    
                                        <!-- Dialog Image -->
                                        <div class=\"modal fade dialogbox\" id=\"DialogImageGoodies{{key}}\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <img src=\"{{asset(goodie.file.0.path)}}\" alt=\"image\" class=\"img-fluid\">
                                                    <div class=\"modal-footer\">
                                                        <div class=\"infosmodalimage m-0 p-1\">
                                                            <b>{{goodie.title}}</b>
                                                            <i>({{goodie.type}}{% if goodie.year is defined and goodie.year is not empty and goodie.year != '' %} - {{goodie.year|date(\"d/m/Y\")}}</i>{% endif %})</i><br>
                                                            {% if goodie.text is defined and goodie.text is not empty and goodie.text != '' %}<span>{{goodie.text}}</span>{% endif %}<br>
                                                            <div class=\"text-muted\">Source : {{goodie.source}}</div>
                                                        </div>
                                                        <div class=\"btn-inline\">
                                                            <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">Fermer</a>
                                                            <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        
                <!-- * Dialog Image -->
                <!-- * feed -->
                    </div>

                    {% if association.sing is defined and association.sing is not empty and association.sing != '' %}
                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">
                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">{{association.sing.title}}</h2>
                
                            <div class=\"post-body\">
                                {{association.sing.text}}
                            </div>
                            {% if association.sing.author is defined or association.sing.year is defined %}
                                <div class=\"post-header\">
                                    <div>
                                        <a href=\"#\">
                                            {% if association.sing.author is defined %}{{association.sing.author}}{% endif %}
                                        </a>
                                    </div>
                                    {% if association.sing.year is defined %}{{association.sing.year|date(\"d/m/Y\")}}{% endif %}
                                </div>
                            {% endif %}
                        </div>
                    </div>
                    {% endif %}



                    <div class=\"tab-pane fade\" id=\"membres\" role=\"tabpanel\">
                        <div class=\"wide-block pt-2 pb-2\">

                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#comite\" role=\"tab\">
                                        Comité
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#baptise\" role=\"tab\">
                                        Baptisé
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#impetrant\" role=\"tab\">
                                        Impétrant
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <!-- comite -->
                                <div class=\"tab-pane fade show active\" id=\"comite\" role=\"tabpanel\">

                                    <div class=\"section full mb-2 mt-2\">
                                        <div class=\"wide-block p-0\">
                            
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-striped\">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"col-2\">Année</th>
                                                            <th class=\"col-2\">Poste</th>
                                                            <th class=\"col-8\">Personne</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>2022</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark Repère</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob Nickolson</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Larry Bird</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>2021</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>2020</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>GM</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>GC</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\">
                                                                      <tr>
                                                                        <td>Mark</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Jacob</td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>Larry</td>
                                                                      </tr>
                                                                  </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                            
                                        </div>
                                    </div>





                                </div>
                                <!-- comite -->
                                <!-- baptise -->
                                <div class=\"tab-pane fade\" id=\"baptise\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar3.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Baptise
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar2.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar5.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar4.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar6.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar7.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar10.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- baptise -->
                                <!-- impetrant -->
                                <div class=\"tab-pane fade\" id=\"impetrant\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar3.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Impet
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar2.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emelda Scandroot
                                                        <div class=\"text-muted\">120k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar5.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Henry Bove
                                                        <div class=\"text-muted\">920k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar4.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Ava Gregoraci
                                                        <div class=\"text-muted\">5092 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar6.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Emmy Elsner
                                                        <div class=\"text-muted\">92 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar7.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Lisanne Viscaal
                                                        <div class=\"text-muted\">893 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"assets/img/sample/avatar/avatar10.jpg\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Cecilia Pozo
                                                        <div class=\"text-muted\">51k followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- impetrant -->
                            </div>
    
                        </div>
            <!-- </div> -->
        </div>

    </div>
    <!-- * App Capsule -->

{% endblock %}", "corporations/corporation.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/corporations/corporation.html.twig");
    }
}
