<?php

declare(strict_types=1);

namespace App\Actions;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

final class ScanPageComponents
{
    private array $sharedComponents = [];

    public function execute(): array
    {
        $pagesPath = resource_path('views/pages');
        $pages = $this->scanPages($pagesPath);
        $this->calculateSharedComponents($pages);

        return $this->groupByTopLevel($pages);
    }

    private function scanPages(string $basePath): array
    {
        $pages = [];
        $files = File::allFiles($basePath);

        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            $relativePath = Str::after($file->getPathname(), $basePath . '/');
            $bladeName = str_replace(['.blade.php', '/'], ['', '.'], $relativePath);
            $urlPath = '/' . str_replace(['.blade.php', '.'], ['', '/'], $relativePath);

            if ($urlPath === '/home') {
                $urlPath = '/';
            }

            if (Str::startsWith($urlPath, '/demo')) {
                continue;
            }

            $content = File::get($file->getPathname());
            $components = $this->extractComponents($content);

            $pages[] = [
                'name'                  => $this->formatName($bladeName),
                'blade'                 => $bladeName,
                'url'                   => $urlPath,
                'file'                  => $relativePath,
                'sections'              => $components['sections'],
                'ui'                    => $components['ui'],
                'layout'                => $components['layout'],
                'livewire'              => $components['livewire'],
                'all_components'        => $components['all'],
                'component_livewire_map' => $components['component_livewire_map'],
                'is_dynamic'            => $this->detectDynamicTemplate($content),
                'exists'                => true,
            ];
        }

        return $pages;
    }

    private function extractComponents(string $content): array
    {
        $sections = [];
        $ui = [];
        $layout = [];
        $livewire = [];
        $all = [];
        $seen = [];
        $componentLivewireMap = [];
        $allMatches = [];

        // Capture x-component tags including their full attribute string.
        preg_match_all(
            '/<x-([\w.-]+)((?:[^>\'"]|\'[^\']*\'|"[^"]*")*?)(?:\s*\/>|\s*>)/s',
            $content,
            $xMatches,
            PREG_OFFSET_CAPTURE
        );

        if (!empty($xMatches[1])) {
            foreach ($xMatches[1] as $i => $match) {
                $allMatches[] = [
                    'type'   => 'blade',
                    'name'   => $match[0],
                    'attrs'  => $xMatches[2][$i][0] ?? '',
                    'offset' => $match[1],
                ];
            }
        }

        preg_match_all("/@livewire\(\s*['\"]([^'\"]+)['\"]/", $content, $lwMatches, PREG_OFFSET_CAPTURE);
        if (!empty($lwMatches[1])) {
            foreach ($lwMatches[1] as $match) {
                $allMatches[] = [
                    'type'   => 'livewire',
                    'name'   => $match[0],
                    'attrs'  => '',
                    'offset' => $match[1],
                ];
            }
        }

        usort($allMatches, fn(array $a, array $b) => $a['offset'] <=> $b['offset']);

        foreach ($allMatches as $match) {
            $component = $match['name'];
            $key = $match['type'] === 'livewire' ? 'livewire:' . $component : $component;

            if (isset($seen[$key])) {
                continue;
            }
            $seen[$key] = true;

            if ($match['type'] === 'livewire') {
                $livewire[] = $component;
                $all[] = ['key' => $key, 'overrides' => []];
            } else {
                $defaults  = $this->readComponentDefaults($component);
                $passed    = $this->extractComponentAttributes($match['attrs']);
                $overrides = $this->detectOverrides($passed, $defaults);

                $all[] = ['key' => $key, 'overrides' => $overrides];

                if (Str::startsWith($component, 'sections.')) {
                    $sections[] = $component;
                    $nested = $this->scanComponentForLivewire($component);
                    if (!empty($nested)) {
                        $componentLivewireMap[$component] = $nested;
                    }
                } elseif (Str::startsWith($component, 'ui.')) {
                    $ui[] = $component;
                } elseif (Str::startsWith($component, 'layout.')) {
                    $layout[] = $component;
                }
            }
        }

        return [
            'sections'             => $sections,
            'ui'                   => $ui,
            'layout'               => $layout,
            'livewire'             => $livewire,
            'all'                  => $all,
            'component_livewire_map' => $componentLivewireMap,
        ];
    }

    /**
     * Open the component Blade file and parse its @props([...]) directive.
     * Returns ['propName' => 'rawDefault'] — '__required__' when no default.
     */
    private function readComponentDefaults(string $componentName): array
    {
        $parts    = explode('.', $componentName);
        $fileName = array_pop($parts);
        $subPath  = implode('/', $parts);
        $filePath = resource_path("views/components/{$subPath}/{$fileName}.blade.php");

        if (!File::exists($filePath)) {
            return [];
        }

        $content = File::get($filePath);

        // Extract everything inside @props([...])
        if (!preg_match('/@props\s*\(\s*\[(.+?)\]\s*\)/s', $content, $propsMatch)) {
            return [];
        }

        $propsBlock = $propsMatch[1];
        $defaults   = [];

        // Match 'name' => value pairs; value may be a quoted string, null, [], or an expression.
        // The single/double-quoted string alternatives use [^'\\]|\\. to correctly skip
        // backslash-escaped characters (e.g. \'s inside a default string value).
        preg_match_all(
            '/[\'"]([a-zA-Z_]\w*)[\'"](?:\s*=>\s*((?:[^,\'"\\[\\]]|\'(?:[^\'\\\\]|\\\\.)*\'|"(?:[^"\\\\]|\\\\.)*"|\[[^\]]*\])+))?/s',
            $propsBlock,
            $pm,
            PREG_SET_ORDER
        );

        foreach ($pm as $row) {
            $propName = $row[1];
            $rawDefault = isset($row[2]) ? trim($row[2]) : '__required__';
            $defaults[$propName] = $rawDefault;
        }

        return $defaults;
    }

    /**
     * Parse a raw HTML attribute string into ['propName' => 'value'].
     * Preserves the ':' prefix on dynamic bindings.
     * Strips non-prop attributes (class, id, wire:*, x-*, @*).
     */
    private function extractComponentAttributes(string $rawAttrString): array
    {
        if (trim($rawAttrString) === '') {
            return [];
        }

        $attrs = [];

        preg_match_all(
            '/(:?[a-zA-Z_][a-zA-Z0-9_.-]*)(?:\s*=\s*(?:"([^"]*)"|\'([^\']*)\'|([^\s\/>]+)))?/s',
            $rawAttrString,
            $matches,
            PREG_SET_ORDER
        );

        foreach ($matches as $m) {
            $propName = $m[1] ?? '';
            if ($propName === '') {
                continue;
            }

            // Skip structural / Alpine / Livewire attributes — they are not component props.
            if (in_array($propName, ['class', 'id', 'style'], true)) {
                continue;
            }
            if (Str::startsWith($propName, ['wire:', 'x-', '@', 'on'])) {
                continue;
            }

            if (!empty($m[2])) {
                $attrs[$propName] = $m[2];
            } elseif (!empty($m[3])) {
                $attrs[$propName] = $m[3];
            } elseif (!empty($m[4])) {
                $attrs[$propName] = $m[4];
            } else {
                $attrs[$propName] = 'true';
            }
        }

        return $attrs;
    }

    /**
     * Return only attrs whose passed value differs from the component default.
     * Skips props with array/closure defaults (too complex to diff), but still
     * records them when the prop was explicitly passed.
     *
     * @return array<string, array{value: string, default: string|null}>
     */
    private function detectOverrides(array $passed, array $defaults): array
    {
        if (empty($defaults) || empty($passed)) {
            return [];
        }

        $overrides = [];

        foreach ($passed as $prop => $value) {
            $cleanProp = ltrim($prop, ':');

            if (!array_key_exists($cleanProp, $defaults)) {
                continue;
            }

            $rawDefault = $defaults[$cleanProp];

            // Complex defaults — include in override list but skip value diff.
            $isComplex = str_contains($rawDefault, '[')
                || str_contains($rawDefault, 'fn(')
                || str_contains($rawDefault, 'function(');

            if ($isComplex) {
                $overrides[$prop] = ['value' => $value, 'default' => null];
                continue;
            }

            if ($rawDefault === '__required__') {
                $overrides[$prop] = ['value' => $value, 'default' => null];
                continue;
            }

            $normalizedDefault = trim($rawDefault, " \t\n\r\0\x0B'\"");
            $normalizedValue   = trim($value, " \t\n\r\0\x0B'\"");

            if ($normalizedDefault !== $normalizedValue) {
                $overrides[$prop] = ['value' => $value, 'default' => $normalizedDefault];
            }
        }

        return $overrides;
    }

    /**
     * Detect template pages — blade files that render for multiple URLs by
     * consuming route-injected variables like $slug, $parent, $child, etc.
     */
    private function detectDynamicTemplate(string $content): bool
    {
        return (bool) preg_match(
            '/\$(?:slug|parent|child|orderId|productSlug|collectionSlug|productName|collectionName)\b/',
            $content
        );
    }

    private function scanComponentForLivewire(string $componentName): array
    {
        $parts    = explode('.', $componentName);
        $fileName = array_pop($parts);
        $subPath  = implode('/', $parts);
        $filePath = resource_path("views/components/{$subPath}/{$fileName}.blade.php");

        if (!File::exists($filePath)) {
            return [];
        }

        $content          = File::get($filePath);
        $livewireComponents = [];

        preg_match_all("/@livewire\(\s*['\"]([^'\"]+)['\"]/", $content, $matches);
        if (!empty($matches[1])) {
            $livewireComponents = array_unique($matches[1]);
        }

        return array_values($livewireComponents);
    }

    private function calculateSharedComponents(array $pages): void
    {
        $componentCounts = [];

        foreach ($pages as $page) {
            foreach ($page['all_components'] as $compStruct) {
                $key = $compStruct['key'];
                $componentCounts[$key] = ($componentCounts[$key] ?? 0) + 1;
            }
        }

        foreach ($componentCounts as $key => $count) {
            if ($count > 1) {
                $this->sharedComponents[] = $key;
            }
        }
    }

    private function groupByTopLevel(array $pages): array
    {
        $groups = [];

        foreach ($pages as $page) {
            $parts    = explode('/', trim($page['url'], '/'));
            $topLevel = $parts[0] ?: 'home';
            $groupName = $this->formatName($topLevel);

            if (!isset($groups[$groupName])) {
                $groups[$groupName] = [
                    'name'  => $groupName,
                    'slug'  => $topLevel,
                    'pages' => [],
                ];
            }

            $sharedCount = 0;
            $uniqueCount = 0;

            foreach ($page['all_components'] as $compStruct) {
                if (in_array($compStruct['key'], $this->sharedComponents, true)) {
                    $sharedCount++;
                } else {
                    $uniqueCount++;
                }
            }

            $page['shared_count']      = $sharedCount;
            $page['unique_count']      = $uniqueCount;
            $page['total_count']       = count($page['all_components']);
            $page['shared_components'] = $this->sharedComponents;
            $page['is_landing']        = ($page['url'] === '/' . $topLevel)
                || ($topLevel === 'home' && $page['url'] === '/');

            $groups[$groupName]['pages'][] = $page;
        }

        ksort($groups);

        foreach ($groups as &$group) {
            usort(
                $group['pages'],
                fn(array $a, array $b) => ($b['is_landing'] ? 1 : 0) <=> ($a['is_landing'] ? 1 : 0)
            );
        }
        unset($group);

        return $groups;
    }

    private function formatName(string $slug): string
    {
        return Str::of($slug)
            ->replace(['.', '-', '_'], ' ')
            ->title()
            ->toString();
    }
}
