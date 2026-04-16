<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StorePage extends Model
{
    protected $fillable = [
        'store_id',
        'slug',
        'title',
        'sections',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'sections'  => 'array',
        'is_active' => 'boolean',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function isHome(): bool
    {
        return $this->slug === '';
    }

    public function url(): string
    {
        return $this->slug === '' ? '/' : '/' . $this->slug;
    }
}
