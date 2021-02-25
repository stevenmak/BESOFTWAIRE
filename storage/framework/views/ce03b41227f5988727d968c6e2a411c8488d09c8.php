<?php $__env->startSection('title', 'editUtilisateurs'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES UTILISATEURS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des utilisateurs du système
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'ModifierUser'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES UTILISATEURS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des utilisateurs
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>MODIFIER UN UTILISATEUR</strong>
            </div>
            <div class="card-body">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger dismiss">
                        <strong>Whoops!</strong>Veillez verifié les données saisies<br><br>
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php echo Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]); ?>

                <div class="card">
                        <div class="card-header">
                            <strong>Ajouter un nouvel utilisateur</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Tous les champs sont obligatoires.</p>
                                <div class="form-row">
                                    <div class="form-group col-sm-6 ">
                                        <label>Nom utilisateur</label>
                                        <?php echo Form::text('name', null, array('placeholder' => 'Nom utilisateur','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Adresse Email</label>
                                        <?php echo Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Mot de passe</label>
                                        <?php echo Form::password('password', array('placeholder' => 'Password','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Confirmez Password</label>
                                        <?php echo Form::password('confirm-password', array('placeholder' => 'Confirmez Password','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nom de l'agent</label>
                                        <?php echo Form::select('agent_id',  App\Agents::select(DB::raw("CONCAT(prenom,' ', nom) AS nomComplet, id"))->pluck('nomComplet','id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Roles Agent</label>
                                        <?php echo Form::select('roles[]', $roles,[], array('class' => 'form-control')); ?>

                                    </div>
                                    <div class="text-right pt-2 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/users/edit.blade.php ENDPATH**/ ?>