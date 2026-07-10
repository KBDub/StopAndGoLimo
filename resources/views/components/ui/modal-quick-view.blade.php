@props([
    'id'            => '',
    'title'         => '',
    'price'         => '',
    'originalPrice' => null,
    'description'   => '',
    'href'          => '#',
    'variants'      => [],
    'images'        => [],
])

<div
    x-data="{
        open: false,
        activeImg: 0,
        selectedVariant: null,
        qty: 1,
    }"
    x-on:open-quick-view.window="if ($event.detail.id === '{{ $id }}') open = true"
    x-show="open"
    x-trap="open"
    style="display:none;position:fixed;inset:0;z-index:100;"
    x-cloak
>
    {{-- Backdrop --}}
    <div style="position:absolute;inset:0;background:rgba(0,0,0,0.6);backdrop-filter:blur(4px);"
         x-on:click="open=false"></div>

    {{-- Modal --}}
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;width:min(90vw,760px);max-height:90vh;overflow-y:auto;display:flex;flex-direction:column;">

        {{-- Header --}}
        <div style="display:flex;align-items:center;justify-content:space-between;padding:1rem 1.25rem;border-bottom:1px solid #e5e5e5;">
            <h2 style="font-family:var(--font-head,sans-serif);font-size:1rem;font-weight:700;color:#2c2c2c;margin:0;">{{ $title }}</h2>
            <button x-on:click="open=false"
                    style="background:none;border:none;cursor:pointer;font-size:1.25rem;color:#2c2c2c;padding:0.25rem;"
                    aria-label="Close">&#x2715;</button>
        </div>

        {{-- Body --}}
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:0;flex:1;">

            {{-- Image gallery --}}
            <div style="background:#f5f5f5;padding:1rem;display:flex;flex-direction:column;gap:0.5rem;">
                @if(count($images) > 0)
                    <div style="aspect-ratio:1;background:#e0e0e0;">
                        <img :src="'{{ json_encode(array_column($images, 'src')) }}'[activeImg] || '{{ $images[0]['src'] }}'"
                             alt="{{ $title }}"
                             style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    @if(count($images) > 1)
                        <div style="display:flex;gap:0.4rem;flex-wrap:wrap;">
                            @foreach($images as $i => $img)
                                <button x-on:click="activeImg={{ $i }}"
                                        style="width:48px;height:48px;border:2px solid #ccc;background:none;cursor:pointer;padding:0;"
                                        :style="activeImg === {{ $i }} ? 'border-color:#FFC20E' : ''">
                                    <img src="{{ $img['src'] }}" alt="{{ $img['alt'] ?? '' }}" style="width:100%;height:100%;object-fit:cover;">
                                </button>
                            @endforeach
                        </div>
                    @endif
                @else
                    <div style="aspect-ratio:1;background:#2c2c2c;"></div>
                @endif
            </div>

            {{-- Details --}}
            <div style="padding:1.25rem;display:flex;flex-direction:column;gap:0.85rem;">
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="font-size:1.1rem;font-weight:700;color:#2c2c2c;">{{ $price }}</span>
                    @if($originalPrice)
                        <span style="font-size:0.9rem;color:#888;text-decoration:line-through;">{{ $originalPrice }}</span>
                    @endif
                </div>

                @if($description)
                    <p style="font-size:0.85rem;color:#555;line-height:1.6;margin:0;">{{ $description }}</p>
                @endif

                @if(count($variants) > 0)
                    <div>
                        <p style="font-size:0.8rem;font-weight:600;color:#2c2c2c;margin:0 0 0.4rem;">Size</p>
                        <div style="display:flex;flex-wrap:wrap;gap:0.4rem;">
                            @foreach($variants as $v)
                                <button x-on:click="selectedVariant='{{ $v }}'"
                                        :style="selectedVariant==='{{ $v }}' ? 'border-color:#FFC20E;background:#FFC20E;color:#1a1a1a;' : ''"
                                        style="border:1px solid #ccc;background:#fff;padding:0.3rem 0.65rem;font-size:0.8rem;cursor:pointer;transition:all 0.15s;">
                                    {{ $v }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endif

                {{-- Qty --}}
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <button x-on:click="if(qty>1)qty--" style="width:32px;height:32px;border:1px solid #ccc;background:#fff;font-size:1rem;cursor:pointer;">-</button>
                    <span x-text="qty" style="width:32px;text-align:center;font-weight:600;"></span>
                    <button x-on:click="qty++" style="width:32px;height:32px;border:1px solid #ccc;background:#fff;font-size:1rem;cursor:pointer;">+</button>
                </div>

                <button style="background:#FFC20E;color:#1a1a1a;font-weight:700;font-size:0.9rem;padding:0.7rem 1.5rem;border:none;cursor:pointer;letter-spacing:0.05em;width:100%;"
                        onmouseenter="this.style.background='#e6ae00'"
                        onmouseleave="this.style.background='#FFC20E'">
                    Add to cart
                </button>

                <a href="{{ $href }}" style="font-size:0.8rem;color:#2558A8;text-align:center;text-decoration:underline;">View full details</a>
            </div>
        </div>
    </div>
</div>
