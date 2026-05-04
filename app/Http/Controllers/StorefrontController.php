<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\StorePage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StorefrontController extends Controller
{
    protected array $sectionComponents = [
        'hero'      => 'store.hero',
        'countdown' => 'store.event-countdown',
        'calendar'  => 'store.event-calendar',
        'catalog'   => 'store.catalog',
        'roster'    => 'store.roster-grid',
    ];

    public function index(Request $request, ?string $subdomain = null): View
    {
        $store = app('current_store');
        $page  = $store->pages()->where('slug', '')->where('is_active', true)->first();

        if (! $page) {
            $page           = new StorePage();
            $page->title    = $store->name;
            $page->sections = ['hero', 'countdown', 'catalog', 'calendar', 'roster'];
        }

        return view('store.index', [
            'store'    => $store,
            'page'     => $page,
            'sections' => $this->sectionComponents,
        ]);
    }

    public function page(Request $request): View
    {
        // Read route param by name to avoid positional injection conflicts
        // (the preview group also passes {previewSubdomain} as a sibling param).
        $slug  = $request->route('slug');
        $store = app('current_store');
        $page  = $store->pages()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('store.page', [
            'store' => $store,
            'page'  => $page,
        ]);
    }

    public function product(Request $request): View
    {
        // Read route param by name — avoids positional injection when the
        // preview route group adds {previewSubdomain} as a sibling parameter.
        $slug    = $request->route('slug');
        $store   = app('current_store');
        $product = \Lunar\Models\Product::whereHas('urls', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->where('status', 'published')->firstOrFail();

        return view('store.product', [
            'store'   => $store,
            'product' => $product,
            'slug'    => $slug,
        ]);
    }
}
