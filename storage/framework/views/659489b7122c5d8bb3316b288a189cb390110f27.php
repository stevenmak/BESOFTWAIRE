<?php $__env->startSection('title', 'IndexMateriels'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES MATERIAUX
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des materiels de construction
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>La liste des materiaux et services dejà enregistrés</strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('materiel-create')): ?><a class="btn btn-primary" href="<?php echo e(route('materiels.create')); ?>">AJOUTER MATERIEL</a><?php endif; ?></div>
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
                    <table id="dt_materiel" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>CODE MATERIAUX</span></th>
                            <th>DESIGNATION</span></th>
                            <th>PRIX MATERIAUX</span></th>
                            <th>TYPE SERVICE</span></th>
                            <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $materiels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $materiel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" " data-id="17">
                                <td class="flex"><?php echo e(++$i); ?></td>
                                <td class="flex"><?php echo e($materiel->codeMateriaux); ?></td>
                                <td class="flex"><?php echo e($materiel->designation); ?></td>
                                <td class="flex"><?php echo e($materiel->prix); ?>  $</td>
                                <td class="flex"><?php echo e($materiel->type); ?></td>
                                <td class="flex">
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a class="dropdown-item" href="<?php echo e(route('materiels.show',$materiel->id)); ?>">
                                                    <i data-feather="eye"></i>
                                                    Afficher
                                                </a>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('materiel-edit')): ?>
                                                <a class="dropdown-item" href="<?php echo e(route('materiels.edit',$materiel->id)); ?>">
                                                    <i data-feather="edit"></i>
                                                    Editer
                                                </a>
                                                <?php endif; ?>
                                                <div class="dropdown-divider"></div>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('materiel-delete')): ?>
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
                      <?php echo $materiels->render(); ?>

                      <script>$('dt_materiel').dataTable();</script>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/materiels/index.blade.php ENDPATH**/ ?>