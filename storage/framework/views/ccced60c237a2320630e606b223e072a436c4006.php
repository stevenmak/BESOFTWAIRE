

<?php $__env->startSection('title', 'AfficherUsers'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES UTILISATEURS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des utilisateur
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher les Utilisateurs</strong>
            </div>
            <div class="card-body">
                <div class="pull-right">
                    <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>"> Retour</a>
                </div>
                <div>
                    <h5 class="card-title">Nom Utilisateur:<?php echo e($user->name); ?></h5>
                    <h4 class="card-text">E-mail:  <?php echo e($user->email); ?></h4>
                    <h4 class="card-text">Crée le: <?php echo e($user->created_at); ?></h4>
                    <h4 class="card-text">Modié le: <?php echo e($user->updated_at); ?></h4>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/users/show.blade.php ENDPATH**/ ?>