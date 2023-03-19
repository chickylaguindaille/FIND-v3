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

/* contact/contact.html */
class __TwigTemplate_a4ddf3fbc1b33827007d5fa337095da2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html"));

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

        <div class=\"section full mt-4\">
            <div class=\"\">
                <form>
                        <button type=\"button\" class=\"btn btn-primary w-75\" style=\"margin-left: 12.5%;\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalSubmission\">
                            Soumettre une association
                        </button>
                    </div>
                    <!-- Modal Basic -->
                    <div class=\"modal fade modalbox\" id=\"ModalSubmission\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Soumission d'une association</h5>
                                    <a href=\"#\" data-bs-dismiss=\"modal\">Fermer</a>
                                </div>
                                <div class=\"modal-body\">

                                    <!-- Extra Header -->
                                    <div class=\"extraHeader p-0\">
                                        <div class=\"form-wizard-section\">
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>1</strong>
                                                <p>Check</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>2</strong>
                                                <p>Enter Address</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item active\">
                                                <strong>3</strong>
                                                <p>Payment</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>
                                                    <ion-icon name=\"checkmark-outline\"></ion-icon>
                                                </strong>
                                                <p>Order Done</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- * Extra Header -->
                                    <div class=\"extra-header-active mt-3\">

                                        <div class=\"section mb-2 mt-2 full\">
                                            <div class=\"wide-block pt-2 pb-2\">
                                                <form action=\"app-components.html\">
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"name1\">Name</label>
                                                            <input type=\"text\" class=\"form-control\" id=\"name1\" placeholder=\"Enter your name\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"email1\">E-mail</label>
                                                            <input type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"E-mail address\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"password1\">Password</label>
                                                            <input type=\"password\" class=\"form-control\" id=\"password1\" placeholder=\"Type a password\" autocomplete=\"off\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"mt-2\">
                                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Done</button>
                                                    </div>
                                
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- * Modal Basic -->
                </form>

            <!-- </div> -->
        </div>

        

        </div>


        <div class=\"section full mt-2\">
            <div class=\"section-title\">Me contacter</div>
        </div>
        <ul class=\"listview image-listview\">
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-facebook\">
                        <ion-icon name=\"logo-facebook\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        Facebook
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-instagram\">
                        <ion-icon name=\"logo-instagram\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Instagram</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-twitter\">
                        <ion-icon name=\"logo-twitter\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Twitter</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-linkedin\">
                        <ion-icon name=\"logo-linkedin\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Linkedin</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-youtube\">
                        <ion-icon name=\"logo-youtube\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Youtube</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-whatsapp\">
                        <ion-icon name=\"logo-whatsapp\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Whatsapp</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-pinterest\">
                        <ion-icon name=\"logo-pinterest\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Pinterest</div>
                    </div>
                </a>
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
        <a href=\"index.html\" class=\"item\">
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
        return "contact/contact.html";
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

        <div class=\"section full mt-4\">
            <div class=\"\">
                <form>
                        <button type=\"button\" class=\"btn btn-primary w-75\" style=\"margin-left: 12.5%;\" data-bs-toggle=\"modal\" data-bs-target=\"#ModalSubmission\">
                            Soumettre une association
                        </button>
                    </div>
                    <!-- Modal Basic -->
                    <div class=\"modal fade modalbox\" id=\"ModalSubmission\" data-bs-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Soumission d'une association</h5>
                                    <a href=\"#\" data-bs-dismiss=\"modal\">Fermer</a>
                                </div>
                                <div class=\"modal-body\">

                                    <!-- Extra Header -->
                                    <div class=\"extraHeader p-0\">
                                        <div class=\"form-wizard-section\">
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>1</strong>
                                                <p>Check</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>2</strong>
                                                <p>Enter Address</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item active\">
                                                <strong>3</strong>
                                                <p>Payment</p>
                                            </a>
                                            <a href=\"component-form-wizard.html\" class=\"button-item\">
                                                <strong>
                                                    <ion-icon name=\"checkmark-outline\"></ion-icon>
                                                </strong>
                                                <p>Order Done</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- * Extra Header -->
                                    <div class=\"extra-header-active mt-3\">

                                        <div class=\"section mb-2 mt-2 full\">
                                            <div class=\"wide-block pt-2 pb-2\">
                                                <form action=\"app-components.html\">
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"name1\">Name</label>
                                                            <input type=\"text\" class=\"form-control\" id=\"name1\" placeholder=\"Enter your name\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"email1\">E-mail</label>
                                                            <input type=\"email\" class=\"form-control\" id=\"email1\" placeholder=\"E-mail address\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"form-group boxed\">
                                                        <div class=\"input-wrapper\">
                                                            <label class=\"label\" for=\"password1\">Password</label>
                                                            <input type=\"password\" class=\"form-control\" id=\"password1\" placeholder=\"Type a password\" autocomplete=\"off\">
                                                            <i class=\"clear-input\">
                                                                <ion-icon name=\"close-circle\"></ion-icon>
                                                            </i>
                                                        </div>
                                                    </div>
                                
                                                    <div class=\"mt-2\">
                                                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Done</button>
                                                    </div>
                                
                                                </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- * Modal Basic -->
                </form>

            <!-- </div> -->
        </div>

        

        </div>


        <div class=\"section full mt-2\">
            <div class=\"section-title\">Me contacter</div>
        </div>
        <ul class=\"listview image-listview\">
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-facebook\">
                        <ion-icon name=\"logo-facebook\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        Facebook
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-instagram\">
                        <ion-icon name=\"logo-instagram\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Instagram</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-twitter\">
                        <ion-icon name=\"logo-twitter\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Twitter</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-linkedin\">
                        <ion-icon name=\"logo-linkedin\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Linkedin</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-youtube\">
                        <ion-icon name=\"logo-youtube\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Youtube</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-whatsapp\">
                        <ion-icon name=\"logo-whatsapp\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Whatsapp</div>
                    </div>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"item\">
                    <div class=\"icon-box bg-pinterest\">
                        <ion-icon name=\"logo-pinterest\"></ion-icon>
                    </div>
                    <div class=\"in\">
                        <div>Pinterest</div>
                    </div>
                </a>
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
        <a href=\"index.html\" class=\"item\">
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

</html>", "contact/contact.html", "/opt/lampp/htdocs/FIND-v3/templates/contact/contact.html");
    }
}
