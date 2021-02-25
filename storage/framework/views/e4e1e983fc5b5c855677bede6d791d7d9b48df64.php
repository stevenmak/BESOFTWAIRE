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
                <strong>AJOUTER UN NOUVEL AGENT</strong>
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
                <?php echo Form::open(array('route' => 'agents.store','method'=>'POST')); ?>

                <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Prenom</label>
                        <?php echo Form::text('prenom', null, array('placeholder' => 'Prenom','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom</label>
                        <?php echo Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Code Agent</label>
                        <?php echo Form::text('codeAgent', null, array('placeholder' => 'Code Agent','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Matricule Agent</label>
                        <?php echo Form::text('matriculeAgent', null, array('placeholder' => 'Matricule Agent','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Genre</label>
                        <?php echo Form::select('genre',DB::table('genres')->pluck('nom','symbole'), null, array('placeholder' => '','class' => 'form-control')); ?>

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
                        <?php echo Form::email('courriel', null, array('placeholder' => 'Courriel','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Titre Agent</label>
                        <?php echo Form::text('titreAgent', null, array('placeholder' => 'Titre Agent','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Profession</label>
                        <?php echo Form::select('profession',App\Professions::pluck('intituleFR','intituleFR'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Niveau Etude</label>
                        <?php echo Form::text('niveauEtude', null, array('placeholder' => 'Niveau Etude','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Etat Civil</label>
                        <select class="form-control" name="etatCivil">
                            <option value="Célibataire">Célibataire</option>
                            <option value="Marié">Marié</option>
                            <option value="Autre">Autre</option>
                        </select>
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
                    </div>
                    <div class="form-group col-6">
                        <button type="submit" class="btn btn-primary">Enregistrez</button>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/agents/create.blade.php ENDPATH**/ ?>