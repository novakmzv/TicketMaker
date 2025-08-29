<?php

namespace App\Strategies;

use App\Models\Game;

interface PricingStrategyInterface
{
    public function calculatePrice(Game $game): float;
}
