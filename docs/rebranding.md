# Rebranding Audit — Stop & Go Limo

> This document tracks the full rebrand from the inherited Top 5 Pct print shop codebase
> to the Stop & Go Airport Shuttle Service Inc. "Twilight Luxe" brand system.
> It is a living document. Update it as work is completed.

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
- Demo page (`/demo`) — Signal Gold removed from palette display, button section updated, banner section updated.
- `docs/branding-requirements.md` — updated to 4+White palette throughout.

### 1.3 — Button System Updates
- `x-ui.button` base component — `radius` prop added (options: `square`, `soft`, `rounded`, `pill`; default: `soft` = 10px).
- `x-ui.button` base component — `size` prop added (options: `sm`, `md`, `lg`, `xl`; default: `md`).
- `x-ui.button-text-champagne` — renamed to `x-ui.button-text-link`.
- Demo page — button section updated to show all current variants and radius options.

---

## 2. CSS and Tailwind Cleanup (Pending)

The following must be done together — change the token namespace first, then sweep the blade files.

### Step 1 — `tailwind.config.js`

**Remove these legacy Top 5 Pct color tokens:**

| Token | Value | Action |
|---|---|---|
| `sunburst` | `#FFC20E` and shades | Delete |
| `azure` | `#3273DC` and shades | Delete |
| `linen` | `#F2F0E6` and shades | Delete |
| `charcoal` | `#2C2C2C` and shades | Delete |
| `olive` | `#A39822` | Delete |
| `blush-pink` | `#FBCDCE` | Delete |
| `success` | `#4CAF50` | Delete (use `stopngo-success`) |
| `warning` | `#F9A825` | Delete (use `stopngo-warning`) |
| `error` | `#C62828` | Delete (use `stopngo-error`) |
| `muted` | `#69727D` | Rename to `slate` (aligns with CSS var) |

**Remove these legacy gradient tokens:**

| Token | Action |
|---|---|
| `gold-gradient` | Delete |
| `gold-gradient-light` | Delete |
| `gold-gradient-dark` | Delete |
| `gold-gradient-horizontal` | Delete |
| `warm-gradient` | Delete |

**Remove these legacy shadow tokens:**

| Token | Action |
|---|---|
| `shadow-gold` | Delete |
| `shadow-gold-lg` | Delete |
| `shadow-gold-xl` | Delete |

**Fonts — no change for now.** The existing font registrations (Titillium Web, Poppins, Montserrat) stay in place until final font decisions are confirmed. Do not remove any `fontFamily` entries from `tailwind.config.js` or `@import` lines from `app.css`.

---

### Step 2 — `resources/css/app.css`

**Remove the entire legacy `:root` block (lines 16-55):**
- `--color-sunburst-*` (light, default, dark)
- `--color-azure-*` (light, default, dark)
- `--color-linen-*` (light, default, dark)
- `--color-charcoal-*` (lighter, light, default, dark)
- `--color-olive`
- `--color-white`
- `--color-success`, `--color-warning`, `--color-error`
- Semantic aliases: `--color-primary`, `--color-secondary`, `--color-background`, `--color-text`, `--color-link`, `--color-link-hover`

**Remove the legacy font import and var (lines 1, 56):**
- `@import url('https://fonts.googleapis.com/css2?family=Titillium+Web...')` — delete
- `--font-primary: 'Titillium Web'...` — delete; replace usage with `--font-body`

**Update `@layer base` (lines 199-241):**
- `html { font-family: var(--font-primary) }` — change to `var(--font-body)`
- `a { @apply text-azure }` and `a:hover { @apply text-azure/80 }` — rewire to champagne

**Update `@layer components` (lines 244-357):**
- `.btn-primary` — remove `bg-sunburst text-charcoal`, replace with `bg-champagne text-navy`
- `.btn-secondary` — remove `border-charcoal hover:bg-linen`, replace with navy/champagne equivalents
- `.btn-accent` — remove `bg-azure`, replace or delete
- All `.link-*` classes — rewire from azure/sunburst/charcoal to champagne/navy/slate
- `.scrollbar-sunburst` — rename to `.scrollbar-champagne`, update colors

**Update unlayered styles (lines 360-368):**
- `.link-notification` — change `var(--color-azure)` to `var(--champagne)`

**Update `.card-detail-content` (lines 383-436):**
- `var(--color-charcoal-light, #555)` — change to `var(--slate)`
- `#A39822` (olive) — change to `var(--champagne)`
- `#3273DC` (azure) — change to `var(--champagne)`
- `#2C2C2C` (charcoal) — change to `var(--navy)`

**Update `.lp-banner-wrap` (lines 458-490):**
- `#FFC20E` (sunburst) in conic-gradient — change to `var(--champagne)` (`#DCB57E`)

**Update semantic vars pointing to dead tokens (lines 192-196):**
- `--nav-background: var(--color-charcoal)` — change to `var(--navy)`
- `--footer-background: var(--color-linen)` — change to `var(--cloud)`
- `--footer-text-color: var(--color-charcoal)` — change to `var(--navy)`
- `--input-border-color: var(--color-gray-border)` — change to `var(--cloud-dark)` (dead var)
- `--input-focus-border-color: var(--color-primary)` — change to `var(--champagne)`

**Update border-radius vars (lines 118-121):**
- `--border-radius: 0px` — change to `10px` (matches button soft default)
- `--border-radius-md: 0px` — change to `10px`

---

## 3. Blade Files with "Top 5 Pct" Text References (Must Rewrite Content)

These files contain literal "Top 5 Pct," "top5pct," or "top5pct.com" strings in their text, URLs, or image paths. Content must be replaced with Stop & Go copy.

### Pages
| File | Type of reference |
|---|---|
| `resources/views/pages/home.blade.php` | JSON-LD `provider`, `areaServed`, FAQs, `ogImage` path |
| `resources/views/pages/service-areas.blade.php` | Section copy, image paths |
| `resources/views/pages/service-areas/show.blade.php` | City copy, image paths, `top5pct` slugs |

### Layout and Global Components
| File | Type of reference |
|---|---|
| `resources/views/components/layouts/page.blade.php` | Default meta title/description |
| `resources/views/components/store/footer.blade.php` | Footer brand name, links, copy |
| `resources/views/components/layout/top-notification-bar.blade.php` | Phone, CTA text, brand name |

### Section Components (Rewrite)
| File | Type of reference |
|---|---|
| `resources/views/components/sections/category-hero.blade.php` | Default copy, image paths |
| `resources/views/components/sections/featured-products.blade.php` | Section heading, copy |
| `resources/views/components/sections/home-page-hero.blade.php` | Hero copy, image paths |
| `resources/views/components/sections/our-services.blade.php` | Services listed are print shop services |
| `resources/views/components/sections/shirt-types-grid.blade.php` | Apparel-specific — delete or replace |
| `resources/views/components/sections/shirt-types-faq.blade.php` | Apparel-specific — delete or replace |
| `resources/views/components/sections/city-localized-content.blade.php` | Print shop city copy |

### Sitemaps (Rewrite URLs)
| File | Type of reference |
|---|---|
| `resources/views/sitemaps/sitemap.blade.php` | Top 5 Pct page URLs |
| `resources/views/sitemaps/sitemap-images.blade.php` | Top 5 Pct image URLs |
| `resources/views/sitemaps/sitemap-video.blade.php` | Top 5 Pct video URLs |

### Demo / Partials (Low priority — internal tools)
| File | Notes |
|---|---|
| `resources/views/partials/demo-premium/section-carousel-rotating-images.blade.php` | Demo only |
| `resources/views/partials/demo-premium/section-banner-slide-in.blade.php` | Demo only |
| `resources/views/partials/demo-premium/section-product-cards.blade.php` | Demo only |
| `resources/views/partials/demo-premium/section-lp-banner-images.blade.php` | Demo only |

---

## 4. Blade Files with Old Tailwind Color Classes (Must Update After Step 1-2 Above)

These files use `bg-sunburst`, `text-azure`, `bg-linen`, `text-charcoal`, `bg-charcoal`, `text-olive`, etc. They will break visually once the old tokens are removed from `tailwind.config.js`.

### UI Components — Delete Entirely (Old Brand Colors in Name and Code)

| File | Reason |
|---|---|
| `resources/views/components/ui/banner-thin-linen.blade.php` | Linen = T5P color |
| `resources/views/components/ui/banner-thin-azure.blade.php` | Azure = T5P color |
| `resources/views/components/ui/banner-thin-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/banner-thin-sunburst.blade.php` | Sunburst = T5P color |
| `resources/views/components/ui/banner-medium-linen.blade.php` | Linen = T5P color |
| `resources/views/components/ui/banner-medium-azure.blade.php` | Azure = T5P color |
| `resources/views/components/ui/banner-medium-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/banner-medium-sunburst.blade.php` | Sunburst = T5P color |
| `resources/views/components/ui/button-blue-white.blade.php` | Azure = T5P color |
| `resources/views/components/ui/button-white-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-charcoal-gold.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-outline-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-gold-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-gold-gradient.blade.php` | Sunburst gold, T5P |
| `resources/views/components/ui/button-gold-white.blade.php` | Sunburst gold, T5P |
| `resources/views/components/ui/button-outline-gold.blade.php` | Sunburst gold, T5P |

### UI Components — Update (Reusable Structure, Needs Color Rewire)

| File | What to fix |
|---|---|
| `resources/views/components/ui/button.blade.php` | Base component: any azure/sunburst/charcoal defaults |
| `resources/views/components/ui/modal.blade.php` | `bg-linen`, `text-charcoal`, `text-azure` refs |
| `resources/views/components/ui/modal-warning.blade.php` | Old warning colors |
| `resources/views/components/ui/modal-gold.blade.php` | Sunburst gold refs |
| `resources/views/components/ui/modal-dark.blade.php` | Old charcoal refs |
| `resources/views/components/ui/modal-default.blade.php` | Old azure/linen refs |
| `resources/views/components/ui/modal-success.blade.php` | Old success color |
| `resources/views/components/ui/modal-danger.blade.php` | Old error color |
| `resources/views/components/ui/modal-wizard.blade.php` | Old color refs |
| `resources/views/components/ui/modal-quick-view.blade.php` | Old color refs |
| `resources/views/components/ui/card-testimonial.blade.php` | Old color refs |
| `resources/views/components/ui/card-faq.blade.php` | Old color refs |
| `resources/views/components/ui/card-info-light.blade.php` | Old color refs |
| `resources/views/components/ui/card-info-dark.blade.php` | Old color refs |
| `resources/views/components/ui/card-feature.blade.php` | Old color refs |
| `resources/views/components/ui/card-service.blade.php` | Old color refs |
| `resources/views/components/ui/badge-featured.blade.php` | Old color refs |
| `resources/views/components/ui/badge-new.blade.php` | Old color refs |
| `resources/views/components/ui/badge-default.blade.php` | Old color refs |
| `resources/views/components/ui/badge-sold-out.blade.php` | Old color refs |
| `resources/views/components/ui/banner-testimonial.blade.php` | Old color refs |
| `resources/views/components/ui/button-modal-cancel.blade.php` | Old color refs |
| `resources/views/components/ui/button-modal-primary.blade.php` | Old color refs |
| `resources/views/components/ui/contact-modal.blade.php` | Old color refs |
| `resources/views/components/ui/send-message-modal.blade.php` | Old color refs |

### Section Components — Update (Keep and Adapt)

| File | What to fix |
|---|---|
| `resources/views/components/sections/category-hero.blade.php` | `bg-sunburst`, `text-charcoal`, image paths |
| `resources/views/components/sections/faq.blade.php` | `text-azure`, `bg-linen` refs |
| `resources/views/components/sections/about-preview.blade.php` | `bg-linen`, `text-charcoal` refs |
| `resources/views/components/sections/hero-full-bleed.blade.php` | `bg-charcoal`, `text-azure` refs |
| `resources/views/components/sections/video-banner.blade.php` | `bg-sunburst`, `text-charcoal` refs |
| `resources/views/components/sections/card-image-with-text.blade.php` | Old color refs |
| `resources/views/components/sections/card-2image-with-text.blade.php` | Old color refs |
| `resources/views/components/sections/card-detailed-info.blade.php` | Old color refs |
| `resources/views/components/sections/why-choose-us.blade.php` | Old color refs |
| `resources/views/components/sections/review-banner.blade.php` | Old color refs |
| `resources/views/components/sections/map-section.blade.php` | Old color refs |
| `resources/views/components/sections/cta-ready-to-get-started.blade.php` | Old color refs + T5P copy |
| `resources/views/components/sections/cta-free-quote-banner.blade.php` | Old color refs + T5P copy |
| `resources/views/components/sections/cta-quadruple-button-banner.blade.php` | Old color refs |
| `resources/views/components/sections/home-page-services-accordion.blade.php` | Old color refs + T5P services |
| `resources/views/components/sections/city-vehicle-and-brand.blade.php` | Old color refs + T5P copy |
| `resources/views/components/sections/page-faq.blade.php` | Old color refs |

### Layout Components — Update

| File | What to fix |
|---|---|
| `resources/views/components/layouts/page.blade.php` | `bg-azure`, `text-sunburst`, default meta copy |
| `resources/views/components/layout/footer.blade.php` | `bg-linen`, `text-charcoal`, T5P links and copy |
| `resources/views/components/layout/mega-menu-ad.blade.php` | `bg-sunburst`, T5P ad copy |

### Pages — Update

| File | What to fix |
|---|---|
| `resources/views/errors/404.blade.php` | `bg-sunburst`, `text-charcoal` refs |
| `resources/views/pages/service-areas.blade.php` | `bg-linen`, `text-azure`, T5P copy |
| `resources/views/pages/service-areas/show.blade.php` | Old colors, T5P copy |
| `resources/views/pages/page-management.blade.php` | Old color refs |
| `resources/views/pages/demo-premium.blade.php` | Old color refs throughout |

---

## 5. Recommended Cleanup Order

1. `tailwind.config.js` — remove old tokens (Step 1 above)
2. `resources/css/app.css` — clean up vars and layer styles (Step 2 above)
3. Run the app and check for broken styles
4. Delete old color UI components (Section 4, delete list)
5. Update remaining section and UI components to use new tokens (Section 4, update list)
6. Rewrite page content (Section 3)
7. Update sitemaps last (Section 3, sitemaps)
