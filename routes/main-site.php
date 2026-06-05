<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Data\PrimaryLocations;

// ─── Sitemap ─────────────────────────────────────────────────────────────────

Route::get('/sitemap.xml', function () {
    $products = collect();
    $collections = collect();

    try {
        $products = \Lunar\Models\Product::with('urls')
            ->where('status', 'published')
            ->get()
            ->map(fn ($p) => (object)[
                'slug'       => $p->urls->first()?->slug,
                'updated_at' => $p->updated_at,
            ])
            ->filter(fn ($p) => $p->slug)
            ->values();
    } catch (\Throwable) {}

    try {
        $collections = \Lunar\Models\Collection::with('urls')
            ->get()
            ->map(fn ($c) => (object)[
                'slug'       => $c->urls->first()?->slug,
                'updated_at' => $c->updated_at,
            ])
            ->filter(fn ($c) => $c->slug)
            ->values();
    } catch (\Throwable) {}

    return response()
        ->view('sitemaps.sitemap', compact('products', 'collections'))
        ->header('Content-Type', 'application/xml; charset=utf-8');
})->name('sitemap');

Route::get('/sitemap_video.xml', function () {
    return response()
        ->view('sitemaps.sitemap-video')
        ->header('Content-Type', 'application/xml; charset=utf-8');
})->name('sitemap.video');

Route::get('/sitemap_images.xml', function () {
    return response()
        ->view('sitemaps.sitemap-images')
        ->header('Content-Type', 'application/xml; charset=utf-8');
})->name('sitemap.images');

// ─── Main Site ───────────────────────────────────────────────────────────────

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/our-services', function () {
    return view('pages.our-services');
})->name('our-services');

Route::get('/special-event-limousine', function () {
    return view('pages.special-event-limousine');
})->name('special-event-limousine');

Route::get('/demo', function () {
    return view('pages.demo');
});

Route::get('/demo/premium', function () {
    return view('pages.demo-premium');
})->name('demo.premium');

Route::get('/demo/modals', function () {
    return view('pages.demo.modals');
})->name('demo.modals');


// ─── Service Area ────────────────────────────────────────────────────────────

Route::get('/service-areas', function () {
    return view('pages.service-areas');
})->name('service-areas');

Route::get('/service-areas/{slug}', function (string $slug) {
    $city = collect(PrimaryLocations::all())->first(
        fn ($loc) => Str::slug(($loc['city'] ?? $loc['name']) . '-' . $loc['state']) === $slug
    );

    if (! $city) {
        abort(404);
    }

    return view('pages.service-areas.show', compact('city', 'slug'));
})->name('service-areas.show');


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

Route::get('/stripe/return', \App\Http\Controllers\StripeReturnController::class)
    ->name('stripe.return');

Route::get('/order-confirmation/{orderId}', function (int $orderId) {
    return view('pages.order-confirmation', ['orderId' => $orderId]);
})->name('order-confirmation');

Route::post('/contact/message', [\App\Http\Controllers\ContactController::class, 'sendMessage'])
    ->name('contact.message');

Route::post('/custom-order/submit', [\App\Http\Controllers\CustomOrderController::class, 'submit'])
    ->name('custom-order.submit');

Route::post('/custom-order/dtf-cart', [\App\Http\Controllers\CustomOrderController::class, 'dtfCart'])
    ->name('custom-order.dtf-cart');
