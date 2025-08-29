<?php

namespace App\Strategies;

use App\Models\ClientType;

class PricingStrategyResolver
{
    public static function resolve(ClientType $clientType): PricingStrategyInterface
    {
        return match($clientType->name) {
            'VIP' => new VipPricingStrategy(),
            'Estudiante' => new EstudiantePricingStrategy(),
            default => new RegularPricingStrategy()
        };
    }
}
