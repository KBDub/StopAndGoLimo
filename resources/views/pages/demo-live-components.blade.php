<x-layouts.page
    title="Section Components — Brand Style Guide"
    metaDescription="All 13 active Blade section components for Stop and Go Airport Shuttle Service Inc. with props, aspect ratios, and live previews."
    currentPage="demo"
    :noIndex="true"
>
<div class="bg-grad-navy-to-gold min-h-screen">

    {{-- ── Hero ──────────────────────────────────────────── --}}
    <section class="py-20 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-grad-midnight-hero"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-6">
            <a href="/demo" class="inline-flex items-center gap-2 font-head font-semibold text-xs tracking-widest text-muted hover:text-champagne transition-colors mb-8">
                <span>&larr;</span> <span>Back to Style Guide</span>
            </a>
            <div>
                <span class="inline-block font-head font-semibold text-xs tracking-widest text-champagne border border-champagne/40 px-5 py-2 mb-8 bg-champagne/5">Section Components</span>
            </div>
            <h1 class="font-head font-extrabold text-4xl md:text-6xl mb-6 leading-tight bg-grad-champagne-shine bg-clip-text" style="-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Section Components</h1>
            <p class="text-muted-light text-lg max-w-xl mx-auto mb-4">All 13 active Blade section components. Each renders as a self-contained page section with its own layout, colors, and props.</p>
            <p class="text-sm tracking-widest text-muted font-head">Located in <code class="font-mono text-champagne">resources/views/components/sections/</code></p>
        </div>
    </section>
    <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

    @php
    $sectionComponents = [
        [
            'num'   => '01',
            'tag'   => 'x-sections.category-hero',
            'file'  => 'resources/views/components/sections/category-hero.blade.php',
            'desc'  => 'Full-bleed photo hero with overlay, H1 + lead text, and a primary CTA button. Occupies 100svh on desktop.',
            'props' => ['heading', 'headingBold', 'subheading', 'body', 'buttonText', 'buttonHref', 'image', 'imageAlt'],
            'ar'    => '100svh desktop, auto mobile',
            'code'  => "<x-sections.category-hero\n    heading=\"Elevate Your\"\n    headingBold=\"Travel Experience\"\n    subheading=\"Discover the joy of seamless journeys\"\n    body=\"Stop &amp; Go Airport Shuttle Service Inc.\"\n    buttonText=\"Book a Ride\"\n    buttonHref=\"/booking\"\n    image=\"/images/hero.jpg\"\n    imageAlt=\"Luxury limousine on a highway\"\n/>",
        ],
        [
            'num'   => '02',
            'tag'   => 'x-sections.travel-in-style',
            'file'  => 'resources/views/components/sections/travel-in-style.blade.php',
            'desc'  => 'Two-column image + text section. Image position (left/right) and background (navy/cloud) are both props. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'body', 'buttonText', 'buttonHref', 'image', 'imageAlt', 'imagePosition', 'background'],
            'ar'    => '4/3 image column',
            'code'  => "<x-sections.travel-in-style\n    heading=\"Travel in\"\n    headingBold=\"Style\"\n    body=\"Stop &amp; Go is your premier provider...\"\n    buttonText=\"About Us\"\n    buttonHref=\"/about-us\"\n    image=\"/images/sections/travel-in-style.jpg\"\n    imageAlt=\"Guests enjoying a luxury limo ride\"\n    imagePosition=\"left\"\n    background=\"navy\"\n/>",
        ],
        [
            'num'   => '03',
            'tag'   => 'x-sections.free-instant-quote',
            'file'  => 'resources/views/components/sections/free-instant-quote.blade.php',
            'desc'  => 'Full-width quote request form section on navy. Two-column layout: pitch copy left, form fields right. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'subheading', 'showInfoBox', 'infoHeading', 'infoHeadingBold', 'infoLines', 'imageObjectPosition'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.free-instant-quote\n    heading=\"Get a Free\"\n    headingBold=\"Instant Quote\"\n    subheading=\"No hidden fees. Book in minutes.\"\n/>",
        ],
        [
            'num'   => '04',
            'tag'   => 'x-sections.service-locations',
            'file'  => 'resources/views/components/sections/service-locations.blade.php',
            'desc'  => 'Dark navy section listing key service city cards with H5 city name, body copy, and a link. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'locations (array: name, href, body)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.service-locations\n    heading=\"We Serve\"\n    headingBold=\"Your City\"\n    :locations=\"[\n        ['name' => 'Naperville', 'href' => '/naperville', 'body' => 'Airport transfers and event transport.'],\n    ]\"\n/>",
        ],
        [
            'num'   => '05',
            'tag'   => 'x-sections.areas-we-serve',
            'file'  => 'resources/views/components/sections/areas-we-serve.blade.php',
            'desc'  => 'Cloud-light section with a 3-column city link grid. City names use Poppins (var(--font-head)) at 25px (1.5625rem) with a pin SVG icon. Supports background="dark" for inverted navy variant. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'areas (array: name, href)', 'background (default: light, dark: navy inverted)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.areas-we-serve\n    heading=\"Areas We\"\n    headingBold=\"Proudly Serve\"\n    :areas=\"[\n        ['name' => 'Joliet',     'href' => '/joliet-limo'],\n        ['name' => 'Naperville', 'href' => '/naperville-limo'],\n    ]\"\n/>",
        ],
        [
            'num'   => '06',
            'tag'   => 'x-sections.why-choose-us',
            'file'  => 'resources/views/components/sections/why-choose-us.blade.php',
            'desc'  => 'Dark navy 3-column icon + feature card grid. Card H3 = Montserrat 25px (var(--font-body)), card body = 17px override. 100px outer padding.',
            'props' => ['heading', 'headingBold', 'features (array: icon, title, body)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.why-choose-us\n    heading=\"Why Choose\"\n    headingBold=\"Us\"\n    :features=\"[\n        ['icon' => '✈', 'title' => 'On-Time Guarantee', 'body' => 'We monitor your flight in real time.'],\n    ]\"\n/>",
        ],
        [
            'num'   => '07',
            'tag'   => 'x-sections.airport-shuttle-service',
            'file'  => 'resources/views/components/sections/airport-shuttle-service.blade.php',
            'desc'  => 'Cloud-light info section about airport shuttle offerings. Body 20px/1.5, line-height unitless. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'body', 'buttonText', 'buttonHref'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.airport-shuttle-service\n    heading=\"Airport Shuttle\"\n    headingBold=\"Service\"\n    body=\"Professional transfers to O'Hare and Midway...\"\n    buttonText=\"Book Your Ride\"\n    buttonHref=\"/booking\"\n/>",
        ],
        [
            'num'   => '08',
            'tag'   => 'x-sections.info-strip',
            'file'  => 'resources/views/components/sections/info-strip.blade.php',
            'desc'  => 'Full-width navy strip for page-level info or messaging. Left-aligned H2 with champagne bold first word, left-aligned champagne underbar (fit-content wrapper, 116% width). Body text in var(--cloud-light). py-12 lg:py-[5rem].',
            'props' => ['heading', 'headingBold', 'body'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.info-strip\n    heading=\"Bookings &amp;\"\n    headingBold=\"Reservations\"\n    body=\"Reserve your stop and go airport shuttle today. We serve all of Chicagoland 24/7.\"\n/>",
        ],
        [
            'num'   => '09',
            'tag'   => 'x-sections.map-contact-section',
            'file'  => 'resources/views/components/sections/map-contact-section.blade.php',
            'desc'  => 'Navy section with embedded Google Map, contact info, and SM label-rule dividers (3px champagne, 30% width). H2 spec + social links.',
            'props' => ['heading', 'headingBold', 'phone', 'email', 'address', 'mapSrc'],
            'ar'    => 'map 4/3, section height auto',
            'code'  => "<x-sections.map-contact-section\n    heading=\"Find\"\n    headingBold=\"Us\"\n    phone=\"(815) 585-6922\"\n    email=\"info@stopandgolimo.com\"\n    address=\"New Lenox, IL 60451\"\n    mapSrc=\"https://maps.google.com/...\"\n/>",
        ],
        [
            'num'   => '10',
            'tag'   => 'x-sections.our-services',
            'file'  => 'resources/views/components/sections/our-services.blade.php',
            'desc'  => 'Navy services card grid. H2 base color var(--cloud-light), bold word var(--champagne), font-weight 700. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'services (array: icon, title, href, body)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.our-services\n    heading=\"Our\"\n    headingBold=\"Services\"\n    :services=\"[\n        ['icon' => '✈', 'title' => 'Airport Shuttle', 'href' => '/airport-shuttle', 'body' => 'O\\'Hare and Midway transfers.'],\n    ]\"\n/>",
        ],
        [
            'num'   => '11',
            'tag'   => 'x-sections.faq',
            'file'  => 'resources/views/components/sections/faq.blade.php',
            'desc'  => 'Cloud-light Alpine.js accordion. Question bar: Poppins 16px (var(--font-head)), navy bg. Answer panel: Poppins 20px, cloud bg, 3px champagne left border. py-12 lg:py-[6.25rem].',
            'props' => ['faqs (array: question, answer)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.faq\n    :faqs=\"[\n        ['question' => 'Do you monitor flight delays?', 'answer' => 'Yes, we track your flight in real time.'],\n    ]\"\n/>",
        ],
        [
            'num'   => '12',
            'tag'   => 'x-sections.share-your-experience',
            'file'  => 'resources/views/components/sections/share-your-experience.blade.php',
            'desc'  => 'Cloud-light location testimonial/review grid. City sub-heading uses H5 tag, Poppins 20px/600. Body 20px/1.5 Montserrat. Supports showSingleButton prop for a single centered CTA instead of per-card buttons. py-12 lg:py-[6.25rem].',
            'props' => ['heading', 'headingBold', 'locations (array: city, address, body)', 'showSingleButton', 'singleButtonText', 'singleButtonHref'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.share-your-experience\n    heading=\"Share Your\"\n    headingBold=\"Experience\"\n    :locations=\"[\n        ['city' => 'Naperville', 'address' => 'Naperville, IL 60540', 'body' => 'Trusted by Naperville families...'],\n    ]\"\n    :showSingleButton=\"true\"\n    singleButtonText=\"Write a Review\"\n    singleButtonHref=\"https://g.page/r/...\"\n/>",
        ],
        [
            'num'   => '13',
            'tag'   => 'x-sections.cta-free-quote-banner',
            'file'  => 'resources/views/components/sections/cta-free-quote-banner.blade.php',
            'desc'  => 'Compact navy CTA action strip. H2 clamp spec + 0.5px letter-spacing. Subheading 20px/1.5. Button uses x-ui.button-champagne-solid. Padding is intentionally smaller than content sections (3rem not 100px).',
            'props' => ['heading', 'subheading', 'buttonText', 'buttonHref'],
            'ar'    => 'height auto (compact strip)',
            'code'  => "<x-sections.cta-free-quote-banner\n    heading=\"Get a Free Instant Quote\"\n    subheading=\"Book your ride in minutes. No hidden fees.\"\n    buttonText=\"Get My Free Quote\"\n    buttonHref=\"/booking\"\n/>",
        ],
        [
            'num'   => '14',
            'tag'   => 'x-sections.base-footer',
            'file'  => 'resources/views/components/sections/base-footer.blade.php',
            'desc'  => 'Site-wide footer. var(--font-body) throughout, champagne link colors, no raw hex, no uppercase. Copyright year 2026, full legal name "Stop and Go Airport Shuttle Service Inc."',
            'props' => ['(none — all content is hard-coded per branding spec)'],
            'ar'    => 'height auto',
            'code'  => "<x-sections.base-footer />",
        ],
    ];
    @endphp

    {{-- ── Section Component Cards ─────────────────────────── --}}
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-10">
                <span class="font-head font-bold text-xs tracking-widest text-champagne">All Components</span>
                <h2 class="font-head font-bold text-3xl text-white mt-2">Section Components (14 active)</h2>
                <p class="text-muted-light mt-3">All active blade files in <code class="font-mono text-champagne text-sm">resources/views/components/sections/</code>. Each renders as a self-contained page section. The <code class="font-mono text-champagne text-sm">old/</code> subdirectory holds legacy print-shop files and is out of scope.</p>
            </div>

            @foreach($sectionComponents as $comp)
            <div class="border border-white/8 bg-navy-light mb-5 overflow-hidden">
                <div class="flex items-start gap-5 px-6 pt-5 pb-4 border-b border-white/6">
                    <span class="font-head font-extrabold text-2xl text-white/20 flex-shrink-0 w-8">{{ $comp['num'] }}</span>
                    <div class="flex-1 min-w-0">
                        <p class="font-mono text-champagne text-sm font-semibold mb-0.5">&lt;{{ $comp['tag'] }} /&gt;</p>
                        <p class="font-mono text-muted text-xs">{{ $comp['file'] }}</p>
                    </div>
                </div>
                <div class="px-6 py-4 border-b border-white/6">
                    <p class="text-cloud text-sm leading-relaxed">{{ $comp['desc'] }}</p>
                    <div class="flex flex-wrap gap-4 mt-3">
                        <div>
                            <span class="text-muted text-xs font-mono tracking-widest">Props</span>
                            <p class="text-cloud text-xs mt-1">{{ implode(', ', $comp['props']) }}</p>
                        </div>
                        <div>
                            <span class="text-muted text-xs font-mono tracking-widest">Aspect ratio</span>
                            <p class="text-cloud text-xs mt-1">{{ $comp['ar'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 bg-black/20">
                    <p class="text-muted text-xs font-mono tracking-widest mb-2">Usage example</p>
                    <pre class="font-mono text-cloud/70 text-xs overflow-x-auto whitespace-pre-wrap">{{ $comp['code'] }}</pre>
                </div>
            </div>
            @endforeach

            {{-- Live previews --}}
            <div class="mt-10 mb-4">
                <h3 class="font-head font-semibold text-white text-xl mb-1">Live Previews</h3>
                <p class="text-muted text-sm">Compact components rendered inline. Full-bleed heroes and map sections render best in their native page context.</p>
            </div>

            <div class="border border-white/8 mb-5 overflow-hidden">
                <p class="font-mono text-champagne text-xs px-4 py-2 bg-navy-dark border-b border-white/6">13 &mdash; x-sections.cta-free-quote-banner</p>
                <x-sections.cta-free-quote-banner />
            </div>

            <div class="border border-white/8 mb-5 overflow-hidden">
                <p class="font-mono text-champagne text-xs px-4 py-2 bg-navy-dark border-b border-white/6">05 &mdash; x-sections.areas-we-serve</p>
                <x-sections.areas-we-serve />
            </div>

            <div class="border border-white/8 mb-5 overflow-hidden">
                <p class="font-mono text-champagne text-xs px-4 py-2 bg-navy-dark border-b border-white/6">11 &mdash; x-sections.faq</p>
                <x-sections.faq />
            </div>

        </div>
    </section>
    <div class="h-0.5 w-full bg-grad-champagne-rule"></div>

    {{-- ── Footer Nav ──────────────────────────────────────── --}}
    <section class="py-16 bg-grad-navy-to-gold">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-head font-bold text-3xl text-white mb-4">Back to the Style Guide</h2>
            <p class="text-cloud/80 max-w-2xl mx-auto mb-8">Colors, typography, buttons, banners, navigation, and the champagne underbar system are all documented on the main style guide page.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <x-ui.button-champagne-gradient href="/demo">Back to Style Guide</x-ui.button-champagne-gradient>
                <x-ui.button-outline-light href="/demo/premium">View Premium Components</x-ui.button-outline-light>
            </div>
        </div>
    </section>

</div>
</x-layouts.page>
