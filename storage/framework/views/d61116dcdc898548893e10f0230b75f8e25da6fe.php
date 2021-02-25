<?php $__env->startSection('title', 'Creerprojets'); ?>
<?php $__env->startSection('module'); ?>
PLANIFICATION
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
Module de planification
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter un Projet</strong>
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
                <?php echo Form::open(array('route' => 'projets.store','method'=>'POST')); ?>

                <div class="row row-sm">
                    <div class="form-group col-6">
                        <label>Code</label>

                        <?php echo Form::text('codeProjet', null, array('placeholder' => 'Code du Projet','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Nom du Projet</label>
                        <?php echo Form::text('nomProjet', null, array('placeholder' => 'Nom du projet','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Client</label>
                        <?php echo Form::select('client_id',  App\Clients::select(DB::raw("CONCAT(prenomClient,' ', nomClient) AS nomComplet, id"))->pluck('nomComplet','id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Contact</label>
                        <?php echo Form::select('contact_id',  App\Contacts::select(DB::raw("CONCAT(prenomContact,' ', nomContact) AS nomContact, id"))->pluck('nomContact','id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date début</label>
                        <?php echo Form::date('datedebut', null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Date fin</label>
                        <?php echo Form::date('datefin', null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Description</label>
                        <?php echo Form::text('description', null, array('placeholder' => 'Description du projet','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Méthode de paiement</label>
                        <select class="form-control" name="methodepaiement">
                            <option value="Cash">Cash</option>
                            <option value="Banque">Banque</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Etat du Projet</label>
                        <select class="form-control" name="etatprojet">
                            <option value="A faire">A faire</option>
                            <option value="En cours">En cours</option>
                            <option value="Terminer">Terminer</option>
                            <option value="En pause">En pause</option>
                            <option value="Annuler">Annuler</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Chef du Projet</label>
                        <?php echo Form::select('agent_id',  App\Agents::select(DB::raw("CONCAT(prenom,' ', nom) AS nomAgent, id"))->pluck('nomAgent','id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                    </div>
                    <div class="form-group col-6">
                        <label>Budget du Projet</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="BudgetProjet">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/projets/create.blade.php ENDPATH**/ ?>