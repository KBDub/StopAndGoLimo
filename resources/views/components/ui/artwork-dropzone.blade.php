@props([
    'id' => 'artwork-dropzone-' . uniqid(),
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
    {{ $attributes->merge(['class' => '']) }}
>
    {{-- Drop Zone --}}
    <div
        @click="handleClick()"
        :class="dragging
            ? 'border-error bg-error/5 border-dashed border-2'
            : 'border-linen-dark bg-linen-light border-dashed border-2 hover:border-sunburst hover:bg-sunburst/5'"
        class="flex flex-col items-center justify-center gap-3 px-8 py-10 cursor-pointer transition-colors duration-200"
    >
        {{-- Folder icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0 0 64 64" aria-hidden="true">
            <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                  fill="#4A90D9" opacity="0.85"/>
            <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z"
                  fill="#5BA8F0"/>
            <path d="M6 24h52v3H6z" fill="#3273DC" opacity="0.3"/>
        </svg>

        {{-- Primary text --}}
        <p class="text-charcoal text-base text-center leading-snug">
            Drop your artwork here or <strong class="font-bold">click to browse</strong>
        </p>

        {{-- Format list --}}
        <p class="text-charcoal-lighter text-sm text-center tracking-wide">
            PNG &mdash; JPG &mdash; PDF &mdash; SVG &mdash; AI &mdash; EPS
        </p>
    </div>

    {{-- Hidden file input --}}
    <input
        id="{{ $id }}-input"
        type="file"
        class="sr-only"
        accept=".png,.jpg,.jpeg,.pdf,.svg,.ai,.eps"
        @change="handleFileChange($event)"
    >

    {{-- Accepted formats footer --}}
    <div class="mt-2 flex items-start gap-2 text-sm text-charcoal-light">
        <span class="text-warning mt-px" aria-hidden="true">&#128161;</span>
        <span>
            Accepted: PNG, JPG, PDF, SVG, AI, EPS — high resolution preferred. Need help?
            Call <a href="tel:8153498600" class="text-azure hover:text-azure-dark font-semibold transition-colors">(815) 349-8600</a>.
        </span>
    </div>
</div>
