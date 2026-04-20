@php
    $store      = $currentStore;
    $homeUrl    = $storefrontHomeUrl;
    $layout     = $store->nav_layout ?? 'left'; // 'left' | 'center' | 'right'

    // ── Build the ordered link list (excluding Home, which is always first) ──
    $enabledKeys = $store->nav_links ?? [];
    $allLinks    = collect();

    if (in_array('catalog', $enabledKeys)) {
        $allLinks->push(['label' => 'Shop', 'url' => $homeUrl . '#catalog']);
    }
    if (in_array('events', $enabledKeys)) {
        $allLinks->push(['label' => 'Events', 'url' => $homeUrl . '#events']);
    }

    // Custom StorePage entries (sort_order < 50 = nav pages)
    $store->pages()
        ->where('is_active', true)
        ->where('slug', '!=', '')
        ->where('sort_order', '<', 50)
        ->orderBy('sort_order')
        ->get()
        ->each(fn ($p) => $allLinks->push([
            'label' => $p->title,
            'url'   => $storefrontPageBase . ltrim($p->url(), '/'),
        ]));

    // ── For centered logo: split links left and right of the logo ───────────
    // Home always anchors the left group; remaining links split evenly.
    $leftLinks  = collect();
    $rightLinks = collect();

    if ($layout === 'center') {
        $half       = (int) ceil($allLinks->count() / 2);
        $leftLinks  = $allLinks->slice(0, $half)->values();
        $rightLinks = $allLinks->slice($half)->values();
    }

    // ── Shared link class ────────────────────────────────────────────────────
    $linkCls = 'text-sm font-semibold text-brand-primary hover:text-brand-secondary transition-colors whitespace-nowrap';
@endphp

<nav
    class="bg-white shadow-sm border-b-4 border-brand-secondary"
    x-data="{ mobileOpen: false }"
    x-on:keydown.escape.window="mobileOpen = false"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        {{-- ── Desktop bar ─────────────────────────────────────────────── --}}

        @if($layout === 'center')
            {{-- 4-column: [left links] [logo] [right links] [cart] --}}
            <div class="hidden md:grid items-center py-3 gap-4"
                 style="grid-template-columns: 1fr auto 1fr auto;">

                {{-- Left links: Home + first half --}}
                <div class="flex items-center justify-end gap-6">
                    <a href="{{ $homeUrl }}" class="{{ $linkCls }}">Home</a>
                    @foreach($leftLinks as $link)
                        <a href="{{ $link['url'] }}" class="{{ $linkCls }}">{{ $link['label'] }}</a>
                    @endforeach
                </div>

                {{-- Logo (center) --}}
                <a href="{{ $homeUrl }}" class="flex-shrink-0">
                    @if($store->logo_path)
                        <img src="{{ Storage::url($store->logo_path) }}" alt="{{ $store->name }}" class="h-14 w-auto object-contain">
                    @else
                        <span class="text-xl font-bold text-brand-primary">{{ $store->name }}</span>
                    @endif
                </a>

                {{-- Right links: second half --}}
                <div class="flex items-center justify-start gap-6">
                    @foreach($rightLinks as $link)
                        <a href="{{ $link['url'] }}" class="{{ $linkCls }}">{{ $link['label'] }}</a>
                    @endforeach
                </div>

                {{-- Cart (always far right) --}}
                <div class="flex justify-end">
                    <livewire:cart.cart-icon />
                </div>

            </div>

        @elseif($layout === 'right')
            {{-- 3-column: [links centered] [logo] [cart] --}}
            <div class="hidden md:grid items-center py-3 gap-4"
                 style="grid-template-columns: 1fr auto auto;">

                {{-- All links spread across center zone --}}
                <div class="flex items-center justify-between px-8">
                    <a href="{{ $homeUrl }}" class="{{ $linkCls }}">Home</a>
                    @foreach($allLinks as $link)
                        <a href="{{ $link['url'] }}" class="{{ $linkCls }}">{{ $link['label'] }}</a>
                    @endforeach
                </div>

                {{-- Logo --}}
                <a href="{{ $homeUrl }}" class="flex-shrink-0">
                    @if($store->logo_path)
                        <img src="{{ Storage::url($store->logo_path) }}" alt="{{ $store->name }}" class="h-14 w-auto object-contain">
                    @else
                        <span class="text-xl font-bold text-brand-primary">{{ $store->name }}</span>
                    @endif
                </a>

                {{-- Cart (always far right) --}}
                <livewire:cart.cart-icon />

            </div>

        @else
            {{-- Default: Logo Left — 3-column: [logo] [links spread] [cart] --}}
            <div class="hidden md:grid items-center py-3 gap-4"
                 style="grid-template-columns: auto 1fr auto;">

                {{-- Logo --}}
                <a href="{{ $homeUrl }}" class="flex-shrink-0">
                    @if($store->logo_path)
                        <img src="{{ Storage::url($store->logo_path) }}" alt="{{ $store->name }}" class="h-14 w-auto object-contain">
                    @else
                        <span class="text-xl font-bold text-brand-primary">{{ $store->name }}</span>
                    @endif
                </a>

                {{-- All links spread across center zone --}}
                <div class="flex items-center justify-between px-8">
                    <a href="{{ $homeUrl }}" class="{{ $linkCls }}">Home</a>
                    @foreach($allLinks as $link)
                        <a href="{{ $link['url'] }}" class="{{ $linkCls }}">{{ $link['label'] }}</a>
                    @endforeach
                </div>

                {{-- Cart (always far right) --}}
                <livewire:cart.cart-icon />

            </div>
        @endif

        {{-- ── Mobile bar ──────────────────────────────────────────────── --}}
        <div class="flex md:hidden items-center justify-between py-3">

            {{-- Mobile logo --}}
            <a href="{{ $homeUrl }}" class="flex-shrink-0">
                @if($store->logo_path)
                    <img src="{{ Storage::url($store->logo_path) }}" alt="{{ $store->name }}" class="h-12 w-auto object-contain">
                @else
                    <span class="text-lg font-bold text-brand-primary">{{ $store->name }}</span>
                @endif
            </a>

            <div class="flex items-center gap-3">
                <livewire:cart.cart-icon />
                <button
                    @click="mobileOpen = !mobileOpen"
                    class="p-2 text-brand-primary"
                    aria-label="Toggle menu"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        <path x-show="mobileOpen"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>

    </div>

    {{-- ── Mobile dropdown menu ────────────────────────────────────────── --}}
    <div x-show="mobileOpen" x-cloak class="md:hidden border-t border-gray-200 bg-white px-4 pb-4 pt-2 space-y-1">
        <a href="{{ $homeUrl }}" class="block py-2 {{ $linkCls }}">Home</a>
        @foreach($allLinks as $link)
            <a href="{{ $link['url'] }}" class="block py-2 {{ $linkCls }}">{{ $link['label'] }}</a>
        @endforeach
    </div>

</nav>
