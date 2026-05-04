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

// ─── Custom Apparel ──────────────────────────────────────────────────────────

Route::get('/custom-apparel', function () {
    return view('pages.custom-apparel.index');
})->name('custom-apparel');

// Keep route; not linked in MM or nav

Route::get('/custom-apparel/screen-printing', function () {
    return view('pages.custom-apparel.screen-printing');
})->name('custom-apparel.screen-printing');

Route::get('/custom-apparel/embroidery', function () {
    return view('pages.custom-apparel.embroidery');
})->name('custom-apparel.embroidery');

Route::get('/custom-apparel/rhinestone-apparel', function () {
    return view('pages.custom-apparel.rhinestone-shirts');
})->name('custom-apparel.rhinestone-apparel');

// Printing Options
Route::get('/custom-apparel/printing-options/dtf-printing', function () {
    return view('pages.custom-apparel.dtf-transfers');
})->name('custom-apparel.dtf-printing');

Route::get('/custom-apparel/printing-options/dye-sublimation-printing', function () {
    return view('pages.custom-apparel.dye-sublimation');
})->name('custom-apparel.dye-sublimation-printing');

// Specialty Materials
Route::get('/custom-apparel/specialty-materials/glitter-shirts', function () {
    return view('pages.custom-apparel.glitter-shirts');
})->name('custom-apparel.glitter-shirts');

Route::get('/custom-apparel/specialty-materials/puff-shirts', function () {
    return view('pages.custom-apparel.puff-shirts');
})->name('custom-apparel.puff-shirts');

Route::get('/custom-apparel/specialty-materials/glow-in-the-dark-shirts', function () {
    return view('pages.custom-apparel.glow-in-the-dark-shirts');
})->name('custom-apparel.glow-in-the-dark-shirts');

Route::get('/custom-apparel/specialty-materials/flock-shirts', function () {
    return view('pages.custom-apparel.flock-shirts');
})->name('custom-apparel.flock-shirts');

Route::get('/custom-apparel/specialty-materials/brick-shirts', function () {
    return view('pages.custom-apparel.brick-shirts');
})->name('custom-apparel.brick-shirts');

Route::get('/custom-apparel/specialty-materials/holographic-shirts', function () {
    return view('pages.custom-apparel.holographic-shirts');
})->name('custom-apparel.holographic-shirts');

Route::get('/custom-apparel/specialty-materials/foil-shirts', function () {
    return view('pages.custom-apparel.foil-shirts');
})->name('custom-apparel.foil-shirts');

Route::get('/custom-apparel/specialty-materials/reflective-shirts', function () {
    return view('pages.custom-apparel.reflective-shirts');
})->name('custom-apparel.reflective-shirts');

// Group Shirts
Route::get('/custom-apparel/group-shirts/reunion-shirts', function () {
    return view('pages.custom-apparel.reunion-shirts');
})->name('custom-apparel.reunion-shirts');

Route::get('/custom-apparel/group-shirts/spirit-wear-shirts', function () {
    return view('pages.custom-apparel.spirit-wear-shirts');
})->name('custom-apparel.spirit-wear-shirts');

Route::get('/custom-apparel/group-shirts/corporate-wear-shirts', function () {
    return view('pages.custom-apparel.corporate-wear-shirts');
})->name('custom-apparel.corporate-wear-shirts');

// ─── Custom Apparel 302 Redirects (temporary — promote to 301 at go-live) ────

Route::redirect('/custom-apparel/dtf-transfers',           '/custom-apparel/printing-options/dtf-printing',        302);
Route::redirect('/custom-apparel/dye-sublimation',         '/custom-apparel/printing-options/dye-sublimation-printing', 302);
Route::redirect('/custom-apparel/rhinestone-shirts',       '/custom-apparel/rhinestone-apparel',                   302);
Route::redirect('/custom-apparel/glitter-shirts',          '/custom-apparel/specialty-materials/glitter-shirts',   302);
Route::redirect('/custom-apparel/puff-shirts',             '/custom-apparel/specialty-materials/puff-shirts',      302);
Route::redirect('/custom-apparel/glow-in-the-dark-shirts', '/custom-apparel/specialty-materials/glow-in-the-dark-shirts', 302);
Route::redirect('/custom-apparel/flock-shirts',            '/custom-apparel/specialty-materials/flock-shirts',     302);
Route::redirect('/custom-apparel/brick-shirts',            '/custom-apparel/specialty-materials/brick-shirts',     302);
Route::redirect('/custom-apparel/holographic-shirts',      '/custom-apparel/specialty-materials/holographic-shirts', 302);
Route::redirect('/custom-apparel/foil-shirts',             '/custom-apparel/specialty-materials/foil-shirts',      302);
Route::redirect('/custom-apparel/reflective-shirts',       '/custom-apparel/specialty-materials/reflective-shirts', 302);
Route::redirect('/custom-apparel/reunion-shirts',          '/custom-apparel/group-shirts/reunion-shirts',          302);
Route::redirect('/custom-apparel/spirit-wear-shirts',      '/custom-apparel/group-shirts/spirit-wear-shirts',      302);
Route::redirect('/custom-apparel/corporate-wear-shirts',   '/custom-apparel/group-shirts/corporate-wear-shirts',   302);

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

// Business Signs
Route::get('/signs/business-signs/banners', function () {
    return view('pages.signs.banners');
})->name('signs.banners');

Route::get('/signs/business-signs/window-signs', function () {
    return view('pages.signs.window-signs');
})->name('signs.window-signs');

Route::get('/signs/business-signs/wall-signs', function () {
    return view('pages.signs.wall-signs');
})->name('signs.wall-signs');

Route::get('/signs/business-signs/floor-signs', function () {
    return view('pages.signs.floor-signs');
})->name('signs.floor-signs');

Route::get('/signs/business-signs/door-signs', function () {
    return view('pages.signs.door-signs');
})->name('signs.door-signs');

Route::get('/signs/business-signs/posters', function () {
    return view('pages.signs.posters');
})->name('signs.posters');

// Ground Signs
Route::get('/signs/ground-signs/yard-signs', function () {
    return view('pages.signs.yard-signs');
})->name('signs.yard-signs');

Route::get('/signs/ground-signs/sidewalk-signs', function () {
    return view('pages.signs.sidewalk-signs');
})->name('signs.sidewalk-signs');

Route::get('/signs/ground-signs/parking-signs', function () {
    return view('pages.signs.parking-signs');
})->name('signs.parking-signs');

// Table Signs
Route::get('/signs/table-signs/table-cloths', function () {
    return view('pages.signs.table-cloths');
})->name('signs.table-cloths');

Route::get('/signs/table-signs/table-runners', function () {
    return view('pages.signs.table-runners');
})->name('signs.table-runners');

// ─── Signs 302 Redirects (temporary — promote to 301 at go-live) ─────────────

Route::redirect('/signs/banners',        '/signs/business-signs/banners',    302);
Route::redirect('/signs/window-signs',   '/signs/business-signs/window-signs', 302);
Route::redirect('/signs/wall-signs',     '/signs/business-signs/wall-signs', 302);
Route::redirect('/signs/floor-signs',    '/signs/business-signs/floor-signs', 302);
Route::redirect('/signs/door-signs',     '/signs/business-signs/door-signs', 302);
Route::redirect('/signs/posters',        '/signs/business-signs/posters',    302);
Route::redirect('/signs/business-signs', '/signs',                           302);
Route::redirect('/signs/yard-signs',     '/signs/ground-signs/yard-signs',   302);
Route::redirect('/signs/sidewalk-signs', '/signs/ground-signs/sidewalk-signs', 302);
Route::redirect('/signs/parking-signs',  '/signs/ground-signs/parking-signs', 302);
Route::redirect('/signs/table-cloths',   '/signs/table-signs/table-cloths',  302);
Route::redirect('/signs/table-runners',  '/signs/table-signs/table-runners', 302);

// ─── Stickers ────────────────────────────────────────────────────────────────

Route::get('/stickers', function () {
    return view('pages.stickers.index');
})->name('stickers');

Route::get('/stickers/standard-stickers-decals', function () {
    return view('pages.stickers.standard-stickers');
})->name('stickers.standard-stickers-decals');

Route::get('/stickers/custom-shaped-stickers-decals', function () {
    return view('pages.stickers.custom-shaped-stickers');
})->name('stickers.custom-shaped-stickers-decals');

// ─── Stickers 302 Redirects (temporary — promote to 301 at go-live) ─────────

Route::redirect('/stickers/standard-stickers',      '/stickers/standard-stickers-decals',      302);
Route::redirect('/stickers/custom-shaped-stickers', '/stickers/custom-shaped-stickers-decals', 302);

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

// ─── About ───────────────────────────────────────────────────────────────────

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::redirect('/about',   '/about-us', 302);
Route::redirect('/company', '/about-us', 302);

Route::get('/stores', function () {
    return view('pages.stores');
})->name('stores');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/articles', function () {
    return view('pages.company.articles');
})->name('articles');

Route::get('/reviews', function () {
    return view('pages.reviews');
})->name('reviews');

Route::redirect('/resources', '/articles', 302);

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-use', function () {
    return view('pages.terms-of-use');
})->name('terms-of-use');

// ─── Legacy PHP Redirects (temporary 302 — promote to 301 at go-live) ────────

Route::redirect('/php/privacy-policy.php', '/privacy-policy', 302);
Route::redirect('/php/terms-of-use.php',   '/terms-of-use',   302);
Route::redirect('/php/faqs.php',            '/articles',       302);
Route::redirect('/dir',                     '/articles',       302);
Route::get('/dir/{any}', function () {
    return redirect('/articles', 302);
})->where('any', '.*');

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
