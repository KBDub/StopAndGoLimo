<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Store;
use App\Models\StorePage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Lunar\Models\Channel;

class CreateTenantStoreJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(public readonly int $storeId)
    {
    }

    public function handle(): void
    {
        DB::transaction(function () {
            $store = Store::findOrFail($this->storeId);

            // Step 1 — Create Lunar Channel if not already linked
            if (! $store->lunar_channel_id) {
                $channel = Channel::firstOrCreate(
                    ['handle' => $store->subdomain],
                    [
                        'name'    => $store->name,
                        'default' => false,
                        'url'     => "https://{$store->subdomain}.top5pct.com",
                    ]
                );
                $store->update(['lunar_channel_id' => $channel->id]);
                Log::info("CreateTenantStoreJob: created channel [{$channel->handle}] for store [{$store->name}].");
            }

            // Step 2 — Create default home page if none exists
            if ($store->pages()->where('slug', '')->doesntExist()) {
                StorePage::create([
                    'store_id'   => $store->id,
                    'slug'       => '',
                    'title'      => 'Home',
                    'sections'   => ['hero', 'countdown', 'catalog', 'calendar', 'roster'],
                    'is_active'  => true,
                    'sort_order' => 0,
                ]);
                Log::info("CreateTenantStoreJob: created default home page for store [{$store->name}].");
            }

            Log::info("CreateTenantStoreJob: completed onboarding for store [{$store->name}].");
        });
    }

    public function failed(\Throwable $e): void
    {
        Log::error("CreateTenantStoreJob failed for store [{$this->storeId}]: {$e->getMessage()}");
    }
}
