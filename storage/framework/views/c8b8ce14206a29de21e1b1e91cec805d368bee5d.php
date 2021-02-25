

<?php $__env->startSection('title', 'AfficherServices'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES SERVICES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher les services</strong>
            </div>
            <div class="card-body">
                <div class="row row-sm">

                    <h4>Service <?php echo e($service->designation); ?> du département <?php echo e($departements=App\Departements::select('designation')->value('designation')); ?></h4>
                    <div class="form-group col-6">
                    </div>
                    <div class="form-group col-6">
                        <label>Nombre agents: </label>
                        <?php echo e($service->nbreAgent); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Chef de service: </label>
                        <?php echo e($agent=App\Agents::select('prenom')->where('id',$service->chefservice)->value('prenom')); ?> <?php echo e($agent=App\Agents::select('nom')->where('id',$service->chefservice)->value('nom')); ?>

                    </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/services/show.blade.php ENDPATH**/ ?>