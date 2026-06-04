# Brand Diff — Old Site vs. Twilight Luxe

**Old site:** https://newlenoxlimoservice.com (WordPress, the client's current live site)
**Inherited Laravel project:** Current codebase (previously a print/promo shop, unrelated brand)
**Target:** "Twilight Luxe" brand system defined in `docs/stopngo-style-guide.html` and `docs/stopngo-twilght-luxe-blade/`

---

## 1. Colors

### Primary Background

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Value | Dark navy, roughly `#1a1f35` (not exact, not tokenized) | Soft Linen `#F2F0E6` | Midnight Navy `#15162C` |
| CSS var | None found | `--color-background` | `--navy` |
| Tailwind | None | `bg-linen` | `bg-navy` |
| Notes | Similar vibe to Twilight Luxe but lighter and inconsistent | Completely wrong, light-mode background for a print shop | Exact token required everywhere |

### Primary Accent / CTA Gold

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Value | Warm amber-orange gold, roughly `#C9962A` (eyeballed) | Sunburst Gold `#FFC20E` | Champagne Gold `#DCB57E` |
| CSS var | None | `--color-sunburst` | `--champagne` |
| Tailwind | None | `bg-sunburst`, `text-sunburst` | `bg-champagne`, `text-champagne` |
| Notes | Too warm and bright, reads cheap vs. premium | Wrong brand entirely, no champagne warmth | Refined warm-beige gold, not bright yellow |

### High-Attention Accent

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Value | Not clearly separated from main gold | Sunburst Light `#FFD93D` | Signal Gold `#FEC42D` |
| Use | Blended with primary gold | Used broadly as a gradient | Sparingly only, 24/7 badges and alerts |
| Notes | No distinction between primary and attention gold | Used too widely | Must be used sparingly or it loses impact |

### Secondary Color

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Value | None (no second accent) | Azure Blue `#3273DC` | No blue, not in the palette |
| Notes | Single-accent design | Blue is completely off-brand for a limo service | Remove all azure/blue usage from the Laravel project |

### Text Colors

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Primary text | White on dark sections | Charcoal `#2C2C2C` | White `#FFFFFF` on navy surfaces |
| Secondary text | White or light grey | Charcoal Light `#555555` | Slate `#69727D` |
| Caption / muted | Not defined | Not defined | Slate Light `#8B939C` |
| Body on light bg | Charcoal-ish | Charcoal `#2C2C2C` | Midnight Navy `#15162C` |

### Light Surface / Alternating Sections

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Value | Dark navy again, no light sections seen | Linen `#F2F0E6` / `#FAF9F5` | Cloud Grey `#E8E9EC` / `#F4F5F7` |
| Notes | No alternating surface contrast | Linen is warm and earthy, not the right tone | Cool, near-neutral grey keeps the premium feel |

### Full Palette Comparison at a Glance

| Role | Old Site | Inherited Laravel | Twilight Luxe (target) |
|---|---|---|---|
| Background | ~`#1a1f35` (eyeballed) | `#F2F0E6` linen | `#15162C` navy |
| Primary accent | ~`#C9962A` amber | `#FFC20E` sunburst | `#DCB57E` champagne |
| High-attention | Same as accent | `#FFD93D` sunburst-light | `#FEC42D` signal gold |
| Secondary | None | `#3273DC` azure blue | None, remove blue |
| Light surface | None | `#FAF9F5` linen-light | `#F4F5F7` cloud-light |
| Muted text | ~light grey | `#555555` charcoal-light | `#69727D` slate |
| Success | Not defined | `#4CAF50` | `#2E9E6B` |
| Warning | Not defined | `#F9A825` | `#E0A800` |
| Error | Not defined | `#C62828` | `#C0392B` |

---

## 2. Typography / Fonts

### Font Families

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Heading font | Appears to be a generic sans-serif (possibly Roboto or system default) | Titillium Web | Poppins |
| Body font | Same generic sans-serif | Titillium Web (single font) | Montserrat |
| CSS var | None | `--font-primary: 'Titillium Web'` | `--font-head: 'Poppins'`, `--font-body: 'Montserrat'` |
| Google Fonts URL | Not Poppins or Montserrat | Titillium Web only | Poppins 300,400,500,600,700,800 + Montserrat 300,400,500,600,700 |
| Tailwind key | None | `font-sans` (Titillium) | `font-head` (Poppins), `font-body` (Montserrat) |

### Font Weights in Use

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Weights loaded | Unknown, likely 400/700 | 300, 400, 600, 700 | 300, 400, 500, 600, 700, 800 |
| Hero display | Not ExtraBold | 700 | 800 (ExtraBold, Poppins) |
| Body text | Regular | Regular (400) | Regular (400), Montserrat |
| Buttons / nav | Likely 600–700 | 600 | 600, Poppins |

### Type Scale

| Level | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| H1 | Large, all-caps | 32px / 700 | 48px / 800 / Poppins / line-height 1.2 |
| H2 | Large, all-caps | 32px / 700 | 38px / 700 / Poppins |
| H3 | Medium, all-caps | 28px / 600 | 30px / 600 / Poppins |
| H4 | Small, all-caps | 24px / 600 | 24px / 600 / Poppins, champagne color |
| H5 | Not clearly defined | 20px / 600 | 20px / 600 / Poppins |
| Lead / intro | Not defined | Not defined | 21px / 400 / Montserrat |
| Body | ~16px | Not defined | 17px / 400 / Montserrat |
| Caption | Not defined | Not defined | 14px / 400 / Montserrat |

---

## 3. All-Caps Usage (Critical Violation)

This is the single largest branding issue on the old site. Our no-caps rule is absolute.

| Location | Old Site | Twilight Luxe (target) |
|---|---|---|
| Navigation links | All-caps: WELCOME, ABOUT US, OUR SERVICES, etc. | Mixed-case: Welcome, About, Services, etc. |
| Hero headings | All-caps: "ELEVATE YOUR TRAVEL EXPERIENCE" | Sentence or title case only |
| Page hero headings | All-caps: "ABOUT US", "OUR SERVICES" | Title case: "About Us", "Our Services" |
| Sub-headings | All-caps: "THE MOST CONVENIENT SHUTTLE SERVICE IN PLAINFIELD" | Sentence case |
| CTA buttons | All-caps: "GET IN TOUCH", "BOOK A RIDE" | Title case: "Book a Ride", "Get in Touch" |
| Body copy | Mixed but headings are caps | Normal sentence case |

The inherited Laravel project does not have this issue to the same extent, but Titillium Web with uppercase letter-spacing is common in that codebase and must be audited.

---

## 4. Buttons

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Shape | Slight border-radius, bordered | Not clearly defined yet | Square corners, no border-radius |
| Primary button | Transparent with light border, all-caps text | Sunburst gold gradient variants | Champagne gradient: `linear-gradient(135deg, #DCB57E, #E9C79E)` |
| High-attention CTA | "GET IN TOUCH" — champagne/gold fill, spaced caps | Not defined | Signal Gold `#FEC42D` fill, dark navy text |
| Secondary button | Bordered, transparent | Azure blue variants | Outline-champagne or outline-light on dark surfaces |
| Border-radius | ~4px rounded | `2px` (sm) | 0 — no radius at all |
| Text transform | Uppercase | Mixed | Normal, title-case, no uppercase |
| Font | Generic sans | Titillium Web | Poppins, 600 weight |

---

## 5. Navigation

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Notification bar | Not present | Not present | Champagne-accented top bar, phone + booking link |
| Nav background | White / very light surface | Not built | Midnight Navy `#15162C` |
| Link color | Dark text (on white nav) | Not built | Cloud `#E8E9EC` default, Champagne `#DCB57E` on hover/active |
| Active indicator | Underline or highlight | Not built | 3px champagne bottom border |
| Dropdown background | White with light border | Not built | Navy Light `#252235`, 3px champagne top border |
| Dropdown accent | Grey left border | Not built | 3px champagne left border on item hover |
| Link text case | All-caps | Not built | Uppercase Poppins (nav only, per brand spec) |
| Dropdown panels | Standard only | Not built | Standard, two-column mega (Services), four-column grid (Service Areas) |
| Nested flyout | Not present | Not built | Party Bus flyout within Services mega menu |
| Logo mark | Wing + circle icon, multi-color | Generic placeholder | Stop & Go Limo wordmark, white + champagne accent on "Limo" |

---

## 6. Layout and Section Structure

| | Old Site | Laravel Project (inherited) | Twilight Luxe (target) |
|---|---|---|---|
| Page background | Dark navy throughout, no alternating | Light linen throughout | Alternates navy (primary) and cloud grey (breathing room) |
| Section padding | Varies, not consistent | Not established | 72px vertical (54px mobile) |
| Hero style | Full-bleed photo with dark overlay + centered text | Not built | Full-bleed photo, Deep Twilight overlay gradient at ~70% opacity |
| Section dividers | Thin gold vertical bar (decorative) | Not present | Horizontal champagne gradient rule `hr.rule` |
| Max width | ~1140px | Not defined | 1180px, centered, 28px side padding |
| Card borders | Not prominent | Not established | 1px solid `rgba(255,255,255,.07)` on navy-light backgrounds |

---

## 7. Brand Identity / Logo

| | Old Site | Twilight Luxe (target) |
|---|---|---|
| Logo mark | Circular wing icon in black/white | Retain the existing logo mark or update |
| Wordmark | "Stop & Go Airport Shuttle Service Inc." (full legal name) | "Stop & Go Limo" (shorter, brand name) |
| Wordmark color | Black/dark text | White with "Limo" in champagne |
| Tagline | Not visible in nav | Optional: "New Lenox and Naperville, IL" in slate below |
| Business name in body | "Stop & Go Airport Shuttle Service Inc." | "Stop & Go Limo" for brand, full legal name only in footer/contact |

---

## 8. The Inherited Laravel Project — Key Problems to Fix

The codebase we are working in was previously a print/promotional products shop. The entire color and font system must be replaced. Here is what needs to change in the code:

| File | Current State | What to Replace With |
|---|---|---|
| `resources/css/app.css` | Titillium Web font, Sunburst/Azure/Linen CSS vars | Twilight Luxe `brand-tokens.css` from `docs/stopngo-twilght-luxe-blade/resources/css/` |
| `tailwind.config.js` | Sunburst, Azure, Linen, Charcoal colors; Titillium Web font | Twilight Luxe `tailwind.theme.snippet.js` from `docs/stopngo-twilght-luxe-blade/config/` |
| All `*.blade.php` views | `bg-linen`, `text-sunburst`, `bg-azure`, `font-sans` etc. | `bg-navy`, `text-champagne`, `font-head`, `font-body` etc. |
| Navigation component | Not Stop & Go branded | Drop in `x-nav.navbar` from `docs/stopngo-twilght-luxe-blade/resources/views/components/nav/` |
| Button components | Azure / sunburst variants | Drop in `x-ui.button` system from `docs/stopngo-twilght-luxe-blade/resources/views/components/ui/` |
| Any `text-transform: uppercase` in CSS or Tailwind `uppercase` classes | Present in old CSS | Remove, replace with title-case copy |

---

## 9. Summary — Highest Priority Changes

1. **Kill all-caps** — Every `uppercase` class, `text-transform: uppercase` CSS, and all-caps copy must be removed across every file.
2. **Replace fonts** — Titillium Web out. Poppins (headings) + Montserrat (body) in. Update `app.css` Google Fonts URL and CSS vars.
3. **Replace the Tailwind color tokens** — Swap the full `extend.colors` block. Remove sunburst, azure, linen, charcoal, olive. Add navy, champagne, signal, cloud, slate.
4. **Replace CSS custom properties** — Update all `--color-*` vars in `app.css` to Twilight Luxe tokens.
5. **Remove all blue** — Azure `#3273DC` and every variant must be gone. No blue anywhere on this brand.
6. **Install the brand Blade components** — Buttons and nav from `docs/stopngo-twilght-luxe-blade/` are production-ready and drop-in.
7. **Flip background color logic** — The project defaults to light/linen backgrounds. Twilight Luxe is dark-first, navy dominant.
8. **Button border-radius** — Any rounded corners on buttons must be set to 0.
