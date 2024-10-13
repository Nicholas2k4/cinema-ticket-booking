<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create($id){
        $movie = Movie::findOrFail($id);
        return view('tickets.create', [
            'movie' => $movie,
        ]);
    }

    public function store(Request $request)
    {
        Ticket::create([
            'movie_id' => $request->movie_id,
            'customer_name' => $request->customer_name,
            'seat_number' => $request->seat_number,
            'check_in_time' => now(),
        ]);
    }

    public function checkIn($id){
        Ticket::where('id', $id)->update('is_checked_in', true);
    }

    public function delete($id){
        $ticket = Ticket::findOrFail($id);
        if($ticket->is_checked_in == false)
        {
            $ticket->delete();
        }
    }
}
