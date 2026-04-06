# CTA & Banner Review
## Top 5 Percent Custom Signage & Apparel

> **Scope:** All pages in `resources/views/pages/` — including Home, Lunar Livewire pages, templates, orphaned pages, and admin pages. Audit run 2026-04-05.
>
> **"CTA"** in this document means any button, link, or image that initiates a user action (navigation, phone call, form). Decorative color-band banners with no action are excluded from the CTA tables but catalogued in Section 4.

---

## Table of Contents

1. [CTA Component Inventory](#1-cta-component-inventory)
2. [By CTA Type — Page Listing](#2-by-cta-type--page-listing)
   - [A. Hero — Category Hero Buttons](#a-hero--category-hero-buttons)
   - [B. Section CTA — Get a Free Quote strip](#b-section-cta--get-a-free-quote-strip)
   - [C. Section CTA — Ready to Get Started](#c-section-cta--ready-to-get-started)
   - [D. Section CTA — Design Your Own strip](#d-section-cta--design-your-own-strip)
   - [E. Slide-In Banner](#e-slide-in-banner)
   - [F. Video Banner CTA](#f-video-banner-cta)
   - [G. Map Section Phone Link](#g-map-section-phone-link)
   - [H. Home-Exclusive Inline CTAs](#h-home-exclusive-inline-ctas)
3. [Pages With No CTAs](#3-pages-with-no-ctas)
4. [Decorative Banners — No CTA](#4-decorative-banners--no-cta)
5. [Unused Flexible Banner Components](#5-unused-flexible-banner-components)
6. [Issues & Inconsistencies](#6-issues--inconsistencies)

---

## 1. CTA Component Inventory

| Component | Location | Buttons / Links | Action(s) | Appears On |
|---|---|---|---|---|
| `sections.category-hero` | Top of every content page | 2 buttons — primary + secondary | Varies per page (see §2-A) | All content pages |
| `sections.cta-free-quote` | Mid-page | 1 button — "Get a Free Quote" | `/contact` | All content pages except Lunar/admin |
| `sections.cta-ready-to-get-started` | Near bottom | 2 buttons — quote + phone | `/contact` · `tel:+18153498600` | All content pages except Lunar/admin |
| `sections.cta-design-your-own` | Mid-page | 1 button — "Start Designing" | `/design-services/online-designer` | Home, Demo only |
| `ui.card-banner-slide-in` | Inline (×2 per content page) | Full-width clickable image | `/contact` | All 50 content pages |
| `sections.video-banner` | Inline | 1 button — "Get a Free Quote" | `/contact` | `/custom-apparel/custom-shirts` only |
| `sections.map-section` | Bottom of every content page | Phone number link | `tel:+18153498600` | All content pages except Lunar/admin |
| `sections.our-services` | Home mid-section | 1 text-link — "View All Products" | `/top5pct-merchandise` | Home only |
| `sections.design-it-yourself` | Home mid-section | 1 button — "Start Designing" | `/design-services` | Home only |
| `sections.review-banner` | Near bottom | None | Display only | All content pages |
| `sections.why-choose-us` | Near bottom | None | Display only | All content pages |

> ⚠️ = known issue — see Section 6.

---

## 2. By CTA Type — Page Listing

---

### A. Hero — Category Hero Buttons

Every content page uses `sections.category-hero` which renders **two** buttons. The text and destination vary by page group.

#### A1 — CLP Primary: "Browse [Category]" · Secondary: "Call Us Today"

| Page | Primary Text | Primary Href | Secondary Text | Secondary Href |
|---|---|---|---|---|
| `/custom-apparel` | Browse Apparel | `#apparel-categories` | Call Us Today | `tel:+18153498600` |
| `/signs` | Browse All Signs | `#sign-categories` | Call Us Today | `tel:+18153498600` |
| `/vehicle-graphics` | Browse Vehicle Graphics | `#vehicle-categories` | Call Us Today | `tel:+18153498600` |
| `/stickers` | Browse Stickers | `#sticker-categories` | Call Us Today | `tel:+18153498600` |
| `/promotional-items` | Browse Promo Items | `#promo-categories` | Call Us Today | `tel:+18153498600` |
| `/design-services` | Browse Design Services | `#design-categories` | Call Us Today | `tel:+18153498600` |

> `/top5pct-merchandise` is also a CLP but deviates from this pattern — see A4.

#### A2 — Sub-page Primary: "Shop Now" → `#all-products` · Secondary: "Call Us Today" → `tel:+18153498600`

These pages use the default e-commerce call pattern. Primary sends user to the product grid anchor on the page.

**Custom Apparel:**
`/custom-apparel/dtf-transfers` · `/custom-apparel/reunion-shirts` · `/custom-apparel/spirit-wear-shirts` · `/custom-apparel/corporate-wear-shirts`

**Signs (all sub-pages):**
`/signs/banners` · `/signs/posters` · `/signs/yard-signs` · `/signs/table-runners` · `/signs/sidewalk-signs` · `/signs/wall-signs` · `/signs/floor-signs` · `/signs/door-signs` · `/signs/parking-signs` · `/signs/table-cloths` · `/signs/window-signs`

**Vehicle Graphics (all sub-pages):**
`/vehicle-graphics/automobile-graphics` · `/vehicle-graphics/vehicle-magnets` · `/vehicle-graphics/dot-decals`

**Stickers:**
`/stickers/standard-stickers` · `/stickers/custom-shaped-stickers`

**Promotional Items (all sub-pages):**
`/promotional-items/mugs` · `/promotional-items/can-koozies` · `/promotional-items/towels` · `/promotional-items/drink-coasters` · `/promotional-items/tote-bags` · `/promotional-items/mouse-pads`

**Orphaned — Decals group:**
`/decals/stickers` · `/decals/window-wall-floor-decals` · `/decals/coronavirus-decals`

**Orphaned — Signs:**
`/signs/business-signs` · `/signs/coronavirus-signs`

#### A3 — Sub-page Primary: "Get a Free Quote" → `/contact` · Secondary: "Call Us Today" → `tel:+18153498600`

Used on specialty apparel techniques and design services where no live e-commerce product grid exists.

**Custom Apparel:**
`/custom-apparel/brick-shirts` · `/custom-apparel/dye-sublimation` · `/custom-apparel/embroidery` · `/custom-apparel/flock-shirts` · `/custom-apparel/foil-shirts` · `/custom-apparel/glitter-shirts` · `/custom-apparel/glow-in-the-dark-shirts` · `/custom-apparel/holographic-shirts` · `/custom-apparel/puff-shirts` · `/custom-apparel/reflective-shirts` · `/custom-apparel/rhinestone-shirts` · `/custom-apparel/screen-printing` · `/custom-apparel/vinyl-shirts`

**Design Services:**
`/design-services/logo-design` · `/design-services/graphic-design` · `/design-services/online-designer` · `/design-services/design-catalogs`

> `pattern-shirts` and `picture-shirts` remain as pages without a mega menu entry — see `docs/sectional-review.md` Section 12B.

#### A4 — Unique / Special Variants

| Page | Primary Text | Primary Href | Secondary Text | Secondary Href | Notes |
|---|---|---|---|---|---|
| `/` (Home) | Shop Now | `/shop` ⚠️ | Get a Free Quote | `/contact` | Default props — no overrides passed |
| `/custom-apparel/custom-shirts` | Browse All Techniques | `#shirt-types` | Call Us Today | `tel:+18153498600` | In-page anchor |
| `/top5pct-merchandise` | Shop Now | `#all-products` | Contact Us | `/contact` | Secondary goes to contact, not phone ⚠️ |
| `/about` | Get a Free Quote | `/contact` | Call Us Today | `tel:+18153498600` | — |
| `/portfolio` | Get a Free Quote | `/contact` | Call Us Today | `tel:+18153498600` | — |
| `/stores` | Get a Free Quote | `/contact` | Call Us Today | `tel:+18153498600` | — |
| `/contact` | Call Us Now | `tel:+18153498600` | Get Directions | `https://maps.google.com` | Unique — call + map |
| `/company` | Get a Free Quote | `/contact` | Call Us Today | `tel:+18153498600` | — |
| `/company/resources` | Contact Us | `/contact` | Call Us Today | `tel:+18153498600` | — |
| `/collection` (template) | Get a Free Quote | `/contact` | Call Us Today | `tel:+18153498600` | Dynamic Lunar collection template |

---

### B. Section CTA — Get a Free Quote strip

**Component:** `sections.cta-free-quote`
**Background:** Warm gradient (sunburst accents)
**Headline:** "Need help with a custom project?"
**Subtext:** "Get a free, no-obligation quote from our team. Veteran-owned, locally trusted."
**Button:** "Get a Free Quote" → `/contact` (blue/white style)

**Present on all of the following pages:**

| Group | Pages |
|---|---|
| Home | `/` |
| Custom Apparel | `/custom-apparel` · all sub-pages |
| Signs | `/signs` · all sub-pages |
| Vehicle Graphics | `/vehicle-graphics` · all sub-pages |
| Stickers | `/stickers` · all sub-pages |
| Promotional Items | `/promotional-items` · all sub-pages |
| Design Services | `/design-services` · all sub-pages |
| Merchandise | `/top5pct-merchandise` |
| About Us | `/about` · `/portfolio` · `/stores` · `/contact` · `/company` · `/company/resources` |
| Templates | `/collection` · `/product` |
| Demo | `/demo` |

**NOT present on:** `/cart` · `/checkout` · `/order-confirmation` (Lunar Livewire) · `/page-management` (admin) · `/demo-premium`

---

### C. Section CTA — Ready to Get Started

**Component:** `sections.cta-ready-to-get-started`
**Background:** Dark charcoal with ambient glow
**Eyebrow:** "Let's Build Something Great"
**Headline:** "Ready to Get Started?"
**Body:** "Contact us today for a free quote on your custom project. Veteran-owned and proudly serving Joliet, IL and the surrounding area."
**Button 1 (primary):** "Get a Free Quote" → `/contact` (gold gradient)
**Button 2 (secondary):** "Call (815) 349-8600" → `tel:+18153498600` (outline gold)

**Present on:** Same page set as §B above (all content pages, excludes Lunar/admin pages).

---

### D. Section CTA — Design Your Own strip

**Component:** `sections.cta-design-your-own`
**Background:** Warm gradient (sunburst accents) — identical styling to `cta-free-quote`
**Headline:** "Have a design in mind?"
**Subtext:** "Use our free online tool to create your custom product in minutes."
**Button:** "Start Designing" → `/design-services/online-designer` (charcoal/gold style)

**Present on:** `/` (Home) · `/demo`

---

### E. Slide-In Banner

**Component:** `ui.card-banner-slide-in`
**Behavior:** Full-width image, animates in from left or right on scroll. On hover: image darkens, title text appears in gold.
**Action:** Entire image is a clickable link.

**All 50 content pages have exactly 2 slide-in banners. Every single instance links to `/contact`.**

| Group | Pages |
|---|---|
| Custom Apparel CLP | `/custom-apparel` (direction: left, right) |
| Custom Apparel sub-pages | `/custom-apparel/dtf-transfers` thru `/custom-apparel/reflective-shirts` (all 16 sub-pages, 2× each) |
| Signs CLP | `/signs` |
| Signs sub-pages | All 11 signs sub-pages |
| Vehicle Graphics CLP | `/vehicle-graphics` |
| Vehicle Graphics sub-pages | `/automobile-graphics` · `/vehicle-magnets` · `/dot-decals` |
| Stickers CLP | `/stickers` |
| Stickers sub-pages | `/standard-stickers` · `/custom-shaped-stickers` |
| Promotional Items CLP | `/promotional-items` |
| Promotional Items sub-pages | All 6 promo sub-pages |
| Design Services CLP | `/design-services` |
| Design Services sub-pages | All 4 design services sub-pages |
| Merchandise | `/top5pct-merchandise` |

**Every slide-in href is `/contact`.** The title prop is display-only (hover text). The `direction` alternates left/right per the convention in `docs/sectional-review.md`.

---

### F. Video Banner CTA

**Component:** `sections.video-banner`
**Content:** YouTube embed + CTA below
**Props:** `videoId`, `heading`, `label`, `subheading`, `ctaText` (default: `'Get a Free Quote'`), `ctaHref` (default: `'/contact'`)
**Button:** When `ctaHref` is `/contact` (the default), dispatches `open-contact-modal`. Other values navigate normally.

**Present on:** `/custom-apparel/custom-shirts` only (currently).

> **Planned:** Extend to all non-checkout content pages, placed between `cta-free-quote` and `cta-ready-to-get-started`. Same YouTube video ID throughout; `heading`, `label`, and `subheading` will be customized per page. See Remaining TODOs.

---

### G. Map Section Phone Link

**Component:** `sections.map-section`
**Action:** Inline phone number `tel:+18153498600` styled as a sunburst link

**Present on:** Same page set as §B and §C (all content pages, excludes Lunar/admin).

---

### H. Home-Exclusive Inline CTAs

These CTAs live inside sections that are only rendered on the Home page (`/`).

| Section Component | Button Text | Destination | Notes |
|---|---|---|---|
| `sections.our-services` | View All Products | `/top5pct-merchandise` | Text-link style at bottom of services grid |
| `sections.design-it-yourself` | Start Designing | `/design-services` | Blue/white button |

---

## 3. Pages With No CTAs

These pages have no CTA components from the standard section library.

| URL | Type | Reason |
|---|---|---|
| `/cart` | Lunar Livewire | Entire page is `@livewire('cart.cart-page')` — all actions are Livewire-driven |
| `/checkout` | Lunar Livewire | Entire page is `@livewire('cart.checkout-page')` |
| `/order-confirmation` | Lunar Livewire | Entire page is `@livewire('cart.order-confirmation')` |
| `/page-management` | Admin | Internal tool — no customer-facing CTAs |
| `/demo-premium` | Demo | Does not include standard CTA sections |

---

## 4. Decorative Banners — No CTA

These components are purely visual color-band dividers. No link, no action. Listed for completeness.

| Component | Height | Color | Used As |
|---|---|---|---|
| `ui.banner-thin-charcoal` | thin | Charcoal | Section divider |
| `ui.banner-thin-sunburst` | thin | Sunburst gold | Section divider |
| `ui.banner-thin-linen` | thin | Linen dark | Section divider |
| `ui.banner-thin-azure` | thin | Azure blue | Section divider |
| `ui.banner-medium-sunburst` | `h-16` | Sunburst gold | Primary mid-page accent — appears on nearly every content page |
| `ui.banner-medium-linen` | `h-8` | Linen dark | Section divider |
| `ui.banner-medium-charcoal` | `h-8` | Charcoal | Section divider |
| `ui.banner-medium-azure` | `h-8` | Azure blue | Section divider |

---

## 5. Unused Flexible Banner Components

These components are built and available but not currently embedded on any live production page. They support optional CTA props.

| Component | CTA Props Available | Notes |
|---|---|---|
| `ui.banner-full-bleed-image` | `href` (optional) — entire image becomes a link | Single full-width image, can be linked or static |
| `ui.banner-full-bleed-2-image` | `ctaText` + `ctaHref` — inline text link overlay on left panel | Two-panel split image with optional overlay CTA |
| `ui.banner-full-bleed-video` | `href` (optional) — entire video panel becomes a link | Full-width autoplay video banner |
| `ui.banner-full-bleed-2-video` | `ctaText` + `ctaHref` — inline text link overlay on left panel | Two-panel split video with optional overlay CTA |

---

## 6. Issues & Inconsistencies

### ~~Issue 1 — Placeholder Phone Number (Critical)~~ ✅ FIXED (2026-04-06)

**Affected components:** `sections.cta-ready-to-get-started` · `sections.map-section`
Updated from placeholder `(815) 555-1234` to real number `(815) 349-8600` → `tel:+18153498600`. Now consistent with all hero secondary buttons site-wide.

---

### ~~Issue 2 — `cta-design-your-own` Points to Old URL~~ ✅ FIXED (2026-04-06)

**Component:** `sections.cta-design-your-own`
Updated to `/design-services/online-designer`.

---

### ~~Issue 3 — `sections.design-it-yourself` (Home) Points to Old URL~~ ✅ FIXED (2026-04-06)

**Component:** `sections.design-it-yourself` (home section)
Updated to `/design-services`.

---

### ~~Issue 4 — Home Hero "Shop Now" → `/shop` Route May Not Exist~~ ✅ FIXED (2026-04-06)

**Component:** `sections.category-hero` (default props)
Default `primaryButtonHref` updated from `/shop` to `/top5pct-merchandise`.

> ✅ Confirmed 2026-04-06: full codebase scan found zero remaining `/shop` href references.

---

### ~~Issue 6 — `video-banner` CTA is Hardcoded~~ ✅ FIXED (2026-04-06)

**Component:** `sections.video-banner`
Added `ctaText` (default: `'Get a Free Quote'`) and `ctaHref` (default: `'/contact'`) props. Existing usages are unaffected by the defaults.

---

### Issue 7 — `review-banner` Testimonials Are Hardcoded Placeholders

**Component:** `sections.review-banner`
**Current reviewers:** Maria R. (Business Owner), James T. (Restaurant Owner), David P. (Contractor)

These are generic placeholder names, not from `docs/top5pct_reviews.csv`. The component renders the same three testimonials on every page it appears on. This is a separate concern from the per-page `ui.banner-testimonial` instances which are page-specific and sourced from real reviews.

---

### ~~Issue 8 — All `/contact` CTAs Navigate Away Instead of Opening a Modal~~ ✅ FIXED (2026-04-06)

**Problem:** Every "Get a Free Quote" button and every slide-in banner linked to `/contact`, navigating the user away from the page. The global contact FAB (`x-ui.contact-modal`) already had an inline quote form — it was never being triggered by site CTAs.

**Solution:** A single `open-contact-modal` window event connects all CTAs to the existing FAB modal. Six component-level changes — no page files were modified.

#### What changed (component level only)

| Component | Change |
|---|---|
| `ui.contact-modal` | Added `@open-contact-modal.window="openModal()"` listener to its Alpine `x-data` root div |
| `sections.cta-free-quote` | "Get a Free Quote" button — removed `href="/contact"`, now dispatches `open-contact-modal` |
| `sections.cta-ready-to-get-started` | "Get a Free Quote" button — same treatment; "Call (815) 349-8600" is unchanged |
| `ui.card-banner-slide-in` | When `href="/contact"` is passed, renders as `<button>` dispatching `open-contact-modal` instead of `<a href>`. All other `href` values navigate normally |
| `sections.category-hero` | When `primaryButtonHref` or `secondaryButtonHref` is `/contact`, renders a dispatching `<button>` instead of an `<a>`. All other hrefs navigate normally |
| `sections.video-banner` | When `ctaHref` is `/contact` (the default), CTA button dispatches `open-contact-modal`. Other `ctaHref` values navigate normally |

#### Coverage

| CTA Type | Pages affected | How covered |
|---|---|---|
| Slide-in banners (`card-banner-slide-in`) | All 50 content pages (100 instances) | Component-level — `href="/contact"` auto-detected |
| "Get a Free Quote" strip (`cta-free-quote`) | All content pages | Component-level |
| "Ready to Get Started" CTA | All content pages | Component-level |
| Hero "Get a Free Quote" primary button (A3 group) | 17 specialty apparel & design services pages | Component-level — `primaryButtonHref="/contact"` auto-detected |
| Hero secondary default (`secondaryButtonHref="/contact"`) | Any page that doesn't override the secondary | Component-level — auto-detected |
| Video banner CTA (`video-banner`) | `/custom-apparel/custom-shirts` | Component-level |

#### Not changed (intentional)

| Item | Reason |
|---|---|
| `/contact` page itself | Still exists and reachable by direct URL or nav |
| `demo.blade.php` inline body text links | Developer demo page — not customer-facing |
| `demo.blade.php` charcoal-gold button | Demo showcase of button styles — intentional |
| `map-section` phone link | Phone only — no change needed |
| Issue 5 (`top5pct-merchandise` secondary → `/contact`) | Still open — see Issue 5 |

---

### ~~Issue 5 — `top5pct-merchandise` Secondary Button Is Contact, Not Phone~~ ⏳ PENDING FIX

**Page:** `/top5pct-merchandise`
**Current:** Secondary button — "Contact Us" → `/contact` (now triggers modal via Issue 8 fix)
**Target:** "Call Us Today" → `tel:+18153498600` (matches every other content page)

> **Decision made 2026-04-06:** Change secondary button text to "Call Us Today" and point it to the phone number. This requires passing `secondaryButtonText="Call Us Today"` and `secondaryButtonHref="tel:+18153498600"` to the `category-hero` on `/top5pct-merchandise`. Implementation is part of the next code pass.

---

## Remaining TODOs

Items confirmed for implementation, not yet executed. Ordered roughly by effort (smallest first).

---

### TODO-1 — Fix Issue 5: `top5pct-merchandise` Secondary Hero Button

**File:** `resources/views/pages/top5pct-merchandise.blade.php`
**Change:** Pass `secondaryButtonText="Call Us Today"` and `secondaryButtonHref="tel:+18153498600"` to `x-sections.category-hero`.

---

### TODO-2 — Global Smooth Scrolling

**File:** `resources/css/app.css`
**Change:** Add `html { scroll-behavior: smooth; }` globally. Ensures all in-page anchor navigation (A1/A2 hero buttons, Get Directions, any `#section` link) scrolls smoothly instead of jumping.

---

### TODO-3 — New Component: `ui.banner-get-directions`

A thin standalone banner/button component that smooth-scrolls to `#map-section` on the current page. Dispatches a scroll event rather than navigating away — keeps user on page.

**Props:** `label` (optional display text, default: `'View Our Location'`)
**Action:** `onclick` → `document.getElementById('map-section')?.scrollIntoView({ behavior: 'smooth' })`
**Placement:** Demo page only initially. Add to any content page alongside the map-section as needed.

> Note: `map-section` must have `id="map-section"` on its root element for this to resolve. Verify before placing.

---

### TODO-4 — Video Banner on All Non-Checkout Pages

**Component:** `sections.video-banner`
**Placement rule:** Between `x-sections.cta-free-quote` and `x-sections.cta-ready-to-get-started` on all 64 non-checkout content pages.
**Video ID:** Same YouTube ID sitewide for now — will be updated to page-specific videos later.
**Per-page props:** `heading`, `label`, and `subheading` customized per page; `ctaText` and `ctaHref` use defaults.

> After this is implemented, the §F inventory entry above should be updated to list all affected pages.

---

### TODO-5 — Verify A1/A2 Anchor Targets Exist

**Type:** Spot-check / verification only.
The CLP primary buttons (A1) use in-page anchors (`#apparel-categories`, `#sign-categories`, etc.). Sub-page "Shop Now" buttons (A2) use `#all-products`. These scroll silently if the anchor is missing. Confirm that each target `id=` exists on the page before the sectionalization pass populates those sections.

---

### TODO-6 — Issue 7: Real Testimonials in `review-banner`

**Component:** `sections.review-banner`
**Change:** Replace 3 hardcoded placeholder testimonials with real reviews sourced from `docs/top5pct_reviews.csv` (95 entries). Options: hardcode 3 real ones, or make the component accept a prop array.

> Deferred — implement separately after sectionalization pass is complete.

---

*End of CTA Review — `docs/cta-review.md`*
