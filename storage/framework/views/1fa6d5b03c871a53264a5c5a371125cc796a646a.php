<?php $__env->startSection('title', 'EditerContact'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES CONTACTS CLIENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des contacts clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>MODIFIER CONTACT CLIENT</strong>
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
                <?php echo Form::model($contacts, ['method' => 'PATCH','route' => ['contacts.update', $contacts->id]]); ?>

                <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Code Contact</label>
                        <?php echo Form::text('codeContact', null, array('placeholder' => 'Code Contact','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Prenom Contact</label>
                        <?php echo Form::text('prenomContact', null, array('placeholder' => 'Prenom Contact','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom Contact</label>
                        <?php echo Form::text('nomContact', null, array('placeholder' => 'Nom Contact','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Titre Contact</label>
                        <?php echo Form::text('titreContact', null, array('placeholder' => 'Titre Contact','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Genre</label>
                        <?php echo Form::select('genreContact',DB::table('genres')->pluck('nom','symbole'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Profession</label>
                        <?php echo Form::select('professionContact',App\Professions::pluck('intituleFR','intituleFR'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Telephone</label>
                        <?php echo Form::text('telephone', null, array('placeholder' => 'Telephone','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Mobile</label>
                        <?php echo Form::text('mobile', null, array('placeholder' => 'Mobile','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Courriel</label>
                        <?php echo Form::text('courriel', null, array('placeholder' => 'Courriel','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Adresse</label>
                        <?php echo Form::text('adresse', null, array('placeholder' => 'Adresse','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Ville</label>
                        <?php echo Form::text('ville', null, array('placeholder' => 'Ville','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Province</label>
                        <?php echo Form::text('province', null, array('placeholder' => 'Province','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Pays</label>
                        <?php echo Form::text('pays', null, array('placeholder' => 'Pays','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Domaine Activite</label>
                        <?php echo Form::text('domaineActivite', null, array('placeholder' => 'Domaine Activite','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Client</label>
                        <?php echo Form::select('client_id',  App\Clients::select(DB::raw("CONCAT(prenomClient,' ', nomClient) AS nomComplet, id"))
                        ->pluck('nomComplet','id'), null, array('placeholder' => 'Clients','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Créé par</label>
                        <?php echo Form::text('users_id', null, array('placeholder' => 'Créé par','readonly','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">

                    </div>
                    <div class="form-group col-6">
                        <button type="submit" class="btn btn-primary">Modifiez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/contacts/edit.blade.php ENDPATH**/ ?>