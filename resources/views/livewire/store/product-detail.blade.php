<div>
    @php
        $name     = $product->translateAttribute('name');
        $desc     = $product->translateAttribute('description');
        $images   = $product->images ?? collect();
        $mainImg  = $product->thumbnail?->getUrl() ?? '/images/placeholder.jpg';
        $variants = $product->variants;
        $store    = app()->bound('current_store') ? app('current_store') : null;
    @endphp

    <div class="flex flex-col lg:flex-row gap-10">
        {{-- Product image --}}
        <div class="w-full lg:w-1/2">
            <img
                src="{{ $mainImg }}"
                alt="{{ $name }}"
                class="w-full object-cover"
                style="max-width:100%; height:auto;"
            >
        </div>

        {{-- Product info --}}
        <div class="w-full lg:w-1/2">
            <h1 class="text-2xl sm:text-3xl font-bold text-brand-primary mb-4">{{ $name }}</h1>

            @if($desc)
                <div class="text-sm text-gray-600 mb-6 leading-relaxed">{!! $desc !!}</div>
            @endif

            {{-- Variant selector --}}
            @if($variants->count() > 1)
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-brand-primary mb-2">Select Option</label>
                    <select
                        wire:model.live="selectedVariantId"
                        class="w-full border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:border-brand-secondary"
                    >
                        <option value="">Choose an option...</option>
                        @foreach($variants as $variant)
                            @php
                                $variantName  = $variant->translateAttribute('name') ?? 'Option';
                                $variantPrice = $variant->prices->first()?->price?->formatted() ?? '';
                            @endphp
                            <option value="{{ $variant->id }}">
                                {{ $variantName }}{{ $variantPrice ? ' — ' . $variantPrice : '' }}
                            </option>
                        @endforeach
                    </select>
                </div>
            @else
                @php
                    $firstVariant = $variants->first();
                    if ($firstVariant) {
                        $this->selectedVariantId = $firstVariant->id;
                    }
                @endphp
            @endif

            {{-- Price --}}
            @if($selectedVariantId)
                @php
                    $selVariant   = $variants->firstWhere('id', $selectedVariantId);
                    $displayPrice = $selVariant?->prices->first()?->price?->formatted() ?? '';
                @endphp
                @if($displayPrice)
                    <p class="text-2xl font-bold text-brand-accent mb-6">{{ $displayPrice }}</p>
                @endif
            @else
                @php $basePrice = $variants->first()?->prices->first()?->price?->formatted() ?? ''; @endphp
                @if($basePrice)
                    <p class="text-2xl font-bold text-brand-accent mb-6">From {{ $basePrice }}</p>
                @endif
            @endif

            {{-- Quantity --}}
            <div class="flex items-center gap-4 mb-6">
                <label class="text-sm font-semibold text-brand-primary">Qty</label>
                <div class="flex items-center border border-gray-300">
                    <button wire:click="$set('quantity', max(1, quantity - 1))" class="px-3 py-2 text-sm hover:bg-gray-100">-</button>
                    <span class="px-4 py-2 text-sm font-semibold">{{ $quantity }}</span>
                    <button wire:click="$set('quantity', quantity + 1)" class="px-3 py-2 text-sm hover:bg-gray-100">+</button>
                </div>
            </div>

            {{-- Add to cart --}}
            <button
                wire:click="addToCart"
                class="w-full py-3 font-bold text-sm bg-brand-secondary text-brand-primary hover:opacity-90 transition-opacity"
            >
                Add to Cart
            </button>

            @if(session('cart_message'))
                <p class="mt-3 text-sm text-green-600">{{ session('cart_message') }}</p>
            @endif

            <p class="mt-6 text-xs text-gray-400">
                Powered by <a href="https://top5pct.com" class="hover:underline">Top 5 Percent</a>
            </p>
        </div>
    </div>
</div>
