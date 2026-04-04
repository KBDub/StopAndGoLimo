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

## Page Completion Status Key

Each page table uses two status fields sourced from `docs/Top5Pct.MegaMenuItems.csv`:

| Symbol | Meaning |
|---|---|
| ✅ Exists | Page is live and routed correctly |
| ❌ New page | Page does not yet exist and must be built |
| ♻️ Refactor | Page exists under a different URL and must be moved/updated |
| **Needs Sections: Y** | Page must be fleshed out with the full mandatory section set matching other completed pages in the same subcategory group. Planning for this work is tracked in a separate doc. |
| **Needs Sections: N** | Page has (or will have, once built) the correct section structure |

---

## Mega Menu Style

**Style:** Mega Menu Style 1 (modeled on https://overflow-megamenu-1.webflow.io/)

**Dropdown Panel Layout:**
- **Left/Center:** Overview link at top → Category groups (Level 2) and sub-links (Level 3) per `docs/MegaMenuItems.csv`.
- **Three-Level Menus:** Grouped by Level 2 Category (e.g., "Printing Options").
- **Two-Level Menus:** Displayed as standard links without group headers.
- **Right:** Single branded ad panel (Top 5 Percent branded — always on the RIGHT)
- **Viewport Adjustments:** Panels should be widened (e.g., 960px) on 1280px viewports to ensure the 3-column grid layout for larger categories (like Apparel's 17 items) is legible. 2-level menus (Stickers, Vehicle, Promo, Design, About) use a standard 700px width.

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

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Custom Apparel | `/custom-apparel` | ✅ Exists | N | 9 | |
| **Printing Options** | | | | | | |
| | Direct to Film (DTF) | `/custom-apparel/dtf-transfers` | ✅ Exists | N | 8 | |
| | Dye-Sublimation | `/custom-apparel/dye-sublimation` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Screen Printing | `/custom-apparel/screen-printing` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Embroidery | `/custom-apparel/embroidery` | ✅ Exists | N | 8 | URL changed from `/embroidery-shirts` → `/embroidery` (may add sub-sub pages) |
| | Rhinestone | `/custom-apparel/rhinestone-shirts` | ✅ Exists | N | 8 | |
| | Digital Vinyl | `/custom-apparel/vinyl-shirts` | ✅ Exists | N | 8 | |
| **Specialty Materials** | | | | | | |
| | Glitter | `/custom-apparel/glitter-shirts` | ✅ Exists | N | 8 | |
| | Puff | `/custom-apparel/puff-shirts` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Glow in the Dark | `/custom-apparel/glow-in-the-dark-shirts` | ✅ Exists | N | 8 | |
| | Flock | `/custom-apparel/flock-shirts` | ✅ Exists | N | 8 | |
| | Brick | `/custom-apparel/brick-shirts` | ✅ Exists | N | 8 | |
| | Holographic | `/custom-apparel/holographic-shirts` | ✅ Exists | N | 8 | |
| | Foil | `/custom-apparel/foil-shirts` | ✅ Exists | N | 8 | |
| | Reflective | `/custom-apparel/reflective-shirts` | ✅ Exists | N | 8 | |
| **Group Shirts** | | | | | | |
| | Family Reunion | `/custom-apparel/reunion-shirts` | ✅ Exists | N | 11 | |
| | Spirit Wear | `/custom-apparel/spirit-wear-shirts` | ✅ Exists | N | 11 | URL changed from `/spirit-wear` → `/spirit-wear-shirts` |
| | Corporate Wear | `/custom-apparel/corporate-wear-shirts` | ✅ Exists | N | 11 | URL changed from `/corporate-wear` → `/corporate-wear-shirts` |

---

### 3. Select a Sign
- **URL:** `/signs`
- **Nav Label Change:** Renamed from "Signs" → "Select a Sign"
- **Page Status:** ✅ Exists (`resources/views/pages/signs/index.blade.php`)
- **Dropdown:** Yes — 3-level mega menu

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Select a Sign | `/signs` | ✅ Exists | N | 9 | |
| **Business Signs** | | | | | | |
| | Banners | `/signs/banners` | ✅ Exists | N | 11 | |
| | Window Signs | `/signs/window-signs` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Wall Signs | `/signs/wall-signs` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Floor Signs | `/signs/floor-signs` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Door Signs | `/signs/door-signs` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Posters | `/signs/posters` | ✅ Exists | N | 11 | |
| **Ground Signs** | | | | | | |
| | Yard Signs | `/signs/yard-signs` | ✅ Exists | Y | 11 | |
| | A-Frame / Sidewalk Signs | `/signs/sidewalk-signs` | ✅ Exists | Y | 10 | |
| | Parking Signs | `/signs/parking-signs` | ✅ Exists | N | 9 | Page was built — needs section review |
| **Table Signs** | | | | | | |
| | Table Cloths | `/signs/table-cloths` | ✅ Exists | N | 9 | Page was built — needs section review |
| | Table Runners | `/signs/table-runners` | ✅ Exists | Y | 11 | |

---

### 4. Vehicle Decals
- **URL:** `/vehicle-graphics`
- **Nav Label Change:** Renamed from "Vehicle Graphics" → "Vehicle Decals"
- **Page Status:** ✅ Exists (`resources/views/pages/vehicle-graphics/index.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Vehicle Decals | `/vehicle-graphics` | ✅ Exists | N | 9 | |
| **Vehicle Graphic Options** | | | | | | |
| | Automobile Graphics | `/vehicle-graphics/automobile-graphics` | ✅ Exists | N | 11 | |
| | Vehicle Magnets | `/vehicle-graphics/vehicle-magnets` | ✅ Exists | N | 11 | |
| | DOT Decals | `/vehicle-graphics/dot-decals` | ✅ Exists | N | 11 | |

---

### 5. Stickers
- **URL:** `/stickers`
- **Nav Label Change:** Was buried under "Decals" — now a top-level menu item
- **Page Status:** ✅ Exists (`resources/views/pages/stickers/index.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Stickers | `/stickers` | ✅ Exists | Y | 9 | Page was built — needs section review |
| **Standard** | | | | | | |
| | Standard Stickers | `/stickers/standard-stickers` | ♻️ Refactor existing | N | 11 | Refactor current `/decals/stickers` page — modify only, do not rebuild |
| **Custom Shaped** | | | | | | |
| | Custom Shaped Stickers | `/stickers/custom-shaped-stickers` | ✅ Exists | Y | 10 | Page was built — needs section review |

---

### 6. Promotional Items
- **URL:** `/promotional-items`
- **Page Status:** ✅ Exists (`resources/views/pages/promotional-items.blade.php`)
- **Dropdown:** Yes — 2-level mega menu

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Promotional Items | `/promotional-items` | ✅ Exists | N | 8 | |
| **Promo Products** | | | | | | |
| | Mugs | `/promotional-items/mugs` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Can Koozies | `/promotional-items/can-koozies` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Towels | `/promotional-items/towels` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Drink Coasters | `/promotional-items/drink-coasters` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Drawstring / Tote Bags | `/promotional-items/tote-bags` | ✅ Exists | Y | 9 | Page was built — needs section review |
| | Mouse Pads | `/promotional-items/mouse-pads` | ✅ Exists | Y | 9 | Page was built — needs section review |

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

| Category Title | Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|---|
| **Overview** | Design Services | `/design-services` | ♻️ Refactor | N | 7 | Refactor from `/design-it-yourself` index |
| **Logo Design** | | | | | | |
| | Logo Design | `/design-services/logo-design` | ✅ Exists | Y | 8 | |
| | Layout & Graphic Design | `/design-services/graphic-design` | ✅ Exists | Y | 8 | |
| | Online Designer | `/design-services/online-designer` | ♻️ Refactor | N | 7 | Refactor from `/design-it-yourself/online-designer` |
| | Design Catalogs | `/design-services/design-catalogs` | ♻️ Refactor | N | 7 | Refactor from `/design-it-yourself/design-catalogs` |

---

### 9. About Us
- **URL:** `/about`
- **Page Status:** ✅ Exists (`resources/views/pages/about.blade.php`)
- **Dropdown:** Yes — simple dropdown (not a full mega menu panel)

| Sub-link | URL | Page Status | Needs Sections | Sections | Notes |
|---|---|---|---|---|---|
| About Us | `/about` | ✅ Exists | N | 7 | |
| Company | `/company` | ✅ Exists | Y | 7 | File: `company/index.blade.php` |
| Portfolio | `/portfolio` | ✅ Exists | N | 7 | |
| Resources | `/resources` | ❌ New page | Y | — | Does not exist yet; `company/resources.blade.php` (6 sec) is a separate page at `/company/resources` |

---

### 10. Pages in Page Management — Not in the Megamenu Plan

These 25 pages exist in `resources/views/pages/` and appear in the page management dashboard but have no place in the current megamenu plan. They fall into four categories.

> **Source:** `php artisan tinker` → `App\Actions\ScanPageComponents` — run 2026-04-04. Total pages at time of scan: **78**.

#### A. Utility / System Pages (keep, no nav entry needed)

| URL | Sections | Notes |
|---|---|---|
| `/` (Home) | 11 | Top-level nav item but has no dropdown table — intentional |
| `/cart` | 0 | Utility page — no nav entry needed |
| `/checkout` | 0 | Utility page — no nav entry needed |
| `/order-confirmation` | 0 | Utility page — no nav entry needed |
| `/page-management` | 0 | Admin tool — no nav entry needed |
| `/collection` | 7 | Dynamic template (`pages/collection.blade.php`) — rendered via `/collections/{slug}` route |
| `/product` | 6 | Dynamic template (`pages/product.blade.php`) — rendered via `/products/{slug}` route |
| `/contact` | 7 | Exists but not in mega menu — needs a decision: add to About Us dropdown or footer-only |
| `/stores` | 7 | Exists but not in mega menu — needs a decision |

#### B. Old/Duplicate Routes (superceded — candidates for deletion)

These pages were renamed as part of the menu restructure but the original files were never deleted. Both the old and new URL currently resolve to live pages.

| Old URL | Sections | Replaced By | Action |
|---|---|---|---|
| `/custom-apparel/embroidery-shirts` | 8 | `/custom-apparel/embroidery` | Delete old file |
| `/custom-apparel/spirit-wear` | 11 | `/custom-apparel/spirit-wear-shirts` | Delete old file |
| `/custom-apparel/corporate-wear` | 11 | `/custom-apparel/corporate-wear-shirts` | Delete old file |

#### C. Orphaned Custom Apparel Pages (exist — not in plan)

These apparel sub-pages were built at some point but are not linked from the megamenu. Decide: promote to menu item, merge into another page, or delete.

| URL | Sections | Notes |
|---|---|---|
| `/custom-apparel/custom-shirts` | 13 | General custom shirts landing — heaviest page (13 sections) |
| `/custom-apparel/pattern-shirts` | 8 | |
| `/custom-apparel/picture-shirts` | 8 | |

#### D. Old Decals Hub + Design-It-Yourself Pages (refactored — originals still live)

The plan calls for refactoring these into new URLs, but the original files still exist and are live at their old URLs. Until routes are redirected and old files deleted, both old and new pages are active simultaneously.

| Old URL | Sections | Refactored Into | Action |
|---|---|---|---|
| `/decals` (index) | 9 | Removed from nav (Stickers promoted) | Decide: keep, redirect, or delete |
| `/decals/stickers` | 11 | `/stickers/standard-stickers` | Redirect + delete after refactor confirmed |
| `/decals/window-wall-floor-decals` | 11 | No replacement planned | Decide: add to signs, or delete |
| `/decals/coronavirus-decals` | 9 | No replacement planned | Decide: keep for SEO or delete |
| `/design-it-yourself` (index) | 7 | `/design-services` | Redirect + delete after refactor confirmed |
| `/design-it-yourself/online-designer` | 7 | `/design-services/online-designer` | Redirect + delete after refactor confirmed |
| `/design-it-yourself/design-catalogs` | 7 | `/design-services/design-catalogs` | Redirect + delete after refactor confirmed |

#### E. Other Orphaned Pages

| URL | Sections | Notes |
|---|---|---|
| `/signs/business-signs` | 11 | General business signs hub — content to be split into Window, Wall, Floor, Door pages |
| `/signs/coronavirus-signs` | 10 | COVID-era page — decide: keep for SEO or delete |
| `/company/resources` | 6 | File at `company/resources.blade.php`; lives at `/company/resources` not `/resources`. Plan has `/resources` as ❌ New page — these are two different URLs. Decide: rename/redirect this file to `/resources`, or build `/resources` separately. |

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

---

## Navigation Jitter & Performance Fixes (2026-03-30)

### 1. Issue: Desktop Hover Jitter
**Symptom:** The mouse cursor and menu icons "jitter" or "flicker" rapidly when hovering over the top-level menu items or moving between the link and the dropdown.

**Root Causes:**
- **Layout Shifts:** The navigation bar changed padding/height on scroll, causing the hover target to move out from under the cursor.
- **Hover Gaps:** Tiny gaps (sub-pixel or intentional) between the trigger link and the absolute-positioned dropdown caused `@mouseleave` to fire prematurely.
- **Race Conditions:** Rapid mouse movements triggered multiple Alpine.js state changes faster than the CSS transitions could complete.

### 2. Implemented Solutions

#### A. Stabilized Layout (Fixed Heights)
- Replaced dynamic padding (`py-1`/`py-2`) with fixed container heights (`h-16` when scrolled, `h-24` normally).
- This ensures the navigation bar never "jumps" while the user is hovering, preventing an infinite loop of enter/leave events.

#### B. Seamless Hover Zone (Full-Height Links)
- Updated desktop links to use `h-full` and `inline-flex items-center`.
- Since the parent containers use `self-stretch`, the links now cover 100% of the navigation bar's vertical height.
- This eliminates any physical gap between the trigger area and the dropdown panel.

#### C. Hover Intent (Immediate State)
- Removed `menuTimeout` and `setTimeout` delays.
- **Immediate Response:** The menu now opens and closes instantly upon mouse entry/leave.
- **Stability:** By combining immediate state changes with the **Hover Bridge** and **Stretched Hit-Areas**, the navigation is more robust than using timers, which could create race conditions during rapid movement.
- **Implementation:**
  ```html
  <div 
      @mouseenter="openMenu = 'apparel'" 
      @mouseleave="openMenu = null"
  >
  ```

#### D. Visual Stability
- Added `transform-gpu` and `transition-transform` to icons and the logo to ensure hardware-accelerated, jitter-free animations.

#### E. Pointer Event Isolation
- Applied `pointer-events-none` to chevron icons so they don't interfere with hover detection on the parent link.

#### F. Structural Stability (Final Stabilization)
- **Stretched Desktop Container**: Added `self-stretch` and `items-stretch` to the main desktop navigation container (`hidden lg:flex`). This ensures the container always fills 100% of the navigation bar's height, preventing "dead zones" where the mouse could accidentally trigger a `mouseleave` event.
- **Z-Index Layering**: Applied `relative z-50` to the desktop navigation container. This ensures that the menu trigger areas remain above the global backdrop (`z-40`), preventing the backdrop from "stealing" the mouse focus and causing a flicker loop as soon as the menu opens.
- **Unified Flex Alignment**: Standardized all menu item wrappers and links to use `items-stretch` and `h-full`. This creates a perfectly stable, rectangular hit-area that covers the entire vertical space of the navbar.
- **Hover Bridge (Overlap Zone)**: Added a "hover bridge" to all dropdown panels using `pt-2` (padding) and `-mt-2` (negative margin). This creates a physical overlap between the trigger link and the absolute-positioned panel, ensuring the mouse never enters a "no-man's land" gap, even at different browser zoom levels or sub-pixel rendering.

#### G. Component-Based Branding
- **Mega Menu Ads**: All right-aligned ad panels in the mega menu must use the `<x-layout.mega-menu-ad>` component. This ensures consistent styling, image hover effects, and brand color application (Charcoal background with Sunburst accents).
- **Consistent Sectioning**: Internal mega menu panels follow a standardized layout:
  - Center/Left: Grid-based navigation with defined category headers and sub-links.
  - Right: Branded ad component (single image panel).

#### H. Visual Distinction & Glow (2026-03-30)
- **Enhanced Separation**: The top border of all mega menu panels was increased from `border-t-2` to `border-t-[6px]` (Sunburst Gold) to create a more prominent brand anchor.
- **Orange Glow Effect**: Applied `shadow-gold-xl` to the dropdown panels. This creates a vibrant Sunburst "glow" on the left, right, and bottom edges, matching the aesthetic of the `card-image-with-text` components.
- **Typography Normalization**: Increased the font scale throughout the mega menu to match the main navigation bar (`text-lg` for links).
- **Internal Spacing**: Increased padding and column gaps (`px-6`, `py-6`, `gap-x-6`) to accommodate the larger text size and maintain a premium, spacious feel.

#### I. Single Image Panel Strategy (2026-03-30)
- **Unified Visual Anchor**: Removed the secondary left-aligned thematic image panels from all mega menu dropdowns.
- **Consistent Layout**: Each mega menu now features a clean, two-part structure:
    - **Navigation Zone (Left/Center)**: Links and categories.
    - **Ad Zone (Right)**: A single `<x-layout.mega-menu-ad>` component.
- **Improved Scannability**: Removing the extra imagery on the left reduces visual clutter and allows users to focus on navigation links immediately.

#### J. Layout Refinements (2026-03-30)
- **Viewport Safety Margins**: Dropdown panels now use `max-width: calc(100vw - 20px)` to ensure they never exceed the screen width and maintain a 10px safety margin on small desktop viewports.
- **Centered Positioning**: Dropdown panels use centered positioning (`left-1/2 -translate-x-1/2`) by default, but items near the edges use `left-0` or `right-0` to prevent viewport overflow while maintaining a 10px safety margin on small desktop viewports.
- **Right Alignment**: Far-right menu items (Promo Items, Design Services, About Us) use `right-0` to ensure they align to the right edge of their respective trigger items and stay within the viewport.
- **Left Alignment**: Left-side menu items (Apparel, Signs, Stickers, Vehicle) use `left-0` to ensure they align with the left edge of their respective trigger items while remaining within the navigation container's bounds.
- **Typography & Wrapping**: Increased grid column gaps (`gap-x-10`) in complex 3-level menus (Apparel, Signs) to provide more room for long sub-category headers like "Specialty Materials," preventing unnecessary text wrapping.
- **Grid Standardization**: Standardized all menus without sub-category groups (Stickers, Vehicle Decals, Promo Items, Design Services, About Us) to use a **2-column grid layout with a 32px horizontal gap and a 16px vertical gap** (`gap-x-8 gap-y-4`).
- **Standardized Vertical Spacing**: Standardized all mega menu panels to use a **16px (4 unit)** vertical gap between headers and items, and between individual items, ensuring a spacious and premium feel.
