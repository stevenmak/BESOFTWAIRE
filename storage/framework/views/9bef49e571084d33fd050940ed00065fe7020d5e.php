<?php $__env->startSection('title', 'IndexPaiements'); ?>
<?php $__env->startSection('module'); ?>
GESTION COMPTABILITE ET FINANCE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des paiements
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong></strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paiement-create')): ?><a class="btn btn-primary" href="<?php echo e(route('paiements.create')); ?>">AJOUTER </a><?php endif; ?></div>
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
                <div style="margin-top:20px;"></div>
                <div>
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable" >
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="N°">N°</th>
                                <th data-sortable="true" data-field="reference">REFERENCE</th>
                                <th data-sortable="true" data-field="nomClient">NOM DU CLIENT</th>
                                <th data-sortable="true" data-field="nomProjet">PROJET</th>
                                <th data-sortable="true" data-field="libelle">LIBELLE</th>
                                <th data-sortable="true" data-field="datepaiement">DATE PAIEMENT</th>
                                <th data-sortable="true" data-field="montant">MONTANT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $paiements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $paiement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($paiement->reference); ?></td>
                              <td class="flex"><?php echo e($projet = DB::table('clients')->join('projets','projets.client_id', '=', 'clients.id')->join('paiements','projets.id', 'paiements.projet_id')->where('paiements.projet_id','=',$paiement->projet_id)->value('nomClient')); ?></td>
                              <td class="flex"><?php echo e($contact=App\Projets::select('nomProjet')->where('id',$paiement->projet_id)->value('nomProjet')); ?></td>
                              <td class="flex"><?php echo e($paiement->libelle); ?></td>
                              <td class="flex"><?php echo e($paiement->datepaiement); ?></td>
                              <td class="flex"><?php echo e(number_format($paiement->montant,2,',',' ')); ?></td>
                              <td class="flex">
                                  <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('paiements.show',$paiement->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paiement-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('paiements.edit', $paiement->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>

                                        <?php endif; ?>
                                        <a class="dropdown-item" href="">
                                            <i data-feather="check-square"></i>
                                            Paiment approuvé
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paiement-delete')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('archiverPaiement',$paiement->id)); ?>">
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

                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/paiements/index.blade.php ENDPATH**/ ?>