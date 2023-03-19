<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/connexions' => [[['_route' => 'connexions', '_controller' => 'App\\Controller\\FindController::connexions'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\FindController::calendar'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\FindController::accueil'], null, null, null, false, false, null]],
        '/revisions' => [[['_route' => 'revisions', '_controller' => 'App\\Controller\\FindController::revisions'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\FindController::profile'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/Localisation/([^/]++)/(?'
                    .'|Ville(?'
                        .'|(*:41)'
                        .'|/change(*:55)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|Corporations(?'
                            .'|(*:90)'
                            .'|/change(*:104)'
                        .')'
                        .'|([^/]++)/([^/]++)(*:130)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:171)'
                    .'|wdt/([^/]++)(*:191)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:237)'
                            .'|router(*:251)'
                            .'|exception(?'
                                .'|(*:271)'
                                .'|\\.css(*:284)'
                            .')'
                        .')'
                        .'|(*:294)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'ville', '_controller' => 'App\\Controller\\FindController::villes'], ['country'], ['GET' => 0], null, false, false, null]],
        55 => [[['_route' => 'change_ville', '_controller' => 'App\\Controller\\FindController::changeVilles'], ['country'], ['GET' => 0], null, false, false, null]],
        90 => [[['_route' => 'corporations', '_controller' => 'App\\Controller\\FindController::corporations'], ['country', 'ville'], ['GET' => 0], null, false, false, null]],
        104 => [[['_route' => 'change_corporations', '_controller' => 'App\\Controller\\FindController::rechercheCorporations'], ['country', 'ville'], ['GET' => 0], null, false, false, null]],
        130 => [[['_route' => 'corporation', '_controller' => 'App\\Controller\\FindController::corporation'], ['country', 'ville', 'corpo', 'id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        237 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        251 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        271 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        284 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        294 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
