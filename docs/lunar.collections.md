# Lunar Collections & Product Display Architecture

This document explains how product category pages are built, how the navigation routes to them, how search engines and AI crawlers discover them, and how to add new pages.

---

## Architecture: Hybrid Pages (The Standard)

Every product category page on the site follows the **hybrid page** pattern. A hybrid page combines:

1. **Static marketing sections** at the top and bottom (hero banners, CTAs, testimonials, trust badges)
2. **An embedded Livewire product grid** in the middle (filterable, sortable, paginated via Meilisearch)

This gives every page the best of both worlds:
- Rich, hand-crafted marketing content for SEO and conversion
- A live, interactive product browsing experience powered by Lunar and Meilisearch

### Reference Implementation: `/top5pct-merchandise`

**File:** `resources/views/pages/top5pct-merchandise.blade.php`

```blade
<x-layouts.page title="Top 5% Merchandise" currentPage="store">
    {{-- Static marketing sections --}}
    <x-sections.category-hero
        preHeading="Veteran Owned - Joliet, IL"
        heading="Top 5% Merchandise"
        headingAccent="Rep the Brand"
        description="Shop our exclusive line of Top 5 Percent branded merchandise..."
        primaryButtonText="Shop Now"
        primaryButtonHref="#all-products"
        secondaryButtonText="Contact Us"
        secondaryButtonHref="/contact"
    />
    <x-ui.banner-medium-sunburst />

    {{-- Embedded product grid — collectionSlug filters products, null = all --}}
    <section id="all-products" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            @livewire('catalog.collection-page', [
                'collectionSlug' => null,
                'parentSlug' => null,
            ])
        </div>
    </section>

    {{-- More static marketing sections --}}
    <x-sections.top5pct-same-day-service serviceType="merchandise" displayServiceType="Merchandise" />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
```

### How the Livewire Component Works

The `catalog.collection-page` Livewire component is the engine behind the product grid.

**File:** `app/Livewire/Catalog/CollectionPage.php`
**View:** `resources/views/livewire/catalog/collection-page.blade.php`

**Key properties:**
- `collectionSlug` — which Lunar collection to filter by. When `null`, it shows **all products** across the entire catalog.
- `parentSlug` — parent collection slug, used for breadcrumb context in nested collections.

**What it does at render time:**
1. If `collectionSlug` is provided, it looks up the matching `Lunar\Models\Collection` by its URL slug in the `lunar_urls` table
2. It queries Meilisearch with the collection filter (or no filter if `null`)
3. Meilisearch returns products with facet counts for the filtering sidebar
4. The component renders a product grid with:
   - Faceted filtering (color, size, material, etc.)
   - Sorting (price, name, newest)
   - Pagination
   - Product cards linking to `/products/{slug}` detail pages

### Controlling Which Products Appear

The `collectionSlug` parameter determines what products the grid shows:

| `collectionSlug` Value | Products Shown |
|---|---|
| `null` | All products in the catalog (no filter) |
| `'custom-apparel'` | Only products assigned to the "Custom Apparel" collection |
| `'custom-shirts'` | Only products assigned to the "Custom Shirts" sub-collection |

Products are assigned to collections in the Lunar Hub admin panel (`/hub`). The assignment is stored in the `lunar_collection_product` pivot table.

---

## Navigation & Routing

### How the Navigation Bar Links to Hybrid Pages

Every link in the navigation bar points directly to a hybrid page. The nav does **not** link to `/collections/` routes.

**Current nav structure (desktop):**

| Nav Item | URL | Page File |
|---|---|---|
| Home | `/` | `pages/home.blade.php` |
| Custom Apparel (dropdown) | `/custom-apparel/custom-shirts`, etc. | `pages/custom-apparel/*.blade.php` |
| Design It Yourself | `/design-it-yourself` | `pages/design-it-yourself.blade.php` |
| Signs (dropdown) | `/signs/...` | `pages/signs/*.blade.php` |
| Decals (dropdown) | `/decals/...` | `pages/decals/*.blade.php` |
| Vehicle Graphics | `/vehicle-graphics` | `pages/vehicle-graphics.blade.php` |
| Promotional Items | `/collections/promotional-items` | `pages/collection.blade.php` (dynamic) |
| Top 5% Merchandise | `/top5pct-merchandise` | `pages/top5pct-merchandise.blade.php` |
| Black Doll Apparel | `https://blackdollbytop5.com/` | External link |
| About (dropdown) | `/about`, `/portfolio`, `/contact` | Various |

**Migration in progress:** Some nav items still point to old static-only or dynamic-only pages. These need to be converted to hybrid pages following the standard pattern. Each page should embed the appropriate `@livewire('catalog.collection-page', ['collectionSlug' => '...'])` with its matching Lunar collection slug.

### Route Structure

Each hybrid page has an explicit route in `routes/web.php`:

```php
Route::get('/top5pct-merchandise', function () {
    return view('pages.top5pct-merchandise');
})->name('store');

Route::get('/custom-apparel/custom-shirts', function () {
    return view('pages.custom-apparel.custom-shirts');
});
```

The `/collections/` catch-all routes still exist in `routes/web.php` as a fallback:

```php
Route::get('/collections/{slug}', ...)->name('collections.show');
Route::get('/collections/{parent}/{child}', ...)->name('collections.child');
```

These `/collections/` routes serve as:
- A fallback for any collection that doesn't yet have a dedicated hybrid page
- Programmatic access for internal use (breadcrumbs, category card links on parent pages)
- They will eventually be either removed or set to `noindex` once all collections have dedicated hybrid pages

---

## Converting Existing Pages to Hybrid

To convert an existing static-only page (e.g., `/custom-apparel/custom-shirts`) to a hybrid page:

1. Open the Blade file (e.g., `resources/views/pages/custom-apparel/custom-shirts.blade.php`)
2. Identify where the product grid should appear (typically after the hero/banner, before the trust/CTA sections)
3. Add the Livewire component with the matching collection slug:

```blade
<section id="all-products" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        @livewire('catalog.collection-page', [
            'collectionSlug' => 'custom-shirts',
            'parentSlug' => 'custom-apparel',
        ])
    </div>
</section>
```

4. The `collectionSlug` must match the slug stored in `lunar_urls` for that collection
5. The `parentSlug` is optional — it provides breadcrumb context for nested collections
6. Update the hero "Shop Now" CTA to `href="#all-products"` so it scrolls to the product grid

### Finding Collection Slugs

Collection slugs are stored in the `lunar_urls` table. To find a slug:

```sql
SELECT lu.slug, lt.value->>'name' as name
FROM lunar_urls lu
JOIN lunar_collections lc ON lu.element_id = lc.id AND lu.element_type = 'Lunar\\Models\\Collection'
JOIN lunar_attribute_data lt ON lt.attributable_id = lc.id AND lt.attributable_type = 'Lunar\\Models\\Collection'
ORDER BY lu.slug;
```

Or check the Lunar Hub admin panel under Collections.

---

## How Collections Are Managed

Collections are managed in the Lunar Hub admin panel (`/hub`):

1. Created with a name, description, and URL slug
2. Organized in a parent-child hierarchy (e.g., Custom Apparel > Custom Shirts)
3. Products are assigned to collections via the admin panel
4. The database seeder (`database/seeders/`) pre-populates 30 hierarchical collections

**Database tables involved:**
- `lunar_collections` — the collection records
- `lunar_collection_product` — pivot table linking products to collections
- `lunar_urls` — polymorphic URL slugs for collections and products

---

## Discovery: Users, Search Engines, and AI Crawlers

### How Users Find Pages

Users navigate through the **navigation bar**, which links directly to hybrid pages. Users follow links — they don't type URLs. The nav bar is the single entry point into the product browsing experience.

When a user clicks "Custom Shirts" in the nav, they land on the hybrid page at `/custom-apparel/custom-shirts`, which shows marketing content and the product grid together. The "Shop Now" CTA on the hero scrolls them down to the product grid section.

### How Search Engines (Google, Bing) Find Pages

Search engines discover pages through three mechanisms:

1. **Crawling internal links** — Googlebot follows every `<a href>` on indexed pages. Since the nav bar and internal links point to hybrid pages, those are the primary URLs that get crawled.

2. **Sitemap.xml** — An XML sitemap explicitly lists preferred URLs and their priority. The sitemap should list only hybrid pages and product detail pages, not `/collections/` routes.

3. **Canonical tags** — A `<link rel="canonical">` tag tells search engines which URL is the "official" version. Each hybrid page should have a self-referencing canonical tag. Any remaining `/collections/` pages should canonical-redirect to their hybrid counterpart.

**Why hybrid pages are ideal for search engines:**
- They contain rich, unique marketing copy (SEO-friendly)
- They have structured headings (H2-H5) and descriptive content
- They also contain a live product grid, which search engines can partially render
- One URL serves both the marketing and shopping intent — no duplicate content problem

### How AI Engines (ChatGPT, Perplexity, Google AI Overview) Find Pages

AI crawlers behave similarly to search engine crawlers:

- They follow links and use `sitemap.xml` for discovery
- They strongly prefer pages with rich, structured, descriptive content — hybrid pages excel here because they combine marketing copy with product data
- They follow `robots.txt` directives
- They may also pull from search engine indexes, so proper canonical/sitemap setup ensures they find the right pages

### SEO Infrastructure Required (Not Yet Implemented)

The following must be built before production launch:

| Item | Status | What It Does |
|---|---|---|
| `sitemap.xml` | Not built | Lists all hybrid pages and product detail pages for search engines |
| `robots.txt` | Not built | Tells crawlers which paths to index; blocks `/collections/` if desired |
| `<link rel="canonical">` | Not built | Each hybrid page gets a self-referencing canonical; `/collections/` pages canonical to their hybrid counterpart |
| `<meta name="robots">` | Not built | Per-page control: `index, follow` on hybrid pages; `noindex, follow` on `/collections/` pages |
| JSON-LD structured data | Not built | Product schema on PDPs, LocalBusiness on all pages, BreadcrumbList for navigation |
| Open Graph / Twitter cards | Not built | Social sharing previews with images, titles, descriptions |

### Target SEO State

Once SEO infrastructure is implemented:

**Hybrid pages (e.g., `/custom-apparel/custom-shirts`):**
- Canonical, indexable, in sitemap
- Rich marketing content + product grid
- JSON-LD BreadcrumbList + CollectionPage schema
- Open Graph tags for social sharing

**`/collections/` routes:**
- `noindex, follow` (or canonical pointing to hybrid counterpart)
- Not in sitemap
- Functional fallback for collections without a dedicated hybrid page
- Will be phased out as all collections get hybrid pages

**Product detail pages (`/products/{slug}`):**
- Canonical, indexable, in sitemap
- JSON-LD Product schema (name, price, availability, images, reviews)

**Pages not indexed:**
- `/hub/*` (admin panel)
- `/cart`, `/checkout` (transactional, no SEO value)
- `/demo/*` (development only)

---

## Adding a New Hybrid Page

Step-by-step process for adding a new product category page:

1. **Ensure the Lunar collection exists** — Check Lunar Hub or the seeder for the collection and its slug

2. **Create the Blade file** in `resources/views/pages/`:
   ```
   resources/views/pages/your-category/your-page.blade.php
   ```

3. **Follow the hybrid template:**
   ```blade
   <x-layouts.page title="Page Title" metaDescription="..." currentPage="your-page">
       <x-sections.category-hero
           preHeading="Veteran Owned - Joliet, IL"
           heading="Your Category"
           headingAccent="Accent Text"
           description="Marketing description..."
           primaryButtonText="Shop Now"
           primaryButtonHref="#all-products"
           secondaryButtonText="Contact Us"
           secondaryButtonHref="/contact"
       />
       <x-ui.banner-medium-sunburst />

       <section id="all-products" class="py-12 bg-white">
           <div class="max-w-7xl mx-auto px-6">
               @livewire('catalog.collection-page', [
                   'collectionSlug' => 'your-collection-slug',
                   'parentSlug' => 'parent-slug-if-nested',
               ])
           </div>
       </section>

       <x-sections.top5pct-same-day-service serviceType="your-type" displayServiceType="Your Type" />
       <x-sections.why-choose-us />
       <x-sections.cta-free-quote />
       <x-sections.cta-ready-to-get-started />
       <x-sections.review-banner />
       <x-sections.map-section />
   </x-layouts.page>
   ```

4. **Add the route** in `routes/web.php`:
   ```php
   Route::get('/your-category/your-page', function () {
       return view('pages.your-category.your-page');
   });
   ```

5. **Update the navigation bar** in `resources/views/components/layout/navigation-bar.blade.php` to link to the new page

6. **When SEO is implemented:** Add the page to `sitemap.xml`, add canonical tag, add JSON-LD

---

## Deprecated Routes

| Old Route | Replacement | Notes |
|---|---|---|
| `/shop` | `/top5pct-merchandise` | Removed March 2026. All internal links updated. |
| `/store` | `/top5pct-merchandise` | Intermediate rename, never published long-term. |

---

## Migration Status

Pages that still need conversion from static-only to hybrid:

| Current URL | Collection Slug Needed | Status |
|---|---|---|
| `/custom-apparel/custom-shirts` | `custom-shirts` | Static only — needs product grid added |
| `/custom-apparel/custom-hoodies` | `custom-hoodies` | Static only — needs product grid added |
| Other category pages | Various | Audit needed |
| `/top5pct-merchandise` | `null` (all products) | Done — reference implementation |
