<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Localisation/corporation' => [[['_route' => 'corporation_html', '_controller' => 'App\\Controller\\FindController::corporationHtml'], null, ['GET' => 0], null, false, false, null]],
        '/app/connexions' => [[['_route' => 'connexions', '_controller' => 'App\\Controller\\HomeController::connexions'], null, null, null, false, false, null]],
        '/app/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\HomeController::calendar'], null, null, null, false, false, null]],
        '/app/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::accueil'], null, null, null, false, false, null]],
        '/app/revisions' => [[['_route' => 'revisions', '_controller' => 'App\\Controller\\HomeController::revisions'], null, null, null, false, false, null]],
        '/app/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, null, null, false, false, null]],
        '/app/modification/informations' => [[['_route' => 'modification_informations', '_controller' => 'App\\Controller\\ProfileController::modificationInformations'], null, null, null, false, false, null]],
        '/app/modification/informations/patch' => [[['_route' => 'modification_informations_patch', '_controller' => 'App\\Controller\\ProfileController::patchModificationInformations'], null, null, null, false, false, null]],
        '/app/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/app/subscribe' => [[['_route' => 'subscribe', '_controller' => 'App\\Controller\\SecurityController::subscribe'], null, null, null, false, false, null]],
        '/app/subscribe/validation' => [[['_route' => 'subscribe_validation', '_controller' => 'App\\Controller\\SecurityController::subscribeValidation'], null, null, null, false, false, null]],
        '/app/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/app/auth/subscribe' => [[['_route' => 'auth_ajax_subscribe', '_controller' => 'App\\Controller\\SecurityController::ajaxSubscribe'], null, null, null, false, false, null]],
        '/app/forgot/password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/app/forgot/password/request' => [[['_route' => 'send_reset_request_password', '_controller' => 'App\\Controller\\SecurityController::sendRequestResetPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/app/Localisation/([^/]++)/(?'
                    .'|Villes(?'
                        .'|(*:46)'
                        .'|/change(*:60)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|Corporations(?'
                            .'|(*:95)'
                            .'|/change(*:109)'
                        .')'
                        .'|([^/]++)(*:126)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'ville', '_controller' => 'App\\Controller\\FindController::villes'], ['country'], ['GET' => 0], null, false, false, null]],
        60 => [[['_route' => 'change_ville', '_controller' => 'App\\Controller\\FindController::changeVilles'], ['country'], ['GET' => 0], null, false, false, null]],
        95 => [[['_route' => 'corporations', '_controller' => 'App\\Controller\\FindController::corporations'], ['country', 'ville'], ['GET' => 0], null, false, false, null]],
        109 => [[['_route' => 'change_corporations', '_controller' => 'App\\Controller\\FindController::rechercheCorporations'], ['country', 'ville'], ['GET' => 0], null, false, false, null]],
        126 => [
            [['_route' => 'corporation', '_controller' => 'App\\Controller\\FindController::corporation'], ['country', 'ville', 'corpo'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];