# Top 5 Percent — Site Interlinking Strategy
**Site:** https://top5pct.com | **Stack:** PHP / Laravel / Livewire / Alpine (TALL)
**Date:** May 2026 | **Prepared for:** top5pct.com SEO & Internal Link Architecture

---

## Legend

| Symbol | Meaning |
|--------|---------|
| ✅ EXISTING | Anchor text is already in the page copy — just wrap in `<a href="...">` |
| ➕ ADD | New text/phrase to insert at the noted location |
| **→** | Directionality: FROM section → TO page/section |
| `[Section]` | Blade component or visual section title |

---

## Format Per Link

Each entry contains:
1. **#** — Link number within section (sections should have 2–4 links minimum)
2. **Anchor Text** — Exact clickable text
3. **Context / Placement** — Surrounding sentence or insertion point
4. **Status** — ✅ EXISTING or ➕ ADD
5. **→ Target URL** — Destination page
6. **→ Target Section** — Heading or section title on the target page

---
---

# ① HOME — `/`

## [Section] `x-sections.faq` | "Frequently Asked Questions"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | same-day custom shirt printing | "**Same-day custom shirt printing** is available on many of our apparel products." | ✅ EXISTING | `/custom-apparel` | "Same-Day Custom Shirts in Joliet" |
| 2 | custom apparel or signs | "Is there a minimum order for **custom apparel or signs**?" | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 3 | vinyl banners | "Many of our **vinyl banners** can be printed the same day." | ✅ EXISTING | `/signs/business-signs/banners` | "Custom Vinyl Banners" |
| 4 | free design assistance | "**Free design assistance** is included with every order we produce." | ✅ EXISTING | `/design-services` | "From Concept to Print — We Handle the Design" |
| 5 | active military, veterans, and first responders | "We offer a 10% discount to all **active military, veterans, and first responders**." | ✅ EXISTING | `/about-us` | "About" (hero / veteran section) |

---

## [Section] `x-sections.home-page-services-accordion`

> This accordion lists service categories. Each category title is a natural link target.

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | Custom Apparel | Accordion heading / panel | ✅ EXISTING | `/custom-apparel` | "Custom Apparel" hero |
| 2 | Custom Signs | Accordion heading / panel | ✅ EXISTING | `/signs` | "Custom Signs" hero |
| 3 | Stickers & Decals | Accordion heading / panel | ✅ EXISTING | `/stickers` | "Custom Stickers" hero |
| 4 | Vehicle Graphics | Accordion heading / panel | ✅ EXISTING | `/vehicle-graphics` | "Vehicle Graphics" hero |
| 5 | Promotional Items | Accordion heading / panel | ✅ EXISTING | `/promotional-items` | "Promotional" hero |
| 6 | Design Services | Accordion heading / panel | ✅ EXISTING | `/design-services` | "Design" hero |

---

## [Section] `x-sections.our-services`

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom shirts | Any reference to custom shirts in this section | ✅ EXISTING | `/custom-apparel` | "Custom Apparel" hero |
| 2 | vehicle graphics | Any reference to vehicle graphics | ✅ EXISTING | `/vehicle-graphics` | "Vehicle Graphics" hero |
| 3 | get a free quote | CTA text near the section footer | ✅ EXISTING | `/contact` | "Contact" hero |
| 4 | portfolio | ➕ ADD sentence: "See our work in the **portfolio**." | ➕ ADD | `/portfolio` | "Our Portfolio" hero |

---

## [Section] `x-sections.about-preview`

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | learn more about us | ➕ ADD button/link at section end: "**Learn more about us** and our veteran story." | ➕ ADD | `/about-us` | "About" hero |
| 2 | service areas | ➕ ADD inline: "Proudly serving Joliet and all **service areas** across Will County." | ➕ ADD | `/service-areas` | "Proudly Serving Joliet..." |

---
---

# ② CUSTOM APPAREL INDEX — `/custom-apparel`

## [Section] `x-sections.card-image-with-text` | "Your Custom Apparel Shop in Joliet, IL"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DTF transfers | "...from **DTF transfers** and screen printing to embroidery..." | ✅ EXISTING | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |
| 2 | screen printing | "...from DTF transfers and **screen printing** to embroidery..." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard for Custom Apparel" |
| 3 | embroidery | "...from DTF transfers and screen printing to **embroidery**, rhinestone..." | ✅ EXISTING | `/custom-apparel/printing-options/embroidery` | "The Most Professional Look in Custom Apparel" |
| 4 | rhinestone | "...to embroidery, **rhinestone**, glitter..." | ✅ EXISTING | `/custom-apparel/printing-options/rhinestone-apparel` | "Crystal Bling That Turns Every Head" |
| 5 | glitter | "...**glitter**, flock, foil, holographic..." | ✅ EXISTING | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 6 | Same-day service | "**Same-day service** is available on many of our products..." | ✅ EXISTING | `/contact` | "Contact" hero |
| 7 | 121 Springfield Avenue in Joliet | "Stop by our shop at **121 Springfield Avenue in Joliet**..." | ✅ EXISTING | `/service-areas` | "Proudly Serving Joliet..." |

---

## [Section] `x-sections.faq` | "Custom Apparel FAQs"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DTF transfers | "We offer **DTF transfers**, screen printing, embroidery..." | ✅ EXISTING | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |
| 2 | screen printing | "We offer DTF transfers, **screen printing**, embroidery..." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard for Custom Apparel" |
| 3 | dye sublimation | "...embroidery, **dye sublimation**, rhinestone..." | ✅ EXISTING | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 4 | DTF (direct-to-film) transfers | "**DTF (direct-to-film) transfers** produce full-color photographic prints..." | ✅ EXISTING | `/custom-apparel/printing-options/dtf-printing` | "The Right Solution for Small Runs and Samples" |
| 5 | Screen printing | "**Screen printing** uses stenciled ink layers..." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "Ideal for Bulk Orders and Uniforms" |
| 6 | Contact us for a custom quote | "**Contact us** for a custom quote based on your quantity..." | ✅ EXISTING | `/contact` | "Contact" hero |

---

## [Section] `x-ui.card-banner-slide-in` | "Same-Day Custom Shirts in Joliet" (left slide)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | same-day service | ➕ ADD subtitle text: "Many techniques qualify for **same-day service** — see what's available." | ➕ ADD | `/contact` | "Contact" hero |
| 2 | design services | ➕ ADD: "Pair your order with our **design services** and we handle everything." | ➕ ADD | `/design-services` | "From Concept to Print — We Handle the Design" |

---

## [Section] `x-ui.card-banner-slide-in` | "Embroidery, Screen Print, DTF — We Do It All" (right slide)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | Embroidery | "**Embroidery**, Screen Print, DTF..." | ✅ EXISTING | `/custom-apparel/printing-options/embroidery` | "The Most Professional Look in Custom Apparel" |
| 2 | Screen Print | "Embroidery, **Screen Print**, DTF..." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard for Custom Apparel" |
| 3 | DTF | "...Screen Print, **DTF**..." | ✅ EXISTING | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |

---
---

# ③ DTF TRANSFERS — `/custom-apparel/printing-options/dtf-printing`

## [Section] `x-sections.card-image-with-text` | "Full Color Transfers for Any Fabric" (first prose block)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | screen printing | "Unlike **screen printing** which requires separate screens for each color..." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard for Custom Apparel" |
| 2 | dye sublimation | "...or **dye sublimation** which only works on polyester..." | ✅ EXISTING | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 3 | Same-day production | "**Same-day production** is available for most DTF transfer orders placed before noon." | ✅ EXISTING | `/contact` | "Contact" hero |

---

## [Section] `x-sections.card-image-with-text` | "The Right Solution for Small Runs and Samples" (second prose block)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | heat press | "...apply them yourself using a **heat press** if you have one." | ✅ EXISTING | `/contact` | "Contact" hero |
| 2 | small apparel businesses | ➕ ADD: "...popular with **small apparel businesses**, school clubs, and organizations — similar to those who order our **reunion shirts** and **spirit wear**." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Reunion Shirt Templates" |
| 3 | spirit wear | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |

---

## [Section] `x-sections.lp-editorial` | "Why DTF Transfers Are Changing the Way Custom Shirts Are Made" (deep dive / h3 blocks)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | direct-to-garment (DTG) printing | "...the limitations of **direct-to-garment (DTG) printing**..." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 2 | dye sublimation | "...high-quality full-color custom apparel available in any quantity on any fabric — compare to **dye sublimation** for all-over polyester work." | ➕ ADD | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 3 | embroidery | ➕ ADD at end of "Durability" h3: "For a completely different texture and feel, see our **embroidery** — stitched directly into the fabric." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "Exceptional Durability for Commercial Use" |
| 4 | Call us | "**Call us** first thing and we will tell you exactly what is achievable..." | ✅ EXISTING | `/contact` | "Contact" hero |
| 5 | logo design | ➕ ADD: "Need artwork before you order? Our **logo design** and graphic design team is ready." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---
---

# ④ DYE SUBLIMATION — `/custom-apparel/printing-options/dye-sublimation-printing`

## [Section] `x-sections.card-image-with-text` | "Full-Color, All-Over Printing"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DTF transfers | ➕ ADD: "For cotton or mixed fabrics, consider **DTF transfers** — our most flexible full-color option." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "No Fabric Type Restrictions" |
| 2 | screen printing | ➕ ADD: "For high-volume solid-color designs, **screen printing** may be the more economical route." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Best Cost Per Unit for Larger Quantities" |
| 3 | spirit wear | ➕ ADD: "Dye sublimation is a top choice for **spirit wear** jerseys and performance uniforms." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |

---

## [Section] | "Jerseys, Performance Wear, and More"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate wear | ➕ ADD: "Dye sub polos and all-over shirts are also popular for **corporate wear** events and branded uniforms." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Polo Shirts" |
| 2 | glitter | ➕ ADD: "Want to add dimension on top of sublimation? We can layer **glitter** or **flock** vinyl over sublimated fabric." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 3 | flock | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/specialty-materials/flock-shirts` | "3D Texture That Gets Noticed" *(puff)* |
| 4 | promotional items | ➕ ADD: "Dye sublimation is also used on our **promotional items** — mugs, coasters, mouse pads, and more." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ⑤ SCREEN PRINTING — `/custom-apparel/printing-options/screen-printing`

## [Section] `x-sections.card-image-with-text` | "The Classic Standard for Custom Apparel"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | event shirts | "...the standard method for **event shirts**, company uniforms, team apparel, band merchandise..." | ✅ EXISTING | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | company uniforms | "...for **company uniforms**, team apparel..." | ✅ EXISTING | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Work Uniforms" |
| 3 | DTF transfers | ➕ ADD: "For small-run or single-piece orders, our **DTF transfers** are an ideal alternative with no setup costs." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "The Right Solution for Small Runs and Samples" |

---

## [Section] | "Ideal for Bulk Orders and Uniforms"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | school spirit wear | "...company uniforms, **school spirit wear**, sports team jerseys..." | ✅ EXISTING | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | reunion shirts | ➕ ADD: "Screen printing is also the go-to method for bulk **reunion shirts** for families and alumni groups." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Class Reunion Shirts" |
| 3 | tote bags | "T-shirts, hoodies, sweatshirts, polos, **tote bags**, and hats are all fair game." | ✅ EXISTING | `/promotional-items/tote-bags` | "Walking Billboards for Your Brand" |

---

## [Section] Editorial | "5 Reasons Screen Printing Delivers Superior Results..." (h3 blocks)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | plastisol inks | ➕ ADD end of "Unmatched Color Vibrancy" h3: "For designs that require photographic gradients, see **DTF transfers** or **dye sublimation**." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color With No Color Count Restrictions" |
| 2 | dye sublimation | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 3 | embroidery | ➕ ADD at end of "Exceptional Durability" h3: "For maximum durability in professional settings, **embroidery** stitches your logo directly into the fabric." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "Exceptional Durability for Commercial Use" |
| 4 | sign shop | ➕ ADD at closing paragraph: "We are also a full **sign shop** — banners, yard signs, window graphics, and more." | ➕ ADD | `/signs` | "Professional Sign Printing for Every Business in Will County" |

---
---

# ⑥ EMBROIDERY — `/custom-apparel/printing-options/embroidery`

## [Section] `x-sections.card-image-with-text` | "The Most Professional Look in Custom Apparel"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate and professional custom apparel | "...the gold standard for **corporate and professional custom apparel**." | ✅ EXISTING | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Polo Shirts" |
| 2 | printed decorations | "Unlike **printed decorations** that sit on the surface of a garment..." | ✅ EXISTING | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |
| 3 | polos, button-down shirts, dress shirts, fleece jackets, caps, hats, hoodies | ➕ ADD link on "caps, hats": "We produce custom embroidery on **polos**, button-down shirts, dress shirts, fleece jackets, **caps, hats**..." | ✅ EXISTING | `/custom-apparel` | "Custom Apparel" hero |

---

## [Section] | "Corporate Uniforms, Caps, and Accessories"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate uniforms | "Embroidery is the preferred decoration method for **corporate uniforms**..." | ✅ EXISTING | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Work Uniforms" |
| 2 | professional branded apparel | "...and **professional branded apparel**..." | ✅ EXISTING | `/design-services/logo-design` | "Designed for Every Application" |
| 3 | embroidered caps | "**Embroidered caps** work equally well as employee gear, client gifts, merchandise, and event giveaways." | ✅ EXISTING | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---

## [Section] Editorial | "Why Embroidery Is the Right Choice for Professional and Corporate Apparel" (h3 blocks)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DST file setup and logo digitization | "**DST File Setup and Logo Digitization**" (h3) — link the section intro | ✅ EXISTING | `/design-services/logo-design` | "Your Logo Is Your First Impression" |
| 2 | screen printing | ➕ ADD at end of "Perceived Value" h3: "For high-volume orders where cost per unit is a priority, **screen printing** remains a strong alternative." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Best Cost Per Unit for Larger Quantities" |
| 3 | reunion shirts | ➕ ADD at closing paragraph: "Embroidered options are also available for **reunion shirts** and **spirit wear** orders." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Family Reunion Shirts" |
| 4 | spirit wear | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |

---
---

# ⑦ RHINESTONE SHIRTS — `/custom-apparel/printing-options/rhinestone-apparel`

## [Section] | "Crystal Bling That Turns Every Head"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | glitter shirts | ➕ ADD: "Rhinestone designs pair beautifully alongside **glitter shirts** and **foil shirts** for a full sparkle look." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 2 | foil shirts | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/specialty-materials/foil-shirts` | "Mirror-Finish Metallic That Commands Attention" |
| 3 | bachelorette parties | ➕ ADD: "Rhinestone shirts are a staple for **bachelorette parties**, birthday events, and group celebrations." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Make Your Reunion Special" |

---

## [Section] | "Custom Designs for Any Occasion"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | holographic | ➕ ADD: "Also available in **holographic** and **puff print** finishes for even more dimensional impact." | ➕ ADD | `/custom-apparel/specialty-materials/holographic-shirts` | "The Shirt That Shifts With Every Step" |
| 2 | puff print | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/specialty-materials/puff-shirts` | "3D Texture That Gets Noticed" |
| 3 | spirit wear | ➕ ADD: "Rhinestone is extremely popular in **spirit wear** for cheerleading squads and dance teams." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 4 | logo design | ➕ ADD: "Don't have finished artwork? Our **logo design** team will build your rhinestone layout from scratch." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---
---

# ⑧ VINYL SHIRTS — `/custom-apparel/printing-options/digital-vinyl`

## [Section] | "Heat Press Vinyl — Crisp, Clean, Durable"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DTF transfers | ➕ ADD: "For designs with gradients or photos, **DTF transfers** offer full-color detail without a vinyl cutter." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color With No Color Count Restrictions" |
| 2 | glitter vinyl | ➕ ADD: "We also carry **glitter vinyl**, **flock vinyl**, **foil vinyl**, and **holographic vinyl** for specialty effects." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Available in Multiple Glitter Colors" |
| 3 | screen printing | ➕ ADD: "For bulk orders of 24+, **screen printing** is typically more economical per unit." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Best Cost Per Unit for Larger Quantities" |

---

## [Section] | "Names, Numbers, and Team Gear"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | spirit wear | ➕ ADD: "Vinyl names and numbers are a standard in **spirit wear** and team jerseys throughout Joliet." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "League and Recreational Spirit Wear" |
| 2 | corporate wear | ➕ ADD: "Vinyl lettering is also used for **corporate wear** name identification on uniforms." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Work Uniforms" |

---
---

# ⑨ GLITTER SHIRTS — `/custom-apparel/specialty-materials/glitter-shirts`

## [Section] | "Shirts That Catch Every Light in the Room"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | rhinestone shirts | ➕ ADD: "For even more dimension, **rhinestone shirts** combine crystal elements with glitter vinyl for a layered effect." | ➕ ADD | `/custom-apparel/printing-options/rhinestone-apparel` | "Crystal Bling That Turns Every Head" |
| 2 | holographic | ➕ ADD: "We also carry **holographic** vinyl in shifting rainbow finishes for a futuristic alternative." | ➕ ADD | `/custom-apparel/specialty-materials/holographic-shirts` | "The Shirt That Shifts With Every Step" |

---

## [Section] | "Perfect for Celebrations of Every Kind"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | bachelorette parties | "For **bachelorette parties**, we produce glitter shirts with 'Bride,' 'Bridesmaid,'..." | ✅ EXISTING | `/custom-apparel/group-wear/reunion-shirts` | "Make Your Reunion Special" |
| 2 | Cheerleading squads, dance teams, and performance groups | "**Cheerleading squads, dance teams, and performance groups**..." | ✅ EXISTING | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 3 | custom apparel shop | "We are a veteran owned **custom apparel shop**..." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |

---

## [Section] Editorial | "Why Glitter Shirts Are the Signature Look..." (h3 blocks)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | family reunion | "...a **family reunion** with fifty years of history behind it..." | ✅ EXISTING | `/custom-apparel/group-wear/reunion-shirts` | "Family Reunion Shirts" |
| 2 | foil | ➕ ADD at "Available in Multiple Glitter Colors" h3: "For a solid metallic look without glitter particles, see our **foil** shirts in gold and silver." | ➕ ADD | `/custom-apparel/specialty-materials/foil-shirts` | "Mirror-Finish Metallic That Commands Attention" |
| 3 | care instructions | ➕ ADD linking phrase: "for detailed **care instructions**, see our apparel FAQ." | ➕ ADD | `/custom-apparel` | "Custom Apparel FAQs" |

---
---

# ⑩ PUFF SHIRTS — `/custom-apparel/specialty-materials/puff-shirts`

## [Section] | "3D Texture That Gets Noticed"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | flock shirts | ➕ ADD: "For a soft velvet texture, **flock shirts** offer a similar dimensional feel with a different finish." | ➕ ADD | `/custom-apparel/specialty-materials/flock-shirts` | "3D Texture That Gets Noticed" |
| 2 | rhinestone | ➕ ADD: "Puff print pairs exceptionally well with **rhinestone** accents for mixed-technique designs." | ➕ ADD | `/custom-apparel/printing-options/rhinestone-apparel` | "Custom Designs for Any Occasion" |
| 3 | DTF | ➕ ADD: "The puff layer can be combined with a **DTF transfer** base print for full-color backgrounds." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |

---

## [Section] | "Premium Appeal for Your Brand"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate wear | ➕ ADD: "Puff logos on polos and shirts are increasingly popular in **corporate wear** and branded merchandise." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |
| 2 | promotional items | ➕ ADD: "Puff print branded apparel complements our **promotional items** packages for events." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ⑪ GLOW-IN-THE-DARK SHIRTS — `/custom-apparel/specialty-materials/glow-in-the-dark-shirts`

## All prose sections (apply across card-image-with-text and editorial blocks)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | spirit wear | ➕ ADD: "Glow-in-the-dark shirts are especially popular for **spirit wear** at night games and events." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | reunion shirts | ➕ ADD: "Evening family reunions and class reunion parties frequently request glow apparel — see our **reunion shirts** options." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Make Your Reunion Special" |
| 3 | glitter shirts | ➕ ADD: "Pair glow-in-the-dark vinyl with **glitter shirts** for a day-and-night effect that works in any lighting." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 4 | holographic shirts | ➕ ADD: "For a color-shifting effect that works in any light, also check out our **holographic shirts**." | ➕ ADD | `/custom-apparel/specialty-materials/holographic-shirts` | "The Shirt That Shifts With Every Step" |
| 5 | DTF | ➕ ADD: "We can combine glow vinyl with a **DTF** base print for full-color glow designs." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |

---
---

# ⑫ FLOCK SHIRTS — `/custom-apparel/specialty-materials/flock-shirts`

## All prose sections

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | puff print | ➕ ADD: "Flock and **puff print** are the two primary 3D texture options we offer — similar feel, different visual outcome." | ➕ ADD | `/custom-apparel/specialty-materials/puff-shirts` | "3D Texture That Gets Noticed" |
| 2 | rhinestone | ➕ ADD: "Flock backgrounds pair well with **rhinestone** lettering for a luxurious mixed-technique shirt." | ➕ ADD | `/custom-apparel/printing-options/rhinestone-apparel` | "Crystal Bling That Turns Every Head" |
| 3 | spirit wear | ➕ ADD: "Flock lettering is a popular choice for **spirit wear** letter-jackets and team shirts." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 4 | corporate wear | ➕ ADD: "Flock logos on polos and jackets add a premium tactile quality to **corporate wear**." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ⑬ BRICK SHIRTS — `/custom-apparel/specialty-materials/brick-shirts`

## All prose sections

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | puff print | ➕ ADD: "Brick and **puff print** are both 3D texture techniques — brick delivers a tile-like pattern, puff delivers raised lettering." | ➕ ADD | `/custom-apparel/specialty-materials/puff-shirts` | "3D Texture That Gets Noticed" |
| 2 | flock shirts | ➕ ADD: "For a softer velvet texture, explore **flock shirts** as an alternative dimensional finish." | ➕ ADD | `/custom-apparel/specialty-materials/flock-shirts` | "3D Texture That Gets Noticed" |
| 3 | DTF | ➕ ADD: "Brick vinyl can be layered over a **DTF** base print for fully customized color-and-texture designs." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |
| 4 | corporate wear | ➕ ADD: "Brick-textured logos are a bold statement for **corporate wear** and branded street apparel." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ⑭ HOLOGRAPHIC SHIRTS — `/custom-apparel/specialty-materials/holographic-shirts`

## [Section] | "The Shirt That Shifts With Every Step"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | glitter shirts | ➕ ADD: "For a fixed-sparkle look, **glitter shirts** are the closest complement to holographic vinyl." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 2 | foil shirts | ➕ ADD: "**Foil shirts** offer a solid metallic alternative without the prismatic shift." | ➕ ADD | `/custom-apparel/specialty-materials/foil-shirts` | "Mirror-Finish Metallic That Commands Attention" |
| 3 | rhinestone | ➕ ADD: "**Rhinestone** accents can be added to holographic designs for maximum bling." | ➕ ADD | `/custom-apparel/printing-options/rhinestone-apparel` | "Custom Designs for Any Occasion" |

---

## [Section] | "Futuristic Apparel for Forward-Looking Brands"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | spirit wear | ➕ ADD: "Holographic shirts are a showstopper at **spirit wear** events, performances, and school pep rallies." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | promotional items | ➕ ADD: "Holographic branded apparel makes a memorable addition to **promotional items** and event giveaway packages." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ⑮ FOIL SHIRTS — `/custom-apparel/specialty-materials/foil-shirts`

## [Section] | "Mirror-Finish Metallic That Commands Attention"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | holographic | ➕ ADD: "For a prismatic color-shift effect, **holographic** vinyl takes metallic to the next level." | ➕ ADD | `/custom-apparel/specialty-materials/holographic-shirts` | "The Shirt That Shifts With Every Step" |
| 2 | glitter | ➕ ADD: "**Glitter** vinyl adds sparkle particles for a softer, celebration-ready look." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Shirts That Catch Every Light in the Room" |
| 3 | rhinestone | ➕ ADD: "Foil and **rhinestone** make an exceptional combination for awards ceremonies and gala events." | ➕ ADD | `/custom-apparel/printing-options/rhinestone-apparel` | "Custom Designs for Any Occasion" |

---

## [Section] | "Gold, Silver, and Color Foil Options"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | reunion shirts | ➕ ADD: "Gold foil is especially popular for anniversary **reunion shirts** and milestone birthday events." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Make Your Reunion Special" |
| 2 | corporate wear | ➕ ADD: "Silver and gold foil logos add a premium metallic look to **corporate wear** and branded jackets." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ⑯ REFLECTIVE SHIRTS — `/custom-apparel/specialty-materials/reflective-shirts`

## All prose sections

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate wear | ➕ ADD: "Reflective vinyl on work shirts and jackets is a staple of safety-conscious **corporate wear** and trade uniforms." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Work Uniforms" |
| 2 | embroidery | ➕ ADD: "Pair reflective vinyl with **embroidery** for a shirt that meets both safety and professional brand standards." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "The Most Professional Look in Custom Apparel" |
| 3 | screen printing | ➕ ADD: "For high-volume safety-wear orders, combine reflective accents with **screen printing** for cost-effective production." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Best Cost Per Unit for Larger Quantities" |
| 4 | spirit wear | ➕ ADD: "Reflective shirts are also popular for **spirit wear** at evening events and outdoor sports." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |

---
---

# ⑰ REUNION SHIRTS — `/custom-apparel/group-wear/reunion-shirts`

## [Section] | "Class Reunion Shirts"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | screen printing, digital printing...and dye sublimation | "We offer **screen printing**, digital printing, laser printing, and **dye sublimation**." | ✅ EXISTING | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard" |
| 2 | dye sublimation | (second link in same sentence) | ✅ EXISTING | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 3 | free design help | "We offer **free design help** so you do not need to come in with a finished artwork file." | ✅ EXISTING | `/design-services` | "From Concept to Print — We Handle the Design" |

---

## [Section] | "School Alumni Shirts"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | free web store | "We offer a **free web store** so every classmate can order their own shirt directly." | ✅ EXISTING | `/design-services/custom-storefronts` | "Your Own Online Store — Zero Tech Work Required" |
| 2 | no minimum orders | "We offer **no minimum orders** so you do not have to guess how many shirts to buy." | ✅ EXISTING | `/custom-apparel` | "Custom Apparel FAQs" |

---

## [Section] | "Family Reunion Shirts"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | spirit wear | ➕ ADD: "Looking for spirit or fan apparel beyond reunions? See our full **spirit wear** options." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | glitter shirts | ➕ ADD: "Want your reunion shirts to truly sparkle? Add **glitter shirts** to your group order." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Perfect for Celebrations of Every Kind" |
| 3 | contact | "Call us to discuss your timeline at (815) 349-8600 or **contact** us online." | ✅ EXISTING | `/contact` | "Contact" hero |

---
---

# ⑱ SPIRIT WEAR — `/custom-apparel/group-wear/spirit-wear-shirts`

## [Section] | "School Spirit Wear"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | DTF | ➕ ADD: "We produce spirit wear using **DTF**, **screen printing**, rhinestone, glow-in-the-dark, and more." | ➕ ADD | `/custom-apparel/printing-options/dtf-printing` | "Full Color Transfers for Any Fabric" |
| 2 | screen printing | (same ADD as above, second link) | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Ideal for Bulk Orders and Uniforms" |
| 3 | glow-in-the-dark | (same ADD as above, third link) | ➕ ADD | `/custom-apparel/specialty-materials/glow-in-the-dark-shirts` | hero |

---

## [Section] | "Custom Fan Wear"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | reunion shirts | ➕ ADD: "Planning a class or family reunion? See our **reunion shirts** for group event apparel." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "Reunion Shirt Templates" |
| 2 | corporate wear | ➕ ADD: "For professional branded apparel for your organization's staff, explore our **corporate wear** options." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Custom Work Uniforms" |

---

## [Section] | "Spirit Wear That Delivers" / "League and Recreational Spirit Wear"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom storefronts | ➕ ADD: "Schools can set up a **custom storefront** so parents and students order directly — no money collection required." | ➕ ADD | `/design-services/custom-storefronts` | "Your Own Online Store — Zero Tech Work Required" |
| 2 | banners | ➕ ADD: "Complete your school or team event with matching **banners** and **yard signs** from our sign shop." | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |
| 3 | yard signs | (same ADD as above, second link) | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |

---
---

# ⑲ CORPORATE WEAR — `/custom-apparel/group-wear/corporate-wear-shirts`

## [Section] | "Custom Polo Shirts"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | embroidery | ➕ ADD: "Polo shirts are most commonly decorated with **embroidery** for a polished, professional look." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "The Most Professional Look in Custom Apparel" |
| 2 | screen printing | ➕ ADD: "**Screen printing** is available for bold graphic logos on polos and performance shirts." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "The Classic Standard for Custom Apparel" |
| 3 | logo design | ➕ ADD: "Don't have a logo yet? Our **logo design** team will create one built for embroidery and print applications." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---

## [Section] | "Corporate Wear Builds Your Brand"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | promotional items | ➕ ADD: "Round out your corporate branding with our **promotional items** — branded mugs, tote bags, and more." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 2 | banners | ➕ ADD: "Bring your brand's full presence to trade shows with matching **banners** and **table cloths**." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |
| 3 | table cloths | (same ADD as above, second link) | ➕ ADD | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |

---

## [Section] | "Custom Caps and Accessories"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | embroidered caps | ➕ ADD: "**Embroidered caps** carry your logo with the same professional finish as your polo shirts." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "Corporate Uniforms, Caps, and Accessories" |
| 2 | promotional items | ➕ ADD: "Caps work great as **promotional items** — hand them to clients, staff, and event attendees." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ⑳ SIGNS INDEX — `/signs`

## [Section] `x-sections.card-image-with-text` | "Professional Sign Printing for Every Business in Will County"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | yard signs | "...from **yard signs** and sidewalk a-frames to full-color vinyl banners..." | ✅ EXISTING | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |
| 2 | vinyl banners | "...full-color **vinyl banners**, window graphics, wall decals..." | ✅ EXISTING | `/signs/business-signs/banners` | "Custom Vinyl Banners" |
| 3 | window graphics | "...vinyl banners, **window graphics**, wall decals, floor signs..." | ✅ EXISTING | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 4 | wall decals | "...window graphics, **wall decals**, floor signs, door signs..." | ✅ EXISTING | `/signs/business-signs/wall-signs` | "Brand Your Interior Spaces" |
| 5 | floor signs | "...wall decals, **floor signs**, door signs, business signs..." | ✅ EXISTING | `/signs/business-signs/floor-signs` | "Advertising That Goes Where Customers Walk" |
| 6 | door signs | "...floor signs, **door signs**, business signs, posters..." | ✅ EXISTING | `/signs/business-signs/door-signs` | "Professional Door Graphics That Make an Impression" |
| 7 | table runners, table cloths | "...posters, **table runners**, **table cloths**, and parking signs." | ✅ EXISTING | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |
| 8 | vehicle graphics | ➕ ADD: "Need your brand on the move? Explore our **vehicle graphics** for mobile advertising." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---
---

# ㉑ BANNERS — `/signs/business-signs/banners`

## [Section] | "Business Banners"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | window signs | ➕ ADD: "Pair your outdoor banner with **window signs** to reinforce your brand messaging at street level and at the door." | ➕ ADD | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 2 | yard signs | ➕ ADD: "**Yard signs** extend your outdoor presence beyond your storefront to high-traffic areas nearby." | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |

---

## [Section] | "Custom Vinyl Banners"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | indoor fabric banners | "We also offer **indoor fabric banners** for clients who need a premium look for trade shows or corporate presentations." | ✅ EXISTING | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |
| 2 | table runners | ➕ ADD: "Complete your trade show setup with branded **table runners** and **table cloths** in the same order." | ➕ ADD | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |
| 3 | vehicle graphics | ➕ ADD: "For year-round mobile advertising, **vehicle graphics** complement banners as a one-time investment." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---

## [Section] | "Birthday and Celebration Banners"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom shirts | ➕ ADD: "Bundle your celebration banner with matching **custom shirts** for a fully coordinated event look." | ➕ ADD | `/custom-apparel/specialty-materials/glitter-shirts` | "Perfect for Celebrations of Every Kind" |
| 2 | promotional items | ➕ ADD: "**Promotional items** like custom mugs and koozies make perfect party favor companions to your banner." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ㉒ WINDOW SIGNS — `/signs/business-signs/window-signs`

## [Section] | "Turn Your Windows Into Advertising Space"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | wall signs | ➕ ADD: "Carry your branding inside with **wall signs** and murals that reinforce your exterior messaging." | ➕ ADD | `/signs/business-signs/wall-signs` | "Brand Your Interior Spaces" |
| 2 | floor signs | ➕ ADD: "**Floor signs** guide customers from the moment they step through the door." | ➕ ADD | `/signs/business-signs/floor-signs` | "Advertising That Goes Where Customers Walk" |
| 3 | door signs | ➕ ADD: "**Door signs** with your hours, logo, and contact info are the first thing customers see at eye level." | ➕ ADD | `/signs/business-signs/door-signs` | "Professional Door Graphics That Make an Impression" |

---

## [Section] | "Perforated Vinyl and Window Clings"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | vehicle graphics | ➕ ADD: "Perforated vinyl techniques are also used in **vehicle graphics** for see-through rear window wraps." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Car Wraps and Vinyl Lettering" |
| 2 | stickers | ➕ ADD: "Need a removable option with no adhesive commitment? Our **stickers and decals** may be the right fit." | ➕ ADD | `/stickers` | "Custom Stickers for Business, Events, and Personal Use" |
| 3 | banners | ➕ ADD: "For exterior displays beyond your windows, vinyl **banners** offer large-format visibility from the street." | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |

---
---

# ㉓ WALL SIGNS — `/signs/business-signs/wall-signs`

## [Section] | "Brand Your Interior Spaces"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | window signs | ➕ ADD: "Interior wall graphics work in harmony with **window signs** to create a fully branded storefront environment." | ➕ ADD | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 2 | floor signs | ➕ ADD: "Complete the interior brand experience with **floor signs** that guide and inform customers at every step." | ➕ ADD | `/signs/business-signs/floor-signs` | "Advertising That Goes Where Customers Walk" |

---

## [Section] | "Office Murals and Lobby Graphics"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo design | ➕ ADD: "Need a logo built for large-format wall application? Our **logo design** team creates scalable vector artwork." | ➕ ADD | `/design-services/logo-design` | "Designed for Every Application" |
| 2 | graphic design | ➕ ADD: "Our **graphic design** team can lay out full-wall murals ready for production." | ➕ ADD | `/design-services/graphic-design` | "Design That Is Ready for Production" |
| 3 | door signs | ➕ ADD: "**Door signs** with matching fonts and colors tie your lobby and entrance graphics together." | ➕ ADD | `/signs/business-signs/door-signs` | "Professional Door Graphics That Make an Impression" |

---
---

# ㉔ FLOOR SIGNS — `/signs/business-signs/floor-signs`

## [Section] | "Advertising That Goes Where Customers Walk"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | wall signs | ➕ ADD: "Coordinate floor graphics with **wall signs** and **window signs** for a complete interior brand system." | ➕ ADD | `/signs/business-signs/wall-signs` | "Brand Your Interior Spaces" |
| 2 | window signs | (same ADD as above, second link) | ➕ ADD | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 3 | table cloths | ➕ ADD: "For trade show floors, pair floor graphics with branded **table cloths** for a fully covered booth presentation." | ➕ ADD | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |

---

## [Section] | "From Trade Show Floors to Retail Aisles"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | banners | ➕ ADD: "Trade show setups benefit most when **banners**, **table runners**, and floor graphics all carry the same brand design." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |
| 2 | table runners | (same ADD as above, second link) | ➕ ADD | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |
| 3 | promotional items | ➕ ADD: "Hand out **promotional items** — mugs, tote bags, koozies — that reinforce the same messaging on your booth floor." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ㉕ DOOR SIGNS — `/signs/business-signs/door-signs`

## [Section] | "Professional Door Graphics That Make an Impression"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | window signs | ➕ ADD: "Door graphics are most impactful when they match the design language of your **window signs** and **wall signs**." | ➕ ADD | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 2 | wall signs | (same ADD as above, second link) | ➕ ADD | `/signs/business-signs/wall-signs` | "Brand Your Interior Spaces" |
| 3 | logo design | ➕ ADD: "Need a professional logo before we print your door graphics? Our **logo design** team has you covered." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---

## [Section] | "Frosted, Perforated, and Full-Color Options"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | stickers | ➕ ADD: "Frosted window clings and perforated vinyl use similar materials to our **custom stickers and decals** — just at a larger scale." | ➕ ADD | `/stickers` | "Custom Stickers for Business, Events, and Personal Use" |
| 2 | vehicle graphics | ➕ ADD: "The same vinyl technology used on door graphics is used in our **vehicle graphics** for cars, vans, and trucks." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---
---

# ㉖ POSTERS — `/signs/business-signs/posters`

## [Section] | "Poster Printing in Joliet"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | banners | ➕ ADD: "For outdoor or large-scale displays, **banners** are a weather-resistant alternative to posters." | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |
| 2 | yard signs | ➕ ADD: "For event promotion that extends beyond a venue wall, **yard signs** put your message on the street." | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |

---

## [Section] | "Design and Paper Options"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | graphic design | ➕ ADD: "Don't have finished poster artwork? Our **graphic design** team produces print-ready layouts fast." | ➕ ADD | `/design-services/graphic-design` | "Design That Is Ready for Production" |
| 2 | custom apparel | ➕ ADD: "Posters pair well with **custom apparel** when promoting an event — shirts and signage in one order." | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |

---
---

# ㉗ YARD SIGNS — `/signs/ground-signs/yard-signs`

## [Section] | "Yard Signs for Your Business"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | sidewalk signs | ➕ ADD: "Pair yard signs with a **sidewalk sign** at your entrance to capture both street traffic and foot traffic." | ➕ ADD | `/signs/ground-signs/sidewalk-signs` | "A Frame Signs for Your Business" |
| 2 | vehicle graphics | ➕ ADD: "**Vehicle graphics** on your company vehicles extend your brand reach beyond where a yard sign can go." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 3 | banners | ➕ ADD: "For larger outdoor displays, a **banner** mounted to your fence or building covers much more visual territory." | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |

---

## [Section] | "Real Estate and Political Signs"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | stickers | ➕ ADD: "Real estate agents also use our **custom stickers** as branded labels on flyers and listing packets." | ➕ ADD | `/stickers/stickers/standard-stickers-decals` | "Custom Stickers for Your Brand" |
| 2 | vehicle magnets | ➕ ADD: "**Vehicle magnets** are popular with agents who want removable car branding that comes off between listings." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/vehicle-magnets` | "Removable Car Magnets for Business and Personal Vehicles" |

---

## [Section] | "Corrugated Plastic and Table Signs"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | table top signs | "...We frequently print **table top signs** for wedding receptions, trade shows, open houses..." | ✅ EXISTING | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |
| 2 | table runners | ➕ ADD: "Pair corrugated table signs with branded **table runners** for a fully dressed event table." | ➕ ADD | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |

---
---

# ㉘ SIDEWALK SIGNS — `/signs/ground-signs/sidewalk-signs`

## [Section] | "A Frame Signs for Your Business"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | yard signs | ➕ ADD: "Complement your sidewalk A-frame with **yard signs** for street-level coverage beyond your immediate entrance." | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |
| 2 | window signs | ➕ ADD: "Create a complete curb-to-door brand presence by pairing your sidewalk sign with **window signs** at your entrance." | ➕ ADD | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |

---

## [Section] | "Durable Plastic and Metal A Frames"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | banners | ➕ ADD: "For events requiring more coverage, **banners** mounted to fences or building facades extend your outdoor footprint." | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |
| 2 | graphic design | ➕ ADD: "Need a compelling layout for your A-frame insert? Our **graphic design** team produces quick-turnaround artwork." | ➕ ADD | `/design-services/graphic-design` | "Design That Is Ready for Production" |

---
---

# ㉙ TABLE CLOTHS — `/signs/table-signs/table-cloths`

## [Section] | "Look Professional at Every Event"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | table runners | ➕ ADD: "**Table runners** are a narrower alternative that lets your table cloth show while still carrying your brand." | ➕ ADD | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |
| 2 | banners | ➕ ADD: "Complete your trade show booth with matching **banners** hung above your table for maximum height and visibility." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |
| 3 | promotional items | ➕ ADD: "Fill your branded table with **promotional items** — mugs, coasters, and tote bags — to complete the brand experience." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---

## [Section] | "Fitted, Throw, and Stretch Styles Available"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | corporate wear | ➕ ADD: "Table cloths work especially well when they match the brand colors of your team's **corporate wear**." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |
| 2 | logo design | ➕ ADD: "Need a professional logo for your table cloth design? Our **logo design** team creates print-ready vector artwork." | ➕ ADD | `/design-services/logo-design` | "Designed for Every Application" |

---
---

# ㉚ TABLE RUNNERS — `/signs/table-signs/table-runners`

## [Section] | "Custom Table Runners"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | table cloths | ➕ ADD: "**Table cloths** in matching colors provide full-coverage base coverage under your runner." | ➕ ADD | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |
| 2 | banners | ➕ ADD: "For vertical display above the table, **banners** complete the trade show or event setup." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |

---

## [Section] | "Branded Event Table Products"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | promotional items | ➕ ADD: "The products on your table matter too — fill it with **promotional items** that attendees will take home." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 2 | corporate wear | ➕ ADD: "Branded **corporate wear** on your staff at the table ties the whole event presentation together." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ㉛ STICKERS INDEX — `/stickers`

## [Section] `x-sections.card-image-with-text` | "Custom Stickers for Business, Events, and Personal Use"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | product packaging | "You can stick them on **product packaging**..." | ✅ EXISTING | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 2 | storefront windows | "...apply them to **storefront windows**..." | ✅ EXISTING | `/signs/business-signs/window-signs` | "Turn Your Windows Into Advertising Space" |
| 3 | vehicle windows | "...apply them to...vehicle windows..." | ✅ EXISTING | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Car Wraps and Vinyl Lettering" |
| 4 | custom die-cut shapes | "...as well as fully **custom die-cut shapes** that cut directly around the outline of your design." | ✅ EXISTING | `/stickers/stickers/custom-shaped-stickers-decals` | "Die Cut to Any Shape" |
| 5 | standard rectangular, square, circle, and oval stickers | "**Standard rectangular, square, circle, and oval stickers** are available..." | ✅ EXISTING | `/stickers/stickers/standard-stickers-decals` | "Custom Stickers for Your Brand" |

---
---

# ㉜ STANDARD STICKERS — `/stickers/stickers/standard-stickers-decals`

## [Section] | "Custom Stickers for Your Brand"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom shaped stickers | ➕ ADD: "For a die-cut silhouette that matches your logo outline, see our **custom shaped stickers**." | ➕ ADD | `/stickers/stickers/custom-shaped-stickers-decals` | "Die Cut to Any Shape" |
| 2 | vehicle decals | ➕ ADD: "For vehicle-specific application with professional-grade cast vinyl, explore our **vehicle decals** and DOT decals." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/dot-decals` | "USDOT Number Stickers and Compliance Requirements" |
| 3 | window signs | ➕ ADD: "For full-panel window coverage, our **window signs** offer perforated vinyl and large-format application." | ➕ ADD | `/signs/business-signs/window-signs` | "Perforated Vinyl and Window Clings" |

---

## [Section] | "Die Cut Stickers for Any Group"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | promotional items | ➕ ADD: "Stickers work well as **promotional items** in event bags, mailers, and product shipments." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 2 | custom apparel | ➕ ADD: "Pair stickers with **custom apparel** for a bundled event or brand kit." | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 3 | logo design | ➕ ADD: "Don't have a finalized logo for your sticker? Our **logo design** team creates vector artwork ready for any size." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---
---

# ㉝ CUSTOM SHAPED STICKERS — `/stickers/stickers/custom-shaped-stickers-decals`

## [Section] | "Die Cut to Any Shape"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | standard stickers | ➕ ADD: "Need a simple rectangle or circle? Our **standard stickers** are the most economical option." | ➕ ADD | `/stickers/stickers/standard-stickers-decals` | "Custom Stickers for Your Brand" |
| 2 | vehicle graphics | ➕ ADD: "For large die-cut graphics on vehicles, our **vehicle graphics** team handles full-scale custom shapes." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 3 | graphic design | ➕ ADD: "Our **graphic design** team can help build a cut-path outline from any logo or artwork." | ➕ ADD | `/design-services/graphic-design` | "Design That Is Ready for Production" |

---

## [Section] | "Weatherproof and Built to Last"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | promotional items | ➕ ADD: "Weatherproof die-cut stickers make excellent **promotional items** — they go on laptops, water bottles, and hard hats." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 2 | DOT decals | ➕ ADD: "For commercial truck compliance, we also produce **DOT decals** with the same precision die-cut process." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/dot-decals` | "USDOT Number Stickers and Compliance Requirements" |

---
---

# ㉞ VEHICLE GRAPHICS INDEX — `/vehicle-graphics`

## [Section] `x-sections.card-image-with-text` | "Turn Your Vehicle Into a Moving Billboard"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | full vehicle wrap | "...whether you need a **full vehicle wrap**, a partial wrap with vinyl lettering..." | ✅ EXISTING | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Car Wraps and Vinyl Lettering" |
| 2 | removable magnetic signs | "...or **removable magnetic signs**..." | ✅ EXISTING | `/vehicle-graphics/vehicle-graphics/vehicle-magnets` | "Removable Car Magnets for Business and Personal Vehicles" |
| 3 | USDOT compliance decals | "...or **USDOT compliance decals** for your commercial truck..." | ✅ EXISTING | `/vehicle-graphics/vehicle-graphics/dot-decals` | "USDOT Number Stickers and Compliance Requirements" |
| 4 | yard signs | ➕ ADD: "Extend your brand to your job sites and storefronts with **yard signs** and **banners**." | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |
| 5 | banners | (same ADD as above, second link) | ➕ ADD | `/signs/business-signs/banners` | "Custom Vinyl Banners" |

---
---

# ㉟ AUTOMOBILE GRAPHICS — `/vehicle-graphics/vehicle-graphics/automobile-graphics`

## [Section] | "Car Wraps and Vinyl Lettering"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | vehicle magnets | ➕ ADD: "Not ready for a permanent wrap? **Vehicle magnets** are a removable, commitment-free option." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/vehicle-magnets` | "Removable Car Magnets for Business and Personal Vehicles" |
| 2 | DOT decals | ➕ ADD: "Commercial trucks also need **DOT decals** — we handle compliance lettering alongside graphics in one visit." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/dot-decals` | "USDOT Number Stickers and Compliance Requirements" |

---

## [Section] | "Commercial Van Lettering and Fleet Branding"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo design | ➕ ADD: "Fleet branding starts with a strong logo — our **logo design** team builds vehicle-ready vector artwork." | ➕ ADD | `/design-services/logo-design` | "Designed for Every Application" |
| 2 | banners | ➕ ADD: "Pair fleet graphics with branded **banners** at your shop, job sites, or trade show booths." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |
| 3 | corporate wear | ➕ ADD: "Fleet-branded vehicles make the most impact when matched with **corporate wear** uniforms on your team." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ㊱ VEHICLE MAGNETS — `/vehicle-graphics/vehicle-graphics/vehicle-magnets`

## [Section] | "Removable Car Magnets for Business and Personal Vehicles"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | automobile graphics | ➕ ADD: "Ready for something permanent? **Automobile graphics** with cast vinyl lettering last 5+ years." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Car Wraps and Vinyl Lettering" |
| 2 | DOT decals | ➕ ADD: "Commercial vehicles still need permanent **DOT decals** even when using removable magnets for branding." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/dot-decals` | "USDOT Number Stickers and Compliance Requirements" |
| 3 | yard signs | ➕ ADD: "**Yard signs** work great alongside vehicle magnets for contractors and home service companies." | ➕ ADD | `/signs/ground-signs/yard-signs` | "Yard Signs for Your Business" |

---

## [Section] | "Full Color or Vinyl Cut: Choosing the Right Magnet"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo design | ➕ ADD: "A print-ready vector logo is key to a sharp-looking magnet — our **logo design** team can create or vectorize yours." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |
| 2 | stickers | ➕ ADD: "For application to glass, walls, or non-magnetic surfaces, our **custom stickers and decals** are the right fit." | ➕ ADD | `/stickers` | "Custom Stickers for Business, Events, and Personal Use" |

---
---

# ㊲ DOT DECALS — `/vehicle-graphics/vehicle-graphics/dot-decals`

## [Section] | "USDOT Number Stickers and Compliance Requirements"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | automobile graphics | ➕ ADD: "Many of our DOT decal customers also order full **automobile graphics** — lettering, logos, and truck branding — in the same visit." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Commercial Van Lettering and Fleet Branding" |
| 2 | vehicle magnets | ➕ ADD: "**Vehicle magnets** for removable branding can be ordered alongside your DOT compliance decals." | ➕ ADD | `/vehicle-graphics/vehicle-graphics/vehicle-magnets` | "Removable Car Magnets for Business and Personal Vehicles" |

---

## [Section] | "Trucking Logo Design and Truck Branding"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo design | "...**logo design** and truck branding..." | ✅ EXISTING | `/design-services/logo-design` | "Your Logo Is Your First Impression" |
| 2 | corporate wear | ➕ ADD: "Branded trucks need branded drivers — **corporate wear** with your company logo completes the fleet identity." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |
| 3 | custom stickers | ➕ ADD: "Also need smaller custom labels or identification stickers? Our **custom stickers** are printed with the same precision vinyl." | ➕ ADD | `/stickers/stickers/standard-stickers-decals` | "Custom Stickers for Your Brand" |

---
---

# ㊳ PROMOTIONAL ITEMS INDEX — `/promotional-items`

## [Section] `x-sections.card-image-with-text` | "Branded Products That Put Your Logo in Your Customers' Hands"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | mugs | "...branded **mugs** or koozie stays on someone's desk..." | ✅ EXISTING | `/promotional-items/mugs` | "Coffee Mugs That Work for Your Brand" |
| 2 | koozies | "...a branded mug or **koozie**..." | ✅ EXISTING | `/promotional-items/can-koozies` | hero |
| 3 | mugs for the office, koozies for the game, towels...coasters...tote bags...mouse pads | "...We offer a curated selection...— **mugs** for the office, **koozies** for the game, **towels** for the gym, **coasters** for the restaurant table, **tote bags** for the grocery run, and **mouse pads** for the desk." | ✅ EXISTING | Use each noun as individual links to respective sub-pages | Respective sub-page heros |
| 4 | dye sublimation | "...using **dye sublimation**, which bonds the ink into the material..." | ✅ EXISTING | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 5 | custom apparel | ➕ ADD: "Combine promotional products with **custom apparel** for a complete branded event package." | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |

---
---

# ㊴ MUGS — `/promotional-items/mugs`

## [Section] | "Bundle Mugs With Custom Apparel for Event Packages"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom apparel | "Bundle Mugs With **Custom Apparel** for Event Packages" | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 2 | tote bags | ➕ ADD: "Mugs pair well with **tote bags** and **koozies** in a branded gift set or welcome bag." | ➕ ADD | `/promotional-items/tote-bags` | "Walking Billboards for Your Brand" |
| 3 | koozies | (same ADD as above, second link) | ➕ ADD | `/promotional-items/can-koozies` | hero |
| 4 | table cloths | ➕ ADD: "Display your branded mugs on a **table cloth** at trade show booths and corporate events." | ➕ ADD | `/signs/table-signs/table-cloths` | "Look Professional at Every Event" |

---

## [Section] | "Easy Ordering, Fast Turnaround"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | dye sublimation | ➕ ADD: "Mugs are printed using **dye sublimation** — the same full-color process used on apparel." | ➕ ADD | `/custom-apparel/printing-options/dye-sublimation-printing` | "Full-Color, All-Over Printing" |
| 2 | logo design | ➕ ADD: "Need a logo that looks sharp on a mug? Our **logo design** team creates artwork built for this exact application." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---
---

# ㊵ TOTE BAGS — `/promotional-items/tote-bags`

## [Section] | "Walking Billboards for Your Brand"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | screen printing | ➕ ADD: "We also offer **screen printing** on canvas tote bags for bold, one or two color designs at bulk pricing." | ➕ ADD | `/custom-apparel/printing-options/screen-printing` | "Works on Almost Any Garment" |
| 2 | mugs | ➕ ADD: "Bundle tote bags with **mugs**, **koozies**, and **mouse pads** for a complete corporate gift set." | ➕ ADD | `/promotional-items/mugs` | "Coffee Mugs That Work for Your Brand" |
| 3 | corporate wear | ➕ ADD: "Tote bags branded with the same logo as your **corporate wear** create a cohesive brand identity across every touchpoint." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |

---
---

# ㊶ DESIGN SERVICES INDEX — `/design-services`

## [Section] `x-sections.card-image-with-text` | "From Concept to Print — We Handle the Design"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo creation from scratch | "We offer full **logo creation from scratch**..." | ✅ EXISTING | `/design-services/logo-design` | "Your Logo Is Your First Impression" |
| 2 | graphic design for signs, banners, apparel, promotional products | "...comprehensive **graphic design for signs, banners, apparel, promotional products**..." | ✅ EXISTING | `/design-services/graphic-design` | "Design That Is Ready for Production" |
| 3 | free online designer tool | "We also maintain a **free online designer tool**..." | ✅ EXISTING | `/design-services/custom-storefronts` | "Your Own Online Store — Zero Tech Work Required" |
| 4 | signs | ➕ ADD: "Design work produced for **signs**, **apparel**, **vehicle graphics**, or **promotional items** all happens under one roof." | ➕ ADD | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 5 | apparel | (same ADD as above, second link) | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 6 | vehicle graphics | (same ADD as above, third link) | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 7 | promotional items | (same ADD as above, fourth link) | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ㊷ LOGO DESIGN — `/design-services/logo-design`

## [Section] | "Your Logo Is Your First Impression"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | graphic design | ➕ ADD: "Beyond your logo, our **graphic design** team creates full layouts for any print application." | ➕ ADD | `/design-services/graphic-design` | "Design That Is Ready for Production" |
| 2 | embroidery | ➕ ADD: "Your logo will be digitized and ready for **embroidery** on polos, caps, and jackets — not just printing." | ➕ ADD | `/custom-apparel/printing-options/embroidery` | "DST File Setup and Logo Digitization" |
| 3 | vehicle graphics | ➕ ADD: "A strong logo is the starting point for **vehicle graphics** that command attention on the road." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---

## [Section] | "Designed for Every Application"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | signs | ➕ ADD: "Your logo will be sized and formatted for **signs**, **banners**, **stickers**, and every print format we produce." | ➕ ADD | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 2 | custom storefronts | ➕ ADD: "Once your logo is ready, your brand is set for a **custom storefront** — your own online ordering portal." | ➕ ADD | `/design-services/custom-storefronts` | "Your Own Online Store — Zero Tech Work Required" |

---
---

# ㊸ GRAPHIC DESIGN — `/design-services/graphic-design`

## [Section] | "Design That Is Ready for Production"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | logo design | ➕ ADD: "Need a logo before we can design your layout? Our **logo design** service creates your brand identity from scratch." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |
| 2 | signs and banners | ➕ ADD: "Print-ready artwork goes directly to production on **signs and banners**, apparel, or vehicle graphics." | ➕ ADD | `/signs/business-signs/banners` | "Business Banners" |
| 3 | custom apparel | ➕ ADD: "Layouts built for **custom apparel** require different file specs than signage — we know the difference and deliver both." | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |

---

## [Section] | "From Concept to Finished Product"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | vehicle graphics | ➕ ADD: "**Vehicle graphics** require template-accurate artwork for each vehicle make and model — we handle that too." | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 2 | promotional items | ➕ ADD: "**Promotional items** like mugs, coasters, and mouse pads all need artwork formatted to their specific print areas." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 3 | custom storefronts | ➕ ADD: "A finished design package positions you perfectly to open a **custom storefront** for your school, team, or organization." | ➕ ADD | `/design-services/custom-storefronts` | "Your Own Online Store — Zero Tech Work Required" |

---
---

# ㊹ CUSTOM STOREFRONTS — `/design-services/custom-storefronts`

## [Section] | "Your Own Online Store — Zero Tech Work Required"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | spirit wear | ➕ ADD: "**Spirit wear** stores are one of our most popular storefront categories — schools and teams love the hands-off ordering experience." | ➕ ADD | `/custom-apparel/group-wear/spirit-wear-shirts` | "School Spirit Wear" |
| 2 | corporate wear | ➕ ADD: "**Corporate wear** storefronts let employees self-serve their uniform orders without admin overhead." | ➕ ADD | `/custom-apparel/group-wear/corporate-wear-shirts` | "Corporate Wear Builds Your Brand" |
| 3 | logo design | ➕ ADD: "Every storefront starts with a logo — if you need one built, our **logo design** team gets you there first." | ➕ ADD | `/design-services/logo-design` | "Your Logo Is Your First Impression" |

---

## [Section] | "Built-In Features for Schools and Events"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | reunion shirts | ➕ ADD: "Storefronts are the easiest way to manage **reunion shirt** orders — each participant orders their own size and pays online." | ➕ ADD | `/custom-apparel/group-wear/reunion-shirts` | "School Alumni Shirts" |
| 2 | promotional items | ➕ ADD: "Storefronts can also carry **promotional items** — mugs, tote bags, and more — alongside your apparel offerings." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---
---

# ㊺ ABOUT US — `/about-us`

## [Section] `x-sections.about-preview` | Core values prose block

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | Signs | "**Signs**, shirts, stickers, embroidery, promotional products, vehicle decals, table runners, banners — we do it all in one shop." | ✅ EXISTING | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 2 | shirts | "Signs, **shirts**, stickers..." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 3 | stickers | "...shirts, **stickers**, embroidery..." | ✅ EXISTING | `/stickers` | "Custom Stickers for Business, Events, and Personal Use" |
| 4 | embroidery | "...**embroidery**, promotional products..." | ✅ EXISTING | `/custom-apparel/printing-options/embroidery` | "The Most Professional Look in Custom Apparel" |
| 5 | promotional products | "...**promotional products**, vehicle decals..." | ✅ EXISTING | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 6 | vehicle decals | "...**vehicle decals**, table runners, banners..." | ✅ EXISTING | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 7 | table runners | "...**table runners**, banners..." | ✅ EXISTING | `/signs/table-signs/table-runners` | "Custom Table Runners for Any Event" |
| 8 | banners | "...table runners, **banners**..." | ✅ EXISTING | `/signs/business-signs/banners` | "Custom Vinyl Banners" |

---

## [Section] `x-sections.top5pct-same-day-service`

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | portfolio | ➕ ADD: "See our quality in the **portfolio** — real work for real local businesses." | ➕ ADD | `/portfolio` | "Our Portfolio" |
| 2 | reviews | ➕ ADD: "Don't take our word for it — read our **reviews** from customers across Will County." | ➕ ADD | `/reviews` | "Hundreds of 5-Star Reviews and Counting" |
| 3 | service areas | ➕ ADD: "We serve Joliet and all surrounding **service areas** throughout Will County and Chicagoland." | ➕ ADD | `/service-areas` | "Proudly Serving Joliet..." |

---
---

# ㊻ PORTFOLIO — `/portfolio`

## [Section] `x-sections.category-hero` | "Our Portfolio" (description copy)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom shirts | "Browse our gallery of **custom shirts**, signs, vehicle wraps, and promotional products." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 2 | signs | "...custom shirts, **signs**, vehicle wraps..." | ✅ EXISTING | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 3 | vehicle wraps | "...**vehicle wraps**, and promotional products." | ✅ EXISTING | `/vehicle-graphics/vehicle-graphics/automobile-graphics` | "Car Wraps and Vinyl Lettering" |
| 4 | promotional products | "...and **promotional products**." | ✅ EXISTING | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |

---

## [Section] `x-sections.faq` | "Portfolio FAQs"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | get a quote | ➕ ADD FAQ answer: "Ready to start your own project? **Get a quote** online or call us directly." | ➕ ADD | `/contact` | "Contact" hero |
| 2 | about us | ➕ ADD FAQ answer: "Learn **about us** — veteran-owned and serving Joliet since 2017." | ➕ ADD | `/about-us` | "About" hero |
| 3 | reviews | ➕ ADD: "See what customers are saying — browse our **reviews** from across Will County." | ➕ ADD | `/reviews` | "Hundreds of 5-Star Reviews and Counting" |

---
---

# ㊼ REVIEWS — `/reviews`

## [Section] `x-sections.card-image-with-text` | "Hundreds of 5-Star Reviews and Counting"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | portfolio | ➕ ADD: "See the work that earned these reviews in our **portfolio**." | ➕ ADD | `/portfolio` | "Our Portfolio" |
| 2 | about us | ➕ ADD: "Learn more **about us** — the veteran-owned team behind every 5-star job." | ➕ ADD | `/about-us` | "About" hero |
| 3 | contact | ➕ ADD: "Ready to be our next happy customer? **Contact** us for a free quote." | ➕ ADD | `/contact` | "Contact" hero |
| 4 | custom apparel | ➕ ADD: "Our most reviewed products include **custom apparel**, **signs**, and **vehicle graphics**." | ➕ ADD | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 5 | signs | (same ADD as above, second link) | ➕ ADD | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 6 | vehicle graphics | (same ADD as above, third link) | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---
---

# ㊽ CONTACT — `/contact`

## [Section] `x-sections.category-hero` | "Contact" (description copy)

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom shirts | "Get in touch for a free quote on **custom shirts**, signs, decals, and vehicle graphics." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 2 | signs | "...custom shirts, **signs**, decals, and vehicle graphics." | ✅ EXISTING | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 3 | decals | "...signs, **decals**, and vehicle graphics." | ✅ EXISTING | `/stickers` | "Custom Stickers for Business, Events, and Personal Use" |
| 4 | vehicle graphics | "...and **vehicle graphics**." | ✅ EXISTING | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |

---

## [Section] `x-sections.why-choose-us`

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | reviews | ➕ ADD: "See why hundreds of customers trust us — browse our **reviews**." | ➕ ADD | `/reviews` | "Hundreds of 5-Star Reviews and Counting" |
| 2 | portfolio | ➕ ADD: "Browse our **portfolio** to see the quality behind every job." | ➕ ADD | `/portfolio` | "Our Portfolio" |
| 3 | service areas | ➕ ADD: "Check our **service areas** to confirm we cover your location." | ➕ ADD | `/service-areas` | "Proudly Serving Joliet..." |

---
---

# ㊾ SERVICE AREAS — `/service-areas`

## [Section] `x-sections.card-image-with-text` | "Proudly Serving Joliet, Will County, and Greater Chicagoland"

| # | Anchor Text | Context / Placement | Status | → Target URL | → Target Section |
|---|------------|---------------------|--------|--------------|-----------------|
| 1 | custom signage | "...delivers premium **custom signage** and apparel..." | ✅ EXISTING | `/signs` | "Professional Sign Printing for Every Business in Will County" |
| 2 | apparel | "...custom signage and **apparel**..." | ✅ EXISTING | `/custom-apparel` | "Your Custom Apparel Shop in Joliet, IL" |
| 3 | promotional items | ➕ ADD: "We also produce **promotional items** and **vehicle graphics** for businesses across every city we serve." | ➕ ADD | `/promotional-items` | "Branded Products That Put Your Logo in Your Customers' Hands" |
| 4 | vehicle graphics | (same ADD as above, second link) | ➕ ADD | `/vehicle-graphics` | "Turn Your Vehicle Into a Moving Billboard" |
| 5 | contact | ➕ ADD: "**Contact** us to discuss your project and confirm same-day availability for your area." | ➕ ADD | `/contact` | "Contact" hero |

---
---

# IMPLEMENTATION NOTES

## Priority Tiers

**Tier 1 — High Impact, All Existing Text (implement first):**
- Home → FAQ answers (5 links, all existing)
- Custom Apparel Index → prose (7 links, all existing)
- Signs Index → prose (8 links, mostly existing)
- About Us → "signs, shirts, stickers..." paragraph (8 links, all existing)
- Vehicle Graphics Index → prose (5 links, mostly existing)
- Promotional Items Index → product list links (7 links, mostly existing)

**Tier 2 — Cross-Category Bridges (high SEO value):**
- All specialty apparel pages → spirit wear, reunion shirts, corporate wear
- All sign sub-pages → banners, window signs, vehicle graphics
- Design Services → all product categories
- DOT Decals → automobile graphics, vehicle magnets
- Stickers → vehicle graphics, window signs

**Tier 3 — Deep Content Links (enhance topical authority):**
- All editorial/h3 sections on every specialty page
- FAQ answer text links throughout

---

## Link Count Summary

| Section Group | Approx Links | Existing | Added |
|---------------|-------------|----------|-------|
| Home | 12 | 8 | 4 |
| Custom Apparel (index + 3 group pages) | 42 | 18 | 24 |
| Printing Methods (DTF, Dye Sub, Screen, Emb, Rhine, Vinyl) | 52 | 16 | 36 |
| Specialty Materials (8 pages) | 44 | 4 | 40 |
| Signs (index + 9 sub-pages) | 62 | 18 | 44 |
| Stickers (index + 2 sub-pages) | 20 | 8 | 12 |
| Vehicle Graphics (index + 3 sub-pages) | 28 | 6 | 22 |
| Promotional Items (index + 2 featured) | 20 | 10 | 10 |
| Design Services (index + 3 sub-pages) | 32 | 6 | 26 |
| Company Pages (About, Portfolio, Reviews, Contact, Service Areas) | 36 | 18 | 18 |
| **TOTAL** | **~348** | **~112** | **~236** |

---
