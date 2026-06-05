@props([
    'question' => '',
    'answer' => '',
    'open' => false,
])

<div {{ $attributes->merge(['class' => 'bg-white shadow-lg overflow-hidden hover:shadow-champagne-lg transition-all']) }} x-data="{ expanded: {{ $open ? 'true' : 'false' }} }">
    <button
        @click="expanded = !expanded"
        class="w-full flex items-center justify-between p-5 text-left border-l-4 border-champagne hover:bg-cloud transition-colors"
        :aria-expanded="expanded"
    >
        <h3 class="font-head font-semibold text-navy pr-4">{{ $question }}</h3>
        <span class="text-champagne flex-shrink-0 text-xl font-bold transition-transform duration-200" :class="expanded ? 'rotate-45' : ''">+</span>
    </button>
    <div
        x-show="expanded"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
    >
        <div class="px-5 pb-5 pt-2 border-l-4 border-champagne">
            @if($slot->isNotEmpty())
                {{ $slot }}
            @else
                <p class="text-sm text-slate leading-relaxed">{{ $answer }}</p>
            @endif
        </div>
    </div>
</div>
