# JSON-LD, Meta Tag & Analytics Management
## Top 5 Percent, LLC — top5pct.com

---

## Table of Contents

1. [Overview & Scoring Rubric](#1-overview--scoring-rubric)
2. [How Tags & Schemas Are Injected](#2-how-tags--schemas-are-injected)
3. [Standard Meta Tags](#3-standard-meta-tags)
4. [Open Graph Tags](#4-open-graph-tags)
5. [Twitter / X Card Tags](#5-twitter--x-card-tags)
6. [GA4 / GTM Tags](#6-ga4--gtm-tags)
7. [JSON-LD Schema Types: Full Reference](#7-json-ld-schema-types-full-reference)
8. [Page-by-Page Schema & Meta Map](#8-page-by-page-schema--meta-map)
9. [FAQ Component Requirements](#9-faq-component-requirements)
10. [Gaps & Implementation Roadmap](#10-gaps--implementation-roadmap)

---

## 1. Overview & Scoring Rubric

Source: `docs/DreamStudioSolutions.SEO.TagChecker.Scoring.pdf`

The Dream Studio Solutions SEO Tag Checker scores every public URL on a 0–100 composite scale
across six weighted categories. The formula is:

```
overallScore = Math.floor(
    titleScore        × 0.20
  + metaScore         × 0.15
  + headingScore      × 0.15
  + mediaLinksScore   × 0.15
  + structuredDataScore × 0.25
  + ogTagsScore       × 0.10
)
```

### Category Weights

| Category          | Chip   | Weight | Max Contribution |
|-------------------|--------|--------|-----------------|
| Title Tag         | T      | 20%    | 20 pts          |
| Meta Description  | M      | 15%    | 15 pts          |
| Heading Structure | H      | 15%    | 15 pts          |
| Media & Links     | I/L/R  | 15%    | 15 pts          |
| JSON-LD Schema    | J      | 25%    | 25 pts          |
| Open Graph Tags   | OG     | 10%    | 10 pts          |
| **TOTAL**         |        | 100%   | **100 pts**     |

### Score Interpretation

| Score | Grade  | Meaning                                   |
|-------|--------|-------------------------------------------|
| 80+   | A      | Excellent — strong technical foundation   |
| 60–79 | B      | Good — improvements recommended           |
| < 60  | C/F    | Needs work — significant gaps identified  |

### Title Tag Scoring

| Condition                        | Score |
|----------------------------------|-------|
| Present, 30–60 characters        | 100   |
| Present, outside 30–60 chars     | 75    |
| Missing                          | 0     |

### Meta Description Scoring

| Condition                        | Score |
|----------------------------------|-------|
| Present, 120–160 characters      | 100   |
| Present, outside 120–160 chars   | 75    |
| Missing                          | 0     |

### Heading Structure Scoring

Weighted average: `H1×0.40 + H2×0.25 + H3×0.20 + H4×0.10 + H5×0.05`

| Level | Formula                                        | Notes                      |
|-------|------------------------------------------------|----------------------------|
| H1    | count=1 → 100; count=0 → 0; else max(0, 100–(n–1)×20) | Multiple H1s are penalised |
| H2    | min(100, count×20)                             | Needs ≥1                   |
| H3    | min(100, count×15)                             | Needs ≥1                   |
| H4    | min(100, count×12) if present, else 0          | Optional bonus             |
| H5    | min(100, count×10) if present, else 0          | Optional bonus             |

### JSON-LD Schema Scoring

Points awarded per detected `@type`, **capped at 100**. LocalBusiness / Organization /
ProfessionalService are mutually exclusive — only one earns the 40 pts.

| Schema `@type`                                    | Points             |
|---------------------------------------------------|--------------------|
| `LocalBusiness` OR `Organization` OR `ProfessionalService` | **40** (mutually exclusive) |
| `FAQPage`                                         | **+20**            |
| `WebSite`                                         | **+15**            |
| `Service` OR `Article` OR `BreadcrumbList`        | **+10 each**       |
| `WebPage` OR `ImageObject` OR `Person`            | **+5 each**        |
| Any other recognised type                         | **+5**             |
| No JSON-LD at all                                 | 0                  |
| **Maximum**                                       | **100 → 25 pts weight** |

**Target composition for full 25-pt weight on service area and service pages:**

```
LocalBusiness (40) + WebSite (15) + Service (10) + BreadcrumbList (10) + WebPage (5) + FAQPage (20) = 100 pts (capped)
```

---

## 2. How Tags & Schemas Are Injected

### Layout File: `resources/views/components/layouts/page.blade.php`

This is the master layout used by every public-facing page. It injects:

1. **Standard meta tags** — `charset`, `viewport`, `description`, `theme-color`
2. **Two partial Open Graph tags** — `og:title`, `og:description`
3. **Global JSON-LD blocks** — `LocalBusiness` and `WebSite` (always present, no page can remove them)
4. **`@stack('structured-data')`** — the injection point for all page-level and component-level schemas

```blade
{{-- In page.blade.php <head> --}}
<script type="application/ld+json">{ "@type": "LocalBusiness", ... }</script>
<script type="application/ld+json">{ "@type": "WebSite", ... }</script>
@stack('structured-data')    {{-- page-level and component schemas go here --}}
```

### Page-Level Schema Injection

Individual page templates use `@push('structured-data')` directly in the blade file, before
the `<x-layouts.page>` wrapper resolves. Example from `service-areas/show.blade.php`:

```blade
@push('structured-data')
<script type="application/ld+json">
{
    "@type": "Service",
    "name": "Custom Signs & Apparel in {{ $cityState }}",
    ...
}
</script>
<script type="application/ld+json">{ "@type": "BreadcrumbList", ... }</script>
<script type="application/ld+json">{ "@type": "WebPage", ... }</script>
@if($content && !empty($content['review']))
<script type="application/ld+json">{ "@type": "Review", ... }</script>
@endif
@endpush
```

### Component-Level Schema Injection

Reusable section components that have their own schema use `@push('structured-data')` inside
the component file. This keeps schema co-located with the UI that generates it.

Currently the only component that auto-injects schema is `x-sections.faq`:

```blade
{{-- resources/views/components/sections/faq.blade.php --}}
@push('structured-data')
@if(count($faqs))
<script type="application/ld+json">
{
    "@type": "FAQPage",
    "mainEntity": [...]
}
</script>
@endif
@endpush
```

The FAQ component auto-fires FAQPage JSON-LD whenever the `$faqs` array is non-empty.
Adding `<x-sections.faq :faqs="$faqs" />` to any page automatically earns the +20 pts.

### Blade Component Props for Meta Tags

All pages receive meta tags by passing props to the layout wrapper:

```blade
<x-layouts.page
    title="Custom Signs & Apparel in Aurora, IL | Top 5 Percent"
    metaDescription="Veteran-owned custom signs and apparel serving Aurora, IL..."
    currentPage="about"
>
```

The layout file uses these props in the `<head>` output. Missing props fall back to generic
site-level defaults.

---

## 3. Standard Meta Tags

### Current State

The following standard meta tags are in the layout:

```html
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }} | Top 5 Percent</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="theme-color" content="#FFC20E">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
```

### Missing Standard Tags (need to be added to layout)

| Tag | Purpose | Required Value |
|-----|---------|----------------|
| `<link rel="canonical" href="...">` | Prevents duplicate content | Full canonical URL for each page |
| `<meta name="robots" content="index,follow">` | Controls indexing | `index,follow` for all public pages; `noindex,nofollow` for cart/checkout/order-confirmation |
| `<meta name="author" content="Top 5 Percent, LLC">` | Authorship | Static string |
| `<meta name="geo.region" content="US-IL">` | Local SEO geo signal | Static `US-IL` |
| `<meta name="geo.placename" content="Joliet, IL">` | Local SEO | `Joliet, IL` for most; city-specific on service area pages |
| `<meta name="geo.position" content="41.5250;-88.0817">` | Local SEO | Joliet coords; or city-specific on service area pages |
| `<meta name="ICBM" content="41.5250, -88.0817">` | Legacy geo | Joliet coords |

### Title Tag Rules (per scoring rubric)

- Target length: **30–60 characters** for 100/100 score
- Current pattern: `{page title} | Top 5 Percent`
- The ` | Top 5 Percent` suffix adds ~18 characters — so page titles should be **12–42 characters** to stay in the optimal window
- City pages: `Custom Signs & Apparel in Aurora, IL | Top 5 Percent` = 55 chars (good)
- Problem titles: very long silo-level titles like `Custom Banners Joliet IL | Vinyl Banners, Birthday Banners, Team Banners | Top 5 Percent` = 89 chars (scores 75, not 100)

### Meta Description Rules

- Target length: **120–160 characters** for 100/100 score
- Current descriptions vary — most are within range but should be audited
- Must include the city/geo signal (Joliet, IL / Will County / Shorewood / Plainfield)

---

## 4. Open Graph Tags

### Current State in Layout

Only two OG tags are currently set:

```html
<meta property="og:title" content="{{ $title ?? 'Top 5 Percent' }}">
<meta property="og:description" content="{{ $metaDescription ?? 'Premium custom signage...' }}">
```

### Missing OG Tags (need to be added to layout and/or per-page)

| Tag | Purpose | Value |
|-----|---------|-------|
| `og:type` | Content type | `website` for homepage; `article` for blog; `product` for product pages |
| `og:url` | Canonical URL | Full URL of the page (use `request()->url()`) |
| `og:image` | Social share image | Absolute URL, minimum 1200×630px |
| `og:image:width` | Image dimensions for platforms | `1200` |
| `og:image:height` | Image dimensions for platforms | `630` |
| `og:image:alt` | Accessibility for shared image | Descriptive alt text |
| `og:site_name` | Site identifier | `Top 5 Percent` |
| `og:locale` | Language/region | `en_US` |
| `og:image:type` | MIME type | `image/jpeg` or `image/png` |

### Recommended Default OG Image

`/images/top5pct-og-default.jpg` — 1200×630px, sunburst gold background with logo and
tagline "What Do You Represent?" — used as fallback on all pages that don't specify one.

### Per-Page OG Image Strategy

| Page Type | OG Image |
|-----------|----------|
| Home | Storefront/hero shot of Joliet shop |
| Service area city pages | Map or local landmark with Top 5 Pct branding overlay |
| Service silo landing pages | Primary product/service hero image for that category |
| Sub-category pages | Representative product shot |
| About / Company | Team photo or shop interior |
| Contact | Shop exterior or contact CTA image |

### Implementation in Layout (target state)

```blade
<meta property="og:title" content="{{ $title ?? 'Top 5 Percent' }}">
<meta property="og:description" content="{{ $metaDescription ?? '...' }}">
<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="{{ $ogImage ?? 'https://www.top5pct.com/images/top5pct-og-default.jpg' }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $ogImageAlt ?? 'Top 5 Percent — Custom Signs & Apparel in Joliet, IL' }}">
<meta property="og:site_name" content="Top 5 Percent">
<meta property="og:locale" content="en_US">
```

The `$ogImage`, `$ogImageAlt`, and `$ogType` props must be threaded through the
`x-layouts.page` component props declaration.

---

## 5. Twitter / X Card Tags

### Current State

No Twitter card tags exist anywhere in the codebase.

### Tags to Add to Layout

```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@top5pct">
<meta name="twitter:title" content="{{ $title ?? 'Top 5 Percent' }}">
<meta name="twitter:description" content="{{ $metaDescription ?? '...' }}">
<meta name="twitter:image" content="{{ $ogImage ?? 'https://www.top5pct.com/images/top5pct-og-default.jpg' }}">
<meta name="twitter:image:alt" content="{{ $ogImageAlt ?? 'Top 5 Percent — Custom Signs & Apparel' }}">
```

**Note:** `twitter:card` set to `summary_large_image` is the recommended card type for
businesses with strong photography. It renders a full-width image preview in Twitter/X feeds,
significantly improving CTR from social shares. The `twitter:title` and `twitter:description`
can share the same prop values as the OG tags.

---

## 6. GA4 / GTM Tags

### Current State

No Google Analytics 4 or Google Tag Manager tags exist anywhere in the codebase. This is
a critical gap — the site is running dark with zero conversion and traffic data.

### Recommended Implementation

Use **Google Tag Manager (GTM)** as the single container to fire both GA4 and any other
tracking pixels. This avoids hardcoding multiple snippets and allows tag changes without
deployments.

#### GTM Container ID

The GTM Container ID (format: `GTM-XXXXXXX`) must be stored in `.env` as:

```
GTM_ID=GTM-XXXXXXX
GA4_MEASUREMENT_ID=G-XXXXXXXXXX
```

And exposed via `config/services.php`:

```php
'gtm' => ['id' => env('GTM_ID')],
'ga4' => ['id' => env('GA4_MEASUREMENT_ID')],
```

#### GTM Snippet Placement in Layout

GTM requires two snippets — one in `<head>`, one immediately after `<body>`:

```blade
{{-- In <head>, as high as possible --}}
@if(config('services.gtm.id'))
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ config("services.gtm.id") }}');</script>
@endif

{{-- Immediately after <body> --}}
@if(config('services.gtm.id'))
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@endif
```

#### GA4 Direct Tag (alternative if GTM not used)

```blade
@if(config('services.ga4.id'))
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.id') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '{{ config("services.ga4.id") }}');
</script>
@endif
```

#### Recommended GA4 Events to Configure in GTM

| Event | Trigger | Purpose |
|-------|---------|---------|
| `page_view` | All pages | Standard traffic |
| `generate_lead` | Contact form submit | Lead conversion |
| `phone_click` | Click on `tel:` links | Call tracking |
| `view_quote_form` | Quote modal opens | Funnel entry |
| `add_to_cart` | Lunar cart add | E-commerce |
| `begin_checkout` | Checkout page load | Funnel step |
| `purchase` | Order confirmation | Revenue |
| `file_download` | Any PDF/asset click | Content engagement |

#### Privacy / Consent

If the site adds a cookie consent banner in the future, GTM should be gated on consent:

```js
gtag('consent', 'default', {
    'analytics_storage': 'denied',
    'ad_storage': 'denied'
});
```

---

## 7. JSON-LD Schema Types: Full Reference

All schemas use `"@context": "https://schema.org"`. Each type below documents where it is
currently set, what fields it must include, and which pages should carry it.

---

### 7.1 LocalBusiness

**Current location:** Hardcoded in `resources/views/components/layouts/page.blade.php` — fires on every page.

**Points:** 40 (mutually exclusive with Organization and ProfessionalService)

**Required fields per schema.org + SEO rubric:**

```json
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Top 5 Percent, LLC",
    "image": "https://www.top5pct.com/images/top5pct-logo.png",
    "@id": "https://www.top5pct.com",
    "url": "https://www.top5pct.com",
    "telephone": "815-349-8600",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "121 Springfield Avenue, Suite 103",
        "addressLocality": "Joliet",
        "addressRegion": "IL",
        "postalCode": "60435",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.5250,
        "longitude": -88.0817
    },
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "100"
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        "opens": "08:30",
        "closes": "18:00"
    }
}
```

**Enhancements to consider (not yet implemented):**

```json
"priceRange": "$$",
"servesCuisine": null,
"sameAs": [
    "https://www.facebook.com/top5pct",
    "https://www.instagram.com/top5pct",
    "https://www.linkedin.com/company/top5pct"
],
"founder": {
    "@type": "Person",
    "name": "Ezra",
    "description": "Veteran-owned and operated"
},
"keywords": "custom signs, custom apparel, DTF transfers, vehicle graphics, Joliet IL"
```

**Applied to:** ALL pages (via layout — cannot be removed per-page)

---

### 7.2 WebSite

**Current location:** Hardcoded in `resources/views/components/layouts/page.blade.php` — fires on every page.

**Points:** +15

**Current implementation:**

```json
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Top 5 Percent",
    "url": "https://www.top5pct.com"
}
```

**Enhancement to add (enables Google Sitelinks Search Box):**

```json
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Top 5 Percent",
    "url": "https://www.top5pct.com",
    "potentialAction": {
        "@type": "SearchAction",
        "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://www.top5pct.com/search?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
    }
}
```

**Applied to:** ALL pages (via layout)

---

### 7.3 Service

**Current location:** `@push('structured-data')` in `resources/views/pages/service-areas/show.blade.php` only.

**Points:** +10

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Custom Signs & Apparel in {City}, IL",
    "provider": {
        "@type": "LocalBusiness",
        "name": "Top 5 Percent, LLC",
        "url": "https://www.top5pct.com"
    },
    "areaServed": {
        "@type": "City",
        "name": "{City}",
        "addressRegion": "IL",
        "addressCountry": "US"
    },
    "description": "Veteran-owned custom signs, apparel, banners, vehicle graphics...",
    "serviceType": "Custom Printing"
}
```

**Applied to:** Service area city pages only (currently). Should be added to all service
silo pages and sub-pages (see Section 8).

---

### 7.4 BreadcrumbList

**Current location:** `@push('structured-data')` in `resources/views/pages/service-areas/show.blade.php` only.

**Points:** +10

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.top5pct.com"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "Service Areas",
            "item": "https://www.top5pct.com/service-areas"
        },
        {
            "@type": "ListItem",
            "position": 3,
            "name": "Aurora, IL",
            "item": "https://www.top5pct.com/service-areas/aurora-il"
        }
    ]
}
```

**Rules:**
- The last item in the list should always match the current page URL and title
- `position` must be sequential integers starting at 1
- `item` must be an absolute URL for every position
- The home page itself does not need a BreadcrumbList (there is no breadcrumb on the root)

**Applied to:** Service area city pages only (currently). Should be added to all second-level
and deeper pages.

---

### 7.5 WebPage

**Current location:** `@push('structured-data')` in `resources/views/pages/service-areas/show.blade.php` only.

**Points:** +5

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Custom Signs & Apparel in Aurora, IL | Top 5 Percent",
    "url": "https://www.top5pct.com/service-areas/aurora-il",
    "description": "Veteran-owned custom signage and apparel shop serving Aurora, IL."
}
```

**Enhancement options:**

```json
"breadcrumb": { ... },
"primaryImageOfPage": {
    "@type": "ImageObject",
    "url": "https://www.top5pct.com/images/hero.jpg"
},
"datePublished": "2024-01-01",
"dateModified": "2025-01-01"
```

**Applied to:** Service area city pages only (currently). Should be on every page.

---

### 7.6 FAQPage

**Current location:** Auto-injected by `resources/views/components/sections/faq.blade.php`
via `@push('structured-data')` when the `$faqs` prop array is non-empty.

**Points:** +20 (the highest per-type bonus in the rubric)

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Where can I get rush custom t-shirts in Aurora?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "While our studio is in Joliet, we offer 24-48 hour turnaround..."
            }
        }
    ]
}
```

**Text rules (per Google's FAQPage guidelines and the DeepSEO content strategy PDF):**
- `name` = the question. Must be phrased as a natural question, not a keyword phrase.
- `text` = the answer. Must be a complete, helpful answer. Google recommends 50–300 words.
- Minimum 3 question-answer pairs for a meaningful FAQPage signal.
- Do not duplicate questions that appear on other pages — Google penalises FAQ stuffing.
- Questions should target "voice search" intents (conversational, geographic, "do you…", "can I…", "how fast…")

**Applied to:** Service area city pages only via `x-sections.faq` (currently). Needs to be
added to all service silo and sub-category pages.

---

### 7.7 Review

**Current location:** Conditionally pushed by `resources/views/pages/service-areas/show.blade.php`
when `CityContent::for($slug)['review']` is non-null.

**Points:** +5 (counts as a recognised type)

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "Review",
    "itemReviewed": {
        "@type": "LocalBusiness",
        "name": "Top 5 Percent, LLC"
    },
    "author": {
        "@type": "Person",
        "name": "Shannon Blizniak"
    },
    "reviewBody": "Ezra was great to work with and made our tshirt within hours... Great service & quality."
}
```

**Cities with review data populated in `CityContent.php`:**

| Slug | Author | Review Body |
|------|--------|-------------|
| `aurora-il` | Shannon Blizniak | "Ezra was great to work with and made our tshirt within hours... Great service & quality." |
| `chicago-il` | Chewy Orkwiszewski | "The car decals are flawless in quality. Great team to work with." |
| `joliet-il` | Jerry E. Olson | "Ezra is super helpful and very talented. Premier choice for rush banners and printing services in Joliet." |

The `reviewBody` field in the JSON-LD schema must match the `body` value in `CityContent.php` exactly.
Do not paraphrase, truncate, or editorialize the review text in the schema output.

**Applied to:** Three city pages only (currently).

---

### 7.8 Article (for future blog / resources pages)

**Points:** +10

**Intended pages:** `/resources` hub page and any individual resource/blog articles

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Illinois Window Tint Laws 2026: A Complete Guide",
    "author": {
        "@type": "Organization",
        "name": "Top 5 Percent, LLC"
    },
    "publisher": {
        "@type": "Organization",
        "name": "Top 5 Percent, LLC",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.top5pct.com/images/top5pct-logo.png"
        }
    },
    "datePublished": "2026-01-01",
    "dateModified": "2026-01-01",
    "image": "https://www.top5pct.com/images/article-hero.jpg",
    "description": "Complete guide to Illinois window tint laws..."
}
```

---

### 7.9 ImageObject

**Points:** +5 each (can apply to hero images, portfolio images, product images)

**Intended pages:** Portfolio, product pages, hero-heavy service pages

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "url": "https://www.top5pct.com/images/custom-signs-joliet.jpg",
    "contentUrl": "https://www.top5pct.com/images/custom-signs-joliet.jpg",
    "caption": "Custom business signs in Joliet, IL by Top 5 Percent",
    "width": 1200,
    "height": 800
}
```

---

### 7.10 Person (for About / Company pages)

**Points:** +5

**Intended pages:** `/about`, `/company`

**Required fields:**

```json
{
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Ezra",
    "jobTitle": "Owner & Operator",
    "worksFor": {
        "@type": "LocalBusiness",
        "name": "Top 5 Percent, LLC"
    },
    "description": "Veteran-owned and operated. U.S. Army veteran and founder of Top 5 Percent, LLC."
}
```

---

## 8. Page-by-Page Schema & Meta Map

Legend:
- `L` = lives in layout (always present)
- `P` = must be pushed by the page template
- `C` = auto-injected by a component when included
- `✓` = currently implemented
- `✗` = not yet implemented
- `N/A` = not applicable for this page type

---

### 8.1 Global Layout (all pages automatically get)

| Schema Type  | Status | Points |
|-------------|--------|--------|
| LocalBusiness | `L ✓` | 40 |
| WebSite | `L ✓` | 15 |
| og:title | `L ✓` | — |
| og:description | `L ✓` | — |
| og:image | `L ✗` | — |
| og:url | `L ✗` | — |
| og:type | `L ✗` | — |
| og:site_name | `L ✗` | — |
| twitter:card | `L ✗` | — |
| canonical | `L ✗` | — |
| robots | `L ✗` | — |
| GA4 / GTM | `L ✗` | — |

**All pages baseline JSON-LD score: 55 pts → 13.75 weighted pts out of 25 max**

---

### 8.2 Service Area City Pages (`/service-areas/{slug}`)

File: `resources/views/pages/service-areas/show.blade.php`
City data: `app/Data/CityContent.php` (41 cities)

| Schema / Tag | Source | Status | Points |
|-------------|--------|--------|--------|
| LocalBusiness | Layout | `L ✓` | 40 |
| WebSite | Layout | `L ✓` | 15 |
| Service | Page @push | `P ✓` | +10 |
| BreadcrumbList | Page @push | `P ✓` | +10 |
| WebPage | Page @push | `P ✓` | +5 |
| Review | Page @push (conditional) | `P ✓` (3 cities) | +5 |
| FAQPage | x-sections.faq component | `C ✓` | +20 |
| **Total JSON-LD score** | | | **100 pts → 25 weighted pts** |

**Meta tags per city page:**
- title: `Custom Signs & Apparel in {City}, IL | Top 5 Percent` (avg 50 chars — good)
- metaDescription: City-specific, 160+ chars — slightly long, should trim to 120–160
- og:title / og:description: inherits from props (partial — missing og:image, og:url, og:type)
- No canonical, no robots, no GTM

**FAQ expansion — COMPLETE (P2 done May 2026):**
All 41 city pages in `app/Data/CityContent.php` have been expanded from 3 to 6 FAQ entries.
Total FAQ entries: **246** (41 cities x 6). Each city received three new geo-specific questions:

| Additional Q added | Intent targeted |
|--------------------|----------------|
| Driving distance / travel time from Joliet to the city | Local proximity / "near me" |
| Zip codes served in that city | Hyper-local landing page signal |
| A city-specific product or use case (e.g., fleet wraps for Channahon logistics, NIU gear for DeKalb, Raging Waves apparel for Yorkville) | City-specific transactional |

All 41 cities confirmed at 6 FAQs via `php -r` count check. PHP syntax validated clean.
`FAQPage` JSON-LD auto-fires on all city pages through `x-sections.faq` with the full 6-question set.

---

### 8.3 Home Page (`/`)

File: `resources/views/pages/home.blade.php`

| Schema / Tag | Source | Status | Points |
|-------------|--------|--------|--------|
| LocalBusiness | Layout | `L ✓` | 40 |
| WebSite | Layout | `L ✓` | 15 |
| Service | Page @push | `P ✗` | +10 needed |
| WebPage | Page @push | `P ✗` | +5 needed |
| FAQPage | x-sections.faq | `C ✗` | +20 needed |
| **Current score** | | | **55 pts** |
| **Target score** | | | **90 pts** |

**Recommended FAQ topics for home page:**
- "Do you offer same-day custom shirts in Joliet?"
- "Is there a minimum order for custom apparel?"
- "Are you veteran-owned?"
- "What areas do you serve?"
- "How fast can I get a custom sign or banner?"

---

### 8.4 Custom Apparel Silo Landing Page (`/custom-apparel`)

File: `resources/views/pages/custom-apparel/index.blade.php`

| Schema / Tag | Status | Points |
|-------------|--------|--------|
| LocalBusiness | `L ✓` | 40 |
| WebSite | `L ✓` | 15 |
| Service | `P ✗` | +10 needed |
| BreadcrumbList | `P ✗` | +10 needed |
| WebPage | `P ✗` | +5 needed |
| FAQPage | `C ✗` | +20 needed |
| **Current score** | | **55 pts** |
| **Target score** | | **100 pts** |

**Recommended FAQ topics:**
- "What apparel printing methods do you offer?"
- "Do you have a minimum order for custom shirts?"
- "Can I get same-day custom t-shirts?"
- "Do you offer embroidery for corporate wear?"
- "How long does a custom apparel order take?"

---

### 8.5 Custom Apparel Sub-Pages

Applies to all files in `resources/views/pages/custom-apparel/`:
`custom-shirts`, `dtf-transfers`, `dye-sublimation`, `embroidery`, `screen-printing`,
`spirit-wear-shirts`, `corporate-wear-shirts`, `reunion-shirts`, `vinyl-shirts`,
`rhinestone-shirts`, `foil-shirts`, `glitter-shirts`, `glow-in-the-dark-shirts`,
`flock-shirts`, `reflective-shirts`, `holographic-shirts`, `puff-shirts`, `brick-shirts`,
`pattern-shirts`, `picture-shirts`

| Schema / Tag | Status | Points |
|-------------|--------|--------|
| LocalBusiness | `L ✓` | 40 |
| WebSite | `L ✓` | 15 |
| Service | `P ✗` | +10 needed |
| BreadcrumbList | `P ✗` | +10 needed |
| WebPage | `P ✗` | +5 needed |
| FAQPage | `C ✗` (except custom-shirts which has the `shirt-types-faq` section) | +20 needed |
| **Current score** | | **55 pts** |
| **Target score** | | **100 pts** |

**Note:** `custom-shirts.blade.php` already uses `x-sections.shirt-types-faq` which contains
FAQ content — but that section does NOT currently emit `@push('structured-data')` with a
FAQPage schema. The `shirt-types-faq` component needs a FAQPage push added to it, or the
page needs to use the new generic `x-sections.faq` component instead.

---

### 8.6 Signs Silo Landing Page (`/signs`)

File: `resources/views/pages/signs/index.blade.php`

Same gap as custom apparel landing — needs Service, BreadcrumbList, WebPage, FAQPage.

**Recommended FAQ topics:**
- "What types of signs do you make in Joliet?"
- "Do you offer same-day sign printing?"
- "Can I get a custom yard sign with no minimum?"
- "Do you install vehicle graphics and window signs?"
- "What is the turnaround time for banners?"

---

### 8.7 Signs Sub-Pages

Applies to: `banners`, `yard-signs`, `business-signs`, `sidewalk-signs`, `posters`,
`floor-signs`, `wall-signs`, `window-signs`, `door-signs`, `parking-signs`,
`table-cloths`, `table-runners`, `coronavirus-signs`

All have the same gap: Service, BreadcrumbList, WebPage, FAQPage all missing.

---

### 8.8 Vehicle Graphics Silo Landing Page (`/vehicle-graphics`)

File: `resources/views/pages/vehicle-graphics/index.blade.php`

Same gap as signs and apparel silos. Needs Service, BreadcrumbList, WebPage, FAQPage.

**Recommended FAQ topics:**
- "Do you install vehicle graphics in Joliet?"
- "What is the difference between a car wrap and vinyl lettering?"
- "Do you provide DOT compliance numbers for trucks?"
- "How long do vehicle graphics last?"
- "Can I get magnetic signs for my work vehicle?"

---

### 8.9 Vehicle Graphics Sub-Pages

Applies to: `automobile-graphics`, `vehicle-magnets`, `dot-decals`

Same gap as the silo landing page.

---

### 8.10 Stickers Pages

Applies to: `stickers/index`, `stickers/standard-stickers`, `stickers/custom-shaped-stickers`

Same gap across all three pages.

---

### 8.11 Promotional Items Pages

Applies to: `promotional-items` (landing) and all sub-pages: `mugs`, `can-koozies`,
`drink-coasters`, `tote-bags`, `towels`, `mouse-pads`

Same gap across all pages.

---

### 8.12 Design Services Pages

Applies to: `design-services/index`, `logo-design`, `graphic-design`, `online-designer`,
`design-catalogs`, `custom-storefronts`

Same gap across all pages. The `logo-design` and `graphic-design` sub-pages are candidates
for `Article`-type schema in addition to `Service` since they provide educational content.

---

### 8.13 Company / About Pages

| Page | File | Recommended Extra Schemas |
|------|------|--------------------------|
| About Us | `about.blade.php` | `Person` (Ezra) + `WebPage` + `BreadcrumbList` |
| Company | `company/index.blade.php` | `Person` + `WebPage` + `BreadcrumbList` |
| Resources | `company/resources.blade.php` | `WebPage` + `BreadcrumbList` |
| Portfolio | `portfolio.blade.php` | `ImageObject` + `WebPage` + `BreadcrumbList` |

---

### 8.14 Contact Page (`/contact`)

| Schema / Tag | Status | Points |
|-------------|--------|--------|
| LocalBusiness | `L ✓` | 40 |
| WebSite | `L ✓` | 15 |
| WebPage | `P ✗` | +5 needed |
| BreadcrumbList | `P ✗` | +10 needed |
| FAQPage | `C ✗` | +20 needed |

**Recommended FAQ topics for contact page:**
- "Where is Top 5 Percent located in Joliet?"
- "What are your hours?"
- "How can I get a free quote?"
- "Do you offer pickup in Joliet?"
- "What is the fastest way to contact you?"

---

### 8.15 Service Areas Hub Page (`/service-areas`)

File: `resources/views/pages/service-areas.blade.php`

This is the parent landing page for all city service area pages. Needs its own schema set:

| Schema / Tag | Status | Notes |
|-------------|--------|-------|
| LocalBusiness | `L ✓` | Via layout |
| WebSite | `L ✓` | Via layout |
| Service | `P ✗` | General "service area" Service schema |
| WebPage | `P ✗` | Hub/index page |
| FAQPage | `C ✗` | General service area FAQs |

---

### 8.16 Commerce Pages (Cart, Checkout, Order Confirmation, Product, Collection)

These pages require `robots: noindex` to prevent indexing of transactional/session pages:

| Page | robots | JSON-LD Schema |
|------|--------|---------------|
| `cart.blade.php` | `noindex,nofollow` | LocalBusiness + WebSite only |
| `checkout.blade.php` | `noindex,nofollow` | LocalBusiness + WebSite only |
| `order-confirmation.blade.php` | `noindex,nofollow` | LocalBusiness + WebSite only |
| `product.blade.php` | `index,follow` | Could add `Product` schema |
| `collection.blade.php` | `index,follow` | Could add `ItemList` schema |
| `top5pct-merchandise.blade.php` | `index,follow` | Service + WebPage |

For the `product.blade.php` page, a `Product` schema with `aggregateRating` and `offers`
would be high-value for e-commerce SEO but requires integrating with Lunar product data.

---

### 8.17 Demo Pages

| Page | robots |
|------|--------|
| `demo.blade.php` | `noindex,nofollow` |
| `demo/modals.blade.php` | `noindex,nofollow` |
| `demo-premium.blade.php` | `noindex,nofollow` |
| `page-management.blade.php` | `noindex,nofollow` |

---

## 9. FAQ Component Requirements

### Existing FAQ Components

| Component | File | FAQPage JSON-LD | Notes |
|-----------|------|----------------|-------|
| `x-sections.faq` | `sections/faq.blade.php` | YES — auto-injects | New generic component, used on city pages |
| `x-sections.shirt-types-faq` | `sections/shirt-types-faq.blade.php` | NO | Needs @push added |

### FAQ Content Requirements

Per the SEO Tag Checker rubric (FAQPage = +20 pts, the highest bonus) and the content
strategy from `docs/DeepSEOLocalizedContentForTop5Pct.pdf`:

1. **Minimum 6 Q&A pairs per page.** City pages now have exactly 6 (expanded May 2026 — P2 complete). Service pages should also target 6 to cover a broad range of voice search and intent variants.

2. **Question format:** Must be a full grammatical question (not a keyword phrase).
   - Good: "Do you offer same-day banner printing in Joliet?"
   - Bad: "Joliet same day banner printing"

3. **Answer format:** Complete, factual, 40–200 words per answer. Must stand alone
   without reading the question first (Google may display the answer in a featured snippet).

4. **Geographic anchoring:** At least one question per service page should reference Joliet,
   Will County, or the specific city, anchoring the content for local pack ranking.

5. **Voice search targeting (per `docs/detailed.seo.md`):**
   Questions that mirror spoken queries like "Hey Google, who does same-day banner printing
   near me?" perform best for voice search featured snippets.

6. **No duplication across pages:** Do not repeat the same FAQ question on multiple pages.
   Google may interpret this as thin content or FAQ stuffing.

### How to Add FAQ to a New Page

Pass the `$faqs` array to `x-sections.faq`. The component handles both display and
FAQPage JSON-LD injection automatically:

```blade
<x-sections.faq
    heading="Frequently Asked Questions — Custom Banners"
    label="BANNER FAQs"
    :faqs="[
        ['q' => 'Do you offer same-day banner printing in Joliet?', 'a' => 'Yes, same-day vinyl banner printing is available...'],
        ['q' => 'What banner sizes are available?', 'a' => 'We print banners in any size...'],
        ['q' => 'Can I order a single banner with no minimum?', 'a' => 'Absolutely. We have no minimum order requirement...'],
        ['q' => 'What material are your banners printed on?', 'a' => 'We use 13oz scrim vinyl for outdoor banners...'],
    ]"
/>
```

For dynamically-loaded FAQ data (e.g., if questions are stored in the database or a data class),
pass the data from the controller/route closure and bind it to the component the same way.

### How to Add FAQPage to `shirt-types-faq`

The `x-sections.shirt-types-faq` component already displays FAQ content but does not emit
the schema. To fix, add to the top of that component:

```blade
@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        { "@type": "Question", "name": "...", "acceptedAnswer": { "@type": "Answer", "text": "..." } },
        ...
    ]
}
</script>
@endpush
```

---

## 10. Gaps & Implementation Roadmap

### Priority Matrix

| Priority | Task | Pages Affected | Points Gain | Effort |
|----------|------|----------------|------------|--------|
| P1 | Add `og:image`, `og:url`, `og:type`, `og:site_name` to layout | All (70+) | OG score 0→100 | Low |
| P1 | Add Twitter card tags to layout | All (70+) | Social CTR | Low |
| P1 | Add GTM/GA4 to layout | All (70+) | Analytics data | Low |
| P1 | Add canonical tag to layout | All (70+) | Prevents duplication | Low |
| P1 | Add robots meta to layout (with noindex override prop) | All (70+) | Protects cart/demo | Low |
| ~~P2~~ | ~~Expand all 41 city pages from 3 to 6 FAQs in `CityContent.php` (add geo/zip/distance/use-case Qs)~~ | ~~41 pages~~ | ~~Voice search + local signal~~ | **DONE May 2026** |
| ~~P2~~ | ~~Add `x-sections.faq` to home page~~ | ~~1 page~~ | ~~+20 pts JSON-LD~~ | **DONE May 2026** |
| ~~P2~~ | ~~Add Service + BreadcrumbList + WebPage @push to all silo landing pages~~ | ~~7 pages~~ | ~~+25 pts JSON-LD~~ | **DONE May 2026** |
| ~~P2~~ | ~~Add `x-sections.faq` to all silo landing pages~~ | ~~7 pages~~ | ~~+20 pts JSON-LD~~ | **DONE May 2026** |
| ~~P2~~ | ~~Add FAQPage JSON-LD to `shirt-types-faq` component~~ | ~~1 component~~ | ~~+20 pts JSON-LD~~ | **DONE May 2026** |
| ~~P3~~ | ~~Add Service + BreadcrumbList + WebPage @push to all sub-category pages~~ | ~~53 pages~~ | ~~+25 pts JSON-LD~~ | **DONE May 2026** |
| ~~P3~~ | ~~Add `x-sections.faq` to all sub-category pages with tailored questions~~ | ~~53 pages~~ | ~~+20 pts JSON-LD~~ | **DONE May 2026** |
| ~~P3~~ | ~~Add Person schema to About and Company pages~~ | ~~2 pages~~ | ~~+5 pts JSON-LD~~ | **DONE May 2026** |
| ~~P3~~ | ~~Add ImageObject schema to Portfolio page~~ | ~~1 page~~ | ~~+5 pts JSON-LD~~ | **DONE May 2026** |
| ~~P4~~ | ~~Add Product schema to Lunar product detail pages~~ | ~~Dynamic~~ | ~~E-comm SEO~~ | **DONE May 2026** |
| ~~P4~~ | ~~Add WebSite.potentialAction (SearchAction) to WebSite schema~~ | ~~All (via layout)~~ | ~~Sitelinks search box~~ | **DONE May 2026** |
| ~~P4~~ | ~~Enrich LocalBusiness schema with sameAs, priceRange, founder~~ | ~~All (via layout)~~ | ~~Trust signals~~ | **DONE May 2026** |
| ~~P4~~ | ~~Add geo meta tags (geo.region, geo.placename, geo.position)~~ | ~~All (via layout)~~ | ~~Local SEO~~ | **DONE — completed early with P1 layout buildout** |
| P4 | Add Article schema to resources/blog pages | Future pages | +10 pts JSON-LD | N/A now |

### Layout Props (IMPLEMENTED)

All layout props are live in `resources/views/components/layouts/page.blade.php`:

```blade
@props([
    'title'          => 'Top 5 Percent - Custom Signage & Apparel',
    'metaDescription' => 'Premium custom signage and apparel in Joliet, IL.',
    'currentPage'    => '',
    'ogImage'        => null,     // absolute URL — falls back to top5pct-og-home.jpg
    'ogImageAlt'     => null,     // alt text for OG image
    'ogType'         => 'website', // website | article | product
    'canonical'      => null,     // full URL — falls back to request()->url()
    'noIndex'        => false,    // set true for cart/checkout/demo/admin pages
])
```

### Deployment Checklist Before Next Audit

#### DONE

- [x] GTM container ID (`GTM-TEMP0001`) stored in `.env` and `config/services.php`
- [x] GTM head snippet + noscript body snippet injected in layout (conditional on `config('services.gtm.id')`)
- [x] GA4 Measurement ID (`G-TEMP000001`) stored in `.env` and `config/services.php`
- [x] `og:image`, `og:url`, `og:type`, `og:site_name` added to layout
- [x] `og:title`, `og:description`, `og:locale` added to layout
- [x] `og:image:width` (1200), `og:image:height` (630), `og:image:alt` added to layout
- [x] Twitter card tags (`twitter:card summary_large_image` + title/description/image) added to layout
- [x] Canonical tag added to layout (falls back to `request()->url()`)
- [x] Robots meta added to layout with `noIndex` prop override (`noindex,nofollow` when true)
- [x] Geo meta tags added to layout (`geo.region US-IL`, `geo.placename Joliet, IL`, `geo.position 41.5250;-88.0817`) — originally P4, completed early
- [x] `@stack('structured-data')` present in layout for JSON-LD injection
- [x] `:noIndex="true"` applied to cart, checkout, and order-confirmation pages
- [x] Default OG image available at `public/images/og-tags/top5pct-og-home.jpg` (1200×630px, used as fallback)
- [x] Silo-specific OG images created for 6 pages: home, custom-apparel, signs, vehicle-graphics, stickers, design-services
- [x] All 41 city pages expanded from 3 to 6 FAQs in `CityContent.php` (246 total — completed May 2026)

#### REMAINING — P2 (GTM/GA4 IDs only — schema/FAQ done)

- [ ] **Replace placeholder GTM ID** — swap `GTM-TEMP0001` in `.env` with the real GTM container ID once the GTM account is created
- [ ] **Replace placeholder GA4 ID** — swap `G-TEMP000001` in `.env` with the real GA4 Measurement ID and link it inside GTM
- [x] ~~Add `x-sections.faq` with 6 tailored questions to home page (`pages/home.blade.php`)~~ — **DONE May 2026**
- [x] ~~Add `x-sections.faq` with 6 tailored questions to each silo landing page (home, custom-apparel, signs, vehicle-graphics, stickers, design-services, promotional-items)~~ — **DONE May 2026 — 7 pages**
- [x] ~~Add Service + BreadcrumbList + WebPage `@push('structured-data')` to each silo landing page~~ — **DONE May 2026 — 7 pages**
- [x] ~~Add FAQPage JSON-LD `@push` to `components/sections/shirt-types-faq.blade.php`~~ — **DONE May 2026**

#### REMAINING — P3 (Person + ImageObject schema only)

- [x] ~~Add Service + BreadcrumbList + WebPage `@push('structured-data')` to all sub-category pages~~ — **DONE May 2026 — 53 pages across 6 silos + about/company/portfolio**
- [x] ~~Add `x-sections.faq` with 6 tailored questions to all sub-category pages~~ — **DONE May 2026 — 53 pages, 318 unique FAQ entries**
- [x] ~~Add Person schema to About and Company pages (`pages/about.blade.php`, `pages/company/index.blade.php`)~~ — **DONE May 2026**
- [x] ~~Add ImageObject schema to Portfolio page (`pages/portfolio.blade.php`)~~ — **DONE May 2026 — 4 ImageObject blocks (shirts, signs, vehicle, stickers)**

#### REMAINING — P4 (GTM/GA4 IDs only — all schema done)

- [x] ~~Add Product schema to Lunar product detail pages~~ — **DONE May 2026 — dynamic Product + BreadcrumbList on `pages/product.blade.php` using `$productName`, `$productDescription`, `$slug`**
- [x] ~~Add `WebSite.potentialAction` (SearchAction) to the WebSite schema in the layout~~ — **DONE May 2026 — targets `/collections?q={search_term_string}`**
- [x] ~~Enrich LocalBusiness schema with `sameAs`, `priceRange`, and `founder` fields~~ — **DONE May 2026 — 7 sameAs URLs (Facebook, Instagram, Twitter, YouTube, Pinterest, LinkedIn, Google Maps CID), priceRange "$", founder Ezra**
- [ ] Add Article schema to resources/blog pages (future — no blog pages exist yet)

#### REMAINING — Sitemaps & Crawlability

- [x] ~~Create `public/robots.txt`~~ — **DONE May 2026 — disallows cart/checkout/order-confirmation/demo/page-management/admin/lunar/livewire; declares Sitemap location**
- [x] ~~Create `sitemap.xml`~~ — **DONE May 2026 — dynamic Laravel route at `/sitemap.xml`; covers 108 static URLs (8 core, 21 apparel, 14 signs, 4 vehicle, 3 stickers, 6 design, 7 promo, 42 service-area) + dynamic Lunar products and collections; view at `resources/views/sitemaps/sitemap.blade.php`**
- [ ] Create `sitemap_images.xml` — **FUTURE: update/finalize all product and portfolio images first, then add `<image:image>` extensions for every page**
- [ ] Create `sitemap_video.xml` — **FUTURE: finalize video assets first, then build with `<video:video>` extensions for YouTube embeds and hosted video content**
- [ ] Submit `sitemap.xml` to Google Search Console and Bing Webmaster Tools once the domain is live

#### VALIDATION (do after each sprint)

- [ ] Run SEO Tag Checker against at minimum: home, one city page, one silo landing page, one sub-category page, contact page
- [ ] Validate all JSON-LD with Google's Rich Results Test at search.google.com/test/rich-results
- [ ] Confirm GTM is firing in GTM Preview mode after real container ID is swapped in

---

*Document maintained by: Top 5 Percent development team*
*Source documents: `docs/DreamStudioSolutions.SEO.TagChecker.Scoring.pdf`, `docs/DeepSEOLocalizedContentForTop5Pct.pdf`, `docs/detailed.seo.md`*
*Last updated: May 2026 — P1–P4 schema complete; robots.txt created; sitemap.xml dynamic route live covering 108 static + dynamic Lunar URLs; sitemap_images.xml and sitemap_video.xml queued as future items*
