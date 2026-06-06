@props([
    'heading'     => 'Our',
    'headingBold' => 'Services',
    'services'    => [
        [
            'label' => 'Party Bus',
            'href'  => '/party-bus-aurora',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/party-bus-new-lenox.jpg',
        ],
        [
            'label' => 'Bus Rental',
            'href'  => '/new-bus-rental',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/bus-rental.jpg',
        ],
        [
            'label' => 'Airport Shuttle',
            'href'  => '/airport-shuttle-ohare-midway',
            'image' => '/images/content/airport-transfer.png',
        ],
        [
            'label' => 'Coach Buses',
            'href'  => '/coach-buses',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/coach-bus.jpg',
        ],
        [
            'label' => 'Chauffeur',
            'href'  => '/chauffeurs',
            'image' => '/images/sections/chauffeurs.jpg',
        ],
        [
            'label' => 'Corporate Car',
            'href'  => '/corporate-car-services',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/corporate-car.jpg',
        ],
        [
            'label' => 'Town Car Rental',
            'href'  => '/town-car-services',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/town-car.jpg',
        ],
        [
            'label' => 'Wedding Limo',
            'href'  => '/wedding-limousine-services',
            'image' => '/images/content/elegant-wedding-rides.png',
        ],
        [
            'label' => 'Special Events',
            'href'  => '/limousine-services',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/special-events.jpg',
        ],
        [
            'label' => 'Transportation',
            'href'  => '/transportation-services',
            'image' => 'https://newlenoxlimoservice.com/wp-content/uploads/2024/10/transportation.jpg',
        ],
    ],
])

<section style="background: var(--navy-dark);" class="py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Centered heading + champagne underbar --}}
        <div style="width: fit-content; margin: 0 auto 3.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: var(--champagne); line-height: 1.2;">
                {{ $heading }} <strong style="font-weight: 800;">{{ $headingBold }}</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Service cards grid: 5-col desktop, 3-col tablet, 2-col mobile --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
            @foreach ($services as $service)
                <x-ui.service-card
                    :label="$service['label']"
                    :href="$service['href']"
                    :image="$service['image']"
                />
            @endforeach
        </div>

    </div>
</section>
