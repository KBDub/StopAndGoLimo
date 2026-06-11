@props([
    'heading'          => 'Begin your',
    'headingBold'      => 'unforgettable experience',
    'headingTail'      => 'now!',
    'body'             => 'Our professional drivers are skilled and courteous, ensuring you enjoy a seamless and pleasant journey. With their expertise and commitment to service, you can relax knowing that your transportation needs are handled with care and precision, making every ride a truly exceptional experience.',
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
    'descBullets'      => [],
    'descClosing'      => '',
])

<section style="background: var(--cloud-light);" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

            {{-- ── Left: Quote Form Card ────────────────────────────────── --}}
            <div style="background: var(--white); box-shadow: 0 2px 16px rgba(0,0,0,0.08);" class="w-full px-8 py-10">

                {{-- Card heading --}}
                <h2 class="font-head text-center mb-1" style="font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 700; color: var(--navy); line-height: 1.2;">
                    Free Instant Quotes
                </h2>
                <p class="font-body text-center mb-6" style="font-size: 0.8125rem; color: var(--slate);">
                    "*" indicates required fields
                </p>

                <form action="{{ $formAction }}" method="GET" novalidate>

                    {{-- Name --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Enter your Name <span style="color: var(--navy);">*</span>
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            class="w-full font-body"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                        >
                    </div>

                    {{-- Phone + Email --}}
                    <div class="grid grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Enter your Phone Number <span style="color: var(--navy);">*</span>
                            </label>
                            <input
                                type="tel"
                                name="phone"
                                required
                                class="w-full font-body"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Enter your Email Address <span style="color: var(--navy);">*</span>
                            </label>
                            <input
                                type="email"
                                name="email"
                                required
                                class="w-full font-body"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                    </div>

                    {{-- Vehicle Type --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Vehicle Type <span style="color: var(--navy);">*</span>
                        </label>
                        <select
                            name="vehicle_type"
                            required
                            class="w-full font-body"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0; appearance: auto;"
                        >
                            <option value="Limousine Service" @selected($defaultVehicle === 'Limousine Service')>Limousine Service</option>
                            <option value="Airport Transportation" @selected($defaultVehicle === 'Airport Transportation')>Airport Transportation</option>
                            <option value="Party Bus" @selected($defaultVehicle === 'Party Bus')>Party Bus</option>
                            <option value="Chartered Bus" @selected($defaultVehicle === 'Chartered Bus')>Chartered Bus</option>
                            <option value="Corporate Transportation" @selected($defaultVehicle === 'Corporate Transportation')>Corporate Transportation</option>
                            <option value="Wedding" @selected($defaultVehicle === 'Wedding')>Wedding</option>
                            <option value="Special Event" @selected($defaultVehicle === 'Special Event')>Special Event</option>
                            <option value="Sporting Event" @selected($defaultVehicle === 'Sporting Event')>Sporting Event</option>
                            <option value="Concert" @selected($defaultVehicle === 'Concert')>Concert</option>
                            <option value="Wine Tour" @selected($defaultVehicle === 'Wine Tour')>Wine Tour</option>
                            <option value="Chauffeur" @selected($defaultVehicle === 'Chauffeur')>Chauffeur</option>
                        </select>
                    </div>

                    {{-- Number of Passengers --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Number of Passengers <span style="color: var(--navy);">*</span>
                        </label>
                        <select
                            name="passengers"
                            required
                            class="w-full font-body"
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

                    {{-- Destination + Booking Date --}}
                    <div class="grid grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Destination Location
                            </label>
                            <input
                                type="text"
                                name="destination"
                                class="w-full font-body"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                        <div>
                            <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                                Booking Date
                            </label>
                            <input
                                type="date"
                                name="booking_date"
                                class="w-full font-body"
                                style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0;"
                            >
                        </div>
                    </div>

                    {{-- Additional Information --}}
                    <div class="mb-5">
                        <label class="font-head block mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy);">
                            Additional Information
                        </label>
                        <textarea
                            name="additional_info"
                            rows="4"
                            class="w-full font-body"
                            style="border: 1px solid var(--cloud-dark); padding: 0.5rem 0.75rem; font-size: 0.9375rem; color: var(--navy); background: var(--white); outline: none; border-radius: 0; resize: vertical;"
                        ></textarea>
                    </div>

                    {{-- CAPTCHA placeholder --}}
                    <div class="mb-6">
                        <p class="font-head mb-2" style="font-size: 0.9375rem; font-weight: 700; color: var(--navy);">Captcha</p>
                        <div style="border: 1px solid var(--cloud-dark); padding: 0.75rem; background: var(--cloud-light); font-size: 0.8125rem; color: var(--slate);" class="font-body">
                            reCAPTCHA will load here
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="text-center">
                        <x-ui.button-champagne-solid type="submit" radius="square">
                            {{ $submitLabel }}
                        </x-ui.button-champagne-solid>
                    </div>

                </form>
            </div>

            {{-- ── Right column ─────────────────────────────────────────── --}}
            @if($rightVariant === 'description')

                {{-- Description panel — slides in from the right on scroll --}}
                <div class="w-full"
                     x-data="{ visible: false }"
                     x-init="new IntersectionObserver(([e]) => { if(e.isIntersecting) visible = true }, { threshold: 0.12 }).observe($el)"
                     :style="visible ? 'opacity:1; transform:translateX(0)' : 'opacity:0; transform:translateX(3rem)'"
                     style="transition: opacity 0.7s ease-out, transform 0.7s ease-out;"
                >
                    {{-- Heading with champagne underbar --}}
                    <div style="width: fit-content; margin-bottom: 1.5rem;">
                        <h3 class="font-head" style="font-size: clamp(1.25rem, 2.5vw, 1.875rem); font-weight: 600; color: var(--navy); line-height: 1.3;">
                            {{ $descHeading }}
                        </h3>
                        <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                    </div>

                    {{-- Subheading --}}
                    @if($descSubheading)
                        <p class="font-head mb-5" style="font-size: 1.125rem; font-weight: 600; color: var(--navy); line-height: 1.3;">
                            {{ $descSubheading }}
                        </p>
                    @endif

                    {{-- Bullet list --}}
                    @if(!empty($descBullets))
                        <ul style="margin: 0 0 1.5rem; padding: 0; list-style: none;">
                            @foreach($descBullets as $bullet)
                                <li class="font-body" style="font-size: 1rem; color: var(--slate); line-height: 1.6; padding: 0.5rem 0 0.5rem 1.25rem; position: relative; {{ !$loop->last ? 'border-bottom: 1px solid var(--cloud-dark);' : '' }}">
                                    <span style="position: absolute; left: 0; top: 0.6rem; color: var(--champagne); font-size: 0.75rem;">&#9679;</span>
                                    {{ $bullet }}
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Closing trust line --}}
                    @if($descClosing)
                        <p class="font-body" style="font-size: 1rem; font-weight: 600; color: var(--navy); line-height: 1.5; border-left: 3px solid var(--champagne); padding-left: 1rem;">
                            {{ $descClosing }}
                        </p>
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
                        <p class="font-head mt-4 mb-1" style="font-size: 0.9375rem; font-weight: 600; color: var(--navy); text-align: center; letter-spacing: 0.5px;">
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

                        {{-- Body --}}
                        @if($body)
                            <p class="font-body mt-4" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                                {{ $body }}
                            </p>
                        @endif

                    @endif

                </div>

            @endif

        </div>
    </div>
</section>
