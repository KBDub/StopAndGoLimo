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
| Passenger counts | Never say "our vehicles start at 13 passengers" or list vehicle capacities (e.g., "8 to 14", "14 to 40"). The service minimum is "groups of 13 or more." For all other size language use "no matter your group size" or "any group." |

---

## Component Standards

### x-sections.info-strip — Body Minimum

The `body` prop on every `x-sections.info-strip` **must contain a minimum of 2 to 3 full sentences.** A single sentence is not sufficient. The body anchors the heading with context and must satisfy search intent for the page topic. This requirement is also enforced as a comment inside the component itself.

### x-sections.free-instant-quote — FIQ Subheading Standard

The `descSubheading` prop on every event page FIQ block **must use the "We Have the Best" prefix pattern.** This applies to all existing and future special-events pages.

| Page | descSubheading value |
|---|---|
| Chicago Cubs | `We Have the Best Cubs Game Day Transportation` |
| Chicago White Sox | `We Have the Best White Sox Game Day Transportation` |
| Crosstown Classic | `We Have the Best Crosstown Classic Transportation` |

When adding a new event page, follow the same pattern: `We Have the Best [Event Name] Transportation`.

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
                'fiq' => [
                    'heading'        => '...',   // e.g. 'Book Your'
                    'headingBold'    => '...',   // e.g. 'Cubs Game Day'
                    'headingTail'    => '...',   // e.g. 'Ride'
                    'descImage'      => '...',   // path to right-column photo
                    'descImageAlt'   => '...',
                    'descSubheading' => '...',   // H3 — event service label
                    'descBody'       => '...',   // 1–2 sentence intro ending with colon
                    'descBullets'    => ['...', '...', '...', '...', '...'],  // exactly 5
                    'descClosing'    => '...',   // closing callout sentence
                    'defaultService' => '...',   // pre-selects service dropdown
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
| 3 | Travel in style CTA | `x-sections.travel-in-style-cta` | Existing | `$event['travel_in_style']` |
| 4 | Free Instant Quote (FIQ) | `x-sections.free-instant-quote` | Existing | `$event['fiq']` |
| 5 | Event features | `x-sections.event-features` | Rename of inline `#party-bus-features` | `$event['event_features']` |
| 6 | Event details | `x-sections.event-details` | Rename of `aurora-night-out` | `$event['event_details']` |
| 7 | Process steps | `x-sections.limo-process-steps` | Existing | `$event['process_steps']` |
| 8 | Service fulfillment | `x-sections.service-fulfillment` | Rename of `limo-booking-timeline` | `$event['service_fulfillment']` |
| 9 | Review slider | `x-sections.review-slider` | Existing | (no props) |
| 10 | Why choose us | `x-sections.why-choose-us` | Existing | (no props) |
| 11 | FAQ | `x-sections.faq` | Existing | preset from `config/faqs.php` |
| 12 | Share your experience | `x-sections.share-your-experience` | Existing | (no props) |
| 13 | Map and contact | `x-sections.map-contact-section` | Existing | (no props) |
| 14 | Thin divider | `x-ui.banner-thin-cloud` | Existing | (no props) |
| 15 | Base footer | `x-sections.base-footer` | Existing | (no props) |

---

## Content Depth — Sections 1–8

Sections 1 through 8 carry all the SEO weight and conversion content for the page. Every one of these sections must be fully written out with rich, specific copy. No placeholder text, no thin paragraphs. Each section should:

- Answer a real question a potential client would ask about this specific event
- Reference the event, venue, or team by name at least once per section
- Include at least one concrete detail (timing, capacity, vehicle type, route, feature, or benefit)
- Stay at a 7th grade reading level — short sentences, plain words, active voice

Sections 9–15 are shared components with no event-specific content and need no custom copy.

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

### 4. Free Instant Quote (FIQ) — `x-sections.free-instant-quote`

The FIQ section combines a contact/quote form on the left with a descriptive content panel on the right. For all special events pages, use `rightVariant="description"` with the event photo at the top of the right column (`descImageTop: true`). This mirrors the town-car-service page implementation exactly.

**Right column structure (top to bottom):**

1. Event photo — full width of the right column, positioned above the heading
2. H2 — `descHeading` with champagne underbar (always "Why Choose Us?")
3. H3 — `descSubheading` — event-specific service label (e.g., "Cubs Game Day Transportation")
4. `descBody` — 1–2 sentence intro paragraph ending with a colon, introducing the bullet list
5. `descBullets` — exactly 5 bullet points, styled with champagne dots and hairline dividers between items
6. `descClosing` — bold blockquote-style callout rendered at the bottom of the right column

**Background:** cloud-light (default). Do not pass `inverted`.

**Left column:** Contact/quote form. `heading`, `headingBold`, and `headingTail` control the H2 above the form. Always set `formAction="/get-a-quote"` and `submitLabel="Send Message"`.

```
[Left column — quote form]
H2  — {heading} {headingBold} {headingTail}     (three-part heading above the form)

[Right column — description panel]
        {descImage}                              (event photo, full right-column width, at top)
H2  — {descHeading}                             ("Why Choose Us?" with champagne underbar)
H3  — {descSubheading}                          (event-specific service name)
        {descBody}                              (1–2 sentence intro ending with colon)
      [Bullet list — exactly 5 items]
        {descBullets[0..4]}
        {descClosing}                           (closing callout, bold blockquote style)
```

**Props:**

```
heading        string   Regular text before the bold word in the form H2 (e.g., "Book Your").
headingBold    string   Champagne bold phrase in the form H2 (e.g., "Cubs Game Day").
headingTail    string   Regular text after the bold phrase (e.g., "Ride"). May be empty string.
rightVariant   string   Always "description" on event pages.
descImageTop   bool     Always true on event pages — places the photo above the H2.
descImage      string   Path to the right-column event photo.
descImageAlt   string   Descriptive alt text for the right-column photo.
descHeading    string   H2 in the right column. Use the default: "Why Choose Us?".
descSubheading string   H3 in the right column. Use the event-specific service label.
descBody       string   1–2 sentence intro paragraph. End with a colon to lead into bullets.
descBullets    array    Exactly 5 bullet points as plain strings.
descClosing    string   Closing callout, rendered as a left-bordered blockquote. One confident sentence.
formAction     string   Always "/get-a-quote".
submitLabel    string   Always "Send Message".
defaultService string   Pre-selects the service dropdown (e.g., "Chicago Cubs Game Day Limo").
```

**Blade call — Cubs example:**

```blade
<x-sections.free-instant-quote
    heading="Book Your"
    headingBold="Cubs Game Day"
    headingTail="Ride"
    rightVariant="description"
    :descImageTop="true"
    descImage="/images/special-events/cubs/stopngolimo-chicacgo-cubs-ariel.jpg"
    descImageAlt="Aerial view of Wrigley Field and the Wrigleyville neighborhood, Chicago, Illinois"
    descHeading="Why Choose Us?"
    descSubheading="Cubs Game Day Transportation"
    descBody="Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with more than two decades of experience getting groups to Wrigley Field safely and on time:"
    :descBullets="[
        'Flat-rate pricing locked at booking, no surge fees',
        'Wrigleyville drop-off and post-game pickup staging included',
        'Multi-address pickup from any Chicagoland suburb',
        'All vehicles cleaned, inspected, and climate-set before pickup',
        'Licensed, background-checked chauffeurs available 24/7',
    ]"
    descClosing="Serving all of Chicagoland, our professional chauffeurs are ready to get your group to Clark and Addison and back, no matter where you are starting from."
    formAction="/get-a-quote"
    submitLabel="Send Message"
    defaultService="Chicago Cubs Game Day Limo"
/>
```

**`$event['fiq']` data shape:**

```php
'fiq' => [
    'heading'        => 'Book Your',
    'headingBold'    => 'Cubs Game Day',
    'headingTail'    => 'Ride',
    'descImage'      => '/images/special-events/cubs/stopngolimo-chicacgo-cubs-ariel.jpg',
    'descImageAlt'   => 'Aerial view of Wrigley Field and the Wrigleyville neighborhood, Chicago, Illinois',
    'descSubheading' => 'Cubs Game Day Transportation',
    'descBody'       => 'Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with more than two decades of experience getting groups to Wrigley Field safely and on time:',
    'descBullets'    => [
        'Flat-rate pricing locked at booking, no surge fees',
        'Wrigleyville drop-off and post-game pickup staging included',
        'Multi-address pickup from any Chicagoland suburb',
        'All vehicles cleaned, inspected, and climate-set before pickup',
        'Licensed, background-checked chauffeurs available 24/7',
    ],
    'descClosing'    => 'Serving all of Chicagoland, our professional chauffeurs are ready to get your group to Clark and Addison and back, no matter where you are starting from.',
    'defaultService' => 'Chicago Cubs Game Day Limo',
],
```

---

### 5. Event Features — `x-sections.event-features` (**New**)

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

### 6. Event Details — `x-sections.event-details` (**Renamed from `aurora-night-out`**)

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

### 7. Process Steps — `x-sections.limo-process-steps`

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

### 8. Service Fulfillment — `x-sections.service-fulfillment` (**Renamed from `limo-booking-timeline`**)

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

### 9. Review Slider — `x-sections.review-slider`

```
H2  — (hardcoded heading inside component)
  [Slider cards]
    H3  — (reviewer name — hardcoded)
```

No props. No customization needed on event pages.

---

### 10. Why Choose Us — `x-sections.why-choose-us`

```
H2  — (hardcoded heading inside component)
  [Feature items]
    H3  — (each feature title — hardcoded)
```

No props.

---

### 11. FAQ — `x-sections.faq`

```
H2  — (hardcoded section heading inside component)
  [Accordion items]
    H3  — {faq[n]['question']}           (each question is an H3)
            {faq[n]['answer']}            (body paragraph, revealed on expand)
```

Pass a `preset` key from `config/faqs.php`. For event pages, create an event-specific preset rather than using `'general'`.

---

### 12–15. Footer Sections

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

    <x-sections.free-instant-quote
        heading="{{ $event['fiq']['heading'] }}"
        headingBold="{{ $event['fiq']['headingBold'] }}"
        headingTail="{{ $event['fiq']['headingTail'] }}"
        rightVariant="description"
        :descImageTop="true"
        descImage="{{ $event['fiq']['descImage'] }}"
        descImageAlt="{{ $event['fiq']['descImageAlt'] }}"
        descHeading="Why Choose Us?"
        descSubheading="{{ $event['fiq']['descSubheading'] }}"
        descBody="{{ $event['fiq']['descBody'] }}"
        :descBullets="$event['fiq']['descBullets']"
        descClosing="{{ $event['fiq']['descClosing'] }}"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultService="{{ $event['fiq']['defaultService'] }}"
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

### Section 4 — Free Instant Quote (FIQ) (`$event['fiq']`)

```
heading:        'Book Your'
headingBold:    'Cubs Game Day'
headingTail:    'Ride'
descImage:      '/images/special-events/cubs/stopngolimo-chicacgo-cubs-ariel.jpg'
descImageAlt:   'Aerial view of Wrigley Field and the Wrigleyville neighborhood, Chicago, Illinois'
descSubheading: 'Cubs Game Day Transportation'
descBody:       'Stop & Go Airport Shuttle Service, Inc. is a licensed, insured Chicagoland carrier with more than two decades of experience getting groups to Wrigley Field safely and on time:'
descBullets: [
    'Flat-rate pricing locked at booking, no surge fees',
    'Wrigleyville drop-off and post-game pickup staging included',
    'Multi-address pickup from any Chicagoland suburb',
    'All vehicles cleaned, inspected, and climate-set before pickup',
    'Licensed, background-checked chauffeurs available 24/7',
]
descClosing:    'Serving all of Chicagoland, our professional chauffeurs are ready to get your group to Clark and Addison and back, no matter where you are starting from.'
defaultService: 'Chicago Cubs Game Day Limo'
```

**SEO value:** The FIQ section anchors the quote conversion path and reinforces trust signals (licensed, insured, flat-rate, 24/7) immediately after the travel-in-style-cta builds desire.

---

### Section 5 — Event Features (`$event['event_features']`)

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

### Section 6 — Event Details (`$event['event_details']`)

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

### Section 7 — Process Steps (`$event['process_steps']`)

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

### Section 8 — Service Fulfillment (`$event['service_fulfillment']`)

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

## Chicago White Sox — Full Data File Specification

All copy drawn from `docs/seo/StopAndGo.white-sox-gameday-transportation.md` and keyword-aligned to `docs/seo/StopAndGo.Pillars.limo-party-bus-seo-keywords.md`. Same structure as the Cubs specification above. Transcribe into `app/Data/EventContent.php` key `'chicago-white-sox'` when building the page.

### Meta, Title, and OG

```
Page title:       Chicago White Sox Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.
Meta description: Luxury limo, party bus, and sprinter van service to Rate Field from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing. Book your White Sox game day ride today.
OG image:         /images/heroes/hero-white-sox-limo.jpg
OG image alt:     Luxury party bus for Chicago White Sox game day transportation, Stop & Go Airport Shuttle Service, Inc.
currentPage:      services
```

---

### Route and Blade

```
URL:        /services/events/chicago-white-sox-limo-service
Route name: events.chicago-white-sox
Blade:      resources/views/pages/services/events/chicago-white-sox-limo-service.blade.php
```

---

### Section 1 — Hero (`$event['hero']`)

```
heading:         'Chicago White Sox'
headingBold:     'Limo & Party Bus Service'
headingTwoLines: true
subtitle:        'Your Rate Field trip starts the moment you step on board'
description:     'Stop & Go Airport Shuttle Service, Inc. takes your group to Rate Field from anywhere in Chicagoland. No Dan Ryan traffic stress. No parking lot search. No waiting for a surge-priced car home after a South Side walk-off win. We pick up your group at your door in Orland Park, Tinley Park, New Lenox, Joliet, or Beverly, and we deliver you to the gates on time, every time. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for groups of 13 or more. Every chauffeur is background-checked, uniformed, and trained on Dan Ryan routing and Bridgeport-area staging. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.'
image:           '/images/heroes/hero-white-sox-limo.jpg'
imageAlt:        'Luxury party bus for Chicago White Sox game day, Stop & Go Airport Shuttle Service, Inc., serving all of Chicagoland'
imagePosition:   'center center'
buttonText:      'Book a Ride'
buttonHref:      'https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo'
```

**SEO keywords embedded:** "limo & party bus service," "Rate Field," "Chicagoland," "flat-rate pricing," "White Sox game day transportation," "chauffeur," "Dan Ryan."

---

### Section 2 — Info Strip (`$event['info_strip']`)

```
headingPrefix: 'Skip the Dan Ryan Traffic,'
headingBold:   'Ride to Rate Field'
heading:       ''
body:          'We handle I-294, the Dan Ryan merge, and the post-game lot gridlock so your group focuses on the game, the exploding scoreboard, and the South Side tradition — not the commute.'
```

**SEO keywords embedded:** "Dan Ryan," "Rate Field," "South Side," "game day," "post-game."

---

### Section 3 — Travel in Style CTA (`$event['travel_in_style']`)

```
heading:     'From Your Driveway'
headingBold: 'to Rate Field'
subtitle:    'Pickup from every corner of Chicagoland'
body:        'Our chauffeurs know the South Side. They know where to stage near 35th and Shields, how to route around the Dan Ryan after a sold-out night game, and how to build the right buffer for I-294 and the Bishop Ford so your group arrives relaxed. Whether you are coming from the southwest suburbs, Northwest Indiana, or downtown Chicago, we have run this route many times. You focus on your pre-game plans. We handle everything from your driveway to the Rate Field gates.'
note:        'Groups of 13 or more passengers. Call us for exact availability by group size.'
image:       '/images/sections/white-sox-rate-field.jpg'
imageAlt:    'Rate Field at 35th and Shields Avenue, Chicago, Illinois, home of the Chicago White Sox'
```

**SEO keywords embedded:** "Rate Field," "35th and Shields," "Dan Ryan," "I-294," "Bishop Ford," "Southwest suburbs," "Northwest Indiana," "chauffeured transportation."

**H2 (full-width row):** "From Your Driveway **to Rate Field**"
**H3 (right column):** "Pickup from every corner of Chicagoland"
**H4 (right column):** "Groups of 13 or more passengers"
**CTAs:** Call Us (tel:+17083154445) | Get a Free Quote (modal)

---

### Section 4 — Free Instant Quote (FIQ) (`$event['fiq']`)

> Populate when building the White Sox page. Use a Rate Field or South Side aerial/exterior photo from `public/images/special-events/white-sox/`. Follow the FIQ section spec in the heading hierarchy above. Keep exactly 5 bullets and 1–2 sentences for `descBody`. Set `defaultService` to `'Chicago White Sox Game Day Limo'`.

---

### Section 5 — Event Features (`$event['event_features']`)

```
heading: 'What Your White Sox Game Day Ride <strong>Includes</strong>'
intro:   'Every vehicle in our fleet comes fully equipped for a South Side game day. These are the features your group rides with.'

cards: [
    [
        'feature' => 'LED Lighting Throughout',
        'benefit' => 'South Side energy from the first pickup',
        'why'     => 'Dimmable LED lighting sets the mood before the first pitch and keeps the celebration going long after the final out.',
    ],
    [
        'feature' => 'Premium Sound System',
        'benefit' => 'Your playlist, your ride',
        'why'     => 'Bluetooth audio throughout the cabin means your group controls the music from Orland Park all the way to 35th Street.',
    ],
    [
        'feature' => 'Wrap-Around Leather Seating',
        'benefit' => 'Room for every member of your crew',
        'why'     => 'Comfortable lounge-style seating with room to stand, move, and celebrate. No one squeezed into a back seat on a long southwest-suburb drive.',
    ],
    [
        'feature' => 'Beverage Coolers',
        'benefit' => 'Drinks cold, hands free, all ride long',
        'why'     => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup.',
    ],
    [
        'feature' => 'Climate Control',
        'benefit' => 'Comfortable in April or August',
        'why'     => 'Chicago game day weather runs from 40 degrees to 95. Our climate control keeps your group comfortable through a hot July doubleheader or a chilly April opener.',
    ],
    [
        'feature' => 'Professional Chauffeur',
        'benefit' => 'Background-checked, uniformed, and on time',
        'why'     => 'Every chauffeur is vetted, trained on Dan Ryan Expressway patterns and Bridgeport-area routing, and focused on getting your group there and back safely.',
    ],
]
```

**SEO keywords embedded:** "game day party bus," "Rate Field," "Dan Ryan," "chauffeured transportation," "licensed chauffeurs," "LED lighting party bus," "sound system," "leather interior."

---

### Section 6 — Event Details (`$event['event_details']`)

```
heading: 'Why Chicagoland Groups Choose a Party Bus for White Sox Games'
intro:   'Getting to Rate Field on your own means fighting the Dan Ryan, paying for parking in a lot that clears slowly, and hoping everyone makes it to the same pickup point after extra innings. A party bus solves every one of those problems before you leave your driveway.'

leftHeading: 'Four Reasons It Works Better Than Driving'
checklist: [
    [
        'feature' => 'Nobody has to be the designated driver',
        'detail'  => 'Your whole group celebrates, drinks responsibly, and enjoys the game without anyone sitting out the fun for the drive home.',
    ],
    [
        'feature' => 'Skip the South Side parking search',
        'detail'  => 'Game-day parking near Rate Field fills fast and clears slowly. We drop your group at the gates and pick up in a pre-staged spot, away from the worst lot congestion.',
    ],
    [
        'feature' => 'The party starts before first pitch',
        'detail'  => 'Premium sound, LED lighting, and room to move means the South Side celebration starts the moment you leave your driveway.',
    ],
    [
        'feature' => 'Post-game pickup is already arranged',
        'detail'  => 'No waiting in a gridlocked lot while the Dan Ryan backs up. Your chauffeur stages nearby and is ready to move when the final out lands.',
    ],
]

rightHeading:    'Planning Your Rate Field Night'
rightParagraphs: [
    'The pregame atmosphere around Rate Field has its own character: more relaxed and neighborhood-driven than the North Side, built around tailgating, Bridgeport restaurant stops, and the kind of South Side pride that goes back generations. Our chauffeurs know the area well — where to stage, which routes clear first after a night game, and how to time the departure so your group is moving while the Dan Ryan lots are still gridlocked.',
    'A White Sox game day with us typically looks like this: pickup at your door, an optional pre-game Bridgeport dinner stop, the game itself, and wherever your group wants to go after the final out. A bar nearby, a downtown nightcap, the Museum Campus for visiting guests, or straight home. We build the schedule around your group.',
    'We serve clients from every corner of Chicagoland for White Sox game day transportation: Orland Park, Tinley Park, Oak Lawn, New Lenox, Joliet, Beverly, Mount Greenwood, Hyde Park, downtown Chicago, and the western and northwest suburbs. Multi-address pickups and multi-stop itineraries are standard for us.',
]

ctaHeading: 'Ready to book your White Sox game day ride?'
ctaBody:    'Flat-rate pricing. All of Chicagoland. Get a free quote in minutes or call us anytime, 24 hours a day.'
```

**SEO keywords embedded:** "White Sox game day transportation," "Rate Field," "Dan Ryan," "Bridgeport," "party bus rental," "chauffeured transportation," "Museum Campus," all major suburb names for the South Side.

---

### Section 7 — Process Steps (`$event['process_steps']`)

```
heading:     'Six Things That Happen'
headingBold: 'Before You Reach Rate Field'
intro:       'A smooth South Side game day starts well before first pitch. Here is everything we handle from the moment you book to the moment we drop you at the gates.'

steps: [
    [
        'num'    => '01',
        'title'  => 'You book and your rate locks',
        'detail' => 'White Sox game day pricing, confirmed',
        'body'   => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked for the game and any stops on your itinerary. No surge pricing. No adjustments for Dan Ryan congestion or game-time changes.',
    ],
    [
        'num'    => '02',
        'title'  => 'We confirm your game-day details',
        'detail' => 'First pitch time, pickup route, group size',
        'body'   => 'The day before your game, our team reviews your pickup address, timing, group size, and any stops on your itinerary. We pull up the first pitch time and build your departure window around it, with buffer time for I-294 and the Dan Ryan.',
    ],
    [
        'num'    => '03',
        'title'  => 'Your vehicle is prepared and the route is loaded',
        'detail' => 'Bridgeport drop-off and post-game staging pre-planned',
        'body'   => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the Dan Ryan routing and the specific Rate Field drop-off and post-game staging point for your group.',
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
        'detail' => 'Bridgeport dinner, the game, post-game — your call',
        'body'   => 'Your chauffeur handles the route, the traffic, and any timing adjustments. A pre-game Bridgeport stop, straight to the gates, or a stop on the way home — we adapt to what your group wants.',
    ],
    [
        'num'    => '06',
        'title'  => 'Post-game pickup, everyone home safe',
        'detail' => 'Pre-staged away from the worst Dan Ryan lot congestion',
        'body'   => 'After the final out, your chauffeur is at the pre-arranged meeting point, away from the gridlocked parking lots and the Dan Ryan backup. Your group is rolling while others are still sitting in traffic.',
    ],
]
```

**SEO keywords embedded:** "White Sox game day," "flat-rate pricing," "Rate Field," "Dan Ryan," "Bridgeport," "I-294," "chauffeured transportation," "no hidden fees."

---

### Section 8 — Service Fulfillment (`$event['service_fulfillment']`)

```
heading:     'What We Cover on'
headingBold: 'White Sox Game Day'
intro:       'These are the six things our clients care most about when booking a ride to Rate Field. Here is how we handle each one.'

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
        'detail'   => 'We pick up from Orland Park, Tinley Park, New Lenox, Joliet, Beverly, Mount Greenwood, Oak Lawn, northwest suburbs, downtown Chicago, and Northwest Indiana. Multi-address pickups are handled regularly.',
        'urgency'  => 'medium',
        'note'     => null,
    ],
    [
        'occasion' => 'Rate Field Drop-Off',
        'timing'   => 'Right at the gates',
        'detail'   => 'Our chauffeurs know the game-day staging near 35th and Shields. We avoid the worst lot and Dan Ryan congestion and communicate the exact meeting point to your group leader before departure.',
        'urgency'  => 'high',
        'note'     => 'Drop-off and pickup points are confirmed with your group leader the day before the game.',
    ],
    [
        'occasion' => 'Pre-Game Stops',
        'timing'   => 'Built into your itinerary',
        'detail'   => 'A Bridgeport dinner stop before the game is one of our most popular additions to a White Sox game day booking. We build pre-game stop timing into the schedule so you make it to your seats before first pitch.',
        'urgency'  => 'medium',
        'note'     => null,
    ],
    [
        'occasion' => 'Post-Game Pickup',
        'timing'   => 'Staged and ready at final out',
        'detail'   => 'Your chauffeur does not leave after drop-off. They stage near the park and monitor the game. When the final out is recorded, they are ready to move before the Dan Ryan lots back up onto the streets.',
        'urgency'  => 'high',
        'note'     => 'Extra-inning games are not a problem. Your rate does not change based on game length.',
    ],
    [
        'occasion' => 'Flat-Rate Pricing',
        'timing'   => 'Locked at booking',
        'detail'   => 'Your rate is confirmed when you book. No meter running. No surge pricing for Dan Ryan traffic or a packed game night. No surprise fees at the end of the night. Gratuity is not included but is always appreciated.',
        'urgency'  => 'low',
        'note'     => null,
    ],
]

legend: 'Champagne = book early, high demand. Blue = moderate lead time. Slate = flexible.'
```

---

### FAQ Preset for `config/faqs.php` — key `'chicago-white-sox'`

Source: `docs/seo/StopAndGo.white-sox-gameday-transportation.md` FAQ section + `docs/seo/StopAndGo.Pillars.limo-party-bus-seo-keywords.md` PAA cluster.

```php
'chicago-white-sox' => [
    [
        'question' => 'How far in advance should I book a limo or party bus for a White Sox game?',
        'answer'   => 'We recommend booking 2 to 3 weeks ahead for weekend games and the Crosstown Classic series against the Cubs, though we can often accommodate weekday game requests on shorter notice. The earlier you book, the more vehicle options your group has.',
    ],
    [
        'question' => 'Where does the limo or party bus drop us off near Rate Field?',
        'answer'   => 'We coordinate a designated drop-off and pickup point near 35th and Shields that avoids the worst of the Dan Ryan and lot congestion. The exact meeting point is communicated directly to your group leader before departure.',
    ],
    [
        'question' => 'Can we make a dinner stop in Bridgeport before or after the game?',
        'answer'   => 'Yes. A Bridgeport dinner stop is one of the most popular additions to a White Sox game day booking. We build it into your schedule so you make it to your seats on time.',
    ],
    [
        'question' => 'Is alcohol allowed on the party bus to a White Sox game?',
        'answer'   => 'Yes, for passengers of legal drinking age in accordance with Illinois law. Our chauffeurs are trained on responsible service protocols for group celebrations. BYOB is common on our White Sox game day bookings.',
    ],
    [
        'question' => 'What is the difference between booking a limo and a party bus for a Sox outing?',
        'answer'   => 'A stretch limo suits smaller, more intimate groups who want an elegant ride. A party bus is built for larger groups of 14 or more who want a social, celebratory atmosphere with music, LED lighting, and room to move around.',
    ],
    [
        'question' => 'What happens if the game goes to extra innings?',
        'answer'   => 'Your flat rate does not change based on game length. Your chauffeur stages near Rate Field and monitors the game. When the final out is recorded, they are ready to move. Extra-inning games are not a problem.',
    ],
    [
        'question' => 'Do you pick up from the southwest suburbs and Northwest Indiana for White Sox games?',
        'answer'   => 'Yes. Southwest suburban clients are some of our most consistent White Sox bookings. We serve Orland Park, Tinley Park, Oak Lawn, New Lenox, Joliet, Palos Hills, and Northwest Indiana, as well as every city neighborhood and north and west suburb in Chicagoland.',
    ],
    [
        'question' => 'How many people fit in your party buses?',
        'answer'   => 'Our vehicles start at 13 passengers. Party buses and limo coaches handle groups of 14 to 40. Call us with your exact headcount and we will match you to the right vehicle.',
    ],
],
```

---

### Structured Data Values for White Sox Page

```
Service:
  name:        "Chicago White Sox Limo & Party Bus Service"
  description: "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service to Rate Field for White Sox games from anywhere in Chicagoland. Groups of 13 or more. Flat-rate pricing."
  areaServed:  Chicago IL, Orland Park IL, Tinley Park IL, New Lenox IL, Joliet IL, Oak Lawn IL, Beverly IL, Mount Greenwood IL

WebPage:
  name:        "Chicago White Sox Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
  url:         "https://www.newlenoxlimoservice.com/services/events/chicago-white-sox-limo-service"
  description: (same as meta description)

BreadcrumbList:
  1 — Home             https://www.newlenoxlimoservice.com
  2 — Services         https://www.newlenoxlimoservice.com/services
  3 — Special Events   https://www.newlenoxlimoservice.com/services/events
  4 — Chicago White Sox Limo & Party Bus Service  https://www.newlenoxlimoservice.com/services/events/chicago-white-sox-limo-service
```

---

### SEO Keyword Targets — White Sox Page

Primary target phrases (H1, H2, meta title, meta description):
- "Chicago White Sox limo service"
- "party bus to Rate Field"
- "White Sox game day transportation"
- "Rate Field limo service"

Secondary targets (H3, body copy, FAQ):
- "game day party bus Chicago South Side"
- "party bus rental Bridgeport"
- "limo service to Rate Field"
- "White Sox game transportation Chicagoland"
- "Dan Ryan Expressway game day ride"

LSI/semantic terms to weave into body copy naturally:
- chauffeur, flat-rate pricing, 35th and Shields, Dan Ryan Expressway, Bridgeport, Armour Square, South Side, exploding scoreboard, no hidden fees, licensed and insured, door-to-door service, group transportation, 24/7 availability

---

## Chicago Crosstown Classic — Full Data File Specification

The Crosstown Classic page covers all transportation for Cubs vs. White Sox matchups. The series alternates between Wrigley Field (when the Cubs are home) and Rate Field (when the White Sox are home). The page must acknowledge both venues clearly. All copy is derived from both game-day SEO docs and the pillars keyword compendium.

Transcribe into `app/Data/EventContent.php` key `'chicago-crosstown-classic'` when building the page.

### Meta, Title, and OG

```
Page title:       Chicago Crosstown Classic Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc.
Meta description: Luxury limo, party bus, and sprinter van service for Cubs vs. White Sox games at Wrigley Field and Rate Field. All of Chicagoland. Groups of 13 or more. Book your Crosstown Classic ride today.
OG image:         /images/heroes/hero-crosstown-classic-limo.jpg
OG image alt:     Luxury party bus for Chicago Crosstown Classic, Cubs vs. White Sox, Stop & Go Airport Shuttle Service, Inc.
currentPage:      services
```

---

### Route and Blade

```
URL:        /services/events/chicago-crosstown-classic-limo-service
Route name: events.chicago-crosstown-classic
Blade:      resources/views/pages/services/events/chicago-crosstown-classic-limo-service.blade.php
```

---

### Section 1 — Hero (`$event['hero']`)

```
heading:         'Cubs vs. White Sox'
headingBold:     'Crosstown Classic Transportation'
headingTwoLines: true
subtitle:        'North Side or South Side, we get your whole group there together'
description:     'Stop & Go Airport Shuttle Service, Inc. handles Crosstown Classic transportation to both Wrigley Field and Rate Field from anywhere in Chicagoland. Whether your group is heading to the North Side for a Cubs home game or down to the South Side for a White Sox home game, we pick up at your door and deliver you to the gates, stress-free. No parking. No traffic battles on the Kennedy or the Dan Ryan. No surge-priced car home. Our fleet includes stretch limousines, luxury party buses, and executive sprinter vans for groups of 13 or more. Flat-rate pricing, no hidden fees. Call us or request a free quote to get started.'
image:           '/images/heroes/hero-crosstown-classic-limo.jpg'
imageAlt:        'Luxury party bus for the Chicago Crosstown Classic, Cubs vs. White Sox, Stop & Go Airport Shuttle Service, Inc.'
imagePosition:   'center center'
buttonText:      'Book a Ride'
buttonHref:      'https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo'
```

**SEO keywords embedded:** "Crosstown Classic transportation," "Wrigley Field," "Rate Field," "Chicagoland," "flat-rate pricing," "Cubs vs. White Sox," "chauffeur."

---

### Section 2 — Info Strip (`$event['info_strip']`)

```
headingPrefix: 'One Rivalry,'
headingBold:   'One Chauffeured Ride'
heading:       ''
body:          'We serve both sides of the city. North Side pickup to Wrigley Field when the Cubs are home. South Side routing to Rate Field when the Sox are home. Your group rides together, no matter who wins.'
```

**SEO keywords embedded:** "Crosstown Classic," "Wrigley Field," "Rate Field," "chauffeured," "North Side," "South Side."

---

### Section 3 — Travel in Style CTA (`$event['travel_in_style']`)

```
heading:     'From Your Driveway'
headingBold: 'to the Crosstown Classic'
subtitle:    'Both venues. All of Chicagoland. One company.'
body:        'The Crosstown Classic splits between two of Chicago\'s most iconic ballparks, and Stop & Go Airport Shuttle Service, Inc. knows both routes. When the Cubs are home, our chauffeurs handle the Kennedy Expressway and Wrigleyville staging. When the White Sox are home, we handle the Dan Ryan and Bridgeport routing. You tell us the game and the date. We know the rest.'
note:        'Groups of 13 or more passengers. Call us for exact availability by group size.'
image:       '/images/sections/chicago-baseball-crosstown.jpg'
imageAlt:    'Chicago skyline with Wrigley Field and Rate Field representing the Crosstown Classic series, Cubs vs. White Sox'
```

**H2 (full-width row):** "From Your Driveway **to the Crosstown Classic**"
**H3 (right column):** "Both venues. All of Chicagoland. One company."
**H4 (right column):** "Groups of 13 or more passengers"
**CTAs:** Call Us (tel:+17083154445) | Get a Free Quote (modal)

---

### Section 4 — Free Instant Quote (FIQ) (`$event['fiq']`)

> Populate when building the Crosstown Classic page. Use a Wrigley Field or Rate Field photo (or a composite image representing both venues) from `public/images/special-events/crosstown/`. Follow the FIQ section spec in the heading hierarchy above. Keep exactly 5 bullets and 1–2 sentences for `descBody`. Set `defaultService` to `'Chicago Crosstown Classic Limo'`.

---

### Section 5 — Event Features (`$event['event_features']`)

```
heading: 'What Your Crosstown Classic Ride <strong>Includes</strong>'
intro:   'Every vehicle in our fleet comes fully equipped for a day of Chicago baseball, whichever side of the rivalry your group is on.'

cards: [
    [
        'feature' => 'LED Lighting Throughout',
        'benefit' => 'Pick your team colors for the ride',
        'why'     => 'Dimmable LED lighting lets your group set the mood before the first pitch. Blue for the Cubs, black and white for the Sox, or something in between for a mixed-allegiance group.',
    ],
    [
        'feature' => 'Premium Sound System',
        'benefit' => 'Your playlist, your ride',
        'why'     => 'Bluetooth audio throughout the cabin. Your group controls the music from the suburbs all the way to Clark and Addison or 35th and Shields.',
    ],
    [
        'feature' => 'Wrap-Around Leather Seating',
        'benefit' => 'Room for Cubs fans and Sox fans alike',
        'why'     => 'Comfortable lounge-style seating with room to stand, move, and celebrate — or debate — on the way to the park.',
    ],
    [
        'feature' => 'Beverage Coolers',
        'benefit' => 'Drinks cold for the whole ride',
        'why'     => 'Keep the celebration going between stops. Coolers are stocked and ready before your pickup, regardless of which park you are headed to.',
    ],
    [
        'feature' => 'Climate Control',
        'benefit' => 'Comfortable in June heat or April chill',
        'why'     => 'The Crosstown Classic runs in June and July. Our climate control keeps your group comfortable through Chicago summer heat and any late-season cool-down.',
    ],
    [
        'feature' => 'Professional Chauffeur',
        'benefit' => 'Trained on both Wrigleyville and Bridgeport routing',
        'why'     => 'Every chauffeur is background-checked, uniformed, and familiar with the staging and post-game logistics specific to both Wrigley Field and Rate Field.',
    ],
]
```

**SEO keywords embedded:** "Crosstown Classic," "Wrigley Field," "Rate Field," "Clark and Addison," "35th and Shields," "chauffeured transportation," "licensed chauffeurs," "LED lighting party bus."

---

### Section 6 — Event Details (`$event['event_details']`)

```
heading: 'Why Chicagoland Groups Book a Party Bus for the Crosstown Classic'
intro:   'The Crosstown Classic draws fans from every corner of Chicagoland, often mixing Cubs and White Sox fans in the same group. A party bus handles all of it — one vehicle, one pickup, one flat rate, two sides of the city covered.'

leftHeading: 'Four Reasons It Works Better Than Driving'
checklist: [
    [
        'feature' => 'One vehicle for the whole group, regardless of allegiance',
        'detail'  => 'Cubs fans and White Sox fans in the same group do not need separate cars. We pick everyone up together and deliver them to the same gate.',
    ],
    [
        'feature' => 'No parking at either ballpark',
        'detail'  => 'Game-day parking at Wrigley Field and Rate Field fills fast and costs significantly. We drop your group at the gates and stage for post-game pickup so nobody pays for parking.',
    ],
    [
        'feature' => 'Rivalry banter starts before first pitch',
        'detail'  => 'Premium sound, LED lighting, and a party bus built for celebration means the Crosstown rivalry starts in the driveway, not the bleachers.',
    ],
    [
        'feature' => 'Post-game pickup is already arranged',
        'detail'  => 'Win or lose, your chauffeur is staged and ready after the final out — no surge pricing, no crowded ride-share queue, no scramble for parking.',
    ],
]

rightHeading:    'Planning Your Crosstown Classic Day'
rightParagraphs: [
    'The Crosstown Classic alternates venues each series. When the Cubs host, games are at Wrigley Field in Lakeview, and our chauffeurs handle Clark and Addison drop-off, Kennedy Expressway routing, and Wrigleyville post-game staging. When the White Sox host, games are at Rate Field in Armour Square, and we handle 35th and Shields drop-off, Dan Ryan routing, and Bridgeport pre-game and post-game staging.',
    'A Crosstown Classic day with us typically looks like this: pickup at your door, an optional pre-game stop (a Wrigleyville bar if you are headed north, a Bridgeport restaurant if you are headed south), the game, and wherever your group wants to finish the night. Downtown Chicago, River North, a South Side neighborhood spot, or straight home. We build the schedule around your plans.',
    'We serve clients from every part of Chicagoland for Crosstown Classic transportation: Naperville, Aurora, Schaumburg, Arlington Heights, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, downtown Chicago, and every community in between. This series draws fans from all over the region, and our fleet and routing reflect that.',
]

ctaHeading: 'Ready to book your Crosstown Classic ride?'
ctaBody:    'Both venues covered. All of Chicagoland. Flat-rate pricing. Get a free quote in minutes or call us anytime, 24 hours a day.'
```

**SEO keywords embedded:** "Crosstown Classic," "Wrigley Field," "Rate Field," "Lakeview," "Armour Square," "Kennedy Expressway," "Dan Ryan," "party bus rental," "chauffeured transportation," all major suburb names.

---

### Section 7 — Process Steps (`$event['process_steps']`)

```
heading:     'Six Things That Happen'
headingBold: 'Before You Reach the Ballpark'
intro:       'Tell us the game, the date, and the venue. We handle everything from there.'

steps: [
    [
        'num'    => '01',
        'title'  => 'You book and your rate locks',
        'detail' => 'Crosstown Classic pricing, confirmed for your venue',
        'body'   => 'Online or by phone in about two minutes. The moment you confirm, your flat rate is locked — whether the game is at Wrigley Field or Rate Field. No surge pricing. No adjustments later.',
    ],
    [
        'num'    => '02',
        'title'  => 'We confirm your game-day details',
        'detail' => 'Venue, first pitch time, pickup route, group size',
        'body'   => 'The day before, our team verifies the venue, first pitch time, group size, and any stops on your itinerary. We build the departure window around the venue — Kennedy routing for Wrigley, Dan Ryan routing for Rate Field.',
    ],
    [
        'num'    => '03',
        'title'  => 'Your vehicle is prepared and the route is loaded',
        'detail' => 'Drop-off and post-game staging planned for the correct venue',
        'body'   => 'The assigned vehicle is detailed, inspected, and climate-set before your pickup. Your chauffeur pre-loads the drop-off point and post-game staging location specific to whichever park your group is attending.',
    ],
    [
        'num'    => '04',
        'title'  => 'Your chauffeur arrives early',
        'detail' => '10 to 15 minutes ahead of your departure time',
        'body'   => 'Standard is 10 to 15 minutes before your scheduled departure. Your chauffeur is ready when your group is still getting ready, not the other way around.',
    ],
    [
        'num'    => '05',
        'title'  => 'The ride runs on your schedule',
        'detail' => 'Pre-game stop, the game, post-game — your call',
        'body'   => 'Your chauffeur handles the route, the traffic, and any timing adjustments. Pre-game bar stop, straight to the gates, or a stop on the way home — we adapt to what your group decides.',
    ],
    [
        'num'    => '06',
        'title'  => 'Post-game pickup, everyone home safe',
        'detail' => 'Pre-staged, away from post-game congestion at either park',
        'body'   => 'After the final out, your chauffeur is at the pre-arranged meeting point — away from the rideshare queue at Wrigley or the Dan Ryan lot backup at Rate Field. Your group rolls while others wait.',
    ],
]
```

---

### Section 8 — Service Fulfillment (`$event['service_fulfillment']`)

```
heading:     'What We Cover for the'
headingBold: 'Crosstown Classic'
intro:       'Two parks. Two routing plans. One company that knows both. Here is how we handle each part of your Crosstown Classic transportation.'

items: [
    [
        'occasion' => 'Group Size Options',
        'timing'   => '13 or more passengers',
        'detail'   => 'Stretch limousines and executive SUVs for smaller outings. Luxury sprinter vans for 8 to 14. Party buses and limo coaches for 14 to 40. Call us if your group is larger.',
        'urgency'  => 'high',
        'note'     => 'Tell us your headcount when you request a quote. We will match you to the right vehicle.',
    ],
    [
        'occasion' => 'Wrigley Field Routing',
        'timing'   => 'Kennedy Expressway, Clark and Addison drop-off',
        'detail'   => 'When the Cubs are home, we handle the Kennedy Expressway and Wrigleyville game-day staging. We stage away from rideshare congestion on Addison Street and communicate the exact pickup point to your group leader.',
        'urgency'  => 'high',
        'note'     => 'Wrigley Field game routing confirmed with your group leader the day before.',
    ],
    [
        'occasion' => 'Rate Field Routing',
        'timing'   => 'Dan Ryan Expressway, 35th and Shields drop-off',
        'detail'   => 'When the White Sox are home, we handle I-294, the Dan Ryan merge, and Bridgeport-area staging near Rate Field. Post-game routing avoids the worst lot gridlock on the Dan Ryan.',
        'urgency'  => 'high',
        'note'     => 'Rate Field game routing confirmed with your group leader the day before.',
    ],
    [
        'occasion' => 'Pre-Game Stops',
        'timing'   => 'Built into your itinerary',
        'detail'   => 'A Wrigleyville bar on Clark Street for Cubs home games, or a Bridgeport restaurant for White Sox home games. We build pre-game stop timing into the schedule so your group makes it to seats before first pitch.',
        'urgency'  => 'medium',
        'note'     => null,
    ],
    [
        'occasion' => 'Post-Game Pickup',
        'timing'   => 'Staged and ready at final out',
        'detail'   => 'Your chauffeur stages near the park and monitors the game at either venue. When the Crosstown Classic ends, they are ready to move before the post-game traffic builds — whether that is Addison Street or the Dan Ryan.',
        'urgency'  => 'high',
        'note'     => 'Extra-inning games are not a problem. Your rate does not change based on game length.',
    ],
    [
        'occasion' => 'Flat-Rate Pricing',
        'timing'   => 'Locked at booking',
        'detail'   => 'Your rate is confirmed when you book, for whichever venue. No meter running. No surge pricing. No surprise fees. Gratuity is not included but is always appreciated.',
        'urgency'  => 'low',
        'note'     => null,
    ],
]

legend: 'Champagne = book early, high demand. Blue = moderate lead time. Slate = flexible.'
```

---

### FAQ Preset for `config/faqs.php` — key `'chicago-crosstown-classic'`

```php
'chicago-crosstown-classic' => [
    [
        'question' => 'How far in advance should I book for the Crosstown Classic?',
        'answer'   => 'The Crosstown Classic is one of the most anticipated series in Chicago baseball. We recommend booking 3 to 4 weeks ahead. Weekend Crosstown games fill our calendar quickly because both Cubs and Sox fans book at the same time.',
    ],
    [
        'question' => 'Does it matter which team is the home team? Is the pickup different for Wrigley Field versus Rate Field?',
        'answer'   => 'Yes. When the Cubs are home, we route via the Kennedy Expressway and stage near Clark and Addison at Wrigley Field. When the White Sox are home, we route via the Dan Ryan and stage near 35th and Shields at Rate Field. Tell us the date and game location when you book and we handle the rest.',
    ],
    [
        'question' => 'Our group has both Cubs fans and White Sox fans. Can you pick everyone up in one vehicle?',
        'answer'   => 'That is one of our most common Crosstown Classic bookings. We pick up your whole group, Cubs fans and Sox fans alike, and deliver everyone to the same gate. The rivalry stays on the field — the ride is comfortable for everyone.',
    ],
    [
        'question' => 'Can we make a pre-game stop on the way to the ballpark?',
        'answer'   => 'Yes. A pre-game bar stop in Wrigleyville for Cubs home games, or a Bridgeport dinner stop for White Sox home games, is built into your itinerary. Tell us where you want to go and we schedule around it so you make first pitch.',
    ],
    [
        'question' => 'Is alcohol allowed on the party bus for the Crosstown Classic?',
        'answer'   => 'Yes, for passengers of legal drinking age in accordance with Illinois law. Our chauffeurs are trained on responsible service protocols for group celebrations.',
    ],
    [
        'question' => 'What happens if the Crosstown Classic goes to extra innings?',
        'answer'   => 'Your flat rate does not change based on game length. Your chauffeur stages near the park and monitors the game. When the final out is recorded at either venue, they are ready to move.',
    ],
    [
        'question' => 'Do you pick up from the suburbs for Crosstown Classic games?',
        'answer'   => 'Yes. We serve all of Chicagoland for Crosstown Classic transportation — Naperville, Aurora, Schaumburg, Evanston, Orland Park, Tinley Park, New Lenox, Joliet, and every community in between. Multi-address pickups are common for Crosstown groups coming from different suburbs.',
    ],
    [
        'question' => 'What is the difference between a limo and a party bus for this kind of group outing?',
        'answer'   => 'A stretch limo suits smaller groups of up to 8 who want an elegant ride. A party bus is built for larger groups of 14 or more who want a social, celebratory atmosphere with music, LED lighting, and room to celebrate — or debate — on the way to the park.',
    ],
],
```

---

### Structured Data Values for Crosstown Classic Page

```
Service:
  name:        "Chicago Crosstown Classic Limo & Party Bus Service"
  description: "Stop & Go Airport Shuttle Service, Inc. provides luxury limo, party bus, and sprinter van service for Cubs vs. White Sox Crosstown Classic games at Wrigley Field and Rate Field, serving all of Chicagoland. Groups of 13 or more. Flat-rate pricing."
  areaServed:  Chicago IL, Naperville IL, Aurora IL, Schaumburg IL, Evanston IL, Orland Park IL, Tinley Park IL, New Lenox IL, Joliet IL

WebPage:
  name:        "Chicago Crosstown Classic Limo & Party Bus Service | Stop & Go Airport Shuttle Service, Inc."
  url:         "https://www.newlenoxlimoservice.com/services/events/chicago-crosstown-classic-limo-service"
  description: (same as meta description)

BreadcrumbList:
  1 — Home             https://www.newlenoxlimoservice.com
  2 — Services         https://www.newlenoxlimoservice.com/services
  3 — Special Events   https://www.newlenoxlimoservice.com/services/events
  4 — Chicago Crosstown Classic Limo & Party Bus Service  https://www.newlenoxlimoservice.com/services/events/chicago-crosstown-classic-limo-service
```

---

### SEO Keyword Targets — Crosstown Classic Page

Primary target phrases (H1, H2, meta title, meta description):
- "Crosstown Classic limo service"
- "Cubs vs. White Sox transportation"
- "Crosstown Classic party bus"
- "Chicago baseball game day transportation"

Secondary targets (H3, body copy, FAQ):
- "party bus to Wrigley Field and Rate Field"
- "limo service for Cubs White Sox game"
- "game day party bus Chicagoland"
- "Crosstown Classic chauffeured ride"

LSI/semantic terms to weave into body copy naturally:
- chauffeur, flat-rate pricing, Wrigley Field, Rate Field, Clark and Addison, 35th and Shields, Kennedy Expressway, Dan Ryan Expressway, Wrigleyville, Bridgeport, North Side, South Side, no hidden fees, licensed and insured, group transportation, door-to-door service

---

## Checklist for Each New Event Page
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

---

## Concert Venue Service Pages

### Overview

Concert venue full service pages live at `/services/events/concerts/{slug}`. They follow the same 15-section pattern as the baseball pages (Cubs, White Sox, Crosstown Classic) at `/services/events/{slug}`, with no structural changes to any component.

**Directory:** `resources/views/pages/services/events/concerts/`
**Route group:** nested `prefix('concerts')->name('concerts.')` inside the existing `prefix('services/events')` group in `routes/main-site.php`
**Images:** `public/images/special-events/concerts/`
**FAQ presets:** `config/faqs.php` (keys listed per page below)

### Page Template Pattern

All eight concert pages follow the Cubs page (`chicago-cubs-limo-service.blade.php`) exactly. No `app/Data/EventContent.php` data class is used; all content lives in inline `@php` blocks at the top of each blade file. Section order:

1. `x-sections.category-hero`
2. `x-sections.info-strip`
3. `x-sections.travel-in-style-cta`
4. `x-sections.free-instant-quote`
5. `x-sections.event-features`
6. `x-sections.event-details`
7. `x-sections.limo-process-steps`
8. `x-sections.limo-booking-timeline`
9. `x-sections.review-slider`
10. `x-sections.faq`
11. `x-sections.share-your-experience`
12. `x-sections.standard-features`
13. `x-sections.map-contact-section`
14. `x-ui.banner-thin-cloud`
15. `x-sections.base-footer`

Every `<section>` renders with `id="component-name"` and `scroll-margin-top: 80px` via the component defaults.

### PHP Variables Per Page

Each blade file defines these variables in the `@php` block:

| Variable | Used by | Notes |
|---|---|---|
| `$heroDescription` | `category-hero :description` | ~80–100 words, venue-specific |
| `$eventFeaturesLeftParagraphs` | `event-features :leftParagraphs` | 3 paragraphs: venue history, neighborhood, logistics |
| `$eventFeaturesRightItems` | `event-features :rightItems` | 6 `[service, description]` items; first item is venue-specific, remainder are generic Stop & Go cross-sell |
| `$standardFeatureCards` | `standard-features :cards` | 6 `[feature, benefit, why]` cards; first card is venue-specific (e.g. cargo space for Ravinia picnic gear) |
| `$detailsChecklist` | `event-details :checklist` | 4 `[feature, detail]` items |
| `$detailsParagraphs` | `event-details :rightParagraphs` | 3 paragraphs: logistics rationale, typical evening, service area |
| `$processSteps` | `limo-process-steps :steps` | 6 `[num, title, detail, body]` items |
| `$fulfillmentItems` | `limo-booking-timeline :items` | 6 `[occasion, timing, urgency, detail, note]` items |

### Venue Pages

#### 1. Ravinia Festival
- **URL:** `/services/events/concerts/ravinia-festival-limo-service`
- **Route name:** `events.concerts.ravinia`
- **Blade:** `resources/views/pages/services/events/concerts/ravinia-festival-limo-service.blade.php`
- **FAQ preset:** `ravinia-concert`
- **Hero image:** `/images/special-events/concerts/ravinia-concert-lawn.jpg`
- **CTA section image:** `/images/special-events/concerts/ravinia-festival-cta.jpg`
- **FIQ image:** `/images/special-events/concerts/ravinia-festival-fiq.jpg`
- **Key logistics angle:** Edens Expressway routing, Highland Park staging, picnic gear cargo, North Shore dining pre-show
- **First `rightItems` item:** CSO Season Subscriber Packages
- **First `standardFeatureCards` item:** Cargo Space for Picnic Gear

#### 2. Credit Union 1 Amphitheatre (Tinley Park)
- **URL:** `/services/events/concerts/tinley-park-amphitheatre-limo-service`
- **Route name:** `events.concerts.tinley-park`
- **Blade:** `resources/views/pages/services/events/concerts/tinley-park-amphitheatre-limo-service.blade.php`
- **FAQ preset:** `tinley-park-concert`
- **Hero image:** `/images/special-events/concerts/tinley-park-concert-crowd.jpg`
- **CTA section image:** `/images/special-events/concerts/tinley-park-concert-crowd.jpg` (reuse)
- **Key logistics angle:** I-57 post-show gridlock, southwest suburb pickup, lot congestion

#### 3. United Center
- **URL:** `/services/events/concerts/united-center-concert-limo-service`
- **Route name:** `events.concerts.united-center`
- **Blade:** `resources/views/pages/services/events/concerts/united-center-concert-limo-service.blade.php`
- **FAQ preset:** `united-center-concert`
- **Hero image:** `/images/special-events/concerts/united-center-concert-crowd.jpg`
- **Key logistics angle:** Eisenhower/I-290 routing, Near West Side staging, West Loop dinner stop integration
- **First `rightItems` item:** Bulls and Blackhawks Season Packages

#### 4. Soldier Field
- **URL:** `/services/events/concerts/soldier-field-concert-limo-service`
- **Route name:** `events.concerts.soldier-field`
- **Blade:** `resources/views/pages/services/events/concerts/soldier-field-concert-limo-service.blade.php`
- **FAQ preset:** `soldier-field-concert`
- **Hero image:** `/images/special-events/concerts/soldier-field-concert.jpg`
- **CTA section image:** `/images/special-events/concerts/soldier-field-cta.jpg`
- **Key logistics angle:** Lake Shore Drive timing, Museum Campus staging, 60,000-person exit management
- **First `rightItems` item:** Stadium Concert Tour Packages (Bears season also)

#### 5. House of Blues Chicago
- **URL:** `/services/events/concerts/house-of-blues-chicago-limo-service`
- **Route name:** `events.concerts.house-of-blues`
- **Blade:** `resources/views/pages/services/events/concerts/house-of-blues-chicago-limo-service.blade.php`
- **FAQ preset:** `house-of-blues-concert`
- **Hero image:** `/images/special-events/concerts/house-of-blues-concert-crowd.jpg`
- **CTA section image:** `/images/special-events/concerts/house-of-blues-cta.jpg`
- **Key logistics angle:** River North/Marina City drop-off, downtown parking cost, Gospel Brunch seating-window coordination
- **First `rightItems` item:** Sunday Gospel Brunch Group Bookings

#### 6. Aragon Ballroom
- **URL:** `/services/events/concerts/aragon-ballroom-chicago-limo-service`
- **Route name:** `events.concerts.aragon-ballroom`
- **Blade:** `resources/views/pages/services/events/concerts/aragon-ballroom-chicago-limo-service.blade.php`
- **FAQ preset:** `aragon-ballroom-concert`
- **Hero image:** `/images/special-events/concerts/aragon-ballroom-concert-crowd.jpg`
- **CTA section image:** `/images/special-events/concerts/aragon-ballroom-cta.jpg`
- **Key logistics angle:** Uptown residential staging, 5,000-person Lawrence Ave post-show crowd, Green Mill pre-show stop
- **First `rightItems` item:** Uptown Historic Neighborhood Nights

#### 7. Wrigley Field Concerts
- **URL:** `/services/events/concerts/wrigley-field-concert-limo-service`
- **Route name:** `events.concerts.wrigley-concert`
- **Blade:** `resources/views/pages/services/events/concerts/wrigley-field-concert-limo-service.blade.php`
- **FAQ preset:** `wrigley-field-concert`
- **Hero image:** `/images/special-events/concerts/wrigley-field-concert.jpg`
- **CTA section image:** `/images/special-events/concerts/wrigley-concert-cta.jpg`
- **Key logistics angle:** Concert-specific staging differs from game-day; limited annual calendar; Gallagher Way pre-show; no dedicated parking
- **First `rightItems` item:** Wrigley Field Concert Season Packages (includes Cubs game day cross-sell)
- **Note:** This page is distinct from `chicago-cubs-limo-service.blade.php` — it targets concert-night search intent, not game day

#### 8. Chicago Concert Night Out (hub)
- **URL:** `/services/events/concerts/chicago-concert-night-out`
- **Route name:** `events.concerts.night-out`
- **Blade:** `resources/views/pages/services/events/concerts/chicago-concert-night-out.blade.php`
- **FAQ preset:** `chicago-night-out`
- **Hero image:** `/images/special-events/concerts/chicago-night-out.jpg`
- **Key logistics angle:** Multi-venue hub page; any Chicago concert, any neighborhood; multi-stop itinerary flat-rate; no single venue dependency
- **First `rightItems` item:** Any Chicago Concert Venue (generic Chicagoland concert catchall)

### SEO Keyword Targets — Concert Pages

**Primary targets (per page):**
- `{venue name} limo service`
- `{venue name} party bus`
- `{venue name} transportation Chicago`
- `{venue name} concert transportation Chicagoland`

**Secondary targets (H3, body, FAQ):**
- party bus to {venue}
- limo service for {venue} concert
- {venue} chauffeured ride
- {suburb} to {venue} transportation

**LSI/semantic terms to weave in naturally (all pages):**
- chauffeur, flat-rate pricing, no surge pricing, door-to-door service, licensed and insured, group transportation, post-show pickup, Chicagoland, professional chauffeur

### Copy Rules (Concert Pages)

All standard event-page copy rules apply. Concert-specific additions:

| Rule | Detail |
|---|---|
| Em dash ban | No em dashes anywhere. Use comma, period, or rephrase. |
| Full company name | "Stop & Go Airport Shuttle Service, Inc." in all body copy. "Stop & Go" and "Stop & Go Limo" for nav/logo/social only. |
| No taxi/Uber/Lyft/cheap/budget | Never mention these in copy. |
| No hard vehicle capacity | Never state a maximum passenger count. Say "13 or more" when group size comes up. |
| Chicagoland service area | Must name north (Waukegan, Arlington Heights, Palatine), northwest (Schaumburg, Elk Grove Village, Crystal Lake), west (Elgin, Aurora, Downers Grove), south/southwest (Orland Park, Tinley Park, New Lenox, Joliet), and the city of Chicago. |
| FIQ `descSubheading` | Must follow "We Have the Best [Event/Venue] Transportation" pattern exactly. |
| `info-strip` body | Minimum 2–3 full sentences. |
| Venue-specific logistics | Each page must address the specific parking, routing, and post-show exit challenge unique to that venue. Generic copy that could apply to any venue is not acceptable. |

### Checklist for Each Concert Service Page

- [x] Blade file created at `resources/views/pages/services/events/concerts/{slug}.blade.php`
- [x] Route added to `routes/main-site.php` under `events.concerts.*`
- [x] Hero image present in `public/images/special-events/concerts/`
- [x] CTA section image present (or reuses hero image where noted above)
- [x] FAQ preset key exists in `config/faqs.php`
- [x] All four JSON-LD structured data blocks present and populated
- [x] All section `id` attributes present with `scroll-margin-top: 80px`
- [x] Copy passes all rules in the Copy Rules table above
- [x] FIQ `descSubheading` uses "We Have the Best [X] Transportation" pattern
- [x] `info-strip` body is 2–3 full sentences minimum
- [x] No em dashes anywhere in copy
- [x] Full company name used in body copy
- [x] Service area names all of Chicagoland (north, northwest, west, south/southwest, city)
