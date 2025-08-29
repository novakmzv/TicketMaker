@extends('layout.app')

@section('title', 'Crear Nuevo Ticket')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Nuevo Ticket</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="client_name" class="form-label">Nombre del Cliente</label>
                            <input
                                autocomplete="off"
                                type="text"
                                class="form-control @error('client_name') is-invalid @enderror"
                                id="client_name"
                                name="client_name"
                                value="{{ old('client_name') }}"
                                required>
                            @error('client_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="game_id" class="form-label">Juego</label>
                            <select class="form-select @error('game_id') is-invalid @enderror"
                                    id="game_id"
                                    name="game_id"
                                    required>
                                <option value="">Seleccione un juego</option>
                                @foreach($games as $game)
                                    <option value="{{ $game->id }}" {{ old('game_id') == $game->id ? 'selected' : '' }}>
                                        {{ $game->name }} - S/.{{ number_format($game->base_price, 2) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('game_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client_type_id" class="form-label">Tipo de Cliente</label>
                            <select class="form-select @error('client_type_id') is-invalid @enderror"
                                    id="client_type_id"
                                    name="client_type_id"
                                    required>
                                <option value="">Seleccione tipo de cliente</option>
                                @foreach($clientTypes as $clientType)
                                    <option
                                        value="{{ $clientType->id }}" {{ old('client_type_id') == $clientType->id ? 'selected' : '' }}>
                                        {{ $clientType->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('client_type_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Crear Ticket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
