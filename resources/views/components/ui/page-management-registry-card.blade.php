@props([
    'comp',
    'pages',
    'color',
    'label',
    'typeLabel',
    'displayComp',
    'isLivewire',
    'usageCount',
    'compId',
])

<div
    id="{{ $compId }}"
    x-data="{ expanded: false }"
    @pm-expand.stop="expanded = true"
    class="overflow-hidden transition-all duration-300 border"
    style="background: var(--navy-dark); border-color: rgba(255,255,255,0.09);"
>
    <button
        @click="expanded = !expanded"
        class="w-full text-left p-4 transition-colors"
        onmouseenter="this.style.background='rgba(255,255,255,0.03)'"
        onmouseleave="this.style.background='transparent'"
        style="background: transparent;"
    >
        <div class="flex items-center gap-3">
            <svg
                class="w-4 h-4 transition-transform shrink-0"
                :class="{ 'rotate-90': expanded }"
                style="color: var(--slate);"
                fill="none" stroke="currentColor" viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
            <div class="flex-1 min-w-0">
                <div class="flex items-baseline gap-2">
                    <span class="font-head font-bold text-sm truncate" style="color: var(--cloud-light);">{{ $label }}</span>
                    <span class="font-mono text-xs shrink-0" style="color: var(--slate);">{{ $typeLabel }}</span>
                </div>
                <p class="font-mono text-xs truncate mt-0.5" style="color: var(--slate);">
                    {{ $isLivewire ? 'livewire:' . $displayComp : $comp }}
                </p>
            </div>
            <span class="shrink-0 inline-flex items-center px-2.5 py-1 font-bold text-sm {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                {{ $usageCount }}
            </span>
        </div>
    </button>

    <div x-show="expanded" x-cloak x-transition
         class="border-t p-4"
         style="border-color: rgba(255,255,255,0.07); background: var(--navy);">
        <h4 class="font-head text-xs font-semibold mb-2" style="color: var(--slate);">
            Used on {{ $usageCount }} {{ \Illuminate\Support\Str::plural('page', $usageCount) }}
        </h4>
        <div class="space-y-1.5">
            @foreach($pages as $p)
                @php
                    $targetId  = 'page-' . ltrim(str_replace('/', '-', $p['url']), '-');
                    if ($targetId === 'page-') { $targetId = 'page-home'; }
                    $urlParts  = explode('/', trim($p['url'], '/'));
                    $groupSlug = $urlParts[0] ?: 'home';
                @endphp
                <div class="flex items-center justify-between gap-2 text-sm">
                    <a
                        href="#{{ $targetId }}"
                        @click.prevent="window.dispatchEvent(new CustomEvent('pm-open-page', { detail: { groupSlug: '{{ $groupSlug }}', targetId: '{{ $targetId }}' } }))"
                        class="font-head font-medium truncate transition-colors"
                        style="color: var(--cloud-light);"
                        onmouseenter="this.style.color='var(--champagne)'"
                        onmouseleave="this.style.color='var(--cloud-light)'"
                    >{{ $p['name'] }}</a>
                    <span class="font-mono text-xs shrink-0" style="color: var(--slate);">{{ $p['url'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
