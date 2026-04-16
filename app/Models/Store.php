<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    protected $fillable = [
        'name',
        'subdomain',
        'lunar_channel_id',
        'logo_path',
        'nav_layout',
        'colors',
        'font_family',
        'font_custom',
        'features_enabled',
        'has_banner',
        'banner_text',
        'events',
        'roster',
        'store_type',
        'is_active',
    ];

    protected $casts = [
        'colors'           => 'array',
        'features_enabled' => 'array',
        'events'           => 'array',
        'roster'           => 'array',
        'has_banner'       => 'boolean',
        'is_active'        => 'boolean',
    ];

    public function channel(): BelongsTo
    {
        return $this->belongsTo(\Lunar\Models\Channel::class, 'lunar_channel_id');
    }

    public function pages(): HasMany
    {
        return $this->hasMany(StorePage::class)->orderBy('sort_order');
    }

    public function hasFeature(string $feature): bool
    {
        return in_array($feature, $this->features_enabled ?? [], true);
    }

    public function nextCountdownEvent(): ?array
    {
        return collect($this->events ?? [])
            ->filter(fn ($e) => ! empty($e['show_countdown']) && ! empty($e['event_date']) && now()->lt($e['event_date']))
            ->sortBy('event_date')
            ->first();
    }

    public function resolvedFont(): string
    {
        return $this->font_custom ?: $this->font_family ?: 'Inter';
    }

    public function color(string $key, string $default = '#2C2C2C'): string
    {
        return $this->colors[$key] ?? $default;
    }
}
