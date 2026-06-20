# Stop & Go Limo — Font & Typography Reference

> **Single source of truth:** All heading font sizes and letter-spacing live in CSS custom properties in `app.css`. Components consume `var(--font-size-h*)` and `var(--letter-spacing-h*)` — never hardcoded values.

---

## 1. Typefaces

Two typefaces only. Never introduce a third.

| Role | Family | CSS token | Tailwind class | Weights in use |
|---|---|---|---|---|
| Headings, buttons, nav, labels | Poppins | `var(--font-head)` | `font-head` | 300, 400, 500, 600, 700, 800 |
| Body, captions, paragraphs, UI | Montserrat | `var(--font-body)` | `font-body` | 300, 400, 500, 600, 700 |

**Rule:** Always reference the CSS token or Tailwind class. Never write a literal `'Poppins', sans-serif` string in a component.

---

## 2. Approved Type Scale

This is the authoritative scale. All values live as CSS custom properties in `app.css :root`.

| Level | CSS token | Value | Max | Weight split | Letter-spacing token | LH | Use |
|---|---|---|---|---|---|---|---|
| **H1** | `var(--font-size-h1)` | `clamp(2rem, 6vw, 3.75rem)` | **60px** | 400 base + 700 `<strong>` | `var(--letter-spacing-h1)` (-1px) | 1.2 | Page hero titles |
| **H2** | `var(--font-size-h2)` | `clamp(1.75rem, 5vw, 2.5rem)` | **40px** | 400 base + 700 `<strong>` | `var(--letter-spacing-h2)` (0.5px) | 1.2 | Section headings |
| **H3** | `var(--font-size-h3)` | `1.875rem` | **30px** | SemiBold 600 | none | 1.3 | Subsection headings |
| **H4** | `var(--font-size-h4)` | `1.5rem` | **24px** | SemiBold 600 | none | 1.4 | Card titles |
| **H5** | `var(--font-size-h5)` | `1.25rem` | **20px** | SemiBold 600 | none | 1.4 | Minor headings |
| **Lead** | — | `clamp(1rem, 2.5vw, 1.3125rem)` | **21px** | Regular 400 | `var(--letter-spacing-lead)` (-0.5px) | 1.5 | Hero subtitle, intro |
| **Body** | `var(--font-size-body)` | `1.25rem` | **20px** | Regular 400 | none | 1.5 | General content |
| **Card body** | — | `1.0625rem` | **17px** | Regular 400 | none | 1.65 | Body inside compact cards |
| **Body sm** | `var(--font-size-body-sm)` | `1.125rem` | **18px** | Regular 400 | none | — | Small body, captions |
| **Caption** | `var(--font-size-caption)` | `0.875rem` | **14px** | Regular 400 | none | — | Image captions, meta |
| **Label / badge** | — | `0.75rem` | **12px** | SemiBold 600 | tracking-widest | — | Section labels, tag chips |
| **Button** | `var(--font-size-button)` | `1.125rem` | **18px** | SemiBold 600 | tracking-wide | — | All buttons |
| **Nav link** | `var(--font-size-nav)` | `1.125rem` | **18px** | Regular 400 | — | — | Navigation |

**H1 and H2 use the weight-split pattern:** The base sentence is Regular 400. The key word or phrase uses `<strong>` at Bold 700. Example: `Every Area <strong>Covered</strong>`.

**H1 and H2 are fluid:** The `clamp()` expression is baked into the token itself, so no mobile breakpoint override is needed. The clamp minimum (2rem / 1.75rem) acts as the mobile floor.

---

## 3. CSS Custom Properties (`app.css :root`)

```css
--font-size-h1: clamp(2rem, 6vw, 3.75rem);   /* max 60px */
--font-size-h2: clamp(1.75rem, 5vw, 2.5rem); /* max 40px */
--font-size-h3: 1.875rem;                     /* 30px */
--font-size-h4: 1.5rem;                       /* 24px */
--font-size-h5: 1.25rem;                      /* 20px */

--letter-spacing-h1: -1px;
--letter-spacing-h2: 0.5px;
--letter-spacing-lead: -0.5px;
```

**Mobile breakpoint (`< 768px`):** H1, H2, H3 require no override — clamp handles fluid scaling. H4/H5/Body have explicit mobile token overrides.

---

## 4. Tailwind Config (`tailwind.config.js`)

The Tailwind `text-h*` tokens reflect the max (desktop) value of each level. They are used for bare `<h*>` HTML tags via global rules in `app.css`. Section components consume the CSS custom properties directly.

| Token | Size | LH | Weight | Letter-spacing |
|---|---|---|---|---|
| `text-h1` | 60px | 1.2 | 400 | -1px |
| `text-h2` | 40px | 1.2 | 400 | 0.5px |
| `text-h3` | 30px | 1.3 | 600 | — |
| `text-h4` | 24px | 1.4 | 600 | — |
| `text-h5` | 20px | 1.4 | 600 | — |

---

## 5. How to Write a Heading in a Section Component

```html
{{-- H1 (category-hero only) --}}
<h1 class="font-head" style="font-size: var(--font-size-h1); line-height: 1.2; letter-spacing: var(--letter-spacing-h1);">
    Base text <strong style="font-weight: 700;">Bold word</strong>
</h1>

{{-- H2 (all standard sections) --}}
<h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; line-height: 1.2; letter-spacing: var(--letter-spacing-h2); color: var(--navy);">
    Base text <strong style="font-weight: 700; color: var(--champagne);">Bold word</strong>
</h2>
```

**Never hardcode a `clamp()` expression or pixel value** in a component heading. Change the token in `app.css` once and it propagates everywhere.

---

## 6. Section Components Using the Standard H2 Token

All 25 section components listed below use `font-size: var(--font-size-h2)` and `letter-spacing: var(--letter-spacing-h2)`. Changing `--font-size-h2` in `app.css` updates all of them instantly.

| Component | File |
|---|---|
| `x-sections.airport-shuttle-service` | `sections/airport-shuttle-service.blade.php` |
| `x-sections.areas-we-serve` | `sections/areas-we-serve.blade.php` |
| `x-sections.category-hero` (subtitle line) | `sections/category-hero.blade.php` |
| `x-sections.company-highlight` | `sections/company-highlight.blade.php` |
| `x-sections.cta-free-quote-banner` | `sections/cta-free-quote-banner.blade.php` |
| `x-sections.faq` | `sections/faq.blade.php` |
| `x-sections.free-instant-quote` | `sections/free-instant-quote.blade.php` |
| `x-sections.image-info-card` | `sections/image-info-card.blade.php` |
| `x-sections.image-slide-in` | `sections/image-slide-in.blade.php` |
| `x-sections.info-strip` | `sections/info-strip.blade.php` |
| `x-sections.map-contact-section` | `sections/map-contact-section.blade.php` |
| `x-sections.our-key-offers` | `sections/our-key-offers.blade.php` |
| `x-sections.our-mission` | `sections/our-mission.blade.php` |
| `x-sections.our-services` | `sections/our-services.blade.php` |
| `x-sections.our-story` | `sections/our-story.blade.php` |
| `x-sections.party-limo-image` | `sections/party-limo-image.blade.php` |
| `x-sections.points-of-interest` | `sections/points-of-interest.blade.php` |
| `x-sections.rates-table` | `sections/rates-table.blade.php` |
| `x-sections.review-slider` | `sections/review-slider.blade.php` |
| `x-sections.service-locations` | `sections/service-locations.blade.php` |
| `x-sections.share-your-experience` | `sections/share-your-experience.blade.php` |
| `x-sections.text-block-slide-in` | `sections/text-block-slide-in.blade.php` |
| `x-sections.travel-in-style` | `sections/travel-in-style.blade.php` |
| `x-sections.who-are-we` | `sections/who-are-we.blade.php` |
| `x-sections.why-choose-us` | `sections/why-choose-us.blade.php` |

---

## 7. Rules Summary

- **Tokens are the source of truth.** Change a size once in `app.css`, it applies everywhere.
- **H1 and H2 are fluid via clamp.** No mobile breakpoint override needed.
- **Always use `var(--font-size-h*)` in component headings.** Never hardcode `clamp()`, `px`, or `rem` values for H1–H3.
- **Always use `var(--letter-spacing-h*)` alongside the matching font-size token.**
- **Weight split on H1 and H2:** Regular 400 base + `<strong>` Bold 700 for the key word.
- **No all-caps** anywhere except `.nav-link` (approved exception).
- **Two typefaces only:** Poppins for headings/UI, Montserrat for body. No third font.
