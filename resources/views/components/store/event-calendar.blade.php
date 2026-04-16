@php
    $store  = app('current_store');
    $events = collect($store->events ?? [])
        ->filter(fn($e) => !empty($e['name']) && !empty($e['event_date']))
        ->sortBy('event_date')
        ->values();
@endphp

@if($store->hasFeature('calendar') && $events->count())
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-2xl font-bold text-brand-primary mb-2">Upcoming Events</h2>
                <div class="h-1 bg-brand-secondary"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($events as $event)
                @php
                    $date   = \Carbon\Carbon::parse($event['event_date']);
                    $isPast = $date->isPast();
                @endphp
                <div class="border border-gray-200 p-5 {{ $isPast ? 'opacity-50' : '' }}">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 bg-brand-primary text-white text-center px-3 py-2 min-w-[56px]">
                            <span class="block text-xl font-bold leading-none">{{ $date->format('d') }}</span>
                            <span class="block text-xs uppercase tracking-wider">{{ $date->format('M') }}</span>
                        </div>
                        <div class="min-w-0">
                            <h4 class="font-bold text-brand-primary truncate">{{ $event['name'] }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $date->format('l, F j, Y') }}</p>
                            @if(!empty($event['location']))
                                <p class="text-sm text-gray-400 mt-1">{{ $event['location'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
