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


// ─── City / Service Area Pages ────────────────────────────────────────────────

Route::get('/new-lenox-airport-shuttle-limo-service',   fn () => view('pages.new-lenox-airport-shuttle-limo-service'))->name('new-lenox-airport-shuttle-limo-service');
Route::get('/naperville-airport-shuttle-limo-service',  fn () => view('pages.naperville-airport-shuttle-limo-service'))->name('naperville-airport-shuttle-limo-service');
Route::get('/aurora-limo-service',                      fn () => view('pages.aurora-limo-service'))->name('aurora-limo-service');
Route::get('/24-7-north-aurora-il-limo-service',        fn () => view('pages.24-7-north-aurora-il-limo-service'))->name('24-7-north-aurora-il-limo-service');
Route::get('/plainfield-limousine-shuttle-service',     fn () => view('pages.plainfield-limousine-shuttle-service'))->name('plainfield-limousine-shuttle-service');
Route::get('/24-7-joliet-il-limo-services',             fn () => view('pages.24-7-joliet-il-limo-services'))->name('24-7-joliet-il-limo-services');
Route::get('/morris-il-limo-service',                   fn () => view('pages.morris-il-limo-service'))->name('morris-il-limo-service');
Route::get('/24-7-minooka-il-limo-service',             fn () => view('pages.24-7-minooka-il-limo-service'))->name('24-7-minooka-il-limo-service');
Route::get('/24-7-channahon-il-limo-service',           fn () => view('pages.24-7-channahon-il-limo-service'))->name('24-7-channahon-il-limo-service');
Route::get('/24-7-elwood-il-limo-service',              fn () => view('pages.24-7-elwood-il-limo-service'))->name('24-7-elwood-il-limo-service');
Route::get('/romeoville-airport-shuttle-limo-service',  fn () => view('pages.romeoville-airport-shuttle-limo-service'))->name('romeoville-airport-shuttle-limo-service');
Route::get('/24-7-lockport-il-limo-service',            fn () => view('pages.24-7-lockport-il-limo-service'))->name('24-7-lockport-il-limo-service');
Route::get('/24-7-frankfort-il-limo-service',           fn () => view('pages.24-7-frankfort-il-limo-service'))->name('24-7-frankfort-il-limo-service');
Route::get('/24-7-mokena-il-limo-service',              fn () => view('pages.24-7-mokena-il-limo-service'))->name('24-7-mokena-il-limo-service');
Route::get('/24-7-orland-park-il-limo-service',         fn () => view('pages.24-7-orland-park-il-limo-service'))->name('24-7-orland-park-il-limo-service');
Route::get('/24-7-manhattan-limo-service',              fn () => view('pages.24-7-manhattan-limo-service'))->name('24-7-manhattan-limo-service');
Route::get('/24-7-homer-glen-limo-service',             fn () => view('pages.24-7-homer-glen-limo-service'))->name('24-7-homer-glen-limo-service');
Route::get('/24-7-lemont-il-limo-service',              fn () => view('pages.24-7-lemont-il-limo-service'))->name('24-7-lemont-il-limo-service');
Route::get('/24-7-monee-il-limo-service',               fn () => view('pages.24-7-monee-il-limo-service'))->name('24-7-monee-il-limo-service');
Route::get('/bolingbrook-airport-shuttle-ohare-midway', fn () => view('pages.bolingbrook-airport-shuttle-ohare-midway'))->name('bolingbrook-airport-shuttle-ohare-midway');
Route::get('/oswego-il-limo-service',                   fn () => view('pages.oswego-il-limo-service'))->name('oswego-il-limo-service');
Route::get('/24-7-montgomery-il-limo-service',          fn () => view('pages.24-7-montgomery-il-limo-service'))->name('24-7-montgomery-il-limo-service');


Route::get('/demo', function () {
    return view('pages.demo');
});

Route::get('/demo/premium', function () {
    return view('pages.demo-premium');
})->name('demo.premium');

Route::get('/demo/live-components', function () {
    return view('pages.demo-live-components');
})->name('demo.live-components');


// ─── Service Area ────────────────────────────────────────────────────────────

Route::get('/service-areas', function () {
    return view('pages.service-areas');
})->name('service-areas');



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
