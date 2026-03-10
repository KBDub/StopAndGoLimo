<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Lunar\FieldTypes\Text;
use Lunar\FieldTypes\TranslatedText;
use Lunar\Models\Brand;
use Lunar\Models\Channel;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Currency;
use Lunar\Models\Language;
use Lunar\Models\Product;
use Lunar\Models\ProductType;
use Lunar\Models\TaxClass;

class Top5PctMerchSeeder extends Seeder
{
    private Currency $usd;
    private TaxClass $taxClass;
    private Brand $brand;
    private ?Collection $collection = null;
    private ProductType $productType;

    public function run(): void
    {
        $this->usd = Currency::where('code', 'USD')->firstOrFail();
        $this->taxClass = TaxClass::getDefault();

        $this->brand = Brand::firstOrCreate(
            ['name' => 'Top 5 Percent'],
            ['attribute_data' => []]
        );

        $collectionGroup = CollectionGroup::where('handle', 'main')->firstOrFail();

        $this->collection = Collection::whereHas('urls', function ($q) {
            $q->where('slug', 'top5pct-merchandise');
        })->first();

        if (! $this->collection) {
            $this->collection = $collectionGroup->collections()->create([
                'attribute_data' => [
                    'name' => new TranslatedText(collect([
                        'en' => new Text('Top 5% Merchandise'),
                    ])),
                    'description' => new TranslatedText(collect([
                        'en' => new Text('Official Top 5 Percent branded apparel and merchandise.'),
                    ])),
                ],
            ]);

            $this->collection->urls()->create([
                'slug' => 'top5pct-merchandise',
                'default' => true,
                'language_id' => Language::getDefault()->id,
            ]);
        }

        $this->productType = ProductType::where('name', 'Custom Shirts')->first()
            ?? ProductType::where('name', 'Stock')->firstOrFail();

        $this->seedProducts();
    }

    private function seedProducts(): void
    {
        $products = [
            [
                'name' => 'Foil Brand V Blue',
                'sku' => 'FOIL-BRAND-V-BLUE',
                'description' => 'Foil Brand V Neck - True Royal with Blue Foil Logo. 4.2 oz, 100% airlume combed and ringspun cotton, 32 singles. Unisex sizing, runs slightly smaller than a standard cotton tee. Retail fit with a style driven cut. Coverstitched collar and sleeves, shoulder-to-shoulder taping, side seams.',
                'material' => '100% Airlume Combed Ringspun Cotton',
                'garment_type' => 'V-Neck T-Shirt',
                'base_price' => 2599,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250],
            ],
            [
                'name' => 'Foil Brand V Maroon',
                'sku' => 'FOIL-BRAND-V-MAROON',
                'description' => 'Foil Brand V Neck - Maroon with Gold Foil Logo. 4.2 oz, 100% airlume combed and ringspun cotton, 32 singles. Unisex sizing, runs slightly smaller than a standard cotton tee. Retail fit with a style driven cut. Coverstitched collar and sleeves, shoulder-to-shoulder taping, side seams.',
                'material' => '100% Airlume Combed Ringspun Cotton',
                'garment_type' => 'V-Neck T-Shirt',
                'base_price' => 2599,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250],
            ],
            [
                'name' => 'Orange Drip',
                'sku' => 'ORANGE-DRIP',
                'description' => 'Orange Drip Shirt. 4.3 oz, 100% combed ringspun cotton. Classic fit with shoulder-to-shoulder taping. 1 inch double-needle sleeve and bottom hem. 7/8 inch seamed collar. Side seams, double-satin razor label. Vinyl Logo.',
                'material' => '100% Combed Ringspun Cotton',
                'garment_type' => 'T-Shirt',
                'base_price' => 2599,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250],
            ],
            [
                'name' => 'Gold Foil and Puff Chicago Hoodie',
                'sku' => 'CHICAGO-HOODIE',
                'description' => 'Comfort and bold design with puff vinyl and gold foil graphic. Soft, cozy, and perfect for everyday wear. Striking Chicago-inspired design with raised textured puff vinyl and gold foil shine. NuBlend Hooded Sweatshirt by Jerzees 996MR.',
                'material' => '80/20 Cotton/Polyester Blend Fleece',
                'garment_type' => 'Hoodie',
                'base_price' => 4999,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL', '3XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 275],
            ],
            [
                'name' => 'Gold Wreath Camo Shirt',
                'sku' => 'GOLD-WREATH-CAMO',
                'description' => 'Gold Wreath Camo - Camouflage Shirt with Gold Foil Logo. 5.5 oz, 100% cotton printed jersey. Urban Woodland colors sewn with 100% cotton thread. Ribbed collar, shoulder-to-shoulder taping. Double-needle stitched sleeves and bottom hem.',
                'material' => '100% Cotton Printed Jersey',
                'garment_type' => 'T-Shirt',
                'base_price' => 3599,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL', '3XL', '4XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250, '4XL' => 450],
            ],
            [
                'name' => 'Money Green',
                'sku' => 'MONEY-GREEN',
                'description' => 'Money Green With Da Bling - Rhinestone and Glitter T-Shirt. 6 oz, 100% preshrunk cotton. Set-in rib collar with shoulder-to-shoulder taping. Seamless double needle 7/8 inch collar. Double-needle sleeve and bottom hem.',
                'material' => '100% Preshrunk Cotton',
                'garment_type' => 'T-Shirt',
                'base_price' => 3999,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL', '3XL', '4XL', '5XL'],
                'surcharges' => ['2XL' => 200, '3XL' => 300, '4XL' => 400, '5XL' => 500],
            ],
            [
                'name' => 'Silver Wreath Camo Shirt',
                'sku' => 'SILVER-WREATH-CAMO',
                'description' => 'Silver Wreath Camo - Camouflage Shirt with Silver Foil Logo. 5.5 oz, 100% cotton printed jersey. Urban Woodland colors sewn with 100% cotton thread. Ribbed collar, shoulder-to-shoulder taping. Double-needle stitched sleeves and bottom hem.',
                'material' => '100% Cotton Printed Jersey',
                'garment_type' => 'T-Shirt',
                'base_price' => 3599,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL', '3XL', '4XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250, '4XL' => 450],
            ],
            [
                'name' => 'Silver Drip',
                'sku' => 'SILVER-DRIP',
                'description' => 'Silver Drip Shirt. 4.2 oz, 100% airlume combed and ringspun cotton, 32 singles. Retail fit, unisex sizing. Coverstitched collar and sleeves, shoulder-to-shoulder taping, side seams. Silver Vinyl Logo.',
                'material' => '100% Airlume Combed Ringspun Cotton',
                'garment_type' => 'T-Shirt',
                'base_price' => 2599,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL', '4XL', '5XL', '6XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 250, '4XL' => 325, '5XL' => 450, '6XL' => 550],
            ],
            [
                'name' => 'Top 5% Flag Hoodie',
                'sku' => 'TOP5-FLAG-HOODIE',
                'description' => 'Top 5% Flag Hoodie. 8.5 oz, 80/20 cotton/polyester blend fleece with 100% cotton face, 20 singles. Standard fit, jersey lined hood. Split-stitched double-needle sewing on all seams. Twill neck tape, 1x1 ribbing at cuffs and waistband. Metal eyelets, front pouch pocket. Vinyl Logo.',
                'material' => '80/20 Cotton/Polyester Blend Fleece',
                'garment_type' => 'Hoodie',
                'base_price' => 2999,
                'sizes' => ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL', '4XL', '5XL'],
                'surcharges' => ['2XL' => 305, '3XL' => 305, '4XL' => 450, '5XL' => 550],
            ],
            [
                'name' => 'T5P Steel Shirt',
                'sku' => 'T5P-STEEL',
                'description' => 'T5P Steel Shirt with Vinyl Logo. 4.5 oz, 100% polyester moisture management jersey, soft spun to feel like cotton. Ribbed collar, shoulder-to-shoulder taping. Double-needle hem sleeves and bottom. Foil Mixed with Vinyl Logo.',
                'material' => '100% Polyester Moisture Management Jersey',
                'garment_type' => 'T-Shirt',
                'base_price' => 3599,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL', '3XL'],
                'surcharges' => ['2XL' => 175, '3XL' => 275],
            ],
            [
                'name' => 'Supermen T',
                'sku' => 'SUPERMEN-T',
                'description' => 'Supermen T Shirt. 4.5 oz, 100% pre-shrunk combed ringspun cotton, 30 singles. Semi-fitted with contrast color binding at neck and sleeves. Double-needle stitched bottom hem, tubular construction. Oeko-Tex Standard 100 Certified. Vinyl Logo.',
                'material' => '100% Pre-shrunk Combed Ringspun Cotton',
                'garment_type' => 'Ringer T-Shirt',
                'base_price' => 2599,
                'sizes' => ['S', 'M', 'L', 'XL', '2XL'],
                'surcharges' => ['2XL' => 200],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function createProduct(array $data): void
    {
        $slug = Str::slug($data['name']);

        $existing = Product::whereHas('urls', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();

        if ($existing) {
            return;
        }

        $attrData = [
            'name' => new TranslatedText(collect([
                'en' => new Text($data['name']),
            ])),
            'description' => new TranslatedText(collect([
                'en' => new Text($data['description']),
            ])),
            'garment_type' => new Text($data['garment_type']),
            'material_type' => new Text($data['material']),
            'fit' => new Text('Unisex'),
            'tags' => new Text('Top 5% Merch'),
        ];

        $product = Product::create([
            'product_type_id' => $this->productType->id,
            'status' => 'published',
            'brand_id' => $this->brand->id,
            'attribute_data' => $attrData,
        ]);

        $product->urls()->create([
            'slug' => $slug,
            'default' => true,
            'language_id' => Language::getDefault()->id,
        ]);

        $channel = Channel::getDefault();
        $product->channels()->syncWithPivotValues([$channel->id], [
            'starts_at' => now(),
            'enabled' => true,
        ]);

        foreach ($data['sizes'] as $size) {
            $sku = $data['sku'] . '-' . $size;
            $price = $data['base_price'] + ($data['surcharges'][$size] ?? 0);

            $variant = $product->variants()->create([
                'sku' => $sku,
                'tax_class_id' => $this->taxClass->id,
                'stock' => rand(10, 50),
                'shippable' => true,
            ]);

            $variant->prices()->create([
                'currency_id' => $this->usd->id,
                'price' => $price,
                'min_quantity' => 1,
            ]);
        }

        $this->collection->products()->syncWithoutDetaching([$product->id]);
    }
}
