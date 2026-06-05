@props([
    'position'   => 'left',
    'heading'    => 'Attach Your Document',
    'subheading' => 'Drop your file and we\'ll review it before confirming your booking. Our team will follow up to finalize your reservation.',
    'id'         => 'banner-artwork-' . uniqid(),
])

<div
    x-data="{
        dragging: false,
        handleDrop(e) {
            this.dragging = false;
            const files = e.dataTransfer.files;
            if (files.length) {
                window.dispatchEvent(new CustomEvent('open-contact-modal', { detail: { artwork: true, fileName: files[0].name } }));
            }
        },
        handleClick() {
            document.getElementById('{{ $id }}-input').click();
        },
        handleFileChange(e) {
            const files = e.target.files;
            if (files.length) {
                window.dispatchEvent(new CustomEvent('open-contact-modal', { detail: { artwork: true, fileName: files[0].name } }));
            }
        }
    }"
    @dragover.prevent="dragging = true"
    @dragleave.prevent="dragging = false"
    @drop.prevent="handleDrop($event)"
    @click="handleClick()"
    :class="dragging
        ? 'border-error border-dashed border-2 bg-navy-dark'
        : 'border-champagne/40 border-dashed border-2 bg-navy hover:border-champagne hover:bg-navy-dark'"
    {{ $attributes->merge(['class' => 'cursor-pointer transition-colors duration-200']) }}
>
    <div class="max-w-7xl mx-auto px-6 py-10">
        @if($position === 'right')
        <div class="flex flex-col md:flex-row-reverse items-center gap-8">
        @else
        <div class="flex flex-col md:flex-row items-center gap-8">
        @endif

            <div class="flex-shrink-0 flex flex-col items-center gap-3 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                          fill="var(--azure)" opacity="0.85"/>
                    <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z"
                          fill="var(--azure)" opacity="0.65"/>
                    <path d="M6 24h52v3H6z" fill="var(--navy)" opacity="0.3"/>
                </svg>
                <p class="text-white text-sm leading-snug">
                    Drop your file here or <strong class="font-bold text-champagne">click to browse</strong>
                </p>
                <p class="text-white/50 text-xs tracking-wide">
                    PNG &bull; JPG &bull; PDF &bull; SVG &bull; AI &bull; EPS
                </p>
                <span class="text-xs text-white/40">High resolution preferred</span>
            </div>

            <div class="hidden md:block flex-shrink-0 w-px h-24 bg-champagne/20"></div>
            <div class="md:hidden w-full h-px bg-champagne/20"></div>

            <div class="flex-1 text-center">
                <div class="inline-block mb-4">
                    <h3 class="text-h3 font-bold text-white mb-2 font-head">{{ $heading }}</h3>
                    <div class="h-1 bg-champagne"></div>
                </div>
                <p class="text-white/70 text-body-small max-w-4xl mx-auto">
                    {{ $subheading }}
                </p>
                <div class="mt-5 flex items-center justify-center gap-2 text-sm text-white/50">
                    <span aria-hidden="true">&#9990;</span>
                    <span>
                        Need help? Call
                        <a href="tel:+18155856922"
                           @click.stop
                           class="text-azure hover:text-champagne font-semibold transition-colors">(815) 585-6922</a>
                    </span>
                </div>
            </div>

        </div>
    </div>

    <input
        id="{{ $id }}-input"
        type="file"
        class="sr-only"
        accept=".png,.jpg,.jpeg,.pdf,.svg,.ai,.eps"
        @change="handleFileChange($event)"
    >
</div>
