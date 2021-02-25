<?php $__env->startSection('title', 'CreerEtapes'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES ETAPES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des étapes du projet
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="title">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter une étape</strong>
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
                    <?php echo Form::open(array('route' => 'etapes.store','method'=>'POST')); ?>

                    <div class="card">
                        <div class="card-header">
                            <strong>Etape projet</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Tous les champs sont obligatoires.</p>
                                <div class="form-row">
                                    <div class="form-group col-sm-6 ">
                                        <label>Désignation</label>
                                        <input type="text" class="form-control" placeholder="Entrer la désignation" name="nomEtape" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Séléctionner le Projet</label>
                                        <?php echo Form::select('projet_id',App\Projets::pluck('nomprojet', 'id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Date du début</label>
                                        <input id="event-start-date" type="date" class="form-control" placeholder="Date début" name="debutEtape">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Date de fin</label>
                                        <input id="event-start-date" type="date" class="form-control" placeholder="Date fin" name="debutFin">
                                    </div>
                                    <div class="form-group col-sm-6 ">
                                        <label>Temps prévu pour l'étape</label>
                                        <input type="text" class="form-control" placeholder="Entrer le temps prevu" name="tempsprevu" required>
                                    </div>
                                    <div class="form-group col-sm-6 ">
                                        <label>Avancement étape</label>
                                        <input type="text" class="form-control" placeholder="Entrer avancement" name="avancement" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Déscription étape</label>
                                        <textarea id="event-desc" class="form-control" rows="3" name="description" placeholder="Entrer la Déscription du projet" required></textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Etat étape</label>
                                        <select class="form-control" name="etatEtape">
                                            <option value=""></option>
                                            <option value="A faire">A débuter</option>
                                            <option value="En cours">En cours</option>
                                            <option value="Terminer">Terminée</option>
                                            <option value="En pause">En pause</option>
                                            <option value="En pause">Annulée</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Etape prérequis</label>
                                        <input type="text" class="form-control" placeholder="Entrer étape prérequis" name="etapeprerequise" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label></label>
                                        <input type="hidden" class="form-control"  name="users_id" required value="<?php echo e(auth()->user()->id); ?>">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/etapes/create.blade.php ENDPATH**/ ?>