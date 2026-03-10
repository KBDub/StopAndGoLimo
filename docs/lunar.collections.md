# Lunar Collections & Product Display Architecture

This document explains how product collections are displayed across the site, the routing system behind them, and the distinction between static landing pages and dynamic collection pages.

---

## Two Page Systems

The site uses two separate systems for displaying product-related content. Understanding the distinction is critical for adding new pages or modifying existing ones.

### 1. Static Landing Pages (Marketing / SEO Pages)

These are handcrafted Blade views with hardcoded routes. They do not query Lunar for products. Their purpose is to serve as marketing funnels and SEO-optimized entry points.

**Characteristics:**
- Route defined explicitly in `routes/web.php` as a closure returning a specific Blade view
- No `/collections` prefix in the URL
- Content is composed of static section components (hero banners, CTAs, testimonials, etc.)
- No product grid, no filtering, no Meilisearch integration
- Each page has its own Blade file in `resources/views/pages/`

**Example routes:**
```
/custom-apparel/custom-shirts   → resources/views/pages/custom-apparel/custom-shirts.blade.php
/custom-apparel/custom-hoodies  → resources/views/pages/custom-apparel/custom-hoodies.blade.php
/top5pct-merchandise            → resources/views/pages/top5pct-merchandise.blade.php
```

**Example route definition:**
```php
Route::get('/custom-apparel/custom-shirts', function () {
    return view('pages.custom-apparel.custom-shirts');
});
```

**Typical sections used:**
- `category-hero` — hero banner with heading, description, CTAs
- `banner-medium-sunburst` — decorative divider
- `top5pct-same-day-service` — service highlight
- `why-choose-us` — trust/value proposition
- `cta-free-quote` — lead generation
- `cta-ready-to-get-started` — conversion CTA
- `review-banner` — customer testimonials
- `map-section` — location/contact

### 2. Dynamic Collection Pages (Shopping / Browsing)

These pages query Lunar's collection database and use Meilisearch to display a filterable, sortable product grid. They are the actual shopping experience.

**Characteristics:**
- Routes use the `/collections` prefix
- Products are fetched dynamically from Meilisearch based on collection membership
- Faceted filtering (color, size, material, etc.), sorting, and pagination
- Handled by the `catalog.collection-page` Livewire component
- All use the shared `resources/views/pages/collection.blade.php` view

**Route patterns:**
```
/collections/{slug}            → Top-level collection (e.g., /collections/custom-apparel)
/collections/{parent}/{child}  → Sub-collection (e.g., /collections/custom-apparel/custom-shirts)
```

**Route definitions:**
```php
// Top-level collection
Route::get('/collections/{slug}', function (string $slug) {
    $collection = \Lunar\Models\Collection::whereHas('urls', function ($q) use ($slug) {
        $q->where('slug', $slug);
    })->first();

    if (! $collection) {
        abort(404);
    }

    // Fetch collection name, description, children...
    return view('pages.collection', [
        'collectionSlug' => $slug,
        'parentSlug' => null,
        'collectionName' => $collectionName,
        'collectionDescription' => $description,
        'isParentCategory' => $children->isNotEmpty(),
        'categoryItems' => $categoryItems,
    ]);
})->name('collections.show');

// Sub-collection
Route::get('/collections/{parent}/{child}', function (string $parent, string $child) {
    // Lookup parent and child collections by slug...
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
```

**How it works internally:**
1. The route looks up a `Lunar\Models\Collection` by matching its URL slug
2. For parent collections, it also fetches child collections to display as sub-category links
3. The `pages/collection.blade.php` view renders the Livewire component
4. The `catalog.collection-page` Livewire component queries Meilisearch with the collection slug
5. Meilisearch returns filtered, sorted products with facet counts
6. The product grid renders with filtering sidebar, sorting controls, and pagination

---

## Hybrid Pages

Some pages combine both approaches. The `/top5pct-merchandise` page is a hybrid:

- It is a **static landing page** with marketing sections (hero, CTAs, testimonials)
- It **also embeds** the `catalog.collection-page` Livewire component for a live product grid
- When `collectionSlug` is `null`, the Livewire component shows **all products** (no collection filter)

**File:** `resources/views/pages/top5pct-merchandise.blade.php`

```blade
<x-layouts.page title="Top 5% Merchandise" currentPage="store">
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />

    {{-- All Products section — Livewire component with null slug shows everything --}}
    <section id="all-products" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            @livewire('catalog.collection-page', [
                'collectionSlug' => null,
                'parentSlug' => null,
            ])
        </div>
    </section>

    <x-sections.top5pct-same-day-service ... />
    <x-sections.why-choose-us />
    ...
</x-layouts.page>
```

This is the **primary shop page** for the site. It replaced the old `/shop` route.

---

## URL Mapping Summary

| URL Pattern | Type | Source | Products Shown |
|---|---|---|---|
| `/top5pct-merchandise` | Hybrid (static + Livewire) | `pages/top5pct-merchandise.blade.php` | All products (no filter) |
| `/custom-apparel/custom-shirts` | Static landing | `pages/custom-apparel/custom-shirts.blade.php` | None (marketing only) |
| `/collections/custom-apparel` | Dynamic collection | `pages/collection.blade.php` | Products in custom-apparel collection |
| `/collections/custom-apparel/custom-shirts` | Dynamic sub-collection | `pages/collection.blade.php` | Products in custom-shirts sub-collection |
| `/products/{slug}` | Product detail | `catalog.product-detail` Livewire | Single product |

---

## How Collections Are Created

Collections are managed in the Lunar Hub admin panel (`/hub`). They are:

1. Created with a name, description, and URL slug
2. Organized in a parent-child hierarchy (e.g., Custom Apparel → Custom Shirts)
3. Products are assigned to collections in the admin panel
4. The database seeder (`database/seeders/`) pre-populates 30 hierarchical collections

**Database tables involved:**
- `lunar_collections` — the collection records
- `lunar_collection_product` — pivot table linking products to collections
- `lunar_urls` — polymorphic URL slugs for collections and products

---

## The Livewire Component: catalog.collection-page

**File:** `app/Livewire/Catalog/CollectionPage.php`

**Key properties:**
- `collectionSlug` — which collection to filter by (`null` = all products)
- `parentSlug` — parent collection slug for breadcrumb context
- Supports faceted filters, sorting, pagination via Meilisearch

**Blade view:** `resources/views/livewire/catalog/collection-page.blade.php`

---

## Adding a New Collection Page

**To add a new dynamic collection page:**
1. Create the collection in Lunar Hub with a URL slug
2. Assign products to the collection
3. The `/collections/{slug}` route handles it automatically

**To add a new static landing page:**
1. Create a Blade view in `resources/views/pages/`
2. Add a route in `routes/web.php` pointing to the view
3. Compose the page using section components from `resources/views/components/sections/`

**To add a hybrid page (static + products):**
1. Create the Blade view with marketing sections
2. Embed `@livewire('catalog.collection-page', ['collectionSlug' => 'your-slug'])` where the product grid should appear
3. Add the route in `routes/web.php`

---

## Deprecated Routes

| Old Route | Replacement | Notes |
|---|---|---|
| `/shop` | `/top5pct-merchandise` | Removed in March 2026. All internal links updated. |
| `/store` | `/top5pct-merchandise` | Intermediate rename, never published long-term. |
