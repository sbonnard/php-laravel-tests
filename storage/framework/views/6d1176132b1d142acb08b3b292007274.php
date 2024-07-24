<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($mainTitle); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <header class="header">
        <img class="logo" src="<?php echo e($logo); ?>" alt="">
        <h1 class="ttl header__ttl"><?php echo e($mainTitle); ?></h1>
        <nav>
            <ul class="nav">
                <li class="nav_itm"><a class="nav__lnk" href="<?php echo e(@route('home')); ?>">Home</a></li>
                <li class="nav_itm"><a class="nav__lnk" href="<?php echo e(@route('film.create')); ?>">Add Film</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">

    <form class="form" action="<?php echo e(@route('film.update', ['id' => $film->id])); ?>" method="post">
    <?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('message')); ?>

    </div>
    <?php endif; ?>
    <?php echo csrf_field(); ?>
    <label class="form__label" for="film_name">Nom du film</label>
    <input class="form__input" type="text" placeholder="Jurassik Park..." name="film_name" required value="<?php echo e($film->film_name); ?>">
    <label class="form__label" for="director">Nom du Réalisateur</label>
    <input class="form__input" type="text" placeholder="Steven Spielberg..." name="director" required value="<?php echo e($film->director); ?>">
    <label class="form__label" for="seen">Date de visionnage</label>
    <input class="form__input" type="date" placeholder="2014-22-04" name="seen" required value="<?php echo e($film->seen); ?>">
    <input class="form__submit" type="submit" value="Mettre à Jour">
</form>

    </main>

    <footer class="footer">© 2024 | Filmotron</footer>

</body>

</html>


<?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/film/edit.blade.php ENDPATH**/ ?>