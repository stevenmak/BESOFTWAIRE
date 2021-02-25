<?php $__env->startSection('title', 'IndexDepartement'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES DEPARTEMENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des departements
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>La liste des départements</strong></div>
                    <div class="col-3">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('departement-create')): ?>
                        <a class="btn btn-primary" href="<?php echo e(route('departements.create')); ?>">AJOUTER</a>
                        <?php endif; ?>
                    </div>
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
                <div class="table-responsive">
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable">
                        <thead>
                            <tr>
                            <th data-sortable="true" data-field="ID">ID</th>
                            <th></th>
                            <th data-sortable="true" data-field="nombreagent">NOMBRE DES AGENTS</th>
                            <th>ACTION</th>
                            </tr>
                         </thead>
                         <tbody>
                          <?php $__currentLoopData = $departements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $departement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($departement->designation); ?></td>
                              <td class="flex"><?php echo e($departement->nbreAgent); ?></td>
                              <td class="flex">
                                      <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">

                                            <a class="dropdown-item" href="<?php echo e(route('departements.show',$departement->id)); ?>">
                                                <i data-feather="eye"></i>
                                                Afficher
                                            </a>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('departement-edit')): ?>
                                            <a class="dropdown-item" href="<?php echo e(route('departements.edit',$departement->id)); ?>">
                                                <i data-feather="edit"></i>
                                                Editer
                                            </a>
                                            <?php endif; ?>

                                            <div class="dropdown-divider"></div>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('departement-delete')): ?>
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
                      <?php echo $departements->render(); ?>

                      <script>$('dt_departement').dataTable();</script>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/departements/index.blade.php ENDPATH**/ ?>