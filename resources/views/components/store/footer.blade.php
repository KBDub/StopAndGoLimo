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

        {{-- Top row: identity + all link columns in one horizontal bar --}}
        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-8">

            {{-- Store identity --}}
            <div class="shrink-0">
                @if($store->logo_path)
                    <a href="{{ $homeUrl }}">
                        <img
                            src="{{ Storage::url($store->logo_path) }}"
                            alt="{{ $store->name }}"
                            class="h-12 w-auto object-contain mb-3 brightness-0 invert"
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

            {{-- Link columns: Pages + Legal side by side --}}
            <div class="flex flex-row gap-12 flex-wrap">

                {{-- Custom content pages (only if any exist) --}}
                @if($contentPages->count())
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-wider text-brand-secondary mb-3">Pages</h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ $homeUrl }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                    Home
                                </a>
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

                {{-- Legal links (always shown) --}}
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-brand-secondary mb-3">Legal</h4>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ $termsUrl }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                Terms &amp; Conditions
                            </a>
                        </li>
                        <li>
                            <a href="{{ $privacyUrl }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ $refundUrl }}" class="text-sm text-white/70 hover:text-brand-secondary transition-colors">
                                Refund Policy
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            {{-- Powered by --}}
            <div class="shrink-0 sm:text-right">
                <p class="text-xs text-white/50">Powered by</p>
                <a href="https://top5pct.com" target="_blank" rel="noopener"
                   class="text-sm font-bold text-brand-secondary hover:opacity-80 transition-opacity">
                    Top 5 Percent
                </a>
                <p class="text-xs text-white/40 mt-2">&copy; {{ date('Y') }} {{ $store->name }}</p>
            </div>

        </div>

    </div>
</footer>
