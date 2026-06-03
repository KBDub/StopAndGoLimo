# Section Review: Banner Cta Artwork Dropzone Removal

## Context

The `x-ui.banner-cta-artwork-dropzone` section is a CTA that prompts customers to upload their artwork file for printing. It belongs on pages where a customer arriving with ready-made artwork is the normal use case, such as screen printing or sticker pages. It does not belong on consultation-heavy pages like signs, vehicle graphics, group orders, or company info pages.

On most pages, the artwork dropzone sits immediately above the first `x-sections.cta-quadruple-button-banner`. Removing both leaves one `cta-quadruple-button-banner` remaining further down the page, which satisfies the rule of exactly one per page.

**One exception: `home.blade.php`** has only one `cta-quadruple-button-banner` total. Removing the artwork dropzone from home is fine, but the cta-quad that follows it must stay. Only the dropzone is removed there, not the cta-quad.

---

## List A: Pages That Should Keep the Artwork Dropzone

These pages serve customers who arrive with artwork ready to submit for printing. The upload CTA is a natural next step.

| Page | Path | Reason |
|---|---|---|
| Custom Apparel (category hub) | `custom-apparel/index.blade.php` | Main hub for all apparel printing, artwork upload is the primary action |
| Screen Printing | `custom-apparel/printing-options/screen-printing.blade.php` | Customer submits artwork file for screen setup |
| Embroidery | `custom-apparel/printing-options/embroidery.blade.php` | Customer submits logo for digitization and stitching |
| Digital Vinyl | `custom-apparel/printing-options/digital-vinyl.blade.php` | Customer submits artwork for vinyl cutting |
| Rhinestone Apparel | `custom-apparel/printing-options/rhinestone-apparel.blade.php` | Customer submits artwork for rhinestone layout |
| Vinyl (specialty) | `custom-apparel/specialty-materials/vinyl.blade.php` | Vinyl printing, artwork-driven |
| Vinyl Shirts | `custom-apparel/vinyl-shirts.blade.php` | Same as above, specific vinyl shirt sub-page |
| Stickers (category hub) | `stickers/index.blade.php` | Sticker customers almost always upload their own artwork |
| Standard Stickers | `stickers/standard-stickers.blade.php` | Upload artwork for label and decal printing |
| Custom Shaped Stickers | `stickers/custom-shaped-stickers.blade.php` | Upload artwork for die-cut sticker printing |

---

## List B: Pages to Have Both Sections Removed

Remove `x-ui.banner-cta-artwork-dropzone` and the `x-sections.cta-quadruple-button-banner` that immediately follows it. The second `cta-quadruple-button-banner` further down the page remains, leaving exactly one.

### Custom Apparel, Specialty Materials

These pages involve niche techniques where the process is consultation-based. Customers explore options first before submitting artwork.

| Page | Path |
|---|---|
| Brick Shirts | `custom-apparel/brick-shirts.blade.php` |
| Dye Sublimation | `custom-apparel/dye-sublimation.blade.php` |
| Flock Shirts | `custom-apparel/flock-shirts.blade.php` |
| Foil Shirts | `custom-apparel/foil-shirts.blade.php` |
| Glitter Shirts | `custom-apparel/glitter-shirts.blade.php` |
| Glow in the Dark Shirts | `custom-apparel/glow-in-the-dark-shirts.blade.php` |
| Holographic Shirts | `custom-apparel/holographic-shirts.blade.php` |
| Puff Shirts | `custom-apparel/puff-shirts.blade.php` |
| Reflective Shirts | `custom-apparel/reflective-shirts.blade.php` |

### Custom Apparel, Group Wear

Group orders require coordination and quotes. Customers call or visit first, they do not just upload a file.

| Page | Path |
|---|---|
| Corporate Wear | `custom-apparel/group-wear/corporate-wear-shirts.blade.php` |
| Reunion Shirts | `custom-apparel/group-wear/reunion-shirts.blade.php` |
| Spirit Wear | `custom-apparel/group-wear/spirit-wear-shirts.blade.php` |

### Signs

Signs are quote-based. Customers discuss dimensions, materials, and installation before submitting artwork.

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

Vehicle graphics always require a site visit, vehicle measurements, and a design consultation. The artwork dropzone does not fit this workflow.

| Page | Path |
|---|---|
| Vehicle Graphics (category hub) | `vehicle-graphics/index.blade.php` |
| Automobile Graphics | `vehicle-graphics/automobile-graphics.blade.php` |
| DOT Decals | `vehicle-graphics/dot-decals.blade.php` |
| Vehicle Magnets | `vehicle-graphics/vehicle-magnets.blade.php` |

### Promotional Items

Promotional products involve product selection, color matching, and sample approvals before printing. Not a direct artwork-upload workflow.

| Page | Path |
|---|---|
| Promotional Items (category hub) | `promotional-items.blade.php` |
| Can Koozies | `promotional-items/can-koozies.blade.php` |
| Drink Coasters | `promotional-items/drink-coasters.blade.php` |
| Mouse Pads | `promotional-items/mouse-pads.blade.php` |
| Mugs | `promotional-items/mugs.blade.php` |
| Tote Bags | `promotional-items/tote-bags.blade.php` |
| Towels | `promotional-items/towels.blade.php` |

### Design Services

These pages sell design help. The expected next action is requesting a consultation, not uploading a finished file.

| Page | Path |
|---|---|
| Design Services (category hub) | `design-services/index.blade.php` |
| Graphic Design | `design-services/graphic-design.blade.php` |
| Logo Design | `design-services/logo-design.blade.php` |
| Custom Storefronts | `design-services/custom-storefronts.blade.php` |

### Company Pages

No products on these pages. The artwork dropzone is out of place entirely.

| Page | Path |
|---|---|
| About the Company | `company/index.blade.php` |
| Articles | `company/articles.blade.php` |
| Resources | `company/resources.blade.php` |

### Other Pages

| Page | Path | Note |
|---|---|---|
| Homepage | `home.blade.php` | Remove artwork dropzone only. This page has only one cta-quadruple-button-banner total, so the cta-quad that follows the dropzone must stay. |
| Top 5% Merchandise | `top5pct-merchandise.blade.php` | Retail products page, no custom artwork workflow |

---

## Summary

| List | Page Count | Action |
|---|---|---|
| List A: Keep artwork dropzone | 10 | No changes |
| List B: Remove both sections | 44 | Remove dropzone + first cta-quad (except home: remove dropzone only) |
| **Total pages with artwork dropzone** | **54** | |
