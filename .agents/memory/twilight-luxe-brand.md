---
name: Twilight Luxe brand system
description: Stop & Go Limo color tokens, Tailwind keys, font classes, and component naming for the Twilight Luxe rebrand.
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

## Banner components

Thin (3px): banner-thin-champagne, banner-thin-navy, banner-thin-signal, banner-thin-cloud
Medium (8px): banner-medium-champagne, banner-medium-navy, banner-medium-signal, banner-medium-cloud

## Demo page

`/demo` is a standalone dark-navy style guide page. Not extending a layout. Loads fonts from Google Fonts directly in the head. Uses `font-body bg-navy text-cloud` on body.

**Why:** The demo page is the brand reference used by the dev team. It must use only Stop & Go components, not Top 5 Pct ones.

**How to apply:** When adding new components, add a section to /demo with the standard info block (component name, file path, usage example including aspect ratio notes).
