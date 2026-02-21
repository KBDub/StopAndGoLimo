<?php

return [

    'default' => env('PAYMENTS_TYPE', 'offline'),

    'types' => [
        'offline' => [
            'driver' => 'offline',
            'authorized' => 'payment-offline',
        ],
        'stripe' => [
            'driver' => 'stripe',
            'released' => 'payment-received',
        ],
    ],

];
