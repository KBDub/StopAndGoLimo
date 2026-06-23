<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\QuoteSubmitted;
use App\Models\CustomOrderRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class QuoteController extends Controller
{
    public function submit(Request $request): RedirectResponse
    {
        // reCAPTCHA v3 — verify token when a secret key is configured
        $recaptchaSecret = config('services.recaptcha.secret_key');
        if ($recaptchaSecret) {
            $token    = $request->input('g_recaptcha_response', '');
            $verify   = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => $recaptchaSecret,
                'response' => $token,
                'remoteip' => $request->ip(),
            ]);
            $result = $verify->json();
            if (!($result['success'] ?? false)) {
                return back()->withInput()->withErrors(['form' => 'We could not verify your submission. Please try again.']);
            }
        }

        // Honeypot — real users never see or fill this field
        if ($request->filled('sg_website')) {
            $reference = 'SG-QT-' . strtoupper(Str::random(8));
            return redirect()
                ->route('get-a-quote')
                ->with('quote_success', true)
                ->with('quote_name', 'there')
                ->with('quote_reference', $reference);
        }

        $validated = $request->validate([
            'name'             => 'required|string|max:150',
            'phone'            => 'required|string|max:50',
            'email'            => 'required|email|max:255',
            'vehicle_type'     => 'required|string|max:100',
            'passengers'       => 'required|string|max:20',
            'pickup_location'  => 'required|string|max:255',
            'destination'      => 'required|string|max:255',
            'booking_date'     => 'required|date|after_or_equal:today',
            'additional_info'  => 'nullable|string|max:5000',
        ]);

        $reference = 'SG-QT-' . strtoupper(Str::random(8));

        $quote = CustomOrderRequest::create([
            'reference'     => $reference,
            'order_type'    => 'quote',
            'contact_name'  => $validated['name'],
            'contact_email' => $validated['email'],
            'contact_phone' => $validated['phone'],
            'payload'       => $validated,
            'status'        => 'pending',
            'submitted_at'  => now(),
        ]);

        $notifyEmail = config('mail.quote_notify_email', env('QUOTE_NOTIFY_EMAIL'));

        if ($notifyEmail) {
            Mail::to($notifyEmail)->send(new QuoteSubmitted($quote));
        }

        $firstName = explode(' ', trim($validated['name']))[0];

        return redirect()
            ->route('get-a-quote')
            ->with('quote_success', true)
            ->with('quote_name', $firstName)
            ->with('quote_reference', $reference);
    }
}
