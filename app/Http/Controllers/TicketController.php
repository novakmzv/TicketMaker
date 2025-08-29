<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\ClientType;
use App\Models\Game;
use App\Models\Ticket;
use App\Services\TicketService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TicketController extends Controller
{
    protected TicketService $ticketService;

    public function __construct(TicketService $ticketService)
    {
        $this->ticketService = $ticketService;
    }

    public function index(): Factory|View
    {
        $tickets = Ticket::with(['game', 'clientType'])->latest()->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create(): Factory|View
    {
        $games = Game::all();
        $clientTypes = ClientType::all();

        return view('tickets.create', compact('games', 'clientTypes'));
    }

    public function store(StoreTicketRequest $request): RedirectResponse
    {
        $ticket = $this->ticketService->createTicket($request);

        return redirect()->route('tickets.show', $ticket);
    }

    public function show($id): Factory|View
    {
        $ticket = Ticket::with(['game', 'clientType'])->findOrFail($id);
        return view('tickets.show', compact('ticket'));
    }
}
