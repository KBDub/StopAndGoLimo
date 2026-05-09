<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomOrderRequest extends Model
{
    protected $fillable = [
        'reference',
        'order_type',
        'contact_name',
        'contact_email',
        'contact_phone',
        'payload',
        'stripe_session_id',
        'stripe_checkout_url',
        'status',
        'submitted_at',
    ];

    protected $casts = [
        'payload'      => 'array',
        'submitted_at' => 'datetime',
    ];
}
