<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base.index');
})->name('index');

Route::get('movies', [MovieController::class, 'index'])->name('movies');
Route::get('movies/tickets/{movie:id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('movies/book/{movie:id}', [TicketController::class, 'create'])->name('tickets.create');
Route::post('ticket/submit', [TicketController::class, 'store'])->name('tickets.store');



Route::put('ticket/checkin/{ticket:id}', [TicketController::class, 'checkIn'])->name('tickets.checkin');
Route::delete('ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('tickets.delete');
