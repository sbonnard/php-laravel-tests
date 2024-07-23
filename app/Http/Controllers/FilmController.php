<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Redirect;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create', [
            'mainTitle' => 'Filmotron',
            'logo' => 'img/filmotron.png'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $film = new Film;
        $film->film_name = $request->input('film_name');
        $film->director = $request->input('director');
        $film->seen = $request->input('seen');
        $film->save();

        return Redirect::route('film.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
