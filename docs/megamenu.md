# Mega Menu — Navigation Structure
## Top 5 Percent Custom Signage & Apparel

---

## Standard Page Section Layout (MANDATORY)

All category landing pages and sub-category pages must follow this exact section order. No exceptions. New pages must replicate this structure.

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

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Custom Apparel (overview) | `/custom-apparel` | ✅ Exists |
| **Printing Options** | | | |
| | Direct to Film (DTF) | `/custom-apparel/dtf-transfers` | ✅ Exists |
| | Dye-Sublimation | `/custom-apparel/dye-sublimation` | ❌ New page needed |
| | Screen Printing | `/custom-apparel/screen-printing` | ❌ New page needed |
| | Embroidery | `/custom-apparel/embroidery-shirts` | ✅ Exists |
| | Rhinestone | `/custom-apparel/rhinestone-shirts` | ✅ Exists |
| | Digital Vinyl | `/custom-apparel/vinyl-shirts` | ✅ Exists |
| **Specialty Materials** | | | |
| | Glitter | `/custom-apparel/glitter-shirts` | ✅ Exists |
| | Puff | `/custom-apparel/puff-shirts` | ❌ New page needed |
| | Glow in the Dark | `/custom-apparel/glow-in-the-dark-shirts` | ✅ Exists |
| | Flock | `/custom-apparel/flock-shirts` | ✅ Exists |
| | Brick | `/custom-apparel/brick-shirts` | ✅ Exists |
| | Holographic | `/custom-apparel/holographic-shirts` | ✅ Exists |
| | Foil | `/custom-apparel/foil-shirts` | ✅ Exists |
| | Reflective | `/custom-apparel/reflective-shirts` | ✅ Exists |
| **Group Shirts** | | | |
| | Family Reunion | `/custom-apparel/reunion-shirts` | ✅ Exists |
| | Spirit Wear | `/custom-apparel/spirit-wear` | ✅ Exists |
| | Corporate Wear | `/custom-apparel/corporate-wear` | ✅ Exists |

---

### 3. Select a Sign
- **URL:** `/signs`
- **Nav Label Change:** Renamed from "Signs" → "Select a Sign"
- **Page Status:** ✅ Exists (`resources/views/pages/signs/index.blade.php`)
- **Dropdown:** Yes — 3-level mega menu

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Select a Sign (overview) | `/signs` | ✅ Exists |
| **Business Signs** | | | |
| | Banners | `/signs/banners` | ✅ Exists |
| | Window Signs | `/signs/window-signs` | ❌ New page needed |
| | Wall Signs | `/signs/wall-signs` | ❌ New page needed |
| | Floor Signs | `/signs/floor-signs` | ❌ New page needed |
| | Door Signs | `/signs/door-signs` | ❌ New page needed |
| | Posters | `/signs/posters` | ✅ Exists |
| **Ground Signs** | | | |
| | Yard Signs | `/signs/yard-signs` | ✅ Exists |
| | A-Frame / Sidewalk Signs | `/signs/sidewalk-signs` | ✅ Exists |
| | Parking Signs | `/signs/parking-signs` | ❌ New page needed |
| **Table Signs** | | | |
| | Table Cloths | `/signs/table-cloths` | ❌ New page needed |
| | Table Runners | `/signs/table-runners` | ✅ Exists |

---

### 4. Vehicle Decals
- **URL:** `/vehicle-graphics`
- **Nav Label Change:** Renamed from "Vehicle Graphics" → "Vehicle Decals"
- **Page Status:** ✅ Exists (`resources/views/pages/vehicle-graphics/index.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Vehicle Decals (overview) | `/vehicle-graphics` | ✅ Exists |
| **Vehicle Graphic Options** | | | |
| | Automobile Graphics | `/vehicle-graphics/automobile-graphics` | ✅ Exists |
| | Vehicle Magnets | `/vehicle-graphics/vehicle-magnets` | ✅ Exists |
| | DOT Decals | `/vehicle-graphics/dot-decals` | ✅ Exists |

---

### 5. Stickers
- **URL:** `/stickers`
- **Nav Label Change:** Was buried under "Decals" — now a top-level menu item
- **Page Status:** ❌ New landing page needed
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Stickers (overview) | `/stickers` | ❌ New page needed |
| **Standard** | | | |
| | Standard Stickers | `/stickers/standard` | ❌ New page needed |
| **Custom Shaped** | | | |
| | Custom Shaped Stickers | `/stickers/custom-shaped` | ❌ New page needed |

---

### 6. Promotional Items
- **URL:** `/promotional-items`
- **Page Status:** ✅ Exists (`resources/views/pages/promotional-items.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Promotional Items (overview) | `/promotional-items` | ✅ Exists |
| **Promo Products** | | | |
| | Mugs | `/promotional-items/mugs` | ❌ New page needed |
| | Can Koozies | `/promotional-items/can-koozies` | ❌ New page needed |
| | Towels | `/promotional-items/towels` | ❌ New page needed |
| | Drink Coasters | `/promotional-items/drink-coasters` | ❌ New page needed |
| | Drawstring / Tote Bags | `/promotional-items/tote-bags` | ❌ New page needed |
| | Mouse Pads | `/promotional-items/mouse-pads` | ❌ New page needed |

---

### 7. Top 5% Merchandise
- **URL:** `/top5pct-merchandise`
- **Page Status:** ✅ Exists (`resources/views/pages/top5pct-merchandise.blade.php`)
- **Dropdown:** None

---

### 8. Design Services
- **URL:** `/design-services`
- **Nav Label Change:** Renamed from "Design It Yourself" → "Design Services"
- **Page Status:** ❌ New landing page needed
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status |
|---|---|---|---|
| **Overview** | Design Services (overview) | `/design-services` | ❌ New page needed |
| **Logo Design** | | | |
| | Logo Design | `/design-services/logo-design` | ❌ New page needed |
| **Layout / Graphic Design** | | | |
| | Layout & Graphic Design | `/design-services/graphic-design` | ❌ New page needed |

---

### 9. About Us
- **URL:** `/about`
- **Page Status:** ✅ Exists (`resources/views/pages/about.blade.php`)
- **Dropdown:** Yes — simple dropdown (not a full mega menu panel)

| Sub-link | URL | Page Status |
|---|---|---|
| About Us | `/about` | ✅ Exists |
| Company | `/about` | ✅ Exists (same page, anchor) |
| Portfolio | `/portfolio` | ✅ Exists |
| Resources | `/resources` | ❌ New page needed |

---

## Summary of New Pages Required

### New Landing Pages (2)
| Page | URL |
|---|---|
| Stickers | `/stickers` |
| Design Services | `/design-services` |

### New Sub-Category Pages (20)
| Page | URL | Parent |
|---|---|---|
| Dye-Sublimation | `/custom-apparel/dye-sublimation` | Custom Apparel |
| Screen Printing | `/custom-apparel/screen-printing` | Custom Apparel |
| Puff Shirts | `/custom-apparel/puff-shirts` | Custom Apparel |
| Window Signs | `/signs/window-signs` | Select a Sign |
| Wall Signs | `/signs/wall-signs` | Select a Sign |
| Floor Signs | `/signs/floor-signs` | Select a Sign |
| Door Signs | `/signs/door-signs` | Select a Sign |
| Parking Signs | `/signs/parking-signs` | Select a Sign |
| Table Cloths | `/signs/table-cloths` | Select a Sign |
| Stickers — Standard | `/stickers/standard` | Stickers |
| Stickers — Custom Shaped | `/stickers/custom-shaped` | Stickers |
| Mugs | `/promotional-items/mugs` | Promotional Items |
| Can Koozies | `/promotional-items/can-koozies` | Promotional Items |
| Towels | `/promotional-items/towels` | Promotional Items |
| Drink Coasters | `/promotional-items/drink-coasters` | Promotional Items |
| Drawstring / Tote Bags | `/promotional-items/tote-bags` | Promotional Items |
| Mouse Pads | `/promotional-items/mouse-pads` | Promotional Items |
| Logo Design | `/design-services/logo-design` | Design Services |
| Layout & Graphic Design | `/design-services/graphic-design` | Design Services |
| Resources | `/resources` | About Us |

---

## Removed from Current Navigation
- **"Design It Yourself"** — replaced by Design Services
- **"Decals"** as a top-level item — Stickers promoted to its own top-level entry; remaining decal items absorbed into other categories
- **"Signs"** label — renamed to "Select a Sign"
- **"Vehicle Graphics"** label — renamed to "Vehicle Decals"
