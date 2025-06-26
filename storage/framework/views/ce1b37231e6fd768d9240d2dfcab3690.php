

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>📚 Liste des livres</h2>
        <a href="<?php echo e(route('livres.create')); ?>" class="btn btn-success">➕ Ajouter un livre</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Année</th>
                <th>Résumé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $livres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($livre->id); ?></td>
                    <td><?php echo e($livre->titre); ?></td>
                    <td><?php echo e($livre->auteur); ?></td>
                    <td><?php echo e($livre->annee); ?></td>
                    <td><?php echo e($livre->resume); ?></td>
                    <td>
                        <a href="<?php echo e(route('livres.edit', $livre->id)); ?>" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="<?php echo e(route('livres.destroy', $livre->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">Aucun livre enregistré.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <div class="mt-3">
    <?php echo e($livres->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\aBC\Desktop\projet de laravel\projetLivres\resources\views/livres/index.blade.php ENDPATH**/ ?>