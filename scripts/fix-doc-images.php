<?php

/**
 * Fix docs/new-images.md — correct Done rows that received the wrong new image
 * because the first str_replace pass consumed multiple occurrences of the same
 * old image path within the same section.
 *
 * Every fix is scoped to its page section and uses the component column as
 * additional context so each pattern is unique in the entire doc.
 */

$docPath = dirname(__DIR__) . '/docs/new-images.md';
$content = file_get_contents($docPath);

function fixRow(string &$content, string $sectionFragment, string $component, string $size, string $wrongImg, string $correctImg): void
{
    $start = strpos($content, $sectionFragment);
    if ($start === false) {
        echo "[MISS-SECTION] {$sectionFragment}\n";
        return;
    }
    $end = strpos($content, "\n---", $start + strlen($sectionFragment));
    if ($end === false) $end = strlen($content);

    $section = substr($content, $start, $end - $start);

    // Build the search pattern: component | size | `wrong` | Done |
    $search  = "| `{$component}` | {$size} | `{$wrongImg}` | Done |";
    $replace = "| `{$component}` | {$size} | `{$correctImg}` | Done |";

    if (strpos($section, $search) === false) {
        echo "[MISS-ROW] In '{$sectionFragment}' comp='{$component}' img='{$wrongImg}'\n";
        return;
    }

    $section = str_replace($search, $replace, $section);
    $content = substr($content, 0, $start) . $section . substr($content, $end);
    echo "[FIX] {$sectionFragment} / {$component} → {$correctImg}\n";
}

// ─── vinyl-shirts ─────────────────────────────────────────────────────────────
fixRow($content, 'vinyl-shirts.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'custom-shirts/top5pct-custom-caps-vinyl.jpg',
    'custom-shirts/top5pct-neon-vinyl-shirts.jpg');

fixRow($content, 'vinyl-shirts.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'custom-shirts/top5pct-custom-hoodies.jpg',
    'custom-shirts/top5pct-vinyl-caps.jpg');

fixRow($content, 'vinyl-shirts.blade.php',
    'card-detailed-info` image1', '400×300px',
    'custom-shirts/top5pct-custom-caps-vinyl.jpg',
    'custom-shirts/top5pct-vinyl-hoodie.jpg');

// ─── dtf-transfers ────────────────────────────────────────────────────────────
fixRow($content, 'dtf-transfers.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'dtf-transfers/top5pct-custom-sweatshirts.jpg',
    'dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg');

// ─── dye-sublimation ──────────────────────────────────────────────────────────
fixRow($content, 'dye-sublimation.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'custom-shirts/top5pct-custom-face-mask-sublimated.jpg',
    'custom-shirts/top5pct-dye-sublimation-shirts.jpg');

fixRow($content, 'dye-sublimation.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'custom-shirts/top5pct-custom-sublimated-towels.jpg',
    'custom-shirts/top5pct-sublimation-shirt-printer.jpg');

fixRow($content, 'dye-sublimation.blade.php',
    'card-detailed-info` image1', '400×300px',
    'custom-shirts/top5pct-custom-dog-bandanas.jpg',
    'custom-shirts/top5pct-sublimation-shirt.jpg');

// ─── corporate-wear-shirts ────────────────────────────────────────────────────
fixRow($content, 'corporate-wear-shirts.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'corporate-wear/top5pct-custom-aprons-joliet.jpg',
    'corporate-wear/top5pct-landscaping-clothing-joliet.jpg');

fixRow($content, 'corporate-wear-shirts.blade.php',
    'card-2image-with-text` image1', 'fluid 4:3, ~50%',
    'corporate-wear/top5pct-custom-business-shirts.jpg',
    'corporate-wear/top5pct-safety-work-gear-joliet.jpg');

// ─── reunion-shirts ───────────────────────────────────────────────────────────
fixRow($content, 'reunion-shirts.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg',
    'reunion-shirts/top5pct-reunion-group-shirts.jpg');

fixRow($content, 'reunion-shirts.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'reunion-shirts/top5pct-group-shirts.jpg',
    'reunion-shirts/top5pct-reunion-shirts.jpg');

// ─── banners ──────────────────────────────────────────────────────────────────
fixRow($content, 'pages/signs/banners.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'banners/top5pct-banners-near-me.jpg',
    'banners/top5pct-graduation-banners.jpg');

fixRow($content, 'pages/signs/banners.blade.php',
    'card-2image-with-text` image1', 'fluid 4:3, ~50%',
    'banners/top5pct-big-banners.jpg',
    'banners/top5pct-retractable-banner.jpg');

// ─── table-cloths (special: has ⚠ annotation in existing row) ────────────────
// The row text contains "⚠ file missing" after the filename so we do a direct
// section-scoped replacement of the whole image+annotation cell value.
$tcStart = strpos($content, 'table-cloths.blade.php');
if ($tcStart !== false) {
    $tcEnd = strpos($content, "\n---", $tcStart);
    if ($tcEnd === false) $tcEnd = strlen($content);
    $section = substr($content, $tcStart, $tcEnd - $tcStart);
    $oldCell = '`table-runners/top5pct-custom-table-cloth-joliet-will-county.jpg` ⚠ file missing | Done |';
    $newCell = '`table-runners/top5pct-table-cloths.jpg` | Done |';
    if (strpos($section, $oldCell) !== false) {
        $section = str_replace($oldCell, $newCell, $section);
        $content = substr($content, 0, $tcStart) . $section . substr($content, $tcEnd);
        echo "[FIX] table-cloths.blade.php / carousel slot 3 → top5pct-table-cloths.jpg\n";
    } else {
        echo "[MISS-ROW] table-cloths carousel slot 3 annotated cell not found\n";
    }
}

// ─── window-signs ─────────────────────────────────────────────────────────────
fixRow($content, 'window-signs.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'window-wall-floor-decals/top5pct-custom-window-signs.jpg',
    'window-wall-floor-decals/top5pct-window-signs-joliet.jpg');

// ─── custom-shaped-stickers ───────────────────────────────────────────────────
fixRow($content, 'custom-shaped-stickers.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg',
    'stickers-decals/top5pct-diecut-stickers.jpg');

fixRow($content, 'custom-shaped-stickers.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'stickers-decals/top5pct-custom-label-stickers.jpg',
    'stickers-decals/top5pct-stickers-in-joliet.jpg');

// ─── automobile-graphics ──────────────────────────────────────────────────────
// Row 6 (card-left, first): wrong "pickup-truck-graphics" → correct "van-graphics-decals"
fixRow($content, 'automobile-graphics.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'automobile-graphics/top5pct-pickup-truck-graphics.jpg',
    'automobile-graphics/top5pct-van-graphics-decals.jpg');

// Row 9 (card-2image image2): wrong "trailer-decals" → correct "vehicle-window-graphics-in-joliet"
fixRow($content, 'automobile-graphics.blade.php',
    'card-2image-with-text` image2', 'fluid 4:3, ~50%',
    'automobile-graphics/top5pct-trailer-decals.jpg',
    'automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg');

// Row 10 (second card-left, boats): wrong "trailer-decal-graphics" → correct "vehicle-window-graphics-joliet"
// Both card-left rows now have different images so we can match directly:
fixRow($content, 'automobile-graphics.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'automobile-graphics/top5pct-trailer-decal-graphics.jpg',
    'automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg');

// ─── vehicle-magnets ──────────────────────────────────────────────────────────
fixRow($content, 'vehicle-magnets.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'vehicle-magnets/top5pct-car-magnets-joliet.jpg',
    'vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg');

fixRow($content, 'vehicle-magnets.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'vehicle-magnets/top5pct-car-magnets.jpg',
    'vehicle-magnets/top5pct-custom-car-magnets.jpg');

fixRow($content, 'vehicle-magnets.blade.php',
    'card-2image-with-text` image1', 'fluid 4:3, ~50%',
    'vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg',
    'vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg');

// ─── mugs ─────────────────────────────────────────────────────────────────────
fixRow($content, 'mugs.blade.php',
    'card-image-with-text` (left)', '600×450px',
    'promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg',
    'promo-items/mugs/top5pct-custom-printed-mugs.jpg');

fixRow($content, 'mugs.blade.php',
    'card-image-with-text` (right)', '600×450px',
    'promo-items/mugs/top5pct-custom-coffee-mugs.jpg',
    'promo-items/mugs/top5pct-picture-on-mugs.jpg');

fixRow($content, 'mugs.blade.php',
    'card-detailed-info` image1', '400×300px',
    'promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg',
    'promo-items/mugs/top5pct-printed-mugs.jpg');

// ─── Execution Checklist — tick the 4 remaining items ────────────────────────
$content = str_replace(
    '- [ ] Fix `table-cloths.blade.php` carousel slot 3 — update `image=` attribute from the missing `top5pct-custom-table-cloth-joliet-will-county.jpg` to the new `top5pct-table-cloths.jpg`',
    '- [x] Fix `table-cloths.blade.php` carousel slot 3 — updated `image=` attribute from the missing `top5pct-custom-table-cloth-joliet-will-county.jpg` to `top5pct-table-cloths.jpg` ✓',
    $content
);

$content = str_replace(
    '- [ ] Update `can-koozies.blade.php` — change 2 Done slot `image=` attributes to `promo-items/koozies/` paths',
    '- [x] Update `can-koozies.blade.php` — 2 Done carousel slot `src` attributes updated to `promo-items/koozies/` paths ✓',
    $content
);

$content = str_replace(
    '- [ ] Update `mugs.blade.php` — change all 7 Done slot `image=` attributes to `promo-items/mugs/` paths',
    '- [x] Update `mugs.blade.php` — all 7 Done slot `src`/`image=` attributes updated to `promo-items/mugs/` paths ✓',
    $content
);

// Also update the Special Notes section — promo-items blade attributes are now done
$content = str_replace(
    '### Promo-items pages — blade attributes still need updating

`can-koozies.blade.php` and `mugs.blade.php` still reference `custom-shirts/` placeholder images in their `image=` attributes. The new images are now in place at `promo-items/koozies/` and `promo-items/mugs/`, but the blade files must be edited to point to them. See Execution Checklist.',
    '### Promo-items pages — blade attributes updated ✓

`can-koozies.blade.php` and `mugs.blade.php` blade `src`/`image=` attributes have been updated to reference the new `promo-items/koozies/` and `promo-items/mugs/` paths.',
    $content
);

// Update the page header summary line to reflect all Done → wired
$content = str_replace(
    '*New images available: 3 (table-cloths/) — 7 eligible slots — 3 Pending (carousel 1–3)*',
    '*New images available: 3 (table-cloths/) — 7 eligible slots — all 3 wired ✓*',
    $content
);

// ─── Write back ───────────────────────────────────────────────────────────────
file_put_contents($docPath, $content);
echo "\nDoc fixed: docs/new-images.md\n";
