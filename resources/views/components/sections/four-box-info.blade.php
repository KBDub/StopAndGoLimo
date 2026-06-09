@props([
    'items' => [
        [
            'type'     => 'text',
            'segments' => [
                ['text' => 'Call us today', 'bold' => true],
                ['text' => ' to take advantage of '],
                ['text' => 'great deals and special promotions', 'bold' => true],
                ['text' => ' across Morris and neighboring communities like Minooka, Joliet, Romeoville, Orland Park, Naperville and more!'],
            ],
        ],
        [
            'type'  => 'contact',
            'icon'  => 'phone',
            'label' => '+1 708-315-4445',
            'href'  => 'tel:+17083154445',
        ],
        [
            'type'  => 'contact',
            'icon'  => 'email',
            'label' => 'vincent@newlenoxlimoservice.com',
            'href'  => 'mailto:vincent@newlenoxlimoservice.com',
        ],
        [
            'type'     => 'text',
            'segments' => [
                ['text' => 'For '],
                ['text' => 'bookings & reservations', 'bold' => true],
                ['text' => ', as well as general inquiries, '],
                ['text' => 'email us today', 'bold' => true],
                ['text' => '!'],
            ],
        ],
    ],
])

<section style="background: var(--cloud-light);" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach($items as $item)

                @if($item['type'] === 'contact')

                    {{-- Contact box: icon + label, optionally linked --}}
                    <x-ui.rect-box as="div">
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 1.1rem; text-align: center; width: 100%;">

                            @if($item['icon'] === 'phone')
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     style="width: 2.75rem; flex-shrink: 0; fill: var(--champagne);">
                                    <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/>
                                </svg>
                            @elseif($item['icon'] === 'email')
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                     style="width: 2.75rem; flex-shrink: 0; fill: var(--champagne);">
                                    <path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"/>
                                </svg>
                            @endif

                            @if(!empty($item['href']))
                                <a href="{{ $item['href'] }}"
                                   class="font-body"
                                   style="font-size: 1.5625rem; font-weight: 400; color: var(--cloud-light); line-height: 1.3; text-decoration: none; transition: color 0.2s ease;"
                                   onmouseover="this.style.color='var(--champagne)'"
                                   onmouseout="this.style.color='var(--cloud-light)'">
                                    {{ $item['label'] }}
                                </a>
                            @else
                                <span class="font-body"
                                      style="font-size: 1.5625rem; font-weight: 400; color: var(--cloud-light); line-height: 1.3;">
                                    {{ $item['label'] }}
                                </span>
                            @endif

                        </div>
                    </x-ui.rect-box>

                @else

                    {{-- Text box: segmented copy with optional bold-champagne emphasis --}}
                    <x-ui.rect-box as="div">
                        <p class="font-body"
                           style="font-size: 1.0625rem; font-weight: 400; color: var(--cloud-light); line-height: 1.6; text-align: center; margin: 0;">
                            @foreach($item['segments'] as $seg)
                                @if(!empty($seg['bold']))
                                    <strong style="font-weight: 700; color: var(--champagne);">{{ $seg['text'] }}</strong>
                                @else
                                    {{ $seg['text'] }}
                                @endif
                            @endforeach
                        </p>
                    </x-ui.rect-box>

                @endif

            @endforeach
        </div>

    </div>
</section>
