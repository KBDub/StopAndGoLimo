{{--
 | Component  : x-ui.modal-wizard
 | Location   : resources/views/components/ui/modal-wizard.blade.php
 | Stack      : Laravel + Alpine.js (Livewire 3 bundles Alpine)
 |
 | Multi-step wizard modal. Non-dismissible by default, the user must
 | complete or explicitly cancel the flow. Steps are driven by named
 | slots (step1, step2, step3). Dot indicators and Back/Next/Finish
 | navigation are rendered automatically.
 |
 | ── PROPS ──────────────────────────────────────────────────────────────────
 |   name         required, unique ID used for open/close events
 |   size         sm | md | lg | xl | full  (default md)
 |   steps        total step count  (default 3)
 |   step1Title   header title for step 1
 |   step2Title   header title for step 2
 |   step3Title   header title for step 3
 |   finishLabel  label for the last-step finish button  (default 'Finish')
 |   cancelLabel  label for cancel link shown on step 1  (default '')
 |
 | ── SLOTS ───────────────────────────────────────────────────────────────────
 |   step1        body content for step 1  (required)
 |   step2        body content for step 2  (required)
 |   step3        body content for step 3  (optional for 2-step wizards)
 |
 | ── EVENT API ───────────────────────────────────────────────────────────────
 |   open-modal   { name: 'my-wizard' } , opens at step 1
 |   close-modal  { name: 'my-wizard' } , closes and resets
 |   wizard-done  { name: 'my-wizard' } , dispatched when Finish is clicked
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-trigger modal="my-wizard">Start</x-ui.modal-trigger>
 |
 |   <x-ui.modal-wizard
 |       name="my-wizard"
 |       step1Title="Welcome"
 |       step2Title="Choose"
 |       step3Title="Done"
 |   >
 |       <x-slot:step1>…step 1 content…</x-slot:step1>
 |       <x-slot:step2>…step 2 content…</x-slot:step2>
 |       <x-slot:step3>…step 3 content…</x-slot:step3>
 |   </x-ui.modal-wizard>
--}}

@props([
    'name'        => null,
    'size'        => 'md',
    'steps'       => 3,
    'step1Title'  => 'Step 1',
    'step2Title'  => 'Step 2',
    'step3Title'  => 'Step 3',
    'finishLabel' => 'Finish',
    'cancelLabel' => '',
])

@php
    $maxWidth   = match($size) {
        'sm'    => '22rem',
        'lg'    => '46rem',
        'xl'    => '58rem',
        'full'  => '95vw',
        default => '34rem',
    };
    $totalSteps = (int) $steps;
    $hasStep3   = isset($step3) && $step3 instanceof \Illuminate\View\ComponentSlot && !$step3->isEmpty();
    $wizId      = 't5wiz_' . preg_replace('/[^a-z0-9_]/i', '_', $name ?? uniqid());
@endphp

<div
    x-data="{
        isOpen:     false,
        step:       1,
        totalSteps: {{ $totalSteps }},
        modalName:  '{{ $name }}',

        open() {
            this.isOpen = true;
            this.step   = 1;
            document.body.style.overflow = 'hidden';
        },
        close() {
            this.isOpen = false;
            this.step   = 1;
            document.body.style.overflow = '';
            this.$dispatch('modal-closed', { name: this.modalName });
        },
        next() { if (this.step < this.totalSteps) this.step++; },
        prev() { if (this.step > 1) this.step--; },
        finish() {
            this.$dispatch('wizard-done', { name: this.modalName });
            this.close();
        },
    }"
    @open-modal.window="if ($event.detail.name === modalName) open()"
    @close-modal.window="if ($event.detail.name === modalName) close()"
>
    {{-- Backdrop --}}
    <div
        x-show="isOpen"
        x-cloak
        class="fixed inset-0 z-[9800] flex items-center justify-center p-4 bg-charcoal-dark/80 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="{{ $wizId }}_title"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        {{-- Panel --}}
        <div
            class="relative w-full flex flex-col bg-white shadow-2xl overflow-hidden"
            style="max-width:{{ $maxWidth }};max-height:92dvh;"
            x-transition:enter="transition ease-out duration-220"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.stop
        >
            {{-- Gold accent stripe --}}
            <div class="h-2 flex-shrink-0 bg-gold-gradient-horizontal" aria-hidden="true"></div>

            {{-- Header, title swaps per step --}}
            <div class="flex items-center gap-3 px-5 py-4 flex-shrink-0 border-b-2 bg-linen border-sunburst">
                <h2 id="{{ $wizId }}_title" class="flex-1 min-w-0 text-lg font-bold text-charcoal leading-tight">
                    <span x-show="step === 1">{{ $step1Title }}</span>
                    <span x-show="step === 2" x-cloak>{{ $step2Title }}</span>
                    @if($totalSteps >= 3)
                        <span x-show="step === 3" x-cloak>{{ $step3Title }}</span>
                    @endif
                </h2>
            </div>

            {{-- Body --}}
            <div class="flex-1 px-5 py-5 text-[0.9375rem] leading-relaxed text-charcoal overflow-y-auto overscroll-contain">
                <div x-show="step === 1">{{ $step1 ?? '' }}</div>
                <div x-show="step === 2" x-cloak>{{ $step2 ?? '' }}</div>
                @if($totalSteps >= 3 && $hasStep3)
                    <div x-show="step === 3" x-cloak>{{ $step3 }}</div>
                @endif
            </div>

            {{-- Step dot indicators --}}
            <div class="flex items-center justify-center gap-2 py-3" aria-hidden="true">
                @for($i = 1; $i <= $totalSteps; $i++)
                    <div
                        class="w-2.5 h-2.5 rounded-full transition-colors duration-200"
                        :class="step >= {{ $i }} ? 'bg-sunburst' : 'bg-linen-dark'"
                    ></div>
                @endfor
            </div>

            {{-- Footer navigation --}}
            <div class="flex items-center gap-2.5 px-5 py-3.5 flex-shrink-0 border-t bg-linen-light border-linen-dark">

                {{-- Optional cancel on step 1 --}}
                @if($cancelLabel)
                    <button
                        type="button"
                        x-show="step === 1"
                        @click="close()"
                        class="text-sm font-semibold text-charcoal-light hover:text-charcoal transition-colors mr-auto"
                    >
                        {{ $cancelLabel }}
                    </button>
                @endif

                <div class="flex items-center gap-2.5 ml-auto">

                    {{-- Back --}}
                    <button
                        type="button"
                        x-show="step > 1"
                        x-cloak
                        @click="prev()"
                        class="px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors"
                    >← Back</button>

                    {{-- Next --}}
                    <x-ui.button-modal-primary
                        x-show="step < totalSteps"
                        @click="next()"
                    >Next →</x-ui.button-modal-primary>

                    {{-- Finish --}}
                    <x-ui.button-modal-primary
                        x-show="step === totalSteps"
                        x-cloak
                        @click="finish()"
                    >{{ $finishLabel }}</x-ui.button-modal-primary>

                </div>
            </div>

        </div>{{-- /panel --}}
    </div>{{-- /backdrop --}}
</div>
