@php
    $store = app('current_store');
@endphp

<footer class="bg-brand-primary text-white py-10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col sm:flex-row justify-between items-start gap-8">

            {{-- Store identity --}}
            <div class="flex-1">
                @if($store->logo_path)
                    <img
                        src="{{ Storage::url($store->logo_path) }}"
                        alt="{{ $store->name }}"
                        class="h-12 w-auto object-contain mb-3 brightness-0 invert"
                    >
                @else
                    <h3 class="text-xl font-bold mb-3">{{ $store->name }}</h3>
                @endif
                <p class="text-sm text-white/70 max-w-xs">
                    Your official online store, powered by Top 5 Percent.
                </p>
            </div>

            {{-- Page links --}}
            @php $pages = $store->pages()->where('is_active', true)->get(); @endphp
            @if($pages->count() > 1)
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-brand-secondary mb-3">Pages</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">Home</a></li>
                        @foreach($pages->sortBy('sort_order') as $page)
                            <li>
                                <a href="{{ $page->url() }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                    {{ $page->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Powered by --}}
            <div class="text-right">
                <p class="text-xs text-white/50">Powered by</p>
                <a href="https://top5pct.com" target="_blank" rel="noopener" class="text-sm font-bold text-brand-secondary hover:opacity-80 transition-opacity">
                    Top 5 Percent
                </a>
                <p class="text-xs text-white/40 mt-2">&copy; {{ date('Y') }} {{ $store->name }}</p>
            </div>
        </div>
    </div>
</footer>
