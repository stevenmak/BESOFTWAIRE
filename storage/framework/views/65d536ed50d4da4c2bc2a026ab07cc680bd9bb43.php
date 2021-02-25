<?php $__env->startSection('title', 'Affichertaux'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES TAUX D'ECHANGES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des taux d'echanges
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="title">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher le  TAUX du jours</strong>
            </div>
            <div class="card-body">
            <div class="row row-sm">
                <div class="form-group col-6">
                    <h4><label>Le taux de change: </label>
                    <?php echo e($echanges->valeurEchanges); ?></h4>
                </div>
                <div class="form-group col-6">
                    <em>
                        Taux créé le <?php echo e($echanges->created_at); ?><br />
                        La dernière modification le <?php echo e($echanges->updated_at); ?><br />    
                    </em>
                </div>
           </div> 
           </div> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/echanges/show.blade.php ENDPATH**/ ?>