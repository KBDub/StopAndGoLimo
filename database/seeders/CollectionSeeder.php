<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Attribute;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;

class CollectionSeeder extends Seeder
{
    public function run(): void
    {
        $group = CollectionGroup::firstOrCreate(
            ['handle' => 'main'],
            ['name' => 'Main']
        );

        $tree = [
            'Custom Apparel' => [
                'handle' => 'custom-apparel',
                'children' => [
                    ['name' => 'Custom Shirts', 'handle' => 'custom-shirts'],
                    ['name' => 'DTF Transfers', 'handle' => 'dtf-transfers'],
                    ['name' => 'Reunion Shirts', 'handle' => 'reunion-shirts'],
                    ['name' => 'Memorial Shirts', 'handle' => 'memorial-shirts'],
                    ['name' => 'Corporate Wear', 'handle' => 'corporate-wear'],
                    ['name' => 'Spirit Wear', 'handle' => 'spirit-wear'],
                    ['name' => 'Embroidery', 'handle' => 'embroidery'],
                ],
            ],
            'Signs & Branding' => [
                'handle' => 'signs',
                'children' => [
                    ['name' => 'Business Signs', 'handle' => 'business-signs'],
                    ['name' => 'Vinyl Banners', 'handle' => 'banners'],
                    ['name' => 'Posters', 'handle' => 'posters'],
                    ['name' => 'Table Runners', 'handle' => 'table-runners'],
                    ['name' => 'Sidewalk Signs', 'handle' => 'sidewalk-signs'],
                    ['name' => 'Yard Signs', 'handle' => 'yard-signs'],
                ],
            ],
            'Decals & Stickers' => [
                'handle' => 'decals',
                'children' => [
                    ['name' => 'Window Decals', 'handle' => 'window-decals'],
                    ['name' => 'Wall & Floor Decals', 'handle' => 'wall-floor-decals'],
                    ['name' => 'Die-Cut Stickers', 'handle' => 'stickers'],
                    ['name' => 'Safety & Compliance Decals', 'handle' => 'safety-decals'],
                ],
            ],
            'Vehicle Graphics' => [
                'handle' => 'vehicle-graphics',
                'children' => [
                    ['name' => 'Vehicle Wraps', 'handle' => 'vehicle-wraps'],
                    ['name' => 'Vehicle Magnets', 'handle' => 'vehicle-magnets'],
                    ['name' => 'DOT Decals & Compliance', 'handle' => 'dot-decals'],
                    ['name' => 'Fleet Graphics', 'handle' => 'fleet-graphics'],
                ],
            ],
            'Promotional Items' => [
                'handle' => 'promotional-items',
                'children' => [
                    ['name' => 'Drinkware', 'handle' => 'drinkware'],
                    ['name' => 'Writing Instruments', 'handle' => 'writing-instruments'],
                    ['name' => 'Bags & Totes', 'handle' => 'bags-totes'],
                    ['name' => 'Branded Merchandise', 'handle' => 'branded-merchandise'],
                ],
            ],
        ];

        $nameAttr = Attribute::where('handle', 'name')
            ->where('attribute_type', 'collection')
            ->first();

        $descAttr = Attribute::where('handle', 'description')
            ->where('attribute_type', 'collection')
            ->first();

        $position = 1;
        foreach ($tree as $parentName => $config) {
            $parent = $this->createCollection(
                $group,
                $parentName,
                $config['handle'],
                $nameAttr,
                $descAttr,
                $position++,
            );

            $childPos = 1;
            foreach ($config['children'] as $child) {
                $this->createCollection(
                    $group,
                    $child['name'],
                    $child['handle'],
                    $nameAttr,
                    $descAttr,
                    $childPos++,
                    $parent,
                );
            }
        }
    }

    private function createCollection(
        CollectionGroup $group,
        string $name,
        string $handle,
        ?Attribute $nameAttr,
        ?Attribute $descAttr,
        int $position,
        ?Collection $parent = null,
    ): Collection {
        $existing = Collection::where('collection_group_id', $group->id)
            ->whereJsonContains('attribute_data->name->value->en', $name)
            ->first();

        if ($existing) {
            return $existing;
        }

        $attrData = [];
        if ($nameAttr) {
            $attrData['name'] = new \Lunar\FieldTypes\TranslatedText(collect(['en' => new \Lunar\FieldTypes\Text($name)]));
        }
        if ($descAttr) {
            $attrData['description'] = new \Lunar\FieldTypes\TranslatedText(collect(['en' => new \Lunar\FieldTypes\Text("Shop our {$name} collection")]));
        }

        $collection = Collection::create([
            'collection_group_id' => $group->id,
            'attribute_data' => $attrData,
            'sort' => 'custom',
        ]);

        if ($parent) {
            $collection->appendToNode($parent)->save();
        }

        $collection->urls()->create([
            'slug' => $handle,
            'default' => true,
            'language_id' => \Lunar\Models\Language::getDefault()->id,
        ]);

        return $collection;
    }
}
