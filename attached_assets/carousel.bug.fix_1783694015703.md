# Carousel: Repeated Image Download Bug and Fix

**File:** `resources/views/components/ui/carousel-rotating-images.blade.php`

## The bug

Every 3,500 ms the auto-rotation timer called `next()`, which incremented `current`. Three computed Alpine getters (`lImg`, `cImg`, `rImg`) all returned new image objects at the same moment. The three `<img>` elements bound to those getters changed their `src` attributes simultaneously:

```html
<img :src="lImg.src" ...>   {{-- left slot  --}}
<img :src="cImg.src" ...>   {{-- center slot --}}
<img :src="rImg.src" ...>   {{-- right slot  --}}
```

Because none of those URLs had been loaded into the browser cache beforehand, the browser fired up to **three fresh HTTP requests per tick** — repeating on every rotation cycle for the life of the page.

The original `x-init` had no preload step:

```html
x-init="applyResponsive(); startTimer()"
```

## The fix

Added a `preload()` call as the first step in `x-init` (line 70), so all images are fetched and cached before the timer starts:

```html
x-init="preload(); applyResponsive(); startTimer()"
```

The `preload()` method (lines 33-38) iterates every image and creates a throwaway `Image` object for each one:

```js
preload() {
    this.images.forEach(function(img) {
        var i = new Image();
        i.src = img.src;
    });
},
```

Setting `i.src` tells the browser to fetch and cache that URL immediately. After `preload()` completes, every subsequent `:src` change during rotation is served from memory with no network round-trip.

The fix is also documented in the component comment block (lines 13-15):

```
All images are preloaded via new Image() in x-init before the timer starts.
This warms the browser cache so that when each slot's :src changes on rotation,
the browser serves it from memory — no re-fetches, no extra network requests.
```

## Why the product carousel is unaffected

`carousel-product.blade.php` uses `x-for` to render all product images into the DOM immediately (thumbnail strip and mobile scroll track). The browser loads and caches all image URLs as a side-effect of the initial DOM render, so no separate preload step is needed.
