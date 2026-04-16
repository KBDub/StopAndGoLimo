<?php

declare(strict_types=1);

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Lunar\Models\ProductVariant;

class BulkUpdateInventoryJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly int $variantId,
        public readonly int $quantity,
    ) {
    }

    public function handle(): void
    {
        $variant = ProductVariant::findOrFail($this->variantId);

        $updated = $variant->stocks()->update(['quantity' => $this->quantity]);

        Log::info("BulkUpdateInventoryJob: set quantity={$this->quantity} on {$updated} stock record(s) for variant [{$this->variantId}].");
    }

    public function failed(\Throwable $e): void
    {
        Log::error("BulkUpdateInventoryJob failed for variant [{$this->variantId}]: {$e->getMessage()}");
    }
}
