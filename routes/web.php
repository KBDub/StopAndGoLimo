<?php

use App\Http\Controllers\StorefrontController;
use Illuminate\Support\Facades\Route;

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

// ─── Main Site ───────────────────────────────────────────────────────────────

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/top5pct-merchandise', function () {
    return view('pages.top5pct-merchandise');
})->name('store');

Route::get('/demo', function () {
    return view('pages.demo');
});

Route::get('/demo/premium', function () {
    return view('pages.demo-premium');
})->name('demo.premium');

Route::get('/demo/modals', function () {
    return view('pages.demo.modals');
})->name('demo.modals');

// ─── Custom Apparel ─────────────────────────────────────────────────────────

Route::get('/custom-apparel', function () {
    return view('pages.custom-apparel.index');
})->name('custom-apparel');

Route::get('/custom-apparel/custom-shirts', function () {
    return view('pages.custom-apparel.custom-shirts');
})->name('custom-apparel.custom-shirts');

Route::get('/custom-apparel/vinyl-shirts', function () {
    return view('pages.custom-apparel.vinyl-shirts');
})->name('custom-apparel.vinyl-shirts');

Route::get('/custom-apparel/rhinestone-shirts', function () {
    return view('pages.custom-apparel.rhinestone-shirts');
})->name('custom-apparel.rhinestone-shirts');

Route::get('/custom-apparel/glitter-shirts', function () {
    return view('pages.custom-apparel.glitter-shirts');
})->name('custom-apparel.glitter-shirts');

Route::get('/custom-apparel/foil-shirts', function () {
    return view('pages.custom-apparel.foil-shirts');
})->name('custom-apparel.foil-shirts');

Route::get('/custom-apparel/glow-in-the-dark-shirts', function () {
    return view('pages.custom-apparel.glow-in-the-dark-shirts');
})->name('custom-apparel.glow-in-the-dark-shirts');

Route::get('/custom-apparel/flock-shirts', function () {
    return view('pages.custom-apparel.flock-shirts');
})->name('custom-apparel.flock-shirts');

Route::get('/custom-apparel/reflective-shirts', function () {
    return view('pages.custom-apparel.reflective-shirts');
})->name('custom-apparel.reflective-shirts');

Route::get('/custom-apparel/holographic-shirts', function () {
    return view('pages.custom-apparel.holographic-shirts');
})->name('custom-apparel.holographic-shirts');

Route::get('/custom-apparel/brick-shirts', function () {
    return view('pages.custom-apparel.brick-shirts');
})->name('custom-apparel.brick-shirts');

Route::get('/custom-apparel/pattern-shirts', function () {
    return view('pages.custom-apparel.pattern-shirts');
})->name('custom-apparel.pattern-shirts');

Route::get('/custom-apparel/embroidery', function () {
    return view('pages.custom-apparel.embroidery');
})->name('custom-apparel.embroidery');

Route::get('/custom-apparel/picture-shirts', function () {
    return view('pages.custom-apparel.picture-shirts');
})->name('custom-apparel.picture-shirts');

Route::get('/custom-apparel/dtf-transfers', function () {
    return view('pages.custom-apparel.dtf-transfers');
})->name('custom-apparel.dtf-transfers');

Route::get('/custom-apparel/reunion-shirts', function () {
    return view('pages.custom-apparel.reunion-shirts');
})->name('custom-apparel.reunion-shirts');

Route::get('/custom-apparel/corporate-wear-shirts', function () {
    return view('pages.custom-apparel.corporate-wear-shirts');
})->name('custom-apparel.corporate-wear-shirts');

Route::get('/custom-apparel/spirit-wear-shirts', function () {
    return view('pages.custom-apparel.spirit-wear-shirts');
})->name('custom-apparel.spirit-wear-shirts');

// New custom apparel sub-pages
Route::get('/custom-apparel/dye-sublimation', function () {
    return view('pages.custom-apparel.dye-sublimation');
})->name('custom-apparel.dye-sublimation');

Route::get('/custom-apparel/screen-printing', function () {
    return view('pages.custom-apparel.screen-printing');
})->name('custom-apparel.screen-printing');

Route::get('/custom-apparel/puff-shirts', function () {
    return view('pages.custom-apparel.puff-shirts');
})->name('custom-apparel.puff-shirts');

// ─── Design Services ─────────────────────────────────────────────────────────

Route::get('/design-services', function () {
    return view('pages.design-services.index');
})->name('design-services');

Route::get('/design-services/online-designer', function () {
    return view('pages.design-services.online-designer');
})->name('design-services.online-designer');

Route::get('/design-services/design-catalogs', function () {
    return view('pages.design-services.design-catalogs');
})->name('design-services.design-catalogs');

Route::get('/design-services/logo-design', function () {
    return view('pages.design-services.logo-design');
})->name('design-services.logo-design');

Route::get('/design-services/graphic-design', function () {
    return view('pages.design-services.graphic-design');
})->name('design-services.graphic-design');

Route::get('/design-services/custom-storefronts', function () {
    return view('pages.design-services.custom-storefronts');
})->name('design-services.custom-storefronts');

// ─── Signs ───────────────────────────────────────────────────────────────────

Route::get('/signs', function () {
    return view('pages.signs.index');
})->name('signs');

Route::get('/signs/business-signs', function () {
    return view('pages.signs.business-signs');
})->name('signs.business-signs');

Route::get('/signs/banners', function () {
    return view('pages.signs.banners');
})->name('signs.banners');

Route::get('/signs/posters', function () {
    return view('pages.signs.posters');
})->name('signs.posters');

Route::get('/signs/table-runners', function () {
    return view('pages.signs.table-runners');
})->name('signs.table-runners');

Route::get('/signs/sidewalk-signs', function () {
    return view('pages.signs.sidewalk-signs');
})->name('signs.sidewalk-signs');

Route::get('/signs/yard-signs', function () {
    return view('pages.signs.yard-signs');
})->name('signs.yard-signs');

// New signs sub-pages
Route::get('/signs/window-signs', function () {
    return view('pages.signs.window-signs');
})->name('signs.window-signs');

Route::get('/signs/wall-signs', function () {
    return view('pages.signs.wall-signs');
})->name('signs.wall-signs');

Route::get('/signs/floor-signs', function () {
    return view('pages.signs.floor-signs');
})->name('signs.floor-signs');

Route::get('/signs/door-signs', function () {
    return view('pages.signs.door-signs');
})->name('signs.door-signs');

Route::get('/signs/parking-signs', function () {
    return view('pages.signs.parking-signs');
})->name('signs.parking-signs');

Route::get('/signs/table-cloths', function () {
    return view('pages.signs.table-cloths');
})->name('signs.table-cloths');

// ─── Stickers ────────────────────────────────────────────────────────────────

Route::get('/stickers', function () {
    return view('pages.stickers.index');
})->name('stickers');

Route::get('/stickers/standard-stickers', function () {
    return view('pages.stickers.standard-stickers');
})->name('stickers.standard-stickers');

Route::get('/stickers/custom-shaped-stickers', function () {
    return view('pages.stickers.custom-shaped-stickers');
})->name('stickers.custom-shaped-stickers');

// ─── Vehicle Graphics ────────────────────────────────────────────────────────

Route::get('/vehicle-graphics', function () {
    return view('pages.vehicle-graphics.index');
})->name('vehicle-graphics');

Route::get('/vehicle-graphics/automobile-graphics', function () {
    return view('pages.vehicle-graphics.automobile-graphics');
})->name('vehicle-graphics.automobile-graphics');

Route::get('/vehicle-graphics/vehicle-magnets', function () {
    return view('pages.vehicle-graphics.vehicle-magnets');
})->name('vehicle-graphics.vehicle-magnets');

Route::get('/vehicle-graphics/dot-decals', function () {
    return view('pages.vehicle-graphics.dot-decals');
})->name('vehicle-graphics.dot-decals');

// ─── Promotional Items ───────────────────────────────────────────────────────

Route::get('/promotional-items', function () {
    return view('pages.promotional-items');
})->name('promotional-items');

Route::get('/promotional-items/mugs', function () {
    return view('pages.promotional-items.mugs');
})->name('promotional-items.mugs');

Route::get('/promotional-items/can-koozies', function () {
    return view('pages.promotional-items.can-koozies');
})->name('promotional-items.can-koozies');

Route::get('/promotional-items/towels', function () {
    return view('pages.promotional-items.towels');
})->name('promotional-items.towels');

Route::get('/promotional-items/drink-coasters', function () {
    return view('pages.promotional-items.drink-coasters');
})->name('promotional-items.drink-coasters');

Route::get('/promotional-items/tote-bags', function () {
    return view('pages.promotional-items.tote-bags');
})->name('promotional-items.tote-bags');

Route::get('/promotional-items/mouse-pads', function () {
    return view('pages.promotional-items.mouse-pads');
})->name('promotional-items.mouse-pads');

// ─── Company / About ─────────────────────────────────────────────────────────

Route::get('/stores', function () {
    return view('pages.stores');
})->name('stores');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/company', function () {
    return view('pages.company.index');
})->name('company');

Route::get('/resources', function () {
    return view('pages.company.resources');
})->name('resources');

// ─── Page Management ─────────────────────────────────────────────────────────

Route::get('/page-management', function () {
    $scanner = new \App\Actions\ScanPageComponents();
    $groups = $scanner->execute();
    return view('pages.page-management', compact('groups'));
})->name('page-management');

// ─── Collections ─────────────────────────────────────────────────────────────

Route::get('/collections/{slug}', function (string $slug) {
    $collection = \Lunar\Models\Collection::whereHas('urls', function ($q) use ($slug) {
        $q->where('slug', $slug);
    })->first();

    if (! $collection) {
        abort(404);
    }

    $collectionName = $collection->translateAttribute('name');
    $description = strip_tags($collection->translateAttribute('description') ?? '');

    $children = $collection->children()->with('urls')->get();
    $categoryItems = $children->map(function ($child) use ($slug) {
        $childSlug = $child->urls->first()?->slug ?? '';
        $childName = $child->translateAttribute('name');
        $childDesc = strip_tags($child->translateAttribute('description') ?? '');
        return [
            'title' => $childName,
            'description' => $childDesc ?: "Browse our {$childName} collection.",
            'linkText' => "View {$childName} →",
            'linkHref' => "/collections/{$slug}/{$childSlug}",
            'seoTitle' => $childName,
            'seoDescription' => $childDesc ?: "Premium {$childName} by Top 5 Percent in Joliet, IL.",
            'seoLinkText' => "View {$childName} →",
        ];
    })->toArray();

    return view('pages.collection', [
        'collectionSlug' => $slug,
        'parentSlug' => null,
        'collectionName' => $collectionName,
        'collectionDescription' => $description,
        'isParentCategory' => $children->isNotEmpty(),
        'categoryItems' => $categoryItems,
    ]);
})->name('collections.show');

Route::get('/collections/{parent}/{child}', function (string $parent, string $child) {
    $parentCollection = \Lunar\Models\Collection::whereHas('urls', function ($q) use ($parent) {
        $q->where('slug', $parent);
    })->first();

    $collection = \Lunar\Models\Collection::whereHas('urls', function ($q) use ($child) {
        $q->where('slug', $child);
    })->first();

    if (! $collection) {
        abort(404);
    }

    $collectionName = $collection->translateAttribute('name');
    $parentName = $parentCollection?->translateAttribute('name') ?? '';
    $description = strip_tags($collection->translateAttribute('description') ?? '');

    return view('pages.collection', [
        'collectionSlug' => $child,
        'parentSlug' => $parent,
        'collectionName' => $collectionName,
        'collectionDescription' => $description,
        'parentCategoryName' => $parentName,
        'isParentCategory' => false,
        'categoryItems' => [],
    ]);
})->name('collections.child');

// ─── Products ────────────────────────────────────────────────────────────────

Route::get('/products/{slug}', function (string $slug) {
    $product = \Lunar\Models\Product::whereHas('urls', function ($q) use ($slug) {
        $q->where('slug', $slug);
    })->where('status', 'published')->first();

    if (! $product) {
        abort(404);
    }

    return view('pages.product', [
        'slug' => $slug,
        'productName' => $product->translateAttribute('name'),
        'productDescription' => \Illuminate\Support\Str::limit($product->translateAttribute('description'), 160),
    ]);
})->name('products.show');

// ─── Cart & Checkout ─────────────────────────────────────────────────────────

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/order-confirmation/{orderId}', function (int $orderId) {
    return view('pages.order-confirmation', ['orderId' => $orderId]);
})->name('order-confirmation');
