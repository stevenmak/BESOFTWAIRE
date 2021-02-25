<?php $__env->startSection('title', 'AfficherDepartement'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES DEPARTEMENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des departements
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher les départements</strong>
            </div>
            <div class="card-body">

                <div class="row row-sm">
                    
                <h4><?php echo e($departements->designation); ?></h4>
                    <div class="form-group col-6">
                    </div>
                    <div class="form-group col-6">
                        <label>Nombre des agents: </label>
                        <?php echo e($departements->nbreAgent); ?>

                    </div>
              <div>      
            <label>Etape créé par: </label>
            <em> 
                <?php echo e($agent=App\Agents::select('prenom')->where('id',$departements->agent_id)->value('prenom')); ?> <?php echo e($agent=App\Agents::select('nom')->where('id',$departements->agent_id)->value('nom')); ?>

            </em>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/departements/show.blade.php ENDPATH**/ ?>