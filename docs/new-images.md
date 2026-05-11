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
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-t-shirts-main.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

### `pages/custom-apparel/screen-printing.blade.php`

*New images available: 4 (screenprint/) — 7 eligible slots — 4 Pending (carousel 1–4)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-t-shirts-main.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-t-shirts-main.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | Keep |

---

### `pages/custom-apparel/glitter-shirts.blade.php`

*New images available: 2 (glitter/) — 7 eligible slots — 2 Pending (carousel 1–2)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `corporate-wear/toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `corporate-wear/toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `corporate-wear/toptpct-custom-hoodie-pullover-joliet-shorewood.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `corporate-wear/toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `corporate-wear/toptpct-custom-button-up-shirt-joliet-shorewood.jpg` | Pending |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `corporate-wear/toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `reunion-shirts/toptpct-class-reunion-shirts-joliet-shorewood.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `reunion-shirts/toptpct-family-reunion-shirts-joliet-plainfield.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `reunion-shirts/toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `reunion-shirts/toptpct-class-reunion-shirts-joliet-shorewood.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `reunion-shirts/toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `banners/top5pct-birthday-banner-joliet-shorewood-plainfield.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `banners/top5pct-family-reunion-banners-joliet-crest-hill.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | Pending |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-birthday-banner-joliet-shorewood-plainfield.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `sidewalk-signs/top5pct-sidewalk-a-frames-joliet-shorewood.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `yard-signs/top5pct-yard-signs-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `yard-signs/top5pct-yard-signs-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg` | Keep |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `yard-signs/top5pct-table-signs-joliet-shorewood-plainfield.jpg` | Keep |
| 10 | `card-detailed-info` image1 | 400×300px | `yard-signs/top5pct-article-yard-signs-buy.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg` | Keep |

---

### `pages/signs/table-cloths.blade.php`

*New images available: 3 (table-cloths/) — 7 eligible slots — 3 Pending (carousel 1–3)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-will-county.jpg` ⚠ file missing | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-new-lenox.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `window-wall-floor-decals/top5pct-window-cling-decal-joliet-shorewood.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `window-wall-floor-decals/top5pct-window-decal-joliet-shorewood-rockdale.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `window-wall-floor-decals/top5pct-wall-signs-joliet.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-labels.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Pending |
| 8 | `card-detailed-info` image1 | 400×300px | `stickers-decals/top5pct-article-buy-stickers-decals-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (right→left) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg` | Keep |
| 10 | `card-banner-slide-in` (left→right) | full-width 16:7 | `stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg` | Keep |

---

### `pages/vehicle-graphics/automobile-graphics.blade.php`

*New images available: 9 (automobile-graphics/) — 10 eligible slots — 9 Pending (all except card-detailed-info)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `automobile-graphics/top5pct-boat-decals-joliet-shorewood-crest-hill.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `automobile-graphics/top5pct-truck-decal-joliet-shorewood-rockdale.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Pending |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-shorewood.jpg` | Pending |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-truck-decal-joliet-shorewood-rockdale.jpg` | Pending |
| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-boat-decals-joliet-shorewood-crest-hill.jpg` | Pending |
| 11 | `card-detailed-info` image1 | 400×300px | `automobile-graphics/top5pct-article-car-wraps-vinyl-lettering.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg` | Keep |
| 13 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |

---

### `pages/vehicle-graphics/dot-decals.blade.php`

*New images available: 3 (dot-decals/) — 11 eligible slots — 3 Pending (carousel 1–3)*

| # | Component | Size | Current Image | Replaced? |
|---|---|---|---|---|
| 1 | `category-hero` | full-width × 576px | `dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg` | Keep |
| 2 | `carousel` slot 1 | 600×450px | `dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `dot-decals/top5pct-dot-decals-joliet-shorewood-rockdale.jpg` | Pending |
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
| 2 | `carousel` slot 1 | 600×450px | `vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg` | Pending |
| 3 | `carousel` slot 2 | 600×450px | `vehicle-magnets/top5pct-car-magnets-truck-magnets-joliet.jpg` | Pending |
| 4 | `carousel` slot 3 | 600×450px | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Pending |
| 5 | `carousel` slot 4 | 600×450px | `vehicle-magnets/top5pct-business-magnets-car-magnets-joliet.jpg` | Pending |
| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-car-magnets-truck-magnets-joliet.jpg` | Pending |
| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Pending |
| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-business-magnets-car-magnets-joliet.jpg` | Pending |
| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-large-magnets-magnets-near-me-joliet.jpg` | Pending |
| 10 | `card-detailed-info` image1 | 400×300px | `vehicle-magnets/top5pct-article-car-magnets-truck-magnets.jpg` | Keep |
| 11 | `card-banner-slide-in` (right→left) | full-width 16:7 | `vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg` | Keep |
| 12 | `card-banner-slide-in` (left→right) | full-width 16:7 | `automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | Keep |

---

### `pages/promotional-items/can-koozies.blade.php`

*New images available: 2 (koozies/) — 7 eligible slots (no hero on this page) — 2 Pending (carousel 1–2)*

> All slots currently use `custom-shirts/` placeholder images. The 2 new dedicated koozie images will replace the first 2 eligible slots. The blade `image=` attributes also need updating (see Execution Checklist).

| # | Component | Size | Current Image (placeholder) | Replaced? |
|---|---|---|---|---|
| 1 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 2 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg` | Pending |
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
| 1 | `carousel` slot 1 | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 2 | `carousel` slot 2 | 600×450px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Pending |
| 3 | `carousel` slot 3 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg` | Pending |
| 4 | `carousel` slot 4 | 600×450px | `custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg` | Pending |
| 5 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 6 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Pending |
| 7 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | Pending |
| 8 | `card-banner-slide-in` (right→left) | full-width 16:7 | `custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | Keep |
| 9 | `card-banner-slide-in` (left→right) | full-width 16:7 | `custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | Keep |

---

## Special Notes

### Duplicate filename: `custom-vinyl-hoodies.jpg`

`custom-vinyl-hoodies.jpg` exists in two source directories:
- `custom-apparel/digital-vinyl/custom-vinyl-hoodies.jpg`
- `custom-apparel/printing-options/digital-vinyl/custom-vinyl-hoodies.jpg`

Both map to `public/images/custom-shirts/`. Before running the migration script, compare checksums. If identical, skip the second. If different, use suffix `top5pct-custom-vinyl-hoodies-2.jpg` for the second.

### Missing files referenced in `table-cloths.blade.php`

The carousel on `signs/table-cloths.blade.php` references two files that do not currently exist in `public/images/table-runners/`:
- `top5pct-custom-table-cloth-joliet-will-county.jpg` (carousel slot 3) — this is a **Pending** slot and will be resolved by the 3rd new table-cloth image
- `top5pct-article-table-cloths-table-runners.jpg` (carousel slot 4) — this is a **Keep** slot and will render broken until a dedicated article image is created

### Typo in source: `safety-work-gear-joliert.jpg`

The source file at `custom-apparel/group-shirts/corporate-wear-shirts/safety-work-gear-joliert.jpg` contains a typo (`joliert`). Rename to `top5pct-safety-work-gear-joliet.jpg` (corrected) at destination.

### Typo in source: `vecal-decals.jpg`

The source file `vehicle-decals/automobile-graphics/vecal-decals.jpg` appears to be a misspelling of "vehicle decals". Preserve the source typo in the destination name (`top5pct-vecal-decals.jpg`) for now — correct it separately once confirmed.

### Deleted: `.psd` file

`public/new-images/custom-apparel/specialty-material/holographic/custom-jackets-with-glitter-in-joliet.psd` has been deleted. It was a Photoshop source file, not a web-ready image. This leaves `holographic-shirts.blade.php` with 0 new images — all slots on that page remain **Keep**. If a JPEG export is ever needed, export from the original source and name it `top5pct-custom-jackets-with-glitter-in-joliet.jpg` → destination `custom-shirts/`.

### Promo-items pages currently have no dedicated images

`can-koozies.blade.php` and `mugs.blade.php` currently use `custom-shirts/` placeholder images in every slot. After migration, the **Pending** slots must also have their blade `image=` attributes updated to point to the new `promo-items/koozies/` and `promo-items/mugs/` paths. This is a code edit in addition to the file migration.

### No new banner (page-hero) images

None of the new-images directories contain page-hero banner images. All existing `top5pct-banner-*` files across every `public/images/` directory are untouched. All `category-hero` slots are **Keep**.

### All `card-banner-slide-in` CTAs stay

Every slide-in CTA on every page is **Keep** — regardless of whether its current image comes from the same directory as the page or a neighboring page's directory. None of these slots receive new images in this migration pass.

---

## Execution Checklist

- [ ] Create `public/images/promo-items/koozies/`
- [ ] Create `public/images/promo-items/mugs/`
- [ ] Resolve `custom-vinyl-hoodies.jpg` duplicate (checksum compare)
- [ ] Run migration for sections 1–16 above (copy + prefix, rename conflicts to `-old.jpg`)
- [ ] Verify all 119 files are present at destination with `top5pct-` prefix
- [ ] Fix carousel slot 4 in `table-cloths.blade.php` (missing file `top5pct-article-table-cloths-table-runners.jpg`)
- [ ] Update `can-koozies.blade.php` — change 2 Pending `image=` attributes to `promo-items/koozies/` paths
- [ ] Update `mugs.blade.php` — change all 7 Pending `image=` attributes to `promo-items/mugs/` paths
- [ ] Wire new images into each **Pending** slot per the inventory tables above (1:1, in page order)
- [ ] Mark each slot **Done** in this document as images are swapped in
- [ ] Remove `public/new-images/` directory once all moves are verified
