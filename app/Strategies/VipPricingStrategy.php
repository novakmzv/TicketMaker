<?php

namespace App\Strategies;

use App\Models\Game;

class VipPricingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(Game $game): float
    {
        return $game->base_price * 0.70;
    }
}
