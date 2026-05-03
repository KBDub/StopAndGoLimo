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

---

## 11. Legacy URL Inventory & Remap (Old PHP Site → Current Site)

**Sources:**
- `docs/Top5Pct.GoogleIndexedPages.pdf` — pages confirmed indexed by Google (Search Console export with last-crawl dates). These carry live SEO equity and must be redirected first.
- `docs/Top5Pct.ExistingRoutes.pdf` — full inventory of old-site URLs including blog posts, partials, and pages not in the Google index.

**Domain note:** The old site served both `https://www.top5pct.com/` and `https://top5pct.com/` (non-www). Non-www duplicates that map identically to their www counterpart are grouped at the end rather than repeated inline.

**Current site base:** `https://www.top5pct.com` — clean Laravel routes, no `.php` extensions.

---

### Part A — Google-Indexed Pages (priority redirects)

Listed in last-indexed order, most recent first. All of these are live in Google's index as of the export date and require 301 redirects to preserve equity.

| Old Path | Last Indexed | Best Current URL | Notes |
|---|---|---|---|
| `/php/t-shirt-maker-joliet.php` | Apr 4, 2026 | `/custom-apparel` | General custom shirts landing page |
| `/` | Apr 3, 2026 | `/` | Homepage — unchanged |
| `/php/flock-custom-t-shirt.php` | Apr 3, 2026 | `/custom-apparel/specialty-materials/flock-shirts` | Direct match |
| `/php/holographic-shirts-joliet.php` | Apr 3, 2026 | `/custom-apparel/specialty-materials/holographic-shirts` | Direct match |
| `/php/car-magnets-joliet.php` | Apr 2, 2026 | `/vehicle-graphics/vehicle-magnets` | Direct match |
| `/php/vinyl-shirts-joliet.php` | Apr 2, 2026 | `/custom-apparel` | Vinyl shirts route removed; apparel index is best |
| `/php/sign-up-to-email-list.php` | Apr 1, 2026 | `/contact` | No email-list page on current site; contact is closest |
| `/php/reflective-shirts-joliet.php` | Apr 1, 2026 | `/custom-apparel/specialty-materials/reflective-shirts` | Direct match |
| `/php/DOT-stickers-joliet.php` | Apr 1, 2026 | `/vehicle-graphics/dot-decals` | Direct match |
| `/php/spirit-wear-fan-wear.php` | Mar 30, 2026 | `/custom-apparel/group-shirts/spirit-wear-shirts` | Direct match |
| `/php/vinyl-lettering-car-wraps.php` | Mar 30, 2026 | `/vehicle-graphics/automobile-graphics` | Direct match |
| `/php/a-frame-sign-joliet.php` | Mar 29, 2026 | `/signs/ground-signs/sidewalk-signs` | A-frame = sidewalk/sandwich-board sign |
| `/php/design-your-own-shirt.php` | Mar 29, 2026 | `/design-services/online-designer` | Direct match |
| `/php/family-reunion-shirts-joliet.php` | Mar 29, 2026 | `/custom-apparel/group-shirts/reunion-shirts` | Direct match |
| `/php/embroidery-joliet.php` | Mar 28, 2026 | `/custom-apparel/embroidery` | Direct match |
| `/php/about.php` | Mar 27, 2026 | `/about-us` | Direct match |
| `/php/brick-custom-t-shirts.php` | Mar 27, 2026 | `/custom-apparel/specialty-materials/brick-shirts` | Direct match |
| `/php/wall-decals-window-decals.php` | Mar 27, 2026 | `/signs/business-signs/window-signs` | Old page covered both; window-signs chosen as primary; see note below |
| `/php/dtf-transfers-joliet.php` | Mar 25, 2026 | `/custom-apparel/printing-options/dtf-printing` | Direct match |
| `/php/quote-options.php` | Mar 25, 2026 | `/contact` | No quote-options page; contact is equivalent |
| `/php/shirts-with-pictures-joliet.php` | Mar 24, 2026 | `/custom-apparel` | Picture-shirts page removed; apparel index is best |
| `/php/foil-shirts-joliet.php` | Mar 24, 2026 | `/custom-apparel/specialty-materials/foil-shirts` | Direct match |
| `/php/stickers-decals-joliet.php` | Mar 24, 2026 | `/stickers` | Direct match |
| `/php/glow-shirt-joliet.php` | Mar 23, 2026 | `/custom-apparel/specialty-materials/glow-in-the-dark-shirts` | Direct match |
| `/php/rhinestone-shirts-joliet.php` | Mar 20, 2026 | `/custom-apparel/rhinestone-apparel` | Direct match (URL renamed) |
| `/php/covid19-stickers-signs-joliet.php` | Mar 20, 2026 | `/stickers` | Product discontinued; stickers index is closest |
| `/php/custom-t-shirts-joliet.php` | Mar 20, 2026 | `/custom-apparel` | Direct match |
| `/php/faqs.php` | Mar 20, 2026 | `/about-us` | No standalone FAQ page; about-us includes FAQ section |
| `/php/privacy-policy.php` | Mar 20, 2026 | — | **No current equivalent — page needed** |
| `/php/terms-of-use.php` | Mar 19, 2026 | — | **No current equivalent — page needed** |
| `/php/posters-joliet.php` | Mar 19, 2026 | `/signs/business-signs/posters` | Direct match |
| `/php/tl-quote.php` | Mar 20, 2026 | `/contact` | Internal quote form; contact is equivalent |
| `/php/tl-quote_generic.php` | Mar 20, 2026 | `/contact` | Internal quote form; contact is equivalent |
| `/php/promotional-products-awards-joliet.php` | Mar 13, 2026 | `/promotional-items` | Direct match |
| `/php/table-cloth-joliet.php` | Mar 20, 2026 | `/signs/table-signs/table-cloths` | Direct match |
| `/php/banners-joliet.php` | Mar 31, 2026 | `/signs/business-signs/banners` | Direct match |
| `/php/business-signs-joliet.php` | Mar 31, 2026 | `/signs` | Old business-signs page dissolved; signs index is best |
| `/php/contact.php` | Mar 31, 2026 | `/contact` | Direct match |
| `/php/custom-corporate-clothing-joliet.php` | Mar 15, 2026 | `/custom-apparel/group-shirts/corporate-wear-shirts` | Direct match |
| `/php/yard-signs-joliet.php` | Mar 31, 2026 | `/signs/ground-signs/yard-signs` | Direct match |
| `/sitemap_images.xml` | Mar 11, 2026 | — | XML file — no redirect needed; remove or let 404 |
| `/store/` | (no date) | `/top5pct-merchandise` | Direct match |
| `/top5pct2/photo-gallery-portfolio-top-5-percent-joliet.php` | Mar 10, 2026 | `/portfolio` | Direct match |

> **Wall/Window note:** `/php/wall-decals-window-decals.php` covered both wall decals and window decals in a single old page. The current site has separate pages: `/signs/business-signs/window-signs` and `/signs/business-signs/wall-signs`. Redirecting to `/signs/business-signs/window-signs` is recommended as the primary (window decals is typically higher-traffic), but `/signs` is acceptable if a single parent redirect is preferred.

> **Missing pages flagged:** `privacy-policy.php` and `terms-of-use.php` are Google-indexed and have no current equivalent. These pages should be created before redirects are implemented, or the redirect should point to `/about-us` as a temporary measure until dedicated pages exist.

---

### Part B — Existing Routes Not in Google Index

These appear in the route inventory but were not found in the Google Search Console export. Lower SEO urgency but should still be redirected for completeness.

#### PHP pages

| Old Path | Best Current URL | Notes |
|---|---|---|
| `/index.php` | `/` | Homepage alias |
| `/php/glitter-shirts-joliet.php` | `/custom-apparel/specialty-materials/glitter-shirts` | Direct match — not indexed but has a current page |
| `/php/pattern-shirts-joliet.php` | `/custom-apparel` | Pattern-shirts page and route removed from current site |
| `/html/vinyl_logo_colors.html` | `/design-services` | Color chart reference; design-services is closest |
| `/php/header.php` | — | PHP partial — no redirect; let 404 |
| `/php/footer.php` | — | PHP partial — no redirect; let 404 |

#### Blog / dir posts

The old site had a `/dir/` blog section. There is no blog on the current site. All blog posts should redirect to the most relevant service or category page.

| Old Path | Best Current URL | Notes |
|---|---|---|
| `/dir/` | `/` | Blog root → homepage |
| `/dir/about/` | `/about-us` | Direct match |
| `/dir/contact-us/` | `/contact` | Direct match |
| `/dir/blog/` | `/` | Blog index — no equivalent; homepage |
| `/dir/what-are-the-different-types-of-banners-and-styles/` | `/signs/business-signs/banners` | Banners post |
| `/dir/5-reasons-to-choose-embroidery-or-stitching/` | `/custom-apparel/embroidery` | Embroidery post |
| `/dir/alternatives-to-screen-printed-custom-shirts-learn-about-specialty-material/` | `/custom-apparel` | Specialty materials overview post |
| `/dir/amazing-custom-banner-design-tips/` | `/signs/business-signs/banners` | Banners post |
| `/dir/custom-embroidered-business-apparel/` | `/custom-apparel/embroidery` | Embroidery post |
| `/dir/seven-great-options-for-end-of-year-company-swag/` | `/promotional-items` | Promo items post |
| `/dir/designers-tips-for-customized-cap-orders/` | `/custom-apparel` | Caps/apparel post |
| `/dir/3-tips-on-creating-the-best-high-quality-promotional-items-for-your-brand/` | `/promotional-items` | Promo items post |
| `/dir/stickers-vs-decals-what-is-the-difference/` | `/stickers` | Stickers post |
| `/dir/how-to-design-awesome-team-uniforms/` | `/custom-apparel` | Team apparel post |
| `/dir/10-great-tips-for-creating-awesome-t-shirt-designs/` | `/custom-apparel` | T-shirt design post |
| `/dir/window-decal-options/` | `/signs/business-signs/window-signs` | Window signs post |
| `/dir/how-to-use-wall-decals-for-home-and-businesses/` | `/signs/business-signs/wall-signs` | Wall signs post |
| `/dir/common-questions-about-vehicle-wraps/` | `/vehicle-graphics/automobile-graphics` | Vehicle graphics post |
| `/dir/seven-steps-to-designing-your-own-shirt-design/` | `/design-services/online-designer` | Design services post |
| `/dir/custom-car-window-decal-designed-for-you/` | `/vehicle-graphics/automobile-graphics` | Vehicle graphics post |

---

### Part C — Non-www Domain Duplicates

These `https://top5pct.com/` (no `www`) variants appear in the route inventory. All should be handled at the server/DNS level with a global `www` canonical redirect rather than individual route entries.

| Non-www URL | Canonical www equivalent |
|---|---|
| `https://top5pct.com/` | `https://www.top5pct.com/` |
| `https://top5pct.com/index.php` | `https://www.top5pct.com/` |
| `https://top5pct.com/php/privacy-policy.php` | same as www version |
| `https://top5pct.com/php/terms-of-use.php` | same as www version |
| `https://top5pct.com/dir/` | same as www version |

> **Recommendation:** Enforce `www` at the DNS/web-server layer (permanent redirect of `top5pct.com/*` → `www.top5pct.com/*`). This handles all non-www variants in one rule rather than per-route entries.

---

### Summary of Gaps

Pages that were Google-indexed on the old site but have **no direct equivalent** on the current site. These require a decision before redirects are finalized.

| Old Page | Last Indexed | Recommended Action |
|---|---|---|
| `/php/privacy-policy.php` | Mar 20, 2026 | Create `/privacy-policy` page; redirect old URL to it |
| `/php/terms-of-use.php` | Mar 19, 2026 | Create `/terms-of-use` page; redirect old URL to it |
| `/php/sign-up-to-email-list.php` | Apr 1, 2026 | Redirect to `/contact` until/unless an email capture page is built |
| `/php/faqs.php` | Mar 20, 2026 | Redirect to `/about-us` (FAQ section present); or create standalone `/faqs` |
| `/php/covid19-stickers-signs-joliet.php` | Mar 20, 2026 | Redirect to `/stickers`; product line discontinued |
