<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/generate' => [[['_route' => 'app_number_generate', '_controller' => 'App\\Controller\\NumberController::generate'], null, null, null, false, false, null]],
        '/registrate' => [[['_route' => 'app_registration_registrate', '_controller' => 'App\\Controller\\RegistrationController::registrate'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/retrieve/([^/]++)(*:60)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [
            [['_route' => 'app_number_retrieve', '_controller' => 'App\\Controller\\NumberController::retrieve'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
