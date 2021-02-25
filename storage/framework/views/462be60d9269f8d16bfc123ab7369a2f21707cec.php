<?php $__env->startSection('title', 'AfficherMateriel'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES MATERIAUX
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des matériels de construction
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Information sur le Matériel</strong>
            </div>
            <div class="card-body">

            <div class="row row-sm">
                <div class="form-group col-6">
                    <h4><label>Code matériel: </label>
                    <?php echo e($materiel->codeMateriaux); ?></h4>
                </div>
                <div class="form-group col-6">
                    <h4><label>Déscription: </label>
                    <?php echo e($materiel->designation); ?></h4>
                </div>
                <div class="form-group col-6">
                   <label> Prix en USD:</label>
                    <sup class="text-sm" style="top: -0.5em;">$</sup><span class="h1"><?php echo e($materiel->prix); ?></span>          
                </div>
                <div class="form-group col-6">
                    <label>Matériel créé ou modifié par: </label>
                    <em>
                        <?php echo e($users=App\User::select('name')->where('id',$materiel->users_id)->value('name')); ?><br />Le <?php echo e($materiel->updated_at); ?><br />    
                    </em>
                </div>
           </div> 
           </div> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/materiels/show.blade.php ENDPATH**/ ?>