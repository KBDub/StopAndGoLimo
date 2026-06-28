# Core Service Pillars — Architecture & Content Blueprint

> Created: 2026-06-27
> Status: Blueprint — MNC (no page files, routes, or components built yet)
> Author reference: `docs/seo/stopngo.claude.gbp.services.txt`, `docs/seo/stopngo.google.gbp.services.txt`, `docs/hero-standardization.md`
> Persona source: `docs/StopAndGo.Personas.Claude.md`, `docs/StopAndGo.Personas.Gemini.pdf` (PDF — unreadable by agent; themes extracted from GBP copy)
> Industry source: `docs/StopAndGo.Industries.Claude.md`, `docs/StopAndGo.Industries.Gemini.pdf` (PDF — unreadable by agent; themes extracted from GBP copy)

---

## 1. Purpose

Stop & Go has added 7 new Google Business Profile (GBP) categories, each with 30 services. These categories represent the true breadth of the business, which is not visible on the current website. This document defines a new section of the site that:

- Creates a "Core Service Pillars" hub at `/core-services` (the landing page)
- Creates 7 deep-content service pages under `/core-services/<slug>`
- Drives voice search, long-tail SEO, and GBP relevance for all 7 GBP categories
- Speaks directly to personas and industry verticals in plain, conversational language
- Does not cannibalize existing pages (see Section 9)

No e-commerce, no shopping, no products. Service information and quote conversion only.

---

## 2. The 7 Service Pillars

Derived from the 7 GBP category IDs in the services files.

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
    Route::get('/airport-shuttle',      fn () => view('pages.core-services.airport-shuttle'))->name('airport-shuttle');
    Route::get('/bus-charter',           fn () => view('pages.core-services.bus-charter'))->name('bus-charter');
    Route::get('/chauffeur-service',     fn () => view('pages.core-services.chauffeur-service'))->name('chauffeur-service');
    Route::get('/limousine-service',     fn () => view('pages.core-services.limousine-service'))->name('limousine-service');
    Route::get('/transportation-escort', fn () => view('pages.core-services.transportation-escort'))->name('transportation-escort');
    Route::get('/transportation-service',fn () => view('pages.core-services.transportation-service'))->name('transportation-service');
    Route::get('/wedding-service',       fn () => view('pages.core-services.wedding-service'))->name('wedding-service');
});
```

### View Files

```
resources/views/pages/core-services/
├── index.blade.php              ← landing page (/core-services)
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

Per the requirement: no new components for service pillar pages. Two new `x-sections.*` components are needed exclusively for the `/core-services` landing page. Both must stay fully branded (Twilight Luxe palette, Poppins/Montserrat, sharp corners, no all-caps except nav).

---

### 4.1 `x-sections.core-services-pillar-grid`

**Purpose:** Clickable rectangular tile grid. One tile per pillar. The visual hub of the landing page — helps users navigate to the right service and helps search engines understand the 7-pillar structure.

**Visual spec:** Inspired by the sign-categories pattern at `https://top-5-pct.replit.app/signs#sign-categories`. Each tile is a full-width rectangular banner (not a small card) with:
- Navy background (`var(--navy)`)
- A large champagne pillar number or icon treatment on the left
- Pillar name in H3 (Poppins, white, bold)
- 2-sentence description (Montserrat, `var(--cloud)`, 14-15px)
- Champagne right-arrow or chevron
- Hover: background shifts to `var(--navy-light)`, left champagne border 4px appears
- Full tile is an `<a>` tag linking to `/core-services/<slug>`
- Desktop: 2-column grid. Mobile: 1-column stack.

**Props:**
```
id          string   Section anchor. Default: 'pillar-grid'
```

**Content (hardcoded in component — 7 tiles):**

| # | Pillar | Description (in tile) |
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

**Purpose:** Full-width credibility/differentiator section that sits below the pillar grid. Answers the voice search question: "Why should I choose Stop & Go for all of these services?" Rich prose — high word count, no images.

**Visual spec:**
- `var(--cloud-light)` background
- Left-aligned H2 with champagne underbar (matches `our-story` pattern)
- Two-column prose layout on desktop, single column on mobile
- Left column: 4 champagne-bordered credibility blocks (similar to `limo-services-grid` cards but with longer copy — 80-100 words each)
- Right column: 3 longer prose paragraphs (100-120 words each) + CTA button block
- No images, no icons — pure typography

**Props:**
```
id          string   Section anchor. Default: 'why-stop-and-go'
```

**Left column — 4 credibility cards:**

1. **Background-Checked on Every Ride** — What it means in practice: FBI fingerprint screening, driving record review, drug testing, annual re-certification. Ties to persona: corporate travel managers who need documentation, parents sending prom groups, hospitals coordinating patient transport.

2. **Real-Time Flight Tracking on Every Airport Run** — What it means: dispatch monitors radar-level flight data, adjusts pickup automatically, chauffeur is at the gate when wheels touch down, not when the app says the flight "arrived." Ties to persona: frequent business traveler, family vacation, senior airport pickup.

3. **Flat-Rate Pricing With No Surge, Ever** — What it means: price locks at booking, no meter running, no peak-hour adjustment, no event-night surge, no surprise invoice. Ties to persona: corporate accounts, wedding couples on a budget, prom families splitting costs.

4. **24/7/365 Dispatch, Not a Voicemail Box** — What it means: a real dispatcher answers at 3am, pre-dawn airport runs are no problem, holiday coverage never lapses, late-night party bus returns have a guaranteed ride home. Ties to persona: all personas — everyone travels off-hours sometimes.

**Right column — 3 prose paragraphs (copy to be written at build time):**

Topics:
- Paragraph 1: The Stop & Go standard and how it applies equally across all 7 service pillars. No matter which service you book, the pre-trip vehicle inspection, the early arrival, the uniformed chauffeur, and the locked flat rate are always part of it. This consistency is what makes us the preferred provider for corporate accounts that need to send different types of vehicles on different days of the week.
- Paragraph 2: Local knowledge and the Chicagoland advantage. Stop & Go is based in New Lenox at 400 E Lincoln Hwy, which puts us within practical distance of every suburb on the I-80, I-55, I-88, and I-355 corridors. Our chauffeurs know the fastest routes to O'Hare and Midway from every Will County community, know which stadium entrances are closest to the parking gates, and know the Naperville restaurant district, the Aurora Fox Valley venues, and the Chicago neighborhood bar corridors by name.
- Paragraph 3: Industries and verticals that rely on us. Legal and financial firms in the I-88 corridor, healthcare systems in Joliet and the southwest suburbs, manufacturing and logistics companies along the I-80 industrial corridor, hospitality groups managing hotel-to-venue shuttle loops, and event planning companies who need a single vendor to cover 200 guests across 4 vehicle types on a wedding Saturday. We handle all of it under one roof.

---

## 5. Landing Page Section Sequence (`/core-services/index.blade.php`)

```
@push('structured-data')  ← Service + BreadcrumbList JSON-LD
<x-layouts.page ...>

  <x-sections.category-hero />           ← hero per standardization rules
  <x-sections.info-strip />              ← brief intro to "Core Service Pillars" concept
  <x-sections.core-services-pillar-grid />   ← NEW — 7 tiles
  <x-sections.core-services-differentiator-band />  ← NEW — credibility band
  <x-sections.our-story />               ← brand timeline (navy, existing)
  <x-sections.review-slider />
  <x-sections.faq preset="general" />
  <x-sections.share-your-experience />
  <x-sections.map-contact-section />
  <x-ui.banner-thin-cloud />
  <x-sections.base-footer />

</x-layouts.page>
```

### Landing Page Hero Spec

| Prop | Value |
|---|---|
| `heading` | `"Our Core"` |
| `headingBold` | `"Service Pillars"` |
| `:headingTwoLines` | `false` |
| `subtitle` | `"Seven service categories, one trusted provider"` |
| `description` | 150-200 words. Full legal name. First person plural. All customer types. Reference O'Hare, Midway, Will County, Chicagoland. 7th grade reading level. |
| `buttonText` | `"Get a Free Quote"` |
| `buttonHref` | `"/get-a-quote"` |
| `image` | `hero-services.jpg` (existing) — or a new image if available |
| `imagePosition` | `"center center"` |

### Landing Page Meta

| Field | Value |
|---|---|
| `title` | `"Core Service Pillars — Stop & Go Airport Shuttle & Limo"` |
| `metaDescription` | `"Seven professional transportation services under one roof. Airport shuttles, chauffeurs, limousines, bus charters, wedding transport, and more. Chicagoland. (815) 585-6922."` |
| `currentPage` | `"our-services"` |

---

## 6. Service Pillar Page Template

Every one of the 7 pillar pages follows this section sequence. The sequence does not change. What changes on every page is the content fed into each section's props.

```
@push('structured-data')  ← Service + BreadcrumbList JSON-LD
<x-layouts.page ...>

  <x-sections.category-hero />           ← hero, pillar-specific image
  <x-sections.travel-in-style />         ← pillar-specific prose, 100-150w body
  <x-sections.info-strip />              ← 80-100w, key differentiator statement
  [COMPONENT A — see table in §7]        ← first reused mid-section
  [COMPONENT B — see table in §7]        ← second reused mid-section
  <x-sections.three-steps :inverted="true" />
  <x-sections.free-instant-quote />      ← pillar-specific bullets, closing
  <x-sections.review-slider />
  <x-sections.faq preset="[pillar]" />   ← closest matching preset
  <x-sections.share-your-experience />
  <x-sections.map-contact-section />
  <x-ui.banner-thin-cloud />
  <x-sections.base-footer />

</x-layouts.page>
```

### Breadcrumb JSON-LD Pattern (all pillar pages)

```json
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",                "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services",       "item": "https://newlenoxlimoservice.com/core-services" },
        { "@@type": "ListItem", "position": 3, "name": "[Pillar Name]",       "item": "{{ request()->url() }}" }
    ]
}
```

---

## 7. Per-Pillar Content Briefs

Each brief covers: SEO angle, component assignment, hero image, FAQ preset, meta copy, and the unique content that must appear on this page and NOWHERE else.

---

### 7.1 Airport Shuttle Service — `/core-services/airport-shuttle`

**GBP category:** `gcid:airport_shuttle_service`

**Unique SEO angle:** The operational mechanics of professional airport shuttle service — how flight tracking works, what "meet and greet" means vs. curbside pickup, why a dedicated private transfer is different from a shared ride, and what to do if your flight is delayed. No other page on the site covers the step-by-step process of what happens from when you book an airport transfer to when you are in the vehicle.

**Components A & B:**
- A: `x-sections.limo-process-steps` — re-label section heading via `id` prop, keep component as-is
- B: `x-sections.limo-booking-timeline` — speaks directly to airport booking lead times

**Hero image:** `airport-ohare-midway.jpg` (existing, used on `/airport-shuttle-ohare-midway` — different page, can share)

**FAQ preset:** `"airport"` (if it exists) or `"general"`

**Persona themes to thread through every prose block:**
- *The Frequent Business Traveler* — flies O'Hare-to-Midway corridor weekly, has early morning meetings, cannot risk a late pickup, uses corporate billing
- *The Family Vacation Starter* — 4 people, luggage for 2 weeks, traveling with a child car seat, first time leaving from Midway
- *The Senior Going Alone* — single traveler, pre-dawn flight, no family available to drive, needs meet-and-greet not curbside scramble
- *The Out-of-Town Guest* — arriving at O'Hare for a Will County wedding, needs someone holding a sign at baggage claim

**Industry themes:**
- Legal and financial services firms in the I-88 corridor (regular executive airport runs)
- Healthcare systems (travel nurses, administrators with conference travel)
- Logistics and manufacturing (Will County industrial base — Caterpillar, Amazon, USPS, food distribution)

**Key voice-search phrases to answer natively in copy:**
- "What happens if my flight is delayed?" → Flight tracking adjusts pickup automatically, grace period built in, no extra charge
- "Is someone waiting when I land?" → Yes. Meet-and-greet means your chauffeur is inside baggage claim with a sign bearing your name before your wheels touch down
- "Can you take my whole family to the airport?" → Yes. Luxury SUVs hold up to 6 passengers with luggage. Group shuttle options for larger families or wedding parties
- "Do you go to Gary Airport or Chicago Executive?" → Yes, both. Same flat-rate model
- "How early should I book an airport shuttle?" → 24-48 hours minimum, same-day is often available

**Meta title:** `"Airport Shuttle Service — O'Hare & Midway | Stop & Go"`
**Meta description:** `"Flat-rate airport shuttle service to O'Hare and Midway from New Lenox, Naperville, Joliet, and all of Will County. Real-time flight tracking, meet-and-greet, 24/7. Call (815) 585-6922."`

---

### 7.2 Bus Charter — `/core-services/bus-charter`

**GBP category:** `gcid:bus_charter`

**Unique SEO angle:** Group travel logistics — how charter buses are right-sized by headcount, what a single-vehicle approach does for group cohesion, and which event types are best served by a charter bus vs. a smaller limo. Covers the full spectrum of charter occasions from Quinceañera courts to corporate convention teams to church day trips. No existing page covers group charter with this depth.

**Components A & B:**
- A: `x-sections.party-bus-occasions` — directly maps to charter use cases
- B: `x-sections.party-bus-advantage` — group-vs-caravan argument applies equally to charter

**Hero image:** Use `hero-new-bus-rental.jpg` (existing, used on `/new-bus-rental` which is a different intent page)

**FAQ preset:** `"party-bus"` (closest match) or `"general"`

**Persona themes:**
- *The Corporate Event Planner* — organizing a team outing for 40 people, needs centralized billing, single point of contact, insured and licensed operator
- *The Quinceañera Family* — coordinating court of honor, family, and guests across church, photo location, and reception venue; multi-stop, multi-group logistics
- *The Church Group Coordinator* — annual outing for 55 seniors, needs a clean, accessible vehicle, no alcohol, professional driver, confirmed drop-off and pickup
- *The Convention Attendee Team* — group flying into O'Hare, needs a bus to McCormick Place or the convention hotel, luggage capacity matters

**Industry themes:**
- Hospitality and hotel groups running venue shuttle loops
- Healthcare systems doing team-building outings
- Faith communities and houses of worship
- Manufacturing and corporate campuses along I-80 and I-88

**Key voice-search phrases:**
- "How many people fit on a charter bus?" → We right-size to your group — mini buses for 20, full motorcoaches for 55. We recommend the right vehicle when you get a quote
- "Can a charter bus do multiple stops?" → Yes. We plan the full route around your itinerary before the day starts
- "What is the difference between a party bus and a charter bus?" → Answered directly — charter buses are built for organized group transit; party buses add lighting and sound for celebrations
- "Is alcohol allowed on a charter bus?" → Policy explained in plain language
- "Do you do school group charters?" → Yes, background-checked drivers, IDOT inspected, parent communication available

**Meta title:** `"Bus Charter Service — Groups of Every Size | Stop & Go"`
**Meta description:** `"Charter bus service across Will County and Chicagoland. Weddings, corporate events, church groups, concerts, and more. Right-sized for your group. Call (815) 585-6922."`

---

### 7.3 Chauffeur Service — `/core-services/chauffeur-service`

**GBP category:** `gcid:chauffeur_service`

**Unique SEO angle:** What makes a Stop & Go chauffeur different from any driver with a license — the screening process, the professional attire standard, the etiquette training, the pre-trip briefing, the flight-tracking protocol, and the difference between an hourly standby chauffeur and a point-to-point hire. This page is the deepest content anywhere on the site about the person behind the wheel. No existing page covers chauffeur quality and process at this level.

**Components A & B:**
- A: `x-sections.limo-services-grid` — reframes as "Services a Private Chauffeur Handles" — use `id="chauffeur-services"` prop
- B: `x-sections.party-bus-advantage` — the "why a private chauffeur beats any alternative" argument

**Hero image:** `chauffeur-hero.jpg` (existing, used on `/chauffeurs` — different intent, can share for a core-services page)

**FAQ preset:** `"general"` (no specific chauffeur preset exists yet)

**Persona themes:**
- *The C-Suite Commuter* — turns drive time into work time, needs a quiet cabin and reliable ETA, has a corporate account, uses the same chauffeur weekly
- *The VIP Client Host* — entertaining a client from out of town, needs a pristine Cadillac or Mercedes at the airport, driver must be presentable and discreet
- *The Senior Needing a Medical Driver* — going to a specialist appointment, needs door-to-door assistance, cannot rely on family availability
- *The Corporate Roadshow Executive* — 6 back-to-back meetings along I-88, needs multi-stop precision and a chauffeur who adapts when the schedule shifts

**Industry themes:**
- Legal and financial services (attorney client entertainment, C-suite meetings)
- Healthcare (senior medical transport, hospital administrator travel)
- Consulting and tech (I-88 corridor corporate campuses — Naperville, Lisle, Downers Grove)
- Real estate (client site tours, developer meetings)

**Key voice-search phrases:**
- "What is a private chauffeur service?" → Answered thoroughly — not a taxi, not a rideshare, it is a professional who is assigned to you for your trip or your day
- "How are your drivers screened?" → FBI fingerprint background check, driving record, drug test, annual renewal
- "Can I keep a chauffeur on standby for the day?" → Yes. Hourly standby chauffeur service is available. Rate locked at booking
- "Will my chauffeur help with my luggage?" → Yes, always. Door opened, luggage handled, no expectation of tip (gratuity included in flat rate)
- "Can you arrange a chauffeur for my visiting client?" → Yes. VIP meet-and-greet at O'Hare or Midway, named sign, luggage to the vehicle

**Meta title:** `"Private Chauffeur Service — Chicagoland | Stop & Go"`
**Meta description:** `"Professional chauffeur service for executive travel, C-suite commutes, VIP clients, and private transfers. Background-checked, uniformed, on time. Call (815) 585-6922."`

---

### 7.4 Limousine Service — `/core-services/limousine-service`

**GBP category:** `gcid:limousine_service`

**Unique SEO angle:** The breadth of occasions where a limousine is the right vehicle — not just weddings and proms, but brewery tours, FBO private aviation arrivals, gala fundraisers, milestone anniversaries, and Sweet 16 celebrations. This page goes wide on occasions while the existing `/limousine-services` page focuses on the vehicle and the professional. No duplication because this page is about occasion-matching, not vehicle specs.

**Components A & B:**
- A: `x-sections.limo-services-grid` — re-use with `id="limo-occasions-grid"` to cover the occasion variety
- B: `x-sections.limo-booking-timeline` — answers "how early should I book a limo for [X occasion]?" directly

**Hero image:** `hero-special-event.jpg` (existing, used on `/special-event-limousine` — different intent, acceptable)

**FAQ preset:** `"general"`

**Persona themes:**
- *The Bride and Groom* — most important day, want a flawless arrival, choosing between stretch limo and luxury SUV, need advice on timing
- *The Prom Parent* — wants their kid to have the experience, concerned about safety, wants a background-checked driver and confirmed return pickup
- *The Anniversary Couple* — 25th wedding anniversary dinner in Chicago, want to splurge on the ride, never booked a limo before
- *The FBO Private Aviation Traveler* — landing at Midway or Chicago Executive in a private jet, expects ramp-side pickup by a professional in a clean black vehicle

**Industry themes:**
- Hospitality (hotel-to-event limo loops for conference guests)
- Entertainment and media (talent transportation to Chicago venues)
- Real estate (client impressions — Naperville and DuPage luxury home tours)

**Key voice-search phrases:**
- "What occasions are limousines good for?" → All of them answered: weddings, proms, birthdays, bachelorettes, anniversaries, galas, graduation, quinceañera, Sweet 16, brewery tours, FBO arrivals, date nights, corporate events
- "Is a limousine worth it for prom?" → Yes — answered by addressing the safety, the experience, and the flat-rate cost split by the group
- "What is the difference between a stretch limo and a luxury SUV?" → Answered with passenger count and use-case guidance
- "How much does a limousine cost in the Chicago suburbs?" → Answered by directing to flat-rate quote, no published pricing but explanation of what affects cost
- "Can I book a limo to pick someone up from a private jet?" → FBO ramp-side and tarmac coordination explained

**Meta title:** `"Limousine Service for Every Occasion — Chicagoland | Stop & Go"`
**Meta description:** `"Stretch limousines, luxury SUVs, and executive sedans for weddings, proms, anniversaries, galas, and every celebration. Flat-rate pricing. Call (815) 585-6922."`

---

### 7.5 Transportation Escort — `/core-services/transportation-escort`

**GBP category:** `gcid:transportation_escort_service`

**Unique SEO angle:** This is the most distinct and least-covered service on the site. Transportation escort means coordinated multi-vehicle movement for VIP clients, executive convoys, large wedding-day vehicle fleets, dignitary arrivals, and high-value situations where a single chauffeur in a single vehicle is not enough. The page must define clearly what escort service means, who needs it, and how Stop & Go coordinates it. Nobody else on the site has touched this topic.

**Components A & B:**
- A: `x-sections.limo-process-steps` — reframed as "How a Transportation Escort Is Coordinated" via `id="escort-process"` — steps apply (booking, briefing, vehicle prep, arrival, the movement, drop-off confirmation)
- B: `x-sections.limo-services-grid` — reframed as "Situations That Require an Escort" — 6 cards covering convoy, VIP arrival, wedding fleet, executive protection detail, airport group with security, corporate leadership visit

**Hero image:** `limousine-professional.jpg` (existing, also on `/new-lenox-limo-service` — different intent, acceptable for a different section)

**FAQ preset:** `"general"`

**Persona themes:**
- *The Corporate Security Coordinator* — protecting a visiting executive, needs vehicles that communicate with each other, needs discretion
- *The Wedding Planner* — coordinating 4 vehicles across ceremony, photos, and reception — one lead vehicle, 3 following, all on the same schedule
- *The Executive Assistant* — booking travel for a CEO who has back-to-back site visits with no room for error on timing
- *The Event Production Manager* — handling artist transportation at a corporate event — lead vehicle from airport, escort to venue, holding vehicle for departure

**Industry themes:**
- Legal and financial (high-profile client arrivals)
- Healthcare (hospital executive and board visit coordination)
- Government and civic (official visits, community events)
- Corporate real estate and development (site visit logistics for investors)

**Key voice-search phrases:**
- "What is a transportation escort service?" → Defined plainly: more than one vehicle moving in coordination, professional communication between drivers, one dispatch point of contact
- "Can you coordinate multiple limos at once?" → Yes. Multi-vehicle dispatch is handled centrally. All vehicles briefed together.
- "Do you provide VIP escort service in Chicago suburbs?" → Yes, explained with specific use cases
- "How do you handle a wedding with 4 different vehicles?" → Answered with the coordination process
- "What does an executive transportation escort include?" → Answered fully — advance route survey, vehicle inspection, driver briefing, communication protocol, contingency plan

**Meta title:** `"Transportation Escort Service — Multi-Vehicle | Stop & Go"`
**Meta description:** `"Coordinated multi-vehicle escort for VIP clients, wedding fleets, executive convoys, and dignitary arrivals across Chicagoland. One dispatch contact. Call (815) 585-6922."`

---

### 7.6 Transportation Service — `/core-services/transportation-service`

**GBP category:** `gcid:transportation_service`

**Unique SEO angle:** This is the broadest pillar — "transportation service" as a category covers everything that doesn't fit neatly into the other 6. The page leans into underserved persona segments: senior door-to-door medical transport, suburban private car service for families without a driver, point-to-point runs that are not airport-related, and groups needing a climate-controlled van for a day trip. These are real needs that no other page on the site addresses directly.

**Components A & B:**
- A: `x-sections.party-bus-occasions` — reframed as "When You Need Private Transportation" via `id="transport-occasions"` — covers the wide occasion spectrum
- B: `x-sections.limo-services-grid` — reframed as "Transportation Solutions We Provide" via `id="transport-solutions"`

**Hero image:** `corporate-limo.jpg` (existing, used on `/limo` TIS section — not used as hero anywhere)

**FAQ preset:** `"general"`

**Persona themes:**
- *The Senior Without a Driver* — needs reliable, respectful door-to-door service for medical appointments, grocery runs, or family events; adult children want peace of mind
- *The Suburban Family* — no designated driver for a night out, wants a private van not a rideshare; safety and reliability matter more than cost
- *The Out-of-Town Business Visitor* — in Will County for two days of meetings, needs a vehicle and driver throughout, does not want to rent a car
- *The Event Organizer* — needs a hotel-to-venue shuttle loop for 30 guests over 4 hours; wants one billing contact, not six separate ride apps

**Industry themes:**
- Healthcare (patient transport, staff shuttles between campuses)
- Hospitality (hotel shuttle programs, guest airport transfers)
- Legal (client and deponent transport, courthouse runs)
- Education (private school group transport, college campus visits)

**Key voice-search phrases:**
- "Can someone drive my elderly parent to a doctor appointment?" → Yes. Senior door-to-door service explained with compassion and specifics
- "Is there a private car service in Will County?" → Yes. Explained with service area specificity (New Lenox, Joliet, Frankfort, Mokena, Naperville, Bolingbrook)
- "What is the difference between a transportation service and an Uber?" → Answered directly — licensed, insured, professional, flat-rate, no surge, background-checked driver
- "Can you shuttle hotel guests to a venue?" → Yes. Hotel-to-venue shuttle loops described
- "Do you have PCI-compliant booking?" → Yes, explained in plain terms

**Meta title:** `"Private Transportation Service — Will County | Stop & Go"`
**Meta description:** `"Private ground transportation for families, seniors, corporate visitors, and event shuttles across Will County and Chicagoland. Flat-rate. Always on time. Call (815) 585-6922."`

---

### 7.7 Wedding Service — `/core-services/wedding-service`

**GBP category:** `gcid:wedding_service`

**Unique SEO angle:** Complete wedding day transportation as a logistics system — not just a car for the bride. This page covers every vehicle needed on a wedding day in one place: bridal party limo, groomsmen SUV, guest shuttle loop, out-of-town guest airport pickup, rehearsal dinner transport, and day-after brunch run. The existing `/wedding-limousine-services` page covers wedding limos. This page covers the full logistics system for the whole wedding weekend. No duplication.

**Components A & B:**
- A: `x-sections.limo-booking-timeline` — repurposed as wedding planning timeline: engagement (12 months), venue selection (10 months), transportation booking (8-10 months), final headcount (30 days), final route confirmation (1 week)
- B: `x-sections.party-bus-occasions` — reframed as "Every Wedding Transportation Need" via `id="wedding-occasions"` — 6 cards: bridal party limo, groomsmen SUV, guest shuttle, airport arrivals, rehearsal dinner, day-after brunch

**Hero image:** `wedding-hero.jpg` (existing, used on `/wedding-limousine-services` — different enough intent, but consider a new image if available. If sharing, use `imagePosition="center top"` to show different crop)

**FAQ preset:** `"general"` (no wedding-specific preset exists; create one if building this page is approved)

**Persona themes:**
- *The Bride and Groom* — want zero stress on their wedding day, trust the transportation coordinator completely, need one phone number for everything
- *The Wedding Planner* — professional coordinator who needs a transportation vendor who picks up the phone, confirms every detail in advance, and never creates a problem on the day
- *The Mother of the Bride* — concerned about getting elderly relatives from the hotel to the venue safely, wants a thoughtful driver who will help someone into the vehicle
- *The Out-of-Town Guest* — flying in from out of state, has no way to get from the hotel to the venue, needs a shuttle that runs on the couple's timeline

**Industry themes:**
- Hospitality (hotel blocks, venue shuttle coordination)
- Event planning (wedding planners as referral partners)
- Photography and media (coordination around photo-shoot stops and photo locations)

**Key voice-search phrases:**
- "How far in advance should I book wedding transportation?" → 8-12 months for spring and fall Saturdays in Chicagoland. Answered specifically
- "Do you do wedding guest shuttles?" → Yes. Loop shuttles between hotel blocks and venue, described in detail
- "Can you pick up guests from the airport for my wedding?" → Yes. Named sign at baggage claim, flight tracked, multiple arrivals on same day
- "What vehicles do you recommend for a wedding party of 12?" → Vehicle matching guidance by party size
- "Do you coordinate with our wedding planner?" → Yes. Planner receives a direct contact and pre-wedding confirmation call

**Meta title:** `"Wedding Transportation Service — Complete Day Coverage | Stop & Go"`
**Meta description:** `"Complete wedding transportation — bridal party, guest shuttles, airport arrivals, and rehearsal dinners. One vendor for the full weekend. Call (815) 585-6922."`

---

## 8. Copy Rules for All Pillar Pages

These rules apply to every prose block on every page in this section. They are in addition to the site-wide rules in `docs/branding-requirements.md`.

| Rule | Requirement |
|---|---|
| Reading level | 7th grade. Short sentences. Plain words. No jargon. |
| Voice | First person plural throughout. "We," "our," "us." Never third person about Stop & Go. |
| Word count | Very high. Hero description: 150-200 words. TIS body: 100-150 words. Info-strip: 80-100 words. Each component section contributes 300-600 words. FIQ: 100-150 words of bullets and closing. Total per page: 1,500-2,500 words minimum. |
| Em dashes | Banned. Use a comma, period, or rephrase. |
| All-caps | Banned except nav links. |
| Negative keywords | Banned: taxi, cab, cheap, budget, discount, rideshare, Uber, Lyft, shared ride. |
| Fake stats | Banned. No "95% satisfaction" or "over 10,000 rides" unless documented and confirmed. |
| British spelling | Banned. Use American spellings only. |
| Voice search phrasing | Every page must natively answer at least 5 "how," "what," "can you," or "do you" questions in prose. Do not use FAQ-style Q&A formatting in the body copy — weave the answers into paragraphs. |
| Long-tail phrases | Thread GBP service names naturally into body copy. Example: "our airport shuttle service" not just "we pick you up." |
| Company name | Full legal name "Stop & Go Airport Shuttle Service, Inc." in every hero description. Short form "Stop & Go" acceptable everywhere else. |
| No double hyphens | Never. |

---

## 9. Cannibalization Avoidance Matrix

Each pillar page is differentiated from the existing page it is most likely to overlap with.

| Pillar Page | Closest Existing Page | How They Differ |
|---|---|---|
| `/core-services/airport-shuttle` | `/airport-shuttle-ohare-midway` | Existing: airports, booking, service area. New: process mechanics, flight tracking explained, persona scenarios, Gary/PWK airports. |
| `/core-services/bus-charter` | `/party-bus-rental-chicago` | Existing: party/celebration bus. New: organized group charter, corporate/church/school/quinceañera, right-sizing by headcount. |
| `/core-services/chauffeur-service` | `/chauffeurs` | Existing: who our chauffeurs are. New: what a chauffeur does step-by-step, when you need one vs. just a car, hourly standby, VIP client hosting. |
| `/core-services/limousine-service` | `/limousine-services` | Existing: classic limo positioning, fleet, chauffeur excellence. New: occasion matching, 30+ use cases from GBP, FBO/private aviation, every milestone. |
| `/core-services/transportation-escort` | None — unique | Entirely new topic. Multi-vehicle coordination, convoy, VIP escort, no existing page covers this. |
| `/core-services/transportation-service` | `/transportation-services` | Existing: broad service overview. New: senior medical transport, suburban private car, hotel-to-venue shuttles, underserved persona segments. |
| `/core-services/wedding-service` | `/wedding-limousine-services` | Existing: wedding limo vehicle and bridal arrival. New: full wedding weekend logistics system, all vehicle types, guest shuttles, airport arrivals, wedding planner coordination. |

---

## 10. JSON-LD Schema for Each Page

### Landing Page (`/core-services`)

```json
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Core Service Pillars — Stop & Go Airport Shuttle & Limo",
    "description": "Seven professional transportation service categories under one roof across Chicagoland.",
    "provider": { "@@type": "LocalBusiness", "name": "Stop & Go Airport Shuttle Service Inc." }
}
```

### Service Pillar Pages

```json
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "[Pillar Name]",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "(815) 585-6922",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": { "@@type": "State", "name": "Illinois" },
    "description": "[pillar meta description]"
}
```

---

## 11. Hero Image Assignment Summary

| Page | Image | Source |
|---|---|---|
| `/core-services` (landing) | `hero-services.jpg` | Existing — generic services hero |
| `airport-shuttle` | `airport-ohare-midway.jpg` | Existing — airport hero |
| `bus-charter` | `hero-new-bus-rental.jpg` | Existing — bus rental hero |
| `chauffeur-service` | `chauffeur-hero.jpg` | Existing — chauffeur portrait |
| `limousine-service` | `hero-special-event.jpg` | Existing — limo event |
| `transportation-escort` | `limousine-professional.jpg` | Existing — professional exterior |
| `transportation-service` | `corporate-limo.jpg` | Existing — corporate sedan |
| `wedding-service` | `wedding-hero.jpg` | Existing — wedding hero |

All images must be in `/images/heroes/` or `/images/sections/` and all exist in the current library. No new images are required for initial build. A dedicated hero per pillar can be sourced and swapped in later without changing page structure.

---

## 12. Build Checklist (When Approved)

- [ ] Add route group to `routes/main-site.php`
- [ ] Create `resources/views/pages/core-services/` directory
- [ ] Build `x-sections.core-services-pillar-grid` component
- [ ] Build `x-sections.core-services-differentiator-band` component
- [ ] Build `index.blade.php` (landing page)
- [ ] Build 7 pillar page `.blade.php` files
- [ ] Add "Core Services" link to nav if desired (discuss with user)
- [ ] Add all pillar pages to `docs/hero-standardization.md` page status table
- [ ] Add new components to `docs/converted-blogs.md` component library
- [ ] Run `php artisan optimize:clear` after adding routes
- [ ] Verify all 8 URLs return 200
- [ ] Screenshot each page at desktop width
- [ ] Submit pages to Google Search Console for indexing

---

## 13. Notes on Missing Source Docs

The following files were referenced in the build brief but do not exist as readable files in the project:

- `docs/StopAndGo.Personas.Claude.md` — not found
- `docs/StopAndGo.Personas.Gemini.pdf` — PDF, cannot be read by agent
- `docs/StopAndGo.Industries.Claude.md` — not found
- `docs/StopAndGo.Industries.Gemini.pdf` — PDF, cannot be read by agent

The persona and industry themes in this document (Section 7, per-pillar briefs) were derived from the GBP services copy in `docs/seo/stopngo.claude.gbp.services.txt` and `docs/seo/stopngo.google.gbp.services.txt`, which contain extensive persona-specific service descriptions. Before building, please either:

1. Convert the PDFs to text and save them as `.md` files in `docs/`, or
2. Confirm that the persona/industry content in Section 7 above is sufficient for the build

If the PDFs are converted, the per-pillar content briefs should be updated to reflect any additional persona or industry detail found in those documents.
