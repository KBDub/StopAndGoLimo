# Hero Standardization Audit

> Last updated: 2026-06-20

---

## Issues Addressed

### Issue 1 — H1 Split Across Two Lines ✅ RESOLVED

`headingTwoLines` defaulted to `true`, causing `heading` and `headingBold` to render as separate `<span class="block">` elements. Fixed per the rules below.

**Fix applied:** `:headingTwoLines="false"` added to 43 pages via PHP script. Copy revised on 5 additional pages. Home page split is intentional — left unchanged.

### Issue 2 — Subtitle Right-Justification ✅ BY DESIGN

`text-align: right` on the subtitle `<p>` is intentional. No changes made. Not a prop.

### Issue 3 — Button Style ✅ RESOLVED

All pages previously rendered `x-ui.button-outline-light` (ghost white outline). Fixed in the component — one edit covers all pages.

**Fix applied:** `category-hero.blade.php` updated to use `x-ui.button-champagne-gradient` in both the modal and href button branches.

---

## Component Reference

**File:** `resources/views/components/sections/category-hero.blade.php`

| Prop | Default | Notes |
|---|---|---|
| `heading` | `'Elevate Your Travel Experience'` | Normal-weight portion of H1 |
| `headingBold` | `'With Luxury and Comfort'` | Bold portion of H1. Set `headingBold=""` to suppress. |
| `headingTwoLines` | `true` | `false` = heading + headingBold on one line |
| `subtitle` | `'Discover the joy of seamless journeys'` | Always right-aligned — by design |
| `subtitleIn` | `''` | Optional bold second subtitle line |
| `description` | `''` | Optional body paragraph |
| `buttonText` | `'Book a Ride'` | — |
| `buttonHref` | `'/contact'` | `/contact` and `/booking` trigger the contact modal |
| `buttonRadius` | `'soft'` | Passed to button component |
| `image` | `'/images/heroes/hero-home.jpg'` | — |
| `imagePosition` | `'center center'` | CSS `object-position` value |

**Button:** `x-ui.button-champagne-gradient` — hardcoded in component, not a prop.

---

## Page Status (All 51 Pages)

**Legend:**
- ✅ Done — H1 on one line, champagne-gradient button applied
- 🔵 Intentional — two-line split is by design
- ⚙️ Copy revised — heading/headingBold text changed, not just prop added

### Core / Informational Pages

| Page | URL | H1 (final) | headingTwoLines | Status |
|---|---|---|---|---|
| Home | `/` | "Elevate Your Travel Experience" / "**With Luxury and Comfort**" | `true` (default) | 🔵 Intentional split |
| About Us | `/about-us` | "About **Us**" | `false` | ✅ |
| Our Services | `/our-services` | "Our **Services**" | `false` | ✅ |
| Service Areas | `/service-areas` | "Service **Areas**" | `false` | ✅ |
| Rates | `/rates` | "Our **Rates**" | `false` | ✅ |
| Gallery | `/gallery` | "Our **Gallery**" | `false` | ✅ |
| Get a Quote | `/get-a-quote` | "Get **a Quote**" | `false` | ✅ |
| Bookings | `/bookings-reservations` | "Booking & **Reservations**" | `false` | ✅ |

### Service Pages

| Page | URL | H1 (final) | headingTwoLines | Status |
|---|---|---|---|---|
| Airport Shuttle | `/airport-shuttle-ohare-midway` | "24/7 Airport Shuttle Service **New Lenox & Naperville**" | `false` | ✅ |
| Limousine Services | `/limousine-services` | "The Essence of **Luxury Transportation**" | `false` | ✅ |
| Corporate Car | `/corporate-car-services` | "Corporate **Car Service**" | `false` | ✅ |
| Town Car | `/town-car-services` | "Town Car **Services**" | `false` | ✅ |
| Transportation | `/transportation-services` | "Transportation **Services**" | `false` | ✅ |
| Chauffeurs | `/chauffeurs` | "Professional Chauffeur Service" | `false` | ✅ ⚙️ Heading shortened, headingBold cleared |
| Coach Buses | `/coach-buses` | "Arrive in Unforgettable Style" | `false` | ✅ ⚙️ Heading shortened, headingBold cleared |
| New Bus Rental | `/new-bus-rental` | "New Bus **Rental**" | `false` | ✅ |
| Special Event Limo | `/special-event-limousine` | "Special Event **Limousine**" | `false` | ✅ |
| Wedding Limo | `/wedding-limousine-services` | "Picture Perfect Wedding Day Transport" | `false` | ✅ ⚙️ Heading replaced with former headingBold text, headingBold cleared |

### Party Bus / Events Pages

| Page | URL | H1 (final) | headingTwoLines | Status |
|---|---|---|---|---|
| Chicago Bears | `/chicago-bears-party-bus` | "Chicago Bears **Party Bus**" | `false` | ✅ |
| Chicago Blackhawks | `/chicago-blackhawks-party-bus` | "Chicago Blackhawks **Party Bus**" | `false` | ✅ |
| Chicago Bulls | `/chicago-bulls-party-bus` | "Ride the #1 Chicago Bulls **Party Bus**" | `false` | ✅ |
| Chicago Concert | `/chicago-concert-party-bus-rental` | "Chicago Concert **Party Bus**" | `false` | ✅ |
| Chicago Golf | `/chicago-golf-party-bus` | "Chicago Golf **Party Bus**" | `false` | ✅ |
| Six Flags | `/six-flags-party-bus` | "Six Flags **Party Bus**" | `false` | ✅ |
| Prom Party Bus | `/prom-party-bus-rental-illinois` | "Prom Party Bus **Service**" | `false` | ✅ |
| Grad Day | `/grad-day-transportation` | "Grad Day **Transportation**" | `false` | ✅ |
| Party Bus Chicago | `/party-bus-rental-chicago` | "Reliable & Stylish **Party Bus and Limo Transportation**" | `false` | ✅ |
| Party Bus Aurora | `/party-bus-aurora` | "Aurora **Party Bus**" | `false` | ✅ ⚙️ Heading="Aurora", headingBold="Party Bus" |
| Party Bus Naperville | `/party-bus-rental-naperville` | "Naperville **Party Bus**" | `false` | ✅ ⚙️ Heading="Naperville", headingBold="Party Bus" |

### City / Area Pages (Major)

| Page | URL | H1 (final) | headingTwoLines | Status |
|---|---|---|---|---|
| New Lenox | `/new-lenox-airport-shuttle-limo-service` | "24/7 New Lenox Airport Shuttle, **Limo & Party Bus Service**" | `false` | ✅ |
| Naperville | `/naperville-airport-shuttle-limo-service` | "24/7 Naperville **Limo & Airport Shuttle**" | `false` | ✅ |
| Plainfield | `/plainfield-limousine-shuttle-service` | "24/7 Plainfield Airport Shuttle, **Limo & Party Bus**" | `false` | ✅ |
| Bolingbrook | `/bolingbrook-airport-shuttle-ohare-midway` | "24/7 Bolingbrook **Limo & Airport Shuttle**" | `false` | ✅ |
| Aurora | `/aurora-limo-service` | "Aurora Airport Shuttle, **Limo & Party Bus**" | `false` | ✅ |
| Oswego | `/oswego-il-limo-service` | "24/7 Limo & Airport Shuttle **Service in Oswego IL**" | `false` | ✅ |
| Romeoville | `/romeoville-airport-shuttle-limo-service` | "24/7 Romeoville Airport Shuttle, **Limo & Party Bus**" | `false` | ✅ |
| Morris IL | `/morris-il-limo-service` | "24/7 Morris **Limo & Airport Shuttle**" | `false` | ✅ |

### 24/7 City Pages (14 pages)

All follow pattern: `heading="24/7 {City}"` + `headingBold="Limo & Airport Shuttle"` + `:headingTwoLines="false"`.
Renders as: "24/7 {City} **Limo & Airport Shuttle**" on one line.

| Page | URL | Status |
|---|---|---|
| Channahon | `/24-7-channahon-il-limo-service` | ✅ |
| Elwood | `/24-7-elwood-il-limo-service` | ✅ |
| Frankfort | `/24-7-frankfort-il-limo-service` | ✅ |
| Homer Glen | `/24-7-homer-glen-limo-service` | ✅ |
| Joliet | `/24-7-joliet-il-limo-services` | ✅ |
| Lemont | `/24-7-lemont-il-limo-service` | ✅ |
| Lockport | `/24-7-lockport-il-limo-service` | ✅ |
| Manhattan | `/24-7-manhattan-limo-service` | ✅ |
| Minooka | `/24-7-minooka-il-limo-service` | ✅ |
| Mokena | `/24-7-mokena-il-limo-service` | ✅ |
| Monee | `/24-7-monee-il-limo-service` | ✅ |
| Montgomery | `/24-7-montgomery-il-limo-service` | ✅ |
| North Aurora | `/24-7-north-aurora-il-limo-service` | ✅ |
| Orland Park | `/24-7-orland-park-il-limo-service` | ✅ |

---

## Changes Made

| What | How | Files Affected |
|---|---|---|
| Button: `outline-light` → `champagne-gradient` | One-time component edit | `category-hero.blade.php` |
| H1: add `:headingTwoLines="false"` | PHP script bulk insert | 43 page files |
| Chauffeurs: heading shortened | Manual edit — headingBold cleared | `chauffeurs.blade.php` |
| Coach Buses: heading shortened | Manual edit — headingBold cleared | `coach-buses.blade.php` |
| Wedding: heading replaced with final copy | Manual edit — headingBold cleared | `wedding-limousine-services.blade.php` |
| Party Bus Aurora: heading/headingBold restructured | Manual edit | `party-bus-aurora.blade.php` |
| Party Bus Naperville: heading/headingBold restructured | Manual edit | `party-bus-rental-naperville.blade.php` |
| Home: no change | Two-line split intentional | — |
| Subtitle alignment: no change | Right-aligned by design | — |
