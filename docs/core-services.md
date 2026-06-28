# Core Service Pillars — Architecture & Content Blueprint

> Updated: 2026-06-28
> Status: Blueprint — MNC (no page files, routes, or components built yet)
> Source docs: `docs/seo/stopngo.claude.gbp.services.txt`, `docs/seo/stopngo.google.gbp.services.txt`, `docs/StopAndGo.Personas.Claude.md`, `docs/StopAndGo.Industries.Claude.md`, `docs/hero-standardization.md`

---

## Standing Rule Before Every Build

**Before writing any core-services page or component, re-read both of the following files in full:**

1. `docs/seo/stopngo.claude.gbp.services.txt` — 30 GBP services per category, long-form descriptions, persona-matched copy, local anchors
2. `docs/seo/stopngo.google.gbp.services.txt` — Google-structured service names and short descriptions per category

These files are the primary content source for per-pillar body copy. Every voice-search phrase, every service name, and every persona scenario in those files must be woven into the page copy. Do not rely on memory or prior notes — re-read them fresh at the start of each build.

---

## 1. Purpose

Stop & Go has 7 active Google Business Profile (GBP) categories, each with 30 services. These categories represent the true breadth of the business, which is not visible on the current website. This section:

- Creates a "Core Service Pillars" hub at `/core-services`
- Creates 7 deep-content service pages under `/core-services/<slug>`
- Drives voice search, long-tail SEO, and GBP relevance for all 7 GBP categories
- Targets every persona (Section 8) and industry vertical (Section 9) in plain, conversational language
- Does not cannibalize existing pages (see Section 10)

No e-commerce, no shopping, no products. Service information and quote conversion only.

---

## 2. The 7 Service Pillars

| GBP Category ID | Pillar Name | URL Slug | Route |
|---|---|---|---|
| `gcid:airport_shuttle_service` | Airport Shuttle Service | `airport-shuttle` | `/core-services/airport-shuttle` |
| `gcid:bus_charter` | Bus Charter | `bus-charter` | `/core-services/bus-charter` |
| `gcid:chauffeur_service` | Chauffeur Service | `chauffeur-service` | `/core-services/chauffeur-service` |
| `gcid:limousine_service` | Limousine Service | `limousine-service` | `/core-services/limousine-service` |
| `gcid:transportation_escort_service` | Transportation Escort | `transportation-escort` | `/core-services/transportation-escort` |
| `gcid:transportation_service` | Transportation Service | `transportation-service` | `/core-services/transportation-service` |
| `gcid:wedding_service` | Wedding Service | `wedding-service` | `/core-services/wedding-service` |

---

## 3. File & Route Structure

### Routes (`routes/main-site.php`)

```php
// Core Services hub
Route::get('/core-services', fn () => view('pages.core-services.index'))->name('core-services');

// 7 Service Pillar pages
Route::prefix('core-services')->name('core-services.')->group(function () {
    Route::get('/airport-shuttle',       fn () => view('pages.core-services.airport-shuttle'))->name('airport-shuttle');
    Route::get('/bus-charter',            fn () => view('pages.core-services.bus-charter'))->name('bus-charter');
    Route::get('/chauffeur-service',      fn () => view('pages.core-services.chauffeur-service'))->name('chauffeur-service');
    Route::get('/limousine-service',      fn () => view('pages.core-services.limousine-service'))->name('limousine-service');
    Route::get('/transportation-escort',  fn () => view('pages.core-services.transportation-escort'))->name('transportation-escort');
    Route::get('/transportation-service', fn () => view('pages.core-services.transportation-service'))->name('transportation-service');
    Route::get('/wedding-service',        fn () => view('pages.core-services.wedding-service'))->name('wedding-service');
});
```

### View Directory

```
resources/views/pages/core-services/
├── index.blade.php
├── airport-shuttle.blade.php
├── bus-charter.blade.php
├── chauffeur-service.blade.php
├── limousine-service.blade.php
├── transportation-escort.blade.php
├── transportation-service.blade.php
└── wedding-service.blade.php
```

---

## 4. New Components (Landing Page Only — 2 Total)

No new components for pillar pages. Two new `x-sections.*` components are needed exclusively for the `/core-services` landing page.

---

### 4.1 `x-sections.core-services-pillar-grid`

**Purpose:** Clickable rectangular tile grid — one tile per pillar. The visual hub of the landing page.

**Visual spec:**
- Navy background (`var(--navy)`) per tile
- Large champagne pillar number on the left
- Pillar name in H3 (Poppins, white, bold)
- 2-sentence description (Montserrat, `var(--cloud)`, 14-15px)
- Champagne right-arrow or chevron
- Hover: champagne 4px left border, slight navy lightening
- Full tile is an `<a>` linking to `/core-services/<slug>`
- Desktop: 2-column grid. Mobile: 1-column stack

**Props:** `id` (string, default `'pillar-grid'`)

**Hardcoded tile content (7 tiles):**

| # | Pillar | Tile description |
|---|---|---|
| 1 | Airport Shuttle Service | Flat-rate transfers to O'Hare and Midway with real-time flight tracking, 24/7 dispatch, and meet-and-greet at baggage claim. |
| 2 | Bus Charter | Right-sized charter buses for groups of every kind — weddings, corporate events, church trips, concerts, and celebrations of all sizes. |
| 3 | Chauffeur Service | Background-checked, professionally attired chauffeurs for executive travel, C-suite commutes, VIP client entertainment, and private transfers. |
| 4 | Limousine Service | Stretch limousines, luxury SUVs, and executive sedans for weddings, proms, quinceañeras, galas, and every milestone worth celebrating. |
| 5 | Transportation Escort | Multi-vehicle coordination, VIP convoy logistics, and discreet escort service for high-value clients, dignitaries, and executive teams. |
| 6 | Transportation Service | Full-service private ground transportation for families, corporations, medical appointments, senior travel, and everything in between. |
| 7 | Wedding Service | Complete wedding day transportation — bridal party, guest shuttles, getaway cars, rehearsal dinners, and day-after brunches — in a single booking. |

---

### 4.2 `x-sections.core-services-differentiator-band`

**Purpose:** Full-width credibility section answering "Why choose Stop & Go across all 7 services?"

**Visual spec:**
- `var(--cloud-light)` background
- Left-aligned H2 with champagne underbar
- Two-column layout desktop, single column mobile
- Left: 4 champagne-bordered cards (80-100 words each)
- Right: 3 prose paragraphs (100-120 words each) + CTA block

**Props:** `id` (string, default `'why-stop-and-go'`)

**Left column — 4 credibility cards:**

1. **Background-Checked on Every Ride** — FBI fingerprint screening, driving record review, drug testing, annual re-certification. Every chauffeur across all 7 service categories meets the same vetting standard before they are ever behind the wheel.

2. **Real-Time Flight Tracking on Every Airport Run** — Dispatch monitors radar-level flight data and adjusts pickup automatically. Your chauffeur is at the gate when wheels touch down, not when the app shows the flight "arrived."

3. **Flat-Rate Pricing With No Surge, Ever** — Price locks at booking. No meter running, no peak-hour adjustment, no event-night surge. The number we quote is the number you pay, across every service and every vehicle type.

4. **24/7/365 Dispatch — A Real Person Answers** — A dispatcher picks up at 3am. Pre-dawn airport runs are standard. Holiday coverage never lapses. Late-night group returns have a guaranteed ride home. Always.

**Right column — 3 prose topics (copy written at build time):**

- Paragraph 1: The Stop & Go standard as a constant across all 7 pillars — pre-trip vehicle inspection, early arrival, uniformed chauffeur, locked flat rate. Why consistency matters to corporate accounts booking different vehicle types on different days.
- Paragraph 2: Local knowledge — New Lenox base at 400 E Lincoln Hwy, proximity to I-80/I-55/I-88/I-355 corridors, Will County community fluency. Chauffeurs who know Silver Cross routes, Lincoln-Way school schedules, stadium drop-off lanes, and the fastest O'Hare path from every southwest suburb by name.
- Paragraph 3: Industries that rely on Stop & Go — legal and financial firms on the I-88 corridor, healthcare systems in Joliet and the southwest suburbs, logistics and manufacturing companies along the I-80 industrial corridor (CenterPoint Intermodal, BNSF, Amazon), hospitality groups managing hotel-to-venue shuttle loops, event planners coordinating 200 guests across 4 vehicle types on a wedding Saturday.

---

## 5. Landing Page Section Sequence (`index.blade.php`)

```blade
@push('structured-data')
    {{-- LocalBusiness + BreadcrumbList + WebPage JSON-LD --}}
@endpush

<x-layouts.page title="..." metaDescription="..." currentPage="our-services">

    <x-sections.category-hero />
    <x-sections.info-strip />
    <x-sections.core-services-pillar-grid />
    <x-sections.core-services-differentiator-band />
    <x-sections.our-story />
    <x-sections.review-slider />
    <x-sections.faq preset="general" />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
```

### Landing Page Hero Props

| Prop | Value |
|---|---|
| `heading` | `"Our Core"` |
| `headingBold` | `"Service Pillars"` |
| `subtitle` | `"Seven service categories, one trusted provider"` |
| `description` | 150-200 words. Full legal name in sentence one. First person plural. All customer types threaded in. O'Hare, Midway, Will County, Chicagoland referenced. 7th grade reading level. |
| `buttonText` | `"Get a Free Quote"` |
| `buttonHref` | `"/get-a-quote"` |
| `image` | `hero-services.jpg` (existing) |

### Landing Page Meta

| Field | Value |
|---|---|
| `title` | `"Core Service Pillars — Stop & Go Airport Shuttle & Limo"` |
| `metaDescription` | `"Seven professional transportation services under one roof. Airport shuttles, chauffeurs, limousines, bus charters, wedding transport, and more. Chicagoland. (815) 585-6922."` |
| `currentPage` | `"our-services"` |

---

## 6. Service Pillar Page Template

**Every one of the 7 pillar pages uses this exact section sequence.** All 5 reuse components appear on every page. What changes per page is the content passed into each section's props, and the `id` prop on each component to anchor it correctly for the page scanner.

```blade
@push('structured-data')
    {{-- LocalBusiness + Service + Product[] + BreadcrumbList + FAQPage JSON-LD --}}
@endpush

<x-layouts.page title="..." metaDescription="..." currentPage="our-services">

    <x-sections.category-hero />
    <x-sections.travel-in-style />
    <x-sections.info-strip />
    <x-sections.limo-services-grid    id="[pillar]-services" />
    <x-sections.limo-process-steps    id="[pillar]-process" />
    <x-sections.party-bus-occasions   id="[pillar]-occasions" />
    <x-sections.party-bus-advantage   id="[pillar]-advantage" />
    <x-sections.limo-booking-timeline id="[pillar]-timeline" />
    <x-sections.three-steps           :inverted="true" />
    <x-sections.free-instant-quote />
    <x-sections.review-slider />
    <x-sections.faq                   preset="[closest-preset]" />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
```

### Word Count Requirement

**Minimum 2,000–3,000 words of rendered body copy per pillar page**, not counting nav, footer, or button labels. This is achieved by:

| Section | Word contribution |
|---|---|
| `category-hero` description | 150-200 words |
| `travel-in-style` body | 100-150 words |
| `info-strip` body | 80-100 words |
| `limo-services-grid` (6 cards × 60-80w) | 360-480 words |
| `limo-process-steps` (6 steps × 50-70w) | 300-420 words |
| `party-bus-occasions` (6 cards × 60-80w) | 360-480 words |
| `party-bus-advantage` (4 items + 3 paragraphs) | 350-500 words |
| `limo-booking-timeline` (6 cards × 50-70w) | 300-420 words |
| `three-steps` | 80-120 words |
| `free-instant-quote` bullets + closing | 100-150 words |
| **Total** | **~2,180–3,020 words** |

Copy for each section must be written fresh for the pillar. Reusing hardcoded component copy verbatim across pages creates duplicate-content risk. Use the `id` prop to differentiate for the scanner; write new copy for the props each component accepts.

### Breadcrumb JSON-LD (all pillar pages)

```json
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services","item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "[Pillar Name]","item": "{{ request()->url() }}" }
    ]
}
```

---

## 7. JSON-LD Schema — Full Stack

Every pillar page outputs **four** structured-data blocks inside `@push('structured-data')`. The landing page outputs **three** (no `Service` or `Product[]`).

---

### Block 1 — `LocalBusiness`

```json
{
    "@@context": "https://schema.org",
    "@@type": ["LocalBusiness", "LimousineService"],
    "name": "Stop & Go Airport Shuttle Service Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
    "telephone": "(815) 585-6922",
    "priceRange": "$$",
    "image": "https://newlenoxlimoservice.com/images/heroes/[hero-image].jpg",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": 41.5126,
        "longitude": -87.9756
    },
    "openingHoursSpecification": {
        "@@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    },
    "sameAs": [
        "https://www.google.com/maps/place/Stop+%26+Go+Airport+Shuttle+Service"
    ]
}
```

---

### Block 2 — `Service` (pillar pages only)

```json
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "[Pillar Name]",
    "serviceType": "[GBP Category Human Name]",
    "description": "[pillar meta description — 1-2 sentences]",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "(815) 585-6922"
    },
    "areaServed": [
        { "@@type": "City", "name": "New Lenox" },
        { "@@type": "City", "name": "Joliet" },
        { "@@type": "City", "name": "Naperville" },
        { "@@type": "City", "name": "Frankfort" },
        { "@@type": "City", "name": "Mokena" },
        { "@@type": "AdministrativeArea", "name": "Will County" },
        { "@@type": "State", "name": "Illinois" }
    ],
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "[Pillar Name] Services",
        "itemListElement": [
            {{-- one Offer per GBP service in this category --}}
        ]
    }
}
```

---

### Block 3 — `Product[]` (pillar pages only)

One `Product` block per GBP service name in the category. Pull all 30 service names from `docs/seo/stopngo.claude.gbp.services.txt` (Claude version) and `docs/seo/stopngo.google.gbp.services.txt` (Google version) for the pillar's GBP category ID.

```json
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "name": "[Pillar Name] — Services Offered",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "item": {
                "@@type": "Product",
                "name": "[GBP Service Name 1]",
                "description": "[Short description from GBP services file]",
                "brand": { "@@type": "Brand", "name": "Stop & Go Airport Shuttle Service Inc." },
                "offers": {
                    "@@type": "Offer",
                    "priceCurrency": "USD",
                    "priceSpecification": { "@@type": "PriceSpecification", "description": "Flat-rate pricing — contact for quote" },
                    "availability": "https://schema.org/InStock",
                    "seller": { "@@type": "LocalBusiness", "name": "Stop & Go Airport Shuttle Service Inc." }
                }
            }
        }
        {{-- repeat for all services in this category --}}
    ]
}
```

---

### Block 4 — `BreadcrumbList`

See Section 6 above.

---

### Block 5 — `FAQPage` (pillar pages with faq section)

```json
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "[FAQ question text]",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "[FAQ answer text]"
            }
        }
        {{-- one entry per FAQ item rendered by x-sections.faq on this page --}}
    ]
}
```

---

### Block 6 — `AggregateRating` (landing page + pillar pages with review-slider)

```json
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop & Go Airport Shuttle Service Inc.",
    "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "47",
        "bestRating": "5",
        "worstRating": "1"
    }
}
```

> **Note:** Use only documented, verifiable review counts. Do not invent or pad numbers. Pull the actual count from Google Business Profile before hardcoding. If the count is unknown, omit `AggregateRating` entirely.

---

## 8. Persona Reference — All 12 Personas

Source: `docs/StopAndGo.Personas.Claude.md`

| # | Name | Tagline | Primary pillar pages |
|---|---|---|---|
| 1 | The Dawn Patrol Executive | "Get me to the gate, on time, every time." | Airport Shuttle, Chauffeur |
| 2 | The Keeper of Tradition | "She only turns fifteen once." | Limousine, Bus Charter, Transportation |
| 3 | The Architect of the Perfect Day | "The timeline is sacred." | Wedding, Bus Charter, Limousine |
| 4 | The Hype Captain | "Round up the crew — the ride is the party." | Bus Charter, Limousine, Transportation |
| 5 | The Gatekeeper EA | "It needs to be invisible and invoice cleanly." | Chauffeur, Transportation, Airport Shuttle |
| 6 | The Protective Sentinel | "Safe, supervised, and home on time." | Limousine, Transportation Escort, Transportation |
| 7 | The Ride-or-Die Tailgaters | "Skip the parking, guarantee the ride home." | Bus Charter, Limousine, Transportation |
| 8 | The Treat-Yourself Voyager | "Start the trip relaxed, end it the same way." | Airport Shuttle, Chauffeur |
| 9 | The Memory Maker | "Make the moment feel like an event." | Limousine, Transportation, Bus Charter |
| 10 | The Devoted Guardian | "Get Mom there safely, and treat her with care." | Transportation Escort, Transportation, Chauffeur |
| 11 | The Leisure Curator | "Gather the group, leave the driving to us." | Bus Charter, Transportation, Transportation Escort |
| 12 | The Discerning Visitor | "White-glove, the moment I land." | Transportation Escort, Chauffeur, Airport Shuttle |

**Brand voice throughline across all 12:** one trusted local team, one vehicle that keeps people together, a flat-rate you can count on, a chauffeur who handles everything you would rather not think about — stated in whichever register the persona needs to hear it.

**Five brand attributes to dial up or down per persona:**

| Attribute | Leading personas |
|---|---|
| Reliability | Dawn Patrol, Gatekeeper EA, Protective Sentinel |
| Luxury | Treat-Yourself Voyager, Discerning Visitor, Memory Maker |
| Professionalism/Safety | Protective Sentinel, Devoted Guardian, Keeper of Tradition |
| Punctuality | Dawn Patrol, Architect of the Perfect Day, Gatekeeper EA |
| Localized roots | Keeper of Tradition, Ride-or-Die Tailgaters, Leisure Curator |

---

## 9. Industry Reference — All 8 Verticals

Source: `docs/StopAndGo.Industries.Claude.md`

| # | Industry | Key anchors | Primary pillar pages |
|---|---|---|---|
| 1 | Logistics, Intermodal & Distribution | CenterPoint Intermodal (Elwood/Joliet), BNSF Logistics Park, Amazon, RJW, I-80/I-55 corridor | Airport Shuttle, Chauffeur, Transportation |
| 2 | Healthcare & Medical | Silver Cross Hospital (New Lenox), Northwestern Medicine Proton Center, Ascension/AMITA | Airport Shuttle, Transportation, Chauffeur |
| 3 | Professional Services, Tech & Finance | I-88 Innovation Corridor, Naperville/Oak Brook/Downers Grove, CityGate Centre, Ace Hardware HQ | Chauffeur, Airport Shuttle, Transportation Escort |
| 4 | Manufacturing & Industrial | Old Plank & Brewster Creek industrial areas, Greco & Sons, McKesson, I-80 belt | Chauffeur, Transportation, Transportation Escort |
| 5 | Gaming, Hospitality & Tourism | Harrah's/Hollywood Casino Joliet, Hollywood Casino Aurora, Rialto Square Theatre | Bus Charter, Limousine, Transportation |
| 6 | Private Aviation & FBO | DuPage (DPA), Chicago Executive (PWK), Gary/Chicago (GYY), Lewis University (LOT), Waukegan (UGN), Signature/Atlantic FBOs at ORD/MDW | Airport Shuttle, Transportation Escort, Chauffeur |
| 7 | Weddings & Social Events | Jacob Henry Mansion, CD & ME, Southern Charm, Prestwick CC, The Odyssey, Hotel Arista, Mesón Sabika | Wedding, Limousine, Bus Charter |
| 8 | Education, Civic & Seasonal | Lincoln-Way District 210, Joliet Township, Lewis University, U of St. Francis, JJC, United Center, Soldier Field, Wrigley | Bus Charter, Limousine, Transportation |

**Revenue logic:**
- **Recurring B2B (steadiest):** Logistics → Healthcare → Professional Services/I-88 → FBO. Reward corporate-account pages, centralized billing, reliability proof points.
- **High-margin event/social (seasonal spikes):** Weddings → Gaming/Casinos → Sports/Concerts → Milestones. Reward venue-named copy, no-surge promise, persona-driven emotional voice.

**Hyper-local edge:** weave specific neighborhood and employer names — Cathedral Area and downtown Joliet, I-80/I-55 logistics corridor, Silver Cross, Lincoln-Way towns, CenterPoint — so Google and local readers register Stop & Go as genuinely embedded in the geography.

---

## 10. Per-Pillar Content Briefs

For each pillar: unique SEO angle, persona focus, industry focus, voice-search phrases to answer natively, hero image, FAQ preset, and meta copy. Re-read both GBP services files before writing any pillar. The 30-service list in each category is the content backbone.

---

### 10.1 Airport Shuttle Service — `/core-services/airport-shuttle`

**GBP category:** `gcid:airport_shuttle_service`

**Unique SEO angle:** Operational mechanics of professional airport shuttle service. How flight tracking works, what "meet and greet" means vs. curbside pickup, why a dedicated private transfer differs from a shared ride, what happens when the flight is delayed, FBO ramp-side coordination, service to Gary/GYY and Chicago Executive/PWK beyond ORD/MDW. No other page covers the step-by-step process from booking to wheels-down arrival.

**Persona focus (from Section 8):**
- Primary: #1 Dawn Patrol Executive, #8 Treat-Yourself Voyager
- Secondary: #12 Discerning Visitor (VIP meet-and-greet), #10 Devoted Guardian (senior airport run)

**Industry focus (from Section 9):**
- Primary: #6 Private Aviation/FBO (highest LTV — tarmac/ramp-side), #1 Logistics/Intermodal (ORD/MDW runs for distribution executives)
- Secondary: #2 Healthcare (physician/staff travel, Silver Cross recruiter airport runs), #3 Professional Services (I-88 corridor corporate roadshows)

**Voice-search questions to answer natively in prose:**
- "What happens if my flight is delayed?" → Flight tracking adjusts pickup automatically, grace period built in, no extra charge
- "Is someone waiting when I land?" → Yes. Meet-and-greet means your chauffeur is inside baggage claim with a name sign before wheels touch down
- "Can you take my whole family to the airport?" → Luxury SUVs hold up to 6 passengers with luggage. Group shuttle options for larger families
- "Do you go to Gary Airport or Chicago Executive?" → Yes, both. Same flat-rate model. FBO ramp-side available at PWK and DPA
- "How early should I book an airport shuttle?" → 24-48 hours minimum; same-day often available for early morning calls to the 24/7 line
- "Do you meet passengers at the gate or baggage claim?" → Baggage claim, named sign, flight tracked to the minute

**GBP services to thread (from both files, `gcid:airport_shuttle_service`):**
O'Hare Airport Shuttle, Midway Airport Shuttle, Flat-Rate Airport Transfer, Executive Airport Sedan, Meet-and-Greet Service, Real-Time Flight Tracking Transfer, Early Morning Airport Run, Late Night Airport Return, Private Airport SUV, Family Airport Transport, Senior Airport Shuttle, FBO Tarmac Pickup, Gary Airport Transfer, Chicago Executive (PWK) Transfer, Corporate Airport Account, Group Airport Shuttle, Luggage Assist Service, Holiday Airport Run, Same-Day Airport Booking, Pre-Dawn Airport Pickup — and additional from the Claude file.

**Hero image:** `airport-ohare-midway.jpg` (existing)
**FAQ preset:** `"airport"` if it exists, otherwise `"general"`
**Meta title:** `"Airport Shuttle Service — O'Hare & Midway | Stop & Go"`
**Meta description:** `"Flat-rate airport shuttle service to O'Hare and Midway from New Lenox, Naperville, Joliet, and all of Will County. Real-time flight tracking, meet-and-greet, 24/7. Call (815) 585-6922."`

---

### 10.2 Bus Charter — `/core-services/bus-charter`

**GBP category:** `gcid:bus_charter`

**Unique SEO angle:** Group travel logistics and right-sizing — how charter buses are selected by headcount, what a single-vehicle approach does for group cohesion, and which event types are best served by a charter bus vs. a smaller limo. Covers the full spectrum from Quinceañera courts to corporate convention teams to church day trips to casino nights. No existing page covers organized group charter with this depth.

**Persona focus:**
- Primary: #2 Keeper of Tradition (quinceañera court), #4 Hype Captain (bachelorette group)
- Secondary: #7 Ride-or-Die Tailgaters (concert/sports), #11 Leisure Curator (winery/brewery/casino day trip)

**Industry focus:**
- Primary: #5 Gaming/Hospitality (casino nights, Harrah's/Hollywood Joliet, Rialto events), #7 Weddings/Social Events (guest shuttle loops)
- Secondary: #8 Education/Civic (Lincoln-Way prom, Lewis University, church groups), #4 Manufacturing/Industrial (plant-wide team outing)

**Voice-search questions to answer natively:**
- "How many people fit on a charter bus?" → Right-sized to the group — mini buses for 20, full motorcoaches for 55; advice given at quote
- "Can a charter bus do multiple stops?" → Yes, full route planned around the itinerary before the day
- "What is the difference between a party bus and a charter bus?" → Charter buses built for organized group transit; party buses add lighting and sound for celebrations
- "Is alcohol allowed on a charter bus?" → Policy stated clearly
- "Do you do church group charters?" → Yes, background-checked drivers, IDOT inspected, clean vehicles, no alcohol required
- "Can I rent a bus for a casino night?" → Yes. Harrah's and Hollywood Casino in Joliet, Hollywood Aurora — no surge fare home guaranteed

**GBP services to thread (from both files, `gcid:bus_charter`):**
Group Airport Charter, Corporate Event Bus, Wedding Guest Shuttle, Quinceañera Court Bus, Church Group Charter, School Outing Bus, Winery Tour Bus, Casino Night Charter, Concert Group Bus, Bachelorette Charter, Sports Tailgate Bus, Team Building Charter, Convention Shuttle, Holiday Party Bus Charter, Multi-Stop Group Tour, Senior Day Trip Bus, Prom Group Charter, Private Charter Bus — and additional from the Claude file.

**Hero image:** `hero-new-bus-rental.jpg` (existing)
**FAQ preset:** `"party-bus"` (closest match)
**Meta title:** `"Bus Charter Service — Groups of Every Size | Stop & Go"`
**Meta description:** `"Charter bus service across Will County and Chicagoland. Weddings, corporate events, church groups, concerts, and more. Right-sized for your group. Call (815) 585-6922."`

---

### 10.3 Chauffeur Service — `/core-services/chauffeur-service`

**GBP category:** `gcid:chauffeur_service`

**Unique SEO angle:** What makes a Stop & Go chauffeur different from any driver with a license. The screening process (FBI fingerprint check, MVR review, drug testing, annual renewal), the professional attire standard, the etiquette training, the pre-trip briefing protocol, the difference between an hourly standby chauffeur and a point-to-point hire, and why executive clients choose this over any alternative. This is the deepest content on the site about the person behind the wheel.

**Persona focus:**
- Primary: #1 Dawn Patrol Executive, #5 Gatekeeper EA
- Secondary: #10 Devoted Guardian (senior medical), #12 Discerning Visitor (VIP client)

**Industry focus:**
- Primary: #3 Professional Services/I-88 (C-suite commutes, Oak Brook/Naperville corporate campuses, client entertainment), #1 Logistics/Intermodal (executive/vendor airport transfers for distribution-center leadership)
- Secondary: #2 Healthcare (physician transfers, Silver Cross administrator travel, candidate recruiting airport pickups), #4 Manufacturing/Industrial (plant leadership, visiting vendors)

**Voice-search questions to answer natively:**
- "What is a private chauffeur service?" → Professional assigned to you for your trip or your day — not a taxi, not a rideshare
- "How are your drivers screened?" → FBI fingerprint background check, driving record, drug test, annual renewal — explained in plain language
- "Can I keep a chauffeur on standby for the day?" → Yes. Hourly standby. Rate locked at booking. Multi-stop itineraries coordinated in advance
- "Will my chauffeur help with my luggage?" → Yes. Door opened, luggage handled, gratuity included in flat rate
- "Can you arrange a chauffeur for my visiting client?" → Yes. VIP meet-and-greet at O'Hare or Midway, named sign, luggage to vehicle, discreet and professional
- "Do you have corporate account billing?" → Yes. Centralized billing, digital receipts, roadshow packages

**GBP services to thread (from both files, `gcid:chauffeur_service`):**
Door-to-Door Chauffeur Service, New Lenox Chauffeur Service, Joliet Chauffeur Service, Naperville Chauffeur Service, Frankfort & Mokena Chauffeur, Executive Chauffeur, VIP Client Chauffeur, Hourly Standby Chauffeur, Corporate Roadshow Chauffeur, Airport Chauffeur, Medical Appointment Chauffeur, Senior Chauffeur, Discreet Private Chauffeur — and all additional from both files.

**Hero image:** `chauffeur-hero.jpg` (existing)
**FAQ preset:** `"general"`
**Meta title:** `"Private Chauffeur Service — Chicagoland | Stop & Go"`
**Meta description:** `"Professional chauffeur service for executive travel, C-suite commutes, VIP clients, and private transfers. Background-checked, uniformed, on time. Call (815) 585-6922."`

---

### 10.4 Limousine Service — `/core-services/limousine-service`

**GBP category:** `gcid:limousine_service`

**Unique SEO angle:** The breadth of occasions where a limousine is the right vehicle — not just weddings and proms, but brewery tours, FBO private aviation arrivals, gala fundraisers, milestone anniversaries, quinceañeras, Sweet 16s, cotillions, funerals, and date nights. This page goes wide on occasions while the existing `/limousine-services` page focuses on vehicle specs and professional standards. Zero duplication because this page is occasion-matching, not vehicle-spec copy.

**Persona focus:**
- Primary: #9 Memory Maker (milestone birthdays, anniversaries, Sweet 16), #6 Protective Sentinel (prom parent)
- Secondary: #4 Hype Captain (bachelorette party limo), #2 Keeper of Tradition (quinceañera limo), #3 Architect of the Perfect Day (bridal arrival)

**Industry focus:**
- Primary: #7 Weddings/Social Events (Jacob Henry Mansion, CD & ME, Prestwick CC, Odyssey, Hotel Arista), #5 Gaming/Hospitality (Rialto events, concert-night limos)
- Secondary: #6 Private Aviation/FBO (stretch limo tarmac pickup at Signature FBO), #8 Education/Civic (prom, homecoming, graduation limos)

**Voice-search questions to answer natively:**
- "What occasions are limousines good for?" → All 20+ answered: weddings, proms, birthdays, bachelorettes, anniversaries, galas, graduation, quinceañera, Sweet 16, cotillion, brewery tours, FBO arrivals, date nights, corporate events, funerals, concert nights, sporting events, homecoming, romantic surprises
- "Is a limousine worth it for prom?" → Safety, the experience, and the flat-rate cost split by the group
- "What is the difference between a stretch limo and a luxury SUV?" → Passenger count and use-case guidance
- "Can you pick someone up from a private jet?" → FBO ramp-side and tarmac coordination at Signature, Atlantic, DPA, PWK, GYY, LOT
- "How much does a limousine cost in the Chicago suburbs?" → Flat-rate quote, explanation of what affects cost (vehicle, distance, duration)
- "Do you have Hummer limos?" → Vehicle types answered from fleet

**GBP services to thread (from both files, `gcid:limousine_service`):**
Luxury Wedding Stretch Limo, Prom Night Stretch SUV Limo, Quinceañera Celebration Limo, Corporate Event Sedan Limo, Concert Night Stretch Limo, Anniversary Luxury Getaway Car, Bachelorette Party Hummer Limo, Bachelor Party VIP Limo, Milestone Birthday Stretch Limo, Sporting Event Tailgate Limo, Executive Black Car Limo, Funeral Family Livery, Romantic Date Night Limo, Homecoming Dance Limo, Sweet 16 Celebration Limo, FBO Private Aviation Tarmac Limo, Gala & Charity Event Limo, Graduation Ceremony Limo, Night on the Town Limo, High-School Dance Limo Bus, Cotillion Milestone Limo — and all additional from both files.

**Hero image:** `hero-special-event.jpg` (existing)
**FAQ preset:** `"general"`
**Meta title:** `"Limousine Service for Every Occasion — Chicagoland | Stop & Go"`
**Meta description:** `"Stretch limousines, luxury SUVs, and executive sedans for weddings, proms, anniversaries, galas, and every celebration. Flat-rate pricing. Call (815) 585-6922."`

---

### 10.5 Transportation Escort — `/core-services/transportation-escort`

**GBP category:** `gcid:transportation_escort_service`

**Unique SEO angle:** This is the most distinct and least-covered service on the site. Transportation escort means coordinated multi-vehicle movement for VIP clients, executive convoys, large wedding-day vehicle fleets, dignitary arrivals, senior group outings, and high-value situations where a single chauffeur is not enough. The page must define the service, who needs it, and how Stop & Go coordinates it at the dispatch level. No existing page touches this topic.

**Persona focus:**
- Primary: #12 Discerning Visitor (VIP/dignitary convoy), #10 Devoted Guardian (senior group with escort)
- Secondary: #5 Gatekeeper EA (executive protective detail booking), #6 Protective Sentinel (large group escort for prom)

**Industry focus:**
- Primary: #3 Professional Services/I-88 (corporate leadership site visits, investor tour convoys), #6 Private Aviation/FBO (ramp-side multi-vehicle VIP arrival)
- Secondary: #2 Healthcare (hospital executive board visit logistics), #1 Logistics/Intermodal (C-suite distribution campus tours)

**Voice-search questions to answer natively:**
- "What is a transportation escort service?" → More than one vehicle moving in coordination, professional communication between drivers, one central dispatch
- "Can you coordinate multiple limos at once?" → Yes. Multi-vehicle dispatch handled centrally. All vehicles briefed together before departure
- "Do you provide VIP escort service in the Chicago suburbs?" → Yes, with specific Will County and Chicagoland examples
- "How do you handle a wedding with 4 different vehicles?" → Coordination process explained: advance briefing, shared itinerary, single dispatch contact
- "What does an executive transportation escort include?" → Route survey, vehicle inspection, driver briefing, communication protocol, contingency plan
- "Can you escort a senior group to an event?" → Yes. Gentle, coordinated, patient multi-vehicle approach for senior outing groups

**GBP services to thread (from both files, `gcid:transportation_escort_service`):**
VIP Escort Service, Executive Convoy Transport, Multi-Vehicle Wedding Escort, Dignitary Arrival Escort, Corporate Leadership Escort, Senior Group Escort, High-Value Client Escort, Security-Conscious Transfer, Private Event Escort, Group Coordination Escort — and all additional from both files.

**Hero image:** `limousine-professional.jpg` (existing)
**FAQ preset:** `"general"`
**Meta title:** `"Transportation Escort Service — Multi-Vehicle | Stop & Go"`
**Meta description:** `"Coordinated multi-vehicle escort for VIP clients, wedding fleets, executive convoys, and dignitary arrivals across Chicagoland. One dispatch contact. Call (815) 585-6922."`

---

### 10.6 Transportation Service — `/core-services/transportation-service`

**GBP category:** `gcid:transportation_service`

**Unique SEO angle:** The broadest pillar. Covers underserved persona segments that no other page on the site addresses: senior door-to-door medical transport, suburban private car for families without a driver, point-to-point runs that are not airport-related, hotel-to-venue shuttle loops for corporate hospitality, and recurring B2B ground accounts across Will County. The page speaks to people who need reliable private ground transport but don't necessarily think of it as a "limo" or "shuttle" service.

**Persona focus:**
- Primary: #10 Devoted Guardian (senior door-to-door, medical appointments, Silver Cross), #5 Gatekeeper EA (corporate account ground transport)
- Secondary: #7 Ride-or-Die Tailgaters (group nights out without the limo wrapper), #11 Leisure Curator (day-trip groups)

**Industry focus:**
- Primary: #2 Healthcare (patient non-emergency transport, staff shuttles between campuses, physician travel), #1 Logistics/Intermodal (B2B executive ground accounts)
- Secondary: #5 Gaming/Hospitality (hotel-to-venue shuttle loops, casino trip returns), #8 Education/Civic (campus visits, school group ground transport)

**Voice-search questions to answer natively:**
- "Can someone drive my elderly parent to a doctor appointment?" → Yes. Senior door-to-door explained: door-through-door assistance, patient professional chauffeur, confirmed details
- "Is there a private car service in Will County?" → Yes. Full service area: New Lenox, Joliet, Frankfort, Mokena, Naperville, Bolingbrook, Orland Park
- "What is the difference between a transportation service and an Uber?" → Licensed, insured, professional, flat-rate, no surge, background-checked driver, duty-of-care
- "Can you shuttle hotel guests to a venue?" → Yes. Hotel-to-venue shuttle loops described with setup, timing, and billing
- "Do you do recurring bookings for businesses?" → Yes. Corporate accounts, centralized billing, digital receipts, SLA agreement

**GBP services to thread (from both files, `gcid:transportation_service`):**
Private Car Service, Senior Transportation, Medical Appointment Transport, Door-to-Door Transport, Corporate Ground Transport, Hotel Shuttle Service, Group Transportation, Point-to-Point Transfer, Recurring Corporate Account, Non-Emergency Patient Transport, Event Guest Transportation, Family Private Car — and all additional from both files.

**Hero image:** `corporate-limo.jpg` (existing)
**FAQ preset:** `"general"`
**Meta title:** `"Private Transportation Service — Will County | Stop & Go"`
**Meta description:** `"Private ground transportation for families, seniors, corporate visitors, and event shuttles across Will County and Chicagoland. Flat-rate. Always on time. Call (815) 585-6922."`

---

### 10.7 Wedding Service — `/core-services/wedding-service`

**GBP category:** `gcid:wedding_service`

**Unique SEO angle:** Complete wedding weekend transportation as a logistics system — not just a bridal car. Covers every vehicle needed across the full wedding weekend: bridal party limo, groomsmen SUV, guest shuttle loop, out-of-town guest airport pickup, rehearsal dinner transport, and day-after brunch run. The existing `/wedding-limousine-services` page covers the bridal arrival. This page covers the complete multi-vehicle logistics system for the whole event. No duplication.

**Persona focus:**
- Primary: #3 Architect of the Perfect Day (bride, MOH, planner who needs multi-vehicle precision)
- Secondary: #2 Keeper of Tradition (quinceañera cross-reference — quinceañeras follow the same multi-stop logistics), #12 Discerning Visitor (out-of-town VIP guest arriving at ORD/MDW)

**Industry focus:**
- Primary: #7 Weddings/Social Events — venue-specific knowledge is the differentiator: Jacob Henry Mansion (Joliet), CD & ME and Southern Charm (Frankfort), Prestwick CC (Frankfort), The Odyssey (Tinley Park), Hotel Arista, Mesón Sabika, White Eagle, Elements at Water Street (Naperville)
- Secondary: #5 Gaming/Hospitality (hotel block coordination, guest shuttle partnership with reception venues)

**Voice-search questions to answer natively:**
- "How far in advance should I book wedding transportation?" → 8-12 months for spring and fall Saturdays in Chicagoland; specific seasonal guidance
- "Do you do wedding guest shuttles?" → Yes. Loop shuttles between hotel blocks and venue — setup, timing, headcount guidance
- "Can you pick up guests from the airport for my wedding?" → Yes. Named sign at baggage claim, flight tracked, multiple arrivals on same day coordinated centrally
- "What vehicles do you recommend for a wedding party of 12?" → Vehicle matching guidance by party size
- "Do you coordinate with our wedding planner?" → Yes. Planner receives direct contact and pre-wedding confirmation call
- "Do you know Jacob Henry Mansion / CD & ME / Prestwick?" → Yes. Venue-specific staging knowledge, entry logistics, photo-stop timing

**GBP services to thread (from both files, `gcid:wedding_service`):**
Bridal Party Limousine, Wedding Getaway Car, Wedding Guest Shuttle, Rehearsal Dinner Transport, Out-of-Town Guest Airport Pickup, Wedding Day Multi-Vehicle Coordination, Groomsmen SUV, Flower Girl & Ring Bearer Transport, Day-After Brunch Shuttle, Bridal Suite Pickup, Ceremony-to-Reception Transfer, Venue-Specific Wedding Transport, Honeymoon Airport Transfer — and all additional from both files.

**Hero image:** `wedding-hero.jpg` (existing)
**FAQ preset:** `"general"` (consider creating a `"wedding"` preset before build)
**Meta title:** `"Wedding Transportation Service — Complete Day Coverage | Stop & Go"`
**Meta description:** `"Complete wedding transportation — bridal party, guest shuttles, airport arrivals, and rehearsal dinners. One vendor for the full weekend. Call (815) 585-6922."`

---

## 11. Copy Rules for All Pillar Pages

In addition to all rules in `docs/branding-requirements.md`:

| Rule | Requirement |
|---|---|
| **Word count** | 2,000–3,000 words minimum of rendered body copy per pillar page |
| **Reading level** | 7th grade. Short sentences. Plain words. No jargon. |
| **Voice** | First person plural throughout: "we," "our," "us." Never third person about Stop & Go. |
| **Em dashes** | Banned. Use a comma, period, or rephrase. |
| **All-caps** | Banned except nav links. |
| **Negative keywords** | Banned: taxi, cab, cheap, budget, discount, rideshare, Uber, Lyft, shared ride. |
| **Fake stats** | Banned. No fabricated satisfaction percentages or ride counts unless documented and confirmed from GBP or internal records. |
| **Voice search** | Every page answers at least 6 "how," "what," "can you," or "do you" questions natively in body prose. No FAQ-style Q&A in body copy — weave answers into paragraphs. |
| **GBP service names** | Thread GBP service names naturally into copy. "our airport shuttle service" not just "we pick you up." |
| **Company name** | Full legal name "Stop & Go Airport Shuttle Service, Inc." in the hero description sentence one. Short form "Stop & Go" acceptable everywhere else. |
| **Persona language** | Each page explicitly addresses at least 2 personas by their situation, not by their label. |
| **Industry references** | At least one named local employer or venue per page (CenterPoint, Silver Cross, Jacob Henry Mansion, Lincoln-Way, I-88 corridor, etc.). |
| **No double hyphens** | Never. |
| **No British spellings** | American spellings only. |

---

## 12. Cannibalization Avoidance Matrix

| Pillar Page | Closest Existing Page | How They Differ |
|---|---|---|
| `/core-services/airport-shuttle` | `/airport-shuttle-ohare-midway` | Existing: airports, booking, service area, rates. New: process mechanics, flight tracking explained, persona scenarios, Gary/GYY, Chicago Executive/PWK, FBO ramp-side. |
| `/core-services/bus-charter` | `/party-bus-rental-chicago` | Existing: party/celebration bus for nights out. New: organized group charter, corporate/church/school/quinceañera, right-sizing by headcount, alcohol-free options. |
| `/core-services/chauffeur-service` | `/chauffeurs` | Existing: who our chauffeurs are (bios, vetting overview). New: what a chauffeur does step-by-step, when to hire one vs. a car, hourly standby, VIP client hosting, corporate account features. |
| `/core-services/limousine-service` | `/limousine-services` | Existing: limo vehicle positioning, fleet overview, chauffeur excellence. New: 20+ occasion matching, quinceañera, cotillion, FBO, every milestone — wide occasion coverage. |
| `/core-services/transportation-escort` | None — unique | Entirely new topic on the site. No existing page covers multi-vehicle coordination, VIP convoys, or dignitary escort. |
| `/core-services/transportation-service` | `/transportation-services` | Existing: broad service overview, general positioning. New: senior medical transport, suburban private car, hotel-venue loops, B2B recurring accounts, underserved persona segments. |
| `/core-services/wedding-service` | `/wedding-limousine-services` | Existing: wedding limo vehicle and bridal arrival. New: full wedding weekend logistics — all vehicle types, guest shuttles, airport arrivals, rehearsal dinner, day-after brunch, planner coordination. |

---

## 13. Hero Image Assignment

| Page | Image | Source |
|---|---|---|
| `/core-services` (landing) | `hero-services.jpg` | Existing |
| `airport-shuttle` | `airport-ohare-midway.jpg` | Existing |
| `bus-charter` | `hero-new-bus-rental.jpg` | Existing |
| `chauffeur-service` | `chauffeur-hero.jpg` | Existing |
| `limousine-service` | `hero-special-event.jpg` | Existing |
| `transportation-escort` | `limousine-professional.jpg` | Existing |
| `transportation-service` | `corporate-limo.jpg` | Existing |
| `wedding-service` | `wedding-hero.jpg` | Existing |

No new images required for initial build. Dedicated per-pillar hero images can be sourced and swapped without changing page structure.

---

## 14. Build Checklist (When Approved)

- [ ] Re-read `docs/seo/stopngo.claude.gbp.services.txt` and `docs/seo/stopngo.google.gbp.services.txt` in full
- [ ] Re-read `docs/StopAndGo.Personas.Claude.md` and `docs/StopAndGo.Industries.Claude.md`
- [ ] Add route group to `routes/main-site.php`
- [ ] Create `resources/views/pages/core-services/` directory
- [ ] Build `x-sections.core-services-pillar-grid` component
- [ ] Build `x-sections.core-services-differentiator-band` component
- [ ] Build `index.blade.php` (landing page)
- [ ] Build 7 pillar `.blade.php` files (one at a time, re-reading GBP files before each)
- [ ] Verify each pillar page hits 2,000 word minimum before marking complete
- [ ] All `@push('structured-data')` blocks: LocalBusiness + Service + Product ItemList + BreadcrumbList + FAQPage
- [ ] Discuss nav link for "Core Services" with user before adding
- [ ] Add all 8 new pages to `docs/hero-standardization.md` page status table
- [ ] Add 2 new components to `docs/converted-blogs.md` component library
- [ ] Run `php artisan optimize:clear` after adding routes
- [ ] Verify all 8 URLs return 200
- [ ] Confirm page scanner at `/page-management` detects all components on each page
