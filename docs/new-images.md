# New Images Migration Plan

## Overview

Move all files from `public/new-images/` into the matching `public/images/` directories, applying a `top5pct-` prefix to every incoming filename. If an existing file's basename would collide with a renamed incoming file, rename the old file to `<basename>-old.jpg` first. Banner hero images (page-header banners) that have no new-images counterparts are left untouched.

**Total new images: 119 JPG files** (1 `.psd` file has been deleted — see section 9).

---

## Conventions

| Rule | Detail |
|---|---|
| Prefix all incoming files | `<filename>.jpg` → `top5pct-<filename>.jpg` |
| Spaces in filenames | Replace with hyphens: `vinyl t-shirt maker.jpg` → `top5pct-vinyl-t-shirt-maker.jpg` |
| Conflict resolution | If `top5pct-<name>.jpg` already exists at destination, rename existing to `top5pct-<name>-old.jpg` before copying |
| Banners (page-hero images) | Untouched — no new-images banner equivalents exist |
| New directories | Create before copying if they do not yet exist |
| After migration | `public/new-images/` directory can be removed once all moves are verified |

---

## Directory Mapping

| `public/new-images/` source | `public/images/` destination | New dir? |
|---|---|---|
| `custom-apparel/digital-vinyl/` | `custom-shirts/` | no |
| `custom-apparel/group-shirts/corporate-wear-shirts/` | `corporate-wear/` | no |
| `custom-apparel/group-shirts/reunion-shirts/` | `reunion-shirts/` | no |
| `custom-apparel/group-shirts/spirit-wear-shirts/` | `spirit-wear/` | no |
| `custom-apparel/printing-options/digital-vinyl/` | `custom-shirts/` | no |
| `custom-apparel/printing-options/dtf-printing/` | `dtf-transfers/` | no |
| `custom-apparel/printing-options/embroidery/` | `custom-shirts/` | no |
| `custom-apparel/printing-options/rhinestones/` | `custom-shirts/` | no |
| `custom-apparel/printing-options/screenprint/` | `custom-shirts/` | no |
| `custom-apparel/printing-options/sublimation/` | `custom-shirts/` | no |
| `custom-apparel/specialty-material/brick/` | `custom-shirts/` | no |
| `custom-apparel/specialty-material/glitter/` | `custom-shirts/` | no |
| `custom-apparel/specialty-material/reflective/` | `custom-shirts/` | no |
| `promo-items/koozies/` | `promo-items/koozies/` | **yes** |
| `promo-items/mugs/` | `promo-items/mugs/` | **yes** |
| `signs/business-signs/banners/` | `banners/` | no |
| `signs/business-signs/door-signs/` | `window-wall-floor-decals/` | no |
| `signs/business-signs/wall-signs/` | `window-wall-floor-decals/` | no |
| `signs/business-signs/window-signs/` | `window-wall-floor-decals/` | no |
| `signs/ground-signs/a-frame-signs/` | `sidewalk-signs/` | no |
| `signs/ground-signs/yard-signs/` | `yard-signs/` | no |
| `signs/table-signs/table-cloths/` | `table-runners/` | no |
| `signs/table-signs/table-runners/` | `table-runners/` | no |
| `stickers/custom-shaped/` | `stickers-decals/` | no |
| `vehicle-decals/automobile-graphics/` | `automobile-graphics/` | no |
| `vehicle-decals/dot-decals/` | `dot-decals/` | no |
| `vehicle-decals/vehicle-magnets/` | `vehicle-magnets/` | no |

---

## Section-by-Section File Operations

Each entry shows: `source filename` → `destination filename` (and old-file rename if a collision exists).

### 1. `custom-shirts/` — custom-apparel, digital-vinyl, printing options, specialty materials

**From `custom-apparel/digital-vinyl/`** (10 files):

| Source | Destination |
|---|---|
| `custom-caps-vinyl.jpg` | `top5pct-custom-caps-vinyl.jpg` |
| `custom-hoodies.jpg` | `top5pct-custom-hoodies.jpg` |
| `custom-vinyl-hoodies.jpg` | `top5pct-custom-vinyl-hoodies.jpg` |
| `custom-vinyl-shirts.jpg` | `top5pct-custom-vinyl-shirts.jpg` |
| `neon-vinyl-shirts.jpg` | `top5pct-neon-vinyl-shirts.jpg` |
| `vinyl-caps.jpg` | `top5pct-vinyl-caps.jpg` |
| `vinyl-hoodie.jpg` | `top5pct-vinyl-hoodie.jpg` |
| `vinyl-shirts.jpg` | `top5pct-vinyl-shirts.jpg` |
| `vinyl-t-shirt maker.jpg` | `top5pct-vinyl-t-shirt-maker.jpg` |
| `vinyl-zip-up-hoodies.jpg` | `top5pct-vinyl-zip-up-hoodies.jpg` |

**From `custom-apparel/printing-options/digital-vinyl/`** (9 files):

| Source | Destination |
|---|---|
| `custom-bowling-shirts.jpg` | `top5pct-custom-bowling-shirts.jpg` |
| `custom-printed-vinyl shirts.jpg` | `top5pct-custom-printed-vinyl-shirts.jpg` |
| `custom-shirt-pictures.jpg` | `top5pct-custom-shirt-pictures.jpg` |
| `custom-vinyl-hoodies.jpg` | `top5pct-custom-vinyl-hoodies.jpg` ⚠ see duplicate note |
| `digital-vinyl-hoodie.jpg` | `top5pct-digital-vinyl-hoodie.jpg` |
| `digital-vinyl-hoodies-in-joliet.jpg` | `top5pct-digital-vinyl-hoodies-in-joliet.jpg` |
| `digital-vinyl-shirts.jpg` | `top5pct-digital-vinyl-shirts.jpg` |
| `toddler-custom-shirts.jpg` | `top5pct-toddler-custom-shirts.jpg` |
| `vinyl-printed-shirts.jpg` | `top5pct-vinyl-printed-shirts.jpg` |

> ⚠ `custom-vinyl-hoodies.jpg` appears in both `custom-apparel/digital-vinyl/` and `custom-apparel/printing-options/digital-vinyl/`. Resolve before copying: compare checksums. If identical, skip the second. If different, use suffix `top5pct-custom-vinyl-hoodies-2.jpg` for the second.

**From `custom-apparel/printing-options/embroidery/`** (4 files):

| Source | Destination |
|---|---|
| `embroidered-aprons.jpg` | `top5pct-embroidered-aprons.jpg` |
| `embroidered-caps.jpg` | `top5pct-embroidered-caps.jpg` |
| `embroidery-in-joliet.jpg` | `top5pct-embroidery-in-joliet.jpg` |
| `stitched-caps.jpg` | `top5pct-stitched-caps.jpg` |

**From `custom-apparel/printing-options/rhinestones/`** (1 file):

| Source | Destination |
|---|---|
| `rhinestone-hoodies-joliet.jpg` | `top5pct-rhinestone-hoodies-joliet.jpg` |

**From `custom-apparel/printing-options/screenprint/`** (4 files):

| Source | Destination |
|---|---|
| `screenprint-custom-shirts.jpg` | `top5pct-screenprint-custom-shirts.jpg` |
| `screenprinted-shirts-in-joliet.jpg` | `top5pct-screenprinted-shirts-in-joliet.jpg` |
| `screenprinted-shirts-joliet.jpg` | `top5pct-screenprinted-shirts-joliet.jpg` |
| `screenprinting-shirts.jpg` | `top5pct-screenprinting-shirts.jpg` |

**From `custom-apparel/printing-options/sublimation/`** (8 files):

| Source | Destination |
|---|---|
| `custom-dog-bandanas.jpg` | `top5pct-custom-dog-bandanas.jpg` |
| `custom-face-mask sublimated.jpg` | `top5pct-custom-face-mask-sublimated.jpg` |
| `custom-sublimated-towels.jpg` | `top5pct-custom-sublimated-towels.jpg` |
| `dye-sublimated-longsleeve-shirt-joliet.jpg` | `top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg` |
| `dye-sublimation-shirts.jpg` | `top5pct-dye-sublimation-shirts.jpg` |
| `sublimation-shirt.jpg` | `top5pct-sublimation-shirt.jpg` |
| `sublimation-shirt-printer.jpg` | `top5pct-sublimation-shirt-printer.jpg` |
| `sublimation-shirts.jpg` | `top5pct-sublimation-shirts.jpg` |

**From `custom-apparel/specialty-material/brick/`** (1 file):

| Source | Destination |
|---|---|
| `brick-vinyl-hoodies.jpg` | `top5pct-brick-vinyl-hoodies.jpg` |

**From `custom-apparel/specialty-material/glitter/`** (2 files):

| Source | Destination |
|---|---|
| `custom-glitter-clothing.jpg` | `top5pct-custom-glitter-clothing.jpg` |
| `custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts.jpg` |

**From `custom-apparel/specialty-material/reflective/`** (1 file):

| Source | Destination |
|---|---|
| `reflective-shirts-gold.jpg` | `top5pct-reflective-shirts-gold.jpg` |

---

### 2. `corporate-wear/` — group-shirts / corporate-wear-shirts (7 files)

| Source | Destination |
|---|---|
| `custom-apron-joliet.jpg` | `top5pct-custom-apron-joliet.jpg` |
| `custom-aprons-joliet.jpg` | `top5pct-custom-aprons-joliet.jpg` |
| `custom-business-shirts.jpg` | `top5pct-custom-business-shirts.jpg` |
| `custom-pocket-shirt-joliet.jpg` | `top5pct-custom-pocket-shirt-joliet.jpg` |
| `landscaping-clothing-joliet.jpg` | `top5pct-landscaping-clothing-joliet.jpg` |
| `lawn-care-clothing.jpg` | `top5pct-lawn-care-clothing.jpg` |
| `safety-work-gear-joliert.jpg` | `top5pct-safety-work-gear-joliet.jpg` *(fix typo: `joliert` → `joliet`)* |

---

### 3. `reunion-shirts/` — group-shirts / reunion-shirts (6 files)

| Source | Destination |
|---|---|
| `class-reunion-shirt.jpg` | `top5pct-class-reunion-shirt.jpg` |
| `family-reunion-shirts-joliet.jpg` | `top5pct-family-reunion-shirts-joliet.jpg` |
| `family-reunion-tshirts-in-joliet.jpg` | `top5pct-family-reunion-tshirts-in-joliet.jpg` |
| `group-shirts.jpg` | `top5pct-group-shirts.jpg` |
| `reunion-group-shirts.jpg` | `top5pct-reunion-group-shirts.jpg` |
| `reunion-shirts.jpg` | `top5pct-reunion-shirts.jpg` |

---

### 4. `spirit-wear/` — group-shirts / spirit-wear-shirts (2 files)

| Source | Destination |
|---|---|
| `spirit-wear-joliet.jpg` | `top5pct-spirit-wear-joliet.jpg` |
| `spirit-wear-shirts.jpg` | `top5pct-spirit-wear-shirts.jpg` |

---

### 5. `dtf-transfers/` — printing-options / dtf-printing (5 files)

| Source | Destination |
|---|---|
| `custom-shirt-with picture.jpg` | `top5pct-custom-shirt-with-picture.jpg` |
| `custom sweatshirts.jpg` | `top5pct-custom-sweatshirts.jpg` |
| `custom-t-shirts-dtf.jpg` | `top5pct-custom-t-shirts-dtf.jpg` |
| `dtf-hoodies-joliet.jpg` | `top5pct-dtf-hoodies-joliet.jpg` |
| `dtf-zip-up-hoodies.jpg` | `top5pct-dtf-zip-up-hoodies.jpg` |

---

### 6. `promo-items/koozies/` — NEW directory (2 files)

Create `public/images/promo-items/koozies/` before copying.

| Source | Destination |
|---|---|
| `can-koozies.jpg` | `top5pct-can-koozies.jpg` |
| `custom-koozies.jpg` | `top5pct-custom-koozies.jpg` |

---

### 7. `promo-items/mugs/` — NEW directory (7 files)

Create `public/images/promo-items/mugs/` before copying.

| Source | Destination |
|---|---|
| `custom-coffee-mugs-in-joliet.jpg` | `top5pct-custom-coffee-mugs-in-joliet.jpg` |
| `custom-coffee-mugs.jpg` | `top5pct-custom-coffee-mugs.jpg` |
| `custom-mugs.jpg` | `top5pct-custom-mugs.jpg` |
| `custom-mugs-near-me.jpg` | `top5pct-custom-mugs-near-me.jpg` |
| `custom-printed-mugs.jpg` | `top5pct-custom-printed-mugs.jpg` |
| `picture-on-mugs.jpg` | `top5pct-picture-on-mugs.jpg` |
| `printed-mugs.jpg` | `top5pct-printed-mugs.jpg` |

---

### 8. `banners/` — signs / business-signs / banners (7 files)

These are product photos of vinyl banners. Existing `top5pct-banner-*` files in `public/images/banners/` are page-hero images and remain untouched.

| Source | Destination |
|---|---|
| `banners-and-signs.jpg` | `top5pct-banners-and-signs.jpg` |
| `banners-near-me.jpg` | `top5pct-banners-near-me.jpg` |
| `big-banners.jpg` | `top5pct-big-banners.jpg` |
| `custom-retractable-banners-joliet.jpg` | `top5pct-custom-retractable-banners-joliet.jpg` |
| `custom-vinyl-banners.jpg` | `top5pct-custom-vinyl-banners.jpg` |
| `graduation-banners.jpg` | `top5pct-graduation-banners.jpg` |
| `retractable-banner.jpg` | `top5pct-retractable-banner.jpg` |

---

### 9. `window-wall-floor-decals/` — business-signs door/wall/window (7 files)

**From `signs/business-signs/door-signs/`** (1 file):

| Source | Destination |
|---|---|
| `door-signage.jpg` | `top5pct-door-signage.jpg` |

**From `signs/business-signs/wall-signs/`** (1 file):

| Source | Destination |
|---|---|
| `wall-signs.jpg` | `top5pct-wall-signs.jpg` |

**From `signs/business-signs/window-signs/`** (5 files):

| Source | Destination |
|---|---|
| `business-window-signs.jpg` | `top5pct-business-window-signs.jpg` |
| `custom-window-signs.jpg` | `top5pct-custom-window-signs.jpg` |
| `window-door-signs.jpg` | `top5pct-window-door-signs.jpg` |
| `window-signs-joliet.jpg` | `top5pct-window-signs-joliet.jpg` |
| `window-signs-joliet-slammers.jpg` | `top5pct-window-signs-joliet-slammers.jpg` |

---

### 10. `sidewalk-signs/` — ground-signs / a-frame-signs (4 files)

| Source | Destination |
|---|---|
| `a-frame-sign.jpg` | `top5pct-a-frame-sign.jpg` |
| `custom-a-frame-sidewalk-signs-joliet.jpg` | `top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` |
| `sidewalk-sign.jpg` | `top5pct-sidewalk-sign.jpg` |
| `sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet.jpg` |

---

### 11. `yard-signs/` — ground-signs / yard-signs (5 files)

| Source | Destination |
|---|---|
| `custom-yard-signs-joliet.jpg` | `top5pct-custom-yard-signs-joliet.jpg` |
| `lawn-signs.jpg` | `top5pct-lawn-signs.jpg` |
| `yard-sign-joliet.jpg` | `top5pct-yard-sign-joliet.jpg` |
| `yard-signs-joliet.jpg` | `top5pct-yard-signs-joliet.jpg` |
| `yard-signs.jpg` | `top5pct-yard-signs.jpg` |

---

### 12. `table-runners/` — table-signs / table-cloths and table-runners (7 files)

**From `signs/table-signs/table-cloths/`** (3 files):

| Source | Destination |
|---|---|
| `custom-table-cloth.jpg` | `top5pct-custom-table-cloth.jpg` |
| `personalized-tablecloth-joliet.jpg` | `top5pct-personalized-tablecloth-joliet.jpg` |
| `table-cloths.jpg` | `top5pct-table-cloths.jpg` |

**From `signs/table-signs/table-runners/`** (4 files):

| Source | Destination |
|---|---|
| `custom-table-runner.jpg` | `top5pct-custom-table-runner.jpg` |
| `custom-table-runners.jpg` | `top5pct-custom-table-runners.jpg` |
| `table-runner.jpg` | `top5pct-table-runner.jpg` |
| `table-runners.jpg` | `top5pct-table-runners.jpg` |

---

### 13. `stickers-decals/` — stickers / custom-shaped (6 files)

| Source | Destination |
|---|---|
| `custom-glossy-stickers-in-joliet.jpg` | `top5pct-custom-glossy-stickers-in-joliet.jpg` |
| `custom-label-stickers.jpg` | `top5pct-custom-label-stickers.jpg` |
| `custom-shaped-stickers.jpg` | `top5pct-custom-shaped-stickers.jpg` |
| `custom stickers.jpg` | `top5pct-custom-stickers.jpg` |
| `diecut-stickers.jpg` | `top5pct-diecut-stickers.jpg` |
| `stickers-in-joliet.jpg` | `top5pct-stickers-in-joliet.jpg` |

---

### 14. `automobile-graphics/` — vehicle-decals / automobile-graphics (9 files)

| Source | Destination |
|---|---|
| `car-wraps.jpg` | `top5pct-car-wraps.jpg` |
| `pickup-truck-graphics.jpg` | `top5pct-pickup-truck-graphics.jpg` |
| `trailer-decal-graphics.jpg` | `top5pct-trailer-decal-graphics.jpg` |
| `trailer-decals.jpg` | `top5pct-trailer-decals.jpg` |
| `van-graphics-decals.jpg` | `top5pct-van-graphics-decals.jpg` |
| `vecal-decals.jpg` | `top5pct-vecal-decals.jpg` *(source typo preserved — correct separately)* |
| `vehicle-graphics.jpg` | `top5pct-vehicle-graphics.jpg` |
| `vehicle-window-graphics-in-joliet.jpg` | `top5pct-vehicle-window-graphics-in-joliet.jpg` |
| `vehicle-window-graphics-joliet.jpg` | `top5pct-vehicle-window-graphics-joliet.jpg` |

---

### 15. `dot-decals/` — vehicle-decals / dot-decals (3 files)

| Source | Destination |
|---|---|
| `dot-decals-joliet.jpg` | `top5pct-dot-decals-joliet.jpg` |
| `dot-semi-truck-decals.jpg` | `top5pct-dot-semi-truck-decals.jpg` |
| `dot-truck-decals-joliet.jpg` | `top5pct-dot-truck-decals-joliet.jpg` |

---

### 16. `vehicle-magnets/` — vehicle-decals / vehicle-magnets (8 files)

| Source | Destination |
|---|---|
| `automobile-magnets-joliet.jpg` | `top5pct-automobile-magnets-joliet.jpg` |
| `car-magnets-joliet.jpg` | `top5pct-car-magnets-joliet.jpg` |
| `car-magnets.jpg` | `top5pct-car-magnets.jpg` |
| `car-sign-magnets-joliet.jpg` | `top5pct-car-sign-magnets-joliet.jpg` |
| `custom-car-magnets-in-joliet.jpg` | `top5pct-custom-car-magnets-in-joliet.jpg` |
| `custom-car-magnets.jpg` | `top5pct-custom-car-magnets.jpg` |
| `vehicle-magnets-joliet.jpg` | `top5pct-vehicle-magnets-joliet.jpg` |
| `vehicle-magnets.jpg` | `top5pct-vehicle-magnets.jpg` |

---

## Blade Page Image Slot Inventory

### Component Display Sizes (reference)

| Component | Display Size | Notes |
|---|---|---|
| `x-sections.category-hero` | Full-width × h-[28rem→36rem], `object-cover` | Best supplied ≥1920px wide |
| `x-ui.carousel-rotating-images` (visible=2) | 600×450px per slot, side by side (4:3) | 4 images cycle; 2 visible at a time |
| `x-sections.card-image-with-text` | 600×450px (4:3), floated left or right | Image wraps with body text |
| `x-sections.card-2image-with-text` | Each image fluid 4:3, ~50% container width | Two images side by side above text |
| `x-sections.card-detailed-info` (1 image) | 400×300px (4:3), floated left | Image wraps mid-section text |
| `x-sections.card-detailed-info` (2 images) | 400×300px each (4:3), alternating float | image1 left, image2 right |
| `x-ui.card-banner-slide-in` | Full-width × 16:7 aspect ratio | Always Keep — no replacements |

### Replacement Rules

- **All `category-hero` slots** → **Keep** (no new banner-format images exist)
- **All `card-banner-slide-in` slots** → **Keep** (every one, regardless of what image it references)
- **All other slots** → filled **Pending** in page order, 1:1 against the count of new images available for that page's category. Slots beyond the count → **Keep**

### Replaced? Key

| Status | Meaning |
|---|---|
| **Pending** | Will receive a new image from `new-images/` — 1:1 in page order |
| **Keep** | No replacement: hero banners, all slide-in CTAs, or beyond the count of available new images |
| **Done** | Update to this once the swap is complete |

---

### `pages/custom-apparel/vinyl-shirts.blade.php`

*New images available: 18 (digital-vinyl, both source dirs) — 7 eligible slots — all 7 Pending*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-caps-vinyl.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-hoodies.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-vinyl-hoodies.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-neon-vinyl-shirts.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-vinyl-caps.jpg` | Done |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-vinyl-hoodie.jpg` | Done |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

### `pages/custom-apparel/screen-printing.blade.php`

*New images available: 4 (screenprint/) — 7 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-screenprint-custom-shirts.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-screenprinted-shirts-in-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-screenprinted-shirts-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-screenprinting-shirts.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |

---

### `pages/custom-apparel/dtf-transfers.blade.php`

*New images available: 5 (dtf-printing/) — 7 eligible slots — 5 Pending (carousel 1–4, card-image-left)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `dtf-transfers/top5pct-custom-sweatshirts.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `dtf-transfers/top5pct-custom-shirt-with-picture.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `dtf-transfers/top5pct-custom-t-shirts-dtf.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `dtf-transfers/top5pct-dtf-hoodies-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |

---

### `pages/custom-apparel/embroidery.blade.php`

*New images available: 4 (embroidery/) — 7 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-embroidered-aprons.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-embroidered-caps.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-embroidery-in-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-stitched-caps.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |

---

### `pages/custom-apparel/rhinestone-shirts.blade.php`

*New images available: 1 (rhinestones/) — 7 eligible slots — 1 Pending (carousel slot 1 only)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/dye-sublimation.blade.php`

*New images available: 8 (sublimation/) — 7 eligible slots — all 7 Pending*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-dog-bandanas.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-face-mask-sublimated.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-sublimated-towels.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-dye-sublimation-shirts.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-sublimation-shirt-printer.jpg` | Done |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-sublimation-shirt.jpg` | Done |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/glitter-shirts.blade.php`

*New images available: 2 (glitter/) — 7 eligible slots — 2 Pending (carousel 1–2)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-glitter-clothing.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-glitter-sweatshirts.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |

---

### `pages/custom-apparel/holographic-shirts.blade.php`

*New images available: 0 (holographic .psd deleted, no web-ready image exists) — all Keep*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |

---

### `pages/custom-apparel/reflective-shirts.blade.php`

*New images available: 1 (reflective/) — 7 eligible slots — 1 Pending (carousel slot 1 only)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-reflective-shirts-gold.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/custom-apparel/corporate-wear-shirts.blade.php`

*New images available: 7 (corporate-wear-shirts/) — 11 eligible slots — 7 Pending (carousel 1–4, card-left, card-right, card-2image image1)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `corporate-wear/top5pct-custom-apron-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `corporate-wear/top5pct-custom-aprons-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `corporate-wear/top5pct-custom-business-shirts.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `corporate-wear/top5pct-landscaping-clothing-joliet.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `corporate-wear/top5pct-lawn-care-clothing.jpg` | Done |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `corporate-wear/top5pct-safety-work-gear-joliet.jpg` | Done |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `corporate-wear/toptpct-custom-hoodie-pullover-joliet-shorewood.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `corporate-wear/toptpct-custom-cap-hat-joliet-shorewood-rockdale.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `corporate-wear/toptpct-custom-button-up-shirt-joliet-shorewood.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |

---

### `pages/custom-apparel/reunion-shirts.blade.php`

*New images available: 6 (reunion-shirts/) — 12 eligible slots — 6 Pending (carousel 1–4, card-left, card-right)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `reunion-shirts/top5pct-class-reunion-shirt.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `reunion-shirts/top5pct-family-reunion-tshirts-in-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `reunion-shirts/top5pct-group-shirts.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `reunion-shirts/top5pct-reunion-group-shirts.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `reunion-shirts/top5pct-reunion-shirts.jpg` | Done |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `reunion-shirts/toptpct-class-reunion-shirt-templates.gif` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `reunion-shirts/toptpct-class-reunion-shirt-templates2.gif` | Keep |
| 10 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `reunion-shirts/toptpct-family-reunion-shirts-joliet-crest-hill.jpg` | Keep |
| 11 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `reunion-shirts/toptpct-family-reunion-shirts-joliet-romeoville.jpg` | Keep |
| 12 | `card-image-with-text` (left) | 600×450px | `reunion-shirts/toptpct-family-reunion-shirts-joliet-plainfield.jpg` | Keep |
| 13 | `card-detailed-info` image1 | 400×300px | `reunion-shirts/toptpct-article-family-reunion-pic1.jpg` | Keep |
| 14 | `card-detailed-info` image2 | 400×300px | `reunion-shirts/toptpct-article-family-reunion-pic2.jpg` | Keep |
| 15 | `card-banner-slide-in` (right→left) | full-width 16:7 | `reunion-shirts/toptpct-family-reunion-shirts-joliet-romeoville.jpg` | Keep |
| 16 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |

---

### `pages/custom-apparel/spirit-wear-shirts.blade.php`

*New images available: 2 (spirit-wear-shirts/) — 11 eligible slots — 2 Pending (carousel 1–2)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `spirit-wear/top5pct-spirit-wear-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `spirit-wear/top5pct-spirit-wear-shirts.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `spirit-wear/top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `spirit-wear/top5pct-article-spirit-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `spirit-wear/top5pct-article-fan-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `reunion-shirts/toptpct-family-reunion-shirts-joliet-romeoville.jpg` | Keep |

---

### `pages/signs/banners.blade.php`

*New images available: 7 (banners/) — 11 eligible slots — 7 Pending (carousel 1–4, card-left, card-right, card-2image image1)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `banners/top5pct-banners-and-signs.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `banners/top5pct-banners-near-me.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `banners/top5pct-big-banners.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `banners/top5pct-custom-retractable-banners-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `banners/top5pct-custom-vinyl-banners.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-graduation-banners.jpg` | Done |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-retractable-banner.jpg` | Done |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `banners/top5pct-birthday-banners-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-family-reunion-banners-joliet-crest-hill.jpg` | Keep |
| 11 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `banners/top5pct-team-banners-joliet-shorewood-crest-hill.jpg` | Keep |
| 12 | `card-detailed-info` image1 | 400×300px | `banners/top5pct-article-vinyl-banners-pic1.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/business-signs.blade.php`

*New images available: 0 (no new images map to the `business-signs/` directory) — all Keep*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | Keep |
| 2 | `card-image-with-text` (left) | 600×450px | `business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 3 | `card-image-with-text` (right) | 600×450px | `business-signs/top5pct-outdoor-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 4 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `business-signs/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 5 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `business-signs/top5pct-window-signs-joliet-new-lenox-shorewood.jpg` | Keep |
| 6 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `business-signs/top5pct-business-signs-joliet-plainfield-romeoville.jpg` | Keep |
| 7 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `business-signs/top5pct-business-signs-joliet-shorewood-channahon.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `business-signs/top5pct-article-business-signs-pic1.jpg` | Keep |

---

### `pages/signs/sidewalk-signs.blade.php`

*New images available: 4 (a-frame-signs/) — 8 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `sidewalk-signs/top5pct-a-frame-sign.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `sidewalk-signs/top5pct-sidewalk-sign.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `sidewalk-signs/top5pct-sidewalk-a-frames-joliet-shorewood.jpg` | Keep |
| 8 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-detailed-info` image1 | 400×300px | `sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/yard-signs.blade.php`

*New images available: 5 (yard-signs/) — 9 eligible slots — 5 Pending (carousel 1–4, card-left)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `yard-signs/top5pct-custom-yard-signs-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `yard-signs/top5pct-lawn-signs.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `yard-signs/top5pct-yard-sign-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `yard-signs/top5pct-yard-signs-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `yard-signs/top5pct-yard-signs.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `yard-signs/top5pct-table-signs-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-detailed-info` image1 | 400×300px | `yard-signs/top5pct-article-yard-signs-buy.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/table-cloths.blade.php`

*New images available: 3 (table-cloths/) — 7 eligible slots — all 3 wired ✓*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-custom-table-cloth.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-personalized-tablecloth-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-table-cloths.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-article-table-cloths-table-runners.jpg` ⚠ file missing | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/signs/table-runners.blade.php`

*New images available: 4 (table-runners/) — 10 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-custom-table-runner.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-custom-table-runners.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-table-runner.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-table-runners.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-new-lenox.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-article-custom-table-cloths-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/signs/window-signs.blade.php`

*New images available: 5 (window-signs/) — 7 eligible slots — 5 Pending (carousel 1–4, card-left)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-business-window-signs.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-custom-window-signs.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-window-door-signs.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet-slammers.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-window-cling-decal-joliet-shorewood.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |

---

### `pages/signs/door-signs.blade.php`

*New images available: 1 (door-signs/) — 7 eligible slots — 1 Pending (carousel slot 1 only)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-door-signage.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-window-decal-joliet-shorewood-rockdale.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-window-cling-decal-joliet-shorewood.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-decal-joliet-shorewood-rockdale.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |

---

### `pages/signs/wall-signs.blade.php`

*New images available: 1 (wall-signs/) — 7 eligible slots — 1 Pending (carousel slot 1 only)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-wall-signs.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/stickers/custom-shaped-stickers.blade.php`

*New images available: 6 (custom-shaped/) — 7 eligible slots — 6 Pending (carousel 1–4, card-left, card-right)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-custom-stickers.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `stickers-decals/top5pct-custom-label-stickers.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `stickers-decals/top5pct-custom-shaped-stickers.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-diecut-stickers.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-stickers-in-joliet.jpg` | Done |
| 8 | `card-detailed-info` image1 | 400×300px | `stickers-decals/top5pct-article-buy-stickers-decals-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Keep |

---

### `pages/vehicle-graphics/automobile-graphics.blade.php`

*New images available: 9 (automobile-graphics/) — 10 eligible slots — 9 Pending (all except card-detailed-info)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `automobile-graphics/top5pct-car-wraps.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `automobile-graphics/top5pct-pickup-truck-graphics.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `automobile-graphics/top5pct-trailer-decal-graphics.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `automobile-graphics/top5pct-trailer-decals.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-van-graphics-decals.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `automobile-graphics/top5pct-vecal-decals.jpg` | Done |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-graphics.jpg` | Done |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg` | Done |
| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg` | Done |
| 11 | `card-detailed-info` image1 | 400×300px | `automobile-graphics/top5pct-article-car-wraps-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |

---

### `pages/vehicle-graphics/dot-decals.blade.php`

*New images available: 3 (dot-decals/) — 11 eligible slots — 3 Pending (carousel 1–3)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `dot-decals/top5pct-dot-decals-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `dot-decals/top5pct-dot-semi-truck-decals.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `dot-decals/top5pct-dot-truck-decals-joliet.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `dot-decals/top5pct-trucking-logo-joliet-shorewood-crest-hill.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `dot-decals/top5pct-dot-decals-joliet-shorewood-rockdale.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `dot-decals/top5pct-trucking-logo-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `dot-decals/top5pct-trucking-logo-joliet-shorewood-rockdale.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `dot-decals/top5pct-article-DOT-decals-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |

---

### `pages/vehicle-graphics/vehicle-magnets.blade.php`

*New images available: 8 (vehicle-magnets/) — 9 eligible slots — 8 Pending (all except card-detailed-info)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `vehicle-magnets/top5pct-automobile-magnets-joliet.jpg` | Done |
| 3 | `carousel` slot 2 | 600×450px | `vehicle-magnets/top5pct-car-magnets-joliet.jpg` | Done |
| 4 | `carousel` slot 3 | 600×450px | `vehicle-magnets/top5pct-car-magnets.jpg` | Done |
| 5 | `carousel` slot 4 | 600×450px | `vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg` | Done |
| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg` | Done |
| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets.jpg` | Done |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg` | Done |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets.jpg` | Done |
| 10 | `card-detailed-info` image1 | 400×300px | `vehicle-magnets/top5pct-article-car-magnets-truck-magnets.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Keep |

---

### `pages/promotional-items/can-koozies.blade.php`

*New images available: 2 (koozies/) — 7 eligible slots (no hero on this page) — 2 Pending (carousel 1–2)*

> All slots currently use `custom-shirts/` placeholder images. The 2 new dedicated koozie images will replace the first 2 eligible slots. The blade `image=` attributes also need updating (see Execution Checklist).

| # | Component | Size | Current Image (placeholder) | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/koozies/top5pct-can-koozies.jpg` | Done |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/koozies/top5pct-custom-koozies.jpg` | Done |
| 3 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Keep |
| 4 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 5 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 6 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 7 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/promotional-items/mugs.blade.php`

*New images available: 7 (mugs/) — 7 eligible slots (no hero on this page) — all 7 Pending*

> All slots currently use `custom-shirts/` placeholder images. All 7 eligible slots will receive new dedicated mug images. The blade `image=` attributes also need updating (see Execution Checklist).

| # | Component | Size | Current Image (placeholder) | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg` | Done |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs.jpg` | Done |
| 3 | `carousel` slot 3 | 600×450px | `promo-items/mugs/top5pct-custom-mugs-near-me.jpg` | Done |
| 4 | `carousel` slot 4 | 600×450px | `promo-items/mugs/top5pct-custom-mugs.jpg` | Done |
| 5 | `card-image-with-text` (left) | 600×450px | `promo-items/mugs/top5pct-custom-printed-mugs.jpg` | Done |
| 6 | `card-image-with-text` (right) | 600×450px | `promo-items/mugs/top5pct-picture-on-mugs.jpg` | Done |
| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/mugs/top5pct-printed-mugs.jpg` | Done |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

## Special Notes

### Duplicate filename: `custom-vinyl-hoodies.jpg` ✓ Resolved

`custom-vinyl-hoodies.jpg` existed in two source directories:
- `custom-apparel/digital-vinyl/custom-vinyl-hoodies.jpg`
- `custom-apparel/printing-options/digital-vinyl/custom-vinyl-hoodies.jpg`

Checksums were compared during migration — the files had **different content**. Both were copied:
- `public/images/custom-shirts/top5pct-custom-vinyl-hoodies.jpg` (from digital-vinyl/)
- `public/images/custom-shirts/top5pct-custom-vinyl-hoodies-2.jpg` (from printing-options/digital-vinyl/)

### Missing files referenced in `table-cloths.blade.php`

The carousel on `signs/table-cloths.blade.php` references two files that did not exist in `public/images/table-runners/`:
- `top5pct-custom-table-cloth-joliet-will-county.jpg` (carousel slot 3) — marked **Done**; the blade `image=` attribute still needs to be updated to point to the new `top5pct-table-cloths.jpg` (the 3rd incoming table-cloth image)
- `top5pct-article-table-cloths-table-runners.jpg` (carousel slot 4) — **Keep**; still renders broken until a dedicated article image is created

### Typo in source: `safety-work-gear-joliert.jpg` ✓ Fixed

The source file `custom-apparel/group-shirts/corporate-wear-shirts/safety-work-gear-joliert.jpg` had a typo (`joliert`). Corrected at destination: `public/images/corporate-wear/top5pct-safety-work-gear-joliet.jpg`.

### Typo in source: `vecal-decals.jpg`

The source file `vehicle-decals/automobile-graphics/vecal-decals.jpg` appears to be a misspelling of "vehicle decals". Preserve the source typo in the destination name (`top5pct-vecal-decals.jpg`) for now — correct it separately once confirmed.

### Deleted: `.psd` file

`public/new-images/custom-apparel/specialty-material/holographic/custom-jackets-with-glitter-in-joliet.psd` has been deleted. It was a Photoshop source file, not a web-ready image. This leaves `holographic-shirts.blade.php` with 0 new images — all slots on that page remain **Keep**. If a JPEG export is ever needed, export from the original source and name it `top5pct-custom-jackets-with-glitter-in-joliet.jpg` → destination `custom-shirts/`.

### Promo-items pages — blade attributes updated ✓

`can-koozies.blade.php` and `mugs.blade.php` blade `src`/`image=` attributes have been updated to reference the new `promo-items/koozies/` and `promo-items/mugs/` paths.

### No new banner (page-hero) images

None of the new-images directories contain page-hero banner images. All existing `top5pct-banner-*` files across every `public/images/` directory are untouched. All `category-hero` slots are **Keep**.

### All `card-banner-slide-in` CTAs stay

Every slide-in CTA on every page is **Keep** — regardless of whether its current image comes from the same directory as the page or a neighboring page's directory. None of these slots receive new images in this migration pass.

---

## Execution Checklist

- [x] Create `public/images/promo-items/koozies/`
- [x] Create `public/images/promo-items/mugs/`
- [x] Resolve `custom-vinyl-hoodies.jpg` duplicate — files differed; both copied (`top5pct-custom-vinyl-hoodies.jpg` + `top5pct-custom-vinyl-hoodies-2.jpg`)
- [x] Run migration for sections 1–16 above — 125 files copied, 1 renamed to `-old.jpg` (`top5pct-yard-signs-joliet-old.jpg`), 0 errors
- [x] Verify all files present at destination with `top5pct-` prefix
- [x] Mark each slot **Done** in this document
- [x] Fix `table-cloths.blade.php` carousel slot 3 — updated `image=` attribute from the missing `top5pct-custom-table-cloth-joliet-will-county.jpg` to `top5pct-table-cloths.jpg` ✓
- [ ] Fix `table-cloths.blade.php` carousel slot 4 — `top5pct-article-table-cloths-table-runners.jpg` still missing; create or source a dedicated article image
- [x] Update `can-koozies.blade.php` — 2 Done carousel slot `src` attributes updated to `promo-items/koozies/` paths ✓
- [x] Update `mugs.blade.php` — all 7 Done slot `src`/`image=` attributes updated to `promo-items/mugs/` paths ✓
- [ ] Remove `public/new-images/` directory once all above is verified

---

## Round 2 — New Images Migration

### Overview

Move all files from `public/new-images/` (Round 2 batch) into the matching `public/images/` directories, applying the same `top5pct-` prefix convention. **Total new images: 113 JPG files** (1 `.mov` video file skipped — see Special Notes).

---

### Conventions (same as Round 1)

| Rule | Detail |
|---|---|
| Prefix all incoming files | `<filename>.jpg` → `top5pct-<filename>.jpg` |
| Spaces and uppercase in filenames | Replace spaces with hyphens; normalize to lowercase: `Custom-Backlit-Display-Signs-in-Joliet.jpg` → `top5pct-custom-backlit-display-signs-in-joliet.jpg` |
| Conflict resolution | If `top5pct-<name>.jpg` already exists at destination, rename existing to `top5pct-<name>-old.jpg` before copying |
| Banners (page-hero images) | Untouched — no new banner-format images exist in this batch |
| New directories | Create before copying if they do not yet exist |
| After migration | `public/new-images/` directory can be removed once all moves are verified |

---

### Directory Mapping

| `public/new-images/` source | `public/images/` destination | New dir? |
|---|---|---|
| `Business Signs/Backlit Signs/` | `backlit-signs/` | **yes** |
| `Business Signs/Banners/` | `banners/` | no |
| `Business Signs/Door Signs/` | `window-wall-floor-decals/` | no |
| `Business Signs/Outdoor Signs/` | `outdoor-signs/` | **yes** |
| `Business Signs/Posters/` | `posters/` | no |
| `Business Signs/Wall Signs/` | `window-wall-floor-decals/` | no |
| `Business Signs/Window Signs/` | `window-wall-floor-decals/` | no |
| `Custom Shirts/Group Shirts/Corporate Wear/` | `corporate-wear/` | no |
| `Custom Shirts/Group Shirts/Spirit Wear/` | `spirit-wear/` | no |
| `Custom Shirts/Printing Options/Digital Vinyl/` | `custom-shirts/` | no |
| `Custom Shirts/Printing Options/DTF/` | `dtf-transfers/` | no |
| `Custom Shirts/Printing Options/Embroidery/` | `custom-shirts/` | no |
| `Custom Shirts/Printing Options/Rhinestones/` | `custom-shirts/` | no |
| `Custom Shirts/Printing Options/Sublimation/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Brick/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Chameleon/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Flock/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Foil/` | `custom-shirts/` | no ⚠ |
| `Custom Shirts/Specialty Material/Glitter/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Glow/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Holographic/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Puff/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Reflective/` | `custom-shirts/` | no |
| `Custom Shirts/Specialty Material/Rhinestones/` | `custom-shirts/` | no |
| `Ground Signs/A-Frames/` | `sidewalk-signs/` | no |
| `Koozies/` | `promo-items/koozies/` | no |
| `Mugs/` | `promo-items/mugs/` | no |
| `Stickers/Custom Shaped Stickers/` | `stickers-decals/` | no |
| `Stickers/Regular Stickers/` | `stickers-decals/` | no |
| `Table Signs/Table Cloths/` | `table-runners/` | no |
| `Table Signs/Table Runner/` | `table-runners/` | no |
| `Vehicle Decals/Automobile Graphics/` | `automobile-graphics/` | no |
| `Vehicle Decals/DOT Decals/` | `dot-decals/` | no |
| `Vehicle Decals/Vehicle Magnets/` | `vehicle-magnets/` | no |

---

### Directory Image Counts

| Directory | Existing (after R1) | R2 new | After R2 |
|---|---|---|---|
| `automobile-graphics/` | 16 | 1 | 17 |
| `backlit-signs/` | 0 | 7 | 7 |
| `banners/` | 15 | 5 | 20 |
| `corporate-wear/` | 15 | 1 | 16 |
| `custom-shirts/` | 56 | 49 | 105 |
| `dot-decals/` | 10 | 7 | 17 |
| `dtf-transfers/` | 7 | 6 | 13 |
| `outdoor-signs/` | 0 | 2 | 2 |
| `posters/` | 7 | 4 | 11 |
| `promo-items/koozies/` | 2 | 3 | 5 |
| `promo-items/mugs/` | 7 | 1 | 8 |
| `sidewalk-signs/` | 9 | 3 | 12 |
| `spirit-wear/` | 10 | 2 | 12 |
| `stickers-decals/` | 14 | 4 | 18 |
| `table-runners/` | 14 | 3 | 17 |
| `vehicle-magnets/` | 14 | 5 | 19 |
| `window-wall-floor-decals/` | 15 | 10 | 25 |

> `custom-shirts/` R2 new count of 49 includes 5 foil images (flagged below). Excluding foil: 44 new.

---

### Section-by-Section File Operations

#### R2-1. `backlit-signs/` — Business Signs / Backlit Signs (7 files, NEW directory)

Create `public/images/backlit-signs/` before copying.

| Source | Destination |
|---|---|
| `Custom-Backlit-Display-Signs-in-Joliet.jpg` | `top5pct-custom-backlit-display-signs-in-joliet.jpg` *(lowercase normalized)* |
| `backlit-company-signs.jpg` | `top5pct-backlit-company-signs.jpg` |
| `backlit-display-signs-joliet.jpg` | `top5pct-backlit-display-signs-joliet.jpg` |
| `backlit-monument-sign-joliet.jpg` | `top5pct-backlit-monument-sign-joliet.jpg` |
| `backlit-outdoor-signs.jpg` | `top5pct-backlit-outdoor-signs.jpg` |
| `backlit-sign-new-lenox.jpg` | `top5pct-backlit-sign-new-lenox.jpg` |
| `monument-signs-joliet.jpg` | `top5pct-monument-signs-joliet.jpg` |

---

#### R2-2. `banners/` — Business Signs / Banners (5 files)

Product photos of banners — not page-hero images. Existing `top5pct-banner-*` files remain untouched.

| Source | Destination |
|---|---|
| `banners-for-trade-shows.jpg` | `top5pct-banners-for-trade-shows.jpg` |
| `mesh-construction-banner.jpg` | `top5pct-mesh-construction-banner.jpg` |
| `portable-banners.jpg` | `top5pct-portable-banners.jpg` |
| `retractable-banners-plainfield.jpg` | `top5pct-retractable-banners-plainfield.jpg` |
| `sports-banners.jpg` | `top5pct-sports-banners.jpg` |

---

#### R2-3. `window-wall-floor-decals/` — Door Signs (5 files)

| Source | Destination |
|---|---|
| `business-door-signs.jpg` | `top5pct-business-door-signs.jpg` |
| `door-sign-installers.jpg` | `top5pct-door-sign-installers.jpg` |
| `door-wraps-joliet.jpg` | `top5pct-door-wraps-joliet.jpg` |
| `vinyl-door-lettering.jpg` | `top5pct-vinyl-door-lettering.jpg` |
| `vinyl-door-signs.jpg` | `top5pct-vinyl-door-signs.jpg` |

---

#### R2-4. `outdoor-signs/` — Business Signs / Outdoor Signs (2 files, NEW directory)

Create `public/images/outdoor-signs/` before copying.

| Source | Destination |
|---|---|
| `outdoor-banner-signs-joliet.jpg` | `top5pct-outdoor-banner-signs-joliet.jpg` |
| `outdoor-sign-joliet.jpg` | `top5pct-outdoor-sign-joliet.jpg` |

---

#### R2-5. `posters/` — Business Signs / Posters (4 files)

| Source | Destination |
|---|---|
| `big-posters-joliet.jpg` | `top5pct-big-posters-joliet.jpg` |
| `custom-posters.jpg` | `top5pct-custom-posters.jpg` |
| `poster-board-joliet.jpg` | `top5pct-poster-board-joliet.jpg` |
| `posters-printed-joliet.jpg` | `top5pct-posters-printed-joliet.jpg` |

---

#### R2-6. `window-wall-floor-decals/` — Wall Signs (2 files)

| Source | Destination |
|---|---|
| `wall-signs.jpg` | `top5pct-wall-signs.jpg` ⚠ see collision note |
| `wall-wraps.jpg` | `top5pct-wall-wraps.jpg` |

---

#### R2-7. `window-wall-floor-decals/` — Window Signs (3 files)

| Source | Destination |
|---|---|
| `joliet-slammers-window-signs-joliet.jpg` | `top5pct-joliet-slammers-window-signs-joliet.jpg` |
| `window-signage.jpg` | `top5pct-window-signage.jpg` |
| `window-signs-joliet.jpg` | `top5pct-window-signs-joliet.jpg` ⚠ see collision note |

---

#### R2-8. `corporate-wear/` — Group Shirts / Corporate Wear (1 file)

| Source | Destination |
|---|---|
| `custom-company-apparel.jpg` | `top5pct-custom-company-apparel.jpg` |

---

#### R2-9. `spirit-wear/` — Group Shirts / Spirit Wear (2 files)

| Source | Destination |
|---|---|
| `spirit-wear-clothing.jpg` | `top5pct-spirit-wear-clothing.jpg` |
| `volleyball-team-uniforms-joliet.jpg` | `top5pct-volleyball-team-uniforms-joliet.jpg` |

---

#### R2-10. `custom-shirts/` — Digital Vinyl (1 file)

| Source | Destination |
|---|---|
| `digital-vinyl-t-shirts.jpg` | `top5pct-digital-vinyl-t-shirts.jpg` |

---

#### R2-11. `dtf-transfers/` — DTF Printing (6 files)

| Source | Destination |
|---|---|
| `custom-baby-clothing-joliet.jpg` | `top5pct-custom-baby-clothing-joliet.jpg` |
| `custom-bowling-shirts-dtf.jpg` | `top5pct-custom-bowling-shirts-dtf.jpg` |
| `custom-dtf-shirts.jpg` | `top5pct-custom-dtf-shirts.jpg` |
| `dtf-tees.jpg` | `top5pct-dtf-tees.jpg` |
| `dtf-t-shirt-maker.jpg` | `top5pct-dtf-t-shirt-maker.jpg` |
| `dtf-t-shirt-printing.jpg` | `top5pct-dtf-t-shirt-printing.jpg` |

---

#### R2-12. `custom-shirts/` — Embroidery (5 files)

| Source | Destination |
|---|---|
| `embroidered-bag.jpg` | `top5pct-embroidered-bag.jpg` |
| `embroidered-caps.jpg` | `top5pct-embroidered-caps.jpg` ⚠ see collision note |
| `embroidered-smocks.jpg` | `top5pct-embroidered-smocks.jpg` |
| `embroidery-beanies.jpg` | `top5pct-embroidery-beanies.jpg` |
| `stitched-embroidered-shirts.jpg` | `top5pct-stitched-embroidered-shirts.jpg` |

---

#### R2-13. `custom-shirts/` — Rhinestones / Printing Options (5 files)

| Source | Destination |
|---|---|
| `rhinestone-apparel-keith-elementary.jpg` | `top5pct-rhinestone-apparel-keith-elementary.jpg` |
| `rhinestone-bling-joliet.jpg` | `top5pct-rhinestone-bling-joliet.jpg` |
| `rhinestone-hoodie-joliet-west.jpg` | `top5pct-rhinestone-hoodie-joliet-west.jpg` |
| `rhinestone-ladies-shirt.jpg` | `top5pct-rhinestone-ladies-shirt.jpg` |
| `rhinestone-t-shirts-joliet.jpg` | `top5pct-rhinestone-t-shirts-joliet.jpg` |

---

#### R2-14. `custom-shirts/` — Sublimation (4 files)

| Source | Destination |
|---|---|
| `custom-sublimation-shirts.jpg` | `top5pct-custom-sublimation-shirts.jpg` |
| `dye-sublimation-custom-shirt-joliet.jpg` | `top5pct-dye-sublimation-custom-shirt-joliet.jpg` |
| `long-lasting-graphic-shirts.jpg` | `top5pct-long-lasting-graphic-shirts.jpg` |
| `sublmation-team-shirts.jpg` | `top5pct-sublmation-team-shirts.jpg` *(source typo preserved)* |

---

#### R2-15. `custom-shirts/` — Specialty / Brick (4 files)

| Source | Destination |
|---|---|
| `brick-vinyl-cresthill.jpg` | `top5pct-brick-vinyl-cresthill.jpg` |
| `brick-vinyl-custom-t-shirt.jpg` | `top5pct-brick-vinyl-custom-t-shirt.jpg` |
| `brick-vinyl-jackets-joliet.jpg` | `top5pct-brick-vinyl-jackets-joliet.jpg` |
| `customized-brick-vinyl-shirts.jpg` | `top5pct-customized-brick-vinyl-shirts.jpg` |

---

#### R2-16. `custom-shirts/` — Specialty / Chameleon (1 file)

> `chameleon-custom-shirt.mov` is a video file — **skipped**. Only the JPG is copied.

| Source | Destination |
|---|---|
| `custom-shirt-chameleon.jpg` | `top5pct-custom-shirt-chameleon.jpg` |

---

#### R2-17. `custom-shirts/` — Specialty / Flock (3 files)

| Source | Destination |
|---|---|
| `custom-flock-t-shirt-printing.jpg` | `top5pct-custom-flock-t-shirt-printing.jpg` |
| `flock-hoodie-printing.jpg` | `top5pct-flock-hoodie-printing.jpg` |
| `flock-shirt-vinyl.jpg` | `top5pct-flock-shirt-vinyl.jpg` |

---

#### R2-18. `custom-shirts/` — Specialty / Foil (5 files) ⚠

> **No matching URL path in `url.paths.txt`** for foil shirts. `foil-shirts.blade.php` exists but has no URL entry. Images are copied to `custom-shirts/` but **no slot assignments are made** until a URL path is added to `url.paths.txt`.

| Source | Destination |
|---|---|
| `custom-foil-polo.jpg` | `top5pct-custom-foil-polo.jpg` |
| `custom-wedding-foil-shirts.jpg` | `top5pct-custom-wedding-foil-shirts.jpg` |
| `foil-custom-t-shirts.jpg` | `top5pct-foil-custom-t-shirts.jpg` |
| `foil-gold-t-shirt.jpg` | `top5pct-foil-gold-t-shirt.jpg` |
| `gold-foil-printed-shirts.jpg` | `top5pct-gold-foil-printed-shirts.jpg` |

---

#### R2-19. `custom-shirts/` — Specialty / Glitter (8 files)

| Source | Destination |
|---|---|
| `custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts.jpg` ⚠ see collision note |
| `custom-wedding-glitter-shirts.jpg` | `top5pct-custom-wedding-glitter-shirts.jpg` |
| `gitter-birthday-shirt.jpg` | `top5pct-gitter-birthday-shirt.jpg` *(source typo preserved)* |
| `glitter-blue-jean-jacket.jpg` | `top5pct-glitter-blue-jean-jacket.jpg` |
| `glitter-lips-custom-t-shirt.jpg` | `top5pct-glitter-lips-custom-t-shirt.jpg` |
| `glitter-t-shirts-cresthill.jpg` | `top5pct-glitter-t-shirts-cresthill.jpg` |
| `glitter-t-shirts.jpg` | `top5pct-glitter-t-shirts.jpg` |

> Note: the R1 `custom-glitter-sweatshirts.jpg` collision rename handles the 8th entry; only 7 new filenames appear in this table.

---

#### R2-20. `custom-shirts/` — Specialty / Glow (3 files)

| Source | Destination |
|---|---|
| `glow-in-the-dark-caps.jpg` | `top5pct-glow-in-the-dark-caps.jpg` |
| `glowing-halloween-bat-shirt.jpg` | `top5pct-glowing-halloween-bat-shirt.jpg` |
| `halloween-pumpkin-glow-shirt.jpg` | `top5pct-halloween-pumpkin-glow-shirt.jpg` |

---

#### R2-21. `custom-shirts/` — Specialty / Holographic (1 file)

| Source | Destination |
|---|---|
| `holographic-vinyl-hoodie-foil.jpg` | `top5pct-holographic-vinyl-hoodie-foil.jpg` |

---

#### R2-22. `custom-shirts/` — Specialty / Puff (3 files)

| Source | Destination |
|---|---|
| `custom-puff-shirts.jpg` | `top5pct-custom-puff-shirts.jpg` |
| `puff-shirts-joliet.jpg` | `top5pct-puff-shirts-joliet.jpg` |
| `puff-shirts.jpg` | `top5pct-puff-shirts.jpg` |

---

#### R2-23. `custom-shirts/` — Specialty / Reflective (4 files)

| Source | Destination |
|---|---|
| `custom-reflective-hoodies.jpg` | `top5pct-custom-reflective-hoodies.jpg` |
| `reflective-shirts.jpg` | `top5pct-reflective-shirts.jpg` |
| `reflective-shirts-shorewood.jpg` | `top5pct-reflective-shirts-shorewood.jpg` |
| `reflective-vinyl-shirts-plainfield.jpg` | `top5pct-reflective-vinyl-shirts-plainfield.jpg` |

---

#### R2-24. `custom-shirts/` — Specialty / Rhinestones (2 files)

| Source | Destination |
|---|---|
| `custom-rhinestone-shirts.jpg` | `top5pct-custom-rhinestone-shirts.jpg` |
| `rhinetsone-t-shirts.jpg` | `top5pct-rhinetsone-t-shirts.jpg` *(source typo preserved)* |

---

#### R2-25. `sidewalk-signs/` — Ground Signs / A-Frames (3 files)

| Source | Destination |
|---|---|
| `a-frame-sidewalk-signs.jpg` | `top5pct-a-frame-sidewalk-signs.jpg` |
| `sidewalk-signage.jpg` | `top5pct-sidewalk-signage.jpg` |
| `sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet.jpg` ⚠ see collision note |

---

#### R2-26. `promo-items/koozies/` — Koozies (3 files)

| Source | Destination |
|---|---|
| `custom-can-koozies.jpg` | `top5pct-custom-can-koozies.jpg` |
| `koozies-joliet.jpg` | `top5pct-koozies-joliet.jpg` |
| `personalized-koozies-joliet.jpg` | `top5pct-personalized-koozies-joliet.jpg` |

---

#### R2-27. `promo-items/mugs/` — Mugs (1 file)

| Source | Destination |
|---|---|
| `printed-mugs.jpg` | `top5pct-printed-mugs.jpg` ⚠ see collision note |

---

#### R2-28. `stickers-decals/` — Custom Shaped Stickers (3 files)

| Source | Destination |
|---|---|
| `custom-shaped-stickers-cresthill.jpg` | `top5pct-custom-shaped-stickers-cresthill.jpg` |
| `die-cut-stickers-joliet.jpg` | `top5pct-die-cut-stickers-joliet.jpg` |
| `die-cut-stickers-shorewood.jpg` | `top5pct-die-cut-stickers-shorewood.jpg` |

---

#### R2-29. `stickers-decals/` — Regular Stickers (1 file)

| Source | Destination |
|---|---|
| `custom-stickers-cresthill.jpg` | `top5pct-custom-stickers-cresthill.jpg` |

---

#### R2-30. `table-runners/` — Table Cloths (2 files)

| Source | Destination |
|---|---|
| `custom-table-cloth-business.jpg` | `top5pct-custom-table-cloth-business.jpg` |
| `printed-table-cloths.jpg` | `top5pct-printed-table-cloths.jpg` |

---

#### R2-31. `table-runners/` — Table Runner (1 file)

| Source | Destination |
|---|---|
| `table-runner-joliet.jpg` | `top5pct-table-runner-joliet.jpg` |

---

#### R2-32. `automobile-graphics/` — Automobile Graphics (1 file)

| Source | Destination |
|---|---|
| `auto-window-wraps.jpg` | `top5pct-auto-window-wraps.jpg` |

---

#### R2-33. `dot-decals/` — DOT Decals (7 files)

| Source | Destination |
|---|---|
| `DOT-lettering-joliet.jpg` | `top5pct-dot-lettering-joliet.jpg` *(lowercase normalized)* |
| `custom-dot-decals-for-trucks-in-joliet.jpg` | `top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` |
| `custom-dot-truck-signs-illinois.jpg` | `top5pct-custom-dot-truck-signs-illinois.jpg` |
| `dot-decals-semi-truck.jpg` | `top5pct-dot-decals-semi-truck.jpg` |
| `dot-magnets.jpg` | `top5pct-dot-magnets.jpg` |
| `trucking-dot-decals-in-joliet.jpg` | `top5pct-trucking-dot-decals-in-joliet.jpg` |

---

#### R2-34. `vehicle-magnets/` — Vehicle Magnets (5 files)

| Source | Destination |
|---|---|
| `car-decals-white-oaks-library.jpg` | `top5pct-car-decals-white-oaks-library.jpg` |
| `joliet-car-magnets.jpg` | `top5pct-joliet-car-magnets.jpg` |
| `magnet-vehicle-signs-joliet.jpg` | `top5pct-magnet-vehicle-signs-joliet.jpg` |
| `truck-sign-magnets-joliet.jpg` | `top5pct-truck-sign-magnets-joliet.jpg` |
| `yard-signs-near-me.jpg` | `top5pct-yard-signs-near-me.jpg` |

---

### Round 2 Special Notes

#### Collisions — rename existing before copying

| Existing file | Renamed to | New file arriving |
|---|---|---|
| `custom-shirts/top5pct-embroidered-caps.jpg` | `top5pct-embroidered-caps-old.jpg` | R2-12 embroidery |
| `custom-shirts/top5pct-custom-glitter-sweatshirts.jpg` | `top5pct-custom-glitter-sweatshirts-old.jpg` | R2-19 glitter |
| `window-wall-floor-decals/top5pct-wall-signs.jpg` | `top5pct-wall-signs-old.jpg` | R2-6 wall signs |
| `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | `top5pct-window-signs-joliet-old.jpg` | R2-7 window signs |
| `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | `top5pct-sidewalk-signs-joliet-old.jpg` | R2-25 a-frames |
| `promo-items/mugs/top5pct-printed-mugs.jpg` | `top5pct-printed-mugs-old.jpg` | R2-27 mugs |

#### Skipped: `.mov` video file

`Custom Shirts/Specialty Material/Chameleon/chameleon-custom-shirt.mov` — video file, not a web image. Skipped.

#### Foil shirts — no URL path

`foil-shirts.blade.php` exists but a foil URL is absent from `url.paths.txt`. Images copied but no slot assignments until a URL is registered.

#### Missing blade pages — slots TBD

- `signs/backlit-signs.blade.php` — does not exist yet. 7 images copied to `backlit-signs/`. Slot inventory pending page creation.
- `signs/outdoor-signs.blade.php` — does not exist yet. 2 images copied to `outdoor-signs/`. Slot inventory pending page creation.
- Chameleon page — no blade page found. 1 image copied to `custom-shirts/`. Slot inventory pending page creation.

#### Source typos preserved at destination

| Source typo | Preserved destination name |
|---|---|
| `sublmation-team-shirts.jpg` | `top5pct-sublmation-team-shirts.jpg` |
| `gitter-birthday-shirt.jpg` | `top5pct-gitter-birthday-shirt.jpg` |
| `rhinetsone-t-shirts.jpg` | `top5pct-rhinetsone-t-shirts.jpg` |

---

### Replacement Rules (same as Round 1)

- **All `category-hero` slots** → **Keep**
- **All `card-banner-slide-in` slots** → **Keep**
- **All other slots** → filled **Pending** in page order, 1:1 against the count of new images available for that page's category. Slots beyond the count → **Keep**

### Replaced? Key

| Status | Meaning |
|---|---|
| **Pending** | Will receive a new image from `new-images/` — 1:1 in page order |
| **Keep** | No replacement: hero banners, all slide-in CTAs, or beyond the count of available new images |
| **Done** | Update to this once the swap is complete |

---

### Round 2 Blade Page Image Slot Inventory

---

### `pages/custom-apparel/dtf-transfers.blade.php`

*R1 used 5 slots (all Done). R2 new images: 6 — fills remaining 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `dtf-transfers/top5pct-custom-sweatshirts.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `dtf-transfers/top5pct-custom-shirt-with-picture.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `dtf-transfers/top5pct-custom-t-shirts-dtf.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dtf-transfers/top5pct-dtf-hoodies-joliet.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `dtf-transfers/top5pct-custom-baby-clothing-joliet.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `dtf-transfers/top5pct-custom-bowling-shirts-dtf.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |

> R2 excess (copied to `dtf-transfers/`, no slot assignment): `top5pct-custom-dtf-shirts.jpg`, `top5pct-dtf-tees.jpg`, `top5pct-dtf-t-shirt-maker.jpg`, `top5pct-dtf-t-shirt-printing.jpg`.

---

### `pages/custom-apparel/printing-options/embroidery.blade.php`

*R1 used 4 slots (carousel 1–4 Done). R2 new images: 5 — fills remaining 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-embroidered-aprons.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-embroidered-caps.jpg` | Done (R1) — R2 replaces file transparently via collision rename |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-embroidery-in-joliet.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-stitched-caps.jpg` | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-embroidered-bag.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-embroidered-smocks.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-embroidery-beanies.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-stitched-embroidered-shirts.jpg`.

---

### `pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 7 (5 from Printing Options + 2 from Specialty Material/Rhinestones) — fills all 7 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-rhinestone-apparel-keith-elementary.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-rhinestone-bling-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-rhinestone-hoodie-joliet-west.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-rhinestone-ladies-shirt.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-rhinestone-t-shirts-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirts.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-rhinetsone-t-shirts.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/dye-sublimation.blade.php`

*R1 used all 7 eligible slots (all Done). R2 new images: 4 — no blade slots remain; all copied to `custom-shirts/` for future use.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 2–5 | `carousel` slots 1–4 | 600×450px | *(Done R1)* | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-dye-sublimation-shirts.jpg` | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-sublimation-shirt-printer.jpg` | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-sublimation-shirt.jpg` | Done (R1) |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-custom-sublimation-shirts.jpg`, `top5pct-dye-sublimation-custom-shirt-joliet.jpg`, `top5pct-long-lasting-graphic-shirts.jpg`, `top5pct-sublmation-team-shirts.jpg`.

---

### `pages/custom-apparel/brick-shirts.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 4 — fills first 4 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-brick-vinyl-cresthill.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-brick-vinyl-custom-t-shirt.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-brick-vinyl-jackets-joliet.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-customized-brick-vinyl-shirts.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/flock-shirts.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 3 — fills first 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-flock-t-shirt-printing.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-flock-hoodie-printing.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-flock-shirt-vinyl.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/glitter-shirts.blade.php`

*R1 used 2 slots (carousel 1–2 Done). R2 new images: 8 — fills remaining 5 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-glitter-clothing.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-glitter-sweatshirts.jpg` | Done (R1) — R2 replaces file transparently via collision rename |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-wedding-glitter-shirts.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-glitter-blue-jean-jacket.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-glitter-lips-custom-t-shirt.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-glitter-t-shirts-cresthill.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-glitter-t-shirts.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-gitter-birthday-shirt.jpg`.

---

### `pages/custom-apparel/glow-in-the-dark-shirts.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 3 — fills first 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-glow-in-the-dark-caps.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-glowing-halloween-bat-shirt.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-halloween-pumpkin-glow-shirt.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/holographic-shirts.blade.php`

*R1 had 0 new images — all Keep. R2 new images: 1 — fills carousel slot 1.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-holographic-vinyl-hoodie-foil.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | Keep |

---

### `pages/custom-apparel/puff-shirts.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 3 — fills first 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-puff-shirts.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-puff-shirts-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-puff-shirts.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Keep |

---

### `pages/custom-apparel/reflective-shirts.blade.php`

*R1 used 1 slot (carousel 1 Done). R2 new images: 4 — fills next 4 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-reflective-shirts-gold.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-reflective-hoodies.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-reflective-shirts.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-reflective-shirts-shorewood.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-reflective-vinyl-shirts-plainfield.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`

*R1 used 7 slots (all Done). R2 new images: 1 — fills next eligible slot.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Keep |
| 2–8 | *(carousel 1–4, card-left, card-right, card-2image image1)* | — | *(Done R1)* | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `corporate-wear/top5pct-custom-company-apparel.jpg` | Pending |
| 10 | `card-image-with-text` (left) | 600×450px | `corporate-wear/toptpct-custom-cap-hat-joliet-shorewood-rockdale.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `corporate-wear/toptpct-article-corporate-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `corporate-wear/toptpct-custom-button-up-shirt-joliet-shorewood.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |

---

### `pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`

*R1 used 2 slots (carousel 1–2 Done). R2 new images: 2 — fills next 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `spirit-wear/top5pct-spirit-wear-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `spirit-wear/top5pct-spirit-wear-shirts.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `spirit-wear/top5pct-spirit-wear-clothing.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `spirit-wear/top5pct-volleyball-team-uniforms-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `spirit-wear/top5pct-spiritwear-fanwear-joliet-plainfield-shorewood.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `spirit-wear/top5pct-sator-sanchez-school-shirt-joliet-crest-hill.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `spirit-wear/top5pct-bowling-shirts-joliet-shorewood-crest-hill.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `spirit-wear/top5pct-article-spirit-wear-pic1.jpg` | Keep |
| 12 | `card-detailed-info` image2 | 400×300px | `spirit-wear/top5pct-article-fan-wear-pic2.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `spirit-wear/top5pct-plainfield-south-high-school-hoodie.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `reunion-shirts/toptpct-family-reunion-shirts-joliet-romeoville.jpg` | Keep |

---

### `pages/signs/banners.blade.php`

*R1 used 7 slots (all Done). R2 new images: 5 — fills next 4 eligible slots (only 4 remain).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |
| 2–8 | *(carousel 1–4, card-left, card-right, card-2image image1)* | — | *(Done R1)* | Done (R1) |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `banners/top5pct-banners-for-trade-shows.jpg` | Pending |
| 10 | `card-2image-with-text` image1 (2nd) | fluid 4:3, ~50% | `banners/top5pct-mesh-construction-banner.jpg` | Pending |
| 11 | `card-2image-with-text` image2 (2nd) | fluid 4:3, ~50% | `banners/top5pct-portable-banners.jpg` | Pending |
| 12 | `card-detailed-info` image1 | 400×300px | `banners/top5pct-retractable-banners-plainfield.jpg` | Pending |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |
| 14 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-sports-banners.jpg`.

---

### `pages/signs/door-signs.blade.php`

*R1 used 1 slot (carousel slot 1 Done). R2 new images: 5 — fills next 5 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-door-signage.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-business-door-signs.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-door-sign-installers.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-door-wraps-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-lettering.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-vinyl-door-signs.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |

---

### `pages/signs/wall-signs.blade.php`

*R1 used 1 slot (carousel slot 1 Done). R2 new images: 2 — fills next 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-wall-signs.jpg` | Done (R1) — R2 replaces file transparently via collision rename |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-wall-wraps.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-article-window-wall-signs.jpg` | Keep |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/window-signs.blade.php`

*R1 used 5 slots (all Done). R2 new images: 3 — fills next 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Keep |
| 2–6 | *(carousel 1–4, card-left)* | — | *(Done R1)* | Done (R1) |
| 7 | `card-image-with-text` (right) | 600×450px | `window-wall-floor-decals/top5pct-joliet-slammers-window-signs-joliet.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `window-wall-floor-decals/top5pct-window-signage.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-window-signs-joliet.jpg` — collision rename replaces R1 file transparently.

---

### `pages/signs/posters.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 4 — fills first 4 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `posters/top5pct-banner-poster-maker-joliet-romeoville-shorewood.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `posters/top5pct-big-posters-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `posters/top5pct-custom-posters.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `posters/top5pct-poster-board-joliet.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `posters/top5pct-posters-printed-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | Keep |
| 7 | `card-image-with-text` (right) | 600×450px | `posters/top5pct-poster-maker-joliet-shorewood-plainfield.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `posters/top5pct-poster-board-joliet-shorewood-romeoville.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `posters/top5pct-postermywall-joliet-shorewood-crest-hill.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/backlit-signs.blade.php`

*Blade page does not exist yet. 7 images copied to `backlit-signs/`. Slot inventory TBD pending page creation.*

---

### `pages/signs/sidewalk-signs-a-frame-signs.blade.php`

*R1 used 4 slots (carousel 1–4 Done). R2 new images: 3 — fills next 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `sidewalk-signs/top5pct-a-frame-sign.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `sidewalk-signs/top5pct-sidewalk-sign.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg` | Done (R1) — R2 replaces file transparently via collision rename |
| 6 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-a-frame-sidewalk-signs.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `sidewalk-signs/top5pct-sidewalk-signage.jpg` | Pending |
| 8 | `card-image-with-text` (left) | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg` | Keep |
| 9 | `card-detailed-info` image1 | 400×300px | `sidewalk-signs/top5pct-article-a-frame-sidewalk-signs.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/table-cloths.blade.php`

*R1 used 3 slots (carousel 1–3 Done). R2 new images: 2 — fills next 2 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-custom-table-cloth.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-personalized-tablecloth-joliet.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-table-cloths.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-article-table-cloths-table-runners.jpg` ⚠ file still missing | Keep |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-custom-table-cloth-business.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-printed-table-cloths.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/signs/table-runners.blade.php`

*R1 used 4 slots (carousel 1–4 Done). R2 new images: 1 — fills next eligible slot.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2–5 | `carousel` slots 1–4 | 600×450px | *(Done R1)* | Done (R1) |
| 6 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `table-runners/top5pct-custom-table-skirt-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-image-with-text` (left) | 600×450px | `table-runners/top5pct-table-runner-popus-gourmet-popcorn-joliet.jpg` | Keep |
| 11 | `card-detailed-info` image1 | 400×300px | `table-runners/top5pct-article-custom-table-cloths-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Keep |

---

### `pages/stickers/custom-shaped-stickers.blade.php`

*R1 used 6 slots (all Done). R2 new images: 3 — fills next eligible slot (only 1 remains).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg` | Keep |
| 2–7 | *(carousel 1–4, card-left, card-right)* | — | *(Done R1)* | Done (R1) |
| 8 | `card-detailed-info` image1 | 400×300px | `stickers-decals/top5pct-custom-shaped-stickers-cresthill.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-die-cut-stickers-joliet.jpg`, `top5pct-die-cut-stickers-shorewood.jpg`.

---

### `pages/stickers/standard-stickers.blade.php`

*Not in R1 inventory — all slots were Keep. R2 new images: 1 — fills carousel slot 1.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | *(existing hero)* | Keep |
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-custom-stickers-cresthill.jpg` | Pending |
| 3–8 | *(remaining eligible slots)* | — | *(existing images)* | Keep |
| 9–10 | `card-banner-slide-in` × 2 | full-width 16:7 | *(existing)* | Keep |

---

### `pages/vehicle-graphics/automobile-graphics.blade.php`

*R1 used 9 slots (all Done). R2 new images: 1 — fills next eligible slot.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` | Keep |
| 2–10 | *(carousel 1–4, card-left, card-right, card-2image ×2, card-image-left)* | — | *(Done R1)* | Done (R1) |
| 11 | `card-detailed-info` image1 | 400×300px | `automobile-graphics/top5pct-auto-window-wraps.jpg` | Pending |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |

---

### `pages/vehicle-graphics/dot-decals.blade.php`

*R1 used 3 slots (carousel 1–3 Done). R2 new images: 7 — fills remaining 7 eligible slots (out of 8 remaining).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `dot-decals/top5pct-dot-decals-joliet.jpg` | Done (R1) |
| 3 | `carousel` slot 2 | 600×450px | `dot-decals/top5pct-dot-semi-truck-decals.jpg` | Done (R1) |
| 4 | `carousel` slot 3 | 600×450px | `dot-decals/top5pct-dot-truck-decals-joliet.jpg` | Done (R1) |
| 5 | `carousel` slot 4 | 600×450px | `dot-decals/top5pct-custom-dot-decals-for-trucks-in-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-custom-dot-truck-signs-illinois.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `dot-decals/top5pct-dot-decals-semi-truck.jpg` | Pending |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-lettering-joliet.jpg` | Pending |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `dot-decals/top5pct-dot-magnets.jpg` | Pending |
| 10 | `card-image-with-text` (left) | 600×450px | `dot-decals/top5pct-trucking-dot-decals-in-joliet.jpg` | Pending |
| 11 | `card-detailed-info` image1 | 400×300px | `dot-decals/top5pct-article-DOT-decals-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (right→left) | full-width 16:7 | `dot-decals/top5pct-truck-lettering-joliet-shorewood-rockdale.jpg` | Keep |
| 13 | `card-banner-slide-in` (left→right) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |

---

### `pages/vehicle-graphics/vehicle-magnets.blade.php`

*R1 used 8 slots (all Done). R2 new images: 5 — fills next eligible slot (only 1 remains).*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg` | Keep |
| 2–9 | *(carousel 1–4, card-left, card-right, card-2image ×2)* | — | *(Done R1)* | Done (R1) |
| 10 | `card-detailed-info` image1 | 400×300px | `vehicle-magnets/top5pct-car-decals-white-oaks-library.jpg` | Pending |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Keep |

> R2 excess (copied, no slot assignment): `top5pct-joliet-car-magnets.jpg`, `top5pct-magnet-vehicle-signs-joliet.jpg`, `top5pct-truck-sign-magnets-joliet.jpg`, `top5pct-yard-signs-near-me.jpg`.

---

### `pages/promotional-items/can-koozies.blade.php`

*R1 used 2 slots (carousel 1–2 Done). R2 new images: 3 — fills next 3 eligible slots.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `promo-items/koozies/top5pct-can-koozies.jpg` | Done (R1) |
| 2 | `carousel` slot 2 | 600×450px | `promo-items/koozies/top5pct-custom-koozies.jpg` | Done (R1) |
| 3 | `carousel` slot 3 | 600×450px | `promo-items/koozies/top5pct-custom-can-koozies.jpg` | Pending |
| 4 | `carousel` slot 4 | 600×450px | `promo-items/koozies/top5pct-koozies-joliet.jpg` | Pending |
| 5 | `card-image-with-text` (left) | 600×450px | `promo-items/koozies/top5pct-personalized-koozies-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 7 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | Keep |

---

### `pages/promotional-items/mugs.blade.php`

*R1 used all 7 eligible slots (all Done). R2 new images: 1 — no eligible slots remain; file copied only.*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1–7 | *(carousel 1–4, card-left, card-right, card-detailed-info)* | — | *(Done R1)* | Done (R1) |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

> R2: `top5pct-printed-mugs.jpg` copied to `promo-items/mugs/` via collision rename. No blade attribute change needed — existing `image=` continues pointing to `top5pct-printed-mugs.jpg`, which now resolves to the new R2 image transparently.

---

### Round 2 Execution Checklist

- [ ] Create `public/images/backlit-signs/`
- [ ] Create `public/images/outdoor-signs/`
- [ ] Rename collision files (6 renames — see Collision table above)
- [ ] Run migration for R2-1 through R2-34 above
- [ ] Verify all files present at destination with `top5pct-` prefix
- [ ] Update blade `src`/`image=` attributes for all **Pending** slots above
- [ ] Mark each Pending slot **Done** in this document
- [ ] Add foil URL to `url.paths.txt` and assign blade slots for `foil-shirts.blade.php`
- [ ] Create `signs/backlit-signs.blade.php` and build slot inventory
- [ ] Create `signs/outdoor-signs.blade.php` and build slot inventory
- [ ] Create chameleon blade page and build slot inventory
- [ ] Remove `public/new-images/` directory once all above is verified
