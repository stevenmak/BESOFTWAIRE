<?php $__env->startSection('title', 'Indexprojets'); ?>
<?php $__env->startSection('module'); ?>
PLANIFICATION
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
Module de planification
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 list-group-item">
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES PROJETS</strong></div>
                    <div class="col-3 btn-group" style="margin-bottom: 20px;">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('projet-create')): ?><a class="btn btn-primary" href="<?php echo e(route('projets.create')); ?>">AJOUTER</a><?php endif; ?>
                        <a class="btn btn-warning" href="<?php echo e(route('projetsfinis')); ?>">PROJETS FINIS</a>
                </div>

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
            <div style="margin-top:20px"></div>

            <div class="page-content page-container" id="page-content">

              <div>
                <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable">
                    <thead>
                            <tr>
                                <th data-sortable="true" data-field="ID">ID</th>
                                <th data-sortable="true" data-field="nomProjet">NOM</th>
                                <th data-sortable="true" data-field="prenomClient">CLIENT</th>
                                <th data-sortable="true" data-field="prenomContact">CONTACT</th>
                                <th data-sortable="true" data-field="datedebut">DATE DEBUT</th>
                                <th data-sortable="true" data-field="datefin">DATE FIN</th>
                                <th data-sortable="true" data-field="etatprojet">ETAT</th>
                                <th data-sortable="true" data-field="prenom">ASSIGNE</th>
                                <th data-sortable="true" data-field="BudgetProjet">BUDGET</th>
                                <th data-sortable="true" data-field="description">Déscription</th>
                                <th data-sortable="true" data-field="ACTION">ACTION</th>
                                
                            </tr>
                    </thead>
                    <tbody>
                          <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="20">
                              <td style="min-width:30px;text-align:center">
                                <small class="text-muted"><?php echo e(++$i); ?></small>
                              </td>
                              <td class="flex"><?php echo e($projet->nomProjet); ?></td>
                              <td class="flex"><?php echo e($client =App\Clients::select('prenomClient')->where('id', $projet->client_id)->value('prenomClient')); ?></td>
                              <td class="flex"><?php echo e($contact=App\Contacts::select('prenomContact')->where('id',$projet->contact_id)->value('prenomContact')); ?>

                              </td>
                              <td class="flex"><?php echo e($projet->datedebut); ?></td>
                              <td class="flex"><?php echo e($projet->datefin); ?></td>
                              <td class="flex"><?php echo e($projet->etatprojet); ?></td>
                              <td class="flex"><?php echo e($agent=App\Agents::select('prenom')->where('id',$projet->agent_id)->value('prenom')); ?>

                              </td>
                              <td class="flex"><?php echo e(number_format($projet->BudgetProjet,2, ',', ' ')); ?>USD</td>
                              <td class="flex"><?php echo e($projet->description); ?></td>
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
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('projet-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('projets.edit', $projet->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('projet-delete')): ?>
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
              </div>
            </div>
        </div>
      </div>
                      <?php echo $projets->render(); ?>


               
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/projets/index.blade.php ENDPATH**/ ?>