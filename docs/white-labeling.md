# White-Label Multi-Tenant Storefront Plan
## Top 5 Percent — `customer-subdomain.top5pct.com`

---

## Overview

This document defines the complete architecture for building and managing white-label storefronts hosted under `customer.top5pct.com` subdomains. Each subdomain is a fully branded, isolated school, corporate, or organizational store powered by the same Laravel/Lunar/TALL codebase. Tenants share a single database and single application instance. All product scoping, branding, and feature toggling is driven by the `Store` model resolved from the subdomain on every request.

**Target use cases:**
- School spirit wear stores (class pictures, grade-level rosters, team stores)
- Corporate event merchandise stores
- Fundraiser / booster club stores
- Church / organization stores

---

## Architecture Decision Record

| Decision | Choice | Reason |
|---|---|---|
| Database strategy | Single database (`tenant_id` / FK approach) | Simplest to maintain; Lunar Channels handle product isolation; fits hundreds of stores |
| Subdomain pattern | `customer.top5pct.com` | Already defined; wildcard SSL covers all new stores instantly |
| Tenancy package | Custom `IdentifyStore` middleware (no `stancl/tenancy`) | Lunar Channels replace the need for DB switching; keeps dependency count low |
| Font delivery | Pre-loaded curated list + custom override field | Faster than Google Fonts CDN per-request; avoids GDPR tracking issues |
| SSL management | Laravel Forge wildcard SSL (`*.top5pct.com`) | One cert covers all subdomains; per-store cert only needed for custom CNAMEs |
| Admin interface | Filament Resource inside Lunar Hub | Lunar is Filament-based; natural extension; no separate admin app needed |
| Email white-labeling | Planned for future phase | Order emails should eventually use store logo/colors via `app('current_store')` |

---

## 1. Database Structure

### Migration: `stores` table

The `stores` table is the single source of truth for each tenant's identity, branding, and content configuration.

```php
// database/migrations/xxxx_xx_xx_create_stores_table.php
Schema::create('stores', function (Blueprint $table) {
    $table->id();
    $table->string('name');                          // "Lincoln High School"
    $table->string('subdomain')->unique();           // "lincoln-high"
    $table->foreignId('lunar_channel_id');           // Scopes products/pricing in Lunar

    // Branding
    $table->string('logo_path')->nullable();
    $table->string('nav_layout')->default('left');   // 'left' | 'center' | 'right'
    $table->json('colors');                          // { primary, secondary, accent }
    $table->string('font_family')->default('Inter'); // from curated list or custom override

    // Features (toggle individually per store)
    $table->json('features_enabled')->nullable();    // ['calendar', 'roster', 'countdown']

    // Optional Banner
    $table->boolean('has_banner')->default(false);
    $table->string('banner_text')->nullable();

    // Events / Calendar (Repeater data)
    $table->json('events')->nullable();
    // Schema: [{ name, event_date, location, show_countdown }]

    // Roster (Repeater data)
    $table->json('roster')->nullable();
    // Schema: [{ photo, name, meta }]  — meta = "Grade 5" or "Marketing Dept"

    // Multi-page support
    // (see store_pages table below)

    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
```

### Migration: `store_pages` table

Allows stores to have more than one page with different content but identical branding.

```php
Schema::create('store_pages', function (Blueprint $table) {
    $table->id();
    $table->foreignId('store_id')->constrained()->cascadeOnDelete();
    $table->string('slug');           // '' = home, 'roster', 'events', 'gallery'
    $table->string('title');          // Page title (used in <title> tag)
    $table->string('layout')->default('default');
    // layout options: 'default' | 'catalog-only' | 'roster-only' | 'events-only' | 'full'
    $table->json('sections')->nullable();
    // Ordered array of section keys to render: ['hero', 'banner', 'catalog', 'events', 'roster']
    $table->boolean('is_active')->default(true);
    $table->integer('sort_order')->default(0);
    $table->timestamps();

    $table->unique(['store_id', 'slug']);
});
```

**Section keys available per page:**
- `hero` — store hero image with heading/subheading
- `banner` — optional announcement bar (driven by `has_banner` on Store)
- `catalog` — Lunar product grid scoped to store's channel
- `events` — event calendar listing
- `countdown` — countdown timer to next event with `show_countdown = true`
- `roster` — photo grid of students/faculty/team members

### Model: `Store`

```php
// app/Models/Store.php
class Store extends Model
{
    protected $casts = [
        'colors'           => 'array',
        'features_enabled' => 'array',
        'events'           => 'array',
        'roster'           => 'array',
    ];

    public function channel(): BelongsTo
    {
        return $this->belongsTo(\Lunar\Models\Channel::class);
    }

    public function pages(): HasMany
    {
        return $this->hasMany(StorePage::class)->orderBy('sort_order');
    }

    public function hasFeature(string $feature): bool
    {
        return in_array($feature, $this->features_enabled ?? []);
    }

    public function nextCountdownEvent(): ?array
    {
        return collect($this->events ?? [])
            ->filter(fn($e) => $e['show_countdown'] && now()->lt($e['event_date']))
            ->sortBy('event_date')
            ->first();
    }
}
```

---

## 2. Domain Routing & Middleware

### Wildcard Route Group

```php
// routes/web.php — Storefront subdomain group
Route::domain('{subdomain}.top5pct.com')
    ->middleware(['web', 'identify.store'])
    ->group(function () {
        Route::get('/', [StorefrontController::class, 'index']);
        Route::get('/{slug}', [StorefrontController::class, 'page'])
            ->where('slug', '[a-z0-9\-]+');
        Route::get('/product/{slug}', [StorefrontController::class, 'product']);
    });
```

### Middleware: `IdentifyStore`

```php
// app/Http/Middleware/IdentifyStore.php
class IdentifyStore
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();
        $subdomain = explode('.', $host)[0];

        // Pass through for main domain (www, top5pct, hub)
        if (in_array($subdomain, ['www', 'top5pct', 'hub'])) {
            return $next($request);
        }

        $store = Store::where('subdomain', $subdomain)
            ->where('is_active', true)
            ->firstOrFail();

        // 1. Bind globally — accessible via app('current_store') everywhere
        app()->instance('current_store', $store);

        // 2. Scope all Lunar product/pricing queries to this store's channel
        \Lunar\Facades\Channels::setCurrent($store->channel->handle);

        // 3. Share with all Blade views
        View::share('currentStore', $store);

        return $next($request);
    }
}
```

Register in `bootstrap/app.php`:
```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias(['identify.store' => \App\Http\Middleware\IdentifyStore::class]);
})
```

---

## 3. Tenant Layout & Dynamic Branding

### Layout: `resources/views/layouts/store.blade.php`

The single layout file that all storefront pages use. CSS variables are injected server-side from the `Store` model — no per-tenant CSS compilation needed.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $currentStore->name }} | Powered by Top 5 Percent</title>

    {{-- Tri-palette CSS injection — no Tailwind recompile needed --}}
    <style>
        :root {
            --brand-primary:   {{ $currentStore->colors['primary']   ?? '#2C2C2C' }};
            --brand-secondary: {{ $currentStore->colors['secondary'] ?? '#FFC20E' }};
            --brand-accent:    {{ $currentStore->colors['accent']    ?? '#3273DC' }};
            --brand-font:      "{{ $currentStore->font_family }}", 'Titillium Web', Arial, sans-serif;
        }
        body { font-family: var(--brand-font); }
        .bg-brand-primary   { background-color: var(--brand-primary); }
        .text-brand-primary { color: var(--brand-primary); }
        .bg-brand-secondary { background-color: var(--brand-secondary); }
        .bg-brand-accent    { background-color: var(--brand-accent); }
        .border-brand-primary { border-color: var(--brand-primary); }

        {{-- Global CSS override patch (Super Admin controlled) --}}
        @foreach(\App\Models\GlobalOverride::active()->get() as $patch)
            {{ $patch->css }}
        @endforeach
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-charcoal">

    {{-- Optional announcement banner --}}
    @if($currentStore->has_banner)
        <div class="bg-brand-accent text-white text-center py-2 text-sm font-semibold">
            {{ $currentStore->banner_text }}
        </div>
    @endif

    <x-store.nav />

    <main>
        {{ $slot }}
    </main>

    <x-store.footer />

    @livewireScripts
</body>
</html>
```

### Tailwind Config — CSS Variable Mappings

In `tailwind.config.js`, extend colors to reference CSS variables so Tailwind classes work against dynamic values:

```js
colors: {
    'brand-primary':   'var(--brand-primary)',
    'brand-secondary': 'var(--brand-secondary)',
    'brand-accent':    'var(--brand-accent)',
}
```

---

## 4. Curated Font List

Fonts are pre-loaded in the main CSS bundle to avoid per-request Google Fonts calls.

| Label | Font Family | Character |
|---|---|---|
| Modern | `Inter` | Default / clean |
| Professional | `Roboto` | Corporate |
| Authoritative | `Merriweather` | School / classic |
| Branded | `Titillium Web` | Top 5 Percent default |
| Sporty | `Oswald` | Athletic / spirit wear |
| Elegant | `Playfair Display` | Formal events |

The `StoreResource` Filament form exposes these as a `Select` dropdown. An additional `TextInput` field labeled "Custom Font Name" allows overriding with any Google Fonts name. If the custom field is populated, it takes precedence and a `<link>` to Google Fonts is injected in the store layout head.

---

## 5. Specialized Blade Components

All tenant-specific components live in `resources/views/components/store/`. They read from `app('current_store')` — never from props that would have to be passed manually on every page.

### Navigation Bar: `x-store.nav`

```
resources/views/components/store/nav.blade.php
```

- Logo position controlled by `$store->nav_layout` (`left` / `center` / `right`)
- `match()` maps layout to Tailwind flex classes
- Logo from `Storage::url($store->logo_path)`
- Nav links: dynamically built from `store_pages` (only `is_active` pages, ordered by `sort_order`)
- Always includes Lunar cart icon (`<livewire:lunar.components.cart-icon />`)
- Fully responsive — hamburger menu on mobile via Alpine.js

**Nav layout class map:**
```php
$flexClass = match($store->nav_layout) {
    'center' => 'flex-col items-center gap-4',
    'right'  => 'flex-row-reverse justify-between',
    default  => 'flex-row justify-between',
};
```

### Optional Banner: built into `layouts/store.blade.php` (see above)

Driven by `has_banner` + `banner_text` on the Store model. Managed from the Filament form. Background uses `bg-brand-accent`.

### Footer: `x-store.footer`

```
resources/views/components/store/footer.blade.php
```

- Store name, powered-by Top 5 Percent branding
- Contact info pulled from store config
- Simple two-column responsive layout
- Background: `bg-brand-primary`, text: white

### Catalog Display: `x-store.catalog` (Livewire)

```
app/Livewire/Store/Catalog.php
resources/views/livewire/store/catalog.blade.php
```

- Extends Lunar's product query with channel scoping
- Search input (`wire:model.debounce.300ms="search"`)
- Sort select (`wire:model="sort"`) — name A-Z, name Z-A, price low-high, price high-low
- Pagination via Lunar's `paginate()`
- Products displayed using `x-ui.card-product-hover` (existing component, already branded with CSS variable support)

```php
public function getProductsProperty()
{
    return \Lunar\Models\Product::active()
        ->whereHas('channels', function ($query) {
            $query->where('handle', app('current_store')->channel->handle);
        })
        ->when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%"))
        ->orderBy(...$this->sortMap[$this->sort])
        ->paginate(12);
}
```

### PDP (Product Detail Page): `x-store.pdp` (Livewire)

```
app/Livewire/Store/ProductDetail.php
resources/views/livewire/store/product-detail.blade.php
```

- Uses existing Lunar product detail logic
- Layout branded with CSS variables (no hardcoded colors)
- Add-to-cart uses Lunar CartSession
- Checkout type driven by `app('current_store')->type`:
  - Schools: adds "Student Name" + "Homeroom Teacher" fields
  - Corporate: adds "Purchase Order Number" field

### Event Calendar: `x-store.event-calendar`

```
resources/views/components/store/event-calendar.blade.php
```

- Loops `$store->events` array (JSON from Repeater)
- Displays: event name, formatted date, location
- Only shown when `$store->hasFeature('calendar')`
- Static render — SSR, no JavaScript needed

### Countdown Counter: `x-store.event-countdown`

```
resources/views/components/store/event-countdown.blade.php
```

- Shows countdown to first event where `show_countdown = true` and date is in the future
- Alpine.js `setInterval` updates days / hours / minutes / seconds every second
- Conditionally shown via `$store->hasFeature('countdown')` AND `$store->nextCountdownEvent()`
- Background: `bg-brand-accent`, text: white

```html
@php $event = app('current_store')->nextCountdownEvent(); @endphp
@if($event)
<div x-data="countdown('{{ $event['event_date'] }}')" class="py-6 bg-brand-accent text-white text-center">
    <h3 class="text-h4 font-bold mb-4">{{ $event['name'] }}</h3>
    <div class="flex justify-center gap-8 text-h3 font-bold">
        <div><span x-text="days"></span><p class="text-sm font-normal">Days</p></div>
        <div><span x-text="hours"></span><p class="text-sm font-normal">Hours</p></div>
        <div><span x-text="minutes"></span><p class="text-sm font-normal">Min</p></div>
        <div><span x-text="seconds"></span><p class="text-sm font-normal">Sec</p></div>
    </div>
</div>
@endif
```

### Roster Grid: `x-store.roster-grid`

```
resources/views/components/store/roster-grid.blade.php
```

- Loops `$store->roster` array (JSON from Repeater)
- Each entry: circular photo (`w-32 h-32 rounded-full object-cover border-4 border-brand-primary`), name, meta (grade or department)
- Grid: 2 cols mobile, 4 cols tablet+
- Photos served via `Storage::url($person['photo'])`
- Only shown when `$store->hasFeature('roster')`

---

## 6. Multi-Page Structure

A `StorePage` defines which sections appear on each page of a store. The `StorefrontController` looks up the requested slug, resolves the page's sections array, and renders them in order inside the store layout.

**Default home page sections (example school store):**
```json
["hero", "countdown", "banner", "catalog", "events", "roster"]
```

**Section render map (StorefrontController):**
```php
protected array $sectionComponents = [
    'hero'      => 'store.hero',
    'countdown' => 'store.event-countdown',
    'catalog'   => 'livewire:store.catalog',
    'events'    => 'store.event-calendar',
    'roster'    => 'store.roster-grid',
];
```

**Navigation** in `x-store.nav` auto-builds from active `store_pages`:
- Home page (`slug = ''`) is always the root `/`
- Additional pages are linked as `/{slug}`
- Page titles are used as nav labels

**Simple page management rule:** Stores start with one page (home). Additional pages are added by creating a `StorePage` record in Filament. No page builder — just an ordered sections array per page.

---

## 7. Lunar Dashboard (Filament) — StoreResource

### Location

```
app/Filament/Resources/StoreResource.php
app/Filament/Resources/StoreResource/Pages/
```

Create via: `php artisan make:filament-resource Store`

### Form Schema (Tabs)

**Tab 1 — Identity**
- `TextInput` → Store Name
- `TextInput` → Subdomain (unique validation, lowercase, slugified)
- `Select` → Linked Lunar Channel (lists all `Channel::all()`)
- `Toggle` → Is Active

**Tab 2 — Branding**
- `FileUpload` → Logo (`directory('store-logos')`)
- `Select` → Nav Layout (`left` / `center` / `right`)
- `ColorPicker` → Primary Color
- `ColorPicker` → Secondary Color
- `ColorPicker` → Accent Color
- `Select` → Font Family (curated list)
- `TextInput` → Custom Font Override (optional)

**Tab 3 — Banner**
- `Toggle` → Show Banner
- `TextInput` → Banner Text

**Tab 4 — Features**
- `CheckboxList` → Enabled Features (`calendar`, `countdown`, `roster`)

**Tab 5 — Events / Calendar**
- `Repeater` → Events
  - `TextInput` → Event Name (required)
  - `DateTimePicker` → Event Date (required)
  - `TextInput` → Location
  - `Toggle` → Show Countdown

**Tab 6 — Roster**
- `Repeater` → Roster Members (grid: 2 columns)
  - `FileUpload` → Photo (image only)
  - `TextInput` → Name
  - `TextInput` → Meta (placeholder: "Grade 5" or "Marketing Dept")

**Tab 7 — Pages**
- Inline `Repeater` or separate `StorePageResource` for managing multi-page section order

---

## 8. Super Admin Area

A restricted area within Filament accessible only to users with the `super_admin` role. Provides global controls across all tenants.

### 8a. Global CSS Override Tool

**Purpose:** Push a CSS patch to all storefronts simultaneously — e.g., fix a nav bug without redeploying.

**Table: `global_overrides`**
```php
Schema::create('global_overrides', function (Blueprint $table) {
    $table->id();
    $table->string('name');           // "Nav bar height fix — Apr 2026"
    $table->string('component');      // "store-nav" (descriptive only)
    $table->longText('css');          // Raw CSS injected into :root style block
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
```

**Model: `GlobalOverride`**
- Scope: `active()` — `where('is_active', true)`
- Cached with `Cache::remember('global_overrides', 300, ...)` — 5-min TTL
- Injected into `layouts/store.blade.php` inside the `<style>` block

**Filament Page: `SuperAdmin/GlobalOverridesPage`**
- Lists all overrides with active toggle
- `Textarea` (code-style) for CSS input
- "Push to All Stores" = saves record; cache is cleared; next page load picks it up
- No deploy required

### 8b. Bulk Inventory Tool

**Purpose:** Mark a product variant out of stock across every store/channel that carries it — one action.

**Filament Page: `SuperAdmin/BulkInventoryPage`**
- `Select` → Choose Product (searchable Lunar Product list)
- `Select` → Choose Variant (filtered by selected product)
- `Radio` → Action: "Mark Out of Stock" / "Restore Stock"
- Submit dispatches `BulkUpdateInventoryJob`

**Job: `BulkUpdateInventoryJob`**
```php
// app/Jobs/BulkUpdateInventoryJob.php
public function handle(): void
{
    // Update Lunar ProductVariant stock across all channels
    \Lunar\Models\ProductVariant::find($this->variantId)
        ->stocks()
        ->update(['quantity' => $this->quantity]); // 0 for out-of-stock
}
```

- Queued (not synchronous) — shows "Job dispatched" confirmation in Filament
- Result: all storefront catalog pages reflecting that variant will show "Sold Out"

---

## 9. Automated Tenant Onboarding

When a new `Store` is saved in Filament, a model observer dispatches `CreateTenantStoreJob`.

### Observer: `StoreObserver`

```php
// app/Observers/StoreObserver.php
public function created(Store $store): void
{
    CreateTenantStoreJob::dispatch($store);
}
```

### Job: `CreateTenantStoreJob`

Steps performed in sequence:

1. **Create Lunar Channel** — `Channel::create(['name' => $store->name, 'handle' => $store->subdomain, 'default' => false, 'url' => "https://{$store->subdomain}.top5pct.com"])`
2. **Link Channel to Store** — `$store->update(['lunar_channel_id' => $channel->id])`
3. **Seed default categories** — Assign standard "Spirit Wear" collection to the channel (using existing Lunar collection structure)
4. **Seed base products** — Optionally assign a set of default products (hoodie, tee, hat) to the channel
5. **Create default home page** — Create a `StorePage` with `slug = ''` and default section order
6. **Provision SSL (if Forge API key set)** — Call `ForgeApiService::addSubdomain($store->subdomain)` (see section 10)
7. **Dispatch `TenantStoreCreated` event** — Hook point for future: welcome email, Slack notification, etc.

All steps wrapped in a database transaction. If any step fails, the store creation is rolled back and an admin notification is sent.

---

## 10. SSL Automation via Laravel Forge

### Strategy: Wildcard SSL (Primary)

- In Laravel Forge, the `top5pct.com` site is configured with **Wildcard Subdomains** enabled
- This provisions a single `*.top5pct.com` Let's Encrypt certificate
- Any new `school.top5pct.com` subdomain is instantly HTTPS — no action required per tenant
- This is handled once at the Forge site level and does not require code

### Forge API: Per-Store Custom Domain (Future)

For clients who want `shop.schoolname.com` (CNAME pointing to Top 5 Percent):

```php
// app/Services/ForgeApiService.php
class ForgeApiService
{
    public function addCustomDomain(string $domain): void
    {
        Http::withToken(config('services.forge.api_key'))
            ->post("https://forge.laravel.com/api/v1/servers/{$serverId}/sites/{$siteId}/domains", [
                'domain' => $domain,
            ]);
        // Follow-up: request Let's Encrypt cert for that domain
    }
}
```

- Triggered from Super Admin panel — "Add Custom Domain" action on a Store record
- Forge API key stored in `.env` as `FORGE_API_KEY`
- Not part of automated onboarding — manual action for premium clients

---

## 11. File & Folder Structure

```
app/
├── Filament/
│   ├── Resources/
│   │   └── StoreResource.php
│   └── Pages/
│       └── SuperAdmin/
│           ├── GlobalOverridesPage.php
│           └── BulkInventoryPage.php
├── Http/
│   └── Middleware/
│       └── IdentifyStore.php
├── Jobs/
│   ├── CreateTenantStoreJob.php
│   └── BulkUpdateInventoryJob.php
├── Livewire/
│   └── Store/
│       ├── Catalog.php
│       └── ProductDetail.php
├── Models/
│   ├── Store.php
│   ├── StorePage.php
│   └── GlobalOverride.php
├── Observers/
│   └── StoreObserver.php
└── Services/
    └── ForgeApiService.php

database/migrations/
├── xxxx_create_stores_table.php
├── xxxx_create_store_pages_table.php
└── xxxx_create_global_overrides_table.php

resources/views/
├── layouts/
│   └── store.blade.php
├── components/
│   └── store/
│       ├── nav.blade.php
│       ├── footer.blade.php
│       ├── hero.blade.php
│       ├── event-countdown.blade.php
│       ├── event-calendar.blade.php
│       └── roster-grid.blade.php
└── livewire/
    └── store/
        ├── catalog.blade.php
        └── product-detail.blade.php

routes/
└── web.php   ← subdomain route group added
```

---

## 12. Frontend Page: `/design-services/custom-storefronts`

A new marketing page targeting potential storefront clients. Structure mirrors `/custom-apparel/dtf-transfers`.

**Route:** `GET /design-services/custom-storefronts`

**Page file:** `resources/views/pages/design-services/custom-storefronts.blade.php`

**Section order:**

| Section | Component | Notes |
|---|---|---|
| Hero | `x-sections.category-hero` | Heading: "Custom Storefronts for Schools & Businesses" |
| Intro | `x-sections.card-image-with-text` | What a custom storefront is and who it's for |
| Use case cards | `x-sections.editorial-cards` | Class Pictures · Spirit Wear · Corporate Events · Team Stores · Fundraisers |
| How it works | `x-sections.card-feature` (3 steps) | Submit info → We build it → Launch in days |
| Countdown/calendar preview | `x-sections.card-image-with-text` | Visual example showing countdown and calendar features |
| CTA | `x-sections.cta-ready-to-get-started` | "Get Your Store Built" → contact modal |

**SEO:** 7th grade reading level, "we" statements, Joliet/Shorewood/Chicagoland geo terms, no em dashes, no hyphens.

**Mega menu:** Add "Custom Storefronts" link to the "Design Services" mega menu panel.

---

## 13. Build Order / Recommended Sequence

1. **Migrations** — `stores`, `store_pages`, `global_overrides`
2. **Models** — `Store`, `StorePage`, `GlobalOverride` with casts and relationships
3. **Middleware** — `IdentifyStore` + register in `bootstrap/app.php`
4. **Routes** — Subdomain group in `routes/web.php`
5. **Store layout** — `resources/views/layouts/store.blade.php` with CSS variable injection
6. **Blade components** — `x-store.nav`, `x-store.footer`, `x-store.hero`, `x-store.event-countdown`, `x-store.event-calendar`, `x-store.roster-grid`
7. **Livewire components** — `Store/Catalog`, `Store/ProductDetail`
8. **Filament StoreResource** — Full tab-based form, list, and pages
9. **Super Admin** — `GlobalOverridesPage`, `BulkInventoryPage`
10. **Onboarding Job** — `CreateTenantStoreJob` + `StoreObserver`
11. **Forge wildcard SSL** — One-time server-level setup (manual, outside codebase)
12. **Frontend page** — `/design-services/custom-storefronts`
13. **Mega menu update** — Add "Custom Storefronts" link to Design Services panel

---

## 14. Open Items / Future Phases

| Item | Priority | Notes |
|---|---|---|
| Email white-labeling | Medium | Order confirmation emails pull `app('current_store')` logo/colors via Markdown Mailable |
| Custom CNAME SSL | Low | Forge API per-store domain — for premium clients only |
| Spatie Media Library for roster photos | Medium | Already in Lunar stack; use for photo management instead of raw `FileUpload` paths |
| School checkout fields | High | "Student Name" + "Homeroom Teacher" on checkout when `$store->type === 'school'` |
| Corporate checkout fields | High | "Purchase Order Number" field when `$store->type === 'corporate'` |
| `store_type` column | High | Add to `stores` table — drives checkout specialization and future feature branching |
| Tenant welcome email | Low | Fired from `TenantStoreCreated` event — sends login/setup info to client |
| Per-tenant product import | Medium | CSV upload to assign/import products to a store's channel in bulk |
