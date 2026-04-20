@php
    $store = app('current_store');
@endphp

<section class="py-16 bg-brand-primary text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        @if($store->logo_path)
            <img
                src="{{ Storage::url($store->logo_path) }}"
                alt="{{ $store->name }}"
                class="h-24 w-auto mx-auto mb-6 object-contain"
            >
        @endif
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">
            {{ $store->name }}
        </h1>
        <p class="text-lg text-white/80 max-w-2xl mx-auto mb-8">
            Browse our official collection. All items are custom-printed and made to order.
        </p>
        <a
            href="#catalog"
            class="inline-block px-8 py-3 font-bold text-brand-primary bg-brand-secondary hover:opacity-90 transition-opacity"
        >
            Shop the Collection
        </a>
    </div>
</section>
