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

---

## Re-Review Update Plan — 2026-06-07

> **Source:** Attached branding re-review PDF reviewed against `docs/branding-requirements.md` and the production comparison above.
> **Status:** All decisions confirmed 2026-06-07. Ready to execute.
> **Status key:** ✅ Confirmed | 🚩 Flagged for later | ❌ Rejected / keep ours

---

### Decisions Record

| # | Topic | Decision |
|---|---|---|
| 1 | Hero min-height | `min-height: 100svh` — full viewport height, no explicit padding |
| 2 | Font references | Always CSS token: `var(--font-head)` and `var(--font-body)` — never literal font-family strings |
| 3 | Heading size format | Clamp for all heading and Lead sizes — breakpoints handle layout, clamp handles fluid type scaling |
| 4 | Letter-spacing | `-1px` on H1, `-0.5px` on H2 and Lead, none on H3 and below |
| 5 | Line-height units | Unitless only (e.g. `1.5`) — never `em`, `rem`, or `px` |
| 6 | H1 and H2 sizes | H1 = **56px** max — `clamp(2rem, 6vw, 3.5rem)`. H2 = **48px** max — `clamp(1.75rem, 5vw, 3rem)` |
| 7 | H2 letter-spacing | **0.5px** positive tracking — universal H2 standard |
| 8 | Inner text panel background | **`var(--navy)`** solid — no gradient |
| 9 | White card BG and image shadow | New tokens: `--white: #ffffff` and `--shadow-card: 0 0 10px 0 rgba(0,0,0,0.5)` |
| 10 | Areas We Serve link font | **Montserrat** via `var(--font-body)` |
| 11 | Areas We Serve link size | **20px** (new body spec) |
| 12 | Areas We Serve letter-spacing | **Remove** — none |
| 13 | Card body size | **17px** — card-specific override. Cards are compact; 20px body would crowd them. |

---

### Spec Changes — `docs/branding-requirements.md`

#### §3 Absolute Rules

| # | Current rule | Change |
|---|---|---|
| 3.1 | "No all-caps / uppercase text anywhere" | Reword to: **"No `text-transform: uppercase` anywhere, outside the approved nav exceptions in §8.2. Mixed case and title case are allowed everywhere."** |
| 3.NEW | (none) | Add: **"Decorative vertical accent lines are not part of the Stop & Go design system and must never be used."** |
| 3.NEW | (none) | Add: **"All `line-height` values must be unitless numbers (e.g. `1.5`) — never `em`, `rem`, or `px`. Unitless line-height avoids CSS inheritance issues."** |

#### §4 Typography — Type Scale (full updated table)

| Level | Size (clamp) | Weight | Font | Letter-spacing | Line-height |
|---|---|---|---|---|---|
| H1 | **`clamp(2rem, 6vw, 3.5rem)`** (max 56px) | **400 base text + 700 bold `<span>`** | Poppins via `var(--font-head)` | **-1px** | 1.2 |
| H2 | **`clamp(1.75rem, 5vw, 3rem)`** (max 48px) | **400 base text + 700 bold `<span>`** | Poppins via `var(--font-head)` | **0.5px** | 1.2 |
| H3 | 30px / 1.875rem — no change | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 |
| H4 | 24px / 1.5rem — no change | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 |
| H5 | 20px / 1.25rem — no change | SemiBold 600 | Poppins via `var(--font-head)` | none | 1.3 |
| Lead (subtitle) | **`clamp(1rem, 2.5vw, 1.3125rem)`** (max 21px) | Regular 400 | **Poppins** via `var(--font-head)` (was Montserrat) | **-0.5px** | 1.5 |
| Body | **20px / 1.25rem** (was 17px) | Regular 400 | Montserrat via `var(--font-body)` | none | **1.5** |
| Caption | 14px / 0.875rem — no change | Regular 400 | Montserrat via `var(--font-body)` | none | — |
| Label / badge | 12px / 0.75rem — no change | SemiBold 600 | Poppins via `var(--font-head)` | none | — |

**New subsection to add — Card-Specific Typography Override:**

> Cards are compact containers. They use a smaller body size to avoid crowding.

| Role | Size | Weight | Font | Color |
|---|---|---|---|---|
| Card H3 title | **25px / 1.5625rem**, Montserrat | Regular 400 | `var(--font-body)` | `var(--champagne)` or `var(--cloud-light)` on dark; `var(--navy)` on light |
| Card body text | **17px / 1.0625rem**, Montserrat | Regular 400 | `var(--font-body)` | `var(--cloud-light)` on dark; `var(--slate)` on light |

#### §5 Color System — new tokens

Add to `:root` in `resources/css/app.css`:

```css
--white: #ffffff;
--shadow-card: 0 0 10px 0 rgba(0, 0, 0, 0.5);
```

- `--white` replaces all `#ffffff` raw hex in component files.
- `--shadow-card` is the standard box-shadow for card images on dark backgrounds.

#### §5.4 Brand Gradients

| Token | Change |
|---|---|
| `bg-grad-deep-twilight` | Clarify intended use: this token is **no longer used for photo overlays**. Photo overlays use `var(--navy-dark)` at **20% opacity**. The gradient token is retained for other decorative uses only. |
| Inner text panel | No gradient — inner text panels use **`var(--navy)` solid background** (`background: var(--navy)`). |

#### §6.3 Cards

Add to the Cards section:

- White card BG: `background: var(--white)` — never `#ffffff` raw hex.
- Card image shadow: `box-shadow: var(--shadow-card)` on images sitting on a dark background.

#### §7 Layout and Spacing

| Item | Old spec | New spec |
|---|---|---|
| Section padding (non-hero) | `py-16` (64px) | **100px top and bottom.** Use `style="padding: 100px 0"` or Tailwind arbitrary value `py-[6.25rem]`. Responsive: `py-12 lg:py-[6.25rem]`. |
| Section padding (hero) | `py-20` | **No padding.** Heroes use `min-height: 100svh` and center content with CSS Grid or flexbox internally. |
| Container max-width | "1280px — `max-w-7xl mx-auto`" | Reword: **"Always `max-w-7xl mx-auto`. Never write `1280px` as a literal in component files."** |

#### §11 Imagery

| Item | Old | New |
|---|---|---|
| Photo overlay | `bg-grad-deep-twilight` at 20–30% | **`var(--navy-dark)` at exactly 20% opacity.** No range; 20% is the standard. |

#### §14 Champagne Rule (Underbar) Standards

**Change 1 — Not required on all sections.** Remove the "every section heading" blanket requirement. Replace with an explicit list:

- **Sections that use the standard underbar:** Travel in Style, Free Instant Quote, Areas We Serve, Why Choose Us, Airport Shuttle Service, Our Services, FAQ, Share Your Experience, Map/Social (social heading only).
- **Sections that do not use it:** Category Hero (hero H1 has no underbar), Service Locations (CTA-style section, no underbar), base-footer.

**Change 2 — New SM label-rule variant.** Add after the "Left-aligned headings" block:

```html
<!-- SM label-rule: used under contact column labels (e.g. map-contact-section) -->
<!-- No fit-content wrapper. Width is 30% of the column container. -->
<div style="height: 3px; background: var(--champagne); width: 30%; margin-top: 0.5rem;"></div>
```

---

### Component Changes — Execution Order

| Order | Target | File | Changes |
|---|---|---|---|
| 1 | Spec | `docs/branding-requirements.md` | All §3, §4, §5, §6, §7, §11, §14 changes above |
| 2 | Hero | `category-hero.blade.php` | Overlay → `var(--navy-dark)` 20%. Min-height → `100svh`. H1 → `clamp(2rem, 6vw, 3.5rem)`, 400+700 split, ls `-1px`, lh `1.2`. Lead → Poppins `clamp(1rem, 2.5vw, 1.3125rem)`, ls `-0.5px`, lh `1.5`. |
| 3 | Travel in Style | `travel-in-style.blade.php` | Padding → 100px. Inner panel → `var(--navy)`. H2 → `clamp(1.75rem, 5vw, 3rem)`, 400+700 split, ls `0.5px`, lh `1.2`. Body → 20px, lh `1.5`. Image → `box-shadow: var(--shadow-card)`. |
| 4 | Free Instant Quote | `free-instant-quote.blade.php` | Padding → 100px. Card BG → `var(--white)`. Right col H3 weight → 600. |
| 5 | Service Locations | `service-locations.blade.php` | H2 color → `var(--cloud-light)`. City sub-headings → H5 (Poppins 20px / 600). Remove champagne underbar. |
| 6 | Areas We Serve | `areas-we-serve.blade.php` | Link font → `var(--font-body)` (Montserrat). Link size → 20px. Remove letter-spacing. Link color → keep section-specific (no violation). |
| 7 | Why Choose Us | `why-choose-us.blade.php` | Padding → 100px. H2 → `clamp(1.75rem, 5vw, 3rem)`, 400+700 split, ls `0.5px`. H2 color → keep cloud+champagne split. Subtitle → 30px. Card H3 → Montserrat 25px. Card body → 17px. |
| 8 | Airport Shuttle | `airport-shuttle-service.blade.php` | Body → 20px, lh `1.5`. (Image container layout deferred.) |
| 9 | Map / Social | `map-contact-section.blade.php` | Social heading → H2 spec (`clamp(1.75rem, 5vw, 3rem)`). Contact strip padding → keep ours. Champagne column dividers → SM label-rule variant (30% width, 3px, `var(--champagne)`). (Photo row padding deferred.) |

---

### Items Flagged for Later

| Item | Section | Note |
|---|---|---|
| Image container layout (`flex`) | airport-shuttle-service | Structural layout refactor, defer |
| Photo row padding | map-contact-section | Flagged by client for later review |

---

## Production Site Comparison — newlenoxlimoservice.com

> **Source:** Live HTML + `post-25492.css` (108 KB Elementor dynamic stylesheet), fetched 2026-06-07.
> **CSS extraction method:** `post-25492.css` for the main home page sections; `post-25492.css` (nav); `post-25501.css` (map/social/contact/footer secondary template). All raw hex values below are as found in Elementor — our build must use CSS custom property equivalents.
> **Reading the status columns:**
> - **vs Spec** — matches `docs/branding-requirements.md`
> - **vs Prod** — our built version matches the live newlenoxlimoservice.com

### How to interpret conflicts

When "vs Spec" and "vs Prod" disagree, the spec wins. Prod breaks our no-caps rule, uses raw hex, and uses non-spec font sizes in many places. Those prod values are noted for awareness, not for copying.

---

### Prod Section ID Map

| Section | Prod element type | Prod ID(s) |
|---|---|---|
| Hero | `elementor-top-section` | `#15e81dd0` |
| Travel in Style | `elementor-top-section` + `elementor-inner-section` | `#315b4c33`, `#249c1e81` |
| Free Instant Quote | `elementor-top-section` | `#47e5b0e7` |
| Service Locations | Elementor container (no `<section>`) | `#fa16df6` |
| Areas We Serve | Elementor container | `#8a00215` |
| Why Choose Us | `elementor-top-section` + 2 inner sections | `#3d2495c`, `#6d3c9919`, `#79fde32d` |
| Airport Shuttle Service | Elementor container (3-col grid child) | `#11793a8` |
| Our Services | Elementor container | `#674b6f5` |
| FAQ | Elementor container | `#9dfb5d4` |
| Share Your Experience | Elementor container | `#66308a3` |
| Map / Social row | `elementor-top-section` + inner | `#7d2bddae`, `#1ca0a42d` |
| Contact strip | `elementor-top-section` | `#4a2b6c64` |
| Footer | `elementor-top-section` | `#417ee9cd` |

---

### Section 1 — Hero (`category-hero`)

**Prod ID:** `#15e81dd0` — `elementor-top-section`
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| BG image | `karl-kohler...jpg`, `bottom center` | `hero-home.jpg`, `center center` | ✓ | ❌ Different photo, different position |
| BG fallback color | `#4E5387` (muted blue-purple) | `var(--navy-dark)` via overlay | — | ❌ |
| Overlay technique | `linear-gradient(180deg, #15162CB3 45%, #0f1223 81%)` | `var(--navy-dark)` flat color | ❌ both fail spec | ❌ Different technique |
| Overlay opacity | **0.7 (70%)** | **0.42 (42%)** | ❌ spec = 20–30% | ❌ Both too dark; prod darker |
| Min-height | `700px` (no explicit padding) | `min-h-[560px]` + `py-16` | ❌ spec = `py-20` | ❌ Prod uses height, not padding |
| H1 line 1 font | Poppins | Poppins `font-head` | ✓ | ✓ |
| H1 line 1 size | **63px** | `clamp(2rem → 3.5rem)` max 56px | ❌ spec 48px | ❌ Prod 63px, ours 56px |
| H1 line 1 weight | **500** | 400 light + 700 bold | ❌ spec 800 | ❌ Neither matches the other |
| H1 line 1 case | **`text-transform: uppercase`** | Mixed case | ❌ spec = no caps | ❌ Prod uppercase; we correctly omit |
| H1 line 1 letter-spacing | **-2.5px** | none | — | ❌ Missing |
| H1 line 1 line-height | **1em** | 1.15 | ❌ spec 1.2 | ❌ |
| H1 line 2 (subtitle) font | Poppins | Poppins | ❌ spec = Montserrat | ⚠ Same wrong font |
| H1 line 2 size | **40px w200** uppercase | `clamp(0.95–1.2rem)` w400 | ❌ spec = Lead 21px | ❌ Prod 40px, ours 19px — far apart |
| H1 line 2 case | **uppercase** | Mixed case | ❌ spec = no caps | ❌ Prod uppercase; we correctly omit |
| H1 line 2 letter-spacing | **-1.5px** | none | — | ❌ Missing |
| Decorative vertical line | Champagne `#E9C79E` spacer, centered | None | — | ❌ Missing element |
| CTA button | `#747474` grey bg, Poppins 24px; hover champagne | `x-ui.button-outline-light` | ✓ spec allows outline-light on dark bg | ❌ Prod uses solid grey |

---

### Section 2 — Travel in Style (`travel-in-style`)

**Prod ID:** `#315b4c33` (outer) + `#249c1e81` (inner) — `elementor-top-section`
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | `#15162c` | `var(--navy)` | ✓ | ✓ Same color, different notation |
| Section padding | **100px top and bottom** | `py-12 lg:py-16` (48–64px) | ❌ spec 64px | ❌ Prod 100px, ours up to 64px |
| Container max-width | 1138px | `max-w-7xl` (1280px) | ✓ | ⚠ Ours slightly wider |
| Inner text panel BG | `linear-gradient(90deg, #1a1c32 93%, transparent)` | None | — | ❌ Prod has dark gradient text panel |
| Inner padding | 35px all sides | None | — | ❌ Prod wraps text in padded inner box |
| H2 font | Poppins | Poppins `font-head` | ✓ | ✓ |
| H2 size | **65px** w500 | `clamp(1.75–2.375rem)` max 38px | ❌ spec 38px | ❌ Prod 65px, ours 38px |
| H2 weight | **500** | 400 + 700 bold | ❌ spec 700 | ❌ Neither matches the other |
| H2 letter-spacing | **1.5px** | none | — | ❌ Missing |
| H2 color | **`#dcb57e`** (full heading champagne) | white + champagne on bold part | ✓ champagne used | ⚠ Prod all-champagne; we split |
| Body font | Montserrat | Montserrat `font-body` | ✓ | ✓ |
| Body size | **20px** | 1.0625rem (17px) | ❌ spec 17px | ❌ Prod 20px, ours 17px |
| Body line-height | **1.5em** | 1.7 | ✓ range | ❌ Prod tighter (1.5 vs 1.7) |
| Body color | white | `var(--cloud)` | ✓ | ⚠ Same visual, different token |
| Image box-shadow | `rgba(0,0,0,0.5)` 10px | None | — | ❌ Missing image drop shadow |
| CTA button | `#747474` grey bg, Poppins 20px, hover champagne | `x-ui.button-outline-champagne` | ✓ spec allows outline-champagne | ❌ Prod uses solid grey |

---

### Section 3 — Free Instant Quote (`free-instant-quote`)

**Prod ID:** `#47e5b0e7` — `elementor-top-section`
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | `#E8E9EC` (cloud grey) | `var(--cloud-light)` | ✓ | ✓ Same color |
| Section padding | **120px top, 60px bottom** (desktop) | `py-12 lg:py-16` (48–64px) | ❌ spec 64px | ❌ Prod top-heavy, much more space |
| Container max-width | 1320px | `max-w-7xl` (1280px) | ✓ | ⚠ Prod slightly wider |
| Form card H2 | Poppins 35px w500 black | `clamp(1.5–2rem)` Poppins w700 navy | ❌ spec 38px | ❌ Prod 35px w500 black; ours 32px w700 navy |
| Right column H3 | Poppins 35px w500 `#DCB57E` champagne | `clamp(1.25–1.875rem)` Poppins w400 navy | ❌ spec H3=600 | ❌ Prod 35px champagne; ours 30px navy |
| Right column body | Not isolated in extracted CSS | Montserrat 1.0rem lh:1.7 `var(--slate)` | ✓ approx | ❓ Cannot confirm prod body size from CSS |
| Form card BG | White (Elementor default) | `background: #ffffff` raw hex | ❌ raw hex in ours | ⚠ Same white; ours uses raw hex |
| CTA button | `#747474` grey bg, hover champagne | `x-ui.button-champagne-solid` | ✓ champagne ✓ | ❌ Prod grey; ours champagne |

---

### Section 4 — Service Locations (`service-locations`)

**Prod ID:** `#fa16df6` — Elementor container (no `<section>` tag, flex display)
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| BG | Not set — inherits navy from parent | `var(--navy)` | ✓ | ✓ Both appear navy |
| Layout | `display:flex; flex-direction:column` (Elementor container) | `grid grid-cols-1 lg:grid-cols-2` | ✓ | ⚠ Different layout approach |
| H2 size | Poppins **65px** w500 champagne (matches pattern from prod headings) | `clamp(1.5–2.375rem)` max 38px | ❌ spec 38px | ❌ Prod 65px, ours 38px |
| H2 color | `#DCB57E` champagne (full heading) | `#ffffff` raw hex + champagne bold part | ❌ raw hex | ❌ Prod all-champagne; ours split with raw hex |
| City sub-headings | Poppins 30px w200 lh:63px ls:0.5px white | Poppins 1.25rem (20px) w600 `var(--champagne)` | ❌ spec H5=20px/600 | ❌ Prod 30px w200 white; totally different |
| Body | Montserrat (size not confirmed in CSS) | Montserrat 1.0rem lh:1.7 `var(--cloud)` | ✓ | ❓ Cannot confirm prod body size |
| Champagne underbar | Not visible in extracted CSS | Missing (§14 violation) | ❌ | ❓ |

---

### Section 5 — Areas We Serve (`areas-we-serve`)

**Prod ID:** `#8a00215` — Elementor container (grid, 1-col mobile)
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | `#E8E9EC` cloud grey | `var(--cloud-light)` | ✓ | ✓ Same color |
| Layout | Grid (1-col mobile, multi-col desktop) | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` | ✓ | ✓ Same pattern |
| Area link font | **Montserrat** (from heading title rules in prod CSS) | `font-family: Poppins, sans-serif` literal | ❌ raw literal in ours | ❌ Prod uses Montserrat; ours uses Poppins |
| Area link size | Montserrat 20px, 19px, 27px, 22px (varied per item) | `font-size: 25px` fixed | ❌ off-scale | ❌ Prod varies; ours fixed 25px |
| Area link letter-spacing | **-2px** (from prod rule) | `-0.01em` | — | ⚠ Both use negative tracking; values differ |
| Area link color | White `#FFFFFF` + champagne hover | `var(--navy)` + `var(--champagne)` hover | ❌ navy on cloud bg | ❌ Prod links are white (prod is on a dark bg); ours are navy (on cloud bg) |

> **Note:** On prod, areas-we-serve appears inside the why-choose-us navy section — not as a standalone cloud section. Our version gives it its own cloud-grey background, which changes the entire color context for link colors.

---

### Section 6 — Why Choose Us (`why-choose-us`)

**Prod ID:** `#3d2495c` (outer, 100px padding) + `#6d3c9919` / `#79fde32d` (inner, 35px padding) — `elementor-top-section`
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | transparent + navy gradient | `var(--navy)` outer + `var(--navy-light)` inlay | ✓ both navy | ✓ Same visual |
| Section padding | **100px top and bottom** | `padding: 2rem` (32px) | ❌ spec 64px | ❌ Prod 100px, ours 32px |
| Inner section padding | **35px all sides** (25px mobile) | `padding: 35px 35px` | ✓ | ✓ Matches prod |
| H2 font | Poppins | Poppins `font-head` | ✓ | ✓ |
| H2 size | **65px** w500 `#DCB57E` | **65px** w400/700 `var(--champagne)` | ❌ spec 38px | ✓ Same 65px size |
| H2 weight | **500** | 400 + 700 bold | ❌ spec 700 | ⚠ Prod 500; ours split 400/700 |
| H2 color | `#DCB57E` champagne (full heading) | `var(--cloud-light)` + `var(--champagne)` bold | ✓ champagne used | ⚠ Prod all-champagne; we split |
| Subtitle font | **Montserrat** | Montserrat `font-body` | ✓ | ✓ |
| Subtitle size | **30px** w400 white | **30px** fixed | ❌ spec Lead=21px | ✓ Same 30px |
| H3 card font | Montserrat 25px (from prod heading rules) | Poppins `clamp(1.1–1.4rem)` max 22px | ❌ spec H3=1.875rem | ❌ Prod Montserrat 25px; ours Poppins 22px |
| Card body | Montserrat 30px w400 white | Montserrat 1rem lh:1.7 `var(--cloud-light)` | ❌ spec 17px | ❌ Prod body text 30px |
| Icons | FA6 + inline SVG (Elementor) | FA6 thumbs-up + inline SVGs | ✓ | ✓ Same icons |

> **Key finding:** The `why-choose-us` H2 at 65px and subtitle at 30px **match prod exactly**. These are intentional prod design choices that also violate our spec. They are spec violations that happen to match prod; the spec fix (38px / 21px) would make us differ from prod.

---

### Section 7 — Airport Shuttle Service (`airport-shuttle-service`)

**Prod ID:** `#11793a8` — Elementor container (3-col grid desktop, 1-col mobile)
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | Not set on container — inherits cloud from parent | `var(--cloud-light)` | ✓ | ✓ |
| Cards grid | 3-col desktop, 1-col mobile | `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` | ✓ | ✓ |
| H2 size | Poppins 40px w500 lh:1em (from prod heading rules — likely section H2) | `clamp(1.6–2.4rem)` max 38px | ❌ spec 38px | ❌ Prod 40px; ours 38px — close |
| Body font-size | Not isolated in CSS | `font-size: 20px` fixed | ❌ spec 17px | ❓ Cannot confirm prod body size |
| Body line-height | Not isolated in CSS | `line-height: 22px` raw px | ❌ spec 1.7 | ❓ Cannot confirm |
| Image aspect ratio | Not in CSS (Elementor widget) | `aspect-ratio: 4/3` | ✓ | ❓ |
| Image container layout | Not in CSS | `flex justify-center` | ❌ §7 grid-only | ❓ |

---

### Section 8 — Our Services (`our-services`)

**Prod ID:** `#674b6f5` — Elementor container (grid)
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | transparent + dark gradient (navy visual) | `var(--navy-dark)` | ✓ | ✓ Same visual result |
| H2 size | Poppins 50px (from prod heading rule sequence) | `clamp(2–3rem)` max 48px | ❌ spec 38px | ⚠ Prod 50px, ours max 48px — close |
| H2 case | Partial uppercase ("Our SERVICES" on prod) | Mixed case ("Our **Services**") | ❌ prod uses caps | ❌ We correctly avoid caps |
| Service card labels | **Uppercase** ("PARTY BUS", "AIRPORT SHUTTLE") on prod | Mixed case labels | ❌ prod caps | ❌ We correctly avoid caps |
| Cards grid | 5-col desktop (from visual) | `grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5` | ✓ | ✓ |

---

### Section 9 — FAQ (`faq`)

**Prod ID:** `#9dfb5d4` — Elementor container
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | `#E8E9EC` cloud grey | `var(--cloud-light)` | ✓ | ✓ Same color |
| H2 size | Poppins 45px lh:1em (from prod heading rules) | `clamp(1.6–2.25rem)` max 36px | ❌ spec 38px | ❌ Prod 45px; ours 36px |
| FAQ answers | Elementor nested accordion widget | Alpine `x-data` accordion | ✓ functional | ⚠ Different technical impl; same UX pattern |
| Answer copy | Slightly different wording on prod | Rewritten at 7th grade level | ✓ | ❌ Copy does not exactly match prod |
| Champagne left border | Cannot confirm from CSS | `border-left: 3px solid var(--champagne)` | ✓ | ❓ |

---

### Section 10 — Share Your Experience (`share-your-experience`)

**Prod ID:** `#66308a3` — Elementor container
**Prod CSS file:** `post-25492.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Section BG | `#E8E9EC` cloud grey | `var(--cloud-light)` | ✓ | ✓ |
| H2 size | Poppins 45px lh:1em (from prod heading rules) | `clamp(1.6–2.5rem)` max 40px | ❌ spec 38px | ❌ Prod 45px; ours 40px — close |
| Inner card BG | Not in CSS (appears dark navy visually) | `var(--navy)` | ✓ | ✓ |
| Location grid | 2-col | `grid grid-cols-1 sm:grid-cols-2` | ✓ | ✓ |
| Review button hrefs | Live Google review URLs | `href="#"` placeholder | — | ❌ Placeholder hrefs not wired to real URLs |

---

### Section 11 — Map / Social (`map-contact-section`)

**Prod ID:** `#7d2bddae` (photo row) + `#4a2b6c64` (contact strip) — `elementor-top-section`
**Prod CSS file:** `post-25501.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Photo row BG | `#15162C` + `car.jpg` `center center` | `var(--navy-dark)` + own car image | ✓ navy | ⚠ Different photo |
| Photo row overlay | `linear-gradient(90deg, #15162CC7, #15162CD1)` at **0.8 opacity (80%)** | `rgba(10,14,35,0.62)` (62%) | ❌ both exceed spec | ❌ Prod 80%; ours 62% |
| Photo row padding | **75px top and bottom** | Custom inline CSS | ❌ spec 64px | ❌ Prod 75px |
| Social heading font | Poppins | Poppins `font-head` | ✓ | ✓ |
| Social heading size | **35px** w500 capitalize white | `clamp(1.5–2rem)` max 32px | ❌ spec H2 38px | ❌ Prod 35px; ours 32px |
| Social heading case | **`text-transform: capitalize`** | Mixed case (no transform) | ✓ no all-caps | ⚠ Prod uses capitalize; we use no transform |
| Social icon border | `#e9c79e` 1px solid; icon `rgba(233,199,158,0.61)` | `x-ui.*-chip` component | ✓ champagne | ⚠ Different impl; same champagne color |
| Contact strip BG | `#15162C` | `var(--navy)` | ✓ | ✓ Same color |
| Contact strip padding | **30px top and bottom** | `py-6` (24px) | ❌ spec 64px | ❌ Prod 30px; ours 24px |
| Contact labels font | **Montserrat** 15px **uppercase** white | Poppins `var(--font-head)` 0.85rem no-uppercase | ❌ spec = no caps | ❌ Prod Montserrat uppercase; ours Poppins no-caps |
| Champagne divider | 3px `#dcb57e`, **width 30%** (short underline) | 2px, small fixed width | ❌ ours 2px | ❌ Prod 30%-width short line; ours smaller 2px line |
| Body text | Montserrat 13px `#F3F3F3` | Montserrat 0.9rem `var(--cloud-light)` | ✓ | ⚠ Prod 13px; ours 14.4px |
| Map left border | `border-left: 10px solid #D1B38E` | `border-left: 4px solid var(--champagne)` | ✓ champagne | ❌ Prod 10px; ours 4px |
| Map overlap | `margin-top: -300px` (overlaps photo row) | No overlap | — | ❌ Prod creates dramatic vertical overlap |
| Map height | `height: 445px` | `aspect-ratio: 1/1` | — | ❌ Different sizing approach |

---

### Section 12 — Footer (`base-footer`)

**Prod ID:** `#417ee9cd` — `elementor-top-section`
**Prod CSS file:** `post-25501.css`

| Property | Prod value | Our value | vs Spec | vs Prod |
|---|---|---|---|---|
| Background | `linear-gradient(180deg, #15162C 0%, #1A1C32 100%)` | `var(--navy-dark)` flat color | ✓ navy | ⚠ Prod gradient; ours flat |
| Top border | `1px solid rgba(232,232,232,0.47)` semi-white | `1px solid var(--navy-light)` | ✓ | ⚠ Prod semi-white; ours navy-light |
| Padding | **10px top and bottom** | `py-4` (16px) | — | ⚠ Prod slimmer (10px vs 16px) |
| Copyright font | Montserrat 12px lh:1.5em white | Montserrat 0.8rem `var(--cloud-light)` | ✓ | ✓ Near match |
| Copyright year | **"2025"** | **"2026"** | — | ❌ Prod not updated; ours is correct |
| Business name in copyright | "Stop & Go **Shuttle** Service Inc." | "Stop & Go **Airport Shuttle** Service, Inc." | ✓ ours uses legal name | ⚠ Prod omits "Airport" — ours is correct |
| Footer links font | Montserrat 12px `#dcb57e` champagne | Montserrat 0.8rem `var(--champagne)` | ✓ | ✓ |
| Links alignment | Right-aligned | `justify-content: flex-end` | ✓ | ✓ |

---

### Production Comparison — Key Findings

| Finding | Impact |
|---|---|
| **Prod H2 sizes are 65px, not 38px** | Every major section heading on prod is 65px. Only our `why-choose-us` and `travel-in-style` match prod on size; the rest match spec instead. |
| **Prod section padding is 100px** | Most prod sections use 100px top/bottom. Our sections use 48–64px. This is the largest single cause of visible height difference. |
| **Prod uses uppercase on hero, service cards, contact labels** | Prod breaks the no-caps rule in many places. Our build correctly avoids this per spec. |
| **Area links use Montserrat on prod, Poppins on ours** | In `areas-we-serve`, prod uses Montserrat for city names; ours uses Poppins (and a raw font-family literal, which is also a spec violation). |
| **Prod map border is 10px with -300px overlap** | The map on prod dramatically overlaps the photo row via a -300px margin-top. We don't replicate this effect. |
| **Prod CTA buttons are solid grey (`#747474`)** | Both hero and travel-in-style use a grey solid button on prod. Our buttons use outline or champagne-solid variants per spec. |
| **Prod footer copyright says 2025, omits "Airport"** | Our 2026 date and full legal name ("Airport Shuttle") are both correct. Prod has not been updated. |
| **Prod contact labels use Montserrat uppercase** | Our build uses Poppins with no uppercase — correct per spec. |
| **`areas-we-serve` background context differs** | On prod, city links appear white-on-navy because they're nested inside the why-choose-us dark section. Our standalone `var(--cloud-light)` bg requires navy link colors instead. |

---

## Section Component Standardization — Full Audit (2026-06-07)

> All 13 active blade files in `resources/views/components/sections/` were audited against `docs/branding-requirements.md`. The `old/` subdirectory is legacy print-shop content from the previous brand and is out of scope.

### Violations checklist applied to every file

| # | Rule | What to look for |
|---|---|---|
| V1 | Section padding | `py-12 lg:py-[6.25rem]` for content sections. Heroes use `min-height: 100svh`, no `py`. |
| V2 | H1 spec | `clamp(2rem, 6vw, 3.5rem)`, 400+700 split, `letter-spacing: -1px`, `line-height: 1.2` |
| V3 | H2 spec | `clamp(1.75rem, 5vw, 3rem)`, 400+700 split, `letter-spacing: 0.5px`, `line-height: 1.2` |
| V4 | H5 spec | Poppins 20px / 600 — city sub-headings in location and experience sections |
| V5 | Body spec | 20px / 1.25rem, `line-height: 1.5`, Montserrat via `var(--font-body)` |
| V6 | Card body override | 17px / 1.0625rem in compact card containers |
| V7 | Card H3 override | Montserrat 25px via `var(--font-body)` |
| V8 | Raw hex | Replace `#ffffff` with `var(--white)`. No other raw hex allowed. |
| V9 | Raw font-family | Replace `'Poppins', sans-serif` / `'Montserrat', sans-serif` with `var(--font-head)` / `var(--font-body)` |
| V10 | px line-height | Replace all `line-height: Npx` with unitless equivalents |
| V11 | Image overlay | `var(--navy-dark)` at exactly 20% opacity |
| V12 | Image shadow | `box-shadow: var(--shadow-card)` on card images on dark backgrounds |
| V13 | No text-transform: uppercase | Anywhere outside §8.2 nav exceptions |
| V14 | No decorative vertical lines | Never in any component |
| V15 | Champagne rule | Standard variant (116% width, fit-content wrapper) or SM label-rule (30% width, no wrapper) per §14 |

---

### File-by-file audit results

#### 1. `category-hero.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 Hero | `min-h-[28rem] sm:min-h-[36rem] lg:min-h-[560px] py-16` | `style="min-height: 100svh;"` — no py |
| V11 Overlay | `var(--navy-dark)` at opacity 0.42 | opacity 0.2 |
| V2 H1 size | `clamp(2rem, 5vw, 3.5rem)` | `clamp(2rem, 6vw, 3.5rem)` |
| V2 H1 ls | none | `letter-spacing: -1px` |
| V2 H1 lh | `1.15` | `1.2` |
| V5 Subtitle | `clamp(0.95rem, 2.2vw, 1.2rem)`, `letter-spacing: 0.01em` | Lead spec: `clamp(1rem, 2.5vw, 1.3125rem)`, `letter-spacing: -0.5px`, `line-height: 1.5` |
| V5 Body | `1.0625rem / 1.7` | `1.25rem / 1.5` |

#### 2. `travel-in-style.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-12 lg:py-16` | `py-12 lg:py-[6.25rem]` |
| V8 | `color: #ffffff` in PHP var | `color: var(--white)` |
| V3 H2 size | `clamp(1.75rem, 4vw, 2.375rem)` | `clamp(1.75rem, 5vw, 3rem)` |
| V3 H2 ls | none | `letter-spacing: 0.5px` |
| V3 H2 lh | `1.2` | `1.2` (already correct) |
| V5 Body | `1.0625rem / 1.7` | `1.25rem / 1.5` |
| V12 Image | no shadow | `box-shadow: var(--shadow-card)` |
| Inner panel | no background on text column | `background: var(--navy); padding: 2.5rem` on navy variant |

#### 3. `free-instant-quote.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-12 lg:py-16` | `py-12 lg:py-[6.25rem]` |
| V8 | 9 instances of `background: #ffffff` | All → `background: var(--white)` |
| V3 Right H3 weight | `font-weight: 400` | `font-weight: 600` |
| V5 Body | `1.0rem / 1.7` | `1.25rem / 1.5` |

#### 4. `service-locations.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-12 lg:py-16` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `color: #ffffff` raw hex, `clamp(1.5rem, 3.5vw, 2.375rem)` | `color: var(--cloud-light)`, `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V4 City | `h3` 1.25rem/600 | `h5` tag, 1.25rem/600 (spec-correct) |
| V5 Body | `0.9375rem / 1.6` | `1.25rem / 1.5` |

#### 5. `areas-we-serve.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-12 lg:py-16` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `clamp(1.5rem, 3.5vw, 2.375rem)` | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V9 Link font | `font-family: Poppins, sans-serif` literal | `font-family: var(--font-body)` (Montserrat) |
| V5 Link size | `25px` | `1.25rem` (20px) |
| Link ls | `-0.01em` | removed |

#### 6. `why-choose-us.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | Outer `padding: 2rem 2rem` | `padding: 6.25rem 2rem` (100px top/bottom, 2rem side band) |
| V3 H2 | `65px` fixed | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px`, `line-height: 1.2` |
| V7 Card H3 | Poppins, `clamp(1.1rem, 2vw, 1.4rem)` | `font-body` (Montserrat), `1.5625rem` (25px) |
| V6 Card body | `1rem / 1.7` | `1.0625rem / 1.7` (17px card override) |

#### 7. `airport-shuttle-service.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-16` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `clamp(1.6rem, 3.5vw, 2.4rem)` | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V10 Body lh | `line-height: 22px` raw px | `line-height: 1.5` |
| V5 Body size | `20px` | `1.25rem` (unitless rem, same visual) |

#### 8. `map-contact-section.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V3 Social H2 | `clamp(1.5rem, 2.5vw, 2rem)`, no ls | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V15 Dividers | `height: 2px`, `width: 3rem` fixed | SM label-rule: `height: 3px`, `width: 30%`, `margin-top: 0.5rem` |

#### 9. `our-services.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-16` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `clamp(2rem, 4vw, 3rem)`, full-champagne color | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px`, base color `var(--cloud-light)`, bold `var(--champagne)` |
| V3 H2 weight | bold `font-weight: 800` | `font-weight: 700` |

#### 10. `faq.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-14` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `clamp(1.6rem, 3.5vw, 2.25rem)` | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V5 Question | `font-size: 1rem` | `1.25rem` |
| V5 Answer | `font-size: 1rem / line-height: 1.75` | `1.25rem / 1.5` |

#### 11. `share-your-experience.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V1 | `py-14` | `py-12 lg:py-[6.25rem]` |
| V3 H2 | `clamp(1.6rem, 3.5vw, 2.5rem)` | `clamp(1.75rem, 5vw, 3rem)`, `letter-spacing: 0.5px` |
| V5 Body | `font-size: 1rem / line-height: 1.75` | `1.25rem / 1.5` |
| V4 City | `h3`, `1.375rem` | `h5` tag, `1.25rem` (H5 spec) |
| V5 Address | `1rem / 1.85` | `1.25rem / 1.5` |

#### 12. `cta-free-quote-banner.blade.php` — Updated

| Violation | Before | After |
|---|---|---|
| V3 H2 size | `clamp(1.5rem, 3vw, 2.25rem)` | `clamp(1.75rem, 5vw, 3rem)` |
| V3 H2 ls | none | `letter-spacing: 0.5px` |
| V3 H2 lh | none | `line-height: 1.2` |
| V5 Subheading | `font-size: 1rem`, no lh | `1.25rem / 1.5` |
| Button | Inline hand-rolled `<a>` tag | `x-ui.button-champagne-solid` component |

> **Note — CTA banner padding:** This is a compact action strip, not a standard content section. Padding is intentionally smaller (`3rem 1.5rem`) than the 100px content section standard. This is a documented exception.

#### 13. `base-footer.blade.php` — No changes needed

All properties already spec-compliant: `var(--font-body)` throughout, no raw hex, no raw font-family literals, no px line-height, correct champagne link colors, correct 2026 year and legal business name.

---

### Remaining known violations (deferred)

| Item | File | Reason deferred |
|---|---|---|
| Image container uses `flex` layout | `airport-shuttle-service.blade.php` | Structural refactor, deferred per plan |
| Photo row padding | `map-contact-section.blade.php` | Flagged for client review |
| Inline CTA button hand-rolled | `cta-free-quote-banner.blade.php` | Fixed in this pass |
| Map overlay `rgba(10,14,35,0.62)` raw color | `map-contact-section.blade.php` | Functional overlay; token equivalent pending |

---

## Standard Hero Template Pattern — `x-sections.category-hero`

> **Documented:** 2026-06-09
> **File:** `resources/views/components/sections/category-hero.blade.php`
> **Reference:** `docs/branding-requirements.md` §4 (Typography), §7 (Layout), §11 (Imagery)

### Purpose

The `category-hero` component is the **single approved hero template** for all pages on the site. Every page hero must use this component and pass parameters — never hand-roll a custom hero section.

### Props Reference

| Prop | Type | Default | Description |
|---|---|---|---|
| `heading` | string | `'Elevate Your Travel Experience'` | H1 first line, Regular 400 weight |
| `headingBold` | string | `'With Luxury and Comfort'` | H1 second line, Bold 700 weight |
| `subtitle` | string | `'Discover the joy of seamless journeys'` | Lead text line 1, Poppins 400 |
| `subtitleIn` | string | `''` | Lead text line 2, used for location suffix (e.g. `"in Plainfield, Illinois"`) — renders as a separate `<span class="block">` beneath `subtitle` |
| `description` | string | `''` | Optional body paragraph, Montserrat 1.25rem, max-width 680px. Omit on simple hero pages. |
| `buttonText` | string | `'Book a Ride'` | CTA label |
| `buttonHref` | string | `'/contact'` | CTA destination. Passing `/contact` or `/booking` auto-triggers the contact modal instead of a page link. |
| `buttonRadius` | string | `'soft'` | Button corner radius: `square`, `soft`, `rounded`, `pill` |
| `image` | string | `'/images/heroes/hero-home.jpg'` | Full-bleed background photo path. All hero images live in `public/images/heroes/`. |
| `imagePosition` | string | `'center center'` | CSS `object-position` value for background photo cropping |

### Usage Pattern

```blade
<x-sections.category-hero
    heading="About"
    headingBold="Us"
    subtitle="The Most Convenient Shuttle Service"
    subtitleIn="in Plainfield, Illinois"
    description="Optional body paragraph text here."
    buttonText="Book a Ride"
    buttonHref="/contact"
    image="/images/heroes/stopngolimo-about-us.jpg"
    imagePosition="center center"
/>
```

### Layout and Typography Standards

- **Section height:** `min-height: 100svh` — always full viewport height. No vertical padding; content centers internally via flex.
- **Content alignment:** Always `text-center`. The content wrapper is `max-w-4xl mx-auto px-6`.
- **H1:** Poppins (`font-head`), `clamp(2rem, 6vw, 3.5rem)`, line-height `1.2`, letter-spacing `-1px`. Two-line weight split: `heading` is Regular 400, `headingBold` is Bold 700.
- **Subtitle (Lead):** Poppins (`font-head`), `clamp(1rem, 2.5vw, 1.3125rem)`, weight 400, line-height `1.5`, letter-spacing `-0.5px`, opacity `0.9`, `text-align: center`. The `subtitleIn` location suffix renders as a second `<span class="block">` at the same size and weight — same Lead style, new line.
- **Description (Body):** Montserrat (`font-body`), `1.25rem`, line-height `1.5`, `max-width: 680px`, opacity `0.85`. Only include when the page needs an introductory paragraph in the hero.
- **Button:** `x-ui.button-outline-light` — ghost white on dark. Default radius `soft`.

### Imagery Standards

- All hero images saved to `public/images/heroes/` using the naming pattern `stopngolimo-[page-slug].jpg`.
- Overlay: `var(--navy-dark)` at exactly **20% opacity** on an absolute-inset `<div>` over the photo. Never use a gradient token for photo overlays.
- No rounded corners on the image container.

### `subtitleIn` Convention

Use `subtitleIn` whenever the hero subtitle has a location-specific suffix. This keeps the base subtitle reusable across pages while making the location easy to swap.

**Examples:**
- About Us: `subtitle="The Most Convenient Shuttle Service"` + `subtitleIn="in Plainfield, Illinois"`
- Service area page: `subtitle="Airport Shuttle Service"` + `subtitleIn="in New Lenox, Illinois"`
- Generic page (no location): pass only `subtitle`, leave `subtitleIn` empty or omit it.
