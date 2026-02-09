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

            $content = File::get($file->getPathname());
            $components = $this->extractComponents($content);

            $pages[] = [
                'name' => $this->formatName($bladeName),
                'blade' => $bladeName,
                'url' => $urlPath,
                'file' => $relativePath,
                'sections' => $components['sections'],
                'ui' => $components['ui'],
                'layout' => $components['layout'],
                'all_components' => $components['all'],
                'exists' => true,
            ];
        }

        return $pages;
    }

    private function extractComponents(string $content): array
    {
        $sections = [];
        $ui = [];
        $layout = [];
        $all = [];

        preg_match_all('/<x-([\w.-]+)/', $content, $matches);

        if (!empty($matches[1])) {
            foreach (array_unique($matches[1]) as $component) {
                $all[] = $component;

                if (Str::startsWith($component, 'sections.')) {
                    $sections[] = $component;
                } elseif (Str::startsWith($component, 'ui.')) {
                    $ui[] = $component;
                } elseif (Str::startsWith($component, 'layout.')) {
                    $layout[] = $component;
                }
            }
        }

        sort($sections);
        sort($ui);
        sort($layout);
        sort($all);

        return compact('sections', 'ui', 'layout', 'all');
    }

    private function calculateSharedComponents(array $pages): void
    {
        $componentCounts = [];

        foreach ($pages as $page) {
            foreach ($page['all_components'] as $component) {
                if (!isset($componentCounts[$component])) {
                    $componentCounts[$component] = 0;
                }
                $componentCounts[$component]++;
            }
        }

        foreach ($componentCounts as $component => $count) {
            if ($count > 1) {
                $this->sharedComponents[] = $component;
            }
        }
    }

    private function groupByTopLevel(array $pages): array
    {
        $groups = [];

        foreach ($pages as $page) {
            $parts = explode('/', trim($page['url'], '/'));
            $topLevel = $parts[0] ?: 'home';
            $groupName = $this->formatName($topLevel);

            if (!isset($groups[$groupName])) {
                $groups[$groupName] = [
                    'name' => $groupName,
                    'slug' => $topLevel,
                    'pages' => [],
                ];
            }

            $sharedCount = 0;
            $uniqueCount = 0;

            foreach ($page['all_components'] as $component) {
                if (in_array($component, $this->sharedComponents)) {
                    $sharedCount++;
                } else {
                    $uniqueCount++;
                }
            }

            $page['shared_count'] = $sharedCount;
            $page['unique_count'] = $uniqueCount;
            $page['total_count'] = count($page['all_components']);
            $page['shared_components'] = $this->sharedComponents;

            $groups[$groupName]['pages'][] = $page;
        }

        ksort($groups);

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
