<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/cobrancas' => [
            [['_route' => 'cobrancas_index', '_controller' => 'App\\Controller\\ApiController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'cobranca_create', '_controller' => 'App\\Controller\\ApiController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/cobrancas/([^/]++)/([^/]++)/([^/]++)(?'
                    .'|(*:51)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:90)'
                    .'|wdt/([^/]++)(*:109)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:155)'
                            .'|router(*:169)'
                            .'|exception(?'
                                .'|(*:189)'
                                .'|\\.css(*:202)'
                            .')'
                        .')'
                        .'|(*:212)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        51 => [
            [['_route' => 'cobranca_cobrancas', '_controller' => 'App\\Controller\\ApiController::cobrancas'], ['credencial', 'chave', 'identificador'], ['GET' => 0], null, false, true, null],
            [['_route' => 'cobranca_delete', '_controller' => 'App\\Controller\\ApiController::delete'], ['credencial', 'chave', 'identificador'], ['DELETE' => 0], null, false, true, null],
        ],
        90 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        109 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        155 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        169 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        189 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        202 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        212 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
