# Branding Requirements — Stop & Go Airport Shuttle Service Inc.

> **Read this file before making any UI, layout, copy, or color change.**
> The authoritative design reference is `docs/stopngo-style-guide.html`.
> Tailwind tokens live in `tailwind.config.js`. CSS vars live in `resources/css/app.css`.

---

## 1. Brand Identity

| Field | Value |
|---|---|
| Legal name | Stop & Go Airport Shuttle Service Inc. |
| Short name (nav, logo) | Stop & Go Limo |
| Tagline | Premium Limousine & Airport Shuttle Service |
| Service area | New Lenox, Naperville, Joliet, Chicago and all of Illinois |
| Primary address | 400 E Lincoln Hwy Suite 101A, New Lenox, IL 60451 |
| Secondary address | 3420 Lacrosse Ln Ste 116, Naperville, IL |
| Tertiary address | 5700 Caton Farm Rd, Plainfield, IL 60586 |
| Primary phone | (815) 585-6922 |
| Secondary phone | (708) 315-4445 |
| Email | vincent@newlenoxlimoservice.com |
| In business since | 2009 |
| Market position | Premium, luxury ground transportation |
| Primary airports served | O'Hare (ORD), Midway (MDW) |

**Brand name:** "Stop & Go Limo" — always with an ampersand, never "and." Never written in all caps. Short form used in logo, nav, footer, and social.

---

## 2. Brand Personality

The Twilight Luxe brand communicates **premium, understated luxury.** Think first-class cabin, not luxury billboard. Every visual and copy decision should feel:

- **Confident** — not boastful. Let quality speak.
- **Warm** — champagne over cold silver. The gold is approachable.
- **Precise** — clean typography, no visual clutter.
- **Trustworthy** — professional drivers, 24/7 availability, transparent pricing.

**Midnight Navy (#15152C, hsl(240, 35%, 13%)):** Deep, authoritative, and refined. Signals trust and premium quality.
**Champagne Gold (#DCB57E):** Warm, understated luxury. Not flashy — the kind of gold that belongs in first class.

**Em dash handling in copy:** Em dashes (—) in headings and subheadings should be avoided. Preferred replacements, in order:
1. **Rephrase as a "we/our" or action statement** that shows the customer how the company helps them. Example: "Aurora Party Bus — Turns Any Night into an Epic Celebration" becomes "Our Aurora Party Bus Will Turn Any Night into an Epic Celebration."
2. **Use a comma** when a direct rephrase is awkward. Example: "Book Fast — Spots Fill Quickly" becomes "Book Fast, Spots Fill Quickly."

This applies to all headings, subheadings, and section labels. Em dashes in body copy prose are permitted where a natural pause is needed and no simpler rephrase exists.

---

## 3. Absolute Rules (Never Break)

1. **No `text-transform: uppercase` anywhere on the site** — except the approved navigation exceptions in §8.2. Mixed case and title case are allowed everywhere. Never use all-uppercase text.
2. **Sharp corners on all containers, cards, and inputs.** No `rounded` classes on sections, cards, or form inputs. Buttons use the `radius` prop on `x-ui.button` — the default is `soft` (10px). Pass `radius="square"` for a fully square button.
3. **Never use double hyphens (--).** Use a comma or em dash instead.
4. **7th-grade reading level** for all body copy. Short sentences. Plain words.
5. **No icons** — with one approved exception. Do not use Heroicons or any other SVG icon library. **Font Awesome 6 is the sole approved icon library** and may only be used for functional location and contact indicators (map pin, phone). Do not use Font Awesome for decorative or illustrative purposes.
6. **No color outside the palette.** If a color is not in the Twilight Luxe 5+White palette or the three semantic colors, it is not allowed.
7. **Poppins for headings, Montserrat for body.** Never mix in a third typeface.
8. **No decorative vertical accent lines.** Decorative vertical accent lines are not part of the Stop & Go design system and must never be used.
9. **Unitless line-height only.** All `line-height` values must be unitless numbers (e.g. `1.5`) — never `em`, `rem`, or `px`. Unitless line-height avoids CSS inheritance issues.

---

## 4. Typography

### Fonts

| Role | Family | Tailwind class | Weights used |
|---|---|---|---|
| Headings, buttons, nav, labels | Poppins | `font-head` | 300, 400, 500, 600, 700, 800 |
| Body, captions, paragraphs, UI | Montserrat | `font-body` | 300, 400, 500, 600, 700 |

Both are loaded via Google Fonts. The import is in `resources/css/app.css`.

### Type Scale

| Level | Size | Weight | Font | Letter-spacing | Line-height | Use |
|---|---|---|---|---|---|---|
| H1 | `var(--font-size-h1)` — `clamp(2rem, 6vw, 3.75rem)` (max 60px) | 400 base + 700 bold `<strong>` | Poppins via `var(--font-head)` | `var(--letter-spacing-h1)` (-1px) | 1.2 | Page hero titles |
| H2 | `var(--font-size-h2)` — `clamp(1.75rem, 5vw, 2.5rem)` (max 40px) | 400 base + 700 bold `<strong>` | Poppins via `var(--font-head)` | `var(--letter-spacing-h2)` (0.5px) | 1.2 | Section headings |
| H3 | `var(--font-size-h3)` — 1.875rem (30px) | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 | Subsection headings |
| H4 | 24px / 1.5rem | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 | Card titles, champagne accent color |
| H5 | 20px / 1.25rem | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 | Minor headings |
| Lead | `clamp(1rem, 2.5vw, 1.3125rem)` (max 21px) | Regular 400 | Poppins via `var(--font-head)` | -0.5px | 1.5 | Hero subtitle, intro paragraph |
| Body | 20px / 1.25rem | Regular 400 | Montserrat via `var(--font-body)` | none | 1.5 | General content |
| Caption | 14px / 0.875rem | Regular 400 | Montserrat via `var(--font-body)` | none | — | Image captions, meta |
| Label / badge | 12px / 0.75rem | SemiBold 600 | Poppins via `var(--font-head)` | none | — | Section labels, tracking-widest tags |

> **Font reference rule:** Always use the CSS token (`var(--font-head)`, `var(--font-body)`) — never a literal font-family string like `'Poppins', sans-serif`. Tokens are white-label-safe and one-line to change.
>
> **Weight split pattern:** H1 and H2 use a two-weight split. The base sentence text is Regular 400; the key word or phrase gets a `<strong>` tag which renders at Bold 700. This creates visual emphasis without changing the heading font size.

### Card Typography Override

Cards are compact containers. Card-specific text uses a smaller body size to avoid crowding.

| Role | Size | Weight | Font | Color |
|---|---|---|---|---|
| Card H3 title | 25px / 1.5625rem | Regular 400 | Montserrat via `var(--font-body)` | `var(--champagne)` or `var(--cloud-light)` on dark; `var(--navy)` on light |
| Card body text | 17px / 1.0625rem | Regular 400 | Montserrat via `var(--font-body)` | `var(--cloud-light)` on dark; `var(--slate)` on light |

### Line Heights

All values are unitless — see Absolute Rule §3.9.

- H1, H2: 1.2
- H3, H4, H5: 1.3
- Lead: 1.5
- Body: 1.5
- Buttons: 1.0

### Link Styles

| Class / Pattern | Use |
|---|---|
| `.link-champagne` | Inline link in body copy — Poppins semibold, champagne text, champagne underline, hover lightens |
| Inline style (bodyHtml) | When a link lives inside a `bodyHtml` prop string, use: `style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"` |
| `.link-nav-stopngo` | Nav link: cloud text, champagne on hover |
| `x-ui.button-text-link` | Arrow-link CTA, e.g. "View Rates &rarr;" |

> **Champagne is the only approved inline prose link color** — on any background (navy, cloud-light, white, or image overlay). Never use navy, azure, or any other color for an inline `<a>` in body copy.

---

## 5. Color System

### 5.1 — The 5+White Palette

| Name | Tailwind token | Default hex | Default HSL | Light hex | Dark hex |
|---|---|---|---|---|---|
| Midnight Navy | `navy` | `#15152C` | hsl(240, 35%, 13%) | `#252235` | `#0F1223` |
| Champagne Gold | `champagne` | `#DCB57E` | hsl(35, 57%, 68%) | `#E9C79E` | `#C49A5E` |
| Cloud Grey | `cloud` | `#E8E9EC` | hsl(225, 10%, 92%) | `#F4F5F7` | `#D4D6DB` |
| Slate | `slate` | `#69727D` | hsl(213, 9%, 45%) | `#8B939C` | `#4A5159` |
| Azure | `azure` | `#5A7EC8` | hsl(219, 48%, 57%) | `#94ACDB` | `#385A9F` |
| White | `white` / `--white` | `#FFFFFF` | hsl(0, 0%, 100%) | — | — |

> **Note on Tailwind vs CSS var naming:** Slate uses `slate` in both Tailwind (`text-slate`, `bg-slate`) and CSS (`var(--slate)` / `var(--slate-light)` / `var(--slate-dark)`). The legacy Tailwind alias `muted` is being retired during the CSS cleanup phase. See `docs/rebranding.md`.
>
> **Azure usage rule:** Azure must not appear on section backgrounds, cards, or decorative surfaces, and is never used for buttons or inline prose links. It is reserved for focus rings and informational text highlights only.
>
> **Branded CSS colors requirement:** Every color used anywhere on the site must reference a named CSS custom property from the Twilight Luxe token set (e.g. `var(--navy)`, `var(--champagne)`, `var(--azure)`). Raw hex values, `rgb()`, `hsl()`, or any other unlabeled color literals are not permitted in component files or stylesheets.

### 5.2 — Semantic Colors (reservations and booking forms only)

| Name | Tailwind token | Hex |
|---|---|---|
| Success | `stopngo-success` | `#2E9E6B` |
| Warning | `stopngo-warning` | `#E0A800` |
| Error | `stopngo-error` | `#C0392B` |

### 5.3 — Color Hierarchy (priority order)

1. **Midnight Navy** — dominant background, headers, footer
2. **Champagne Gold** — primary accent, all CTAs and interactive hover states
3. **White** — cards, containers, text on navy
4. **Cloud Grey** — light-mode section alternation and breathing room
5. **Slate** — secondary text, captions, metadata
6. **Azure** — focus states and informational highlights only. Never for prose links, buttons, or section backgrounds.

### 5.4 — Brand Gradients

| Token | Direction | Use |
|---|---|---|
| `bg-grad-midnight-hero` | 135deg Navy to Navy-light | Primary hero and section BGs |
| `bg-grad-deep-twilight` | 135deg Navy-dark to Navy to Navy-light | Retained for decorative uses. **No longer used for photo overlays** — see §11 for the overlay standard. |
| `bg-grad-champagne-shine` | 135deg Champagne to Champagne-light | CTA buttons, highlight chips |
| `bg-grad-navy-to-gold` | 135deg Navy to Navy-light to Champagne | Feature moments, used sparingly |
| `bg-grad-champagne-rule` | 90deg transparent fading champagne | Decorative horizontal dividers |

---

## 6. Component System

### 6.1 — Buttons

All buttons use Poppins (`font-head`) and tracking-wide. Corner radius is controlled by the `radius` prop on `x-ui.button` — default is `soft` (10px). Options: `square` (0px), `soft` (10px), `rounded` (20px), `pill` (9999px). Size is controlled by the `size` prop — options: `sm`, `md` (default), `lg`, `xl`.

**CTA buttons in section content columns** must be center-aligned (`text-align: center` on the wrapper div) and always use `radius="soft"` (10px). Never use `radius="square"` for section CTAs. Example: `<x-ui.button-navy-gold href="..." size="md" radius="soft">`.

| Component | Use case | Text color | Background |
|---|---|---|---|
| `x-ui.button-champagne-gradient` | Primary CTA (Book a Ride) | Navy | Champagne gradient |
| `x-ui.button-champagne-solid` | Primary CTA on light surface | Navy | Champagne solid |
| `x-ui.button-champagne` | Rich primary CTA, deeper champagne | Navy | Champagne-dark, hover champagne |
| `x-ui.button-navy-gold` | Outlined dark container | Champagne | Navy-dark + champagne border |
| `x-ui.button-outline-champagne` | Secondary on dark surface | Champagne | Transparent + champagne border |
| `x-ui.button-white-navy` | Secondary on dark, high contrast | Navy | White |
| `x-ui.button-outline-light` | Ghost on dark / over image | White | Transparent + white/35 border |
| `x-ui.button-text-link` | Inline arrow-link | Champagne | None |

### 6.2 — Banners

Separator lines between nav zones and section boundaries.

| Component | Weight | Color |
|---|---|---|
| `x-ui.banner-thin-champagne` | 3px | Champagne |
| `x-ui.banner-thin-navy` | 3px | Navy + white/10 border |
| `x-ui.banner-thin-cloud` | 3px | Cloud Grey |
| `x-ui.banner-medium-champagne` | 8px | Champagne |
| `x-ui.banner-medium-navy` | 8px | Navy + white/10 border |
| `x-ui.banner-medium-cloud` | 8px | Cloud Grey |

**Standard nav wrap pattern:**
```
x-ui.banner-thin-champagne
Notification Bar (bg-navy — Midnight Navy primary)
x-ui.banner-thin-champagne
x-ui.banner-thin-navy
Main Navigation (bg-navy — Midnight Navy primary)
x-ui.banner-thin-navy
x-ui.banner-thin-champagne
```

### 6.3 — Cards

Cards use sharp corners, navy-light backgrounds on dark sections, white backgrounds on light sections. Border: `border border-white/8` on dark, `border border-cloud-dark` on light.

- **White card background:** use `background: var(--white)` — never `#ffffff` raw hex.
- **Card image shadow:** use `box-shadow: var(--shadow-card)` on card images that sit on a dark background. Both tokens are defined in `resources/css/app.css` `:root`.

---

## 7. Layout and Spacing

- **Grid only — no Flexbox.** All multi-column and directional layouts must use CSS Grid (`grid`, `grid-cols-*`, `lg:grid-cols-*`). Do not use `flex`, `flex-col`, `flex-row`, or any Flexbox utility for page/section layout. Flexbox is only permitted inside atomic UI components (e.g. a button's internal icon alignment) where a single-line inline arrangement is unavoidable.
- **Container max-width:** Always `max-w-7xl mx-auto`. Never write the literal `1280px` in component files — use the Tailwind token only.
- **Section padding (non-hero):** 100px top and bottom. Use `style="padding: 100px 0"` or Tailwind arbitrary value `py-[6.25rem]`. Responsive pattern: `py-12 lg:py-[6.25rem]`.
- **Hero min-height:** `min-height: 100svh` — full viewport height. No explicit padding on hero sections; content centers internally.
- **Container padding:** `px-6` default, `px-4` on mobile
- **Standard section backgrounds:** Midnight Navy (`bg-navy`, `bg-navy-light`, `bg-navy-dark`) or Cloud Grey (`bg-cloud-light`). No other background colors on page sections.
- **Section alternation:** Midnight Navy sections alternate with Cloud Grey sections where light-mode breathing room is needed.
- **Max file length:** 800 lines per Blade file. Split into sub-components if longer.
- **Content-column image spacing:** When an image grid appears between two text blocks inside a content column, use `margin-top: 2rem; margin-bottom: 2rem` (32px each). This is the standard text-to-image gap for left-aligned body content sections (e.g. `x-sections.our-key-offers`).
- **Demo page rule:** Never add `x-sections.*` Blade components to `resources/views/pages/demo.blade.php`. The demo page is for `x-ui.*` (atomic UI) components only. Section components belong on their respective page files or the `/demo/live-components` page.
- **Section `id` is required.** Every `<section>` element in an `x-sections.*` component MUST carry `id="component-name"` (matching the component's Blade filename slug) and `style="... scroll-margin-top: 80px;"`. Without the `id`, the Developer Dashboard (`/page-management`) scanner cannot detect or register the component. Example: `<section id="banner-image" style="background: var(--cloud-light); scroll-margin-top: 80px;">`.

---

## 8. Navigation

### 8.1 — Structure

- **Top notification bar:** `bg-navy` (Midnight Navy, primary brand bg) — champagne phone number, champagne CTA, muted location text
- **Nav bar:** `bg-navy` (Midnight Navy, primary brand bg) — Poppins, cloud-grey links, champagne on hover, 3px champagne underline for active/hover
- **Active state:** `text-champagne border-b-[3px] border-champagne`
- **Mobile hamburger:** Champagne icon on navy background

### 8.2 — Mega Menu CSS System

The mega menu is a **pure CSS / hover-state system** — no JavaScript. All styles live in `resources/css/app.css` scoped under the `.sg-nav` parent class.

**Scoping decision:** Instead of prefixing every class (`snglimo-dropdown`, `snglimo-flyout`, etc.), all inner classes are scoped via the `.sg-nav` parent in CSS. This avoids verbose class names in HTML while preventing conflicts with other components. **Do not use `.dropdown`, `.nav-link`, or `.flyout` bare — always inside `.sg-nav`.**

#### CSS Class Reference

| CSS class | Scope | What it does |
|---|---|---|
| `.sg-nav` | Root wrapper | `overflow:visible`, navy bg, 1px white/8 border |
| `.nav-notif` | Inside `.sg-nav` | Notification bar: flex space-between, navy-dark bg |
| `.n-phone` | Inside `.nav-notif` | Champagne phone number, Poppins semibold |
| `.n-book` | Inside `.nav-notif` | Champagne "Book Online," uppercase (approved exception) |
| `.nav-bar` | Inside `.sg-nav` | Main nav row, flex, navy bg, `position:relative` |
| `.nav-logo` | Inside `.nav-bar` | Poppins bold, white text, champagne `<span>` for "Limo" |
| `.nav-item` | Inside `.nav-bar` | `position:relative` — each nav link wrapper |
| `.nav-link` | Inside `.nav-item` | Poppins 600, 13.5px, **uppercase (approved exception)**, cloud color, 3px transparent border-bottom, 22px vertical padding |
| `.nav-link:hover` / `.nav-item:hover .nav-link` | — | Champagne color + champagne 3px bottom rule |
| `.nav-link.active` | — | Same as hover |
| `.nav-link .caret` | — | Small ▾ 9px, slate-light, rotates 180 on hover |
| `.dropdown` | Inside `.nav-item` | Absolute panel: navy-light bg, 1px champagne/20 border, 3px champagne top, shadow, opacity/visibility/translateY transition |
| `.dropdown a` | — | flex-column, 11px 22px padding, 3px transparent border-left |
| `.dropdown a .d-title` | — | Poppins 600, 14px, cloud |
| `.dropdown a .d-sub` | — | 12px, slate |
| `.dropdown a:hover` | — | Navy-dark bg, champagne left border, champagne d-title |
| `.dropdown-mega` | Modifier on `.dropdown` | 520px min-width, 2-column grid — used for Services |
| `.dropdown-areas` | Modifier on `.dropdown` | 560px min-width, 4-column grid — used for Service Areas |
| `.areas-head` | Inside `.dropdown-areas` | Full-width label, Poppins 600, uppercase (approved exception), champagne |
| `.has-flyout` | Inside `.dropdown-mega` | Wrapper for a menu item with a nested right-side panel |
| `.has-flyout > a` | — | flex-row (not column), for Party Bus + fcaret arrow |
| `.flyout` | Inside `.has-flyout` | Absolute panel: `top:-9px; left:100%`, 3px champagne left border |
| `.sg-nav-states` | Standalone (not inside `.sg-nav`) | 3-column grid showing Default / Hover / Active link states |
| `.sg-nav-state` | Inside `.sg-nav-states` | Individual state card, navy-light bg |
| `.sg-nav-hint` | Standalone | Small italic caption, slate text |

#### Dropdown Shapes

1. **Standard dropdown** — single column, min 260px. Used for: About, Special Events, Contact.
2. **Mega two-column** — `.dropdown.dropdown-mega`, 520px, 2-col grid. Used for Services (13 items + Party Bus flyout).
3. **Four-column areas grid** — `.dropdown.dropdown-areas`, 560px, 4-col. Used for Service Areas (22 cities).

#### Nested Party Bus Flyout

The Party Bus item inside the Services mega uses `.has-flyout`. Its `<a>` tag switches to `flex-direction:row` to accommodate the right-pointing `▶` caret. The `.flyout` panel opens to the right (`left:100%`) with a champagne left border.

#### Uppercase Exceptions (approved, navigation only)

Three places inside `.sg-nav` intentionally use `text-transform:uppercase`:
1. `.nav-link` — all top-level nav labels
2. `.n-book` — "Book Online" in the notification bar
3. `.areas-head` — city grid header label

These are the only approved uses of uppercase on the entire site.

### 8.3 — Nav Item Inventory

| Item | Dropdown type | Items |
|---|---|---|
| Welcome | None (active state) | — |
| About | Standard | About Us, Rates, Gallery |
| Booking | None | — |
| Services | Mega 2-col | Airport Shuttle, Wedding Limousine, Party Bus (+ flyout: Aurora, Naperville), Prom Party Bus, New Bus Rental, Coach Buses, Limousine Services, Corporate Car Service, Town Car Services, Chauffeurs, Special Event Limousine, Transportation Services, Grad Day Transportation |
| Special Events | Standard | Six Flags Party Bus, Golfing Party Bus, Concert Party Bus, Chicago Bears, Chicago Bulls, Chicago Blackhawks |
| Service Areas | 4-col areas grid | 22 cities (New Lenox, Naperville, Aurora, North Aurora, Plainfield, Joliet, Morris, Minooka, Channahon, Elwood, Romeoville, Lockport, Frankfort, Mokena, Orland Park, Manhattan, Homer Glen, Lemont, Monee, Bolingbrook, Oswego, Montgomery) |
| Contact | None | — |

---

## 9. Responsive Requirements

Every component must pass all three breakpoints:

| Breakpoint | Min width | Key layout change |
|---|---|---|
| Mobile | 0px | Single column, stacked nav, condensed typography |
| Tablet | `sm: 640px` | Two-column grids, partial nav |
| Desktop | `lg: 1024px` | Full nav, multi-column layouts |

**Rule:** Never use a bare width class like `w-96`. Always pair with `w-full sm:w-96`.

---

## 10. Voice and Tone

- **Reading level:** 7th grade. Short sentences. Active voice.
- **Tone:** Professional, warm, confident. Never boastful or discount-y.
- **Avoid:** "best," "cheapest," "luxury limo service in Illinois" (SEO bait phrases), "taxi," "cab," "rideshare," "Uber-like"
- **Prefer:** Specific, concrete copy. "On time to O'Hare or Midway, every time." over "reliable transportation."
- **Punctuation:** Commas over hyphens or double-dashes. No double hyphens.
- **Numbers:** Spell out one through nine, use numerals for 10+.
- **CTAs:** "Book a Ride," "Get a Quote," "Call Now," "Reserve 24/7." Plain, direct, action-first.

---

## 11. Imagery and Video

- Photography is dark-toned, moody, and aspirational: night skylines, vehicle interiors, airport drop-offs
- Overlay images with `var(--navy-dark)` at exactly **20% opacity** — `style="background: var(--navy-dark); opacity: 0.2;"` on an absolute-inset div over the photo. Do not use the gradient token for overlays.
- No stock photos with visible faces or generic clip art
- Vehicle photos: always clean, uncluttered backgrounds
- Image containers: sharp corners, no rounded edges
- Aspect ratios: hero images `16:9`, card images `4:3`, portrait `3:4`
- See `docs/image-video-control.md` for the full image/video policy

---

## 12. SEO and Structured Data

- Semantic HTML is required: one H1 per page, logical H2-H5 hierarchy, no skipped levels
- Every page needs JSON-LD structured data (LocalBusiness, Service, or BreadcrumbList)
- JSON-LD in Blade must use `@verbatim` for static blocks or `@@` escaping for dynamic values (Blade treats `@context`/`@type`/`@id` as directives)
- Meta: `title`, `description`, `og:title`, `og:description`, `og:image` on every page
- City-specific service area pages: target "[service] in [city], IL" intent
- Service area copy must reference New Lenox, Naperville, Joliet, Chicago and all of Illinois

---

## 13. File References

| Asset | Location |
|---|---|
| Full style guide (HTML) | `docs/stopngo-style-guide.html` |
| Blade component drop-ins | `docs/stopngo-twilght-luxe-blade/` |
| Tailwind tokens | `tailwind.config.js` (theme.extend) |
| CSS custom properties | `resources/css/app.css` (:root block) |
| Mega menu CSS | `resources/css/app.css` (bottom, `.sg-nav` scope) |
| Client config | `config/client.php` |
| Image/video policy | `docs/image-video-control.md` |
| Demo style guide page | `/demo` (route: `web.php`) |
| Button components | `resources/views/components/ui/button-*.blade.php` |
| Banner components | `resources/views/components/ui/banner-*.blade.php` |
| Rebrand audit and cleanup plan | `docs/rebranding.md` |

---

## 14. Champagne Rule (Underbar) Standards

### 14.1 — Two different champagne line elements (do not confuse them)

There are two distinct champagne line elements in the system. They are not interchangeable.

| Element | What it is | Width | Use |
|---|---|---|---|
| `x-ui.banner-thin-champagne` | A full-width Blade component | 100% of the viewport | Full-width section separator — between sections, above/below nav zones |
| Heading underbar `<div>` | An inline `<div>` inside a `width: fit-content` wrapper | `116%` of the heading text | Decorative accent below an H2 inside a section |

**Never use `x-ui.banner-thin-champagne` as a heading underbar.** It is full-width and belongs between sections, not inside them. Never use the heading underbar `<div>` as a section separator.

---

### 14.2 — When to use the heading underbar

Not all sections require a champagne underbar. CTA-style sections, compact contact label rows, and hero headings do not use one.

**Sections that use the standard underbar:** Travel in Style, Info Strip, Free Instant Quote, Areas We Serve, Why Choose Us, Airport Shuttle Service, Our Services, FAQ, Share Your Experience, Map/Social (social heading only).

**Sections that do not use it:** Category Hero, Service Locations, base-footer.

---

### 14.3 — Standard variant (most sections)

The rule must be proportional to the heading text width — never full-width, never a fixed `px` or `rem` value. Wrap both the `<h2>` and the rule `<div>` together inside a `width: fit-content` container. This is mandatory — without the wrapper, `width: 116%` resolves to 116% of the section width, not the heading width.

**Centered heading** — canonical reference: `x-sections.areas-we-serve`, `x-sections.share-your-experience`:
```html
<div style="width: fit-content; margin: 0 auto 2rem; text-align: center;">
    <h2>Heading <strong>Bold Part</strong></h2>
    <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
</div>
```

- `margin: 0 auto` centers the wrapper on the page.
- `margin-left: -8%` on the rule shifts it left by half the overflow (16% / 2 = 8%), keeping the bar visually centered under the heading.

**Left-aligned heading** — canonical reference: `x-sections.info-strip`, `x-sections.travel-in-style`:
```html
<div style="width: fit-content; margin-bottom: 2rem;">
    <h2>Heading <strong>Bold Part</strong></h2>
    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
</div>
```

- No `margin: 0 auto` — the wrapper naturally left-aligns.
- No `margin-left` offset — the 8% overhang sits entirely to the right of the heading start, creating a subtle outward extension.

---

### 14.4 — SM label-rule variant (contact column labels)

Used under short column labels in the Map/Social contact strip. No `fit-content` wrapper needed because the label text is short and the rule is intentionally narrow relative to the column.

```html
<div style="height: 3px; background: var(--champagne); width: 30%; margin-top: 0.5rem; margin-bottom: 1rem;"></div>
```

---

### 14.5 — Rules and never-do list (all variants)

**Always:**
- `height: 3px` — never 1px, 2px, or 4px.
- `background: var(--champagne)` — never a raw hex value.
- Standard variant: `width: 116%`, inside a `width: fit-content` wrapper that contains only the heading and the rule.
- SM label variant: `width: 30%`, `margin-top: 0.5rem`, no wrapper required.

**Never:**
- Never use `border-bottom` on the `<h2>` itself. The rule is always a separate `<div>` element below the heading.
- Never set the rule width to a fixed `rem` or `px` value (e.g., `width: 14rem`, `width: 200px`). Fixed values ignore the heading's actual rendered width and break at different viewport sizes.
- Never use `width: 100%` on the underbar — that is full-width, which is the banner component's job.
- Never place the rule `<div>` outside the `fit-content` wrapper in the standard variant — it must be a sibling of the `<h2>`, both children of the wrapper.
- Never use `x-ui.banner-thin-champagne` inside a section as a heading underbar.

---

## 15. Light-Background Section Standards

Light sections use `background: var(--cloud-light)`. The color rules are different from navy sections.

| Element | Navy section | Light section |
|---|---|---|
| Section background | `var(--navy)` | `var(--cloud-light)` |
| H2 base color | `var(--white)` | `var(--navy)` |
| H2 bold accent | `var(--champagne)` | `var(--champagne)` |
| Body text color | `var(--cloud)` | `var(--slate)` |
| Stat / H3 color | `var(--champagne)` | `var(--navy)` |
| CTA button | `x-ui.button-outline-champagne` | `x-ui.button-champagne-solid` |
| Image panel background | `var(--navy-dark)` | none (transparent) |

**Reference component:** `x-sections.travel-in-style` (supports both `background="navy"` and `background="cloud"` via prop).

---

## 16. Approved Design Exceptions

The following one-off exceptions are documented and approved. They must not be generalized to other components.

| Component | Exception | Rule overridden | Justification |
|---|---|---|---|
| `x-sections.our-story` | Entry title italic style (`font-style: italic`) | §4 type scale has no italic variant | Sourced from prod site design; storytelling context; `our-story` only |
| `x-sections.our-story` | `border-left: 8px solid var(--white)` on body `<p>` | §3.8 no decorative vertical accent lines | Functional blockquote-style content-grouping marker, not a decorative line; sourced from prod design |

---

## 17. Mandatory Section HTML Template

Every Blade section component must follow this exact three-layer structure. No exceptions unless documented in §16.

### 17.1 — The three layers

```
Layer 1: <section>          — full-width, carries background color and vertical padding
Layer 2: outer content rail — max-w-7xl mx-auto px-6, constrains content, never clips bg
Layer 3: inner content div  — w-full max-w-[size] mx-auto, centers the body text block
```

### 17.2 — Canonical HTML template

```html
<section style="background: var(--navy);" class="py-10 lg:py-16">

    {{-- Layer 2: outer content rail. Do NOT put background or border here. --}}
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne underbar (see §14 for full rules) --}}
        <div style="width: fit-content; margin-bottom: 2rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--cloud-light); line-height: 1.2; letter-spacing: 0.5px;">
                <strong style="font-weight: 700; color: var(--champagne);">Bold Part</strong> Regular Part
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Layer 3: inner content div. Centers the body block. Text is left-aligned inside. --}}
        <div class="w-full max-w-7xl mx-auto">
            <p class="font-body text-left" style="font-size: 1.25rem; font-weight: 400; color: var(--cloud-light); line-height: 1.5;">
                Body text here.
            </p>
        </div>

    </div>
</section>
```

### 17.3 — Layer rules

| Layer | Element | Required classes / styles | Never do |
|---|---|---|---|
| 1 — Section | `<section>` | Background color as inline `style`; vertical padding `py-10 lg:py-16` | Do not put `max-w-*` or `px-*` here — it clips the background |
| 2 — Outer rail | `<div>` | `max-w-7xl mx-auto px-6` | Do not put background color, border, or shadow here |
| 3 — Inner content | `<div>` | `w-full max-w-7xl mx-auto` (or narrower, e.g. `max-w-5xl`, per design) | Do not omit `w-full` (mobile safety rule); do not use bare `max-w-*` without `w-full` |

### 17.4 — Vertical padding scale

| Context | Class |
|---|---|
| Standard section | `py-10 lg:py-16` |
| Compact / callout section | `py-6 lg:py-10` |
| Hero or feature section | `py-16 lg:py-24` |

### 17.5 — Background color options

Use named CSS custom properties on Layer 1 only. Raw hex values are never permitted.

| Background | Inline style value |
|---|---|
| Navy (default) | `style="background: var(--navy);"` |
| Navy dark | `style="background: var(--navy-dark);"` |
| Light / cloud | `style="background: var(--cloud-light);"` |
| Transparent / none | No `style` attribute needed |

### 17.6 — Why the layers must stay separate

The outer `<section>` must be full-width at all times so that background colors fill edge-to-edge on any screen size. Merging Layer 1 and Layer 2 (putting `max-w-7xl` on the `<section>`) clips the background to 80rem wide, leaving visible gaps at the sides on large monitors. The two-div inner structure is not optional.

**Reference component:** `resources/views/components/sections/info-strip.blade.php`

---

## 18. Service Thin Rect Card (`x-ui.service-thin-rect-card`)

A full-width, dark navy rectangular link card used to list individual services. Sourced from the "Our Key Offers" sidebar on the prod site. Height is intentionally matched to the FAQ question bar so the two components can sit at the same visual weight.

### 18.1 — Props

| Prop | Type | Default | Purpose |
|---|---|---|---|
| `icon` | string (raw HTML) | `''` | Inline SVG string rendered unescaped. Must be 20×20, `fill="currentColor"`. |
| `label` | string | `'Service'` | Visible service name. Rendered with underline. |
| `href` | string | `'#'` | Link destination. |
| `target` | string | `'_self'` | Use `'_blank'` for external links. |

### 18.2 — Height standard

The card uses `padding: 1rem 1.25rem` — the same value as the FAQ question bar (`x-sections.faq`). This keeps both components visually consistent when used in the same layout column.

### 18.3 — Icon format

Icons must be inline SVG strings with `fill="currentColor"` so the CSS `color: var(--champagne)` on the icon wrapper drives the fill color. Do not use `stroke`-only icons or `<img>` tags. Target size is 20×20 (`width="20" height="20"`). Pass the full `<svg>...</svg>` string as the `:icon` prop.

```blade
{{-- Correct: inline SVG, fill="currentColor", 20x20 --}}
<x-ui.service-thin-rect-card
    :icon='<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21 16v-2l-8-5V3.5..."/></svg>'
    label="Airport Shuttle Service"
    href="/services/airport-shuttle"
/>
```

### 18.4 — Hover behavior

On hover: background shifts to `var(--navy-light)` and a 3px inset champagne left border appears (`box-shadow: inset 3px 0 0 var(--champagne)`). Using `box-shadow` instead of `border-left` prevents layout shift.

### 18.5 — Stacking cards

Stack multiple cards with `margin-bottom: 3px` between items — matching the FAQ item gap. Wrap the stack in a container div; do not add margin to the component itself.

```blade
<div>
    <div style="margin-bottom: 3px;">
        <x-ui.service-thin-rect-card icon="..." label="Airport Shuttle Service" href="/services/airport-shuttle" />
    </div>
    <div style="margin-bottom: 3px;">
        <x-ui.service-thin-rect-card icon="..." label="Chauffeur" href="/services/chauffeur" />
    </div>
    <x-ui.service-thin-rect-card icon="..." label="Coach Buses" href="/services/coach-buses" />
</div>
```

### 18.6 — Never do

- Never pass a stroke-only SVG — the icon will be invisible against the navy background.
- Never add `border-left` directly to the card — use the built-in hover box-shadow instead.
- Never change the padding values — they are locked to the FAQ height standard.
- Never use azure for the icon color — icon fill is always `var(--champagne)` via `currentColor`.

**Reference component:** `resources/views/components/ui/service-thin-rect-card.blade.php`
**Used in section:** `x-sections.our-key-offers` (in progress)
