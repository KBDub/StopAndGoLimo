# Stop & Go Limo - Airport Shuttle Service

This is the public website for Stop & Go Airport Shuttle Service Inc., a premium limousine and airport transportation company based in New Lenox, Illinois.

## Run & Operate

-   **Start Development Server:** `bash scripts/startup-dev.sh`
-   **Run Migrations:** `php artisan migrate --seed`
-   **Clear All Caches:** `php artisan optimize:clear` then restart the workflow
-   **Compile Frontend Assets:** `npm run dev` (development) or `npm run build` (production)

## Stack

-   **Framework:** Laravel 11, TALL stack (Tailwind CSS, Alpine.js, Livewire v3)
-   **Database:** PostgreSQL
-   **ORM:** Eloquent
-   **Build Tool:** Vite
-   **Testing:** Pest PHP
-   **Static Analysis:** Larastan (Level 5+)
-   **Lunar PHP v1.2:** Installed as scaffolding only. Stop & Go Limo is a service business — there is no cart, no checkout, no product catalog, and no order management. Do not add or restore any e-commerce functionality.

## Master Layout — How Every Page Works

Every page on the site uses one master layout component:

```blade
<x-layouts.page
    title="Page Title"
    metaDescription="..."
    currentPage="nav-item-key"
    :noIndex="false"
>
    {{-- page content here --}}
</x-layouts.page>
```

**File:** `resources/views/components/layouts/page.blade.php`

This component handles everything automatically:
- Full `<html>`, `<head>`, `<body>` document structure
- All meta tags, OG tags, canonical URL, robots, favicon
- Google Tag Manager (GTM)
- Vite asset loading (CSS + JS)
- Structured data (LocalBusiness + WebSite JSON-LD)
- The navigation bar via `<x-nav.navbar />`
- Livewire styles and scripts

**Never write a raw `<!DOCTYPE html>`, `<html>`, `<head>`, or `<body>` in a page file.** Never manually load assets or include the nav/footer sub-components directly in a page. The master layout does all of this. Violating this rule breaks the nav styling, meta tags, GTM, and asset loading.

## Navigation System

The nav is rendered by `<x-nav.navbar />` and is included automatically by `<x-layouts.page>`. Do not call it directly in page files.

-   **CSS scope:** All nav styles live in `resources/css/app.css` under the `.sg-nav` parent class.
-   **Nav links:** Uppercase text (approved exception to the no-caps rule — nav only).
-   **Active state:** `text-champagne` with a 3px champagne bottom border.
-   **Dropdowns:** Pure CSS hover system — no JavaScript. Standard, mega two-column, and four-column area grid variants.
-   **Mobile:** Alpine.js hamburger menu.

## Where Things Live

| What | Where |
|---|---|
| Master layout | `resources/views/components/layouts/page.blade.php` |
| Nav component | `resources/views/components/nav/navbar.blade.php` |
| Nav CSS (`.sg-nav`) | `resources/css/app.css` — bottom section |
| Page views | `resources/views/pages/` |
| Section components | `resources/views/components/sections/` |
| UI components | `resources/views/components/ui/` |
| Layout sub-components | `resources/views/components/layout/` |
| Developer dashboard | `/page-management` — `resources/views/pages/page-management.blade.php` |
| Page scanner action | `app/Actions/ScanPageComponents.php` |
| Branding guidelines | `docs/branding-requirements.md` |
| Tailwind config | `tailwind.config.js` |
| Main CSS | `resources/css/app.css` |
| Routes | `routes/web.php`, `routes/main-site.php` |
| Dev startup script | `scripts/startup-dev.sh` |

## Architecture Decisions

-   **Master layout is mandatory.** Every page in `resources/views/pages/` must use `<x-layouts.page>`. No exceptions.
-   **Modular files.** Strict 800-line limit per file. Split into Actions, partials, or sub-components when approaching the limit.
-   **Component-based UI.** Every `<section>` is a Blade or Livewire component. No inline section markup in page files.
-   **No e-commerce.** Lunar PHP is present but none of its cart, checkout, product, or order features are in use. Do not add them.
-   **Nav uppercase is the only all-caps exception.** The `.nav-link` CSS class applies `text-transform: uppercase`. Everywhere else on the site, all-caps is forbidden.

## Developer Dashboard — `/page-management`

A developer-only tool that scans all page blade files and reports component usage.

**Key files:**
-   `app/Actions/ScanPageComponents.php` — scans pages, detects components, reads `@props` defaults, diffs prop overrides, flags dynamic templates
-   `resources/views/pages/page-management.blade.php` — main dashboard shell
-   `resources/views/components/ui/page-management-page-card.blade.php` — per-page card with component chips
-   `resources/views/components/ui/page-management-registry-card.blade.php` — per-component registry card
-   `resources/views/components/ui/page-management-legend.blade.php` — color legend

**Features:** live search, group filter pills, external page links, dynamic template badge, bi-directional inter-linking between page cards and registry, prop override chips with tooltips.

## Branding Rules (Quick Reference)

Full rules in `docs/branding-requirements.md` — read it before any UI change.

-   **Colors:** Only named Twilight Luxe CSS custom properties — `var(--navy)`, `var(--champagne)`, `var(--azure)`, `var(--cloud)`, `var(--slate)`, `var(--white)`. No raw hex, no `rgb()`, no `hsl()`.
-   **No all-caps** anywhere except nav links (approved exception).
-   **Fonts:** Poppins (`font-head`) for headings and nav, Montserrat (`font-body`) for body copy.
-   **Sharp corners** on all cards, inputs, and sections. No `rounded` on containers.
-   **Azure** is for inline links, focus rings, and info highlights only. Never on buttons or backgrounds.
-   **No double hyphens.** Use a comma instead.
-   **7th grade reading level** for all copy.
-   **Responsive.** Every component must work at mobile, tablet, and desktop. Never use a bare width class like `w-96` — always pair with `w-full sm:w-96`.

## Gotchas

-   **`use` statements are illegal inside `@php` blocks.** Laravel auto-aliases `Str::`, `Arr::`, and all facades globally — just use them directly.
-   **`@media` inside a Blade `<style>` block** must be written as `@@media` or Blade parses it as a directive.
-   **JSON-LD in Blade** — `@context`, `@type`, `@id` are parsed as Blade directives. Use `@verbatim` for static blocks or `@@context` / `@@type` for dynamic ones.
-   **Livewire v3** bundles Alpine.js — never import Alpine separately in `app.js`.
-   **Alpine plugins** must register via `document.addEventListener('alpine:init')`.
-   **`overflow: hidden` on `<html>`** traps sticky elements. If you need to hide overflow, apply it to `<body>` or a specific component wrapper instead.

## User Preferences

-   **"mnc"** = make no changes — analyze and respond only, do not edit any files
-   **Address the user as "boss"**
-   Always use PHP for scripting and automation — never another language
-   Always ask when unsure rather than assuming
-   Always read `docs/branding-requirements.md` before any UI or copy change
-   Always read `docs/image-video-control.md` before any image or video change
-   **Em dashes in headings/subheadings:** Rephrase as a "we/our" or action statement showing how the company helps the customer (e.g. "Will Turn" instead of "—Turns"). Use a comma as a secondary option. See `docs/branding-requirements.md` §2 for the full rule.
