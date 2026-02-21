<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/demo', function () {
    return view('pages.demo');
});

Route::get('/custom-apparel', function () {
    return view('pages.custom-apparel.index');
})->name('custom-apparel');

Route::get('/custom-apparel/custom-shirts', function () {
    return view('pages.custom-apparel.custom-shirts');
})->name('custom-apparel.custom-shirts');

Route::get('/custom-apparel/dtf-transfers', function () {
    return view('pages.custom-apparel.dtf-transfers');
})->name('custom-apparel.dtf-transfers');

Route::get('/custom-apparel/reunion-shirts', function () {
    return view('pages.custom-apparel.reunion-shirts');
})->name('custom-apparel.reunion-shirts');

Route::get('/custom-apparel/corporate-wear', function () {
    return view('pages.custom-apparel.corporate-wear');
})->name('custom-apparel.corporate-wear');

Route::get('/custom-apparel/spirit-wear', function () {
    return view('pages.custom-apparel.spirit-wear');
})->name('custom-apparel.spirit-wear');

Route::get('/design-it-yourself', function () {
    return view('pages.design-it-yourself.index');
})->name('design-it-yourself');

Route::get('/design-it-yourself/online-designer', function () {
    return view('pages.design-it-yourself.online-designer');
})->name('design-it-yourself.online-designer');

Route::get('/design-it-yourself/design-catalogs', function () {
    return view('pages.design-it-yourself.design-catalogs');
})->name('design-it-yourself.design-catalogs');

Route::get('/signs', function () {
    return view('pages.signs.index');
})->name('signs');

Route::get('/signs/coronavirus-signs', function () {
    return view('pages.signs.coronavirus-signs');
})->name('signs.coronavirus-signs');

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

Route::get('/decals', function () {
    return view('pages.decals.index');
})->name('decals');

Route::get('/decals/coronavirus-decals', function () {
    return view('pages.decals.coronavirus-decals');
})->name('decals.coronavirus-decals');

Route::get('/decals/stickers', function () {
    return view('pages.decals.stickers');
})->name('decals.stickers');

Route::get('/decals/window-wall-floor-decals', function () {
    return view('pages.decals.window-wall-floor-decals');
})->name('decals.window-wall-floor-decals');

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

Route::get('/promotional-items', function () {
    return view('pages.promotional-items');
})->name('promotional-items');

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

Route::get('/page-management', function () {
    $scanner = new \App\Actions\ScanPageComponents();
    $groups = $scanner->execute();
    return view('pages.page-management', compact('groups'));
})->name('page-management');

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

Route::get('/shop', function () {
    return view('pages.collection', [
        'collectionSlug' => null,
        'parentSlug' => null,
        'collectionName' => 'All Products',
        'collectionDescription' => 'Browse our complete catalog of custom signage, apparel, decals, vehicle graphics, and promotional items.',
        'isParentCategory' => false,
        'categoryItems' => [],
    ]);
})->name('shop');
