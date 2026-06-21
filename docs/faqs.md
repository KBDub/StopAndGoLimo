# FAQ System: Status, Architecture, and Implementation Plan

**Last updated:** 2026-06-21
**Status: IMPLEMENTED** — config/faqs.php live, x-sections.faq upgraded, all 32 pages updated.

---

## 1. Current State

All 42 pages that use `<x-sections.faq />` currently pass **no props**, so every page renders the same hardcoded 6-question general set baked into the component's `@props` default. The component already accepts a `:faqs` array prop but nothing uses it yet.

Two FAQ components exist:

| Component | Role |
|---|---|
| `resources/views/components/sections/faq.blade.php` | Full-section accordion used on page files (the one to upgrade) |
| `resources/views/components/ui/faq.blade.php` | Lightweight inline accordion used inside other section components |

---

## 2. Architecture Decision: Single PHP Config File

**Question considered:** Should we use a single data file keyed by city/slug so pages just pass a prop string (e.g., `preset="naperville"`) and the component reads from one place?

**Answer: Yes. Use `config/faqs.php`.**

### Why a PHP config file and not JSON?

A JSON file loaded at runtime requires `file_get_contents()` + `json_decode()` on every page load. A PHP config file is compiled by Laravel's config cache (`php artisan config:cache`) into a single opcode-cached PHP file. After caching, `config('faqs.naperville')` is a sub-microsecond array lookup with zero I/O.

No new controllers, services, or middleware are needed. The config helper is available everywhere in Blade automatically.

### Component prop interface (once implemented)

```blade
{{-- Category preset (named set) --}}
<x-sections.faq preset="airport-shuttle" />

{{-- City/page preset (keyed by slug) --}}
<x-sections.faq preset="naperville" />

{{-- Raw override — still works for one-off cases --}}
<x-sections.faq :faqs="[['question' => '...', 'answer' => '...']]" />

{{-- No props — falls back to general set --}}
<x-sections.faq />
```

### Component logic (once implemented)

```php
@props([
    'preset' => null,
    'faqs'   => null,
])

@php
$faqs ??= $preset
    ? (config('faqs.' . $preset) ?? config('faqs.general'))
    : config('faqs.general');
@endphp
```

Priority: explicit `:faqs` array > `preset` key lookup > `general` default.

### Data file location

**`config/faqs.php`** — returns a flat associative array. Top-level keys are either category preset names or page slugs. Example structure:

```php
<?php
return [

    // ── Category presets ─────────────────────────────────────────
    'general'          => [ /* 6 Q&As */ ],
    'airport-shuttle'  => [ /* 10 Q&As */ ],
    'party-bus'        => [ /* 10 Q&As */ ],
    'prom'             => [ /* 10 Q&As */ ],
    'limousine'        => [ /* 10 Q&As */ ],
    'city-limo'        => [ /* 6 Q&As — generic city template */ ],

    // ── Sports / Event presets ───────────────────────────────────
    'bears-party-bus'       => [ /* 6 Bears-specific Q&As */ ],
    'blackhawks-party-bus'  => [ /* 6 Blackhawks-specific Q&As */ ],
    'bulls-party-bus'       => [ /* 6 Bulls-specific Q&As */ ],
    'concert-party-bus'     => [ /* 6 concert-specific Q&As */ ],
    'golf-party-bus'        => [ /* 6 golf-specific Q&As */ ],
    'six-flags-party-bus'   => [ /* 6 Six Flags-specific Q&As */ ],

    // ── City / page-specific keys ────────────────────────────────
    'new-lenox'    => [ /* 10 Q&As */ ],
    'naperville'   => [ /* 10 Q&As */ ],
    'aurora'       => [ /* 10 Q&As */ ],
    'plainfield'   => [ /* 10 Q&As */ ],
    'bolingbrook'  => [ /* 10 Q&As — corrected */ ],
    'joliet'       => [ /* 10 Q&As — airport template */ ],
    'romeoville'   => [ /* 10 Q&As — airport template */ ],
    'morris'       => [ /* 6 Q&As — corrected */ ],
    'oswego'       => [ /* 6 Q&As */ ],
    'frankfort'    => [ /* 6 Q&As — corrected */ ],
    'elwood'       => [ /* 6 Q&As — corrected */ ],
    'monee'        => [ /* 6 Q&As — corrected */ ],
    'north-aurora' => [ /* 6 Q&As */ ],
    'montgomery'   => [ /* 6 Q&As */ ],
    'mokena'       => [ /* 6 Q&As */ ],
    'orland-park'  => [ /* 6 Q&As */ ],
    'manhattan'    => [ /* 6 Q&As */ ],
    'homer-glen'   => [ /* 6 Q&As */ ],
    'lemont'       => [ /* 6 Q&As */ ],
    'channahon'    => [ /* 6 Q&As — new content needed */ ],
    'lockport'     => [ /* 6 Q&As — new content needed */ ],
    'minooka'      => [ /* 6 Q&As — new content needed */ ],

];
```

---

## 3. FAQ Category Presets

### `general` (6 Q&As)
Used by all service/info/display pages that have no page-specific FAQ.
Source: `docs/stopngo-faqs.json` > `general_faq_set`

Questions:
1. Do you offer group transportation or party bus services?
2. What is your cancellation and refund policy?
3. How far in advance should I book my limousine?
4. What happens if my flight is delayed?
5. Are your prices all-inclusive or are there hidden fees?
6. Do your chauffeurs have professional training and background checks?

### `airport-shuttle` (10 Q&As)
Used by the main airport shuttle page and city area pages that have airport-focused content.
Source: `docs/stopngo-faqs.json` > slug `airport-shuttle-ohare-midway`

Questions cover: pricing, scheduling, early morning service, flight tracking, same-day booking, private vs shared, cancellations, child seats, stops en route, meeting your driver.

### `party-bus` (10 Q&As)
Used by generic party bus pages and city party bus pages without unique sets.
Source: `docs/stopngo-faqs.json` > slug `party-bus-rental-chicago`

Questions cover: cost, passenger capacity, alcohol policy, what's included, advance booking, service area, prom service, multiple stops, smoking policy, damage policy.

### `prom` (10 Q&As)
Used by the prom party bus page.
Source: `docs/stopngo-faqs.json` > slug `prom-party-bus-rental-illinois`

Note: Current live content for this set is thin/generic. Recommend rewriting before going live.

### `limousine` (10 Q&As)
Used by the limousine services page.
Source: `docs/stopngo-faqs.json` > slug `limousine-services`

### `city-limo` (6 Q&As)
A generic 6-question city limo template for city pages that do not have individualized content yet (Channahon, Lockport, Minooka). New content must be written for each. Until written, these pages fall back to `general`.

### Sports and Event Presets (6 Q&As each)
All need new content written. Each set should be specific to the sport/venue/event, not generic party bus boilerplate.

| Preset key | Page | Topics to cover |
|---|---|---|
| `bears-party-bus` | `chicago-bears-party-bus` | Soldier Field parking, game day timing, tailgating, group size, return trips |
| `blackhawks-party-bus` | `chicago-blackhawks-party-bus` | United Center access, game day tips, groups, alcohol policy, season tickets |
| `bulls-party-bus` | `chicago-bulls-party-bus` | United Center access, game day tips, groups, late-night return |
| `concert-party-bus` | `chicago-concert-party-bus-rental` | Venue variety (Wrigley, Allstate, Toyota Park), booking around show times, multi-venue |
| `golf-party-bus` | `chicago-golf-party-bus` | Golf bag storage, early AM pickups, multi-course days, course names in Chicagoland |
| `six-flags-party-bus` | `six-flags-party-bus` | Six Flags Great America (Gurnee), group discounts, all-day rental, return timing |

---

## 4. Page-to-Preset Mapping (All 42 Pages)

Pages are listed with the blade file slug, the preset key they will use, and current status.

### Pages Using Category Presets (no unique data needed)

| Page slug | Preset | Status |
|---|---|---|
| `about-us` | `general` | No change needed |
| `home` | `general` | No change needed |
| `our-services` | `general` | No change needed |
| `bookings-reservations` | `general` | No change needed |
| `service-areas` | `general` | No change needed |
| `gallery` | `general` | No change needed |
| `wedding-limousine-services` | `general` | No change needed |
| `corporate-car-services` | `general` | No change needed |
| `coach-buses` | `general` | No change needed |
| `transportation-services` | `general` | No change needed |
| `special-event-limousine` | `general` | No change needed |
| `town-car-services` | `general` | No change needed |
| `new-bus-rental` | `general` | No change needed |
| `chauffeurs` | `general` | No change needed |
| `airport-shuttle-ohare-midway` | `airport-shuttle` | Needs preset added to blade |
| `party-bus-rental-chicago` | `party-bus` | Needs preset added to blade |
| `party-bus-aurora` | `party-bus` | Needs preset added to blade |
| `party-bus-rental-naperville` | `party-bus` | Needs preset added to blade |
| `prom-party-bus-rental-illinois` | `prom` | Needs preset added to blade |
| `limousine-services` | `limousine` | Needs preset added to blade |
| `chicago-bears-party-bus` | `bears-party-bus` | Needs preset added to blade + new content written |
| `chicago-blackhawks-party-bus` | `blackhawks-party-bus` | Needs preset added to blade + new content written |
| `chicago-bulls-party-bus` | `bulls-party-bus` | Needs preset added to blade + new content written |
| `chicago-concert-party-bus-rental` | `concert-party-bus` | Needs preset added to blade + new content written |
| `chicago-golf-party-bus` | `golf-party-bus` | Needs preset added to blade + new content written |
| `six-flags-party-bus` | `six-flags-party-bus` | Needs preset added to blade + new content written |

### Pages Using City/Page-Specific Presets

| Page slug | Preset key | Q&As | Content bug? | Status |
|---|---|---|---|---|
| `new-lenox-airport-shuttle-limo-service` | `new-lenox` | 10 | No | Needs preset added |
| `naperville-airport-shuttle-limo-service` | `naperville` | 10 | No | Needs preset added |
| `aurora-limo-service` | `aurora` | 10 | No | Needs preset added |
| `plainfield-limousine-shuttle-service` | `plainfield` | 10 | No | Needs preset added |
| `bolingbrook-airport-shuttle-ohare-midway` | `bolingbrook` | 10 | **YES — see §5** | Needs preset + corrected data |
| `24-7-joliet-il-limo-services` | `joliet` | 10 | No | Needs preset added (airport template) |
| `romeoville-airport-shuttle-limo-service` | `romeoville` | 10 | TBD | Needs preset added (airport template) |
| `morris-il-limo-service` | `morris` | 6 | **YES — see §5** | Needs preset + corrected data |
| `oswego-il-limo-service` | `oswego` | 6 | Minor (not in FAQ block) | Needs preset added |
| `24-7-frankfort-il-limo-service` | `frankfort` | 6 | **YES — see §5** | Needs preset + corrected data |
| `24-7-elwood-il-limo-service` | `elwood` | 6 | **YES — see §5** | Needs preset + corrected data |
| `24-7-monee-il-limo-service` | `monee` | 6 | **YES — see §5** | Needs preset + corrected data |
| `24-7-north-aurora-il-limo-service` | `north-aurora` | 6 | No | Needs preset added |
| `24-7-montgomery-il-limo-service` | `montgomery` | 6 | No | Needs preset added |
| `24-7-mokena-il-limo-service` | `mokena` | 6 | No | Needs preset added |
| `24-7-orland-park-il-limo-service` | `orland-park` | 6 | No | Needs preset added |
| `24-7-manhattan-limo-service` | `manhattan` | 6 | No | Needs preset added |
| `24-7-homer-glen-limo-service` | `homer-glen` | 6 | No | Needs preset added |
| `24-7-lemont-il-limo-service` | `lemont` | 6 | No | Needs preset added |
| `24-7-channahon-il-limo-service` | `channahon` | 6 | N/A | Needs new content written, then preset |
| `24-7-lockport-il-limo-service` | `lockport` | 6 | N/A | Needs new content written, then preset |
| `24-7-minooka-il-limo-service` | `minooka` | 6 | N/A | Needs new content written, then preset |

---

## 5. Live Content Bugs to Fix

These pages have incorrect FAQ content on the live site today. The bugs are fixed by entering the correct data in `config/faqs.php` under the city key shown. No blade edits needed for these beyond adding the preset prop.

### `bolingbrook` (bolingbrook-airport-shuttle-ohare-midway)
Q5-Q7 question/answer pairs are jumbled. Q7's question reads "Do you offer corporate accounts for New Lenox businesses?" on a Bolingbrook page.
- Q5 question: "Do you offer Bolingbrook corporate shuttle service?" — answer given is actually the prom answer
- Q6 question: "Do you provide prom limo for Bolingbrook High School?" — answer given is actually the corporate answer
- Q7 question: references "New Lenox businesses" instead of Bolingbrook
Correct data is in `docs/stopngo-faqs.json` under `bolingbrook-airport-shuttle-ohare-midway`. Re-pair and localize before writing to config.

### `morris` (morris-il-limo-service)
The entire FAQ block shows Naperville content verbatim (all 6 questions reference Naperville neighborhoods, Naperville Central/North High Schools, Naperville price ranges). Morris-specific content needs to be written from scratch.

### `frankfort` (24-7-frankfort-il-limo-service)
All 6 FAQ answers are the Aurora wine-tour set pasted verbatim (they say "Aurora" throughout). The JSON entry shows the full Frankfort-specific set to use as replacement.

### `elwood` (24-7-elwood-il-limo-service)
Q1-Q4 are correctly localized to Elwood. Q5 and Q6 are copy-pasted from the Aurora set:
- Q5 answer ends "...last-minute requests for luxury transportation in Aurora."
- Q6 answer is the Aurora night-travel boilerplate.
The JSON entry has the Elwood-localized versions for Q5 and Q6.

### `monee` (24-7-monee-il-limo-service)
Q1-Q5 are correctly localized to Monee. Q6 ("Do you offer full limousine transportation?") has a mis-pasted answer that is generic "request pricing" boilerplate unrelated to the question. A real answer needs to be written.

---

## 6. Implementation Steps (Ordered)

1. ~~**Create `config/faqs.php`**~~ **DONE** — all category presets and city keys written, corrected data for bug pages.
2. ~~**Write new content**~~ **DONE** — 6 sports/event presets, 3 new city presets (Channahon, Lockport, Minooka), Morris full rewrite, Monee Q6 fix.
3. ~~**Upgrade `x-sections.faq`**~~ **DONE** — `preset` prop added with fallback: `:faqs` array > `preset` config key > `general` default.
4. ~~**Update page blade files**~~ **DONE** — 32 pages updated with `preset="..."`. Pages staying on `general` default need no change.
5. ~~**Clear config cache**~~ **DONE** — `php artisan config:cache` run, confirmed successful.
6. ~~**Verify**~~ **DONE** — Aurora (10 localized Q&As) and Frankfort (bug-fixed, Frankfort-specific content) both confirmed correct in browser.

---

## 7. Notes on Data Source

All city/page-specific FAQ data is available in `docs/stopngo-faqs.json`. When populating `config/faqs.php`, use the JSON as the source of truth for all pages except those flagged with `content_issue` in §5. For those, use the corrected versions described in §5 (or the corrected JSON entries where available).

The JSON file remains in `docs/` as a historical reference and audit trail of what was live on the site at time of extraction.
