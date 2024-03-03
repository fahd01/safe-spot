<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/dons' => [[['_route' => 'app_dons', '_controller' => 'App\\Controller\\DonsController::index'], null, null, null, false, false, null]],
        '/add_Dons' => [[['_route' => 'add_Dons', '_controller' => 'App\\Controller\\DonsController::Add'], null, null, null, false, false, null]],
        '/afficher_dons' => [[['_route' => 'afficher_dons', '_controller' => 'App\\Controller\\DonsController::AfficheDons'], null, null, null, false, false, null]],
        '/investissement' => [[['_route' => 'app_investissement', '_controller' => 'App\\Controller\\InvestissementController::index'], null, null, null, false, false, null]],
        '/add_investissement' => [[['_route' => 'add_investissement', '_controller' => 'App\\Controller\\InvestissementController::Add'], null, null, null, false, false, null]],
        '/afficher_inv' => [[['_route' => 'afficher_inv', '_controller' => 'App\\Controller\\InvestissementController::AfficheInvestissement'], null, null, null, false, false, null]],
        '/statsabonn' => [[['_route' => 'statsabonn', '_controller' => 'App\\Controller\\InvestissementController::statistiques'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/generate-pdf' => [[['_route' => 'generate_pdf', '_controller' => 'App\\Controller\\InvestissementController::generatePdf'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete_(?'
                    .'|dons/([^/]++)(*:31)'
                    .'|inv/([^/]++)(*:50)'
                .')'
                .'|/update_(?'
                    .'|dons/([^/]++)(*:82)'
                    .'|inv/([^/]++)(*:101)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:141)'
                    .'|wdt/([^/]++)(*:161)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:207)'
                            .'|router(*:221)'
                            .'|exception(?'
                                .'|(*:241)'
                                .'|\\.css(*:254)'
                            .')'
                        .')'
                        .'|(*:264)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'delete_dons', '_controller' => 'App\\Controller\\DonsController::Delete'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'delete_inv', '_controller' => 'App\\Controller\\InvestissementController::Delete'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'update_dons', '_controller' => 'App\\Controller\\DonsController::update'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'update_inv', '_controller' => 'App\\Controller\\InvestissementController::update'], ['id'], null, null, false, true, null]],
        141 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        161 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        221 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        241 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        254 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        264 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
