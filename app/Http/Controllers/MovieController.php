<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies.index', [
            'movies' => $movies,
        ]);
    }

    public function show($id){
        $movie = Movie::findOrFail($id);
        $tickets = $movie->tickets;
        return view('movies.show', [
            'movie' => $movie,
            'tickets' => $tickets,
        ]);
    }
}
