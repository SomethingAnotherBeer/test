<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_number_generate' => [[], ['_controller' => 'App\\Controller\\NumberController::generate'], [], [['text', '/generate']], [], [], []],
    'app_number_retrieve' => [['id'], ['_controller' => 'App\\Controller\\NumberController::retrieve'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/retrieve']], [], [], []],
    'app_registration_registrate' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registrate'], [], [['text', '/registrate']], [], [], []],
];
