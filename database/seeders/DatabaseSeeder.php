<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AttributeSeeder::class,
            CollectionSeeder::class,
            ProductSeeder::class,
            DtfProductSeeder::class,
            TaxSeeder::class,
            Top5PctMerchSeeder::class,
            EventTemplateSeeder::class,
        ]);
    }
}
