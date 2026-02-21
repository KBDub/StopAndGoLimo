<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\TaxRate;
use Lunar\Models\TaxRateAmount;
use Lunar\Models\TaxZone;
use Lunar\Models\TaxClass;

class TaxSeeder extends Seeder
{
    public function run(): void
    {
        $taxZone = TaxZone::where('default', true)->first();

        if (! $taxZone) {
            return;
        }

        $taxRate = TaxRate::firstOrCreate(
            [
                'tax_zone_id' => $taxZone->id,
                'name' => 'Illinois Sales Tax',
            ],
            [
                'priority' => 1,
            ]
        );

        $taxClass = TaxClass::getDefault();

        if ($taxClass) {
            TaxRateAmount::firstOrCreate(
                [
                    'tax_rate_id' => $taxRate->id,
                    'tax_class_id' => $taxClass->id,
                ],
                [
                    'percentage' => 6.25,
                ]
            );
        }
    }
}
