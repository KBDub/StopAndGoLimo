---
name: Alpine :style wipes inline style attribute
description: When x-bind:style evaluates to an empty string, Alpine replaces the entire style="" attribute, stripping any static inline styles on the same element.
---

## The Rule

Never rely on a static `style="background:var(--x); color:var(--y);"` attribute on the same element as an Alpine `:style` binding. When `:style` evaluates to `''` (its "off" state), Alpine writes `style=""` — wiping all static inline styles.

**Why:** Alpine's `:style` directive owns the entire `style` attribute. When the expression is falsy/empty it sets the attribute to an empty string, not a merge.

**How to apply:**
- Put base colors, backgrounds, and fonts in **Tailwind classes** (`class="bg-navy-dark text-cloud-light"`). These live in the stylesheet and are immune to Alpine's style replacement.
- Reserve `:style` ONLY for the truly dynamic property (e.g., `opacity`, `cursor`, `transform`).
- If you need both a base color AND dynamic opacity, include the base color inside the `:style` expression at all times: `:style="loading ? 'background:var(--champagne);opacity:0.7' : 'background:var(--champagne)'"` — or just use a Tailwind class for the color and `:style` only for opacity.

## Symptom

Elements appear unstyled (white inputs, invisible buttons) on pages with a light-background `<body>`, but appear correctly on dark-background pages. The dark page masks the loss of the inline `background` by showing the page backdrop through the transparent element.

## Example Fix (modal-quote inputs and submit button)

Before (broken):
```html
<input style="background:var(--navy-dark); color:var(--cloud-light); ..." :style="errors.name ? 'border-color:red' : ''">
<button style="background:var(--champagne); color:var(--navy-dark); ..." :style="loading ? 'opacity:0.7' : ''">
```

After (fixed):
```html
<input class="bg-navy-dark text-cloud-light" style="border:1px solid rgba(220,181,126,0.25); ...">
<button class="bg-champagne text-navy-dark" :style="loading ? 'opacity:0.7; cursor:not-allowed;' : ''">
```
