<?php

return [

    'business_name'        => 'Stop & Go Airport Shuttle Service Inc.',
    'business_name_short'  => 'Stop & Go Limo',
    'tagline'              => 'Premium Limousine & Airport Shuttle Service',
    'tagline_alt'          => 'Serving the Chicagoland & Southwest Suburbs Since 2015',

    'phone'                => '(708) 315-4445',
    'phone_alt'            => null,
    'phone_raw'            => '+17083154445',
    'email'                => 'vincent@newlenoxlimoservice.com',
    'website'              => 'https://newlenoxlimoservice.com',

    'address' => [
        'street'     => '',
        'street2'    => '',
        'city'       => 'New Lenox',
        'state'      => 'Illinois',
        'state_abbr' => 'IL',
        'zip'        => '60451',
    ],

    'year_incorporated'                 => 2015,
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

    /* ── Google Business Profile Locations ─────────────────── */
    'gbp_locations' => [
        [
            'gbp_name'      => 'Stop & Go Airport Shuttle Service of Naperville',
            'city'          => 'Naperville',
            'street'        => '3420 Lacrosse Ln',
            'city_state_zip'=> 'Naperville, IL 60564',
            'phone'         => '(708) 315-4445',
            'phone_raw'     => '+17083154445',
            'review_url'    => 'https://g.page/r/CWeyyTCAKEUzEBM/review',
            'headquarters'  => false,
        ],
        [
            'gbp_name'      => 'Stop & Go Airport Shuttle Service of Joliet',
            'city'          => 'Joliet',
            'street'        => '70 McDonald Ave',
            'city_state_zip'=> 'Joliet, IL 60431',
            'phone'         => '(708) 315-4445',
            'phone_raw'     => '+17083154445',
            'review_url'    => 'https://g.page/r/CT7X_aFxwzxuEBM/review',
            'headquarters'  => true,
        ],
        [
            'gbp_name'      => 'Stop & Go Airport Shuttle Service of New Lenox',
            'city'          => 'New Lenox',
            'street'        => '400 E Lincoln Hwy Suite 101A',
            'city_state_zip'=> 'New Lenox, IL 60451',
            'phone'         => '(708) 315-4445',
            'phone_raw'     => '+17083154445',
            'review_url'    => 'https://g.page/r/CcsjbjmL3EXpEBM/review',
            'headquarters'  => false,
        ],
        // Chicago location — GBP listing pending
        // [
        //     'gbp_name'      => 'Stop & Go Airport Shuttle Service of Chicago',
        //     'city'          => 'Chicago',
        //     'street'        => '',
        //     'city_state_zip'=> 'Chicago, IL',
        //     'phone'         => '(708) 315-4445',
        //     'phone_raw'     => '+17083154445',
        //     'review_url'    => '',
        //     'headquarters'  => false,
        // ],
    ],

    /* ── Social Media ───────────────────────────────────────── */
    'social' => [
        'facebook'  => 'https://www.facebook.com/p/Stop-Go-Airport-Shuttle-Service-61566415887805/',
        'instagram' => 'https://www.instagram.com/stopngo_airportshuttle/',
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
