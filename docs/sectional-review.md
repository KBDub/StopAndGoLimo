# Sectional Review — Page Section Audit
## Top 5 Percent Custom Signage & Apparel

> **Source of truth:** `docs/Top5Pct.MegaMenuItems.csv` · `docs/megamenu.md` · `App\Actions\ScanPageComponents` (run 2026-04-05, 78 pages, 909 component usages)
>
> **"Slot" note:** The "Slot" entry in page management is Blade's `<x-slot name="...">` directive — used to pass SEO title/meta into `layouts.page`. It is not a real component. The scanner captures it because it matches the `<x-*` regex. It accounts for +1 in every page's component total.

---

## Standard Section Templates

All active pages must conform to one of the two templates below. Every mandatory component is required. The new carousel and slide-in UI components are now part of both standards.

---

### A. Category Landing Page (CLP) — Target: ~19 components

Used when `Is Category Landing Page = y` in the CSV. Must have `sections.lp-category-banners` listing **every sub-category** for that menu group. Must have **two testimonials** (one near top, one lower). Gets **two carousels** (different `visible` variants) and one slide-in banner.

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    {{-- slot: title, meta --}}
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />

    <x-ui.carousel-rotating-images :images="[...]" :visible="3" />     {{-- carousel #1: visible=3 --}}

    <x-sections.lp-category-banners :banners="[...]" />                {{-- REQUIRED: full sub-cat list --}}
    <x-sections.product-grid collectionSlug="..." />

    <x-ui.banner-testimonial quote="..." name="..." />                 {{-- testimonial #1 — near top --}}

    {{-- 1–2 info blocks (same components as sub-pages, CLP-specific content) --}}
    <x-sections.card-image-with-text ... />
    {{-- optional: <x-sections.card-2image-with-text ... /> or <x-sections.card-detailed-info ... /> --}}

    <x-ui.carousel-rotating-images :images="[...]" :visible="2" />     {{-- carousel #2: visible=2 --}}
    <x-ui.card-banner-slide-in image="..." alt="..." title="..." href="..." direction="left|right" />

    <x-ui.banner-testimonial quote="..." name="..." />                 {{-- testimonial #2 — lower --}}

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
| 6 | `ui.carousel-rotating-images` #1 `visible=3` | Ui | ✅ **NEW** |
| 7 | `sections.lp-category-banners` | Section | ✅ **CLP only — full count** |
| 8 | `sections.product-grid` | Section | ✅ |
| 9 | `ui.banner-testimonial` #1 — near top | Ui | ✅ **REQUIRED** |
| 10 | `sections.card-image-with-text` (info block) | Section | ✅ |
| 11 | `sections.card-2image-with-text` or `card-detailed-info` (optional 2nd info block) | Section | recommended |
| 12 | `ui.carousel-rotating-images` #2 `visible=2` | Ui | ✅ **NEW** |
| 13 | `ui.card-banner-slide-in` | Ui | ✅ **NEW** |
| 14 | `ui.banner-testimonial` #2 — lower | Ui | ✅ **REQUIRED** |
| 15 | `sections.why-choose-us` | Section | ✅ |
| 16 | `sections.cta-free-quote` | Section | ✅ |
| 17 | `sections.cta-ready-to-get-started` | Section | ✅ |
| 18 | `sections.review-banner` | Section | ✅ |
| 19 | `sections.map-section` | Section | ✅ |

---

### B. Sub-Category Page (Full) — Target: 18 components

Standard for all sub-category pages linked from the mega menu. Gets one carousel (after same-day service) and one slide-in banner (after product content). Must have **two testimonials**.

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    {{-- slot: title, meta --}}
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />

    <x-ui.carousel-rotating-images :images="[...]" :visible="2" />     {{-- carousel: visible=2 --}}

    <x-ui.banner-testimonial quote="..." name="..." />                 {{-- testimonial #1 — near top --}}

    <x-sections.card-image-with-text ... />
    <x-sections.card-2image-with-text ... />
    <x-sections.product-grid collectionSlug="..." parentSlug="..." />
    <x-sections.card-detailed-info ... />

    <x-ui.card-banner-slide-in image="..." alt="..." title="..." href="..." direction="left|right" />

    <x-ui.banner-testimonial quote="..." name="..." />                 {{-- testimonial #2 — lower --}}

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
| 6 | `ui.carousel-rotating-images` `visible=2` | Ui | ✅ **NEW** |
| 7 | `ui.banner-testimonial` #1 — near top | Ui | ✅ **REQUIRED** |
| 8 | `sections.card-image-with-text` | Section | ✅ |
| 9 | `sections.card-2image-with-text` | Section | ✅ |
| 10 | `sections.product-grid` | Section | ✅ |
| 11 | `sections.card-detailed-info` | Section | ✅ |
| 12 | `ui.card-banner-slide-in` | Ui | ✅ **NEW** |
| 13 | `ui.banner-testimonial` #2 — lower | Ui | ✅ **REQUIRED** |
| 14 | `sections.why-choose-us` | Section | ✅ |
| 15 | `sections.cta-free-quote` | Section | ✅ |
| 16 | `sections.cta-ready-to-get-started` | Section | ✅ |
| 17 | `sections.review-banner` | Section | ✅ |
| 18 | `sections.map-section` | Section | ✅ |

---

### C. New UI Components — Variant Guide

#### `ui.carousel-rotating-images`

Props: `:images="[['src'=>'...','alt'=>'...']]"` · `:visible="1|2|3"` · `:interval="3500"` (ms)

| Variant | `visible` | Layout | Used On |
|---|---|---|---|
| Full-width | `3` | Center image large (600×450), two flanking side images half-size | CLP carousel #1 |
| Dual | `2` | Two equal 600×450 images side by side | CLP carousel #2, all sub-pages |
| Single | `1` | One centered 600×450 image | Special/single pages only |

> **Image standard:** 600×450px (4:3 ratio) for center/main slot. Side slots at 300×225px. Always provide images specific to the page's product category. Minimum 4 images per carousel so rotation is visible.

#### `ui.card-banner-slide-in`

Props: `image="..."` · `alt="..."` · `title="..."` · `href="..."` · `direction="left|right"`

| Variant | `direction` | Animation |
|---|---|---|
| Slide from left | `left` | Card enters from the left edge on scroll into view |
| Slide from right | `right` | Card enters from the right edge on scroll into view |

**Direction assignment — alternate per group, in menu order:**

| Page | Slide Direction |
|---|---|
| `/custom-apparel` (CLP) | `left` |
| `/signs` (CLP) | `right` |
| `/vehicle-graphics` (CLP) | `left` |
| `/stickers` (CLP) | `right` |
| `/promotional-items` (CLP) | `left` |
| `/top5pct-merchandise` (CLP) | `right` |
| `/design-services` (CLP) | `left` |
| Sub-pages within each group | alternate left → right → left within group |

---

### D. Testimonial Sourcing Rules

**Requirement: 2 testimonials per page — one near the top (after carousel), one lower (after content sections).**

- Source: `docs/top5pct_reviews.csv` — columns: `author`, `rating`, `platform`, `date`, `review`, `source_url`
- All reviews are 5-star Google reviews
- **Selection rule:** Choose reviews whose text is most relevant to the page's product or service category. Examples:
  - Apparel pages → reviews mentioning shirts, hoodies, printing, embroidery, custom apparel
  - Signs pages → reviews mentioning banners, signs, printing, business signage
  - Vehicle decal pages → reviews mentioning decals, magnets, truck graphics, vinyl
  - Sticker pages → reviews mentioning stickers, decals
  - Promo item pages → reviews mentioning koozies, mugs, towels, drinkware
  - Design services → reviews mentioning design work, logos, creativity
- Choose **two different reviewers** per page — do not repeat the same author on a page
- The two testimonials on a single page should ideally represent different use cases or tones (one about quality, one about speed/service, for example)
- Do not use the same review pair on more than one page if avoidable

**Content-relevant review examples by category (from CSV):**

| Category | Reviewer | Key Quote |
|---|---|---|
| Apparel — shirts | Anjell Edwards | "Ezra worked with us until we found a suitable option...beautiful design on a quality shirt" |
| Apparel — shirts | Brittany Harvey | "outstanding job on my custom shirts...precision and creativity...fast turnaround" |
| Apparel — DTF | Brittney Porter | "rush Dtf order...Everything here was top tier...service, the print and the establishment" |
| Apparel — group | Gerardo Munoz Jr | "custom apparel, from shirts to hoodies to hats they do it all...5 stars" |
| Apparel — embroidery | Ania Jarosz | "Beautiful stitching! We are very happy with the results!" |
| Apparel — speed | Brian Bergthold | "threw a shirt together with extremely short notice that was beyond expectations" |
| Signs — banners | Anita Estella | "pleased with the banner/signs he made for my church" |
| Signs — speed | Jerry E Olson | "needed a banner asap...SUPER helpful and very talented...Professional and Efficient" |
| Vehicle decals | Ken McCafferty | "created, produced and installed decals...very nice work, very fair pricing" |
| Vehicle decals | jack smith | "vinyl decals for my Trucking company...made me exactly what I needed at a fair price" |
| Vehicle decals | Manuel Elias | "Did the decals on my truck. Came out great." |
| Promo — koozies | Lori Schloegel | "custom koozies for a party in less than a week...turned out perfect" |
| Promo — mugs | lucia irausquin | "customized Coffee mugs were really good...nice experience" |
| General quality | Jackie Latham | "quick...correspondence by email is a great help for business. The quality is top notch." |
| General service | Abdul Jirreh | "Ezra had me come in on the same day...gave great prices and tips...ready two business days" |

---

### E. Sections Available — Not Yet in Standard Templates

| Section Component | Currently Used On | Candidate For |
|---|---|---|
| `sections.shirt-types-video` | `/custom-apparel/custom-shirts` only | Generalize → `sections.video-banner` with `videoId`, `headline`, `subheadline` props, then add to all CLP and Sub-Full pages |
| `sections.shirt-types-faq` | `/custom-apparel/custom-shirts` only | Generalize → `sections.page-faq` with `:items` array prop, then add to group shirt pages, signs sub-pages, promo sub-pages |
| `sections.shirt-types-grid` | `/custom-apparel/custom-shirts` only | CLP-specific or special pages only |
| `sections.represent-yourself` | `/custom-apparel/custom-shirts` only | Marketing pages / about / homepage |
| `sections.hero-full-bleed` | Unused on live pages | Can supplement `category-hero` on select pages |
| `sections.cta-design-your-own` | Unused on live pages | Consider adding to all apparel/design pages |
| `sections.top-level-category-section` | Unused | Review for applicability or deletion |
| `sections.our-services` | `/` (home) only | Consider adding to about/company pages |
| `sections.about-preview` | `/company` only | About Us group pages |
| `sections.featured-products` | `/` (home) only | Consider on CLPs |
| `sections.design-it-yourself` | Unused | Old — review for deletion |

> **Video Banner:** Must generalize `sections.shirt-types-video` before adding to other pages. This work is a prerequisite for video on any standard page.

---

## Audit Legend

| Symbol | Meaning |
|---|---|
| ✅ | Component is present on this page |
| ❌ | Component is missing — **must be added** |
| ❌× 2 | Both instances missing (applies to testimonials) |
| ❌× 1 | One instance present, second is missing |
| — | Not applicable for this page type |
| ➕ | Component present but needs content/position correction |

**Column key (abbreviated headers):**

| Header | Full Component | Notes |
|---|---|---|
| `same-day` | `sections.top5pct-same-day-service` | — |
| `carousel` | `ui.carousel-rotating-images` | CLPs get 2 (×2); sub-pages get 1 |
| `lp-banners` | `sections.lp-category-banners` | CLP only — full sub-cat count required |
| `card-img` | `sections.card-image-with-text` | Sub-pages + CLPs (info block) |
| `card-2img` | `sections.card-2image-with-text` | Sub-Full + optional CLP info block |
| `prod-grid` | `sections.product-grid` | — |
| `card-detail` | `sections.card-detailed-info` | Sub-Full + optional CLP info block |
| `slide-in` | `ui.card-banner-slide-in` | Direction alternates per group |
| `faq` | `sections.shirt-types-faq` (future: `sections.page-faq`) | Requires generalization first |
| `video` | `sections.shirt-types-video` (future: `sections.video-banner`) | Requires generalization first |
| `test×2` | `ui.banner-testimonial` (×2 required) | From `docs/top5pct_reviews.csv` |

> **Universal sections** (present on all non-utility pages — omitted from table to reduce noise):
> `sections.category-hero` · `ui.banner-medium-sunburst` · `sections.why-choose-us` · `sections.cta-free-quote` · `sections.cta-ready-to-get-started` · `sections.review-banner` · `sections.map-section` · `layouts.page` · `x-slot`

---

## 1. Home

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/` | Special | 17 | — | — | — | — | — | ✅ | — | — | ✅ | — |

> Home uses unique sections: `home-page-hero`, `home-page-services-accordion`, `our-services`, `featured-products`. Not subject to CLP or Sub-Full standard. No structural gaps — testimonial and carousel additions can be considered in a separate pass.

---

## 2. Custom Apparel

`/custom-apparel` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **17** sub-categories (see Section 10).

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/custom-apparel` | **CLP** | 12 | ✅ | ❌×2 | ❌ | ➕ relocate | — | ✅ | — | ❌ | ❌ | ❌×2 |
| `/custom-apparel/dtf-transfers` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/dye-sublimation` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/screen-printing` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/embroidery` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/rhinestone-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/vinyl-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/glitter-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/puff-shirts` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/glow-in-the-dark-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/flock-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/brick-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/holographic-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/foil-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/reflective-shirts` | Sub-Basic | 11 | ✅ | ❌ | — | ❌ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/reunion-shirts` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/spirit-wear-shirts` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/custom-apparel/corporate-wear-shirts` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |

**CLP Gaps — `/custom-apparel`:**
- ❌ Missing: `sections.lp-category-banners` — 17 sub-categories required (see Section 10)
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3 first, visible=2 second)
- ❌ Missing: `ui.card-banner-slide-in` direction=`left`
- ❌ Missing: `ui.banner-testimonial` ×2 — suggest: Anjell Edwards (near top), Brittany Harvey (lower)
- ➕ Has `sections.card-image-with-text` — reposition as the CLP info block between testimonial #1 and carousel #2

**Custom Shirts (Special — `/custom-apparel/custom-shirts`) — Orphaned, see Section 12.**

---

## 3. Select a Sign

`/signs` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **11** sub-categories (see Section 10).

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/signs` | **CLP** | 12 | ✅ | ❌×2 | ❌ | — | — | ✅ | — | ❌ | ❌ | ❌×1 |
| `/signs/banners` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/signs/window-signs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/wall-signs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/floor-signs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/door-signs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/posters` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/signs/yard-signs` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/signs/sidewalk-signs` | Sub-Partial+ | 14 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/signs/parking-signs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/table-cloths` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/signs/table-runners` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |

**CLP Gaps — `/signs`:**
- ❌ Missing: `sections.lp-category-banners` — 11 sub-categories required (see Section 10)
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3, then visible=2)
- ❌ Missing: `ui.card-banner-slide-in` direction=`right`
- ❌ Missing: `ui.banner-testimonial` #2 — suggest: Anita Estella (near top), Jerry E Olson (lower)
- ➕ Add `sections.card-image-with-text` info block as CLP content

**Sub-Partial Gaps (window, wall, floor, door, parking, table-cloths):**
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.card-detailed-info`
- ❌ Missing: `ui.carousel-rotating-images` (visible=2)
- ❌ Missing: `ui.card-banner-slide-in`
- ❌ Missing: `ui.banner-testimonial` #2

**Sidewalk Signs:** has `card-detailed-info`, missing `card-2image-with-text`.

**Slide-in direction for signs sub-pages (alternating):**
banners=`left` · window-signs=`right` · wall-signs=`left` · floor-signs=`right` · door-signs=`left` · posters=`right` · yard-signs=`left` · sidewalk-signs=`right` · parking-signs=`left` · table-cloths=`right` · table-runners=`left`

---

## 4. Vehicle Decals

`/vehicle-graphics` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **3** sub-categories — **already present ✅**.

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/vehicle-graphics` | **CLP** ✅ | 12 | ✅ | ❌×2 | ✅ | — | — | ✅ | — | ❌ | ❌ | ❌×1 |
| `/vehicle-graphics/automobile-graphics` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/vehicle-graphics/vehicle-magnets` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/vehicle-graphics/dot-decals` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |

**CLP Gaps — `/vehicle-graphics`:**
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3, then visible=2)
- ❌ Missing: `ui.card-banner-slide-in` direction=`left`
- ❌ Missing: `ui.banner-testimonial` #2 — suggest: Ken McCafferty (near top), Manuel Elias (lower)
- ➕ Add `sections.card-image-with-text` info block as CLP content

**Sub-Full Gaps (all 3 sub-pages — content structure is complete, add new UI only):**
- ❌ Missing: `ui.carousel-rotating-images` (visible=2)
- ❌ Missing: `ui.card-banner-slide-in`
- ❌ Missing: `ui.banner-testimonial` #2

**Slide-in direction for vehicle sub-pages:**
automobile-graphics=`left` · vehicle-magnets=`right` · dot-decals=`left`

---

## 5. Stickers

`/stickers` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **2** sub-categories — **already present ✅**.

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/stickers` | **CLP** ✅ | 12 | ✅ | ❌×2 | ✅ | — | — | ✅ | — | ❌ | ❌ | ❌×1 |
| `/stickers/standard-stickers` | Sub-Full ✅ | 15 | ✅ | ❌ | — | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌×1 |
| `/stickers/custom-shaped-stickers` | Sub-Partial+ | 14 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ✅ | ❌ | ❌ | ❌×1 |

**CLP Gaps — `/stickers`:**
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3, then visible=2)
- ❌ Missing: `ui.card-banner-slide-in` direction=`right`
- ❌ Missing: `ui.banner-testimonial` #2
- ➕ Add `sections.card-image-with-text` info block as CLP content

**Custom-Shaped Stickers:** has `card-detailed-info`, missing `card-2image-with-text`. Also needs carousel, slide-in, second testimonial.

**Slide-in direction for stickers sub-pages:**
standard-stickers=`left` · custom-shaped-stickers=`right`

---

## 6. Promotional Items

`/promotional-items` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **6** sub-categories (see Section 10).

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/promotional-items` | **CLP** | 10 | ✅ | ❌×2 | ❌ | — | — | ✅ | — | ❌ | — | ❌×2 |
| `/promotional-items/mugs` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/promotional-items/can-koozies` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/promotional-items/towels` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/promotional-items/drink-coasters` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/promotional-items/tote-bags` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/promotional-items/mouse-pads` | Sub-Partial | 12 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |

**CLP Gaps — `/promotional-items`:**
- ❌ Missing: `sections.lp-category-banners` — 6 sub-categories required (see Section 10)
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3, then visible=2)
- ❌ Missing: `ui.card-banner-slide-in` direction=`left`
- ❌ Missing: `ui.banner-testimonial` ×2 — suggest: Lori Schloegel (koozies, near top), lucia irausquin (mugs, lower)
- ➕ Add `sections.card-image-with-text` info block as CLP content

**Sub-Partial Gaps (all 6 sub-pages):**
- ❌ Missing: `sections.card-2image-with-text`
- ❌ Missing: `sections.card-detailed-info`
- ❌ Missing: `ui.carousel-rotating-images` (visible=2)
- ❌ Missing: `ui.card-banner-slide-in`
- ❌ Missing: `ui.banner-testimonial` #2

**Slide-in direction for promo sub-pages:**
mugs=`left` · can-koozies=`right` · towels=`left` · drink-coasters=`right` · tote-bags=`left` · mouse-pads=`right`

---

## 7. Top 5% Merchandise

`/top5pct-merchandise` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must be added — no CSV sub-categories; list merch product types (Tees, Hoodies, Hats, Accessories, etc.) manually.

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/top5pct-merchandise` | **CLP** | 10 | ✅ | ❌×2 | ❌ | — | — | ✅ | — | ❌ | — | ❌×2 |

**CLP Gaps:**
- ❌ Missing: `sections.lp-category-banners` — define merch categories manually (Tees, Hoodies, Hats, Accessories, etc.)
- ❌ Missing: `ui.carousel-rotating-images` ×2 (visible=3, then visible=2)
- ❌ Missing: `ui.card-banner-slide-in` direction=`right`
- ❌ Missing: `ui.banner-testimonial` ×2 — suggest general quality reviews

---

## 8. Design Services

`/design-services` is a Category Landing Page (`Is Category Landing Page = y`).
`sections.lp-category-banners` must list all **4** sub-categories (see Section 10).

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/design-services` | **CLP** | 10 | ✅ | ❌×2 | ❌ | — | — | ❌ | — | ❌ | — | ❌×2 |
| `/design-services/logo-design` | Sub-Partial | 11 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/design-services/graphic-design` | Sub-Partial | 11 | ✅ | ❌ | — | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌×1 |
| `/design-services/online-designer` | Sub-Basic | 10 | ✅ | ❌ | — | ❌ | — | ❌ | — | ❌ | — | ❌×2 |
| `/design-services/design-catalogs` | Sub-Basic | 10 | ✅ | ❌ | — | ❌ | — | ❌ | — | ❌ | — | ❌×2 |

**CLP Gaps — `/design-services`:**
- ❌ Missing: `sections.lp-category-banners` — 4 sub-categories required (see Section 10)
- ❌ Missing: `sections.product-grid`
- ❌ Missing: `ui.carousel-rotating-images` ×2
- ❌ Missing: `ui.card-banner-slide-in` direction=`left`
- ❌ Missing: `ui.banner-testimonial` ×2

**Sub-Page Gaps (logo-design, graphic-design):**
- ❌ Missing: `sections.card-2image-with-text`, `sections.card-detailed-info`, carousel, slide-in, testimonial #2

**Sub-Page Gaps (online-designer, design-catalogs):**
- ❌ Missing: `sections.card-image-with-text`, `sections.card-2image-with-text`, `sections.product-grid`, `sections.card-detailed-info`, carousel, slide-in, `ui.banner-testimonial` ×2

**Slide-in direction for design sub-pages:**
logo-design=`left` · graphic-design=`right` · online-designer=`left` · design-catalogs=`right`

---

## 9. About Us

| URL | Type | Total | same-day | carousel | lp-banners | card-img | card-2img | prod-grid | card-detail | slide-in | video | test×2 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|
| `/about` | Special | 9 | ✅ | — | — | — | — | — | — | — | — | ❌×2 |
| `/company` | Special | 10 | ✅ | — | — | — | — | — | — | — | — | ❌×1 |
| `/portfolio` | Special | 9 | ✅ | — | — | — | — | — | — | — | — | ❌×2 |
| `/resources` | ❌ New | — | — | — | — | — | — | — | — | — | — | — |

> These are content-specific pages not subject to the CLP or Sub-Full template. Testimonials are still recommended. `/company` has `sections.about-preview`. `/resources` does not yet exist.

---

## 10. CLP Summary — `sections.lp-category-banners` Full Count

The CSV marks **7** pages as Category Landing Pages (`Is Category Landing Page = y`). Only **2** currently have `sections.lp-category-banners`. **All 7 must have a full count of banners listing every sub-category.**

| CLP URL | lp-banners? | Banner Count | Sub-Categories to List |
|---|---|---|---|
| `/custom-apparel` | ❌ Missing | **17** | DTF Transfers, Dye-Sublimation, Screen Printing, Embroidery, Rhinestone, Digital Vinyl, Glitter, Puff, Glow in the Dark, Flock, Brick, Holographic, Foil, Reflective, Family Reunion, Spirit Wear, Corporate Wear |
| `/signs` | ❌ Missing | **11** | Banners, Window Signs, Wall Signs, Floor Signs, Door Signs, Posters, Yard Signs, A-Frame/Sidewalk Signs, Parking Signs, Table Cloths, Table Runners |
| `/vehicle-graphics` | ✅ Present | **3** ✅ | Automobile Graphics, Vehicle Magnets, DOT Decals |
| `/stickers` | ✅ Present | **2** ✅ | Standard Stickers, Custom Shaped Stickers |
| `/promotional-items` | ❌ Missing | **6** | Mugs, Can Koozies, Towels, Drink Coasters, Drawstring/Tote Bags, Mouse Pads |
| `/top5pct-merchandise` | ❌ Missing | **TBD** | Define merch product types manually — not in CSV (e.g. Tees, Hoodies, Hats, Accessories) |
| `/design-services` | ❌ Missing | **4** | Logo Design, Layout/Graphic Design, Online Designer, Design Catalogs |

**5 of 7 CLPs are missing `sections.lp-category-banners`.** This is the highest-priority structural gap.

---

## 11. Utility / Single Pages

These pages exist and are functional but do not follow the standard section templates.

| URL | Type | Total | Notes |
|---|---|---|---|
| `/cart` | Utility | 2 | Livewire `cart.cart-page` — no sections needed |
| `/checkout` | Utility | 2 | Livewire `cart.checkout-page` — no sections needed |
| `/order-confirmation` | Utility | 2 | Livewire `cart.order-confirmation` — no sections needed |
| `/page-management` | Admin | 5 | Internal tool — no standard sections |
| `/collection` | Template | 10 | Dynamic template via `/collections/{slug}` — has standard sections; add carousel + slide-in in future pass |
| `/product` | Template | 9 | Dynamic template via `/products/{slug}` |
| `/contact` | Single | 9 | Not in mega menu — functional but missing product-grid. Nav decision needed: add to About Us or footer only |
| `/stores` | Single | 9 | Not in mega menu — functional. Nav decision needed |

> **Terms & Privacy pages:** Not found in the page scanner — do not exist yet as Blade views. When added, will be utility pages with minimal sections.

---

## 12. Orphaned Pages

Pages that exist in `resources/views/pages/` but have no place in the current megamenu plan.

### A. Old/Duplicate Routes — Delete After Redirect

| URL | Total | Superseded By | Action |
|---|---|---|---|
| `/custom-apparel/embroidery-shirts` | 11 | `/custom-apparel/embroidery` | 301 redirect → delete |
| `/custom-apparel/spirit-wear` | 15 | `/custom-apparel/spirit-wear-shirts` | 301 redirect → delete |
| `/custom-apparel/corporate-wear` | 15 | `/custom-apparel/corporate-wear-shirts` | 301 redirect → delete |

### B. Orphaned Apparel Pages — Decision Required

| URL | Total | Type | Notes |
|---|---|---|---|
| `/custom-apparel/custom-shirts` | 18 | Special | Richest page on site — has shirt-types-grid, shirt-types-video, shirt-types-faq, represent-yourself. Gateway to all shirt types. Decide: promote to mega menu or keep as hidden SEO/landing page |
| `/custom-apparel/pattern-shirts` | 11 | Sub-Basic | No mega menu entry. Decide: add to Specialty Materials group or delete |
| `/custom-apparel/picture-shirts` | 11 | Sub-Basic | No mega menu entry. Decide: add to Specialty Materials group or delete |

### C. Old Decals Group — Refactored, Originals Still Live

| URL | Total | Refactored Into | Action |
|---|---|---|---|
| `/decals` (index) | 12 | Removed from nav | 301 redirect to `/stickers` → delete |
| `/decals/stickers` | 15 | `/stickers/standard-stickers` | 301 redirect → delete |
| `/decals/window-wall-floor-decals` | 15 | No single replacement | Decide: split content across window/wall/floor-signs pages, then 301 → `/signs` |
| `/decals/coronavirus-decals` | 12 | None | Keep for SEO or 301 → `/stickers` |

### D. Old Design-It-Yourself Group — Refactored, Originals Still Live

| URL | Total | Refactored Into | Action |
|---|---|---|---|
| `/design-it-yourself` (index) | 10 | `/design-services` | 301 redirect → delete |
| `/design-it-yourself/online-designer` | 10 | `/design-services/online-designer` | 301 redirect → delete |
| `/design-it-yourself/design-catalogs` | 10 | `/design-services/design-catalogs` | 301 redirect → delete |

### E. Other Orphaned Pages

| URL | Total | Notes |
|---|---|---|
| `/signs/business-signs` | 15 | Sub-Full page. Content should migrate to window/wall/floor/door-signs. 301 redirect → `/signs` after those sub-pages are completed. |
| `/signs/coronavirus-signs` | 13 | COVID-era page. Keep for SEO traffic or 301 → `/signs/banners`. |
| `/company/resources` | 9 | Lives at `/company/resources`, not `/resources`. Decide: rename/redirect to `/resources` (new plan URL) or keep both. |

---

## 13. Action Items — Priority Order

### Priority 1 — CLP `lp-category-banners` (5 missing)

| Page | Action |
|---|---|
| `/custom-apparel` | Add `sections.lp-category-banners` with all 17 sub-category entries |
| `/signs` | Add `sections.lp-category-banners` with all 11 sub-category entries |
| `/promotional-items` | Add `sections.lp-category-banners` with 6 promo entries |
| `/top5pct-merchandise` | Add `sections.lp-category-banners` — define merch product types |
| `/design-services` | Add `sections.lp-category-banners` with 4 service entries + add `sections.product-grid` |

### Priority 2 — New UI: Carousel + Slide-In + Second Testimonial (all 7 CLPs)

For each CLP: add carousel #1 (`visible=3`) after same-day, add info block(s) (card-img), add carousel #2 (`visible=2`) after info, add slide-in (see direction table), add second testimonial. Source both testimonials from `docs/top5pct_reviews.csv`.

### Priority 3 — New UI: Carousel + Slide-In + Second Testimonial (all sub-pages)

For each Sub-Full and Sub-Partial page: add `ui.carousel-rotating-images` (`visible=2`) after same-day, move/add testimonial #1 to after carousel, add `ui.card-banner-slide-in` after product content, add testimonial #2 lower.

### Priority 4 — Sub-Partial → Sub-Full (add `card-2image-with-text` + `card-detailed-info`)

| Group | Pages |
|---|---|
| Custom Apparel | dye-sublimation, screen-printing, puff-shirts, sidewalk-signs (only needs card-2img), custom-shaped-stickers (only needs card-2img) |
| Signs | window-signs, wall-signs, floor-signs, door-signs, parking-signs, table-cloths |
| Promotional Items | mugs, can-koozies, towels, drink-coasters, tote-bags, mouse-pads |
| Design Services | logo-design, graphic-design |

### Priority 5 — Sub-Basic → Sub-Full (add all 3 content sections)

| Group | Pages |
|---|---|
| Custom Apparel | dtf-transfers, embroidery, rhinestone-shirts, vinyl-shirts, glitter-shirts, glow-in-the-dark-shirts, flock-shirts, brick-shirts, holographic-shirts, foil-shirts, reflective-shirts |
| Design Services | online-designer, design-catalogs |

### Priority 6 — Video Banner (requires component generalization first)

Generalize `sections.shirt-types-video` → `sections.video-banner` with `videoId`, `headline`, `subheadline` props. Then add to all CLP and Sub-Full pages. This is a prerequisite.

### Priority 7 — FAQ Section (requires component generalization first)

Generalize `sections.shirt-types-faq` → `sections.page-faq` with `:items` array prop. Then add to: reunion-shirts, spirit-wear-shirts, corporate-wear-shirts, signs sub-pages (banners, yard-signs, posters), all promo sub-pages.

### Priority 8 — Orphaned Page Cleanup

1. 301 redirects + delete: embroidery-shirts, spirit-wear, corporate-wear (duplicates)
2. 301 redirects + delete: all `design-it-yourself/*` → `design-services/*`
3. 301 redirect: `decals/stickers` → `stickers/standard-stickers`
4. Decisions: pattern-shirts, picture-shirts, custom-shirts (promote or keep hidden), coronavirus pages, window-wall-floor-decals, business-signs, company/resources
