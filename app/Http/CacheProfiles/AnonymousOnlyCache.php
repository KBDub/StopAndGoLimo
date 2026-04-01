<?php

declare(strict_types=1);

namespace App\Http\CacheProfiles;

use Illuminate\Http\Request;
use Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests;

class AnonymousOnlyCache extends CacheAllSuccessfulGetRequests
{
    public function shouldCacheRequest(Request $request): bool
    {
        if (! parent::shouldCacheRequest($request)) {
            return false;
        }

        if (auth()->check()) {
            return false;
        }

        return true;
    }

    public function cacheRequestUntil(Request $request): \DateTime
    {
        return now()->addSeconds(config('responsecache.cache_lifetime_in_seconds'));
    }
}
