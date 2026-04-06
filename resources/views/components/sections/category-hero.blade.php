@props([
    'preHeading' => 'Veteran Owned • Joliet, IL',
    'heading' => 'Custom Signage',
    'headingAccent' => '& Apparel',
    'description' => 'Premium quality custom t-shirts, business signs, vehicle graphics, and promotional products. Designed and produced right here in Joliet.',
    'primaryButtonText' => 'Shop Now',
    'primaryButtonHref' => '/top5pct-merchandise',
    'secondaryButtonText' => 'Get a Free Quote',
    'secondaryButtonHref' => '/contact',
    'image' => '/images/top5pct-banner-joliet.jpg',
])

@php
    $primaryIsModal  = $primaryButtonHref  === '/contact';
    $secondaryIsModal = $secondaryButtonHref === '/contact';
@endphp

<section class="relative h-[28rem] md:h-[32rem] lg:h-[36rem] flex items-center py-10 overflow-hidden">
    <div class="absolute inset-0">
        <img
            src="{{ $image }}"
            alt="Top 5 Percent - Joliet, IL"
            class="w-full h-full object-cover"
            style="object-position: center 60%;"
        >
        <div class="absolute inset-0 bg-charcoal-dark/70"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="max-w-2xl">
            <h5 class="text-sunburst font-semibold tracking-wide mb-4">
                {{ $preHeading }}
            </h5>
            <div class="inline-block mb-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-2">
                    {{ $heading }}
                    <span class="block text-sunburst">{{ $headingAccent }}</span>
                </h1>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-2xl text-linen mb-8 max-w-3xl">
                {{ $description }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                @if($primaryIsModal)
                    <x-ui.button-gold-gradient @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        {{ $primaryButtonText }}
                    </x-ui.button-gold-gradient>
                @else
                    <x-ui.button-gold-gradient href="{{ $primaryButtonHref }}">
                        {{ $primaryButtonText }}
                    </x-ui.button-gold-gradient>
                @endif
                @if($secondaryIsModal)
                    <x-ui.button-outline-gold @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        {{ $secondaryButtonText }}
                    </x-ui.button-outline-gold>
                @else
                    <x-ui.button-outline-gold href="{{ $secondaryButtonHref }}">
                        {{ $secondaryButtonText }}
                    </x-ui.button-outline-gold>
                @endif
            </div>
        </div>
    </div>
</section>
