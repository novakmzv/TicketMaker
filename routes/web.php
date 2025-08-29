<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tickets', TicketController::class)->except(['edit', 'update', 'destroy']);

Route::get('tickets/{ticket}/pdf', [TicketController::class, 'generatePdf'])->name('tickets.pdf');
