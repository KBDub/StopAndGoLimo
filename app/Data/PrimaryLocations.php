<?php

namespace App\Data;

class PrimaryLocations
{
    const HQ = [
        'name'  => 'Top 5 Percent HQ',
        'city'  => 'Joliet',
        'state' => 'IL',
        'lat'   => 41.5250,
        'lng'   => -88.0817,
        'main'  => true,
    ];

    const PRIMARY = [
        ['city' => 'Aurora',           'state' => 'IL', 'lat' => 41.7637,  'lng' => -88.2901],
        ['city' => 'Bloomington',      'state' => 'IL', 'lat' => 40.4842,  'lng' => -88.9937],
        ['city' => 'Bolingbrook',      'state' => 'IL', 'lat' => 41.6986,  'lng' => -88.0684],
        ['city' => 'Bonnie Brae',      'state' => 'IL', 'lat' => 41.5681,  'lng' => -88.0492],
        ['city' => 'Bourbonnais',      'state' => 'IL', 'lat' => 41.1553,  'lng' => -87.8806],
        ['city' => 'Channahon',        'state' => 'IL', 'lat' => 41.4295,  'lng' => -88.2290],
        ['city' => 'Chicago',          'state' => 'IL', 'lat' => 41.8832,  'lng' => -87.6324],
        ['city' => 'Crest Hill',       'state' => 'IL', 'lat' => 41.5606,  'lng' => -88.1067],
        ['city' => 'DeKalb',           'state' => 'IL', 'lat' => 41.9295,  'lng' => -88.7504],
        ['city' => 'Downers Grove',    'state' => 'IL', 'lat' => 41.8089,  'lng' => -88.0112],
        ['city' => 'Elgin',            'state' => 'IL', 'lat' => 42.0350,  'lng' => -88.2826],
        ['city' => 'Elwood',           'state' => 'IL', 'lat' => 41.4111,  'lng' => -88.1131],
        ['city' => 'Evanston',         'state' => 'IL', 'lat' => 42.0451,  'lng' => -87.6877],
        ['city' => 'Fairmont',         'state' => 'IL', 'lat' => 41.5542,  'lng' => -88.0561],
        ['city' => 'Frankfort',        'state' => 'IL', 'lat' => 41.4925,  'lng' => -87.8484],
        ['city' => 'Homer Glen',       'state' => 'IL', 'lat' => 41.6020,  'lng' => -87.9423],
        ['city' => 'Kankakee',         'state' => 'IL', 'lat' => 41.1200,  'lng' => -87.8611],
        ['city' => 'Lockport',         'state' => 'IL', 'lat' => 41.5895,  'lng' => -88.0578],
        ['city' => 'Lockport Heights', 'state' => 'IL', 'lat' => 41.5975,  'lng' => -88.0347],
        ['city' => 'Logan Square',     'state' => 'IL', 'lat' => 41.9231,  'lng' => -87.7013],
    ];

    const SECONDARY = [
        ['city' => 'Mokena',           'state' => 'IL', 'lat' => 41.5311,  'lng' => -87.8767],
        ['city' => 'Morris',           'state' => 'IL', 'lat' => 41.3578,  'lng' => -88.4231],
        ['city' => 'Naperville',       'state' => 'IL', 'lat' => 41.7639,  'lng' => -88.2168],
        ['city' => 'New Lenox',        'state' => 'IL', 'lat' => 41.5111,  'lng' => -87.9656],
        ['city' => 'Oak Brook',        'state' => 'IL', 'lat' => 41.8411,  'lng' => -87.9531],
        ['city' => 'Orland Park',      'state' => 'IL', 'lat' => 41.6303,  'lng' => -87.8539],
        ['city' => 'Oswego',           'state' => 'IL', 'lat' => 41.6834,  'lng' => -88.3517],
        ['city' => 'Ottawa',           'state' => 'IL', 'lat' => 41.3456,  'lng' => -88.8426],
        ['city' => 'Peoria',           'state' => 'IL', 'lat' => 40.6936,  'lng' => -89.5890],
        ['city' => 'Plainfield',       'state' => 'IL', 'lat' => 41.5685,  'lng' => -88.1639],
        ['city' => 'Preston Heights',  'state' => 'IL', 'lat' => 41.4925,  'lng' => -88.0700],
        ['city' => 'Ridgewood',        'state' => 'IL', 'lat' => 41.5289,  'lng' => -88.0417],
        ['city' => 'Rockdale',         'state' => 'IL', 'lat' => 41.5120,  'lng' => -88.1126],
        ['city' => 'Rockford',         'state' => 'IL', 'lat' => 42.2711,  'lng' => -89.0940],
        ['city' => 'Romeoville',       'state' => 'IL', 'lat' => 41.6475,  'lng' => -88.0895],
        ['city' => 'Schaumburg',       'state' => 'IL', 'lat' => 42.0334,  'lng' => -88.0834],
        ['city' => 'Shorewood',        'state' => 'IL', 'lat' => 41.5209,  'lng' => -88.2017],
        ['city' => 'St. Charles',      'state' => 'IL', 'lat' => 41.9139,  'lng' => -88.3126],
        ['city' => 'Tinley Park',      'state' => 'IL', 'lat' => 41.5992,  'lng' => -87.7845],
        ['city' => 'Yorkville',        'state' => 'IL', 'lat' => 41.6563,  'lng' => -88.4507],
    ];

    const ZIPS = [
        '60431','60432','60433','60434','60435','60436',
        '60440','60441','60442','60446','60447','60448',
        '60451','60490','60491','60544','60564','60565',
        '60585','60586','60601','60602','60603','60604',
        '60605','60606','60607','60608','60609','60610',
        '60611','60612','60613','60614','60615','60616',
        '60617','60618','60619','60620','60621','60622',
        '60623','60624','60625','60626','60439',
        '60504','60505','60506','60507','60540','60563',
        '60404','60408','60410','60481','60484','60468',
        '60403','60421','60423','60446','60448','60462',
        '60467','60477','60487','60543','60560',
        '61350','61701','61704','60114','60115','60123',
        '60201','60202','60515','60516','60523',
    ];

    public static function all(): array
    {
        $hq = array_merge(self::HQ, ['name' => self::HQ['city']]);

        $cities = array_merge(self::PRIMARY, self::SECONDARY);
        usort($cities, fn ($a, $b) => strcmp($a['city'], $b['city']));

        return array_merge([$hq], $cities);
    }

    public static function forMap(): array
    {
        $points = [self::HQ];

        $cities = array_merge(self::PRIMARY, self::SECONDARY);
        usort($cities, fn ($a, $b) => strcmp($a['city'], $b['city']));

        foreach ($cities as $loc) {
            $points[] = array_merge($loc, ['name' => $loc['city'], 'main' => false]);
        }

        return $points;
    }

    public static function primaryCityNames(): array
    {
        $names = array_column(self::PRIMARY, 'city');
        sort($names);
        return $names;
    }

    public static function secondaryCityNames(): array
    {
        $names = array_column(self::SECONDARY, 'city');
        sort($names);
        return $names;
    }

    public static function allCityNames(): array
    {
        $names = array_column(array_merge(self::PRIMARY, self::SECONDARY), 'city');
        sort($names);
        return array_merge([self::HQ['city']], $names);
    }

    public static function zips(): array
    {
        return self::ZIPS;
    }
}
