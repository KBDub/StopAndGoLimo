<x-layouts.page
    title="Page Management"
    metaDescription="Developer dashboard showing all pages, components, and their relationships."
    currentPage="page-management"
    :noIndex="true"
>

<style>[x-cloak] { display: none !important; }</style>

{{-- Tailwind safelist for dynamic inter-link highlight classes --}}
<div class="hidden ring-2 ring-champagne bg-champagne/10 transition-all duration-300"></div>

<section class="py-10">
    <div class="max-w-7xl mx-auto px-6">

        @php
            $colorPalette = [
                ['bg' => 'bg-blue-50',    'text' => 'text-blue-700',    'border' => 'border-blue-200',    'dot' => 'bg-blue-400'],
                ['bg' => 'bg-amber-50',   'text' => 'text-amber-700',   'border' => 'border-amber-200',   'dot' => 'bg-amber-400'],
                ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-700', 'border' => 'border-emerald-200', 'dot' => 'bg-emerald-400'],
                ['bg' => 'bg-purple-50',  'text' => 'text-purple-700',  'border' => 'border-purple-200',  'dot' => 'bg-purple-400'],
                ['bg' => 'bg-rose-50',    'text' => 'text-rose-700',    'border' => 'border-rose-200',    'dot' => 'bg-rose-400'],
                ['bg' => 'bg-cyan-50',    'text' => 'text-cyan-700',    'border' => 'border-cyan-200',    'dot' => 'bg-cyan-400'],
                ['bg' => 'bg-orange-50',  'text' => 'text-orange-700',  'border' => 'border-orange-200',  'dot' => 'bg-orange-400'],
                ['bg' => 'bg-indigo-50',  'text' => 'text-indigo-700',  'border' => 'border-indigo-200',  'dot' => 'bg-indigo-400'],
                ['bg' => 'bg-pink-50',    'text' => 'text-pink-700',    'border' => 'border-pink-200',    'dot' => 'bg-pink-400'],
                ['bg' => 'bg-teal-50',    'text' => 'text-teal-700',    'border' => 'border-teal-200',    'dot' => 'bg-teal-400'],
                ['bg' => 'bg-lime-50',    'text' => 'text-lime-700',    'border' => 'border-lime-200',    'dot' => 'bg-lime-400'],
                ['bg' => 'bg-fuchsia-50', 'text' => 'text-fuchsia-700', 'border' => 'border-fuchsia-200', 'dot' => 'bg-fuchsia-400'],
                ['bg' => 'bg-sky-50',     'text' => 'text-sky-700',     'border' => 'border-sky-200',     'dot' => 'bg-sky-400'],
                ['bg' => 'bg-violet-50',  'text' => 'text-violet-700',  'border' => 'border-violet-200',  'dot' => 'bg-violet-400'],
                ['bg' => 'bg-red-50',     'text' => 'text-red-700',     'border' => 'border-red-200',     'dot' => 'bg-red-400'],
                ['bg' => 'bg-yellow-50',  'text' => 'text-yellow-700',  'border' => 'border-yellow-200',  'dot' => 'bg-yellow-400'],
            ];
            $paletteCount = count($colorPalette);

            $allUniqueComponents = [];
            foreach ($groups as $group) {
                foreach ($group['pages'] as $page) {
                    foreach ($page['all_components'] as $compStruct) {
                        $k = $compStruct['key'];
                        if (!in_array($k, $allUniqueComponents, true)) {
                            $allUniqueComponents[] = $k;
                        }
                    }
                }
            }
            sort($allUniqueComponents);

            $componentColorMap = [];
            foreach ($allUniqueComponents as $index => $k) {
                $componentColorMap[$k] = $colorPalette[$index % $paletteCount];
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
                    foreach ($page['all_components'] as $compStruct) {
                        $k = $compStruct['key'];
                        if (!isset($componentUsageMap[$k])) {
                            $componentUsageMap[$k] = [];
                        }
                        $componentUsageMap[$k][] = [
                            'name' => $page['name'],
                            'url'  => $page['url'],
                        ];
                    }
                }
            }
            uasort($componentUsageMap, fn($a, $b) => count($b) - count($a));

            $sharedUniqueCount = count(array_filter($componentUsageMap, fn($usages) => count($usages) > 1));
            $pageOnlyCount     = count($componentUsageMap) - $sharedUniqueCount;

            $groupSlugs = array_map(fn($g) => $g['slug'], array_values($groups));
        @endphp

        {{-- Page heading --}}
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-navy mb-2 font-head">Page Management</h1>
            <p class="text-slate">
                Overview of all pages, grouped by top-level menu item. Expand a card to see components in page order.
            </p>
        </div>

        {{-- KPI stats bar --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            <div class="bg-white shadow-sm border border-cloud p-5">
                <p class="text-sm text-slate mb-1">Total groups</p>
                <p class="text-2xl font-bold text-navy">{{ count($groups) }}</p>
            </div>
            <div class="bg-white shadow-sm border border-cloud p-5">
                <p class="text-sm text-slate mb-1">Total pages</p>
                <p class="text-2xl font-bold text-champagne">{{ $totalPages }}</p>
            </div>
            <div class="bg-white shadow-sm border border-cloud p-5">
                <p class="text-sm text-slate mb-1">Component usages</p>
                <p class="text-2xl font-bold text-azure">{{ $totalComponents }}</p>
            </div>
            <div class="bg-white shadow-sm border border-cloud p-5">
                <p class="text-sm text-slate mb-1">Unique components</p>
                <p class="text-2xl font-bold text-navy">{{ count($allUniqueComponents) }}</p>
                <p class="text-xs text-slate mt-1">
                    {{ $sharedUniqueCount }} shared &middot; {{ $pageOnlyCount }} page-only
                </p>
            </div>
        </div>

        {{-- Search + group filter — Alpine scope for the whole page --}}
        <div x-data="{ search: '', activeGroup: 'all' }">

            {{-- Search input --}}
            <div class="mb-4">
                <input
                    type="search"
                    x-model="search"
                    placeholder="Search pages or components..."
                    class="w-full sm:w-80 bg-white border border-cloud px-4 py-2.5 text-sm text-navy placeholder-slate focus:outline-none focus:border-champagne transition-colors"
                />
            </div>

            {{-- Group filter pills --}}
            <div class="flex flex-wrap gap-2 mb-8">
                <button
                    @click="activeGroup = 'all'"
                    :class="activeGroup === 'all'
                        ? 'bg-champagne text-navy border-champagne'
                        : 'bg-white text-slate border-cloud hover:border-champagne'"
                    class="px-3 py-1.5 text-xs font-semibold border transition-colors"
                >All</button>
                @foreach($groups as $groupName => $group)
                    <button
                        @click="activeGroup = '{{ $group['slug'] }}'"
                        :class="activeGroup === '{{ $group['slug'] }}'
                            ? 'bg-champagne text-navy border-champagne'
                            : 'bg-white text-slate border-cloud hover:border-champagne'"
                        class="px-3 py-1.5 text-xs font-semibold border transition-colors"
                    >{{ $groupName }}</button>
                @endforeach
            </div>

            {{-- Page groups --}}
            @foreach($groups as $groupName => $group)
                <div
                    x-show="activeGroup === 'all' || activeGroup === '{{ $group['slug'] }}'"
                    class="mb-8"
                >
                    <h2 class="text-xl font-bold text-navy mb-4 flex items-center gap-2 font-head">
                        <span class="w-3 h-3 bg-champagne"></span>
                        {{ $groupName }}
                        <span class="text-sm font-normal text-slate">
                            ({{ count($group['pages']) }} {{ Str::plural('page', count($group['pages'])) }})
                        </span>
                    </h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($group['pages'] as $page)
                            @php
                                $pageSearchString = addslashes(strtolower($page['name'] . ' ' . $page['url']));
                            @endphp
                            <div x-show="search === '' || '{{ $pageSearchString }}'.includes(search.toLowerCase().trim())">
                                <x-ui.page-management-page-card
                                    :page="$page"
                                    :componentColorMap="$componentColorMap"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- Component Registry --}}
            <div class="mt-12">
                <h2 class="text-xl font-bold text-navy mb-1 flex items-center gap-2 font-head">
                    <span class="w-3 h-3 bg-champagne"></span>
                    Component registry
                </h2>
                <p class="text-sm text-slate mb-6 ml-5">
                    {{ count($componentUsageMap) }} unique components &middot;
                    {{ $totalComponents }} total usages across {{ $totalPages }} pages &middot;
                    sorted by usage count
                </p>

                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-4">
                    @foreach($componentUsageMap as $comp => $compPages)
                        @php
                            $isLivewire  = Str::startsWith($comp, 'livewire:');
                            $displayComp = $isLivewire ? Str::after($comp, 'livewire:') : $comp;
                            $color       = $componentColorMap[$comp] ?? ['bg' => 'bg-slate/10', 'text' => 'text-slate', 'border' => 'border-cloud', 'dot' => 'bg-slate'];
                            $usageCount  = count($compPages);
                            $compId      = 'comp-' . Str::slug($comp, '-');

                            if ($isLivewire) {
                                $regLabel     = Str::of($displayComp)->replace(['.', '-', '_'], ' ')->title();
                                $regTypeLabel = 'Livewire';
                            } elseif (Str::startsWith($comp, 'sections.')) {
                                $regLabel     = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title();
                                $regTypeLabel = 'Section';
                            } elseif (Str::startsWith($comp, 'layout.')) {
                                $regLabel     = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title();
                                $regTypeLabel = 'Layout';
                            } elseif (Str::startsWith($comp, 'ui.')) {
                                $regLabel     = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title();
                                $regTypeLabel = 'Ui';
                            } else {
                                $regLabel     = Str::of($comp)->replace(['-', '_'], ' ')->title();
                                $regTypeLabel = 'Other';
                            }

                            $regSearchString = addslashes(strtolower($comp . ' ' . $regLabel));
                        @endphp

                        <div
                            x-show="search === '' || '{{ $regSearchString }}'.includes(search.toLowerCase().trim())"
                        >
                            <x-ui.page-management-registry-card
                                :comp="$comp"
                                :pages="$compPages"
                                :color="$color"
                                :label="$regLabel"
                                :typeLabel="$regTypeLabel"
                                :displayComp="$displayComp"
                                :isLivewire="$isLivewire"
                                :usageCount="$usageCount"
                                :compId="$compId"
                            />
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Color legend --}}
            <x-ui.page-management-legend :componentColorMap="$componentColorMap" />

        </div>{{-- end Alpine search/filter scope --}}

    </div>
</section>

</x-layouts.page>
