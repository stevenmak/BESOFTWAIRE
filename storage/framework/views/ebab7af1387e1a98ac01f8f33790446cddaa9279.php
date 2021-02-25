<?php $__env->startSection('title', 'IndexDepenses'); ?>
<?php $__env->startSection('module'); ?>
GESTION COMPTABILITE ET FINANCE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des depenses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>Liste de depenses </strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('depense-create')): ?><a class="btn btn-primary" href="<?php echo e(route('depenses.create')); ?>">AJOUTER </a><?php endif; ?></div>
                </div>
                <div class="col-12">
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
            <div>
                <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable" >
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="ID">ID</th>
                                <th data-sortable="true" data-field="libelle">LIBELLE</th>
                                <th data-sortable="true" data-field="nomProjet">NOM PROJET</th>
                                <th data-sortable="true" data-field="nomEtape">ETAPE</th>
                                <th data-sortable="true" data-field="designation">TACHE</th>
                                <th data-sortable="true" data-field="designation">SERVICE</th>
                                <th data-sortable="true" data-field="montant">MONTANT</th>
                                <th data-sortable="true" data-field="ACTION">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $depenses=App\Depenses::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $depense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" " data-id="20">
                                <td class="flex"><?php echo e(++$key); ?></td>
                                <td class="flex"><?php echo e($depense->libelle); ?></td>
                                <td class="flex"><?php echo e($projet=App\Projets::select('nomProjet')->where('id',$depense->projet_id)->value('nomProjet')); ?></td>
                                <td class="flex"><?php echo e($etape=App\Etapes::select('nomEtape')->where('id',$depense->etape_id)->value('nomEtape')); ?></td>
                                <td class="flex"><?php echo e($tache=App\Taches::select('designation')->where('id',$depense->tache_id)->value('designation')); ?></td>
                                <td class="flex"><?php echo e($service=App\Services::select('designation')->where('id',$depense->service_id)->value('designation')); ?></td>
                                <td class="flex"><?php echo e(number_format($depense->montant,2, ',', ' ')); ?></td>
                                <td class="flex">
                                    <div class="item-action dropdown">
                                      <a href="#" data-toggle="dropdown" class="text-muted">
                                          <i data-feather="more-vertical"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                          <a class="dropdown-item" href="<?php echo e(route('depenses.show',$depense->id)); ?>">
                                              <i data-feather="eye"></i>
                                              Afficher
                                          </a>
                                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('depense-edit')): ?>
                                          <a class="dropdown-item" href="<?php echo e(route('depenses.edit', $depense->id)); ?>">
                                              <i data-feather="edit"></i>
                                              Editer
                                          </a>
                                          <a class="dropdown-item" href="<?php echo e(route('depenses.edit', $depense->id)); ?>">
                                            <i data-feather="check-square"></i>
                                            Depenses authorisée
                                            </a>
                                          <?php endif; ?>
                                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('depense-delete')): ?>
                                          <div class="dropdown-divider"></div>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/depenses/index.blade.php ENDPATH**/ ?>