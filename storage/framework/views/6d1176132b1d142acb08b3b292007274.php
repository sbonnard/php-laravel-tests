

<?php $__env->startSection('content'); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php-laravel-tests\resources\views/film/edit.blade.php ENDPATH**/ ?>