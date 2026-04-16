<?php

declare(strict_types=1);

namespace App\Observers;

use App\Jobs\CreateTenantStoreJob;
use App\Models\Store;

class StoreObserver
{
    public function created(Store $store): void
    {
        CreateTenantStoreJob::dispatch($store->id);
    }
}
