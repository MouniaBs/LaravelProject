

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">✏️ Modifier le livre</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Erreurs :</strong>
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('livres.update', $livre->id)); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" value="<?php echo e($livre->titre); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" name="auteur" value="<?php echo e($livre->auteur); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Année</label>
            <input type="number" name="annee" value="<?php echo e($livre->annee); ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Résumé</label>
            <textarea name="resume" rows="4" class="form-control" required><?php echo e($livre->resume); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="<?php echo e(route('livres.index')); ?>" class="btn btn-secondary">⬅ Retour</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\aBC\Desktop\projet de laravel\projetLivres\resources\views/livres/edit.blade.php ENDPATH**/ ?>