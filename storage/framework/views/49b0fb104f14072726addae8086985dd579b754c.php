<?php $__env->startSection('title', 'IndexDevis'); ?>
<?php $__env->startSection('module'); ?>
GESTION COMPTABILITE ET FINANCE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des devis
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>Liste des etats de besoins enregistrés</strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('devis-create')): ?><a class="btn btn-primary" href="<?php echo e(route('devis.create')); ?>">AJOUTER </a><?php endif; ?></div>
                </div>
                <div class="row">
                    <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="d-flex">
                            <p><?php echo e($message); ?></p>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                     <?php endif; ?>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th><span class="">N°</span></th>
                                <th><span class="">NOM DU CLIENT</span></th>
                                <th><span class="">PROJET</span></th>
                                <th><span class="">TACHE CONCERNEE</span></th>
                                <th><span class="">DESCRIPTION DEVIS</span></th>
                                <th><span class="">ETAT DEVIS</span></th>
                                <th><span class="">MONTANT</span></th>
                                <th><span class="">ACTION</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $devis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $devi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" " data-id="17">
                                <td class="flex"><?php echo e(++$i); ?></td>
                                <td class="flex"><?php echo e($client=App\Clients::select('prenomClient')->where('id',$devi->client_id)->value('prenomClient')); ?> <?php echo e($client=App\Clients::select('nomClient')->where('id',$devi->client_id)->value('nomClient')); ?></td>
                                <td class="flex"><?php echo e($projet=App\Projets::select('nomProjet')->where('id',$devi->projet_id)->value('nomProjet')); ?></td>
                                <td class="flex"><?php echo e($devi->tacheDevis); ?></td>
                                <td class="flex"><?php echo e($devi->descriptiondevis); ?></td>
                                <td class="flex"><?php echo e($devi->etatdevis); ?></td>
                                <td class="flex"><?php echo e(number_format($devi->montantdevis,2,',',' ')); ?></td>
                                <td class="flex">
                                    <div class="item-action dropdown">
                                      <a href="#" data-toggle="dropdown" class="text-muted">
                                          <i data-feather="more-vertical"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                          <a class="dropdown-item" href="<?php echo e(route('devis.show',$devi->id)); ?>">
                                              <i data-feather="eye"></i>
                                              Afficher
                                          </a>
                                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('devis-edit')): ?>
                                          <a class="dropdown-item" href="<?php echo e(route('devis.edit', $devi->id)); ?>">
                                              <i data-feather="edit"></i>
                                              Editer
                                          </a>
                                          <?php endif; ?>
                                          <a class="dropdown-item" href="<?php echo e(route('devis.edit', $devi->id)); ?>">
                                            <i data-feather="check-square"></i>
                                            Valider devis
                                        </a>
                                          <div class="dropdown-divider"></div>
                                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('devis-delete')): ?>
                                          <a class="dropdown-item">
                                              <i data-feather="archive"></i>
                                              Archiver
                                          </a>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                     <?php echo $devis->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/devis/index.blade.php ENDPATH**/ ?>