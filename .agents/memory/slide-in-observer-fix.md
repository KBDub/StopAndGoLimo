---
name: slideIn banner IntersectionObserver fix
description: Why translateX on the slide-in banner breaks IntersectionObserver and the correct offsetTop-based fallback.
---

## Problem

`x-ui.card-banner-slide-in` starts with `transform: translateX(-100%/100%)` and `opacity: 0`. The JS uses `IntersectionObserver` to detect when the element is in view and add `is-visible`.

Most browsers compute `isIntersecting` from `getBoundingClientRect()`, which INCLUDES CSS transforms. So `translateX(-100%)` moves the element's observed bounding rect off-screen — `isIntersecting` is never true and the element stays invisible (pure white blank, showing the page background).

## Fix (in card-banner-slide-in.blade.php)

```javascript
function isInLayoutViewport() {
    // offsetTop is layout-based, unaffected by CSS transform
    return el.offsetTop < (window.pageYOffset + window.innerHeight);
}
if (isInLayoutViewport()) {
    setTimeout(reveal, 80); // short delay so CSS transition plays
    return;
}
// For elements far below fold: expand rootMargin horizontally so
// the transform offset doesn't prevent detection
var obs = new IntersectionObserver(callback, {
    threshold: 0.05,
    rootMargin: '0px 200% 0px 200%'
});
```

**Why:** `el.offsetTop` returns the layout position without transforms. The 80ms delay allows the page to paint before the `is-visible` class fires the CSS transition. `rootMargin: '0px 200% 0px 200%'` catches elements translated far to the left/right as a fallback.

**How to apply:** Any component that uses `transform: translateX(±100%)` + IntersectionObserver needs this pattern. Never rely on raw IO for elements that start transformed off-screen.

## Also

Changed `loading="lazy"` to `loading="eager"` on slide-in images since they appear near the top of the page.
