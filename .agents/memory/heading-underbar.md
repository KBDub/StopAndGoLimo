---
name: H2 heading champagne underbar pattern
description: The mandatory fit-content wrapper + 116% width rule for the 3px champagne underbar on H2 section headings.
---

## Rule

Every H2 section heading with a champagne underbar MUST use this exact structure:

```html
<div style="width: fit-content; margin-bottom: 1.5rem;">
    <h2 class="font-head" style="font-size: clamp(2rem, 5vw, 3.25rem); font-weight: 400; color: var(--cloud-light); line-height: 1.15; letter-spacing: 0.3px;">
        Regular word <strong style="font-weight: 700; color: var(--champagne);">Bold word</strong>
    </h2>
    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
</div>
<p class="font-body" style="... margin-bottom: 2rem;">Blurb text outside the fit-content wrapper.</p>
```

**Why:** `width: 116%` on the underbar div resolves against its parent. Without `width: fit-content` on the parent, 116% resolves to 116% of the full section width — a nearly full-width bar. With `width: fit-content`, the parent collapses to the heading text width and 116% becomes slightly wider than the heading — the correct branded look.

**How to apply:** Any time you write an H2 + underbar pair, wrap BOTH the h2 and the underbar div in a `width: fit-content` container. The blurb `<p>` sits OUTSIDE that wrapper. Never use a fixed width (e.g. `4rem`, `14rem`) or `width: 30%` for section H2 underbars — fixed widths are only for sub-headings (H3/H4).

## Variants documented in /demo

- Dark section (navy bg): `color: var(--cloud-light)` on h2
- Light section (cloud-light bg): `color: var(--navy)` on h2
- The 3px champagne rule stays `var(--champagne)` on all backgrounds

## Anti-patterns (never do)

```html
{{-- WRONG: no fit-content wrapper → 116% is 116% of section --}}
<div style="margin-bottom: 2.5rem;">
    <h2>...</h2>
    <div style="height: 3px; background: var(--champagne); width: 116%;"></div>
</div>

{{-- WRONG: fixed width instead of 116% --}}
<div style="height: 3px; background: var(--champagne); width: 4rem;"></div>
```
