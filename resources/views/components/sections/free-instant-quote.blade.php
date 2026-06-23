@props([
    'heading'          => 'Begin your',
    'headingBold'      => 'unforgettable experience',
    'headingTail'      => 'now!',
    'body'             => 'Our professional drivers are skilled and courteous, ensuring you enjoy a seamless and pleasant journey. With their expertise and commitment to service, you can relax knowing that your transportation needs are handled with care and precision, making every ride a truly exceptional experience.',
    'bodyHtml'         => '',
    'image'            => '/images/sections/chauffeurs.jpg',
    'imageAlt'         => 'Professional chauffeur at the wheel, Stop and Go Airport Shuttle',
    'imageAspect'      => '4/3',
    'formAction'          => '/get-a-quote',
    'submitLabel'         => 'Send Message',
    'imageObjectPosition' => 'center',
    'defaultVehicle'      => '',
    'showInfoBox'         => false,
    'infoHeading'      => 'So What Are You',
    'infoHeadingBold'  => 'Waiting For?',
    'infoLines'        => [
        'Your journey should be as exceptional as your destination. Our booking and reservations process is designed for speed, simplicity, and total peace of mind, giving you instant access to luxury transport when you need it most.',
        'Every client review reflects the same standard: reliability, professionalism, and a seamless experience from start to finish. When you book a limo with us, you are not just securing a ride, you are choosing a service trusted by clients who expect results, not excuses.',
        'Whether it is a corporate transfer, special event, or private hire, our system ensures your booking and reservations are confirmed quickly, managed efficiently, and executed flawlessly.',
    ],
    'rightVariant'     => 'image',
    'descHeading'      => 'Why Choose Us?',
    'descSubheading'   => '',
    'descBody'         => '',
    'descBullets'      => [],
    'descClosing'      => '',
    'descImage'        => '',
    'descImageAlt'     => '',
    'descImageTop'     => false,
    'inverted'         => false,
])

@php
    $sectionBg   = $inverted ? 'background: var(--navy);'   : 'background: var(--cloud-light);';
    $descHead    = $inverted ? 'color: var(--white);'        : 'color: var(--navy);';
    $descSub     = $inverted ? 'color: var(--cloud);'        : 'color: var(--navy);';
    $descText    = $inverted ? 'color: var(--cloud);'        : 'color: var(--slate);';
    $descClose   = $inverted ? 'color: var(--cloud);'        : 'color: var(--navy);';
@endphp

{{-- ── Quote Success Modal ───────────────────────────────────────────────── --}}
@if(session('quote_success'))
<div
    x-data="{
        open: true,
        progress: 100,
        _timer: null,
        init() {
            const duration = 7000;
            const tick     = 50;
            let elapsed    = 0;
            this._timer = setInterval(() => {
                elapsed      += tick;
                this.progress = Math.max(0, 100 - (elapsed / duration * 100));
                if (elapsed >= duration) this.close();
            }, tick);
        },
        close() {
            clearInterval(this._timer);
            this.open = false;
        }
    }"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="sg-quote-modal-overlay"
    @keydown.escape.window="close()"
    @click.self="close()"
>
    <div style="position: relative; width: 100%; max-width: 26rem; background: var(--white); border-top: 5px solid var(--champagne); overflow: hidden;">

        {{-- Close button --}}
        <button
            @click="close()"
            type="button"
            style="position: absolute; top: 0.75rem; right: 0.875rem; background: none; border: none; cursor: pointer; color: var(--slate); font-size: 1.25rem; line-height: 1; padding: 0.25rem;"
            aria-label="Close"
        >&times;</button>

        {{-- Body --}}
        <div style="padding: 2rem 2rem 1.5rem;">

            {{-- Wingcrest mark --}}
            <p class="font-head text-center" style="font-size: 0.6875rem; letter-spacing: 0.15em; color: var(--champagne); margin: 0 0 0.75rem; text-transform: uppercase;">Stop &amp; Go Airport Shuttle Service, Inc.</p>

            {{-- Thank-you heading --}}
            <h2 class="font-head text-center" style="font-size: clamp(1.375rem, 3vw, 1.75rem); font-weight: 700; color: var(--navy); margin: 0 0 0.875rem; line-height: 1.2;">
                Thank you, {{ session('quote_name', 'there') }}!
            </h2>

            {{-- Message --}}
            <p class="font-body text-center" style="font-size: 0.9375rem; color: var(--slate); margin: 0 0 1.25rem; line-height: 1.65;">
                We received your quote request and will be in touch with you shortly.
            </p>

            {{-- Reference --}}
            <p class="font-body text-center" style="font-size: 0.8125rem; color: var(--slate); margin: 0;">
                Reference: <strong style="color: var(--navy);">{{ session('quote_reference') }}</strong>
            </p>

        </div>

        {{-- Countdown progress bar --}}
        <div style="height: 4px; background: var(--cloud);">
            <div
                :style="'width: ' + progress + '%; background: var(--champagne); height: 100%; transition: width 0.05s linear;'"
            ></div>
        </div>

    </div>
</div>
@endif

<style>
.sg-quote-field:focus {
    border-color: var(--navy);
    outline: none;
    box-shadow: 0 0 0 1px var(--navy), 0 0 0 4px var(--champagne);
}
.sg-quote-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    background: rgba(10, 22, 50, 0.82);
}
</style>

<section id="free-instant-quote" style="{{ $sectionBg }} scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            {{-- ── Left: Quote Form Card ────────────────────────────────── --}}
            <div style="background: var(--white); box-shadow: 0 2px 16px rgba(0,0,0,0.08);" class="w-full px-8 py-10">

                {{-- Card heading --}}
                <h2 class="font-head text-center mb-1" style="font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 700; color: var(--navy); line-height: 1.2;">
                    Free Instant Quotes
                </h2>
                <p class="font-body text-center mb-6" style="font-size: 0.8125rem; color: var(--slate);">
                    * indicates required fields
                </p>

                {{-- Success handled by modal below --}}

                {{-- Validation errors --}}
                @if($errors->any())
                <div class="mb-6 px-4 py-4 font-body" style="background: #fff5f5; border-left: 4px solid #c0392b;">
                    <p style="font-size: 0.9375rem; font-weight: 700; color: #c0392b; margin: 0 0 8px;">Please fix the following:</p>
                    <ul style="margin: 0; padding: 0 0 0 1.25rem;">
                        @foreach($errors->all() as $error)
                            <li style="font-size: 0.875rem; color: var(--slate); margin-bottom: 4px;">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ $formAction }}" method="POST" novalidate
                    data-recaptcha-key="{{ config('services.recaptcha.site_key') }}"
                >
                    @csrf

                    {{-- Honeypot — never visible to humans; bots fill it and get silently rejected --}}
                    <div style="position: absolute; left: -9999px; top: -9999px; opacity: 0;" aria-hidden="true">
                        <label for="sg_website">Leave this blank</label>
                        <input type="text" name="sg_website" id="sg_website" tabindex="-1" autocomplete="off">
                    </div>

                    {{-- reCAPTCHA v2 Invisible widget anchor + token --}}
                    <div id="sg-recaptcha-widget"></div>
                    <input type="hidden" name="g_recaptcha_response" id="sg-recaptcha-token">

                    {{-- Name --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Enter your Full Name <span style="color: var(--champagne);">*</span>
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            value="{{ old('name') }}"
                            class="w-full font-body sg-quote-field"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                        >
                    </div>

                    {{-- Phone + Email --}}
                    <div class="grid grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Enter your Phone Number <span style="color: var(--champagne);">*</span>
                            </label>
                            <input
                                type="tel"
                                id="sg-phone"
                                name="phone"
                                required
                                inputmode="numeric"
                                placeholder="(___) ___-____"
                                value="{{ old('phone') }}"
                                class="w-full font-body sg-quote-field"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Enter your Email Address <span style="color: var(--champagne);">*</span>
                            </label>
                            <input
                                type="email"
                                id="sg-email"
                                name="email"
                                required
                                value="{{ old('email') }}"
                                class="w-full font-body sg-quote-field"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                            <span id="sg-email-error" class="font-body" style="display:none; font-size: 0.75rem; color: #c0392b; margin-top: 3px; display: none;">
                                Please enter a valid email address.
                            </span>
                        </div>
                    </div>

                    {{-- Vehicle Type --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Vehicle Type <span style="color: var(--champagne);">*</span>
                        </label>
                        <select
                            name="vehicle_type"
                            required
                            class="w-full font-body sg-quote-field"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0; appearance: auto;"
                        >
                            <option value="Limousine Service" @selected(old('vehicle_type', $defaultVehicle) === 'Limousine Service')>Limousine Service</option>
                            <option value="Airport Transportation" @selected(old('vehicle_type', $defaultVehicle) === 'Airport Transportation')>Airport Transportation</option>
                            <option value="Party Bus" @selected(old('vehicle_type', $defaultVehicle) === 'Party Bus')>Party Bus</option>
                            <option value="Chartered Bus" @selected(old('vehicle_type', $defaultVehicle) === 'Chartered Bus')>Chartered Bus</option>
                            <option value="Corporate Transportation" @selected(old('vehicle_type', $defaultVehicle) === 'Corporate Transportation')>Corporate Transportation</option>
                            <option value="Wedding" @selected(old('vehicle_type', $defaultVehicle) === 'Wedding')>Wedding</option>
                            <option value="Special Event" @selected(old('vehicle_type', $defaultVehicle) === 'Special Event')>Special Event</option>
                            <option value="Sporting Event" @selected(old('vehicle_type', $defaultVehicle) === 'Sporting Event')>Sporting Event</option>
                            <option value="Concert" @selected(old('vehicle_type', $defaultVehicle) === 'Concert')>Concert</option>
                            <option value="Wine Tour" @selected(old('vehicle_type', $defaultVehicle) === 'Wine Tour')>Wine Tour</option>
                            <option value="Chauffeur" @selected(old('vehicle_type', $defaultVehicle) === 'Chauffeur')>Chauffeur</option>
                        </select>
                    </div>

                    {{-- Number of Passengers --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Number of Passengers <span style="color: var(--champagne);">*</span>
                        </label>
                        <select
                            name="passengers"
                            required
                            class="w-full font-body sg-quote-field"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0; appearance: auto;"
                        >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7-8">7-8</option>
                            <option value="9-10">9-10</option>
                            <option value="11-13">11-13</option>
                            <option value="13+">13+</option>
                        </select>
                    </div>

                    {{-- Pickup + Destination --}}
                    <div class="grid grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Pickup Location <span style="color: var(--champagne);">*</span>
                            </label>
                            <input
                                type="text"
                                name="pickup_location"
                                required
                                value="{{ old('pickup_location') }}"
                                class="w-full font-body sg-quote-field"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Destination Location <span style="color: var(--champagne);">*</span>
                            </label>
                            <input
                                type="text"
                                name="destination"
                                required
                                value="{{ old('destination') }}"
                                class="w-full font-body sg-quote-field"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                    </div>

                    {{-- Booking Date --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Booking Date <span style="color: var(--champagne);">*</span>
                        </label>
                        <input
                            type="date"
                            name="booking_date"
                            required
                            min="{{ date('Y-m-d') }}"
                            value="{{ old('booking_date') }}"
                            class="w-full font-body sg-quote-field"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                        >
                    </div>

                    {{-- Additional Information --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Additional Information
                        </label>
                        <textarea
                            name="additional_info"
                            rows="2"
                            class="w-full font-body sg-quote-field"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0; resize: vertical;"
                        >{{ old('additional_info') }}</textarea>
                    </div>

                    {{-- Submit --}}
                    <div class="text-center mb-4">
                        <x-ui.button-champagne-solid type="submit" radius="soft">
                            {{ $submitLabel }}
                        </x-ui.button-champagne-solid>
                    </div>

                    {{-- Secured by reCAPTCHA indicator --}}
                    <p class="font-body text-center" style="font-size: 0.6875rem; color: var(--slate); line-height: 1.5;">
                        Protected by reCAPTCHA
                    </p>

                </form>
            </div>

            {{-- ── Right column ─────────────────────────────────────────── --}}
            @if($rightVariant === 'description')

                {{-- Description panel — slides in from the right on scroll --}}
                <div class="w-full sg-fiq-desc-slide-in"
                     style="opacity: 0; transform: translateX(4rem); transition: opacity 1.6s ease, transform 1.6s ease;"
                >
                    {{-- Optional image at top of desc panel --}}
                    @if($descImage && $descImageTop)
                        <div class="w-full overflow-hidden mb-6" style="aspect-ratio: 16/9;">
                            <img
                                src="{{ $descImage }}"
                                alt="{{ $descImageAlt }}"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    @endif

                    {{-- Heading with champagne underbar --}}
                    <div style="width: fit-content; margin-bottom: 1.5rem;">
                        <h3 class="font-head" style="font-size: clamp(1.25rem, 2.5vw, 1.875rem); font-weight: 600; {{ $descHead }} line-height: 1.3;">
                            {{ $descHeading }}
                        </h3>
                        <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                    </div>

                    {{-- Subheading --}}
                    @if($descSubheading)
                        <p class="font-head mb-4" style="font-size: 1.125rem; font-weight: 600; {{ $descSub }} line-height: 1.3;">
                            {{ $descSubheading }}
                        </p>
                    @endif

                    {{-- Optional intro paragraph between subheading and bullets --}}
                    @if($descBody)
                        <p class="font-body mb-5" style="font-size: 1rem; font-weight: 400; {{ $descText }} line-height: 1.6;">
                            {{ $descBody }}
                        </p>
                    @endif

                    {{-- Bullet list --}}
                    @if(!empty($descBullets))
                        <ul style="margin: 0 0 1.5rem; padding: 0; list-style: none;">
                            @foreach($descBullets as $bullet)
                                <li class="font-body" style="font-size: 1rem; {{ $descText }} line-height: 1.6; padding: 0.5rem 0 0.5rem 1.25rem; position: relative; {{ !$loop->last ? 'border-bottom: 1px solid var(--cloud-dark);' : '' }}">
                                    <span style="position: absolute; left: 0; top: 0.6rem; color: var(--champagne); font-size: 0.75rem;">&#9679;</span>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Closing trust line --}}
                    @if($descClosing)
                        <p class="font-body" style="font-size: 1rem; font-weight: 600; {{ $descClose }} line-height: 1.5; border-left: 3px solid var(--champagne); padding-left: 1rem;">
                            {{ $descClosing }}
                        </p>
                    @endif

                    {{-- Optional image below desc text --}}
                    @if($descImage && !$descImageTop)
                        <div class="w-full overflow-hidden mt-6" style="aspect-ratio: 16/9;">
                            <img
                                src="{{ $descImage }}"
                                alt="{{ $descImageAlt }}"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    @endif

                </div>

            @else

                {{-- Image + Copy / Info Box (default) --}}
                <div class="w-full">

                    {{-- Photo --}}
                    <div class="w-full overflow-hidden mb-6" style="aspect-ratio: {{ $imageAspect }};">
                        <img
                            src="{{ $image }}"
                            alt="{{ $imageAlt }}"
                            class="w-full h-full object-cover"
                            style="object-position: {{ $imageObjectPosition }};"
                            loading="lazy"
                        >
                    </div>

                    @if($showInfoBox)

                        {{-- Heading --}}
                        <h3 class="font-head mb-4" style="font-size: clamp(1.25rem, 2.5vw, 1.875rem); font-weight: 400; color: var(--navy); line-height: 1.3; text-align: center;">
                            {{ $infoHeading }} <strong style="font-weight: 700;">{{ $infoHeadingBold }}</strong>
                        </h3>

                        {{-- Champagne rule --}}
                        <x-ui.banner-thin-champagne />

                        {{-- Star rating --}}
                        <p class="font-head mt-4 mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy); text-align: center; letter-spacing: var(--letter-spacing-h2);">
                            Rated 5 stars by our clients
                        </p>
                        <p style="text-align: center; font-size: 1.375rem; color: var(--champagne); line-height: 1; margin-bottom: 1.5rem;" aria-label="5 out of 5 stars">
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                        </p>

                        {{-- Info box --}}
                        <div style="border: 1px solid var(--champagne); padding: 1.5rem;">
                            @foreach($infoLines as $line)
                                <p class="font-body" style="font-size: 1rem; font-weight: 400; color: var(--slate); line-height: 1.6; {{ !$loop->last ? 'margin-bottom: 1rem;' : 'margin: 0;' }}">
                                    {{ $line }}
                                </p>
                            @endforeach
                        </div>

                    @else

                        @if($heading)
                            {{-- Heading — Poppins, weight 600 per spec --}}
                            <h3 class="font-head mb-4" style="font-size: clamp(1.25rem, 2.5vw, 1.875rem); font-weight: 600; color: var(--navy); line-height: 1.3;">
                                {{ $heading }} <strong style="font-weight: 700; color: var(--navy);">{{ $headingBold }}</strong> {{ $headingTail }}
                            </h3>

                            {{-- Champagne rule --}}
                            <x-ui.banner-thin-champagne />
                        @endif

                        {{-- Body — bodyHtml allows branded inline links; falls back to escaped body prop --}}
                        @if($bodyHtml || $body)
                            <p class="font-body mt-4" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                                @if($bodyHtml)
                                    {!! $bodyHtml !!}
                                @else
                                    {{ $body }}
                                @endif
                            </p>
                        @endif

                    @endif

                </div>

            @endif

        </div>
    </div>
</section>

@if($rightVariant === 'description')
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

    document.querySelectorAll('.sg-fiq-desc-slide-in').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
@endif

<script>
(function () {
    // ── reCAPTCHA v2 Invisible — render widget, execute on submit ────────────
    var sgForm    = document.querySelector('form[data-recaptcha-key]');
    var sgWidget  = document.getElementById('sg-recaptcha-widget');
    if (sgForm && sgWidget) {
        var sgSiteKey  = sgForm.dataset.recaptchaKey;
        var sgWidgetId = null;
        var sgSubmitBtn = sgForm.querySelector('[type="submit"]');

        function sgRecaptchaCallback(token) {
            document.getElementById('sg-recaptcha-token').value = token;
            sgForm.submit();
        }

        function sgRecaptchaExpired() {
            if (sgSubmitBtn) sgSubmitBtn.disabled = false;
            sgForm.submit();
        }

        function sgRecaptchaError() {
            // reCAPTCHA unavailable (e.g. dev domain not registered) — submit anyway
            // Server-side skips verification outside production
            sgForm.submit();
        }

        function sgInitRecaptcha() {
            if (typeof grecaptcha !== 'undefined' && typeof grecaptcha.render === 'function') {
                sgWidgetId = grecaptcha.render(sgWidget, {
                    sitekey:            sgSiteKey,
                    size:               'invisible',
                    callback:           sgRecaptchaCallback,
                    'expired-callback': sgRecaptchaExpired,
                    'error-callback':   sgRecaptchaError
                });
            } else {
                setTimeout(sgInitRecaptcha, 100);
            }
        }

        if (sgSiteKey) {
            sgInitRecaptcha();

            sgForm.addEventListener('submit', function (e) {
                e.preventDefault();
                if (sgSubmitBtn) sgSubmitBtn.disabled = true;
                if (sgWidgetId !== null) {
                    grecaptcha.reset(sgWidgetId);
                    grecaptcha.execute(sgWidgetId);
                } else {
                    sgForm.submit();
                }
            });
        }
    }

    // ── Phone mask (___) ___-____ ────────────────────────────────────────────
    var phone = document.getElementById('sg-phone');
    if (phone) {
        phone.addEventListener('input', function () {
            var digits = this.value.replace(/\D/g, '').substring(0, 10);
            var out = '';
            if (digits.length === 0) {
                out = '';
            } else if (digits.length <= 3) {
                out = '(' + digits;
            } else if (digits.length <= 6) {
                out = '(' + digits.substring(0, 3) + ') ' + digits.substring(3);
            } else {
                out = '(' + digits.substring(0, 3) + ') ' + digits.substring(3, 6) + '-' + digits.substring(6);
            }
            this.value = out;
        });
    }

    // ── Email format validation as-you-type ─────────────────────────────────
    var email  = document.getElementById('sg-email');
    var emailErr = document.getElementById('sg-email-error');
    if (email && emailErr) {
        email.addEventListener('input', function () {
            var val   = this.value;
            var valid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(val);
            if (val.length > 0 && !valid) {
                emailErr.style.display = 'block';
                email.style.borderColor = '#c0392b';
            } else {
                emailErr.style.display = 'none';
                email.style.borderColor = '';
            }
        });
    }
})();
</script>
