<x-filament-panels::page>
    <div class="space-y-6">
        <div class="fi-section rounded-xl bg-white px-6 py-5 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10">
            <h2 class="text-base font-semibold text-gray-950 dark:text-white">Bulk Inventory Update</h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Mark a product variant out of stock (or restore it) across every store channel that carries it — in one action. The update is processed in the background queue.
            </p>
        </div>

        <x-filament-panels::form wire:submit="apply">
            {{ $this->form }}

            <div class="mt-6 flex gap-3">
                @foreach($this->getFormActions() as $action)
                    {{ $action }}
                @endforeach
            </div>
        </x-filament-panels::form>
    </div>
</x-filament-panels::page>
