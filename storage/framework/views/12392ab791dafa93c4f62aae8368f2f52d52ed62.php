<?php $__env->startSection('title', 'CreerContact'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES CONTACTS CLIENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des contacts clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <div class="card">
            <div class="card-header">
                <strong>AJOUTER UN NOUVEAU CONTACT CLIENT</strong>
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
                <?php echo Form::open(array('route' => 'contacts.store','method'=>'POST')); ?>

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
                        <label>Le contact du client</label>
                        <?php echo Form::select('client_id',  App\Clients::select(DB::raw("CONCAT(prenomClient,' ', nomClient) AS nomComplet, id"))
                        ->pluck('nomComplet','id'), null, array('placeholder' => 'Clients','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Créé par</label>
                        <input type="text" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>" readonly>
                    </div>
                    <div class="form-group col-6">

                    </div>
                    <div class="form-group col-6">
                        <button type="submit" class="btn btn-primary">Enregistrez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/contacts/create.blade.php ENDPATH**/ ?>