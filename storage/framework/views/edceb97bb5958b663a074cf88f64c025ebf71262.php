<?php $__env->startSection('title', 'Creerpaiements'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES PAIEMENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des paiemets
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter un Paiement</strong>
            </div>
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <strong>Whoops!</strong>Veillez verifier les données saisies<br><br>
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
            <div class="card-body">
                <?php echo Form::open(array('route' => 'paiements.store','method'=>'POST')); ?>

                                              <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Code</label>

                        <?php echo Form::text('reference', null, array('placeholder' => 'Référence Paiement','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Libélé</label>
                        <?php echo Form::text('libelle', null, array('placeholder' => 'Libélé','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Déscription</label>
                        <?php echo Form::text('description', null, array('placeholder' => 'Déscription','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date Paiement</label>
                        <?php echo Form::date('datepaiement', null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                            <label>Montant</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="montant" step="0.00">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                    </div>
                    <div class="form-group col-6">
                        <label>Code du projet</label>
                        <?php echo Form::select('projet_id', App\Projets::pluck('nomProjet','id') , null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label></label>
                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                    </div>
                    <div class="form-group col-6"></div>
                    <div class="form-group col-6">

                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/paiements/create.blade.php ENDPATH**/ ?>