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
    <img class="logo" src="<?php echo e($logo); ?>" alt="">
    <h1 class="ttl header__ttl"><?php echo e($mainTitle); ?></h1>
    <nav>
        <ul>
            <li><a href="<?php echo e($homeLink); ?>">Home</a></li>
            <li><a href="<?php echo e($createLink); ?>">Add Film</a></li>
        </ul>
    </nav>
</header>

<main>

<section>
    <h2 class="ttl">Les films que j'ai vu :</h2>
    <ul id="films"></ul>
</section>

</main>
    
</body>
</html><?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/filmotron.blade.php ENDPATH**/ ?>