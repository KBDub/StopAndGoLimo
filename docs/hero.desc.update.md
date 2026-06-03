# Hero Description Branding Update

All `x-sections.category-hero` description values must include the company name, "Top 5 Percent," in a natural, inclusive way. This document shows every page's current value and the targeted replacement.

**Rules applied to every update:**
- "Top 5 Percent" appears naturally, usually at the start or as the subject of the sentence.
- No all-caps text anywhere.
- 7th grade reading level, plain language.
- No em dashes, use commas instead.
- The company name replaces vague "we" openers where possible. Other "we" references within a sentence are fine to keep.

---

## Site-Wide Pages

---

### Home
**File:** `resources/views/pages/home.blade.php`
**Current:** *(no description prop set, component renders with its default)*
**Update:**
```
description="Top 5 Percent is a veteran-owned custom printing shop in Joliet, IL. We make custom shirts, signs, stickers, vehicle graphics, and promotional products for businesses, teams, and individuals throughout Will and DuPage County and the greater Chicagoland area."
```

---

### About
**File:** `resources/views/pages/about.blade.php`
**Current:** `"Veteran-owned and proudly serving Joliet, IL since 2017. We specialize in custom signage, apparel, and promotional products with same day service."`
**Update:**
```
description="Top 5 Percent is a veteran-owned custom printing shop in Joliet, IL, proudly serving the community since 2017. We specialize in custom signage, apparel, and promotional products with same day service available."
```

---

### Contact
**File:** `resources/views/pages/contact.blade.php`
**Current:** `"Get in touch for a free quote on custom shirts, signs, decals, and vehicle graphics. Same day service available in the Joliet area."`
**Update:**
```
description="Get in touch with Top 5 Percent for a free quote on custom shirts, signs, decals, and vehicle graphics. Same day service is available in the Joliet area."
```

---

### Reviews
**File:** `resources/views/pages/reviews.blade.php`
**Current:** `"Don't take our word for it. Here's what real customers across Joliet, Will and DuPage County, and the greater Chicagoland area have to say about our work, our service, and our team."`
**Update:**
```
description="Don't just take our word for it. Here's what real customers across Joliet, Will and DuPage County, and the greater Chicagoland area have to say about Top 5 Percent, our work, and our team."
```

---

### Portfolio
**File:** `resources/views/pages/portfolio.blade.php`
**Current:** `"Browse our gallery of custom shirts, signs, vehicle wraps, and promotional products. See the quality and craftsmanship behind every project."`
**Update:**
```
description="Browse the Top 5 Percent project gallery featuring custom shirts, signs, vehicle wraps, and promotional products. See the quality and craftsmanship behind every order."
```

---

### Service Areas
**File:** `resources/views/pages/service-areas.blade.php`
**Current:** `"Veteran-owned since 2017, Top 5 Percent delivers premium custom signage and apparel to businesses, schools, teams, and organizations throughout Will and DuPage County and the greater Chicagoland area."`
**Update:** *(already includes the name well, minor polish only)*
```
description="Veteran-owned since 2017, Top 5 Percent delivers premium custom signage and apparel to businesses, schools, teams, and organizations throughout Will and DuPage County and the greater Chicagoland area."
```

---

### Service Area (dynamic city page)
**File:** `resources/views/pages/service-areas/show.blade.php`
**Current:** `"Top 5 Percent is a veteran-owned custom signage and apparel shop serving {{ $cityState }} and the surrounding communities. Same day service available on most orders."`
**Update:** *(already good, minor polish)*
```
description="Top 5 Percent is a veteran-owned custom signage and apparel shop serving {{ $cityState }} and the surrounding communities. Same day service is available on most orders."
```

---

### Top 5 Percent Merchandise
**File:** `resources/views/pages/top5pct-merchandise.blade.php`
**Current:** `"Shop our exclusive line of Top 5 Percent branded merchandise. Premium quality t-shirts, hoodies, hats, and accessories that represent the Top 5% standard of excellence."`
**Update:**
```
description="Shop the exclusive Top 5 Percent merchandise collection. Premium t-shirts, hoodies, hats, and accessories that represent the standard of excellence our brand is built on."
```

---

### Collection (dynamic)
**File:** `resources/views/pages/collection.blade.php`
**Current:** `":description=\"$collectionDescription ?? 'Premium quality custom products designed and produced right here in Joliet.'\""`
**Update:**
```
:description="$collectionDescription ?? 'Premium quality custom products designed and produced by Top 5 Percent, right here in Joliet, IL.'"
```

---

## Company Pages

---

### Company Overview
**File:** `resources/views/pages/company/index.blade.php`
**Current:** `"We are a veteran-owned custom signage and apparel shop in Joliet, Illinois. Founded in 2017, we have spent nearly a decade building long-term relationships with the businesses, teams, and organizations of Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent is a veteran-owned custom signage and apparel shop in Joliet, Illinois. Founded in 2017, we have spent nearly a decade building long-term relationships with businesses, teams, and organizations across Will and DuPage County and the greater Chicagoland area."
```

---

### Articles
**File:** `resources/views/pages/company/articles.blade.php`
**Current:** `"Practical advice, design tips, and helpful articles to help your business get more out of custom signage, apparel, stickers, and promotional products. From the team at Top 5 Percent in Joliet, IL."`
**Update:**
```
description="Top 5 Percent shares practical advice, design tips, and helpful articles to help your business get more out of custom signage, apparel, stickers, and promotional products. Written by our team in Joliet, IL."
```

---

### Resources
**File:** `resources/views/pages/company/resources.blade.php`
**Current:** `"Practical advice, design tips, and helpful articles to help your business get more out of custom signage, apparel, stickers, and promotional products. From the team at Top 5 Percent in Joliet, IL."`
**Update:**
```
description="Top 5 Percent shares practical guides, design tips, and resources to help your business get more out of custom signage, apparel, stickers, and promotional products. Written by our team in Joliet, IL."
```

---

## Custom Apparel

---

### Custom Apparel (category index)
**File:** `resources/views/pages/custom-apparel/index.blade.php`
**Current:** `"From custom t-shirts to corporate uniforms, we create premium apparel that represents your brand. DTF transfers, screen printing, embroidery, rhinestone, specialty inks, and more. No minimums, fast turnaround, free design help."`
**Update:**
```
description="At Top 5 Percent, we create premium custom apparel that represents your brand, from everyday t-shirts to full corporate uniforms. DTF transfers, screen printing, embroidery, rhinestones, specialty inks, and more. No minimums, fast turnaround, and free design help."
```

---

### Vinyl Shirts
**File:** `resources/views/pages/custom-apparel/vinyl-shirts.blade.php`
**Current:** `"Heat-press vinyl printing delivers sharp, vibrant designs in any color. Perfect for logos, names, numbers, and custom text. No minimums, order one or a thousand."`
**Update:**
```
description="Top 5 Percent uses heat-press vinyl printing to deliver sharp, vibrant designs in any color. Perfect for logos, names, numbers, and custom text. No minimums, order one or a thousand."
```

---

### Screen Printing
**File:** `resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php`
**Current:** `"Screen printing delivers thick, opaque ink layers that produce bold, vibrant colors on any fabric. The most durable decorating method for bulk orders, uniforms, and group apparel that needs to last."`
**Update:**
```
description="Top 5 Percent uses screen printing to lay down thick, opaque ink that produces bold, vibrant colors on any fabric. The most durable method for bulk orders, uniforms, and group apparel that needs to last."
```

---

### DTF Transfers
**File:** `resources/views/pages/custom-apparel/dtf-transfers.blade.php`
**Current:** `"Direct-to-film transfers for vivid, full-color designs on any fabric. No minimums, same day available. Perfect for custom shirts, apparel, and anything that needs a sharp, durable print."`
**Update:**
```
description="Top 5 Percent prints direct-to-film transfers with vivid, full-color designs on any fabric. No minimums, same day service available. Perfect for custom shirts, hoodies, and anything that needs a sharp, durable print."
```

---

### Digital Vinyl
**File:** `resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php`
**Current:** `"We produce custom digital vinyl shirts, hoodies, hats, and more for individuals, groups, and businesses throughout Joliet, Shorewood, Crest Hill, and Will and DuPage County. Digital vinyl is printed in full color on a special vinyl film and then heat pressed onto your garment. The result is photographic quality detail, smooth color gradients, and vivid artwork that standard cut vinyl cannot achieve."`
**Update:**
```
description="Top 5 Percent produces custom digital vinyl shirts, hoodies, hats, and more for individuals, groups, and businesses throughout Joliet, Shorewood, Crest Hill, and Will and DuPage County. Digital vinyl is printed in full color on a special vinyl film and then heat pressed onto your garment. The result is photographic quality detail, smooth color gradients, and vivid artwork that standard cut vinyl cannot match."
```

---

### Specialty Vinyl
**File:** `resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php`
**Current:** `"We press custom vinyl shirts, hoodies, hats, and more for individuals, groups, and businesses throughout Joliet, Shorewood, Crest Hill, Rockdale, and all of Will and DuPage County. Heat press vinyl gives you sharp, clean edges, bold color, and a design that holds up wash after wash. Whether you need one shirt or a hundred, we can turn your design into finished apparel fast."`
**Update:**
```
description="Top 5 Percent presses custom vinyl shirts, hoodies, hats, and more for individuals, groups, and businesses throughout Joliet, Shorewood, Crest Hill, Rockdale, and all of Will and DuPage County. Heat press vinyl gives you sharp, clean edges, bold color, and a design that holds up wash after wash. One shirt or a hundred, we can turn your design into finished apparel fast."
```

---

### Embroidery
**File:** `resources/views/pages/custom-apparel/printing-options/embroidery.blade.php`
**Current:** `"Machine embroidery stitches your logo, name, or design directly into the fabric with precision and permanence. The most professional finish available, ideal for corporate wear, polos, and uniforms."`
**Update:**
```
description="Top 5 Percent uses machine embroidery to stitch your logo, name, or design directly into the fabric with precision and permanence. The most professional finish available, ideal for corporate wear, polos, and uniforms."
```

---

### Rhinestone Apparel
**File:** `resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php`
**Current:** `"Dazzling crystal rhinestone designs that catch every eye in the room. Custom patterns, logos, and text, handcrafted for reunions, celebrations, and anyone who loves to shine."`
**Update:**
```
description="Top 5 Percent handcrafts dazzling crystal rhinestone designs that catch every eye in the room. Custom patterns, logos, and text for reunions, celebrations, and anyone who loves to shine."
```

---

### Dye Sublimation
**File:** `resources/views/pages/custom-apparel/dye-sublimation.blade.php`
**Current:** `"Dye sublimation printing fuses full-color designs directly into the fabric for vibrant, all-over prints that never crack, peel, or fade. Perfect for performance wear, jerseys, and bold custom apparel."`
**Update:**
```
description="Top 5 Percent uses dye sublimation printing to fuse full-color designs directly into the fabric for vibrant, all-over prints that never crack, peel, or fade. Perfect for performance wear, jerseys, and bold custom apparel."
```

---

### Glitter Shirts
**File:** `resources/views/pages/custom-apparel/glitter-shirts.blade.php`
**Current:** `"Eye-catching glitter heat-transfer prints that shimmer under any light. Perfect for birthdays, bachelorette parties, family reunions, and anyone ready to stand out."`
**Update:**
```
description="Top 5 Percent prints eye-catching glitter heat-transfer designs that shimmer under any light. Perfect for birthdays, bachelorette parties, family reunions, and anyone ready to stand out."
```

---

### Holographic Shirts
**File:** `resources/views/pages/custom-apparel/holographic-shirts.blade.php`
**Current:** `"Holographic prints shift through a spectrum of colors as you move. Prismatic, futuristic, and completely unforgettable, the most eye-catching shirt you'll ever own."`
**Update:**
```
description="Top 5 Percent prints holographic designs that shift through a spectrum of colors as you move. Prismatic, futuristic, and completely unforgettable, one of the most eye-catching shirts you'll ever own."
```

---

### Reflective Shirts
**File:** `resources/views/pages/custom-apparel/reflective-shirts.blade.php`
**Current:** `"High-visibility reflective prints for safety gear, sports teams, construction crews, and night events. Stay visible and stay stylish, safety and branding in one sharp design."`
**Update:**
```
description="Top 5 Percent prints high-visibility reflective designs for safety gear, sports teams, construction crews, and night events. Stay visible and stay stylish, safety and branding in one sharp design."
```

---

### Foil Shirts
**File:** `resources/views/pages/custom-apparel/foil-shirts.blade.php`
**Current:** `"Metallic foil prints in gold, silver, and a spectrum of colors. The high-shine finish elevates any design from ordinary to extraordinary, part of our signature Gold Collection."`
**Update:**
```
description="Top 5 Percent prints metallic foil designs in gold, silver, and a full spectrum of colors. The high-shine finish elevates any design from ordinary to extraordinary, part of our signature Gold Collection."
```

---

### Puff Shirts
**File:** `resources/views/pages/custom-apparel/puff-shirts.blade.php`
**Current:** `"Puff ink expands during heat curing to create a raised, three-dimensional texture on your design. It adds a premium, tactile quality that sets your shirts apart from flat-printed apparel."`
**Update:**
```
description="Top 5 Percent uses puff ink that expands during heat curing to create a raised, three-dimensional texture on your design. A premium, tactile finish that sets your shirts apart from anything flat-printed."
```

---

### Brick Shirts
**File:** `resources/views/pages/custom-apparel/brick-shirts.blade.php`
**Current:** `"Brick-style printing creates a textured, three-dimensional effect that makes your design literally stand out from the fabric. A unique look that no one else on the block will be wearing."`
**Update:**
```
description="Top 5 Percent uses brick-style printing to create a textured, three-dimensional effect that makes your design literally stand out from the fabric. A unique look that no one else on the block will be wearing."
```

---

### Flock Shirts
**File:** `resources/views/pages/custom-apparel/flock-shirts.blade.php`
**Current:** `"Flock printing creates a velvety, raised texture that you can see and feel. Bold and distinctive, a premium finish that sets your shirt apart from anything you can find at a typical print shop."`
**Update:**
```
description="Top 5 Percent uses flock printing to create a velvety, raised texture that you can see and feel. Bold and distinctive, a premium finish that sets your shirt apart from anything you'd find at a typical print shop."
```

---

### Glow in the Dark Shirts
**File:** `resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php`
**Current:** `"When the lights go out, your shirt lights up. Custom glow-in-the-dark prints perfect for concerts, nightlife events, Halloween, and any occasion that deserves a little glow."`
**Update:**
```
description="When the lights go out, your shirt lights up. Top 5 Percent prints custom glow-in-the-dark designs perfect for concerts, nightlife events, Halloween, and any occasion that deserves a little glow."
```

---

## Custom Apparel, Group Wear

---

### Corporate Wear
**File:** `resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php`
**Current:** `"Branded corporate apparel including polos, dress shirts, jackets, and uniforms. Embroidered logos, consistent quality for your team."`
**Update:**
```
description="Top 5 Percent creates branded corporate apparel including polos, dress shirts, jackets, and uniforms. Embroidered logos and consistent quality for every member of your team."
```

---

### Reunion Shirts
**File:** `resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php`
**Current:** `"Custom reunion shirts for family gatherings, class reunions, and group events. Bulk pricing, free design help, and fast turnaround."`
**Update:**
```
description="Top 5 Percent makes custom reunion shirts for family gatherings, class reunions, and group events. Bulk pricing, free design help, and fast turnaround."
```

---

### Spirit Wear
**File:** `resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php`
**Current:** `"Custom spirit wear for schools, teams, and organizations. T-shirts, hoodies, hats, and more with your logo and colors."`
**Update:**
```
description="Top 5 Percent makes custom spirit wear for schools, teams, and organizations. T-shirts, hoodies, hats, and more with your logo and colors."
```

---

## Signs

---

### Signs (category index)
**File:** `resources/views/pages/signs/index.blade.php`
**Current:** `"We print professional custom signs, banners, posters, and displays for businesses and events throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Indoor and outdoor options with premium materials and fast turnaround. Veteran owned and same day service available."`
**Update:**
```
description="Top 5 Percent prints professional custom signs, banners, posters, and displays for businesses and events throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Indoor and outdoor options with premium materials and fast turnaround. Veteran owned, same day service available."
```

---

### Banners
**File:** `resources/views/pages/signs/banners.blade.php`
**Current:** `"We print custom vinyl banners, fabric banners, and specialty banners for businesses, celebrations, and events throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Full color printing in any size with same day service available."`
**Update:**
```
description="Top 5 Percent prints custom vinyl banners, fabric banners, and specialty banners for businesses, celebrations, and events throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Full color printing in any size, same day service available."
```

---

### Business Signs
**File:** `resources/views/pages/signs/business-signs.blade.php`
**Current:** `"We print and install custom business signs for storefronts, offices, windows, and doors throughout Joliet, Shorewood, Channahon, and all of Will and DuPage County. Premium materials built to withstand Illinois weather. Veteran owned with in house design and installation."`
**Update:**
```
description="Top 5 Percent prints and installs custom business signs for storefronts, offices, windows, and doors throughout Joliet, Shorewood, Channahon, and all of Will and DuPage County. Premium materials built to withstand Illinois weather. Veteran owned with in-house design and installation."
```

---

### Sidewalk Signs (a-frame)
**File:** `resources/views/pages/signs/sidewalk-signs.blade.php`
**Current:** `"We build and print a frame sidewalk signs that draw customers right to your front door. Interchangeable inserts, weather resistant frames, and full color printed graphics for businesses and events throughout Joliet, Shorewood, and all of Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent builds and prints a-frame sidewalk signs that draw customers right to your front door. Interchangeable inserts, weather-resistant frames, and full color printed graphics for businesses and events throughout Joliet, Shorewood, and all of Will and DuPage County and the greater Chicagoland area."
```

---

### Sidewalk Signs, Parking (a-frame redirect page)
**File:** `resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php`
**Current:** `"Custom parking signs for businesses, properties, churches, and organizations. Reserved parking, customer-only zones, lot rules, and directional signage built to withstand Illinois weather."`
**Update:**
```
description="Top 5 Percent makes custom parking signs for businesses, properties, churches, and organizations. Reserved parking, customer-only zones, lot rules, and directional signage built to withstand Illinois weather."
```

---

### Yard Signs
**File:** `resources/views/pages/signs/yard-signs.blade.php`
**Current:** `"We print custom yard signs for real estate, political campaigns, business promotions, events, and personal use throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Durable corrugated plastic, metal stakes, and same day service available."`
**Update:**
```
description="Top 5 Percent prints custom yard signs for real estate, political campaigns, business promotions, events, and personal use throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Durable corrugated plastic, metal stakes, and same day service available."
```

---

### Table Cloths
**File:** `resources/views/pages/signs/table-cloths.blade.php`
**Current:** `"Full-color branded table cloths and table covers that make your booth or display table look professional at trade shows, events, farmers markets, and corporate functions throughout Joliet, Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent prints full-color branded table cloths and table covers that make your booth or display table look professional at trade shows, events, farmers markets, and corporate functions throughout Joliet, Will and DuPage County and the greater Chicagoland area."
```

---

### Table Runners
**File:** `resources/views/pages/signs/table-runners.blade.php`
**Current:** `"We print custom table runners, table cloths, and table skirts for trade shows, corporate events, weddings, and brand promotions throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Full color printing on premium polyester fabric."`
**Update:**
```
description="Top 5 Percent prints custom table runners, table cloths, and table skirts for trade shows, corporate events, weddings, and brand promotions throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Full color printing on premium polyester fabric."
```

---

### Window Signs
**File:** `resources/views/pages/signs/window-signs.blade.php`
**Current:** `"Custom window signs and graphics that transform plain glass into powerful advertising space. Perforated vinyl, clear vinyl, frosted privacy film, and full-color window decals for businesses throughout Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent makes custom window signs and graphics that transform plain glass into powerful advertising space. Perforated vinyl, clear vinyl, frosted privacy film, and full-color window decals for businesses throughout Will and DuPage County and the greater Chicagoland area."
```

---

### Door Signs
**File:** `resources/views/pages/signs/door-signs.blade.php`
**Current:** `"Custom door signs that tell customers everything they need to know before they step inside. Hours, logo, suite numbers, welcome graphics, and frosted privacy vinyl for businesses throughout Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent makes custom door signs that tell customers everything they need to know before they step inside. Hours, logos, suite numbers, welcome graphics, and frosted privacy vinyl for businesses throughout Will and DuPage County and the greater Chicagoland area."
```

---

### Wall Signs
**File:** `resources/views/pages/signs/wall-signs.blade.php`
**Current:** `"Custom wall signs, decals, and murals that transform your interior spaces into branded environments. Office lobbies, retail floors, break rooms, and feature walls throughout Joliet, Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent creates custom wall signs, decals, and murals that transform your interior spaces into branded environments. Office lobbies, retail floors, break rooms, and feature walls throughout Joliet, Will and DuPage County and the greater Chicagoland area."
```

---

### Floor Signs
**File:** `resources/views/pages/signs/floor-signs.blade.php`
**Current:** `"Custom floor signs and decals that guide customers, reinforce your brand, and promote your business right where people walk. Non-slip laminated vinyl for retail stores, events, gyms, and offices."`
**Update:**
```
description="Top 5 Percent makes custom floor signs and decals that guide customers, reinforce your brand, and promote your business right where people walk. Non-slip laminated vinyl for retail stores, events, gyms, and offices."
```

---

### Posters
**File:** `resources/views/pages/signs/posters.blade.php`
**Current:** `"We produce high quality poster prints for businesses, events, and personal use throughout Joliet, Shorewood, Romeoville, and all of Will and DuPage County. Wide format output, premium paper stocks, and fast turnaround. Free design help included with every order."`
**Update:**
```
description="Top 5 Percent produces high quality poster prints for businesses, events, and personal use throughout Joliet, Shorewood, Romeoville, and all of Will and DuPage County. Wide format output, premium paper stocks, and fast turnaround. Free design help included with every order."
```

---

### Coronavirus Signs
**File:** `resources/views/pages/signs/coronavirus-signs.blade.php`
**Current:** `"We print social distancing signs, floor decals, safety protocol signage, and open for business displays for businesses, schools, and organizations throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Fast turnaround and professional quality."`
**Update:**
```
description="Top 5 Percent prints social distancing signs, floor decals, safety protocol signage, and open-for-business displays for businesses, schools, and organizations throughout Joliet, Shorewood, Plainfield, and all of Will and DuPage County. Fast turnaround and professional quality."
```

---

## Stickers

---

### Stickers (category index)
**File:** `resources/views/pages/stickers/index.blade.php`
**Current:** `"We print premium custom stickers for businesses, events, sports teams, and personal use throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. Standard sizes and fully custom die-cut shapes available. No minimums, full color, weatherproof vinyl, and same day service available."`
**Update:**
```
description="Top 5 Percent prints premium custom stickers for businesses, events, sports teams, and personal use throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. Standard sizes and fully custom die-cut shapes available. No minimums, full color, weatherproof vinyl, and same day service available."
```

---

### Standard Stickers
**File:** `resources/views/pages/stickers/standard-stickers.blade.php`
**Current:** `"We print custom stickers, die cut decals, product labels, and business decals for companies, sports teams, events, and personal use throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. No minimums, full color, weatherproof vinyl, and same day service available."`
**Update:**
```
description="Top 5 Percent prints custom stickers, die-cut decals, product labels, and business decals for companies, sports teams, events, and personal use throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. No minimums, full color, weatherproof vinyl, and same day service available."
```

---

### Custom Shaped Stickers
**File:** `resources/views/pages/stickers/custom-shaped-stickers.blade.php`
**Current:** `"Die cut to any shape you can imagine. Perfect for logos, mascots, unique brand shapes, and anything in between. Full color, weatherproof vinyl with no minimums."`
**Update:**
```
description="Top 5 Percent die-cuts custom stickers to any shape you can imagine. Perfect for logos, mascots, unique brand shapes, and everything in between. Full color, weatherproof vinyl with no minimums."
```

---

## Vehicle Graphics

---

### Vehicle Graphics (category index)
**File:** `resources/views/pages/vehicle-graphics/index.blade.php`
**Current:** `"We design and install custom vehicle graphics, car wraps, vinyl lettering, vehicle magnets, and DOT compliance decals for businesses and individuals throughout Joliet, Shorewood, Channahon, Rockdale, and all of Will and DuPage County. Turn your vehicle into a mobile billboard today."`
**Update:**
```
description="Top 5 Percent designs and installs custom vehicle graphics, car wraps, vinyl lettering, vehicle magnets, and DOT compliance decals for businesses and individuals throughout Joliet, Shorewood, Channahon, Rockdale, and all of Will and DuPage County. Turn your vehicle into a mobile billboard."
```

---

### Automobile Graphics
**File:** `resources/views/pages/vehicle-graphics/automobile-graphics.blade.php`
**Current:** `"We design and install custom car wraps, vinyl lettering, van graphics, truck decals, and boat graphics for businesses and individuals throughout Joliet, Shorewood, Crest Hill, Rockdale, and all of Will and DuPage County. Full color, professional grade, long lasting vinyl that turns any vehicle into a mobile billboard."`
**Update:**
```
description="Top 5 Percent designs and installs custom car wraps, vinyl lettering, van graphics, truck decals, and boat graphics for businesses and individuals throughout Joliet, Shorewood, Crest Hill, Rockdale, and all of Will and DuPage County. Full color, professional grade, long lasting vinyl that turns any vehicle into a mobile billboard."
```

---

### DOT Decals
**File:** `resources/views/pages/vehicle-graphics/dot-decals.blade.php`
**Current:** `"We print DOT decals, USDOT number stickers, MC number decals, truck lettering, and commercial vehicle compliance graphics for truckers and fleet operators in Joliet, Shorewood, Channahon, and all of Will and DuPage County. Veteran owned with real trucking experience. Same day service available."`
**Update:**
```
description="Top 5 Percent prints DOT decals, USDOT number stickers, MC number decals, truck lettering, and commercial vehicle compliance graphics for truckers and fleet operators in Joliet, Shorewood, Channahon, and all of Will and DuPage County. Veteran owned with real trucking experience. Same day service available."
```

---

### Vehicle Magnets
**File:** `resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php`
**Current:** `"We print custom vehicle magnets and removable car door signs for businesses throughout Joliet, Shorewood, Crest Hill, and all of Will and DuPage County. Full color, 30 mil thick, weather resistant, and easy to apply or remove in seconds. The smart choice for business owners who use their personal vehicle for work."`
**Update:**
```
description="Top 5 Percent prints custom vehicle magnets and removable car door signs for businesses throughout Joliet, Shorewood, Crest Hill, and all of Will and DuPage County. Full color, 30 mil thick, weather resistant, and easy to apply or remove in seconds. The smart choice for business owners who use their personal vehicle for work."
```

---

## Promotional Items

---

### Promotional Items (category index)
**File:** `resources/views/pages/promotional-items.blade.php`
**Current:** `"Custom branded promotional products for businesses, events, and organizations throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. Mugs, koozies, tote bags, towels, coasters, mouse pads, and more. Your logo on products people actually use."`
**Update:**
```
description="Top 5 Percent creates custom branded promotional products for businesses, events, and organizations throughout Joliet, Shorewood, Plainfield, and Will and DuPage County. Mugs, koozies, tote bags, towels, coasters, mouse pads, and more. Your logo on products people actually use."
```

---

### Can Koozies
**File:** `resources/views/pages/promotional-items/can-koozies.blade.php`
**Current:** `"Custom branded can koozies for events, parties, fundraisers, and promotional giveaways. Full-color printing on foam and neoprene. No minimums, order exactly what you need."`
**Update:**
```
description="Top 5 Percent makes custom branded can koozies for events, parties, fundraisers, and promotional giveaways. Full-color printing on foam and neoprene. No minimums, order exactly what you need."
```

---

### Mugs
**File:** `resources/views/pages/promotional-items/mugs.blade.php`
**Current:** `"Full-color custom mugs with your logo, message, or design. Perfect for corporate gifts, employee recognition, event giveaways, and branded merchandise throughout Joliet, Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent makes full-color custom mugs with your logo, message, or design. Perfect for corporate gifts, employee recognition, event giveaways, and branded merchandise throughout Joliet, Will and DuPage County and the greater Chicagoland area."
```

---

### Towels
**File:** `resources/views/pages/promotional-items/towels.blade.php`
**Current:** `"Full-color custom printed towels for sports teams, gyms, events, and branded merchandise. Beach towels, sport towels, and rally towels with your logo printed edge to edge."`
**Update:**
```
description="Top 5 Percent prints full-color custom towels for sports teams, gyms, events, and branded merchandise. Beach towels, sport towels, and rally towels with your logo printed edge to edge."
```

---

### Tote Bags
**File:** `resources/views/pages/promotional-items/tote-bags.blade.php`
**Current:** `"Branded tote bags and drawstring bags for events, giveaways, corporate gifts, and retail merchandise. Full-color custom printing that travels with your customers everywhere they go."`
**Update:**
```
description="Top 5 Percent makes branded tote bags and drawstring bags for events, giveaways, corporate gifts, and retail merchandise. Full-color custom printing that travels with your customers everywhere they go."
```

---

### Mouse Pads
**File:** `resources/views/pages/promotional-items/mouse-pads.blade.php`
**Current:** `"Full-color custom mouse pads with your logo, design, or messaging. A practical desk accessory that keeps your brand visible every single workday for businesses and corporate gifting in Will and DuPage County and the greater Chicagoland area."`
**Update:**
```
description="Top 5 Percent prints full-color custom mouse pads with your logo, design, or messaging. A practical desk accessory that keeps your brand visible every single workday, perfect for businesses and corporate gifting in Will and DuPage County and the greater Chicagoland area."
```

---

### Drink Coasters
**File:** `resources/views/pages/promotional-items/drink-coasters.blade.php`
**Current:** `"Custom branded drink coasters for restaurants, bars, offices, events, and corporate gifting. Full-color printing on ceramic, neoprene, and hardboard. Your brand on every table."`
**Update:**
```
description="Top 5 Percent makes custom branded drink coasters for restaurants, bars, offices, events, and corporate gifting. Full-color printing on ceramic, neoprene, and hardboard. Your brand on every table."
```

---

## Design Services

---

### Design Services (category index)
**File:** `resources/views/pages/design-services/index.blade.php`
**Current:** `"Professional design support from concept to print-ready file. Logo design, layout and graphic design, free online design tools, and inspiration catalogs, all available in-house at our Joliet shop. No design experience required."`
**Update:**
```
description="Top 5 Percent offers professional design support from concept to print-ready file. Logo design, layout and graphic design, free online design tools, and inspiration catalogs, all available in-house at our Joliet shop. No design experience required."
```

---

### Logo Design
**File:** `resources/views/pages/design-services/logo-design.blade.php`
**Current:** `"A professionally designed logo is the foundation of your brand identity. We create custom logos for businesses, organizations, sports teams, and events throughout Joliet, Will and DuPage County, from concept to final files."`
**Update:**
```
description="A professionally designed logo is the foundation of your brand identity. Top 5 Percent creates custom logos for businesses, organizations, sports teams, and events throughout Joliet, Will and DuPage County, from concept to final files."
```

---

### Graphic Design
**File:** `resources/views/pages/design-services/graphic-design.blade.php`
**Current:** `"Print-ready layout and graphic design for signs, banners, apparel, promotional products, and more. Our designers prepare your artwork so it looks exactly right when it comes off the press."`
**Update:**
```
description="Top 5 Percent offers print-ready layout and graphic design for signs, banners, apparel, promotional products, and more. Our designers prepare your artwork so it looks exactly right when it comes off the press."
```

---

### Custom Storefronts
**File:** `resources/views/pages/design-services/custom-storefronts.blade.php`
**Current:** `"A fully branded online store with your logo, colors, and products, up and running in days. We build and manage it. Your group just shops."`
**Update:**
```
description="Top 5 Percent builds fully branded online stores with your logo, colors, and products, up and running in days. We build and manage everything. Your group just shops."
```

---

## Summary

| Pages | Total |
|---|---|
| Pages reviewed | 64 |
| Pages already using the company name correctly | 5 |
| Pages needing update | 59 |
| Pages with no description set (home) | 1 |
