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
                'party_bus_features' => [
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
| 4 | Party bus features | `x-sections.party-bus-features` | **New** | `$event['party_bus_features']` |
| 5 | Event details | `x-sections.event-details` | **New (rename)** | `$event['event_details']` |
| 6 | Process steps | `x-sections.limo-process-steps` | Existing | `$event['process_steps']` |
| 7 | Service fulfillment | `x-sections.limo-booking-timeline` | Existing | `$event['service_fulfillment']` |
| 8 | Review slider | `x-sections.review-slider` | Existing | (no props) |
| 9 | Why choose us | `x-sections.why-choose-us` | Existing | (no props) |
| 10 | FAQ | `x-sections.faq` | Existing | preset from `config/faqs.php` |
| 11 | Share your experience | `x-sections.share-your-experience` | Existing | (no props) |
| 12 | Map and contact | `x-sections.map-contact-section` | Existing | (no props) |
| 13 | Thin divider | `x-ui.banner-thin-cloud` | Existing | (no props) |
| 14 | Base footer | `x-sections.base-footer` | Existing | (no props) |

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

### 4. Party Bus Features — `x-sections.party-bus-features` (**New**)

Center-justified H2 above a 3-column card grid. Each card has H3 + body. Background: cloud-light.

This section is extracted from the inline markup in `resources/views/pages/party-bus-rental-aurora-il-night-out.blade.php` (the `#party-bus-features` section). It must become a reusable component.

```
H2  — {heading}                          (center-justified)
        {intro}                           (center-justified body paragraph, max-w-2xl)
  [Card grid — 3 columns, 6 cards]
    H3  — {cards[n]['feature']}           (champagne, per card)
            {cards[n]['why']}             (body paragraph, per card)
```

**Props:**
```
heading  string   H2 text (may contain <strong> for bold portion)
intro    string   Paragraph below the H2
cards    array    [{feature, why}, ...] — always 6 items
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
    H3  — {steps[n]['title']}            (each card title)
            {steps[n]['body']}            (body paragraph)
            {steps[n]['num']}             (champagne ghost number — decorative, aria-hidden)
```

Each step array: `['num' => '01', 'title' => '...', 'body' => '...']`. Always 6 items.

---

### 7. Service Fulfillment — `x-sections.limo-booking-timeline`

> **Important usage note:** Despite its default name and default content being about booking lead times, this component is a general-purpose 6-card grid on a cloud-light background. For special events pages it should be repurposed as a **service fulfillment** or **how we serve this event** section. The `heading`, `headingBold`, `intro`, `items`, and `legend` props give full control over the content. The card structure (H3 occasion/topic, styled timing/category label, detail body) maps cleanly to any category-level service breakdown. Example: "What We Cover on Cubs Game Day" with 6 cards covering group size, route planning, vehicle options, pricing, availability, and post-game drop-off.

Background: cloud-light. Center H2, then 3-column card grid.

```
H2  — {heading} {headingBold}            (center-justified, headingBold in champagne)
        {intro}                           (center-justified body paragraph)
  [Card grid — 3 columns, 6 cards]
    H3  — {items[n]['occasion']}         (card topic or service category)
            {items[n]['timing']}          (styled label — champagne/azure/slate per urgency)
            {items[n]['detail']}          (body paragraph)
        {legend}                          (small note below the grid)
```

Each item: `['occasion' => '...', 'timing' => '...', 'detail' => '...', 'urgency' => 'high|medium|low']`. Always 6 items. Urgency maps border color: `high` = champagne, `medium` = azure, `low` = slate.

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

    <x-sections.party-bus-features
        heading="{{ $event['party_bus_features']['heading'] }}"
        intro="{{ $event['party_bus_features']['intro'] }}"
        :cards="$event['party_bus_features']['cards']"
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

    <x-sections.limo-booking-timeline
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

## New Components to Build Before First Page Goes Live

| Component | Based on | Key differences |
|---|---|---|
| `x-sections.travel-in-style-cta` | `x-sections.travel-in-style` | Full-width H2 row above both columns (centered + underbar); H3/H4 in right column; two branded CTAs (Call Us + Get a Free Quote modal) instead of a single link button |
| `x-sections.party-bus-features` | Inline markup in `party-bus-rental-aurora-il-night-out.blade.php` (`#party-bus-features`) | Extract the cloud-light 3-col feature card grid into a reusable component with `heading`, `intro`, and `cards` props |
| `x-sections.event-details` | `x-sections.aurora-night-out` | Rename the file and make all hardcoded Aurora copy prop-driven. Update every existing usage of `aurora-night-out` to the new tag with matching inline props |

All three components must include `id="component-name"` and `style="scroll-margin-top: 80px;"` on the `<section>` tag so the `/page-management` scanner can detect them.

---

## Checklist for Each New Event Page

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
