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
    class="bg-white shadow-sm border border-cloud overflow-hidden transition-all duration-300"
>
    <button
        @click="expanded = !expanded"
        class="w-full text-left p-4 hover:bg-cloud/50 transition-colors"
    >
        <div class="flex items-center gap-3">
            <svg
                class="w-4 h-4 text-slate transition-transform shrink-0"
                :class="{ 'rotate-90': expanded }"
                fill="none" stroke="currentColor" viewBox="0 0 24 24"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
            <div class="flex-1 min-w-0">
                <div class="flex items-baseline gap-2">
                    <span class="font-bold text-navy truncate">{{ $label }}</span>
                    <span class="text-xs text-slate shrink-0">{{ $typeLabel }}</span>
                </div>
                <p class="text-xs text-slate truncate mt-0.5 font-mono">
                    {{ $isLivewire ? 'livewire:' . $displayComp : $comp }}
                </p>
            </div>
            <span class="shrink-0 inline-flex items-center px-2.5 py-1 rounded-full text-sm font-bold {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                {{ $usageCount }}
            </span>
        </div>
    </button>

    <div x-show="expanded" x-cloak x-transition class="border-t border-cloud p-4">
        <h4 class="text-xs font-semibold text-slate mb-2">
            Used on {{ $usageCount }} {{ \Illuminate\Support\Str::plural('page', $usageCount) }}
        </h4>
        <div class="space-y-1">
            @foreach($pages as $p)
                @php
                    $targetId = 'page-' . ltrim(str_replace('/', '-', $p['url']), '-');
                    if ($targetId === 'page-') {
                        $targetId = 'page-home';
                    }
                @endphp
                <div class="flex items-center justify-between gap-2 text-sm">
                    {{-- Inter-link back to the page card --}}
                    <a
                        href="#{{ $targetId }}"
                        @click="
                            $nextTick(() => {
                                let el = document.getElementById('{{ $targetId }}');
                                if (!el) return;
                                el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                el.classList.add('ring-2', 'ring-champagne', 'bg-champagne/10');
                                setTimeout(() => el.classList.remove('ring-2', 'ring-champagne', 'bg-champagne/10'), 1500);
                            })
                        "
                        class="text-navy font-medium truncate hover:text-champagne hover:underline transition-colors"
                    >{{ $p['name'] }}</a>
                    <span class="text-slate font-mono text-xs shrink-0">{{ $p['url'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
