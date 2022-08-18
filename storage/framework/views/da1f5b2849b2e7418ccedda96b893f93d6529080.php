<?php $__env->startSection('title'); ?> <?php echo e(__('Pending Appointment list')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Lista De Atendimentos <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Appointment <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="<?php echo e(url('novo-atendimento')); ?>">
                                    <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                        <i class="bx bx-plus font-size-16 align-middle mr-2"></i> <?php echo e(__('NOVO ATENDIMENTO')); ?>

                                    </button>
                                </a>
                            </div>
                            <div class="col-lg-9 text-right">
                                <form action="">
                                    <div class="form-group d-inline-flex">
                                        <input class="form-control mr-1" type="text" placeholder="Id" name="search_id" value="<?php echo e($search_id); ?>" />
                                        <input class="form-control mr-1" type="text" placeholder="Nome do Paciente" name="search_name" value="<?php echo e($search); ?>" />
                                        <button type="submit" value="" class="btn btn-primary">Pesquisar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('today-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__("Today's Appointment List")); ?></span>
                                </a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('all-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__("All")); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo e(url('pending-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="far fa-calendar"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Pending Appointment List')); ?></span>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('upcoming-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-week"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Upcoming Appointment List')); ?></span>
                                </a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('complete-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-check-square"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Complete Appointment List')); ?></span>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('cancel-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-window-close"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Cancel Appointment List')); ?></span>
                                </a>
                            </li>
                            -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="PendingAppointmentList" role="tabpanel">
                                <div class="table-responsive">

                                    <table class="table table-bordered dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th><?php echo e(__('ID')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Nome do Paciente')); ?></th>
                                                <th><?php echo e(__('Doctor Name')); ?></th>
                                                <th><?php echo e(__('Convênio')); ?></th>
                                                <th><?php echo e(__('Resultado')); ?></th>
                                                <th><?php echo e(__('Status Entrega')); ?></th>
                                                <th><?php echo e(__('Opções')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(session()->has('page_limit')): ?>
                                                <?php
                                                    $per_page = session()->get('page_limit');
                                                ?>
                                            <?php else: ?>
                                                <?php
                                                    $per_page = Config::get('app.page_limit');
                                                ?>
                                            <?php endif; ?>
                                            <?php
                                                $currentpage = $pending_appointment->currentPage();
                                            ?>
                                            <?php $__currentLoopData = $pending_appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> <?php echo e($item->id); ?> </td>
                                                     <td><?php echo e($item->appointment_date); ?></td>
                                                     <td> <?php echo e($item->patient_name); ?></td>
                                                    <td> <?php echo e($item->doctor); ?> </td>
                                                    <td> <?php echo e($item->patientinfo->patient_health); ?> </td>
                                                    <td> <?php echo e(($item->status==='0')?"Pending":""); ?></td>
                                                    <td> </td>

                                                    <td>    
                                                            <button type="button" class="btn btn-primary complete btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                data-id="<?php echo e($item->id); ?>"><i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                                
                                                            </button>
                                                            
                                                            <a href="<?php echo e(route('appointment.exams',['id' => $item->id])); ?>">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                    title="View Profile">
                                                                    <i class="mdi mdi-eye"></i>
                                                                </button>
                                                            </a>
                                                        <a href="<?php echo e(route('appointment.edit',['id' => $item->id])); ?>">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                title="Update Profile">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </button>
                                                        </a>

                                                            <form action="<?php echo e(route('appointment.remove',['id' => $item->id])); ?>" method="post" style="display: inline-block;">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0">
                                                                    <i class="mdi mdi-trash-can"></i>
                                                                </button>
                                                            </form>
                                                            
      
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Mostrando de  <?php echo e($pending_appointment->firstItem()); ?> a
                                        <?php echo e($pending_appointment->lastItem()); ?> de <?php echo e($pending_appointment->total()); ?>

                                        entradas
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <?php echo e($pending_appointment->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <!-- Plugins js -->
        <script src="<?php echo e(URL::asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
        <!-- Init js-->
        <script src="<?php echo e(URL::asset('assets/js/pages/notification.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/appointment.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sislac\resources\views/appointment/pending-appointment.blade.php ENDPATH**/ ?>