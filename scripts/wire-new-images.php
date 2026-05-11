<?php

/**
 * Wire New Images Into Blade Files
 *
 * Updates image= and 'src' => attributes in every Done slot across all 25 pages.
 * Uses line-number targeting to avoid touching hero, Keep, or slide-in CTA slots.
 *
 * Each entry: [ lineNumber, 'search-substring', 'replace-substring' ]
 */

$base = dirname(__DIR__);
$v    = $base . '/resources/views/pages';

$pages = [

    // ─── CUSTOM APPAREL ───────────────────────────────────────────────────────

    'custom-apparel/vinyl-shirts.blade.php' => [
        // carousel 1-4 (src)
        [56, 'top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'top5pct-custom-caps-vinyl.jpg'],
        [57, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-custom-hoodies.jpg'],
        [58, 'top5pct-custom-t-shirts-main.jpg',                                           'top5pct-custom-vinyl-hoodies.jpg'],
        [59, 'top5pct-t-shirt-maker-article-pic1.jpg',                                     'top5pct-custom-vinyl-shirts.jpg'],
        // card-left image (line 72), card-right image (line 82), card-2image image1 (line 98)
        [72, 'top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'top5pct-neon-vinyl-shirts.jpg'],
        [82, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-vinyl-caps.jpg'],
        [98, 'top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'top5pct-vinyl-hoodie.jpg'],
    ],

    'custom-apparel/screen-printing.blade.php' => [
        [56, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-screenprint-custom-shirts.jpg'],
        [57, 'top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg',                           'top5pct-screenprinted-shirts-in-joliet.jpg'],
        [58, 'top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg',                   'top5pct-screenprinted-shirts-joliet.jpg'],
        [59, 'top5pct-t-shirt-maker-article-pic2.jpg',                                     'top5pct-screenprinting-shirts.jpg'],
    ],

    'custom-apparel/dtf-transfers.blade.php' => [
        // carousel 1 stays in dtf-transfers/ dir; carousel 2-4 change dir from custom-shirts
        [56, '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',                                                  '/images/dtf-transfers/top5pct-custom-sweatshirts.jpg'],
        [57, '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',               '/images/dtf-transfers/top5pct-custom-shirt-with-picture.jpg'],
        [58, '/images/custom-shirts/top5pct-custom-t-shirts-main.jpg',                                                        '/images/dtf-transfers/top5pct-custom-t-shirts-dtf.jpg'],
        [59, '/images/custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                                   '/images/dtf-transfers/top5pct-dtf-hoodies-joliet.jpg'],
        // card-left (line 73 in dtf-transfers)
        [73, '/images/dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',                                                  '/images/dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg'],
    ],

    'custom-apparel/embroidery.blade.php' => [
        [56, 'top5pct-custom-embroidery-shops-near-me-joliet.jpg',                         'top5pct-embroidered-aprons.jpg'],
        [57, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-embroidered-caps.jpg'],
        [58, 'top5pct-custom-t-shirts-main.jpg',                                           'top5pct-embroidery-in-joliet.jpg'],
        [59, 'top5pct-t-shirt-maker-article-pic2.jpg',                                     'top5pct-stitched-caps.jpg'],
    ],

    'custom-apparel/rhinestone-shirts.blade.php' => [
        [56, 'top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg',                      'top5pct-rhinestone-hoodies-joliet.jpg'],
    ],

    'custom-apparel/dye-sublimation.blade.php' => [
        [56, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-custom-dog-bandanas.jpg'],
        [57, 'top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'top5pct-custom-face-mask-sublimated.jpg'],
        [58, 'top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',                     'top5pct-custom-sublimated-towels.jpg'],
        [59, 'top5pct-t-shirt-maker-article-pic1.jpg',                                     'top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg'],
        [72, 'top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'top5pct-dye-sublimation-shirts.jpg'],
        [82, 'top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',                     'top5pct-sublimation-shirt-printer.jpg'],
        [98, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-sublimation-shirt.jpg'],
    ],

    'custom-apparel/glitter-shirts.blade.php' => [
        [56, 'top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'top5pct-custom-glitter-clothing.jpg'],
        [57, 'top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'top5pct-custom-glitter-sweatshirts.jpg'],
    ],

    'custom-apparel/reflective-shirts.blade.php' => [
        [56, 'top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg',                   'top5pct-reflective-shirts-gold.jpg'],
    ],

    'custom-apparel/corporate-wear-shirts.blade.php' => [
        [52, 'toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg',              'top5pct-custom-apron-joliet.jpg'],
        [53, 'toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg',                 'top5pct-custom-aprons-joliet.jpg'],
        [54, 'toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg',                    'top5pct-custom-business-shirts.jpg'],
        [55, 'toptpct-custom-hoodie-pullover-joliet-shorewood.jpg',                        'top5pct-custom-pocket-shirt-joliet.jpg'],
        [68, 'toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg',                 'top5pct-landscaping-clothing-joliet.jpg'],
        [79, 'toptpct-custom-button-up-shirt-joliet-shorewood.jpg',                        'top5pct-lawn-care-clothing.jpg'],
        [93, 'toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg',                    'top5pct-safety-work-gear-joliet.jpg'],
    ],

    'custom-apparel/reunion-shirts.blade.php' => [
        [52, 'toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',           'top5pct-class-reunion-shirt.jpg'],
        [53, 'toptpct-class-reunion-shirts-joliet-shorewood.jpg',                          'top5pct-family-reunion-shirts-joliet.jpg'],
        [54, 'toptpct-family-reunion-shirts-joliet-plainfield.jpg',                        'top5pct-family-reunion-tshirts-in-joliet.jpg'],
        [55, 'toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg',              'top5pct-group-shirts.jpg'],
        [68, 'toptpct-class-reunion-shirts-joliet-shorewood.jpg',                          'top5pct-reunion-group-shirts.jpg'],
        [79, 'toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg',              'top5pct-reunion-shirts.jpg'],
    ],

    'custom-apparel/spirit-wear-shirts.blade.php' => [
        [55, 'top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg',            'top5pct-spirit-wear-joliet.jpg'],
        [56, 'top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg',                       'top5pct-spirit-wear-shirts.jpg'],
    ],

    // ─── SIGNS ────────────────────────────────────────────────────────────────

    'signs/banners.blade.php' => [
        [56, 'top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg',            'top5pct-banners-and-signs.jpg'],
        [57, 'top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg',                   'top5pct-banners-near-me.jpg'],
        [58, 'top5pct-birthday-banner-joliet-shorewood-plainfield.jpg',                    'top5pct-big-banners.jpg'],
        [59, 'top5pct-family-reunion-banners-joliet-crest-hill.jpg',                       'top5pct-custom-retractable-banners-joliet.jpg'],
        [72, 'top5pct-banners-business-joliet-shorewood-crest-hill.jpg',                   'top5pct-custom-vinyl-banners.jpg'],
        [82, 'top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg',                   'top5pct-graduation-banners.jpg'],
        [95, 'top5pct-birthday-banner-joliet-shorewood-plainfield.jpg',                    'top5pct-retractable-banner.jpg'],
    ],

    'signs/sidewalk-signs.blade.php' => [
        [56, 'top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg',                'top5pct-a-frame-sign.jpg'],
        [57, 'top5pct-a-frame-sidewalk-sign-joliet.jpg',                                   'top5pct-custom-a-frame-sidewalk-signs-joliet.jpg'],
        [58, 'top5pct-sidewalk-a-frames-joliet-shorewood.jpg',                             'top5pct-sidewalk-sign.jpg'],
        [59, 'top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg',                     'top5pct-sidewalk-signs-joliet.jpg'],
    ],

    'signs/yard-signs.blade.php' => [
        [56, 'top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg',                  'top5pct-custom-yard-signs-joliet.jpg'],
        [57, 'top5pct-yard-signs-joliet.jpg',                                              'top5pct-lawn-signs.jpg'],
        [58, 'top5pct-yard-signs-joliet-plainfied-new-lenox.jpg',                          'top5pct-yard-sign-joliet.jpg'],
        [59, 'top5pct-yard-signs-joliet-shorewood-romeoville.jpg',                         'top5pct-yard-signs-joliet.jpg'],
        [72, 'top5pct-yard-signs-joliet.jpg',                                              'top5pct-yard-signs.jpg'],
    ],

    'signs/table-cloths.blade.php' => [
        [56, 'top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg',           'top5pct-custom-table-cloth.jpg'],
        [57, 'top5pct-custom-table-runner-joliet-shorewood.jpg',                           'top5pct-personalized-tablecloth-joliet.jpg'],
        [58, 'top5pct-custom-table-cloth-joliet-will-county.jpg',                         'top5pct-table-cloths.jpg'],
    ],

    'signs/table-runners.blade.php' => [
        [56, 'top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg',           'top5pct-custom-table-runner.jpg'],
        [57, 'top5pct-custom-table-cloth-joliet-crest-hill.jpg',                           'top5pct-custom-table-runners.jpg'],
        [58, 'top5pct-custom-table-runner-joliet-new-lenox.jpg',                           'top5pct-table-runner.jpg'],
        [59, 'top5pct-custom-table-runner-joliet-shorewood.jpg',                           'top5pct-table-runners.jpg'],
    ],

    'signs/window-signs.blade.php' => [
        [56, 'top5pct-banner-wall-decal-door-signs-joliet.jpg',                            'top5pct-business-window-signs.jpg'],
        [57, 'top5pct-window-decals-joliet-shorewood-crest-hill.jpg',                      'top5pct-custom-window-signs.jpg'],
        [58, 'top5pct-window-cling-decal-joliet-shorewood.jpg',                            'top5pct-window-door-signs.jpg'],
        [59, 'top5pct-window-decal-joliet-shorewood-rockdale.jpg',                         'top5pct-window-signs-joliet-slammers.jpg'],
        [72, 'top5pct-window-decals-joliet-shorewood-crest-hill.jpg',                      'top5pct-window-signs-joliet.jpg'],
    ],

    'signs/door-signs.blade.php' => [
        [56, 'top5pct-door-signs-joliet-shorewood-crest-hill.jpg',                         'top5pct-door-signage.jpg'],
    ],

    'signs/wall-signs.blade.php' => [
        [56, 'top5pct-wall-signs-joliet.jpg',                                              'top5pct-wall-signs.jpg'],
    ],

    // ─── STICKERS ─────────────────────────────────────────────────────────────

    'stickers/custom-shaped-stickers.blade.php' => [
        [56, 'top5pct-stickers-decals-joliet-ocean-viewz.jpg',                             'top5pct-custom-stickers.jpg'],
        [57, 'top5pct-stickers-decals-joliet-boxing-sports.jpg',                           'top5pct-custom-glossy-stickers-in-joliet.jpg'],
        [58, 'top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg',                         'top5pct-custom-label-stickers.jpg'],
        [59, 'top5pct-stickers-decals-joliet-labels.jpg',                                  'top5pct-custom-shaped-stickers.jpg'],
        [72, 'top5pct-stickers-decals-joliet-boxing-sports.jpg',                           'top5pct-diecut-stickers.jpg'],
        [82, 'top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg',                         'top5pct-stickers-in-joliet.jpg'],
    ],

    // ─── VEHICLE GRAPHICS ─────────────────────────────────────────────────────

    'vehicle-graphics/automobile-graphics.blade.php' => [
        [56, 'top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg',                        'top5pct-car-wraps.jpg'],
        [57, 'top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg',                     'top5pct-pickup-truck-graphics.jpg'],
        [58, 'top5pct-boat-decals-joliet-shorewood-crest-hill.jpg',                        'top5pct-trailer-decal-graphics.jpg'],
        [59, 'top5pct-truck-decal-joliet-shorewood-rockdale.jpg',                          'top5pct-trailer-decals.jpg'],
        [72, 'top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg',                     'top5pct-van-graphics-decals.jpg'],
        [82, 'top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg',                 'top5pct-vecal-decals.jpg'],
        [95, 'top5pct-vinyl-lettering-car-graphics-joliet-shorewood.jpg',                  'top5pct-vehicle-graphics.jpg'],
        [97, 'top5pct-truck-decal-joliet-shorewood-rockdale.jpg',                          'top5pct-vehicle-window-graphics-in-joliet.jpg'],
        [107, 'top5pct-boat-decals-joliet-shorewood-crest-hill.jpg',                       'top5pct-vehicle-window-graphics-joliet.jpg'],
    ],

    'vehicle-graphics/dot-decals.blade.php' => [
        [56, 'top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg',                 'top5pct-dot-decals-joliet.jpg'],
        [57, 'top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg',                         'top5pct-dot-semi-truck-decals.jpg'],
        [58, 'top5pct-dot-decals-joliet-shorewood-rockdale.jpg',                           'top5pct-dot-truck-decals-joliet.jpg'],
    ],

    'vehicle-graphics/vehicle-magnets.blade.php' => [
        [56, 'top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg',                 'top5pct-automobile-magnets-joliet.jpg'],
        [57, 'top5pct-car-magnets-truck-magnets-joliet.jpg',                               'top5pct-car-magnets-joliet.jpg'],
        [58, 'top5pct-car-magnets-vehicle-magnets-joliet.jpg',                             'top5pct-car-magnets.jpg'],
        [59, 'top5pct-business-magnets-car-magnets-joliet.jpg',                            'top5pct-car-sign-magnets-joliet.jpg'],
        [72, 'top5pct-car-magnets-truck-magnets-joliet.jpg',                               'top5pct-custom-car-magnets-in-joliet.jpg'],
        [82, 'top5pct-car-magnets-vehicle-magnets-joliet.jpg',                             'top5pct-custom-car-magnets.jpg'],
        [95, 'top5pct-business-magnets-car-magnets-joliet.jpg',                            'top5pct-vehicle-magnets-joliet.jpg'],
        [97, 'top5pct-large-magnets-magnets-near-me-joliet.jpg',                           'top5pct-vehicle-magnets.jpg'],
    ],

    // ─── PROMOTIONAL ITEMS ────────────────────────────────────────────────────

    'promotional-items/can-koozies.blade.php' => [
        // carousel 1-2 only (Keep for carousel 3-4 and card slots)
        [55, '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', '/images/promo-items/koozies/top5pct-can-koozies.jpg'],
        [56, '/images/custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg',                      '/images/promo-items/koozies/top5pct-custom-koozies.jpg'],
    ],

    'promotional-items/mugs.blade.php' => [
        // All 7 Done: carousel 1-4, card-left, card-right, card-detailed-info image1
        [55, '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', '/images/promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg'],
        [56, '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',                        '/images/promo-items/mugs/top5pct-custom-coffee-mugs.jpg'],
        [57, '/images/custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                    '/images/promo-items/mugs/top5pct-custom-mugs-near-me.jpg'],
        [58, '/images/custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg',                                    '/images/promo-items/mugs/top5pct-custom-mugs.jpg'],
        [71, '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', '/images/promo-items/mugs/top5pct-custom-printed-mugs.jpg'],
        [81, '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',                        '/images/promo-items/mugs/top5pct-picture-on-mugs.jpg'],
        [97, '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', '/images/promo-items/mugs/top5pct-printed-mugs.jpg'],
    ],

];

// ─── Execute replacements ──────────────────────────────────────────────────────

$totalFiles   = 0;
$totalHits    = 0;
$totalMisses  = 0;

foreach ($pages as $relPath => $replacements) {
    $filePath = $v . '/' . $relPath;

    if (!file_exists($filePath)) {
        echo "[MISSING FILE] {$relPath}\n";
        continue;
    }

    $lines   = file($filePath);
    $misses  = 0;
    $hits    = 0;

    foreach ($replacements as [$lineNum, $search, $replace]) {
        $idx = $lineNum - 1;

        if (!isset($lines[$idx])) {
            echo "[OUT-OF-RANGE] {$relPath}:{$lineNum}\n";
            $misses++;
            continue;
        }

        if (strpos($lines[$idx], $search) === false) {
            echo "[MISS] {$relPath}:{$lineNum} — not found: '{$search}'\n";
            $misses++;
            continue;
        }

        $lines[$idx] = str_replace($search, $replace, $lines[$idx]);
        $hits++;
    }

    file_put_contents($filePath, implode('', $lines));

    $status = $misses === 0 ? '[OK]  ' : '[WARN]';
    $name   = str_pad(basename(dirname($relPath)) . '/' . basename($relPath), 55);
    echo "{$status} {$name} {$hits} replaced, {$misses} missed\n";

    $totalFiles++;
    $totalHits   += $hits;
    $totalMisses += $misses;
}

echo "\n";
echo "=== Wire complete ===\n";
echo "Files processed : {$totalFiles}\n";
echo "Lines replaced  : {$totalHits}\n";
echo "Misses          : {$totalMisses}\n";
