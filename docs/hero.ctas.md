# Hero CTA Anchor Target Audit
## Top 5 Percent Custom Signage & Apparel

> **Scope:** All non-checkout pages that use an in-page anchor (`#fragment`) as the hero primary button href. Drawn from §2-A (A1, A2, A4) of `docs/cta-review.md`. Audit run 2026-04-06.
>
> **Goal (TODO-5):** Confirm that every in-page anchor used by a hero CTA has a matching `id=` target on that page. Pages whose primary goes to `/contact` (modal) or an external URL are excluded — no anchor target is needed.

---

## Summary

| Anchor | Used By | Target Section Component | id= Defined? | Status |
|---|---|---|---|---|
| `#all-products` | All A2 sub-pages + `/top5pct-merchandise` | `sections.product-grid` | Yes — hardcoded in component root `<section>` | ✅ Resolved |
| `#shirt-types` | `/custom-apparel/custom-shirts` | `sections.shirt-types-grid` | Yes — hardcoded in component root `<section>` | ✅ Resolved |
| `#apparel-categories` | `/custom-apparel` | `sections.lp-category-banners` | **No** | ❌ Missing |
| `#sign-categories` | `/signs` | `sections.lp-category-banners` | **No** | ❌ Missing |
| `#vehicle-categories` | `/vehicle-graphics` | `sections.lp-category-banners` | **No** | ❌ Missing |
| `#sticker-categories` | `/stickers` | `sections.lp-category-banners` | **No** | ❌ Missing |
| `#promo-categories` | `/promotional-items` | `sections.lp-category-banners` | **No** | ❌ Missing |
| `#design-categories` | `/design-services` | `sections.lp-category-banners` | **No** | ❌ Missing |

---

## A2 — Sub-pages: `#all-products`

All A2 pages use `primaryButtonHref="#all-products"` and include `x-sections.product-grid`. The `product-grid` component root is:

```html
<section id="all-products" class="py-10 bg-white">
```

The `id="all-products"` is hardcoded in the component. No per-page change is needed.

**Status: ✅ All A2 sub-pages are resolved.**

| Page Group | Pages | product-grid present? | id="all-products" resolves? |
|---|---|---|---|
| Custom Apparel sub-pages (A2) | `/custom-apparel/dtf-transfers` · `/custom-apparel/reunion-shirts` · `/custom-apparel/spirit-wear-shirts` · `/custom-apparel/corporate-wear-shirts` | ✅ | ✅ |
| Signs sub-pages (A2) | `/signs/banners` · `/signs/posters` · `/signs/yard-signs` · `/signs/table-runners` · `/signs/sidewalk-signs` · `/signs/wall-signs` · `/signs/floor-signs` · `/signs/door-signs` · `/signs/parking-signs` · `/signs/table-cloths` · `/signs/window-signs` | ✅ | ✅ |
| Signs orphaned (A2) | `/signs/business-signs` · `/signs/coronavirus-signs` | ✅ | ✅ |
| Vehicle Graphics sub-pages (A2) | `/vehicle-graphics/automobile-graphics` · `/vehicle-graphics/vehicle-magnets` · `/vehicle-graphics/dot-decals` | ✅ | ✅ |
| Stickers sub-pages (A2) | `/stickers/standard-stickers` · `/stickers/custom-shaped-stickers` | ✅ | ✅ |
| Promotional Items sub-pages (A2) | `/promotional-items/mugs` · `/promotional-items/can-koozies` · `/promotional-items/towels` · `/promotional-items/drink-coasters` · `/promotional-items/tote-bags` · `/promotional-items/mouse-pads` | ✅ | ✅ |

> **Note:** The decals orphaned group (`/decals/stickers`, `/decals/window-wall-floor-decals`, `/decals/coronavirus-decals`) listed in `cta-review.md` §A2 has no corresponding view files in `resources/views/pages/` — no `/decals/` directory exists. These routes appear to be unmapped. Deferred — out of scope for this audit.

---

## A4 Special — `/top5pct-merchandise`: `#all-products`

Hero primary: `primaryButtonHref="#all-products"` → `x-sections.product-grid :alwaysShow="true"`.

`product-grid` root has `id="all-products"` hardcoded. One slide-in banner also links to `#all-products` (internal scroll, not contact modal). Both resolve correctly.

**Status: ✅ Resolved.**

---

## A1 Special — `/custom-apparel/custom-shirts`: `#shirt-types`

Hero primary: `primaryButtonHref="#shirt-types"` → `x-sections.shirt-types-grid`. The `shirt-types-grid` component root is:

```html
<section id="shirt-types" class="py-10 bg-linen">
```

The `id="shirt-types"` is hardcoded in the component. No per-page change is needed.

**Status: ✅ Resolved.**

---

## A1 CLP Pages — Category Anchors ❌ ALL MISSING

All six CLP pages use a unique `#[category]-categories` anchor as the hero primary href. The intended scroll target on every CLP page is `x-sections.lp-category-banners`, which renders the grid of sub-category links (the "browse" section immediately below the intro content).

The `lp-category-banners` component root is:

```html
<section class="py-10 bg-white">
```

**There is no `id=` on this element.** The anchor scrolls silently into the void on every CLP page.

### Affected Pages

| Page | Hero Anchor | Target Component | id= Present? |
|---|---|---|---|
| `/custom-apparel` | `#apparel-categories` | `sections.lp-category-banners` | ❌ No |
| `/signs` | `#sign-categories` | `sections.lp-category-banners` | ❌ No |
| `/vehicle-graphics` | `#vehicle-categories` | `sections.lp-category-banners` | ❌ No |
| `/stickers` | `#sticker-categories` | `sections.lp-category-banners` | ❌ No |
| `/promotional-items` | `#promo-categories` | `sections.lp-category-banners` | ❌ No |
| `/design-services` | `#design-categories` | `sections.lp-category-banners` | ❌ No |

### Fix Options

Because each CLP page uses a different anchor id, the `lp-category-banners` component cannot hardcode a single value the way `product-grid` does. Two approaches:

**Option A — Add `id` prop to `sections.lp-category-banners` (recommended)**

Add `@props(['id' => null])` to the component and apply `{{ $id ? 'id="'.$id.'"' : '' }}` (or `:id="$id"`) to its root `<section>`. Each CLP page then passes the correct id:

```blade
{{-- /custom-apparel (index.blade.php) --}}
<x-sections.lp-category-banners id="apparel-categories" :banners="[...]" />
```

One component change, six page-level prop additions. The component stays generic and reusable.

**Option B — Wrap each call in a named div on each page**

No component change required; add a `<div id="apparel-categories">` wrapper around `x-sections.lp-category-banners` on each CLP page. Slightly more markup per page, but zero risk of breaking the component for future uses.

---

## Pages Excluded from This Audit

These pages have hero buttons that go to `/contact` (contact modal), `tel:`, or an external URL — no in-page anchor is used, so no anchor target is needed.

| Page Group | Primary Href | Reason Excluded |
|---|---|---|
| A3 — Specialty apparel & design services sub-pages (17 pages) | `/contact` (→ modal) | No in-page anchor |
| A4 — `/` (Home) | `/top5pct-merchandise` | External navigation |
| A4 — `/about` · `/portfolio` · `/stores` · `/company` · `/company/resources` | `/contact` (→ modal) | No in-page anchor |
| A4 — `/contact` | `tel:+18153498600` | No in-page anchor |
| A4 — `/collection` (template) | `/contact` (→ modal) | No in-page anchor |
| Checkout flow | N/A | No hero CTA — excluded from scope |

---

*End of Hero CTA Anchor Audit — `docs/hero.ctas.md`*
