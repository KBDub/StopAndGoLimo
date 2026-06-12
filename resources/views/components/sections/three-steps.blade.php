@props([
    'steps' => [
        [
            'number' => 'Step 1',
            'title'  => 'Submit Your Booking & Reservations Request',
            'body'   => 'Fill out our simple online form with your contact info, event type, and preferred booking date.',
        ],
        [
            'number' => 'Step 2',
            'title'  => 'Confirm the Details',
            'body'   => 'Our team will reach out to confirm availability, pricing, and answer any questions you have.',
        ],
        [
            'number' => 'Step 3',
            'title'  => 'Travel With Confidence',
            'body'   => 'Once confirmed, your luxury ride is locked in. All that\'s left is to sit back and enjoy the experience!',
        ],
    ],
    'whiteBackground' => false,
    'invertBg'        => false,
])

@php $usesWhiteBg = $whiteBackground || $invertBg; @endphp

<section id="three-steps" style="background: {{ $usesWhiteBg ? 'var(--white)' : 'var(--navy)' }}; scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($steps as $step)
                <x-ui.rect-box as="div">

                    {{-- Step number label --}}
                    <p class="font-head" style="font-size: 1.125rem; font-weight: 400; color: var(--cloud-light); line-height: 1.3; margin: 0;">
                        {{ $step['number'] }}
                    </p>

                    {{-- Step title --}}
                    <h3 class="font-body" style="font-size: 25px; font-weight: 400; color: var(--champagne); line-height: 1.3; margin: 0;">
                        {{ $step['title'] }}
                    </h3>

                    {{-- Body copy --}}
                    <p class="font-body" style="font-size: 17px; font-weight: 400; color: var(--cloud-light); line-height: 1.5; margin: 0;">
                        {{ $step['body'] }}
                    </p>

                </x-ui.rect-box>
            @endforeach
        </div>

    </div>
</section>
