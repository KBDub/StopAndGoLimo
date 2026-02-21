<?php

declare(strict_types=1);

namespace App\Shipping;

use Closure;
use Lunar\Base\ShippingModifier;
use Lunar\DataTypes\Price;
use Lunar\DataTypes\ShippingOption;
use Lunar\Facades\ShippingManifest;
use Lunar\Models\Contracts\Cart;
use Lunar\Models\Currency;
use Lunar\Models\TaxClass;

class FreeShippingModifier extends ShippingModifier
{
    public function handle(Cart $cart, Closure $next)
    {
        $currency = Currency::getDefault();
        $taxClass = TaxClass::getDefault();

        ShippingManifest::addOption(
            new ShippingOption(
                name: 'Free Shipping',
                description: 'Free standard shipping',
                identifier: 'free_shipping',
                price: new Price(0, $currency, 1),
                taxClass: $taxClass,
            )
        );

        return $next($cart);
    }
}
