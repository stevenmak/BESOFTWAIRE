<?php $__env->startSection('title', 'IndexEtapes'); ?>
<?php $__env->startSection('module'); ?>
    GESTION DES ETAPES
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
    Module de Gestion des étapes du projet
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
                <div class="row">
                    <div class="col-8"><strong>La liste des étapes projets</strong></div>
                    <div class="col-4"><?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etape-create')): ?><a class="btn btn-primary" href="<?php echo e(route('etapes.create')); ?>">AJOUTER ETAPE</a><?php endif; ?></div>
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
                    <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]" data-plugin="dataTable">
                        <thead>
                            <tr>
                            <th data-sortable="true" data-field="ID">ID</th>
                            <th data-sortable="true" data-field=" nomEtape">NOM ETAPE</th>
                            <th data-sortable="true" data-field="nomProjet">NOM PROJET</th>
                            <th data-sortable="true" data-field="debutEtape">DEBUT</th>
                            <th data-sortable="true" data-field="debutFin">FIN</th>
                            <th data-sortable="true" data-field="depenseEstimer">ESTIMATION</th>
                            <th data-sortable="true" data-field="montant">Dep.ACTUELLE</th>
                            <th data-sortable="true" data-field="variance">VARIANCE</th>
                            <th data-sortable="true" data-field="tempsprevu">TIMING</th>
                            <th data-sortable="true" data-field="avancement">AVANCEMENT</th>
                            <th data-sortable="true" data-field="etatEtape">ETAT</th>
                            <th data-sortable="true" data-field="etapeprerequise">PREREQUIS</th>
                            <th>ACTION</th>
                            </tr>
                       </thead>
                       <tbody>
                          <?php $__currentLoopData = $etapes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $etape): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class=" " data-id="17">
                              <td class="flex"><?php echo e(++$i); ?></td>
                              <td class="flex"><?php echo e($etape->nomEtape); ?></td>
                              <td class="flex"><?php echo e($projets=App\Projets::select('nomProjet')->where('id',$etape->projet_id)->value('nomProjet')); ?></td>
                              <td class="flex"><?php echo e($etape->debutEtape); ?></td>
                              <td class="flex"><?php echo e($etape->debutFin); ?></td>
                              <td class="flex"><?php echo e(number_format($det=$etape->depenseEstimer,2,',',' ')); ?> $</td>
                              <td class="flex"><?php echo e(number_format($montant=DB::table('depenses')
                                ->join('etapes','etapes.id','=','depenses.etape_id')
                                ->select('depenses.montant')->where('depenses.etape_id',$etape->id)
                                ->get(['montant'])->sum('montant' ),2,',',' ')); ?></td>
                              <td class="flex"><?php echo e(number_format($variance=$det-$montant,2,',',' ')); ?></td>
                              <td class="flex"><?php echo e($etape->tempsprevu); ?> H</td>
                              <td class="flex"><?php echo e($etape->avancement); ?>  %</td>
                              <td class="flex"><?php echo e($etape->etatEtape); ?></td>
                              <td class="flex"><?php echo e($etape->etapeprerequise); ?></td>
                              <td class="flex">
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="<?php echo e(route('etapes.show',$etape->id)); ?>">
                                            <i data-feather="eye"></i>
                                            Afficher
                                        </a>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etape-edit')): ?>
                                        <a class="dropdown-item" href="<?php echo e(route('etapes.edit',$etape->id)); ?>">
                                            <i data-feather="edit"></i>
                                            Editer
                                        </a>
                                        <?php endif; ?>
                                        <div class="dropdown-divider"></div>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('etape-delete')): ?>
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
                      <?php echo $etapes->render(); ?>

                      <script>$('dt_etape').dataTable();</script>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/etapes/index.blade.php ENDPATH**/ ?>