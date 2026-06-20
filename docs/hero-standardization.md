# Hero Standardization Audit

> **MNC document — analysis only. No code changes have been made.**
> Created: 2026-06-20

---

## Issues Identified

Three distinct problems affect the `x-sections.category-hero` component across all 51 pages.

### Issue 1 — H1 Split Across Two Lines (49 of 51 pages)

The `headingTwoLines` prop defaults to `true`. When true, the component renders `heading` and `headingBold` as two separate `<span class="block">` elements, forcing a line break between them regardless of how short the combined text is.

**Example — `/our-services`:**
```
Our          ← line 1 (normal weight)
Services     ← line 2 (bold)
```
Should read: `Our Services` on one line.

**Example — `/chicago-golf-party-bus`:**
```
Chicago Golf     ← line 1
Party Bus        ← line 2
```
Should read: `Chicago Golf Party Bus` on one line.

**Fix:** Add `:headingTwoLines="false"` to each page's `<x-sections.category-hero>` call. No component changes needed.

**Note:** Some pages have very long combined headings that may still wrap at small viewports even with headingTwoLines=false — these are flagged separately in the table below as "Long — review copy."

### Issue 2 — Subtitle Is Right-Justified (all pages with a subtitle)

The component hardcodes `text-align: right` on the subtitle `<p>` tag. This cannot be overridden via a prop. The subtitle appears right-aligned on every page that uses it.

**Fix:** Requires a one-time component edit to `category-hero.blade.php` — change `text-align: right` to `text-align: center`, or add a `subtitleAlign` prop.

### Issue 3 — Button Style (all 51 pages)

All pages currently render `x-ui.button-outline-light` (ghost white outline). The target style is `x-ui.button-champagne-gradient`.

**Fix:** The button is hardcoded in `category-hero.blade.php` — it is not prop-driven. Requires either:
- A one-time component edit replacing `button-outline-light` with `button-champagne-gradient`, or
- Adding a `buttonVariant` prop to the component (more flexible for future use).

---

## Component Quick Reference

**File:** `resources/views/components/sections/category-hero.blade.php`

| Prop | Default | Notes |
|---|---|---|
| `heading` | `'Elevate Your Travel Experience'` | Normal-weight portion of H1 |
| `headingBold` | `'With Luxury and Comfort'` | Bold portion of H1 |
| `headingTwoLines` | `true` | `false` = both on one line |
| `subtitle` | `'Discover the joy of seamless journeys'` | Second large text block |
| `subtitleIn` | `''` | Optional bold second subtitle line |
| `description` | `''` | Optional body paragraph |
| `buttonText` | `'Book a Ride'` | — |
| `buttonHref` | `'/contact'` | `/contact` and `/booking` trigger modal |
| `buttonRadius` | `'soft'` | Passed to button component |
| `image` | `'/images/heroes/hero-home.jpg'` | — |
| `imagePosition` | `'center center'` | CSS `object-position` value |

**Button component hardcoded:** `x-ui.button-outline-light` — not a prop.

---

## Page-by-Page Status

**Legend:**
- ✅ H1 OK — `headingTwoLines="false"` already set, one line
- ⚠️ H1 Split — default `headingTwoLines=true`, heading and bold on separate lines
- 🔴 H1 Issue — structural problem (empty heading, extremely long text, copy needs rethinking)
- 🔵 Button — all pages need button update (applies to every row, not repeated per-row)
- 🟡 Subtitle — right-aligned subtitle present (applies to all rows with a subtitle)

> Button and subtitle-alignment issues affect every page. Only H1 status varies per page.

### Core / Informational Pages

| Page | URL | Current H1 (heading + headingBold) | `headingTwoLines` | H1 Status | Recommended Fix |
|---|---|---|---|---|---|
| Home | `/` | "Elevate Your Travel Experience" + "With Luxury and Comfort" | `true` (default) | ⚠️ H1 Split | Intentional two-line? Confirm with team. Could set `false` if desired on one line. |
| About Us | `/about-us` | "About" + "Us" | `false` ✓ | ✅ OK | — |
| Our Services | `/our-services` | "Our" + "Services" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Service Areas | `/service-areas` | "Service" + "Areas" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Rates | `/rates` | "Our" + "Rates" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Gallery | `/gallery` | "Our" + "Gallery" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Get a Quote | `/get-a-quote` | "Get" + "a Quote" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Bookings | `/bookings-reservations` | "Booking &" + "Reservations" | `false` ✓ | ✅ OK | — |

### Service Pages

| Page | URL | Current H1 | `headingTwoLines` | H1 Status | Recommended Fix |
|---|---|---|---|---|---|
| Airport Shuttle | `/airport-shuttle-ohare-midway` | "24/7 Airport Shuttle Service" + "New Lenox & Naperville" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Limousine Services | `/limousine-services` | "The Essence of" + "Luxury Transportation" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Corporate Car | `/corporate-car-services` | "Corporate" + "Car Service" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Town Car | `/town-car-services` | "Town Car" + "Services" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Transportation | `/transportation-services` | "Transportation" + "Services" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Chauffeurs | `/chauffeurs` | "Professional Chauffeur Service in" + "New Lenox & Plainfield, Illinois" | `true` (default) | 🔴 Long — review copy | One line would be ~70 chars. Consider shorter heading. |
| Coach Buses | `/coach-buses` | "Arrive in Unforgettable Style with" + "Our Professional Chauffeurs" | `true` (default) | 🔴 Long — review copy | Both lines are long. Shorten heading or rephrase. |
| New Bus Rental | `/new-bus-rental` | "New Bus" + "Rental" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Special Event Limo | `/special-event-limousine` | "Special Event" + "Limousine" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Wedding Limo | `/wedding-limousine-services` | "Make a Grand Entrance with" + "Picture Perfect Wedding Day Transport" | `true` (default) | 🔴 Long — review copy | Both lines very long. Shorten or restructure. |

### Party Bus / Events Pages

| Page | URL | Current H1 | `headingTwoLines` | H1 Status | Recommended Fix |
|---|---|---|---|---|---|
| Chicago Bears | `/chicago-bears-party-bus` | "Chicago Bears" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Chicago Blackhawks | `/chicago-blackhawks-party-bus` | "Chicago Blackhawks" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Chicago Bulls | `/chicago-bulls-party-bus` | "Ride the #1 Chicago Bulls" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Chicago Concert | `/chicago-concert-party-bus-rental` | "Chicago Concert" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Chicago Golf | `/chicago-golf-party-bus` | "Chicago Golf" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` — **user-cited example** |
| Six Flags | `/six-flags-party-bus` | "Six Flags" + "Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Prom Party Bus | `/prom-party-bus-rental-illinois` | "Prom Party Bus" + "Service" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Grad Day | `/grad-day-transportation` | "Grad Day" + "Transportation" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Party Bus Chicago | `/party-bus-rental-chicago` | "Reliable & Stylish" + "Party Bus and Limo Transportation" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Party Bus Aurora | `/party-bus-aurora` | "" + "Party Bus Aurora" | `true` (default) | 🔴 Empty heading | Heading is blank — only bold line renders. Set heading to something meaningful (e.g. "Aurora"). |
| Party Bus Naperville | `/party-bus-rental-naperville` | "" + "Party Bus Naperville" | `true` (default) | 🔴 Empty heading | Same as above — heading is blank. |

### City / Area Pages (Major)

| Page | URL | Current H1 | `headingTwoLines` | H1 Status | Recommended Fix |
|---|---|---|---|---|---|
| New Lenox | `/new-lenox-airport-shuttle-limo-service` | "24/7 New Lenox Airport Shuttle," + "Limo & Party Bus Service" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Naperville | `/naperville-airport-shuttle-limo-service` | "24/7 Naperville" + "Limo & Airport Shuttle" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Plainfield | `/plainfield-limousine-shuttle-service` | "24/7 Plainfield Airport Shuttle," + "Limo & Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Bolingbrook | `/bolingbrook-airport-shuttle-ohare-midway` | "24/7 Bolingbrook" + "Limo & Airport Shuttle" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Aurora | `/aurora-limo-service` | "Aurora Airport Shuttle," + "Limo & Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Oswego | `/oswego-il-limo-service` | "24/7 Limo & Airport Shuttle" + "Service in Oswego IL" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Romeoville | `/romeoville-airport-shuttle-limo-service` | "24/7 Romeoville Airport Shuttle," + "Limo & Party Bus" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |
| Morris IL | `/morris-il-limo-service` | "24/7 Morris" + "Limo & Airport Shuttle" | `true` (default) | ⚠️ H1 Split | Add `:headingTwoLines="false"` |

### 24/7 City Pages (14 pages — identical pattern)

All follow the same pattern: `heading="24/7 {City}"` + `headingBold="Limo & Airport Shuttle"` with `headingTwoLines` at default `true`.

**Fix for all 14:** Add `:headingTwoLines="false"` → renders as "24/7 {City} **Limo & Airport Shuttle**" on one line.

| Page | URL | H1 Status |
|---|---|---|
| Channahon | `/24-7-channahon-il-limo-service` | ⚠️ H1 Split |
| Elwood | `/24-7-elwood-il-limo-service` | ⚠️ H1 Split |
| Frankfort | `/24-7-frankfort-il-limo-service` | ⚠️ H1 Split |
| Homer Glen | `/24-7-homer-glen-limo-service` | ⚠️ H1 Split |
| Joliet | `/24-7-joliet-il-limo-services` | ⚠️ H1 Split |
| Lemont | `/24-7-lemont-il-limo-service` | ⚠️ H1 Split |
| Lockport | `/24-7-lockport-il-limo-service` | ⚠️ H1 Split |
| Manhattan | `/24-7-manhattan-limo-service` | ⚠️ H1 Split |
| Minooka | `/24-7-minooka-il-limo-service` | ⚠️ H1 Split |
| Mokena | `/24-7-mokena-il-limo-service` | ⚠️ H1 Split |
| Monee | `/24-7-monee-il-limo-service` | ⚠️ H1 Split |
| Montgomery | `/24-7-montgomery-il-limo-service` | ⚠️ H1 Split |
| North Aurora | `/24-7-north-aurora-il-limo-service` | ⚠️ H1 Split |
| Orland Park | `/24-7-orland-park-il-limo-service` | ⚠️ H1 Split |

---

## Fix Summary

| Fix | Scope | Approach | Pages Affected |
|---|---|---|---|
| H1 — simple split | Add `:headingTwoLines="false"` to page file | Per-page prop change | 43 pages |
| H1 — long copy | Shorten or restructure heading + headingBold | Copy edit + prop change | 4 pages (Chauffeurs, Coach Buses, Wedding, Home) |
| H1 — empty heading | Add a meaningful `heading` value | Per-page prop change | 2 pages (Party Bus Aurora, Party Bus Naperville) |
| Subtitle alignment | Change `text-align: right` to `text-align: center` in component | One-time component edit | All pages with subtitle |
| Button style | Replace `button-outline-light` with `button-champagne-gradient` in component | One-time component edit | All 51 pages |

**Most efficient approach for the button and subtitle:** Fix them once in `category-hero.blade.php` — both are hardcoded in the component, not driven by props.

**Most efficient approach for H1:** The 43 simple-split pages can each receive `:headingTwoLines="false"` in a single pass. The 4 long-copy pages need individual copy decisions before code changes.
