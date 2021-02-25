<?php $__env->startSection('title', 'IndexClient'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES CLIENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des clients
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

                <div class="row">
                    <div class="col-9"><strong>La liste des clients</strong></div>
                    <div class="col-3"> <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client-create')): ?><a class="btn btn-primary" href="<?php echo e(route('clients.create')); ?>">Ajouter un Client</a><?php endif; ?></div>
                </div>
                <div style="margin-top: 20px;"></div>
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
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable">
                        <thead>
                            <tr>
                            <th data-sortable="true" data-field="ID">ID</th>
                            <th data-sortable="true" data-field="nom">ENTREPRISE</th>
                            <th data-sortable="true" data-field="prenomClient">PRENOM</th>
                            <th data-sortable="true" data-field="nomClient">NOM</th>
                            <th data-sortable="true" data-field="titreClient">TITRE</span></th>
                            <th data-sortable="true" data-field="villeClient">ADRESSE</th>
                            <th data-sortable="true" data-field="telephone">TELEPHONE</th>
                            <th data-sortable="true" data-field="mobile">MOBILE</th>
                            <th data-sortable="true" data-field="courriel">COURRIEL</th>
                            <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td><?php echo e(++$i); ?></td>
                              <td><?php echo e($client->nom); ?></td>
                              <td><?php echo e($client->prenomClient); ?></td>
                              <td><?php echo e($client->nomClient); ?></td>
                              <td><?php echo e($client->titreClient); ?></td>
                              <td><?php echo e($client->villeClient); ?></td>
                              <td><?php echo e($client->telephone); ?></td>
                              <td><?php echo e($client->mobile); ?></td>
                              <td><?php echo e($client->courriel); ?></td>
                              <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a class="dropdown-item" href="<?php echo e(route('clients.show',$client->id)); ?>">
                                                <i data-feather="eye"></i>
                                                Afficher
                                            </a>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client-edit')): ?>
                                            <a class="dropdown-item" href="<?php echo e(route('clients.edit',$client->id)); ?>">
                                                <i data-feather="edit"></i>
                                                Editer
                                            </a>
                                            <?php endif; ?>

                                            <div class="dropdown-divider"></div>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('client-delete')): ?>
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
                      <?php echo $clients->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/clients/index.blade.php ENDPATH**/ ?>