<?php $__env->startSection('title', 'Showprojets'); ?>
<?php $__env->startSection('module'); ?>
PLANIFICATION
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
Module de planification
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php
    $totald=0.0;
    $totalp=0.0;
    $montantdtampo=0.0;
    $montantptampo=0.0;
    $soldebudget=0.0;
    $soldepaiement=0.0;
    $i=0;
    ?>
    <div class="col-lg-12 list-group-item">
        <div class="card">
            <div class="card-header">
                <center><strong class="list-group-item active"><h4>Information sur le Projet</h4></strong></center>
            </div>
            <div class="card-body">
<div class="row row-sm" style="padding-top:10px">
                        <div style="margin-top: 20px;"></div>

                    <div class="form-group col-12">
                        <center>
                            <h5>
                                <?php echo e($projets->nomProjet); ?> Pour Mr,(Mme) <?php echo e($client =App\Clients::select('prenomClient')->where('id', $projets->client_id)->value('prenomClient')); ?> <?php echo e($client =App\Clients::select('nomClient')->where('id', $projets->client_id)->value('nomClient')); ?>

                            </h5>
                        </center>
                    </div>

                    <div class="form-group col-6 list-group-item">
                        <label>Contact: </label>
                        <?php echo e($contact=App\Contacts::select('prenomContact')->where('id',$projets->contact_id)->value('prenomContact')); ?>

                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Code Projet: </label>
                        <?php echo e($projets->codeProjet); ?>

                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Déscription: </label>
                        <?php echo e($projets->nomProjet); ?>

                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Budget du projet: </label>
                        <strong><mark><?php echo e(number_format($projets->BudgetProjet,2, ',', ' ')); ?> USD</mark></strong>
                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Paiements déjà effectués: </label>
                <?php $__currentLoopData = $paiement=App\Paiements::select('montant')->where('projet_id',$projets->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paiement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ($montantptampo=$totalp=$totalp+$paiement->montant); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <strong><mark><?php echo e(number_format($montantptampo,2, ',',' ')); ?> USD</mark></strong>
                </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Solde du Budget: </label>
                        <?php ($soldebudget=number_format(($projets->BudgetProjet)-((double)$montantptampo),2, ',', ' ')); ?>
                        <strong><mark><?php echo e($soldebudget); ?> USD</mark></strong>
                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Dépenses effectués: </label>
                <?php $__currentLoopData = $depense=App\Depenses::select('montant')->where('projet_id',$projets->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $depense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php ( $montantdtampo=$totald=$totald+$depense->montant); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <strong><mark><?php echo e(number_format($montantdtampo,2, ',',' ')); ?> USD</mark></strong>
                    </div>

                    <div class="form-group col-6 list-group-item">
                        <label>Etat du projet: </label>
                        <?php echo e($projets->etatprojet); ?>

                    </div>
                                        <div class="form-group col-6 list-group-item">
                        <label>Solde des Paiements après dépenses: </label>
                        <?php ($soldepaiement=(double)$montantptampo-(double)$montantdtampo); ?>
                        <strong><mark><?php echo e(number_format($soldepaiement,2, ',',' ')); ?> USD</mark></strong>
                    </div>

                    <div class="form-group col-6 list-group-item">
                        <label>Date du lancement: </label>
                        <?php echo e($projets->datedebut); ?>

                    </div>

                    <div class="form-group col-6 list-group-item">
                        <label>Date fin: </label>
                        <?php echo e($projets->datefin); ?>

                    </div>
                <div class="table-responsive" data-show-columns="true">
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                    <thead>
                            <tr>
                                <th data-sortable="true" data-field="ID">ID</th>
                                <th data-sortable="true" data-field="nomEtape">Etape</th>
                                <th data-sortable="true" data-field="avancement">Avancement</th>
                                <th></th>
                            </tr>
                    </thead>
                <tbody>
                    
                <?php $__currentLoopData = $etape=App\Etapes::select('nomEtape','description','avancement','id')->where('projet_id',$projets->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $etape): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php ($id=$etape->id); ?>
                <tr class=" " data-id="20">
                    <td style="min-width:30px;text-align:center">
                        <small class="text-muted"><?php echo e(++$i); ?></small>
                    </td>
                <td class="flex">
                    <a class="item-title text-colo" href="<?php echo e(route('etapes.show',$etape->id)); ?>">
                        <?php echo e($etape->nomEtape); ?>

                    </a>
                    <div class="item-except text-muted text-sm h-1x">
                        <?php echo e($etape->description); ?>

                    </div>
                </td>

                <td>
                    <span class="item-amount d-none d-sm-block text-sm ">
                            <?php echo e($etape->avancement); ?>

                    </span>
                </td>
                </tr>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
             </tbody>
            </table>
                    <div class="form-group col-12">
                        <label>Liste des taches: </label>

                        <?php echo e($taches=App\Taches::join('etapes','taches.etape_id', '=','etapes.id')
                        ->select('taches.designation')
                        ->get()); ?>


                    </div>
                    <div class="form-group col-6 list-group-item">
                        <label>Projet créé par: </label>
                            <em>
                                <?php echo e($agent=App\Agents::select('prenom')->where('id',$projets->agent_id)->value('prenom')); ?> <?php echo e($agent=App\Agents::select('nom')->where('id',$projets->agent_id)->value('nom')); ?>

                            </em>
                    </div>
            </div>
            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/projets/show.blade.php ENDPATH**/ ?>