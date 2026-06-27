# Converted Blog / Legacy Page Requirements

This file tracks the requirements for converting pages from the old WordPress staging platform
(`i6iuzknsnq-staging.wpdns.site`) into fully branded Laravel/TALL stack pages on
`newlenoxlimoservice.com`. Each entry documents the source, content scope, required fixes,
and build checklist before the page is live.

---

## Global Content Extraction Rules

These rules apply to every page conversion without exception. They override any per-page notes.

### What to include

Only bring in content that passes all three of these tests:

1. **It is original, useful copy** — written for the reader, not for a search engine. Real information about services, vehicles, areas, or how to book.
2. **It lives above the testimonials/FAQ cutoff** — see "What to exclude" below.
3. **It has no academic citations, legal boilerplate, or policy text** — if a paragraph reads like a journal article or government notice, discard it entirely.

Good content to carry forward:

- Introductory paragraphs that describe the service or location
- Named bullet lists of features, amenities, or benefits
- Comparison tables (vehicles, features, pricing tiers) — rewritten in branded voice
- Event-type callouts (weddings, proms, corporate, airport)
- Pricing context (general rate ranges are fine; specific prices must be verified before publishing)

**Do not carry forward** booking steps, safety/etiquette guides, or how-to process lists. The site already has approved branded components for those purposes (`x-sections.three-steps`, `x-sections.free-instant-quote`). Do not duplicate that content in the mid-sections.

### What to exclude — hard cutoffs

Stop extracting content at the **first** of these elements encountered on the page (whichever comes first):

- "Testimonials from Clients" heading or any client testimonial block
- "Frequently Asked Questions" heading or any FAQ accordion
- Any "Leave a Reply" or WordPress comment form
- The site footer (address, hours, social icons, copyright)
- The site navigation (top nav, sidebar nav, mobile menu)

**Nothing below any of those cutoffs may appear on the converted page.** The site already has its own branded testimonial (`x-sections.review-slider`) and FAQ (`x-sections.faq`) components — do not duplicate them with WordPress content.

### Junk to discard — even when it appears above the cutoff

The WordPress pages contain filler and AI-generated padding that must not carry over:

| Type | Example | Action |
|---|---|---|
| Academic citations | "The Church: an Alternative Urban Transportation Amenity, 2000" | Delete the sentence entirely |
| Policy/legal boilerplate | Paragraphs about alcohol taxes, minimum drinking age laws, server training mandates | Delete the entire section |
| Keyword stuffing | "Party Bus Experience" repeated 10+ times in a single section | Rewrite naturally — one mention per section max |
| British spellings | "favourite", "colour", "organise" | Replace with American English |
| External links | Links to Wikipedia, newlenoxlimoservice.com old domain, third-party articles | Remove all external links |
| Self-referential anchor text | "visit https://newlenoxlimoservice.com/ to view more of our party bus services" | Remove entirely |
| Duplicate headings | Same heading appearing as both H2 and H3 in the same section | Keep one; delete the duplicate |
| Blank or near-blank sections | A heading with one sentence of filler beneath it | Delete the heading and the filler |

### Mid-section count and heading structure

Each converted page may have **no more than 2 or 3 new mid-sections** inserted between the hero and the standard footer stack (`x-sections.three-steps`, `x-sections.free-instant-quote`, `x-sections.review-slider`, `x-sections.faq`).

Rules for those sections:

1. **Maximum 3 new mid-sections per page.** Two is preferred. One is acceptable if the content is rich enough. Never add more than 3.
2. **Every section needs a coherent heading hierarchy.** The page `<h1>` lives in the hero. New mid-sections must follow this order:
   - Section title: `<h2>`
   - Sub-topics within that section: `<h3>`
   - Detail beneath a sub-topic: `<h4>` or `<h5>`
   - Never skip a level (no jumping from `<h2>` to `<h4>`)
   - Never use `<h1>` inside a mid-section
3. **Each section must stand on its own.** It should have a clear topic, a heading, and at least one paragraph or structured element (list, table, card grid). No orphan headings with no body.
4. **Sections should be reusable components where the content pattern repeats across pages.** If two or more pages share the same layout pattern (features table, event-type grid, vehicle comparison), build it as a new shared `x-sections.*` Blade component rather than duplicating inline markup.

### Component reuse and creation — what is allowed

When building mid-sections, always work in this order:

**Step 1 — Try to match an existing conversion-round component first.**
Before writing any new markup, check whether one of the components created during this blog conversion round fits the content. These are the approved reusable components from this round:

| Component | Layout pattern | Best for |
|---|---|---|
| `x-sections.vehicle-match` | H2 intro + sized card grid + occasion card grid + pricing strip | Vehicle selector, group-size guide, event-type grids |
| `x-sections.on-board-experience` | H2 intro + two-column (checklist left, prose + CTA right) on navy | Amenities list, trust/value-prop paired with a CTA |
| `x-sections.limo-services-grid` | H2 intro + H3 + 6-card occasion grid (3-col desktop, champagne left border) on cloud-light | Service-type index for a location or vehicle page |
| `x-sections.why-chauffeured` | H2 intro + two-column (9-item checklist left, comparison table + CTA right) on navy | Trust/differentiation section with competitive comparison |
| `x-sections.airport-vehicle-guide` | H2 intro + H3 + 4-card fleet selector (champagne top border) on cloud-light | Airport vehicle/fleet selector by group size |
| `x-sections.airport-chauffeur-detail` | H2 intro + two-column (4-item checklist left, cost comparison table + CTA right) on navy | Airport chauffeur service detail with cost-of-driving comparison |

If the page content fits one of these patterns, use the existing component. Pass an `id` prop if the section needs a different anchor.

**Step 2 — Create a new conversion-round component if the pattern is genuinely new.**
If no existing conversion-round component fits, create a new `x-sections.*` Blade file. Follow the same conventions: `@props` block with documented defaults, doc-block header, `id="{{ $id }}"` + `scroll-margin-top: 80px` on the `<section>` tag.

**Step 3 — Never use or create framework-type components for mid-section content.**
Framework components are the pre-existing site infrastructure components. They are fixed and serve specific structural roles. Do not use them as mid-section content blocks and do not create new ones that duplicate their roles.

Framework components that already own their territory (do not replicate):

| Component | Owns |
|---|---|
| `x-sections.category-hero` | Page hero / H1 |
| `x-sections.three-steps` | How-to / booking process steps |
| `x-sections.free-instant-quote` | Quote form with image + description |
| `x-sections.review-slider` | Client testimonials |
| `x-sections.faq` | FAQ accordion |
| `x-sections.share-your-experience` | Social / UGC CTA |
| `x-sections.map-contact-section` | Map + contact info |
| `x-sections.base-footer` | Site footer |
| `x-ui.banner-thin-cloud` | Thin decorative banner |

### CTA buttons in mid-sections

All call-to-action buttons in new mid-sections must follow these rules:

- **Component:** always use `<x-ui.button-champagne-gradient>` — never a raw `<a>` styled to look like a button
- **Radius:** always `radius="soft"` — never the default square (`rounded`) and never a pill shape
- **Alignment:** wrap the button in `<div class="text-center">` so it is centered under its associated text
- **Supporting text:** if a phone number or secondary CTA follows the button, place it inside the same `<div class="text-center">` wrapper, beneath the button, in small body font

Example:
```blade
<div class="text-center">
    <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
        Get a Free Instant Quote
    </x-ui.button-champagne-gradient>
    <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.85rem;" class="mt-3">
        or call <a href="tel:+18155856922" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">(815) 585-6922</a>
    </p>
</div>
```

### Voice and copy standards

All extracted copy must be rewritten to meet these standards before use:

- **7th grade reading level** — short sentences, plain words, active voice
- **No em dashes** — use a comma, period, or rephrase
- **No all-caps** except nav links (approved exception)
- **No negative keywords** — no taxi, cab, cheap, budget, rideshare, Uber, Lyft
- **No double hyphens** — use a comma instead
- **Branded voice** — first person plural ("we", "our"), confident, premium but approachable

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
