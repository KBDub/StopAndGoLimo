# x-ui.contact-modal — Integration Guide
**Stack:** Laravel + Livewire v3 + Alpine.js (bundled with Livewire)  
**Brand:** Golden Optimism — Top 5 Percent

---

## File Manifest

| File | Purpose |
|---|---|
| `resources/views/components/ui/contact-modal.blade.php` | Anonymous Blade component — FAB button + modal shell |
| `app/Livewire/Ui/ContactForm.php` | Livewire v3 component class — validation & submission |
| `resources/views/livewire/ui/contact-form.blade.php` | Livewire view — form & success state |

---

## 1. Register the Livewire Component

In `app/Providers/AppServiceProvider.php` (or any booted service provider):

```php
use Livewire\Livewire;
use App\Livewire\Ui\ContactForm;

Livewire::component('ui.contact-form', ContactForm::class);
```

Or rely on **automatic discovery** (Livewire v3 default) — the component will
be found automatically as `ui.contact-form` from the `App\Livewire\Ui` namespace.

---

## 2. Add to Your Layout

Drop the component once — typically in `resources/views/layouts/app.blade.php`
just before the closing `</body>` tag:

```blade
{{-- Floating Contact Button + Modal (sitewide) --}}
<x-ui.contact-modal />

@livewireScripts
</body>
```

**All props have sensible defaults.** Override as needed:

```blade
<x-ui.contact-modal
    buttonLabel="Get a Free Quote"
    modalTitle="Request a Custom Quote"
    modalSubtitle="Same-day service available &middot; Joliet, IL"
    logoSrc="/images/logos/top5-logo.gif"
    logoAlt="Top 5 Percent"
/>
```

---

## 3. Ensure Titillium Web Is Loaded

Add to `<head>` in your layout (if not already present):

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">
```

---

## 4. Email Notification (Optional)

1. Create a Mailable:
   ```
   php artisan make:mail ContactFormSubmitted --markdown=emails.contact-submitted
   ```

2. Uncomment the `Mail::to(...)->send(...)` block in `ContactForm.php`.

3. Set the recipient in `.env`:
   ```
   MAIL_CONTACT_ADDRESS=info@top5pct.com
   ```

---

## 5. Tailwind Purge Safety

The component uses **CSS custom properties** and **inline styles** for all
brand-specific values, so no Tailwind purge config changes are needed for
the brand tokens. The minimal Tailwind utilities used (`fixed`, `inset-0`,
etc.) are standard classes already in your safelist.

---

## Component Architecture

```
x-ui.contact-modal (Alpine.js)
│
├── .t5-fab (fixed button, bottom-right)
│     └── pulsing halo ring (CSS @keyframes)
│
└── .t5-backdrop (modal overlay, x-transition)
      └── .t5-panel (modal card)
            ├── gold stripe (8px gradient)
            ├── header (linen bg, logo, title, ✕ close)
            ├── gold rule (2px)
            │
            └── @livewire('ui.contact-form')
                  ├── FORM STATE (wire:model.live debounced)
                  │     ├── Name + Phone (2-col grid ≥480px)
                  │     ├── Email
                  │     ├── Service Interest (select)
                  │     ├── Message (textarea + char counter)
                  │     └── Submit (gold gradient, loading state)
                  │
                  └── SUCCESS STATE
                        ├── Gold checkmark badge
                        ├── Confirmation copy
                        ├── Azure info pill (auto-close notice)
                        └── "Send another message" reset link
```

### Event Flow

```
[User clicks Submit]
      │
      ▼
Livewire::submit() → validates → (optional: Mail::send)
      │
      ├─→ $submitted = true         (switches view to success state)
      │
      └─→ $this->dispatch('contact-form-submitted')   (browser event)
                │
                ▼
         Alpine @contact-form-submitted.window
                │
                └─→ setTimeout(() => closeModal(), 3200ms)
```
