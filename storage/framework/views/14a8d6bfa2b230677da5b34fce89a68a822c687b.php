<?php $__env->startSection('title', 'IndexRoles'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES ROLES UTILISATEUR
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des roles utisateurs et leurs privilèges
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES ROLES</strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?><a class="btn btn-primary" href="<?php echo e(route('roles.create')); ?>">AJOUTER</a><?php endif; ?></div>
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
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class=""><?php echo e(++$i); ?></td>
                                <td class=""><?php echo e($role->name); ?></td>
                                <td class="">
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a class="dropdown-item" href="<?php echo e(route('roles.show',$role->id)); ?>">
                                                    <i data-feather="eye"></i>
                                                    Afficher
                                                </a>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                                <a class="dropdown-item" href="<?php echo e(route('roles.edit',$role->id)); ?>">
                                                    <i data-feather="edit"></i>
                                                    Editer
                                                </a>
                                                <?php endif; ?>
                                                <div class="dropdown-divider"></div>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
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
                      <?php echo $roles->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/roles/index.blade.php ENDPATH**/ ?>