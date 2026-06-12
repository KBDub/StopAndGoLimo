@props([
    'comp',
    'pages',
    'color',
    'label',
    'typeLabel',
    'displayComp',
    'isLivewire',
    'usageCount',
    'compId',
    'propVariants' => [],
])

@php
    $copyKey    = $isLivewire ? 'livewire:' . $displayComp : $comp;
    $copyKeyJs  = addslashes($copyKey);
    // Anchor suffix — only sections get a stable #id; layouts/ui/nav fall back to top of page
    $anchorSuffix = Str::startsWith($comp, 'sections.') ? '#' . Str::after($comp, '.') : '';
@endphp

<div
    id="{{ $compId }}"
    x-data="{ expanded: false }"
    @pm-expand.stop="expanded = true"
    class="overflow-hidden transition-all duration-300 border"
    style="background: var(--navy-dark); border-color: rgba(255,255,255,0.09);"
>
    {{-- Header row: toggle (flex-1) + copy button (sibling, never nested) --}}
    <div class="group/row flex items-stretch"
         onmouseenter="this.style.background='rgba(255,255,255,0.03)'"
         onmouseleave="this.style.background='transparent'">

        {{-- Expand toggle --}}
        <button
            @click="expanded = !expanded"
            class="flex-1 text-left px-4 py-4 transition-colors group/header"
            style="background: transparent;"
        >
            <div class="flex items-center gap-3">
                <svg
                    class="w-4 h-4 transition-transform shrink-0"
                    :class="{ 'rotate-90': expanded }"
                    style="color: var(--slate);"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
                <span class="w-2.5 h-2.5 rounded-full shrink-0 {{ $color['dot'] }}"></span>
                <div class="flex-1 min-w-0">
                    <div class="flex items-baseline gap-2">
                        <span class="font-head font-bold text-sm truncate" style="color: var(--cloud-light);">{{ $label }}</span>
                        <span class="font-mono text-xs shrink-0" style="color: var(--slate);">{{ $typeLabel }}</span>
                    </div>
                    <p class="font-mono text-xs truncate mt-0.5" style="color: var(--slate);">{{ $copyKey }}</p>
                </div>
                <span class="shrink-0 inline-flex items-center px-2.5 py-1 font-head font-bold text-sm"
                      style="background: var(--champagne); color: var(--navy);">
                    {{ $usageCount }}
                </span>
            </div>
        </button>

        {{-- Copy button — sibling, not nested inside toggle button --}}
        <button
            title="Copy component name"
            class="shrink-0 px-3 self-stretch flex items-center transition-all opacity-40 group-hover/row:opacity-100"
            style="color: var(--cloud);"
            onclick="var b=this, ci=b.querySelector('.rc-ci'), ck=b.querySelector('.rc-ck');
                     navigator.clipboard.writeText('{{ $copyKeyJs }}');
                     ci.style.display='none'; ck.style.display='block'; b.style.color='var(--champagne)'; b.style.opacity='1';
                     setTimeout(function(){ ci.style.display='block'; ck.style.display='none'; b.style.color='var(--cloud)'; b.style.opacity=''; }, 1500);"
        >
            <svg class="rc-ci w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
            </svg>
            <svg class="rc-ck w-3.5 h-3.5" style="display:none;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
        </button>

    </div>

    <div x-show="expanded" x-cloak x-transition
         class="border-t p-4"
         style="border-color: rgba(255,255,255,0.07); background: var(--navy);">

        {{-- Pages list --}}
        <h4 class="font-head text-xs font-semibold mb-2" style="color: var(--slate);">
            Used on {{ $usageCount }} {{ \Illuminate\Support\Str::plural('page', $usageCount) }}
        </h4>
        <div class="space-y-1.5">
            @foreach($pages as $p)
                @php
                    $targetId  = 'page-' . ltrim(str_replace('/', '-', $p['url']), '-');
                    if ($targetId === 'page-') { $targetId = 'page-home'; }
                    $urlParts  = explode('/', trim($p['url'], '/'));
                    $groupSlug = $urlParts[0] ?: 'home';
                @endphp
                <div class="flex items-center justify-between gap-2 text-sm">
                    <a
                        href="#{{ $targetId }}"
                        data-preview="{{ $p['url'] }}{{ $anchorSuffix }}"
                        @click.prevent="window.dispatchEvent(new CustomEvent('pm-open-page', { detail: { groupSlug: '{{ $groupSlug }}', targetId: '{{ $targetId }}' } }))"
                        class="font-head font-medium truncate transition-colors"
                        style="color: var(--cloud-light);"
                        onmouseenter="this.style.color='var(--champagne)'"
                        onmouseleave="this.style.color='var(--cloud-light)'"
                    >{{ $p['name'] }}</a>
                    <span class="font-mono text-xs shrink-0" style="color: var(--slate);">{{ $p['url'] }}</span>
                </div>
            @endforeach
        </div>

        {{-- Prop variants across pages --}}
        @if(!empty($propVariants))
            <div class="mt-4 pt-4 border-t" style="border-color: rgba(255,255,255,0.07);">
                <h4 class="font-head text-xs font-semibold mb-3" style="color: var(--slate);">
                    Prop variants across pages
                </h4>
                <div class="space-y-2.5">
                    @foreach($propVariants as $propName => $info)
                        @php
                            $distinctValues = $info['values'];
                            $defaultVal     = $info['default'];
                            $showMax        = 3;
                            $visible        = array_slice($distinctValues, 0, $showMax);
                            $hiddenVals     = array_slice($distinctValues, $showMax);
                            $hiddenCount    = count($hiddenVals);
                            $hiddenJson     = htmlspecialchars(json_encode(array_values($hiddenVals)), ENT_QUOTES);
                        @endphp
                        <div>
                            <div class="flex items-baseline gap-2 mb-1">
                                <span class="font-mono text-[11px] font-semibold" style="color: var(--champagne);">{{ $propName }}</span>
                                @if($defaultVal !== null)
                                    <span class="font-mono text-[10px]" style="color: var(--slate);">
                                        default: &quot;{{ \Illuminate\Support\Str::limit($defaultVal, 35) }}&quot;
                                    </span>
                                @endif
                                <span class="font-mono text-[10px] ml-auto" style="color: var(--slate);">
                                    {{ count($distinctValues) }} {{ count($distinctValues) === 1 ? 'variant' : 'variants' }}
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                @foreach($visible as $val)
                                    <span class="inline-flex items-center px-1.5 py-0.5 font-mono text-[10px] border"
                                          style="background: color-mix(in srgb, var(--azure) 8%, transparent); color: var(--cloud-light); border-color: rgba(255,255,255,0.1);"
                                          title="{{ $val }}">
                                        {{ \Illuminate\Support\Str::limit($val, 40) }}
                                    </span>
                                @endforeach
                                @if($hiddenCount > 0)
                                    <button
                                        data-hidden="{{ $hiddenJson }}"
                                        class="pv-more inline-flex items-center px-1.5 py-0.5 font-mono text-[10px] border transition-colors"
                                        style="color: var(--slate); border-color: rgba(255,255,255,0.1);"
                                        onclick="(function(btn){
                                            var wrap = btn.nextElementSibling;
                                            var open = wrap.style.display === 'flex';
                                            if (!open) {
                                                var vals = JSON.parse(btn.dataset.hidden);
                                                wrap.innerHTML = '';
                                                vals.forEach(function(v){
                                                    var s = document.createElement('span');
                                                    s.style.cssText = 'display:inline-flex;align-items:center;padding:1px 6px;font-family:monospace;font-size:10px;border:1px solid rgba(255,255,255,0.1);background:color-mix(in srgb,var(--azure) 8%,transparent);color:var(--cloud-light)';
                                                    s.title = v;
                                                    s.textContent = v.length > 40 ? v.substring(0,40)+'…' : v;
                                                    wrap.appendChild(s);
                                                });
                                                wrap.style.display = 'flex';
                                                btn.textContent = 'less';
                                            } else {
                                                wrap.style.display = 'none';
                                                btn.textContent = '+{{ $hiddenCount }} more';
                                            }
                                        })(this)"
                                    >+{{ $hiddenCount }} more</button>
                                    <div class="pv-extra flex-wrap gap-1 w-full mt-1" style="display:none;"></div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
