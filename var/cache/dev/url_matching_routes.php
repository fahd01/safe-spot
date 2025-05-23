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
        '/admin/bids/list' => [[['_route' => 'app_admin_bids_list', '_controller' => 'App\\Controller\\AdminBidsController::index'], null, null, null, false, false, null]],
        '/admin/loans/create' => [[['_route' => 'app_admin_loans_create', '_controller' => 'App\\Controller\\AdminLoansController::new'], null, null, null, false, false, null]],
        '/admin/loans/list' => [[['_route' => 'app_admin_loans_list', '_controller' => 'App\\Controller\\AdminLoansController::adminList'], null, null, null, false, false, null]],
        '/bids/automations/create' => [[['_route' => 'app_bids_automations_create', '_controller' => 'App\\Controller\\AutomationController::new'], null, null, null, false, false, null]],
        '/bids/automations/mine' => [[['_route' => 'app_bids_automations_mine', '_controller' => 'App\\Controller\\AutomationController::myBidsAutomation'], null, null, null, false, false, null]],
        '/bids/automations/stats' => [[['_route' => 'app_automations_stats', '_controller' => 'App\\Controller\\AutomationController::stats'], null, null, null, false, false, null]],
        '/bids/mine' => [[['_route' => 'app_my_bids', '_controller' => 'App\\Controller\\BidController::index'], null, null, null, false, false, null]],
        '/bids/report' => [[['_route' => 'app_bids_report', '_controller' => 'App\\Controller\\LendingReportController::report'], null, null, null, false, false, null]],
        '/admin/loans/stats' => [[['_route' => 'app_admin_loans_stats', '_controller' => 'App\\Controller\\LendingStatsController::adminStats'], null, null, null, false, false, null]],
        '/loans/list' => [[['_route' => 'app_loans_list', '_controller' => 'App\\Controller\\LoansController::list'], null, null, null, false, false, null]],
        '/loans/create' => [[['_route' => 'app_loans_create', '_controller' => 'App\\Controller\\LoansController::new'], null, null, null, false, false, null]],
        '/loans/mine' => [[['_route' => 'app_loans_mine', '_controller' => 'App\\Controller\\LoansController::myLoans'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|loans/([^/]++)/(?'
                        .'|bids/edit(*:239)'
                        .'|delete(*:253)'
                    .')'
                    .'|bids/([^/]++)/delete(*:282)'
                .')'
                .'|/bids/(?'
                    .'|automations/([^/]++)/d(?'
                        .'|elete(*:330)'
                        .'|isableToggle(*:350)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|delete(*:377)'
                        .'|approve(*:392)'
                        .'|reject(*:406)'
                    .')'
                .')'
                .'|/loans/([^/]++)/(?'
                    .'|bids/create(*:446)'
                    .'|delete(*:460)'
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
        239 => [[['_route' => 'app_admin_bids_edit', '_controller' => 'App\\Controller\\AdminBidsController::new'], ['id'], null, null, false, false, null]],
        253 => [[['_route' => 'app_admin_loans_delete', '_controller' => 'App\\Controller\\AdminLoansController::delete'], ['id'], null, null, false, false, null]],
        282 => [[['_route' => 'app_admin_bids_delete', '_controller' => 'App\\Controller\\AdminBidsController::delete'], ['id'], null, null, false, false, null]],
        330 => [[['_route' => 'app_automations_delete', '_controller' => 'App\\Controller\\AutomationController::delete'], ['id'], null, null, false, false, null]],
        350 => [[['_route' => 'app_automations_disable', '_controller' => 'App\\Controller\\AutomationController::disableToggle'], ['id'], null, null, false, false, null]],
        377 => [[['_route' => 'app_delete_bid', '_controller' => 'App\\Controller\\BidController::delete'], ['id'], null, null, false, false, null]],
        392 => [[['_route' => 'app_approve_bid', '_controller' => 'App\\Controller\\BidController::approve'], ['id'], null, null, false, false, null]],
        406 => [[['_route' => 'app_reject_bid', '_controller' => 'App\\Controller\\BidController::reject'], ['id'], null, null, false, false, null]],
        446 => [[['_route' => 'app_bids_create', '_controller' => 'App\\Controller\\BidController::new'], ['id'], null, null, false, false, null]],
        460 => [
            [['_route' => 'app_loans_delete', '_controller' => 'App\\Controller\\LoansController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
