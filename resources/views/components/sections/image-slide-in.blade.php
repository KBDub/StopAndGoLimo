@props([
    'headingPrefix' => '',
    'headingBold'   => '',
    'body'          => '',
    'buttonText'    => '',
    'buttonHref'    => '#',
    'image'         => '',
    'imageAlt'      => '',
    'imageAspect'   => '3/2',
    'background'    => 'navy',
])

@php
    $bgStyle = $background === 'cloud'
        ? 'background: var(--cloud-light);'
        : 'background: var(--navy);';
@endphp

<section id="image-slide-in" style="{{ $bgStyle }}; scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Left: text box, slides in from right --}}
            <div
                class="sg-slide-in"
                style="opacity: 0; transform: translateX(4rem); transition: opacity 1.6s ease, transform 1.6s ease; background: var(--navy-dark); padding: 2.5rem;"
            >
                {{-- Heading: two-part branding (plain 400 + bold 700 champagne) --}}
                <h2 class="font-head mb-5" style="font-size: clamp(1.5rem, 4vw, 2.25rem); font-weight: 400; line-height: 1.2; letter-spacing: var(--letter-spacing-h2); color: var(--cloud-light);">
                    @if($headingPrefix){{ $headingPrefix }} @endif<strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                </h2>

                {{-- Body --}}
                @if($body)
                    <p class="font-body mb-8" style="font-size: 1.125rem; font-weight: 400; line-height: 1.5; color: var(--cloud-light);">
                        {{ $body }}
                    </p>
                @endif

                {{-- CTA --}}
                @if($buttonHref && $buttonText)
                    <div class="text-center">
                        <x-ui.button-champagne-solid :href="$buttonHref" radius="soft" size="md">
                            {{ $buttonText }}
                        </x-ui.button-champagne-solid>
                    </div>
                @endif
            </div>

            {{-- Right: image, slides in from right with slight delay --}}
            <div
                class="sg-slide-in"
                data-delay="150"
                style="opacity: 0; transform: translateX(4rem); transition: opacity 1.6s ease 150ms, transform 1.6s ease 150ms;"
            >
                @if($image)
                    <div class="w-full overflow-hidden" style="aspect-ratio: {{ $imageAspect }};">
                        <img
                            src="{{ $image }}"
                            alt="{{ $imageAlt }}"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>

{{-- Intersection Observer: triggers slide-in when section enters viewport --}}
<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.sg-slide-in').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
