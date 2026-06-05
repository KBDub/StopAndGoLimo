# Rebranding Audit — Stop & Go Limo

> This document tracked the full rebrand from the inherited Top 5 Pct print shop codebase
> to the Stop & Go Airport Shuttle Service Inc. "Twilight Luxe" brand system.
> **The rebrand is substantially complete as of June 2026.**

---

## Status Summary

| Area | Status |
|------|--------|
| Tailwind config — T5P tokens removed | ✅ Done |
| CSS vars — T5P legacy block removed, Twilight Luxe block active | ✅ Done |
| UI components — token sweep | ✅ Done |
| Section components — token sweep + Stop & Go copy | ✅ Done |
| Layout components (nav, footer, page layout) | ✅ Done |
| Page files — service-areas, show, page-management | ✅ Done |
| Sitemaps | ✅ Done |
| `custom-request-wizard.blade.php` | ⏭ Intentionally skipped |
| `pages/demo-premium.blade.php` | ⏭ Intentionally skipped |
| `pages/demo/modals.blade.php` | ⏭ Intentionally skipped |

---

## 1. Completed Changes

### 1.1 — Search Infrastructure
- **Meilisearch removed entirely.** No binary, no workflow, no env vars.
- `SCOUT_DRIVER` set to `database` in Replit shared env.
- `meilisearch/meilisearch-php` composer package removed.
- `scripts/startup-dev.sh` and `scripts/startup.sh` — Meilisearch start blocks and health gates removed.
- `config/scout.php` — default driver changed from `meilisearch` to `database`.
- `app/Livewire/Catalog/CollectionPage.php` — rewritten to use Eloquent queries instead of the Meilisearch client.
- `storage/meilisearch/` directory — removed.

### 1.2 — Signal Gold Retired
- Signal Gold (`#FEC42D`, Tailwind token `signal`) removed from the active palette.
- `tailwind.config.js` — `signal` color token removed.
- `resources/css/app.css` — no Signal Gold CSS vars were ever added (was Tailwind-only).
- `resources/views/components/ui/button-signal.blade.php` — now proxies to `button-champagne-solid`.
- `/demo` page — Signal Gold removed from palette display, button section updated, banner section updated.
- `docs/branding-requirements.md` — updated to 4+White palette throughout.

### 1.3 — Button System Updates
- `x-ui.button` base component — `radius` prop added (options: `square`, `soft`, `rounded`, `pill`; default: `rounded` = 10px).
- `x-ui.button` base component — `size` prop added (options: `sm`, `base`, `lg`; default: `base`).
- `x-ui.button-text-champagne` — renamed to `x-ui.button-text-link`.
- `/demo` page — button section updated to show all current variants and radius/size options.

### 1.4 — Azure Added as 5th Palette Color
- `tailwind.config.js` — `azure` token updated from T5P values (`#3273DC`) to Stop & Go Azure (`#5A7EC8` default, `#94ACDB` light, `#385A9F` dark).
- `tailwind.config.js` — `shadow-azure` and `shadow-azure-lg` added to `boxShadow`.
- `resources/css/app.css` — `--azure-light`, `--azure`, `--azure-dark`, `--shadow-azure`, `--shadow-azure-lg` added to the Twilight Luxe CSS vars block.
- `/demo` page — Azure color group added to palette section (3 swatches with full HEX/RGB/HSL specs). Azure added as row #6 in the color hierarchy section.
- `docs/branding-requirements.md` — updated to 5+White palette; Azure row added to palette table and color hierarchy.

### 1.5 — Azure Button Restriction
- Azure is **not used for buttons.** It is reserved for inline links, focus rings, and informational text highlights only.
- `button-azure.blade.php` and `button-outline-azure.blade.php` exist in the codebase as alias stubs but are not exposed on the `/demo` page and must not be used in production templates.
- `docs/branding-requirements.md` and `replit.md` — Azure button restriction documented as a hard rule.

### 1.6 — Branded CSS Colors Requirement
- **All colors must use named Twilight Luxe CSS custom properties** (`var(--navy)`, `var(--champagne)`, `var(--azure)`, etc.).
- Raw hex values, `rgb()`, `hsl()`, or any unlabeled color literal are not permitted in component files or stylesheets.
- Documented in `docs/branding-requirements.md` (Section 5.1 note) and `replit.md` (User preferences).

### 1.7 — Tailwind and CSS Cleanup
- `tailwind.config.js` — all T5P legacy color tokens removed (`sunburst`, `linen`, `charcoal`, `olive`, `blush-pink`, `success`, `warning`, `error`). Legacy gradient tokens removed (`gold-gradient*`, `warm-gradient`). Legacy shadow tokens removed (`shadow-gold*`). `slate` added as primary token; `muted` kept as alias during blade sweep. `azure` kept with Stop & Go values.
- `resources/css/app.css` — entire legacy `:root` block removed. `--font-primary` removed; `html` now uses `var(--font-body)`. Semantic vars rewired to Twilight Luxe tokens. Border-radius vars updated to `10px`. All raw hex values migrated to CSS vars. `.btn-primary` and `.btn-secondary` rewired to champagne/navy. `.scrollbar-sunburst` renamed to `.scrollbar-champagne`. New link classes added: `.link-nav-stopngo` and `.link-champagne`.

### 1.8 — T5P Legacy Components Retired
- All T5P-named banner component files deleted: `banner-thin-{linen,azure,charcoal,sunburst,signal}` and `banner-medium-{linen,azure,charcoal,sunburst,signal}`.
- New Twilight Luxe banner variants created: `banner-thin-slate` and `banner-medium-slate`.
- All T5P-named button component files converted to proxy stubs pointing to Twilight Luxe equivalents.
- `button-azure.blade.php` and `button-outline-azure.blade.php` deleted.

### 1.9 — UI Components Token Sweep
All UI components rewritten with Twilight Luxe tokens and Stop & Go copy:
- Cards: `card-product`, `card-product-hover`, `card-category-visual`, `card-banner-slide-in`, `card-lp-banner-images`, `card-detailed-info`, `card-showcase`
- Banners: `banner-full-bleed-2-image`, `banner-full-bleed-2-video`, `banner-testimonial`
- Carousels: `carousel-product`, `carousel-rotating-images`
- Dropzones: `artwork-dropzone`, `banner-cta-artwork-dropzone`, `banner-cta-dtf-dropzone`, `dtf-dropzone`
- Modals: `dtf-confirm-modal`, `order-action-modal`, `stripe-checkout-modal`, `contact-modal`, `send-message-modal`, `modal` (base), `modal-*` shorthand wrappers
- Actions: `sticky-add-to-cart`
- Badges: `badge-featured`, `badge-new`, `badge-default`, `badge-sold-out`
- Misc: `button-modal-cancel`, `button-modal-primary`, `card-testimonial`, `card-faq`, `card-info-light`, `card-info-dark`, `card-feature`, `card-service`

### 1.10 — Section Components Token Sweep + Stop & Go Copy
All section components rewritten:
- `featured-products`, `top-level-category-section`, `storefront-demo-preview`, `represent-yourself`
- `top5pct-same-day-service`, `cta-design-your-own-banner`, `design-it-yourself`
- `dtf-pricing-section`, `shirt-types-faq`, `shirt-types-grid`, `shirt-types-video`
- `category-hero`, `home-page-hero`, `hero-full-bleed`, `video-banner`
- `faq`, `page-faq`, `about-preview`, `review-banner`, `map-section`
- `card-image-with-text`, `card-2image-with-text`, `card-detailed-info`, `why-choose-us`
- `cta-ready-to-get-started`, `cta-free-quote-banner`, `cta-quadruple-button-banner`
- `home-page-services-accordion`, `city-localized-content`, `city-vehicle-and-brand`

### 1.11 — Layout Components
- `layouts/page.blade.php` — default meta title, description, JSON-LD updated to Stop & Go
- `layout/footer.blade.php` — brand name, links, address, phone, copy updated
- `layout/top-notification-bar.blade.php` — phone (815) 585-6922, Stop & Go brand name
- `layout/mega-menu-ad.blade.php` — Stop & Go copy

### 1.12 — Page Files
- `pages/service-areas.blade.php` — full rewrite for Stop & Go airport shuttle service
- `pages/service-areas/show.blade.php` — full rewrite, JSON-LD updated to stopandgolimo.com, "since 2009", correct phone
- `pages/page-management.blade.php` — title, body tokens, all T5P color classes replaced

### 1.13 — Sitemaps
- `sitemaps/sitemap.blade.php` — rewritten for Stop & Go pages: Home, Service Areas, dynamic city slugs, dynamic Products and Collections from Lunar DB. All `top5pct.com` URLs removed.
- `sitemaps/sitemap-images.blade.php` — stripped to Stop & Go entries only (Home OG image, fleet image). All T5P image paths removed.
- `sitemaps/sitemap-video.blade.php` — all T5P video entries removed. Template stub left with commented example; fill in once Stop & Go YouTube videos are available.

---

## 2. Intentionally Skipped

These files were explicitly excluded from the rebrand scope:

| File | Reason |
|------|--------|
| `resources/views/components/ui/custom-request-wizard.blade.php` | 1,878 lines; deferred by client |
| `resources/views/pages/demo-premium.blade.php` | Internal dev tool; low priority |
| `resources/views/pages/demo/modals.blade.php` | Internal dev tool; low priority |

---

## 3. Remaining Work (Future Sessions)

| Item | Notes |
|------|-------|
| Real Stop & Go images | Replace placeholder `/images/limo/*` paths with actual uploaded images |
| Video sitemap | Add YouTube video IDs once Stop & Go videos are published |
| Image sitemap | Expand entries as real images are added; update `docs/image-video-control.md` |
| Domain confirmation | All sitemaps use `stopandgolimo.com` — confirm final production domain |
| `custom-request-wizard.blade.php` | Token sweep deferred; still has T5P tokens |
| `demo-premium.blade.php` / `demo/modals.blade.php` | Skipped; update if demos are used publicly |
| City content (`CityContent::for()`) | City paragraph copy likely still references T5P services |
| `errors/404.blade.php` | May still have T5P tokens |

---

## 4. Brand Token Reference

| CSS var | Tailwind token | Value |
|---------|---------------|-------|
| `var(--navy)` | `text-navy`, `bg-navy` | `#15152C` |
| `var(--navy-light)` | `text-navy-light`, `bg-navy-light` | `#252235` |
| `var(--navy-dark)` | `text-navy-dark`, `bg-navy-dark` | `#0F1223` |
| `var(--champagne)` | `text-champagne`, `bg-champagne` | `#DCB57E` |
| `var(--champagne-light)` | `text-champagne-light`, `bg-champagne-light` | `#E9C79E` |
| `var(--champagne-dark)` | `text-champagne-dark`, `bg-champagne-dark` | `#C49A5E` |
| `var(--cloud)` | `text-cloud`, `bg-cloud` | `#E8E9EC` |
| `var(--cloud-light)` | `text-cloud-light`, `bg-cloud-light` | `#F4F5F7` |
| `var(--cloud-dark)` | `text-cloud-dark`, `bg-cloud-dark` | `#D4D6DB` |
| `var(--slate)` | `text-slate`, `bg-slate` | `#69727D` |
| `var(--azure)` | `text-azure`, `bg-azure` | `#5A7EC8` — links and focus only, never buttons |
| `var(--stopngo-success)` | `text-stopngo-success` | `#2E9E6B` |
| `var(--stopngo-warning)` | `text-stopngo-warning` | `#E0A800` |
| `var(--stopngo-error)` | `text-stopngo-error` | `#C0392B` |

**Rule:** All colors in Blade files and stylesheets must use named CSS custom properties or their Tailwind token equivalents. No raw hex values, `rgb()`, or `hsl()` literals permitted outside of `button.blade.php` (which has one approved arbitrary shadow exception).
