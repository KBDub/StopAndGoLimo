# Special Events Page Template

This document is the canonical reference for building new special-events detail pages on the Stop & Go Airport Shuttle Service, Inc. site. Every new team, venue, or event category page follows this structure.

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

## Data File Convention

Event-specific content (headings, body copy, checklist items, FAQ items, booking timeline items, process steps) lives in a dedicated PHP data class so the Blade file stays lean and content is easy to update without touching markup.

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
                    'heading'         => 'Why Groups Choose a Party Bus for Cubs Games',
                    'leftHeading'     => 'The Group Stays Together',
                    'checklist'       => ['...', '...', '...', '...'],
                    'rightHeading'    => 'Planning Your Cubs Game Day',
                    'rightParagraphs' => ['...', '...'],
                    'ctaHeading'      => 'Ready to book your Cubs game day ride?',
                    'ctaBody'         => '...',
                ],
                'event_night_out' => [
                    'heading'   => 'Why Cubs Fans Choose a Party Bus',
                    'intro'     => '...',
                    'left'      => ['heading' => '...', 'items' => ['...', '...', '...', '...']],
                    'right'     => ['heading' => '...', 'paragraphs' => ['...', '...']],
                    'ctaHeading' => '...',
                    'ctaBody'    => '...',
                ],
                'process_steps' => [
                    'heading'     => 'Six Things That Happen',
                    'headingBold' => 'Before the First Pitch',
                    'intro'       => '...',
                    'steps'       => [
                        ['num' => '01', 'title' => '...', 'body' => '...'],
                        // ... 6 total
                    ],
                ],
                'booking_timeline' => [
                    'heading'     => 'How Far in Advance',
                    'headingBold' => 'to Book for Cubs Games',
                    'intro'       => '...',
                    'items'       => [
                        ['occasion' => '...', 'timing' => '...', 'detail' => '...', 'urgency' => 'high'],
                        // ... 6 total
                    ],
                    'legend' => '...',
                ],
                'faq' => [
                    ['q' => '...', 'a' => '...'],
                    // ... 6-8 items
                ],
                'structured_data' => [
                    'service_name' => 'Chicago Cubs Limo Service',
                    'description'  => '...',
                    'url'          => 'https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service',
                    'breadcrumbs'  => [
                        ['position' => 1, 'name' => 'Home',     'item' => 'https://www.newlenoxlimoservice.com'],
                        ['position' => 2, 'name' => 'Services', 'item' => 'https://www.newlenoxlimoservice.com/services'],
                        ['position' => 3, 'name' => 'Special Events', 'item' => 'https://www.newlenoxlimoservice.com/services/events'],
                        ['position' => 4, 'name' => 'Chicago Cubs Limo Service', 'item' => 'https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service'],
                    ],
                ],
            ],

            'chicago-white-sox' => [
                // same shape as above, different content
            ],
        ];
    }
}
```

In the Blade file, load the data at the top:

```blade
@php $event = \App\Data\EventContent::for('chicago-cubs'); @endphp
```

---

## Full Page Section Order

The table below lists every section in render order, the component tag, whether it is existing or new, and the content source.

| # | Section | Component | Status | Content source |
|---|---|---|---|---|
| 1 | Hero | `x-sections.category-hero` | Existing | `$event['hero']` |
| 2 | Info strip | `x-sections.info-strip` | Existing | `$event['info_strip']` |
| 3 | Travel in style CTA | `x-sections.travel-in-style-cta` | **New** | `$event['travel_in_style']` |
| 4 | Party bus features | `x-sections.party-bus-advantage` | Existing | `$event['party_bus_features']` |
| 5 | Event night out | `x-sections.event-night-out` | **New** | `$event['event_night_out']` |
| 6 | Process steps | `x-sections.limo-process-steps` | Existing | `$event['process_steps']` |
| 7 | Booking timeline | `x-sections.limo-booking-timeline` | Existing | `$event['booking_timeline']` |
| 8 | Review slider | `x-sections.review-slider` | Existing | (no props) |
| 9 | Why choose us | `x-sections.why-choose-us` | Existing | (no props) |
| 10 | FAQ | `x-sections.faq` | Existing | `preset` key or `:faqs` array |
| 11 | Share your experience | `x-sections.share-your-experience` | Existing | (no props) |
| 12 | Map and contact | `x-sections.map-contact-section` | Existing | (no props) |
| 13 | Thin divider | `x-ui.banner-thin-cloud` | Existing | (no props) |
| 14 | Base footer | `x-sections.base-footer` | Existing | (no props) |

---

## Section-by-Section Reference

### 1. Hero — `x-sections.category-hero`

Full-bleed image hero with three CTA buttons (Call Us, Get a Free Quote, Book a Ride).

```blade
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
```

Key props: `heading`, `headingBold`, `subtitle`, `description`, `image`, `imagePosition`.
The three CTAs (Call Us, Get a Free Quote, Book a Ride) are hardcoded in the component — no props needed.

---

### 2. Info Strip — `x-sections.info-strip`

Champagne accent band. Short heading + one-sentence body.

```blade
<x-sections.info-strip
    headingPrefix="{{ $event['info_strip']['headingPrefix'] }}"
    headingBold="{{ $event['info_strip']['headingBold'] }}"
    heading=""
    body="{{ $event['info_strip']['body'] }}"
/>
```

---

### 3. Travel in Style CTA — `x-sections.travel-in-style-cta` (**New component**)

A variant of `x-sections.travel-in-style` that replaces the `/about-us` button with a "Get a Free Quote" button that opens the quote modal. Use the dark (inverted) variant. Image on left, text on right.

**Differences from `travel-in-style`:**
- Button fires `window.dispatchEvent(new CustomEvent('open-modal-quote'))` instead of linking to a page.
- Button label is always "Get a Free Quote."
- Default `inverted=true` so it sits on a navy background between the champagne info-strip and the next navy section without a jarring color flip.

**Props to expose:**
```
heading, headingBold, subtitle, body, note, image, imageAlt, imagePosition (left|right)
```

Until this component is built, use `x-sections.travel-in-style` with `buttonText="Get a Free Quote"` and `buttonHref="#"` plus an `onclick` attribute passed via `$attributes`.

---

### 4. Party Bus Features — `x-sections.party-bus-advantage`

Two-column navy section: checklist left, prose right, CTA block.

```blade
<x-sections.party-bus-advantage
    heading="{{ $event['party_bus_features']['heading'] }}"
    leftHeading="{{ $event['party_bus_features']['leftHeading'] }}"
    :checklist="$event['party_bus_features']['checklist']"
    rightHeading="{{ $event['party_bus_features']['rightHeading'] }}"
    :rightParagraphs="$event['party_bus_features']['rightParagraphs']"
    ctaHeading="{{ $event['party_bus_features']['ctaHeading'] }}"
    ctaBody="{{ $event['party_bus_features']['ctaBody'] }}"
    ctaHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
/>
```

Checklist is a flat `string[]`. Right paragraphs is a `string[]` rendered as separate `<p>` tags.

---

### 5. Event Night Out — `x-sections.event-night-out` (**New component**)

A generalized, fully prop-driven version of `x-sections.aurora-night-out`. The aurora version is hardcoded for Aurora, IL venue routing. The new component takes the same two-column navy layout but accepts all copy as props so it can be reused for any team or venue.

**Props to expose:**
```
id, heading, intro,
leftHeading, checklist (string[]),
rightHeading, rightParagraphs (string[]),
ctaHeading, ctaBody
```

CTA buttons inside the component: "Get a Free Quote" (opens modal) and a phone link — both hardcoded in the component since they are sitewide constants.

---

### 6. Process Steps — `x-sections.limo-process-steps`

White background, 2x3 numbered card grid. Fully prop-driven.

```blade
<x-sections.limo-process-steps
    heading="{{ $event['process_steps']['heading'] }}"
    headingBold="{{ $event['process_steps']['headingBold'] }}"
    intro="{{ $event['process_steps']['intro'] }}"
    :steps="$event['process_steps']['steps']"
/>
```

Each step: `['num' => '01', 'title' => '...', 'body' => '...']`. Always 6 items.

---

### 7. Booking Timeline — `x-sections.limo-booking-timeline`

Cloud-light background, 3-col urgency card grid. Fully prop-driven.

```blade
<x-sections.limo-booking-timeline
    heading="{{ $event['booking_timeline']['heading'] }}"
    headingBold="{{ $event['booking_timeline']['headingBold'] }}"
    intro="{{ $event['booking_timeline']['intro'] }}"
    :items="$event['booking_timeline']['items']"
    legend="{{ $event['booking_timeline']['legend'] }}"
/>
```

Each item: `['occasion' => '...', 'timing' => '...', 'detail' => '...', 'urgency' => 'high|medium|low']`.
Urgency maps to border color: `high` = champagne, `medium` = azure, `low` = slate. Always 6 items.

---

### 8–14. Standard Footer Sections

These render identically on every page. No props needed.

```blade
<x-sections.review-slider />
<x-sections.why-choose-us />
<x-sections.faq preset="general" />
<x-sections.share-your-experience />
<x-sections.map-contact-section />
<x-ui.banner-thin-cloud />
<x-sections.base-footer />
```

For the FAQ, pass a `preset` key from `config/faqs.php` if an event-specific FAQ preset exists, or pass `:faqs="$event['faq']"` directly for inline content.

---

## Structured Data

Each event page needs three JSON-LD blocks in a `@push('structured-data')` block at the top of the Blade file:

1. `Service` — service name, provider `@id`, `areaServed`, description
2. `WebPage` — name, url, description
3. `BreadcrumbList` — 4 levels: Home, Services, Special Events, {Event Page}

Use `@verbatim` around the JSON-LD block to prevent Blade from parsing `@context` / `@type` / `@id` as directives. See `replit.md` Gotchas for detail.

---

## Skeleton Blade File

```blade
@php $event = \App\Data\EventContent::for('chicago-cubs'); @endphp

@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Cubs Limo Service",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Chicago", "addressRegion": "IL", "addressCountry": "US" }
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
        { "@type": "ListItem", "position": 1, "name": "Home",         "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",     "item": "https://www.newlenoxlimoservice.com/services" },
        { "@type": "ListItem", "position": 3, "name": "Special Events","item": "https://www.newlenoxlimoservice.com/services/events" },
        { "@type": "ListItem", "position": 4, "name": "Chicago Cubs Limo Service", "item": "https://www.newlenoxlimoservice.com/services/events/chicago-cubs-limo-service" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Cubs Limo Service | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="..."
    currentPage="services"
    ogImage="{{ $event['hero']['image'] }}"
    ogImageAlt="..."
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

    {{-- travel-in-style-cta: new component (pending build) --}}
    <x-sections.travel-in-style
        heading="{{ $event['travel_in_style']['heading'] }}"
        headingBold="{{ $event['travel_in_style']['headingBold'] }}"
        body="{{ $event['travel_in_style']['body'] }}"
        note="{{ $event['travel_in_style']['note'] }}"
        image="{{ $event['travel_in_style']['image'] }}"
        imageAlt="{{ $event['travel_in_style']['imageAlt'] }}"
        :inverted="true"
        buttonText="Get a Free Quote"
        buttonHref="#"
    />

    <x-sections.party-bus-advantage
        heading="{{ $event['party_bus_features']['heading'] }}"
        leftHeading="{{ $event['party_bus_features']['leftHeading'] }}"
        :checklist="$event['party_bus_features']['checklist']"
        rightHeading="{{ $event['party_bus_features']['rightHeading'] }}"
        :rightParagraphs="$event['party_bus_features']['rightParagraphs']"
        ctaHeading="{{ $event['party_bus_features']['ctaHeading'] }}"
        ctaBody="{{ $event['party_bus_features']['ctaBody'] }}"
        ctaHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
    />

    {{-- event-night-out: new component (pending build) --}}
    {{-- placeholder: aurora-night-out until event-night-out is built --}}
    <x-sections.aurora-night-out />

    <x-sections.limo-process-steps
        heading="{{ $event['process_steps']['heading'] }}"
        headingBold="{{ $event['process_steps']['headingBold'] }}"
        intro="{{ $event['process_steps']['intro'] }}"
        :steps="$event['process_steps']['steps']"
    />

    <x-sections.limo-booking-timeline
        heading="{{ $event['booking_timeline']['heading'] }}"
        headingBold="{{ $event['booking_timeline']['headingBold'] }}"
        intro="{{ $event['booking_timeline']['intro'] }}"
        :items="$event['booking_timeline']['items']"
        legend="{{ $event['booking_timeline']['legend'] }}"
    />

    <x-sections.review-slider />
    <x-sections.why-choose-us />
    <x-sections.faq preset="general" />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
```

---

## New Components to Build Before First Page Goes Live

| Component | Based on | Key difference |
|---|---|---|
| `x-sections.travel-in-style-cta` | `x-sections.travel-in-style` | Button opens quote modal instead of linking to a page |
| `x-sections.event-night-out` | `x-sections.aurora-night-out` | Fully prop-driven, no hardcoded Aurora/venue copy |

Both new components should be built and documented in the Developer Dashboard (`/page-management`) with proper `id` attributes and `scroll-margin-top: 80px` on the `<section>` tag.

---

## Checklist for Each New Event Page

- [ ] Add route in `routes/main-site.php`
- [ ] Add event data key in `app/Data/EventContent.php`
- [ ] Create Blade file at `resources/views/pages/services/events/{slug}.blade.php`
- [ ] Add hero image to `public/images/heroes/`
- [ ] Populate all structured data blocks
- [ ] Verify all section `id` attributes are present (required by `/page-management` scanner)
- [ ] Read `docs/branding-requirements.md` before writing any copy
- [ ] No negative SEO keywords (see `replit.md` SEO section)
- [ ] No em dashes anywhere in copy
- [ ] Full company name "Stop & Go Airport Shuttle Service, Inc." in body copy (not "Stop & Go Limo")
