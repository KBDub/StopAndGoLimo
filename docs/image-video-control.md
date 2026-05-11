# Image & Video Control

Master reference for YouTube video assignments and primary hero images per page. Used to build and maintain `sitemap_video.xml` and `sitemap_images.xml`. Update this document whenever a video or image changes or a new page is added.

---

## Conventions

**Old site images** are paths relative to `http://www.top5pct.com/images/` — most are 404 on the live domain today (PHP era). Shown here as historical/SEO-migration reference only.

**New site images** are absolute paths served from the current Laravel site at `https://www.top5pct.com`.

**Old site page** = the PHP page from the old `sitemap_images.xml` that corresponds to the new page. `—` = no dedicated old-site page existed.

**Image status key:**
- `migrated` = old image has a direct new counterpart with `top5pct-` prefix
- `new` = no old-site equivalent; image is new to the rebuilt site
- `placeholder` = image is a generic/reused stand-in; page-specific image needed

**Video status key:**
- `assigned` = has a specific video from the old `sitemap_video.xml`
- `placeholder` = still using the default `F3J9nyiM3So`

---

## YouTube Channel

- **Handle:** `Top5PercentLLC`
- **Channel ID:** `UCAhLYjgb9745wv_yfmxSe6w`
- **Thumbnail pattern:** `https://i.ytimg.com/vi/{videoId}/hqdefault.jpg`
- **Embed pattern:** `https://www.youtube.com/embed/{videoId}`

---

## Source: Old Site Video Sitemap

Old `sitemap_video.xml` → new site page mappings:

| Old PHP Page | Video ID | New Site Page |
|---|---|---|
| `/` | `j0vslNa91gU` | `/` (home) |
| `/php/about.php` | `j0vslNa91gU` | `/about` |
| `/php/custom-t-shirts-joliet.php` | `F3J9nyiM3So` | `/custom-apparel` |
| `/php/vinyl-shirts-joliet.php` | `vavQnQ8Q0pU` | `/custom-apparel/vinyl-shirts` |
| `/php/rhinestone-shirts-joliet.php` | `wS7NHsyIEUY` | `/custom-apparel/rhinestone-apparel` |
| `/php/glitter-shirts-joliet.php` | `fS1L1h6VRog` | `/custom-apparel/glitter-shirts` |
| `/php/foil-shirts-joliet.php` | `gaTzSSv0qGM` | `/custom-apparel/foil-shirts` |
| `/php/flock-custom-t-shirt.php` | `gaTzSSv0qGM` | `/custom-apparel/flock-shirts` |
| `/php/glow-shirt-joliet.php` | `JG01ZE2_unc` | `/custom-apparel/glow-in-the-dark-shirts` |
| `/php/holographic-shirts-joliet.php` | `D4jDHpzdWUA` | `/custom-apparel/holographic-shirts` |
| `/php/pattern-shirts-joliet.php` | `JXD-Zl7-Rrs` | `/custom-apparel/spirit-wear` *(closest match)* |
| `/php/banners-joliet.php` | `L3Dw8KGC6D8` | `/signs/business-signs/banners` |
| `/php/business-signs-joliet.php` | `0PUZDRY7J88` | `/signs/business-signs` |
| `/php/posters-joliet.php` | `QWslMrH0NzQ` | `/signs/business-signs/posters` |
| `/php/table-cloth-joliet.php` | `e7soRl69nqE` | `/signs/table-signs/table-cloths` |
| `/php/wall-decals-window-decals.php` | `j8IIQMjhB-E` | `/signs/business-signs/window-signs` |
| `/php/stickers-decals-joliet.php` | `aRq0XJ5By9A` | `/stickers` |
| `/php/vinyl-lettering-car-wraps.php` | `BI4J-BjvEmM` | `/vehicle-graphics` |
| `/php/car-magnets-joliet.php` | `3OpyqaZVkRM` | `/vehicle-graphics/vehicle-magnets` |
| `/php/DOT-stickers-joliet.php` | `lSd-DXfNXUw` | `/vehicle-graphics/dot-decals` |

---

## Master Image & Video Assignment Table

One row per active new-site page. Update `New Image`, `Video ID`, and status columns as content changes.

---

### General Pages

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Home | `/` | `/` | `home-page-signs-and-apparel-joliet/.../custom-shirts-decals-magnets-joliet.png` | no hero image prop — OG: `/images/og-tags/top5pct-og-home.jpg` | `j0vslNa91gU` | new | assigned |
| About | `/about` | `/php/about.php` | `about-us-joliet/building-top-5-percent-joliet.jpg` | no hero image prop | `j0vslNa91gU` | placeholder | assigned |
| Contact | `/contact` | `/php/contact.php` | — *(logo/footer only)* | no hero image prop | `F3J9nyiM3So` | — | placeholder |
| Portfolio | `/portfolio` | `/top5pct2/photo-gallery-portfolio-top-5-percent-joliet.php` | *(gallery of many)* | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` *(OG)* | `F3J9nyiM3So` | new | placeholder |
| Stores | `/stores` | — | — | no hero image prop | `F3J9nyiM3So` | — | placeholder |
| Top 5% Merchandise | `/top5pct-merchandise` | — | — | `/images/custom-shirts/top5pct-custom-t-shirts-main.jpg` | `F3J9nyiM3So` | new | placeholder |

---

### Signs

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Signs (index) | `/signs` | — | — | `/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `F3J9nyiM3So` | new | placeholder |
| Banners | `/signs/business-signs/banners` | `/php/banners-joliet.php` | `banner-signs-joliet-shorewood-crest-hill/business-banners-joliet-shorewood-crest-hill.jpg` | `/images/banners/top5pct-custom-vinyl-banners.jpg` | `L3Dw8KGC6D8` | migrated | assigned |
| Business Signs | `/signs/business-signs` | `/php/business-signs-joliet.php` | `business-signs-joliet-shorewood-crest-hill/outdoor-signs-joliet-shorewood-crest-hill.jpg` | `/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | `0PUZDRY7J88` | migrated | assigned |
| Posters | `/signs/business-signs/posters` | `/php/posters-joliet.php` | `poster-maker-joliet-shorewood-plainfield/poster-maker-joliet-romeoville-shorewood.jpg` | `/images/posters/top5pct-poster-printing-joliet-shorewood-romeoville.jpg` | `QWslMrH0NzQ` | migrated | assigned |
| Window Signs | `/signs/business-signs/window-signs` | `/php/wall-decals-window-decals.php` | `wall-window-floor-decals-joliet-shorewood/wall-decal-door-signs-joliet.jpg` | `/images/window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | `j8IIQMjhB-E` | migrated | assigned |
| Wall Signs | `/signs/business-signs/wall-signs` | `/php/wall-decals-window-decals.php` | `wall-window-floor-decals-joliet-shorewood/wall-signs-joliet.jpg` | `/images/window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Door Signs | `/signs/business-signs/door-signs` | `/php/wall-decals-window-decals.php` | `wall-window-floor-decals-joliet-shorewood/door-signs-joliet-shorewood-crest-hill.jpg` | `/images/window-wall-floor-decals/top5pct-window-decal-joliet-shorewood-rockdale.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Floor Signs | `/signs/business-signs/floor-signs` | — | — | `/images/window-wall-floor-decals/top5pct-wall-decals-joliet.jpg` | `F3J9nyiM3So` | new | placeholder |
| Yard Signs | `/signs/ground-signs/yard-signs` | `/php/yard-signs-joliet.php` | `yard-signs-joliet-shorewood-crest-hill/yard-signs-joliet-shorewood-crest-hill.jpg` | `/images/yard-signs/top5pct-yard-signs.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Sidewalk Signs | `/signs/ground-signs/sidewalk-signs` | `/php/a-frame-sign-joliet.php` | `sidewalk-a-frames-joliet-shorewood/a-frame-sidewalk-signs-joliet-romeoville.jpg` | `/images/sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Parking Signs | `/signs/ground-signs/parking-signs` | — | — | `/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Table Cloths | `/signs/table-signs/table-cloths` | `/php/table-cloth-joliet.php` | `table-cloth-table-runner-joliet/custom-table-cloth-custom-table-runner-joliet.jpg` | `/images/table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg` | `e7soRl69nqE` | migrated | assigned |
| Table Runners | `/signs/table-signs/table-runners` | `/php/table-cloth-joliet.php` | `table-cloth-table-runner-joliet/custom-table-runner-joliet-shorewood.jpg` | `/images/table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Coronavirus Signs | `/signs/coronavirus-signs` | `/php/covid19-stickers-signs-joliet.php` | *(no image captured)* | `/images/corona-virus-signs/top5pct-coronavirus-signs-joliet-shorewood-lockport.jpg` | `F3J9nyiM3So` | new | placeholder |

---

### Custom Apparel

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Custom Apparel (index) | `/custom-apparel` | `/php/t-shirt-maker-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-shirts-custom-hoodies-custom-caps.jpg` | `/images/custom-shirts/top5pct-custom-t-shirts-main.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Vinyl Shirts | `/custom-apparel/vinyl-shirts` | `/php/vinyl-shirts-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-vinyl-shirts-caps-hoodies-joliet/custom-vinyl-shirts-caps-hoodies.jpg` | `/images/custom-shirts/top5pct-neon-vinyl-shirts.jpg` | `vavQnQ8Q0pU` | migrated | assigned |
| Rhinestone Apparel | `/custom-apparel/rhinestone-apparel` | `/php/rhinestone-shirts-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-rhinestone-shirt-cap-hoodie-joliet/custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | `/images/custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg` | `wS7NHsyIEUY` | migrated | assigned |
| Glitter Shirts | `/custom-apparel/glitter-shirts` | `/php/glitter-shirts-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-glitter-shirt-cap-hoodie-joliet/custom-glitter-shirt-cap-hoodie-joliet.jpg` | `/images/custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg` | `fS1L1h6VRog` | migrated | assigned |
| Foil Shirts | `/custom-apparel/foil-shirts` | `/php/foil-shirts-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-foil-shirts-hoodies-caps-joliet/custom-foil-shirts-hoodies-caps-joliet.jpg` | `/images/custom-shirts/top5pct-custom-foil-shirts-hoodies-caps-joliet.jpg` | `gaTzSSv0qGM` | migrated | assigned |
| Flock Shirts | `/custom-apparel/flock-shirts` | `/php/flock-custom-t-shirt.php` | `custom-shirts-custom-hoodies-custom-caps/custom-flock-shirt-hoodie-cap-joliet/custom-flock-shirt-hoodie-cap-joliet.jpg` | `/images/custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | `gaTzSSv0qGM` | migrated | assigned |
| Glow in the Dark | `/custom-apparel/glow-in-the-dark-shirts` | `/php/glow-shirt-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-glow-shirts-hoodies-caps-joliet/custom-glow-shirts-caps-hoodies-joliet.jpg` | `/images/custom-shirts/top5pct-custom-glow-shirts-caps-hoodies-joliet.jpg` | `JG01ZE2_unc` | migrated | assigned |
| Holographic Shirts | `/custom-apparel/holographic-shirts` | `/php/holographic-shirts-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-holographic-shirt-hoodei-cap-joliet/custom-holographic-shirt-hoodie-cap-joliet.jpg` | `/images/custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg` | `D4jDHpzdWUA` | migrated | assigned |
| Spirit Wear | `/custom-apparel/spirit-wear` | `/php/spirit-wear-fan-wear.php` | `spirit-wear-fan-wear-joliet-shorewood/fanwear-spiritwear-uniforms-joliet-shorewood.jpg` | `/images/spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg` | `JXD-Zl7-Rrs` | migrated | assigned |
| Embroidery | `/custom-apparel/embroidery` | `/php/t-shirt-maker-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-embroidery-shops-near-me-joliet/embroidery-shops-near-me-joliet.jpg` | `/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Screen Printing | `/custom-apparel/screen-printing` | — | — | `/images/custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| DTF Transfers | `/custom-apparel/printing-options/dtf-printing` | — | — | `/images/dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | `F3J9nyiM3So` | new | placeholder |
| Dye Sublimation | `/custom-apparel/printing-options/dye-sublimation-printing` | — | — | `/images/custom-shirts/top5pct-dye-sublimation-shirts.jpg` | `F3J9nyiM3So` | new | placeholder |
| Brick Shirts | `/custom-apparel/brick-shirts` | `/php/t-shirt-maker-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-brick-shirts-hoodies-cap-joliet/custom-brick-shirts-hoodies-cap-joliet.jpg` | `/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Puff Shirts | `/custom-apparel/puff-shirts` | — | — | `/images/custom-shirts/top5pct-custom-brick-shirts-hoodies-cap-joliet.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Reflective Shirts | `/custom-apparel/reflective-shirts` | `/php/t-shirt-maker-joliet.php` | `custom-shirts-custom-hoodies-custom-caps/custom-reflective-shirts-hoodies-caps-joliet/custom-reflective-shirts-hoodies-caps-joliet.jpg` | `/images/custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Corporate Wear | `/custom-apparel/corporate-wear` | `/php/custom-corporate-clothing-joliet.php` | `corporate-clothes-joliet-shorewood-crest-hill/corporate-shirts-uniforms-joliet-shorewood.jpg` | `/images/corporate-wear/top5pct-landscaping-clothing-joliet.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Reunion Shirts | `/custom-apparel/reunion-shirts` | `/php/family-reunion-shirts-joliet.php` | `family-reunion-shirts-joliet-crest-hill/family-reunion-shirts-joliet-shorewood.jpg` | `/images/reunion-shirts/top5pct-reunion-group-shirts.jpg` | `F3J9nyiM3So` | migrated | placeholder |

---

### Stickers

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Stickers (index) | `/stickers` | `/php/stickers-decals-joliet.php` | `stickers-decals-joliet/stickers-decals-joliet.jpg` | `/images/stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg` | `aRq0XJ5By9A` | migrated | assigned |
| Custom Shaped Stickers | `/stickers/custom-shaped-stickers` | — | — | `/images/stickers-decals/top5pct-diecut-stickers.jpg` | `F3J9nyiM3So` | new | placeholder |
| Standard Stickers | `/stickers/standard-stickers` | — | — | `/images/stickers-decals/top5pct-stickers-decals-joliet-beer-brewery.jpg` | `F3J9nyiM3So` | new | placeholder |

---

### Vehicle Graphics

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Vehicle Graphics (index) | `/vehicle-graphics` | `/php/vinyl-lettering-car-wraps.php` | `car-wraps-vinyl-lettering-joliet-shorewood/vinyl-lettering-car-wraps-joliet.jpg` | `/images/automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg` | `BI4J-BjvEmM` | migrated | assigned |
| Automobile Graphics | `/vehicle-graphics/automobile-graphics` | `/php/vinyl-lettering-car-wraps.php` | `car-wraps-vinyl-lettering-joliet-shorewood/vinyl-lettering-car-graphics-joliet-shorewood.jpg` | `/images/automobile-graphics/top5pct-van-graphics-decals.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Vehicle Magnets | `/vehicle-graphics/vehicle-magnets` | `/php/car-magnets-joliet.php` | `car-magnets-vehicle-magnets-joliet/car-magnets-joliet-shorewood-crest-hill.jpg` | `/images/vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg` | `3OpyqaZVkRM` | migrated | assigned |
| DOT Decals | `/vehicle-graphics/dot-decals` | `/php/DOT-stickers-joliet.php` | `dot-stickers-joliet-shorewood-rockdale/DOT-stickers-joliet-shorewood-channahon.jpg` | `/images/dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg` | `lSd-DXfNXUw` | migrated | assigned |

---

### Promotional Items

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Promo Items (index) | `/promotional-items` | `/php/promotional-products-awards-joliet.php` | `promotional-products-promotional-items/promotional-products-specialty-items-printing-joliet.jpg` | `/images/custom-shirts/top5pct-custom-t-shirts-main.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Can Koozies | `/promotional-items/can-koozies` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Drink Coasters | `/promotional-items/drink-coasters` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Mouse Pads | `/promotional-items/mouse-pads` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Mugs | `/promotional-items/mugs` | `/php/promotional-products-awards-joliet.php` | `promotional-products-promotional-items/custom-mug-personalized-gifts-joliet.jpg` | `/images/promo-items/mugs/top5pct-custom-printed-mugs.jpg` | `F3J9nyiM3So` | migrated | placeholder |
| Tote Bags | `/promotional-items/tote-bags` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Towels | `/promotional-items/towels` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |

---

### Design Services

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Design Services (index) | `/design-services` | — | — | `/images/banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg` | `F3J9nyiM3So` | new | placeholder |
| Graphic Design | `/design-services/graphic-design` | — | — | `/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg` | `F3J9nyiM3So` | placeholder | placeholder |
| Logo Design | `/design-services/logo-design` | — | — | `/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg` | `F3J9nyiM3So` | placeholder | placeholder |

---

### Company

| Page | URL | Old Site Page | Old Primary Image | New Primary Image | Video ID | Img Status | Vid Status |
|---|---|---|---|---|---|---|---|
| Company (index) | `/company` | `/php/about.php` | `about-us-joliet/building-top-5-percent-joliet.jpg` | `/images/about-preview.jpg` | `j0vslNa91gU` | migrated | assigned |
| Articles | `/company/articles` | — | — | `/images/top5pct-t-shirt-maker-7-tips.jpg` | `F3J9nyiM3So` | new | placeholder |
| Resources | `/company/resources` | — | — | `/images/top5pct-t-shirt-maker-7-tips.jpg` | `F3J9nyiM3So` | new | placeholder |

---

## Sitemap Files Plan

Two XML sitemap files will be built and maintained as Blade views served as routes.

### `sitemap_video.xml`

**Location:** `resources/views/sitemaps/sitemap-video.blade.php` → `/sitemap_video.xml`

**Include:** only pages with `assigned` video status (non-placeholder IDs).

**Format per entry:**
```xml
<url>
  <loc>https://www.top5pct.com/{page-url}</loc>
  <video:video>
    <video:thumbnail_loc>https://i.ytimg.com/vi/{videoId}/hqdefault.jpg</video:thumbnail_loc>
    <video:title>{Page heading}</video:title>
    <video:description>{Page meta description}</video:description>
    <video:player_loc allow_embed="yes">https://www.youtube.com/embed/{videoId}</video:player_loc>
    <video:family_friendly>yes</video:family_friendly>
    <video:uploader info="https://www.youtube.com/channel/UCAhLYjgb9745wv_yfmxSe6w">Top 5 Percent</video:uploader>
  </video:video>
</url>
```

### `sitemap_images.xml`

**Location:** `resources/views/sitemaps/sitemap-images.blade.php` → `/sitemap_images.xml`

**Include:** all pages with `migrated` or `new` image status. Exclude `placeholder` rows until a real image is in place. Exclude logos, footer badges, SSL seals, and UI decoration.

**Format per entry:**
```xml
<url>
  <loc>https://www.top5pct.com/{page-url}</loc>
  <image:image>
    <image:loc>https://www.top5pct.com/images/{path/to/image.jpg}</image:loc>
    <image:title>{Descriptive title}</image:title>
    <image:caption>{Alt text}</image:caption>
  </image:image>
</url>
```

---

## Sitemap Index

```xml
<sitemapindex>
  <sitemap><loc>https://www.top5pct.com/sitemap.xml</loc></sitemap>
  <sitemap><loc>https://www.top5pct.com/sitemap_video.xml</loc></sitemap>
  <sitemap><loc>https://www.top5pct.com/sitemap_images.xml</loc></sitemap>
</sitemapindex>
```

Verify `robots.txt` references the sitemap index after both files are live.

---

## Workflows

### Adding a new page
1. Add route and blade file.
2. Add `<x-sections.video-banner videoId="..." />` with the correct ID.
3. Add a row to the relevant table section above.
4. Add a `<url>` block to `sitemap_video.xml` (if assigned video).
5. Add a `<url>` block to `sitemap_images.xml` (if real image in place).
6. Re-submit sitemap index in Google Search Console.

### Changing a video
1. Update `videoId` prop in the blade file.
2. Update the `Video ID` column above; change Vid Status to `assigned`.
3. Update the `<url>` block in `sitemap_video.xml`.
4. Re-submit video sitemap in Google Search Console.

### Changing a primary image
1. Update the `image=` prop in the blade file.
2. Update the `New Image` column above.
3. Update the `<url>` block in `sitemap_images.xml`.
4. Re-submit image sitemap in Google Search Console.
