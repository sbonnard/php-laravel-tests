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
            'mainTitle' => 'FILMOTRON',
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
    public function show(int $id)
    {
        $film = Film::findOrFail($id);
        return view('film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified film.
     */
    public function edit(string $id)
    {
        $film = Film::findOrFail($id);
        return view('film.edit', ['film' => $film,
        'mainTitle' => 'FILMOTRON',
        'logo' => 'img/filmotron.png'
    ]);
    }

    /**
     * Update the specified film in storage.
     */
    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'film_name' => 'required|string|max:200',
            'director' => 'required|string|max:200',
            'seen' => 'required|date_format:Y-m-d',
        ]);
    
        Film::findOrFail($id)->update($validated);
    
        return redirect()->route('film.edit', $id)->with('message', 'Film modifié !');
    }

/**
 * Remove the specified film from storage.
 */
public function destroy(int $id)
{
    $film = Film::findOrFail($id);

    $film->delete();

    return redirect()->route('home')->with('message', 'Film supprimé avec succès !');
}
}
