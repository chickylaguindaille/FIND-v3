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
class __TwigTemplate_5de167183b642ac9a9b8fa8664c1d121 extends Template
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
        echo "    ";
        $this->loadTemplate("corporations/corporation.css.twig", "corporations/corporation.html.twig", 6)->display($context);
        // line 7
        echo "
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"card\">
                <div class=\"row p-2 align-items-center\">
                    <div class=\"col-4 text-center\">
                        <img src=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", true, true, false, 15) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 15, $this->source); })()), "logo", [], "any", false, false, false, 15)))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 15, $this->source); })()), "logo", [], "any", false, false, false, 15)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
        }
        echo "\" class=\"card-img w-75\" alt=\"image\" >
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                        <h6 class=\"card-subtitle\">";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", true, true, false, 20) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 20, $this->source); })()), "nickname", [], "any", false, false, false, 20) != ""))) {
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 20, $this->source); })()), "nickname", [], "any", false, false, false, 20), "html", null, true);
            echo ")";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 20, $this->source); })()), "town", [], "any", false, false, false, 20), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 20, $this->source); })()), "country", [], "any", false, false, false, 20), "html", null, true);
        echo "</h6>
                        <h6 class=\"card-subtitle\">";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "creation", [], "any", true, true, false, 21)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 21, $this->source); })()), "creation", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
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
        // line 59
        echo "                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"informations\" role=\"tabpanel\">
                        ";
        // line 61
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 61, $this->source); })()), "resume", [], "any", false, false, false, 61))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 61, $this->source); })()), "resume", [], "any", false, false, false, 61) != ""))) {
            // line 62
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Résumé</div>
                                <div class=\"wide-block pt-2 pb-1\">
                                    <p>
                                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 66, $this->source); })()), "resume", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                    </p>
                                </div>
                            </div>
                        ";
        }
        // line 71
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 71) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 71, $this->source); })()), "resume", [], "any", false, false, false, 71))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 71, $this->source); })()), "resume", [], "any", false, false, false, 71) != ""))) {
            // line 72
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Particularités</div>
                                <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 75, $this->source); })()), "particularity", [], "any", false, false, false, 75));
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
                // line 76
                echo "                                        <li class=\"list-group-item border-0\">";
                echo twig_escape_filter($this->env, $context["particu"], "html", null, true);
                echo "</li>
                                        ";
                // line 77
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                                            <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                        ";
                }
                // line 80
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
            // line 81
            echo "                                </ol>
                            </div>
                        ";
        }
        // line 84
        echo "                        
                        ";
        // line 85
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", true, true, false, 85) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 85, $this->source); })()), "anecdote", [], "any", false, false, false, 85))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 85, $this->source); })()), "anecdote", [], "any", false, false, false, 85) != ""))) {
            // line 86
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>

                        <ul class=\"listview image-listview media\">

                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 91, $this->source); })()), "anecdote", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["key"] => $context["anecdo"]) {
                // line 92
                echo "                                <li class=\"multi-level\">
                                    <a href=\"#\" class=\"item\">
                                        <div class=\"imageWrapper\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageAnecdote";
                // line 94
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <span>";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "title", [], "any", false, false, false, 98), "html", null, true);
                echo "</span>
                                                <div class=\"text-muted\">
                                                    ";
                // line 100
                if (((twig_get_attribute($this->env, $this->source, $context["anecdo"], "year", [], "any", true, true, false, 100) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["anecdo"], "year", [], "any", false, false, false, 100))) && (twig_get_attribute($this->env, $this->source, $context["anecdo"], "year", [], "any", false, false, false, 100) != ""))) {
                    echo "<i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "year", [], "any", false, false, false, 100), "d/m/Y"), "html", null, true);
                    echo "</i>";
                }
                // line 101
                echo "                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                        <li class=\"\">
                                        <div class=\"d-flex\">
                                            ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", true, true, false, 108) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", false, false, false, 108)))) {
                    echo "<img src=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", true, true, false, 108) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", false, false, false, 108)))) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", false, false, false, 108), 0, [], "any", false, false, false, 108), "path", [], "any", false, false, false, 108)), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
                    }
                    echo "\" alt=\"image\" class=\"imaged w64\">";
                }
                // line 109
                echo "                                            <div class=\"my-auto\">
                                                <div class=\"mx-3\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "text", [], "any", false, false, false, 110), "html", null, true);
                echo "</div>
                                                <div class=\"mx-3 text-muted\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["anecdo"], "source", [], "any", false, false, false, 111), "html", null, true);
                echo "</div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                </li>
                                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", true, true, false, 117)) {
                    // line 118
                    echo "                                    <!-- Dialog Image -->
                                    <div class=\"modal fade dialogbox\" id=\"DialogImageAnecdote";
                    // line 119
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <img src=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["anecdo"], "file", [], "any", false, false, false, 122), 0, [], "any", false, false, false, 122), "path", [], "any", false, false, false, 122)), "html", null, true);
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
                // line 133
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['anecdo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "
                        </ul>






                            ";
            // line 161
            echo "





                        </div>
                        ";
        }
        // line 169
        echo "
                        ";
        // line 170
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", true, true, false, 170) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 170, $this->source); })()), "document", [], "any", false, false, false, 170))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 170, $this->source); })()), "document", [], "any", false, false, false, 170) != ""))) {
            // line 171
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Documents</div>
                            <div class=\"section full mt-0\">
                                <ul class=\"listview link-listview\">
                                    ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 175, $this->source); })()), "document", [], "any", false, false, false, 175));
            foreach ($context['_seq'] as $context["key"] => $context["docu"]) {
                // line 176
                echo "                                        <li>
                                            <a href=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["docu"], "file", [], "any", false, false, false, 177), "path", [], "any", false, false, false, 177)), "html", null, true);
                echo "\" target=\"_blank\">
                                                <div>
                                                    <span class=\"mb-05\">";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "title", [], "any", false, false, false, 179), "html", null, true);
                echo "</span>
                                                    <div class=\"text-muted\">
                                                        <div>
                                                            ";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "type", [], "any", false, false, false, 182), "html", null, true);
                echo " ";
                if (((twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", true, true, false, 182) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 182))) && (twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 182) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["docu"], "year", [], "any", false, false, false, 182), "d/m/Y"), "html", null, true);
                }
                // line 183
                echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['docu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                </ul>
                            </div>
                        </div>
                        ";
        }
        // line 193
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
        // line 236
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", true, true, false, 236) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 236, $this->source); })()), "decorum", [], "any", false, false, false, 236))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 236, $this->source); })()), "decorum", [], "any", false, false, false, 236) != ""))) {
            // line 237
            echo "                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">

                            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 241, $this->source); })()), "decorum", [], "any", false, false, false, 241));
            foreach ($context['_seq'] as $context["key"] => $context["deco"]) {
                // line 242
                echo "                                <li class=\"multi-level\">
                                    <a href=\"#\" class=\"item\">
                                        <div class=\"imageWrapper\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageDecorum";
                // line 244
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 245
                if ((twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", true, true, false, 245) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 245)))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 245), 0, [], "any", false, false, false, 245), "path", [], "any", false, false, false, 245)), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
                }
                echo "\" alt=\"image\" class=\"imaged w64\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <span>";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "title", [], "any", false, false, false, 249), "html", null, true);
                echo "</span>
                                                <div class=\"text-muted\">
                                                    ";
                // line 251
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "type", [], "any", false, false, false, 251), "html", null, true);
                echo " ";
                if (((twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", true, true, false, 251) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 251))) && (twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 251) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "year", [], "any", false, false, false, 251), "d/m/Y"), "html", null, true);
                }
                // line 252
                echo "                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                        <li>";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deco"], "text", [], "any", false, false, false, 257), "html", null, true);
                echo "</li>
                                    </ul>
                                </li>
                                ";
                // line 260
                if (twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", true, true, false, 260)) {
                    // line 261
                    echo "                                    <!-- Dialog Image -->
                                    <div class=\"modal fade dialogbox\" id=\"DialogImageDecorum";
                    // line 262
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <img src=\"";
                    // line 265
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deco"], "file", [], "any", false, false, false, 265), 0, [], "any", false, false, false, 265), "path", [], "any", false, false, false, 265)), "html", null, true);
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
                // line 276
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['deco'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "
                        </ul>
                        ";
        }
        // line 280
        echo "
                        ";
        // line 281
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", true, true, false, 281) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 281, $this->source); })()), "goodies", [], "any", false, false, false, 281))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 281, $this->source); })()), "goodies", [], "any", false, false, false, 281) != ""))) {
            // line 282
            echo "                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 287, $this->source); })()), "goodies", [], "any", false, false, false, 287));
            foreach ($context['_seq'] as $context["key"] => $context["goodie"]) {
                // line 288
                echo "                                        <div class=\"col-4 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageGoodies";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 289
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["goodie"], "file", [], "any", false, false, false, 289), 0, [], "any", false, false, false, 289), "path", [], "any", false, false, false, 289)), "html", null, true);
                echo "\" alt=\"image\" class=\"imaged w-100\">
                                        </div>
                                    
                                        <!-- Dialog Image -->
                                        <div class=\"modal fade dialogbox\" id=\"DialogImageGoodies";
                // line 293
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                            <div class=\"modal-dialog\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <img src=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["goodie"], "file", [], "any", false, false, false, 296), 0, [], "any", false, false, false, 296), "path", [], "any", false, false, false, 296)), "html", null, true);
                echo "\" alt=\"image\" class=\"img-fluid\">
                                                    <div class=\"modal-footer\">
                                                        <div class=\"infosmodalimage m-0 p-1\">
                                                            <b>";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "title", [], "any", false, false, false, 299), "html", null, true);
                echo "</b>
                                                            <i>(";
                // line 300
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "type", [], "any", false, false, false, 300), "html", null, true);
                if (((twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", true, true, false, 300) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 300))) && (twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 300) != ""))) {
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "year", [], "any", false, false, false, 300), "d/m/Y"), "html", null, true);
                    echo "</i>";
                }
                echo ")</i><br>
                                                            ";
                // line 301
                if (((twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", true, true, false, 301) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 301))) && (twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 301) != ""))) {
                    echo "<span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "text", [], "any", false, false, false, 301), "html", null, true);
                    echo "</span>";
                }
                echo "<br>
                                                            <div class=\"text-muted\">Source : ";
                // line 302
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["goodie"], "source", [], "any", false, false, false, 302), "html", null, true);
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
            // line 313
            echo "                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 317
        echo "                        
                <!-- * Dialog Image -->
                <!-- * feed -->
                    </div>

                    ";
        // line 322
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", true, true, false, 322) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 322, $this->source); })()), "sing", [], "any", false, false, false, 322))) && (twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 322, $this->source); })()), "sing", [], "any", false, false, false, 322) != ""))) {
            // line 323
            echo "                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">
                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 325, $this->source); })()), "sing", [], "any", false, false, false, 325), "title", [], "any", false, false, false, 325), "html", null, true);
            echo "</h2>
                
                            <div class=\"post-body\">
                                ";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 328, $this->source); })()), "sing", [], "any", false, false, false, 328), "text", [], "any", false, false, false, 328), "html", null, true);
            echo "
                            </div>
                            ";
            // line 330
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 330), "author", [], "any", true, true, false, 330) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 330), "year", [], "any", true, true, false, 330))) {
                // line 331
                echo "                                <div class=\"post-header\">
                                    <div>
                                        <a href=\"#\">
                                            ";
                // line 334
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 334), "author", [], "any", true, true, false, 334)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 334, $this->source); })()), "sing", [], "any", false, false, false, 334), "author", [], "any", false, false, false, 334), "html", null, true);
                }
                // line 335
                echo "                                        </a>
                                    </div>
                                    ";
                // line 337
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 337), "year", [], "any", true, true, false, 337)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 337, $this->source); })()), "sing", [], "any", false, false, false, 337), "year", [], "any", false, false, false, 337), "d/m/Y"), "html", null, true);
                }
                // line 338
                echo "                                </div>
                            ";
            }
            // line 340
            echo "                        </div>
                    </div>
                    ";
        }
        // line 343
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


                                                    ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["association"]) || array_key_exists("association", $context) ? $context["association"] : (function () { throw new RuntimeError('Variable "association" does not exist.', 386, $this->source); })()), "committee", [], "any", false, false, false, 386));
        foreach ($context['_seq'] as $context["key"] => $context["commit"]) {
            // line 387
            echo "                                                        <tr style=\"height: 80px;\">
                                                            <th class=\"align-middle\">";
            // line 388
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\" style=\"height: 80px;\">
                                                                    ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, $context["commit"]));
            foreach ($context['_seq'] as $context["key"] => $context["postes"]) {
                // line 392
                echo "                                                                        ";
                $context["dimensions"] = twig_length_filter($this->env, $context["postes"]);
                // line 393
                echo "                                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 393, $this->source); })()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 394
                    echo "                                                                            <tr style=\"height: 80px;\">
                                                                                <td class=\"align-middle\">";
                    // line 395
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</td>
                                                                            </tr>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 398
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['postes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 399
            echo "                                                                </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\" style=\"height: 80px;\">
                                                                ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["commit"]);
            foreach ($context['_seq'] as $context["key"] => $context["postes"]) {
                // line 404
                echo "                                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["postes"]);
                foreach ($context['_seq'] as $context["key"] => $context["poste"]) {
                    // line 405
                    echo "                                                                      <tr  style=\"height: 80px;\">
                                                                        <td class=\"align-middle\">";
                    // line 406
                    (((twig_get_attribute($this->env, $this->source, $context["poste"], "firstname", [], "any", true, true, false, 406) &&  !(null === twig_get_attribute($this->env, $this->source, $context["poste"], "firstname", [], "any", false, false, false, 406)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "firstname", [], "any", false, false, false, 406), "html", null, true))) : (print ("")));
                    echo " ";
                    (((twig_get_attribute($this->env, $this->source, $context["poste"], "name", [], "any", true, true, false, 406) &&  !(null === twig_get_attribute($this->env, $this->source, $context["poste"], "name", [], "any", false, false, false, 406)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "name", [], "any", false, false, false, 406), "html", null, true))) : (print ("")));
                    echo " ";
                    if (((twig_get_attribute($this->env, $this->source, $context["poste"], "nickname", [], "any", true, true, false, 406) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["poste"], "nickname", [], "any", false, false, false, 406))) && (twig_get_attribute($this->env, $this->source, $context["poste"], "nickname", [], "any", false, false, false, 406) != ""))) {
                        echo " | ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["poste"], "nickname", [], "any", false, false, false, 406), "html", null, true);
                    }
                    echo "</td>
                                                                      </tr>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['poste'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 409
                echo "                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['postes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 410
            echo "                                                                </table>
                                                            </td>
                                                        </tr>
                                                
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['commit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "

                                                        ";
        // line 528
        echo "                                                    </tbody>
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
        return array (  822 => 528,  818 => 415,  808 => 410,  802 => 409,  786 => 406,  783 => 405,  778 => 404,  774 => 403,  768 => 399,  762 => 398,  753 => 395,  750 => 394,  745 => 393,  742 => 392,  738 => 391,  732 => 388,  729 => 387,  725 => 386,  680 => 343,  675 => 340,  671 => 338,  667 => 337,  663 => 335,  659 => 334,  654 => 331,  652 => 330,  647 => 328,  641 => 325,  637 => 323,  635 => 322,  628 => 317,  622 => 313,  605 => 302,  597 => 301,  588 => 300,  584 => 299,  578 => 296,  572 => 293,  565 => 289,  560 => 288,  556 => 287,  549 => 282,  547 => 281,  544 => 280,  539 => 277,  533 => 276,  519 => 265,  513 => 262,  510 => 261,  508 => 260,  502 => 257,  495 => 252,  488 => 251,  483 => 249,  472 => 245,  468 => 244,  464 => 242,  460 => 241,  454 => 237,  452 => 236,  407 => 193,  401 => 189,  390 => 183,  383 => 182,  377 => 179,  372 => 177,  369 => 176,  365 => 175,  359 => 171,  357 => 170,  354 => 169,  344 => 161,  334 => 134,  328 => 133,  314 => 122,  308 => 119,  305 => 118,  303 => 117,  294 => 111,  290 => 110,  287 => 109,  277 => 108,  268 => 101,  262 => 100,  257 => 98,  250 => 94,  246 => 92,  242 => 91,  235 => 86,  233 => 85,  230 => 84,  225 => 81,  211 => 80,  207 => 78,  205 => 77,  200 => 76,  183 => 75,  178 => 72,  175 => 71,  167 => 66,  161 => 62,  159 => 61,  155 => 59,  113 => 21,  101 => 20,  97 => 19,  86 => 15,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}

    {% include 'inc/allpage.css.twig' %}
    {% include 'corporations/corporation.css.twig' %}

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
                        <h6 class=\"card-subtitle\">{% if association.nickname is defined and association.nickname != '' %}({{association.nickname}}){% endif %} {{association.town}}, {{association.country}}</h6>
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

                        <ul class=\"listview image-listview media\">

                            {% for key, anecdo in association.anecdote %}
                                <li class=\"multi-level\">
                                    <a href=\"#\" class=\"item\">
                                        <div class=\"imageWrapper\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImageAnecdote{{key}}\">
                                        </div>
                                        <div class=\"in\">
                                            <div>
                                                <span>{{anecdo.title}}</span>
                                                <div class=\"text-muted\">
                                                    {% if anecdo.year is defined and anecdo.year is not empty and anecdo.year != '' %}<i>{{anecdo.year|date(\"d/m/Y\")}}</i>{% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                        <li class=\"\">
                                        <div class=\"d-flex\">
                                            {% if anecdo.file is defined and anecdo.file is not empty %}<img src=\"{% if anecdo.file is defined and anecdo.file is not empty %}{{asset(anecdo.file.0.path)}}{% else %}{{asset(\"assets/img/sample/photo/Faluche.png\")}}{% endif %}\" alt=\"image\" class=\"imaged w64\">{% endif %}
                                            <div class=\"my-auto\">
                                                <div class=\"mx-3\">{{anecdo.text}}</div>
                                                <div class=\"mx-3 text-muted\">{{anecdo.source}}</div>
                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                </li>
                                {% if anecdo.file is defined %}
                                    <!-- Dialog Image -->
                                    <div class=\"modal fade dialogbox\" id=\"DialogImageAnecdote{{key}}\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <img src=\"{{asset(anecdo.file.0.path)}}\" alt=\"image\" class=\"img-fluid\">
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






                            {# <div class=\"section full mt-0\">
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
                            </div> #}






                        </div>
                        {% endif %}

                        {% if association.document is defined and association.document is not empty and association.document != '' %}
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Documents</div>
                            <div class=\"section full mt-0\">
                                <ul class=\"listview link-listview\">
                                    {% for key, docu in association.document %}
                                        <li>
                                            <a href=\"{{asset(docu.file.path)}}\" target=\"_blank\">
                                                <div>
                                                    <span class=\"mb-05\">{{docu.title}}</span>
                                                    <div class=\"text-muted\">
                                                        <div>
                                                            {{docu.type}} {% if docu.year is defined and docu.year is not empty and docu.year != '' %} - {{docu.year|date(\"d/m/Y\")}}{% endif %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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


                                                    {% for key, commit in association.committee%}
                                                        <tr style=\"height: 80px;\">
                                                            <th class=\"align-middle\">{{key}}</th>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\" style=\"height: 80px;\">
                                                                    {% for key, postes in commit|sort %}
                                                                        {% set dimensions = postes|length %}
                                                                        {% for i in 0..(dimensions - 1) %}
                                                                            <tr style=\"height: 80px;\">
                                                                                <td class=\"align-middle\">{{ key }}</td>
                                                                            </tr>
                                                                        {% endfor %}
                                                                    {% endfor %}
                                                                </table>
                                                            </td>
                                                            <td class=\"p-0\">
                                                                <table class=\"table\" style=\"height: 80px;\">
                                                                {% for key, postes in commit %}
                                                                    {% for key, poste in postes %}
                                                                      <tr  style=\"height: 80px;\">
                                                                        <td class=\"align-middle\">{{poste.firstname??\"\"}} {{poste.name??\"\"}} {% if poste.nickname is defined and poste.nickname is not empty and poste.nickname != '' %} | {{poste.nickname}}{% endif %}</td>
                                                                      </tr>
                                                                    {% endfor %}
                                                                {% endfor %}
                                                                </table>
                                                            </td>
                                                        </tr>
                                                
                                                    {% endfor %}


                                                        {# <tr>
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
                                                        </tr> #}
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
