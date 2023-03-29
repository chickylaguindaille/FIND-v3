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

/* find/corporation.html.twig */
class __TwigTemplate_c0bd4119a427d1926613895a5d1c0118 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporation.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "find/corporation.html.twig", 1);
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
    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"card\">
                <div class=\"row p-2 align-items-center\">
                    <div class=\"col-4 \">
                        <img src=\"assets/img/sample/photo/4.jpg\" class=\"card-img\" alt=\"image\">
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">Interfilière</h5>
                        <h6 class=\"card-subtitle\">(IF) Paris, France</h6>
                        <h6 class=\"card-subtitle\">02-01-2010</h6>
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

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"informations\" role=\"tabpanel\">
                        <!-- <div class=\"section full mt-2\"> -->
                            <div class=\"section-title py-2\">Résumé</div>
                            <div class=\"wide-block pt-2 pb-1\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                                </p>
                            </div>
                        <!-- </div> -->
                        <div>
                            <div class=\"section-title py-2\">Particularités</div>
                            <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                                <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                                <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                            </ol>
                        </div>
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>
                            <div class=\"section full mt-0\">                        
                                <div class=\"accordion\" id=\"accordionExample1\">
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion1\">
                                                L'Interfilière, créatrice de croix
                                            </button>
                                        </h2>
                                        <div id=\"accordion1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion2\">
                                                Le livre IF
                                            </button>
                                        </h2>
                                        <div id=\"accordion2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion3\">
                                                Le Totem
                                            </button>
                                        </h2>
                                        <div id=\"accordion3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Codes</div>
                            <div class=\"section full mt-0\">                        
                                <ul class=\"listview link-listview\">
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2017
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2018
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2019
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-primary m-2\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalBasic\">Soumettre une information</button>
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



                    </div>
                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">
                            <li class=\"multi-level\">
                                <a href=\"#\" class=\"item\">
                                    <div class=\"imageWrapper\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w64\">
                                    </div>
                                    <div class=\"in\">
                                        <div>Croix GC</div>
                                    </div>
                                </a>
                                <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                    <li>C'est la croix qui....</li>
                                </ul>
                            </li>
                            <li class=\"multi-level\">
                                <a href=\"#\" class=\"item\">
                                    <div class=\"imageWrapper\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w64\">
                                    </div>
                                    <div class=\"in\">
                                        <div>Croix GM</div>
                                    </div>
                                </a>
                                <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                    <li>Item 1</li>
                                </ul>
                            </li>
                        </ul>

                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    <div class=\"col-4 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImage\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/2.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/3.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/4.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/5.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/6.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/2.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/3.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/4.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/5.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/6.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- Dialog Image -->
                <div class=\"modal fade dialogbox\" id=\"DialogImage\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"img-fluid\">
                            <div class=\"modal-footer\">
                                <div class=\"btn-inline\">
                                    <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">CLOSE</a>
                                    <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Dialog Image -->
                <!-- * feed -->
                    </div>
                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">

                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">La Rouie</h2>
                
                            <div class=\"post-body\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                                </p>
                                <p>
                                    Ut id fermentum nisi. In hac habitasse platea dictumst. Praesent ornare eget neque ut cursus. Nunc
                                    efficitur laoreet vulputate. Curabitur mi ligula, aliquet commodo leo in, consectetur venenatis
                                    tellus. Maecenas quis vehicula erat, vitae finibus tellus.
                                </p>
                                <p>
                                    Cras rhoncus ipsum quis lacus aliquam, quis euismod ligula varius. Phasellus ac odio rhoncus,
                                    aliquet nisl lobortis, commodo orci. Quisque bibendum est ut pellentesque hendrerit.
                                </p>
                            </div>

                            <div class=\"post-header\">
                                <div>
                                    <a href=\"#\">
                                        Auteur
                                    </a>
                                </div>
                                Jun 11, 2020
                            </div>
                        </div>




                    </div>
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
        return "find/corporation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block content %}

    <!-- App Capsule -->
    <div id=\"appCapsule\">

        <div class=\"section mt-2\">
            <div class=\"card\">
                <div class=\"row p-2 align-items-center\">
                    <div class=\"col-4 \">
                        <img src=\"assets/img/sample/photo/4.jpg\" class=\"card-img\" alt=\"image\">
                    </div>
                    <div class=\"col-8\">
                    <!-- <div class=\"card-body\"> -->
                        <h5 class=\"card-title\" style=\"font-size: 6vw !important\">Interfilière</h5>
                        <h6 class=\"card-subtitle\">(IF) Paris, France</h6>
                        <h6 class=\"card-subtitle\">02-01-2010</h6>
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

                <div class=\"tab-content\">
                    <div class=\"tab-pane fade show active\" id=\"informations\" role=\"tabpanel\">
                        <!-- <div class=\"section full mt-2\"> -->
                            <div class=\"section-title py-2\">Résumé</div>
                            <div class=\"wide-block pt-2 pb-1\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                                </p>
                            </div>
                        <!-- </div> -->
                        <div>
                            <div class=\"section-title py-2\">Particularités</div>
                            <ol class=\"list-group list-group-numbered list-group-flush py-1\" style=\"border-top: 1px solid #E1E1E1;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                                <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                                <hr class=\"m-0\" style=\"width: 75% !important; margin-left: 12.5% !important;\">
                                <li class=\"list-group-item border-0\">Cras justo odio</li>
                            </ol>
                        </div>
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Anecdotes</div>
                            <div class=\"section full mt-0\">                        
                                <div class=\"accordion\" id=\"accordionExample1\">
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion1\">
                                                L'Interfilière, créatrice de croix
                                            </button>
                                        </h2>
                                        <div id=\"accordion1\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion2\">
                                                Le livre IF
                                            </button>
                                        </h2>
                                        <div id=\"accordion2\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"accordion-item\">
                                        <h2 class=\"accordion-header\">
                                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                                data-bs-target=\"#accordion3\">
                                                Le Totem
                                            </button>
                                        </h2>
                                        <div id=\"accordion3\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordionExample1\">
                                            <div class=\"accordion-body\">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at augue eleifend,
                                                lacinia ex quis, condimentum erat. Nullam a ipsum lorem.
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                        <div class=\"section full\">
                            <div class=\"section-title py-2\" style=\"border-top: 1px solid #E1E1E1;\">Codes</div>
                            <div class=\"section full mt-0\">                        
                                <ul class=\"listview link-listview\">
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2017
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2018
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            Syllabus de Calotte 2019
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class=\"text-center\">
                            <button type=\"button\" class=\"btn btn-primary m-2\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalBasic\">Soumettre une information</button>
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



                    </div>
                    <div class=\"tab-pane fade\" id=\"decorum\" role=\"tabpanel\">
                        <div class=\"section-title py-2\">Transmission</div>
                        <ul class=\"listview image-listview media\">
                            <li class=\"multi-level\">
                                <a href=\"#\" class=\"item\">
                                    <div class=\"imageWrapper\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w64\">
                                    </div>
                                    <div class=\"in\">
                                        <div>Croix GC</div>
                                    </div>
                                </a>
                                <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                    <li>C'est la croix qui....</li>
                                </ul>
                            </li>
                            <li class=\"multi-level\">
                                <a href=\"#\" class=\"item\">
                                    <div class=\"imageWrapper\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w64\">
                                    </div>
                                    <div class=\"in\">
                                        <div>Croix GM</div>
                                    </div>
                                </a>
                                <ul class=\"listview simple-listview\" style=\"padding-left: 0px !important;\">
                                    <li>Item 1</li>
                                </ul>
                            </li>
                        </ul>

                        <div class=\"section-title py-2\" style=\"border-bottom: 1px solid #E1E1E1;\">Goodies</div>
                        <!-- feed -->
                        <div class=\"tab-pane fade show active\" id=\"feed\" role=\"tabpanel\">
                            <div class=\"mt-2 p-2 pt-0 pb-0\">
                                <div class=\"row\">
                                    <div class=\"col-4 mb-2\" data-bs-toggle=\"modal\" data-bs-target=\"#DialogImage\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/2.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/3.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/4.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/5.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/6.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/2.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/3.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/4.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/5.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                                    <div class=\"col-4 mb-2\">
                                        <img src=\"assets/img/sample/photo/6.jpg\" alt=\"image\" class=\"imaged w-100\">
                                    </div>
                        </div>
                    </div>
                </div>
                <!-- Dialog Image -->
                <div class=\"modal fade dialogbox\" id=\"DialogImage\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <img src=\"assets/img/sample/photo/1.jpg\" alt=\"image\" class=\"img-fluid\">
                            <div class=\"modal-footer\">
                                <div class=\"btn-inline\">
                                    <a href=\"#\" class=\"btn btn-text-secondary\" data-bs-dismiss=\"modal\">CLOSE</a>
                                    <a href=\"#\" class=\"btn btn-text-primary\" data-bs-dismiss=\"modal\">SHARE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Dialog Image -->
                <!-- * feed -->
                    </div>
                    <div class=\"tab-pane fade\" id=\"chant\" role=\"tabpanel\">

                        <div class=\"blog-post text-center\">
                            <h2 class=\"title pt-2\">La Rouie</h2>
                
                            <div class=\"post-body\">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.
                                </p>
                                <p>
                                    Ut id fermentum nisi. In hac habitasse platea dictumst. Praesent ornare eget neque ut cursus. Nunc
                                    efficitur laoreet vulputate. Curabitur mi ligula, aliquet commodo leo in, consectetur venenatis
                                    tellus. Maecenas quis vehicula erat, vitae finibus tellus.
                                </p>
                                <p>
                                    Cras rhoncus ipsum quis lacus aliquam, quis euismod ligula varius. Phasellus ac odio rhoncus,
                                    aliquet nisl lobortis, commodo orci. Quisque bibendum est ut pellentesque hendrerit.
                                </p>
                            </div>

                            <div class=\"post-header\">
                                <div>
                                    <a href=\"#\">
                                        Auteur
                                    </a>
                                </div>
                                Jun 11, 2020
                            </div>
                        </div>




                    </div>
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

{% endblock %}", "find/corporation.html.twig", "/opt/lampp/htdocs/FIND-v3/templates/find/corporation.html.twig");
    }
}
