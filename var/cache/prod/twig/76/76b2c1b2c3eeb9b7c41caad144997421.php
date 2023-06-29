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
class __TwigTemplate_42d45bde6c94f7f84ee4cb53f088881d extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "corporations/corporation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", true, true, false, 15) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 15)))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "logo", [], "any", false, false, false, 15)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/Faluche.png"), "html", null, true);
        }
        echo "\" class=\"card-img w-75\" alt=\"image\" >
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                        <h6 class=\"card-subtitle\">";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", true, true, false, 20) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", false, false, false, 20) != ""))) {
            echo "(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "nickname", [], "any", false, false, false, 20), "html", null, true);
            echo ")";
        }
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "town", [], "any", false, false, false, 20), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "country", [], "any", false, false, false, 20), "html", null, true);
        echo "</h6>
                        <h6 class=\"card-subtitle\">";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "creation", [], "any", true, true, false, 21)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "creation", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", false, false, false, 61))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", false, false, false, 61) != ""))) {
            // line 62
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Résumé</div>
                                <div class=\"wide-block pt-2 pb-1\">
                                    <p>
                                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                    </p>
                                </div>
                            </div>
                        ";
        }
        // line 71
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", true, true, false, 71) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", false, false, false, 71))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "resume", [], "any", false, false, false, 71) != ""))) {
            // line 72
            echo "                            <div class=\"section full\">
                                <div class=\"section-title py-2\">Particularités</div>
                                <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "particularity", [], "any", false, false, false, 75));
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", true, true, false, 85) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", false, false, false, 85))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", false, false, false, 85) != ""))) {
            // line 86
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>

                        <ul class=\"listview image-listview media\">

                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "anecdote", [], "any", false, false, false, 91));
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", true, true, false, 170) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", false, false, false, 170))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", false, false, false, 170) != ""))) {
            // line 171
            echo "                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Documents</div>
                            <div class=\"section full mt-0\">
                                <ul class=\"listview link-listview\">
                                    ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "document", [], "any", false, false, false, 175));
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", true, true, false, 236) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", false, false, false, 236))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", false, false, false, 236) != ""))) {
            // line 237
            echo "                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">

                            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "decorum", [], "any", false, false, false, 241));
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", true, true, false, 281) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", false, false, false, 281))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", false, false, false, 281) != ""))) {
            // line 282
            echo "                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "goodies", [], "any", false, false, false, 287));
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
        if (((twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", true, true, false, 322) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 322))) && (twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 322) != ""))) {
            // line 323
            echo "                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">
                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 325), "title", [], "any", false, false, false, 325), "html", null, true);
            echo "</h2>
                
                            <div class=\"post-body\">
                                ";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 328), "text", [], "any", false, false, false, 328), "html", null, true);
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 334), "author", [], "any", false, false, false, 334), "html", null, true);
                }
                // line 335
                echo "                                        </a>
                                    </div>
                                    ";
                // line 337
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, true, false, 337), "year", [], "any", true, true, false, 337)) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "sing", [], "any", false, false, false, 337), "year", [], "any", false, false, false, 337), "d/m/Y"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["association"] ?? null), "committee", [], "any", false, false, false, 386));
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
                $context['_seq'] = twig_ensure_traversable(range(0, (($context["dimensions"] ?? null) - 1)));
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
        return array (  804 => 528,  800 => 415,  790 => 410,  784 => 409,  768 => 406,  765 => 405,  760 => 404,  756 => 403,  750 => 399,  744 => 398,  735 => 395,  732 => 394,  727 => 393,  724 => 392,  720 => 391,  714 => 388,  711 => 387,  707 => 386,  662 => 343,  657 => 340,  653 => 338,  649 => 337,  645 => 335,  641 => 334,  636 => 331,  634 => 330,  629 => 328,  623 => 325,  619 => 323,  617 => 322,  610 => 317,  604 => 313,  587 => 302,  579 => 301,  570 => 300,  566 => 299,  560 => 296,  554 => 293,  547 => 289,  542 => 288,  538 => 287,  531 => 282,  529 => 281,  526 => 280,  521 => 277,  515 => 276,  501 => 265,  495 => 262,  492 => 261,  490 => 260,  484 => 257,  477 => 252,  470 => 251,  465 => 249,  454 => 245,  450 => 244,  446 => 242,  442 => 241,  436 => 237,  434 => 236,  389 => 193,  383 => 189,  372 => 183,  365 => 182,  359 => 179,  354 => 177,  351 => 176,  347 => 175,  341 => 171,  339 => 170,  336 => 169,  326 => 161,  316 => 134,  310 => 133,  296 => 122,  290 => 119,  287 => 118,  285 => 117,  276 => 111,  272 => 110,  269 => 109,  259 => 108,  250 => 101,  244 => 100,  239 => 98,  232 => 94,  228 => 92,  224 => 91,  217 => 86,  215 => 85,  212 => 84,  207 => 81,  193 => 80,  189 => 78,  187 => 77,  182 => 76,  165 => 75,  160 => 72,  157 => 71,  149 => 66,  143 => 62,  141 => 61,  137 => 59,  95 => 21,  83 => 20,  79 => 19,  68 => 15,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "corporations/corporation.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/corporations/corporation.html.twig");
    }
}
