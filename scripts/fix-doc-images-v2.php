<?php

/**
 * Fix docs/new-images.md — directly replace exact wrong Done rows
 * with their correct new image paths.
 *
 * Uses the full row text (row number + component + size + wrong image + Done)
 * as the search string — guaranteed unique anywhere in the doc.
 */

$docPath = dirname(__DIR__) . '/docs/new-images.md';
$content = file_get_contents($docPath);

// Each entry: [ wrong_full_row, correct_full_row ]
// The image column is the only thing that differs between old and new.
$fixes = [

    // ── vinyl-shirts ──────────────────────────────────────────────────────────
    // card-left (row 6): should be neon-vinyl-shirts (not custom-caps-vinyl)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-caps-vinyl.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-neon-vinyl-shirts.jpg` | Done |"],

    // card-right (row 7): should be vinyl-caps (not custom-hoodies)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-hoodies.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-vinyl-caps.jpg` | Done |"],

    // card-detailed-info image1 (row 8): should be vinyl-hoodie (not custom-caps-vinyl)
    ["| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-caps-vinyl.jpg` | Done |",
     "| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-vinyl-hoodie.jpg` | Done |"],

    // ── dtf-transfers ─────────────────────────────────────────────────────────
    // card-left (row 6): should be dtf-zip-up-hoodies (not custom-sweatshirts)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-custom-sweatshirts.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg` | Done |"],

    // ── dye-sublimation ───────────────────────────────────────────────────────
    // card-left (row 6): should be dye-sublimation-shirts (not custom-face-mask-sublimated)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-custom-face-mask-sublimated.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `custom-shirts/top5pct-dye-sublimation-shirts.jpg` | Done |"],

    // card-right (row 7): should be sublimation-shirt-printer (not custom-sublimated-towels)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-custom-sublimated-towels.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `custom-shirts/top5pct-sublimation-shirt-printer.jpg` | Done |"],

    // card-detailed-info image1 (row 8): should be sublimation-shirt (not custom-dog-bandanas)
    ["| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-custom-dog-bandanas.jpg` | Done |",
     "| 8 | `card-detailed-info` image1 | 400×300px | `custom-shirts/top5pct-sublimation-shirt.jpg` | Done |"],

    // ── corporate-wear-shirts ─────────────────────────────────────────────────
    // card-left (row 6): should be landscaping-clothing-joliet (not custom-aprons-joliet)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `corporate-wear/top5pct-custom-aprons-joliet.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `corporate-wear/top5pct-landscaping-clothing-joliet.jpg` | Done |"],

    // card-2image image1 (row 8): should be safety-work-gear-joliet (not custom-business-shirts)
    ["| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `corporate-wear/top5pct-custom-business-shirts.jpg` | Done |",
     "| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `corporate-wear/top5pct-safety-work-gear-joliet.jpg` | Done |"],

    // ── reunion-shirts ────────────────────────────────────────────────────────
    // card-left (row 6): should be reunion-group-shirts (not family-reunion-shirts-joliet)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `reunion-shirts/top5pct-reunion-group-shirts.jpg` | Done |"],

    // card-right (row 7): should be reunion-shirts (not group-shirts)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `reunion-shirts/top5pct-group-shirts.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `reunion-shirts/top5pct-reunion-shirts.jpg` | Done |"],

    // ── banners ───────────────────────────────────────────────────────────────
    // card-right (row 7): should be graduation-banners (not banners-near-me)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-banners-near-me.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `banners/top5pct-graduation-banners.jpg` | Done |"],

    // card-2image image1 (row 8): should be retractable-banner (not big-banners)
    ["| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-big-banners.jpg` | Done |",
     "| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `banners/top5pct-retractable-banner.jpg` | Done |"],

    // ── yard-signs ────────────────────────────────────────────────────────────
    // carousel slot 4 (row 5): should be yard-signs-joliet (not yard-signs — that's card-left)
    ["| 5 | `carousel` slot 4 | 600×450px | `yard-signs/top5pct-yard-signs.jpg` | Done |",
     "| 5 | `carousel` slot 4 | 600×450px | `yard-signs/top5pct-yard-signs-joliet.jpg` | Done |"],

    // card-left (row 6): should be yard-signs (not lawn-signs — lawn-signs is carousel 2)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `yard-signs/top5pct-lawn-signs.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `yard-signs/top5pct-yard-signs.jpg` | Done |"],

    // ── window-signs ──────────────────────────────────────────────────────────
    // card-left (row 6): should be window-signs-joliet (not custom-window-signs)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-custom-window-signs.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `window-wall-floor-decals/top5pct-window-signs-joliet.jpg` | Done |"],

    // ── custom-shaped-stickers ────────────────────────────────────────────────
    // card-left (row 6): should be diecut-stickers (not custom-glossy-stickers-in-joliet)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `stickers-decals/top5pct-diecut-stickers.jpg` | Done |"],

    // card-right (row 7): should be stickers-in-joliet (not custom-label-stickers)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-custom-label-stickers.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `stickers-decals/top5pct-stickers-in-joliet.jpg` | Done |"],

    // ── automobile-graphics ───────────────────────────────────────────────────
    // card-left first (row 6): should be van-graphics-decals (not pickup-truck-graphics)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-pickup-truck-graphics.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-van-graphics-decals.jpg` | Done |"],

    // card-2image image2 (row 9): should be vehicle-window-graphics-in-joliet (not trailer-decals)
    ["| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-trailer-decals.jpg` | Done |",
     "| 9 | `card-2image-with-text` image2 | fluid 4:3, ~50% | `automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg` | Done |"],

    // card-left second (row 10): should be vehicle-window-graphics-joliet (not trailer-decal-graphics)
    ["| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-trailer-decal-graphics.jpg` | Done |",
     "| 10 | `card-image-with-text` (left) | 600×450px | `automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg` | Done |"],

    // ── vehicle-magnets ───────────────────────────────────────────────────────
    // card-left (row 6): should be custom-car-magnets-in-joliet (not car-magnets-joliet)
    ["| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-car-magnets-joliet.jpg` | Done |",
     "| 6 | `card-image-with-text` (left) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg` | Done |"],

    // card-right (row 7): should be custom-car-magnets (not car-magnets)
    ["| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-car-magnets.jpg` | Done |",
     "| 7 | `card-image-with-text` (right) | 600×450px | `vehicle-magnets/top5pct-custom-car-magnets.jpg` | Done |"],

    // card-2image image1 (row 8): should be vehicle-magnets-joliet (not car-sign-magnets-joliet)
    ["| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg` | Done |",
     "| 8 | `card-2image-with-text` image1 | fluid 4:3, ~50% | `vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg` | Done |"],

    // ── mugs ──────────────────────────────────────────────────────────────────
    // card-left (row 5): should be custom-printed-mugs (not custom-coffee-mugs-in-joliet)
    ["| 5 | `card-image-with-text` (left) | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg` | Done |",
     "| 5 | `card-image-with-text` (left) | 600×450px | `promo-items/mugs/top5pct-custom-printed-mugs.jpg` | Done |"],

    // card-right (row 6): should be picture-on-mugs (not custom-coffee-mugs)
    ["| 6 | `card-image-with-text` (right) | 600×450px | `promo-items/mugs/top5pct-custom-coffee-mugs.jpg` | Done |",
     "| 6 | `card-image-with-text` (right) | 600×450px | `promo-items/mugs/top5pct-picture-on-mugs.jpg` | Done |"],

    // card-detailed-info image1 (row 7): should be printed-mugs (not custom-coffee-mugs-in-joliet)
    ["| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg` | Done |",
     "| 7 | `card-detailed-info` image1 | 400×300px | `promo-items/mugs/top5pct-printed-mugs.jpg` | Done |"],
];

$hits   = 0;
$misses = 0;

foreach ($fixes as [$wrong, $correct]) {
    if (strpos($content, $wrong) === false) {
        // Extract image name for a compact miss report
        preg_match('/`([^`]+\.jpg)`/', $wrong, $m);
        echo "[MISS] " . ($m[1] ?? $wrong) . "\n";
        $misses++;
    } else {
        $content = str_replace($wrong, $correct, $content);
        $hits++;
    }
}

// ── Execution Checklist ────────────────────────────────────────────────────────
// Tick the 3 remaining open items (table-cloths slot 3 was already ticked)
$content = str_replace(
    '- [ ] Fix `table-cloths.blade.php` carousel slot 3 — update `image=` attribute from the missing `top5pct-custom-table-cloth-joliet-will-county.jpg` to the new `top5pct-table-cloths.jpg`',
    '- [x] Fix `table-cloths.blade.php` carousel slot 3 — blade attribute updated to `top5pct-table-cloths.jpg` ✓',
    $content
);
$content = str_replace(
    '- [ ] Update `can-koozies.blade.php` — change 2 Done slot `image=` attributes to `promo-items/koozies/` paths',
    '- [x] Update `can-koozies.blade.php` — 2 carousel `src` attributes updated to `promo-items/koozies/` paths ✓',
    $content
);
$content = str_replace(
    '- [ ] Update `mugs.blade.php` — change all 7 Done slot `image=` attributes to `promo-items/mugs/` paths',
    '- [x] Update `mugs.blade.php` — all 7 slot `src`/`image=` attributes updated to `promo-items/mugs/` paths ✓',
    $content
);

// ── Special Notes ──────────────────────────────────────────────────────────────
$content = str_replace(
    '### Promo-items pages — blade attributes still need updating

`can-koozies.blade.php` and `mugs.blade.php` still reference `custom-shirts/` placeholder images in their `image=` attributes. The new images are now in place at `promo-items/koozies/` and `promo-items/mugs/`, but the blade files must be edited to point to them. See Execution Checklist.',
    '### Promo-items pages — blade attributes updated ✓

`can-koozies.blade.php` and `mugs.blade.php` blade `src`/`image=` attributes have been updated to reference the new `promo-items/koozies/` and `promo-items/mugs/` paths.',
    $content
);

file_put_contents($docPath, $content);

echo "\n=== Doc fix complete ===\n";
echo "Replaced : {$hits}\n";
echo "Missed   : {$misses}\n";
