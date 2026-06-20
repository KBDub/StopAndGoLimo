# Stop & Go Limo — Font & Typography Reference

> **mnc note:** This document is analysis and reference only. No component or CSS files were changed to produce it.

---

## 1. Typefaces

Two typefaces only. Never introduce a third.

| Role | Family | CSS token | Tailwind class | Weights in use |
|---|---|---|---|---|
| Headings, buttons, nav, labels | Poppins | `var(--font-head)` | `font-head` | 300, 400, 500, 600, 700, 800 |
| Body, captions, paragraphs, UI | Montserrat | `var(--font-body)` | `font-body` | 300, 400, 500, 600, 700 |

**Rule:** Always reference the CSS token (`var(--font-head)` / `var(--font-body)`) or the Tailwind class (`font-head` / `font-body`). Never write a literal `'Poppins', sans-serif` string in a component.

---

## 2. Approved Type Scale (Branding Standard)

This is the authoritative scale from `docs/branding-requirements.md` §4, confirmed by the `/demo` page type-scale section.

| Level | Size / Formula | Weight split | Font | Letter-spacing | Line-height | Usage |
|---|---|---|---|---|---|---|
| **H1** | `clamp(2rem, 6vw, 3.5rem)` — max **56px** | 400 base + 700 bold `<strong>` | Poppins | -1px | 1.2 | Page hero titles (`x-sections.category-hero`) |
| **H2** | `clamp(1.75rem, 5vw, 3rem)` — max **48px** | 400 base + 700 bold `<strong>` | Poppins | 0.5px | 1.2 | Section headings (all standard section components) |
| **H3** | 30px / 1.875rem | SemiBold 600 | Poppins | none | 1.3 | Subsection headings |
| **H4** | 24px / 1.5rem | SemiBold 600 | Poppins | none | 1.3 | Card titles, champagne accent color |
| **H5** | 20px / 1.25rem | SemiBold 600 | Poppins | none | 1.3 | Minor headings |
| **Lead** | `clamp(1rem, 2.5vw, 1.3125rem)` — max **21px** | Regular 400 | Poppins | -0.5px | 1.5 | Hero subtitle, intro paragraph |
| **Body** | 20px / 1.25rem | Regular 400 | Montserrat | none | 1.5 | General content |
| **Card body** | 17px / 1.0625rem | Regular 400 | Montserrat | none | 1.65 | Body text inside compact cards |
| **Caption** | 14px / 0.875rem | Regular 400 | Montserrat | none | — | Image captions, meta |
| **Label / badge** | 12px / 0.75rem | SemiBold 600 | Poppins | tracking-widest | — | Section labels, tag chips |
| **Button** | 18px | SemiBold 600 | Poppins | tracking-wide | — | All buttons |
| **Nav link** | 20px (desktop) / 15px (mobile) | Regular 400 | Poppins | — | — | Navigation |

**Weight split pattern (H1 & H2):** The base sentence text is Regular 400. The key word or phrase uses a `<strong>` tag at Bold 700. This creates visual emphasis without changing the heading size. Example: `Driven by <strong>Experts</strong>`.

---

## 3. Where Sizes Actually Come From — The Three Systems

There are three parallel systems defining font sizes in this project. They do not all agree, and only one of them is actually used in section components.

### 3.1 — CSS Custom Properties (`app.css :root`)

Defined globally. Applied to bare `<h1>`–`<h5>` HTML tags by the global typography rules in `app.css`. **Section components override these with inline styles.**

| Token | Desktop | Mobile (`< 768px`) |
|---|---|---|
| `--font-size-h1` | 32px | 28px |
| `--font-size-h2` | 32px | 28px |
| `--font-size-h3` | 28px | 24px |
| `--font-size-h4` | 24px | 20px |
| `--font-size-h5` | 20px | 18px |
| `--font-size-body-lg` | 22px | — |
| `--font-size-body` | 20px | 18px |
| `--font-size-body-sm` | 18px | — |
| `--font-size-caption` | 16px | — |
| `--font-size-button` | 18px | — |
| `--font-size-nav` | 18px | — |

### 3.2 — Tailwind Config (`tailwind.config.js` `fontSize`)

Custom Tailwind size tokens. Used via `text-h1`, `text-h2`, etc. **These are only applied by the global `h1`/`h2` rules in `app.css`. Section components do not use them directly.**

| Token | Size | Line-height | Font-weight |
|---|---|---|---|
| `text-h1` | 32px | 1.2 | 700 |
| `text-h2` | 32px | 1.3 | 700 |
| `text-h3` | 28px | 1.3 | 600 |
| `text-h4` | 24px | 1.4 | 600 |
| `text-h5` | 20px | 1.4 | 600 |

### 3.3 — Inline `clamp()` Styles in Section Components (the de-facto standard)

Every section component uses hardcoded inline `font-size: clamp(...)` on its heading elements. This is what actually renders on the site. The CSS tokens and Tailwind tokens above have no effect on section headings.

| Pattern | Max size | Used by |
|---|---|---|
| `clamp(2rem, 6vw, 3.5rem)` | **56px** | `category-hero` (H1 only) |
| `clamp(1.75rem, 5vw, 3rem)` | **48px** | All 22 standard H2 section components (see §4) |
| `clamp(1.5rem, 3vw, 2.25rem)` | **36px** | `banner-image` (intentionally smaller H2) |
| `clamp(1.5rem, 4vw, 2.25rem)` | **36px** | `image-slide-in` (intentionally smaller H2) |
| `clamp(1.5rem, 3.5vw, 2.25rem)` | **36px** | `text-block-slide-in` (intentionally smaller H2) |
| `clamp(1.5rem, 3vw, 2rem)` | **32px** | `free-instant-quote` form heading (compact context) |
| `clamp(1.25rem, 2.5vw, 1.875rem)` | **30px** | `free-instant-quote` description H3 |
| `clamp(1rem, 2.5vw, 1.3125rem)` | **21px** | Lead / subtitle text |

---

## 4. The 22 Standard H2 Section Components

All of the following use exactly `clamp(1.75rem, 5vw, 3rem)` for their main section heading. A change to this value touches all of them.

| Component | File |
|---|---|
| `x-sections.travel-in-style` | `sections/travel-in-style.blade.php` |
| `x-sections.info-strip` | `sections/info-strip.blade.php` |
| `x-sections.areas-we-serve` | `sections/areas-we-serve.blade.php` |
| `x-sections.faq` | `sections/faq.blade.php` |
| `x-sections.our-services` | `sections/our-services.blade.php` |
| `x-sections.our-mission` | `sections/our-mission.blade.php` |
| `x-sections.who-are-we` | `sections/who-are-we.blade.php` |
| `x-sections.why-choose-us` | `sections/why-choose-us.blade.php` |
| `x-sections.review-slider` | `sections/review-slider.blade.php` |
| `x-sections.share-your-experience` | `sections/share-your-experience.blade.php` |
| `x-sections.cta-free-quote-banner` | `sections/cta-free-quote-banner.blade.php` |
| `x-sections.company-highlight` | `sections/company-highlight.blade.php` |
| `x-sections.airport-shuttle-service` | `sections/airport-shuttle-service.blade.php` |
| `x-sections.map-contact-section` | `sections/map-contact-section.blade.php` |
| `x-sections.our-key-offers` | `sections/our-key-offers.blade.php` |
| `x-sections.party-limo-image` | `sections/party-limo-image.blade.php` |
| `x-sections.points-of-interest` | `sections/points-of-interest.blade.php` |
| `x-sections.rates-table` | `sections/rates-table.blade.php` |
| `x-sections.our-story` | `sections/our-story.blade.php` |
| `x-sections.service-locations` | `sections/service-locations.blade.php` |
| `x-sections.image-info-card` | `sections/image-info-card.blade.php` |
| `x-sections.category-hero` (description line) | `sections/category-hero.blade.php` line 53 |

---

## 5. Discrepancies Found

These are mismatches between the three systems. No changes have been made — this is analysis only.

| # | Where | Expected (branding doc) | Actual (code) | Gap |
|---|---|---|---|---|
| 1 | `--font-size-h1` / `text-h1` tokens | 56px max (clamp) | 32px flat | Tokens are ~24px smaller than the actual rendered H1. Tokens only hit bare `<h1>` tags, which rarely appear outside section components. |
| 2 | `--font-size-h2` / `text-h2` tokens | 48px max (clamp) | 32px flat | Same issue. Tokens only govern bare `<h2>` tags, not section headings. |
| 3 | `--font-size-h3` token | 30px (1.875rem) per branding doc | 28px in `app.css`, 28px in Tailwind config | 2px shortfall in the tokens vs. the branding specification. |
| 4 | Token usage in section components | Tokens should be the single source of truth | Inline `clamp()` values are hardcoded per component | No section component reads from `--font-size-*` or `text-h*` — the tokens are orphaned for heading use. |

**Root cause:** The tokens predate the clamp-based fluid type scale. When fluid sizing was adopted for section headings, the tokens were never updated to reflect it, and components wrote their own inline values instead of consuming a token.

---

## 6. Pending Proposed Changes (not yet applied)

Per the conversation of 2025-06-20, the following size changes have been discussed but not made:

| Level | Current clamp max | Proposed max | Scope |
|---|---|---|---|
| H2 (standard section headings) | `3rem` (48px) | `2.5rem` (40px) | 22 section component files |
| H1 (category hero) | `3.5rem` (56px) | `3.75rem` (60px) | `category-hero.blade.php` only |

If these changes are approved, all 22 files in §4 above would need their `clamp(1.75rem, 5vw, 3rem)` updated to `clamp(1.75rem, 5vw, 2.5rem)`, and `category-hero.blade.php` line 37 would change from `clamp(2rem, 6vw, 3.5rem)` to `clamp(2rem, 6vw, 3.75rem)`.

---

## 7. Rules Summary (Quick Reference)

- **Only two typefaces:** Poppins (`font-head`) for headings/buttons/nav, Montserrat (`font-body`) for body/UI. No third font.
- **Always use the token**, not a literal font-family string.
- **H1 and H2 use the weight-split pattern:** 400 base text + 700 `<strong>` for the bold word. Do not bold the entire heading.
- **All section component headings use inline `clamp()`.** Do not use `text-h1` / `text-h2` Tailwind classes or `--font-size-h*` tokens for section headings — they are not fluid and will look undersized.
- **No all-caps** anywhere except `.nav-link` (approved exception). No `text-transform: uppercase` on headings.
- **No third color for headings.** Heading base text takes the section's primary text color (navy on light, white/cloud on dark). The bold word uses `var(--champagne)`.
- **7th-grade reading level.** Short sentences, plain words.
