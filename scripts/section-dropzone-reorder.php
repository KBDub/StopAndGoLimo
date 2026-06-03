<?php

/**
 * Section Cleanup: banner-cta-artwork-dropzone
 *
 * List A (26 pages): Remove dropzone + first cta-quadruple-button-banner from their
 *   current position. Re-insert dropzone immediately before the remaining cta-quad.
 *
 * List B (29 pages): Remove dropzone + the cta-quadruple-button-banner immediately after it.
 *
 * Home (special): Remove dropzone only. The single cta-quad stays.
 *
 * See docs/section.review.md for rationale.
 */

$listA = [
    'resources/views/pages/custom-apparel/index.blade.php',
    'resources/views/pages/custom-apparel/printing-options/screen-printing.blade.php',
    'resources/views/pages/custom-apparel/printing-options/embroidery.blade.php',
    'resources/views/pages/custom-apparel/printing-options/digital-vinyl.blade.php',
    'resources/views/pages/custom-apparel/printing-options/rhinestone-apparel.blade.php',
    'resources/views/pages/custom-apparel/specialty-materials/vinyl.blade.php',
    'resources/views/pages/custom-apparel/vinyl-shirts.blade.php',
    'resources/views/pages/custom-apparel/brick-shirts.blade.php',
    'resources/views/pages/custom-apparel/dye-sublimation.blade.php',
    'resources/views/pages/custom-apparel/flock-shirts.blade.php',
    'resources/views/pages/custom-apparel/foil-shirts.blade.php',
    'resources/views/pages/custom-apparel/glitter-shirts.blade.php',
    'resources/views/pages/custom-apparel/glow-in-the-dark-shirts.blade.php',
    'resources/views/pages/custom-apparel/holographic-shirts.blade.php',
    'resources/views/pages/custom-apparel/puff-shirts.blade.php',
    'resources/views/pages/custom-apparel/reflective-shirts.blade.php',
    'resources/views/pages/custom-apparel/group-wear/corporate-wear-shirts.blade.php',
    'resources/views/pages/custom-apparel/group-wear/reunion-shirts.blade.php',
    'resources/views/pages/custom-apparel/group-wear/spirit-wear-shirts.blade.php',
    'resources/views/pages/design-services/index.blade.php',
    'resources/views/pages/design-services/graphic-design.blade.php',
    'resources/views/pages/design-services/logo-design.blade.php',
    'resources/views/pages/design-services/custom-storefronts.blade.php',
    'resources/views/pages/stickers/index.blade.php',
    'resources/views/pages/stickers/standard-stickers.blade.php',
    'resources/views/pages/stickers/custom-shaped-stickers.blade.php',
];

$listB = [
    'resources/views/pages/signs/index.blade.php',
    'resources/views/pages/signs/banners.blade.php',
    'resources/views/pages/signs/business-signs.blade.php',
    'resources/views/pages/signs/coronavirus-signs.blade.php',
    'resources/views/pages/signs/door-signs.blade.php',
    'resources/views/pages/signs/floor-signs.blade.php',
    'resources/views/pages/signs/posters.blade.php',
    'resources/views/pages/signs/sidewalk-signs.blade.php',
    'resources/views/pages/signs/sidewalk-signs-a-frame-signs.blade.php',
    'resources/views/pages/signs/table-cloths.blade.php',
    'resources/views/pages/signs/table-runners.blade.php',
    'resources/views/pages/signs/wall-signs.blade.php',
    'resources/views/pages/signs/window-signs.blade.php',
    'resources/views/pages/signs/yard-signs.blade.php',
    'resources/views/pages/vehicle-graphics/index.blade.php',
    'resources/views/pages/vehicle-graphics/automobile-graphics.blade.php',
    'resources/views/pages/vehicle-graphics/dot-decals.blade.php',
    'resources/views/pages/vehicle-graphics/vehicle-magnets.blade.php',
    'resources/views/pages/promotional-items.blade.php',
    'resources/views/pages/promotional-items/can-koozies.blade.php',
    'resources/views/pages/promotional-items/drink-coasters.blade.php',
    'resources/views/pages/promotional-items/mouse-pads.blade.php',
    'resources/views/pages/promotional-items/mugs.blade.php',
    'resources/views/pages/promotional-items/tote-bags.blade.php',
    'resources/views/pages/promotional-items/towels.blade.php',
    'resources/views/pages/company/index.blade.php',
    'resources/views/pages/company/articles.blade.php',
    'resources/views/pages/company/resources.blade.php',
    'resources/views/pages/top5pct-merchandise.blade.php',
];

$homeFile = 'resources/views/pages/home.blade.php';

// ── Helpers ──────────────────────────────────────────────────────────────────

function findLine(array $lines, string $needle, int $from = 0, int $limit = PHP_INT_MAX): int
{
    $to = min(count($lines), $from + $limit);
    for ($i = $from; $i < $to; $i++) {
        if (str_contains($lines[$i], $needle)) {
            return $i;
        }
    }
    return -1;
}

function leadingWhitespace(string $line): string
{
    preg_match('/^(\s*)/', $line, $m);
    return $m[1];
}

// ── List A ────────────────────────────────────────────────────────────────────

function processListA(string $file): void
{
    if (!file_exists($file)) {
        echo "MISSING: $file\n";
        return;
    }

    $raw   = file_get_contents($file);
    $lines = explode("\n", $raw);

    // 1. Find artwork-dropzone line
    $dropIdx = findLine($lines, 'banner-cta-artwork-dropzone');
    if ($dropIdx === -1) {
        echo "NO DROPZONE: $file\n";
        return;
    }

    // 2. Remove it (capture for re-insertion)
    array_splice($lines, $dropIdx, 1);

    // 3. Find the first cta-quadruple-button-banner within 10 lines of where
    //    the dropzone was (now shifted up by 1).
    $firstCtaIdx = findLine($lines, 'cta-quadruple-button-banner', $dropIdx, 10);
    if ($firstCtaIdx === -1) {
        echo "NO FIRST CTA-QUAD: $file\n";
        return;
    }
    array_splice($lines, $firstCtaIdx, 1);

    // 4. Find the REMAINING cta-quadruple-button-banner anywhere in the file.
    $remainCtaIdx = findLine($lines, 'cta-quadruple-button-banner');
    if ($remainCtaIdx === -1) {
        echo "NO REMAINING CTA-QUAD: $file\n";
        return;
    }

    // 5. Build the insertion line using the indentation of the remaining cta-quad.
    $indent      = leadingWhitespace($lines[$remainCtaIdx]);
    $insertLine  = $indent . '<x-ui.banner-cta-artwork-dropzone />';

    // 6. Insert immediately before the remaining cta-quad.
    array_splice($lines, $remainCtaIdx, 0, [$insertLine]);

    file_put_contents($file, implode("\n", $lines));
    echo "  A: $file\n";
}

// ── List B ────────────────────────────────────────────────────────────────────

function processListB(string $file): void
{
    if (!file_exists($file)) {
        echo "MISSING: $file\n";
        return;
    }

    $raw   = file_get_contents($file);
    $lines = explode("\n", $raw);

    // 1. Find and remove artwork-dropzone
    $dropIdx = findLine($lines, 'banner-cta-artwork-dropzone');
    if ($dropIdx === -1) {
        echo "NO DROPZONE: $file\n";
        return;
    }
    array_splice($lines, $dropIdx, 1);

    // 2. Find and remove the first cta-quadruple-button-banner within 10 lines.
    $ctaIdx = findLine($lines, 'cta-quadruple-button-banner', $dropIdx, 10);
    if ($ctaIdx === -1) {
        echo "NO CTA-QUAD AFTER DROPZONE: $file\n";
        return;
    }
    array_splice($lines, $ctaIdx, 1);

    file_put_contents($file, implode("\n", $lines));
    echo "  B: $file\n";
}

// ── Home (special) ────────────────────────────────────────────────────────────

function processHome(string $file): void
{
    if (!file_exists($file)) {
        echo "MISSING: $file\n";
        return;
    }

    $raw   = file_get_contents($file);
    $lines = explode("\n", $raw);

    $dropIdx = findLine($lines, 'banner-cta-artwork-dropzone');
    if ($dropIdx === -1) {
        echo "NO DROPZONE: $file\n";
        return;
    }
    array_splice($lines, $dropIdx, 1);

    file_put_contents($file, implode("\n", $lines));
    echo "HOME: $file\n";
}

// ── Run ───────────────────────────────────────────────────────────────────────

$errors = 0;

echo "\n=== List A: reposition artwork dropzone ===\n";
foreach ($listA as $file) {
    processListA($file);
}

echo "\n=== List B: remove both sections ===\n";
foreach ($listB as $file) {
    processListB($file);
}

echo "\n=== Home: remove dropzone only ===\n";
processHome($homeFile);

echo "\nDone. Review any lines printed as WARNING/MISSING/NO before committing.\n";
