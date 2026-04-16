@php
    $store      = app('current_store');
    $pages      = $store->pages()->where('is_active', true)->get();
    $flexClass  = match($store->nav_layout) {
        'center' => 'flex-col items-center gap-2',
        'right'  => 'flex-row-reverse justify-between',
        default  => 'flex-row justify-between',
    };
@endphp

<nav
    class="bg-white shadow-sm border-b-4 border-brand-secondary"
    x-data="{ mobileOpen: false }"
    x-on:keydown.escape.window="mobileOpen = false"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center {{ $flexClass }} py-3 gap-4 relative">

            {{-- Logo --}}
            <a href="/" class="flex-shrink-0">
                @if($store->logo_path)
                    <img
                        src="{{ Storage::url($store->logo_path) }}"
                        alt="{{ $store->name }}"
                        class="h-14 w-auto object-contain"
                    >
                @else
                    <span class="text-xl font-bold text-brand-primary">{{ $store->name }}</span>
                @endif
            </a>

            {{-- Mobile hamburger --}}
            <button
                @click="mobileOpen = !mobileOpen"
                class="md:hidden ml-auto p-2 text-brand-primary"
                aria-label="Toggle menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- Desktop nav --}}
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ $storefrontHomeUrl }}" class="text-sm font-semibold text-brand-primary hover:text-brand-secondary transition-colors">
                    Home
                </a>
                @foreach($pages->where('is_active', true)->where('slug', '!=', '')->sortBy('sort_order') as $page)
                    <a href="{{ $storefrontPageBase }}{{ $page->slug }}" class="text-sm font-semibold text-brand-primary hover:text-brand-secondary transition-colors">
                        {{ $page->title }}
                    </a>
                @endforeach
                <livewire:cart.cart-icon />
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div x-show="mobileOpen" x-cloak class="md:hidden border-t border-gray-200 bg-white px-4 pb-4 pt-2 space-y-2">
        <a href="{{ $storefrontHomeUrl }}" class="block py-2 text-sm font-semibold text-brand-primary hover:text-brand-secondary transition-colors">Home</a>
        @foreach($pages->where('is_active', true)->where('slug', '!=', '')->sortBy('sort_order') as $page)
            <a href="{{ $storefrontPageBase }}{{ $page->slug }}" class="block py-2 text-sm font-semibold text-brand-primary hover:text-brand-secondary transition-colors">
                {{ $page->title }}
            </a>
        @endforeach
    </div>
</nav>
