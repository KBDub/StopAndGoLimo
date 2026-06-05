@props([
    'quote' => '',
    'name' => '',
    'label' => 'Google Review',
    'avatar' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 shadow-lg hover:shadow-champagne-lg transition-all hover:-translate-y-1 flex flex-col']) }}>
    <div class="flex gap-0.5 mb-3">
        @for ($i = 0; $i < 5; $i++)
            <svg class="w-4 h-4 text-champagne fill-current flex-shrink-0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
        @endfor
    </div>
    <p class="text-sm text-slate italic mb-4 flex-1">"{{ $quote }}"</p>
    <div class="flex items-center gap-3 mt-auto">
        @if($avatar)
            <img src="{{ $avatar }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover">
        @else
            <div class="w-10 h-10 bg-navy flex items-center justify-center text-champagne font-bold text-sm flex-shrink-0 font-head">
                {{ strtoupper(substr($name, 0, 1)) }}
            </div>
        @endif
        <div>
            <h4 class="font-head font-semibold text-sm text-navy">{{ $name }}</h4>
            <p class="text-xs text-slate">{{ $label }}</p>
        </div>
    </div>
</div>
