<?php $__env->startSection('title', 'AfficherAgent'); ?>
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
                <strong>Informations personnelles</strong>
            </div>
            <div class="card-body">
                <div class="row row-sm">
                    <div class="form-group col-6">
                        <h5 class="mt-2"><?php echo e($agents->prenom); ?> <?php echo e($agents->nom); ?></h5>
                    </div>
                    <div class="form-group col-6">
                    </div>
                    <div class="form-group col-6">
                        Genre:  <?php echo e($agents->genre); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Niveau Etude: </label>
                        <?php echo e($agents->niveauEtude); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Etat Civil: </label>
                        <?php echo e($agents->etatCivil); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Adresse: </label>
                        <?php echo e($agents->adresse); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Téléphone: </label>
                        <?php echo e($agents->telephone); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Mobile: </label>
                        <?php echo e($agents->mobile); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Courriel: </label>
                        <?php echo e($agents->courriel); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Ville: </label>
                        <?php echo e($agents->ville); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Province: </label>
                        <?php echo e($agents->province); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Pays: </label>
                        <?php echo e($agents->pays); ?>

                    </div>

                </div>
                </div>

    <hr>
            <div class="card-header">
                <strong>Informations professionelles</strong>
            </div>
            <div class="card-body">
                <div class="row row-sm">
                  
                    <div class="form-group col-6">
                        <label>Titre Agent: </label>
                        <?php echo e($agents->titreAgent); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Code Agent: </label>
                        <?php echo e($agents->codeAgent); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Matricule Agent: </label>
                        <?php echo e($agents->matriculeAgent); ?>

                    </div>
                    
                    <div class="form-group col-6">
                        <label>Profession: </label>
                        <?php echo e($agents->profession); ?>

                    </div>
                    
                    <div class="form-group col-6">

                    </div>
                </div>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/agents/show.blade.php ENDPATH**/ ?>