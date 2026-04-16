<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tenant Base Domain
    |--------------------------------------------------------------------------
    |
    | All tenant storefronts run as subdomains of this base domain.
    | e.g. school-house-rock.dreamstudiosolutions.com
    |
    | Change TENANT_BASE_DOMAIN in your .env to switch domains without
    | touching any code.
    |
    */

    'tenant_base_domain' => env('TENANT_BASE_DOMAIN', 'dreamstudiosolutions.com'),

];
