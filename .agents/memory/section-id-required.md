---
name: Section id required on x-sections components
description: Every <section> in an x-sections.* Blade component must have id="component-name" and scroll-margin-top: 80px — required for the /page-management scanner.
---

Every `<section>` element in an `x-sections.*` component must carry two attributes:

1. `id="component-name"` — slug matching the Blade filename (e.g. `banner-image` for `banner-image.blade.php`)
2. `style="...; scroll-margin-top: 80px;"` — included in the inline style string

**Why:** The Developer Dashboard at `/page-management` uses `app/Actions/ScanPageComponents.php` to scan page Blade files for component usage. It detects components by reading `id` attributes on `<section>` tags. A component whose `<section>` has no `id` will be invisible to the scanner and will not appear in the registry or on any page card.

**How to apply:** When creating any new `x-sections.*` component, the very first line of HTML must be:
```html
<section id="my-component-name" style="background: var(--...); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
```
The `id` value must be the kebab-case filename slug only — no prefix, no suffix.
