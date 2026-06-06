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


// ─── About ────────────────────────────────────────────────────────────────────

Route::get('/about-us', fn () => view('pages.about-us'))->name('about-us');
Route::get('/rates',    fn () => view('pages.rates'))->name('rates');
Route::get('/gallery',  fn () => view('pages.gallery'))->name('gallery');


// ─── Booking / Contact ────────────────────────────────────────────────────────

Route::get('/bookings-reservations', fn () => view('pages.bookings-reservations'))->name('bookings-reservations');
Route::get('/get-a-quote',           fn () => view('pages.get-a-quote'))->name('get-a-quote');


// ─── Services ─────────────────────────────────────────────────────────────────

Route::get('/airport-shuttle-ohare-midway',   fn () => view('pages.airport-shuttle-ohare-midway'))->name('airport-shuttle-ohare-midway');
Route::get('/wedding-limousine-services',     fn () => view('pages.wedding-limousine-services'))->name('wedding-limousine-services');
Route::get('/party-bus-aurora',               fn () => view('pages.party-bus-aurora'))->name('party-bus-aurora');
Route::get('/party-bus-rental-naperville',    fn () => view('pages.party-bus-rental-naperville'))->name('party-bus-rental-naperville');
Route::get('/prom-party-bus-rental-illinois', fn () => view('pages.prom-party-bus-rental-illinois'))->name('prom-party-bus-rental-illinois');
Route::get('/new-bus-rental',                 fn () => view('pages.new-bus-rental'))->name('new-bus-rental');
Route::get('/coach-buses',                    fn () => view('pages.coach-buses'))->name('coach-buses');
Route::get('/limousine-services',             fn () => view('pages.limousine-services'))->name('limousine-services');
Route::get('/corporate-car-services',         fn () => view('pages.corporate-car-services'))->name('corporate-car-services');
Route::get('/town-car-services',              fn () => view('pages.town-car-services'))->name('town-car-services');
Route::get('/chauffeurs',                     fn () => view('pages.chauffeurs'))->name('chauffeurs');
Route::get('/transportation-services',        fn () => view('pages.transportation-services'))->name('transportation-services');
Route::get('/grad-day-transportation',        fn () => view('pages.grad-day-transportation'))->name('grad-day-transportation');


// ─── Special Events ───────────────────────────────────────────────────────────

Route::get('/six-flags-party-bus',              fn () => view('pages.six-flags-party-bus'))->name('six-flags-party-bus');
Route::get('/chicago-golf-party-bus',           fn () => view('pages.chicago-golf-party-bus'))->name('chicago-golf-party-bus');
Route::get('/chicago-concert-party-bus-rental', fn () => view('pages.chicago-concert-party-bus-rental'))->name('chicago-concert-party-bus-rental');
Route::get('/chicago-bears-party-bus',          fn () => view('pages.chicago-bears-party-bus'))->name('chicago-bears-party-bus');
Route::get('/chicago-bulls-party-bus',          fn () => view('pages.chicago-bulls-party-bus'))->name('chicago-bulls-party-bus');
Route::get('/chicago-blackhawks-party-bus',     fn () => view('pages.chicago-blackhawks-party-bus'))->name('chicago-blackhawks-party-bus');


// ─── City Limo Service Pages ──────────────────────────────────────────────────

Route::get('/new-lenox-airport-shuttle-limo-service',   fn () => view('pages.city-limo-service', ['city' => 'New Lenox',   'state' => 'IL']))->name('city.new-lenox');
Route::get('/naperville-airport-shuttle-limo-service',  fn () => view('pages.city-limo-service', ['city' => 'Naperville',  'state' => 'IL']))->name('city.naperville');
Route::get('/aurora-limo-service',                      fn () => view('pages.city-limo-service', ['city' => 'Aurora',      'state' => 'IL']))->name('city.aurora');
Route::get('/24-7-north-aurora-il-limo-service',        fn () => view('pages.city-limo-service', ['city' => 'North Aurora','state' => 'IL']))->name('city.north-aurora');
Route::get('/plainfield-limousine-shuttle-service',     fn () => view('pages.city-limo-service', ['city' => 'Plainfield',  'state' => 'IL']))->name('city.plainfield');
Route::get('/24-7-joliet-il-limo-services',             fn () => view('pages.city-limo-service', ['city' => 'Joliet',      'state' => 'IL']))->name('city.joliet');
Route::get('/morris-il-limo-service',                   fn () => view('pages.city-limo-service', ['city' => 'Morris',      'state' => 'IL']))->name('city.morris');
Route::get('/24-7-minooka-il-limo-service',             fn () => view('pages.city-limo-service', ['city' => 'Minooka',     'state' => 'IL']))->name('city.minooka');
Route::get('/24-7-channahon-il-limo-service',           fn () => view('pages.city-limo-service', ['city' => 'Channahon',   'state' => 'IL']))->name('city.channahon');
Route::get('/24-7-elwood-il-limo-service',              fn () => view('pages.city-limo-service', ['city' => 'Elwood',      'state' => 'IL']))->name('city.elwood');
Route::get('/romeoville-airport-shuttle-limo-service',  fn () => view('pages.city-limo-service', ['city' => 'Romeoville',  'state' => 'IL']))->name('city.romeoville');
Route::get('/24-7-lockport-il-limo-service',            fn () => view('pages.city-limo-service', ['city' => 'Lockport',    'state' => 'IL']))->name('city.lockport');
Route::get('/24-7-frankfort-il-limo-service',           fn () => view('pages.city-limo-service', ['city' => 'Frankfort',   'state' => 'IL']))->name('city.frankfort');
Route::get('/24-7-mokena-il-limo-service',              fn () => view('pages.city-limo-service', ['city' => 'Mokena',      'state' => 'IL']))->name('city.mokena');
Route::get('/24-7-orland-park-il-limo-service',         fn () => view('pages.city-limo-service', ['city' => 'Orland Park', 'state' => 'IL']))->name('city.orland-park');
Route::get('/24-7-manhattan-limo-service',              fn () => view('pages.city-limo-service', ['city' => 'Manhattan',   'state' => 'IL']))->name('city.manhattan');
Route::get('/24-7-homer-glen-limo-service',             fn () => view('pages.city-limo-service', ['city' => 'Homer Glen',  'state' => 'IL']))->name('city.homer-glen');
Route::get('/24-7-lemont-il-limo-service',              fn () => view('pages.city-limo-service', ['city' => 'Lemont',      'state' => 'IL']))->name('city.lemont');
Route::get('/24-7-monee-il-limo-service',               fn () => view('pages.city-limo-service', ['city' => 'Monee',       'state' => 'IL']))->name('city.monee');
Route::get('/bolingbrook-airport-shuttle-ohare-midway', fn () => view('pages.city-limo-service', ['city' => 'Bolingbrook', 'state' => 'IL']))->name('city.bolingbrook');
Route::get('/oswego-il-limo-service',                   fn () => view('pages.city-limo-service', ['city' => 'Oswego',      'state' => 'IL']))->name('city.oswego');
Route::get('/24-7-montgomery-il-limo-service',          fn () => view('pages.city-limo-service', ['city' => 'Montgomery',  'state' => 'IL']))->name('city.montgomery');


Route::get('/demo', function () {
    return view('pages.demo');
});

Route::get('/demo/premium', function () {
    return view('pages.demo-premium');
})->name('demo.premium');


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
