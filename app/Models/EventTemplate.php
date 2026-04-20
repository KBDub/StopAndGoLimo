<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class EventTemplate extends Model
{
    protected $fillable = [
        'store_type',
        'category',
        'category_label',
        'name',
    ];

    public function scopeForStoreType(Builder $query, string $storeType): Builder
    {
        return $query->where('store_type', $storeType);
    }

    public function scopeForCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    public static function groupedForStoreType(string $storeType): array
    {
        return static::forStoreType($storeType)
            ->orderBy('category')
            ->orderBy('name')
            ->get()
            ->groupBy('category_label')
            ->map(fn ($items) => $items->pluck('name', 'name'))
            ->toArray();
    }
}
