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
| `sections.cta-ready-to-get-started` | Near bottom | 2 buttons — quote + phone | `/contact` · `tel:+18155551234` ⚠️ | All content pages except Lunar/admin |
| `sections.cta-design-your-own` | Mid-page | 1 button — "Start Designing" | `/design-it-yourself/online-designer` ⚠️ | Home, Demo only |
| `ui.card-banner-slide-in` | Inline (×2 per content page) | Full-width clickable image | `/contact` | All 50 content pages |
| `sections.video-banner` | Inline | 1 button — "Get a Free Quote" | `/contact` | `/custom-apparel/custom-shirts` only |
| `sections.map-section` | Bottom of every content page | Phone number link | `tel:+18155551234` ⚠️ | All content pages except Lunar/admin |
| `sections.our-services` | Home mid-section | 1 text-link — "View All Products" | `/top5pct-merchandise` | Home only |
| `sections.design-it-yourself` | Home mid-section | 1 button — (label TBD) | `/design-it-yourself` ⚠️ | Home only |
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
**Button 2 (secondary):** "Call (815) 555-1234" → `tel:+18155551234` ⚠️ (outline gold)

> ⚠️ **Phone number is a placeholder** — `(815) 555-1234` is not a real number. Must be replaced with the actual business number. See Section 6.

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
**Button:** "Get a Free Quote" → `/contact` (gold gradient)

**Present on:** `/custom-apparel/custom-shirts` only.

> This component will be extended to more pages once it is confirmed to be generalized (currently it was `sections.shirt-types-video` and was refactored). The CTA is hardcoded inside the component — not configurable as a prop.

---

### G. Map Section Phone Link

**Component:** `sections.map-section`
**Action:** Inline phone number `tel:+18155551234` ⚠️ styled as a sunburst link

> ⚠️ **Placeholder number** — same issue as §C. Must be updated to the real business phone number.

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

### Issue 1 — Placeholder Phone Number (Critical)

**Affected components:** `sections.cta-ready-to-get-started` · `sections.map-section`
**Current value:** `(815) 555-1234` → `tel:+18155551234`
**Hero secondary button (most pages):** `tel:+18153498600`

These are two **different** numbers. One of them is the real business number and one is a placeholder. The `tel:+18153498600` in the hero buttons is likely the real number since it was manually set per-page. The `+18155551234` in the shared components is very likely the placeholder.

**Action required:** Confirm the real business phone number and update both `cta-ready-to-get-started` and `map-section` to use it consistently.

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

---

### Issue 5 — `top5pct-merchandise` Secondary Button Is Contact, Not Phone

**Page:** `/top5pct-merchandise`
**Secondary button:** "Contact Us" → `/contact`
**Standard pattern:** "Call Us Today" → `tel:+18153498600`

All other pages use the phone number for their hero secondary button. This page sends users to the contact form instead. Decide: keep as intentional, or align to the phone standard.

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

*End of CTA Review — `docs/cta-review.md`*
