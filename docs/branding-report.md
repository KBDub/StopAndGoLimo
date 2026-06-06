# Branding Report — Home Page Sections
> **Reference:** `docs/branding-requirements.md` (authoritative)
> **Scope:** All sections rendered in `resources/views/pages/home.blade.php`
> **Date:** 2026-06-06

---

## Quick-Reference Type Scale (from branding-requirements.md §4)

| Level  | Size          | Weight | Font       | Line-Height |
|--------|---------------|--------|------------|-------------|
| H1     | 48px / 3rem   | 800    | Poppins    | 1.2         |
| H2     | 38px / 2.375rem | 700  | Poppins    | 1.2         |
| H3     | 30px / 1.875rem | 600  | Poppins    | 1.3         |
| H4     | 24px / 1.5rem | 600    | Poppins    | 1.3         |
| H5     | 20px / 1.25rem | 600   | Poppins    | 1.3         |
| Lead   | 21px / 1.3125rem | 400 | Montserrat | 1.6         |
| Body   | 17px / 1.0625rem | 400 | Montserrat | 1.6–1.7     |
| Caption| 14px / 0.875rem | 400  | Montserrat | —           |

**Section padding spec:** `py-16` (64px) default, `py-20` for hero sections.
**Champagne underbar spec:** 3px height, `var(--champagne)`, `width: 116%`, `margin-top: 0.85rem`, wrapped in `width: fit-content` container. Centered = add `margin: 0 auto` + `margin-left: -8%` on rule. Left-aligned = no centering, no offset.
**Color rule:** All colors via named CSS custom properties only. No raw hex, rgb(), or rgba().
**Layout rule:** CSS Grid only for section/page layouts. Flexbox only inside atomic UI components.
**No uppercase** anywhere (nav is the only approved exception).
**Image overlay:** `bg-grad-deep-twilight` at 20–30% opacity only.

---

## Section 1 — `x-sections.category-hero`

**File:** `resources/views/components/sections/category-hero.blade.php`
**Background:** Full-bleed photo with `var(--navy-dark)` overlay

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | Photo + `var(--navy-dark)` overlay | Photo + `bg-grad-deep-twilight` 20–30% | ⚠ |
| Overlay opacity | 0.42 (42%) | 20–30% | ❌ Too dark |
| Section padding | `py-16` | `py-20` for heroes | ❌ |
| H1 font | Poppins (`font-head`) | Poppins | ✓ |
| H1 size | `clamp(2rem, 5vw, 3.5rem)` | 3rem / 48px | ✓ (clamp includes spec max) |
| H1 weight | 400 (light span) + 700 (bold span) | 800 ExtraBold | ❌ Bold span is 700, not 800 |
| H1 line-height | 1.15 | 1.2 | ⚠ Slightly off |
| H1 color | `text-white` | `var(--cloud-light)` | ⚠ White is in palette but no token used |
| H1 letter-spacing | none set | none required | ✓ |
| Subtitle font | Poppins (`font-head`) | Montserrat (`font-body`) for Lead text | ❌ Wrong font family |
| Subtitle size | `clamp(0.95rem, 2.2vw, 1.2rem)` | 21px / 1.3125rem (Lead) | ❌ Max 1.2rem = 19.2px, short of Lead |
| Subtitle weight | 400 | 400 | ✓ |
| Subtitle opacity | 0.9 | not specified | ⚠ Opacity on text reduces contrast |
| Champagne underbar | None | Not required on hero H1 | ✓ |
| CTA button | `x-ui.button-outline-light` | ✓ per §6.1 on dark/image bg | ✓ |
| Image aspect ratio | Full-bleed / `min-h` driven | 16:9 for hero | ⚠ No explicit aspect-ratio lock |
| Image loading | `loading="eager"` | ✓ hero should be eager | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | `opacity: 0.42` on overlay but no hex | ✓ | ✓ |

**Issues to fix:**
1. Overlay opacity should be 20–30% (currently 42%).
2. Hero section padding should be `py-20` not `py-16`.
3. Subtitle should use `font-body` (Montserrat), not `font-head` (Poppins).
4. H1 bold span font-weight should be 800, not 700.
5. Consider `var(--cloud-light)` instead of bare `text-white`.

---

## Section 2 — `x-sections.travel-in-style`

**File:** `resources/views/components/sections/travel-in-style.blade.php`
**Background:** `var(--navy)` (default)

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--navy)` | Navy ✓ | ✓ |
| Section padding | `py-12 lg:py-16` | `py-16` default | ✓ |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.75rem, 4vw, 2.375rem)` | 38px / 2.375rem | ✓ (max hits spec) |
| H2 weight | 400 (light) + 700 (bold) | 700 | ✓ |
| H2 line-height | 1.2 | 1.2 | ✓ |
| H2 color | white + `var(--champagne)` bold | `var(--cloud-light)` + champagne | ⚠ Uses raw `color: #ffffff` in PHP variable |
| H2 letter-spacing | none | none | ✓ |
| Body font | Montserrat (`font-body`) | Montserrat | ✓ |
| Body size | 1.0625rem (17px) | 17px / 1.0625rem | ✓ |
| Body weight | 400 | 400 | ✓ |
| Body line-height | 1.7 | 1.6–1.7 | ✓ |
| Body color | `var(--cloud)` on navy | ✓ | ✓ |
| Champagne underbar | `x-ui.banner-thin-champagne` (full-width at column bottom) | §14 fit-content heading underbar | ❌ Wrong pattern |
| Image aspect ratio | `aspect-[4/3]` | 4:3 for card images | ✓ |
| Image corners | Sharp (`overflow-hidden`, no rounding) | Sharp | ✓ |
| Layout | `grid grid-cols-1 lg:grid-cols-2` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | `color: #ffffff` in PHP `$textColor` variable | No raw hex | ❌ |

**Issues to fix:**
1. `$textColor = 'color: #ffffff'` uses raw hex — should be `color: var(--cloud-light)`.
2. No heading champagne underbar (§14). The `x-ui.banner-thin-champagne` at the column bottom is a decorative separator, not the required proportional heading underbar.

---

## Section 3 — `x-sections.free-instant-quote`

**File:** `resources/views/components/sections/free-instant-quote.blade.php`
**Background:** `var(--cloud-light)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--cloud-light)` | Cloud grey alternation ✓ | ✓ |
| Section padding | `py-12 lg:py-16` | `py-16` | ✓ |
| Card background | `background: #ffffff` | White (in palette) but no CSS token | ❌ Raw hex |
| Card box-shadow | `rgba(0,0,0,0.08)` | No raw color literals | ❌ Raw rgba |
| Card corners | Sharp (no border-radius) | Sharp | ✓ |
| H2 (card) font | Poppins (`font-head`) | Poppins | ✓ |
| H2 (card) size | `clamp(1.5rem, 3vw, 2rem)` | 38px / 2.375rem | ⚠ Max 2rem = 32px, below H2 spec |
| H2 (card) weight | 700 | 700 | ✓ |
| H2 (card) line-height | 1.2 | 1.2 | ✓ |
| H2 (card) color | `var(--navy)` | ✓ on light bg | ✓ |
| H3 (right col) font | Poppins (`font-head`) | Poppins | ✓ |
| H3 (right col) size | `clamp(1.25rem, 2.5vw, 1.875rem)` | 30px / 1.875rem | ✓ (max hits spec) |
| H3 (right col) weight | 400 (light span) | 600 SemiBold | ❌ |
| H3 (right col) line-height | 1.3 | 1.3 | ✓ |
| H3 (right col) color | `var(--navy)` | ✓ | ✓ |
| Form label font | Poppins, 0.9375rem, weight 600 | Label/badge: Poppins 600 | ✓ |
| Body (right) | Montserrat, 1.0rem, line-height 1.7, `var(--slate)` | ✓ | ⚠ 1.0rem vs 1.0625rem spec |
| Champagne underbar | `x-ui.banner-thin-champagne` after H3 | §14 fit-content pattern | ❌ Wrong pattern |
| Image aspect ratio | `aspect-ratio: 4/3` | 4:3 ✓ | ✓ |
| Image corners | Sharp | Sharp | ✓ |
| Layout | `grid grid-cols-1 lg:grid-cols-2` | Grid ✓ | ✓ |
| Input borders | `border-radius: 0` | No rounding on inputs | ✓ |
| No uppercase | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Card `background: #ffffff` — raw hex. No `--white` CSS token exists; use `background: white` or define the token.
2. Box-shadow `rgba(0,0,0,0.08)` — raw color literal.
3. H3 font-weight is 400, should be 600 per spec.
4. Body font-size 1.0rem, should be 1.0625rem (17px).
5. Champagne underbar uses `x-ui.banner-thin-champagne` (full-width) not the §14 fit-content proportional pattern.

---

## Section 4 — `x-sections.service-locations`

**File:** `resources/views/components/sections/service-locations.blade.php`
**Background:** `var(--navy)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--navy)` | Navy ✓ | ✓ |
| Section padding | `py-12 lg:py-16` | `py-16` | ✓ |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.5rem, 3.5vw, 2.375rem)` | 38px / 2.375rem | ✓ |
| H2 weight | 400 + 700 bold | 700 | ✓ |
| H2 line-height | 1.25 | 1.2 | ⚠ Slightly off |
| H2 color | `#ffffff` raw hex | `var(--cloud-light)` | ❌ Raw hex |
| H2 champagne bold | `var(--champagne)` | ✓ | ✓ |
| Champagne underbar | None | §14 required on section H2 | ❌ Missing |
| Body font | Montserrat (`font-body`) | Montserrat | ✓ |
| Body size | 1.0rem | 1.0625rem | ⚠ 1px short |
| Body line-height | 1.7 | 1.6–1.7 | ✓ |
| Body color | `var(--cloud)` | ✓ | ✓ |
| H3 (city) font | Poppins, 1.25rem, weight 600 | H5 = 20px / 600 | ✓ (1.25rem = 20px) |
| H3 (city) color | `var(--champagne)` | Champagne on dark ✓ | ✓ |
| Location address | Montserrat, 0.9375rem, line-height 1.6 | Caption ~14px / Body 17px | ⚠ Between caption and body |
| Map pin icon | Inline SVG | FA6 approved for location indicators | ✓ |
| Layout | `grid grid-cols-1 lg:grid-cols-2` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |

**Issues to fix:**
1. H2 color `#ffffff` raw hex — use `var(--cloud-light)`.
2. Missing §14 champagne underbar under section H2.
3. Body font-size 1.0rem — should be 1.0625rem.
4. H2 line-height 1.25 — spec is 1.2.

---

## Section 5 — `x-sections.areas-we-serve`

**File:** `resources/views/components/sections/areas-we-serve.blade.php`
**Background:** `var(--cloud-light)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--cloud-light)` | Cloud grey ✓ | ✓ |
| Section padding | `py-12 lg:py-16` | `py-16` | ✓ |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.5rem, 3.5vw, 2.375rem)` | 2.375rem | ✓ |
| H2 weight | 400 + 700 bold | 700 | ✓ |
| H2 line-height | 1.25 | 1.2 | ⚠ |
| H2 color | `var(--navy)` | ✓ on light bg | ✓ |
| Champagne underbar | `fit-content` wrapper, centered, `width: 116%`, `margin-left: -8%` | ✓ pattern | ✓ |
| Underbar height | 3px | 3px | ✓ |
| Underbar margin-top | 1rem | 0.85rem | ❌ Should be 0.85rem |
| Area link font | `font-family: Poppins, sans-serif` literal | Must use `var(--font-head)` | ❌ Raw font-family string |
| Area link size | `font-size: 25px` | No 25px in type scale (Body=17px, H4=24px, H5=20px) | ❌ Off-scale size |
| Area link letter-spacing | `-0.01em` | Not in spec | ⚠ |
| Area link line-height | 1.3 | 1.3 (subheadings) | ✓ |
| Area link color | `var(--navy)` → `var(--champagne)` hover | ✓ | ✓ |
| Icon | Inline SVG map pin | FA6 allowed for location | ✓ |
| Inner gap | `margin-top: 6rem` below heading | Too large | ⚠ |
| Layout | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Area link `font-family: Poppins, sans-serif` literal — replace with `var(--font-head)`.
2. Area link `font-size: 25px` — off type scale. Should be `1.0625rem` (Body) or `1.25rem` (H5).
3. Underbar `margin-top: 1rem` — should be `0.85rem`.
4. Letter-spacing `-0.01em` not in brand spec.
5. `margin-top: 6rem` on inner list container is unusually large.

---

## Section 6 — `x-sections.why-choose-us`

**File:** `resources/views/components/sections/why-choose-us.blade.php`
**Background:** `var(--navy)` outer + `var(--navy-light)` inlay

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--navy)` outer / `var(--navy-light)` inlay | Navy ✓ | ✓ |
| Section padding | `padding: 2rem 2rem` outer | `py-16` (64px) | ❌ 2rem = 32px, half of spec |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `font-size: 65px` fixed | 38px / 2.375rem | ❌ 65px is 70% over H2 spec — no clamp |
| H2 weight | 400 (regular) + 700 bold | 700 | ✓ |
| H2 line-height | 1.1 | 1.2 | ❌ |
| H2 color | `var(--cloud-light)` + `var(--champagne)` bold | ✓ | ✓ |
| Subtitle font | Montserrat (`font-body`) | Montserrat | ✓ |
| Subtitle size | `font-size: 30px` fixed | Lead = 21px / 1.3125rem | ❌ 30px exceeds Lead spec |
| Subtitle weight | 400 | 400 | ✓ |
| Subtitle color | `var(--cloud-light)` | ✓ | ✓ |
| Subtitle alignment | `text-align: right` | not specified | ⚠ |
| Champagne rule | `height: 2px; width: 100%` full-width divider | §14: 3px, fit-content heading underbar | ❌ Wrong height (2px vs 3px), wrong pattern (full-width) |
| H3 (card) font | Poppins (`font-head`) | Poppins | ✓ |
| H3 (card) size | `clamp(1.1rem, 2vw, 1.4rem)` | H3 = 30px / 1.875rem | ❌ Max 1.4rem = 22.4px — far below H3 spec |
| H3 (card) weight | 400 base + 700 bold | H3 = 600 SemiBold | ❌ Base weight 400, should be 600 |
| H3 (card) line-height | 1.3 | 1.3 | ✓ |
| H3 (card) color | `var(--champagne)` bold + `var(--cloud-light)` | ✓ | ✓ |
| Body (card) font | Montserrat (`font-body`) | Montserrat | ✓ |
| Body (card) size | 1rem | 1.0625rem | ⚠ |
| Body (card) line-height | 1.7 | 1.6–1.7 | ✓ |
| Body (card) color | `var(--cloud-light)` | ✓ | ✓ |
| Icons | FA6 (`fa-solid fa-thumbs-up`) + inline SVGs | FA6 ✓ for functional use | ✓ |
| Icon size | 4rem | not specified | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. H2 `font-size: 65px` — no clamp, far exceeds H2 spec of 38px. Should be `clamp(1.75rem, 4vw, 2.375rem)` or similar.
2. Subtitle `font-size: 30px` — exceeds Lead spec of 21px.
3. Section padding `2rem` — should be `py-16` (64px) at minimum.
4. Champagne rule height is 2px (spec 3px) and is full-width, not the §14 fit-content heading underbar.
5. H3 card size `clamp(1.1rem, 2vw, 1.4rem)` is far below H3 spec of 1.875rem.
6. H3 card base weight 400 — should be 600.
7. Body card size 1rem — should be 1.0625rem.

---

## Section 7 — `x-sections.airport-shuttle-service`

**File:** `resources/views/components/sections/airport-shuttle-service.blade.php`
**Background:** `var(--cloud-light)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--cloud-light)` | Cloud grey ✓ | ✓ |
| Section padding | `py-16` | `py-16` | ✓ |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.6rem, 3.5vw, 2.4rem)` | 2.375rem / 38px | ✓ (max ≈ spec) |
| H2 weight | 400 tail + 700 bold | 700 | ✓ |
| H2 line-height | 1.2 | 1.2 | ✓ |
| H2 color | `var(--navy)` | ✓ on light bg | ✓ |
| Champagne underbar | `fit-content` wrapper, left-aligned, `116%`, `margin-top: 0.85rem` | §14 ✓ | ✓ |
| Body font | `var(--font-body)` (Montserrat) | Montserrat | ✓ |
| Body size | `font-size: 20px` fixed | 17px / 1.0625rem (Body) | ❌ 3px over, raw px |
| Body line-height | `line-height: 22px` fixed | 1.6–1.7 | ❌ 22px on 20px text = 1.1, extremely tight |
| Body weight | 400 | 400 | ✓ |
| Body color | `var(--navy)` | ✓ on light bg | ✓ |
| Body margin-top | `margin-top: 6rem` | — | ⚠ Very large gap |
| Image aspect ratio | `aspect-ratio: 4/3` | 4:3 ✓ | ✓ |
| Image max-width | `width: min(550px, 100%)` | — | ✓ |
| Image corners | Sharp | Sharp | ✓ |
| Layout (section) | `grid grid-cols-1 md:grid-cols-2` | Grid ✓ | ✓ |
| Layout (image container) | `flex justify-center md:justify-end` | Grid only — Flex not allowed for section layout | ❌ |
| Airport cards | `x-ui.rect-box` | ✓ | ✓ |
| Cards grid | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Body `font-size: 20px` — should be `1.0625rem` (17px).
2. Body `line-height: 22px` — raw px and far too tight. Should be `line-height: 1.7`.
3. `margin-top: 6rem` on body paragraph — excessive gap.
4. `flex justify-center md:justify-end` on image container — violates §7 grid-only rule for section layouts.

---

## Section 8 — `x-sections.our-services`

**File:** `resources/views/components/sections/our-services.blade.php`
**Background:** `var(--navy-dark)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--navy-dark)` | Navy dark ✓ | ✓ |
| Section padding | `py-16` | `py-16` | ✓ |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(2rem, 4vw, 3rem)` | 2.375rem / 38px | ❌ Max 3rem = 48px — H1 territory |
| H2 weight | 400 (regular) + 800 (bold) | 700 for H2 | ❌ 800 is H1 weight |
| H2 line-height | 1.2 | 1.2 | ✓ |
| H2 color | `var(--champagne)` full heading | `var(--cloud-light)` heading, champagne accent only | ⚠ Full heading in champagne |
| Champagne underbar | `fit-content`, centered, `116%`, `margin-left: -8%`, `margin-top: 0.85rem` | §14 ✓ | ✓ |
| Heading bottom margin | `margin: 0 auto 6rem` | 2rem standard | ⚠ 6rem is very large |
| Service cards | `x-ui.service-card` | ✓ | ✓ |
| Cards grid | `grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. H2 max size `3rem` (48px) — H1 territory. Should max at `2.375rem`.
2. H2 bold weight 800 — H2 spec is 700. Reserve 800 for H1 only.
3. H2 color `var(--champagne)` for the entire heading — champagne should accent only the bold portion; the regular portion should be `var(--cloud-light)`.
4. Bottom margin `6rem` — standard is `2rem`.

---

## Section 9 — `x-sections.faq`

**File:** `resources/views/components/sections/faq.blade.php`
**Background:** `var(--cloud-light)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--cloud-light)` | Cloud grey ✓ | ✓ |
| Section padding | `py-14` (56px) | `py-16` (64px) | ⚠ 8px short |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.6rem, 3.5vw, 2.25rem)` | 2.375rem | ⚠ Max 2.25rem = 36px, 2px below spec |
| H2 weight | 400 + 700 bold | 700 | ✓ |
| H2 line-height | 1.2 | 1.2 | ✓ |
| H2 color | `var(--navy)` | ✓ on light bg | ✓ |
| Champagne underbar | `fit-content`, left-aligned, `116%`, `margin-top: 0.85rem` | §14 ✓ | ✓ |
| FAQ question font | Montserrat (`font-body`) | Montserrat | ✓ |
| FAQ question size | 1rem | 1.0625rem (Body) | ⚠ 1px short |
| FAQ question line-height | 1.5 | 1.6–1.7 (body) | ⚠ Slightly low |
| FAQ question bg | `var(--navy)` | ✓ | ✓ |
| FAQ question color | `var(--cloud-light)` | ✓ | ✓ |
| FAQ answer font | Montserrat (`font-body`) | Montserrat | ✓ |
| FAQ answer size | 1rem | 1.0625rem | ⚠ 1px short |
| FAQ answer line-height | 1.75 | 1.6–1.7 | ✓ |
| FAQ answer bg | `var(--cloud)` | ✓ | ✓ |
| FAQ answer color | `var(--navy)` | ✓ | ✓ |
| Champagne left border | `border-left: 3px solid var(--champagne)` | ✓ | ✓ |
| Accordion | Alpine `x-data`, grid button layout | ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Section padding `py-14` — should be `py-16`.
2. H2 max `2.25rem` — should reach `2.375rem`.
3. FAQ question and answer font-size 1rem — should be 1.0625rem.
4. FAQ question line-height 1.5 — should be at least 1.6.

---

## Section 10 — `x-sections.share-your-experience`

**File:** `resources/views/components/sections/share-your-experience.blade.php`
**Background:** `var(--cloud-light)` outer + `var(--navy)` inner card

| Property | Built | Spec | Status |
|---|---|---|---|
| Section background | `var(--cloud-light)` outer / `var(--navy)` inner | ✓ | ✓ |
| Section padding | `py-14` (56px) | `py-16` (64px) | ⚠ 8px short |
| H2 font | Poppins (`font-head`) | Poppins | ✓ |
| H2 size | `clamp(1.6rem, 3.5vw, 2.5rem)` | 2.375rem | ⚠ Max 2.5rem = 40px, slightly over H2 spec |
| H2 weight | 400 + 700 bold | 700 | ✓ |
| H2 line-height | 1.2 | 1.2 | ✓ |
| H2 color | `var(--navy)` | ✓ on light bg | ✓ |
| Champagne underbar | `fit-content`, centered, `116%`, `margin-left: -8%`, `margin-top: 0.85rem` | §14 ✓ | ✓ |
| Underbar wrapper margin | `margin: 0 auto 1.5rem` | 2rem standard | ⚠ 0.5rem short |
| Body font | Montserrat (`font-body`) | Montserrat | ✓ |
| Body size | 1rem | 1.0625rem | ⚠ |
| Body line-height | 1.75 | 1.6–1.7 | ✓ |
| Body color | `var(--navy)` | ✓ on light bg | ✓ |
| Inner card bg | `var(--navy)` | ✓ | ✓ |
| Inner card padding | `2.5rem 3rem` | ✓ | ✓ |
| H3 (city) font | Poppins, 1.375rem, weight 600 | H4 = 1.5rem / 600 | ⚠ Close but 1.375rem = 22px vs H4 24px |
| H3 (city) color | `var(--champagne)` | ✓ on dark | ✓ |
| Address font | Montserrat, 1rem, line-height 1.85 | Body / Caption | ✓ |
| Address color | `var(--cloud-light)` | ✓ on navy | ✓ |
| Map pin icon | Inline SVG | FA6 allowed for location | ✓ |
| Button | `x-ui.button variant="champagne-solid"` | ✓ | ✓ |
| Layout | `grid grid-cols-1 sm:grid-cols-2` | Grid ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Section padding `py-14` — should be `py-16`.
2. Underbar wrapper bottom margin `1.5rem` — should be `2rem`.
3. Body font-size 1rem — should be 1.0625rem.
4. H3 city size 1.375rem — should be 1.5rem (H4) or kept at H3 1.875rem.

---

## Section 11 — `x-sections.map-contact-section`

**File:** `resources/views/components/sections/map-contact-section.blade.php`
**Background:** Car-image row (photo overlay) + `var(--navy)` contact strip

| Property | Built | Spec | Status |
|---|---|---|---|
| Section backgrounds | Photo row + `var(--navy)` strip | ✓ | ✓ |
| Overlay | `rgba(10, 14, 35, 0.62)` | No raw rgba — and opacity too high | ❌ Raw rgba, 62% > spec 30% |
| H2 (social) font | Poppins (`font-head`) | Poppins | ✓ |
| H2 (social) size | `clamp(1.5rem, 2.5vw, 2rem)` | H2 = 2.375rem | ⚠ Max 2rem below H2 spec |
| H2 (social) weight | 400 + 700 bold | 700 | ✓ |
| H2 (social) line-height | 1.25 | 1.2 | ⚠ |
| H2 (social) color | `var(--cloud-light)` | ✓ | ✓ |
| Contact labels font | Poppins (`var(--font-head)`), 0.85rem, weight 600, letter-spacing 0.08em | Label = Poppins 600 ✓ | ✓ |
| Contact labels uppercase | `letter-spacing: 0.08em` but not uppercase | ✓ no uppercase | ✓ |
| Address / body font | Montserrat (`var(--font-body)`), 0.9rem, line-height 1.7 | Body ✓ | ✓ |
| Contact color | `var(--cloud-light)` | ✓ | ✓ |
| Phone links | `var(--champagne)` | ✓ | ✓ |
| Email link | `var(--cloud-light)` | ✓ | ✓ |
| Champagne rule (contact) | `height:2px; width:3rem` per column | §14 says 3px | ❌ 2px height |
| Map border | `border-left: 4px solid var(--champagne)` | ✓ CSS var | ✓ |
| Map size | `width:30%; aspect-ratio:1/1` | — | ✓ |
| Social chips | `x-ui.facebook-chip`, `x-ui.twitter-chip`, `x-ui.email-chip` | ✓ | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| Raw color | `rgba(10, 14, 35, 0.62)` overlay | No raw literals | ❌ |

**Issues to fix:**
1. Overlay `rgba(10, 14, 35, 0.62)` — raw rgba, 62% opacity. Use `var(--navy-dark)` with CSS opacity or `bg-grad-deep-twilight` at 20–30%.
2. Contact column champagne rules are 2px height — should be 3px.
3. H2 max size `2rem` — below H2 spec of `2.375rem`.

---

## Section 12 — `x-sections.base-footer`

**File:** `resources/views/components/sections/base-footer.blade.php`
**Background:** `var(--navy-dark)`

| Property | Built | Spec | Status |
|---|---|---|---|
| Background | `var(--navy-dark)` | ✓ | ✓ |
| Top border | `1px solid var(--navy-light)` | ✓ subtle separator | ✓ |
| Padding | `py-4` | ✓ footer is slim | ✓ |
| Copyright font | Montserrat (`var(--font-body)`), 0.8rem | Caption = 0.875rem | ⚠ Slightly small |
| Copyright color | `var(--cloud-light)` | ✓ | ✓ |
| Copyright text | `© Copyright 2026 Stop & Go Airport Shuttle Service, Inc. All Rights Reserved.` | Matches §1 legal name ✓ | ✓ |
| Links font | Montserrat, 0.8rem | Caption size | ⚠ Slightly small |
| Links color | `var(--champagne)` | ✓ | ✓ |
| Links alignment | `justify-content: flex-end` | ✓ flush right | ✓ |
| No uppercase | ✓ | ✓ | ✓ |
| No raw hex | ✓ | ✓ | ✓ |

**Issues to fix:**
1. Font-size 0.8rem — caption spec is 0.875rem.

---

## Summary of All Issues by Severity

### ❌ Hard Violations (break brand rules)

| # | Section | Issue |
|---|---|---|
| 1 | category-hero | Photo overlay opacity 42% — spec 20–30% |
| 2 | category-hero | H1 bold weight 700 — spec 800 |
| 3 | category-hero | Subtitle font Poppins — should be Montserrat |
| 4 | travel-in-style | `color: #ffffff` raw hex in PHP variable |
| 5 | free-instant-quote | `background: #ffffff` raw hex on card |
| 6 | free-instant-quote | Box-shadow `rgba(0,0,0,0.08)` raw color literal |
| 7 | service-locations | H2 `color: #ffffff` raw hex |
| 8 | areas-we-serve | `font-family: Poppins, sans-serif` literal — must use `var(--font-head)` |
| 9 | why-choose-us | H2 `65px` fixed — vastly exceeds H2 spec of 38px |
| 10 | why-choose-us | Subtitle `30px` — exceeds Lead spec of 21px |
| 11 | why-choose-us | Section padding `2rem` — should be `py-16` (64px) |
| 12 | why-choose-us | Champagne rule 2px + full-width — should be 3px fit-content (§14) |
| 13 | airport-shuttle-service | Body `line-height: 22px` — raw px, ratio 1.1 (spec 1.7) |
| 14 | airport-shuttle-service | `flex justify-center` on image container — §7 grid-only rule |
| 15 | our-services | H2 max `3rem` (48px) — H1 territory |
| 16 | our-services | H2 weight 800 — H1 weight, H2 spec is 700 |
| 17 | map-contact-section | Overlay `rgba(10,14,35,0.62)` — raw literal + 62% opacity |

### ⚠ Soft Violations (spec drift, not hard-broken)

| # | Section | Issue |
|---|---|---|
| 1 | category-hero | `py-16` — hero should be `py-20` |
| 2 | travel-in-style | No §14 heading underbar — decorative banner-thin used instead |
| 3 | free-instant-quote | H3 weight 400 — spec 600 |
| 4 | free-instant-quote | Champagne underbar uses banner-thin pattern, not §14 |
| 5 | service-locations | No §14 heading underbar on section H2 |
| 6 | service-locations | Body 1.0rem — spec 1.0625rem |
| 7 | areas-we-serve | Link size 25px — off type scale |
| 8 | areas-we-serve | Underbar `margin-top: 1rem` — should be 0.85rem |
| 9 | airport-shuttle-service | Body `20px` — spec 17px |
| 10 | airport-shuttle-service | Body `margin-top: 6rem` — excessive |
| 11 | our-services | H2 color full champagne — should accent bold portion only |
| 12 | our-services | Heading bottom margin `6rem` — standard is 2rem |
| 13 | faq | `py-14` — should be `py-16` |
| 14 | faq | H2 max `2.25rem` — should be `2.375rem` |
| 15 | share-your-experience | `py-14` — should be `py-16` |
| 16 | share-your-experience | Underbar margin `1.5rem` — should be `2rem` |
| 17 | map-contact-section | Champagne column rules 2px — spec 3px |
| 18 | base-footer | Font-size 0.8rem — caption spec 0.875rem |

---

## Cross-Section Patterns to Standardize

1. **Body font-size:** Multiple sections use `1rem` (16px) instead of the spec `1.0625rem` (17px). Affects: travel-in-style ✓, free-instant-quote, service-locations, why-choose-us, airport-shuttle-service, faq, share-your-experience.
2. **Section padding:** Several sections use `py-14` (56px) — all non-hero sections should be `py-16` (64px). Hero should be `py-20`.
3. **Champagne underbar:** Sections using `x-ui.banner-thin-champagne` as a heading underbar substitute. The correct pattern is always the `fit-content` wrapper + `div` at `width:116%` per §14.
4. **Raw hex/rgba:** `#ffffff` and `rgba()` values appear in four sections. All colors must use CSS custom properties.
5. **H2 line-height:** Several sections use 1.25; spec is 1.2.
6. **Large magic margins (`6rem`):** Appears in three sections as arbitrary spacing. Should be standardized to the spacing scale.
