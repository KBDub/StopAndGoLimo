@php
    $store  = app('current_store');
    $roster = collect($store->roster ?? [])->filter(fn($p) => !empty($p['name']));
@endphp

@if($store->hasFeature('roster') && $roster->count())
<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-2xl font-bold text-brand-primary mb-2">Our Roster</h2>
                <div class="h-1 bg-brand-secondary"></div>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach($roster as $person)
                <div class="text-center">
                    @if(!empty($person['photo']))
                        <img
                            src="{{ Storage::url($person['photo']) }}"
                            alt="{{ $person['name'] }}"
                            class="w-24 h-24 rounded-full object-cover mx-auto border-4 border-brand-secondary mb-3"
                            style="width:96px; height:96px; max-width:100%;"
                        >
                    @else
                        <div
                            class="w-24 h-24 rounded-full bg-brand-primary text-white flex items-center justify-center text-2xl font-bold mx-auto border-4 border-brand-secondary mb-3"
                            style="width:96px; height:96px; max-width:100%;"
                        >
                            {{ strtoupper(substr($person['name'], 0, 1)) }}
                        </div>
                    @endif
                    <h4 class="font-semibold text-sm text-brand-primary">{{ $person['name'] }}</h4>
                    @if(!empty($person['meta']))
                        <p class="text-xs text-gray-500 mt-0.5">{{ $person['meta'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
