<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\CustomOrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Saves a general contact message from the "Send Us a Message" modal.
     * Stored in custom_order_requests with order_type 'message' and reference
     * prefix T5P-MSG- for consistent tracking alongside apparel and DTF records.
     */
    public function sendMessage(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:100',
            'lastName'  => 'required|string|max:100',
            'phone'     => 'required|string|max:50',
            'email'     => 'required|email|max:255',
            'message'   => 'required|string|max:5000',
        ]);

        $name = trim($validated['firstName'] . ' ' . $validated['lastName']);

        CustomOrderRequest::create([
            'reference'    => 'T5P-MSG-' . strtoupper(Str::random(8)),
            'order_type'   => 'message',
            'contact_name' => $name,
            'contact_email'=> $validated['email'],
            'contact_phone'=> $validated['phone'],
            'payload'      => $request->all(),
            'status'       => 'pending',
            'submitted_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }
}
