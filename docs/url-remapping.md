# URL Remapping Plan
**Source:** `docs/Top5PctMenuItems.pdf`
**Status:** Plan only — no code changes made

---

## Overview

The PDF introduces a three-level URL hierarchy for Custom Apparel and Signs (e.g., `/custom-apparel/specialty-materials/glitter-shirts`), renames several sub-pages, consolidates the About/Company pages, removes a few routes from the MM, and cleans up sticker URLs. All old URLs require 301 redirects for SEO continuity.

---

## 1. Custom Apparel — URL Changes

### Printing Options group (new sub-path `/printing-options/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/custom-apparel/dtf-transfers` | `/custom-apparel/printing-options/dtf-printing` | `pages.custom-apparel.dtf-transfers` |
| `/custom-apparel/dye-sublimation` | `/custom-apparel/printing-options/dye-sublimation-printing` | `pages.custom-apparel.dye-sublimation` |
| `/custom-apparel/screen-printing` | **unchanged** | `pages.custom-apparel.screen-printing` |
| `/custom-apparel/embroidery` | **unchanged** | `pages.custom-apparel.embroidery` |
| `/custom-apparel/rhinestone-shirts` | `/custom-apparel/rhinestone-apparel` | `pages.custom-apparel.rhinestone-shirts` |
| `/custom-apparel/vinyl-shirts` | **remove route & MM entry, keep page file** | `pages.custom-apparel.vinyl-shirts` |

### Specialty Materials group (new sub-path `/specialty-materials/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/custom-apparel/glitter-shirts` | `/custom-apparel/specialty-materials/glitter-shirts` | `pages.custom-apparel.glitter-shirts` |
| `/custom-apparel/puff-shirts` | `/custom-apparel/specialty-materials/puff-shirts` | `pages.custom-apparel.puff-shirts` |
| `/custom-apparel/glow-in-the-dark-shirts` | `/custom-apparel/specialty-materials/glow-in-the-dark-shirts` | `pages.custom-apparel.glow-in-the-dark-shirts` |
| `/custom-apparel/flock-shirts` | `/custom-apparel/specialty-materials/flock-shirts` | `pages.custom-apparel.flock-shirts` |
| `/custom-apparel/brick-shirts` | `/custom-apparel/specialty-materials/brick-shirts` | `pages.custom-apparel.brick-shirts` |
| `/custom-apparel/holographic-shirts` | `/custom-apparel/specialty-materials/holographic-shirts` | `pages.custom-apparel.holographic-shirts` |
| `/custom-apparel/foil-shirts` | `/custom-apparel/specialty-materials/foil-shirts` | `pages.custom-apparel.foil-shirts` |
| `/custom-apparel/reflective-shirts` | `/custom-apparel/specialty-materials/reflective-shirts` | `pages.custom-apparel.reflective-shirts` |

> **PDF note on foil:** The PDF shows `/oil-shirts` — confirmed typo for `/foil-shirts`.

### Group Shirts (new sub-path `/group-shirts/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/custom-apparel/reunion-shirts` | `/custom-apparel/group-shirts/reunion-shirts` | `pages.custom-apparel.reunion-shirts` |
| `/custom-apparel/spirit-wear-shirts` | `/custom-apparel/group-shirts/spirit-wear-shirts` | `pages.custom-apparel.spirit-wear-shirts` |
| `/custom-apparel/corporate-wear-shirts` | `/custom-apparel/group-shirts/corporate-wear-shirts` | `pages.custom-apparel.corporate-wear-shirts` |

### Routes to remove entirely (not in PDF)

| Route | Action |
|---|---|
| `/custom-apparel/pattern-shirts` | Remove route and blade page file entirely. Not in PDF. No redirect. |
| `/custom-apparel/picture-shirts` | Remove route and blade page file entirely. Not in PDF. No redirect. |

### Routes to keep but unlink from MM

| Route | Action |
|---|---|
| `/custom-apparel/custom-shirts` | Keep route and page file as-is. Remove MM entry only. Not linked anywhere in the nav. |

---

## 2. Signs — URL Changes

All sign sub-pages gain a group sub-path. The existing `/signs/business-signs` dedicated page is dissolved — it becomes a group label only.

### Business Signs group (new sub-path `/signs/business-signs/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/signs/banners` | `/signs/business-signs/banners` | `pages.signs.banners` |
| `/signs/window-signs` | `/signs/business-signs/window-signs` | `pages.signs.window-signs` |
| `/signs/wall-signs` | `/signs/business-signs/wall-signs` | `pages.signs.wall-signs` |
| `/signs/floor-signs` | `/signs/business-signs/floor-signs` | `pages.signs.floor-signs` |
| `/signs/door-signs` | `/signs/business-signs/door-signs` | `pages.signs.door-signs` |
| `/signs/posters` | `/signs/business-signs/posters` | `pages.signs.posters` |
| `/signs/business-signs` | redirect → `/signs` | dissolve as standalone page |

### Ground Signs group (new sub-path `/signs/ground-signs/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/signs/yard-signs` | `/signs/ground-signs/yard-signs` | `pages.signs.yard-signs` |
| `/signs/sidewalk-signs` | `/signs/ground-signs/sidewalk-signs` | `pages.signs.sidewalk-signs` |
| `/signs/parking-signs` | `/signs/ground-signs/parking-signs` | `pages.signs.parking-signs` |

### Table Signs group (new sub-path `/signs/table-signs/`)

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/signs/table-cloths` | `/signs/table-signs/table-cloths` | `pages.signs.table-cloths` |
| `/signs/table-runners` | `/signs/table-signs/table-runners` | `pages.signs.table-runners` |

---

## 3. Stickers — URL Changes

| Old Route | New Route | Blade View (reuse existing) |
|---|---|---|
| `/stickers/standard-stickers` | `/stickers/standard-stickers-decals` | `pages.stickers.standard-stickers` |
| `/stickers/custom-shaped-stickers` | `/stickers/custom-shaped-stickers-decals` | `pages.stickers.custom-shaped-stickers` |

> **PDF note:** "previously had window floor wall decals" — those routes do not reappear; they are gone.

---

## 4. Vehicle Graphics — No URL Changes

All three sub-pages are unchanged:
- `/vehicle-graphics/automobile-graphics` ✓
- `/vehicle-graphics/vehicle-magnets` ✓
- `/vehicle-graphics/dot-decals` ✓

---

## 5. Promotional Items — No URL Changes

All six sub-pages are unchanged. Display label for tote bags updates to "Drawstring/Tote Bags" in the MM (already present).

---

## 6. About Us — Page Consolidation

| Old Route | Action | New Route |
|---|---|---|
| `/about` | Redirect → `/about-us` | `/about-us` (new primary page) |
| `/company` | **Merge distinct content into `/about-us`**, then redirect → `/about-us`. Remove from MM. Remove dedicated route. | — |
| `/portfolio` | Keep as-is | `/portfolio` ✓ |
| `/resources` | Keep as-is | `/resources` ✓ |

The `About Us` MM panel drops the "Company" sub-item. The panel header link changes from `/company` to `/about-us`.

---

## 7. Design Services — MM Changes Only (no URL changes)

| Item | URL | Change |
|---|---|---|
| Logo Design | `/design-services/logo-design` | Stays in MM ✓ |
| Layout/Graphic Design | `/design-services/graphic-design` | Stays in MM ✓ |
| Online Designer | `/design-services/online-designer` | **Remove from MM** — page and route stay |
| Design Catalogs | `/design-services/design-catalogs` | **Remove from MM** — page and route stay |
| Custom Storefronts | `/design-services/custom-storefronts` | Not in PDF — remove from MM; discuss whether to keep route |

---

## 8. Complete 301 Redirect Register

To be registered in `routes/main-site.php` alongside the new primary routes:

```
/custom-apparel/dtf-transfers                  → /custom-apparel/printing-options/dtf-printing
/custom-apparel/dye-sublimation                → /custom-apparel/printing-options/dye-sublimation-printing
/custom-apparel/rhinestone-shirts              → /custom-apparel/rhinestone-apparel
/custom-apparel/glitter-shirts                 → /custom-apparel/specialty-materials/glitter-shirts
/custom-apparel/puff-shirts                    → /custom-apparel/specialty-materials/puff-shirts
/custom-apparel/glow-in-the-dark-shirts        → /custom-apparel/specialty-materials/glow-in-the-dark-shirts
/custom-apparel/flock-shirts                   → /custom-apparel/specialty-materials/flock-shirts
/custom-apparel/brick-shirts                   → /custom-apparel/specialty-materials/brick-shirts
/custom-apparel/holographic-shirts             → /custom-apparel/specialty-materials/holographic-shirts
/custom-apparel/foil-shirts                    → /custom-apparel/specialty-materials/foil-shirts
/custom-apparel/reflective-shirts              → /custom-apparel/specialty-materials/reflective-shirts
/custom-apparel/reunion-shirts                 → /custom-apparel/group-shirts/reunion-shirts
/custom-apparel/spirit-wear-shirts             → /custom-apparel/group-shirts/spirit-wear-shirts
/custom-apparel/corporate-wear-shirts          → /custom-apparel/group-shirts/corporate-wear-shirts
/signs/banners                                 → /signs/business-signs/banners
/signs/window-signs                            → /signs/business-signs/window-signs
/signs/wall-signs                              → /signs/business-signs/wall-signs
/signs/floor-signs                             → /signs/business-signs/floor-signs
/signs/door-signs                              → /signs/business-signs/door-signs
/signs/posters                                 → /signs/business-signs/posters
/signs/business-signs                          → /signs
/signs/yard-signs                              → /signs/ground-signs/yard-signs
/signs/sidewalk-signs                          → /signs/ground-signs/sidewalk-signs
/signs/parking-signs                           → /signs/ground-signs/parking-signs
/signs/table-cloths                            → /signs/table-signs/table-cloths
/signs/table-runners                           → /signs/table-signs/table-runners
/stickers/standard-stickers                    → /stickers/standard-stickers-decals
/stickers/custom-shaped-stickers               → /stickers/custom-shaped-stickers-decals
/about                                         → /about-us
/company                                       → /about-us
```

---

## 9. Files Affected

| File | Change |
|---|---|
| `routes/main-site.php` | Add new 3-segment routes; add 301 redirects; remove dissolved routes |
| `resources/views/components/layout/navigation-bar.blade.php` | Update all MM href values; remove MM items noted above; update About Us panel |
| `resources/views/components/layout/footer.blade.php` | Update all service and quick-link hrefs to new URLs |
| All affected blade page files | Update any internal cross-links to old URLs |
| `docs/json-meta-tag-mgmt.md` Section 11 | Update per-page schema matrix URLs |

---

## 10. Open Questions

1. **`/custom-apparel/vinyl-shirts`** — PDF says "remove route, mm, leave page." Does the page content get absorbed into the Printing Options group page, or does it simply become unreachable (no route, no MM link)? Recommend confirming intent.
2. **`/design-services/custom-storefronts`** — Not in the PDF at all. Keep route and page but drop from MM, or deprecate entirely?
3. **`/about-us` page content** — The new `/about-us` needs to merge the distinct content from the current `/company` page before that route is removed. Should this be a content task or a dev task?
