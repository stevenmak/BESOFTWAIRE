<?php $__env->startSection('title', 'CreerMateriel'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES MATERIAUX
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des materiels de construction
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter un matériel</strong>
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
                    <?php echo Form::open(array('route' => 'materiels.store','method'=>'POST')); ?>

                            <p class="text-muted">Tous les champs sont obligatoires.</p>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>Code matériel</label>
                                        <input type="text" class="form-control" placeholder="Entrer le code matériel" name="codeMateriaux" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Le Prix</label>
                                        <input type="text" required class="form-control" placeholder="Le Prix" name="prix">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Désignation</label>
                                        <input type="text" class="form-control" placeholder="Enter la désignation" name="designation" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Type de matériel</label>
                                        <select class="form-control" name="type">
                                            <option value="Materiel">Materiel</option>
                                            <option value="Service">Service</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label></label>
                                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                                    </div>
                                    <div class="text-right pt-2 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                    <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/materiels/create.blade.php ENDPATH**/ ?>