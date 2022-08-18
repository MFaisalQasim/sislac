

<?php $__env->startSection('title'); ?> <?php echo e(__("Forgot Password")); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary"> <?php echo e(__("Forgot Password")); ?></h5>
                                        <p>Reset your password with <?php echo e(config('app.name')); ?>.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?php echo e(URL::asset('assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="<?php echo e(url('/')); ?>">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="<?php echo e(url('forgot-password')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php if($msg = Session::get('error')): ?>
                                        <div class="alert alert-danger">
                                            <span> <?php echo e($msg); ?> </span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($msg = Session::get('success')): ?>
                                        <div class="alert alert-success">
                                            <span> <?php echo e($msg); ?> </span>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <label for="username"><?php echo e(__("Email")); ?></label>
                                        <input name="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" <?php if(old('email')): ?> value="<?php echo e(old('email')); ?>" <?php endif; ?> id="username" placeholder="<?php echo e(__("Enter email")); ?>" autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
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
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit"><?php echo e(__("Reset")); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p><?php echo e(__("Remember It ?")); ?> <a href="<?php echo e(url('login')); ?>" class="font-weight-medium text-primary"> <?php echo e(__("Sign In here")); ?></a> </p>
                        <p>© <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. Crafted with <i class="mdi mdi-heart text-danger"></i> <?php echo e(__("by Themesbrand")); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-without-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/auth/passwords/forgotPassword.blade.php ENDPATH**/ ?>