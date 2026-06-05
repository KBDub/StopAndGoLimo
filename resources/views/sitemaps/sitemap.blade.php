@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- ═══════════════════════════════════════════════════════════════════════
         STOP AND GO LIMO — Main Sitemap
         Domain: www.newlenoxlimoservice.com
         Update lastmod dates when content changes on a given page.
    ══════════════════════════════════════════════════════════════════════════ --}}

    {{-- ─── Core Pages ───────────────────────────────────────────────────── --}}

    <url>
        <loc>https://www.newlenoxlimoservice.com/</loc>
        <lastmod>2026-06-05</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    {{-- ─── Service Areas — Index ────────────────────────────────────────── --}}

    <url>
        <loc>https://www.newlenoxlimoservice.com/service-areas</loc>
        <lastmod>2026-06-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    {{-- ─── Service Areas — City Pages (dynamic from PrimaryLocations) ──── --}}

    @foreach(\App\Data\PrimaryLocations::all() as $loc)
    @php
        $cityName = $loc['city'] ?? $loc['name'];
        $citySlug = \Illuminate\Support\Str::slug($cityName . '-' . $loc['state']);
        $isHq     = $cityName === 'New Lenox';
    @endphp
    <url>
        <loc>https://www.newlenoxlimoservice.com/service-areas/{{ $citySlug }}</loc>
        <lastmod>2026-06-05</lastmod>
        <changefreq>monthly</changefreq>
        <priority>{{ $isHq ? '0.9' : '0.6' }}</priority>
    </url>
    @endforeach

    {{-- ─── Products (dynamic from Lunar DB) ───────────────────────────── --}}

    @foreach($products as $product)
    <url>
        <loc>https://www.newlenoxlimoservice.com/products/{{ $product->slug }}</loc>
        <lastmod>{{ $product->updated_at->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach

    {{-- ─── Collections (dynamic from Lunar DB) ────────────────────────── --}}

    @foreach($collections as $collection)
    <url>
        <loc>https://www.newlenoxlimoservice.com/collections/{{ $collection->slug }}</loc>
        <lastmod>{{ $collection->updated_at->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>
    @endforeach

</urlset>
