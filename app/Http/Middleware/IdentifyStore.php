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
        $subdomain = $this->resolveSubdomain($request);

        if ($subdomain === null) {
            return $next($request);
        }

        $store = Store::where('subdomain', $subdomain)
            ->where('is_active', true)
            ->firstOrFail();

        app()->instance('current_store', $store);

        if ($store->channel) {
            \Lunar\Facades\StorefrontSession::setChannel($store->channel);
        }

        View::share('currentStore', $store);

        return $next($request);
    }

    private function resolveSubdomain(Request $request): ?string
    {
        // Dev preview routes pass the subdomain as a route parameter
        if (app()->isLocal() && $request->route('previewSubdomain')) {
            return $request->route('previewSubdomain');
        }

        $host  = $request->getHost();
        $parts = explode('.', $host);

        // Pass through for main domain and Lunar Hub
        if (in_array($parts[0], ['www', 'top5pct', 'hub'], true)) {
            return null;
        }

        // Only intercept *.top5pct.com subdomains (3+ parts)
        if (count($parts) < 3) {
            return null;
        }

        return $parts[0];
    }
}
