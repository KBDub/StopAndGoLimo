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
        ['city' => 'Plainfield',  'state' => 'IL', 'lat' => 41.6270, 'lng' => -88.2037],
        ['city' => 'Romeoville',  'state' => 'IL', 'lat' => 41.6475, 'lng' => -88.0895],
        ['city' => 'Bolingbrook', 'state' => 'IL', 'lat' => 41.6986, 'lng' => -88.0684],
        ['city' => 'Lockport',    'state' => 'IL', 'lat' => 41.5895, 'lng' => -88.0573],
        ['city' => 'Shorewood',   'state' => 'IL', 'lat' => 41.5200, 'lng' => -88.2017],
        ['city' => 'New Lenox',   'state' => 'IL', 'lat' => 41.5120, 'lng' => -87.9656],
        ['city' => 'Mokena',      'state' => 'IL', 'lat' => 41.5267, 'lng' => -87.8892],
        ['city' => 'Frankfort',   'state' => 'IL', 'lat' => 41.4958, 'lng' => -87.8487],
        ['city' => 'Homer Glen',  'state' => 'IL', 'lat' => 41.5987, 'lng' => -87.9370],
        ['city' => 'Lemont',      'state' => 'IL', 'lat' => 41.6736, 'lng' => -88.0017],
        ['city' => 'Crest Hill',  'state' => 'IL', 'lat' => 41.5548, 'lng' => -88.0987],
        ['city' => 'Manhattan',   'state' => 'IL', 'lat' => 41.4217, 'lng' => -87.9856],
    ];

    const SECONDARY = [
        ['city' => 'Channahon',         'state' => 'IL', 'lat' => 41.4286, 'lng' => -88.2284],
        ['city' => 'Minooka',           'state' => 'IL', 'lat' => 41.4553, 'lng' => -88.2615],
        ['city' => 'Woodridge',         'state' => 'IL', 'lat' => 41.7470, 'lng' => -88.0506],
        ['city' => 'Naperville',        'state' => 'IL', 'lat' => 41.7508, 'lng' => -88.1535],
        ['city' => 'Aurora',            'state' => 'IL', 'lat' => 41.7606, 'lng' => -88.3201],
        ['city' => 'Oswego',            'state' => 'IL', 'lat' => 41.6831, 'lng' => -88.3515],
        ['city' => 'Yorkville',         'state' => 'IL', 'lat' => 41.6414, 'lng' => -88.4473],
        ['city' => 'Wilmington',        'state' => 'IL', 'lat' => 41.3078, 'lng' => -88.1468],
        ['city' => 'Morris',            'state' => 'IL', 'lat' => 41.3572, 'lng' => -88.4212],
        ['city' => 'Elwood',            'state' => 'IL', 'lat' => 41.4039, 'lng' => -88.1112],
        ['city' => 'Braidwood',         'state' => 'IL', 'lat' => 41.2595, 'lng' => -88.2101],
        ['city' => 'Chicago',           'state' => 'IL', 'lat' => 41.8781, 'lng' => -87.6298],
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
    ];

    public static function all(): array
    {
        $hq = array_merge(self::HQ, ['name' => self::HQ['city']]);

        return array_merge(
            [$hq],
            self::PRIMARY,
            self::SECONDARY
        );
    }

    public static function forMap(): array
    {
        $points = [self::HQ];

        foreach (self::PRIMARY as $loc) {
            $points[] = array_merge($loc, ['name' => $loc['city'], 'main' => false]);
        }

        foreach (self::SECONDARY as $loc) {
            $points[] = array_merge($loc, ['name' => $loc['city'], 'main' => false]);
        }

        return $points;
    }

    public static function primaryCityNames(): array
    {
        return array_column(self::PRIMARY, 'city');
    }

    public static function secondaryCityNames(): array
    {
        return array_column(self::SECONDARY, 'city');
    }

    public static function allCityNames(): array
    {
        return array_merge(
            [self::HQ['city']],
            self::primaryCityNames(),
            self::secondaryCityNames()
        );
    }

    public static function zips(): array
    {
        return self::ZIPS;
    }
}
