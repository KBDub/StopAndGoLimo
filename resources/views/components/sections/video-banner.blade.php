@props([
    'videoId'    => '',
    'heading'    => 'See the Stop & Go Experience',
    'label'      => 'Watch us in action',
    'subheading' => 'From the moment you book to the moment you arrive, see the care and professionalism that goes into every ride at Stop & Go Limo.',
    'ctaText'    => 'Book Your Ride',
    'ctaHref'    => '/booking',
])

<section class="py-10 bg-cloud">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-10">
            <p class="text-champagne font-head font-semibold mb-2">{{ $label }}</p>
            <div class="inline-block mb-4">
                <h2 class="text-navy font-bold text-h2 mb-2 font-head">{{ $heading }}</h2>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-slate max-w-4xl mx-auto">{{ $subheading }}</p>
        </div>
        <div class="max-w-7xl mx-auto">
            <iframe
                class="w-full shadow-2xl md:h-[450px]"
                style="aspect-ratio: 4/3;"
                src="https://www.youtube.com/embed/{{ $videoId }}"
                title="{{ $heading }}"
                aria-label="YouTube Video Player - Stop &amp; Go Limo {{ $heading }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                loading="lazy">
            </iframe>
        </div>
        <div class="text-center mt-8">
            @if($ctaHref === '/contact' || $ctaHref === '/booking')
                <x-ui.button-champagne-solid onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">{{ $ctaText }}</x-ui.button-champagne-solid>
            @else
                <x-ui.button-champagne-solid :href="$ctaHref">{{ $ctaText }}</x-ui.button-champagne-solid>
            @endif
        </div>
    </div>
</section>
