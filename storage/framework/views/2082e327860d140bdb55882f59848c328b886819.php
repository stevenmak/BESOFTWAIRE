<?php $__env->startSection('title', 'EditerEtapes'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES ETAPES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des étapes du projet
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter une étape projet</strong>
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
                <?php echo Form::model($etapes, ['method' => 'PATCH','route' => ['etapes.update', $etapes->id]]); ?>

                   
                    
                    <div class="card">
                        <div class="card-header">
                            <strong>Modifier une étape projet</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">Tous les champs sont obligatoires.</p>
                                <div class="form-row">
                                    <div class="form-group col-sm-6 ">
                                        <label>L'étape projet</label>
                                        <?php echo Form::text('nomEtape', null, array('placeholder' => 'Entrer la désignation pour étape projet','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Le nom du projet</label>
                                        <?php echo Form::select('projet_id',App\Projets::pluck('nomprojet', 'id'), null, array('placeholder' => '','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Date début</label>
                                        <?php echo Form::text('debutEtape', null, array('placeholder' => 'Enterez la date du début!','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Date Fin</label>
                                        <?php echo Form::text('debutFin', null, array('placeholder' => 'Enterez la date Fin!','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Temps prevu</label>
                                        <?php echo Form::text('tempsprevu', null, array('placeholder' => 'Enterez le temps prévu!','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Avancement étape en %</label>
                                        <?php echo Form::text('avancement',  null, array('placeholder' => 'Avancement étape en %!','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Déscription étape</label>
                                        <?php echo Form::textarea('description', null, array('placeholder' => 'Déscription étape!','class' => 'form-control')); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Etat étape</label>
                                        <?php echo Form::select('etatEtape', ['etape' => 'A débuter', 'En cours','Terminé','En pause','Annulée', 'Entrez étape!' => 'Service'],null,['class' => 'form-control']); ?>

                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Etape requise</label>
                                        <?php echo Form::select('etapeprerequise', ['etape' => 'etape', 'Entrez la date fin étape!' => 'Service'],null,['class' => 'form-control']); ?>

                                    
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/etapes/edit.blade.php ENDPATH**/ ?>