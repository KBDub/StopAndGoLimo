<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Collection;
use Lunar\Models\Currency;
use Lunar\Models\Product;
use Lunar\Models\ProductType;
use Lunar\Models\ProductVariant;
use Lunar\Models\TaxClass;

class ProductSeeder extends Seeder
{
    private Currency $usd;
    private TaxClass $taxClass;

    public function run(): void
    {
        $this->usd = Currency::where('code', 'USD')->firstOrFail();
        $this->taxClass = TaxClass::getDefault();

        $this->seedApparel();
        $this->seedSigns();
        $this->seedDecals();
        $this->seedVehicleGraphics();
        $this->seedPromoItems();
    }

    private function seedApparel(): void
    {
        $shirtType = ProductType::where('name', 'Custom Shirts')->first();
        $embType = ProductType::where('name', 'Custom Embroidery')->first();

        $products = [
            [
                'name' => 'Custom Screen Print T-Shirt',
                'description' => 'High-quality custom screen printed t-shirts. Perfect for events, teams, and businesses. Available in multiple colors and sizes with no minimum order.',
                'type' => $shirtType,
                'collection' => 'custom-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'Screen Print', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Event', 'tags' => 'Best Seller, No Minimum'],
                'variants' => $this->sizeVariants(1499),
            ],
            [
                'name' => 'DTF Transfer Custom Tee',
                'description' => 'Direct-to-Film transfer shirts with vibrant, full-color designs. No weeding required, prints on dark fabrics with high durability.',
                'type' => $shirtType,
                'collection' => 'dtf-transfers',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'DTF', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Event', 'tags' => 'New, Rush Available'],
                'variants' => $this->sizeVariants(1799),
            ],
            [
                'name' => 'Glitter HTV Custom Shirt',
                'description' => 'Sparkle and shine with our glitter heat transfer vinyl shirts. Perfect for cheer moms, dance teams, and special events.',
                'type' => $shirtType,
                'collection' => 'custom-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'Heat Press', 'material_type' => 'Glitter', 'fit' => 'Unisex', 'use_case' => 'Spirit Wear', 'tags' => 'Best Seller'],
                'variants' => $this->sizeVariants(2199),
            ],
            [
                'name' => 'Rhinestone Bling Custom Tee',
                'description' => 'Custom rhinestone and crystal embellished t-shirts. Hotfix rhinestones with stunning sparkle for cheer, dance, and pageant teams.',
                'type' => $shirtType,
                'collection' => 'custom-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'Heat Press', 'material_type' => 'Rhinestone', 'fit' => "Women's", 'use_case' => 'Spirit Wear', 'tags' => 'Premium'],
                'variants' => $this->sizeVariants(2999),
            ],
            [
                'name' => 'Family Reunion Custom Shirts',
                'description' => 'Matching family reunion t-shirts with custom designs. Group discounts available for large orders. Fast turnaround for your special gathering.',
                'type' => $shirtType,
                'collection' => 'reunion-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'Screen Print', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Reunion', 'tags' => 'No Minimum'],
                'variants' => $this->sizeVariants(1299),
            ],
            [
                'name' => 'Memorial Photo Shirt',
                'description' => 'Custom In Loving Memory and RIP photo shirts. High-resolution photo printing with airbrush-style digital effects. Same day available.',
                'type' => $shirtType,
                'collection' => 'memorial-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'DTF', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Memorial', 'tags' => 'Rush Available'],
                'variants' => $this->sizeVariants(2499),
            ],
            [
                'name' => 'Corporate Embroidered Polo',
                'description' => 'Professional embroidered polo shirts for corporate branding. Moisture-wicking performance fabric with your company logo.',
                'type' => $embType,
                'collection' => 'corporate-wear',
                'attrs' => ['garment_type' => 'Polo', 'print_method' => 'Embroidery', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Corporate', 'tags' => 'Corporate'],
                'variants' => $this->sizeVariants(2899),
            ],
            [
                'name' => 'Custom Hoodie with Logo',
                'description' => 'Heavyweight custom hoodies with screen print or embroidered logos. Perfect for school spirit wear and team apparel.',
                'type' => $shirtType,
                'collection' => 'spirit-wear',
                'attrs' => ['garment_type' => 'Hoodie', 'print_method' => 'Screen Print', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Spirit Wear', 'tags' => 'Best Seller'],
                'variants' => $this->sizeVariants(3499),
            ],
            [
                'name' => 'Holographic Custom Tee',
                'description' => 'Color-shifting holographic vinyl t-shirts with iridescent prism effect. Stand out with eye-catching metallic rainbow designs.',
                'type' => $shirtType,
                'collection' => 'custom-shirts',
                'attrs' => ['garment_type' => 'T-Shirt', 'print_method' => 'Heat Press', 'material_type' => 'Holographic', 'fit' => 'Unisex', 'use_case' => 'Event', 'tags' => 'Premium, New'],
                'variants' => $this->sizeVariants(2499),
            ],
            [
                'name' => 'Embroidered Beanie Cap',
                'description' => 'Custom embroidered knit beanies with your logo or design. Warm and stylish for winter promotions and team gear.',
                'type' => $embType,
                'collection' => 'embroidery',
                'attrs' => ['garment_type' => 'Cap', 'print_method' => 'Embroidery', 'material_type' => 'Standard Vinyl', 'fit' => 'Unisex', 'use_case' => 'Corporate', 'tags' => 'New'],
                'variants' => [['sku_suffix' => 'OS', 'name' => 'One Size', 'price' => 1999]],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function seedSigns(): void
    {
        $signType = ProductType::where('name', 'Custom Signage')->first();

        $products = [
            [
                'name' => 'Custom Vinyl Banner',
                'description' => 'Full-color vinyl banners on 13oz scrim vinyl. Weather-resistant with UV protected ink. Grommets and hems included.',
                'type' => $signType,
                'collection' => 'banners',
                'attrs' => ['sign_type' => 'Vinyl Banner', 'substrate' => '13oz Scrim Vinyl', 'placement' => 'Outdoor', 'mounting' => 'Grommets', 'finish' => 'Gloss', 'tags' => 'Best Seller'],
                'variants' => [
                    ['sku_suffix' => '3x6', 'name' => "3' x 6'", 'price' => 4999],
                    ['sku_suffix' => '4x8', 'name' => "4' x 8'", 'price' => 7999],
                    ['sku_suffix' => '3x10', 'name' => "3' x 10'", 'price' => 8999],
                ],
            ],
            [
                'name' => 'Coroplast Yard Sign',
                'description' => 'Durable corrugated plastic yard signs. Perfect for real estate, political campaigns, and events. H-stakes included.',
                'type' => $signType,
                'collection' => 'yard-signs',
                'attrs' => ['sign_type' => 'Yard Sign', 'substrate' => 'Coroplast', 'placement' => 'Outdoor', 'mounting' => 'H-Stakes', 'finish' => 'Matte', 'tags' => 'Rush Available'],
                'variants' => [
                    ['sku_suffix' => '18x24', 'name' => '18" x 24"', 'price' => 1999],
                    ['sku_suffix' => '24x36', 'name' => '24" x 36"', 'price' => 2999],
                ],
            ],
            [
                'name' => 'Aluminum Business Sign',
                'description' => 'Professional aluminum composite signs for storefronts and offices. Durable, weather-resistant with vibrant full-color printing.',
                'type' => $signType,
                'collection' => 'business-signs',
                'attrs' => ['sign_type' => 'Business Sign', 'substrate' => 'Aluminum Composite', 'placement' => 'Both', 'mounting' => 'Adhesive', 'finish' => 'Gloss', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => '12x18', 'name' => '12" x 18"', 'price' => 3499],
                    ['sku_suffix' => '24x36', 'name' => '24" x 36"', 'price' => 6999],
                ],
            ],
            [
                'name' => 'Retractable Banner Stand',
                'description' => 'Portable retractable banner stand for trade shows and events. Easy setup with carrying case included.',
                'type' => $signType,
                'collection' => 'banners',
                'attrs' => ['sign_type' => 'Retractable Banner', 'substrate' => 'Fabric', 'placement' => 'Indoor', 'mounting' => 'Stand', 'finish' => 'Matte', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => 'STD', 'name' => '33" x 80" Standard', 'price' => 12999],
                    ['sku_suffix' => 'WDE', 'name' => '47" x 80" Wide', 'price' => 16999],
                ],
            ],
            [
                'name' => 'Custom Poster Print',
                'description' => 'High-quality full-color poster prints on premium paper or foam board. Great for promotions and displays.',
                'type' => $signType,
                'collection' => 'posters',
                'attrs' => ['sign_type' => 'Poster', 'substrate' => 'Foam Board', 'placement' => 'Indoor', 'mounting' => 'None', 'finish' => 'Gloss', 'tags' => 'No Minimum'],
                'variants' => [
                    ['sku_suffix' => '18x24', 'name' => '18" x 24"', 'price' => 1499],
                    ['sku_suffix' => '24x36', 'name' => '24" x 36"', 'price' => 2499],
                ],
            ],
            [
                'name' => 'Custom Table Runner',
                'description' => 'Full-color printed table runners for trade shows and events. Wrinkle-resistant fabric with vibrant dye sublimation.',
                'type' => $signType,
                'collection' => 'table-runners',
                'attrs' => ['sign_type' => 'Table Runner', 'substrate' => 'Fabric', 'placement' => 'Indoor', 'mounting' => 'None', 'finish' => 'Matte', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => '6FT', 'name' => "6' Table Runner", 'price' => 7999],
                    ['sku_suffix' => '8FT', 'name' => "8' Table Runner", 'price' => 9999],
                ],
            ],
            [
                'name' => 'A-Frame Sidewalk Sign',
                'description' => 'Double-sided A-frame sidewalk signs. Durable and portable for storefront advertising. Interchangeable inserts.',
                'type' => $signType,
                'collection' => 'sidewalk-signs',
                'attrs' => ['sign_type' => 'A-Frame', 'substrate' => 'Coroplast', 'placement' => 'Outdoor', 'mounting' => 'Stand', 'finish' => 'Matte', 'tags' => 'Best Seller'],
                'variants' => [
                    ['sku_suffix' => '24x36', 'name' => '24" x 36"', 'price' => 8999],
                ],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function seedDecals(): void
    {
        $stockType = ProductType::where('name', 'Stock')->first();

        $products = [
            [
                'name' => 'Custom Window Decals',
                'description' => 'Professional window decals and lettering for storefronts. Display business hours, logos, and promotions.',
                'type' => $stockType,
                'collection' => 'window-decals',
                'attrs' => ['decal_type' => 'Window Decal', 'adhesive' => 'Permanent', 'decal_shape' => 'Die-Cut', 'application' => 'Indoor', 'tags' => 'Best Seller'],
                'variants' => [
                    ['sku_suffix' => 'SM', 'name' => 'Small (up to 12")', 'price' => 1999],
                    ['sku_suffix' => 'MD', 'name' => 'Medium (up to 24")', 'price' => 3499],
                    ['sku_suffix' => 'LG', 'name' => 'Large (up to 48")', 'price' => 5999],
                ],
            ],
            [
                'name' => 'One-Way Vision Window Perf',
                'description' => 'See-through perforated window film with full-color graphics on outside, clear view from inside.',
                'type' => $stockType,
                'collection' => 'window-decals',
                'attrs' => ['decal_type' => 'Window Perf', 'adhesive' => 'Permanent', 'decal_shape' => 'Rectangle', 'application' => 'Outdoor', 'tags' => 'Premium'],
                'variants' => [
                    ['sku_suffix' => 'SQFT', 'name' => 'Per Square Foot', 'price' => 1299],
                ],
            ],
            [
                'name' => 'Custom Die-Cut Stickers',
                'description' => 'Die-cut vinyl stickers in any shape. Weather-resistant and UV protected. Great for branding and giveaways.',
                'type' => $stockType,
                'collection' => 'stickers',
                'attrs' => ['decal_type' => 'Die-Cut Sticker', 'adhesive' => 'Permanent', 'decal_shape' => 'Die-Cut', 'application' => 'Both', 'tags' => 'No Minimum, Best Seller'],
                'variants' => [
                    ['sku_suffix' => '3IN', 'name' => '3" Stickers (25 pack)', 'price' => 2499],
                    ['sku_suffix' => '4IN', 'name' => '4" Stickers (25 pack)', 'price' => 3499],
                ],
            ],
            [
                'name' => 'Wall Mural Graphics',
                'description' => 'Custom wall murals and oversized graphics. Transform any interior space with removable vinyl wall decals.',
                'type' => $stockType,
                'collection' => 'wall-floor-decals',
                'attrs' => ['decal_type' => 'Wall Decal', 'adhesive' => 'Removable', 'decal_shape' => 'Rectangle', 'application' => 'Indoor', 'tags' => 'Premium'],
                'variants' => [
                    ['sku_suffix' => 'SQFT', 'name' => 'Per Square Foot', 'price' => 899],
                ],
            ],
            [
                'name' => 'Floor Graphics & Decals',
                'description' => 'Anti-slip floor graphics for indoor use. Social distancing markers, wayfinding, and promotional floor decals.',
                'type' => $stockType,
                'collection' => 'wall-floor-decals',
                'attrs' => ['decal_type' => 'Floor Decal', 'adhesive' => 'Removable', 'decal_shape' => 'Circle', 'application' => 'Floor', 'tags' => 'Safety'],
                'variants' => [
                    ['sku_suffix' => '12IN', 'name' => '12" Circle', 'price' => 999],
                    ['sku_suffix' => '18IN', 'name' => '18" Circle', 'price' => 1499],
                ],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function seedVehicleGraphics(): void
    {
        $stockType = ProductType::where('name', 'Stock')->first();

        $products = [
            [
                'name' => 'Full Vehicle Wrap',
                'description' => 'Complete vehicle color change or commercial wrap. Premium vinyl with UV lamination. 3-5 year outdoor durability.',
                'type' => $stockType,
                'collection' => 'vehicle-wraps',
                'attrs' => ['vehicle_product' => 'Full Wrap', 'coverage' => 'Full', 'vehicle_type' => 'Car/Sedan', 'wrap_finish' => 'Gloss', 'compliance' => 'None', 'tags' => 'Premium'],
                'variants' => [
                    ['sku_suffix' => 'CAR', 'name' => 'Car/Sedan', 'price' => 299900],
                    ['sku_suffix' => 'SUV', 'name' => 'SUV/Crossover', 'price' => 349900],
                    ['sku_suffix' => 'TRK', 'name' => 'Truck', 'price' => 399900],
                ],
            ],
            [
                'name' => 'Partial Vehicle Wrap',
                'description' => 'Custom partial wraps for business branding. Cover doors, hood, or tailgate with your logo and graphics.',
                'type' => $stockType,
                'collection' => 'vehicle-wraps',
                'attrs' => ['vehicle_product' => 'Partial Wrap', 'coverage' => 'Partial', 'vehicle_type' => 'Van', 'wrap_finish' => 'Gloss', 'compliance' => 'None', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => 'SM', 'name' => 'Quarter Wrap', 'price' => 79900],
                    ['sku_suffix' => 'MD', 'name' => 'Half Wrap', 'price' => 149900],
                ],
            ],
            [
                'name' => 'Custom Vehicle Magnets',
                'description' => 'Removable magnetic signs for work trucks and personal vehicles. Full-color printing, easy on and off.',
                'type' => $stockType,
                'collection' => 'vehicle-magnets',
                'attrs' => ['vehicle_product' => 'Magnet', 'coverage' => 'Spot', 'vehicle_type' => 'Truck', 'wrap_finish' => 'Gloss', 'compliance' => 'None', 'tags' => 'Best Seller, No Minimum'],
                'variants' => [
                    ['sku_suffix' => '12x18', 'name' => '12" x 18" (pair)', 'price' => 4999],
                    ['sku_suffix' => '12x24', 'name' => '12" x 24" (pair)', 'price' => 5999],
                    ['sku_suffix' => '18x24', 'name' => '18" x 24" (pair)', 'price' => 7999],
                ],
            ],
            [
                'name' => 'USDOT Number Decals',
                'description' => 'Compliant USDOT, MC, KYU, and GVW number decals. Visible from 50 feet with contrasting colors per federal requirements.',
                'type' => $stockType,
                'collection' => 'dot-decals',
                'attrs' => ['vehicle_product' => 'DOT Decals', 'coverage' => 'Spot', 'vehicle_type' => 'Box Truck', 'wrap_finish' => 'Matte', 'compliance' => 'USDOT', 'tags' => 'Rush Available'],
                'variants' => [
                    ['sku_suffix' => 'STD', 'name' => 'Standard DOT Package', 'price' => 3999],
                    ['sku_suffix' => 'FUL', 'name' => 'Full Compliance Package', 'price' => 7999],
                ],
            ],
            [
                'name' => 'Fleet Graphics Package',
                'description' => 'Consistent branding across your commercial fleet. Volume discounts for multiple vehicles. Design and installation included.',
                'type' => $stockType,
                'collection' => 'fleet-graphics',
                'attrs' => ['vehicle_product' => 'Spot Graphics', 'coverage' => 'Partial', 'vehicle_type' => 'Van', 'wrap_finish' => 'Gloss', 'compliance' => 'None', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => 'VAN', 'name' => 'Per Van', 'price' => 129900],
                    ['sku_suffix' => 'BOX', 'name' => 'Per Box Truck', 'price' => 199900],
                ],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function seedPromoItems(): void
    {
        $stockType = ProductType::where('name', 'Stock')->first();

        $products = [
            [
                'name' => 'Custom Printed Mugs',
                'description' => 'Full-color custom mugs with your logo or design. Dishwasher safe. Great for corporate gifts and promotions.',
                'type' => $stockType,
                'collection' => 'drinkware',
                'attrs' => ['promo_item_type' => 'Mug', 'imprint_method' => 'Full Color', 'tags' => 'Corporate'],
                'variants' => [
                    ['sku_suffix' => '11OZ', 'name' => '11oz Mug', 'price' => 1299],
                    ['sku_suffix' => '15OZ', 'name' => '15oz Mug', 'price' => 1599],
                ],
            ],
            [
                'name' => 'Custom Tote Bags',
                'description' => 'Reusable custom tote bags with your branding. Eco-friendly and practical for events and giveaways.',
                'type' => $stockType,
                'collection' => 'bags-totes',
                'attrs' => ['promo_item_type' => 'Tote Bag', 'imprint_method' => 'Screen Print', 'tags' => 'No Minimum'],
                'variants' => [
                    ['sku_suffix' => 'STD', 'name' => 'Standard Tote', 'price' => 799],
                    ['sku_suffix' => 'ZIP', 'name' => 'Zippered Tote', 'price' => 1299],
                ],
            ],
            [
                'name' => 'Branded Pens',
                'description' => 'Custom imprinted pens with your company logo. Available in multiple colors with quick turnaround.',
                'type' => $stockType,
                'collection' => 'writing-instruments',
                'attrs' => ['promo_item_type' => 'Pen', 'imprint_method' => 'Screen Print', 'tags' => 'Best Seller'],
                'variants' => [
                    ['sku_suffix' => '50', 'name' => '50 Pack', 'price' => 4999],
                    ['sku_suffix' => '100', 'name' => '100 Pack', 'price' => 7999],
                    ['sku_suffix' => '250', 'name' => '250 Pack', 'price' => 14999],
                ],
            ],
        ];

        foreach ($products as $data) {
            $this->createProduct($data);
        }
    }

    private function sizeVariants(int $basePrice): array
    {
        return [
            ['sku_suffix' => 'S', 'name' => 'Small', 'price' => $basePrice],
            ['sku_suffix' => 'M', 'name' => 'Medium', 'price' => $basePrice],
            ['sku_suffix' => 'L', 'name' => 'Large', 'price' => $basePrice],
            ['sku_suffix' => 'XL', 'name' => 'XL', 'price' => $basePrice],
            ['sku_suffix' => '2XL', 'name' => '2XL', 'price' => $basePrice + 200],
            ['sku_suffix' => '3XL', 'name' => '3XL', 'price' => $basePrice + 400],
        ];
    }

    private function createProduct(array $data): void
    {
        $slug = \Illuminate\Support\Str::slug($data['name']);

        $existing = Product::whereHas('urls', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->first();

        if ($existing) {
            return;
        }

        $attrData = [
            'name' => new \Lunar\FieldTypes\TranslatedText(collect([
                'en' => new \Lunar\FieldTypes\Text($data['name']),
            ])),
            'description' => new \Lunar\FieldTypes\TranslatedText(collect([
                'en' => new \Lunar\FieldTypes\Text($data['description']),
            ])),
        ];

        foreach ($data['attrs'] as $handle => $value) {
            $attrData[$handle] = new \Lunar\FieldTypes\Text($value);
        }

        $product = Product::create([
            'product_type_id' => $data['type']->id,
            'status' => 'published',
            'attribute_data' => $attrData,
        ]);

        $product->urls()->create([
            'slug' => $slug,
            'default' => true,
            'language_id' => \Lunar\Models\Language::getDefault()->id,
        ]);

        $channel = \Lunar\Models\Channel::getDefault();
        $product->channels()->syncWithPivotValues([$channel->id], [
            'starts_at' => now(),
            'enabled' => true,
        ]);

        foreach ($data['variants'] as $index => $variantData) {
            $sku = strtoupper($slug) . '-' . $variantData['sku_suffix'];

            $variant = $product->variants()->create([
                'sku' => \Illuminate\Support\Str::limit($sku, 250, ''),
                'tax_class_id' => $this->taxClass->id,
                'stock' => rand(5, 50),
                'shippable' => true,
            ]);

            $variant->prices()->create([
                'currency_id' => $this->usd->id,
                'price' => $variantData['price'],
                'min_quantity' => 1,
            ]);
        }

        $collection = Collection::whereHas('urls', function ($q) use ($data) {
            $q->where('slug', $data['collection']);
        })->first();

        if ($collection) {
            $product->collections()->syncWithoutDetaching([$collection->id]);
        }
    }
}
