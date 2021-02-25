<?php $__env->startSection('title', 'IndexTaches'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES TACHES DU PROJET
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des taches du projet
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-9"><strong>LA LISTE DES TACHES</strong></div>
                    <div class="col-3"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('taches-create')): ?><a class="btn btn-primary" href="<?php echo e(route('taches.create')); ?>">AJOUTER</a><?php endif; ?></div>
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
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable">
                        <thead>
                            <tr>
                                <th data-sortable="true" data-field="ID">ID</th>
                                <th data-sortable="true" data-field="designation">DESIGNATION</th>
                                <th data-sortable="true" data-field="description">DESCRIPTION</th>
                                <th data-sortable="true" data-field="dateDebut">DATE DEBUT</th>
                                <th data-sortable="true" data-field="dateFin">DATE FIN</th>
                                <th data-sortable="true" data-field="depenseEstimerTache">ESTIMATION</th>
                                <th data-sortable="true" data-field="priorite">PRIORITE</th>
                                <th data-sortable="true" data-field="avancement">AVANCEMENT</th>
                                <th data-sortable="true" data-field="montant">DEP. ACTUELLE</th>
                                <th data-sortable="true" data-field="variance">VARIANCE</th>
                                <th data-sortable="true" data-field="etat">ETAT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $taches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tache): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td><?php echo e(++$i); ?></td>
                              <td><?php echo e($tache->designation); ?></td>
                              <td><?php echo e($tache->description); ?></td>
                              <td><?php echo e($tache->dateDebut); ?></td>
                              <td><?php echo e($tache->dateFin); ?></td>
                              <td><?php echo e(number_format($det=$tache->depenseEstimerTache,2,',',' ')); ?></td>
                              <td><?php echo e($tache->priorite); ?></td>
                              <td><?php echo e($tache->avancement); ?>  %</td>
                              <td><?php echo e(number_format($montant=DB::table('depenses')
                                ->join('taches','taches.id','=','depenses.tache_id')
                                ->select('depenses.montant')->where('depenses.tache_id',$tache->id)
                                ->get(['montant'])->sum('montant' ),2,',',' ')); ?>

                              </td>
                              <td><?php echo e(number_format($variance=$det-$montant,2,',',' ')); ?></td>
                              
                              <td><?php echo e($tache->etat); ?></td>
                              <td>
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('taches.show',$tache->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('taches-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('taches.edit',$tache->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('taches-delete')): ?>
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
                      <?php echo $taches->render(); ?>

                </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/taches/index.blade.php ENDPATH**/ ?>