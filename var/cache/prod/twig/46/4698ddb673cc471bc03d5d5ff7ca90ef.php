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

/* inc/profilemodification/informationsmodification.html.twig */
class __TwigTemplate_6b290522a3563f810b002cfee904909b extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "inc/profilemodification/informationsmodification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div id=\"appCapsule\">
    <div class=\"wide-block pb-1 pt-2\">

        <div class=\"section text-center\">
            <h4>Modification de vos informations</h4>
        </div>

        <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification_informations_patch");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

            <div class=\"form-group basic\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"email\">Email</label>
                    <div class=\"d-flex align-items-center pt-1\">";
        // line 17
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", true, true, false, 17) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 17)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "</div>
                </div>
            </div>

            <div class=\"form-group basic\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"firstname\">Prénom</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstname\" name=\"firstname\" placeholder=\"Entre ton prénom\" value=\"";
        // line 24
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", true, true, false, 24) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", false, false, false, 24)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "firstname", [], "any", false, false, false, 24), "html", null, true))) : (print ("")));
        echo "\">
                    <i class=\"clear-input\">
                        <ion-icon name=\"close-circle\"></ion-icon>
                    </i>
                </div>
            </div>

            <div class=\"form-group basic\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"lastname\">Nom</label>
                    <input type=\"text\" class=\"form-control\" id=\"lastname\" name=\"lastname\" placeholder=\"Entre ton Nom\" value=\"";
        // line 34
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", true, true, false, 34) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", false, false, false, 34)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "lastname", [], "any", false, false, false, 34), "html", null, true))) : (print ("")));
        echo "\">
                    <i class=\"clear-input\">
                        <ion-icon name=\"close-circle\"></ion-icon>
                    </i>
                </div>
            </div>

            <div class=\"form-group basic\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"username\">Surnom</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"Entre ton Surnom\" value=\"";
        // line 44
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", true, true, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 44)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "username", [], "any", false, false, false, 44), "html", null, true))) : (print ("")));
        echo "\">
                    <i class=\"clear-input\">
                        <ion-icon name=\"close-circle\"></ion-icon>
                    </i>
                </div>
            </div>

            <div class=\"form-group basic\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"bio\">Bio</label>
                    <textarea id=\"bio\" rows=\"2\" class=\"form-control\" name=\"bio\" placeholder=\"Entre ta bio\">";
        // line 54
        (((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", true, true, false, 54) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 54)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "bio", [], "any", false, false, false, 54), "html", null, true))) : (print ("")));
        echo "</textarea>
                    <i class=\"clear-input\">
                        <ion-icon name=\"close-circle\"></ion-icon>
                    </i>
                </div>
            </div>

            <div class=\"form-group boxed\">
                <div class=\"input-wrapper\">
                    <label class=\"form-label\" for=\"address5\">Baptême</label>

                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["listes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["hats"] ?? null) : null)));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 66
            echo "                        ";
            if (($context["name"] != "Aucun")) {
                // line 67
                echo "                            <div class=\"form-check mb-1\">
                                <input type=\"checkbox\" class=\"form-check-input\" name=\"baptism[";
                // line 68
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "]\" id=\"customCheckb";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"
                                ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "baptism", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["keybaptism"] => $context["status"]) {
                    // line 70
                    echo "                                    ";
                    if ((($context["keybaptism"] == $context["name"]) && ($context["status"] == "on"))) {
                        // line 71
                        echo "                                        checked
                                    ";
                    }
                    // line 73
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keybaptism'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                                >
                                <label class=\"form-check-label\" for=\"customCheckb";
                // line 75
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </div>
            </div>

        <ul class=\"listview image-listview no-line no-space flush\">
            <li>
                <div class=\"item\">
                    <div class=\"icon-box bg-primary\">
                        <ion-icon name=\"call-outline\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div class=\"form-group basic\">
                            <div class=\"input-wrapper\">
                                <label class=\"form-label\" for=\"phone\">Téléphone</label>
                                <input type=\"phone\" name=\"socialmedia[phone]\" class=\"form-control\" id=\"phone\"
                                    placeholder=\"Entre ton numéro de téléphone\" autocomplete=\"off\" value=\"";
        // line 93
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 93), "phone", [], "any", true, true, false, 93) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 93), "phone", [], "any", false, false, false, 93)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 93), "phone", [], "any", false, false, false, 93), "html", null, true))) : (print ("")));
        echo "\">
                                <i class=\"clear-input\">
                                    <ion-icon name=\"close-circle\"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"item\">
                    <div class=\"icon-box bg-primary\">
                        <ion-icon name=\"logo-facebook\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div class=\"form-group basic\">
                            <div class=\"input-wrapper\">
                                <label class=\"form-label\" for=\"facebook\">Facebook</label>
                                <input type=\"text\" name=\"socialmedia[facebook]\" class=\"form-control\" id=\"facebook\"
                                    placeholder=\"Entre le lien de ton Facebook\" value=\"";
        // line 112
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 112), "facebook", [], "any", true, true, false, 112) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 112), "facebook", [], "any", false, false, false, 112)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 112), "facebook", [], "any", false, false, false, 112), "html", null, true))) : (print ("")));
        echo "\">
                                <i class=\"clear-input\">
                                    <ion-icon name=\"close-circle\"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"item\">
                    <div class=\"icon-box bg-primary\">
                        <ion-icon name=\"logo-twitter\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div class=\"form-group basic\">
                            <div class=\"input-wrapper\">
                                <label class=\"form-label\" for=\"password6\">Twitter</label>
                                <input type=\"text\" name=\"socialmedia[twitter]\" class=\"form-control\" id=\"twitter\"
                                    placeholder=\"Entre le lien de ton Twitter\" autocomplete=\"off\" value=\"";
        // line 131
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 131), "twitter", [], "any", true, true, false, 131) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 131), "twitter", [], "any", false, false, false, 131)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 131), "twitter", [], "any", false, false, false, 131), "html", null, true))) : (print ("")));
        echo "\">
                                <i class=\"clear-input\">
                                    <ion-icon name=\"close-circle\"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"item\">
                    <div class=\"icon-box bg-primary\">
                        <ion-icon name=\"logo-linkedin\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div class=\"form-group basic\">
                            <div class=\"input-wrapper\">
                                <label class=\"form-label\" for=\"linkedin\">Linkedin</label>
                                <input type=\"text\" name=\"socialmedia[linkedin]\" class=\"form-control\" id=\"linkedin\"
                                    placeholder=\"Entre le lien de ton Linkedin\" autocomplete=\"off\" value=\"";
        // line 150
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 150), "linkedin", [], "any", true, true, false, 150) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 150), "linkedin", [], "any", false, false, false, 150)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 150), "linkedin", [], "any", false, false, false, 150), "html", null, true))) : (print ("")));
        echo "\">
                                <i class=\"clear-input\">
                                    <ion-icon name=\"close-circle\"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class=\"item\">
                    <div class=\"icon-box bg-primary\">
                        <ion-icon name=\"logo-instagram\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div class=\"form-group basic\">
                            <div class=\"input-wrapper\">
                                <label class=\"form-label\" for=\"instagram\">Instagram</label>
                                <input type=\"text\" name=\"socialmedia[instagram]\" class=\"form-control\" id=\"instagram\"
                                    placeholder=\"Entre le lien de ton Instagram\" autocomplete=\"off\" value=\"";
        // line 169
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 169), "instagram", [], "any", true, true, false, 169) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 169), "instagram", [], "any", false, false, false, 169)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "socialmedia", [], "any", false, true, false, 169), "instagram", [], "any", false, false, false, 169), "html", null, true))) : (print ("")));
        echo "\">
                                <i class=\"clear-input\">
                                    <ion-icon name=\"close-circle\"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class=\"section full mt-2 mb-2 form-group\">
            <div class=\"form-label\">Photo de profil</div>
            <div class=\"wide-block pb-2 pt-2\">

                    <div class=\"custom-file-upload\" id=\"fileUpload1\">
                        <input type=\"file\" id=\"fileuploadInput\" accept=\".png, .jpg, .jpeg\">
                        <label for=\"fileuploadInput\">
                            <span>
                                <strong>
                                    <ion-icon name=\"cloud-upload-outline\"></ion-icon>
                                    <i>Change ta photo de profil</i>
                                </strong>
                            </span>
                        </label>
                    </div>

            </div>
        </div>

        <div class=\"mt-2\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Sauvegarder</button>
        </div>

        </form>

    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "inc/profilemodification/informationsmodification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 169,  263 => 150,  241 => 131,  219 => 112,  197 => 93,  181 => 79,  175 => 78,  167 => 75,  164 => 74,  158 => 73,  154 => 71,  151 => 70,  147 => 69,  141 => 68,  138 => 67,  135 => 66,  131 => 65,  117 => 54,  104 => 44,  91 => 34,  78 => 24,  68 => 17,  60 => 12,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "inc/profilemodification/informationsmodification.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/inc/profilemodification/informationsmodification.html.twig");
    }
}