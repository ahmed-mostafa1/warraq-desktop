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
    */

    // Run CORS for all paths including API endpoints
    'paths' => ['*'],

    // Allow all HTTP methods (GET, POST, PUT, PATCH, DELETE, OPTIONS)
    'allowed_methods' => ['*'],

    // Allow all origins. For file:// origins, browser sends Origin: null, which is also allowed by '*'
    'allowed_origins' => ['*'],

    // No specific origin patterns
    'allowed_origins_patterns' => [],

    // Allow all headers
    'allowed_headers' => ['*'],

    // No exposed headers
    'exposed_headers' => [],

    // Max age for preflight cache
    'max_age' => 0,

    // Credentials are not needed for these API routes
    'supports_credentials' => false,
];

