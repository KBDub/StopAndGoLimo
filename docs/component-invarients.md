# Component Variants Reference

This document catalogs every layout variant and metadata variant identifier used across all `sections.*` and `ui.*` Blade components. It is the source of truth for prop naming conventions and the standardization roadmap.

---

## Definitions

- **Layout variant** — a prop that changes the visual structure, color scheme, or spatial arrangement of a component. These are tracked in the Page Management registry under "Layout Variants."
- **Metadata variant** — a prop that carries page-specific content (text, images, links, data arrays). These are tracked under "Meta Variants."
- **Override** — any prop value passed to a component on a page that differs from the component's `@props` default.

---

## Layout Variant Names

### Color & Theme (Inversion) — Standardization Target

The same concept — "flip this component to its opposite color scheme" — is currently expressed four different ways. All four should converge on `inverted`.

| Current prop | Component(s) | Default bg | What it does |
|---|---|---|---|
| `inverted` | `sections.banner-image`, `sections.company-highlight`, `sections.travel-in-style` | navy | Flips to white background |
| `invertBg` | `sections.three-steps` | navy | Same as `inverted` — rename target |
| `whiteBackground` | `sections.three-steps` | navy | White bg on a navy-default component — rename target |
| `navy` | `sections.image-slide-in`, `sections.text-block-slide-in`, `ui.accordion` | white | Forces navy on a white-default component — inverse of `inverted`, rename target |

**Standardization rule:** `inverted` always means "flip from the component's default background." A navy-default component with `:inverted="true"` renders white. A white-default component with `:inverted="true"` renders navy. The prop name is identical regardless of which direction the flip goes.

Additional color/theme props that are not strict inversions:

| Prop | Component(s) | Notes |
|---|---|---|
| `light` | `sections.areas-we-serve`, `sections.points-of-interest` | Light/white variant — candidate for `inverted` consolidation |
| `background` | `sections.areas-we-serve`, `sections.image-slide-in`, `sections.text-block-slide-in`, `ui.banner-thin-cloud` | Raw background override (accepts a CSS value) |
| `soft` | `sections.category-hero`, `ui.dropdown`, `ui.accordion` | Softer visual style (lighter borders, muted tones) |

---

### Image Layout

| Prop | Component(s) | Notes |
|---|---|---|
| `imageLeft` | `sections.banner-image`, `sections.travel-in-style`, `ui.banner-full-bleed-2-image` | Image on the left side |
| `imageRight` | `ui.banner-full-bleed-2-image` | Image on the right side |
| `imagePosition` | `sections.category-hero`, `sections.who-are-we` | Named position slot (e.g. `left`, `right`, `top`) |
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

### Phase 1 — Inversion prop unification

All "flip the color scheme" props should be renamed to `inverted`.

| Component | Old prop | New prop |
|---|---|---|
| `sections.three-steps` | `invertBg` | `inverted` |
| `sections.three-steps` | `whiteBackground` | `inverted` |
| `sections.image-slide-in` | `navy` | `inverted` |
| `sections.text-block-slide-in` | `navy` | `inverted` |
| `ui.accordion` | `navy` | `inverted` |
| `sections.areas-we-serve` | `light` | `inverted` |
| `sections.points-of-interest` | `light` | `inverted` |

### Phase 2 — Page Management registry

Once prop names are standardized, update `$layoutPropNames` in `resources/views/pages/page-management.blade.php` to replace `invertBg`, `whiteBackground`, `navy`, and `light` with `inverted` and remove the old names.

---

## Page Management Integration

The scanner in `app/Actions/ScanPageComponents.php` reads each component's `@props([...])` block via `readComponentDefaults()`. Any prop whose page-usage value differs from its default is recorded as an override.

The `$layoutPropNames` array in `page-management.blade.php` controls which overrides surface as **Layout Variants** vs **Meta Variants** in the registry cards.

Current `$layoutPropNames` list:
`inverted`, `imageLeft`, `imageRight`, `background`, `columns`, `rightVariant`, `slideIn`, `showInfoBox`, `imagePosition`, `imageAspect`, `headingTwoLines`, `buttonRadius`, `imageObjectPosition`, `imageObjectFit`, `size`, `variant`, `layout`, `direction`, `as`, `radius`, `whiteBackground`

Missing from current list (should be added):
`invertBg`, `navy`, `light`, `soft`, `center`, `splitRatio`, `showSingleButton`, `rounded`
