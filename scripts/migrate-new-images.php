<?php

/**
 * New Images Migration Script
 * Copies files from public/new-images/ into public/images/ with top5pct- prefix.
 * Renames any conflicting existing file to <basename>-old.jpg first.
 * Spaces in source filenames are converted to hyphens in destination.
 */

$base = dirname(__DIR__);
$src  = $base . '/public/new-images';
$dst  = $base . '/public/images';

$mappings = [
    'custom-apparel/digital-vinyl'                    => 'custom-shirts',
    'custom-apparel/group-shirts/corporate-wear-shirts' => 'corporate-wear',
    'custom-apparel/group-shirts/reunion-shirts'      => 'reunion-shirts',
    'custom-apparel/group-shirts/spirit-wear-shirts'  => 'spirit-wear',
    'custom-apparel/printing-options/digital-vinyl'   => 'custom-shirts',
    'custom-apparel/printing-options/dtf-printing'    => 'dtf-transfers',
    'custom-apparel/printing-options/embroidery'      => 'custom-shirts',
    'custom-apparel/printing-options/rhinestones'     => 'custom-shirts',
    'custom-apparel/printing-options/screenprint'     => 'custom-shirts',
    'custom-apparel/printing-options/sublimation'     => 'custom-shirts',
    'custom-apparel/specialty-material/brick'         => 'custom-shirts',
    'custom-apparel/specialty-material/glitter'       => 'custom-shirts',
    'custom-apparel/specialty-material/reflective'    => 'custom-shirts',
    'promo-items/koozies'                             => 'promo-items/koozies',
    'promo-items/mugs'                                => 'promo-items/mugs',
    'signs/business-signs/banners'                    => 'banners',
    'signs/business-signs/door-signs'                 => 'window-wall-floor-decals',
    'signs/business-signs/wall-signs'                 => 'window-wall-floor-decals',
    'signs/business-signs/window-signs'               => 'window-wall-floor-decals',
    'signs/ground-signs/a-frame-signs'                => 'sidewalk-signs',
    'signs/ground-signs/yard-signs'                   => 'yard-signs',
    'signs/table-signs/table-cloths'                  => 'table-runners',
    'signs/table-signs/table-runners'                 => 'table-runners',
    'stickers/custom-shaped'                          => 'stickers-decals',
    'vehicle-decals/automobile-graphics'              => 'automobile-graphics',
    'vehicle-decals/dot-decals'                       => 'dot-decals',
    'vehicle-decals/vehicle-magnets'                  => 'vehicle-magnets',
];

$typoFixes = [
    'safety-work-gear-joliert.jpg' => 'safety-work-gear-joliet.jpg',
];

$duplicateTracker = [];
$copied   = 0;
$renamed  = 0;
$skipped  = 0;
$errors   = 0;

function buildDestName(string $srcFilename, array $typoFixes): string
{
    $name = str_replace(' ', '-', $srcFilename);
    $name = $typoFixes[$name] ?? $name;
    if (!str_starts_with($name, 'top5pct-')) {
        $name = 'top5pct-' . $name;
    }
    return $name;
}

foreach ($mappings as $srcRel => $dstRel) {
    $srcDir = $src . '/' . $srcRel;
    $dstDir = $dst . '/' . $dstRel;

    if (!is_dir($srcDir)) {
        echo "[SKIP] Source dir not found: {$srcRel}\n";
        continue;
    }

    if (!is_dir($dstDir)) {
        if (mkdir($dstDir, 0755, true)) {
            echo "[MKDIR] Created: {$dstRel}\n";
        } else {
            echo "[ERROR] Could not create: {$dstRel}\n";
            $errors++;
            continue;
        }
    }

    $files = glob($srcDir . '/*.jpg');
    if ($files === false) {
        continue;
    }

    foreach ($files as $srcFile) {
        $srcFilename = basename($srcFile);
        $destName    = buildDestName($srcFilename, $typoFixes);
        $destPath    = $dstDir . '/' . $destName;

        // Handle duplicate: custom-vinyl-hoodies.jpg appears in two source dirs.
        $trackKey = $dstRel . '/' . $destName;
        if (isset($duplicateTracker[$trackKey])) {
            $md5New = md5_file($srcFile);
            $md5Old = md5_file($duplicateTracker[$trackKey]);
            if ($md5New === $md5Old) {
                echo "[SKIP-DUP] Identical duplicate skipped: {$srcRel}/{$srcFilename}\n";
                $skipped++;
                continue;
            } else {
                // Different content — use -2 suffix
                $base2     = pathinfo($destName, PATHINFO_FILENAME);
                $destName  = $base2 . '-2.jpg';
                $destPath  = $dstDir . '/' . $destName;
                echo "[DUP-DIFF] Different content, using suffix: {$destName}\n";
            }
        }
        $duplicateTracker[$trackKey] = $srcFile;

        // Rename existing file to -old.jpg if it would be overwritten
        if (file_exists($destPath)) {
            $baseName  = pathinfo($destPath, PATHINFO_FILENAME);
            $oldPath   = $dstDir . '/' . $baseName . '-old.jpg';
            if (rename($destPath, $oldPath)) {
                echo "[RENAME] {$destName} → {$baseName}-old.jpg\n";
                $renamed++;
            } else {
                echo "[ERROR] Could not rename: {$destName}\n";
                $errors++;
                continue;
            }
        }

        if (copy($srcFile, $destPath)) {
            echo "[COPY] {$srcRel}/{$srcFilename} → {$dstRel}/{$destName}\n";
            $copied++;
        } else {
            echo "[ERROR] Could not copy: {$srcFilename} → {$destName}\n";
            $errors++;
        }
    }
}

echo "\n";
echo "=== Migration complete ===\n";
echo "Copied:  {$copied}\n";
echo "Renamed: {$renamed} files to -old.jpg\n";
echo "Skipped: {$skipped} (identical duplicates)\n";
echo "Errors:  {$errors}\n";
