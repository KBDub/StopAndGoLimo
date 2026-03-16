# Square Branding Refactor

## Overview

The goal is to remove all rounded corners from interactive and structural UI elements across the site, creating a sharp, architectural aesthetic consistent with premium signage and apparel branding. This is a branding-level change — not a one-off tweak — and touches every layer of the front end.

---

## What Gets Changed (Remove Rounding)

These elements currently have rounded corners and should become square (`border-radius: 0`):

### Buttons — 9 files
All button components use `rounded-lg`. Remove from each:
- `button-blue-white.blade.php`
- `button-charcoal-gold.blade.php`
- `button-gold-charcoal.blade.php`
- `button-gold-gradient.blade.php`
- `button-gold-white.blade.php`
- `button-outline-charcoal.blade.php`
- `button-outline-gold.blade.php`
- `button-white-charcoal.blade.php`
- `button-text-link.blade.php`

Also: `hero-full-bleed.blade.php` has an inline secondary button with `rounded-lg`.

### Cards — 6 files
- `card-service.blade.php` — `rounded-xl`
- `card-showcase.blade.php` — `rounded-2xl`
- `card-testimonial.blade.php` — `rounded-xl`
- `card-product-hover.blade.php` — `rounded-xl` on containers
- `carousel-product.blade.php` — `rounded-xl` on image frames, `rounded-lg` on thumbnails
- `modal-quick-view.blade.php` — `rounded-2xl` on modal container, `rounded-lg` on buttons and inputs inside

### Section Components — 8 files
- `top5pct-same-day-service.blade.php` — `rounded-lg` on service cards
- `represent-yourself.blade.php` — `rounded-xl` on feature blocks
- `about-preview.blade.php` — `rounded-2xl` on image container, `rounded-lg` on floating stat card
- `design-it-yourself.blade.php` — `rounded-2xl` on main container and icon box
- `shirt-types-faq.blade.php` — `rounded-xl` on the sidebar image
- `shirt-types-video.blade.php` — `rounded-xl` on the iframe embed
- `map-section.blade.php` — `rounded-l-lg`/`rounded-r-lg` on search input/button pair, `rounded-lg` on iframe embed
- `sticky-add-to-cart.blade.php` — `rounded-lg` on add-to-cart button

### Livewire Cart Views — 4 files
- `cart-drawer.blade.php` — `rounded-lg` on product image thumbnail, quantity buttons
- `cart-page.blade.php` — `rounded-xl` on line item rows, order summary box; `rounded-lg` on product image, quantity buttons
- `checkout-page.blade.php` — `rounded-lg` on all form inputs and section containers
- `order-confirmation.blade.php` — any `rounded-*` containers

### Livewire Catalog Views — 3 files
- `collection-page.blade.php` — `rounded-xl` on product cards and image frames, `rounded-lg` on filter inputs, sort dropdown, pagination buttons, mobile filter toggle; `rounded-full` on active filter tags (pill shape — see Badges section below)
- `featured-products.blade.php` — `rounded-xl` on product card containers and image frames
- `product-detail.blade.php` — `rounded-xl` on main image frame, thumbnails; `rounded-lg` on quantity buttons, add-to-cart button, variant selector buttons, error alerts

### CSS Variables — `resources/css/app.css`
Four CSS variables drive border-radius for the design system:
```css
--border-radius: 2px;       /* → 0px */
--border-radius-md: 4px;    /* → 0px */
--border-radius-lg: 8px;    /* → 0px */
--border-radius-full: 9999px; /* keep — used for intentional circles */
```
These feed `--btn-border-radius`, `--input-border-radius`, and `--card-border-radius`. Setting all three to `0px` covers any component using the CSS variables directly.

The `.btn` utility class in `app.css` also has `rounded-sm` — remove.

---

## What Stays Round (Do Not Change)

These use `rounded-full` intentionally as circular shapes — changing them would break their visual purpose:

| Element | Location | Reason to Keep |
|---|---|---|
| Decorative glow blurs | `cta-ready-to-get-started`, `map-section` | Background blur circles, invisible as shapes |
| Cart count badge | `cart-icon.blade.php` | Small notification dot, must be circular |
| Avatar circles | `card-testimonial.blade.php` | Standard avatar convention |
| Avatar placeholder div | `card-testimonial.blade.php` | Matching the avatar circle |
| Color swatch pickers | `card-product-hover.blade.php` | Circular swatches are a product UX convention |
| Step number circles | `design-it-yourself.blade.php` | Numbered step indicators |
| "Best Seller" / "New" product tags | `collection-page`, `featured-products` | Pill badges on product images |

---

## Badges Decision Required

The five badge components all use `rounded-full` (pill shape). This is a design decision:

- **Option A — Keep as pills.** Badges are a different visual category from buttons and cards; pill shape differentiates them.
- **Option B — Make square.** Full consistency; all elements become sharp.

The campaign theme chips on the demo page's "Brand Personality" section also use `rounded-full`.

**Recommended: Keep badges as pills.** They serve a labeling function distinct from action buttons and containers.

---

## Sunburst Underbar

The `<div class="h-1 bg-sunburst rounded">` underbar used on headings has a very subtle `rounded` (2px by default). Since the bar is only 4px tall, this is nearly invisible either way. Removing it is correct for consistency but is lowest priority.

---

## Recommended Approach

Do **not** use a global `* { border-radius: 0 !important; }` rule — it would flatten avatars, glow blurs, and circular UI elements that should stay round.

Instead, do a targeted file-by-file replacement:

1. **Update CSS variables** in `app.css` — set the three non-full variables to `0px`. This fixes anything using the CSS variables automatically.
2. **Update `.btn` utility** — remove `rounded-sm`.
3. **Update all button components** — remove `rounded-lg` from the 9 button files + hero inline button.
4. **Update card components** — remove `rounded-xl` / `rounded-2xl` from the 6 card files.
5. **Update section components** — remove rounded classes from the 8 section files.
6. **Update Livewire views** — remove rounded classes from cart (4 files) and catalog (3 files).

**Total scope:** ~21 Blade files + `app.css`. Roughly 80–100 individual class removals. No JavaScript or PHP logic changes required. No database changes.

---

## Files Summary

| Category | File Count | Notes |
|---|---|---|
| CSS variables + utilities | 1 | `app.css` |
| Button components | 9 | All `rounded-lg` |
| Card components | 6 | Mix of `rounded-xl` / `rounded-2xl` |
| Section components | 8 | Mix of `rounded-xl` / `rounded-2xl` / `rounded-lg` |
| Livewire cart | 4 | Containers, inputs, quantity buttons |
| Livewire catalog | 3 | Product cards, filters, pagination |
| **Total** | **31** | No logic changes |
