<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Management - Top 5 Percent</title>
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-linen text-charcoal">

    <header class="sticky top-0 z-50">
        <x-layout.top-notification-bar message="Page Management Dashboard" />
        <x-ui.banner-thin-champagne />
        <x-ui.banner-thin-navy />
        <x-layout.navigation-bar currentPage="page-management" />
        <x-ui.banner-thin-champagne />
        <x-ui.banner-thin-navy />
    </header>

    <main class="py-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-charcoal mb-2">Page Management</h1>
                <p class="text-charcoal-light">
                    Overview of all pages, grouped by top-level menu item. Expand each card to see components in page order.
                </p>
            </div>

            @php
                $colorPalette = [
                    ['bg' => 'bg-blue-50', 'text' => 'text-blue-700', 'border' => 'border-blue-200', 'dot' => 'bg-blue-400'],
                    ['bg' => 'bg-amber-50', 'text' => 'text-amber-700', 'border' => 'border-amber-200', 'dot' => 'bg-amber-400'],
                    ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200', 'dot' => 'bg-emerald-400'],
                    ['bg' => 'bg-purple-50', 'text' => 'text-purple-700', 'border' => 'border-purple-200', 'dot' => 'bg-purple-400'],
                    ['bg' => 'bg-rose-50', 'text' => 'text-rose-700', 'border' => 'border-rose-200', 'dot' => 'bg-rose-400'],
                    ['bg' => 'bg-cyan-50', 'text' => 'text-cyan-700', 'border' => 'border-cyan-200', 'dot' => 'bg-cyan-400'],
                    ['bg' => 'bg-orange-50', 'text' => 'text-orange-700', 'border' => 'border-orange-200', 'dot' => 'bg-orange-400'],
                    ['bg' => 'bg-indigo-50', 'text' => 'text-indigo-700', 'border' => 'border-indigo-200', 'dot' => 'bg-indigo-400'],
                    ['bg' => 'bg-pink-50', 'text' => 'text-pink-700', 'border' => 'border-pink-200', 'dot' => 'bg-pink-400'],
                    ['bg' => 'bg-teal-50', 'text' => 'text-teal-700', 'border' => 'border-teal-200', 'dot' => 'bg-teal-400'],
                    ['bg' => 'bg-lime-50', 'text' => 'text-lime-700', 'border' => 'border-lime-200', 'dot' => 'bg-lime-400'],
                    ['bg' => 'bg-fuchsia-50', 'text' => 'text-fuchsia-700', 'border' => 'border-fuchsia-200', 'dot' => 'bg-fuchsia-400'],
                    ['bg' => 'bg-sky-50', 'text' => 'text-sky-700', 'border' => 'border-sky-200', 'dot' => 'bg-sky-400'],
                    ['bg' => 'bg-violet-50', 'text' => 'text-violet-700', 'border' => 'border-violet-200', 'dot' => 'bg-violet-400'],
                    ['bg' => 'bg-red-50', 'text' => 'text-red-700', 'border' => 'border-red-200', 'dot' => 'bg-red-400'],
                    ['bg' => 'bg-yellow-50', 'text' => 'text-yellow-700', 'border' => 'border-yellow-200', 'dot' => 'bg-yellow-400'],
                ];
                $paletteCount = count($colorPalette);

                $allUniqueComponents = [];
                foreach ($groups as $group) {
                    foreach ($group['pages'] as $page) {
                        foreach ($page['all_components'] as $comp) {
                            if (!in_array($comp, $allUniqueComponents)) {
                                $allUniqueComponents[] = $comp;
                            }
                        }
                    }
                }
                sort($allUniqueComponents);

                $componentColorMap = [];
                foreach ($allUniqueComponents as $index => $comp) {
                    $componentColorMap[$comp] = $colorPalette[$index % $paletteCount];
                }

                $totalPages = 0;
                $totalComponents = 0;
                foreach ($groups as $group) {
                    $totalPages += count($group['pages']);
                    foreach ($group['pages'] as $page) {
                        $totalComponents += $page['total_count'];
                    }
                }

                $componentUsageMap = [];
                foreach ($groups as $group) {
                    foreach ($group['pages'] as $page) {
                        foreach ($page['all_components'] as $comp) {
                            if (!isset($componentUsageMap[$comp])) {
                                $componentUsageMap[$comp] = [];
                            }
                            $componentUsageMap[$comp][] = [
                                'name' => $page['name'],
                                'url'  => $page['url'],
                            ];
                        }
                    }
                }
                uasort($componentUsageMap, fn($a, $b) => count($b) - count($a));
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Total Groups</p>
                    <p class="text-2xl font-bold text-charcoal">{{ count($groups) }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Total Pages</p>
                    <p class="text-2xl font-bold text-sunburst">{{ $totalPages }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Component Usages</p>
                    <p class="text-2xl font-bold text-azure">{{ $totalComponents }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Unique Components</p>
                    <p class="text-2xl font-bold text-charcoal">{{ count($allUniqueComponents) }}</p>
                </div>
            </div>

            @foreach($groups as $groupName => $group)
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-charcoal mb-4 flex items-center gap-2">
                        <span class="w-3 h-3 bg-sunburst-full"></span>
                        {{ $groupName }}
                        <span class="text-sm font-normal text-charcoal-light">({{ count($group['pages']) }} {{ Str::plural('page', count($group['pages'])) }})</span>
                    </h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($group['pages'] as $page)
                            <div
                                x-data="{ expanded: false }"
                                class="bg-white rounded-lg shadow-sm border border-linen-dark/20 overflow-hidden"
                            >
                                <button
                                    @click="expanded = !expanded"
                                    class="w-full text-left p-5 hover:bg-linen-light/50 transition-colors"
                                >
                                    <div class="flex items-start justify-between gap-2">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <svg
                                                    class="w-4 h-4 text-charcoal-light transition-transform shrink-0"
                                                    :class="{ 'rotate-90': expanded }"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                >
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                                <h3 class="font-bold text-charcoal truncate">{{ $page['name'] }}</h3>
                                            </div>
                                            <p class="text-xs text-charcoal-light ml-6 break-all">{{ $page['url'] }}</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2 mt-3 ml-6">
                                        @if($page['is_landing'])
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-sunburst text-charcoal">
                                                Landing Page
                                            </span>
                                        @endif
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-sunburst/20 text-charcoal">
                                            {{ $page['shared_count'] }} shared
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-azure/10 text-azure-dark">
                                            {{ $page['unique_count'] }} unique
                                        </span>
                                    </div>
                                </button>

                                <div x-show="expanded" x-cloak x-transition class="border-t border-linen-dark/20 p-5">
                                    @if(count($page['all_components']) > 0)
                                        <h4 class="text-xs font-semibold text-charcoal-light mb-3">Components (in page order)</h4>
                                        <div class="space-y-1.5">
                                            @foreach($page['all_components'] as $index => $component)
                                                @php
                                                    $isLivewire = Str::startsWith($component, 'livewire:');
                                                    $displayComponent = $isLivewire ? Str::after($component, 'livewire:') : $component;
                                                    $color = $componentColorMap[$component];
                                                    $isShared = in_array($component, $page['shared_components']);

                                                    if ($isLivewire) {
                                                        $label = Str::of($displayComponent)->replace(['.', '-', '_'], ' ')->title();
                                                        $typeLabel = 'Livewire';
                                                    } elseif (Str::startsWith($component, 'sections.')) {
                                                        $label = Str::of(Str::after($component, 'sections.'))->replace(['-', '_'], ' ')->title();
                                                        $typeLabel = 'Section';
                                                    } elseif (Str::startsWith($component, 'layout.')) {
                                                        $label = Str::of(Str::after($component, 'layout.'))->replace(['-', '_'], ' ')->title();
                                                        $typeLabel = 'Layout';
                                                    } elseif (Str::startsWith($component, 'ui.')) {
                                                        $label = Str::of(Str::after($component, 'ui.'))->replace(['-', '_'], ' ')->title();
                                                        $typeLabel = 'Ui';
                                                    } else {
                                                        $label = Str::of($component)->replace(['-', '_'], ' ')->title();
                                                        $typeLabel = 'Other';
                                                    }

                                                    $nestedLivewire = $page['component_livewire_map'][$component] ?? [];
                                                @endphp
                                                <div class="flex items-center gap-2 px-3 py-1.5 rounded text-sm {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                                                    <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                                                    <span class="text-xs font-medium opacity-60 shrink-0 w-14">{{ $typeLabel }}</span>
                                                    <span class="font-medium flex-1">{{ $label }}</span>
                                                    @if(!empty($nestedLivewire))
                                                        <span class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded bg-purple-100 text-purple-700 text-[10px] font-medium border border-purple-200 shrink-0">
                                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                                            {{ implode(', ', $nestedLivewire) }}
                                                        </span>
                                                    @endif
                                                    @if($isShared)
                                                        <span class="text-[10px] opacity-50 shrink-0">shared</span>
                                                    @endif
                                                    <span class="text-[10px] opacity-40 shrink-0">{{ $index + 1 }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-sm text-charcoal-light italic">No components found. Page may not be created yet.</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- ── Component Registry ─────────────────────────────────────────── --}}
            <div class="mt-12">
                <h2 class="text-xl font-bold text-charcoal mb-1 flex items-center gap-2">
                    <span class="w-3 h-3 bg-sunburst-full"></span>
                    Component Registry
                </h2>
                <p class="text-sm text-charcoal-light mb-6 ml-5">
                    {{ count($componentUsageMap) }} unique components · {{ $totalComponents }} total usages across {{ $totalPages }} pages · sorted by usage count
                </p>

                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                    @foreach($componentUsageMap as $comp => $pages)
                        @php
                            $isLivewire = Str::startsWith($comp, 'livewire:');
                            $displayComp = $isLivewire ? Str::after($comp, 'livewire:') : $comp;
                            $color = $componentColorMap[$comp];
                            $usageCount = count($pages);

                            if ($isLivewire) {
                                $label    = Str::of($displayComp)->replace(['.', '-', '_'], ' ')->title();
                                $typeLabel = 'Livewire';
                            } elseif (Str::startsWith($comp, 'sections.')) {
                                $label    = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title();
                                $typeLabel = 'Section';
                            } elseif (Str::startsWith($comp, 'layout.')) {
                                $label    = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title();
                                $typeLabel = 'Layout';
                            } elseif (Str::startsWith($comp, 'ui.')) {
                                $label    = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title();
                                $typeLabel = 'Ui';
                            } else {
                                $label    = Str::of($comp)->replace(['-', '_'], ' ')->title();
                                $typeLabel = 'Other';
                            }
                        @endphp
                        <div
                            x-data="{ expanded: false }"
                            class="bg-white rounded-lg shadow-sm border border-linen-dark/20 overflow-hidden"
                        >
                            <button
                                @click="expanded = !expanded"
                                class="w-full text-left p-4 hover:bg-linen-light/50 transition-colors"
                            >
                                <div class="flex items-center gap-3">
                                    <svg
                                        class="w-4 h-4 text-charcoal-light transition-transform shrink-0"
                                        :class="{ 'rotate-90': expanded }"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                    <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-baseline gap-2">
                                            <span class="font-bold text-charcoal truncate">{{ $label }}</span>
                                            <span class="text-xs text-charcoal-light shrink-0">{{ $typeLabel }}</span>
                                        </div>
                                        <p class="text-xs text-charcoal-light truncate mt-0.5 font-mono">{{ $isLivewire ? 'livewire:'.$displayComp : $comp }}</p>
                                    </div>
                                    <span class="shrink-0 inline-flex items-center px-2.5 py-1 rounded-full text-sm font-bold {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                                        {{ $usageCount }}
                                    </span>
                                </div>
                            </button>

                            <div x-show="expanded" x-cloak x-transition class="border-t border-linen-dark/20 p-4">
                                <h4 class="text-xs font-semibold text-charcoal-light mb-2">Used on {{ $usageCount }} {{ Str::plural('page', $usageCount) }}</h4>
                                <div class="space-y-1">
                                    @foreach($pages as $p)
                                        <div class="flex items-center justify-between gap-2 text-sm">
                                            <span class="text-charcoal font-medium truncate">{{ $p['name'] }}</span>
                                            <span class="text-charcoal-light font-mono text-xs shrink-0">{{ $p['url'] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- ── Color Legend ────────────────────────────────────────────────── --}}
            <div class="mt-12 bg-white rounded-lg shadow-sm border border-linen-dark/20 p-6">
                <h2 class="text-lg font-bold text-charcoal mb-4">Color Legend</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
                    @foreach($componentColorMap as $comp => $color)
                        @php
                            $isLw = Str::startsWith($comp, 'livewire:');
                            $displayComp = $isLw ? Str::after($comp, 'livewire:') : $comp;

                            if ($isLw) {
                                $shortLabel = Str::of($displayComp)->replace(['.', '-', '_'], ' ')->title();
                                $typePrefix = 'Livewire: ';
                            } elseif (Str::startsWith($comp, 'sections.')) {
                                $shortLabel = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title();
                                $typePrefix = '';
                            } elseif (Str::startsWith($comp, 'layout.')) {
                                $shortLabel = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title();
                                $typePrefix = '';
                            } elseif (Str::startsWith($comp, 'ui.')) {
                                $shortLabel = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title();
                                $typePrefix = '';
                            } else {
                                $shortLabel = Str::of($comp)->replace(['-', '_'], ' ')->title();
                                $typePrefix = '';
                            }
                        @endphp
                        <div class="flex items-center gap-2 px-2 py-1 rounded text-xs {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                            <span class="w-2 h-2 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                            <span class="truncate">{{ $typePrefix }}{{ $shortLabel }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <x-layout.footer />
</body>
</html>
