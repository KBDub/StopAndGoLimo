<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Lunar\Models\Attribute;
use Lunar\Models\AttributeGroup;
use Lunar\Models\ProductType;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        $this->createApparelAttributes();
        $this->createSignageAttributes();
        $this->createDecalAttributes();
        $this->createVehicleAttributes();
        $this->createPromoAttributes();
        $this->createSharedAttributes();
        $this->mapAttributesToProductTypes();
    }

    private function createApparelAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'apparel_options'],
            [
                'name' => ['en' => 'Apparel Options'],
                'position' => 2,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'size', 'Size', \Lunar\FieldTypes\Dropdown::class, true, true, 1);
        $this->createAttribute($group, 'garment_type', 'Garment Type', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
        $this->createAttribute($group, 'print_method', 'Print Method', \Lunar\FieldTypes\Dropdown::class, true, true, 3);
        $this->createAttribute($group, 'material_type', 'Material Type', \Lunar\FieldTypes\Dropdown::class, true, true, 4);
        $this->createAttribute($group, 'color', 'Color', \Lunar\FieldTypes\Dropdown::class, true, true, 5);
        $this->createAttribute($group, 'fit', 'Fit', \Lunar\FieldTypes\Dropdown::class, true, true, 6);
        $this->createAttribute($group, 'use_case', 'Use Case', \Lunar\FieldTypes\Dropdown::class, true, true, 7);
    }

    private function createSignageAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'signage_options'],
            [
                'name' => ['en' => 'Signage Options'],
                'position' => 3,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'sign_type', 'Sign Type', \Lunar\FieldTypes\Dropdown::class, true, true, 1);
        $this->createAttribute($group, 'substrate', 'Substrate Material', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
        $this->createAttribute($group, 'sign_dimensions', 'Dimensions', \Lunar\FieldTypes\Text::class, true, false, 3);
        $this->createAttribute($group, 'placement', 'Placement', \Lunar\FieldTypes\Dropdown::class, true, true, 4);
        $this->createAttribute($group, 'mounting', 'Mounting', \Lunar\FieldTypes\Dropdown::class, true, true, 5);
        $this->createAttribute($group, 'finish', 'Finish', \Lunar\FieldTypes\Dropdown::class, true, true, 6);
    }

    private function createDecalAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'decal_options'],
            [
                'name' => ['en' => 'Decal Options'],
                'position' => 4,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'decal_type', 'Decal Type', \Lunar\FieldTypes\Dropdown::class, true, true, 1);
        $this->createAttribute($group, 'adhesive', 'Adhesive Type', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
        $this->createAttribute($group, 'decal_shape', 'Shape', \Lunar\FieldTypes\Dropdown::class, true, true, 3);
        $this->createAttribute($group, 'application', 'Application', \Lunar\FieldTypes\Dropdown::class, true, true, 4);
    }

    private function createVehicleAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'vehicle_options'],
            [
                'name' => ['en' => 'Vehicle Graphics Options'],
                'position' => 5,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'vehicle_product', 'Product Type', \Lunar\FieldTypes\Dropdown::class, true, true, 1);
        $this->createAttribute($group, 'coverage', 'Coverage', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
        $this->createAttribute($group, 'vehicle_type', 'Vehicle Type', \Lunar\FieldTypes\Dropdown::class, true, true, 3);
        $this->createAttribute($group, 'wrap_finish', 'Wrap Finish', \Lunar\FieldTypes\Dropdown::class, true, true, 4);
        $this->createAttribute($group, 'compliance', 'Compliance', \Lunar\FieldTypes\Dropdown::class, true, true, 5);
    }

    private function createPromoAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'promo_options'],
            [
                'name' => ['en' => 'Promotional Options'],
                'position' => 6,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'promo_item_type', 'Item Type', \Lunar\FieldTypes\Dropdown::class, true, true, 1);
        $this->createAttribute($group, 'imprint_method', 'Imprint Method', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
    }

    private function createSharedAttributes(): void
    {
        $group = AttributeGroup::firstOrCreate(
            ['handle' => 'production'],
            [
                'name' => ['en' => 'Production & Tags'],
                'position' => 7,
                'attributable_type' => 'product',
            ]
        );

        $this->createAttribute($group, 'tags', 'Tags', \Lunar\FieldTypes\Text::class, true, true, 1);
        $this->createAttribute($group, 'turnaround', 'Turnaround', \Lunar\FieldTypes\Dropdown::class, true, true, 2);
    }

    private function mapAttributesToProductTypes(): void
    {
        $detailsGroup = AttributeGroup::where('handle', 'details')->first();
        $apparelGroup = AttributeGroup::where('handle', 'apparel_options')->first();
        $signageGroup = AttributeGroup::where('handle', 'signage_options')->first();
        $decalGroup = AttributeGroup::where('handle', 'decal_options')->first();
        $vehicleGroup = AttributeGroup::where('handle', 'vehicle_options')->first();
        $promoGroup = AttributeGroup::where('handle', 'promo_options')->first();
        $productionGroup = AttributeGroup::where('handle', 'production')->first();

        $detailsAttrs = $detailsGroup ? Attribute::where('attribute_group_id', $detailsGroup->id)->pluck('id')->toArray() : [];
        $productionAttrs = $productionGroup ? Attribute::where('attribute_group_id', $productionGroup->id)->pluck('id')->toArray() : [];

        $typeMap = [
            'Custom Shirts' => $apparelGroup,
            'Custom Embroidery' => $apparelGroup,
            'Custom Signage' => $signageGroup,
        ];

        foreach (ProductType::all() as $pt) {
            $attrIds = array_merge($detailsAttrs, $productionAttrs);

            if (isset($typeMap[$pt->name])) {
                $groupAttrs = Attribute::where('attribute_group_id', $typeMap[$pt->name]->id)->pluck('id')->toArray();
                $attrIds = array_merge($attrIds, $groupAttrs);
            }

            $existing = \Illuminate\Support\Facades\DB::table('lunar_attributables')
                ->where('attributable_type', 'product_type')
                ->where('attributable_id', $pt->id)
                ->pluck('attribute_id')
                ->toArray();

            $newIds = array_diff($attrIds, $existing);

            foreach ($newIds as $attrId) {
                \Illuminate\Support\Facades\DB::table('lunar_attributables')->insert([
                    'attributable_type' => 'product_type',
                    'attributable_id' => $pt->id,
                    'attribute_id' => $attrId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        $stockType = ProductType::where('name', 'Stock')->first();
        if ($stockType) {
            $allExtraGroups = [$decalGroup, $vehicleGroup, $promoGroup];
            $extraIds = [];
            foreach ($allExtraGroups as $g) {
                if ($g) {
                    $extraIds = array_merge($extraIds, Attribute::where('attribute_group_id', $g->id)->pluck('id')->toArray());
                }
            }

            $existing = \Illuminate\Support\Facades\DB::table('lunar_attributables')
                ->where('attributable_type', 'product_type')
                ->where('attributable_id', $stockType->id)
                ->pluck('attribute_id')
                ->toArray();

            $newIds = array_diff(array_merge($detailsAttrs, $productionAttrs, $extraIds), $existing);

            foreach ($newIds as $attrId) {
                \Illuminate\Support\Facades\DB::table('lunar_attributables')->insert([
                    'attributable_type' => 'product_type',
                    'attributable_id' => $stockType->id,
                    'attribute_id' => $attrId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function createAttribute(
        AttributeGroup $group,
        string $handle,
        string $name,
        string $type,
        bool $searchable,
        bool $filterable,
        int $position,
    ): Attribute {
        return Attribute::firstOrCreate(
            ['handle' => $handle, 'attribute_type' => 'product'],
            [
                'attribute_group_id' => $group->id,
                'name' => ['en' => $name],
                'type' => $type,
                'searchable' => $searchable,
                'filterable' => $filterable,
                'position' => $position,
                'required' => false,
                'section' => 'main',
                'configuration' => [],
                'default_value' => null,
                'system' => false,
            ]
        );
    }
}
