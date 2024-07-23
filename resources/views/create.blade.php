<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL | TESTS</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <img class="logo" src="{{ $logo }}" alt="">
    <h1 class="ttl header__ttl">{{ $mainTitle }}</h1>
    <nav>
        <ul>
            <li><a href="filmotron.blade.php">Home</a></li>
            <li><a href="create.blade.php">Add Film</a></li>
        </ul>
    </nav>
</header>

<main>

<form action="store.blade.php">
    <ul>
        <li>
            <label for="film_name">Nom du film</label>
            <input type="text" placeholder="" required>
        </li>
    </ul>
</form>

</main>
    
</body>
</html>