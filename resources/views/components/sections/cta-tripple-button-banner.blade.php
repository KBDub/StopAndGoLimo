<section
    x-data="{
        openDtfPicker() {
            document.getElementById('cta-banner-dtf-input').click();
        },
        handleDtfFile(e) {
            const file = e.target.files[0];
            if (file) {
                window.dispatchEvent(new CustomEvent('open-contact-modal', { detail: { dtf: true, fileName: file.name } }));
            }
            e.target.value = '';
        }
    }"
    class="py-10 bg-warm-gradient border-t border-b border-sunburst/30"
>
    <div class="max-w-7xl mx-auto px-6">
        <h3 class="text-center text-lg font-bold text-charcoal mb-6">Ready to Get Started?</h3>
        <div class="max-w-2xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <x-ui.button-blue-white
                onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                class="px-6 py-3 text-sm whitespace-nowrap w-44"
            >
                Get a Free Quote
            </x-ui.button-blue-white>

            <x-ui.button-charcoal-gold
                x-on:click="openDtfPicker()"
                class="px-6 py-3 text-sm whitespace-nowrap w-44"
            >
                Upload DTF File
            </x-ui.button-charcoal-gold>

            <x-ui.button-map-directions class="px-6 py-3 text-sm whitespace-nowrap w-44">
                Get Directions
            </x-ui.button-map-directions>
        </div>
    </div>

    <input
        id="cta-banner-dtf-input"
        type="file"
        class="sr-only"
        accept=".pdf,.ai,.eps,.png,.jpg,.jpeg,.svg,.psd"
        @change="handleDtfFile($event)"
    >
</section>
