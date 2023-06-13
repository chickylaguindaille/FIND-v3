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

/* profile/profile.html.twig */
class __TwigTemplate_145055509e316fc3eff29b0ab5bf0a6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "profile/profile.html.twig", 1);
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
        echo "    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"profile-head\">
                <div class=\"avatar\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar1.jpg"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"imaged w64 rounded\">
                </div>
                <div class=\"in\">
                    <h3 class=\"name\">ChickenWings</h3>
                    <h5 class=\"subtext\">Faluchard, Calottin</h5>
                </div>

                <button type=\"button\" class=\"mx-4 btn btn-outline-secondary btn-sm\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetShareBox\">Contacter</button>


                <!-- Share Box Action Sheet -->
                <div class=\"offcanvas offcanvas-bottom action-sheet inset\" tabindex=\"-1\" id=\"actionSheetShareBox\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\">Contacter</h5>
                    </div>
                    <div class=\"offcanvas-body\">
                        <div class=\"action-sheet-content text-center\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-facebook\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-facebook\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-twitter\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-twitter\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-linkedin\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-linkedin\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-instagram\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-instagram\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-whatsapp\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-whatsapp\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-twitch\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-twitch\"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Share Box Action Sheet -->




            </div>
        </div>

        <div class=\"section mt-1 mb-2\">
            <div class=\"profile-info\">
                <div class=\" bio\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa.
                </div>
                <!-- <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Paris</span>
                </div>
                <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Namur</span>
                </div> -->
            </div>
        </div>

        <div class=\"section full\">
            <div class=\"wide-block transparent p-0\">
                <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#career\" role=\"tab\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#feed\" role=\"tab\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#friends\" role=\"tab\">
                            <ion-icon name=\"people-outline\"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class=\"section full mb-2\">
            <div class=\"tab-content\">

                <!-- feed -->
                <div class=\"tab-pane fade\" id=\"feed\" role=\"tabpanel\">
                    <div class=\"mt-2 p-2 pt-0 pb-0\">
                        <div class=\"row\">
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/photo/1.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                        </div>
                    </div>
                    <div class=\"p-2 pt-0 pb-0\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">More Photo</a>
                    </div>
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\">
                    <ul class=\"listview image-listview flush transparent pt-1\">
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Edward Lindgren
                                        <div class=\"text-muted\">532 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                <!-- * friends -->

                <!--  career -->
                <div class=\"tab-pane fade show active\" id=\"career\" role=\"tabpanel\">

                        <div class=\"px-4 pt-2 pb-2\">
    
                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#parcours\" role=\"tab\">
                                        Parcours
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#distinctions\" role=\"tab\">
                                        Distinctions
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#associations\" role=\"tab\">
                                        Associations
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"parcours\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Calottin</h4>
                                                <div class=\"text\">Régionale Tournai-Mouscron, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2018</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Béjaune</h4>
                                                <div class=\"text\">Ordre Rabelaisien de Belgique, Belgique</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2019</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Stagiaire</h4>
                                                <div class=\"text\">Musée Belge des Traditions Estudiantines</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2020</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Impétrant</h4>
                                                <div class=\"text\">Interfilière Paris</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2022</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Faluchard</h4>
                                                <div class=\"text\">Interfilière, Paris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"distinctions\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Lindgren
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                                <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                                <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                                <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                                <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                                                <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sample/avatar/avatar3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"image\">
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
                            </div>
    
                        </div>


                </div>
                <!-- * career -->
            </div>
        </div>
        <!-- * tab content -->

    </div>
    <!-- * App Capsule -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 423,  553 => 412,  539 => 401,  525 => 390,  511 => 379,  497 => 368,  483 => 357,  360 => 237,  346 => 226,  332 => 215,  318 => 204,  304 => 193,  290 => 182,  276 => 171,  258 => 156,  252 => 153,  246 => 150,  240 => 147,  234 => 144,  228 => 141,  222 => 138,  216 => 135,  210 => 132,  204 => 129,  198 => 126,  192 => 123,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"profile-head\">
                <div class=\"avatar\">
                    <img src=\"{{ asset(\"assets/img/sample/avatar/avatar1.jpg\") }}\" alt=\"avatar\" class=\"imaged w64 rounded\">
                </div>
                <div class=\"in\">
                    <h3 class=\"name\">ChickenWings</h3>
                    <h5 class=\"subtext\">Faluchard, Calottin</h5>
                </div>

                <button type=\"button\" class=\"mx-4 btn btn-outline-secondary btn-sm\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetShareBox\">Contacter</button>


                <!-- Share Box Action Sheet -->
                <div class=\"offcanvas offcanvas-bottom action-sheet inset\" tabindex=\"-1\" id=\"actionSheetShareBox\">
                    <div class=\"offcanvas-header\">
                        <h5 class=\"offcanvas-title\">Contacter</h5>
                    </div>
                    <div class=\"offcanvas-body\">
                        <div class=\"action-sheet-content text-center\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-facebook\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-facebook\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-twitter\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-twitter\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-linkedin\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-linkedin\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-instagram\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-instagram\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-whatsapp\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-whatsapp\"></ion-icon>
                                    </a>
                                </div>
                                <div class=\"col-2\">
                                    <a href=\"#\" class=\"btn btn-icon btn-twitch\" data-bs-dismiss=\"offcanvas\">
                                        <ion-icon name=\"logo-twitch\"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Share Box Action Sheet -->




            </div>
        </div>

        <div class=\"section mt-1 mb-2\">
            <div class=\"profile-info\">
                <div class=\" bio\">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa.
                </div>
                <!-- <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Paris</span>
                </div>
                <div class=\"chip chip-media mt-1 mx-1\">
                    <i class=\"chip-icon bg-danger\">
                        <ion-icon name=\"pin\"></ion-icon>
                    </i>
                    <span class=\"chip-label\">Namur</span>
                </div> -->
            </div>
        </div>

        <div class=\"section full\">
            <div class=\"wide-block transparent p-0\">
                <ul class=\"nav nav-tabs lined iconed\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#career\" role=\"tab\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#feed\" role=\"tab\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#friends\" role=\"tab\">
                            <ion-icon name=\"people-outline\"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- tab content -->
        <div class=\"section full mb-2\">
            <div class=\"tab-content\">

                <!-- feed -->
                <div class=\"tab-pane fade\" id=\"feed\" role=\"tabpanel\">
                    <div class=\"mt-2 p-2 pt-0 pb-0\">
                        <div class=\"row\">
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                            <div class=\"col-4 mb-2\">
                                <img src=\"{{ asset(\"assets/img/sample/photo/1.jpg\") }}\" alt=\"image\" class=\"imaged w-100\">
                            </div>
                        </div>
                    </div>
                    <div class=\"p-2 pt-0 pb-0\">
                        <a href=\"#\" class=\"btn btn-primary btn-block\">More Photo</a>
                    </div>
                </div>
                <!-- * feed -->

                <!-- * friends -->
                <div class=\"tab-pane fade\" id=\"friends\" role=\"tabpanel\">
                    <ul class=\"listview image-listview flush transparent pt-1\">
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                <div class=\"in\">
                                    <div>
                                        Edward Lindgren
                                        <div class=\"text-muted\">532 followers</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"item\">
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                <!-- * friends -->

                <!--  career -->
                <div class=\"tab-pane fade show active\" id=\"career\" role=\"tabpanel\">

                        <div class=\"px-4 pt-2 pb-2\">
    
                            <ul class=\"nav nav-tabs capsuled\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#parcours\" role=\"tab\">
                                        Parcours
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#distinctions\" role=\"tab\">
                                        Distinctions
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#associations\" role=\"tab\">
                                        Associations
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"parcours\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Calottin</h4>
                                                <div class=\"text\">Régionale Tournai-Mouscron, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2018</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Béjaune</h4>
                                                <div class=\"text\">Ordre Rabelaisien de Belgique, Belgique</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2019</span>
                                            <div class=\"dot bg-danger\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Stagiaire</h4>
                                                <div class=\"text\">Musée Belge des Traditions Estudiantines</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2020</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Impétrant</h4>
                                                <div class=\"text\">Interfilière Paris</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2022</span>
                                            <div class=\"dot bg-primary\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Baptisé Faluchard</h4>
                                                <div class=\"text\">Interfilière, Paris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"distinctions\" role=\"tabpanel\">
                                    <div class=\"timeline timed mt-2\">
                                        <div class=\"item\">
                                            <span class=\"time\">2016</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Membre Pharma</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                        <div class=\"item\">
                                            <span class=\"time\">2017</span>
                                            <div class=\"dot bg-success\"></div>
                                            <div class=\"content\">
                                                <h4 class=\"title\">Del. Bouffe</h4>
                                                <div class=\"text\">Cercle Pharma, Namur</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\">
                                    <ul class=\"listview image-listview flush transparent pt-1\">
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
                                                <div class=\"in\">
                                                    <div>
                                                        Edward Lindgren
                                                        <div class=\"text-muted\">532 followers</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\" class=\"item\">
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                                                <img src=\"{{ asset(\"assets/img/sample/avatar/avatar3.jpg\") }}\" alt=\"image\" class=\"image\">
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
                            </div>
    
                        </div>


                </div>
                <!-- * career -->
            </div>
        </div>
        <!-- * tab content -->

    </div>
    <!-- * App Capsule -->
{% endblock %}", "profile/profile.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/profile/profile.html.twig");
    }
}
