# Mega Menu — Navigation Structure
## Top 5 Percent Custom Signage & Apparel

---

## Standard Page Section Layout (MANDATORY)

All category landing pages and sub-category pag![img.png](img.png)es must follow this exact section order. No exceptions. New pages must replicate this structure. New pages should use existing graphics and pull idea/content from other related pages.

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
