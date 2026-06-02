<?php

$sourceBase = __DIR__ . '/../public/new-images';
$destBase   = __DIR__ . '/../public/images';

$dirMap = [
    'Business Signs/Backlit Signs'                  => 'backlit-signs',
    'Business Signs/Banners'                        => 'banners',
    'Business Signs/Door Signs'                     => 'window-wall-floor-decals',
    'Business Signs/Outdoor Signs'                  => 'outdoor-signs',
    'Business Signs/Posters'                        => 'posters',
    'Business Signs/Wall Signs'                     => 'window-wall-floor-decals',
    'Business Signs/Window Signs'                   => 'window-wall-floor-decals',
    'Custom Shirts/Group Shirts/Corporate Wear'     => 'corporate-wear',
    'Custom Shirts/Group Shirts/Spirit Wear'        => 'spirit-wear',
    'Custom Shirts/Printing Options/Digital Vinyl'  => 'custom-shirts',
    'Custom Shirts/Printing Options/DTF'            => 'dtf-transfers',
    'Custom Shirts/Printing Options/Embroidery'     => 'custom-shirts',
    'Custom Shirts/Printing Options/Rhinestones'    => 'custom-shirts',
    'Custom Shirts/Printing Options/Sublimation'    => 'custom-shirts',
    'Custom Shirts/Specialty Material/Brick'        => 'custom-shirts',
    'Custom Shirts/Specialty Material/Chameleon'    => 'custom-shirts',
    'Custom Shirts/Specialty Material/Flock'        => 'custom-shirts',
    'Custom Shirts/Specialty Material/Foil'         => 'custom-shirts',
    'Custom Shirts/Specialty Material/Glitter'      => 'custom-shirts',
    'Custom Shirts/Specialty Material/Glow'         => 'custom-shirts',
    'Custom Shirts/Specialty Material/Holographic'  => 'custom-shirts',
    'Custom Shirts/Specialty Material/Puff'         => 'custom-shirts',
    'Custom Shirts/Specialty Material/Reflective'   => 'custom-shirts',
    'Custom Shirts/Specialty Material/Rhinestones'  => 'custom-shirts',
    'Ground Signs/A-Frames'                         => 'sidewalk-signs',
    'Koozies'                                       => 'promo-items/koozies',
    'Mugs'                                          => 'promo-items/mugs',
    'Stickers/Custom Shaped Stickers'               => 'stickers-decals',
    'Stickers/Regular Stickers'                     => 'stickers-decals',
    'Table Signs/Table Cloths'                      => 'table-runners',
    'Table Signs/Table Runner'                      => 'table-runners',
    'Vehicle Decals/Automobile Graphics'            => 'automobile-graphics',
    'Vehicle Decals/DOT Decals'                     => 'dot-decals',
    'Vehicle Decals/Vehicle Magnets'                => 'vehicle-magnets',
];

$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

$copied     = 0;
$skipped    = 0;
$collisions = 0;
$warnings   = 0;

// Step 1 — Create new directories
foreach (['backlit-signs', 'outdoor-signs'] as $newDir) {
    $path = "$destBase/$newDir";
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
        echo "[MKDIR]   $path\n";
    }
}

echo "\n";

// Step 2 — Process each source → destination mapping
foreach ($dirMap as $srcRelative => $destDir) {
    $srcPath  = "$sourceBase/$srcRelative";
    $destPath = "$destBase/$destDir";

    if (!is_dir($srcPath)) {
        echo "[WARN]    Source not found: $srcPath\n";
        $warnings++;
        continue;
    }

    $files = array_diff(scandir($srcPath), ['.', '..', '.DS_Store']);

    foreach ($files as $file) {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowedExtensions)) {
            echo "[SKIP]    $srcRelative/$file  ($ext — not an image)\n";
            $skipped++;
            continue;
        }

        // Normalize: lowercase + spaces to hyphens + top5pct- prefix
        $normalized = strtolower($file);
        $normalized = str_replace(' ', '-', $normalized);
        $destName   = 'top5pct-' . $normalized;
        $destFile   = "$destPath/$destName";

        // Collision — rename existing file to -old before overwriting
        if (file_exists($destFile)) {
            $stem    = pathinfo($destFile, PATHINFO_FILENAME);
            $extPart = pathinfo($destFile, PATHINFO_EXTENSION);
            $oldFile = "$destPath/{$stem}-old.{$extPart}";
            rename($destFile, $oldFile);
            echo "[RENAME]  $destDir/$destName  ->  {$stem}-old.{$extPart}\n";
            $collisions++;
        }

        copy("$srcPath/$file", $destFile);
        echo "[COPY]    $srcRelative/$file  ->  $destDir/$destName\n";
        $copied++;
    }
}

echo "\n=== Round 2 Migration Complete ===\n";
echo "  Copied:             $copied\n";
echo "  Collisions renamed: $collisions\n";
echo "  Skipped (non-img):  $skipped\n";
if ($warnings) {
    echo "  Warnings:           $warnings\n";
}
