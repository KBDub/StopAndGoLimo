<x-layouts.page
    title="Page Management"
    metaDescription="Developer dashboard showing all pages, components, and their relationships."
    currentPage="page-management"
    :noIndex="true"
>

<style>
[x-cloak] { display: none !important; }
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

    // Build cross-page prop variant map: compKey → propName → {default, values[]}
    $componentPropVariantsMap = [];
    foreach ($groups as $group) {
        foreach ($group['pages'] as $page) {
            foreach ($page['all_components'] as $compStruct) {
                $k = $compStruct['key'];
                foreach ($compStruct['overrides'] as $prop => $data) {
                    $cleanProp = ltrim($prop, ':');
                    if (!isset($componentPropVariantsMap[$k][$cleanProp])) {
                        $componentPropVariantsMap[$k][$cleanProp] = [
                            'default' => $data['default'],
                            'values'  => [],
                        ];
                    }
                    if ($data['default'] !== null && $componentPropVariantsMap[$k][$cleanProp]['default'] === null) {
                        $componentPropVariantsMap[$k][$cleanProp]['default'] = $data['default'];
                    }
                    $trimmedVal = trim($data['value'], '"\'');
                    if (!in_array($trimmedVal, $componentPropVariantsMap[$k][$cleanProp]['values'], true)) {
                        $componentPropVariantsMap[$k][$cleanProp]['values'][] = $trimmedVal;
                    }
                }
            }
        }
    }
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
<div x-data="{ open: false }" class="mb-3 border" style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);">

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
        <p class="font-body text-xs mb-3" style="color: var(--slate);">Double-click any card to jump to its registry entry.</p>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-2">
            @foreach($sharedUsageMap as $comp => $compPages)
                @php
                    $isLw     = Str::startsWith($comp, 'livewire:');
                    $dispComp = $isLw ? Str::after($comp, 'livewire:') : $comp;
                    $color    = $componentColorMap[$comp] ?? ['dot' => 'bg-slate'];
                    $cnt      = count($compPages);
                    $sharedCompId = 'comp-' . Str::slug($comp, '-');
                    $copyKey  = $isLw ? 'livewire:' . $dispComp : $comp;
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
                <div
                    ondblclick="window.dispatchEvent(new CustomEvent('pm-open-registry', { detail: { targetId: '{{ $sharedCompId }}' } }))"
                    onmouseenter="this.style.borderColor='rgba(212,175,55,0.35)'"
                    onmouseleave="this.style.borderColor='rgba(255,255,255,0.07)'"
                    class="group flex items-center justify-between gap-3 px-4 py-3 border cursor-pointer select-none transition-colors"
                    style="background: var(--navy-dark); border-color: rgba(255,255,255,0.07);"
                    title="Double-click to open in All Components"
                >
                    <div class="flex items-center gap-2.5 min-w-0">
                        <span class="w-2 h-2 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                        <span class="font-body text-sm font-medium truncate" style="color: var(--cloud-light);">{{ $sLabel }}</span>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <button
                            title="Copy component name"
                            class="p-1 transition-all opacity-40 group-hover:opacity-100"
                            style="color: var(--cloud);"
                            onclick="event.stopPropagation();
                                var b=this, ci=b.querySelector('.sc-ci'), ck=b.querySelector('.sc-ck');
                                navigator.clipboard.writeText('{{ addslashes($copyKey) }}');
                                ci.style.display='none'; ck.style.display='block'; b.style.color='var(--champagne)'; b.style.opacity='1';
                                setTimeout(function(){ ci.style.display='block'; ck.style.display='none'; b.style.color='var(--cloud)'; b.style.opacity=''; }, 1500);"
                        >
                            <svg class="sc-ci w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <svg class="sc-ck w-3.5 h-3.5" style="display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </button>
                        <span class="font-mono font-bold text-xs px-2 py-0.5" style="color: var(--champagne);">+{{ $cnt }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- ACCORDION 2: All Components                                --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div
    x-data="{ open: false }"
    @pm-open-registry.window="
        open = true;
        $nextTick(() => setTimeout(() => {
            let el = document.getElementById($event.detail.targetId);
            if (!el) return;
            el.dispatchEvent(new CustomEvent('pm-expand'));
            el.scrollIntoView({ behavior: 'smooth', block: 'center' });
            el.classList.add('ring-2','ring-champagne','bg-champagne/10');
            setTimeout(() => el.classList.remove('ring-2','ring-champagne','bg-champagne/10'), 1500);
        }, 300))
    "
    class="mb-3 border" style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);"
>

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
        <span class="shrink-0 font-head font-bold text-xs px-3 py-1" style="background: var(--champagne); color: var(--navy);">
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
                    :propVariants="$componentPropVariantsMap[$comp] ?? []"
                />
            @endforeach
        </div>
    </div>
</div>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- ACCORDION 3: Pages                                         --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div x-data="{ pagesOpen: true }">
    <div
        class="border"
        style="border-color: rgba(255,255,255,0.10); background: var(--navy-light);"
        @pm-open-page.window="
            pagesOpen = true;
            $nextTick(() => setTimeout(() => {
                let el = document.getElementById($event.detail.targetId);
                if (!el) return;
                el.dispatchEvent(new CustomEvent('pm-expand'));
                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                el.classList.add('ring-2','ring-champagne','bg-champagne/10');
                setTimeout(() => el.classList.remove('ring-2','ring-champagne','bg-champagne/10'), 1500);
            }, 300))
        "
    >

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
            @php
                $allPages    = [];
                $exportPages = [];
                foreach ($groups as $groupSlug => $group) {
                    foreach ($group['pages'] as $page) {
                        $allPages[]    = $page;
                        $exportPages[] = [
                            'name'       => $page['name'],
                            'url'        => $page['url'],
                            'group'      => $groupSlug,
                            'components' => array_values($page['components'] ?? []),
                        ];
                    }
                }
                usort($allPages,    fn($a, $b) => strcmp($a['name'], $b['name']));
                usort($exportPages, fn($a, $b) => strcmp($a['name'], $b['name']));
            @endphp

            {{-- ── Export toolbar ── --}}
            <div class="flex flex-wrap items-center justify-between gap-3 mb-5 pb-4 border-b" style="border-color: rgba(255,255,255,0.08);">

                {{-- Checkbox --}}
                <label class="flex items-center gap-2 cursor-pointer select-none"
                       title="When checked, each page entry includes its list of section components">
                    <input
                        type="checkbox"
                        id="pm-export-sections"
                        checked
                        style="accent-color: var(--champagne); width: 15px; height: 15px; cursor: pointer; flex-shrink: 0;"
                    >
                    <span class="font-body text-sm" style="color: var(--slate);">Include sections</span>
                </label>

                {{-- Export button — vanilla JS, no Alpine --}}
                <button
                    onclick="pmExportPages()"
                    class="flex items-center gap-2 px-4 py-1.5 font-head font-semibold text-xs transition-colors border"
                    style="color: var(--champagne); border-color: var(--champagne); background: transparent; letter-spacing: 0.04em;"
                    onmouseenter="this.style.background='color-mix(in srgb, var(--champagne) 10%, transparent)'"
                    onmouseleave="this.style.background='transparent'"
                    title="Download all pages as a JSON file"
                >
                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414A1 1 0 0121 9.414V19a2 2 0 01-2 2z"/>
                    </svg>
                    Export JSON
                </button>
            </div>

            {{-- Embedded export data (server-rendered, no HTTP round-trip on download) --}}
            <script>
            var _pmExportPages = {!! json_encode($exportPages, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!};

            function pmExportPages() {
                var includeSections = document.getElementById('pm-export-sections').checked;
                var now  = new Date().toISOString();
                var pages = _pmExportPages.map(function (p) {
                    var entry = { name: p.name, url: p.url, group: p.group };
                    if (includeSections && p.components && p.components.length) {
                        entry.sections = p.components;
                    }
                    return entry;
                });
                var payload = JSON.stringify({
                    exported_at : now,
                    total_pages : pages.length,
                    pages       : pages
                }, null, 2);
                var blob = new Blob([payload], { type: 'application/json' });
                var a    = document.createElement('a');
                a.href   = URL.createObjectURL(blob);
                a.download = 'stop-go-pages-' + now.slice(0, 10) + '.json';
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(a.href);
            }
            </script>

            {{-- Page grid --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($allPages as $page)
                    <x-ui.page-management-page-card
                        :page="$page"
                        :componentColorMap="$componentColorMap"
                    />
                @endforeach
            </div>
        </div>

    </div>
</div>{{-- end Alpine search/filter scope --}}

</div>
</section>

{{-- ═══════════════════════════════════════════════════════════ --}}
{{-- IFRAME HOVER PREVIEW POPUP                                --}}
{{-- ═══════════════════════════════════════════════════════════ --}}
<div id="pm-preview"
     style="display:none; position:fixed; z-index:9999; top:0; left:0; pointer-events:none;"
     onmouseenter="window._pmPreviewEnter()"
     onmouseleave="window._pmPreviewLeave()">
    <div style="background: var(--navy-dark); border: 1px solid var(--champagne); box-shadow: 0 12px 40px rgba(0,0,0,0.75);">
        {{-- URL label bar --}}
        <div style="display:flex; align-items:center; justify-content:space-between; padding:5px 10px; border-bottom:1px solid rgba(255,255,255,0.1); gap:8px;">
            <span style="font-family:monospace; font-size:10px; color:var(--champagne); white-space:nowrap; overflow:hidden; text-overflow:ellipsis; flex:1;" id="pm-preview-url"></span>
            <span style="font-size:9px; color:var(--slate); white-space:nowrap; flex-shrink:0;">live preview</span>
        </div>
        {{-- Scaled iframe container --}}
        <div style="width:380px; height:238px; overflow:hidden; position:relative; background:var(--navy);">
            <iframe id="pm-preview-iframe"
                    src="about:blank"
                    scrolling="no"
                    style="width:1280px; height:800px; border:none; transform:scale(0.296875); transform-origin:0 0; pointer-events:none; display:block;"
            ></iframe>
        </div>
    </div>
</div>

<script>
(function () {
    var popup   = document.getElementById('pm-preview');
    var iframe  = document.getElementById('pm-preview-iframe');
    var urlLbl  = document.getElementById('pm-preview-url');

    var showTimer  = null;
    var hideTimer  = null;
    var loadedUrl  = null;   // what's currently in the iframe src
    var pendingUrl = null;   // url we intend to show

    var POPUP_W  = 382;   // border + 380 content
    var POPUP_H  = 270;   // bar + 238 content + border

    function position(rect) {
        var left = rect.right + 14;
        var top  = rect.top - 20;

        if (left + POPUP_W > window.innerWidth - 16) {
            left = rect.left - POPUP_W - 14;
        }
        if (left < 8) { left = 8; }

        if (top + POPUP_H > window.innerHeight - 16) {
            top = window.innerHeight - POPUP_H - 16;
        }
        if (top < 8) { top = 8; }

        popup.style.left = left + 'px';
        popup.style.top  = top  + 'px';
    }

    function showPopup(url, rect) {
        clearTimeout(hideTimer);
        position(rect);
        urlLbl.textContent = url;

        if (loadedUrl !== url) {
            iframe.src = window.location.origin + url;
            loadedUrl  = url;
        }

        popup.style.display      = 'block';
        popup.style.pointerEvents = 'auto';
        popup.style.opacity      = '1';
    }

    function hidePopup() {
        popup.style.display      = 'none';
        popup.style.pointerEvents = 'none';
        // Release memory — clear iframe after a short pause
        setTimeout(function () {
            if (popup.style.display === 'none') {
                iframe.src = 'about:blank';
                loadedUrl  = null;
            }
        }, 400);
    }

    // Capture-phase delegation — works even inside scrollable containers
    document.addEventListener('mouseenter', function (e) {
        var el = e.target && e.target.closest ? e.target.closest('[data-preview]') : null;
        if (!el) return;
        var url = el.dataset.preview;
        if (!url) return;
        pendingUrl = url;
        clearTimeout(hideTimer);
        clearTimeout(showTimer);
        showTimer = setTimeout(function () {
            showPopup(url, el.getBoundingClientRect());
        }, 240);
    }, true);

    document.addEventListener('mouseleave', function (e) {
        var el = e.target && e.target.closest ? e.target.closest('[data-preview]') : null;
        if (!el) return;
        clearTimeout(showTimer);
        hideTimer = setTimeout(hidePopup, 320);
    }, true);

    // Keep popup alive when cursor moves onto it
    window._pmPreviewEnter = function () { clearTimeout(hideTimer); };
    window._pmPreviewLeave = function () { hideTimer = setTimeout(hidePopup, 320); };
}());
</script>

</x-layouts.page>
