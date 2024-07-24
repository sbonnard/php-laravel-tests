@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mainTitle }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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

        @section('content')

        Main content

        @show

    </main>

    <footer class="footer">© 2024 | Filmotron</footer>

</body>

</html>