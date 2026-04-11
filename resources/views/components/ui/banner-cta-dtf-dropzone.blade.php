@props([
    'position'   => 'left',   {{-- 'left' = dropzone on left | 'right' = dropzone on right --}}
    'heading'    => 'Upload Your Artwork',
    'subheading' => 'Drop your design file and we\'ll handle the rest. Our team reviews every order before printing.',
    'id'         => 'banner-dtf-' . uniqid(),
])

<div {{ $attributes->merge(['class' => 'bg-charcoal']) }}>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex flex-col md:flex-row items-center gap-8 {{ $position === 'right' ? 'md:flex-row-reverse' : '' }}">

            {{-- ── Compact Drop Zone (acts as the CTA) ──────────────────────── --}}
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
                class="flex-shrink-0 w-full md:w-72"
            >
                <div
                    @click="handleClick()"
                    :class="dragging
                        ? 'border-error bg-error/10 border-dashed border-2'
                        : 'border-sunburst/60 bg-white/5 border-dashed border-2 hover:border-sunburst hover:bg-sunburst/10'"
                    class="flex flex-col items-center justify-center gap-3 px-6 py-8 cursor-pointer transition-colors duration-200"
                >
                    {{-- Folder icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" viewBox="0 0 64 64" aria-hidden="true">
                        <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                              fill="#4A90D9" opacity="0.85"/>
                        <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z"
                              fill="#5BA8F0"/>
                        <path d="M6 24h52v3H6z" fill="#3273DC" opacity="0.3"/>
                    </svg>

                    <p class="text-white text-sm text-center leading-snug">
                        Drop your file here or <strong class="font-bold text-sunburst">click to browse</strong>
                    </p>

                    <p class="text-charcoal-lighter text-xs text-center tracking-wide">
                        PDF &middot; AI &middot; EPS &middot; PNG &middot; JPG &middot; SVG &middot; PSD
                    </p>

                    <span class="mt-1 text-xs text-charcoal-lighter">300 DPI minimum recommended</span>
                </div>

                <input
                    id="{{ $id }}-input"
                    type="file"
                    class="sr-only"
                    accept=".pdf,.ai,.eps,.png,.jpg,.jpeg,.svg,.psd"
                    @change="handleFileChange($event)"
                >
            </div>

            {{-- ── Text Content ─────────────────────────────────────────────── --}}
            <div class="flex-1 {{ $position === 'right' ? 'md:text-right' : '' }}">
                <div class="inline-block mb-4">
                    <h3 class="text-h3 font-bold text-white mb-2">{{ $heading }}</h3>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-white/70 text-body-small max-w-4xl {{ $position === 'right' ? 'md:ml-auto' : '' }}">
                    {{ $subheading }}
                </p>
                <div class="mt-6 flex items-center gap-2 text-sm text-white/50 {{ $position === 'right' ? 'md:justify-end' : '' }}">
                    <span class="text-warning" aria-hidden="true">&#128161;</span>
                    <span>
                        Need help? Call
                        <a href="tel:6307796328" class="text-azure-light hover:text-sunburst font-semibold transition-colors">(630) 779-6328</a>
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
