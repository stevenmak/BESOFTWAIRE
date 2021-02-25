<?php $__env->startSection('title', 'IndexEntreprise'); ?>
<?php $__env->startSection('module'); ?>
DONNEES DE L'ENTREPRISE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
Affichages des Informations sur l'entreprise
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
            <div class="row">
                <strong>Informations sur l'entreprise</strong>
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
                            <th>ID NAT</th>
                            <th>RCCM</th>
                            <th>NUM IMPOT</th>
                            <th>TELEPHONE</th>
                            <th>MOBILE</th>
                            <th class=" ">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $entreprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $entreprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" " data-id="17">
                                <td class="flex"><?php echo e(++$i); ?></td>
                                <td class="flex"><?php echo e($entreprise->nom); ?></td>
                                <td class="flex"><?php echo e($entreprise->idNat); ?></td>
                                <td class="flex"><?php echo e($entreprise->RCCM); ?></td>
                                <td class="flex"><?php echo e($entreprise->numImpot); ?></td>
                                <td class="flex"><?php echo e($entreprise->telephone); ?></td>
                                <td class="flex"><?php echo e($entreprise->mobile); ?></td>
                                <td class="flex">
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a class="dropdown-item" href="<?php echo e(route('entreprises.show', $entreprise->id)); ?>">
                                                <i data-feather="eye"></i>
                                                Afficher
                                            </a>
                                            <a class="dropdown-item" href="<?php echo e(route('entreprises.edit', $entreprise->id)); ?>">
                                                <i data-feather="edit"></i>
                                                Editer
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item">
                                                <i data-feather="archive"></i>
                                                Archiver
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                      <?php echo $entreprises->render(); ?>

            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/entreprises/index.blade.php ENDPATH**/ ?>