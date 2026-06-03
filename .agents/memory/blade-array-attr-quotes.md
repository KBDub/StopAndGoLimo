---
name: Blade inline array attributes with double quotes
description: Blade component attributes that contain PHP arrays with HTML strings break when the HTML uses double-quoted attributes.
---

## The rule
Never pass a PHP array containing HTML strings as an inline Blade component attribute when the HTML uses double quotes.

**Broken:**
```blade
<x-sections.faq
    :faqs="[
        ['q' => '...', 'a' => 'Call <a href="tel:+1..." class="link">here</a>.'],
    ]"
/>
```
Blade's attribute parser sees the `"` inside `href="..."` and thinks the attribute value ended there. Everything after becomes raw text output on the page.

**Why:** Blade component attributes are delimited by double quotes at the HTML level. Double quotes inside the value — even inside a PHP string inside a PHP array — terminate the attribute early.

**Fix:** Move the array into a `@php` block before the component, then reference the variable:
```blade
@php
$pageFaqs = [
    ['q' => '...', 'a' => 'Call <a href="tel:+1..." class="link">here</a>.'],
];
@endphp
<x-sections.faq :faqs="$pageFaqs" />
```

**How to apply:** Any time a Blade component receives a prop that is a PHP array AND any array value contains HTML with double-quoted attributes, use the `@php` block pattern. This affects FAQ sections, feature lists, or any other data-rich props passed inline.

## Affected pages (fixed)
46 pages under `resources/views/pages/` were bulk-fixed with a PHP script that transformed `:faqs="[...]"` to the `@php $pageFaqs = [...]; @endphp` + `:faqs="$pageFaqs"` pattern.
