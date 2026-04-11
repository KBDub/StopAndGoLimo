@props([
    'position'   => 'left',   {{-- 'left' = folder icon on left | 'right' = folder icon on right --}}
    'heading'    => 'Upload Your Artwork',
    'subheading' => 'Drop your design file and we\'ll handle the rest. Our team reviews every order before printing.',
    'id'         => 'banner-dtf-' . uniqid(),
])

<div
    x-data="{
        dragging: false,
        handleDrop(e) {
            this.dragging = false;
            const files = e.dataTransfer.files;
            if (files.length) {
                window.dispatchEvent(new CustomEvent('open-dtf-upload-wizard', { detail: { files } }));
            }
        },
        handleClick() {
            document.getElementById('{{ $id }}-input').click();
        },
        handleFileChange(e) {
            const files = e.target.files;
            if (files.length) {
                window.dispatchEvent(new CustomEvent('open-dtf-upload-wizard', { detail: { files } }));
            }
        }
    }"
    @dragover.prevent="dragging = true"
    @dragleave.prevent="dragging = false"
    @drop.prevent="handleDrop($event)"
    @click="handleClick()"
    :class="dragging
        ? 'border-error border-dashed border-2 bg-charcoal-dark'
        : 'border-sunburst/40 border-dashed border-2 bg-charcoal hover:border-sunburst hover:bg-charcoal-dark'"
    {{ $attributes->merge(['class' => 'cursor-pointer transition-colors duration-200']) }}
>
    <div class="max-w-7xl mx-auto px-6 py-10">
        @if($position === 'right')
        <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        @else
        <div class="flex flex-col md:flex-row items-center gap-8">
        @endif

            {{-- ── Folder Icon / Drop Visual ─────────────────────────────────── --}}
            <div class="flex-shrink-0 flex flex-col items-center gap-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                          fill="#4A90D9" opacity="0.85"/>
                    <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z"
                          fill="#5BA8F0"/>
                    <path d="M6 24h52v3H6z" fill="#3273DC" opacity="0.3"/>
                </svg>
                <p class="text-white text-sm leading-snug">
                    Drop your file here or <strong class="font-bold text-sunburst">click to browse</strong>
                </p>
                <p class="text-charcoal-lighter text-xs tracking-wide">
                    PDF &middot; AI &middot; EPS &middot; PNG &middot; JPG &middot; SVG &middot; PSD
                </p>
                <span class="text-xs text-charcoal-lighter">300 DPI minimum recommended</span>
            </div>

            {{-- ── Divider ───────────────────────────────────────────────────── --}}
            <div class="hidden md:block flex-shrink-0 w-px h-24 bg-sunburst/20"></div>
            <div class="md:hidden w-full h-px bg-sunburst/20"></div>

            {{-- ── Heading + Subheading ──────────────────────────────────────── --}}
            @if($position === 'right')
            <div class="flex-1">
                <div class="inline-block mb-4">
                    <h3 class="text-h3 font-bold text-white mb-2">{{ $heading }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-white/70 text-body-small max-w-4xl">
                    {{ $subheading }}
                </p>
                <div class="mt-5 flex items-center gap-2 text-sm text-white/50">
                    <span class="text-warning" aria-hidden="true">&#128161;</span>
                    <span>
                        Need help? Call
                        <a href="tel:8153498600"
                           @click.stop
                           class="text-azure-light hover:text-sunburst font-semibold transition-colors">(815) 349-8600</a>
                    </span>
                </div>
            </div>
            @else
            <div class="flex-1">
                <div class="inline-block mb-4">
                    <h3 class="text-h3 font-bold text-white mb-2">{{ $heading }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-white/70 text-body-small max-w-4xl">
                    {{ $subheading }}
                </p>
                <div class="mt-5 flex items-center gap-2 text-sm text-white/50">
                    <span class="text-warning" aria-hidden="true">&#128161;</span>
                    <span>
                        Need help? Call
                        <a href="tel:8153498600"
                           @click.stop
                           class="text-azure-light hover:text-sunburst font-semibold transition-colors">(815) 349-8600</a>
                    </span>
                </div>
            </div>
            @endif

        </div>
    </div>

    <input
        id="{{ $id }}-input"
        type="file"
        class="sr-only"
        accept=".pdf,.ai,.eps,.png,.jpg,.jpeg,.svg,.psd"
        @change="handleFileChange($event)"
    >
</div>
