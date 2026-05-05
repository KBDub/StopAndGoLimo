{{--
 | Component : x-ui.dtf-confirm-modal
 | Location  : resources/views/components/ui/dtf-confirm-modal.blade.php
 |
 | Branded confirmation step shown before the DTF contact/wizard workflow.
 | Triggered by: window.dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'dtf-confirm' } }))
 | On Yes     : dispatches open-contact-modal with { dtf: true }
 | On No      : closes this modal
--}}
<x-ui.modal
    name="dtf-confirm"
    size="sm"
    variant="gold"
    :dismissible="true"
>
    <x-slot:icon>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="w-5 h-5" aria-hidden="true">
            <path d="M12 2L2 7l10 5 10-5-10-5Z"/>
            <path d="M2 17l10 5 10-5"/>
            <path d="M2 12l10 5 10-5"/>
        </svg>
    </x-slot:icon>

    <x-slot:title>Ready to Order?</x-slot:title>

    <div class="py-2 text-center">
        <p class="text-base font-semibold text-charcoal mb-1">Would you like to order some DTFs?</p>
        <p class="text-sm text-charcoal-light">We'll walk you through everything — sizes, quantities, and file upload.</p>
    </div>

    <x-slot:footer>
        <div class="flex w-full gap-3">
            {{-- No --}}
            <button
                type="button"
                class="flex-1 px-4 py-2.5 text-sm font-semibold text-charcoal-light bg-white border border-linen-dark hover:bg-linen hover:text-charcoal transition-colors duration-150 cursor-pointer"
                @click="
                    close();
                "
            >
                No, not right now
            </button>

            {{-- Yes --}}
            <button
                type="button"
                class="flex-1 px-4 py-2.5 text-sm font-bold text-charcoal bg-sunburst hover:bg-sunburst-dark transition-colors duration-150 cursor-pointer"
                @click="
                    close();
                    $nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal', { detail: { dtf: true } })));
                "
            >
                Yes, let's do it
            </button>
        </div>
    </x-slot:footer>
</x-ui.modal>
