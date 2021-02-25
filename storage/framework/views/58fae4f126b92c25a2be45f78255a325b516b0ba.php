<?php $__env->startSection('title', 'CreerAgent'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES AGENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des agents
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>MODIFIER CLIENT</strong>
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
                <?php echo Form::model($clients, ['method' => 'PATCH','route' => ['clients.update', $clients->id]]); ?>

                <div class="row row-sm">

                    <div class="form-group col-6">
                        <label>Code Client</label>
                        <?php echo Form::text('codeClient', null, array('placeholder' => 'Code Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Prenom</label>
                        <?php echo Form::text('prenomClient', null, array('placeholder' => 'Prenom','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom Client</label>
                        <?php echo Form::text('nomClient', null, array('placeholder' => 'Nom','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom Entreprise</label>
                        <?php echo Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Genre</label>
                        <?php echo Form::select('genreClient',DB::table('genres')->pluck('nom','symbole'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-sm-6">
                        <label>Contact Client</label>
                        <?php echo Form::text('contactClient', null, array('placeholder' => 'Nom Contact Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Titre Client</label>
                        <?php echo Form::text('titreClient', null, array('placeholder' => 'Titre Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Profession</label>
                        <?php echo Form::select('professionClient',App\Professions::pluck('intituleFR','intituleFR'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Adresse Client</label>
                        <?php echo Form::text('adresseClient', null, array('placeholder' => 'Adresse Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Ville Client</label>
                        <?php echo Form::text('villeClient', null, array('placeholder' => 'Ville Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Province Client</label>
                        <?php echo Form::text('provinceClient', null, array('placeholder' => 'Province Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Pays Client</label>
                        <?php echo Form::text('paysClient', null, array('placeholder' => 'Pays Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Domainde d'activité</label>
                        <?php echo Form::text('domaineActivite', null, array('placeholder' => 'Domaine Activité','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Terme Paiement</label>
                        <?php echo Form::text('termepaiement', null, array('placeholder' => 'Terme Paiement','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Téléphone</label>
                        <?php echo Form::text('telephone', null, array('placeholder' => 'Téléphone','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Mobile</label>
                        <?php echo Form::text('mobile', null, array('placeholder' => 'Mobile','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Courriel</label>
                        <?php echo Form::email('courriel', null, array('placeholder' => 'Courriel','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Site web</label>
                        <?php echo Form::text('siteweb', null, array('placeholder' => 'Site web','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Type Client</label>
                        <?php echo Form::text('typeclient', null, array('placeholder' => 'Type Client','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Créé par</label>
                        <?php echo Form::select('users_id',App\User::pluck('name', 'id'), null, array('placeholder' => 'Créer par','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                    </div>
                    <div class="form-group col-6">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/clients/edit.blade.php ENDPATH**/ ?>