# Re-sectioning Plan — Stop & Go Limo

> This document tracks the redesign of shared section components to match the production
> site at newlenoxlimoservice.com, followed by the assembly of standardized blueprint
> page layouts for all public-facing pages.

---

## Overview

The current section components were ported from the Top 5 Pct print shop codebase and
partially rebranded. The layout and structure of several key sections do not match
the production Elementor site. This plan documents what each section should become,
what has changed, and the order of work.

---

## Phase 1 — Section Component Updates

### 1.1 — `x-sections.category-hero` ✅ Done

**Production reference:** newlenoxlimoservice.com (Home, About Us, Our Services heroes)

**What production does:**
- Full-bleed background image, object-cover, dark overlay (~40% navy-dark)
- Content center-aligned, no left-aligned text block
- No pre-heading H5 label ("New Lenox · Naperville · Chicago")
- H1: two-line, white, mixed weight — regular word(s) + bold word(s) side by side
- Subtitle: single line below H1, slightly smaller, white, lighter weight
- Optional body paragraph (rendered only when non-empty)
- Single button: `x-ui.button-outline-light` (transparent bg, white border, white text)
- No champagne accent span on H1
- No champagne underline bar below H1
- No secondary button
- Thin vertical champagne bar ("spacer") above H1 on prod — intentionally omitted from our version

**Changes made to component:**
- Removed: `preHeading` prop, `headingAccent` prop, `compactButtons` prop,
  `secondaryButtonText` prop, `secondaryButtonHref` prop
- Added: `subtitle` prop (line below H1), `imagePosition` prop
- Renamed: `primaryButtonText` → `buttonText`, `primaryButtonHref` → `buttonHref`
- Layout: flipped from left-aligned `max-w-2xl` block to center-aligned full-width block
- Overlay: dropped from `bg-navy-dark/70` to `bg-navy-dark/40`
- Button: changed from champagne-solid to `x-ui.button-outline-light`
- H1: removed champagne span and underline bar; heading is fully white, two lines
  where `heading` is the regular-weight line and `headingBold` is the bold line
- Body paragraph: wrapped in `@if($description)` — only renders when provided

**Final props:**

| Prop | Type | Default |
|---|---|---|
| `heading` | string | "Elevate Your Travel Experience" |
| `headingBold` | string | "With Luxury and Comfort" |
| `subtitle` | string | "Discover the joy of seamless journeys" |
| `description` | string | `''` |
| `buttonText` | string | "Book a Ride" |
| `buttonHref` | string | `'/contact'` |
| `buttonRadius` | string | `'soft'` |
| `image` | string | `/images/heroes/hero-home.jpg` |
| `imagePosition` | string | `'center center'` |

**Hero images (downloaded from prod):**

| Page | File | Source URL |
|---|---|---|
| Home | `public/images/heroes/hero-home.jpg` | `.../karl-kohler-ZMQ7DSpv39g-unsplash-scaled-1.jpg` — dark Audi on mountain road |
| About Us | `public/images/heroes/hero-about.jpg` | `.../Chauffeurs.jpg` — chauffeur at vehicle |
| Our Services | `public/images/heroes/hero-services.jpg` | `.../Walking-To-Vehicle.jpg` — walking to vehicle |

---

### 1.2 — Remaining sections (planned, not yet started)

These sections will be reviewed against the production site before being rebuilt.
Order follows the typical page layout from top to bottom.

| Section | Status | Production reference |
|---|---|---|
| `x-sections.home-page-hero` | To review | newlenoxlimoservice.com home — currently a split layout, may replace with category-hero |
| `x-sections.about-preview` | To review | newlenoxlimoservice.com/about-us |
| `x-sections.why-choose-us` | To review | newlenoxlimoservice.com/about-us |
| `x-sections.review-banner` | To review | newlenoxlimoservice.com (testimonials section) |
| `x-sections.cta-ready-to-get-started` | To review | All pages |
| `x-sections.map-section` | To review | newlenoxlimoservice.com/contact |
| `x-sections.faq` | To review | newlenoxlimoservice.com (FAQ accordion) |
| `x-sections.city-localized-content` | To review | Service area city pages |

---

## Phase 2 — Blueprint Page Layouts

Once sections are finalized, each public page gets a blueprint that locks in:
- Which sections appear, in order
- Which props are passed to each
- Which background image is used in the hero
- What H1 / subtitle / description says

### Pages to blueprint

| Page | Route | Status |
|---|---|---|
| Home | `/` | ✅ Hero done |
| About Us | `/about-us` (TBD) | Pending |
| Our Services | `/our-services` | ✅ Hero done |
| Airport Shuttle | `/airport-shuttle` (TBD) | Pending |
| Fleet / Vehicles | `/fleet` (TBD) | Pending |
| Contact / Booking | `/contact` | Pending |
| Service Areas (index) | `/service-areas` | Pending |
| Service Area (city) | `/service-areas/{slug}` | Pending |

---

## Design Rules (apply to every section)

These rules are non-negotiable and apply to all sections built or updated in this phase.
Full rules are in `docs/branding-requirements.md`.

1. All colors via CSS custom properties only — no raw hex, no `rgb()`, no `hsl()`
2. No all-caps text anywhere (navigation uppercase exceptions are pre-approved in branding docs)
3. No icons — no Heroicons, no Font Awesome, no SVG icon libraries
4. Section backgrounds: Midnight Navy (`bg-navy`, `bg-navy-dark`, `bg-navy-light`) or
   Cloud Grey (`bg-cloud-light`) only — no other section background colors
5. All components fully responsive: mobile → tablet → desktop with Tailwind `sm:` / `lg:` prefixes
6. 7th-grade reading level copy throughout
7. No double hyphens — use a comma or em dash instead
8. Max 800 lines per Blade file
9. Azure is never used for buttons — only inline links, focus rings, info highlights
