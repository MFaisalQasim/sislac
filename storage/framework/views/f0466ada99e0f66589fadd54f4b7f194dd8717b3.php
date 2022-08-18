
<?php $__env->startSection('title'); ?>
    <?php if($doctor && $doctor_info): ?>
        <?php echo e(__('Update Doctor Details')); ?>

    <?php else: ?>
        <?php echo e(__('Add New Doctor')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css-bottom'); ?>
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>">
<?php $__env->stopSection(); ?>
<script>
    
        function addHyphen (element) {
        	let inputValue = document.getElementById(element.id);
        	let zipCode = "";
        	
            zipCode = inputValue.value;
              if(zipCode.length === 8) {
                inputValue.value = `${zipCode.substr(0,5)}-${zipCode.substr(5,9)}`;
                console.log(zipCode); 
              }
    }
    
</script>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                        <?php if($doctor && $doctor_info): ?>
                            <?php echo e(__('Update Doctor Details')); ?>

                        <?php else: ?>
                            <?php echo e(__('ADICIONAR NOVO MÉDICO')); ?>

                        <?php endif; ?>
                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(url('doctor')); ?>"><?php echo e(__('Doctors')); ?></a></li>
                            <li class="breadcrumb-item active">
                                <?php if($doctor && $doctor_info): ?>
                                    <?php echo e(__('Update Doctor Details')); ?>

                                <?php else: ?>
                                    <?php echo e(__('Add New Doctor')); ?>

                                <?php endif; ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <?php if($doctor && $doctor_info): ?>
                    <?php if($role == 'doctor'): ?>
                        <a href="<?php echo e(url('/')); ?>">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                <i
                                        class="bx bx-arrow-back font-size-16 align-middle mr-2"></i><?php echo e(__('Back to Dashboard')); ?>

                            </button>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(url('doctor/' . $doctor->id)); ?>">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                <i
                                        class="bx bx-arrow-back font-size-16 align-middle mr-2"></i><?php echo e(__('Back to Profile')); ?>

                            </button>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?php echo e(url('doctor')); ?> ">
                        <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                            <i
                                    class="bx bx-arrow-back font-size-16 align-middle mr-2"></i><?php echo e(__('Volar a lista de Médicos')); ?>

                        </button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form id="addtime" action="<?php if($doctor && $doctor_info): ?> <?php echo e(url('doctor/' . $doctor->id)); ?> <?php else: ?> <?php echo e(route('doctor.store')); ?> <?php endif; ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if($doctor && $doctor_info): ?>
                                <input type="hidden" name="_method" value="PATCH" />
                        <?php endif; ?>

                        <!-- my code start here-->

                            <div class="row">

                                <div class="col-md-7">
                                    <blockquote><?php echo e(__('Doctor Data')); ?></blockquote>

                                    <div class="row">
                                        <!---
                                        <div class="col-md-2 form-group">
                                            <label class="control-label"><?php echo e(__('Title')); ?><span
                                                        class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="title" id=""
                                                   value="Mr."
                                                   placeholder="<?php echo e(__('Mr.')); ?>">
                                        </div>
                                        -->
                                        <div class="col-md-8 form-group">
                                            <label class="control-label"><?php echo e(__('Nome do Médico ')); ?><span
                                                        class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="full_name" id=""
                                                   required
                                                   value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->full_name); ?><?php elseif(old('full_name')): ?><?php echo e(old('full_name')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('Digite o nome do Médico')); ?>">
                                            <?php $__errorArgs = ['full_name'];
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
                                        <div class="col-md-4">
                                            <label class="control-label"><?php echo e(__(' Sexo ')); ?></label>
                                            <select class="form-control" name="user_sex" required>
                                                <option selected disabled>Selecione</option>
                                                <option>Masculino</option>
                                                <option>Feminino</option>

                                            </select>


                                        </div>
                                    </div>

                                    <div class="row">
                                        <!---
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__('CPF')); ?><span
                                                        class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control <?php $__errorArgs = ['doc_CPF'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="doc_CPF" id="" tabindex="1"
                                                   value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->doc_CPF); ?><?php elseif(old('doc_CPF')): ?><?php echo e(old('doc_CPF')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('')); ?>">

                                            <?php $__errorArgs = ['doc_CPF'];
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
                                        -->
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__(' Conselho ')); ?></label>
                                            <select class="form-control" name="doc_Advice">
                                                <option selected disabled>Selecione</option>
                                                <option>CRAS</option>
                                                <option>COREN</option>
                                                <option>CRF</option>
                                                <option>CRFA</option>
                                                <option>CREFITO</option>
                                                <option>CRM</option>
                                                <option>CRN</option>
                                                <option>CRO</option>
                                                <option>CRP</option>
                                                <option>OUT</option>
                                                <option>CRMV</option>
                                                <option>Outro</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__(' CRM ')); ?><span
                                                        class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="doc_CRM" id="" tabindex="1"
                                                   required
                                                   value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->doc_CRM); ?><?php elseif(old('doc_CRM')): ?><?php echo e(old('doc_CRM')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('Digite o nº do conselho')); ?>">



                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__('Especialidade')); ?></label>

                                            <select class="form-control" name="doc_specialty">
                                                <option selected disabled>Selecione</option>
                                                <option>VET</option>
                                                <option>Doctor</option>
                                                <option>Nurse</option>
                                                <option>General Clinic</option>
                                            </select>

                                        </div>

                                        

                                    </div>

                                    <div class="row">
                                        

                                        <div class="col-md-6 form-group">
                                            <label class="control-label"><?php echo e(__('E-mail ')); ?><span
                                                        class="text-danger">*</span></label>
                                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                   name="email"  value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->email); ?><?php elseif(old('email')): ?><?php echo e(old('email')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('Digite o E-mail')); ?>">
                                            <!--<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>-->
                                            <!--<span class="invalid-feedback" role="alert">-->
                                            <!--        <strong><?php echo e($message); ?></strong>-->
                                            <!--    </span>-->
                                            <!--<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>-->
                                        </div>
                                         <div class="col-md-6 form-group">
                                            <label class="control-label"><?php echo e(__('Senha ')); ?></label>
                                            <input type="password" class="form-control"
                                                   name="password"
                                                   placeholder="<?php echo e(__('Digite a senha')); ?>">

                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-5">
                                    <blockquote><?php echo e(__('Address')); ?></blockquote>
                                    <div class="row">
                                        <div class="col-md-5 form-group">
                                            <label class="control-label"><?php echo e(__('CEP')); ?></label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="zip_code"
                                                   maxlength="8"
                                                     id="cpefield"
                                                    onkeyup="addHyphen(this)"
                                                   placeholder="<?php echo e(__('Zipcode')); ?>"
                                                   >

                                        </div>
                                        <div class="col-md-7 form-group">
                                            <label class="control-label"><?php echo e(__('Rua/ Avenida ')); ?></label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="user_address" id=""
                                                   placeholder="<?php echo e(__('Address')); ?>">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-7 form-group">
                                            <label class="control-label"><?php echo e(__('Cidade ')); ?></label>
                                            <input type="text" class="form-control"
                                                   name="city"
                                                   value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->user_city); ?><?php elseif(old('user_city')): ?><?php echo e(old('user_city')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('city')); ?>">

                                        </div>

                                        <div class="col-md-5 form-group">
                                            <label class="control-label"><?php echo e(__('Telefone ')); ?></label>
                                            <input type="tel" class="form-control"
                                                   name="mobile" id="patientMobile" tabindex="4"
                                                   minlength="11"  maxlength="11"
                                                   value="<?php if($doctor && $doctor_info): ?><?php echo e($doctor->mobile); ?><?php elseif(old('mobile')): ?><?php echo e(old('mobile')); ?><?php endif; ?>"
                                                   placeholder="<?php echo e(__('Nº para contato')); ?>"
                                                   min="11" max="11"
                                                   >

                                        </div>

                                    </div>


                                    <div class="row">
                                       
                                    </div>


                                </div>


                            </div>


                            <!--my code end here-->
                            <div class="row">
                                <div class="col-md-6">





                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    
                                </div>
                                <div class="col-md-6">




                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <?php if($doctor && $doctor_info): ?>
                                            <?php echo e(__('Update Details')); ?>

                                        <?php else: ?>
                                            <?php echo e(__('Add New Doctor')); ?>

                                        <?php endif; ?>
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
        <script src="<?php echo e(URL::asset('assets/libs/jquery-repeater/jquery-repeater.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')); ?>"></script>
        <!-- form init -->
        <script src="<?php echo e(URL::asset('assets/js/pages/form-repeater.int.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/doctor/doctor-details.blade.php ENDPATH**/ ?>