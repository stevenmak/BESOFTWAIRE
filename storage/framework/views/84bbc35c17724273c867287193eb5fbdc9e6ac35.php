<?php $__env->startSection('title', 'IndexServices'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES SERVICES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des service et affectation
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>La liste des services</strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-create')): ?><a class="btn btn-primary" href="<?php echo e(route('services.create')); ?>">AJOUTER</a><?php endif; ?></div>
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
                    <table id="dataTable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th>NUMERO</th>
                                <th>NOM SERVICE</th>
                                <th>NOMBRE AGENTS</th>
                                <th>CHEF SERVICE</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($service->designation); ?></td>
                              <td class="flex"><?php echo e($service->nbreAgent); ?></td>
                              <td class="flex"><?php echo e($agent=App\Agents::select('prenom')->where('id',$service->chefservice)->value('prenom')); ?> <?php echo e($agent=App\Agents::select('nom')->where('id',$service->chefservice)->value('nom')); ?></td>
                              <td class="flex">

                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('services.show',$service->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('services.edit',$service->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service-delete')): ?>
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
                      <?php echo $services->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/services/index.blade.php ENDPATH**/ ?>