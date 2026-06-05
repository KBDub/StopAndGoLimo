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
| Location | New Lenox & Naperville, IL |
| Phone | (815) 585-6922 |
| In business since | 2009 |
| Market position | Premium, luxury ground transportation |
| Primary airports served | O'Hare (ORD), Midway (MDW) |

**Brand name:** "Stop & Go Limo" — always with an ampersand, never "and." Never written in all caps. Short form used in logo, nav, footer, and social.

---

## 2. Brand Personality

The Twilight Luxe brand communicates **premium, understated luxury.** Think first-class cabin, not luxury billboard. Every visual and copy decision should feel:

- **Confident** — not boastful. Let quality speak.
- **Warm** — champagne over cold silver. The gold is approachable.
- **Precise** — clean typography, no visual clutter, sharp corners throughout.
- **Trustworthy** — professional drivers, 24/7 availability, transparent pricing.

**Midnight Navy (#15162C):** Deep, authoritative, and refined. Signals trust and premium quality.
**Champagne Gold (#DCB57E):** Warm, understated luxury. Not flashy — the kind of gold that belongs in first class.

---

## 3. Absolute Rules (Never Break)

1. **No all-caps / uppercase text anywhere on the site.** No CSS `text-transform: uppercase`. No `tracking-widest` on uppercase labels. Labels in small-caps style use sentence case or title case.
2. **Square corners only.** No `rounded`, `rounded-lg`, `rounded-full` on any card, button, input, or container. Use `rounded-none` or simply omit.
3. **Never use double hyphens (--).** Use a comma or em dash instead.
4. **7th-grade reading level** for all body copy. Short sentences. Plain words.
5. **No icons.** Do not use Heroicons, Font Awesome, or SVG icon libraries anywhere on the public site.
6. **No color outside the palette.** If a color is not in the Twilight Luxe 5+1 palette or the three semantic colors, it is not allowed.
7. **Poppins for headings, Montserrat for body.** Never mix in a third typeface.

---

## 4. Typography

### Fonts

| Role | Family | Tailwind class | Weights used |
|---|---|---|---|
| Headings, buttons, nav, labels | Poppins | `font-head` | 300, 400, 500, 600, 700, 800 |
| Body, captions, paragraphs, UI | Montserrat | `font-body` | 300, 400, 500, 600, 700 |

Both are loaded via Google Fonts. The import is in `resources/css/app.css` line 1-2.

### Type Scale

| Level | Size | Weight | Font | Use |
|---|---|---|---|---|
| H1 | 48px / 3rem | ExtraBold 800 | Poppins | Page hero titles |
| H2 | 38px / 2.375rem | Bold 700 | Poppins | Section headings |
| H3 | 30px / 1.875rem | SemiBold 600 | Poppins | Subsection headings |
| H4 | 24px / 1.5rem | SemiBold 600 | Poppins | Card titles, champagne accent color |
| H5 | 20px / 1.25rem | SemiBold 600 | Poppins | Minor headings |
| Lead | 21px / 1.3125rem | Regular 400 | Montserrat | Hero subtitle, intro paragraph |
| Body | 17px / 1.0625rem | Regular 400 | Montserrat | General content |
| Caption | 14px / 0.875rem | Regular 400 | Montserrat | Image captions, meta |
| Label / badge | 12px / 0.75rem | SemiBold 600 | Poppins | Section labels, tracking-widest tags |

### Line Heights

- Headings: 1.2
- Subheadings: 1.3
- Body: 1.6 — 1.7
- Buttons: 1.0

### Link Styles

| Class | Use |
|---|---|
| `.link-champagne` | Inline champagne link in body copy (underline on hover) |
| `.link-nav-stopngo` | Nav link: cloud text, champagne on hover |
| `x-ui.button-text-champagne` | Arrow-link CTA, e.g. "View Rates &rarr;" |

---

## 5. Color System

### 5.1 — The 5+1 Palette

| Name | Tailwind token | Default hex | Light hex | Dark hex |
|---|---|---|---|---|
| Midnight Navy | `navy` | `#15162C` | `#252235` | `#0F1223` |
| Champagne Gold | `champagne` | `#DCB57E` | `#E9C79E` | `#C49A5E` |
| Signal Gold | `signal` | `#FEC42D` | `#FFD65E` | `#E0A800` |
| Cloud Grey | `cloud` | `#E8E9EC` | `#F4F5F7` | `#D4D6DB` |
| Slate | `muted` | `#69727D` | `#8B939C` | `#4A5159` |
| White | — | `#FFFFFF` | — | — |

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
6. **Signal Gold** — high-attention only: 24/7 badges, limited-availability chips, alert ribbons

### 5.4 — Brand Gradients

| Token | Direction | Use |
|---|---|---|
| `bg-grad-midnight-hero` | 135deg Navy → Navy-light | Primary hero and section BGs |
| `bg-grad-deep-twilight` | 135deg Navy-dark → Navy → Navy-light | Overlays at ~70% on photography |
| `bg-grad-champagne-shine` | 135deg Champagne → Champagne-light | CTA buttons, highlight chips |
| `bg-grad-navy-to-gold` | 135deg Navy → Navy-light → Champagne | Feature moments, used sparingly |
| `bg-grad-champagne-rule` | 90deg transparent → Champagne-dark → Champagne → Champagne-dark → transparent | Decorative horizontal dividers |

---

## 6. Component System

### 6.1 — Buttons

All buttons use Poppins (`font-head`), tracking-wide, no rounded corners, square edges.

| Component | Use case | Text color | Background |
|---|---|---|---|
| `x-ui.button-champagne-gradient` | Primary CTA (Book a Ride) | Navy | Champagne gradient |
| `x-ui.button-champagne-solid` | Primary CTA on light surface | Navy | Champagne solid |
| `x-ui.button-signal` | Urgent / 24/7 attention | Navy | Signal Gold |
| `x-ui.button-navy-gold` | Outlined dark container | Champagne | Navy-dark + champagne border |
| `x-ui.button-outline-champagne` | Secondary on dark surface | Champagne | Transparent + champagne border |
| `x-ui.button-white-navy` | Secondary on dark, high contrast | Navy | White |
| `x-ui.button-outline-light` | Ghost on dark / over image | White | Transparent + white/35 border |
| `x-ui.button-text-champagne` | Inline arrow-link | Champagne | None |

**Size override:** Use Tailwind `!-` prefix: `class="!px-4 !py-2 !text-xs"` for small, `class="!px-12 !py-5 !text-lg"` for large.

### 6.2 — Banners

Separator lines between nav zones and section boundaries.

| Component | Weight | Color |
|---|---|---|
| `x-ui.banner-thin-champagne` | 3px | Champagne |
| `x-ui.banner-thin-navy` | 3px | Navy + white/10 border |
| `x-ui.banner-thin-signal` | 3px | Signal Gold |
| `x-ui.banner-thin-cloud` | 3px | Cloud Grey |
| `x-ui.banner-medium-champagne` | 8px | Champagne |
| `x-ui.banner-medium-navy` | 8px | Navy + white/10 border |
| `x-ui.banner-medium-signal` | 8px | Signal Gold |
| `x-ui.banner-medium-cloud` | 8px | Cloud Grey |

**Standard nav wrap pattern:**
```
x-ui.banner-thin-champagne
Notification Bar (bg-navy-dark)
x-ui.banner-thin-champagne
x-ui.banner-thin-navy
Main Navigation (bg-navy)
x-ui.banner-thin-navy
x-ui.banner-thin-champagne
```

### 6.3 — Cards

Cards use sharp corners, navy-light backgrounds on dark sections, white backgrounds on light sections. Border: `border border-white/8` on dark, `border border-cloud-dark` on light.

---

## 7. Layout and Spacing

- **Container max-width:** 1280px — `max-w-7xl mx-auto`
- **Section padding:** `py-16` (64px) default, `py-20` for hero sections
- **Section padding, mobile:** `py-12` — always use responsive prefixes
- **Container padding:** `px-6` default, `px-4` on mobile
- **Section alternation:** Navy surfaces alternate with Cloud-light surfaces in light-mode sections
- **Max file length:** 800 lines per Blade file. Split into sub-components if longer.

---

## 8. Navigation

- **Top notification bar:** `bg-navy-dark` — champagne phone number, signal gold CTA, muted location text
- **Nav bar:** `bg-navy` — Poppins semibold, cloud-grey links, champagne on hover, 3px champagne underline for active/hover
- **Active state:** `text-champagne border-b-[3px] border-champagne`
- **Dropdowns:** `bg-navy-light` surface, 3px champagne top border, champagne left-edge accent on item hover
- **Mobile hamburger:** Champagne icon on navy background

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
- **Avoid:** "best," "cheapest," "luxury limo service in Illinois" (SEO bait phrases)
- **Prefer:** Specific, concrete copy. "On time to O'Hare or Midway, every time." over "reliable transportation."
- **Punctuation:** Commas over hyphens or double-dashes. No double hyphens.
- **Numbers:** Spell out one through nine, use numerals for 10+.
- **CTAs:** "Book a Ride," "Get a Quote," "Call Now," "Reserve 24/7." Plain, direct, action-first.

---

## 11. Imagery and Video

- Photography is dark-toned, moody, and aspirational: night skylines, vehicle interiors, airport drop-offs
- Overlay images with `bg-grad-deep-twilight` at 70% opacity to maintain brand consistency
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

---

## 13. File References

| Asset | Location |
|---|---|
| Full style guide (HTML) | `docs/stopngo-style-guide.html` |
| Blade component drop-ins | `docs/stopngo-twilght-luxe-blade/` |
| Tailwind tokens | `tailwind.config.js` (theme.extend) |
| CSS custom properties | `resources/css/app.css` (:root block) |
| Client config | `config/client.php` |
| Image/video policy | `docs/image-video-control.md` |
| Demo style guide page | `/demo` (route: `web.php`) |
| Button components | `resources/views/components/ui/button-*.blade.php` |
| Banner components | `resources/views/components/ui/banner-*.blade.php` |
