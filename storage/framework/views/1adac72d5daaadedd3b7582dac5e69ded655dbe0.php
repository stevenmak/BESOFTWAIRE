<?php $__env->startSection('title', 'CreerClient'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES CLIENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter un nouveau client</strong>
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
                    <?php echo Form::open(array('route' => 'clients.store','method'=>'POST')); ?>

                            <p class="text-muted">Tous les champs sont obligatoires.</p>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>Le Code client</label>
                                        <input type="text" class="form-control" placeholder="Entrer le code client" name="codeClient" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Le nom entreprise</label>
                                        <input type="text" required class="form-control" placeholder="Le nom de l'entreprise" name="nom">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control" placeholder="Enter le prénom du client" name="prenomClient" required>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" placeholder="Entrer le nom du client" name="nomClient" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Titre</label>
                                        <input type="text" required class="form-control" placeholder="Le titre Client" name="titreClient">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Genre</label>
                                        <?php echo Form::select('genreClient',DB::table('genres')->pluck('nom','symbole'), null, array('placeholder' => '','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Profession</label>
                                        <?php echo Form::select('professionClient',App\Professions::pluck('intituleFR','intituleFR'), null, array('placeholder' => '','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Adresse</label>
                                        <input type="text" required class="form-control" placeholder="L'adresse Client" name="adresseClient">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Ville</label>
                                        <input type="text" required class="form-control" placeholder="La Ville du client" name="villeClient">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Province</label>
                                        <input type="text" required class="form-control" placeholder="La province Client" name="provinceClient">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Pays</label>
                                        <input type="text" class="form-control" placeholder="Enter le pays du client" name="paysClient" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Domaine d'activité</label>
                                        <input type="text" class="form-control" placeholder="Domaine d'activité" name="domaineActivite" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Terme de paiement</label>
                                        <input type="text" class="form-control" placeholder="Terme de paiement" name="termepaiement" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Téléphone</label>
                                        <input type="text" class="form-control" placeholder="Enter le numéro Téléphone" name="telephone" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control" placeholder="Enter le mobile" name="mobile" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Courriel</label>
                                        <input type="text" class="form-control" placeholder="Enter la désignation" name="courriel" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Site web</label>
                                        <input type="text" class="form-control" placeholder="Enter le site web" name="siteweb" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Type client</label>
                                        <select class="form-control" name="typeclient">
                                            <option value=""></option>
                                            <option value="Privé">Privé</option>
                                            <option value="Entreprise">Entreprise</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label></label>
                                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
                                    </div>
                                    <div class="text-right pt-2 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                    <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/clients/create.blade.php ENDPATH**/ ?>