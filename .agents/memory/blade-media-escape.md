---
name: Blade @media escape in style blocks
description: @media inside a Blade <style> block is silently swallowed by the Blade compiler; use @@media to emit the correct CSS rule.
---

## Rule

Any `@` symbol inside a `<style>` block in a `.blade.php` file is interpreted by Blade as a directive call. If the directive doesn't exist, the line is silently dropped — no error, no output.

**How to apply:** Write `@@media` instead of `@media` in every Blade component `<style>` block.

```css
/* WRONG — Blade eats this silently */
@media (min-width: 1024px) { ... }

/* CORRECT */
@@media (min-width: 1024px) { ... }
```

**Why:** The same root cause as the `@@context`/`@@type` fix in JSON-LD blocks. Blade's `@` directive parser runs before the HTML/CSS is emitted, so any bare `@word` token is treated as a potential directive regardless of whether it's inside a `<style>` or `<script>` tag.

**How to apply:** Any time you write a `<style>` block directly in a `.blade.php` file, replace all `@` CSS rules (`@media`, `@keyframes`, `@supports`, `@font-face`) with `@@`.
