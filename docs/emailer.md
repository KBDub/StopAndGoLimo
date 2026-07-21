# Stop & Go Limo — Email System Documentation

## Overview

The application uses **Laravel's modern Mailable class pattern** with the `Envelope` / `Content` API introduced in Laravel 9 and carried forward through Laravel 11. There is one mailable in the entire system. It sends an internal staff notification when a customer submits a quote request. No email is sent to the customer.

---

## Mailable Class

**File:** `app/Mail/QuoteSubmitted.php`

```
App\Mail\QuoteSubmitted extends Illuminate\Mail\Mailable
```

### Pattern: Envelope / Content API

This is the **modern Laravel mailable style** (not the legacy `build()` method). It splits configuration into two dedicated methods:

| Method | Class returned | Purpose |
|---|---|---|
| `envelope()` | `Illuminate\Mail\Mailables\Envelope` | Sets subject, reply-to, from overrides, tags |
| `content()` | `Illuminate\Mail\Mailables\Content` | Points to the Blade view (or markdown view) |

### Traits

| Trait | Source | What it does |
|---|---|---|
| `Queueable` | `Illuminate\Bus\Queueable` | Allows the mailable to be pushed to a queue via `->queue()`. Not currently used — emails are sent synchronously. |
| `SerializesModels` | `Illuminate\Queue\SerializesModels` | Safely serializes Eloquent models into the queue payload by storing only the model ID, then re-fetching the record when the job is processed. Required any time an Eloquent model is injected into a Queueable mailable. |

### Constructor

```php
public function __construct(public readonly CustomOrderRequest $quote) {}
```

- The `CustomOrderRequest` model is injected via constructor promotion.
- It is declared `public` so the Blade view can access `$quote` directly without any explicit `->with()` call. Laravel automatically passes all public properties of a Mailable to the view.
- `readonly` prevents accidental mutation after construction.

### Envelope

```php
return new Envelope(
    subject: 'New Quote Request — ' . $this->quote->reference,
);
```

The subject is dynamically built using the unique quote reference (e.g., `New Quote Request — SG-QT-A1B2C3D4`).

> **Caveat:** The subject line contains an em dash. The branding rules ban em dashes from website copy, but this is an internal-only staff notification email, not customer-facing content. If this ever becomes customer-facing, the em dash must be replaced with a comma or removed.

### Content

```php
return new Content(
    view: 'emails.quote-submitted',
);
```

Points to the Blade view at `resources/views/emails/quote-submitted.blade.php`.

---

## Email View / Template

**File:** `resources/views/emails/quote-submitted.blade.php`

### Structure

This is a **standalone, self-contained HTML email file**. It does NOT use the master `<x-layouts.page>` layout. That is correct and intentional. Email clients cannot process Tailwind CSS, Vite-compiled assets, Alpine.js, or Livewire. Email templates must be self-contained with inline-compatible CSS.

| Section | Description |
|---|---|
| `<head>` | Full `<!DOCTYPE html>` with inline `<style>` block — standard email practice |
| `.header` | Navy background (`#0b1f3a`), champagne heading (`#c9a84c`), company name |
| `.ref` | Displays the unique quote reference number (`REF: SG-QT-XXXXXXXX`) |
| Contact table | Name, phone, email — pulled from `$quote` model columns |
| Trip details table | Service type, passengers, pickup, destination, travel date — pulled from `$quote->payload` (JSON column) |
| Additional info | Conditionally rendered only if `$quote->payload['additional_info']` is not empty |
| CTA button | `mailto:` link pre-addressed to the customer's email with the reference in the subject |
| `.footer` | Company name, domain, reference number |

### Data Access Pattern

Public model columns are accessed directly: `$quote->reference`, `$quote->contact_name`, etc.

Payload fields (JSON) use null-coalescing: `$quote->payload['service_type'] ?? 'N/A'`

Travel date uses Carbon for formatting:
```php
\Carbon\Carbon::parse($quote->payload['travel_date'])->format('F j, Y')
```

### CSS Approach

Inline-compatible `<style>` block in the `<head>`. This works in most email clients (Gmail, Apple Mail, Outlook on Mac). It uses raw hex values, not CSS custom properties. CSS variables (`var(--navy)`) do not work in email clients and must never be used in email templates.

### Known Issues in the Template

- The footer contains `&mdash; &mdash;` (two HTML em dash entities), which renders as two em dashes between the company name and the domain. This violates the em dash ban in branding rules. It is internal-only, but should be cleaned up when the template is next edited.
- The contact email link in the Contact table uses `style="color:#0b1f3a;"` (navy). This is acceptable in an email context where navy-on-white is readable, but it differs from the champagne prose link color rule used on the website.

---

## Triggering Controllers

**File:** `app/Http/Controllers/QuoteController.php`

There are two entry points, both in the same controller:

### 1. `submitModal(Request $request): JsonResponse`

Triggered by the **quote modal** (a floating modal form on the site, returns JSON).

- Honeypot check: if the `sg_website` field is filled, silently fakes success and discards the submission.
- Validates 9 fields (passengers is nullable here).
- Saves to DB with `order_type = 'quote_modal'`.
- Sends email. If email fails, logs the error but still returns a success response to the user. Email failure is non-fatal.
- Returns `{ success: true, reference: '...', first_name: '...' }`.

### 2. `submit(Request $request): RedirectResponse`

Triggered by the **full-page quote form** (`/get-a-quote`), returns a redirect.

- reCAPTCHA v2 Invisible verification (production only — dev/staging skips it).
- Honeypot check.
- Validates 9 fields (passengers is required here, unlike the modal).
- Saves to DB with `order_type = 'quote'`.
- Sends email. If email fails, logs the error but still redirects to success. Email failure is non-fatal.
- Redirects back to the quote page with flash session variables: `quote_success`, `quote_name`, `quote_reference`.

### Email Dispatch Pattern

Both entry points use the same call:

```php
Mail::to($recipients)->bcc('support@apexwebseo.com')->send(new QuoteSubmitted($quote));
```

- `Mail::to()` accepts an array of addresses.
- `.bcc()` silently copies the developer/support address.
- `.send()` is synchronous. The HTTP request waits for the mail server to accept the message before the response is returned to the browser.

---

## Recipients

Recipients are **hardcoded in the controller**, not loaded from config.

| Type | Address |
|---|---|
| To | `vincent@newlenoxlimoservice.com` |
| To | `stopngovr@gmail.com` |
| BCC | `support@apexwebseo.com` |

> **Caveat:** `config/mail.php` defines a `quote_notify_email` key that reads from the `QUOTE_NOTIFY_EMAIL` environment variable, but this key is never used in the controller. The hardcoded array in the controller always wins. If recipients ever need to be changed without a code deploy, the controller must be updated to read from config instead.

---

## Mail Configuration

**File:** `config/mail.php`

| Setting | Value |
|---|---|
| Default mailer | `env('MAIL_MAILER', 'log')` — falls back to `log` driver if no env var is set |
| SMTP host | `env('MAIL_HOST', '127.0.0.1')` |
| SMTP port | `env('MAIL_PORT', 2525)` |
| SMTP scheme | `env('MAIL_SCHEME')` |
| SMTP timeout | 8 seconds (hardcoded) |
| Global from address | `env('MAIL_FROM_ADDRESS', 'vincent@newlenoxlimoservice.com')` |
| Global from name | `env('MAIL_FROM_NAME', 'Stop & Go Airport Shuttle Service, Inc. Support')` |
| Unused key | `quote_notify_email => env('QUOTE_NOTIFY_EMAIL')` — defined but never read |

### Development Behavior

In development, if `MAIL_MAILER` is not set (or is set to `log`), all emails are written to `storage/logs/laravel.log` instead of being sent. No real emails go out. Check the log to verify the email body was generated correctly.

### Available Mailer Drivers (configured but not all in use)

| Driver | Status |
|---|---|
| `smtp` | In use for production delivery |
| `log` | Default fallback for development |
| `ses` | Configured, not in use |
| `postmark` | Configured, not in use |
| `resend` | Configured, not in use |
| `sendmail` | Configured, not in use |
| `failover` | Configured (smtp -> log chain), not in use |
| `array` | Available for testing |

---

## Data Model

**File:** `app/Models/CustomOrderRequest.php`

The model passed into the mailable. Relevant columns:

| Column | Type | Description |
|---|---|---|
| `reference` | string | Unique ID in format `SG-QT-XXXXXXXX` (8 random uppercase chars) |
| `order_type` | string | `'quote'` (full page form) or `'quote_modal'` (modal form) |
| `contact_name` | string | Customer full name |
| `contact_email` | string | Customer email address |
| `contact_phone` | string | Customer phone number |
| `payload` | array (JSON cast) | All form fields as submitted |
| `status` | string | `'pending'` on creation |
| `submitted_at` | datetime | Timestamp of submission |

The `payload` column stores everything from the validated form, including: `service_type`, `passengers`, `pickup_location`, `destination`, `travel_date`, `additional_info`.

---

## Queue Caveat

The mailable uses the `Queueable` trait and `SerializesModels` trait, which means it is queue-ready. However, the controller calls `.send()` (synchronous), not `.queue()` (background). This means:

- Every quote submission blocks the HTTP response until the SMTP server accepts the message.
- If the mail server is slow or unreachable, the user waits or gets a slow response.
- Switching to `.queue()` is possible at any time without changing the mailable class. Only the controller dispatch call changes.
- A queue worker (`php artisan queue:work`) would need to be running if `.queue()` is adopted.

---

## All Files at a Glance

| File | Role |
|---|---|
| `app/Mail/QuoteSubmitted.php` | The Mailable class — envelope, subject, view binding |
| `resources/views/emails/quote-submitted.blade.php` | The HTML email template — standalone, no master layout |
| `app/Http/Controllers/QuoteController.php` | Triggers the email from two entry points (modal and full-page form) |
| `app/Models/CustomOrderRequest.php` | The Eloquent model injected into the mailable |
| `config/mail.php` | Driver config, from address, SMTP settings, fallback chain |

---

## Adding a New Mailable

If a second mailable is ever needed (e.g., a customer confirmation email), follow this pattern:

1. Create `app/Mail/YourMailable.php` extending `Illuminate\Mail\Mailable`.
2. Use the `Queueable` and `SerializesModels` traits.
3. Inject your data model via constructor promotion as a `public readonly` property.
4. Implement `envelope(): Envelope` and `content(): Content`.
5. Create a standalone HTML template in `resources/views/emails/` with a self-contained `<style>` block. No Blade layouts, no Tailwind, no CSS variables.
6. Dispatch from a controller with `Mail::to(...)->send(new YourMailable($model))`.
