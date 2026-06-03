<?php

/**
 * Convert plain-text phone numbers to tel: links in resources/views/pages/
 *
 * Handles two formats:
 *   (815) 349 8600  (space)
 *   (815) 349-8600  (hyphen)
 *
 * Both become:
 *   <a href="tel:+18153498600" class="link-notification">(815) 349-8600</a>
 *
 * Already-linked occurrences (inside existing <a href="tel:..."> tags) are left alone.
 * Archived pages are skipped.
 */

$dir = 'resources/views/pages';
$link = '<a href="tel:+18153498600" class="link-notification">(815) 349-8600</a>';

// Match EITHER an existing tel: anchor (keep it) OR a bare phone number (replace it).
// This prevents double-linking pages that already have some tel: links.
$pattern = '/(<a\s[^>]*href="tel:[^"]*"[^>]*>.*?<\/a>|\(815\) 349[ \-]8600)/s';

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
);

$totalFiles   = 0;
$totalReplaced = 0;

foreach ($files as $file) {
    if ($file->getExtension() !== 'php') {
        continue;
    }

    $path = $file->getPathname();

    if (str_contains($path, '_archived')) {
        continue;
    }

    $original = file_get_contents($path);
    $count    = 0;

    $updated = preg_replace_callback($pattern, function (array $m) use ($link, &$count): string {
        // If the match starts with <a, it is already a tel: anchor — leave it alone.
        if (str_starts_with($m[0], '<a')) {
            return $m[0];
        }

        $count++;
        return $link;
    }, $original);

    if ($updated !== $original && $count > 0) {
        file_put_contents($path, $updated);
        $rel = str_replace($dir . '/', '', $path);
        echo sprintf("  %-70s %d replacement%s\n", $rel, $count, $count === 1 ? '' : 's');
        $totalFiles++;
        $totalReplaced += $count;
    }
}

echo "\n";
echo "Files updated : {$totalFiles}\n";
echo "Replacements  : {$totalReplaced}\n";
