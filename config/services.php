<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'paytm-wallet' => [
    'env' => 'local', // values : (local | production)
    'merchant_id' => env('YOUR_MERCHANT_ID'),
    'merchant_key' => env('YOUR_MERCHANT_KEY'),
    'merchant_website' => env('YOUR_WEBSITE'),
    'channel' => env('YOUR_CHANNEL'),
    'industry_type' => env('YOUR_INDUSTRY_TYPE'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
      'client_id' => '308364937215824',
      'client_secret' => 'e6a45c09b2ce0fea7ad5cb0219b47308',
      'redirect' => 'https://alsyedstore.com/login/facebook/callback/',
    ],


    'google' => [
      'client_id' => '79516564245-n7n2o2m4vr936ceufe28sk4dnbqtqhvn.apps.googleusercontent.com',
      'client_secret' => 'A6okgmccMxhJG6DSnyN-ojnb',
      'redirect' => 'https://alsyedstore.com/login/google/callback',
    ],

];
