# Special Events Page Template

Canonical reference for building new special-events detail pages on the Stop & Go Airport Shuttle Service, Inc. site. Every new team, venue, or event-category page follows this structure.

---


## URL Convention

```
/services/events/{event-slug}
```

Examples:
- `/services/events/chicago-cubs-limo-service`
- `/services/events/chicago-white-sox-limo-service`

Routes are defined in `routes/main-site.php`. Each event gets its own named route:

```php
Route::get('/services/events/chicago-cubs-limo-service',
    fn () => view('pages.services.events.chicago-cubs-limo-service'))
    ->name('events.chicago-cubs');
```

Blade files live at:

```
resources/views/pages/services/events/{event-slug}.blade.php
```

---

## SEO Research Sources

These four documents in `docs/seo/` are the authoritative source material for all event page copy, keyword targeting, FAQ content, and structured data. Read them before writing any section copy or populating a data file.

| File | Purpose |
|---|---|
| `docs/seo/StopAndGo.LuxuryTransportSEO.Keywords.md` | Industry-wide keyword taxonomy, search volume data, CPC benchmarks, occasion-based optimization, fleet segment targeting, voice search queries, and LSI/semantic trust terms. Use for meta titles, meta descriptions, heading phrases, and body copy keyword selection across all pages. |
| `docs/seo/StopAndGo.cubs-gameday-transportation.md` | Full H2–H5 pillar content for the Chicago Cubs page: Wrigley Field history, Wrigleyville neighborhood detail, fleet service descriptions, suburb-by-suburb pickup routing, group/corporate use cases, pre/post-game logistics, and 5 ready-to-use FAQs. Primary source for `app/Data/EventContent.php` key `'chicago-cubs'`. |
| `docs/seo/StopAndGo.white-sox-gameday-transportation.md` | Full H2–H5 pillar content for the Chicago White Sox page: Rate Field history, Bridgeport/Armour Square neighborhood detail, South Side pickup routing, Dan Ryan traffic context, group/corporate use cases, and 5 ready-to-use FAQs. Primary source for `app/Data/EventContent.php` key `'chicago-white-sox'`. |
| `docs/seo/StopAndGo.Pillars.limo-party-bus-seo-keywords.md` | Structured keyword bank organized by intent cluster: core service terms, vehicle-type modifiers, event-type long-tails, local/near-me intent, commercial modifiers, voice search queries, People Also Ask questions, LSI/semantic terms, and seasonal modifiers. Use for FAQ schema, GBP posts, and sitewide copy refinement. |

---

## Copy Rules

Every sentence on these pages must pass all of the following before it ships.

| Rule | Requirement |
|---|---|
| Reading level | 7th grade. Short sentences, plain words, active voice. |
| Em dashes | Banned. Use a comma, period, or rephrase. |
| All-caps | Banned except nav links (approved exception). |
| Negative keywords | No taxi, cab, cheap, budget, rideshare, Uber, Lyft. |
| Double hyphens | Banned. Use a comma instead. |
| Branded voice | First person plural ("we", "our"). Confident, premium, approachable. |
| Company name | "Stop & Go Airport Shuttle Service, Inc." in body copy. "Stop & Go Limo" is logo/nav/social only. |

---

## Data File Convention

Event-specific content lives in a dedicated PHP data class so Blade files stay lean and content is easy to update without touching markup.

**File:** `app/Data/EventContent.php`

```php
<?php

namespace App\Data;

class EventContent
{
    public static function for(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    public static function all(): array
    {
        return [
            'chicago-cubs' => [
                'hero' => [
                    'heading'     => 'Chicago Cubs',
                    'headingBold' => 'Limo Service',
                    'subtitle'    => 'Arrive at Wrigley Field like a VIP',
                    'description' => '...',
                    'image'       => '/images/heroes/hero-cubs.jpg',
                    'imageAlt'    => '...',
                ],
                'info_strip' => [
                    'headingPrefix' => 'Game Day',
                    'headingBold'   => 'Without the Parking Headache',
                    'body'          => '...',
                ],
                'travel_in_style' => [
                    'heading'     => 'Travel to Wrigley',
                    'headingBold' => 'in Style',
                    'body'        => '...',
                    'note'        => '...',
                    'image'       => '/images/sections/cubs-travel.jpg',
                    'imageAlt'    => '...',
                ],
                'event_features' => [
                    'heading' => 'What Your Cubs Game Day Ride Includes',
                    'intro'   => '...',
                    'cards'   => [
                        ['feature' => '...', 'why' => '...'],
                        // 6 cards total
                    ],
                ],
                'event_details' => [
                    'heading'         => 'Why Cubs Fans Choose a Party Bus',
                    'intro'           => '...',
                    'leftHeading'     => '...',
                    'checklist'       => [
                        ['feature' => '...', 'detail' => '...'],
                        // 4 items
                    ],
                    'rightHeading'    => '...',
                    'rightParagraphs' => ['...', '...', '...'],
                    'ctaHeading'      => '...',
                    'ctaBody'         => '...',
                ],
                'process_steps' => [
                    'heading'     => 'Six Things That Happen',
                    'headingBold' => 'Before the First Pitch',
                    'intro'       => '...',
                    'steps'       => [
                        ['num' => '01', 'title' => '...', 'body' => '...'],
                        // 6 total
                    ],
                ],
                'service_fulfillment' => [
                    'heading'     => 'How We Handle',
                    'headingBold' => 'Your Cubs Day',
                    'intro'       => '...',
                    'items'       => [
                        ['occasion' => '...', 'timing' => '...', 'detail' => '...', 'urgency' => 'high'],
                        // 6 total
                    ],
                    'legend' => '...',
                ],
                'faq_preset' => 'chicago-cubs',
                'structured_data' => [
                    'service_name' => 'Chicago Cubs Limo Service',
                    'description'  => '...',
                    'url'          => 'https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service',
                ],
            ],

            'chicago-white-sox' => [
                // same shape, different content
            ],
        ];
    }
}
```

In the Blade file, load the data at the top of the file (before `@push`):

```blade
@php $event = \App\Data\EventContent::for('chicago-cubs'); @endphp
```

---

## FAQ System

FAQs are managed in **`config/faqs.php`** — a flat PHP array keyed by preset name. The `x-sections.faq` component accepts a `preset` prop (string) or a `:faqs` prop (array) for inline content.

```blade
{{-- Pull from config/faqs.php --}}
<x-sections.faq preset="chicago-cubs" />

{{-- Or pass inline --}}
<x-sections.faq :faqs="$event['faq']" />
```

**To add a new event FAQ preset:**

1. Open `config/faqs.php`
2. Add a new key (e.g., `'chicago-cubs'`) with an array of `['question' => '...', 'answer' => '...']` items
3. Pass `preset="chicago-cubs"` to the component — no code changes needed

Existing presets include `general`, `airport-shuttle`, and others. The fallback chain is: `:faqs` array prop first, then preset key, then `'general'`. Always create a sport/event-specific preset rather than relying on `'general'` for these pages.

---

## Full Page Section Order

| # | Section | Component | Status | Content source |
|---|---|---|---|---|
| 1 | Hero | `x-sections.category-hero` | Existing | `$event['hero']` |
| 2 | Info strip | `x-sections.info-strip` | Existing | `$event['info_strip']` |
| 3 | Travel in style CTA | `x-sections.travel-in-style-cta` | **New** | `$event['travel_in_style']` |
| 4 | Event features | `x-sections.event-features` | Rename of inline `#party-bus-features` | `$event['event_features']` |
| 5 | Event details | `x-sections.event-details` | Rename of `aurora-night-out` | `$event['event_details']` |
| 6 | Process steps | `x-sections.limo-process-steps` | Existing | `$event['process_steps']` |
| 7 | Service fulfillment | `x-sections.service-fulfillment` | Rename of `limo-booking-timeline` | `$event['service_fulfillment']` |
| 8 | Review slider | `x-sections.review-slider` | Existing | (no props) |
| 9 | Why choose us | `x-sections.why-choose-us` | Existing | (no props) |
| 10 | FAQ | `x-sections.faq` | Existing | preset from `config/faqs.php` |
| 11 | Share your experience | `x-sections.share-your-experience` | Existing | (no props) |
| 12 | Map and contact | `x-sections.map-contact-section` | Existing | (no props) |
| 13 | Thin divider | `x-ui.banner-thin-cloud` | Existing | (no props) |
| 14 | Base footer | `x-sections.base-footer` | Existing | (no props) |

---

## Content Depth — Sections 1–7

Sections 1 through 7 carry all the SEO weight and conversion content for the page. Every one of these sections must be fully written out with rich, specific copy. No placeholder text, no thin paragraphs. Each section should:

- Answer a real question a potential client would ask about this specific event
- Reference the event, venue, or team by name at least once per section
- Include at least one concrete detail (timing, capacity, vehicle type, route, feature, or benefit)
- Stay at a 7th grade reading level — short sentences, plain words, active voice

Sections 8–14 are shared components with no event-specific content and need no custom copy.

---

## Service Area and Vehicle Capacity

These two facts must be stated accurately across all event page copy, FAQs, and structured data.

**Service area:** All of Chicagoland. This includes the city of Chicago, the north suburbs (Waukegan, Arlington Heights, Palatine, Schaumburg, Elk Grove Village), the northwest suburbs (Crystal Lake, Elgin), the west suburbs (Aurora, Downers Grove, Naperville), and the south and southwest suburbs (New Lenox, Joliet, Tinley Park, Orland Park). Never list only the southwest suburbs as the service area.

**Maximum vehicle capacity:** 13 or more passengers. Do not state a hard upper limit in copy — say "13 or more" or "groups of 13 and up" and direct clients to call for exact capacity by group size.

---

## H2–H5 Heading Structure by Section

Every section must follow the site heading hierarchy. H1 appears only in the hero. No heading level may be skipped. The table below shows the full heading map for each component on this page type.

### 1. Hero — `x-sections.category-hero`

```
H1  — "{heading}" {headingBold}          (two-line or inline, set by headingTwoLines)
        {subtitle}                        (styled paragraph, not a heading)
        {description}                     (body paragraph)
```

Note: This is the only H1 on the page. No section below the hero may use H1.

---

### 2. Info Strip — `x-sections.info-strip`

```
H2  — {headingPrefix} {headingBold} {heading}
        {body}                            (body paragraph)
```

---

### 3. Travel in Style CTA — `x-sections.travel-in-style-cta` (**New**)

Full-width H2 row spans both columns above the two-column layout. The right column uses H3/H4 for sub-content.

```
H2  — {heading} {headingBold}            (center-justified, full width, with champagne underbar)
  [Left column]
        {image}                           (no heading in the image column)
  [Right column]
    H3  — {subtitle}                      (optional sub-heading in text column)
          {body}                          (body paragraph)
    H4  — {note}                          (optional note or supporting callout)
          [Call Us button]                (tel:+17083154445)
          [Get a Free Quote button]       (opens quote modal)
```

**Layout spec:**
- The H2 + champagne underbar sits in its own full-width row above the two-column grid. Both the image and text columns sit below it.
- The underbar uses `width: fit-content; margin: 0 auto;` wrapper and `width: 116%; margin-top: 0.85rem;` bar — identical to the standard H2 underbar pattern from `replit.md`.
- Both CTA buttons sit at the bottom of the right column: `x-ui.button-champagne-gradient` for Call Us, `x-ui.button-navy-gold` for Get a Free Quote (fires `open-modal-quote`).
- Background: navy (`inverted = true` default). Image left, text right (default).

---

### 4. Event Features — `x-sections.event-features` (**New**)

Center-justified H2 above a 3-column card grid. Each card has H3 + H4 + body. Background: cloud-light.

This section is extracted from the inline markup in `resources/views/pages/party-bus-rental-aurora-il-night-out.blade.php` (the `#party-bus-features` section). It must become a reusable component.

```
H2  — {heading}                          (center-justified)
        {intro}                           (center-justified body paragraph, max-w-2xl)
  [Card grid — 3 columns, 6 cards]
    H3  — {cards[n]['feature']}           (champagne, vehicle/amenity name per card)
    H4  — {cards[n]['benefit']}           (white or navy, one-line "what this gives you" label)
            {cards[n]['why']}             (body paragraph expanding on the H4, per card)
```

The H4 `benefit` label bridges the H3 feature name and the body explanation. It answers "what does this mean for my group?" in one punchy line. Example: H3 = "Premium Sound System," H4 = "Your playlist, your night," body = "Bluetooth audio throughout the cabin means your group controls the music from pickup to last drop-off."

**Props:**
```
heading  string   H2 text (may contain <strong> for bold portion)
intro    string   Paragraph below the H2
cards    array    [{feature, benefit, why}, ...] — always 6 items
```

---

### 5. Event Details — `x-sections.event-details` (**Renamed from `aurora-night-out`**)

**Action required:** `x-sections.aurora-night-out` must be renamed to `x-sections.event-details` and made fully prop-driven. The Aurora-specific hardcoded copy is replaced with props. All existing usages of `x-sections.aurora-night-out` must be updated to `x-sections.event-details` with inline props matching the current hardcoded content.

Background: navy. Full-width H2 + intro paragraph, then two-column grid.

```
H2  — {heading}                          (left-aligned, max-w-3xl)
        {intro}                           (body paragraph, left-aligned)
  [Left column]
    H3  — {leftHeading}
      [Checklist — 4 items]
            {checklist[n]['feature']}     (bold label, not a heading tag)
            {checklist[n]['detail']}      (body text)
  [Right column]
    H3  — {rightHeading}
            {rightParagraphs[]}           (array of body paragraphs)
    H4  — {ctaHeading}                   (CTA sub-heading above buttons)
            {ctaBody}                     (supporting body text)
            [Get a Free Quote button]     (opens quote modal)
            "or call {phone}"             (inline phone link)
```

**Props:**
```
id               string   Section anchor id. Default: 'event-details'.
heading          string   H2 text.
intro            string   Paragraph below the H2.
leftHeading      string   H3 in the left column.
checklist        array    [{feature, detail}, ...] — 4 items.
rightHeading     string   H3 in the right column.
rightParagraphs  array    String array. Each string becomes a <p>.
ctaHeading       string   H4 above the CTA buttons.
ctaBody          string   Supporting paragraph below H4.
```

CTA buttons are hardcoded in the component (quote modal + phone link) — no props needed for them.

---

### 6. Process Steps — `x-sections.limo-process-steps`

Background: white. Center H2, then 2x3 numbered card grid.

```
H2  — {heading} {headingBold}            (center-justified)
        {intro}                           (center-justified body paragraph)
  [Card grid — 2 rows x 3 columns, 6 cards]
            {steps[n]['num']}             (champagne ghost number — decorative, aria-hidden)
    H3  — {steps[n]['title']}            (step name — what happens at this stage)
    H4  — {steps[n]['detail']}           (optional — event-specific callout for this step)
            {steps[n]['body']}            (body paragraph with full explanation)
```

The H4 `detail` field is optional and event-specific. It names the concrete action or outcome that applies to this event page. Example for a Cubs game: H3 = "Your vehicle is prepared," H4 = "Game-day ready, Wrigleyville route pre-loaded," body = full explanation. On a generic limo service page the H4 can be omitted.

Each step array: `['num' => '01', 'title' => '...', 'detail' => '...', 'body' => '...']`. Always 6 items. `detail` is nullable — omit the H4 render when null.

---

### 7. Service Fulfillment — `x-sections.service-fulfillment` (**Renamed from `limo-booking-timeline`**)

> **Important usage note:** The original component (`limo-booking-timeline`) defaulted to booking lead-time content. After rename it becomes `x-sections.service-fulfillment` — a general-purpose 6-card grid on a cloud-light background. All existing usages of `x-sections.limo-booking-timeline` must be updated to `x-sections.service-fulfillment`. For special events pages this section covers **how we serve this event**: group size options, route planning, vehicle selection, pricing, availability, and post-event drop-off. The `heading`, `headingBold`, `intro`, `items`, and `legend` props give full control. Example heading: "What We Cover on Cubs Game Day."

Background: cloud-light. Center H2, then 3-column card grid.

```
H2  — {heading} {headingBold}            (center-justified, headingBold in champagne)
        {intro}                           (center-justified body paragraph)
  [Card grid — 3 columns, 6 cards]
    H3  — {items[n]['occasion']}         (card topic or service category)
    H4  — {items[n]['timing']}           (category label — urgency-colored, champagne/azure/slate)
            {items[n]['detail']}          (body paragraph expanding on the H3 topic)
    H5  — {items[n]['note']}             (optional — a short pro tip, policy note, or key fact
                                          specific to this event; omit when null)
        {legend}                          (small explanatory note below the grid — not a heading)
```

The H4 `timing` field is repurposed on event pages: instead of a booking window, it holds a category label like "13+ passengers," "Wrigleyville routing," or "Flat-rate pricing." The H5 `note` is a secondary callout within the card — one short sentence, styled subtly — used for event-specific policy details, such as "Parking near Wrigley is unavailable for groups. We drop at Gate K." Omit H5 when there is nothing worth the extra level.

Each item: `['occasion' => '...', 'timing' => '...', 'detail' => '...', 'urgency' => 'high|medium|low', 'note' => null]`. Always 6 items. `note` is nullable. Urgency maps border color: `high` = champagne, `medium` = azure, `low` = slate.

---

### 8. Review Slider — `x-sections.review-slider`

```
H2  — (hardcoded heading inside component)
  [Slider cards]
    H3  — (reviewer name — hardcoded)
```

No props. No customization needed on event pages.

---

### 9. Why Choose Us — `x-sections.why-choose-us`

```
H2  — (hardcoded heading inside component)
  [Feature items]
    H3  — (each feature title — hardcoded)
```

No props.

---

### 10. FAQ — `x-sections.faq`

```
H2  — (hardcoded section heading inside component)
  [Accordion items]
    H3  — {faq[n]['question']}           (each question is an H3)
            {faq[n]['answer']}            (body paragraph, revealed on expand)
```

Pass a `preset` key from `config/faqs.php`. For event pages, create an event-specific preset rather than using `'general'`.

---

### 11–14. Footer Sections

These carry no event-specific headings and require no props on event pages.

| Section | Top heading level inside |
|---|---|
| `x-sections.share-your-experience` | H2 (hardcoded) |
| `x-sections.map-contact-section` | H2 (hardcoded) |
| `x-ui.banner-thin-cloud` | Decorative only, no headings |
| `x-sections.base-footer` | No headings |

---

## Structured Data Blocks

Each event page requires **four** JSON-LD blocks inside a `@push('structured-data')` section. Use `@verbatim` around the entire block to prevent Blade from treating `@context`, `@type`, and `@id` as directives.

```blade
@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "https://www.newlenoxlimoservice.com",
    "name": "Stop & Go Airport Shuttle Service, Inc.",
    "telephone": "+17083154445",
    "url": "https://www.newlenoxlimoservice.com",
    "logo": "https://www.newlenoxlimoservice.com/images/logo.png",
    "image": "https://www.newlenoxlimoservice.com/images/heroes/hero-home.jpg",
    "priceRange": "$$",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.5128,
        "longitude": -87.9931
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    },
    "sameAs": [
        "https://www.facebook.com/stopngoairportshuttle",
        "https://www.instagram.com/stopngoairportshuttle"
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Cubs Limo Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "New Lenox", "addressRegion": "IL", "addressCountry": "US" }
    ],
    "description": "..."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Chicago Cubs Limo Service | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service",
    "description": "..."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",           "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",       "item": "https://www.newlenoxlimoservice.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Special Events", "item": "https://www.newlenoxlimoservice.com/services/events" },
        { "@type": "ListItem", "position": 4, "name": "Chicago Cubs Limo Service", "item": "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service" }
    ]
}
</script>
@endverbatim
@endpush
```

The `LocalBusiness` block is identical on every event page (it describes the business, not the event). Copy it verbatim. Only the `Service`, `WebPage`, and `BreadcrumbList` blocks change per event.

---

## Skeleton Blade File

```blade
@php $event = \App\Data\EventContent::for('chicago-cubs'); @endphp

@push('structured-data')
@verbatim
{{-- LocalBusiness, Service, WebPage, BreadcrumbList blocks here --}}
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Cubs Limo Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="..."
    currentPage="services"
    ogImage="{{ $event['hero']['image'] }}"
    ogImageAlt="{{ $event['hero']['imageAlt'] }}"
>

    <x-sections.category-hero
        heading="{{ $event['hero']['heading'] }}"
        headingBold="{{ $event['hero']['headingBold'] }}"
        :headingTwoLines="true"
        subtitle="{{ $event['hero']['subtitle'] }}"
        description="{{ $event['hero']['description'] }}"
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="{{ $event['hero']['image'] }}"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="{{ $event['info_strip']['headingPrefix'] }}"
        headingBold="{{ $event['info_strip']['headingBold'] }}"
        heading=""
        body="{{ $event['info_strip']['body'] }}"
    />

    <x-sections.travel-in-style-cta
        heading="{{ $event['travel_in_style']['heading'] }}"
        headingBold="{{ $event['travel_in_style']['headingBold'] }}"
        body="{{ $event['travel_in_style']['body'] }}"
        note="{{ $event['travel_in_style']['note'] }}"
        image="{{ $event['travel_in_style']['image'] }}"
        imageAlt="{{ $event['travel_in_style']['imageAlt'] }}"
    />

    <x-sections.event-features
        heading="{{ $event['event_features']['heading'] }}"
        intro="{{ $event['event_features']['intro'] }}"
        :cards="$event['event_features']['cards']"
    />

    <x-sections.event-details
        heading="{{ $event['event_details']['heading'] }}"
        intro="{{ $event['event_details']['intro'] }}"
        leftHeading="{{ $event['event_details']['leftHeading'] }}"
        :checklist="$event['event_details']['checklist']"
        rightHeading="{{ $event['event_details']['rightHeading'] }}"
        :rightParagraphs="$event['event_details']['rightParagraphs']"
        ctaHeading="{{ $event['event_details']['ctaHeading'] }}"
        ctaBody="{{ $event['event_details']['ctaBody'] }}"
    />

    <x-sections.limo-process-steps
        heading="{{ $event['process_steps']['heading'] }}"
        headingBold="{{ $event['process_steps']['headingBold'] }}"
        intro="{{ $event['process_steps']['intro'] }}"
        :steps="$event['process_steps']['steps']"
    />

    <x-sections.service-fulfillment
        heading="{{ $event['service_fulfillment']['heading'] }}"
        headingBold="{{ $event['service_fulfillment']['headingBold'] }}"
        intro="{{ $event['service_fulfillment']['intro'] }}"
        :items="$event['service_fulfillment']['items']"
        legend="{{ $event['service_fulfillment']['legend'] }}"
    />

    <x-sections.review-slider />
    <x-sections.why-choose-us />
    <x-sections.faq preset="{{ $event['faq_preset'] }}" />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
```

---

## Component Work Required Before First Page Goes Live

### Truly New Build

| Component | Based on | What to build |
|---|---|---|
| `x-sections.travel-in-style-cta` | `x-sections.travel-in-style` (modeled after, not copied) | Full-width centered H2 + champagne underbar row above both columns; H3/H4 in right column; two branded CTAs (Call Us + Get a Free Quote modal) instead of a single link button. The original travel-in-style has one button and no full-width header row — this component diverges structurally from that starting point. |

### Renames (existing code, new component tag)

| New tag | Renamed from | Action |
|---|---|---|
| `x-sections.event-features` | Inline `#party-bus-features` in `party-bus-rental-aurora-il-night-out.blade.php` | Extract the cloud-light 3-col feature card grid into `event-features.blade.php` with `heading`, `intro`, and `cards` props. Update the Aurora page to use the new tag. |
| `x-sections.event-details` | `x-sections.aurora-night-out` | Rename `aurora-night-out.blade.php` to `event-details.blade.php` and make all hardcoded Aurora copy prop-driven. Update every existing usage of `aurora-night-out` to `event-details` with matching inline props. |
| `x-sections.service-fulfillment` | `x-sections.limo-booking-timeline` | Rename `limo-booking-timeline.blade.php` to `service-fulfillment.blade.php`. Update every existing usage of `limo-booking-timeline` across the site to the new tag. |

All components must keep `id="component-name"` and `style="scroll-margin-top: 80px;"` on the `<section>` tag so the `/page-management` scanner can detect them.

---

## Chicago Cubs — Full Data File Specification

This section contains the fully populated `app/Data/EventContent.php` entry for the Cubs page. All copy is drawn from `docs/seo/StopAndGo.cubs-gameday-transportation.md`, keyword-aligned to `docs/seo/StopAndGo.Pillars.limo-party-bus-seo-keywords.md`, and reviewed against all copy rules above. This is the content to transcribe into the actual data file when building the page.

### Meta, Title, and OG

```
Page title:      Chicago Cubs Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.
Meta description: Luxury limo, party bus, and sprinter van service to Wrigley Field from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing. Book your Cubs game day ride today.
OG image:        /images/heroes/hero-cubs-limo.jpg
OG image alt:    Luxury party bus for Chicago Cubs game day transportation, Stop & Go Airport Shuttle Service, Inc.
currentPage:     services
```

---

### Section 1 — Hero (`$event['hero']`)

```
heading:      'Chicago Cubs'
headingBold:  'Limo & Party Bus Service'
headingTwoLines: true
subtitle:     'Your Wrigley Field trip starts the moment you step on board'
description:  'Stop & Go Airport Shuttle Service, Inc. takes your group to Wrigley Field from anywhere in Chicagoland. No parking search. No surge-priced car. No scrambling for a ride home after extra innings. We pick up your group at your door in Naperville, Schaumburg, Evanston, or Orland Park, and we deliver you to the Friendly Confines on time, every time. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for groups of 13 or more. Every chauffeur is background-checked, uniformed, and trained on the Kennedy Expressway and Lakeview routing that matters on game day. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.'
image:        '/images/heroes/hero-cubs-limo.jpg'
imageAlt:     'Luxury party bus for Chicago Cubs game day, Stop & Go Airport Shuttle Service, Inc., serving all of Chicagoland'
imagePosition: 'center center'
buttonText:   'Book a Ride'
buttonHref:   'https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo'
```

**SEO keywords embedded:** "limo & party bus service," "Wrigley Field," "Chicagoland," "flat-rate pricing," "game day transportation," "chauffeur."

---

### Section 2 — Info Strip (`$event['info_strip']`)

```
headingPrefix: 'Skip the Parking Search,'
headingBold:   'Ride to the Friendly Confines'
heading:       ''
body:          'We handle the Kennedy Expressway, the Lakeview parking maze, and the post-game pickup so your group focuses on the game, the beers on Sheffield Avenue, and the tradition — not the logistics.'
```

**SEO keywords embedded:** "Friendly Confines," "Lakeview," "game day," "post-game pickup."

---

### Section 3 — Travel in Style CTA (`$event['travel_in_style']`)

```
heading:     'From Your Driveway'
headingBold: 'to Wrigley Field'
subtitle:    'Pickup from every corner of Chicagoland'
body:        'Our chauffeurs know Wrigleyville. They know where to drop off, which side streets clear first after the game, and how to build in the right buffer for I-88, I-290, and the Kennedy so your group arrives relaxed. Whether you are coming from DuPage County, the North Shore, or the southwest suburbs, we have run this route many times. You focus on pre-game plans. We handle everything from your driveway to Clark and Addison.'
note:        'Groups of 13 or more passengers. Call us for exact availability by group size.'
image:       '/images/sections/cubs-wrigleyville.jpg'
imageAlt:    'Wrigleyville neighborhood at Clark and Addison Streets, Wrigley Field, Chicago, Illinois'
```

**SEO keywords embedded:** "Wrigley Field," "Wrigleyville," "chauffeured transportation," "Clark and Addison," "DuPage County," "North Shore," "southwest suburbs."

**H2 (full-width row):** "From Your Driveway **to Wrigley Field**"
**H3 (right column):** "Pickup from every corner of Chicagoland"
**H4 (right column):** "Groups of 13 or more passengers"
**CTAs:** Call Us (tel:+17083154445) | Get a Free Quote (modal)

---

### Section 4 — Event Features (`$event['event_features']`)

```
heading: 'What Your Cubs Game Day Ride <strong>Includes</strong>'
intro:   'Every vehicle in our fleet comes fully equipped for an unforgettable game day. These are the features your group rides with.'

cards: [
    [
        'feature' => 'LED Lighting Throughout',
        'benefit' => 'Game day energy from the first pickup',
        'why'     => 'Dimmable LED lighting sets the mood before the first pitch and keeps the energy high on the way home, win or lose.',
    ],
    [
        'feature' => 'Premium Sound System',
        'benefit' => 'Your playlist, your ride',
        'why'     => 'Bluetooth audio throughout the cabin means your group controls the music from Naperville to Addison Street.',
    ],
    [
        'feature' => 'Wrap-Around Leather Seating',
        'benefit' => 'Room for every member of your crew',
        'why'     => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one is squeezed into a back seat.',
    ],
    [
        'feature' => 'Beverage Coolers',
        'benefit' => 'Drinks cold, hands free, all ride long',
        'why'     => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup.',
    ],
    [
        'feature' => 'Climate Control',
        'benefit' => 'Comfortable in April or August',
        'why'     => 'Chicago game day weather runs from 40 degrees to 90. Our climate control keeps your group comfortable through all of it.',
    ],
    [
        'feature' => 'Professional Chauffeur',
        'benefit' => 'Background-checked, uniformed, and on time',
        'why'     => 'Every chauffeur is vetted, trained on Lakeview and Wrigleyville routing, and focused on getting your group there and back safely.',
    ],
]
```

**SEO keywords embedded:** "game day party bus," "Wrigleyville," "chauffeured transportation," "licensed chauffeurs," "LED lighting party bus," "sound system," "leather interior."

---

### Section 5 — Event Details (`$event['event_details']`)

```
heading:      'Why Chicagoland Groups Choose a Party Bus for Cubs Games'
intro:        'Getting to Wrigley Field in your own car means fighting the Kennedy, paying $50 to $70 for a parking spot six blocks from the gate, and hoping everyone makes it back to the same pickup point after the game. A party bus solves every one of those problems before you leave your driveway.'

leftHeading:  'Four Reasons It Works Better Than Driving'
checklist: [
    [
        'feature' => 'Nobody has to be the designated driver',
        'detail'  => 'Your whole group celebrates, drinks responsibly, and enjoys the game without anyone drawing the short straw for the ride home.',
    ],
    [
        'feature' => 'Skip the $60 parking lot',
        'detail'  => 'Game-day parking near Wrigley Field can cost more than some tickets. We drop your group right at the gates. No walking. No parking fees.',
    ],
    [
        'feature' => 'The party starts before first pitch',
        'detail'  => 'Premium sound, LED lighting, and room to move means the celebration starts the moment you leave your driveway, not when you find your seat.',
    ],
    [
        'feature' => 'Post-game pickup is already arranged',
        'detail'  => 'No waiting 30 minutes for a surge-priced car home. Your chauffeur stages at a pre-arranged meeting point near the park and is ready when the final out lands.',
    ],
]

rightHeading:    'Planning Your Wrigley Field Night'
rightParagraphs: [
    'Wrigleyville is built for exactly the kind of night your group is planning. Clark Street and Sheffield Avenue have some of the best sports bars in Chicago, and the rooftop clubs across from the outfield are a Cubs tradition unto themselves. Our chauffeurs know where rideshare pickups pile up after the game and where to stage instead so your group is rolling while others are still staring at their phones.',
    'A Cubs game day with us typically looks like this: pickup at your door, a pre-game stop at a Wrigleyville bar or restaurant, the game itself, and then whatever your group decides after the final out. A bar on Clark Street. A late dinner in Lincoln Park. Or straight home if it is a school night. We build the schedule around your plans.',
    'We serve groups from every suburb in Chicagoland: Naperville, Aurora, Wheaton, Downers Grove, Schaumburg, Arlington Heights, Evanston, Wilmette, Orland Park, Tinley Park, New Lenox, Joliet, and every neighborhood in between. Multi-city pickups and multi-stop itineraries are something we handle every weekend.',
]

ctaHeading: 'Ready to book your Cubs game day ride?'
ctaBody:    'Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day.'
```

**SEO keywords embedded:** "party bus to Wrigley Field," "Cubs game day transportation," "Wrigleyville," "Clark Street," "Sheffield Avenue," "Lincoln Park," "chauffeured transportation," "game day party bus," all major suburb names.

---

### Section 6 — Process Steps (`$event['process_steps']`)

```
heading:     'Six Things That Happen'
headingBold: 'Before You Reach Wrigley Field'
intro:       'A great game day ride does not happen by accident. Here is everything that happens on our end from the moment you book to the moment we drop you at the Friendly Confines.'

steps: [
    [
        'num'    => '01',
        'title'  => 'You book and your rate locks',
        'detail' => 'Cubs game day pricing, confirmed',
        'body'   => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the game and any stops you have planned. No surge pricing. No adjustments for traffic or game-time changes.',
    ],
    [
        'num'    => '02',
        'title'  => 'We confirm your game-day details',
        'detail' => 'First pitch time, pickup route, group size',
        'body'   => 'The day before your game, our team reviews your pickup address, timing, group size, and any stops on your itinerary. We pull up your game time and build the departure window around it.',
    ],
    [
        'num'    => '03',
        'title'  => 'Your vehicle is prepared and the route is loaded',
        'detail' => 'Wrigleyville drop-off and post-game staging pre-planned',
        'body'   => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Kennedy Expressway routing and the specific Wrigleyville drop-off and post-game staging point for your group.',
    ],
    [
        'num'    => '04',
        'title'  => 'Your chauffeur arrives early',
        'detail' => '10 to 15 minutes ahead of your departure time',
        'body'   => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is there when your group is still getting ready, not the other way around.',
    ],
    [
        'num'    => '05',
        'title'  => 'The ride runs on your schedule',
        'detail' => 'Pre-game stop, the game, post-game — your call',
        'body'   => 'Your chauffeur handles the route, the traffic, and any timing adjustments. Pre-game bar stop on Clark Street, straight to the gates, or a stop on the way home — we adapt to what your group wants.',
    ],
    [
        'num'    => '06',
        'title'  => 'Post-game pickup, everyone home safe',
        'detail' => 'Pre-staged away from the worst Addison Street congestion',
        'body'   => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the surge of rideshare congestion on Addison Street. Your group is rolling while others are still waiting.',
    ],
]
```

**SEO keywords embedded:** "Cubs game day," "flat-rate pricing," "Wrigley Field," "Kennedy Expressway," "Wrigleyville," "chauffeured transportation," "Clark Street," "no hidden fees."

---

### Section 7 — Service Fulfillment (`$event['service_fulfillment']`)

```
heading:     'What We Cover on'
headingBold: 'Cubs Game Day'
intro:       'These are the six things our clients care most about when booking a game day ride to Wrigley Field. Here is how we handle each one.'

items: [
    [
        'occasion' => 'Group Size Options',
        'timing'   => '13 or more passengers',
        'detail'   => 'Our fleet covers every group size. Stretch limousines and executive SUVs work for smaller outings. Luxury sprinter vans fit 8 to 14. Party buses and limo coaches handle 14 to 40. Call us if your group is larger.',
        'urgency'  => 'high',
        'note'     => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.',
    ],
    [
        'occasion' => 'Pickup Routing',
        'timing'   => 'Anywhere in Chicagoland',
        'detail'   => 'We pick up from Naperville, Aurora, Schaumburg, Evanston, Orland Park, New Lenox, downtown Chicago, and every suburb in between. Multi-city pickups with stops at multiple addresses are handled regularly.',
        'urgency'  => 'medium',
        'note'     => null,
    ],
    [
        'occasion' => 'Wrigleyville Drop-Off',
        'timing'   => 'Right at the gates',
        'detail'   => 'Our chauffeurs know the game-day drop-off lanes near Clark and Addison. We stage away from rideshare congestion and communicate the exact meeting point to your group leader before departure.',
        'urgency'  => 'high',
        'note'     => 'Drop-off and pickup points are confirmed with your group leader the day before the game.',
    ],
    [
        'occasion' => 'Pre-Game Stops',
        'timing'   => 'Built into your itinerary',
        'detail'   => 'A stop at a Wrigleyville bar or restaurant before the game is one of our most common requests. We build pre-game stop timing into the schedule so you make it to your seats before first pitch.',
        'urgency'  => 'medium',
        'note'     => null,
    ],
    [
        'occasion' => 'Post-Game Pickup',
        'timing'   => 'Staged and ready at final out',
        'detail'   => 'Your chauffeur does not leave after drop-off. They stage at the pre-arranged meeting point and monitor the game. When the final out is recorded, they are ready to move before the lot traffic builds.',
        'urgency'  => 'high',
        'note'     => 'Extra-inning games are not a problem. Your rate does not change based on game length.',
    ],
    [
        'occasion' => 'Flat-Rate Pricing',
        'timing'   => 'Locked at booking',
        'detail'   => 'Your rate is confirmed when you book. No meter running. No surge pricing for Kennedy traffic or a packed Wrigleyville. No surprise fees at the end of the night. Gratuity is not included but is always appreciated.',
        'urgency'  => 'low',
        'note'     => null,
    ],
]

legend: 'Champagne = book early, high demand. Blue = moderate lead time. Slate = flexible.'
```

**SEO keywords embedded:** "game day party bus," "Wrigley Field," "Clark and Addison," "flat-rate pricing," "Chicagoland," "limo coach," "no hidden fees," "chauffeured transportation."

---

### FAQ Preset for `config/faqs.php` — key `'chicago-cubs'`

Add the following key to `config/faqs.php`. Source: `docs/seo/StopAndGo.cubs-gameday-transportation.md` FAQ section + `docs/seo/StopAndGo.Pillars.limo-party-bus-seo-keywords.md` PAA cluster.

```php
'chicago-cubs' => [
    [
        'question' => 'How far in advance should I book a limo or party bus for a Cubs game?',
        'answer'   => 'For Opening Day, weekend games, and marquee series like Cubs vs. Cardinals or Cubs vs. Dodgers, we recommend booking 3 to 4 weeks ahead. For weekday games, we can often accommodate requests within a few days. The earlier you book, the more vehicle options you have.',
    ],
    [
        'question' => 'Where does the limo or party bus drop us off near Wrigley Field?',
        'answer'   => 'We coordinate a designated drop-off point near Clark and Addison that avoids the worst rideshare and pedestrian congestion on game day. Your chauffeur communicates the exact meeting point directly with your group leader before departure.',
    ],
    [
        'question' => 'Can we make stops for dinner or drinks before or after the game?',
        'answer'   => 'Yes. Most of our Cubs game day bookings include at least one additional stop, whether that is a Wrigleyville bar or restaurant before the game, a Lincoln Park dinner reservation after, or a lakefront photo stop on the way. We build your full itinerary into the schedule.',
    ],
    [
        'question' => 'Is alcohol allowed on the party bus to a Cubs game?',
        'answer'   => 'Yes, for passengers of legal drinking age in accordance with Illinois law. Our chauffeurs are trained on responsible service protocols for group celebrations. BYOB is common on our Cubs game day bookings.',
    ],
    [
        'question' => 'What is the difference between booking a limo and a party bus for a Cubs outing?',
        'answer'   => 'A stretch limousine is best for smaller, more intimate groups who want an elegant ride. A party bus is built for larger groups of 14 or more who want a social, celebratory atmosphere with music, LED lighting, and room to move around. We can help you choose based on your group size and vibe.',
    ],
    [
        'question' => 'What happens if the game goes to extra innings?',
        'answer'   => 'Your flat rate does not change based on game length. Your chauffeur stages near the park and monitors the game. When the final out is recorded, they are ready to move. Extra-inning games are not a problem.',
    ],
    [
        'question' => 'Do you pick up from the suburbs for Cubs games?',
        'answer'   => 'Yes. We serve all of Chicagoland for Cubs game day transportation, including Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every community in between. Multi-city and multi-address pickups are common.',
    ],
    [
        'question' => 'How many people fit in your party buses?',
        'answer'   => 'Our vehicles start at 13 passengers. Party buses and limo coaches handle groups of 14 to 40. Call us with your exact headcount and we will match you to the right vehicle.',
    ],
],
```

---

### Structured Data Values for Cubs Page

Use these values when populating the four JSON-LD blocks in the Blade file skeleton.

```
LocalBusiness:    (identical block on every event page — copy verbatim from skeleton)

Service:
  name:        "Chicago Cubs Limo & Party Bus Service"
  description: "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Wrigley Field for Cubs games from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing."
  areaServed:  Chicago IL, Naperville IL, Aurora IL, Schaumburg IL, Evanston IL, Orland Park IL, Tinley Park IL, New Lenox IL

WebPage:
  name:        "Chicago Cubs Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
  url:         "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service"
  description: (same as meta description)

BreadcrumbList:
  1 — Home        https://www.newlenoxlimoservice.com
  2 — Services    https://www.newlenoxlimoservice.com/services
  3 — Special Events  https://www.newlenoxlimoservice.com/services/events
  4 — Chicago Cubs Limo & Party Bus Service  https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service
```

---

### SEO Keyword Targets — Cubs Page

Primary target phrases (place in H1, H2, meta title, meta description):
- "Chicago Cubs limo service"
- "party bus to Wrigley Field"
- "Cubs game day transportation"
- "Wrigley Field limo service"

Secondary targets (H3, body copy, FAQ):
- "game day party bus Chicago"
- "party bus rental Wrigleyville"
- "limo service to Wrigley Field"
- "Cubs game transportation Chicagoland"
- "sprinter van Wrigley Field"

LSI/semantic terms to weave into body copy naturally:
- chauffeur, flat-rate pricing, Friendly Confines, Clark and Addison, Kennedy Expressway, Lakeview, Lincoln Park, Sheffield Avenue, Gallagher Way, no hidden fees, licensed and insured, 24/7 availability, group transportation, door-to-door service

---



- [ ] Route added in `routes/main-site.php`
- [ ] Event data key added in `app/Data/EventContent.php`
- [ ] Blade file created at `resources/views/pages/services/events/{slug}.blade.php`
- [ ] Hero image added to `public/images/heroes/`
- [ ] FAQ preset added to `config/faqs.php` with event-specific Q&A
- [ ] All four JSON-LD structured data blocks populated
- [ ] All section `id` attributes present (required by `/page-management` scanner)
- [ ] Copy passes all rules in the Copy Rules table above
- [ ] No negative SEO keywords (see `replit.md` SEO section)
- [ ] No em dashes anywhere in copy or data files
- [ ] Full company name "Stop & Go Airport Shuttle Service, Inc." used in body copy
- [ ] H1 appears only in the hero. No heading levels skipped anywhere on the page
