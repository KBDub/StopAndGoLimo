# Quote Form Submission — Current State and Build Plan

## Overview

The quote form on `/get-a-quote` (component `x-sections.free-instant-quote`) currently **does not work**. It submits via `method="GET"` to a GET-only route, so all field data is discarded as URL query parameters and nothing is saved or emailed. This document captures the full diagnosis and the exact build plan so work can resume once mail credentials are available.

---

## Files Involved

| Role | File |
|---|---|
| Page | `resources/views/pages/get-a-quote.blade.php` |
| Form component | `resources/views/components/sections/free-instant-quote.blade.php` |
| Routes | `routes/main-site.php` |
| Existing contact controller | `app/Http/Controllers/ContactController.php` |
| Existing custom-order controller | `app/Http/Controllers/CustomOrderController.php` |
| Shared model | `app/Models/CustomOrderRequest.php` |
| Database table | `custom_order_requests` (migration already ran) |

---

## Issue Inventory

### Form (`free-instant-quote.blade.php`)

| Problem | Detail |
|---|---|
| `method="GET"` | Submits fields as query params to the GET page route — nothing is processed |
| No `@csrf` directive | Any POST route will reject the request with HTTP 419 without the token |
| CAPTCHA is a placeholder | A `<div>` showing "reCAPTCHA will load here" — no actual verification |
| No success or error feedback | User sees no message after submitting |
| Missing pickup location field | Only destination is collected; pickup is needed for a complete quote |

### Routes (`routes/main-site.php`)

| What exists | What is missing |
|---|---|
| `GET /get-a-quote` renders the page | No `POST /get-a-quote` route |
| `POST /contact/message` → `ContactController::sendMessage` | Different form (contact modal), different field names (`firstName`, `lastName`, `message`) |
| `POST /custom-order/submit` → `CustomOrderController::submit` | Apparel-only; expects `orderType=apparel`; imports Lunar cart models |

### Existing Controllers

Both `ContactController` and `CustomOrderController` carry `T5P-` reference prefixes and logic specific to an apparel business. They must not be modified for the limo quote flow. A dedicated `QuoteController` is required.

### Email / Notifications

| Setting | Current value |
|---|---|
| `MAIL_MAILER` | `log` — emails written to `storage/logs/laravel.log`, never sent |
| `MAIL_FROM_ADDRESS` | `hello@example.com` — placeholder |
| Mailable class for quotes | None exists |
| Email template | None exists |

### Database

The `custom_order_requests` table and `CustomOrderRequest` model are clean and reusable. Quote submissions will use `order_type = 'quote'` and reference prefix `SG-QT-`.

---

## Build Plan

### Step 1 — Update the form (`free-instant-quote.blade.php`)

- Change `method="GET"` to `method="POST"`
- Add `@csrf` immediately inside the opening `<form>` tag
- Add a pickup location field (text input, `name="pickup_location"`, required) above or beside the destination field
- Add a success flash message block (shown when `session('quote_success')` is set)
- Add an error summary block (shown when `$errors->any()`)

### Step 2 — Add the POST route (`routes/main-site.php`)

```php
Route::post('/get-a-quote', [\App\Http\Controllers\QuoteController::class, 'submit'])
    ->name('quote.submit');
```

### Step 3 — Create `QuoteController`

**File:** `app/Http/Controllers/QuoteController.php`

Responsibilities:
- Validate all fields (name, phone, email, vehicle_type, passengers, pickup_location, destination, booking_date, additional_info)
- Save to `custom_order_requests` with `order_type = 'quote'`, reference `SG-QT-XXXXXXXX`, status `pending`
- Fire `Mail::to($notifyAddress)->send(new QuoteSubmitted($record))` to notify the business
- Redirect back with `session()->flash('quote_success', true)` on success
- Let Laravel validation errors redirect back automatically with `$errors`

### Step 4 — Create `QuoteSubmitted` Mailable

**File:** `app/Mail/QuoteSubmitted.php`

Responsibilities:
- Accept a `CustomOrderRequest $quote` in the constructor
- Render `resources/views/emails/quote-submitted.blade.php`
- Subject line: "New Quote Request — {$quote->reference}"

### Step 5 — Create the email template

**File:** `resources/views/emails/quote-submitted.blade.php`

Plain, readable notification to the business owner containing:
- Reference number
- Name, phone, email
- Vehicle type, passengers
- Pickup location, destination, booking date
- Additional information
- Link to reply to the customer

### Step 6 — Configure `.env` mail credentials

Required keys (values to be supplied by the client):

```env
MAIL_MAILER=smtp
MAIL_HOST=
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=
MAIL_FROM_NAME="Stop and Go Airport Shuttle"
QUOTE_NOTIFY_EMAIL=
```

`QUOTE_NOTIFY_EMAIL` is the address that receives new quote notification emails (typically the owner's inbox).

### Step 7 — reCAPTCHA v3

Requires two keys from the Google reCAPTCHA console:

```env
RECAPTCHA_SITE_KEY=
RECAPTCHA_SECRET_KEY=
```

Implementation: load the reCAPTCHA v3 script, inject a hidden `g-recaptcha-response` token on form submit, verify the token server-side in `QuoteController` before saving.

---

## Decisions Needed Before Building

| # | Decision | Status |
|---|---|---|
| 1 | Mail provider (Gmail SMTP, Mailgun, Postmark, SendGrid, other) | Waiting on credentials |
| 2 | Email address to receive quote notifications | Waiting on credentials |
| 3 | reCAPTCHA site key and secret key | Waiting on credentials |

---

## Reference Prefix Convention

| Form | Controller | Prefix |
|---|---|---|
| General contact modal | `ContactController::sendMessage` | `T5P-MSG-` |
| Apparel custom order | `CustomOrderController::submit` | `T5P-` |
| **Limo quote (new)** | `QuoteController::submit` | `SG-QT-` |

The `T5P-` prefix is leftover from the project this site was scaffolded from. All new limo-specific submissions use `SG-` prefixes.
