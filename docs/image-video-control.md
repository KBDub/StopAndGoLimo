# Image & Video Control

Master reference for all YouTube video assignments per page and the plan for building and maintaining `sitemap_video.xml` and `sitemap_images.xml`. Update this document whenever a video is changed or a new page is added.

---

## YouTube Video Assignments

### How video IDs are applied

Every page with a video section uses `<x-sections.video-banner videoId="XXXXXXXXXXX" ... />`.
The `videoId` is the 11-character code from the YouTube URL:

```
https://www.youtube.com/watch?v=F3J9nyiM3So   →   F3J9nyiM3So
https://youtu.be/F3J9nyiM3So                  →   F3J9nyiM3So
```

The channel handle is `Top5PercentLLC` and the channel ID is `UCAhLYjgb9745wv_yfmxSe6w` — hardcoded site-wide, does not change per page.

Thumbnail URL pattern: `https://i.ytimg.com/vi/{videoId}/hqdefault.jpg`

---

### Source: Old Site Video Sitemap (`sitemap_video.xml`)

The old PHP site's `sitemap_video.xml` is the source of truth for all existing video assignments. Full extraction:

| Old PHP Page | Video ID | Mapped to New Site Page |
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
| `/php/pattern-shirts-joliet.php` | `JXD-Zl7-Rrs` | `/custom-apparel/spirit-wear` *(assigned — no direct match; closest equivalent)* |
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

### Full Page Video Assignment Table

This is the working table. Update the `Video ID` column and `Status` when a video is assigned or changed. Apply each ID to the matching blade file's `videoId` prop.

**Status key:** `assigned` = has a specific video from old site / `placeholder` = still using `F3J9nyiM3So` / `tbd` = needs a new video

#### General Pages

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Home | `/` | `pages/home.blade.php` | `j0vslNa91gU` | assigned |
| About | `/about` | `pages/about.blade.php` | `j0vslNa91gU` | assigned |
| Contact | `/contact` | `pages/contact.blade.php` | `F3J9nyiM3So` | placeholder |
| Portfolio | `/portfolio` | `pages/portfolio.blade.php` | `F3J9nyiM3So` | placeholder |
| Stores | `/stores` | `pages/stores.blade.php` | `F3J9nyiM3So` | placeholder |
| Top 5% Merchandise | `/top5pct-merchandise` | `pages/top5pct-merchandise.blade.php` | `F3J9nyiM3So` | placeholder |

#### Signs

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Signs (index) | `/signs` | `pages/signs/index.blade.php` | `F3J9nyiM3So` | placeholder |
| Banners | `/signs/business-signs/banners` | `pages/signs/banners.blade.php` | `L3Dw8KGC6D8` | assigned |
| Business Signs | `/signs/business-signs` | `pages/signs/business-signs.blade.php` | `0PUZDRY7J88` | assigned |
| Posters | `/signs/business-signs/posters` | `pages/signs/posters.blade.php` | `QWslMrH0NzQ` | assigned |
| Window Signs | `/signs/business-signs/window-signs` | `pages/signs/window-signs.blade.php` | `j8IIQMjhB-E` | assigned |
| Wall Signs | `/signs/business-signs/wall-signs` | `pages/signs/wall-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Door Signs | `/signs/business-signs/door-signs` | `pages/signs/door-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Floor Signs | `/signs/business-signs/floor-signs` | `pages/signs/floor-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Yard Signs | `/signs/ground-signs/yard-signs` | `pages/signs/yard-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Sidewalk Signs | `/signs/ground-signs/sidewalk-signs` | `pages/signs/sidewalk-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Parking Signs | `/signs/ground-signs/parking-signs` | `pages/signs/parking-signs.blade.php` | `F3J9nyiM3So` | placeholder |
| Table Cloths | `/signs/table-signs/table-cloths` | `pages/signs/table-cloths.blade.php` | `e7soRl69nqE` | assigned |
| Table Runners | `/signs/table-signs/table-runners` | `pages/signs/table-runners.blade.php` | `F3J9nyiM3So` | placeholder |
| Coronavirus Signs | `/signs/coronavirus-signs` | `pages/signs/coronavirus-signs.blade.php` | `F3J9nyiM3So` | placeholder |

#### Custom Apparel

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Custom Apparel (index) | `/custom-apparel` | `pages/custom-apparel/index.blade.php` | `F3J9nyiM3So` | placeholder |
| Vinyl Shirts | `/custom-apparel/vinyl-shirts` | `pages/custom-apparel/vinyl-shirts.blade.php` | `vavQnQ8Q0pU` | assigned |
| Rhinestone Apparel | `/custom-apparel/rhinestone-apparel` | `pages/custom-apparel/rhinestone-shirts.blade.php` | `wS7NHsyIEUY` | assigned |
| Glitter Shirts | `/custom-apparel/glitter-shirts` | `pages/custom-apparel/glitter-shirts.blade.php` | `fS1L1h6VRog` | assigned |
| Foil Shirts | `/custom-apparel/foil-shirts` | `pages/custom-apparel/foil-shirts.blade.php` | `gaTzSSv0qGM` | assigned |
| Flock Shirts | `/custom-apparel/flock-shirts` | `pages/custom-apparel/flock-shirts.blade.php` | `gaTzSSv0qGM` | assigned |
| Glow in the Dark | `/custom-apparel/glow-in-the-dark-shirts` | `pages/custom-apparel/glow-in-the-dark-shirts.blade.php` | `JG01ZE2_unc` | assigned |
| Holographic Shirts | `/custom-apparel/holographic-shirts` | `pages/custom-apparel/holographic-shirts.blade.php` | `D4jDHpzdWUA` | assigned |
| Spirit Wear | `/custom-apparel/spirit-wear` | `pages/custom-apparel/spirit-wear-shirts.blade.php` | `JXD-Zl7-Rrs` | assigned |
| Embroidery | `/custom-apparel/embroidery` | `pages/custom-apparel/embroidery.blade.php` | `F3J9nyiM3So` | placeholder |
| Screen Printing | `/custom-apparel/screen-printing` | `pages/custom-apparel/screen-printing.blade.php` | `F3J9nyiM3So` | placeholder |
| DTF Transfers | `/custom-apparel/printing-options/dtf-printing` | `pages/custom-apparel/dtf-transfers.blade.php` | `F3J9nyiM3So` | placeholder |
| Dye Sublimation | `/custom-apparel/printing-options/dye-sublimation-printing` | `pages/custom-apparel/dye-sublimation.blade.php` | `F3J9nyiM3So` | placeholder |
| Brick Shirts | `/custom-apparel/brick-shirts` | `pages/custom-apparel/brick-shirts.blade.php` | `F3J9nyiM3So` | placeholder |
| Puff Shirts | `/custom-apparel/puff-shirts` | `pages/custom-apparel/puff-shirts.blade.php` | `F3J9nyiM3So` | placeholder |
| Reflective Shirts | `/custom-apparel/reflective-shirts` | `pages/custom-apparel/reflective-shirts.blade.php` | `F3J9nyiM3So` | placeholder |
| Corporate Wear | `/custom-apparel/corporate-wear` | `pages/custom-apparel/corporate-wear-shirts.blade.php` | `F3J9nyiM3So` | placeholder |
| Reunion Shirts | `/custom-apparel/reunion-shirts` | `pages/custom-apparel/reunion-shirts.blade.php` | `F3J9nyiM3So` | placeholder |

#### Stickers

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Stickers (index) | `/stickers` | `pages/stickers/index.blade.php` | `aRq0XJ5By9A` | assigned |
| Custom Shaped Stickers | `/stickers/custom-shaped-stickers` | `pages/stickers/custom-shaped-stickers.blade.php` | `F3J9nyiM3So` | placeholder |
| Standard Stickers | `/stickers/standard-stickers` | `pages/stickers/standard-stickers.blade.php` | `F3J9nyiM3So` | placeholder |

#### Vehicle Graphics

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Vehicle Graphics (index) | `/vehicle-graphics` | `pages/vehicle-graphics/index.blade.php` | `BI4J-BjvEmM` | assigned |
| Automobile Graphics | `/vehicle-graphics/automobile-graphics` | `pages/vehicle-graphics/automobile-graphics.blade.php` | `F3J9nyiM3So` | placeholder |
| Vehicle Magnets | `/vehicle-graphics/vehicle-magnets` | `pages/vehicle-graphics/vehicle-magnets.blade.php` | `3OpyqaZVkRM` | assigned |
| DOT Decals | `/vehicle-graphics/dot-decals` | `pages/vehicle-graphics/dot-decals.blade.php` | `lSd-DXfNXUw` | assigned |

#### Promotional Items

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Promo Items (index) | `/promotional-items` | `pages/promotional-items.blade.php` | `F3J9nyiM3So` | placeholder |
| Can Koozies | `/promotional-items/can-koozies` | `pages/promotional-items/can-koozies.blade.php` | `F3J9nyiM3So` | placeholder |
| Drink Coasters | `/promotional-items/drink-coasters` | `pages/promotional-items/drink-coasters.blade.php` | `F3J9nyiM3So` | placeholder |
| Mouse Pads | `/promotional-items/mouse-pads` | `pages/promotional-items/mouse-pads.blade.php` | `F3J9nyiM3So` | placeholder |
| Mugs | `/promotional-items/mugs` | `pages/promotional-items/mugs.blade.php` | `F3J9nyiM3So` | placeholder |
| Tote Bags | `/promotional-items/tote-bags` | `pages/promotional-items/tote-bags.blade.php` | `F3J9nyiM3So` | placeholder |
| Towels | `/promotional-items/towels` | `pages/promotional-items/towels.blade.php` | `F3J9nyiM3So` | placeholder |

#### Design Services

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Design Services (index) | `/design-services` | `pages/design-services/index.blade.php` | `F3J9nyiM3So` | placeholder |
| Graphic Design | `/design-services/graphic-design` | `pages/design-services/graphic-design.blade.php` | `F3J9nyiM3So` | placeholder |
| Logo Design | `/design-services/logo-design` | `pages/design-services/logo-design.blade.php` | `F3J9nyiM3So` | placeholder |

#### Company

| Page | URL | Blade File | Video ID | Status |
|---|---|---|---|---|
| Company (index) | `/company` | `pages/company/index.blade.php` | `j0vslNa91gU` | assigned *(same as about/home)* |
| Articles | `/company/articles` | `pages/company/articles.blade.php` | `F3J9nyiM3So` | placeholder |
| Resources | `/company/resources` | `pages/company/resources.blade.php` | `F3J9nyiM3So` | placeholder |

---

## Sitemap Files Plan

Two XML sitemap files will be built and maintained as Blade views served as routes.

### `sitemap_video.xml`

**Purpose:** Tells Google about every YouTube video embedded on the site, one `<url>` per page.

**Location:** `resources/views/sitemaps/sitemap-video.blade.php` → served at `/sitemap_video.xml`

**Format per entry:**
```xml
<url>
  <loc>https://www.top5pct.com/{page-url}</loc>
  <video:video>
    <video:thumbnail_loc>https://i.ytimg.com/vi/{videoId}/hqdefault.jpg</video:thumbnail_loc>
    <video:title>{Page heading}</video:title>
    <video:description>{Page meta description}</video:description>
    <video:player_loc allow_embed="yes">https://www.youtube.com/embed/{videoId}</video:player_loc>
    <video:publication_date>{YYYY-MM-DD}</video:publication_date>
    <video:family_friendly>yes</video:family_friendly>
    <video:uploader info="https://www.youtube.com/channel/UCAhLYjgb9745wv_yfmxSe6w">Top 5 Percent</video:uploader>
  </video:video>
</url>
```

**Maintenance rule:** When a `videoId` changes in a blade page, update this document's table above AND the sitemap view. Only include pages that have a non-placeholder (assigned) video ID, or include all pages if the placeholder is acceptable.

---

### `sitemap_images.xml`

**Purpose:** Tells Google about every significant product/content image on the site, one `<image:image>` block per image per page URL.

**Location:** `resources/views/sitemaps/sitemap-images.blade.php` → served at `/sitemap_images.xml`

**Format per entry:**
```xml
<url>
  <loc>https://www.top5pct.com/{page-url}</loc>
  <image:image>
    <image:loc>https://www.top5pct.com/images/{path/to/image.jpg}</image:loc>
    <image:title>{Descriptive title}</image:title>
    <image:caption>{Alt text / caption}</image:caption>
  </image:image>
  <image:image>
    ... additional images on the same page ...
  </image:image>
</url>
```

**Maintenance rule:** When images are added, replaced, or removed from a page, update the sitemap view. Hero/banner images and product grid images are the priority inclusions. Navigation icons and UI decoration images are excluded.

**Reference:** See `docs/new-images.md` for the full image migration history and current canonical image paths under `public/images/`.

---

## Sitemap Index

Once both files are live, add them to the sitemap index so Google picks them up:

```xml
<!-- In resources/views/sitemaps/sitemap-index.blade.php or equivalent -->
<sitemapindex>
  <sitemap>
    <loc>https://www.top5pct.com/sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://www.top5pct.com/sitemap_video.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://www.top5pct.com/sitemap_images.xml</loc>
  </sitemap>
</sitemapindex>
```

Also verify that `robots.txt` references the sitemap index.

---

## Workflow: Adding a New Page

1. Add the route and blade file as normal.
2. Add the `<x-sections.video-banner videoId="..." />` component with the correct ID.
3. Add a row to the relevant section of the **Full Page Video Assignment Table** above.
4. Add a `<url>` block to `sitemap_video.xml` (blade view).
5. Add a `<url>` block with all significant images to `sitemap_images.xml` (blade view).
6. Re-submit the sitemap index in Google Search Console.

## Workflow: Changing a Video

1. Update the `videoId` prop in the blade page file.
2. Update the `Video ID` column in the table above.
3. Update the matching `<url>` block in `sitemap_video.xml`.
4. Re-submit the video sitemap in Google Search Console.
