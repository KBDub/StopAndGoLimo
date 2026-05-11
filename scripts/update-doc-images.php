<?php

/**
 * Update docs/new-images.md — replace old image paths with new image paths
 * in every Done row, section by section to avoid cross-page collisions.
 *
 * Each section entry: [ 'section-header-substring', [ [oldImg, newImg], ... ] ]
 * All paths are bare (no leading /) as they appear inside backticks in the doc.
 */

$docPath = dirname(__DIR__) . '/docs/new-images.md';
$content = file_get_contents($docPath);

/**
 * Replace old→new image path within ONE page section of the doc.
 * Uses the section heading to scope each edit, so the same old image on
 * different pages can receive different replacements without collision.
 */
function replaceInSection(string &$content, string $sectionHeadingFragment, array $pairs): void
{
    $start = strpos($content, $sectionHeadingFragment);
    if ($start === false) {
        echo "[MISS-SECTION] Could not find section: {$sectionHeadingFragment}\n";
        return;
    }

    // Find where this section ends (next ---\n or end of file)
    $end = strpos($content, "\n---", $start + strlen($sectionHeadingFragment));
    if ($end === false) {
        $end = strlen($content);
    }

    $section    = substr($content, $start, $end - $start);
    $newSection = $section;

    foreach ($pairs as [$old, $new]) {
        // Only replace inside Done rows (end with "| Done |")
        // Use the full old→new image path swap; within a section this is unique
        $search  = "`{$old}` | Done |";
        $replace = "`{$new}` | Done |";

        if (strpos($newSection, $search) === false) {
            echo "[MISS-ROW] In '{$sectionHeadingFragment}': `{$old}`\n";
        } else {
            $newSection = str_replace($search, $replace, $newSection);
        }
    }

    $content = substr($content, 0, $start) . $newSection . substr($content, $end);
}

// ─── Section updates ──────────────────────────────────────────────────────────

// vinyl-shirts
replaceInSection($content, 'vinyl-shirts.blade.php', [
    ['custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'custom-shirts/top5pct-custom-caps-vinyl.jpg'],        // row 2 carousel 1
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-custom-hoodies.jpg'],             // row 3 carousel 2
    ['custom-shirts/top5pct-custom-t-shirts-main.jpg',                                           'custom-shirts/top5pct-custom-vinyl-hoodies.jpg'],        // row 4 carousel 3
    ['custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                     'custom-shirts/top5pct-custom-vinyl-shirts.jpg'],         // row 5 carousel 4
    ['custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'custom-shirts/top5pct-neon-vinyl-shirts.jpg'],           // row 6 card-left
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-vinyl-caps.jpg'],                  // row 7 card-right
    ['custom-shirts/top5pct-custom-vinyl-shirts-caps-hoodies.jpg',                               'custom-shirts/top5pct-vinyl-hoodie.jpg'],                // row 8 card-2image image1
]);

// screen-printing
replaceInSection($content, 'screen-printing.blade.php', [
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-screenprint-custom-shirts.jpg'],
    ['custom-shirts/top5pct-custom-flock-shirt-hoodie-cap-joliet.jpg',                           'custom-shirts/top5pct-screenprinted-shirts-in-joliet.jpg'],
    ['custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg',                   'custom-shirts/top5pct-screenprinted-shirts-joliet.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg',                                     'custom-shirts/top5pct-screenprinting-shirts.jpg'],
]);

// dtf-transfers
replaceInSection($content, 'dtf-transfers.blade.php', [
    ['dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',                                    'dtf-transfers/top5pct-custom-sweatshirts.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'dtf-transfers/top5pct-custom-shirt-with-picture.jpg'],
    ['custom-shirts/top5pct-custom-t-shirts-main.jpg',                                           'dtf-transfers/top5pct-custom-t-shirts-dtf.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                     'dtf-transfers/top5pct-dtf-hoodies-joliet.jpg'],
    ['dtf-transfers/toptpct-banner-dtf-transfers-joliet.jpg',                                    'dtf-transfers/top5pct-dtf-zip-up-hoodies.jpg'],
]);

// embroidery
replaceInSection($content, 'embroidery.blade.php', [
    ['custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',                         'custom-shirts/top5pct-embroidered-aprons.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-embroidered-caps.jpg'],
    ['custom-shirts/top5pct-custom-t-shirts-main.jpg',                                           'custom-shirts/top5pct-embroidery-in-joliet.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg',                                     'custom-shirts/top5pct-stitched-caps.jpg'],
]);

// rhinestone-shirts
replaceInSection($content, 'rhinestone-shirts.blade.php', [
    ['custom-shirts/top5pct-custom-rhinestone-shirt-cap-hoodie-joliet.jpg',                      'custom-shirts/top5pct-rhinestone-hoodies-joliet.jpg'],
]);

// dye-sublimation
replaceInSection($content, 'dye-sublimation.blade.php', [
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-custom-dog-bandanas.jpg'],
    ['custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'custom-shirts/top5pct-custom-face-mask-sublimated.jpg'],
    ['custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',                     'custom-shirts/top5pct-custom-sublimated-towels.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                     'custom-shirts/top5pct-dye-sublimated-longsleeve-shirt-joliet.jpg'],
    ['custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'custom-shirts/top5pct-dye-sublimation-shirts.jpg'],
    ['custom-shirts/top5pct-custom-holographic-shirt-hoodie-cap-joliet.jpg',                     'custom-shirts/top5pct-sublimation-shirt-printer.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-sublimation-shirt.jpg'],
]);

// glitter-shirts
replaceInSection($content, 'glitter-shirts.blade.php', [
    ['custom-shirts/top5pct-custom-glitter-shirt-cap-hoodie-joliet.jpg',                         'custom-shirts/top5pct-custom-glitter-clothing.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'custom-shirts/top5pct-custom-glitter-sweatshirts.jpg'],
]);

// reflective-shirts
replaceInSection($content, 'reflective-shirts.blade.php', [
    ['custom-shirts/top5pct-custom-reflective-shirts-hoodies-caps-joliet.jpg',                   'custom-shirts/top5pct-reflective-shirts-gold.jpg'],
]);

// corporate-wear-shirts
replaceInSection($content, 'corporate-wear-shirts.blade.php', [
    ['corporate-wear/toptpct-banner-corporate-shirts-uniforms-joliet-shorewood.jpg',             'corporate-wear/top5pct-custom-apron-joliet.jpg'],
    ['corporate-wear/toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg',                'corporate-wear/top5pct-custom-aprons-joliet.jpg'],
    ['corporate-wear/toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg',                   'corporate-wear/top5pct-custom-business-shirts.jpg'],
    ['corporate-wear/toptpct-custom-hoodie-pullover-joliet-shorewood.jpg',                       'corporate-wear/top5pct-custom-pocket-shirt-joliet.jpg'],
    ['corporate-wear/toptpct-custom-polo-shirts-joliet-shorewood-crest-hill.jpg',                'corporate-wear/top5pct-landscaping-clothing-joliet.jpg'],
    ['corporate-wear/toptpct-custom-button-up-shirt-joliet-shorewood.jpg',                       'corporate-wear/top5pct-lawn-care-clothing.jpg'],
    ['corporate-wear/toptpct-custom-corporate-t-shirts-joliet-shorewood.jpg',                   'corporate-wear/top5pct-safety-work-gear-joliet.jpg'],
]);

// reunion-shirts
replaceInSection($content, 'reunion-shirts.blade.php', [
    ['reunion-shirts/toptpct-banner-banner-family-reunion-shirts-joliet-shorewood.jpg',          'reunion-shirts/top5pct-class-reunion-shirt.jpg'],
    ['reunion-shirts/toptpct-class-reunion-shirts-joliet-shorewood.jpg',                         'reunion-shirts/top5pct-family-reunion-shirts-joliet.jpg'],
    ['reunion-shirts/toptpct-family-reunion-shirts-joliet-plainfield.jpg',                       'reunion-shirts/top5pct-family-reunion-tshirts-in-joliet.jpg'],
    ['reunion-shirts/toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg',             'reunion-shirts/top5pct-group-shirts.jpg'],
    ['reunion-shirts/toptpct-class-reunion-shirts-joliet-shorewood.jpg',                         'reunion-shirts/top5pct-reunion-group-shirts.jpg'],
    ['reunion-shirts/toptpct-westinghouse-class-reunion-shirt-joliet-shorewood.jpg',             'reunion-shirts/top5pct-reunion-shirts.jpg'],
]);

// spirit-wear-shirts
replaceInSection($content, 'spirit-wear-shirts.blade.php', [
    ['spirit-wear/top5pct-banner-fanwear-spiritwear-uniforms-joliet-shorewood.jpg',              'spirit-wear/top5pct-spirit-wear-joliet.jpg'],
    ['spirit-wear/top5pct-joliet-west-spirit-wear-hoodie-shorewood.jpg',                         'spirit-wear/top5pct-spirit-wear-shirts.jpg'],
]);

// banners
replaceInSection($content, "pages/signs/banners.blade.php", [
    ['banners/top5pct-banner-business-banners-joliet-shorewood-crest-hill.jpg',                  'banners/top5pct-banners-and-signs.jpg'],
    ['banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg',                         'banners/top5pct-banners-near-me.jpg'],
    ['banners/top5pct-birthday-banner-joliet-shorewood-plainfield.jpg',                          'banners/top5pct-big-banners.jpg'],
    ['banners/top5pct-family-reunion-banners-joliet-crest-hill.jpg',                             'banners/top5pct-custom-retractable-banners-joliet.jpg'],
    ['banners/top5pct-banners-business-joliet-shorewood-crest-hill.jpg',                         'banners/top5pct-custom-vinyl-banners.jpg'],
    ['banners/top5pct-banner-joliet-romeoville-rockdale-plainfield.jpg',                         'banners/top5pct-graduation-banners.jpg'],
    ['banners/top5pct-birthday-banner-joliet-shorewood-plainfield.jpg',                          'banners/top5pct-retractable-banner.jpg'],
]);

// sidewalk-signs
replaceInSection($content, 'sidewalk-signs.blade.php', [
    ['sidewalk-signs/top5pct-banner-a-frame-sidewalk-signs-joliet-romeoville.jpg',               'sidewalk-signs/top5pct-a-frame-sign.jpg'],
    ['sidewalk-signs/top5pct-a-frame-sidewalk-sign-joliet.jpg',                                  'sidewalk-signs/top5pct-custom-a-frame-sidewalk-signs-joliet.jpg'],
    ['sidewalk-signs/top5pct-sidewalk-a-frames-joliet-shorewood.jpg',                            'sidewalk-signs/top5pct-sidewalk-sign.jpg'],
    ['sidewalk-signs/top5pct-sidewalk-signs-joliet-shorewood-crest-hill.jpg',                    'sidewalk-signs/top5pct-sidewalk-signs-joliet.jpg'],
]);

// yard-signs
replaceInSection($content, 'yard-signs.blade.php', [
    ['yard-signs/top5pct-banner-yard-signs-joliet-shorewood-crest-hill.jpg',                     'yard-signs/top5pct-custom-yard-signs-joliet.jpg'],
    ['yard-signs/top5pct-yard-signs-joliet.jpg',                                                 'yard-signs/top5pct-lawn-signs.jpg'],           // carousel slot 2
    ['yard-signs/top5pct-yard-signs-joliet-plainfied-new-lenox.jpg',                             'yard-signs/top5pct-yard-sign-joliet.jpg'],
    ['yard-signs/top5pct-yard-signs-joliet-shorewood-romeoville.jpg',                            'yard-signs/top5pct-yard-signs-joliet.jpg'],    // carousel slot 4
    ['yard-signs/top5pct-yard-signs-joliet.jpg',                                                 'yard-signs/top5pct-yard-signs.jpg'],            // card-left
]);

// table-cloths
replaceInSection($content, 'table-cloths.blade.php', [
    ['table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg',           'table-runners/top5pct-custom-table-cloth.jpg'],
    ['table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg',                           'table-runners/top5pct-personalized-tablecloth-joliet.jpg'],
    ['table-runners/top5pct-custom-table-cloth-joliet-will-county.jpg',                          'table-runners/top5pct-table-cloths.jpg'],
]);

// table-runners
replaceInSection($content, 'table-runners.blade.php', [
    ['table-runners/top5pct-banner-custom-table-cloth-custom-table-runner-joliet.jpg',           'table-runners/top5pct-custom-table-runner.jpg'],
    ['table-runners/top5pct-custom-table-cloth-joliet-crest-hill.jpg',                           'table-runners/top5pct-custom-table-runners.jpg'],
    ['table-runners/top5pct-custom-table-runner-joliet-new-lenox.jpg',                           'table-runners/top5pct-table-runner.jpg'],
    ['table-runners/top5pct-custom-table-runner-joliet-shorewood.jpg',                           'table-runners/top5pct-table-runners.jpg'],
]);

// window-signs
replaceInSection($content, 'window-signs.blade.php', [
    ['window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg',                 'window-wall-floor-decals/top5pct-business-window-signs.jpg'],
    ['window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg',           'window-wall-floor-decals/top5pct-custom-window-signs.jpg'],
    ['window-wall-floor-decals/top5pct-window-cling-decal-joliet-shorewood.jpg',                 'window-wall-floor-decals/top5pct-window-door-signs.jpg'],
    ['window-wall-floor-decals/top5pct-window-decal-joliet-shorewood-rockdale.jpg',              'window-wall-floor-decals/top5pct-window-signs-joliet-slammers.jpg'],
    ['window-wall-floor-decals/top5pct-window-decals-joliet-shorewood-crest-hill.jpg',           'window-wall-floor-decals/top5pct-window-signs-joliet.jpg'],
]);

// door-signs
replaceInSection($content, 'door-signs.blade.php', [
    ['window-wall-floor-decals/top5pct-door-signs-joliet-shorewood-crest-hill.jpg',              'window-wall-floor-decals/top5pct-door-signage.jpg'],
]);

// wall-signs
replaceInSection($content, 'wall-signs.blade.php', [
    ['window-wall-floor-decals/top5pct-wall-signs-joliet.jpg',                                   'window-wall-floor-decals/top5pct-wall-signs.jpg'],
]);

// custom-shaped-stickers
replaceInSection($content, 'custom-shaped-stickers.blade.php', [
    ['stickers-decals/top5pct-stickers-decals-joliet-ocean-viewz.jpg',                           'stickers-decals/top5pct-custom-stickers.jpg'],
    ['stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg',                         'stickers-decals/top5pct-custom-glossy-stickers-in-joliet.jpg'],
    ['stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg',                       'stickers-decals/top5pct-custom-label-stickers.jpg'],
    ['stickers-decals/top5pct-stickers-decals-joliet-labels.jpg',                                'stickers-decals/top5pct-custom-shaped-stickers.jpg'],
    ['stickers-decals/top5pct-stickers-decals-joliet-boxing-sports.jpg',                         'stickers-decals/top5pct-diecut-stickers.jpg'],
    ['stickers-decals/top5pct-stickers-decals-joliet-stoner-rock-bbq.jpg',                       'stickers-decals/top5pct-stickers-in-joliet.jpg'],
]);

// automobile-graphics
replaceInSection($content, 'automobile-graphics.blade.php', [
    ['automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg',                  'automobile-graphics/top5pct-car-wraps.jpg'],
    ['automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg',               'automobile-graphics/top5pct-pickup-truck-graphics.jpg'],
    ['automobile-graphics/top5pct-boat-decals-joliet-shorewood-crest-hill.jpg',                  'automobile-graphics/top5pct-trailer-decal-graphics.jpg'],
    ['automobile-graphics/top5pct-truck-decal-joliet-shorewood-rockdale.jpg',                    'automobile-graphics/top5pct-trailer-decals.jpg'],
    ['automobile-graphics/top5pct-car-wraps-vinyl-lettering-joliet-shorewood.jpg',               'automobile-graphics/top5pct-van-graphics-decals.jpg'],
    ['automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-crest-hill.jpg',           'automobile-graphics/top5pct-vecal-decals.jpg'],
    ['automobile-graphics/top5pct-vinyl-lettering-car-graphics-joliet-shorewood.jpg',            'automobile-graphics/top5pct-vehicle-graphics.jpg'],
    ['automobile-graphics/top5pct-truck-decal-joliet-shorewood-rockdale.jpg',                    'automobile-graphics/top5pct-vehicle-window-graphics-in-joliet.jpg'],
    ['automobile-graphics/top5pct-boat-decals-joliet-shorewood-crest-hill.jpg',                  'automobile-graphics/top5pct-vehicle-window-graphics-joliet.jpg'],
]);

// dot-decals
replaceInSection($content, 'dot-decals.blade.php', [
    ['dot-decals/top5pct-banner-DOT-stickers-joliet-shorewood-channahon.jpg',                    'dot-decals/top5pct-dot-decals-joliet.jpg'],
    ['dot-decals/top5pct-DOT-stickers-joliet-shorewood-rockdale.jpg',                            'dot-decals/top5pct-dot-semi-truck-decals.jpg'],
    ['dot-decals/top5pct-dot-decals-joliet-shorewood-rockdale.jpg',                              'dot-decals/top5pct-dot-truck-decals-joliet.jpg'],
]);

// vehicle-magnets
replaceInSection($content, 'vehicle-magnets.blade.php', [
    ['vehicle-magnets/top5pct-banner-car-magnets-joliet-shorewood-crest-hill.jpg',               'vehicle-magnets/top5pct-automobile-magnets-joliet.jpg'],
    ['vehicle-magnets/top5pct-car-magnets-truck-magnets-joliet.jpg',                             'vehicle-magnets/top5pct-car-magnets-joliet.jpg'],
    ['vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg',                           'vehicle-magnets/top5pct-car-magnets.jpg'],
    ['vehicle-magnets/top5pct-business-magnets-car-magnets-joliet.jpg',                          'vehicle-magnets/top5pct-car-sign-magnets-joliet.jpg'],
    ['vehicle-magnets/top5pct-car-magnets-truck-magnets-joliet.jpg',                             'vehicle-magnets/top5pct-custom-car-magnets-in-joliet.jpg'],
    ['vehicle-magnets/top5pct-car-magnets-vehicle-magnets-joliet.jpg',                           'vehicle-magnets/top5pct-custom-car-magnets.jpg'],
    ['vehicle-magnets/top5pct-business-magnets-car-magnets-joliet.jpg',                          'vehicle-magnets/top5pct-vehicle-magnets-joliet.jpg'],
    ['vehicle-magnets/top5pct-large-magnets-magnets-near-me-joliet.jpg',                         'vehicle-magnets/top5pct-vehicle-magnets.jpg'],
]);

// can-koozies
replaceInSection($content, 'can-koozies.blade.php', [
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'promo-items/koozies/top5pct-can-koozies.jpg'],
    ['custom-shirts/top5pct-custom-pattern-shirts-caps-hoodies-joliet.jpg',                      'promo-items/koozies/top5pct-custom-koozies.jpg'],
]);

// mugs
replaceInSection($content, 'mugs.blade.php', [
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'promo-items/mugs/top5pct-custom-coffee-mugs-in-joliet.jpg'],
    ['custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',                         'promo-items/mugs/top5pct-custom-coffee-mugs.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic1.jpg',                                     'promo-items/mugs/top5pct-custom-mugs-near-me.jpg'],
    ['custom-shirts/top5pct-t-shirt-maker-article-pic2.jpg',                                     'promo-items/mugs/top5pct-custom-mugs.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'promo-items/mugs/top5pct-custom-printed-mugs.jpg'],
    ['custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',                         'promo-items/mugs/top5pct-picture-on-mugs.jpg'],
    ['custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg', 'promo-items/mugs/top5pct-printed-mugs.jpg'],
]);

// ─── Write back ───────────────────────────────────────────────────────────────

file_put_contents($docPath, $content);
echo "\nDoc updated: docs/new-images.md\n";
