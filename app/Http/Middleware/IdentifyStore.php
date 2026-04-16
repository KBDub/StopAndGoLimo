<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\Store;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class IdentifyStore
{
    public function handle(Request $request, Closure $next): Response
    {
        $host      = $request->getHost();
        $parts     = explode('.', $host);
        $subdomain = $parts[0];

        // Pass through for main domain and Lunar Hub
        if (in_array($subdomain, ['www', 'top5pct', 'hub'], true)) {
            return $next($request);
        }

        // Only intercept *.top5pct.com subdomains
        if (count($parts) < 3) {
            return $next($request);
        }

        $store = Store::where('subdomain', $subdomain)
            ->where('is_active', true)
            ->firstOrFail();

        // 1. Bind globally — accessible anywhere via app('current_store')
        app()->instance('current_store', $store);

        // 2. Scope all Lunar product/pricing queries to this store's channel
        if ($store->channel) {
            \Lunar\Facades\Channels::setCurrent($store->channel->handle);
        }

        // 3. Share with all Blade views
        View::share('currentStore', $store);

        return $next($request);
    }
}
