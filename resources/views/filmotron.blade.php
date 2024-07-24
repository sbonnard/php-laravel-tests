@extends('page')

@section('content')

<section>
    <h2 class="ttl">Les films que j'ai vu :</h2>
    <ul class="filmlist" id="films">
        @foreach ($films as $film)
        <li class="film">
            <h3 class="ttl ttl--white">{{ $film->film_name }}</h3>
            <p class="ttl--secondary"> Réalisateur : {{ $film->director }}</p>
            <p class="text--white">Regardé le {{ $film->seen }}</p>
            <a class="text--white" href="{{ @route('film.edit', ['id' => $film->id]) }}">modifier</a>
            <!-- <a class="bin" href="{{ @route('film.destroy', ['id' => $film->id]) }}"></a> -->
        </li>
        @endforeach
    </ul>
</section>

@endsection