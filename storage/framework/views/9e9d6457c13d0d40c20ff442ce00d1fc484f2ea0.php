<?php $__env->startSection('title', 'CreerTaches'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES TACHES DU PROJET
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des taches du projet
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>ajouter une Tâche</strong>
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
                <?php echo Form::open(array('route' => 'taches.store','method'=>'POST')); ?>

                <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Designation</label>

                        <?php echo Form::text('designation', null, array('placeholder' => 'Designation','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Description</label>
                        <?php echo Form::text('description', null, array('placeholder' => 'Description','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date début</label>
                        <?php echo Form::date('dateDebut', null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date fin</label>
                        <?php echo Form::date('dateFin', null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Priorité</label>
                        <?php echo Form::text('priorite', null, array('placeholder' => 'Priorite(1,2,3,4)','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Avancement</label>
                        <?php echo Form::text('avancement', null, array('placeholder' => 'Avancement(%)','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Etat</label>
                        <select class="form-control" name="etat">
                            <option value="A faire">A faire</option>
                            <option value="En cours">En cours</option>
                            <option value="Terminer">Terminer</option>
                            <option value="En pause">En pause</option>
                            <option value="Annuler">Annuler</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Etape</label>
                        <?php echo Form::select('etape_id',App\Etapes::pluck('nomEtape', 'id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label></label>
                        <?php echo Form::select('service_id',App\Services::pluck('designation', 'id'), null, array('placeholder' => 'Services','class' => 'form-control')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/taches/create.blade.php ENDPATH**/ ?>