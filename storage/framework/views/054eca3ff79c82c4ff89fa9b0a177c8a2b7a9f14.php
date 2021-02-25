<?php $__env->startSection('title', 'IndexAgent'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES AGENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des agents
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES AGENTS BETA ENGENEERING</strong></div>
                    <div class="col-3"> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('agent-create')): ?><a class="btn btn-primary" href="<?php echo e(route('agents.create')); ?>">AJOUTER</a><?php endif; ?></div>
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
                            <th>PRENOM</th>
                            <th>NOM AGENT</th>
                            <th>TELEPHONE</th>
                            <th>MOBILE</th>
                            <th>PROFESSION</th>
                            <th>GENRE</th>
                            <th class=" " data-id="17">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($agent->prenom); ?></td>
                              <td class="flex"><?php echo e($agent->nom); ?></td>
                              <td class="flex"><?php echo e($agent->telephone); ?></td>
                              <td class="flex"><?php echo e($agent->mobile); ?></td>
                              <td class="flex"><?php echo e($agent->profession); ?></td>
                              <td class="flex"><?php echo e($agent->genre); ?></td>
                              <td class="flex">
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('agents.show',$agent->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('agent-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('agents.edit', $agent->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>

                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('agent-delete')): ?>
                                        <?php echo Form::open(['method' => 'PUT','route' => ['archiverAgent', $agent],'style'=>'display:inline']); ?>

                                        <?php echo Form::submit('<i data-feather="archive">Archiver</i>', ['class' => 'btn btn-danger']); ?>

                                        <?php echo Form::close(); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>

                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                      <?php echo $agents->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/agents/index.blade.php ENDPATH**/ ?>