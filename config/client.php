<?php

return [

    'business_name'        => 'Stop & Go Airport Shuttle Service Inc.',
    'business_name_short'  => 'Stop & Go Limo',
    'tagline'              => 'Premium Limousine & Airport Shuttle Service',
    'tagline_alt'          => 'Serving the Chicagoland Southwest Suburbs Since 2009',

    'phone'                => '(815) 585-6922',
    'phone_alt'            => null,
    'phone_raw'            => '+18155856922',
    'email'                => 'info@stopandgolimo.com',
    'website'              => 'https://newlenoxlimoservice.com',

    'address' => [
        'street'     => '',
        'street2'    => '',
        'city'       => 'New Lenox',
        'state'      => 'Illinois',
        'state_abbr' => 'IL',
        'zip'        => '60451',
    ],

    'year_incorporated'                 => 2009,
    'license_number'                    => '',
    'license_number_display_on_banner'  => false,

    'certifications'      => [],
    'associations'        => [],
    'chamber_associations' => [],

    /* ── Service Areas ──────────────────────────────────────── */
    'service_areas' => [
        'New Lenox', 'Naperville', 'Joliet', 'Plainfield', 'Mokena',
        'Tinley Park', 'Orland Park', 'Frankfort', 'Lockport', 'Romeoville',
        'Bolingbrook', 'Lemont', 'Homer Glen', 'Crestwood', 'Alsip',
        'Downers Grove', 'Oak Brook', 'Westmont', 'Burr Ridge', 'Palos Heights',
        'Palos Park', 'Palos Hills',
    ],
    'priority_service_areas' => ['New Lenox', 'Naperville', 'Joliet', 'Plainfield', 'Mokena'],
    'service_areas_description' => 'Serving New Lenox, Naperville, Joliet, and 19 additional Chicagoland southwest suburbs',
    'service_area_slugs' => [],

    'airports' => [
        'ORD' => "O'Hare International Airport",
        'MDW' => 'Chicago Midway International Airport',
        'RFD' => 'Chicago Rockford International Airport',
        'MKE' => 'Milwaukee Mitchell International Airport',
    ],

    /* ── Logo ───────────────────────────────────────────────── */
    'logo' => [
        'url'    => '/images/logos/stopngo-logo.png',
        'alt'    => 'Stop & Go Airport Shuttle Service Inc.',
        'width'  => 300,
        'height' => 60,
    ],

    /* ── Hours of Operation ─────────────────────────────────── */
    'operating_hours' => [
        'Monday'    => 'Open 24 Hours',
        'Tuesday'   => 'Open 24 Hours',
        'Wednesday' => 'Open 24 Hours',
        'Thursday'  => 'Open 24 Hours',
        'Friday'    => 'Open 24 Hours',
        'Saturday'  => 'Open 24 Hours',
        'Sunday'    => 'Open 24 Hours',
    ],
    'hours_label' => 'Open 24/7',

    /* ── E-commerce feature flags ───────────────────────────── */
    'product_grid_enabled' => false,

    /* ── Twilight Luxe Brand Palette ────────────────────────── */
    'primary_color'   => '#DCB57E',
    'secondary_color' => '#15162C',

    'color_palette' => [
        'midnight_navy'  => '#15162C',
        'champagne_gold' => '#DCB57E',
        'signal_gold'    => '#FEC42D',
        'cloud_grey'     => '#E8E9EC',
        'slate'          => '#69727D',
        'white'          => '#FFFFFF',
    ],

    /* ── Social Media ───────────────────────────────────────── */
    'social' => [
        'facebook'  => '',
        'instagram' => '',
        'twitter'   => '',
        'google'    => '',
        'yelp'      => '',
    ],

    /* ── Review / Rating Snapshot ───────────────────────────── */
    'reviews' => [
        'google_rating'  => 4.9,
        'google_count'   => 0,
        'featured_quote' => 'On time, professional, and absolutely immaculate vehicle. Our go-to for every airport trip.',
        'featured_name'  => 'Laura M.',
        'featured_city'  => 'Naperville, IL',
    ],

    /* ── Services (for structured data and nav) ─────────────── */
    'services' => [
        'Airport Transfers',
        'Corporate Travel',
        'Wedding Limousine',
        'Prom & Homecoming',
        'Party Bus',
        'Casino Trips',
        'Sports Events',
        'Bachelor & Bachelorette',
    ],

];
