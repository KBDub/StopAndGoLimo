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

    public function index(Request $request, string $subdomain): View
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

    public function page(Request $request, string $subdomain, string $slug): View
    {
        $store = app('current_store');
        $page  = $store->pages()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('store.index', [
            'store'    => $store,
            'page'     => $page,
            'sections' => $this->sectionComponents,
        ]);
    }

    public function product(Request $request, string $subdomain, string $slug): View
    {
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
