<?php $__env->startSection('title', 'AfficherRoles'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES ROLES UTILISATEUR
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des roles utisateurs et leurs privilèges
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher un role</strong>
            </div>
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nom:</strong>
                            <?php echo e($role->name); ?>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            <?php if(!empty($rolePermissions)): ?>
                                <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="label label-success"><?php echo e($v->name); ?>,</label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
           </div> 
           </div> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/roles/show.blade.php ENDPATH**/ ?>