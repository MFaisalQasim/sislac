<?php $__env->startSection('title'); ?> <?php echo e(__('Cancel Appointment List')); ?> <?php $__env->stopSection(); ?>
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('today-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Today Appointment List')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?php echo e(url('pending-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="far fa-calendar"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Pending Appointment List')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('upcoming-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-week"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Upcoming Appointment List')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('complete-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-check-square"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Complete Appointment List')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo e(url('cancel-appointment')); ?>">
                                    <span class="d-block d-sm-none"><i class="fas fa-window-close"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Cancel Appointment List')); ?></span>
                                </a>
                            </li>
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
                                                <th><?php echo e(__('Doctor Name')); ?></th>
                                                <th><?php echo e(__('Patient Name')); ?></th>
                                                <th><?php echo e(__('Patient Contact No')); ?></th>
                                                <th><?php echo e(__('Patient Email')); ?></th>
                                                
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
                                                $currentpage = $Cancel_appointment->currentPage();
                                            ?>
                                            <?php $__currentLoopData = $Cancel_appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> <?php echo e($item->id); ?></td>
                                                    <td><?php echo e($item->appointment_date); ?></td>
                                                    <td> <?php echo e($item->doctor); ?></td>
                                                    <td> <?php echo e($item->patient_name); ?></td>
                                                    <td> <?php echo e($item->phone); ?> </td>
                                                    <td> <?php echo e($item->email); ?> </td>
                                                    
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                         Mostrando de <?php echo e($Cancel_appointment->firstItem()); ?> a <?php echo e($Cancel_appointment->lastItem()); ?> de
                                        <?php echo e($Cancel_appointment->total()); ?> entradas
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <?php echo e($Cancel_appointment->links()); ?>

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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/appointment/cancel-appointment.blade.php ENDPATH**/ ?>