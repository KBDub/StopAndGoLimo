# High-Conversion Google Ads Landing Page Layout

Canonical reference for building Google Ads landing pages (LPs) at Stop & Go Airport Shuttle Service, Inc.
All LP pages live under the `/lp/` prefix, use the stripped `x-layouts.lp` layout, and are always `noindex,nofollow`.

---

## URL Convention

```
/lp/{keyword-slug}
```

Examples:
- `/lp/chicago-cubs-game-day-limo`
- `/lp/chicago-white-sox-game-day-limo`
- `/lp/chicago-crosstown-classic-limo`

Routes are defined in `routes/main-site.php` inside the `lp` prefix group:

```php
Route::prefix('lp')->name('lp.')->group(function () {
    Route::get('/chicago-cubs-game-day-limo', fn () => view('pages.lp.chicago-cubs-game-day-limo'))->name('cubs');
    // ...
});
```

Blade files live at:

```
resources/views/pages/lp/{keyword-slug}.blade.php
```

---

## LP Layout — `x-layouts.lp`

**File:** `resources/views/components/layouts/lp.blade.php`

The LP layout is a stripped version of `x-layouts.page`. Key differences:

| Feature | `x-layouts.page` | `x-layouts.lp` |
|---|---|---|
| Navigation | Full `x-nav.navbar` | None — stripped by design |
| Footer | Footer nav component | Address + phone + copyright only |
| Robots | `index,follow` (default) | Always `noindex,nofollow` |
| Modal | `x-ui.modal-quote` included | `x-ui.modal-quote` included |
| GTM | Included | Included (critical for conversion tracking) |

**Props:**

```blade
<x-layouts.lp
    title="Page Title for <title> tag"
    metaDescription="Meta description for OG and search preview"
    ogImage="/images/path/to/hero.jpg"
    ogImageAlt="Alt text for OG image"
    canonical="https://newlenoxlimoservice.com/lp/..."
>
```

All props are optional with sensible defaults. `canonical` defaults to the current request URL.

**Never add `noIndex` as a prop** — the LP layout always forces `noindex,nofollow`. This is hardcoded.

---

## LP vs Organic Page — Key Differences

| Principle | Organic Event Page | LP |
|---|---|---|
| Navigation | Full nav with all links | None — kills conversion |
| Footer | Full nav footer | Address + phone + copyright |
| Goal | SEO traffic + brand depth | Single conversion action |
| Copy length | Long-form, 15 sections | 8 sections, focused |
| CTA | Multiple soft CTAs | One primary CTA throughout |
| Indexing | `index,follow` | `noindex,nofollow` |
| Slug style | Service-oriented (`-limo-service`) | Keyword-intent-oriented (`-game-day-limo`) |

---

## Slug Naming Convention

LP slugs target high-commercial-intent search terms rather than mirroring the organic page slug.
This avoids cannibalization and lets each page rank for a different intent cluster.

| Organic (SEO) | LP (Paid) |
|---|---|
| `/services/events/chicago-cubs-limo-service` | `/lp/chicago-cubs-game-day-limo` |
| `/services/events/chicago-white-sox-limo-service` | `/lp/chicago-white-sox-game-day-limo` |
| `/services/events/chicago-crosstown-classic` | `/lp/chicago-crosstown-classic-limo` |

---

## Full Page Section Order

| # | Section | Component / Element | Notes |
|---|---|---|---|
| — | LP Sticky Header | Built into `x-layouts.lp` | Logo + phone + "Get Free Quote" button. No nav links. |
| 1 | Hero | Inline `<section id="lp-hero">` | Full-viewport hero image with navy overlay, H1, subheadline, dual CTAs |
| 2 | Trust Badges | Inline `<section id="lp-trust">` | Champagne strip, 4 badges in auto-fit grid |
| 3 | Value Proposition Grid | Inline `<section id="lp-value-props">` | H2 underbar, 3 navy cards with champagne left border |
| 4 | Mid-Page CTA | Inline `<section id="lp-cta-mid">` | Navy background, H2 + phone link + quote modal button |
| 5 | High-Margin Service Modules | Inline `<section id="lp-services">` | H2 underbar, 3 white cards with champagne top border + CTA per card |
| 6 | Reviews | `x-sections.review-slider` | No props needed |
| 7 | FAQ | `x-sections.faq` | Use event-specific preset |
| 8 | Bottom CTA | Inline `<section id="lp-cta-bottom">` | Champagne background, H2 + dual CTAs |
| — | LP Footer | Built into `x-layouts.lp` | Address + phone + "Visit Our Main Site" link + copyright |

---

## Section Detail: Hero

**Background:** Hero image with a semi-transparent navy overlay (`rgba(21,21,44,0.78)`).
Use `min-height: 82vh` so the hero fills the screen above the fold.

**H1 structure:** Two-line heading, top line is regular weight, second line is `<strong>` in champagne.

```html
<h1 class="font-head" style="font-size: clamp(2.2rem, 6vw, 3.75rem); font-weight: 400; color: var(--white); line-height: 1.15;">
    Primary Keyword Phrase
    <strong style="display: block; color: var(--champagne); font-weight: 700;">&amp; Secondary Phrase</strong>
</h1>
```

**CTA buttons:** Two buttons side by side (flex wrap for mobile). Primary = champagne fill + navy text. Secondary = champagne outline only.

```html
<button onclick="window.dispatchEvent(new Event('open-modal-quote'))"
        class="font-head"
        style="background: var(--champagne); color: var(--navy); border: none; padding: 1rem 2.25rem; font-size: 1.05rem; font-weight: 700; cursor: pointer;">
    Get Free Quote Online
</button>
<a href="tel:+17083154445"
   class="font-head"
   style="background: transparent; color: var(--champagne); border: 2px solid var(--champagne); padding: 1rem 2.25rem; font-size: 1.05rem; font-weight: 700; text-decoration: none; display: inline-block;">
    Call (708) 315-4445 Today
</a>
```

---

## Section Detail: Trust Badges

**Background:** Champagne (`var(--champagne)`). Text: navy, bold, Poppins.
**Layout:** `display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));`

Four badges as `<p class="font-head">` — no icons, no borders, centered text.

---

## Section Detail: Value Proposition Grid

**Background:** White.
**H2:** Standard fit-content wrapper + 116% champagne underbar. (See `replit.md` H2 pattern.)
**Cards:** 3-column auto-fit grid. Each card has `border-left: 4px solid var(--champagne); background: var(--navy);`.

Card structure:
- `<h3>` in champagne, 1.15rem, bold
- `<p>` in `var(--cloud)`, 0.95rem, leading 1.7

---

## Section Detail: Mid-Page CTA

**Background:** Navy. Text: white/champagne.
**H2:** Fit-content wrapper centered with `margin: 0 auto`. Standard 116% underbar.
**Buttons:** Same pattern as hero — champagne fill primary, champagne outline secondary.
**Phone icon:** `<i class="fa fa-phone">` is approved (functional contact indicator).

---

## Section Detail: High-Margin Service Modules

**Background:** White.
**H2:** Fit-content wrapper (left-aligned — blurb `<p>` outside the wrapper).
**Cards:** 3-column auto-fit grid. Each card has `border: 1px solid var(--cloud); border-top: 4px solid var(--champagne);`.

Card structure:
- `<h3>` in navy, 1.1rem, bold
- `<p>` in `var(--slate)`, 0.95rem
- Per-card CTA button: `background: var(--navy); color: var(--champagne);` with `align-self: flex-start`

Each card uses `display: flex; flex-direction: column;` on the card div so the CTA button sticks to the bottom.

---

## Section Detail: Bottom CTA

**Background:** Champagne. Text and buttons use navy (inverted from mid-page CTA).
**Primary button:** `background: var(--navy); color: var(--champagne);`
**Secondary button:** `background: transparent; color: var(--navy); border: 2px solid var(--navy);`

---

## Copy Rules (Same as Organic Pages)

All rules from `docs/branding-requirements.md` and `docs/special-events-layout.md` apply to LP pages.

| Rule | Requirement |
|---|---|
| Reading level | 7th grade. Short sentences, plain words, active voice. |
| Em dashes | Banned. Use a comma, period, or rephrase. |
| All-caps | Banned. |
| Negative keywords | No taxi, cab, cheap, budget, rideshare, Uber, Lyft. |
| Company name | "Stop & Go Airport Shuttle Service, Inc." in body copy. |
| Passenger counts | Never list vehicle capacities or state a hard minimum in copy. |
| Colors | Only named Twilight Luxe CSS custom properties. No raw hex. |
| Fonts | `font-head` (Poppins) for headings/buttons. `font-body` (Montserrat) for body. |
| Corners | Sharp. No `border-radius` on containers, cards, or sections. |

---

## Content Strategy: Value Proposition Grid

Each LP's value prop grid maps to the ad group's core keyword intent.
Pull these from the SEO Blueprint Strategy Guide (`docs/seo/StopAndGo.SEO.BlueprintStrategyGuide.pdf`).

| Page | Prop 1 | Prop 2 | Prop 3 |
|---|---|---|---|
| Cubs | Zero Parking Worries | High-End Party Buses | Fair Flat Rates |
| White Sox | Tailgate Ready | Direct Highway Access | Luxury & Safety |
| Crosstown Classic | Cross-City Flexibility | Full-Day Packages | One Call, Both Parks |

---

## Content Strategy: High-Margin Service Modules

Each LP surfaces three adjacent high-margin services the ad group audience is likely to need.

| Page | Module 1 | Module 2 | Module 3 |
|---|---|---|---|
| Cubs | Bachelor/Bachelorette Parties | Corporate Suite & Gallagher Way VIP | Lakefront Wedding Photo Shuttles |
| White Sox | South Side Quincea&ntilde;era & Milestones | Corporate Suite & Airport Transfers | Post-Game Fine Dining & Nightlife |
| Crosstown Classic | Crosstown Party Bus Packages | Corporate Suite & Airport Transfers | Post-Game Fine Dining & Nightlife |

---

## Google Ads Integration Notes

- **Display URL:** The display URL in each ad can differ from the final URL. The `/lp/` slug is the final URL (used for Quality Score keyword matching).
- **noindex:** All LP pages are permanently `noindex,nofollow`. Do not add them to the sitemap.
- **GTM:** GTM is included in the LP layout. All conversion events (form submit, phone click) fire through the same dataLayer already configured for the main site.
- **Canonical:** Defaults to the current request URL. Do not set a canonical pointing to the organic page — search engines should never crawl these.
- **Analytics filtering:** Filter on `/lp/*` in GA4 to isolate paid traffic from organic in any report.

---

## Adding a New LP Page

1. Create `resources/views/pages/lp/{slug}.blade.php` following the 8-section order above.
2. Add the route to the `/lp/` prefix group in `routes/main-site.php`.
3. Choose hero image from `public/images/special-events/{event}/` or `public/images/`.
4. Write value props sourced from the SEO Blueprint or the event's SEO research doc.
5. Write service modules relevant to the LP's audience segment.
6. Set the FAQ `preset` to the matching event preset from `config/faqs.php`.
7. Never add the new LP URL to the sitemap.
