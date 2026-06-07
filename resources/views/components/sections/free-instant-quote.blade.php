@props([
    'heading'        => 'Begin your',
    'headingBold'    => 'unforgettable experience',
    'headingTail'    => 'now!',
    'body'           => 'Our professional drivers are skilled and courteous, ensuring you enjoy a seamless and pleasant journey. With their expertise and commitment to service, you can relax knowing that your transportation needs are handled with care and precision, making every ride a truly exceptional experience.',
    'image'          => '/images/sections/chauffeurs.jpg',
    'imageAlt'       => 'Professional chauffeur at the wheel, Stop and Go Airport Shuttle',
    'formAction'     => '/get-a-quote',
    'submitLabel'    => 'Send Message',
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
                            <option value="limousine">Limousine Service</option>
                            <option value="party-bus">Party Bus</option>
                            <option value="coach-bus">Coach Bus</option>
                            <option value="town-car">Town Car</option>
                            <option value="corporate">Corporate Car Service</option>
                            <option value="airport-shuttle">Airport Shuttle</option>
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
                            @foreach(range(1, 20) as $n)
                                <option value="{{ $n }}">{{ $n }}</option>
                            @endforeach
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

            {{-- ── Right: Image + Copy ──────────────────────────────────── --}}
            <div class="w-full">

                {{-- Photo --}}
                <div class="w-full overflow-hidden mb-6" style="aspect-ratio: 4/3;">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>

                {{-- Heading — Poppins, weight 600 per spec --}}
                <h3 class="font-head mb-4" style="font-size: clamp(1.25rem, 2.5vw, 1.875rem); font-weight: 600; color: var(--navy); line-height: 1.3;">
                    {{ $heading }} <strong style="font-weight: 700; color: var(--navy);">{{ $headingBold }}</strong> {{ $headingTail }}
                </h3>

                {{-- Champagne rule --}}
                <x-ui.banner-thin-champagne />

                {{-- Body --}}
                @if($body)
                    <p class="font-body mt-4" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                        {{ $body }}
                    </p>
                @endif

            </div>

        </div>
    </div>
</section>
