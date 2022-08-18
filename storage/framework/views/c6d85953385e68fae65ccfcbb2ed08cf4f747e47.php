
<?php $__env->startSection('title'); ?> <?php echo e(__('List of Prescription')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Prescription List <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Prescription <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="alert alert-warning" role="alert">
            You can not saw prescription without  invoice payment
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($role == 'doctor'): ?>
                            <a href=" <?php echo e(route('prescription.create')); ?> ">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i>
                                    <?php echo e(__('Create Prescription')); ?>

                                </button>
                            </a>
                        <?php endif; ?>
                        <table class="table table-bordered dt-responsive nowrap "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Sr. No')); ?></th>
                                    <?php if($role == 'doctor'): ?>
                                        <th><?php echo e(__('Patient Name')); ?></th>
                                    <?php elseif($role == 'patient'): ?>
                                        <th><?php echo e(__('Doctor Name')); ?></th>
                                    <?php else: ?>
                                        <th><?php echo e(__('Patient Name')); ?></th>
                                        <th><?php echo e(__('Doctor Name')); ?></th>
                                    <?php endif; ?>
                                    <th><?php echo e(__('Appointment Date')); ?></th>
                                    <th><?php echo e(__('Appointment Time')); ?></th>
                                    <th><?php echo e(__('Option')); ?></th>
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
                                    $currentpage = $prescriptions_details->currentPage();
                                ?>
                                <?php $__currentLoopData = $prescriptions_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            
                                            <td><?php echo e($loop->index + 1 + $per_page * ($currentpage - 1)); ?></td>
                                            <?php if($role == 'receptionist'): ?>
                                                <td><?php echo e($item->patient->first_name . ' ' . $item->patient->first_name); ?>

                                                </td>
                                                <td><?php echo e($item->doctor->first_name . ' ' . $item->doctor->first_name); ?>

                                                </td>
                                            <?php elseif($role == 'doctor'): ?>
                                                <td><?php echo e($item->patient->first_name); ?>

                                                    <?php echo e($item->patient->last_name); ?></td>
                                            <?php elseif($role == 'patient'): ?>
                                                <td><?php echo e($item->doctor->first_name); ?>

                                                    <?php echo e($item->doctor->last_name); ?></td>
                                            <?php else: ?>
                                                <td><?php echo e($item->patient->first_name); ?>

                                                    <?php echo e($item->patient->last_name); ?></td>
                                                <td><?php echo e($item->doctor->first_name); ?>

                                                    <?php echo e($item->doctor->last_name); ?></td>
                                            <?php endif; ?>
                                            <td><?php echo e($item->appointment->appointment_date); ?></td>
                                            <td><?php echo e($item->appointment->timeSlot->from . ' to ' . $item->appointment->timeSlot->to); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(url('prescription-view/' . $item->appointment->prescription->id)); ?>">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        title="View item">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="col-md-12 text-center mt-3">
                            <div class="d-flex justify-content-start">
                                Showing <?php echo e($prescriptions_details->firstItem()); ?> to <?php echo e($prescriptions_details->lastItem()); ?> of
                                <?php echo e($prescriptions_details->total()); ?> entries
                            </div>
                            <div class="d-flex justify-content-end">
                                <?php echo e($prescriptions_details->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <!-- Plugins js -->
        <script src="<?php echo e(URL::asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
        <!-- Init js-->
        <script src="<?php echo e(URL::asset('assets/js/pages/notification.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/patient/patient-prescriptions.blade.php ENDPATH**/ ?>