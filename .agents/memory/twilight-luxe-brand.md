---
name: Twilight Luxe brand system
description: Stop & Go Limo brand tokens, font classes, section color rules, about-us patterns, and demo page architecture.
---

## Color token names (Tailwind extend.colors)

| Brand name | Tailwind key | Shades available |
|---|---|---|
| Midnight Navy | `navy` | light / DEFAULT / dark |
| Champagne Gold | `champagne` | light / DEFAULT / dark |
| Signal Gold | `signal` | light / DEFAULT / dark |
| Cloud Grey | `cloud` | light / DEFAULT / dark |
| Slate / Muted | `muted` | light / DEFAULT / dark |

Semantic: `stopngo-success` (#2E9E6B), `stopngo-warning` (#E0A800), `stopngo-error` (#C0392B).

## Font classes

- `font-head` = Poppins (headings, buttons, nav)
- `font-body` = Montserrat (body copy, captions)
- `font-sans` = Titillium Web (kept for legacy Top 5 Pct pages — do not remove)

## Gradient tokens (backgroundImage)

- `bg-grad-midnight-hero` — navy 135deg
- `bg-grad-deep-twilight` — deep navy 135deg
- `bg-grad-champagne-shine` — champagne 135deg (primary CTA bg)
- `bg-grad-navy-to-gold` — navy to champagne blend
- `bg-grad-champagne-rule` — horizontal fading champagne divider

## Shadow tokens

- `shadow-champagne`, `shadow-champagne-lg`, `shadow-champagne-xl`
- `shadow-signal`

## Button components (resources/views/components/ui/button-*.blade.php)

Primary: champagne-gradient, champagne-solid, signal, navy-gold
Secondary: outline-champagne, white-navy, outline-light, text-champagne

**Why:** Use `x-ui.button-outline-champagne` on navy sections, `x-ui.button-champagne-solid` on light (cloud-light) sections.

## Banner components

Thin (3px): banner-thin-champagne, banner-thin-navy, banner-thin-signal, banner-thin-cloud
Medium (8px): banner-medium-champagne, banner-medium-navy, banner-medium-signal, banner-medium-cloud

## Section Color Rules

| Element | Navy section | Light (cloud-light) section |
|---|---|---|
| Section background | `var(--navy)` | `var(--cloud-light)` |
| H2 base color | `var(--white)` | `var(--navy)` |
| H2 bold accent | `var(--champagne)` | `var(--champagne)` |
| Body text color | `var(--cloud)` | `var(--slate)` |
| Stat / H3 color | `var(--champagne)` | `var(--navy)` |

## H2 Bold Word Pattern (canonical — all sections)

```blade
<h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); line-height: 1.2; letter-spacing: 0.5px; color: var(--white);">
    <span style="font-weight: 400;">{{ $heading }} </span><span style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</span>
</h2>
```
On light (cloud-light) background, replace `color: var(--white)` on `<h2>` with `color: var(--navy)`.

## Champagne Underbar — left-aligned

```blade
<div style="width: fit-content; margin-bottom: 2rem;">
    {{-- H2 here --}}
    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
</div>
```

## Canonical Navy Section Baseline: `travel-in-style`

All new navy sections must match `x-sections.travel-in-style` for all shared properties. Compare against it before finalizing any navy section.

## About-Us Page Sections (in order)

1. `x-sections.category-hero` — hero, image `/images/heroes/stopngolimo-about-us.jpg`
2. `x-sections.our-story` — navy timeline section
3. `x-sections.who-are-we` — light two-column image+text section

## `x-sections.our-story` Approved Exceptions

- Entry titles: `font-style: italic`, `font-weight: 400`, `color: var(--white)` — italic is a one-off exception
- Entry body: `border-left: 8px solid var(--white)` on `<p>` only — title sits above/outside the border
- Entries grid: `padding-left: 3rem` to indent relative to section heading

## `x-sections.who-are-we` Notes

- Light cloud-light background, two-column grid, `gap-10` (no lg override)
- Image: `aspect-[1/1]` — square (matches ribbon-cutting photo 1024x1020)
- Photo at `public/images/sections/who-are-we.jpg`
- Stat line: `font-head`, 1.875rem, weight 600, `var(--navy)`, line-height 1.3, `mb-6`

## Demo page

`/demo` is a standalone dark-navy style guide page. Not extending a layout. Loads fonts from Google Fonts directly in the head. Uses `font-body bg-navy text-cloud` on body.

**Why:** The demo page is the brand reference used by the dev team. It must use only Stop & Go components, not Top 5 Pct ones.

**How to apply:** When adding new components, add a section to /demo with the standard info block (component name, file path, usage example including aspect ratio notes).
