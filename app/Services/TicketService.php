<?php

namespace App\Services;

use App\Models\Ticket;
use App\Models\Game;
use App\Models\ClientType;
use App\Strategies\PricingStrategyResolver;

class TicketService
{
    public function createTicket(string $clientName, int $gameId, int $clientTypeId): Ticket
    {
        $game = Game::findOrFail($gameId);
        $clientType = ClientType::findOrFail($clientTypeId);

        $strategy = PricingStrategyResolver::resolve($clientType);

        $finalPrice = $strategy->calculatePrice($game);

        return Ticket::create([
            'client_name' => $clientName,
            'game_id' => $gameId,
            'client_type_id' => $clientTypeId,
            'final_price' => $finalPrice,
            'ticket_code' => $this->generateTicketCode(),
        ]);
    }

    private function generateTicketCode(): string
    {
        return 'TKT-' . strtoupper(uniqid());
    }
}
