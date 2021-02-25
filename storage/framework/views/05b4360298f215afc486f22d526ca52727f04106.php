<?php $__env->startSection('title', 'Editertaux'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES TAUX D'ECHANGES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des taux d'echanges
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Modifié taux echanges</strong>
            </div>
            <div class="card-body">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <strong>Whoops!</strong>Veillez verifié les données saisies<br><br>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                </div>
                <?php endif; ?>
                <?php echo Form::model($echanges, ['method' => 'PATCH','route' => ['echanges.update', $echanges->id]]); ?>

                <div class="row row-sm">
                    <div class="col-3">
                        <label>Valeur Taux</label>
                    </div>
                    <div class="col-6">
                        <?php echo Form::text('valeurEchanges', null, array('placeholder' => 'Valeur Taux','class' => 'form-control')); ?>

                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/echanges/edit.blade.php ENDPATH**/ ?>