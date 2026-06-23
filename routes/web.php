<?php

use App\Http\Controllers\StorefrontController;
use Illuminate\Support\Facades\Route;

// ─── First-Party Deployment Domain — serves the main marketing site ──────────
// stopngolimo.dreamstudiosolutions.com is the Replit deployment URL; it is NOT a
// tenant storefront. By registering it explicitly (before the wildcard domain
// group below), Laravel routes it to the main marketing site instead of the
// storefront controller which requires current_store.
Route::domain('stopngolimo.' . env('TENANT_BASE_DOMAIN', 'dreamstudiosolutions.com'))
    ->middleware(['web'])
    ->as('stopngolimo.')
    ->group(base_path('routes/main-site.php'));

// ─── White-Label Storefronts — {subdomain}.TENANT_BASE_DOMAIN ────────────────
Route::domain('{subdomain}.' . env('TENANT_BASE_DOMAIN', 'dreamstudiosolutions.com'))
    ->middleware(['web', 'identify.store'])
    ->group(function () {
        Route::get('/', [StorefrontController::class, 'index'])->name('storefront.index');
        Route::get('/product/{slug}', [StorefrontController::class, 'product'])->name('storefront.product');
        Route::get('/cart', fn () => view('store.cart'))->name('storefront.cart');
        Route::get('/checkout', fn () => view('store.checkout'))->name('storefront.checkout');
        Route::get('/order-confirmation/{orderId}', fn ($subdomain, int $orderId) => view('store.order-confirmation', ['orderId' => $orderId]))->name('storefront.order-confirmation');
        Route::get('/terms', fn () => view('store.terms'))->name('storefront.terms');
        Route::get('/privacy', fn () => view('store.privacy'))->name('storefront.privacy');
        Route::get('/refund-policy', fn () => view('store.refund-policy'))->name('storefront.refund-policy');
        Route::get('/{slug}', [StorefrontController::class, 'page'])
            ->where('slug', '[a-z0-9\-]+')
            ->name('storefront.page');
    });

// ─── Storefront Dev Preview (local only) ─────────────────────────────────────
// Usage: /storefront-preview/{subdomain}
//        /storefront-preview/{subdomain}/product/{slug}
//        /storefront-preview/{subdomain}/{page-slug}
if (app()->isLocal()) {
    Route::prefix('storefront-preview/{previewSubdomain}')
        ->middleware(['web', 'identify.store'])
        ->group(function () {
            Route::get('/', [StorefrontController::class, 'index'])
                ->name('storefront.preview.index');
            Route::get('/product/{slug}', [StorefrontController::class, 'product'])
                ->name('storefront.preview.product');
            Route::get('/cart', fn () => view('store.cart'))
                ->name('storefront.preview.cart');
            Route::get('/checkout', fn () => view('store.checkout'))
                ->name('storefront.preview.checkout');
            Route::get('/order-confirmation/{orderId}', fn ($previewSubdomain, int $orderId) => view('store.order-confirmation', ['orderId' => $orderId]))
                ->name('storefront.preview.order-confirmation');
            Route::get('/terms', fn () => view('store.terms'))
                ->name('storefront.preview.terms');
            Route::get('/privacy', fn () => view('store.privacy'))
                ->name('storefront.preview.privacy');
            Route::get('/refund-policy', fn () => view('store.refund-policy'))
                ->name('storefront.preview.refund-policy');
            Route::get('/{slug}', [StorefrontController::class, 'page'])
                ->where('slug', '[a-z0-9\-]+')
                ->name('storefront.preview.page');
        });
}

// ─── Main Site (no domain constraint — for localhost / dev) ──────────────────
require base_path('routes/main-site.php');
