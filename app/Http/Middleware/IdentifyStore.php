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

        // Build context-aware URL bases so views work correctly under both
        // the real subdomain and the /storefront-preview/{subdomain} dev route.
        $isDevPreview = app()->isLocal() && $request->route('previewSubdomain');
        $previewRoot  = $isDevPreview ? '/storefront-preview/' . $subdomain : '';

        // /product/{slug}  →  used by catalog cards
        View::share('storefrontProductBase', $previewRoot . '/product/');

        // /{slug}  →  used by nav page links
        View::share('storefrontPageBase', $previewRoot . '/');

        // /  →  used by nav "Home" link
        View::share('storefrontHomeUrl', $previewRoot ?: '/');

        return $next($request);
    }

    private function resolveSubdomain(Request $request): ?string
    {
        // Dev preview routes pass the subdomain as a route parameter
        if (app()->isLocal() && $request->route('previewSubdomain')) {
            return $request->route('previewSubdomain');
        }

        $host       = $request->getHost();
        $baseDomain = config('storefront.tenant_base_domain');

        // Must end with the base domain and have a subdomain prefix
        if (! str_ends_with($host, '.' . $baseDomain)) {
            return null;
        }

        $subdomain = str($host)->before('.' . $baseDomain)->toString();

        // Block pass-through names
        if (in_array($subdomain, ['www', 'hub'], true)) {
            return null;
        }

        return $subdomain;
    }
}
