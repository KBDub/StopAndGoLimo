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
- This requirement applies retroactively to all future cleanup work — see Section 4 below.

---

## 2. CSS and Tailwind Cleanup (Pending)

The following must be done together — change the token namespace first, then sweep the blade files.

### Step 1 — `tailwind.config.js`

**Remove or update these legacy Top 5 Pct color tokens:**

| Token | Current value | Action |
|---|---|---|
| `sunburst` | `#FFC20E` and shades | Delete |
| `azure` | `#5A7EC8` and shades | **Done** — updated to Stop & Go values; keep as-is |
| `linen` | `#F2F0E6` and shades | Delete |
| `charcoal` | `#2C2C2C` and shades | Delete |
| `olive` | `#A39822` | Delete |
| `blush-pink` | `#FBCDCE` | Delete |
| `success` | `#4CAF50` | Delete (use `stopngo-success`) |
| `warning` | `#F9A825` | Delete (use `stopngo-warning`) |
| `error` | `#C62828` | Delete (use `stopngo-error`) |
| `muted` | `#69727D` and shades | Rename to `slate` (aligns with CSS var `--slate`) |

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
- `--color-azure-light: #5A9AE8`, `--color-azure: #3273DC`, `--color-azure-dark: #2558A8` — these are the old T5P azure vars. The new Twilight Luxe vars (`--azure-light`, `--azure`, `--azure-dark`) are already in the codebase and must be kept.
- `--color-linen-*` (light, default, dark)
- `--color-charcoal-*` (lighter, light, default, dark)
- `--color-olive`
- `--color-white`
- `--color-success`, `--color-warning`, `--color-error`
- Semantic aliases: `--color-primary`, `--color-secondary`, `--color-background`, `--color-text`, `--color-link`, `--color-link-hover`

**Remove the legacy font var (line 56):**
- `--font-primary: 'Titillium Web'...` — delete; replace any usage with `var(--font-body)`.
- Do NOT remove the Titillium Web `@import` line on line 1 until the font decision is final.

**Update `@layer base`:**
- `html { font-family: var(--font-primary) }` — change to `var(--font-body)`
- `a { @apply text-azure }` and `a:hover { @apply text-azure/80 }` — update to use Azure as the Stop & Go link color (this is the correct final value now; `azure` is Stop & Go's `#5A7EC8`)

**Update `@layer components`:**
- `.btn-primary` — remove `bg-sunburst text-charcoal`, replace with `bg-champagne text-navy`
- `.btn-secondary` — remove `border-charcoal hover:bg-linen`, replace with navy/champagne equivalents
- `.btn-accent` — remove `bg-azure` (this was referencing T5P azure; the replacement is context-dependent, delete or rewire to champagne)
- All `.link-*` classes — rewire from sunburst/charcoal to champagne/navy/slate; azure link classes may stay if they reference the new Stop & Go azure
- `.scrollbar-sunburst` — rename to `.scrollbar-champagne`, update colors

**Update unlayered styles:**
- `.link-notification` — change `var(--color-azure)` to `var(--azure)` (updates pointer from old T5P var to new Twilight Luxe var)

**Update `.card-detail-content`:**
- `var(--color-charcoal-light, #555)` — change to `var(--slate)`
- `#A39822` (olive) — change to `var(--champagne)`
- `#3273DC` (T5P azure) — change to `var(--azure)` (Stop & Go azure)
- `#2C2C2C` (charcoal) — change to `var(--navy)`

**Update `.lp-banner-wrap`:**
- `#FFC20E` (sunburst) in conic-gradient — change to `var(--champagne)`

**Update semantic vars pointing to dead tokens:**
- `--nav-background: var(--color-charcoal)` — change to `var(--navy)`
- `--footer-background: var(--color-linen)` — change to `var(--cloud)`
- `--footer-text-color: var(--color-charcoal)` — change to `var(--navy)`
- `--input-border-color: var(--color-gray-border)` — change to `var(--cloud-dark)`
- `--input-focus-border-color: var(--color-primary)` — change to `var(--champagne)`

**Update border-radius vars:**
- `--border-radius: 0px` — change to `10px` (matches button `rounded` default)
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

## 4. Blade Files with Old Color References (Must Update After Step 1-2 Above)

These files use old T5P Tailwind tokens (`bg-sunburst`, `text-azure` pointing to old T5P azure, `bg-linen`, `text-charcoal`, `bg-charcoal`, `text-olive`, etc.) or raw hex values. They will break or render incorrectly once the old tokens are removed.

**Branded CSS color rule applies to all files in this section.** When rewriting any color reference, use `var(--token)` CSS vars or Tailwind tokens from the Twilight Luxe set only. No raw hex values.

### UI Components — Delete Entirely (T5P Color-Named, No Reuse Value)

| File | Reason |
|---|---|
| `resources/views/components/ui/banner-thin-linen.blade.php` | Linen = T5P color |
| `resources/views/components/ui/banner-thin-azure.blade.php` | T5P azure color (#3273DC era name) |
| `resources/views/components/ui/banner-thin-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/banner-thin-sunburst.blade.php` | Sunburst = T5P color |
| `resources/views/components/ui/banner-medium-linen.blade.php` | Linen = T5P color |
| `resources/views/components/ui/banner-medium-azure.blade.php` | T5P azure color (#3273DC era name) |
| `resources/views/components/ui/banner-medium-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/banner-medium-sunburst.blade.php` | Sunburst = T5P color |
| `resources/views/components/ui/button-blue-white.blade.php` | T5P azure color |
| `resources/views/components/ui/button-white-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-charcoal-gold.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-outline-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-gold-charcoal.blade.php` | Charcoal = T5P color |
| `resources/views/components/ui/button-gold-gradient.blade.php` | Sunburst gold, T5P |
| `resources/views/components/ui/button-gold-white.blade.php` | Sunburst gold, T5P |
| `resources/views/components/ui/button-outline-gold.blade.php` | Sunburst gold, T5P |
| `resources/views/components/ui/button-azure.blade.php` | Stub only, not in use, no production purpose |
| `resources/views/components/ui/button-outline-azure.blade.php` | Stub only, not in use, no production purpose |

### UI Components — Update (Reusable Structure, Needs Color Rewire)

Replace all T5P token references and raw hex values with Twilight Luxe `var(--token)` equivalents.

| File | What to fix |
|---|---|
| `resources/views/components/ui/button.blade.php` | Remove `signal` reference in docblock; raw hover hex values in inline Tailwind arbitrary values |
| `resources/views/components/ui/modal.blade.php` | `bg-linen`, `text-charcoal`, `text-azure` (T5P) refs |
| `resources/views/components/ui/modal-warning.blade.php` | Old warning color refs |
| `resources/views/components/ui/modal-gold.blade.php` | Sunburst gold refs |
| `resources/views/components/ui/modal-dark.blade.php` | Charcoal refs |
| `resources/views/components/ui/modal-default.blade.php` | Old azure (T5P) and linen refs |
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
| `resources/views/components/sections/category-hero.blade.php` | `bg-sunburst`, `text-charcoal`, raw hex values, image paths |
| `resources/views/components/sections/faq.blade.php` | `text-azure` (T5P), `bg-linen` refs |
| `resources/views/components/sections/about-preview.blade.php` | `bg-linen`, `text-charcoal` refs |
| `resources/views/components/sections/hero-full-bleed.blade.php` | `bg-charcoal`, `text-azure` (T5P) refs |
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
| `resources/views/components/layouts/page.blade.php` | `bg-azure` (T5P), `text-sunburst`, default meta copy |
| `resources/views/components/layout/footer.blade.php` | `bg-linen`, `text-charcoal`, T5P links and copy |
| `resources/views/components/layout/mega-menu-ad.blade.php` | `bg-sunburst`, T5P ad copy |

### Pages — Update

| File | What to fix |
|---|---|
| `resources/views/errors/404.blade.php` | `bg-sunburst`, `text-charcoal` refs |
| `resources/views/pages/service-areas.blade.php` | `bg-linen`, `text-azure` (T5P), T5P copy |
| `resources/views/pages/service-areas/show.blade.php` | Old colors, T5P copy |
| `resources/views/pages/page-management.blade.php` | Old color refs |
| `resources/views/pages/demo-premium.blade.php` | Old color refs throughout |

---

## 5. Branded CSS Color Compliance (Applies to All Files)

This is a hard requirement added after the initial audit. When performing any cleanup from Sections 2-4, every color reference must be migrated to a named Twilight Luxe CSS custom property. No raw hex values in Blade files or stylesheets.

**Approved token reference:**

| CSS var | Tailwind token | Value |
|---|---|---|
| `var(--navy)` | `text-navy`, `bg-navy` | `#15152C` |
| `var(--navy-light)` | `text-navy-light`, `bg-navy-light` | `#252235` |
| `var(--navy-dark)` | `text-navy-dark`, `bg-navy-dark` | `#0F1223` |
| `var(--champagne)` | `text-champagne`, `bg-champagne` | `#DCB57E` |
| `var(--champagne-light)` | `text-champagne-light`, `bg-champagne-light` | `#E9C79E` |
| `var(--champagne-dark)` | `text-champagne-dark`, `bg-champagne-dark` | `#C49A5E` |
| `var(--cloud)` | `text-cloud`, `bg-cloud` | `#E8E9EC` |
| `var(--cloud-light)` | `text-cloud-light`, `bg-cloud-light` | `#F4F5F7` |
| `var(--cloud-dark)` | `text-cloud-dark`, `bg-cloud-dark` | `#D4D6DB` |
| `var(--slate)` | `text-slate`, `bg-slate` (or legacy `text-muted`) | `#69727D` |
| `var(--slate-light)` | `text-slate-light` | `#8B939C` |
| `var(--slate-dark)` | `text-slate-dark` | `#4A5159` |
| `var(--azure)` | `text-azure`, `bg-azure` | `#5A7EC8` |
| `var(--azure-light)` | `text-azure-light` | `#94ACDB` |
| `var(--azure-dark)` | `text-azure-dark` | `#385A9F` |
| `var(--stopngo-success)` | `text-stopngo-success` | `#2E9E6B` |
| `var(--stopngo-warning)` | `text-stopngo-warning` | `#E0A800` |
| `var(--stopngo-error)` | `text-stopngo-error` | `#C0392B` |

**Tailwind arbitrary value exceptions:** Short inline shadow and opacity modifiers that reference brand colors (e.g. `hover:shadow-[0_10px_26px_rgba(90,126,200,0.32)]`) are permitted in `button.blade.php` only, since Tailwind cannot interpolate CSS vars inside arbitrary shadow values. All other arbitrary hex values in Blade are not allowed.

---

## 6. Recommended Cleanup Order

1. `tailwind.config.js` — remove old tokens, rename `muted` to `slate` (Section 2, Step 1)
2. `resources/css/app.css` — remove legacy `:root` block, update layer styles (Section 2, Step 2)
3. Run the app and verify no broken styles before continuing
4. Delete T5P-named UI components (Section 4, delete list)
5. Update reusable UI, section, and layout components to Twilight Luxe tokens (Section 4, update lists)
6. Rewrite page copy — T5P text, brand names, JSON-LD, image paths (Section 3)
7. Update sitemaps last (Section 3, sitemaps)

> **At each step:** check for raw hex values in the files being touched and migrate them to `var(--token)` per the branded CSS colors requirement (Section 5).
