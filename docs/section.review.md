# Section Review: Banner Cta Artwork Dropzone

## Context

The `x-ui.banner-cta-artwork-dropzone` section is a CTA that prompts customers to upload artwork for printing. It currently sits immediately after `x-ui.banner-testimonial`, above the first `x-sections.cta-quadruple-button-banner`. On most pages there are two `cta-quadruple-button-banner` sections total. Removing both the dropzone and the first cta-quad leaves exactly one cta-quad per page, which is the rule.

**One exception: `home.blade.php`** has only one `cta-quadruple-button-banner` total. Remove the artwork dropzone from home, but keep the cta-quad that follows it.

**`custom-apparel/dtf-transfers.blade.php`** uses `x-ui.banner-cta-dtf-dropzone` instead of the artwork dropzone. No changes needed there.

---

## Position Change for All List A Pages

On every page in List A, the artwork dropzone moves from its current position (between `banner-testimonial` and the first `cta-quadruple-button-banner`) to after the last `card-image-with-text` block and immediately before the `cta-quadruple-button-banner` that stays.

**Current order:**
```
x-ui.banner-testimonial
x-ui.banner-cta-artwork-dropzone    ← current position
x-sections.cta-quadruple-button-banner  ← remove this one
x-sections.card-image-with-text
x-sections.card-image-with-text
x-sections.cta-quadruple-button-banner  ← this one stays
```

**New order:**
```
x-ui.banner-testimonial
x-sections.card-image-with-text
x-sections.card-image-with-text
x-ui.banner-cta-artwork-dropzone    ← moved here
x-sections.cta-quadruple-button-banner  ← one remains
```

On category index pages (`custom-apparel/index.blade.php`, `stickers/index.blade.php`, `design-services/index.blade.php`), the `card-image-with-text` section sits below an `lp-category-banners` or equivalent block. The artwork dropzone goes immediately after that `card-image-with-text` and before the cta-quad that stays, following the same logic.

---

## List A: Pages That Keep the Artwork Dropzone

These pages keep `x-ui.banner-cta-artwork-dropzone` but move it to the new position described above.

### Custom Apparel (All Sub-Category and Index Pages)

| Page | Path |
|---|---|
| Custom Apparel (category hub) | `custom-apparel/index.blade.php` |
| Screen Printing | `custom-apparel/printing-options/screen-printing.blade.php` |
| Embroidery | `custom-apparel/printing-options/embroidery.blade.php` |
| Digital Vinyl | `custom-apparel/printing-options/digital-vinyl.blade.php` |
| Rhinestone Apparel | `custom-apparel/printing-options/rhinestone-apparel.blade.php` |
| Vinyl (specialty material) | `custom-apparel/specialty-materials/vinyl.blade.php` |
| Vinyl Shirts | `custom-apparel/vinyl-shirts.blade.php` |
| Brick Shirts | `custom-apparel/brick-shirts.blade.php` |
| Dye Sublimation | `custom-apparel/dye-sublimation.blade.php` |
| Flock Shirts | `custom-apparel/flock-shirts.blade.php` |
| Foil Shirts | `custom-apparel/foil-shirts.blade.php` |
| Glitter Shirts | `custom-apparel/glitter-shirts.blade.php` |
| Glow in the Dark Shirts | `custom-apparel/glow-in-the-dark-shirts.blade.php` |
| Holographic Shirts | `custom-apparel/holographic-shirts.blade.php` |
| Puff Shirts | `custom-apparel/puff-shirts.blade.php` |
| Reflective Shirts | `custom-apparel/reflective-shirts.blade.php` |
| Corporate Wear | `custom-apparel/group-wear/corporate-wear-shirts.blade.php` |
| Reunion Shirts | `custom-apparel/group-wear/reunion-shirts.blade.php` |
| Spirit Wear | `custom-apparel/group-wear/spirit-wear-shirts.blade.php` |

### Design Services (All Pages)

| Page | Path |
|---|---|
| Design Services (category hub) | `design-services/index.blade.php` |
| Graphic Design | `design-services/graphic-design.blade.php` |
| Logo Design | `design-services/logo-design.blade.php` |
| Custom Storefronts | `design-services/custom-storefronts.blade.php` |

### Stickers (All Pages)

| Page | Path |
|---|---|
| Stickers (category hub) | `stickers/index.blade.php` |
| Standard Stickers | `stickers/standard-stickers.blade.php` |
| Custom Shaped Stickers | `stickers/custom-shaped-stickers.blade.php` |

---

## List B: Pages to Have Both Sections Removed

Remove `x-ui.banner-cta-artwork-dropzone` and the `x-sections.cta-quadruple-button-banner` immediately following it. The second `cta-quadruple-button-banner` further down each page stays, leaving exactly one.

### Signs

| Page | Path |
|---|---|
| Signs (category hub) | `signs/index.blade.php` |
| Banners | `signs/banners.blade.php` |
| Business Signs | `signs/business-signs.blade.php` |
| Coronavirus Signs | `signs/coronavirus-signs.blade.php` |
| Door Signs | `signs/door-signs.blade.php` |
| Floor Signs | `signs/floor-signs.blade.php` |
| Posters | `signs/posters.blade.php` |
| Sidewalk Signs | `signs/sidewalk-signs.blade.php` |
| A-Frame Signs | `signs/sidewalk-signs-a-frame-signs.blade.php` |
| Table Cloths | `signs/table-cloths.blade.php` |
| Table Runners | `signs/table-runners.blade.php` |
| Wall Signs | `signs/wall-signs.blade.php` |
| Window Signs | `signs/window-signs.blade.php` |
| Yard Signs | `signs/yard-signs.blade.php` |

### Vehicle Graphics

| Page | Path |
|---|---|
| Vehicle Graphics (category hub) | `vehicle-graphics/index.blade.php` |
| Automobile Graphics | `vehicle-graphics/automobile-graphics.blade.php` |
| DOT Decals | `vehicle-graphics/dot-decals.blade.php` |
| Vehicle Magnets | `vehicle-graphics/vehicle-magnets.blade.php` |

### Promotional Items

| Page | Path |
|---|---|
| Promotional Items (category hub) | `promotional-items.blade.php` |
| Can Koozies | `promotional-items/can-koozies.blade.php` |
| Drink Coasters | `promotional-items/drink-coasters.blade.php` |
| Mouse Pads | `promotional-items/mouse-pads.blade.php` |
| Mugs | `promotional-items/mugs.blade.php` |
| Tote Bags | `promotional-items/tote-bags.blade.php` |
| Towels | `promotional-items/towels.blade.php` |

### Company Pages

| Page | Path |
|---|---|
| About the Company | `company/index.blade.php` |
| Articles | `company/articles.blade.php` |
| Resources | `company/resources.blade.php` |

### Other Pages

| Page | Path | Note |
|---|---|---|
| Homepage | `home.blade.php` | Remove artwork dropzone only. This page has one cta-quadruple-button-banner total, so keep the cta-quad that follows the dropzone. |
| Top 5% Merchandise | `top5pct-merchandise.blade.php` | Remove both. |

---

## Summary

| List | Page Count | Action |
|---|---|---|
| List A: Keep and reposition artwork dropzone | 26 | Move dropzone to after last card-image-with-text, remove first cta-quad |
| List B: Remove both sections | 25 | Remove dropzone + first cta-quad (home: remove dropzone only) |
| **Total pages affected** | **51** | |
