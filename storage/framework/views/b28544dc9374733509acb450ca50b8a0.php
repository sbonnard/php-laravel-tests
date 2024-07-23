<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($mainTitle); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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

        <section>
            <h2 class="ttl">Les films que j'ai vu :</h2>
            <ul class="filmlist" id="films">
                <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="film">
                    <h3 class="ttl ttl--white"><?php echo e($film->film_name); ?></h3>
                    <p class="ttl--secondary"> Réalisateur : <?php echo e($film->director); ?></p>
                    <p class="text--white">Regardé le <?php echo e($film->seen); ?></p>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>

    <?php echo $__env->yieldSection(); ?>

    </main>

    <footer class="footer">© 2024 | Filmotron</footer>

</body>

</html><?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/filmotron.blade.php ENDPATH**/ ?>