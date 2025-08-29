<?php

namespace App\Services;

use App\Http\Requests\StoreTicketRequest;
use App\Models\Ticket;
use App\Models\Game;
use App\Models\ClientType;
use App\Strategies\PricingStrategyResolver;

class TicketService
{
    public function createTicket(StoreTicketRequest $request): Ticket
    {
        $game = Game::findOrFail($request->game_id);
        $clientType = ClientType::findOrFail($request->client_type_id);

        $strategy = PricingStrategyResolver::resolve($clientType);

        $finalPrice = $strategy->calculatePrice($game);

        return Ticket::create([
            'client_name' => $request->client_name,
            'game_id' => $request->game_id,
            'client_type_id' => $request->client_type_id,
            'final_price' => $finalPrice,
            'ticket_code' => $this->generateTicketCode(),
        ]);
    }

    private function generateTicketCode(): string
    {
        return 'TKT-' . strtoupper(uniqid());
    }
}
