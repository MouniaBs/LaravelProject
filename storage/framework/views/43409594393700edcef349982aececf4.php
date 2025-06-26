

<?php $__env->startSection('content'); ?>
    <h2 class="mb-4">➕ Ajouter un livre</h2>

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

    <form action="<?php echo e(route('livres.store')); ?>" method="POST" class="mb-4">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input type="text" name="auteur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Année</label>
            <input type="number" name="annee" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Résumé</label>
            <textarea name="resume" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="<?php echo e(route('livres.index')); ?>" class="btn btn-secondary">⬅ Retour</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\aBC\Desktop\projet de laravel\projetLivres\resources\views/livres/create.blade.php ENDPATH**/ ?>