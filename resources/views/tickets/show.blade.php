@extends('layout.app')

@section('title', 'Ticket - ' . $ticket->ticket_code)

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Ticket Generado</h3>
                    <a href="{{ route('tickets.pdf', $ticket) }}" class="btn btn-outline-primary text-center" target="_blank">Ver PDF</a>
                </div>
                <div class="card-body" id="ticket-content">
                    <div class="text-center mb-4">
                        <h2 class="text-primary">TicketMaker</h2>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Información del Cliente</h5>
                            <p><strong>Nombre:</strong> {{ $ticket->client_name }}</p>
                            <p><strong>Tipo:</strong> {{ $ticket->clientType->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Información del Ticket</h5>
                            <p><strong>Código:</strong> {{ $ticket->ticket_code }}</p>
                            <p><strong>Fecha:</strong> {{ $ticket->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h5>Detalles del Juego</h5>
                            <p><strong>Juego:</strong> {{ $ticket->game->name }}</p>
                            <p><strong>Precio Base:</strong> ${{ number_format($ticket->game->base_price, 2) }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5>Precio Final</h5>
                            <p class="h3 text-success"><strong>${{ number_format($ticket->final_price, 2) }}</strong>
                            </p>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <div class="alert alert-info">
                            <strong>¡Disfruta tu juego!</strong><br>
                            Presenta este ticket en la entrada
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Ver Todos los Tickets</a>
                        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Crear Otro Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
