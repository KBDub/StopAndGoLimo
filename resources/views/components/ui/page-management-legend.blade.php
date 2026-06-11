@props([
    'componentColorMap',
])

<div class="mt-12 bg-white shadow-sm border border-cloud p-6">
    <h2 class="text-lg font-bold text-navy mb-4 font-head">Color legend</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2">
        @foreach($componentColorMap as $comp => $color)
            @php
                $isLw       = Str::startsWith($comp, 'livewire:');
                $displayComp = $isLw ? Str::after($comp, 'livewire:') : $comp;

                if ($isLw) {
                    $shortLabel = Str::of($displayComp)->replace(['.', '-', '_'], ' ')->title();
                    $typePrefix = 'Livewire: ';
                } elseif (Str::startsWith($comp, 'sections.')) {
                    $shortLabel = Str::of(Str::after($comp, 'sections.'))->replace(['-', '_'], ' ')->title();
                    $typePrefix = '';
                } elseif (Str::startsWith($comp, 'layout.')) {
                    $shortLabel = Str::of(Str::after($comp, 'layout.'))->replace(['-', '_'], ' ')->title();
                    $typePrefix = '';
                } elseif (Str::startsWith($comp, 'ui.')) {
                    $shortLabel = Str::of(Str::after($comp, 'ui.'))->replace(['-', '_'], ' ')->title();
                    $typePrefix = '';
                } else {
                    $shortLabel = Str::of($comp)->replace(['-', '_'], ' ')->title();
                    $typePrefix = '';
                }
            @endphp
            <div class="flex items-center gap-2 px-2 py-1 rounded text-xs {{ $color['bg'] }} {{ $color['text'] }} border {{ $color['border'] }}">
                <span class="w-2 h-2 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                <span class="truncate">{{ $typePrefix }}{{ $shortLabel }}</span>
            </div>
        @endforeach
    </div>
</div>
