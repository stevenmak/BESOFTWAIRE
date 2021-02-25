<?php $__env->startSection('title', 'IndexUtilisateurs'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES UTILISATEURS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des utilisateurs du système
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>La liste des utilisateurs ayant un compte</strong></div>
                    <div class="col-3"><a class="btn btn-primary" href="<?php echo e(route('users.create')); ?>">AJOUTER </a></div>
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
                    <table id="t_users" class="table table-theme table-row v-middle" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th><span class="">ID</span></th>
                                <th><span class="">NOM</span></th>
                                <th><span class="">COURRIEL</span></th>
                                <th><span class="">AGENT</span></th>
                                <th><span class="">ETAT</span></th>
                                <th><span class="">ROLES</span></th>
                                <th><span class="">ACTION</span></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td><?php echo e(++$i); ?></td>
                              <td><?php echo e($user->name); ?></td>
                              <td><?php echo e($user->email); ?></td>
                              <td><?php echo e($agent =App\Agents::select('prenom')->where('id', $user->agent_id)->value('prenom')); ?></td>
                              <td><?php echo e($user->etat); ?></td>
                              <td>
                                    <?php if(!empty($user->getRoleNames())): ?>
                                        <?php $__currentLoopData = $user->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label class="badge badge-success"><?php echo e($v); ?></label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                             </td>
                              <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i data-feather="more-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a class="dropdown-item" href="<?php echo e(route('users.show',$user->id)); ?>">
                                                    <i data-feather="eye"></i>
                                                    Afficher
                                                </a>
                                                <a class="dropdown-item" href="<?php echo e(route('users.edit',$user->id)); ?>">
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
                      <?php echo $users->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/users/index.blade.php ENDPATH**/ ?>