
<?php $__env->startSection('title'); ?> <?php echo e(__('Create New Invoice')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Create Invoice <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Invoice <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_3'); ?> Create Invoice <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <a href="<?php echo e(url('invoice')); ?>">
                    <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                        <i class="bx bx-arrow-back font-size-16 align-middle mr-2"></i><?php echo e(__('Back to Invoice List')); ?>

                    </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <blockquote><?php echo e(__('Invoice Details')); ?></blockquote>
                        <form class="outer-repeater" action="<?php echo e(route('invoice.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="control-label"><?php echo e(__('Patient')); ?><span
                                            class="text-danger">*</span></label>
                                    <select
                                        class="form-control select2 sel_patient <?php $__errorArgs = ['patient_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="patient_id" id="patient">
                                        <option disabled selected><?php echo e(__('Select Patient')); ?></option>
                                        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($patient->id); ?>" <?php if(old('patient_id') == $patient->id): ?> selected <?php endif; ?>>
                                                <?php echo e($patient->first_name); ?> <?php echo e($patient->last_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['patient_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6 form-group">
                                </div>
                                <?php if($role == 'doctor'): ?>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label"><?php echo e(__('Appointment ')); ?><span
                                                class="text-danger">*</span></label>
                                        <select
                                            class="form-control select2 sel_appointment <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="appointment_id" id="appointment">
                                            <option disabled selected><?php echo e(__('Select Appointment')); ?></option>
                                        </select>
                                        <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if($role == 'receptionist'): ?>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label"><?php echo e(__('Appointment ')); ?><span
                                                class="text-danger">*</span></label>
                                        <select
                                            class="form-control select2 sel_appointment <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="appointment_id" id="appointment">
                                            <option disabled selected><?php echo e(__('Select Appointment')); ?></option>
                                        </select>
                                        <?php $__errorArgs = ['appointment_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-6 form-group">
                                    <label class="control-label"><?php echo e(__('Doctor ')); ?></label>
                                    <input type="text" class="form-control sel_doctor" readonly>
                                    <input type="hidden" name="doctor_id" class="form-control sel_doctor_id">
                                    <?php $__errorArgs = ['doctor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <input type="hidden" name="created_by" value="<?php echo e($user->id); ?>">
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="control-label"><?php echo e(__('Payment Mode ')); ?><span
                                            class="text-danger">*</span></label>
                                    <select class="form-control <?php $__errorArgs = ['payment_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="payment_mode">
                                        <option selected disabled><?php echo e(__('Select Payment Mode')); ?></option>
                                        <option value="Cash Payement" <?php if(old('payment_mode') == 'Cash Payement'): ?> selected <?php endif; ?>><?php echo e(__('Cash Payment')); ?>

                                        </option>
                                        <option value="Cheque" <?php if(old('payment_mode') == 'Cheque'): ?> selected <?php endif; ?>><?php echo e(__('Cheque')); ?></option>
                                        <option value="Debit/Credit Card" <?php if(old('payment_mode') == 'Debit/Credit Card'): ?> selected <?php endif; ?>>
                                            <?php echo e(__('Debit/Credit Card')); ?>

                                        </option>
                                    </select>
                                    <?php $__errorArgs = ['payment_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="control-label"><?php echo e(__('Payment Status ')); ?><span
                                            class="text-danger">*</span></label>
                                    <select class="form-control <?php $__errorArgs = ['payment_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="payment_status">
                                        <option selected disabled><?php echo e(__('Select Payment Status')); ?></option>
                                        <option value="Paid" <?php if(old('payment_status') == 'Paid'): ?> selected <?php endif; ?>><?php echo e(__('Paid')); ?></option>
                                        <option value="Unpaid" <?php if(old('payment_status') == 'Unpaid'): ?> selected <?php endif; ?>><?php echo e(__('Unpaid')); ?></option>
                                    </select>
                                    <?php $__errorArgs = ['payment_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <blockquote><?php echo e(__('Invoice Summary')); ?></blockquote>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class='repeater mb-4'>
                                        <div data-repeater-list="invoices" class="form-group">
                                            <label><?php echo e(__('Invoice Items ')); ?><span
                                                    class="text-danger">*</span></label>
                                            <div data-repeater-item class="mb-3 row">
                                                <div class="col-md-5 col-6">
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="<?php echo e(__('Item title')); ?>" />
                                                </div>
                                                <div class="col-md-5 col-6">
                                                    <input type="text" name="amount" class="form-control"
                                                        placeholder="<?php echo e(__('Enter Amount')); ?>" />
                                                </div>
                                                <div class="col-md-2 col-4">
                                                    <input data-repeater-delete type="button"
                                                        class="fcbtn btn btn-outline btn-danger btn-1d btn-sm inner"
                                                        value="X" />
                                                </div>
                                            </div>
                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-primary"
                                            value="Add Item" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Create New Invoice')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
        <!-- form mask -->
        <script src="<?php echo e(URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')); ?>"></script>
        <!-- form init -->
        <script src="<?php echo e(URL::asset('assets/js/pages/form-repeater.int.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/notification.init.js')); ?>"></script>
        <script>
            // Patient by appointment select
            $('.sel_patient').on('change', function(e) {
                e.preventDefault();
                var patientId = $(this).val();
                var token = $("input[name='_token']").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('patient_by_appointment')); ?>",
                    data: {
                        patient_id: patientId,
                        _token: token,
                    },
                    success: function(res) {
                        $('.sel_appointment').html('');
                        $('.sel_appointment').html(res.options);
                    },
                    error: function(res) {
                        console.log(res);
                    }
                });
            });
            // appointment by doctor select
            $('.sel_appointment').change(function(e) {
                e.preventDefault();
                var appointmentID = $(this).val();
                var token = $("input[name='_token']").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('appointment_by_doctor')); ?>",
                    data: {
                        appointment_id: appointmentID,
                        _token: token,
                    },
                    success: function(res) {
                        var rd = res.data[0];
                        $('.sel_doctor').val(rd.first_name + ' ' + rd.last_name);
                        $('.sel_doctor_id').val(rd.id);
                    },
                    error: function(res) {
                        console.log(res);
                    }
                });
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/invoice/invoice-details.blade.php ENDPATH**/ ?>