---
name: overflow-x hidden breaks sticky nav
description: overflow-x hidden on html element kills position sticky — use body instead, fix at component level first
---

**Rule:** Never set `overflow: hidden` (or any non-visible value) on `<html>`. It turns html into the scroll container, breaking `position: sticky` on all descendants.

**Why:** `position: sticky` needs a scrolling ancestor. Setting `overflow: hidden` on `<html>` makes it a non-scrollable container — sticky elements find it as their scroll parent but cannot stick because nothing scrolls inside it.

**Safe pattern:**
- `<body>` gets `overflow-x: hidden` — safe because when `<html>` has default `overflow: visible`, the browser propagates body's overflow to the viewport. Body itself stays `overflow: visible` for layout, so sticky works normally.
- Fix overflow at the component level first (add `relative overflow-hidden` wrapper to the overflowing component). Use body as a catch-all backstop only.

**How to apply:** Any time horizontal overflow needs to be prevented globally, add `overflow-x-hidden` to `<body>` only. If a specific component is the cause (carousel track, slide-in animation starting at translateX(100%)), add `overflow-hidden` to that component's wrapper with `relative` for positioning context.

**Discovered on:** 2026-06-03 while fixing mobile horizontal scroll on Top 5 Percent category pages.
