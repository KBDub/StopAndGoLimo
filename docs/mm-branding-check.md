# Mega Menu Branding Check

Documents the structure and layout of every top-level category in the desktop mega menu flyout panel, including subcategory groups and individual subcategory items.

---

## Panel anatomy (reference)

Every flyout panel has two columns:

| Column | Role |
|---|---|
| **Left — link list** | Category header row + optional olive-label group(s) + 2-column item grid |
| **Right — ad panel** | `x-layout.mega-menu-ad` — image, tag badge, title, description, CTA button |

**Category header row** (top of left column):  
Bold category name → short descriptor sentence → gold arrow (→). Clicking the name or arrow links to the top-level category page.

**Olive-label group** (optional):  
Small olive-colored all-caps label (`text-xs font-bold uppercase tracking-widest`) identifying a named group of links below it. Used to introduce a block of related subcategory items.

**Subcategory item** (inside a group or flat):  
Two stacked links — bold item name on top, lighter descriptor sentence below — each linking to the same page.

---

## Depth patterns

| Pattern | Levels | Description |
|---|---|---|
| **3-level** | Header → Group label → Items | Used when there are multiple named groups, each containing several items |
| **2-level with group label** | Header → Group label (category name) → Items | Only one group; the category name is reused as the single group label |
| **2-level flat** | Header → Items (no group label) | Items sit directly under the header with no olive label |

---

## Top-level nav items

| Label | Has Dropdown | Depth Pattern |
|---|---|---|
| Home | No | — |
| Custom Apparel | Yes | 3-level |
| Select a Sign | Yes | 3-level |
| Stickers | Yes | 2-level flat |
| Vehicle Decals | Yes | 2-level flat |
| Promo Items | Yes | 2-level with group label |
| Top 5% Merchandise | No | — |
| Design Services | Yes | 2-level flat |
| About Us | Yes | 2-level flat |

---

## Category panels

---

### 1. Custom Apparel

**Depth:** 3-level  
**Header row:** "Custom Apparel" — "T-shirts, hoodies, caps & more — any print method, same day."  
**Ad panel:** Same Day Available / "Custom Shirts & Apparel" / "Any style. Any print method. Veteran owned in Joliet, IL."

#### Group: Printing Options

| Subcategory | Descriptor |
|---|---|
| Direct to Film (DTF) | High-detail heat transfers |
| Dye-Sublimation | Edge-to-edge full color |
| Screen Printing | Classic bulk production |
| Embroidery | Premium stitched branding |
| Rhinestone | Crystal embellishments |
| Digital Vinyl | Sharp, durable graphics |

#### Group: Specialty Materials

| Subcategory | Descriptor |
|---|---|
| Glitter | Shimmer and sparkle |
| Puff | Raised 3D texture |
| Glow in the Dark | Luminous night effects |
| Flock | Velvet-like soft feel |
| Brick | Extra thick, bold look |
| Holographic | Iridescent color shifting |
| Foil | Shiny metallic finish |
| Reflective | High-visibility safety |

#### Group: Group Shirts

| Subcategory | Descriptor |
|---|---|
| Family Reunion | Custom matching apparel |
| Spirit Wear | School and sports fans |
| Corporate Wear | Branded staff uniforms |

---

### 2. Select a Sign

**Depth:** 3-level  
**Header row:** "Select a Sign" — "Banners, window signs, yard signs & more — same day in Joliet, IL."  
**Ad panel:** Same Day Available / "Custom Signs & Banners" / "Indoor & outdoor. Any size. Fast turnaround in Joliet, IL."

#### Group: Business Signs

| Subcategory | Descriptor |
|---|---|
| Banners | Custom vinyl banners |
| Window Signs | Storefront decals & perf |
| Wall Signs | Interior murals & graphics |
| Floor Signs | Durable surface branding |
| Door Signs | Hours & office identifiers |
| Posters | Large format printing |

#### Group: Ground Signs

| Subcategory | Descriptor |
|---|---|
| Yard Signs | Corrugated wire-stake signs |
| A-Frame/Sidewalk Signs | Portable sandwich boards |
| Parking Signs | Aluminum & compliance signs |

#### Group: Table Signs

| Subcategory | Descriptor |
|---|---|
| Table Cloths | Full-color branded covers |
| Table Runners | Accent event branding |

---

### 3. Stickers

**Depth:** 2-level flat (no olive group label)  
**Header row:** "Stickers" — "Vinyl stickers & labels — any shape, no minimums, fast turnaround."  
**Ad panel:** Fast Turnaround / "Custom Stickers" / "Vinyl, weatherproof, any shape. No minimums in Joliet, IL."

Items sit directly in a 2-column grid immediately below the header row — no olive group label is present.

| Subcategory | Descriptor |
|---|---|
| Standard | Round, square, and rectangle |
| Custom Shaped | Die cut to any design shape |

---

### 4. Vehicle Decals

**Depth:** 2-level flat (no olive group label)  
**Header row:** "Vehicle Decals" — "Wraps, lettering & magnets for cars, trucks & fleets."  
**Ad panel:** Same Day Available / "Vehicle Graphics & Wraps" / "Mobile advertising that pays for itself. Joliet, IL."

Items sit directly in a 2-column grid immediately below the header row — no olive group label is present.

| Subcategory | Descriptor |
|---|---|
| Automobile Graphics | Full wraps & vinyl lettering |
| Vehicle Magnets | Removable magnetic signs |
| DOT Decals | Compliant number lettering |

---

### 5. Promo Items

**Depth:** 2-level with group label (correct pattern)  
**Header row:** "Promo Items" — "Branded giveaways for events, offices & trade shows."  
**Ad panel:** In Stock & Ready / "Promo Products" / "Branded gifts for events, offices & trade shows."

Because there is only one set of products and no further subdivision, the category name ("Promo Products") is used as the single olive group label. This is the correct treatment for a 2-level category that still needs a group label to visually anchor the item list.

#### Group: Promo Products

| Subcategory | Descriptor |
|---|---|
| Mugs | Full color sublimation |
| Can Koozies | Branded foam & neoprene |
| Towels | Beach & sport towels |
| Drink Coasters | Ceramic, neoprene, board |
| Drawstring/Tote Bags | Branded canvas bags |
| Mouse Pads | Full-surface desk pads |

---

### 6. Design Services

**Depth:** 2-level flat (no olive group label)  
**Header row:** "Design Services" — "Logos, layouts & print-ready artwork — concept to finished files."  
**Ad panel:** Print-Ready Files / "Pro Design Team" / "Logos, layouts, and custom artwork. Fast turnaround."

Items sit directly in a 2-column grid immediately below the header row — no olive group label is present.

| Subcategory | Descriptor |
|---|---|
| Logo Design | Concept to final files |
| Layout/Graphic Design | Online designer & catalogs |
| Custom Storefronts | Branded stores for schools & businesses |

---

### 7. About Us

**Depth:** 2-level flat (no olive group label)  
**Header row:** "About Us" — "Veteran-owned in Joliet, IL — quality custom printing since 2017."  
**Ad panel:** Veteran Owned / "Top 5 Percent" / "Joliet, IL. Serving our community since 2017."

Items sit directly in a 2-column grid immediately below the header row — no olive group label is present.

| Subcategory | Descriptor |
|---|---|
| About Us | Our mission & team |
| Company | Veteran-owned story |
| Portfolio | View our past work |
| Resources | Tips & helpful guides |

---

## Inconsistency notes

| Category | Depth | Has olive group label | Notes |
|---|---|---|---|
| Custom Apparel | 3-level | Yes (3 groups) | Correct |
| Select a Sign | 3-level | Yes (3 groups) | Correct |
| Stickers | 2-level | **No** | Flat — no olive label |
| Vehicle Decals | 2-level | **No** | Flat — no olive label |
| Promo Items | 2-level | **Yes** (category name reused) | Correct per user spec |
| Design Services | 2-level | **No** | Flat — no olive label |
| About Us | 2-level | **No** | Flat — no olive label |

Stickers and Vehicle Decals are 2-level flat panels with no olive group label, which differs from Promo Items where the category name is used as the label. Whether the flat panels should adopt the same "category name as label" treatment is a pending decision.
