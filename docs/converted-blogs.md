# Converted Blog / Legacy Page Requirements

This file tracks the requirements for converting pages from the old WordPress staging platform
(`i6iuzknsnq-staging.wpdns.site`) into fully branded Laravel/TALL stack pages on
`newlenoxlimoservice.com`. Each entry documents the source, content scope, required fixes,
and build checklist before the page is live.

---

## Conversion Queue

All pages below are sourced from `https://i6iuzknsnq-staging.wpdns.site/`. Pages with full
requirements written are linked to their section. All others are pending review and build.

| # | Staging path | Status |
|---|---|---|
| 1 | `/new-lenox-limo-service` | Built — 2026-06-27 |
| 2 | `/how-to-plan-a-party-bus-experience` | Built — 2026-06-27 |
| 3 | `/limo-service-new-lenox-il-airport-shuttle` | Built — 2026-06-27 |
| 4 | `/limo` | Built — 2026-06-27 |
| 5 | `/party-bus-limo-bus` | Built — 2026-06-27 |
| 6 | `/party-bus-rental-aurora-il-night-out` | Built — 2026-06-27 |
| 7 | `/party-bus-for-special-events-aurora` | Built — 2026-06-27 |
| 8 | `/wedding-party-bus-rental-for-your-big-day` | Built — 2026-06-27 |
| 9 | `/rent-the-party-bus-of-your-dreams` | Built — 2026-06-27 |
| 10 | `/renting-a-party-bus-2026-ultimate-party` | Built — 2026-06-27 |
| 11 | `/best-limo-services-near-me-february-2026` | Built — 2026-06-27 |
| 12 | `/best-party-bus-rentals-naperville-il` | Built — 2026-06-27 |

---

## Page 1 — New Lenox Limo Service

| Field | Value |
|---|---|
| Source URL | `https://i6iuzknsnq-staging.wpdns.site/new-lenox-limo-service/` |
| Target route | `/new-lenox-limo-service` |
| Target blade file | `resources/views/pages/new-lenox-limo-service.blade.php` |
| Route file | `routes/main-site.php` |
| Note on existing page | `/new-lenox-airport-shuttle-limo-service` already exists — this is a separate, distinct page |
| Sitemap | Add to `resources/views/sitemaps/sitemap.blade.php` under the Service Areas group |

---

### Content Scope

**Include** everything above the "Testimonials from Clients" heading:

1. Introduction to Limo Services in New Lenox
2. Why Choose a Professional Limo Service (10-point benefit list)
3. Types of Vehicles Available
   - Stretch Limousines for Special Occasions
   - Luxury Sedans for Business Travel
4. SUV Limos for Groups (vehicle comparison table)
5. Safety and Reliability
6. Local Expertise Matters
7. Wedding Limo Services
8. Prom Limo Rentals
9. Corporate and Executive Limo Services
10. Airport Limo Transfers
11. Event and Party Transportation
12. Hourly Limo Services
13. VIP Shuttle Services
14. Customizable Packages
15. Booking Made Easy
16. Competitive Pricing
17. Group Travel Advantages

**Exclude** from "Testimonials from Clients" onward — that entire section and everything below
it is garbage and must not appear on the converted page:

- Testimonials from Clients
- Corporate Reputation and Trust
- Why Our Limo Service Stands Out
- Eco Friendly Limo Options
- FAQs About Our Limo Services
- WordPress "Leave a Reply" comment form

---

### Required Fixes Before Build

#### Copy fixes

| Issue | Fix |
|---|---|
| Keyword stuffing — "limo service New Lenox" and "Limo Service" bolded throughout | Rewrite copy to read naturally. One or two keyword uses per section max. Never bold a keyword just for SEO. |
| Negative keyword "Taxi" appears in the Airport Limo vs. Taxi comparison table | Replace "Taxi" column header and all "Taxi" references with "Standard Car Service" or rephrase the table entirely |
| Eco-friendly bullet point #10 is blank (no copy) | Already excluded — lives below the cut |
| Duplicate heading: "SUV Limos for Groups" appears as both H2 and H3 | Keep one. Make the H2 the section anchor; remove or reword the H3 |
| External link to Wikipedia ("learn more about limousines") | Remove entirely — no external links on content pages |
| External link to The Gentleman's Journal (under Corporate Services) | Remove entirely |
| Internal links pointing to old staging domain | Replace with relative paths to the new site (e.g. `/get-a-quote`, `/limousine-services`) |
| Em dashes — scan all copy before build | Replace every em dash with a comma or rephrase. Zero tolerance per `docs/branding-requirements.md` §2 |
| Reading level — current copy reads above 7th grade in places | Simplify sentences. Short. Active. Plain words. |
| "Limo Service" random capitalization mid-sentence | Lowercase unless starting a sentence |

#### Image fixes

| Issue | Fix |
|---|---|
| Hero: photo of Vincent (headshot) used as page hero | Replace with an appropriate vehicle or service image. See `docs/image-video-control.md` for approved sources. Dark-toned, moody, aspirational per branding §11. |
| Office space photo used under "SUV Limos for Groups" | Replace with a vehicle photo (SUV limo or group vehicle interior/exterior) or remove and use text only |
| All images: no `rounded` corners | Sharp corners only. No `rounded-*` Tailwind classes on image containers. |
| Overlays on photo-backed sections | Use `var(--navy-dark)` at 20% opacity on an absolute-inset div. Never the gradient token. |

---

### Build Requirements

#### Master layout

Every page must open with `<x-layouts.page>` — never raw `<!DOCTYPE html>`. Example:

```blade
<x-layouts.page
    title="New Lenox Limo Service"
    metaDescription="..."
    currentPage="service-areas"
    ogImage="/images/heroes/..."
    ogImageAlt="..."
>
```

#### Hero

Use `<x-sections.category-hero>` with the following rules (from `docs/hero-standardization.md`):

| Prop | Requirement |
|---|---|
| `heading` | Normal-weight H1 portion — 4 to 10 words total with headingBold combined |
| `headingBold` | Bold portion of H1 — or pass empty string to suppress |
| `:headingTwoLines` | Always `false` — renders heading and headingBold on one line |
| `subtitle` | 6 to 12 words. Center-aligned. Must not repeat the H1 verbatim. |
| `description` | 150 to 200 words. Must include "Stop & Go Airport Shuttle Service, Inc." at least once. First person plural (we/our/us). Include "New Lenox," at least one airport reference (O'Hare or Midway), and at least one approved term (chauffeur, private car service, executive transportation). No negative keywords. |
| `image` | Dark-toned vehicle or service photo. Aspect ratio 16:9. |
| `buttonText` | "Book a Ride" or "Get a Quote" |
| `buttonHref` | `/get-a-quote` |
| `buttonRadius` | `'soft'` |

Button is `x-ui.button-champagne-gradient` (hardcoded in the component).

#### Branding rules (non-negotiable)

- **Colors:** Only Twilight Luxe CSS custom properties — `var(--navy)`, `var(--champagne)`, `var(--azure)`, `var(--cloud)`, `var(--slate)`, `var(--white)`. No raw hex, no `rgb()`, no `hsl()`.
- **Fonts:** Poppins (`font-head`) for headings and buttons. Montserrat (`font-body`) for body copy.
- **No all-caps** anywhere. Nav uppercase is the only approved exception and is CSS-controlled.
- **No rounded corners** on cards, sections, or images. Buttons use `radius="soft"` (10px) via the button component prop.
- **Inline prose links:** `var(--champagne)` only. Use `.link-champagne` class or inline style:
  `style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"`
- **No external links** in body copy. Only internal relative links (`/page-slug`).
- **No Heroicons or decorative SVG icons.** Font Awesome 6 is allowed for functional map pin and phone indicators only.
- **No decorative vertical accent lines.**
- **No em dashes.** No double hyphens.

#### Layout

- **Grid only** for multi-column layouts. No Flexbox for page/section layout.
- **Container:** `max-w-7xl mx-auto` with `px-6` padding.
- **Section padding:** `py-12 lg:py-[6.25rem]` (100px top/bottom on desktop).
- **Section backgrounds:** Midnight Navy (`bg-navy`, `bg-navy-light`, `bg-navy-dark`) alternating with Cloud Grey (`bg-cloud-light`).
- **Every `<section>` tag** must carry `id="component-name"` and `style="...; scroll-margin-top: 80px;"` for the Developer Dashboard scanner.
- **Max file length:** 800 lines. Split into sub-components if needed.

#### Structured data

Add JSON-LD to `@push('structured-data')`:

- `BreadcrumbList` — Home > Service Areas > New Lenox Limo Service
- Use `@@context`, `@@type`, `@@id` escaping (Blade treats `@` as a directive) or wrap in `@verbatim` for static blocks
- All URLs must use `https://newlenoxlimoservice.com` (no `www`)

#### Meta

| Tag | Required value |
|---|---|
| `title` | "New Lenox Limo Service" (no `&amp;` — use plain `&` if needed) |
| `metaDescription` | 150-160 chars. Include "New Lenox," a service keyword, and a CTA hook. No negative keywords. |
| `ogImage` | A real image path under `public/images/` |
| `ogImageAlt` | Descriptive, no keyword stuffing |

#### Sitemap

After the page is built and the route is registered, add a `<url>` entry to
`resources/views/sitemaps/sitemap.blade.php` under the `{{-- ─── Service Areas ───... --}}`
group:

```xml
<url>
    <loc>https://newlenoxlimoservice.com/new-lenox-limo-service</loc>
    <lastmod>YYYY-MM-DD</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
</url>
```

Use `0.9` priority — this is a high-value city service page.

---

### Definition of Done

- [ ] Route registered in `routes/main-site.php`
- [ ] Blade file created at `resources/views/pages/new-lenox-limo-service.blade.php`
- [ ] Uses `<x-layouts.page>` master layout
- [ ] Hero uses `<x-sections.category-hero>` with `:headingTwoLines="false"`
- [ ] Description is 150-200 words, passes all hero standardization rules
- [ ] No negative keywords anywhere on the page
- [ ] No em dashes, no double hyphens
- [ ] "Taxi" comparison table replaced or removed
- [ ] No external links (Wikipedia, The Gentleman's Journal, or any other)
- [ ] All images are appropriate, dark-toned, and not the office photo or Vincent headshot
- [ ] All colors reference Twilight Luxe CSS vars only
- [ ] All `<section>` tags have `id` and `scroll-margin-top: 80px`
- [ ] BreadcrumbList JSON-LD in `@push('structured-data')`
- [ ] All URLs in JSON-LD use `https://newlenoxlimoservice.com` (no www)
- [ ] Page renders correctly at mobile, tablet, and desktop
- [ ] URL added to sitemap with `priority 0.9`
- [ ] Page added to the hero-standardization audit table in `docs/hero-standardization.md`
