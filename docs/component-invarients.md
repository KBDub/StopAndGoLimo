# Component Variants Reference

This document catalogs every layout variant and metadata variant identifier used across all `sections.*` and `ui.*` Blade components. It is the source of truth for prop naming conventions and the standardization roadmap.

---

## Definitions

- **Layout variant** — a prop that changes the visual structure, color scheme, or spatial arrangement of a component. These are tracked in the Page Management registry under "Layout Variants."
- **Metadata variant** — a prop that carries page-specific content (text, images, links, data arrays). These are tracked under "Meta Variants."
- **Override** — any prop value passed to a component on a page that differs from the component's `@props` default.

---

## Layout Variant Names

### Color & Theme (Inversion)

**Canonical name: `inverted`**

`inverted` always means "flip from the component's default background." Direction does not matter — the prop name is the same regardless of whether the default is navy or white.

| Status | Prop | Component(s) | Default bg | Action |
|---|---|---|---|---|
| canonical | `inverted` | `sections.banner-image`, `sections.company-highlight`, `sections.travel-in-style` | navy | No change |
| non-canonical | `invertBg` | `sections.three-steps` | navy | Rename to `inverted` |
| non-canonical | `whiteBackground` | `sections.three-steps` | navy | Rename to `inverted` |
| non-canonical | `navy` | `sections.image-slide-in`, `sections.text-block-slide-in`, `ui.accordion` | white | Rename to `inverted` |

Out of scope for now (not strict inversions — separate decisions required):

| Prop | Component(s) | Notes |
|---|---|---|
| `light` | `sections.areas-we-serve`, `sections.points-of-interest` | Partial-style variant, not a strict flip |
| `background` | `sections.areas-we-serve`, `sections.image-slide-in`, `sections.text-block-slide-in`, `ui.banner-thin-cloud` | Raw CSS value override |
| `soft` | `sections.category-hero`, `ui.dropdown`, `ui.accordion` | Softer style, not a color flip |

---

### Image Layout

**Canonical name: `imagePosition`** — accepts a named value (`'left'`, `'right'`, `'top'`, etc.). Boolean props `imageLeft` and `imageRight` are non-canonical shorthands that must be replaced.

| Status | Prop | Component(s) | Action |
|---|---|---|---|
| canonical | `imagePosition` | `sections.category-hero`, `sections.who-are-we` | No change |
| non-canonical | `imageLeft` | `sections.banner-image`, `sections.travel-in-style`, `ui.banner-full-bleed-2-image` | Replace with `:imagePosition="'left'"` |
| non-canonical | `imageRight` | `ui.banner-full-bleed-2-image` | Replace with `:imagePosition="'right'"` |

Already canonical — no changes needed:

| Prop | Component(s) | Notes |
|---|---|---|
| `imageAspect` | `sections.image-slide-in`, `sections.party-limo-image`, `sections.banner-image`, `sections.free-instant-quote` | Aspect ratio of the image container |
| `imageObjectPosition` | `sections.party-limo-image`, `sections.banner-image`, `sections.free-instant-quote` | CSS `object-position` value for cropping |
| `center` | `sections.party-limo-image`, `sections.banner-image`, `sections.free-instant-quote` | Centers the image or content block |
| `splitRatio` | `ui.banner-full-bleed-2-image`, `ui.banner-full-bleed-2-video` | Left/right column width ratio |

---

### Structure & Visibility Toggles

| Prop | Component(s) | Notes |
|---|---|---|
| `columns` | `sections.points-of-interest`, `sections.company-highlight` | Number of columns in the grid |
| `rightVariant` | `sections.free-instant-quote` | Swaps the right-side content layout |
| `slideIn` | `sections.travel-in-style` | Enables the slide-in animation variant |
| `headingTwoLines` | `sections.category-hero` | Forces heading onto two lines |
| `buttonRadius` | `sections.category-hero` | Rounded vs sharp CTA button |
| `showInfoBox` | `sections.free-instant-quote` | Shows/hides the info box panel |
| `showSingleButton` | `sections.share-your-experience` | Collapses two CTAs to a single button |

---

### UI Component Variants (Buttons & Controls)

| Prop | Component(s) | Notes |
|---|---|---|
| `variant` | `ui.button`, `ui.dropdown`, `ui.accordion`, `sections.banner-image` | Named style variant |
| `size` | All `ui.button-*` variants | `sm`, `md`, `lg`, etc. |
| `radius` | All `ui.button-*` variants | Border radius level |
| `rounded` | All `ui.button-*` variants | Boolean shorthand for full rounding |
| `as` | `ui.rect-box` | Renders as a different HTML element |

---

## Metadata Variant Names

These props carry page-specific content. The same component used on 10 pages may have 10 different `heading` values — each is a metadata variant override.

### Text Content

| Prop | Component(s) |
|---|---|
| `heading` | `sections.image-slide-in`, `sections.text-block-slide-in`, `sections.category-hero`, `sections.areas-we-serve`, `sections.info-strip`, and others |
| `headingBold` | Most `sections.*` components that accept a heading |
| `headingPrefix` | `sections.image-slide-in`, `sections.info-strip`, `sections.text-block-slide-in`, `sections.category-hero` |
| `headingTail` | `sections.airport-shuttle-service`, `sections.party-limo-image`, `sections.points-of-interest` |
| `headingBold2` | `sections.points-of-interest` |
| `headingPlain` | `sections.our-key-offers` |
| `subheading` | `sections.cta-free-quote-banner`, `sections.company-highlight`, `ui.banner-full-bleed-2-image/video` |
| `subtitle` | `sections.category-hero`, `sections.travel-in-style`, `ui.banner-full-bleed-2-image/video` |
| `subtitleIn` | `sections.category-hero` |
| `body` | `sections.image-slide-in`, `sections.text-block-slide-in`, `sections.info-strip`, and others |
| `bodyHtml` | `sections.travel-in-style`, `sections.free-instant-quote` |
| `note` | `sections.travel-in-style` |
| `description` | `sections.category-hero` |

### Media

| Prop | Component(s) |
|---|---|
| `image` | `sections.category-hero`, `sections.image-slide-in`, `sections.our-mission`, `sections.who-are-we`, and others |
| `imageAlt` | Companion to `image` in most components that accept an image |
| `video` | `ui.banner-full-bleed-video` |
| `poster` | `ui.banner-full-bleed-video` |

### Calls to Action

| Prop | Component(s) |
|---|---|
| `buttonText` | `sections.category-hero`, `sections.cta-free-quote-banner`, `sections.image-slide-in`, `sections.text-block-slide-in` |
| `buttonHref` | Same as `buttonText` companions |
| `ctaText` / `ctaHref` | `ui.banner-full-bleed-2-image/video`, `sections.our-key-offers` |
| `ctaLabel` | `sections.our-key-offers` |
| `singleButtonText` / `singleButtonHref` | `sections.share-your-experience` |

### Structured Data Arrays

| Prop | Component(s) | Shape |
|---|---|---|
| `steps` | `sections.three-steps` | Array of `{number, title, body}` |
| `items` | `sections.four-box-info`, `sections.company-highlight`, `ui.accordion` | Varies by component |
| `faqs` | `sections.faq`, `ui.faq` | Array of `{question, answer}` |
| `areas` | `sections.areas-we-serve` | Array of area objects |
| `locations` | `sections.service-locations`, `sections.share-your-experience` | Array of location objects |
| `features` | `sections.why-choose-us` | Array of feature objects |
| `services` | `sections.our-services` | Array of service objects |
| `points` | `sections.points-of-interest` | Array of POI objects |
| `images` | `ui.carousel-product`, `ui.carousel-rotating-images` | Array of image paths |

### Business / Contact Data

| Prop | Component(s) |
|---|---|
| `businessName` | `sections.base-footer`, `sections.map-contact-section` |
| `address` / `addressLine2` | `sections.map-contact-section`, `sections.service-locations`, `sections.share-your-experience` |
| `phone` / `phoneRaw` / `phoneAlt` / `phoneAltRaw` | `sections.map-contact-section`, `sections.four-box-info`, `sections.service-locations` |
| `email` | `sections.four-box-info`, `sections.map-contact-section` |
| `hours` | `sections.map-contact-section` |
| `mapSrc` | `sections.map-contact-section` |

---

## Standardization Roadmap

The work happens **inside the component Blade files themselves**. Each non-canonical prop is renamed to its canonical form in the component's `@props` block and template logic. Every page that passes the old prop name is updated at the same time. The Page Management scanner then automatically sees the canonical name — no aliases or extra entries are added to the PM page.

**Rule: no non-canonical prop name is ever added to `$layoutPropNames`.**

---

### Phase 1 — Inversion: rename to `inverted`

Each component below has its internal prop renamed and all page call-sites updated.

| Component | Remove | Replace with | Page call-sites to update |
|---|---|---|---|
| `sections.three-steps` | `invertBg` | `inverted` | `party-bus-aurora`, `party-bus-rental-naperville` |
| `sections.three-steps` | `whiteBackground` | `inverted` | `party-bus-rental-chicago` |
| `sections.image-slide-in` | `navy` | `inverted` | All pages using `:navy="true"` |
| `sections.text-block-slide-in` | `navy` | `inverted` | All pages using `:navy="true"` |
| `ui.accordion` | `navy` | `inverted` | All pages using `:navy="true"` |

After this phase, `$layoutPropNames` entries `whiteBackground` and `imageLeft`/`imageRight` are removed and replaced by the already-present `inverted` and `imagePosition`.

---

### Phase 2 — Image layout: rename to `imagePosition`

Each component's `imageLeft` / `imageRight` boolean is replaced by `imagePosition` accepting `'left'` or `'right'`. Internal template logic is updated to branch on the value instead of the boolean.

| Component | Remove | Replace with | Default |
|---|---|---|---|
| `sections.banner-image` | `imageLeft` (bool) | `imagePosition` (string) | `'right'` |
| `sections.travel-in-style` | `imageLeft` (bool) | `imagePosition` (string) | `'right'` |
| `ui.banner-full-bleed-2-image` | `imageLeft` (bool), `imageRight` (bool) | `imagePosition` (string) | `'left'` |

Page call-sites: anywhere `:imageLeft="true"` or `:imageRight="true"` is passed — update to `:imagePosition="'left'"` or `:imagePosition="'right'"`.

---

### Phase 3 — Structure & Visibility Toggles

All toggle names are already canonical. No renames needed. Verify call-sites are consistent.

| Canonical prop | Component(s) | Status |
|---|---|---|
| `columns` | `sections.points-of-interest`, `sections.company-highlight` | Canonical |
| `rightVariant` | `sections.free-instant-quote` | Canonical |
| `slideIn` | `sections.travel-in-style` | Canonical |
| `headingTwoLines` | `sections.category-hero` | Canonical |
| `buttonRadius` | `sections.category-hero` | Canonical |
| `showInfoBox` | `sections.free-instant-quote` | Canonical |
| `showSingleButton` | `sections.share-your-experience` | Canonical |

---

## Page Management Integration

The scanner in `app/Actions/ScanPageComponents.php` reads each component's `@props([...])` block via `readComponentDefaults()`. Any prop whose page-usage value differs from its default is recorded as an override.

The `$layoutPropNames` array in `page-management.blade.php` controls which overrides surface as **Layout Variants** vs **Meta Variants** in the registry cards. It holds only canonical names. As non-canonical props are eliminated from components, their old names are removed from this list — never supplemented with aliases.

Current `$layoutPropNames` list (canonical names only):
`inverted`, `imageLeft`, `imageRight`, `background`, `columns`, `rightVariant`, `slideIn`, `showInfoBox`, `imagePosition`, `imageAspect`, `headingTwoLines`, `buttonRadius`, `imageObjectPosition`, `imageObjectFit`, `size`, `variant`, `layout`, `direction`, `as`, `radius`, `whiteBackground`

After Phase 1 + Phase 2 complete, remove from this list: `imageLeft`, `imageRight`, `whiteBackground`
(They will no longer exist as prop names in any component.)
