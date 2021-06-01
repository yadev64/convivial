<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],

    'allowed_methods' => ['POST', 'GET', 'DELETE', 'PUT','*'],

    'allowed_origins' => ['http://localhost:8080', 'http://localhost:8081', '*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['X-Custom-Header', 'Upgrade-Insecure-Requests', '*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];
