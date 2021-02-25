<?php $__env->startSection('title', 'IndexContact'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES CONTACTS CLIENTS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des contacts clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES CONTACTS CLIENTS</strong></div>
                    <div class="col-3"><a class="btn btn-primary" href="<?php echo e(route('contacts.create')); ?>">AJOUTER</a></div>
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
                            <th>NOM</th>
                            <th>PROFESSION</th>
                            <th>TELEPHONE</th>
                            <th>MOBILE</th>
                            <th>DOMAINE ACTIVITE</th>
                            <th class=" " data-id="17">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($contact->prenomContact); ?></td>
                              <td class="flex"><?php echo e($contact->nomContact); ?></td>
                              <td class="flex"><?php echo e($contact->professionContact); ?></td>
                              <td class="flex"><?php echo e($contact->telephone); ?></td>
                              <td class="flex"><?php echo e($contact->mobile); ?></td>
                              <td class="flex"><?php echo e($contact->domaineActivite); ?></td>
                              <td class="flex">
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('contacts.show',$contact->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <a class="dropdown-item" href="<?php echo e(route('contacts.edit', $contact->id)); ?>">
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
                      <?php echo $contacts->render(); ?>

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/contacts/index.blade.php ENDPATH**/ ?>