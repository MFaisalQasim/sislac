<?php $__env->startSection('title'); ?> <?php echo e(__('Lista De Exames')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Lista De Exame <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Exame <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="PendingAppointmentList" role="tabpanel">
                                <div class="table-responsive">

                                    <table class="table table-bordered dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th><?php echo e(__('Item')); ?></th>
                                                <th><?php echo e(__('Abreviação')); ?></th>
                                                <th><?php echo e(__('Nome do Exame')); ?></th>
                                                <th><?php echo e(__('Categoria')); ?></th>
                                                <th><?php echo e(__('Resultado')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $appoint= $appointment->toArray(); ?>
                                            <?php $__currentLoopData = $appointment->exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> </td>
                                                    <td><?php echo e($item->abbreviation); ?></td>
                                                    <td><?php echo e($item->name); ?></td>
                                                     <td><?php echo e($item->category); ?></td>
                                                    <td><?php $result=$item->appointmentresults($appoint['id'])->get(); 
                                                             $fresult=$result->toArray(); 
                                                            if(isset($fresult[0])){
                                                                echo $fresult[0]['result'];
                                                            }
                                                    ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
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

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/appointment/appointment-exam.blade.php ENDPATH**/ ?>