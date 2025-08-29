<?php

namespace App\Strategies;

use App\Models\Game;

class RegularPricingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(Game $game): float
    {
        return $game->base_price * 1.00;
    }
}
