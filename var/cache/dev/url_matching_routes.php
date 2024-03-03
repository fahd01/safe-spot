<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/account/reset' => [[['_route' => 'passwordReset', '_controller' => 'App\\Controller\\AccountController::editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password/reset' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/index.html' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/afficheAll' => [[['_route' => 'afficheall', '_controller' => 'App\\Controller\\AdminController::afficher'], null, ['GET' => 0], null, false, false, null]],
        '/pdf/espace/download' => [[['_route' => 'user_pdf', '_controller' => 'App\\Controller\\AdminController::packPdf'], null, ['GET' => 0], null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset' => [[['_route' => 'password_reset', '_controller' => 'App\\Controller\\AccountController::editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/banned' => [[['_route' => 'banned', '_controller' => 'App\\Controller\\BannedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/pp_landing_page' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, ['GET' => 0], null, false, false, null]],
        '/registeremploye' => [[['_route' => 'register_emp', '_controller' => 'App\\Controller\\RegistrationController::registeremp'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\AdminController::search'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|activer/([^/]++)(*:36)'
                        .'|desactiver/([^/]++)(*:62)'
                        .'|email/([^/]++)(*:83)'
                    .')'
                    .'|ctiver/([^/]++)(*:106)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:146)'
                    .'|wdt/([^/]++)(*:166)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:208)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:245)'
                                .'|router(*:259)'
                                .'|exception(?'
                                    .'|(*:279)'
                                    .'|\\.css(*:292)'
                                .')'
                            .')'
                            .'|(*:302)'
                        .')'
                    .')'
                .')'
                .'|/desactiver/([^/]++)(*:333)'
                .'|/email/([^/]++)(*:356)'
                .'|/reset\\-password/([^/]++)(*:389)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'activerUser', '_controller' => 'App\\Controller\\AdminController::activerUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        62 => [[['_route' => 'desactiverUser', '_controller' => 'App\\Controller\\AdminController::desactiverUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        83 => [[['_route' => 'sendMailToUser', '_controller' => 'App\\Controller\\AdminController::sendEmail'], ['email_use'], null, null, false, true, null]],
        106 => [[['_route' => 'activer_user', '_controller' => 'App\\Controller\\AdminController::activerUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        146 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        166 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        245 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        279 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        302 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        333 => [[['_route' => 'desactiver_user', '_controller' => 'App\\Controller\\AdminController::desactiverUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        356 => [[['_route' => 'send_mail_to_user', '_controller' => 'App\\Controller\\AdminController::sendEmail'], ['email_use'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        389 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
