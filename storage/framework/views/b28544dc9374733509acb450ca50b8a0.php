

<?php $__env->startSection('content'); ?>

<section>
    <h2 class="ttl">Les films que j'ai vu :</h2>
    <ul class="filmlist" id="films">
        <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="film">
            <h3 class="ttl ttl--white"><?php echo e($film->film_name); ?></h3>
            <p class="ttl--secondary"> Réalisateur : <?php echo e($film->director); ?></p>
            <p class="text--white">Regardé le <?php echo e($film->seen); ?></p>
            <a class="text--white" href="<?php echo e(@route('film.edit', ['id' => $film->id])); ?>">modifier</a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/filmotron.blade.php ENDPATH**/ ?>