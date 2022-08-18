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
                            LISTA DE  Exam
                        </h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                                <li class="breadcrumb-item active"> LISTA DE  Exam</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
            
                            <a href="<?php echo e(route('add_exam')); ?>">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> <?php echo e(__('Novo Exame')); ?>

                                </button>
                            </a>
            
                        </div>
            
                        <div class="col-lg-9 text-right">
            
                            <form action="">
                                <div class="form-group d-inline-flex">
                                    <input class="form-control mr-1" type="text" placeholder="Pesquisar Exame" name="search_name"  />
                                    <button type="submit" value="" class="btn btn-primary">Pesquisar</button>
                                </div>
                            </form>
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail_box">
                                <table class="table sislac_table table_form">
                                    <thead>
                                    <tr>                            
                                        <th>Nome do Exame</th>
                                        <th>Abreviação</th>
                                        <th>Categoria</th>
                                        <th>Prazo</th>
                                        <th>Destino</th>
                                        <th>G. Rótulos</th>                            
                                        <th>Qtd. Etiquetas</th>
                                        <th>Kit</th>                            
                                        <th>Preço R$</th>              
            
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $exam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                                    <tr>
                                        
                                        <td> <?php echo e($item->name); ?> </td>
                                        <td> <?php echo e($item->abbreviation); ?> </td>
                                        <td> <?php echo e($item->category); ?> </td>
                                        <td> <?php echo e($item->deadline); ?> </td>
                                        <td> <?php echo e($item->destiny); ?> </td>
                                        <td> <?php echo e($item->label_group); ?> </td>
                                        <td> <?php echo e($item->quantity_label); ?> </td>
                                        <td> <?php echo e($item->exam_kit); ?> </td>
                                        <td> <?php echo e($item->exam_price); ?> </td>
                                        
                                        
                                        <td>
                                            <a href="<?php echo e(url('exam/' . $item->id . '/edit')); ?>">
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0 updateExamProfile"
                                                        title="Update Profile">
                                                    <i class="mdi mdi-lead-pencil"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo e(url('exam-delete/'. $item->id)); ?>">
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                        title="Deactivate Profile"
                                                        id="delete-doctor">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </a>
                                        </td>
            
                                    </tr>
            
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                                    </tbody>
                                </table>
                               <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start">
                                            Mostrando de <?php echo e($exam->firstItem()); ?> a <?php echo e($exam->lastItem()); ?> de
                                            <?php echo e($exam->total()); ?> entradas
                                        </div>
                                     </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-end">
                                            <?php echo e($exam->links()); ?>

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


<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/exam/examlist.blade.php ENDPATH**/ ?>