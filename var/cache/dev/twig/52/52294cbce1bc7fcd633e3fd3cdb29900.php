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

/* find/town.html */
class __TwigTemplate_e4d0a21f6e968bb5f944d12ce2a26eb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/town.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "find/town.html"));

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

        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">

                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">Pays</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Filtrer</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContent\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Début du mot</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                                                </div>
                                            </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <!-- * Content Action Sheet -->

                </form>
            </div>
        </div>



        <div class=\"listview-title sticky-title\">
            <strong>C</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Créteil</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class=\"listview-title sticky-title\">
            <strong>P</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Paris</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


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
        return "find/town.html";
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

        <div class=\"section full mt-2 mb-3\">
            <div class=\"pb-2 d-flex justify-content-center\">

                <div class=\"py-2 px-3 position-absolute start-0\">
                    <a href=\"javascript:;\" class=\" goBack text-secondary\">
                        <ion-icon name=\"chevron-back-outline\"></ion-icon>
                    </a>
                </div>
                <div class=\"d-flex align-items-center\">
                    <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged rounded w36\"> 
                    <h3 class=\"m-0 px-2\">  - </h3>
                    <h3 class=\"m-0\">Pays</h3>
                </div>
            </div>
            <div class=\"px-4\">
                <form class=\"search-form\">
                    <div class=\"form-group searchbox\">
                        <input type=\"text\" class=\"form-control\" value=\"\" placeholder=\"FIND\">
                        <i class=\"input-icon\">
                            <ion-icon name=\"search-outline\"></ion-icon>
                        </i>
                    </div>
                    <button type=\"button\" class=\"btn btn-primary btn-sm  mt-1\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#actionSheetContent\">Filtrer</button>

                        <!-- Content Action Sheet -->
                        <div class=\"offcanvas offcanvas-bottom action-sheet\" tabindex=\"-1\" id=\"actionSheetContent\">
                            <div class=\"offcanvas-header\">
                                <h5 class=\"offcanvas-title\">Filtrer votre recherche</h5>
                            </div>
                            <div class=\"offcanvas-body\">
                                <div class=\"action-sheet-content p-1\">
                                    <div class=\"section full mb-2\">
                                            <div class=\"input-list\">
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList1\" checked>
                                                    <label class=\"form-check-label\" for=\"radioList1\">Début du mot</label>
                                                </div>
                                                <div class=\"form-check\">
                                                    <input class=\"form-check-input\" type=\"radio\" name=\"radioList\" id=\"radioList2\">
                                                    <label class=\"form-check-label\" for=\"radioList2\">Dans le contenu</label>
                                                </div>
                                            </div>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-primary btn-block\" data-bs-dismiss=\"offcanvas\">Sauvegarder</a>
                                </div>
                            </div>
                        </div>
                        <!-- * Content Action Sheet -->

                </form>
            </div>
        </div>



        <div class=\"listview-title sticky-title\">
            <strong>C</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Créteil</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class=\"listview-title sticky-title\">
            <strong>P</strong>
        </div>
        <ul class=\"listview image-listview media\">
            <li>
                <div class=\"item\">
                    <div class=\"imageWrapper\">
                        <img src=\"assets/img/sample/avatar/avatar1.jpg\" alt=\"image\" class=\"imaged w64\">
                    </div>
                    <div class=\"in\">
                        <div>
                            <h4 class=\"mb-05\">Paris</h4>
                            <div class=\"text-muted\">
                                <div>Ile-deFrance, France</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>


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

</html>", "find/town.html", "/opt/lampp/htdocs/FIND-v3/templates/find/town.html");
    }
}
