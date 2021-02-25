<?php $__env->startSection('title', 'Indexprojets'); ?>
<?php $__env->startSection('module'); ?>
    PLANIFICATION
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de planification
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES PROJETS FINIS</strong></div>
                    <div class="col-3 btn-group">
                        <a class="btn btn-primary" href="<?php echo e(route('projets.index')); ?>">RETOUR AUX PROJETS</a>
                    </div>
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
                            <th>ID</th>
                            <th>NOM</th>
                            <th>CLIENT</th>
                            <th>CONTACT</th>
                            <th>DATE DEBUT</th>
                            <th>DATE FIN</th>
                            <th>ETAT</th>
                            <th>ASSIGNE</th>
                            <th>BUDGET</th>
                            <th>ACTION</th>
                            </tr>
                        </thead>
                          <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($projet->nomProjet); ?></td>
                              <td class="flex"><?php echo e($client =App\Clients::select('prenomClient')->where('id', $projet->client_id)->value('prenomClient')); ?></td>
                              <td class="flex"><?php echo e($contact=App\Contacts::select('prenomContact')->where('id',$projet->contact_id)->value('prenomContact')); ?></td>
                              <td class="flex"><?php echo e($projet->datedebut); ?></td>
                              <td class="flex"><?php echo e($projet->datefin); ?></td>
                              <td class="flex"><?php echo e($projet->etatprojet); ?></td>
                              <td class="flex"><?php echo e($agent=App\Agents::select('prenom')->where('id',$projet->agent_id)->value('prenom')); ?></td>
                              <td class="flex"><?php echo e($projet->BudgetProjet); ?></td>
                              <td class="flex">
                                  <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('projets.show',$projet->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                    </div>
                                </div>

                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </table>
                      <?php echo $projets->render(); ?>

                </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/projets/finis.blade.php ENDPATH**/ ?>