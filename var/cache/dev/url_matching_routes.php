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
        '/accessdenied' => [[['_route' => 'home.accessdenied', '_controller' => 'App\\Controller\\AccessDeniedController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact.index', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/creations' => [[['_route' => 'creation.index', '_controller' => 'App\\Controller\\CreationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/creations/publique' => [[['_route' => 'creation_.index.public', '_controller' => 'App\\Controller\\CreationController::indexPublic'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'security.login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security.logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security.registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/redirect-after-login' => [[['_route' => 'security.redirect_after_login', '_controller' => 'App\\Controller\\SecurityController::redirectAfterLogin'], null, null, null, false, false, null]],
        '/access-denied' => [[['_route' => 'access_denied', '_controller' => 'App\\Controller\\UserController::accessDenied'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|omment(?'
                        .'|/(?'
                            .'|add/([^/]++)(*:199)'
                            .'|delete/([^/]++)(*:222)'
                        .')'
                        .'|s/([^/]++)(*:241)'
                    .')'
                    .'|reation(?'
                        .'|s/([^/]++)/(?'
                            .'|comments(*:282)'
                            .'|like(*:294)'
                        .')'
                        .'|/([^/]++)(*:312)'
                    .')'
                .')'
                .'|/utilisateur/edition(?'
                    .'|/([^/]++)(*:354)'
                    .'|\\-mot\\-de\\-passe/([^/]++)(*:387)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'comment_add', '_controller' => 'App\\Controller\\CommentController::addComment'], ['creationId'], ['POST' => 0], null, false, true, null]],
        222 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::deleteComment'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'comments_list', '_controller' => 'App\\Controller\\CommentController::listComments'], ['creationId'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'creation.comments', '_controller' => 'App\\Controller\\CreationController::comments'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        294 => [[['_route' => 'creation.like', '_controller' => 'App\\Controller\\CreationController::like'], ['id'], ['GET' => 0], null, false, false, null]],
        312 => [[['_route' => 'creation_show', '_controller' => 'App\\Controller\\CreationDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'user.edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        387 => [
            [['_route' => 'user.edit.password', '_controller' => 'App\\Controller\\UserController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
