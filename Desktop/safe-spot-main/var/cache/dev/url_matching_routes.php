<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actualite' => [[['_route' => 'app_actualite_index', '_controller' => 'App\\Controller\\ActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actualite/new' => [[['_route' => 'app_actualite_new', '_controller' => 'App\\Controller\\ActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/exp' => [[['_route' => 'app_exp_index', '_controller' => 'App\\Controller\\ExpController::index'], null, ['GET' => 0], null, true, false, null]],
        '/exp/new' => [[['_route' => 'app_exp_new', '_controller' => 'App\\Controller\\ExpController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rec/response' => [[['_route' => 'app_rec_response_index', '_controller' => 'App\\Controller\\RecResponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/actualite/([^/]++)(?'
                    .'|(*:224)'
                    .'|/edit(*:237)'
                    .'|(*:245)'
                .')'
                .'|/exp/([^/]++)(?'
                    .'|(*:270)'
                    .'|/edit(*:283)'
                    .'|(*:291)'
                .')'
                .'|/rec(?'
                    .'|/response/([^/]++)(?'
                        .'|/(?'
                            .'|new(*:335)'
                            .'|edit(*:347)'
                        .')'
                        .'|(*:356)'
                    .')'
                    .'|lamation/([^/]++)(?'
                        .'|(*:385)'
                        .'|/edit(*:398)'
                        .'|(*:406)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        224 => [[['_route' => 'app_actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_actualite_edit', '_controller' => 'App\\Controller\\ActualiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        245 => [[['_route' => 'app_actualite_delete', '_controller' => 'App\\Controller\\ActualiteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_exp_show', '_controller' => 'App\\Controller\\ExpController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_exp_edit', '_controller' => 'App\\Controller\\ExpController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_exp_delete', '_controller' => 'App\\Controller\\ExpController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_rec_response_new', '_controller' => 'App\\Controller\\RecResponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        347 => [[['_route' => 'app_rec_response_edit', '_controller' => 'App\\Controller\\RecResponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        356 => [
            [['_route' => 'app_rec_response_show', '_controller' => 'App\\Controller\\RecResponseController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_rec_response_delete', '_controller' => 'App\\Controller\\RecResponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        385 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [
            [['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
