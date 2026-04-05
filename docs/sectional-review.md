# Sectional Review — Page Section Audit
## Top 5 Percent Custom Signage & Apparel

> **Source of truth:** `docs/Top5Pct.MegaMenuItems.csv` · `docs/megamenu.md` · `App\Actions\ScanPageComponents` (run 2026-04-04, 78 pages, 909 component usages)
>
> **"Slot" note:** The "Slot" entry in page management is Blade's `<x-slot name="...">` directive — used to pass SEO title/meta into `layouts.page`. It is not a real component. The scanner captures it because it matches the `<x-*` regex. It accounts for +1 in every page's component total.

---

## Standard Section Templates

All active pages must conform to one of the two templates below. Every mandatory section is required. Optional sections are strongly recommended.

### A. Category Landing Page (CLP)

Used when `Is Category Landing Page = y` in the CSV. Must have `sections.lp-category-banners` to drive sub-category discovery. **Target: 13 components.**

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    {{-- slot: title, meta --}}
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />
    <x-sections.lp-category-banners :banners="[...]" />        {{-- REQUIRED for CLP --}}
    <x-sections.product-grid collectionSlug="..." />
    <x-ui.banner-testimonial quote="..." name="..." />          {{-- recommended --}}
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
```

| # | Component | Type | Required |
|---|---|---|---|
| 1 | `layouts.page` | Layout | ✅ |
| 2 | `x-slot` (title/meta) | Other | ✅ |
| 3 | `sections.category-hero` | Section | ✅ |
| 4 | `ui.banner-medium-sunburst` | Ui | ✅ |
| 5 | `sections.top5pct-same-day-service` | Section | ✅ |
| 6 | `sections.lp-category-banners` | Section | ✅ **CLP only** |
| 7 | `sections.product-grid` | Section | ✅ |
| 8 | `ui.banner-testimonial` | Ui | recommended |
| 9 | `sections.why-choose-us` | Section | ✅ |
| 10 | `sections.cta-free-quote` | Section | ✅ |
| 11 | `sections.cta-ready-to-get-started` | Section | ✅ |
| 12 | `sections.review-banner` | Section | ✅ |
| 13 | `sections.map-section` | Section | ✅ |

---

### B. Sub-Category Page (Full)

Standard for all sub-category pages linked from the mega menu. **Target: 15 components.**

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    {{-- slot: title, meta --}}
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />
    <x-ui.banner-testimonial quote="..." name="..." />          {{-- recommended --}}
    <x-sections.card-image-with-text ... />                    {{-- 2–3 blocks --}}
    <x-sections.card-2image-with-text ... />
    <x-sections.product-grid collectionSlug="..." parentSlug="..." />
    <x-sections.card-detailed-info ... />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
```

| # | Component | Type | Required |
|---|---|---|---|
| 1 | `layouts.page` | Layout | ✅ |
| 2 | `x-slot` (title/meta) | Other | ✅ |
| 3 | `sections.category-hero` | Section | ✅ |
| 4 | `ui.banner-medium-sunburst` | Ui | ✅ |
| 5 | `sections.top5pct-same-day-service` | Section | ✅ |
| 6 | `ui.banner-testimonial` | Ui | recommended |
| 7 | `sections.card-image-with-text` | Section | ✅ |
| 8 | `sections.card-2image-with-text` | Section | ✅ |
| 9 | `sections.product-grid` | Section | ✅ |
| 10 | `sections.card-detailed-info` | Section | ✅ |
| 11 | `sections.why-choose-us` | Section | ✅ |
| 12 | `sections.cta-free-quote` | Section | ✅ |
| 13 | `sections.cta-ready-to-get-started` | Section | ✅ |
| 14 | `sections.review-banner` | Section | ✅ |
| 15 | `sections.map-section` | Section | ✅ |

---

### C. Sections Available — Not Yet in Standard Templates

These section components exist in `resources/views/components/sections/` but are used on few or no plan pages. They should be evaluated for inclusion.

| Section Component | Currently Used On | Candidate For |
|---|---|---|
| `sections.shirt-types-video` | `/custom-apparel/custom-shirts` only | Add to all CLP and Sub-Full pages as a video banner (requires a generic wrapper or parameter to be reusable) |
| `sections.shirt-types-faq` | `/custom-apparel/custom-shirts` only | Add to group shirt pages (reunion, spirit, corporate), signs sub-pages, promo sub-pages |
| `sections.shirt-types-grid` | `/custom-apparel/custom-shirts` only | CLP-specific or special pages only |
| `sections.represent-yourself` | `/custom-apparel/custom-shirts` only | Marketing pages / about / homepage |
| `sections.hero-full-bleed` | Unused on live pages | Can replace or supplement `category-hero` on select pages |
| `sections.cta-design-your-own` | Unused on live pages | Consider adding to all apparel/design pages |
| `sections.top-level-category-section` | Unused | Review for applicability |
| `sections.our-services` | `/` (home) only | Consider adding to about/company pages |
| `sections.about-preview` | `/company` only | About Us group pages |
| `sections.featured-products` | `/` (home) only | Consider on CLPs |
| `sections.design-it-yourself` | Unused | Old — review for deletion |

> **Video Banner:** `sections.shirt-types-video` is currently a custom shirts-specific section wrapping a YouTube embed. To add video to all standard pages, either generalize this component (add a `videoId`, `title`, `headline` parameter) or create a new `sections.video-banner` component. This work must be done before video can be added to CLP and Sub-Full templates.

---

## Audit Legend

| Symbol | Meaning |
|---|---|
| ✅ | Section is present on this page |
| ❌ | Section is missing — **must be added** |
| — | Not applicable for this page type |
| ➕ | Section exists but needs content improvement |

**Column key (abbreviated headers):**

| Header | Full Component |
|---|---|
| `same-day` | `sections.top5pct-same-day-service` |
| `lp-banners` | `sections.lp-category-banners` |
| `card-img` | `sections.card-image-with-text` |
| `card-2img` | `sections.card-2image-with-text` |
| `prod-grid` | `sections.product-grid` |
| `card-detail` | `sections.card-detailed-info` |
| `faq` | `sections.shirt-types-faq` |
| `video` | `sections.shirt-types-video` (or future generic) |
| `testimonial` | `ui.banner-testimonial` |

> **Universal sections** (present on all non-utility pages — omitted from table to reduce noise):
> `sections.category-hero` · `ui.banner-medium-sunburst` · `sections.why-choose-us` · `sections.cta-free-quote` · `sections.cta-ready-to-get-started` · `sections.review-banner` · `sections.map-section` · `layouts.page` · `x-slot`

---

## 1. Home

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/` | Special | 17 | — | — | — | — | ✅ | — | — | ✅ | — |

> Home uses unique sections: `home-page-hero`, `home-page-services-accordion`, `our-services`, `featured-products`. Not subject to the CLP or Sub-Full standard. No gaps.

---

## 2. Custom Apparel

**6 Category Landing Pages from CSV with `Is Category Landing Page = y`:** `/custom-apparel` is one of them.

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/custom-apparel` | **CLP** | 12 | ✅ | ❌ | ➕ (remove — wrong type) | — | ✅ | — | ❌ | ❌ | ✅ |
| `/custom-apparel/dtf-transfers` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/dye-sublimation` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/screen-printing` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/embroidery` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/rhinestone-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/vinyl-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/glitter-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/puff-shirts` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/glow-in-the-dark-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/flock-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/brick-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/holographic-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/foil-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/reflective-shirts` | Sub-Basic | 11 | ✅ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/custom-apparel/reunion-shirts` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/custom-apparel/spirit-wear-shirts` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/custom-apparel/corporate-wear-shirts` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |

**CLP Gap — `/custom-apparel`:**
- ❌ Missing: `sections.lp-category-banners` — must list all apparel sub-categories (DTF, Dye-Sub, Screen Print, Embroidery, Rhinestone, Vinyl, Glitter, Puff, Glow, Flock, Brick, Holographic, Foil, Reflective, Reunion, Spirit Wear, Corporate Wear)
- ➕ Has `sections.card-image-with-text` which belongs on sub-pages, not CLPs — move or reclassify

**Custom Shirts (Special — `/custom-apparel/custom-shirts`) — Orphaned, see Section 7.**

---

## 3. Select a Sign

`/signs` is a Category Landing Page (`Is Category Landing Page = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/signs` | **CLP** | 12 | ✅ | ❌ | — | — | ✅ | — | — | ❌ | ✅ |
| `/signs/banners` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/signs/window-signs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/wall-signs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/floor-signs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/door-signs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/posters` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/signs/yard-signs` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/signs/sidewalk-signs` | Sub-Partial+ | 14 | ✅ | — | ✅ | ❌ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/signs/parking-signs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/table-cloths` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/signs/table-runners` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |

**CLP Gap — `/signs`:**
- ❌ Missing: `sections.lp-category-banners` — must list all sign sub-categories (Banners, Window Signs, Wall Signs, Floor Signs, Door Signs, Posters, Yard Signs, Sidewalk Signs, Parking Signs, Table Cloths, Table Runners)

**Sub-Partial Gaps (window, wall, floor, door, parking, table-cloths):**
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.card-detailed-info`

**Sidewalk Signs** (`/signs/sidewalk-signs`) has `card-detailed-info` but is missing `card-2image-with-text`.

---

## 4. Vehicle Decals

`/vehicle-graphics` is a Category Landing Page (`Is Category Landing Page = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/vehicle-graphics` | **CLP** ✅ | 12 | ✅ | ✅ | — | — | ✅ | — | — | ❌ | ✅ |
| `/vehicle-graphics/automobile-graphics` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/vehicle-graphics/vehicle-magnets` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/vehicle-graphics/dot-decals` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |

Vehicle Decals is the most complete menu group. All sub-pages are Sub-Full. CLP has `lp-category-banners`. Only gaps are `faq` and `video` which are global additions not yet available as reusable components.

---

## 5. Stickers

`/stickers` is a Category Landing Page (`Is Category Landing Page = y`, `Needs Section Updates = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/stickers` | **CLP** ✅ | 12 | ✅ | ✅ | — | — | ✅ | — | — | ❌ | ✅ |
| `/stickers/standard-stickers` | **Sub-Full** ✅ | 15 | ✅ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| `/stickers/custom-shaped-stickers` | Sub-Partial+ | 14 | ✅ | — | ✅ | ❌ | ✅ | ✅ | ❌ | ❌ | ✅ |

Stickers CLP has `lp-category-banners` ✅. Custom Shaped Stickers has `card-detailed-info` but is missing `card-2image-with-text`.

---

## 6. Promotional Items

`/promotional-items` is a Category Landing Page (`Is Category Landing Page = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/promotional-items` | **CLP** | 10 | ✅ | ❌ | — | — | ✅ | — | — | — | ❌ |
| `/promotional-items/mugs` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/promotional-items/can-koozies` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/promotional-items/towels` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/promotional-items/drink-coasters` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/promotional-items/tote-bags` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/promotional-items/mouse-pads` | Sub-Partial | 12 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |

**CLP Gap — `/promotional-items`:**
- ❌ Missing: `sections.lp-category-banners` — must list all promo sub-categories (Mugs, Can Koozies, Towels, Drink Coasters, Tote Bags, Mouse Pads)
- ❌ Missing: `ui.banner-testimonial`

**Sub-Partial Gaps (all 6 sub-pages):**
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.card-detailed-info`

---

## 7. Top 5% Merchandise

`/top5pct-merchandise` is a Category Landing Page (`Is Category Landing Page = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/top5pct-merchandise` | **CLP** | 10 | ✅ | ❌ | — | — | ✅ | — | — | — | ❌ |

**CLP Gaps:**
- ❌ Missing: `sections.lp-category-banners` — this is a merch-only category; banners could showcase product categories (tees, hoodies, hats, etc.)
- ❌ Missing: `ui.banner-testimonial`

---

## 8. Design Services

`/design-services` is a Category Landing Page (`Is Category Landing Page = y`).

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/design-services` | **CLP** | 10 | ✅ | ❌ | — | — | ❌ | — | — | — | ❌ |
| `/design-services/logo-design` | Sub-Partial | 11 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/design-services/graphic-design` | Sub-Partial | 11 | ✅ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ✅ |
| `/design-services/online-designer` | Sub-Partial | 10 | ✅ | — | ❌ | — | ❌ | — | — | — | ❌ |
| `/design-services/design-catalogs` | Sub-Partial | 10 | ✅ | — | ❌ | — | ❌ | — | — | — | ❌ |

**CLP Gaps:**
- ❌ Missing: `sections.lp-category-banners` — should list Logo Design, Graphic Design, Online Designer, Design Catalogs
- ❌ Missing: `sections.product-grid`
- ❌ Missing: `ui.banner-testimonial`

**Sub-Page Gaps (logo-design, graphic-design):**
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.card-detailed-info`

**Sub-Page Gaps (online-designer, design-catalogs):**
- ❌ Missing: `sections.card-image-with-text`
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.product-grid`
- ❌ Missing: `sections.card-detailed-info`
- ❌ Missing: `ui.banner-testimonial`

---

## 9. About Us

| URL | Type | Total | same-day | lp-banners | card-img | card-2img | prod-grid | card-detail | faq | video | testimonial |
|---|---|---|---|---|---|---|---|---|---|---|---|
| `/about` | Special | 9 | ✅ | — | — | — | — | — | — | — | — |
| `/company` | Special | 10 | ✅ | — | — | — | — | — | — | — | ✅ |
| `/portfolio` | Special | 9 | ✅ | — | — | — | — | — | — | — | — |
| `/resources` | ❌ New page | — | — | — | — | — | — | — | — | — | — |

> `/about`, `/company`, `/portfolio` do not follow the standard CLP or Sub-Full templates — they are content-specific pages. Sections should be tailored to their purpose. `/company` has `sections.about-preview`. `/resources` does not exist yet.

---

## 10. CLP Summary — `sections.lp-category-banners` Reconciliation

The CSV marks **7** pages as Category Landing Pages (`Is Category Landing Page = y`). Only **2** currently have `sections.lp-category-banners`. The table below shows what the banners array must contain for each.

| CLP URL | lp-banners? | Sub-Pages to List in Banners |
|---|---|---|
| `/custom-apparel` | ❌ Missing | DTF, Dye-Sublimation, Screen Printing, Embroidery, Rhinestone, Vinyl, Glitter, Puff, Glow, Flock, Brick, Holographic, Foil, Reflective, Reunion, Spirit Wear, Corporate Wear |
| `/signs` | ❌ Missing | Banners, Window Signs, Wall Signs, Floor Signs, Door Signs, Posters, Yard Signs, Sidewalk Signs, Parking Signs, Table Cloths, Table Runners |
| `/vehicle-graphics` | ✅ Present | Automobile Graphics, Vehicle Magnets, DOT Decals |
| `/stickers` | ✅ Present | Standard Stickers, Custom Shaped Stickers |
| `/promotional-items` | ❌ Missing | Mugs, Can Koozies, Towels, Drink Coasters, Tote Bags, Mouse Pads |
| `/top5pct-merchandise` | ❌ Missing | Merch product categories (tees, hoodies, hats, accessories, etc.) |
| `/design-services` | ❌ Missing | Logo Design, Graphic Design, Online Designer, Design Catalogs |

**5 of 7 CLPs are missing `sections.lp-category-banners`.** This is the highest-priority sectionalization gap.

---

## 11. Utility / Single Pages

These pages exist and are functional but do not follow the standard section templates. No section additions are needed unless specifically requested.

| URL | Type | Total | Notes |
|---|---|---|---|
| `/cart` | Utility | 2 | Livewire `cart.cart-page` component — no sections |
| `/checkout` | Utility | 2 | Livewire `cart.checkout-page` component — no sections |
| `/order-confirmation` | Utility | 2 | Livewire `cart.order-confirmation` component — no sections |
| `/page-management` | Admin | 5 | Internal tool — no standard sections |
| `/collection` | Template | 10 | Dynamic template rendered via `/collections/{slug}` route — has standard sections |
| `/product` | Template | 9 | Dynamic template rendered via `/products/{slug}` route |
| `/contact` | Single | 9 | Not in mega menu — has standard sections but no product-grid. Needs a nav decision: add to About Us or footer only |
| `/stores` | Single | 9 | Not in mega menu — has standard sections but no product-grid. Needs a nav decision |

> **Terms & Privacy pages:** Not found in the page scanner — these pages do not exist yet as Blade views. If/when added, they will be utility pages with minimal sections (no product-grid, no lp-category-banners).

---

## 12. Orphaned Pages

Pages that exist in `resources/views/pages/` and appear on `/page-management` but have no place in the current megamenu plan. Decisions are required for each.

### A. Old/Duplicate Routes — Candidates for Deletion

| URL | Total | Superseded By | Recommended Action |
|---|---|---|---|
| `/custom-apparel/embroidery-shirts` | 11 | `/custom-apparel/embroidery` | Delete file, 301 redirect |
| `/custom-apparel/spirit-wear` | 15 | `/custom-apparel/spirit-wear-shirts` | Delete file, 301 redirect |
| `/custom-apparel/corporate-wear` | 15 | `/custom-apparel/corporate-wear-shirts` | Delete file, 301 redirect |

### B. Orphaned Apparel Pages — Decide: Promote, Merge, or Delete

| URL | Total | Type | Notes |
|---|---|---|---|
| `/custom-apparel/custom-shirts` | 18 | Special | Heaviest page — has shirt-types-grid, shirt-types-video, shirt-types-faq, represent-yourself. Used as a gateway to all shirt types. Decide: promote to mega menu or keep as hidden SEO page |
| `/custom-apparel/pattern-shirts` | 11 | Sub-Basic | No mega menu entry. Decide: add to Specialty Materials group or delete |
| `/custom-apparel/picture-shirts` | 11 | Sub-Basic | No mega menu entry. Decide: add to Specialty Materials group or delete |

### C. Old Decals Group — Refactored but Originals Still Live

| URL | Total | Refactored Into | Recommended Action |
|---|---|---|---|
| `/decals` (index) | 12 | Removed from nav | 301 redirect to `/stickers`, then delete |
| `/decals/stickers` | 15 | `/stickers/standard-stickers` | 301 redirect, then delete |
| `/decals/window-wall-floor-decals` | 15 | No replacement | Decide: split into `/signs/window-signs`, `/signs/wall-signs`, `/signs/floor-signs`, or delete |
| `/decals/coronavirus-decals` | 12 | No replacement | Keep for SEO with 301 candidate, or delete |

### D. Old Design-It-Yourself Group — Refactored but Originals Still Live

| URL | Total | Refactored Into | Recommended Action |
|---|---|---|---|
| `/design-it-yourself` (index) | 10 | `/design-services` | 301 redirect, then delete |
| `/design-it-yourself/online-designer` | 10 | `/design-services/online-designer` | 301 redirect, then delete |
| `/design-it-yourself/design-catalogs` | 10 | `/design-services/design-catalogs` | 301 redirect, then delete |

### E. Other Orphaned Pages

| URL | Total | Notes |
|---|---|---|
| `/signs/business-signs` | 15 | Sub-Full page. Content should be split across `/signs/window-signs`, `/signs/wall-signs`, `/signs/floor-signs`, `/signs/door-signs`. 301 redirect to `/signs` after sub-pages are completed. |
| `/signs/coronavirus-signs` | 13 | COVID-era page. Keep for SEO traffic, or 301 redirect to `/signs/banners`. |
| `/company/resources` | 9 | Lives at `/company/resources`, not `/resources`. Plan has `/resources` as a new page at a different URL. Decide: rename/redirect this file to `/resources`, or keep both. |

---

## 13. Action Items — Priority Order

### Priority 1: CLP Gaps (5 missing `lp-category-banners`)

| Page | Action |
|---|---|
| `/custom-apparel` | Add `sections.lp-category-banners` with all 17 sub-category entries. Remove misplaced `sections.card-image-with-text`. |
| `/signs` | Add `sections.lp-category-banners` with all 11 sub-category entries. |
| `/promotional-items` | Add `sections.lp-category-banners` with 6 promo entries. Add `ui.banner-testimonial`. |
| `/top5pct-merchandise` | Add `sections.lp-category-banners` with merch categories. Add `ui.banner-testimonial`. |
| `/design-services` | Add `sections.lp-category-banners` with 4 service entries. Add `sections.product-grid`. Add `ui.banner-testimonial`. |

### Priority 2: Sub-Partial → Sub-Full (add `card-2image-with-text` + `card-detailed-info`)

| Group | Pages Needing Upgrade |
|---|---|
| Custom Apparel | dye-sublimation, screen-printing, puff-shirts |
| Signs | window-signs, wall-signs, floor-signs, door-signs, sidewalk-signs (missing card-2img only), parking-signs, table-cloths |
| Stickers | custom-shaped-stickers (missing card-2img only) |
| Promotional Items | mugs, can-koozies, towels, drink-coasters, tote-bags, mouse-pads |
| Design Services | logo-design, graphic-design |

### Priority 3: Sub-Basic → Sub-Full (add `card-image-with-text` + `card-2image-with-text` + `card-detailed-info`)

| Group | Pages Needing Full Rebuild |
|---|---|
| Custom Apparel | dtf-transfers, embroidery, rhinestone-shirts, vinyl-shirts, glitter-shirts, glow-in-the-dark-shirts, flock-shirts, brick-shirts, holographic-shirts, foil-shirts, reflective-shirts |
| Design Services | online-designer, design-catalogs |

### Priority 4: Video Banner (requires new/generalized component first)

Generalize `sections.shirt-types-video` → `sections.video-banner` with parameters (`videoId`, `headline`, `subheadline`). Once built, add to:
- All 7 CLP pages
- All Sub-Full pages (15+ components)

### Priority 5: FAQ Section (`sections.shirt-types-faq`)

Generalize `sections.shirt-types-faq` → `sections.page-faq` with a `:items` array prop. Add to:
- Group shirt pages: reunion-shirts, spirit-wear-shirts, corporate-wear-shirts
- Signs sub-pages: banners, yard-signs, posters
- Promotional items sub-pages: all 6

### Priority 6: Orphaned Page Cleanup

1. Delete/redirect old duplicate routes (embroidery-shirts, spirit-wear, corporate-wear)
2. Set up 301 redirects for all `design-it-yourself/*` → `design-services/*`
3. Set up 301 redirect for `decals/stickers` → `stickers/standard-stickers`
4. Decide fate of: pattern-shirts, picture-shirts, coronavirus-signs, coronavirus-decals, window-wall-floor-decals, business-signs, company/resources
