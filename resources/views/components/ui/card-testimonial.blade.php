@props([
    'quote' => '',
    'name' => '',
    'label' => 'Verified Customer',
    'avatar' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <p class="text-sm text-charcoal-light italic mb-4">"{{ $quote }}"</p>
    <div class="flex items-center gap-3">
        @if($avatar)
            <img src="{{ $avatar }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover">
        @else
            <div class="w-10 h-10 bg-charcoal rounded-full"></div>
        @endif
        <div>
            <h4 class="font-semibold text-sm text-charcoal">{{ $name }}</h4>
            <p class="text-xs text-charcoal-light">{{ $label }}</p>
        </div>
    </div>
</div>
