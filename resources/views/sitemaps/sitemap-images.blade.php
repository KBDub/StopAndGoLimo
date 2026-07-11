@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
>

    {{-- ═══════════════════════════════════════════════════════════════════════
         STOP AND GO LIMO — Image Sitemap
         Domain: www.newlenoxlimoservice.com
         Add entries here as real Stop & Go Airport Shuttle Service, Inc. images are added to the project.
         Source of truth: docs/image-video-control.md
    ══════════════════════════════════════════════════════════════════════════ --}}

    {{-- ─── Home ─────────────────────────────────────────────────────────── --}}

    <url>
        <loc>https://www.newlenoxlimoservice.com/</loc>
        <image:image>
            <image:loc>https://www.newlenoxlimoservice.com/images/og-tags/stopandgo-og-home.jpg</image:loc>
            <image:title>Airport Transfers in New Lenox, IL — Stop & Go Airport Shuttle Service, Inc.</image:title>
            <image:caption>Professional airport transfers to O'Hare and Midway from New Lenox and Chicagoland. Serving since 2015.</image:caption>
        </image:image>
    </url>

    {{-- ─── Service Areas ────────────────────────────────────────────────── --}}

    <url>
        <loc>https://www.newlenoxlimoservice.com/service-areas</loc>
        <image:image>
            <image:loc>https://www.newlenoxlimoservice.com/images/limo/stopandgo-fleet-new-lenox.jpg</image:loc>
            <image:title>Stop & Go Airport Shuttle Service, Inc. — Service Areas in Chicagoland</image:title>
            <image:caption>Stop & Go Airport Shuttle Service, Inc. serves New Lenox, Joliet, Plainfield, Romeoville, Naperville, and communities across Will and DuPage County.</image:caption>
        </image:image>
    </url>

    {{-- ─── Products (dynamic from Lunar DB) ───────────────────────────── --}}

    @foreach($products ?? [] as $product)
    {{-- Add product image entries here once Stop & Go Airport Shuttle Service, Inc. product images are uploaded --}}
    @endforeach

</urlset>
