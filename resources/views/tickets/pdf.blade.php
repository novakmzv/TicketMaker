<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket - {{ $ticket->ticket_code }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .ticket-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .header p {
            margin: 5px 0 0 0;
            opacity: 0.9;
        }
        .content {
            padding: 30px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        .info-section h3 {
            color: #333;
            margin: 0 0 15px 0;
            font-size: 1.1rem;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 5px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-item strong {
            color: #495057;
        }
        .price-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .price {
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
            margin: 10px 0;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }
        .footer p {
            margin: 0;
        }
        .ticket-code {
            font-family: 'Courier New', monospace;
            font-size: 1.2rem;
            font-weight: bold;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="ticket-container">
    <div class="header">
        <h1>TicketMaker</h1>
        <p>Tu ticket de acceso</p>
    </div>

    <div class="content">
        <div class="info-grid">
            <div class="info-section">
                <h3>Información del Cliente</h3>
                <div class="info-item">
                    <strong>Nombre:</strong> {{ $ticket->client_name }}
                </div>
                <div class="info-item">
                    <strong>Tipo:</strong> {{ $ticket->clientType->name }}
                </div>
            </div>

            <div class="info-section">
                <h3>Detalles del Ticket</h3>
                <div class="info-item">
                    <strong>Código:</strong>
                    <span class="ticket-code">{{ $ticket->ticket_code }}</span>
                </div>
                <div class="info-item">
                    <strong>Fecha:</strong> {{ $ticket->created_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>

        <div class="info-grid">
            <div class="info-section">
                <h3>Detalles del Juego</h3>
                <div class="info-item">
                    <strong>Juego:</strong> {{ $ticket->game->name }}
                </div>
                <div class="info-item">
                    <strong>Precio Base:</strong> ${{ number_format($ticket->game->base_price, 2) }}
                </div>
            </div>

            <div class="price-section">
                <h3>Precio Final</h3>
                <div class="price">${{ number_format($ticket->final_price, 2) }}</div>
                <small>Precio calculado según tipo de cliente</small>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><strong>¡Disfruta tu juego!</strong></p>
        <p>Presenta este ticket en la entrada</p>
    </div>
</div>
</body>
</html>
