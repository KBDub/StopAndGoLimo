<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Management - Top 5 Percent</title>
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-linen text-charcoal">

    <header class="sticky top-0 z-50">
        <x-layout.top-notification-bar message="Page Management Dashboard" />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
        <x-layout.navigation-bar currentPage="page-management" />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
    </header>

    <main class="py-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-charcoal mb-2">Page Management</h1>
                <p class="text-charcoal-light">
                    Overview of all pages, grouped by top-level menu item. Expand each card to see sections and shared components.
                </p>
            </div>

            @php
                $totalPages = 0;
                $totalComponents = 0;
                foreach ($groups as $group) {
                    $totalPages += count($group['pages']);
                    foreach ($group['pages'] as $page) {
                        $totalComponents += $page['total_count'];
                    }
                }
            @endphp
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Total Groups</p>
                    <p class="text-2xl font-bold text-charcoal">{{ count($groups) }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Total Pages</p>
                    <p class="text-2xl font-bold text-sunburst">{{ $totalPages }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Component Usages</p>
                    <p class="text-2xl font-bold text-azure">{{ $totalComponents }}</p>
                </div>
                <div class="bg-white rounded-lg p-5 shadow-sm border border-linen-dark/20">
                    <p class="text-sm text-charcoal-light mb-1">Section Components</p>
                    <p class="text-2xl font-bold text-charcoal">
                        {{ count(glob(resource_path('views/components/sections/*.blade.php'))) }}
                    </p>
                </div>
            </div>

            @foreach($groups as $groupName => $group)
                <div class="mb-8">
                    <h2 class="text-xl font-bold text-charcoal mb-4 flex items-center gap-2">
                        <span class="w-3 h-3 bg-sunburst rounded-full"></span>
                        {{ $groupName }}
                        <span class="text-sm font-normal text-charcoal-light">({{ count($group['pages']) }} {{ Str::plural('page', count($group['pages'])) }})</span>
                    </h2>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($group['pages'] as $page)
                            <div
                                x-data="{ expanded: false }"
                                class="bg-white rounded-lg shadow-sm border border-linen-dark/20 overflow-hidden"
                            >
                                <button
                                    @click="expanded = !expanded"
                                    class="w-full text-left p-5 hover:bg-linen-light/50 transition-colors"
                                >
                                    <div class="flex items-start justify-between gap-2">
                                        <div class="min-w-0 flex-1">
                                            <div class="flex items-center gap-2 mb-1">
                                                <svg
                                                    class="w-4 h-4 text-charcoal-light transition-transform shrink-0"
                                                    :class="{ 'rotate-90': expanded }"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                >
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>
                                                <h3 class="font-bold text-charcoal truncate">{{ $page['name'] }}</h3>
                                            </div>
                                            <p class="text-xs text-charcoal-light ml-6 break-all">{{ $page['url'] }}</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2 mt-3 ml-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-sunburst/20 text-charcoal">
                                            {{ $page['shared_count'] }} shared
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-azure/10 text-azure-dark">
                                            {{ $page['unique_count'] }} unique
                                        </span>
                                    </div>
                                </button>

                                <div x-show="expanded" x-cloak x-transition class="border-t border-linen-dark/20 p-5">
                                    @if(count($page['layout']) > 0)
                                        <h4 class="text-xs font-semibold text-charcoal-light mb-2">Layout Components</h4>
                                        <div class="space-y-1.5 mb-4">
                                            @foreach($page['layout'] as $component)
                                                <div class="flex items-center gap-2 px-3 py-1.5 rounded text-sm
                                                    {{ in_array($component, $page['shared_components']) ? 'bg-purple-50 text-purple-700 border border-purple-200' : 'bg-linen text-charcoal border border-linen-dark/30' }}
                                                ">
                                                    <svg class="w-3.5 h-3.5 shrink-0 {{ in_array($component, $page['shared_components']) ? 'text-purple-400' : 'text-charcoal-light' }}" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                                    </svg>
                                                    <span class="font-medium">{{ Str::after($component, 'layout.') }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(count($page['sections']) > 0)
                                        <h4 class="text-xs font-semibold text-charcoal-light mb-2">Section Components</h4>
                                        <div class="space-y-1.5 mb-4">
                                            @foreach($page['sections'] as $component)
                                                @php
                                                    $isShared = in_array($component, $page['shared_components']);
                                                    $isCta = Str::contains($component, 'cta-');
                                                    if ($isCta) {
                                                        $bgClass = 'bg-red-50 text-red-700 border border-red-200';
                                                        $iconClass = 'text-red-400';
                                                    } elseif ($isShared) {
                                                        $bgClass = 'bg-yellow-50 text-yellow-700 border border-yellow-200';
                                                        $iconClass = 'text-yellow-400';
                                                    } else {
                                                        $bgClass = 'bg-blue-50 text-blue-700 border border-blue-200';
                                                        $iconClass = 'text-blue-400';
                                                    }
                                                @endphp
                                                <div class="flex items-center gap-2 px-3 py-1.5 rounded text-sm {{ $bgClass }}">
                                                    <svg class="w-3.5 h-3.5 shrink-0 {{ $iconClass }}" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                                    </svg>
                                                    <span class="font-medium">{{ Str::of(Str::after($component, 'sections.'))->replace(['-', '_'], ' ')->title() }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(count($page['ui']) > 0)
                                        <h4 class="text-xs font-semibold text-charcoal-light mb-2">UI Components</h4>
                                        <div class="space-y-1.5">
                                            @foreach($page['ui'] as $component)
                                                @php
                                                    $isShared = in_array($component, $page['shared_components']);
                                                    if (Str::contains($component, 'banner-')) {
                                                        $bgClass = 'bg-orange-50 text-orange-700 border border-orange-200';
                                                        $iconClass = 'text-orange-400';
                                                    } elseif (Str::contains($component, 'button-')) {
                                                        $bgClass = 'bg-green-50 text-green-700 border border-green-200';
                                                        $iconClass = 'text-green-400';
                                                    } elseif (Str::contains($component, 'card-')) {
                                                        $bgClass = 'bg-pink-50 text-pink-700 border border-pink-200';
                                                        $iconClass = 'text-pink-400';
                                                    } elseif (Str::contains($component, 'badge-')) {
                                                        $bgClass = 'bg-indigo-50 text-indigo-700 border border-indigo-200';
                                                        $iconClass = 'text-indigo-400';
                                                    } else {
                                                        $bgClass = 'bg-gray-50 text-gray-700 border border-gray-200';
                                                        $iconClass = 'text-gray-400';
                                                    }
                                                @endphp
                                                <div class="flex items-center gap-2 px-3 py-1.5 rounded text-sm {{ $bgClass }}">
                                                    <svg class="w-3.5 h-3.5 shrink-0 {{ $iconClass }}" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                                    </svg>
                                                    <span class="font-medium">{{ Str::of(Str::after($component, 'ui.'))->replace(['-', '_'], ' ')->title() }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(count($page['all_components']) === 0)
                                        <p class="text-sm text-charcoal-light italic">No components found. Page may not be created yet.</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-layout.footer />
</body>
</html>
