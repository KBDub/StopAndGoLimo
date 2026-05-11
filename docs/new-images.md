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
| `custom-vinyl-hoodies.jpg` | `top5pct-custom-vinyl-hoodies.jpg` ⚠ check for collision with `custom-apparel/digital-vinyl/` copy above |
| `digital-vinyl-hoodie.jpg` | `top5pct-digital-vinyl-hoodie.jpg` |
| `digital-vinyl-hoodies-in-joliet.jpg` | `top5pct-digital-vinyl-hoodies-in-joliet.jpg` |
| `digital-vinyl-shirts.jpg` | `top5pct-digital-vinyl-shirts.jpg` |
| `toddler-custom-shirts.jpg` | `top5pct-toddler-custom-shirts.jpg` |
| `vinyl-printed-shirts.jpg` | `top5pct-vinyl-printed-shirts.jpg` |

> ⚠ `custom-vinyl-hoodies.jpg` appears in both `custom-apparel/digital-vinyl/` and `custom-apparel/printing-options/digital-vinyl/`. Resolve before copying: copy the first, then compare the second; if different content, use a disambiguating suffix (e.g. `top5pct-custom-vinyl-hoodies-2.jpg`); if identical, skip the duplicate.

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
| `safety-work-gear-joliert.jpg` | `top5pct-safety-work-gear-joliet.jpg` *(fix typo in source: `joliert` → `joliet`)* |

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
| `vecal-decals.jpg` | `top5pct-vecal-decals.jpg` *(source filename has typo: `vecal` — preserve as-is)* |
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

Each page lists its current image slots so you know where the new images should eventually be wired in. Slots are listed by Blade attribute (e.g. `image=`, `image1=`, `image2=`, array `src`).

### Custom Apparel

**`custom-apparel/index.blade.php`**
- Hero banner: `custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg`
- Slider (5 slots): custom-shirts banner, brick, reunion banner, spirit-wear banner, corporate-wear banner
- Category card images (12): dtf-transfers banner, custom-shirts banner, shirts-with-pictures, embroidery, rhinestone, glitter, brick, glow, flock, holographic, foil, reflective
- Article image: `custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg`
- CTA images (2): embroidery, vinyl-shirts

**`custom-apparel/vinyl-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/screen-printing.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/dtf-transfers.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): `dtf-transfers/` + `custom-shirts/`

**`custom-apparel/embroidery.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/rhinestone-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/dye-sublimation.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/glitter-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/holographic-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/reflective-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all from `custom-shirts/`

**`custom-apparel/corporate-wear-shirts.blade.php`**
- Hero, slider (4), section left (polo), section right (button-up), 2-up (image1/2: corporate-wear), section (cap), article (2), CTA (2): all from `corporate-wear/`

**`custom-apparel/reunion-shirts.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1/2: templates GIFs), 2-up2 (image1/2), section, article (2), CTA (2): all from `reunion-shirts/`

**`custom-apparel/spirit-wear-shirts.blade.php`**
- Hero, slider (4), section left (west), section right (spiritwear), 2-up (image1/2), section (bowling), article (2), CTA (2): all from `spirit-wear/`

### Signs

**`signs/banners.blade.php`**
- Hero: `banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg`
- Slider (4): `banners/` directory
- Section left (business banners), section right (banner joliet romeoville), 2-up (birthday × 2), 2-up2 (reunion × 2), article (1), CTA (2): all `banners/`

**`signs/business-signs.blade.php`**
- Hero: `business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg`
- Section left, section right, 2-up (image1/2: door + window), 2-up2 (image1/2: 2 business-signs), article (1): all `business-signs/`

**`signs/sidewalk-signs.blade.php`**
- Hero, slider (4), section left (a-frame), section right (sidewalk-a-frames), section (sidewalk-crest-hill), article (1), CTA (2): all `sidewalk-signs/`

**`signs/yard-signs.blade.php`**
- Hero, slider (4), section left (yard-signs-joliet), section right (yard-signs-plainfield), 2-up (image1/2: shorewood + table-signs), article (1), CTA (2): `yard-signs/` + `banners/`

**`signs/table-cloths.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all `table-runners/`

**`signs/table-runners.blade.php`**
- Hero, slider (4), section left (cloth), section right (runner), 2-up (image1/2: runner + skirt), section (popus), article (1), CTA (2): all `table-runners/`

**`signs/window-signs.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all `window-wall-floor-decals/`

**`signs/door-signs.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all `window-wall-floor-decals/`

**`signs/wall-signs.blade.php`**
- Hero, slider (4), section left, section right, 2-up (image1), CTA (2): all `window-wall-floor-decals/`

### Stickers

**`stickers/index.blade.php`**
- Hero: `stickers-decals/top5pct-banner-stickers-decals-joliet.jpg`
- Slider (5): stickers-decals
- Category cards (2): beer-brewery, ocean-viewz
- Gallery (4): stoner-rock-bbq, article, labels, boxing-sports
- Section (ocean-viewz), CTA (2): all `stickers-decals/`

**`stickers/custom-shaped-stickers.blade.php`**
- Hero, slider (4), section left (boxing-sports), section right (stoner-rock-bbq), 2-up (image1: article), CTA (2): all `stickers-decals/`

### Vehicle Graphics

**`vehicle-graphics/automobile-graphics.blade.php`**
- Hero, slider (4), section left (vinyl-lettering-joliet-shorewood), section right (vinyl-lettering-joliet-crest-hill), 2-up (image1/2: vinyl-lettering-joliet-shorewood + truck-decal), section (boat), article (1), CTA (2): all `automobile-graphics/`

**`vehicle-graphics/dot-decals.blade.php`**
- Hero, slider (4), section left (DOT-stickers), section right (dot-decals), 2-up (image1/2: trucking-logo × 2), section (truck-lettering), article (1), CTA (2): all `dot-decals/`

**`vehicle-graphics/vehicle-magnets.blade.php`**
- Hero, slider (4), section left (car-magnets-truck), section right (car-magnets-vehicle), 2-up (image1/2: business-magnets + large-magnets), article (1), CTA (2): `vehicle-magnets/`

### Promotional Items

**`promotional-items/can-koozies.blade.php`**
- All current image slots use `custom-shirts/` as a stand-in — new dedicated images go in `promo-items/koozies/`

**`promotional-items/mugs.blade.php`**
- All current image slots use `custom-shirts/` as a stand-in — new dedicated images go in `promo-items/mugs/`

---

## Special Notes

### Duplicate filename: `custom-vinyl-hoodies.jpg`

`custom-vinyl-hoodies.jpg` exists in two source directories:
- `custom-apparel/digital-vinyl/custom-vinyl-hoodies.jpg`
- `custom-apparel/printing-options/digital-vinyl/custom-vinyl-hoodies.jpg`

Both map to `public/images/custom-shirts/`. Before running the migration script, compare checksums. If files differ, use `top5pct-custom-vinyl-hoodies-2.jpg` for the second. If identical, skip the second copy.

### Typo in source: `safety-work-gear-joliert.jpg`

The source file at `custom-apparel/group-shirts/corporate-wear-shirts/safety-work-gear-joliert.jpg` contains a typo (`joliert`). Rename to `top5pct-safety-work-gear-joliet.jpg` (corrected) at destination.

### Typo in source: `vecal-decals.jpg`

The source file `vehicle-decals/automobile-graphics/vecal-decals.jpg` appears to be a misspelling of "vehicle decals". Preserve the source typo in the destination name (`top5pct-vecal-decals.jpg`) for now — correct it separately once confirmed.

### Deleted: `.psd` file

`public/new-images/custom-apparel/specialty-material/holographic/custom-jackets-with-glitter-in-joliet.psd` has been deleted. It was a Photoshop source file, not a web-ready image. If a JPEG export is ever needed, export from the original source in Photoshop and add it following the same convention (`top5pct-custom-jackets-with-glitter-in-joliet.jpg` → `custom-shirts/`).

### Promo-items pages currently have no dedicated images

`can-koozies.blade.php` and `mugs.blade.php` currently use `custom-shirts/` placeholder images. After migration, those pages will need their image attributes updated to point to the new `promo-items/koozies/` and `promo-items/mugs/` paths.

### No new banner (page-hero) images

None of the new-images directories contain page-hero banner images (wide-format banners used as section backgrounds). All existing `top5pct-banner-*` files in every `public/images/` directory are untouched by this migration.

---

## Execution Checklist

- [ ] Create `public/images/promo-items/koozies/`
- [ ] Create `public/images/promo-items/mugs/`
- [ ] Resolve `custom-vinyl-hoodies.jpg` duplicate (checksum compare)
- [ ] Run migration for sections 1–16 above (copy + prefix, rename conflicts to `-old.jpg`)
- [ ] Verify all 119 files are present at destination with `top5pct-` prefix
- [ ] Update `can-koozies.blade.php` and `mugs.blade.php` to reference new promo-items image paths
- [ ] Wire new images into page slots as needed (separate task per page)
- [ ] Remove `public/new-images/` directory once all moves are verified
