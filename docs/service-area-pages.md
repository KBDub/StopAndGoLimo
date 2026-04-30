# Service Area Pages

## Overview

Each city served by Top 5 Percent gets a dedicated SEO landing page at
`/service-areas/{city}-{state}` (e.g., `/service-areas/joliet-il`).
All 25 city pages (HQ + 12 PRIMARY + 12 SECONDARY) share a single Blade
template. Content is driven dynamically from `App\Data\PrimaryLocations`.

---

## URL Structure

| URL | View | Route name |
|-----|------|------------|
| `/service-areas` | `pages.service-areas` | `service-areas` |
| `/service-areas/{slug}` | `pages.service-areas.show` | `service-areas.show` |

**Slug format:** `Str::slug($city['city'] . '-' . $city['state'])`

Examples:
- Joliet → `joliet-il`
- New Lenox → `new-lenox-il`
- Crest Hill → `crest-hill-il`

---

## Data Source

All city data is driven by `App\Data\PrimaryLocations` (single source of truth).

| Constant | Contents |
|----------|---------|
| `PrimaryLocations::HQ` | Joliet headquarters (lat/lng/main flag) |
| `PrimaryLocations::PRIMARY` | 12 primary service cities |
| `PrimaryLocations::SECONDARY` | 12 secondary service cities |
| `PrimaryLocations::ZIPS` | All served zip codes |

Helper methods: `all()`, `forMap()`, `primaryCityNames()`, `secondaryCityNames()`,
`allCityNames()`, `zips()`.

---

## Route

Located in `routes/main-site.php` under the `── Service Area ──` section:

```php
Route::get('/service-areas/{slug}', function (string $slug) {
    use App\Data\PrimaryLocations;
    use Illuminate\Support\Str;

    $allCities = PrimaryLocations::all();

    $city = collect($allCities)->first(
        fn ($loc) => Str::slug(($loc['city'] ?? $loc['name']) . '-' . $loc['state']) === $slug
    );

    if (!$city) {
        abort(404);
    }

    return view('pages.service-areas.show', compact('city'));
})->name('service-areas.show');
```

An unrecognized slug returns a standard 404.

---

## Template

**File:** `resources/views/pages/service-areas/show.blade.php`

### Section Order

| # | Component | Notes |
|---|-----------|-------|
| 1 | `x-sections.category-hero` | `heading="Custom Signs & Apparel"`, `headingAccent="{$city} IL"`, city-specific description |
| 2 | `x-ui.banner-medium-sunburst` | Standard branded gold divider |
| 3 | `x-sections.card-image-with-text` | Olive title, sunburst underline, float-right image, 4 paragraphs of local intro copy |
| 4 | `x-sections.top5pct-same-day-service` | `displayServiceType="Custom Signage & Apparel in {$city}"` — full service grid + differentiators |
| — | *[Additional sections added here]* | City-specific or global additions go between sections 4 and 5 |
| 5 | `x-sections.cta-quadruple-button-banner` | Standard 4-button CTA |
| 6 | `x-sections.map-section` | Service area map + zip code checker |

### Props passed to the view

| Variable | Source | Example |
|----------|--------|---------|
| `$city['city']` | `PrimaryLocations` | `"Plainfield"` |
| `$city['state']` | `PrimaryLocations` | `"IL"` |
| `$city['lat']` / `$city['lng']` | `PrimaryLocations` | `41.6270` / `-88.2037` |
| `$city['main']` | Only set on HQ record | `true` |

---

## Adding Content to All City Pages

Edit `resources/views/pages/service-areas/show.blade.php` — all 25 city pages
update automatically since they share the same template.

---

## City-Specific Overrides (future)

If a city needs unique content (e.g., a Naperville-specific product showcase),
create a dedicated file at `resources/views/pages/service-areas/{slug}.blade.php`
and check for it in the route before falling back to the shared template.

---

## Image Convention

City pages use images from the shared pool in `public/images/`. Since no
per-city photography exists, images are drawn from:

- Hero: `/images/top5pct-banner-joliet.jpg`
- Card image: `/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg`

When city-specific photography becomes available, add a `'image'` key to the
relevant entry in `PrimaryLocations` and reference it in the template.

---

## SEO Notes

- `<title>` follows the pattern: `Custom Signs & Apparel in {City}, IL | Top 5 Percent`
- `metaDescription` includes the city name, county, and core services
- `currentPage` is set to `"about"` to keep the "About Us" nav item active
- Each page is independently crawlable with a canonical city-specific URL
