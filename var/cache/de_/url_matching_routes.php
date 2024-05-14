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
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/account/reset' => [[['_route' => 'passwordReset', '_controller' => 'App\\Controller\\AccountController::editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/actualite' => [[['_route' => 'app_actualite_index', '_controller' => 'App\\Controller\\ActualiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actualite/new' => [[['_route' => 'app_actualite_new', '_controller' => 'App\\Controller\\ActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/bids/list' => [[['_route' => 'app_admin_bids_list', '_controller' => 'App\\Controller\\AdminBidsController::index'], null, null, null, false, false, null]],
        '/admin/bids/create' => [[['_route' => 'app_admin_bids_edit', '_controller' => 'App\\Controller\\AdminBidsController::new'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/afficheAll' => [[['_route' => 'afficheall', '_controller' => 'App\\Controller\\AdminController::afficher'], null, null, null, false, false, null]],
        '/admin/pdf/espace/download' => [[['_route' => 'user_pdf', '_controller' => 'App\\Controller\\AdminController::packPdf'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\AdminController::search'], null, ['POST' => 0], null, false, false, null]],
        '/admin/loans/create' => [[['_route' => 'app_admin_loans_create', '_controller' => 'App\\Controller\\AdminLoansController::new'], null, null, null, false, false, null]],
        '/admin/loans/list' => [[['_route' => 'app_admin_loans_list', '_controller' => 'App\\Controller\\AdminLoansController::adminList'], null, null, null, false, false, null]],
        '/bids/automations/create' => [[['_route' => 'app_bids_automations_create', '_controller' => 'App\\Controller\\AutomationController::new'], null, null, null, false, false, null]],
        '/bids/automations/mine' => [[['_route' => 'app_bids_automations_mine', '_controller' => 'App\\Controller\\AutomationController::myBidsAutomation'], null, null, null, false, false, null]],
        '/bids/automations/stats' => [[['_route' => 'app_automations_stats', '_controller' => 'App\\Controller\\AutomationController::stats'], null, null, null, false, false, null]],
        '/banned' => [[['_route' => 'banned', '_controller' => 'App\\Controller\\BannedController::index'], null, null, null, false, false, null]],
        '/bids/mine' => [[['_route' => 'app_my_bids', '_controller' => 'App\\Controller\\BidController::index'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dons' => [[['_route' => 'app_dons', '_controller' => 'App\\Controller\\DonsController::index'], null, null, null, false, false, null]],
        '/add_Dons' => [[['_route' => 'add_Dons', '_controller' => 'App\\Controller\\DonsController::Add'], null, null, null, false, false, null]],
        '/afficher_dons' => [[['_route' => 'afficher_dons', '_controller' => 'App\\Controller\\DonsController::AfficheDons'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/investissement' => [[['_route' => 'app_investissement', '_controller' => 'App\\Controller\\InvestissementController::index'], null, null, null, false, false, null]],
        '/add_investissement' => [[['_route' => 'add_investissement', '_controller' => 'App\\Controller\\InvestissementController::Add'], null, null, null, false, false, null]],
        '/afficher_inv' => [[['_route' => 'afficher_inv', '_controller' => 'App\\Controller\\InvestissementController::AfficheInvestissement'], null, null, null, false, false, null]],
        '/ivpdf' => [[['_route' => 'app_inv_pdf', '_controller' => 'App\\Controller\\InvestissementController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/statsabonn' => [[['_route' => 'statsabonn', '_controller' => 'App\\Controller\\InvestissementController::statistiques'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null],
            [['_route' => 'app_welcome_page', '_controller' => 'App\\Controller\\WelcomePageController::index'], null, null, null, false, false, null],
        ],
        '/bids/report' => [[['_route' => 'app_bids_report', '_controller' => 'App\\Controller\\LendingReportController::report'], null, null, null, false, false, null]],
        '/admin/loans/stats' => [[['_route' => 'app_admin_loans_stats', '_controller' => 'App\\Controller\\LendingStatsController::adminStats'], null, null, null, false, false, null]],
        '/loans/list' => [[['_route' => 'app_loans_list', '_controller' => 'App\\Controller\\LoansController::list'], null, null, null, false, false, null]],
        '/loans/create' => [[['_route' => 'app_loans_create', '_controller' => 'App\\Controller\\LoansController::new'], null, null, null, false, false, null]],
        '/loans/mine' => [[['_route' => 'app_loans_mine', '_controller' => 'App\\Controller\\LoansController::myLoans'], null, null, null, false, false, null]],
        '/rec/response' => [[['_route' => 'app_rec_response_index', '_controller' => 'App\\Controller\\RecResponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/s/searchT' => [[['_route' => 'searchT', '_controller' => 'App\\Controller\\ReclamationController::searchArticles'], null, ['POST' => 0], null, false, false, null]],
        '/reclamation/pdf' => [[['_route' => 'app_reclamation_pdf', '_controller' => 'App\\Controller\\ReclamationController::exportPdf'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/registeremploye' => [[['_route' => 'register_emp', '_controller' => 'App\\Controller\\RegistrationController::registeremp'], null, null, null, false, false, null]],
        '/reset-password/reset' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stra/rep' => [[['_route' => 'app_stra_rep_index', '_controller' => 'App\\Controller\\StraRepController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stra/rep/new' => [[['_route' => 'app_stra_rep_new', '_controller' => 'App\\Controller\\StraRepController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|ctualite/([^/]++)(?'
                        .'|(*:227)'
                        .'|/(?'
                            .'|like(*:243)'
                            .'|edit(*:255)'
                        .')'
                        .'|(*:264)'
                    .')'
                    .'|dmin/(?'
                        .'|bids/([^/]++)/delete(*:301)'
                        .'|activer/([^/]++)(*:325)'
                        .'|desactiver/([^/]++)(*:352)'
                        .'|email/([^/]++)(*:374)'
                        .'|loans/([^/]++)/delete(*:403)'
                    .')'
                .')'
                .'|/bids/(?'
                    .'|automations/([^/]++)/d(?'
                        .'|elete(*:452)'
                        .'|isableToggle(*:472)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|delete(*:499)'
                        .'|approve(*:514)'
                        .'|reject(*:528)'
                    .')'
                .')'
                .'|/loans/([^/]++)/(?'
                    .'|bids/create(*:568)'
                    .'|delete(*:582)'
                .')'
                .'|/commentaire/(?'
                    .'|new/([^/]++)(*:619)'
                    .'|([^/]++)(?'
                        .'|(*:638)'
                        .'|/edit(*:651)'
                        .'|(*:659)'
                    .')'
                .')'
                .'|/d(?'
                    .'|elete_(?'
                        .'|dons/([^/]++)(*:696)'
                        .'|inv/([^/]++)(*:716)'
                    .')'
                    .'|isvalide/([^/]++)(*:742)'
                .')'
                .'|/update_(?'
                    .'|dons/([^/]++)(*:775)'
                    .'|inv/([^/]++)(*:795)'
                .')'
                .'|/valide/([^/]++)(*:820)'
                .'|/re(?'
                    .'|c(?'
                        .'|/response/([^/]++)(?'
                            .'|/(?'
                                .'|rate(*:867)'
                                .'|new(*:878)'
                                .'|edit(*:890)'
                            .')'
                            .'|(*:899)'
                        .')'
                        .'|lamation/(?'
                            .'|qr/([^/]++)(*:931)'
                            .'|([^/]++)(?'
                                .'|(*:950)'
                                .'|/edit(*:963)'
                                .'|(*:971)'
                            .')'
                        .')'
                    .')'
                    .'|set\\-password/([^/]++)(*:1004)'
                .')'
                .'|/stra/rep/([^/]++)(?'
                    .'|(*:1035)'
                    .'|/edit(*:1049)'
                    .'|(*:1058)'
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
        227 => [[['_route' => 'app_actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_actualite_like', '_controller' => 'App\\Controller\\ActualiteController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        255 => [[['_route' => 'app_actualite_edit', '_controller' => 'App\\Controller\\ActualiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_actualite_delete', '_controller' => 'App\\Controller\\ActualiteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        301 => [[['_route' => 'app_admin_bids_delete', '_controller' => 'App\\Controller\\AdminBidsController::delete'], ['id'], null, null, false, false, null]],
        325 => [[['_route' => 'activerUser', '_controller' => 'App\\Controller\\AdminController::activerUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        352 => [[['_route' => 'desactiverUser', '_controller' => 'App\\Controller\\AdminController::desactiverUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        374 => [[['_route' => 'sendMailToUser', '_controller' => 'App\\Controller\\AdminController::sendEmail'], ['email_use'], null, null, false, true, null]],
        403 => [[['_route' => 'app_admin_loans_delete', '_controller' => 'App\\Controller\\AdminLoansController::delete'], ['id'], null, null, false, false, null]],
        452 => [[['_route' => 'app_automations_delete', '_controller' => 'App\\Controller\\AutomationController::delete'], ['id'], null, null, false, false, null]],
        472 => [[['_route' => 'app_automations_disable', '_controller' => 'App\\Controller\\AutomationController::disableToggle'], ['id'], null, null, false, false, null]],
        499 => [[['_route' => 'app_delete_bid', '_controller' => 'App\\Controller\\BidController::delete'], ['id'], null, null, false, false, null]],
        514 => [[['_route' => 'app_approve_bid', '_controller' => 'App\\Controller\\BidController::approve'], ['id'], null, null, false, false, null]],
        528 => [[['_route' => 'app_reject_bid', '_controller' => 'App\\Controller\\BidController::reject'], ['id'], null, null, false, false, null]],
        568 => [[['_route' => 'app_bids_create', '_controller' => 'App\\Controller\\BidController::new'], ['id'], null, null, false, false, null]],
        582 => [[['_route' => 'app_loans_delete', '_controller' => 'App\\Controller\\LoansController::delete'], ['id'], null, null, false, false, null]],
        619 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        638 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        651 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        659 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        696 => [[['_route' => 'delete_dons', '_controller' => 'App\\Controller\\DonsController::Delete'], ['id'], null, null, false, true, null]],
        716 => [[['_route' => 'delete_inv', '_controller' => 'App\\Controller\\InvestissementController::Delete'], ['id'], null, null, false, true, null]],
        742 => [[['_route' => 'disvalide_dons', '_controller' => 'App\\Controller\\DonsController::disvalidate'], ['id'], null, null, false, true, null]],
        775 => [[['_route' => 'update_dons', '_controller' => 'App\\Controller\\DonsController::update'], ['id'], null, null, false, true, null]],
        795 => [[['_route' => 'update_inv', '_controller' => 'App\\Controller\\InvestissementController::update'], ['id'], null, null, false, true, null]],
        820 => [[['_route' => 'valide_dons', '_controller' => 'App\\Controller\\DonsController::validate'], ['id'], null, null, false, true, null]],
        867 => [[['_route' => 'app_rec_response_rate', '_controller' => 'App\\Controller\\RecResponseController::rate'], ['id'], ['POST' => 0], null, false, false, null]],
        878 => [[['_route' => 'app_rec_response_new', '_controller' => 'App\\Controller\\RecResponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        890 => [[['_route' => 'app_rec_response_edit', '_controller' => 'App\\Controller\\RecResponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        899 => [
            [['_route' => 'app_rec_response_show', '_controller' => 'App\\Controller\\RecResponseController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_rec_response_delete', '_controller' => 'App\\Controller\\RecResponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        931 => [[['_route' => 'qr', '_controller' => 'App\\Controller\\ReclamationController::qr'], ['id'], ['GET' => 0], null, false, true, null]],
        950 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        971 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1004 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1035 => [[['_route' => 'app_stra_rep_show', '_controller' => 'App\\Controller\\StraRepController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1049 => [[['_route' => 'app_stra_rep_edit', '_controller' => 'App\\Controller\\StraRepController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1058 => [
            [['_route' => 'app_stra_rep_delete', '_controller' => 'App\\Controller\\StraRepController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
