<?php $__env->startSection('title', 'EditerDepartement'); ?>
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
                <strong>Modifier un departement</strong>
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
                <?php echo Form::model($departements, ['method' => 'PATCH','route' => ['departements.update', $departements->id]]); ?>

                <div class="row row-sm">
                    <div class="form-group col-sm-6">
                        <label>Designation</label>

                        <?php echo Form::text('designation', null, array('placeholder' => 'Designation','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <label>Nombre Agent</label>
                        <?php echo Form::number('nbreAgent', null, array('placeholder' => 'Nombre agent','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <label></label>
                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>



            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/departements/edit.blade.php ENDPATH**/ ?>