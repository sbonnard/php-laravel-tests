<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Redirect;

class FilmController extends Controller
{
    /**
     * Display a listing of the films.
     */
    public function index()
    {
        return view('filmotron', [
            'mainTitle' => 'Filmotron',
            'logo' => 'img/filmotron.png',
            'films' => Film::all()
        ]);
    }

    /**
     * Show the form for creating a new film.
     */
    public function create()
    {
        return view('create', [
            'mainTitle' => 'Filmotron',
            'logo' => 'img/filmotron.png'
        ]);
    }

    /**
     * Store a newly created film in storage.
     */
    public function store(Request $request)
    {
        $film = new Film;
        $film->film_name = $request->input('film_name');
        $film->director = $request->input('director');
        $film->seen = $request->input('seen');
        $film->save();

        return Redirect::route('film.create')->with('message', 'Film ajouté !');
    }

    /**
     * Display the specified film.
     */
    public function show(string $id)
    {
        $film = FILM::find($id);
        return view('film.show', ['films'=>$film]);
    }

    /**
     * Show the form for editing the specified film.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified film in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified film from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
