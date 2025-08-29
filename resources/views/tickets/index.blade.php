@extends('layout.app')

@section('title', 'Lista de Tickets')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Lista de Tickets</h1>
                <a href="{{ route('tickets.create') }}" class="btn btn-primary">Crear Nuevo Ticket</a>
            </div>

            @if($tickets->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Cliente</th>
                            <th>Juego</th>
                            <th>Tipo Cliente</th>
                            <th>Precio Final</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->ticket_code }}</td>
                                <td>{{ $ticket->client_name }}</td>
                                <td>{{ $ticket->game->name }}</td>
                                <td>{{ $ticket->clientType->name }}</td>
                                <td>${{ number_format($ticket->final_price, 2) }}</td>
                                <td>{{ $ticket->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('tickets.show', $ticket) }}" class="btn btn-sm btn-info">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info">
                    No hay tickets creados aún. <a href="{{ route('tickets.create') }}">Crear el primero</a>
                </div>
            @endif
        </div>
    </div>
@endsection
