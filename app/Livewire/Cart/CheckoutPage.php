<?php

declare(strict_types=1);

namespace App\Livewire\Cart;

use Livewire\Component;
use Lunar\Facades\CartSession;
use Lunar\Facades\ShippingManifest;
use Lunar\Models\Cart;
use Lunar\Models\Country;

class CheckoutPage extends Component
{
    public string $email = '';
    public string $firstName = '';
    public string $lastName = '';
    public string $phone = '';

    public string $shippingLine1 = '';
    public string $shippingLine2 = '';
    public string $shippingCity = '';
    public string $shippingState = '';
    public string $shippingPostcode = '';
    public string $shippingCountry = 'US';

    public bool $sameBillingAddress = true;

    public string $billingLine1 = '';
    public string $billingLine2 = '';
    public string $billingCity = '';
    public string $billingState = '';
    public string $billingPostcode = '';
    public string $billingCountry = 'US';

    public string $notes = '';
    public bool $processing = false;
    public string $errorMessage = '';

    protected function rules(): array
    {
        $rules = [
            'email' => 'required|email',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'shippingLine1' => 'required|string|max:255',
            'shippingLine2' => 'nullable|string|max:255',
            'shippingCity' => 'required|string|max:255',
            'shippingState' => 'required|string|max:255',
            'shippingPostcode' => 'required|string|max:20',
        ];

        if (! $this->sameBillingAddress) {
            $rules['billingLine1'] = 'required|string|max:255';
            $rules['billingCity'] = 'required|string|max:255';
            $rules['billingState'] = 'required|string|max:255';
            $rules['billingPostcode'] = 'required|string|max:20';
        }

        return $rules;
    }

    public function getCartProperty(): ?Cart
    {
        $cart = CartSession::current();

        if ($cart && $cart->lines->isNotEmpty()) {
            return $cart->calculate();
        }

        return $cart;
    }

    public function placeOrder(): void
    {
        $this->validate();

        $cart = $this->cart;

        if (! $cart || $cart->lines->isEmpty()) {
            $this->errorMessage = 'Your cart is empty.';
            return;
        }

        $this->processing = true;
        $this->errorMessage = '';

        try {
            $country = Country::where('iso3', 'USA')->first()
                ?? Country::first();

            $shippingAddress = [
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'line_one' => $this->shippingLine1,
                'line_two' => $this->shippingLine2,
                'city' => $this->shippingCity,
                'state' => $this->shippingState,
                'postcode' => $this->shippingPostcode,
                'country_id' => $country?->id,
                'contact_email' => $this->email,
                'contact_phone' => $this->phone,
            ];

            $cart->setShippingAddress($shippingAddress);

            if ($this->sameBillingAddress) {
                $cart->setBillingAddress($shippingAddress);
            } else {
                $cart->setBillingAddress([
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'line_one' => $this->billingLine1,
                    'line_two' => $this->billingLine2,
                    'city' => $this->billingCity,
                    'state' => $this->billingState,
                    'postcode' => $this->billingPostcode,
                    'country_id' => $country?->id,
                    'contact_email' => $this->email,
                    'contact_phone' => $this->phone,
                ]);
            }

            $shippingOption = ShippingManifest::getOptions($cart)->first();

            if ($shippingOption) {
                $cart->setShippingOption($shippingOption);
            }

            $cart = $cart->refresh()->calculate();

            $order = $cart->createOrder();

            $order->update([
                'notes' => $this->notes,
                'meta' => array_merge($order->meta?->toArray() ?? [], [
                    'payment_method' => 'offline',
                ]),
            ]);

            CartSession::forget();

            $this->dispatch('cart-updated');

            $this->redirect('/order-confirmation/' . $order->id);
        } catch (\Exception $e) {
            $this->errorMessage = 'There was an issue placing your order. Please try again.';
            $this->processing = false;
            report($e);
        }
    }

    public function render()
    {
        return view('livewire.cart.checkout-page', [
            'cart' => $this->cart,
        ]);
    }
}
