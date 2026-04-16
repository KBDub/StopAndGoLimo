<x-filament-panels::page>
    <div class="space-y-4">
        <div class="fi-section rounded-xl bg-white px-6 py-5 shadow-sm ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10">
            <h2 class="text-base font-semibold text-gray-950 dark:text-white">Global CSS Override Patches</h2>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                CSS added here is injected into every active storefront on the next page load. Use to push bug fixes or style corrections to all 100+ stores simultaneously without a redeploy.
            </p>
        </div>

        {{ $this->table }}
    </div>
</x-filament-panels::page>
