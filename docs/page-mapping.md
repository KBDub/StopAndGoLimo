# Page Mapping — Stop & Go Airport Shuttle Service Inc.

> This document is the single source of truth for every public-facing URL on the site.
> It maps each nav menu item to its route, Blade file, H1, and current status.
> URLs match the production site at newlenoxlimoservice.com exactly to preserve SEO.
> No redirects are used — every URL resolves to its own page.

---

## Status key

- ✅ Complete — hero + JSON-LD live
- 🟡 Stub — hero + JSON-LD only, content pending
- ❌ Missing

---

## Top-level links

| Label | URL | Blade file | H1 (heading / headingBold) | Status |
|---|---|---|---|---|
| Welcome | `/` | `pages/home` | Elevate Your Travel Experience / With Luxury and Comfort | ✅ |
| Booking | `/bookings-reservations` | `pages/bookings-reservations` | Book / Your Ride | 🟡 |
| Contact | `/get-a-quote` | `pages/get-a-quote` | Get / a Quote | 🟡 |

---

## About dropdown

| Label | URL | Blade file | H1 (heading / headingBold) | Status |
|---|---|---|---|---|
| About Us | `/about-us` | `pages/about-us` | About / Us | 🟡 |
| Rates | `/rates` | `pages/rates` | Our / Rates | 🟡 |
| Gallery | `/gallery` | `pages/gallery` | Our / Gallery | 🟡 |

---

## Services dropdown

| Label | URL | Blade file | H1 (heading / headingBold) | Status |
|---|---|---|---|---|
| Airport Shuttle | `/airport-shuttle-ohare-midway` | `pages/airport-shuttle-ohare-midway` | Airport / Shuttle | 🟡 |
| Wedding Limousine | `/wedding-limousine-services` | `pages/wedding-limousine-services` | Wedding / Limousine | 🟡 |
| Party Bus, Aurora | `/party-bus-aurora` | `pages/party-bus-aurora` | Party Bus / Aurora | 🟡 |
| Party Bus, Naperville | `/party-bus-rental-naperville` | `pages/party-bus-rental-naperville` | Party Bus / Naperville | 🟡 |
| Prom Party Bus | `/prom-party-bus-rental-illinois` | `pages/prom-party-bus-rental-illinois` | Prom / Party Bus | 🟡 |
| New Bus Rental | `/new-bus-rental` | `pages/new-bus-rental` | Bus / Rental | 🟡 |
| Coach Buses | `/coach-buses` | `pages/coach-buses` | Coach / Buses | 🟡 |
| Limousine Services | `/limousine-services` | `pages/limousine-services` | Limousine / Services | 🟡 |
| Corporate Car Service | `/corporate-car-services` | `pages/corporate-car-services` | Corporate / Car Service | 🟡 |
| Town Car Services | `/town-car-services` | `pages/town-car-services` | Town Car / Services | 🟡 |
| Chauffeurs | `/chauffeurs` | `pages/chauffeurs` | Professional / Chauffeurs | 🟡 |
| Special Event Limo | `/special-event-limousine` | `pages/special-event-limousine` | Special Event / Limousine | ✅ |
| Transportation | `/transportation-services` | `pages/transportation-services` | Transportation / Services | 🟡 |
| Grad Day Transport | `/grad-day-transportation` | `pages/grad-day-transportation` | Grad Day / Transportation | 🟡 |

---

## Special Events dropdown

| Label | URL | Blade file | H1 (heading / headingBold) | Status |
|---|---|---|---|---|
| Six Flags Party Bus | `/six-flags-party-bus` | `pages/six-flags-party-bus` | Six Flags / Party Bus | 🟡 |
| Golfing Party Bus | `/chicago-golf-party-bus` | `pages/chicago-golf-party-bus` | Golfing / Party Bus | 🟡 |
| Concert Party Bus Rental | `/chicago-concert-party-bus-rental` | `pages/chicago-concert-party-bus-rental` | Concert / Party Bus | 🟡 |
| Chicago Bears Party Bus | `/chicago-bears-party-bus` | `pages/chicago-bears-party-bus` | Chicago Bears / Party Bus | 🟡 |
| Chicago Bulls Party Bus | `/chicago-bulls-party-bus` | `pages/chicago-bulls-party-bus` | Chicago Bulls / Party Bus | 🟡 |
| Chicago Blackhawks Party Bus | `/chicago-blackhawks-party-bus` | `pages/chicago-blackhawks-party-bus` | Chicago Blackhawks / Party Bus | 🟡 |

---

## Service Areas dropdown

All 22 city pages share one Blade template: `pages/city-limo-service`.
Each route passes `$city`, `$state`, and `$subtitle` to the template.
H1 pattern for all cities: `{City}` / `Limo Service`

| Label | URL | City passed to template | Status |
|---|---|---|---|
| New Lenox | `/new-lenox-airport-shuttle-limo-service` | New Lenox, IL | 🟡 |
| Naperville | `/naperville-airport-shuttle-limo-service` | Naperville, IL | 🟡 |
| Aurora | `/aurora-limo-service` | Aurora, IL | 🟡 |
| North Aurora | `/24-7-north-aurora-il-limo-service` | North Aurora, IL | 🟡 |
| Plainfield | `/plainfield-limousine-shuttle-service` | Plainfield, IL | 🟡 |
| Joliet | `/24-7-joliet-il-limo-services` | Joliet, IL | 🟡 |
| Morris | `/morris-il-limo-service` | Morris, IL | 🟡 |
| Minooka | `/24-7-minooka-il-limo-service` | Minooka, IL | 🟡 |
| Channahon | `/24-7-channahon-il-limo-service` | Channahon, IL | 🟡 |
| Elwood | `/24-7-elwood-il-limo-service` | Elwood, IL | 🟡 |
| Romeoville | `/romeoville-airport-shuttle-limo-service` | Romeoville, IL | 🟡 |
| Lockport | `/24-7-lockport-il-limo-service` | Lockport, IL | 🟡 |
| Frankfort | `/24-7-frankfort-il-limo-service` | Frankfort, IL | 🟡 |
| Mokena | `/24-7-mokena-il-limo-service` | Mokena, IL | 🟡 |
| Orland Park | `/24-7-orland-park-il-limo-service` | Orland Park, IL | 🟡 |
| Manhattan | `/24-7-manhattan-limo-service` | Manhattan, IL | 🟡 |
| Homer Glen | `/24-7-homer-glen-limo-service` | Homer Glen, IL | 🟡 |
| Lemont | `/24-7-lemont-il-limo-service` | Lemont, IL | 🟡 |
| Monee | `/24-7-monee-il-limo-service` | Monee, IL | 🟡 |
| Bolingbrook | `/bolingbrook-airport-shuttle-ohare-midway` | Bolingbrook, IL | 🟡 |
| Oswego | `/oswego-il-limo-service` | Oswego, IL | 🟡 |
| Montgomery | `/24-7-montgomery-il-limo-service` | Montgomery, IL | 🟡 |

---

## Pages outside the nav

| Description | URL | Blade file | Status |
|---|---|---|---|
| Our Services overview | `/our-services` | `pages/our-services` | ✅ |
| Service Areas index | `/service-areas` | `pages/service-areas` | ✅ |
| Service Area city (dynamic) | `/service-areas/{slug}` | `pages/service-areas/show` | ✅ |
| Demo | `/demo` | `pages/demo` | internal |
| Demo Premium | `/demo/premium` | `pages/demo-premium` | internal |

---

## Hero images

All stubs use `hero-services.jpg` as a placeholder.
Replace each placeholder when the correct image is confirmed from prod.

| Page | Placeholder | Confirmed image |
|---|---|---|
| All stubs | `hero-services.jpg` | Pending |
| Home | `hero-home.jpg` | ✅ karl-kohler Unsplash |
| Our Services | `hero-services.jpg` | ✅ richard-r Unsplash |
| Special Event Limousine | `hero-special-event.jpg` | ✅ Limousine-Suit-Party.jpg |
