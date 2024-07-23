<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mainTitle }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <img class="logo" src="{{ $logo }}" alt="">
        <h1 class="ttl header__ttl">{{ $mainTitle }}</h1>
        <nav>
            <ul class="nav">
                <li class="nav_itm"><a class="nav__lnk" href="{{  @route('home') }}">Home</a></li>
                <li class="nav_itm"><a class="nav__lnk" href="{{  @route('film.create') }}">Add Film</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">

        <section>
            <h2 class="ttl">Les films que j'ai vu :</h2>
            <ul class="filmlist" id="films">
                @foreach ($films as $film)
                <li class="film">
                    <h3 class="ttl ttl--white">{{ $film->film_name }}</h3>
                    <p class="ttl--secondary"> Réalisateur : {{ $film->director }}</p>
                    <p class="text--white">Regardé le {{ $film->seen }}</p>
                </li>
                @endforeach
            </ul>
        </section>

    </main>

    <footer class="footer">© 2024 | Filmotron</footer>

</body>

</html>