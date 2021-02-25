<?php $__env->startSection('title', 'CreerRoles'); ?>
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
                <strong>ajouter un role utilisateur</strong>
            </div>
            <div class="card-body">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>Veillez verifié les données saisies<br><br>
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php echo Form::open(array('route' => 'roles.store','method'=>'POST')); ?>

                <div class="row row-sm">
                    <div class="col-3">
                        <label>Nom roles</label>
                    </div>
                    <div class="col-6">
                        <?php echo Form::text('name', null, array('placeholder' => 'Nom roles','class' => 'form-control')); ?>

                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <br/>
                        <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label><?php echo e(Form::checkbox('permission[]', $value->id, false, array('class' => 'name'))); ?>

                            <?php echo e($value->name); ?></label>
                        <br/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/roles/create.blade.php ENDPATH**/ ?>