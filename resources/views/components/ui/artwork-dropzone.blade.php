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
    <div
        @click="handleClick()"
        :class="dragging
            ? 'border-error bg-error/5 border-dashed border-2'
            : 'border-cloud bg-cloud border-dashed border-2 hover:border-champagne hover:bg-champagne/5'"
        class="flex flex-col items-center justify-center gap-3 px-8 py-10 mt-6 cursor-pointer transition-colors duration-200"
    >
        <p class="text-lg font-bold text-navy text-center leading-snug font-head">
            Have a document or artwork to share?
        </p>

        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0 0 64 64" aria-hidden="true">
            <path d="M6 14a4 4 0 0 1 4-4h14l6 6h24a4 4 0 0 1 4 4v26a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V14z"
                  fill="var(--azure)" opacity="0.85"/>
            <path d="M6 24h52v20a4 4 0 0 1-4 4H10a4 4 0 0 1-4-4V24z"
                  fill="var(--azure)" opacity="0.65"/>
            <path d="M6 24h52v3H6z" fill="var(--navy)" opacity="0.3"/>
        </svg>

        <p class="text-sm text-slate text-center">
            Drop your file here or <strong class="font-bold text-champagne">click to browse</strong>
        </p>
        <p class="text-xs text-slate/70 tracking-wide">PNG &bull; JPG &bull; PDF &bull; SVG &bull; AI &bull; EPS</p>
        <span class="text-xs text-slate/60">High resolution preferred</span>
    </div>

    <input
        id="{{ $id }}-input"
        type="file"
        class="sr-only"
        accept=".png,.jpg,.jpeg,.pdf,.svg,.ai,.eps"
        @change="handleFileChange($event)"
    >
</div>
