
<?php $__env->startSection('title'); ?> <?php echo e(__('List of Invoices')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
        #pageloader {
            background: rgba(255, 255, 255, 0.8);
            display: none;
            height: 100%;
            position: fixed;
            width: 100%;
            z-index: 9999;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 0;
            top: 0;
        }

        #pageloader img {
            left: 50%;
            margin-left: -32px;
            margin-top: -32px;
            position: absolute;
            top: 50%;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
        <div id="pageloader">
            <img src="<?php echo e(URL::asset('assets/images/loader.gif')); ?>" alt="processing..." />
        </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Invoice List <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Invoice <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($role != 'patient'): ?>
                            <a href=" <?php echo e(route('invoice.create')); ?>">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i>
                                    <?php echo e(__('Create New Invoice')); ?>

                                </button>
                            </a>
                        <?php endif; ?>
                        <table class="table table-bordered dt-responsive nowrap "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Sr. No')); ?></th>
                                    <?php if($role != 'patient'): ?>
                                        <th><?php echo e(__('Patient Name')); ?></th>
                                    <?php endif; ?>
                                    <th><?php echo e(__('Appointment Date')); ?></th>
                                    <th><?php echo e(__('Appointment Time')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
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
                                    $currentpage = $invoices->currentPage();
                                ?>
                                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1 + $per_page * ($currentpage - 1)); ?></td>
                                        <?php if($role != 'patient'): ?>
                                            <td><?php echo e($invoice->user->first_name); ?> <?php echo e($invoice->user->last_name); ?></td>
                                        <?php endif; ?>
                                        <td><?php echo e($invoice->appointment->appointment_date); ?></td>
                                        <td><?php echo e($invoice->appointment->timeSlot->from . ' to ' . $invoice->appointment->timeSlot->to); ?>

                                        </td>
                                        <td><?php echo e($invoice->payment_status); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('invoice/' . $invoice->id)); ?>">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                    title="View Invoice">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo e(url('invoice/' . $invoice->id . '/edit')); ?>">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                    title="Update invoice">
                                                    <i class="mdi mdi-lead-pencil"></i>
                                                </button>
                                            </a>
                                            <?php if($role != 'patient'): ?>
                                                <a href="javascript:void(0)">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light
                                                                send-mail"
                                                        title="Send Email" data-id="<?php echo e($invoice->id); ?>">
                                                        <i class="mdi mdi-email"></i>
                                                    </button>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="col-md-12 text-center mt-3">
                            <div class="d-flex justify-content-start">
                                Mostrando de <?php echo e($invoices->firstItem()); ?> a <?php echo e($invoices->lastItem()); ?> de
                                <?php echo e($invoices->total()); ?> entradas
                            </div>
                            <div class="d-flex justify-content-end">
                                <?php echo e($invoices->links()); ?>

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
        <script>
            $('.send-mail').click(function() {
                var id = $(this).attr('data-id');
                if (confirm('Are you sure you want to send email?')) {
                    $.ajax({
                        type: "get",
                        url: "invoice-email/" + id,
                        beforeSend: function() {
                            $('#pageloader').show();
                        },
                        success: function(response) {
                            toastr.success(response.message);
                        },
                        error: function(response) {
                            toastr.error(response.responseJSON.message);
                        },
                        complete: function() {
                            $('#pageloader').hide();
                        }
                    });
                }
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/invoice/invoices.blade.php ENDPATH**/ ?>