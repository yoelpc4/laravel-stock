<?php

return [

    /*
   |--------------------------------------------------------------------------
   | Default Stock Provider
   |--------------------------------------------------------------------------
   |
   | This option controls the default stock provider that will be used on various stock transactions.
   | Supported: "yahoo_finance"
   |
   */

    'default' => env('STOCK_PROVIDER', 'yahoo_finance'),

    /*
    |--------------------------------------------------------------------------
    | Stock Providers
    |--------------------------------------------------------------------------
    |
    | Here you may configure the providers information for each services that is used by your application.
    |
    */

    'providers' => [

        'yahoo_finance' => [
            'provider' => 'yahoo_finance',
            'base_url' => env('YAHOO_FINANCE_BASE_URL', 'https://query1.finance.yahoo.com/'),
            'version'  => env('YAHOO_FINANCE_VERSION', 10)
        ],

    ],

];
