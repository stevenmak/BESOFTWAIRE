

<?php $__env->startSection('title', 'CreerServices'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES SERVICES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des service et affectation
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>ajouter un service</strong>
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
                <?php echo Form::model($services, ['method' => 'PATCH','route' => ['services.update', $services->id]]); ?>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                <div class="row row-sm">
                    <p class="text-muted col-md-12">Remplissez les informations pour continuer</p><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Désignation</label>
                            <?php echo Form::text('designation', null, array('placeholder' => 'Designation','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label>Nombre des Agent</label>
                            <?php echo Form::text('nbreAgent', null, array('placeholder' => 'Nombre des agents','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label>Chef de Service</label>
                            <?php echo Form::select('chefservice',App\Agents::pluck('prenom','id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label>Departement</label>
                            <?php echo Form::select('departement_id',App\Departements::pluck('designation', 'id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group col-md-6">
                            <label></label>
                            <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                        </div>
                        <div class="text-right col-md-6">
                            <button type="submit" class="btn btn-primary">Envoyez</button>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/services/edit.blade.php ENDPATH**/ ?>