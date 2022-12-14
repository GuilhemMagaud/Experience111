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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:111)'
                            .'|escs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:152)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:178)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:216)'
                                .')'
                            .')'
                        .')'
                        .'|co(?'
                            .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:261)'
                            .'|mmentaires(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:308)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:334)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:372)'
                                .')'
                            .')'
                        .')'
                        .'|i(?'
                            .'|mages(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:421)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:447)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:485)'
                                .')'
                            .')'
                            .'|nfo_(?'
                                .'|autrices(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:539)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:565)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:603)'
                                    .')'
                                .')'
                                .'|comps(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:647)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:673)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:711)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|livres(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:758)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:784)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:822)'
                            .')'
                        .')'
                        .'|utilisateurs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:873)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:899)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:937)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:980)'
                    .'|wdt/([^/]++)(*:1000)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1047)'
                            .'|router(*:1062)'
                            .'|exception(?'
                                .'|(*:1083)'
                                .'|\\.css(*:1097)'
                            .')'
                        .')'
                        .'|(*:1108)'
                    .')'
                .')'
                .'|/([^/]++)?(*:1129)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        152 => [[['_route' => '_api_/descs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        178 => [
            [['_route' => '_api_/descs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/descs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        216 => [
            [['_route' => '_api_/descs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/descs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/descs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Desc', '_api_operation_name' => '_api_/descs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        261 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        308 => [[['_route' => '_api_/commentaires/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        334 => [
            [['_route' => '_api_/commentaires{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        372 => [
            [['_route' => '_api_/commentaires/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        421 => [[['_route' => '_api_/images/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        447 => [
            [['_route' => '_api_/images{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/images{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        485 => [
            [['_route' => '_api_/images/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/images/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/images/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_operation_name' => '_api_/images/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        539 => [[['_route' => '_api_/info_autrices/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        565 => [
            [['_route' => '_api_/info_autrices{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/info_autrices{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        603 => [
            [['_route' => '_api_/info_autrices/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/info_autrices/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/info_autrices/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoAutrice', '_api_operation_name' => '_api_/info_autrices/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        647 => [[['_route' => '_api_/info_comps/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        673 => [
            [['_route' => '_api_/info_comps{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/info_comps{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        711 => [
            [['_route' => '_api_/info_comps/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/info_comps/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/info_comps/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\InfoComp', '_api_operation_name' => '_api_/info_comps/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        758 => [[['_route' => '_api_/livres/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        784 => [
            [['_route' => '_api_/livres{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/livres{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        822 => [
            [['_route' => '_api_/livres/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/livres/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/livres/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Livre', '_api_operation_name' => '_api_/livres/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        873 => [[['_route' => '_api_/utilisateurs/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        899 => [
            [['_route' => '_api_/utilisateurs{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        937 => [
            [['_route' => '_api_/utilisateurs/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/utilisateurs/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Utilisateur', '_api_operation_name' => '_api_/utilisateurs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        980 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1000 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1047 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1062 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1083 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1097 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1108 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        1129 => [
            [['_route' => 'home', 'reactRouting' => null, '_controller' => 'App\\Controller\\DefaultController::index'], ['reactRouting'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
