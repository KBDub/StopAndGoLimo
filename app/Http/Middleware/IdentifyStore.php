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
            // In production: first-party subdomains (e.g. top5pct.dreamstudiosolutions.com)
            // have no tenant store — route the visitor to the admin hub instead of
            // crashing on any storefront route that calls app('current_store').
            if (! app()->isLocal()) {
                $host       = $request->getHost();
                $baseDomain = config('storefront.tenant_base_domain');
                $path       = $request->getPathInfo();

                if (
                    ($host === $baseDomain || str_ends_with($host, '.' . $baseDomain))
                    && ! str_starts_with($path, '/hub')
                    && ! str_starts_with($path, '/api')
                    && ! str_starts_with($path, '/lunar')
                ) {
                    return redirect('/hub', 302);
                }
            }

            return $next($request);
        }

        $store = Store::where('subdomain', $subdomain)
            ->where('is_active', true)
            ->first();

        if (! $store) {
            // Dev preview: the route was explicitly requested — show a plain 404.
            if (app()->isLocal() && $request->route('previewSubdomain')) {
                abort(404, "No active store found for subdomain: {$subdomain}");
            }

            // Real subdomain with no matching tenant (e.g. top5pct.domain.com).
            // Redirect to the root domain so the main site handles the request.
            $baseDomain = config('storefront.tenant_base_domain');
            $scheme     = $request->getScheme();

            return redirect("{$scheme}://{$baseDomain}" . $request->getRequestUri(), 301);
        }

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

        // /  →  used by nav "Home" link and logo
        View::share('storefrontHomeUrl', $previewRoot ?: '/');

        // /cart and /checkout  →  used by cart drawer and cart page CTAs
        View::share('storefrontCartUrl',     $previewRoot . '/cart');
        View::share('storefrontCheckoutUrl', $previewRoot . '/checkout');

        // /order-confirmation  →  used by CheckoutPage redirect after order placed
        View::share('storefrontConfirmationBase', $previewRoot . '/order-confirmation/');

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

        // Block pass-through names — these are first-party subdomains that
        // should be handled by the main site routes, not the tenant storefront.
        if (in_array($subdomain, ['www', 'hub', 'top5pct'], true)) {
            return null;
        }

        return $subdomain;
    }
}
