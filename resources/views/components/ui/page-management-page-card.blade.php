@props([
    'page',
    'componentColorMap',
])

@php
    $pageSlug = 'page-' . ltrim(str_replace('/', '-', $page['url']), '-');
    if ($pageSlug === 'page-') {
        $pageSlug = 'page-home';
    }
@endphp

<div
    id="{{ $pageSlug }}"
    x-data="{ expanded: false }"
    class="overflow-hidden transition-all duration-300 border"
    style="background: var(--navy-dark); border-color: rgba(255,255,255,0.09);"
>
    <div class="p-4">
        <div class="flex items-start justify-between gap-2">
            <button
                @click="expanded = !expanded"
                class="flex items-start gap-2 min-w-0 flex-1 text-left transition-opacity hover:opacity-80"
            >
                <svg
                    class="w-4 h-4 transition-transform shrink-0 mt-0.5"
                    :class="{ 'rotate-90': expanded }"
                    style="color: var(--slate);"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <div class="min-w-0">
                    <h3 class="font-head font-bold text-sm truncate" style="color: var(--cloud-light);">{{ $page['name'] }}</h3>
                    <p class="font-mono text-xs mt-0.5 break-all" style="color: var(--slate);">{{ $page['url'] }}</p>
                </div>
            </button>

            <a
                href="{{ $page['url'] }}"
                target="_blank"
                rel="noopener noreferrer"
                title="Open live page"
                class="shrink-0 p-1 transition-colors"
                style="color: var(--slate);"
                onmouseenter="this.style.color='var(--champagne)'"
                onmouseleave="this.style.color='var(--slate)'"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
            </a>
        </div>

        <div class="flex flex-wrap gap-1.5 mt-3 ml-6">
            @if($page['is_landing'])
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-semibold font-head"
                      style="background: var(--champagne); color: var(--navy);">
                    Landing page
                </span>
            @endif
            <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium font-head"
                  style="background: rgba(46,158,107,0.18); color: #5ecf9a;">
                Active
            </span>
            @if($page['is_dynamic'])
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium font-head"
                      style="background: rgba(139,92,246,0.18); color: #c4b5fd;">
                    Dynamic
                </span>
            @endif
            <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium font-body"
                  style="background: color-mix(in srgb, var(--champagne) 14%, transparent); color: var(--champagne);">
                {{ $page['shared_count'] }} shared
            </span>
            <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium font-body"
                  style="background: rgba(255,255,255,0.06); color: var(--slate);">
                {{ $page['unique_count'] }} unique
            </span>
            <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium font-body"
                  style="background: rgba(255,255,255,0.04); color: var(--slate);">
                {{ $page['total_count'] }} total
            </span>
        </div>
    </div>

    <div x-show="expanded" x-cloak x-transition
         class="border-t p-4"
         style="border-color: rgba(255,255,255,0.07); background: var(--navy);">
        @if(count($page['all_components']) > 0)
            <h4 class="font-head text-xs font-semibold mb-3" style="color: var(--slate);">Components in page order</h4>
            <div class="space-y-1.5">
                @foreach($page['all_components'] as $index => $compStruct)
                    @php
                        $compKey   = $compStruct['key'];
                        $overrides = $compStruct['overrides'];

                        $isLivewire       = Str::startsWith($compKey, 'livewire:');
                        $displayComponent = $isLivewire ? Str::after($compKey, 'livewire:') : $compKey;
                        $color            = $componentColorMap[$compKey] ?? ['bg' => 'bg-slate/10', 'text' => 'text-slate', 'border' => 'border-cloud', 'dot' => 'bg-slate'];
                        $isShared         = in_array($compKey, $page['shared_components'], true);

                        if ($isLivewire) {
                            $label = Str::of($displayComponent)->replace(['.', '-', '_'], ' ')->title(); $typeLabel = 'Livewire';
                        } elseif (Str::startsWith($compKey, 'sections.')) {
                            $label = Str::of(Str::after($compKey, 'sections.'))->replace(['-', '_'], ' ')->title(); $typeLabel = 'Section';
                        } elseif (Str::startsWith($compKey, 'layout.')) {
                            $label = Str::of(Str::after($compKey, 'layout.'))->replace(['-', '_'], ' ')->title(); $typeLabel = 'Layout';
                        } elseif (Str::startsWith($compKey, 'ui.')) {
                            $label = Str::of(Str::after($compKey, 'ui.'))->replace(['-', '_'], ' ')->title(); $typeLabel = 'Ui';
                        } else {
                            $label = Str::of($compKey)->replace(['-', '_'], ' ')->title(); $typeLabel = 'Other';
                        }

                        $nestedLivewire = $page['component_livewire_map'][$compKey] ?? [];
                        $compRegistryId = 'comp-' . Str::slug($compKey, '-');

                        $overrideList = [];
                        foreach ($overrides as $prop => $data) {
                            $overrideList[] = array_merge(['prop' => $prop], $data);
                        }
                        $overrideCount = count($overrideList);
                    @endphp

                    <div class="flex items-center flex-wrap gap-2 px-3 py-1.5 text-sm {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                        <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                        <span class="font-mono text-xs font-medium opacity-60 shrink-0 w-14">{{ $typeLabel }}</span>
                        <a
                            href="#{{ $compRegistryId }}"
                            @click="$nextTick(() => {
                                let el = document.getElementById('{{ $compRegistryId }}');
                                if (!el) return;
                                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                el.classList.add('ring-2','ring-champagne','bg-champagne/10');
                                setTimeout(() => el.classList.remove('ring-2','ring-champagne','bg-champagne/10'), 1500);
                            })"
                            class="font-medium hover:underline hover:opacity-80 transition-opacity"
                        >{{ $label }}</a>

                        @if($overrideCount > 0)
                            @php
                                $firstChips = array_slice($overrideList, 0, 2);
                                $extraChips = array_slice($overrideList, 2);
                                $moreCount  = count($extraChips);
                            @endphp
                            <div x-data="{ showExtra: false }" class="inline-flex items-center gap-1 flex-wrap">
                                @foreach($firstChips as $ov)
                                    <div class="relative group/chip inline-block">
                                        <span class="inline-flex items-center px-1.5 py-0.5 bg-amber-100 text-amber-800 border border-amber-200 font-mono text-[10px] cursor-default whitespace-nowrap">
                                            {{ $ov['prop'] }}: &quot;{{ Str::limit((string) $ov['value'], 20) }}&quot;
                                        </span>
                                        @if(isset($ov['default']) && $ov['default'] !== null)
                                            <div class="absolute bottom-full left-0 mb-1 px-2 py-1 text-[9px] font-mono whitespace-nowrap z-20 opacity-0 group-hover/chip:opacity-100 transition-opacity pointer-events-none shadow-lg"
                                                 style="background: var(--navy); color: var(--white);">
                                                Default: &quot;{{ Str::limit((string) $ov['default'], 30) }}&quot;
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                @if($moreCount > 0)
                                    <span @mouseenter="showExtra = true" @mouseleave="showExtra = false"
                                          class="inline-flex items-center px-1.5 py-0.5 bg-amber-50 text-amber-600 border border-amber-200 font-mono text-[10px] cursor-pointer hover:bg-amber-100 whitespace-nowrap">
                                        +{{ $moreCount }} more
                                    </span>
                                    <div x-show="showExtra" x-cloak class="inline-flex items-center gap-1 flex-wrap">
                                        @foreach($extraChips as $ov)
                                            <span class="inline-flex items-center px-1.5 py-0.5 bg-amber-100 text-amber-800 border border-amber-200 font-mono text-[10px] whitespace-nowrap">
                                                {{ $ov['prop'] }}: &quot;{{ Str::limit((string) $ov['value'], 20) }}&quot;
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endif

                        @if(!empty($nestedLivewire))
                            <span class="inline-flex items-center gap-1 px-1.5 py-0.5 bg-purple-100 text-purple-700 text-[10px] font-medium border border-purple-200 shrink-0">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                {{ implode(', ', $nestedLivewire) }}
                            </span>
                        @endif
                        @if($isShared)
                            <span class="font-mono text-[10px] opacity-50 shrink-0">shared</span>
                        @endif
                        <span class="font-mono text-[10px] opacity-40 shrink-0 ml-auto">{{ $index + 1 }}</span>
                    </div>
                @endforeach
            </div>
        @else
            <p class="font-body text-sm italic" style="color: var(--slate);">No components found.</p>
        @endif
    </div>
</div>
