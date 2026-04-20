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

    /*
    |--------------------------------------------------------------------------
    | Default Contact Email
    |--------------------------------------------------------------------------
    |
    | Fallback email shown on legal pages (Terms, Privacy, Refund Policy)
    | when a store has not set its own Contact Email Address.
    | Override via DEFAULT_CONTACT_EMAIL in your .env file.
    |
    */
    'default_contact_email' => env('DEFAULT_CONTACT_EMAIL', 'info@dreamstudiosolutions.com'),

];
