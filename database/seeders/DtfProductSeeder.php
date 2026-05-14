<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Lunar\Models\Channel;
use Lunar\Models\Collection;
use Lunar\Models\Currency;
use Lunar\Models\Language;
use Lunar\Models\Product;
use Lunar\Models\ProductType;
use Lunar\Models\TaxClass;

/**
 * DtfProductSeeder
 *
 * Creates one Lunar Product per DTF transfer size/type combination.
 * Each product has a single variant whose SKU encodes type + size (e.g. DTF-NECK-2X2).
 * Tiered pricing is stored as multiple Price records on the variant using Lunar's native
 * min_quantity price-break system — Lunar automatically selects the correct price at checkout.
 *
 * Quantity tiers: 1–14 | 15–49 | 50–99 | 100–249 | 250+
 *
 * Run standalone:  php artisan db:seed --class=DtfProductSeeder
 * Run via full:    php artisan db:seed
 */
class DtfProductSeeder extends Seeder
{
    private Currency $usd;
    private TaxClass $taxClass;
    private Channel $channel;
    private Language $language;

    public function run(): void
    {
        $this->usd      = Currency::where('code', 'USD')->firstOrFail();
        $this->taxClass = TaxClass::getDefault();
        $this->channel  = Channel::getDefault();
        $this->language = Language::getDefault();

        $type = ProductType::firstOrCreate(
            ['name' => 'DTF Transfer'],
            ['name' => 'DTF Transfer']
        );

        $this->seedNeckTags($type);
        $this->seedChestImages($type);
        $this->seedImageSizes($type);
    }

    // ── Neck Tags ────────────────────────────────────────────────────────────

    private function seedNeckTags(ProductType $type): void
    {
        $variants = [
            [
                'sku'         => 'DTF-NECK-2X2',
                'name'        => 'DTF Transfer — Neck Tag 2″ × 2″',
                'description' => 'Custom DTF neck tag transfer, 2 inch by 2 inch. Fits within size. No minimum order.',
                'tiers'       => [[1, 199], [15, 129], [50, 109], [100, 90], [250, 70]],
            ],
            [
                'sku'         => 'DTF-NECK-3X3',
                'name'        => 'DTF Transfer — Neck Tag 3″ × 3″',
                'description' => 'Custom DTF neck tag transfer, 3 inch by 3 inch. Fits within size. No minimum order.',
                'tiers'       => [[1, 249], [15, 162], [50, 137], [100, 112], [250, 87]],
            ],
        ];

        foreach ($variants as $data) {
            $this->createDtfProduct($type, $data, 'dtf-transfers');
        }
    }

    // ── Left / Right Chest ───────────────────────────────────────────────────

    private function seedChestImages(ProductType $type): void
    {
        $variants = [
            [
                'sku'         => 'DTF-CHEST-3X2',
                'name'        => 'DTF Transfer — Left/Right Chest 3″ × 2″',
                'description' => 'Custom DTF chest transfer, 3 inch by 2 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 149], [15, 122], [50, 102], [100, 84], [250, 64]],
            ],
            [
                'sku'         => 'DTF-CHEST-3X3',
                'name'        => 'DTF Transfer — Left/Right Chest 3″ × 3″',
                'description' => 'Custom DTF chest transfer, 3 inch by 3 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 249], [15, 162], [50, 137], [100, 112], [250, 87]],
            ],
            [
                'sku'         => 'DTF-CHEST-4X2',
                'name'        => 'DTF Transfer — Left/Right Chest 4″ × 2″',
                'description' => 'Custom DTF chest transfer, 4 inch by 2 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 199], [15, 129], [50, 109], [100, 90], [250, 70]],
            ],
            [
                'sku'         => 'DTF-CHEST-4X3',
                'name'        => 'DTF Transfer — Left/Right Chest 4″ × 3″',
                'description' => 'Custom DTF chest transfer, 4 inch by 3 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 249], [15, 185], [50, 149], [100, 124], [250, 99]],
            ],
            [
                'sku'         => 'DTF-CHEST-4X4',
                'name'        => 'DTF Transfer — Left/Right Chest 4″ × 4″',
                'description' => 'Custom DTF chest transfer, 4 inch by 4 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 299], [15, 194], [50, 164], [100, 135], [250, 105]],
            ],
            [
                'sku'         => 'DTF-CHEST-5X3',
                'name'        => 'DTF Transfer — Left/Right Chest 5″ × 3″',
                'description' => 'Custom DTF chest transfer, 5 inch by 3 inch. Ideal for left or right chest placement. No minimum.',
                'tiers'       => [[1, 349], [15, 299], [50, 249], [100, 199], [250, 149]],
            ],
        ];

        foreach ($variants as $data) {
            $this->createDtfProduct($type, $data, 'dtf-transfers');
        }
    }

    // ── Image Sizes (5″ and above) ───────────────────────────────────────────

    private function seedImageSizes(ProductType $type): void
    {
        $variants = [
            [
                'sku'         => 'DTF-IMG-5X5',
                'name'        => 'DTF Transfer — Image Size 5″ × 5″',
                'description' => 'Full-color DTF transfer, 5 by 5 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 399], [15, 259], [50, 219], [100, 180], [250, 140]],
            ],
            [
                'sku'         => 'DTF-IMG-6X6',
                'name'        => 'DTF Transfer — Image Size 6″ × 6″',
                'description' => 'Full-color DTF transfer, 6 by 6 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 499], [15, 324], [50, 274], [100, 225], [250, 175]],
            ],
            [
                'sku'         => 'DTF-IMG-7X7',
                'name'        => 'DTF Transfer — Image Size 7″ × 7″',
                'description' => 'Full-color DTF transfer, 7 by 7 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 599], [15, 389], [50, 329], [100, 270], [250, 210]],
            ],
            [
                'sku'         => 'DTF-IMG-8X8',
                'name'        => 'DTF Transfer — Image Size 8″ × 8″',
                'description' => 'Full-color DTF transfer, 8 by 8 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 699], [15, 454], [50, 384], [100, 315], [250, 245]],
            ],
            [
                'sku'         => 'DTF-IMG-9X9',
                'name'        => 'DTF Transfer — Image Size 9″ × 9″',
                'description' => 'Full-color DTF transfer, 9 by 9 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 799], [15, 519], [50, 439], [100, 360], [250, 280]],
            ],
            [
                'sku'         => 'DTF-IMG-10X10',
                'name'        => 'DTF Transfer — Image Size 10″ × 10″',
                'description' => 'Full-color DTF transfer, 10 by 10 inches. Vibrant full-coverage print, no weeding required. No minimum order.',
                'tiers'       => [[1, 599], [15, 389], [50, 329], [100, 270], [250, 210]],
            ],
            [
                'sku'         => 'DTF-IMG-9X11',
                'name'        => 'DTF Transfer — Image Size 9″ × 11″',
                'description' => 'Full-color DTF transfer, 9 by 11 inches. Tall portrait format for detailed artwork. No minimum order.',
                'tiers'       => [[1, 849], [15, 552], [50, 467], [100, 382], [250, 297]],
            ],
            [
                'sku'         => 'DTF-IMG-10X10LG',
                'name'        => 'DTF Transfer — Image Size 10″ × 10″ (Large)',
                'description' => 'Full-color DTF transfer, 10 by 10 inches — large format. Premium quality, no weeding required. No minimum order.',
                'tiers'       => [[1, 899], [15, 584], [50, 494], [100, 405], [250, 315]],
            ],
            [
                'sku'         => 'DTF-IMG-11X5',
                'name'        => 'DTF Transfer — Image Size 11″ × 5″',
                'description' => 'Full-color DTF transfer, 11 by 5 inches. Wide horizontal format for banner-style designs. No minimum order.',
                'tiers'       => [[1, 649], [15, 422], [50, 357], [100, 292], [250, 227]],
            ],
            [
                'sku'         => 'DTF-IMG-11X11',
                'name'        => 'DTF Transfer — Image Size 11″ × 11″',
                'description' => 'Full-color DTF transfer, 11 by 11 inches. Large format for bold, detailed designs. No minimum order.',
                'tiers'       => [[1, 999], [15, 649], [50, 549], [100, 450], [250, 350]],
            ],
            [
                'sku'         => 'DTF-IMG-11X14',
                'name'        => 'DTF Transfer — Image Size 11″ × 14″',
                'description' => 'Full-color DTF transfer, 11 by 14 inches. Magazine-poster size for maximum visual impact. No minimum order.',
                'tiers'       => [[1, 1149], [15, 747], [50, 632], [100, 517], [250, 402]],
            ],
            [
                'sku'         => 'DTF-IMG-12X17',
                'name'        => 'DTF Transfer — Image Size 12″ × 17″',
                'description' => 'Full-color DTF transfer, 12 by 17 inches. Our largest standard size — full back coverage. No minimum order.',
                'tiers'       => [[1, 1449], [15, 942], [50, 797], [100, 652], [250, 507]],
            ],
        ];

        foreach ($variants as $data) {
            $this->createDtfProduct($type, $data, 'dtf-transfers');
        }
    }

    // ── Internal helper ──────────────────────────────────────────────────────

    /**
     * Creates a single Lunar Product with one variant and tiered pricing.
     *
     * @param  ProductType                               $type
     * @param  array{sku:string, name:string, description:string, tiers:array<int,array{int,int}>}  $data
     * @param  string                                    $collectionSlug
     */
    private function createDtfProduct(ProductType $type, array $data, string $collectionSlug): void
    {
        if (\Lunar\Models\ProductVariant::where('sku', $data['sku'])->exists()) {
            return;
        }

        $slug = Str::slug($data['name']);

        $attrData = [
            'name' => new \Lunar\FieldTypes\TranslatedText(collect([
                'en' => new \Lunar\FieldTypes\Text($data['name']),
            ])),
            'description' => new \Lunar\FieldTypes\TranslatedText(collect([
                'en' => new \Lunar\FieldTypes\Text($data['description']),
            ])),
        ];

        $product = Product::create([
            'product_type_id' => $type->id,
            'status'          => 'published',
            'attribute_data'  => $attrData,
        ]);

        $product->urls()->create([
            'slug'        => $slug,
            'default'     => true,
            'language_id' => $this->language->id,
        ]);

        $product->channels()->syncWithPivotValues([$this->channel->id], [
            'starts_at' => now(),
            'enabled'   => true,
        ]);

        $variant = $product->variants()->create([
            'sku'          => $data['sku'],
            'tax_class_id' => $this->taxClass->id,
            'stock'        => 9999,
            'purchasable'  => 'always',
            'shippable'    => false,
        ]);

        foreach ($data['tiers'] as [$minQty, $priceInCents]) {
            $variant->prices()->create([
                'currency_id'  => $this->usd->id,
                'price'        => $priceInCents,
                'min_quantity' => $minQty,
            ]);
        }

        $collection = Collection::whereHas('urls', function ($q) use ($collectionSlug) {
            $q->where('slug', $collectionSlug);
        })->first();

        if ($collection) {
            $product->collections()->syncWithoutDetaching([$collection->id]);
        }
    }
}
