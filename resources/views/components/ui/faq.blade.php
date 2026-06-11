@props([
    'faqs' => [
        ['question' => 'Do you serve O\'Hare and Midway?',        'answer' => 'Yes, we run 24/7 to both O\'Hare (ORD) and Midway (MDW). We monitor your flight in real time and adjust arrival at no extra charge.'],
        ['question' => 'How far in advance should I book?',       'answer' => 'At least 24 hours ahead is recommended. For weddings, proms, or large groups, book 2 to 4 weeks out to guarantee your preferred vehicle.'],
        ['question' => 'Are your prices all-inclusive?',          'answer' => 'Yes. Our quoted price covers all fees. Gratuity is not included but is always appreciated.'],
        ['question' => 'What happens if my flight is delayed?',   'answer' => 'We track your flight in real time. If it is delayed, your driver adjusts their arrival at no extra charge. We wait up to 60 minutes after landing.'],
    ],
    'variant' => 'default',
])

@php
$isInvert = $variant === 'invert';

$questionStyle  = $isInvert
    ? 'background: var(--cloud-light); color: var(--navy);'
    : 'background: var(--navy); color: var(--cloud-light);';

$answerStyle    = $isInvert
    ? 'background: var(--cloud); color: var(--navy); border-left: 3px solid var(--champagne);'
    : 'background: var(--cloud); color: var(--navy); border-left: 3px solid var(--champagne);';

$answerTextColor = 'var(--navy)';
@endphp

<div>
    @foreach($faqs as $index => $faq)
        <div x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }" style="margin-bottom: 3px;">

            <button
                @click="open = !open"
                class="font-head"
                style="width: 100%; text-align: left; {{ $questionStyle }} padding: 1rem 1.25rem; cursor: pointer; border: none; font-size: 1rem; line-height: 1.5; display: grid; grid-template-columns: 1fr auto; align-items: center; gap: 1rem;"
            >
                <span>{{ $faq['question'] }}</span>
                <span style="font-size: 1.25rem; line-height: 1; color: var(--champagne); transition: transform 0.2s ease;"
                      :style="open ? 'transform: rotate(45deg)' : 'transform: rotate(0deg)'">+</span>
            </button>

            <div
                x-show="open"
                x-transition:enter="transition-all duration-200 ease-out"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-all duration-150 ease-in"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                style="{{ $answerStyle }} padding: 1.25rem 1.25rem;"
            >
                <p class="font-head" style="color: {{ $answerTextColor }}; font-size: 1.0625rem; line-height: 1.5; margin: 0;">
                    {{ $faq['answer'] }}
                </p>
            </div>

        </div>
    @endforeach
</div>
