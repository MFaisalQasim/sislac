
<?php $__env->startSection('title'); ?> <?php echo e(__('Appointment list')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <body data-topbar="dark" data-layout="horizontal">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        
         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                      <?php echo e(__('LISTA DE Categoria')); ?>

                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                            <li class="breadcrumb-item active">
                                <?php echo e(__('LISTA DE Categoria')); ?>

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
        
                            <a href="<?php echo e(route('CreateCategory')); ?>">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> <?php echo e(__('Nova Categoria')); ?>

                                </button>
                            </a>
        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="detail_box">
                            <table class="table sislac_table table_form">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Abreviação</th>
                                    <th>Opções</th>

                                </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e($item->name); ?></td>
                                            <td> <?php echo e($item->abbreviation); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('EditCategory',['id'=>$item->id])); ?>">
                                                    <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                            title="Update Profile">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </button>
                                                </a>
                                                <form action="<?php echo e(route('DeleteCategory',['id'=>$item->id])); ?>" method="POST" class="d-inline">
                                                    <!--<?php echo csrf_field(); ?>   
                                                    <?php echo method_field('DELETE'); ?>-->
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('DELETE')); ?>

                                                    <button type="submit"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/exam/category.blade.php ENDPATH**/ ?>