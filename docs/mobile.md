# Mobile Navigation — Breakpoints and Behavior

**File:** `resources/views/components/nav/navbar.blade.php`
**Styles:** `resources/css/app.css` — `.sg-nav` scope (lines ~467–665)

---

## Breakpoint Summary

| Viewport | Layout | What happens |
|---|---|---|
| **1280px and above** | Full desktop | Nav links 15px, CTA 20px font / 52px horizontal padding |
| **950px – 1279px** | Full desktop, compressed | All items visible; font and padding shrink fluidly via `clamp()` |
| **Below 950px** | Mobile drawer | Nav links hidden, logo + centered CTA + hamburger row |

---

## Desktop Zone (≥ 950px)

The nav bar is a 3-column CSS grid: `auto 1fr auto`

- **Col 1 (auto):** Logo — `min-width: max-content` prevents the grid from ever squeezing it
- **Col 2 (1fr):** Nav links — flex row, centered
- **Col 3 (auto):** Get In Touch CTA button

The mobile-only CTA and hamburger button are hidden via:

```css
@media (min-width: 950px) {
    .sg-nav .nav-mobile-cta { display: none; }
    .sg-nav .nav-hamburger  { display: none; }
}
```

---

## Fluid Compression (950px – 1280px)

No hard breakpoints fire in this range. `clamp()` functions in the base rules handle all sizing continuously.

### Get In Touch button

```css
font-size: clamp(13px, calc(2.121vw - 7.152px), 20px);
padding:   7px clamp(16px, calc(10.909vw - 87.635px), 52px);
word-spacing: clamp(2px, calc(0.909vw - 6.636px), 5px);
```

- Full size (20px / 52px padding) at 1280px and above
- Minimum size (13px / 16px padding) at 950px
- Interpolates linearly between those two points

### Nav link items

```css
font-size: clamp(11px, calc(1.212vw - 0.515px), 15px);
padding:   16px clamp(6px, calc(1.212vw - 5.515px), 10px);
```

- Full size (15px / 10px padding) at 1280px and above
- Minimum size (11px / 6px padding) at 950px

---

## Mobile Zone (< 950px)

```css
@media (max-width: 949px) {
    .sg-nav .nav-links    { display: none; }
    .sg-nav .nav-cta-btn  { display: none; }
    .sg-nav .nav-logo-img { height: 48px; }
}
```

The nav bar collapses to a 3-column row:

| Col 1 | Col 2 | Col 3 |
|---|---|---|
| Logo (48px, left) | Get In Touch (centered, outlined button) | Hamburger icon (right) |

The centered CTA (`.nav-mobile-cta`) and hamburger (`.nav-hamburger`) are mobile-only elements — hidden on desktop via the `≥ 950px` rule above.

---

## Logo Sizing

Controlled entirely in CSS — no Tailwind height classes on the `<img>`.

```css
.sg-nav .nav-logo-img { height: 64px; width: auto; display: block; }

@media (max-width: 949px) {
    .sg-nav .nav-logo-img { height: 48px; }
}
```

- **64px** at all widths 950px and above
- **48px** below 950px (mobile only)
- No `transition` — size change is instant, no animation

The logo anchor (`.nav-logo`) has `min-width: max-content` to prevent the CSS grid's `auto` column from squeezing the logo as the viewport narrows.

---

## Mobile Drawer

Toggled by Alpine.js on the `<header>` element:

```html
<header class="sg-nav sticky top-0 z-50" x-data="{ open: false }">
```

The drawer (`div.nav-drawer`) uses `x-show="open"` with enter/leave transitions. It is hidden on desktop via `display: none` (Tailwind `lg:hidden` equivalent handled by the `≥ 950px` media query).

### Drawer content structure

```
Welcome
About
  About Us / Rates / Gallery
Reservations
Services (13 items)
Special Events (6 items)
Service Areas
[Get In Touch — full-width CTA]
```

### Key CSS classes

| Class | Purpose |
|---|---|
| `.nav-drawer` | Outer container, `background: var(--navy-dark)`, scrollable |
| `.nav-drawer-inner` | Flex column, padded |
| `.nav-drawer-link` | Top-level standalone link (uppercase, cloud color) |
| `.nav-drawer-group` | Section container with bottom border |
| `.nav-drawer-heading` | Section label (champagne, small caps) |
| `.nav-drawer-sub` | Indented sub-link with left-border hover accent |
| `.nav-drawer-cta` | Full-width champagne button at bottom |

---

## Gotchas

- **Do not use Tailwind responsive prefixes** (`lg:hidden`, `md:flex`, etc.) on any `.sg-nav` element. The `.sg-nav .element { display: X }` base rule has specificity `(0,2,0)` which overrides Tailwind's single-class rules `(0,1,0)`. All show/hide logic must live in CSS `@media` blocks scoped under `.sg-nav`.
- **Do not add `transition` to the logo image.** A `transition-all` on the `<img>` animates the height change at the 950px breakpoint, causing a visible shrink/grow stutter during resize.
- **`min-width: max-content` on `.nav-logo` is required.** Without it, the CSS grid `auto` column squeezes the logo anchor below its natural width as the viewport narrows past ~1270px, making the logo appear to shrink before the 950px mobile breakpoint.
