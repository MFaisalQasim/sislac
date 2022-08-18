
<?php $__env->startSection('title'); ?> <?php echo e(__('Receptionist Profile')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                        <?php echo e(__('Receptionist Profile')); ?>

                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo e(url('receptionist')); ?>"><?php echo e(__('Receptionists')); ?></a></li>
                            <li class="breadcrumb-item active">
                                <?php echo e(__('Receptionist Profile')); ?>

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary"><?php echo e(__('Receptionist Information')); ?></h5>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="<?php echo e(URL::asset('assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <img src="<?php if($receptionist->profile_photo != ''): ?><?php echo e(URL::asset('storage/images/users/' . $receptionist->profile_photo)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/noImage.png')); ?><?php endif; ?>" alt="<?php echo e($receptionist->fisrt_name); ?>"
                                        class="img-thumbnail rounded-circle">
                                </div>
                                <h5 class="font-size-15 text-truncate"> <?php echo e($receptionist->first_name); ?>

                                    <?php echo e($receptionist->last_name); ?> </h5>
                                <p class="text-muted mb-0 text-truncate"> <?php echo e($receptionist->title); ?> </p>
                            </div>
                            <div class="col-sm-8">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="font-size-12"><?php echo e(__('Last Login:')); ?></h5>
                                            <p class="text-muted mb-0"> <?php echo e($receptionist->last_login); ?> </p>
                                        </div>
                                    </div>
                                    <?php if($role == 'admin'): ?>
                                        <div class="mt-4">
                                            <a href="<?php echo e(url('receptionist/' . $receptionist->id . '/edit')); ?>"
                                                class="btn btn-primary waves-effect waves-light btn-sm">
                                                <?php echo e(__('Edit Profile')); ?> <i class="mdi mdi-arrow-right ml-1"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"><?php echo e(__('Informação pessoal')); ?></h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row"><?php echo e(__('Nome Completo:')); ?></th>
                                        <td><?php echo e($receptionist->first_name); ?> <?php echo e($receptionist->last_name); ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo e(__('Nº de Contato:')); ?></th>
                                        <td> <?php echo e($receptionist->mobile); ?> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?php echo e(__('E-mail:')); ?></th>
                                        <td> <?php echo e($receptionist->email); ?> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"><?php echo e(__('Assign Doctor Information')); ?></h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php $__currentLoopData = $doctor_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span
                                                    class="badge badge-info font-size-15 my-2"><?php echo e($show->first_name . ' ' . $show->last_name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium"><?php echo e(__('Appointments')); ?></p>
                                        <h4 class="mb-0"><?php echo e(number_format($data['total_appointment'])); ?></h4>
                                    </div>
                                    <div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-check-circle font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium"><?php echo e(__('Pending Bills')); ?></p>
                                        <h4 class="mb-0"><?php echo e(number_format($data['pending_bill'])); ?></h4>
                                    </div>
                                    <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-hourglass font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium"><?php echo e(__('Total Bill')); ?></p>
                                        <h4 class="mb-0">$<?php echo e(number_format($data['revenue'], 2)); ?></h4>
                                    </div>
                                    <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bx-package font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#AppointmentList" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Appointment List')); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Invoices" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                    <span class="d-none d-sm-block"><?php echo e(__('Invoices')); ?></span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="AppointmentList" role="tabpanel">
                                <table class="table table-bordered dt-responsive nowrap "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Sr. No')); ?></th>
                                            <th><?php echo e(__('Doctor Name')); ?></th>
                                            <th><?php echo e(__('Patient Name')); ?></th>
                                            <th><?php echo e(__('Date')); ?></th>
                                            <th><?php echo e(__('Time')); ?></th>
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
                                            $currentpage = $appointments->currentPage();
                                        ?>
                                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1 + $per_page * ($currentpage - 1)); ?></td>
                                                <td> <?php echo e($item->doctor->first_name . ' ' . $item->doctor->last_name); ?>

                                                </td>
                                                <td> <?php echo e($item->patient->first_name . ' ' . $item->patient->last_name); ?>

                                                </td>
                                                <td><?php echo e($item->appointment_date); ?></td>
                                                <td><?php echo e($item->timeSlot->from . ' ' . $item->timeSlot->to); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Showing <?php echo e($appointments->firstItem()); ?> to <?php echo e($appointments->lastItem()); ?> of
                                        <?php echo e($appointments->total()); ?> entries
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <?php echo e($appointments->links()); ?>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="Invoices" role="tabpanel">
                                <table class="table table-bordered dt-responsive nowrap "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Sr. No')); ?></th>
                                            <th><?php echo e(__('Date')); ?></th>
                                            <th><?php echo e(__('Patient name')); ?></th>
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
                                        <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->index + 1 + $per_page * ($currentpage - 1)); ?></td>
                                                <td><?php echo e(date('d-m-Y')); ?></td>
                                                <td><?php echo e($item->user->first_name . ' ' . $item->user->last_name); ?></td>
                                                <td><?php echo e($item->payment_status); ?></td>
                                                <td>
                                                    <a href="<?php echo e(url('invoice/' . $item->id)); ?>">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                            <?php echo e(__('View')); ?>

                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Showing <?php echo e($invoices->firstItem()); ?> to <?php echo e($invoices->lastItem()); ?> of
                                        <?php echo e($invoices->total()); ?> entries
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <?php echo e($invoices->links()); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <!-- Chart plugins -->
        <script src="<?php echo e(URL::asset('assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>
        <!-- Plugins js -->
        <script src="<?php echo e(URL::asset('assets/libs/jszip/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>
        <!-- Init js-->
        <script src="<?php echo e(URL::asset('assets/js/pages/profile.init.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/receptionist/receptionist-profile.blade.php ENDPATH**/ ?>