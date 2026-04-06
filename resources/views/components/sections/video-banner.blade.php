@props([
    'videoId'    => '',
    'heading'    => 'See Our Work',
    'label'      => 'See our craft in action',
    'subheading' => 'From design to finished product, see the quality and care that goes into every product we produce at Top 5 Percent in Joliet, Illinois.',
    'ctaText'    => 'Get a Free Quote',
    'ctaHref'    => '/contact',
])

<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-10">
            <p class="text-olive font-semibold mb-2">{{ $label }}</p>
            <div class="inline-block mb-4">
                <h2 class="text-charcoal font-bold text-h2 mb-2">{{ $heading }}</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">{{ $subheading }}</p>
        </div>
        <div class="max-w-7xl mx-auto">
            <iframe
                class="w-full shadow-2xl"
                style="height: 450px;"
                src="https://www.youtube.com/embed/{{ $videoId }}"
                title="{{ $heading }}"
                aria-label="YouTube Video Player - Top 5 Percent {{ $heading }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
        <div class="text-center mt-8">
            @if($ctaHref === '/contact')
                <x-ui.button-gold-gradient @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))">{{ $ctaText }}</x-ui.button-gold-gradient>
            @else
                <x-ui.button-gold-gradient :href="$ctaHref">{{ $ctaText }}</x-ui.button-gold-gradient>
            @endif
        </div>
    </div>
</section>
