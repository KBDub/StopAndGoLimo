# Mega Menu Branding Check

Documents the structure and layout of every top-level category in the desktop mega menu flyout panel, including subcategory groups and individual subcategory items.

---

## Panel anatomy (reference)

Every flyout panel has two columns:

| Column | Role |
|---|---|
| **Left — link list** | Category header row + olive-label group(s) + 2-column item grid |
| **Right — ad panel** | `x-layout.mega-menu-ad` — image, tag badge, title, description, CTA button |

**Category header row** (top of left column):  
Bold category name → short descriptor sentence → gold arrow (→). Clicking the name or arrow links to the top-level category page.

**Olive-label group** (required on all panels):  
Small olive-colored all-caps label (`text-xs font-bold uppercase tracking-widest`) identifying a named group of links below it. Used to introduce a block of related subcategory items. On panels with only one set of items, the category name (or a close variant) is reused as the single group label.

**Subcategory item** (inside a group):  
Two stacked links — bold item name on top, lighter descriptor sentence below — each linking to the same page.

---

## Depth patterns

| Pattern | Levels | Description |
|---|---|---|
| **3-level** | Header → Group label → Items | Used when there are multiple named groups, each containing several items |
| **2-level with group label** | Header → Group label (category name or variant) → Items | Only one group; the category name or a close variant is used as the single group label |

All panels use one of these two patterns. The 2-level flat pattern (items with no olive label) is not used.

---

## Top-level nav items

| Label | Has Dropdown | Depth Pattern |
|---|---|---|
| Home | No | — |
| Custom Apparel | Yes | 3-level |
| Select a Sign | Yes | 3-level |
| Stickers | Yes | 2-level with group label |
| Vehicle Decals | Yes | 2-level with group label |
| Promo Items | Yes | 2-level with group label |
| Top 5% Merchandise | No | — |
| Design Services | Yes | 2-level with group label |
| About Us | Yes | 2-level with group label |

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

**Depth:** 2-level with group label  
**Header row:** "Stickers" — "Vinyl stickers & labels — any shape, no minimums, fast turnaround."  
**Ad panel:** Fast Turnaround / "Custom Stickers" / "Vinyl, weatherproof, any shape. No minimums in Joliet, IL."

#### Group: Sticker Types

| Subcategory | Descriptor |
|---|---|
| Standard | Round, square, and rectangle |
| Custom Shaped | Die cut to any design shape |

---

### 4. Vehicle Decals

**Depth:** 2-level with group label  
**Header row:** "Vehicle Decals" — "Wraps, lettering & magnets for cars, trucks & fleets."  
**Ad panel:** Same Day Available / "Vehicle Graphics & Wraps" / "Mobile advertising that pays for itself. Joliet, IL."

#### Group: Vehicle Products

| Subcategory | Descriptor |
|---|---|
| Automobile Graphics | Full wraps & vinyl lettering |
| Vehicle Magnets | Removable magnetic signs |
| DOT Decals | Compliant number lettering |

---

### 5. Promo Items

**Depth:** 2-level with group label  
**Header row:** "Promo Items" — "Branded giveaways for events, offices & trade shows."  
**Ad panel:** In Stock & Ready / "Promo Products" / "Branded gifts for events, offices & trade shows."

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

**Depth:** 2-level with group label  
**Header row:** "Design Services" — "Logos, layouts & print-ready artwork — concept to finished files."  
**Ad panel:** Print-Ready Files / "Pro Design Team" / "Logos, layouts, and custom artwork. Fast turnaround."

#### Group: Service Options

| Subcategory | Descriptor |
|---|---|
| Logo Design | Concept to final files |
| Layout/Graphic Design | Online designer & catalogs |
| Custom Storefronts | Branded stores for schools & businesses |

---

### 7. About Us

**Depth:** 2-level with group label  
**Header row:** "About Us" — "Veteran-owned in Joliet, IL — quality custom printing since 2017."  
**Ad panel:** Veteran Owned / "Top 5 Percent" / "Joliet, IL. Serving our community since 2017."

#### Group: Our Company

| Subcategory | Descriptor |
|---|---|
| About Us | Our mission & team |
| Company | Veteran-owned story |
| Portfolio | View our past work |
| Resources | Tips & helpful guides |

---

## Group label reference

| Category | Group Label(s) |
|---|---|
| Custom Apparel | Printing Options, Specialty Materials, Group Shirts |
| Select a Sign | Business Signs, Ground Signs, Table Signs |
| Stickers | Sticker Types |
| Vehicle Decals | Vehicle Products |
| Promo Items | Promo Products |
| Design Services | Service Options |
| About Us | Our Company |
