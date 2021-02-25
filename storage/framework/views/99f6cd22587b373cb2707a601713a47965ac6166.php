<?php $__env->startSection('title', 'Indextaux'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES TAUX D'ECHANGES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des taux d'echanges
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-8"><strong>Le taux afficher correspond l'equivalent d' 1$ en FC</strong></div>
                    <div class="col-4"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('echange-create')): ?><a class="btn btn-primary" href="<?php echo e(route('echanges.create')); ?>">AJOUTER TAUX</a><?php endif; ?></div>
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
                    <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>VALEUR TAUX</th>
                            <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $echanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $echange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($echange->valeurEchanges); ?></td>
                              <td class="flex">
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('echanges.show',$echange->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('echange-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('echanges.edit', $echange->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('echange-delete')): ?>
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
                      <?php echo $echanges->render(); ?>

                </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/echanges/index.blade.php ENDPATH**/ ?>