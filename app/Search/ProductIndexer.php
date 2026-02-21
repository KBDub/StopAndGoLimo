<?php

declare(strict_types=1);

namespace App\Search;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProductIndexer extends \Lunar\Search\ProductIndexer
{
    public function getSortableFields(): array
    {
        return array_merge(parent::getSortableFields(), [
            'min_price',
            'max_price',
        ]);
    }

    public function getFilterableFields(): array
    {
        return array_merge(parent::getFilterableFields(), [
            'product_type',
            'brand',
            'collections',
            'min_price',
            'max_price',
            'in_stock',
            'size',
            'garment_type',
            'print_method',
            'material_type',
            'color',
            'fit',
            'use_case',
            'sign_type',
            'substrate',
            'placement',
            'mounting',
            'finish',
            'decal_type',
            'adhesive',
            'decal_shape',
            'application',
            'vehicle_product',
            'coverage',
            'vehicle_type',
            'wrap_finish',
            'compliance',
            'promo_item_type',
            'imprint_method',
            'tags',
            'turnaround',
        ]);
    }

    public function makeAllSearchableUsing(Builder $query): Builder
    {
        return $query->with([
            'thumbnail',
            'variants.prices',
            'productType',
            'brand',
            'collections.urls',
        ]);
    }

    public function toSearchableArray(Model $model): array
    {
        $data = parent::toSearchableArray($model);

        $priceValues = $model->variants->flatMap(function ($variant) {
            return $variant->prices->map(fn ($p) => $p->price->value);
        })->filter();

        $data['min_price'] = $priceValues->min() ?? 0;
        $data['max_price'] = $priceValues->max() ?? 0;

        $totalStock = $model->variants->sum('stock');
        $data['in_stock'] = $totalStock > 0;

        $data['collections'] = $model->collections
            ->flatMap(fn ($c) => $c->urls->pluck('slug'))
            ->values()
            ->toArray();

        return $data;
    }
}
