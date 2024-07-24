@extends('page')

@section('content')

<form class="form" action="{{ @route('film.update') }}" method="post">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    @csrf
    <label class="form__label" for="film_name">Nom du film</label>
    <input class="form__input" type="text" placeholder="Jurassik Park..." name="film_name" required value="">
    <label class="form__label" for="director">Nom du Réalisateur</label>
    <input class="form__input" type="text" placeholder="Steven Spielberg..." name="director" required value="">
    <label class="form__label" for="seen">Date de visionnage</label>
    <input class="form__input" type="date" placeholder="2014-22-04" name="seen" required value="">
    <input class="form__submit" type="submit" value="Ajouter le film">
</form>

@endsection