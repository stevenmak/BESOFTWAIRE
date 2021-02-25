<?php $__env->startSection('title', 'creerDepenses'); ?>
<?php $__env->startSection('module'); ?>
GESTION COMPTABILITE ET FINANCE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des depenses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Effectuer une depense</strong>
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
                <?php echo Form::model($depenses, ['method' => 'PATCH','route' => ['depenses.update', $depenses->id]]); ?>

                <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Reference Depense</label>
                        <?php echo Form::text('reference', null, array('placeholder' => 'refernce devis','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Reference devis</label>
                        <?php echo Form::select('devis_id', App\Devis::pluck('reference','id') , null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date depense</label>
                        <?php echo Form::text('datedepense', null, array('class' => 'form-control','type'=>'datetime-local','id'=>'example-datetime-local-input')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom Projet</label>
                        <?php echo Form::select('projet_id', App\Projets::pluck('nomProjet','id') , null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Etape projet</label>
                        <?php echo Form::select('etape_id', App\Etapes::pluck('nomEtape','id') , null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Tache</label>
                        <?php echo Form::select('tache_id', App\Taches::pluck('designation','id') , null, array('class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Service</label>
                        <?php echo Form::select('service_id', App\Services::pluck('designation','id') , null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>

                    <div class="form-group col-6">
                        <label>Montant depensés</label>
                        <?php echo Form::number('montant', null, array('placeholder' => 'Montant','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Libelle</label>
                        <?php echo Form::text('libelle', null, array('placeholder' => 'Libelle depense','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Description</label>
                        <?php echo Form::text('description', null, array('placeholder' => 'Descritipon','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label></label>
                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Envoyez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/depenses/edit.blade.php ENDPATH**/ ?>