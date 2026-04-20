@php
    $store          = app('current_store');
    $pageBase       = view()->shared('storefrontPageBase',  '/');
    $homeUrl        = view()->shared('storefrontHomeUrl',   '/');
    $termsUrl       = $pageBase . 'terms';
    $privacyUrl     = $pageBase . 'privacy';
    $refundUrl      = $pageBase . 'refund-policy';
    // sort_order < 50 = regular content pages; sort_order >= 50 = legal/system pages (footer legal section only)
    $contentPages   = $store->pages()
                        ->where('is_active', true)
                        ->where('slug', '!=', '')
                        ->where('sort_order', '<', 50)
                        ->orderBy('sort_order')
                        ->get();
@endphp

<footer class="bg-brand-primary text-white py-8">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Main row: identity | pages | powered-by --}}
        <div class="flex flex-row items-start justify-between gap-8 flex-wrap">

            {{-- Store identity --}}
            <div class="shrink-0">
                @if($store->logo_path)
                    <a href="{{ $homeUrl }}">
                        <img
                            src="{{ Storage::url($store->logo_path) }}"
                            alt="{{ $store->name }}"
                            class="h-12 w-auto object-contain mb-3"
                        >
                    </a>
                @else
                    <a href="{{ $homeUrl }}" class="text-xl font-bold mb-3 block hover:opacity-80 transition-opacity">
                        {{ $store->name }}
                    </a>
                @endif
                <p class="text-xs text-white/60 max-w-[180px]">
                    Official store powered by Top 5 Percent.
                </p>
            </div>

            {{-- Custom content pages (only if any exist) --}}
            @if($contentPages->count())
                <div class="shrink-0">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-brand-secondary mb-3">Pages</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ $homeUrl }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">Home</a>
                        </li>
                        @foreach($contentPages as $page)
                            <li>
                                <a href="{{ $pageBase }}{{ ltrim($page->url(), '/') }}"
                                   class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                    {{ $page->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Powered by --}}
            <div class="shrink-0 text-right">
                <p class="text-xs text-white/50">Powered by</p>
                <a href="https://top5pct.com" target="_blank" rel="noopener"
                   class="text-sm font-bold text-brand-secondary hover:opacity-80 transition-opacity">
                    Top 5 Percent
                </a>
                <p class="text-xs text-white/40 mt-2">&copy; {{ date('Y') }} {{ $store->name }}</p>
            </div>

        </div>

        {{-- Legal links: single horizontal row, no heading, divider above --}}
        <div class="mt-6 pt-5 border-t border-white/10 flex flex-row flex-wrap gap-x-6 gap-y-2">
            <a href="{{ $termsUrl }}" class="text-xs text-white/50 hover:text-white/80 transition-colors">Terms &amp; Conditions</a>
            <a href="{{ $privacyUrl }}" class="text-xs text-white/50 hover:text-white/80 transition-colors">Privacy Policy</a>
            <a href="{{ $refundUrl }}" class="text-xs text-white/50 hover:text-white/80 transition-colors">Refund Policy</a>
        </div>

    </div>
</footer>
