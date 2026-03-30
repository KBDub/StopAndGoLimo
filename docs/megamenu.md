# Mega Menu — Navigation Structure
## Top 5 Percent Custom Signage & Apparel

---

## Standard Page Section Layout (MANDATORY)

All category landing pages and sub-category pages must follow this exact section order. No exceptions. New pages must replicate this structure. New pages should use existing graphics and pull idea/content from other related pages.

### Category Landing Page (index) Layout

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />
    <x-sections.lp-category-banners :banners="[...]" />
    <x-sections.product-grid collectionSlug="..." />
    <x-ui.banner-testimonial quote="..." name="..." />    {{-- optional --}}
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
```

### Sub-Category Page Layout

```blade
<x-layouts.page title="..." metaDescription="..." currentPage="...">
    <x-sections.category-hero ... />
    <x-ui.banner-medium-sunburst />
    <x-sections.top5pct-same-day-service serviceType="..." displayServiceType="..." />
    <x-ui.banner-testimonial quote="..." name="..." />    {{-- optional --}}
    <x-sections.card-image-with-text ... />              {{-- 2–3 blocks --}}
    <x-sections.card-2image-with-text ... />             {{-- optional --}}
    <x-sections.product-grid collectionSlug="..." parentSlug="..." />
    <x-sections.card-detailed-info ... />
    <x-ui.banner-testimonial quote="..." name="..." />
    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
```

---

## Mega Menu Style

**Style:** Mega Menu Style 1 (modeled on https://overflow-megamenu-1.webflow.io/)

**Dropdown Panel Layout:**
- **Left/Center:** Overview link at top → Category groups in a 2-column grid, each with a category title label and 2–3 sub-links with short descriptions
- **Right:** Branded image/ad panel (Top 5 Percent branded — ad panel is on the RIGHT, not the left as in the reference site)

---

## 9 Main Menu Items

### 1. Home
- **URL:** `/`
- **Page Status:** ✅ Exists
- **Dropdown:** None

---

### 2. Custom Apparel
- **URL:** `/custom-apparel`
- **Page Status:** ✅ Exists (`resources/views/pages/custom-apparel/index.blade.php`)
- **Dropdown:** Yes — 3-level mega menu

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Custom Apparel | `/custom-apparel` | ✅ Exists | |
| **Printing Options** | | | | |
| | Direct to Film (DTF) | `/custom-apparel/dtf-transfers` | ✅ Exists | |
| | Dye-Sublimation | `/custom-apparel/dye-sublimation` | ❌ New page | Use existing shirt graphics |
| | Screen Printing | `/custom-apparel/screen-printing` | ❌ New page | Use existing shirt graphics |
| | Embroidery | `/custom-apparel/embroidery` | ✅ Exists | URL changed from `/embroidery-shirts` → `/embroidery` (may add sub-sub pages) |
| | Rhinestone | `/custom-apparel/rhinestone-shirts` | ✅ Exists | |
| | Digital Vinyl | `/custom-apparel/vinyl-shirts` | ✅ Exists | |
| **Specialty Materials** | | | | |
| | Glitter | `/custom-apparel/glitter-shirts` | ✅ Exists | |
| | Puff | `/custom-apparel/puff-shirts` | ❌ New page | Use existing shirt graphics |
| | Glow in the Dark | `/custom-apparel/glow-in-the-dark-shirts` | ✅ Exists | |
| | Flock | `/custom-apparel/flock-shirts` | ✅ Exists | |
| | Brick | `/custom-apparel/brick-shirts` | ✅ Exists | |
| | Holographic | `/custom-apparel/holographic-shirts` | ✅ Exists | |
| | Foil | `/custom-apparel/foil-shirts` | ✅ Exists | |
| | Reflective | `/custom-apparel/reflective-shirts` | ✅ Exists | |
| **Group Shirts** | | | | |
| | Family Reunion | `/custom-apparel/reunion-shirts` | ✅ Exists | |
| | Spirit Wear | `/custom-apparel/spirit-wear-shirts` | ✅ Exists | URL changed from `/spirit-wear` → `/spirit-wear-shirts` |
| | Corporate Wear | `/custom-apparel/corporate-wear-shirts` | ✅ Exists | URL changed from `/corporate-wear` → `/corporate-wear-shirts` |

---

### 3. Select a Sign
- **URL:** `/signs`
- **Nav Label Change:** Renamed from "Signs" → "Select a Sign"
- **Page Status:** ✅ Exists (`resources/views/pages/signs/index.blade.php`)
- **Dropdown:** Yes — 3-level mega menu

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Select a Sign | `/signs` | ✅ Exists | |
| **Business Signs** | | | | |
| | Banners | `/signs/banners` | ✅ Exists | |
| | Window Signs | `/signs/window-signs` | ❌ New page | Pull content from business-signs page |
| | Wall Signs | `/signs/wall-signs` | ❌ New page | Pull content from business-signs page |
| | Floor Signs | `/signs/floor-signs` | ❌ New page | Pull content from business-signs page |
| | Door Signs | `/signs/door-signs` | ❌ New page | Pull content from business-signs page |
| | Posters | `/signs/posters` | ✅ Exists | |
| **Ground Signs** | | | | |
| | Yard Signs | `/signs/yard-signs` | ✅ Exists | |
| | A-Frame / Sidewalk Signs | `/signs/sidewalk-signs` | ✅ Exists | |
| | Parking Signs | `/signs/parking-signs` | ❌ New page | Use existing signs graphics |
| **Table Signs** | | | | |
| | Table Cloths | `/signs/table-cloths` | ❌ New page | Use existing table-runners graphics |
| | Table Runners | `/signs/table-runners` | ✅ Exists | |

---

### 4. Vehicle Decals
- **URL:** `/vehicle-graphics`
- **Nav Label Change:** Renamed from "Vehicle Graphics" → "Vehicle Decals"
- **Page Status:** ✅ Exists (`resources/views/pages/vehicle-graphics/index.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Vehicle Decals | `/vehicle-graphics` | ✅ Exists | |
| **Vehicle Graphic Options** | | | | |
| | Automobile Graphics | `/vehicle-graphics/automobile-graphics` | ✅ Exists | |
| | Vehicle Magnets | `/vehicle-graphics/vehicle-magnets` | ✅ Exists | |
| | DOT Decals | `/vehicle-graphics/dot-decals` | ✅ Exists | |

---

### 5. Stickers
- **URL:** `/stickers`
- **Nav Label Change:** Was buried under "Decals" — now a top-level menu item
- **Page Status:** ❌ New landing page needed
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Stickers | `/stickers` | ❌ New landing page | |
| **Standard** | | | | |
| | Standard Stickers | `/stickers/standard-stickers` | ♻️ Refactor existing | Refactor current `/decals/stickers` page — modify only, do not rebuild |
| **Custom Shaped** | | | | |
| | Custom Shaped Stickers | `/stickers/custom-shaped-stickers` | ❌ New page | Use existing sticker/decal graphics |

---

### 6. Promotional Items
- **URL:** `/promotional-items`
- **Page Status:** ✅ Exists (`resources/views/pages/promotional-items.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Promotional Items | `/promotional-items` | ✅ Exists | |
| **Promo Products** | | | | |
| | Mugs | `/promotional-items/mugs` | ❌ New page | Use existing promo graphics |
| | Can Koozies | `/promotional-items/can-koozies` | ❌ New page | Use existing promo graphics |
| | Towels | `/promotional-items/towels` | ❌ New page | Use existing promo graphics |
| | Drink Coasters | `/promotional-items/drink-coasters` | ❌ New page | Use existing promo graphics |
| | Drawstring / Tote Bags | `/promotional-items/tote-bags` | ❌ New page | Use existing promo graphics |
| | Mouse Pads | `/promotional-items/mouse-pads` | ❌ New page | Use existing promo graphics |

---

### 7. Top 5% Merchandise
- **URL:** `/top5pct-merchandise`
- **Page Status:** ✅ Exists (`resources/views/pages/top5pct-merchandise.blade.php`)
- **Dropdown:** None

---

### 8. Design Services
- **URL:** `/design-services`
- **Nav Label Change:** Renamed from "Design It Yourself" → "Design Services"
- **Page Status:** ♻️ Refactor existing (`resources/views/pages/design-it-yourself/`)
- **Dropdown:** Yes — 2-level mega menu
- **Source pages to refactor (do not rebuild):**
  - `/design-it-yourself` (index) → becomes `/design-services`
  - `/design-it-yourself/online-designer` → becomes `/design-services/online-designer`
  - `/design-it-yourself/design-catalogs` → becomes `/design-services/design-catalogs`

| Category Title | Sub-link | URL | Page Status | Notes |
|---|---|---|---|---|
| **Overview** | Design Services | `/design-services` | ♻️ Refactor | Refactor from `/design-it-yourself` index |
| **Logo Design** | | | | |
| | Logo Design | `/design-services/logo-design` | ❌ New page | New sub-page |
| **Layout / Graphic Design** | | | | |
| | Layout & Graphic Design | `/design-services/graphic-design` | ❌ New page | New sub-page |
| | Online Designer | `/design-services/online-designer` | ♻️ Refactor | Refactor from `/design-it-yourself/online-designer` |
| | Design Catalogs | `/design-services/design-catalogs` | ♻️ Refactor | Refactor from `/design-it-yourself/design-catalogs` |

---

### 9. About Us
- **URL:** `/about`
- **Page Status:** ✅ Exists (`resources/views/pages/about.blade.php`)
- **Dropdown:** Yes — simple dropdown (not a full mega menu panel)

| Sub-link | URL | Page Status | Notes |
|---|---|---|---|
| About Us | `/about` | ✅ Exists | |
| Company | `/company` | ❌ New page | New page using `x-sections.about-preview` component |
| Portfolio | `/portfolio` | ✅ Exists | |
| Resources | `/resources` | ❌ New page | |

---

## Summary of Work Required

### URL Changes (existing pages — route + file rename only)
| Old URL | New URL | File |
|---|---|---|
| `/custom-apparel/embroidery-shirts` | `/custom-apparel/embroidery` | `embroidery-shirts.blade.php` → `embroidery.blade.php` |
| `/custom-apparel/spirit-wear` | `/custom-apparel/spirit-wear-shirts` | `spirit-wear.blade.php` → `spirit-wear-shirts.blade.php` |
| `/custom-apparel/corporate-wear` | `/custom-apparel/corporate-wear-shirts` | `corporate-wear.blade.php` → `corporate-wear-shirts.blade.php` |

### Refactored Pages (modify existing — do not rebuild)
| Source | New URL | Notes |
|---|---|---|
| `/decals/stickers` | `/stickers/standard-stickers` | Modify only |
| `/design-it-yourself` (index) | `/design-services` | Refactor — rename, update content |
| `/design-it-yourself/online-designer` | `/design-services/online-designer` | Refactor — rename, update content |
| `/design-it-yourself/design-catalogs` | `/design-services/design-catalogs` | Refactor — rename, update content |

### New Landing Pages (2)
| Page | URL | Notes |
|---|---|---|
| Stickers | `/stickers` | Use existing sticker/decal graphics |
| Design Services | `/design-services` | Refactored from design-it-yourself |

### New Sub-Category Pages (21)
| Page | URL | Parent | Source Material |
|---|---|---|---|
| Dye-Sublimation | `/custom-apparel/dye-sublimation` | Custom Apparel | Existing shirt graphics |
| Screen Printing | `/custom-apparel/screen-printing` | Custom Apparel | Existing shirt graphics |
| Puff Shirts | `/custom-apparel/puff-shirts` | Custom Apparel | Existing shirt graphics |
| Window Signs | `/signs/window-signs` | Select a Sign | business-signs page content |
| Wall Signs | `/signs/wall-signs` | Select a Sign | business-signs page content |
| Floor Signs | `/signs/floor-signs` | Select a Sign | business-signs page content |
| Door Signs | `/signs/door-signs` | Select a Sign | business-signs page content |
| Parking Signs | `/signs/parking-signs` | Select a Sign | Existing signs graphics |
| Table Cloths | `/signs/table-cloths` | Select a Sign | table-runners graphics |
| Custom Shaped Stickers | `/stickers/custom-shaped-stickers` | Stickers | Existing sticker/decal graphics |
| Mugs | `/promotional-items/mugs` | Promotional Items | Existing promo graphics |
| Can Koozies | `/promotional-items/can-koozies` | Promotional Items | Existing promo graphics |
| Towels | `/promotional-items/towels` | Promotional Items | Existing promo graphics |
| Drink Coasters | `/promotional-items/drink-coasters` | Promotional Items | Existing promo graphics |
| Drawstring / Tote Bags | `/promotional-items/tote-bags` | Promotional Items | Existing promo graphics |
| Mouse Pads | `/promotional-items/mouse-pads` | Promotional Items | Existing promo graphics |
| Logo Design | `/design-services/logo-design` | Design Services | Existing design graphics |
| Layout & Graphic Design | `/design-services/graphic-design` | Design Services | Existing design graphics |
| Company | `/company` | About Us | Uses `x-sections.about-preview` component |
| Resources | `/resources` | About Us | New page |

---

## Removed from Current Navigation
- **"Design It Yourself"** — replaced by Design Services (pages refactored, not deleted)
- **"Decals"** as a top-level item — Stickers promoted to its own top-level entry
- **"Signs"** label — renamed to "Select a Sign"
- **"Vehicle Graphics"** label — renamed to "Vehicle Decals"
