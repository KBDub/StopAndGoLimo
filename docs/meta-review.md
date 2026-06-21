# Title Tag Review — Stop & Go Airport Shuttle Service, Inc.

## How Title Tags Are Controlled

**Master layout:** `resources/views/components/layouts/page.blade.php` — line 30

```blade
<title>{{ $title }} | Stop & Go Airport Shuttle Service, Inc.</title>
```

The `title` prop is set individually in each page file under `resources/views/pages/`. The layout automatically appends ` | Stop & Go Airport Shuttle Service, Inc.` (42 chars) to whatever the page passes as `title`.

**Important:** The `og:title` tag at line 41 renders only `{{ $title }}` (no suffix). If title props are corrected, the og:title should also be updated to include the full company name, or the layout should be adjusted to append the suffix there as well.

---

## Required Format

```
{Descriptive text} – Stop & Go Airport Shuttle Service, Inc.
```

- Separator: `–` (en dash), not `|` or `—`
- Total rendered length: **59 characters or fewer**
- Company name suffix ` – Stop & Go Airport Shuttle Service, Inc.` = **42 chars**
- This means the `title` prop (descriptive text only) must be **17 chars or fewer**
- No company name or separator embedded in the prop — the layout supplies both

---

## Issues Found

Every one of the 51 public pages fails. Zero pass. Issues fall into four categories:

| Issue | Description |
|---|---|
| **OVER** | Rendered title exceeds 59-char limit |
| **DUPE** | Company name already embedded in the prop — layout then appends it again, creating a double |
| **WRONG-NAME** | Uses "Stop and Go Limo" or "Stop and Go Airport Shuttle" instead of the legal name |
| **EM-DASH** | `—` inside the prop — banned from all meta content per branding rules |
| **DBL-PIPE** | A `\|` already appears in the prop, creating a double separator when layout appends |

---

## Layout Change Required

**File:** `resources/views/components/layouts/page.blade.php` line 30

| | Current | Required |
|---|---|---|
| Separator | `\|` | `–` (en dash) |
| Line | `<title>{{ $title }} \| Stop & Go Airport Shuttle Service, Inc.</title>` | `<title>{{ $title }} – Stop & Go Airport Shuttle Service, Inc.</title>` |

---

## Per-Page Analysis

**Suffix added by layout:** ` | Stop & Go Airport Shuttle Service, Inc.` (42 chars)
**Rendered title** = prop value + suffix

### Core Pages

| Page file | Current prop | Rendered len | Issues | Proposed prop (≤17 chars) | Proposed rendered len |
|---|---|---|---|---|---|
| `home.blade.php` | `Luxury Limo Service in Joliet, IL \| Stop & Go Airport Shuttle Service, Inc.` | 117 | OVER+58, DUPE | `Chicagoland Limo` | 58 |
| `about-us.blade.php` | `About Us \| Stop and Go Limo — New Lenox, IL` | 85 | OVER+26, WRONG-NAME, EM-DASH, DBL-PIPE | `About Us` | 50 |
| `our-services.blade.php` | `Our Services \| Stop and Go Limo — Plainfield and New Lenox, IL` | 104 | OVER+45, WRONG-NAME, EM-DASH, DBL-PIPE | `Our Services` | 55 |
| `service-areas.blade.php` | `Service Areas \| Stop and Go Limo — Southwest Chicago Suburbs, IL` | 106 | OVER+47, WRONG-NAME, EM-DASH, DBL-PIPE | `Service Areas` | 55 |
| `rates.blade.php` | `Rates \| Stop and Go Limo — New Lenox, IL` | 82 | OVER+23, WRONG-NAME, EM-DASH, DBL-PIPE | `Rates & Pricing` | 57 |
| `gallery.blade.php` | `Gallery \| Stop and Go Limo — New Lenox, IL` | 84 | OVER+25, WRONG-NAME, EM-DASH, DBL-PIPE | `Fleet Gallery` | 55 |
| `get-a-quote.blade.php` | `Get a Quote \| Stop and Go Limo — New Lenox, IL` | 88 | OVER+29, WRONG-NAME, EM-DASH, DBL-PIPE | `Get a Quote` | 53 |
| `bookings-reservations.blade.php` | `Bookings and Reservations \| Stop and Go Limo — New Lenox, IL` | 102 | OVER+43, WRONG-NAME, EM-DASH, DBL-PIPE | `Book a Ride` | 53 |

### Airport & Service Pages

| Page file | Current prop | Rendered len | Issues | Proposed prop (≤17 chars) | Proposed rendered len |
|---|---|---|---|---|---|
| `airport-shuttle-ohare-midway.blade.php` | `Airport Shuttle — O'Hare and Midway \| Stop and Go Limo` | 96 | OVER+37, WRONG-NAME, EM-DASH, DBL-PIPE | `Airport Shuttle` | 57 |
| `limousine-services.blade.php` | `Limousine Services \| Stop and Go Limo — New Lenox, IL` | 95 | OVER+36, WRONG-NAME, EM-DASH, DBL-PIPE | `Limo Services` | 55 |
| `corporate-car-services.blade.php` | `Corporate Car Service \| Stop and Go Limo — New Lenox, IL` | 98 | OVER+39, WRONG-NAME, EM-DASH, DBL-PIPE | `Corporate Cars` | 56 |
| `town-car-services.blade.php` | `Town Car Services \| Stop and Go Limo — New Lenox, IL` | 94 | OVER+35, WRONG-NAME, EM-DASH, DBL-PIPE | `Town Car Service` | 58 |
| `transportation-services.blade.php` | `Transportation Services \| Stop and Go Limo — New Lenox, IL` | 100 | OVER+41, WRONG-NAME, EM-DASH, DBL-PIPE | `Transportation` | 56 |
| `chauffeurs.blade.php` | `Professional Chauffeurs \| Stop and Go Limo — New Lenox, IL` | 100 | OVER+41, WRONG-NAME, EM-DASH, DBL-PIPE | `Chauffeurs` | 52 |
| `coach-buses.blade.php` | `Coach Bus Rentals \| Stop and Go Limo — New Lenox, IL` | 94 | OVER+35, WRONG-NAME, EM-DASH, DBL-PIPE | `Coach Bus Rental` | 58 |
| `new-bus-rental.blade.php` | `Bus Rental \| Stop and Go Limo — New Lenox, IL` | 87 | OVER+28, WRONG-NAME, EM-DASH, DBL-PIPE | `Party Bus Rental` | 58 |
| `special-event-limousine.blade.php` | `Special Event Limousine \| Party Limo Rental — New Lenox and Plainfield, IL` | 116 | OVER+57, EM-DASH, DBL-PIPE | `Special Events` | 56 |
| `wedding-limousine-services.blade.php` | `Wedding Limousine Services \| Stop and Go Limo — New Lenox, IL` | 103 | OVER+44, WRONG-NAME, EM-DASH, DBL-PIPE | `Wedding Limos` | 55 |

### Party Bus & Events Pages

| Page file | Current prop | Rendered len | Issues | Proposed prop (≤17 chars) | Proposed rendered len |
|---|---|---|---|---|---|
| `chicago-bears-party-bus.blade.php` | `Chicago Bears Party Bus \| Stop and Go Limo — New Lenox, IL` | 100 | OVER+41, WRONG-NAME, EM-DASH, DBL-PIPE | `Bears Party Bus` | 57 |
| `chicago-blackhawks-party-bus.blade.php` | `Chicago Blackhawks Party Bus \| Stop and Go Limo — New Lenox, IL` | 105 | OVER+46, WRONG-NAME, EM-DASH, DBL-PIPE | `Blackhawks Bus` | 56 |
| `chicago-bulls-party-bus.blade.php` | `Chicago Bulls Party Bus \| Stop and Go Limo — New Lenox, IL` | 100 | OVER+41, WRONG-NAME, EM-DASH, DBL-PIPE | `Bulls Party Bus` | 57 |
| `chicago-concert-party-bus-rental.blade.php` | `Concert Party Bus Rental Chicago \| Stop and Go Limo` | 93 | OVER+34, WRONG-NAME, DUPE | `Concert Party Bus` | 59 |
| `chicago-golf-party-bus.blade.php` | `Golfing Party Bus Chicago \| Stop and Go Limo — New Lenox, IL` | 102 | OVER+43, WRONG-NAME, EM-DASH, DBL-PIPE | `Golf Party Bus` | 56 |
| `six-flags-party-bus.blade.php` | `Six Flags Party Bus \| Stop and Go Limo — New Lenox, IL` | 96 | OVER+37, WRONG-NAME, EM-DASH, DBL-PIPE | `Six Flags Bus` | 55 |
| `prom-party-bus-rental-illinois.blade.php` | `Prom Party Bus Rental Illinois \| Stop and Go Limo` | 91 | OVER+32, WRONG-NAME, DUPE | `Prom Party Bus` | 56 |
| `grad-day-transportation.blade.php` | `Grad Day Transportation \| Stop and Go Limo — New Lenox, IL` | 100 | OVER+41, WRONG-NAME, EM-DASH, DBL-PIPE | `Grad Day Bus` | 54 |
| `party-bus-rental-chicago.blade.php` | `Party Bus Rental Chicago, IL \| Stop and Go Limo` | 89 | OVER+30, WRONG-NAME, DUPE | `Chicago Party Bus` | 59 |
| `party-bus-aurora.blade.php` | `Party Bus Rental Aurora, IL \| Stop and Go Limo` | 88 | OVER+29, WRONG-NAME, DUPE | `Aurora Party Bus` | 58 |
| `party-bus-rental-naperville.blade.php` | `Party Bus Rental Naperville, IL \| Stop and Go Limo` | 92 | OVER+33, WRONG-NAME, DUPE | `Naperville Bus` | 56 |

### Major City Pages

| Page file | Current prop | Rendered len | Issues | Proposed prop (≤17 chars) | Proposed rendered len |
|---|---|---|---|---|---|
| `new-lenox-airport-shuttle-limo-service.blade.php` | `New Lenox Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 112 | OVER+53, WRONG-NAME, DUPE | `New Lenox Limo` | 56 |
| `naperville-airport-shuttle-limo-service.blade.php` | `Naperville Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 113 | OVER+54, WRONG-NAME, DUPE | `Naperville Limo` | 57 |
| `plainfield-limousine-shuttle-service.blade.php` | `Plainfield Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 113 | OVER+54, WRONG-NAME, DUPE | `Plainfield Limo` | 57 |
| `bolingbrook-airport-shuttle-ohare-midway.blade.php` | `Bolingbrook Limo & Airport Shuttle to O'Hare & Midway \| Stop and Go Airport Shuttle` | 125 | OVER+66, WRONG-NAME, DUPE | `Bolingbrook Limo` | 58 |
| `aurora-limo-service.blade.php` | `Aurora Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Aurora Limo` | 53 |
| `oswego-il-limo-service.blade.php` | `Oswego Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Oswego Limo` | 53 |
| `romeoville-airport-shuttle-limo-service.blade.php` | `Romeoville Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 113 | OVER+54, WRONG-NAME, DUPE | `Romeoville Limo` | 57 |
| `morris-il-limo-service.blade.php` | `Morris Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Morris IL Limo` | 56 |

### 24/7 City Pages

| Page file | Current prop | Rendered len | Issues | Proposed prop (≤17 chars) | Proposed rendered len |
|---|---|---|---|---|---|
| `24-7-channahon-il-limo-service.blade.php` | `Channahon Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 112 | OVER+53, WRONG-NAME, DUPE | `Channahon Limo` | 56 |
| `24-7-elwood-il-limo-service.blade.php` | `Elwood Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Elwood IL Limo` | 56 |
| `24-7-frankfort-il-limo-service.blade.php` | `Frankfort Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 112 | OVER+53, WRONG-NAME, DUPE | `Frankfort Limo` | 56 |
| `24-7-homer-glen-limo-service.blade.php` | `Homer Glen Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 113 | OVER+54, WRONG-NAME, DUPE | `Homer Glen Limo` | 57 |
| `24-7-joliet-il-limo-services.blade.php` | `Joliet Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Joliet Limo` | 53 |
| `24-7-lemont-il-limo-service.blade.php` | `Lemont Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Lemont IL Limo` | 56 |
| `24-7-lockport-il-limo-service.blade.php` | `Lockport Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 111 | OVER+52, WRONG-NAME, DUPE | `Lockport Limo` | 55 |
| `24-7-manhattan-limo-service.blade.php` | `Manhattan Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 112 | OVER+53, WRONG-NAME, DUPE | `Manhattan IL Limo` | 59 |
| `24-7-minooka-il-limo-service.blade.php` | `Minooka Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 110 | OVER+51, WRONG-NAME, DUPE | `Minooka IL Limo` | 57 |
| `24-7-mokena-il-limo-service.blade.php` | `Mokena Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 109 | OVER+50, WRONG-NAME, DUPE | `Mokena IL Limo` | 56 |
| `24-7-monee-il-limo-service.blade.php` | `Monee Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 108 | OVER+49, WRONG-NAME, DUPE | `Monee IL Limo` | 55 |
| `24-7-montgomery-il-limo-service.blade.php` | `Montgomery Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 113 | OVER+54, WRONG-NAME, DUPE | `Montgomery Limo` | 57 |
| `24-7-north-aurora-il-limo-service.blade.php` | `North Aurora Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 115 | OVER+56, WRONG-NAME, DUPE | `North Aurora Limo` | 59 |
| `24-7-orland-park-il-limo-service.blade.php` | `Orland Park Limo & Airport Shuttle Service \| Stop and Go Airport Shuttle` | 114 | OVER+55, WRONG-NAME, DUPE | `Orland Park Limo` | 58 |

---

## Summary

| Metric | Count |
|---|---|
| Total public pages audited | 51 |
| Pages passing 59-char limit | 0 |
| Pages with DUPE (embedded company name) | 36 |
| Pages with WRONG-NAME branding | 50 |
| Pages with EM-DASH in title prop | 23 |
| Pages with double pipe (DBL-PIPE) | 27 |

---

## What Needs to Change

**Step 1 — Layout (one line):**
`resources/views/components/layouts/page.blade.php` line 30: change `|` to `–`

**Step 2 — All 51 page files:**
Replace each `title=` prop with the proposed value from the table above. Proposed values contain only the descriptive text, no separator, no company name. The layout supplies both.

**Step 3 — og:title (optional but recommended):**
Line 41 of the layout currently renders only `{{ $title }}` for og:title. Consider updating it to `{{ $title }} – Stop & Go Airport Shuttle Service, Inc.` to keep Open Graph consistent with the rendered title tag.
