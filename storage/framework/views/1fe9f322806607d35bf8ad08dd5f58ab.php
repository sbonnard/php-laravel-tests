<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($mainTitle); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <header class="header">
        <div class="header__container">
            <img class="header__logo" src="<?php echo e($logo); ?>" alt="">
            <h1 class="ttl header__ttl"><?php echo e($mainTitle); ?></h1>
            <div class="hamburger">
                <a href="#menu" id="hamburger-menu-icon">
                    <img src="img/hamburger.svg" alt="Menu Hamburger">
                </a>
            </div>
            <nav class="nav hamburger__menu" id="menu" aria-label="Navigation principale du site">
                <ul class="nav">
                    <li class="nav_itm"><a class="nav__lnk" href="<?php echo e(@route('home')); ?>">Home</a></li>
                    <li class="nav_itm"><a class="nav__lnk" href="<?php echo e(@route('film.create')); ?>">Add Film</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">

        <?php $__env->startSection('content'); ?>

        Main content

        <?php echo $__env->yieldSection(); ?>

    </main>

    <footer class="footer">© 2024 | Filmotron</footer>

</body>

</html><?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/page.blade.php ENDPATH**/ ?>