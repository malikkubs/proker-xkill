<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '395122522379-frt9v2mtckr5cl0rke0vtdv4l014dugs.apps.googleusercontent.com',
        'client_secret' => 'G13sKJYB6lsUtLlWKH7PXwAS',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],
    'facebook' => [
        'client_id' => '748108212598549',
        'client_secret' => '98d984015f47ad88587dfc89151f8ed3',
        'redirect' => 'https://127.0.0.1:8000/auth/facebook/callback',
    ],

];
