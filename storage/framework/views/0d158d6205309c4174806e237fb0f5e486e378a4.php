
<?php $__env->startSection('title'); ?> <?php echo e(__('Notification list')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Notification List <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Notification <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div data-simplebar>
                                    <?php $__empty_1 = true; $__currentLoopData = $notification; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <a href="/notification/<?php echo e($item->id); ?>" class="text-reset notification-item">
                                            <div class="media mb-3 p-2 <?php echo e($item->read_at == null ? 'bg-light' : ''); ?>">
                                                <img src="<?php if($item->user->profile_photo != ''): ?><?php echo e(URL::asset('storage/images/users/' . $item->user->profile_photo)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/noImage.png')); ?><?php endif; ?>" class="mr-3 rounded-circle avatar-xs"
                                                    alt="user-pic">
                                                <div class="media-body">
                                                    <?php if($item->notification_type_id == 4): ?>
                                                        <h6 class="mt-0 mb-1">
                                                            <a
                                                                href="<?php echo e(url('patient/' . $item->invoice_user->patient->id)); ?>">
                                                                <?php echo e($role == 'patient' ? '' : $item->invoice_user->patient->first_name . ' ' . $item->invoice_user->patient->first_name . '`s '); ?>

                                                            </a>
                                                            <?php echo e($item->title); ?> by
                                                            <?php if($item->user->roles[0]->slug == 'doctor'): ?>
                                                                <a
                                                                    href=<?php echo e(url('doctor/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php elseif($item->user->roles[0]->slug == 'patient'): ?>
                                                                <a
                                                                    href=<?php echo e(url('patient/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php elseif($item->user->roles[0]->slug == 'receptionist'): ?>
                                                                <a
                                                                    href=<?php echo e(url('receptionist/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php else: ?>
                                                                <a><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>

                                                            <?php endif; ?>
                                                        </h6>
                                                        <div class="font-sixe-12">
                                                            <p class="mb-0">invoice date:
                                                                <?php echo e($item->invoice_user->created_at); ?></p>
                                                        </div>
                                                    <?php else: ?>
                                                        <h6 class="mt-0 mb-1">
                                                            <a
                                                                href="<?php echo e(url('patient/' . $item->appointment_user->patient->id)); ?>">
                                                                <?php echo e($role == 'patient' ? '' : $item->appointment_user->patient->first_name . ' ' . $item->appointment_user->patient->last_name . '`s '); ?>

                                                            </a>
                                                            <?php echo e($item->title); ?> by
                                                            <?php if($item->user->roles[0]->slug == 'doctor'): ?>
                                                                <a
                                                                    href=<?php echo e(url('doctor/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php elseif($item->user->roles[0]->slug == 'patient'): ?>
                                                                <a
                                                                    href=<?php echo e(url('patient/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php elseif($item->user->roles[0]->slug == 'receptionist'): ?>
                                                                <a
                                                                    href=<?php echo e(url('receptionist/' . $item->user->id)); ?>><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php else: ?>
                                                                <a
                                                                    href="#!"><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></a>
                                                            <?php endif; ?>
                                                        </h6>
                                                        <div class="font-sixe-12">
                                                            <p class="mb-0">Apppointment date:
                                                                <?php echo e($item->appointment_user->appointment_date . ', time: ' . $item->appointment_user->timeSlot->from . ' to ' . $item->appointment_user->timeSlot->to); ?>

                                                            </p>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                            <?php echo e($item->created_at->diffForHumans()); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <p>No matching records found</p>
                                    <?php endif; ?>
                                    <div class="col-md-12 text-center mt-3">
                                        <div class="d-flex justify-content-center">
                                            <?php echo e($notification->links()); ?>

                                        </div>
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
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/notification-list.blade.php ENDPATH**/ ?>