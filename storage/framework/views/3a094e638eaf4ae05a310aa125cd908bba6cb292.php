

<?php $__env->startSection('title', 'AfficherContactClient'); ?>
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
                <strong>Afficher les Contacts Clients</strong>
            </div>
            <div class="card card-body bg-skyblue">
            <div class="row row-sm">

                    <div class="form-group col-6">

                        <h4><?php echo e($contacts->prenomContact); ?> <?php echo e($contacts->nomContact); ?></h4>
                    </div>
                    <div class="form-group col-6">

                    </div>
                    <div class="form-group col-6">
                        <label>Code: </label>
                        <?php echo e($contacts->codeContact); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Genre: </label>
                        <?php echo e($contacts->genreContact); ?>

                    </div>
                    
                    <div class="form-group col-6">
                        <label>Adresse: </label>
                        <?php echo e($contacts->adresse); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Ville: </label>
                        <?php echo e($contacts->ville); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Province: </label>
                        <?php echo e($contacts->province); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Pays: </label>
                        <?php echo e($contacts->pays); ?>

                    </div>
                    
                    <div class="form-group col-6">
                        <label>Titre: </label>
                        <?php echo e($contacts->titreContact); ?>

                    </div>

                    <div class="form-group col-6">
                        <label>Téléphone: </label>
                        <?php echo e($contacts->telephone); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Mobile: </label>
                        <?php echo e($contacts->mobile); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Courriel: </label>
                        <?php echo e($contacts->courriel); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Profession: </label>
                        <?php echo e($contacts->professionContact); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Domaine d'activité: </label>
                        <?php echo e($contacts->domaineActivite); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Contact du Client: </label>
                        <?php echo e(($client=App\Clients::select('prenomClient')->where('id',$contacts->client_id)->value('prenomClient'))); ?>

                    </div>      

            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/contacts/show.blade.php ENDPATH**/ ?>