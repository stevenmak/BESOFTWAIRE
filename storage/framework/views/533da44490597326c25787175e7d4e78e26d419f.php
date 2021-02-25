<?php $__env->startSection('title', 'Rapport du jours'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-4 d-flex">
        <div class="card flex">
            <div class="card-body">
                <div class="d-flex align-items-center text-hover-success">
                    <div class="avatar w-56 m-2 no-shadow gd-success">
                        <i data-feather="trending-up"></i>
                    </div>
                    <div class="px-4 flex">
                        <div>RAPPORT JOURNALIER</div>
                        <div class="text-primary mt-2">
                            Entré(es) :  <?php echo e($entree=DB::table('paiements')->whereDate('datepaiement','=',Carbon\Carbon::today())->get(['montant'])->sum('montant')); ?> $
                        </div>
                        <div class="text-danger mt-2">
                            Sortie(s) :   <?php echo e($sortie=DB::table('depenses')->whereDate('datedepense','=',Carbon\Carbon::today())->get(['montant'])->sum('montant')); ?> $
                        </div>
                    </div>
                    <div class="item-action dropdown">
                        <a href="#" data-toggle="dropdown" class="text-muted">
                            <i data-feather="more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport Entrée
                            </a>
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport Sortie
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i data-feather="printer"></i>
                                Rapport Global
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="card flex">
            <div class="card-body">
                <div class="d-flex align-items-center text-hover-success">
                    <div class="avatar w-56 m-2 no-shadow gd-primary">
                        <i data-feather="trending-up"></i>
                    </div>
                    <div class="px-4 flex">
                        <div>RAPPORT DE LA SEMAINE</div>
                        <div class="text-success mt-2">
                            Entré(es) :  <?php echo e($entree=DB::table('paiements')->whereBetween('datepaiement',[Carbon::now()
                            ->startOfWeek(Carbon::MONDAY),Carbon::now()->endOfWeek(Carbon::SATURDAY)])
                            ->get(['montant'])->sum('montant')); ?> $

                        </div>
                        <div class="text-danger mt-2">
                            Sortie(s) :   <?php echo e($sortie=DB::table('depenses')->whereBetween('datedepense',[Carbon::now()
                            ->startOfWeek(Carbon::MONDAY),Carbon::now()->endOfWeek(Carbon::SATURDAY)])
                            ->get(['montant'])->sum('montant')); ?> $
                        </div>
                    </div>
                    <div class="item-action dropdown">
                        <a href="#" data-toggle="dropdown" class="text-muted">
                            <i data-feather="more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport Entrée
                            </a>
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport Sortie
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i data-feather="printer"></i>
                                Rapport Global
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="card flex">
            <div class="card-body">
                <div class="d-flex align-items-center text-hover-success">
                    <div class="avatar w-56 m-2 no-shadow gd-warning">
                        <i data-feather="trending-up"></i>
                    </div>
                    <div class="px-4 flex">
                        <div>RAPPORT MENSUEL</div>
                        <div class="text-success mt-2">
                            Entré(es) :  <?php echo e($entree=DB::table('paiements')->whereMonth('datepaiement','=',Carbon\Carbon::now()->month)
                            ->get(['montant'])->sum('montant')); ?> $
                        </div>
                        <div class="text-danger mt-2">
                            Sortie(s) :   <?php echo e($sortie=DB::table('depenses')->whereMonth('datedepense','=',Carbon\Carbon::now()->month)->get(['montant'])->sum('montant')); ?> $
                        </div>
                    </div>
                    <div class="item-action dropdown">
                        <a href="#" data-toggle="dropdown" class="text-muted">
                            <i data-feather="more-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport entrée
                            </a>
                            <a class="dropdown-item" href="">
                                <i data-feather="printer"></i>
                                Rapport Sortie
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <i data-feather="printer"></i>
                                Rapport Global
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="b-b">
            <div class="nav-active-border b-success px-3">
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="paiement-tab" data-toggle="tab" href="#paiement" role="tab" aria-controls="paiement" aria-selected="true">PAIEMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="depense-tab" data-toggle="tab" href="#depense" role="tab" aria-controls="depense" aria-selected="false">DEPENSES</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content p-3">
            <div class="tab-pane fade show active" id="paiement" role="tabpanel" aria-labelledby="paiement-tab">
                <div>LES ENTREES DU JOUR</div>
                <table class="table table-theme v-middle table-hover">
                    <thead class="text-muted">
                        <tr>
                            <th>#</th>
                            <th>Nom Client</th>
                            <th><span class="d-none d-sm-block">Pour le Projet</span></th>
                            <th><span class="d-none d-sm-block">Montant</span></th>
                            <th><span class="d-none d-sm-block">Receptionné par</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $paiement = App\paiements::whereDate('datepaiement','=',Carbon\Carbon::today())->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" v-middle" data-id="2">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted"><?php echo e(++$key); ?></small>
                                </td>
                                <td class="flex">
                                    <a href="<?php echo e(route('paiements.index')); ?>" class="item-title text-color h-1x"> <?php echo e($projet = DB::table('clients')->join('projets','projets.client_id', '=', 'clients.id')
                                        ->join('paiements','projets.id', 'paiements.projet_id')
                                        ->where('paiements.projet_id','=',$value->projet_id)->value('prenomClient')); ?>

                                        <?php echo e($projet = DB::table('clients')->join('projets','projets.client_id', '=', 'clients.id')
                                        ->join('paiements','projets.id', 'paiements.projet_id')
                                        ->where('paiements.projet_id','=',$value->projet_id)->value('nomClient')); ?>

                                    </a>
                                </td>
                                <td>
                                    <span class="item-amount d-none d-sm-block text-sm "><?php echo e($projet=App\Projets::select('nomProjet')->where('id',$value->projet_id)->value('nomProjet')); ?></span>
                                </td>
                                <td class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block"><?php echo e($value->montant); ?> $</div>
                                </td>
                                <td class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block"><?php echo e($percupar=App\User::select('name')->where('id',$value->users_id)->value('name')); ?></div>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="depense" role="tabpanel" aria-labelledby="depense-tab">
                <div>DEPENSES DU JOUR</div>
                <table class="table table-theme v-middle table-hover">
                    <thead class="text-muted">
                        <tr>
                            <th>#</th>
                            <th>Nom Pojet (Etape du projet)</th>
                            <th><span class="d-none d-sm-block">Tache concernée</span></th>
                            <th><span class="d-none d-sm-block">Service Demandeur</span></th>
                            <th><span class="d-none d-sm-block">Montant</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $depenses = App\Depenses::whereDate('datedepense','=',Carbon\Carbon::today())->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class=" v-middle" data-id="2">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted"><?php echo e(++$key); ?></small>
                                </td>
                                <td class="flex">
                                    <a href="<?php echo e(route('depenses.index')); ?>" class="item-title text-color h-1x"><?php echo e($projet=App\Projets::select('nomProjet')->where('id',$value->projet_id)->value('nomProjet')); ?></a>
                                    <a href="#" class="item-company text-muted h-1x"><?php echo e($etape=DB::table('etapes')
                                    ->where('etapes.id','=',$value->etape_id)->value('nomEtape')); ?>

                                    </a>
                                </td>
                                <td>
                                    <span class="item-amount d-none d-sm-block text-sm "><?php echo e($tache=DB::table('taches')
                                        ->where('taches.id','=',$value->tache_id)->value('designation')); ?></span>
                                </td>
                                <td class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block"><?php echo e($service=DB::table('services')
                                        ->where('services.id','=',$value->service_id)->value('designation')); ?></div>
                                </td>
                                <td class="no-wrap">
                                    <div class="item-date text-muted text-sm d-none d-md-block"><?php echo e($value->montant); ?>$</div>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BESOFTWAIRE\resources\views/paiements/dailyreport.blade.php ENDPATH**/ ?>