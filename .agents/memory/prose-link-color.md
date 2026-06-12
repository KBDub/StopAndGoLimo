---
name: Prose link color rule
description: The only approved inline prose link color is champagne — on any background. Azure is not for prose links.
---

## Rule

`var(--champagne)` is the **only** approved color for inline `<a>` tags in body copy, on any background (navy, cloud-light, white, or image overlay).

### Correct inline style (for use inside `bodyHtml` prop strings):
```html
style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"
```

### Correct CSS class (for use in Blade templates):
```html
<a href="..." class="link-champagne">link text</a>
```
`.link-champagne` is defined in `resources/css/app.css` — Poppins semibold, champagne text, champagne underline, hover lightens.

**Why:** User correction — confirmed champagne as the sole prose link color per the demo page "Prose link" specimen. Azure was previously (wrongly) listed as the inline link color in replit.md and branding docs.

**How to apply:** Every inline `<a>` in body copy or `bodyHtml` props must use champagne — regardless of section background color. Never use navy, azure, or any other palette color for a prose link.

## Where this is documented
- `replit.md` — Branding Rules (Quick Reference)
- `docs/branding-requirements.md` — §4 Link Styles, §5.1 Azure usage rule, §5.3 Color Hierarchy
- `resources/views/pages/demo.blade.php` — "Champagne underbar inline `<a>` — Prose link" specimen (Typography section)
