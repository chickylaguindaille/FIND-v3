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

/* find/corporation.html */
class __TwigTemplate_4e2321854c4e38197787eea3e5067408 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporation.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/corporation.html"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
    <meta name=\"theme-color\" content=\"#000000\">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name=\"description\" content=\"Mobilekit HTML Mobile UI Kit\">
    <meta name=\"keywords\" content=\"bootstrap 5, mobile template, cordova, phonegap, mobile, html\" />
    <link rel=\"icon\" type=\"image/png\" href=\"assets/img/favicon.png\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"assets/img/icon/192x192.png\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link rel=\"manifest\" href=\"__manifest.json\">
</head>

<body>

    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader bg-light\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#sidebarPanel\">
                <ion-icon name=\"menu-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\" style=\"opacity: 1 !important;\">
                <img src=\"assets/img/logo.png\" alt=\"logo\" class=\"logo\">
        </div>
        <div class=\"right\">
            <a href=\"#\" class=\"headerButton toggle-searchbox\">
                <ion-icon name=\"search-outline\"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id=\"search\" class=\"appHeader\">
        <form class=\"search-form\">
            <div class=\"form-group searchbox\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                <i class=\"input-icon\">
                    <ion-icon name=\"search-outline\"></ion-icon>
                </i>
                <a href=\"#\" class=\"ms-1 close toggle-searchbox\">
                    <ion-icon name=\"close-circle\"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

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


    <!-- App Bottom Menu -->
    <div class=\"appBottomMenu\">
        <a href=\"connexions.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"earth-outline\"></ion-icon>
                <strong>Connexions</strong>
            </div>
        </a>
        <a href=\"calendar.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"calendar-outline\"></ion-icon>
                <strong>Calendar</strong>
            </div>
        </a>
        <a href=\"index.html\" class=\"item active\">
            <div class=\"col\">
                <ion-icon name=\"search-outline\"></ion-icon>
                <strong>FIND</strong>
            </div>
        </a>
        <a href=\"revisions.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"book-outline\"></ion-icon>
                <strong>Révisions</strong>
            </div>
        </a>
        <a href=\"profile.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"person-circle-outline\"></ion-icon>
                <strong>Mon folklore</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded\">
                </div>
                <div class=\"in\">
                    <strong>ChickenWings</strong>
                    <div class=\"text-muted\">
                        <i class=\"bi bi-mortarboard-fill\"></i>
                         Faluchard, Calottin
                    </div>
                </div>
                <a href=\"#\" class=\"close-sidebar-button\" data-bs-dismiss=\"offcanvas\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class=\"listview flush transparent no-line image-listview mt-2\">
                <div class=\"listview-title mt-1 \">
                    <span>FIND</span>
                </div>
                <li>
                    <a href=\"index.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"bookmark-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Mes favoris</div>
                        </div>
                    </a>
                </li>
                <div class=\"listview-title mt-1 \">
                    <span>Modifier mon profil</span>
                </div>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"information-circle-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Informations</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Parcours</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"medal-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Distinctions</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Photos</div>
                        </div>
                    </a>
                </li>
            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"settings-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"log-out-outline\"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!-- <div id=\"notification-welcome\" class=\"notification-box\">
        <div class=\"notification-dialog android-style\">
            <div class=\"notification-header\">
                <div class=\"in\">
                    <img src=\"assets/img/icon/72x72.png\" alt=\"image\" class=\"imaged w24\">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href=\"#\" class=\"close-button\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <div class=\"notification-content\">
                <div class=\"in\">
                    <h3 class=\"subtitle\">Welcome to Mobilekit</h3>
                    <div class=\"text\">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- * welcome notification -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"assets/js/lib/bootstrap.min.js\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"assets/js/plugins/splide/splide.min.js\"></script>
    <!-- ProgressBar js -->
    <script src=\"assets/js/plugins/progressbar-js/progressbar.min.js\"></script>
    <!-- Base Js File -->
    <script src=\"assets/js/base.js\"></script>

    <script>
        // Trigger welcome notification after 5 seconds
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "find/corporation.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
    <meta name=\"theme-color\" content=\"#000000\">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name=\"description\" content=\"Mobilekit HTML Mobile UI Kit\">
    <meta name=\"keywords\" content=\"bootstrap 5, mobile template, cordova, phonegap, mobile, html\" />
    <link rel=\"icon\" type=\"image/png\" href=\"assets/img/favicon.png\" sizes=\"32x32\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"assets/img/icon/192x192.png\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link rel=\"manifest\" href=\"__manifest.json\">
</head>

<body>

    <!-- loader -->
    <div id=\"loader\">
        <div class=\"spinner-border text-primary\" role=\"status\"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class=\"appHeader bg-light\">
        <div class=\"left\">
            <a href=\"#\" class=\"headerButton\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#sidebarPanel\">
                <ion-icon name=\"menu-outline\"></ion-icon>
            </a>
        </div>
        <div class=\"pageTitle\" style=\"opacity: 1 !important;\">
                <img src=\"assets/img/logo.png\" alt=\"logo\" class=\"logo\">
        </div>
        <div class=\"right\">
            <a href=\"#\" class=\"headerButton toggle-searchbox\">
                <ion-icon name=\"search-outline\"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id=\"search\" class=\"appHeader\">
        <form class=\"search-form\">
            <div class=\"form-group searchbox\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                <i class=\"input-icon\">
                    <ion-icon name=\"search-outline\"></ion-icon>
                </i>
                <a href=\"#\" class=\"ms-1 close toggle-searchbox\">
                    <ion-icon name=\"close-circle\"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

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


    <!-- App Bottom Menu -->
    <div class=\"appBottomMenu\">
        <a href=\"connexions.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"earth-outline\"></ion-icon>
                <strong>Connexions</strong>
            </div>
        </a>
        <a href=\"calendar.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"calendar-outline\"></ion-icon>
                <strong>Calendar</strong>
            </div>
        </a>
        <a href=\"index.html\" class=\"item active\">
            <div class=\"col\">
                <ion-icon name=\"search-outline\"></ion-icon>
                <strong>FIND</strong>
            </div>
        </a>
        <a href=\"revisions.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"book-outline\"></ion-icon>
                <strong>Révisions</strong>
            </div>
        </a>
        <a href=\"profile.html\" class=\"item\">
            <div class=\"col\">
                <ion-icon name=\"person-circle-outline\"></ion-icon>
                <strong>Mon folklore</strong>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"sidebarPanel\">
        <div class=\"offcanvas-body\">
            <!-- profile box -->
            <div class=\"profileBox\">
                <div class=\"image-wrapper\">
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded\">
                </div>
                <div class=\"in\">
                    <strong>ChickenWings</strong>
                    <div class=\"text-muted\">
                        <i class=\"bi bi-mortarboard-fill\"></i>
                         Faluchard, Calottin
                    </div>
                </div>
                <a href=\"#\" class=\"close-sidebar-button\" data-bs-dismiss=\"offcanvas\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <!-- * profile box -->

            <ul class=\"listview flush transparent no-line image-listview mt-2\">
                <div class=\"listview-title mt-1 \">
                    <span>FIND</span>
                </div>
                <li>
                    <a href=\"index.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"footsteps-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            Découvrir
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"star-half-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Insignes</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"bookmark-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Mes favoris</div>
                        </div>
                    </a>
                </li>
                <div class=\"listview-title mt-1 \">
                    <span>Modifier mon profil</span>
                </div>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"information-circle-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Informations</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"git-branch-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Parcours</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"medal-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Distinctions</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href=\"app-pages.html\" class=\"item\">
                        <div class=\"icon-box bg-primary\">
                            <ion-icon name=\"grid-outline\"></ion-icon>
                        </div>
                        <div class=\"in\">
                            <div>Photos</div>
                        </div>
                    </a>
                </li>
            </ul>
        <!-- sidebar buttons -->
        <div class=\"sidebar-buttons\">
            <!-- <a href=\"#\" class=\"button\">
                <ion-icon name=\"person-outline\"></ion-icon>
            </a> -->
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"mail-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"settings-outline\"></ion-icon>
            </a>
            <a href=\"#\" class=\"button\">
                <ion-icon name=\"log-out-outline\"></ion-icon>
            </a>
        </div>
        <!-- * sidebar buttons -->
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!-- <div id=\"notification-welcome\" class=\"notification-box\">
        <div class=\"notification-dialog android-style\">
            <div class=\"notification-header\">
                <div class=\"in\">
                    <img src=\"assets/img/icon/72x72.png\" alt=\"image\" class=\"imaged w24\">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href=\"#\" class=\"close-button\">
                    <ion-icon name=\"close\"></ion-icon>
                </a>
            </div>
            <div class=\"notification-content\">
                <div class=\"in\">
                    <h3 class=\"subtitle\">Welcome to Mobilekit</h3>
                    <div class=\"text\">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- * welcome notification -->

    <!-- ============== Js Files ==============  -->
    <!-- Bootstrap -->
    <script src=\"assets/js/lib/bootstrap.min.js\"></script>
    <!-- Ionicons -->
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js\"></script>
    <!-- Splide -->
    <script src=\"assets/js/plugins/splide/splide.min.js\"></script>
    <!-- ProgressBar js -->
    <script src=\"assets/js/plugins/progressbar-js/progressbar.min.js\"></script>
    <!-- Base Js File -->
    <script src=\"assets/js/base.js\"></script>

    <script>
        // Trigger welcome notification after 5 seconds
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script>

</body>

</html>", "find/corporation.html", "/opt/lampp/htdocs/FIND-v3/templates/find/corporation.html");
    }
}