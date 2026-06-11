<x-layouts.page
    title="Page Management"
    metaDescription="Developer dashboard showing all pages, components, and their relationships."
    currentPage="page-management"
    :noIndex="true"
>

<style>
[x-cloak] { display: none !important; }
.pm-pill-hover:hover { background: color-mix(in srgb, var(--champagne) 12%, transparent); color: var(--champagne); border-color: var(--champagne); }
.pm-accordion-header:hover { background: color-mix(in srgb, var(--white) 4%, transparent) !important; }
</style>

{{-- Tailwind safelist for dynamic inter-link classes --}}
<div class="hidden ring-2 ring-champagne bg-champagne/10 transition-all duration-300"></div>

<section style="background: var(--navy); min-height: 100vh;" class="py-10">
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
                $componentUsageMap[$k][] = ['name' => $page['name'], 'url' => $page['url']];
            }
        }
    }
    uasort($componentUsageMap, fn($a, $b) => count($b) - count($a));

    $sharedUsageMap   = array_filter($componentUsageMap, fn($usages) => count($usages) >= 2);
    $sharedUniqueCount = count($sharedUsageMap);
    $pageOnlyCount     = count($componentUsageMap) - $sharedUniqueCount;
@endphp

{{-- ── Header ─────────────────────────────────────────────── --}}
<div class="mb-8 flex items-start justify-between gap-4 flex-wrap">
    <div>
        <h1 class="font-head font-bold mb-1" style="font-size: 2rem; color: var(--white); line-height: 1.2;">Page Management</h1>
        <p class="font-body text-sm" style="color: var(--slate);">
            Overview of all pages, grouped by top-level menu item. Expand any card to inspect components.
        </p>
    </div>
</div>

{{-- ── KPI stats ───────────────────────────────────────────── --}}
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
    <div class="p-5 border" style="background: var(--navy-light); border-color: rgba(255,255,255,0.08);">
        <p class="font-head text-xs font-semibold tracking-wide mb-2" style="color: var(--slate);">Page groups</p>
        <p class="font-head text-3xl font-bold" style="color: var(--white);">{{ count($groups) }}</p>
        <p class="font-body text-xs mt-1" style="color: var(--slate);">URL-based groupings</p>
    </div>
    <div class="p-5 border" style="background: var(--navy-light); border-color: rgba(255,255,255,0.08);">
        <p class="font-head text-xs font-semibold tracking-wide mb-2" style="color: var(--slate);">Total pages</p>
        <p class="font-head text-3xl font-bold" style="color: var(--champagne);">{{ $totalPages }}</p>
        <p class="font-body text-xs mt-1" style="color: var(--slate);">across all groups</p>
    </div>
    <div class="p-5 border" style="background: var(--navy-light); border-color: rgba(255,255,255,0.08);">
        <p class="font-head text-xs font-semibold tracking-wide mb-2" style="color: var(--slate);">Unique components</p>
        <p class="font-head text-3xl font-bold" style="color: var(--champagne);">{{ count($allUniqueComponents) }}</p>
        <p class="font-body text-xs mt-1" style="color: var(--slate);">{{ $sharedUniqueCount }} shared &middot; {{ $pageOnlyCount }} page-only</p>
    </div>
    <div class="p-5 border" style="background: var(--navy-light); border-color: rgba(255,255,255,0.08);">
        <p class="font-head text-xs font-semibold tracking-wide mb-2" style="color: var(--slate);">Component usages</p>
        <p class="font-head text-3xl font-bold" style="color: var(--white);">{{ $totalComponents }}</p>
        <p class="font-body text-xs mt-1" style="color: var(--slate);">total across all pages</p>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- ACCORDION 1: Shared Components                             --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div x-data="{ open: true }" class="mb-3 border" style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);">

    <button
        @click="open = !open"
        class="pm-accordion-header w-full flex items-center justify-between gap-3 px-5 py-4 transition-colors"
        style="background: transparent;"
    >
        <div class="flex items-center gap-3">
            <svg class="w-4 h-4 transition-transform shrink-0" :class="{ 'rotate-90': open }"
                 style="color: var(--slate);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <svg class="w-4 h-4 shrink-0" style="color: var(--champagne);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
            </svg>
            <span class="font-head font-semibold text-sm" style="color: var(--cloud-light);">Shared Components</span>
            <span class="font-body text-xs" style="color: var(--slate);">Components used on 2 or more pages, sorted by usage count</span>
        </div>
        <span class="shrink-0 font-head font-bold text-xs px-3 py-1" style="background: var(--champagne); color: var(--navy);">
            {{ $sharedUniqueCount }} components
        </span>
    </button>

    <div x-show="open" x-cloak x-transition class="border-t px-5 py-5" style="border-color: rgba(255,255,255,0.08);">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2">
            @foreach($sharedUsageMap as $comp => $compPages)
                @php
                    $isLw     = Str::startsWith($comp, 'livewire:');
                    $dispComp = $isLw ? Str::after($comp, 'livewire:') : $comp;
                    $color    = $componentColorMap[$comp] ?? ['dot' => 'bg-slate'];
                    $cnt      = count($compPages);
                    if ($isLw) {
                        $sLabel = Str::of($dispComp)->replace(['.', '-', '_'], ' ')->title();
                    } elseif (Str::startsWith($comp, 'sections.')) {
                        $sLabel = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title();
                    } elseif (Str::startsWith($comp, 'ui.')) {
                        $sLabel = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title();
                    } elseif (Str::startsWith($comp, 'layout.')) {
                        $sLabel = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title();
                    } else {
                        $sLabel = Str::of($comp)->replace(['-', '_'], ' ')->title();
                    }
                @endphp
                <div class="flex items-center justify-between gap-3 px-4 py-3 border"
                     style="background: var(--navy-dark); border-color: rgba(255,255,255,0.07);">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <span class="w-2 h-2 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                        <span class="font-body text-sm font-medium truncate" style="color: var(--cloud-light);">{{ $sLabel }}</span>
                    </div>
                    <span class="shrink-0 font-mono font-bold text-xs px-2 py-0.5" style="color: var(--champagne);">+{{ $cnt }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- ACCORDION 2: All Components                                --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div x-data="{ open: false }" class="mb-8 border" style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);">

    <button
        @click="open = !open"
        class="pm-accordion-header w-full flex items-center justify-between gap-3 px-5 py-4 transition-colors"
        style="background: transparent;"
    >
        <div class="flex items-center gap-3">
            <svg class="w-4 h-4 transition-transform shrink-0" :class="{ 'rotate-90': open }"
                 style="color: var(--slate);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <svg class="w-4 h-4 shrink-0" style="color: var(--champagne);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
            </svg>
            <span class="font-head font-semibold text-sm" style="color: var(--cloud-light);">All Components</span>
            <span class="font-body text-xs" style="color: var(--slate);">Every component detected across the site, sorted by usage</span>
        </div>
        <span class="shrink-0 font-head font-bold text-xs px-3 py-1" style="background: var(--navy-dark); color: var(--champagne); border: 1px solid rgba(220,181,126,0.3);">
            {{ count($componentUsageMap) }} components
        </span>
    </button>

    <div x-show="open" x-cloak x-transition class="border-t px-5 py-5" style="border-color: rgba(255,255,255,0.08);">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-3">
            @foreach($componentUsageMap as $comp => $compPages)
                @php
                    $isLivewire  = Str::startsWith($comp, 'livewire:');
                    $displayComp = $isLivewire ? Str::after($comp, 'livewire:') : $comp;
                    $color       = $componentColorMap[$comp] ?? ['bg' => 'bg-slate/10', 'text' => 'text-slate', 'border' => 'border-cloud', 'dot' => 'bg-slate'];
                    $usageCount  = count($compPages);
                    $compId      = 'comp-' . Str::slug($comp, '-');
                    if ($isLivewire) {
                        $regLabel = Str::of($displayComp)->replace(['.', '-', '_'], ' ')->title(); $regTypeLabel = 'Livewire';
                    } elseif (Str::startsWith($comp, 'sections.')) {
                        $regLabel = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title(); $regTypeLabel = 'Section';
                    } elseif (Str::startsWith($comp, 'layout.')) {
                        $regLabel = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title(); $regTypeLabel = 'Layout';
                    } elseif (Str::startsWith($comp, 'ui.')) {
                        $regLabel = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title(); $regTypeLabel = 'Ui';
                    } else {
                        $regLabel = Str::of($comp)->replace(['-', '_'], ' ')->title(); $regTypeLabel = 'Other';
                    }
                @endphp
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
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- Search + filter + Pages accordion                          --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div x-data="{ search: '', activeGroup: 'all', pagesOpen: true }">

    {{-- Search + filter bar --}}
    <div class="mb-4 flex flex-wrap items-center gap-3">
        <div class="relative flex-1 min-w-[220px] sm:max-w-xs">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 pointer-events-none" style="color: var(--slate);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0"/>
            </svg>
            <input
                type="search"
                x-model="search"
                placeholder="Search pages or components..."
                class="w-full pl-9 pr-4 py-2.5 font-body text-sm border transition-colors focus:outline-none"
                style="background: var(--navy-light); border-color: rgba(255,255,255,0.12); color: var(--cloud-light);"
                onfocus="this.style.borderColor='var(--champagne)'"
                onblur="this.style.borderColor='rgba(255,255,255,0.12)'"
            />
        </div>
        <svg class="w-4 h-4 shrink-0" style="color: var(--slate);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z"/>
        </svg>
        <div class="flex flex-wrap gap-2">
            <button
                @click="activeGroup = 'all'"
                class="pm-pill font-head font-semibold text-xs px-3 py-1.5 border transition-colors"
                :style="activeGroup === 'all'
                    ? 'background: var(--champagne); color: var(--navy); border-color: var(--champagne);'
                    : 'background: transparent; color: var(--slate); border-color: rgba(255,255,255,0.15);'"
            >All Groups</button>
            @foreach($groups as $groupName => $group)
                <button
                    @click="activeGroup = '{{ $group['slug'] }}'"
                    class="pm-pill font-head font-semibold text-xs px-3 py-1.5 border transition-colors pm-pill-hover"
                    :style="activeGroup === '{{ $group['slug'] }}'
                        ? 'background: var(--champagne); color: var(--navy); border-color: var(--champagne);'
                        : 'background: transparent; color: var(--slate); border-color: rgba(255,255,255,0.15);'"
                >{{ $groupName }} {{ count($group['pages']) }}</button>
            @endforeach
        </div>
    </div>

    {{-- Active group label row --}}
    <div class="flex flex-wrap gap-2 mb-6">
        @foreach($groups as $groupName => $group)
            <span
                x-show="activeGroup === 'all' || activeGroup === '{{ $group['slug'] }}'"
                x-cloak
                class="font-head font-semibold text-xs px-2.5 py-1 border"
                style="background: color-mix(in srgb, var(--champagne) 15%, transparent); color: var(--champagne); border-color: color-mix(in srgb, var(--champagne) 35%, transparent);"
            >{{ $groupName }} ({{ count($group['pages']) }})</span>
        @endforeach
    </div>

    {{-- ═══════════════════════════════════════════════════════ --}}
    {{-- ACCORDION 3: Pages                                      --}}
    {{-- ═══════════════════════════════════════════════════════ --}}
    <div class="border" style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);">

        <button
            @click="pagesOpen = !pagesOpen"
            class="pm-accordion-header w-full flex items-center justify-between gap-3 px-5 py-4 transition-colors"
            style="background: transparent;"
        >
            <div class="flex items-center gap-3">
                <svg class="w-4 h-4 transition-transform shrink-0" :class="{ 'rotate-90': pagesOpen }"
                     style="color: var(--slate);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <svg class="w-4 h-4 shrink-0" style="color: var(--champagne);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414A1 1 0 0121 9.414V19a2 2 0 01-2 2z"/>
                </svg>
                <span class="font-head font-semibold text-sm" style="color: var(--cloud-light);">Pages</span>
                <span class="font-body text-xs" style="color: var(--slate);">All site pages grouped by nav section</span>
            </div>
            <span class="shrink-0 font-head font-bold text-xs px-3 py-1" style="background: var(--champagne); color: var(--navy);">
                {{ $totalPages }} pages
            </span>
        </button>

        <div x-show="pagesOpen" x-cloak x-transition class="border-t px-5 py-6" style="border-color: rgba(255,255,255,0.08);">
            @foreach($groups as $groupName => $group)
                <div
                    x-show="activeGroup === 'all' || activeGroup === '{{ $group['slug'] }}'"
                    class="mb-8 last:mb-0"
                >
                    <h2 class="font-head font-bold text-base mb-4 flex items-center gap-2"
                        style="color: var(--cloud-light);">
                        <span class="w-2.5 h-2.5 shrink-0" style="background: var(--champagne);"></span>
                        {{ $groupName }}
                        <span class="font-normal text-sm" style="color: var(--slate);">
                            ({{ count($group['pages']) }} {{ Str::plural('page', count($group['pages'])) }})
                        </span>
                    </h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
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
        </div>

    </div>
</div>{{-- end Alpine search/filter scope --}}

</div>
</section>

</x-layouts.page>
