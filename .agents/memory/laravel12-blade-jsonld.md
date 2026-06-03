---
name: Laravel 12 upgrade & Blade JSON-LD fix
description: Blade in Laravel 12 misparses "@context"/"@type"/"@id" in JSON-LD as directives; fix depends on whether content is static or dynamic.
---

## The rule
Laravel 12's Blade compiler treats `@word` inside `@push` blocks (and layout files) as directives, even when inside `<script type="application/ld+json">`. This causes PHP parse errors at runtime.

**Why:** Blade's regex parser finds `@identifier` anywhere in template text, including inside JSON strings.

**Two fix patterns:**

1. **Static JSON-LD** (no Blade expressions inside): wrap the `<script>` blocks in `@verbatim` / `@endverbatim`.
2. **Dynamic JSON-LD** (has `{{ }}`, `{!! !!}`, `@if`, `@foreach` inside): use `@@context`, `@@type`, `@@id` etc. to escape the @ signs. Blade compiles `@@word` to the literal `@word` in output.

**Also:** `content="@top5pct"` in meta tags must be `content="@@top5pct"`.

**How to apply:** Any time a Blade template (page, layout, or component) contains JSON-LD structured data with `@context`, `@type`, `@id` keys, apply one of the two patterns above.

## Upgrade notes (L11 to L12)
- `composer.json` constraints: `"laravel/framework": "^12.60"`, `"spatie/laravel-responsecache": "^8.0"`
- Run: `composer update -W --no-scripts --no-dev`
- Already on slim `bootstrap/app.php` (no Kernel.php) — no structural changes needed.
- After upgrade, republish Livewire assets: `php artisan livewire:publish --assets`
- Clear all caches: `php artisan optimize:clear`
