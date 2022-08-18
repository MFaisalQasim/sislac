<?php $__env->startSection('title'); ?> <?php echo e(__('List of Patients')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

<body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="">

         <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                        <?php echo e(__('Editar Exame')); ?>

                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
                            <li class="breadcrumb-item active">
                                <?php echo e(__('Editar Exame')); ?>

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="detail_box">
                            <form action="<?php echo e(url('exam-update/' . $examInfo->id)); ?>" name="examform" class="" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($examInfo->id); ?>" id="form_id" />
                                <table class="exam_form">
                                    <thead>
                                        <tr>
										    <th>Nome do Exame</th>
                                            <th>Abreviação</th>
                                            <th>Categoria</th>
                                            <th>Prazo</th>
                                            <th>Destino</th>
                                            <th>G. de Rótulos</th>
                                            <th>Qtd. Etiqueta</th>
                                            <th>Kit</th>
                                            <th>Preço R$</th>								
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-control" type="text" name="name" value="<?php echo e($examInfo->name); ?>"/></td>
                                            <td><input class="form-control" type="text" name="abbreviation" value="<?php echo e($examInfo->abbreviation); ?>"/></td>                                    
                                            <td>
                                               <select class="form-control" aria-label="Default select example" name="category">
                                              <option selected>Selecione</option>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
                                              <option <?php echo $examInfo->category==$item->abbreviation ?'selected':'' ?> value="<?php echo e($item->abbreviation); ?>"><?php echo e($item->abbreviation); ?></option>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            </td>
                                            <td><input class="form-control" type="text" name="deadline" value="<?php echo e($examInfo->deadline); ?>" /></td>                                         
                                            <td><input class="form-control" type="text" name="destiny" value="<?php echo e($examInfo->destiny); ?>" /></td>
                                            <td><input class="form-control" type="text" name="label_group" value="<?php echo e($examInfo->label_group); ?>" /></td>
                                            <td><input class="form-control" type="text" name="quantity_label" value="<?php echo e($examInfo->quantity_label); ?>"/></td>
                                            <td><input class="form-control" type="text" name="exam_kit" value="<?php echo e($examInfo->exam_kit); ?>"/></td>
                                            <td><input class="form-control" type="text" name="exam_price" value="<?php echo e($examInfo->exam_price); ?>"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <p><b>REPORT EDITOR</b></p>
                                <p>To insert reference values: ##REFERENCE## <br>To omit an excerpt when printing the report, enclose the text in.
                                </p>
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9 text-right">
                                        <div class="form-group d-inline-flex">
                                            <button type="button" class="btn waves-effect waves-light mb-4" data-toggle="modal" data-target="#newParameterModal" data-backdrop="static" data-keyboard="false" style="color: black;background-color: #e3ebf2;">
                                                <i class="bx bx-hash font-size-16 align-middle mr-2"></i> <?php echo e(__('New Parameters')); ?>

                                            </button>
                                        </div>
                                        <div class="form-group d-inline-flex">
                                            <button type="button" class="btn waves-effect waves-light mb-4" data-toggle="modal" data-target="#showTableModal" data-backdrop="static" data-keyboard="false" style="color: black;background-color: #e3ebf2;">
                                                <i class="bx bx-hash font-size-16 align-middle mr-2"></i> <?php echo e(__('Report Parameters')); ?>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <textarea id="summery-ckeditor" name="exam_editor"><?php if($examInfo): ?> <?php echo e(old('exam_editor', $examInfo->exam_editor)); ?><?php elseif(old('exam_editor')): ?><?php echo e(old('exam_editor')); ?><?php endif; ?></textarea>
                                <br>
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="newParameterModal" tabindex="-1" aria-labelledby="newParameterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content form-group">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD PARAMETERS TO THE REPORT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo e(route('StoreExam')); ?>" name="examform" id="save-parameter" method="post" style="padding: 16px;">
                    <?php echo csrf_field(); ?>
                    <table class="new_parameter_form">
                        <thead>
                            <tr>
                                <th>Parameter</th>
                                <th>Type</th>
                                <th>Abbreviations</th>
                                <th>Formula</th>
                                <th>Size</th>
                                <th>Decimal Places</th>
                                <th>Minimum</th>
                                <th>Maximum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" type="text" name="parameter" /></td>
                                <td>
                                    <select name="type" class="form-control" style="width: 110px;">
                                        <option value="text">Text</option>
                                        <option value="numeric">Numeric</option>
                                        <option value="abbreviation">Abbreviation</option>
                                        <option value="formula">Formula</option>
                                        <option value="area">Area</option>
                                        <option value="image">Image</option>
                                    </select>
                                </td>
                                <td><input class="form-control" type="text" name="abbreviations" /></td>
                                <td><input class="form-control" type="text" name="formula" /></td>
                                <td><input class="form-control" type="text" name="size" /></td>
                                <td><input class="form-control" type="text" name="decimal_places" /></td>
                                <td><input class="form-control" type="text" name="minimum" /></td>
                                <td><input class="form-control" type="text" name="maximum" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!--Table Modal -->
    <div class="modal fade" id="showTableModal" tabindex="-1" aria-labelledby="newParameterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content form-group">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report Parameters</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="content" style="margin-top:30px;">
                    <div class="row">
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-4" data-toggle="modal" data-target="#reportModal" data-backdrop="static" data-keyboard="false"  onclick="closeModal()">
                                <i class="bx bx-plus font-size-16 align-middle mr-2"></i> <?php echo e(__('Add New Record')); ?>

                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="detail_box">
                                                            <table class="table sislac_table table_form">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Parameter (##NAME##)</th>
                                                    <th>Type</th>                                
                                                    <th colspan="2">Formula</th>
                                                    <th>size</th>
                                                    <th>Decimal Places</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $parameter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th><?php echo e($value->id); ?></th>
                                                    <th><?php echo e($value->parameter); ?></th>
                                                    <th><?php echo e(ucfirst($value->type)); ?></th>               
                                                    <th colspan="2"><?php echo e($value->formula); ?></th>
                                                    <th class="text-center"><?php echo e($value->size); ?></th>
                                                    <th class="text-center"><?php echo e($value->decimal_places); ?></th>
                                                    <th>
                                                        <button type="button" data-id="<?php echo e($value->id); ?>"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0 updateParameter"
                                                                data-toggle="modal" data-target="#showTableModal"
                                                                title="Update Parameter" data-backdrop="static" data-keyboard="false">
                                                            <i class="mdi mdi-lead-pencil"></i>
                                                        </button>
                                                        <button type="button" onclick="deleteParameter(<?php echo e($value->id); ?>)"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                title="Delete Parameter" data-backdrop="static" data-keyboard="false">
                                                            <i class="mdi mdi-trash-can"></i>
                                                        </button>
                                                    </th>
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
        </div>
    </div>
    <!-- end row -->
    <!-- Modal -->
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Include</h5>
					<div class="alert alert-danger showMsg" style="display:none"></div>
                    <button type="button" onclick="closeModel()" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="reportParameterForm" method="POST">
                    <div class="modal-body">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="hiddenId" name="id">
                        <div class="row">
                            <div class="col-12 d-inline-flex">
                                <div class=" mb-3 mr-3">
                                    <label  class="form-label">Parameter (##NAME##)</label>
                                    <div  class="">
                                        <input name="parameter" id="parameter" type="text" placeholder="Enter parameter" class="form-control" required="">
                                    </div>
																	
                                </div>
									<input type="hidden" name="exam_id" value="<?php echo e($id); ?>"/>
                                <div class=" mb-3 mr-3">
                                    <label  class="form-label">Type</label>
                                    <div  class="">
                                        <select name="type" id="type" class="form-control" >
                                            <option value="text">Text</option>
                                            <option value="numeric">Numeric</option>                                    
                                            <option value="formula">Formula</option>                                    
                                        </select>
                                    </div>
                                </div>
                                
                                <div class=" mb-3 mr-3">
                                    <label  class="form-label">Formula</label>
                                    <div  class="">
                                        <input name="formula" id="formula" type="text" placeholder="Enter formula" class="form-control">
                                    </div>
                                </div>
                                <div class=" mb-3 mr-3">
                                    <label  class="form-label">Size</label>
                                    <div  class="">
                                        <input name="size" id="size" type="text" placeholder="Enter size" class="form-control">
                                    </div>
                                </div>
                                <div  class=" mb-3">
                                    <label  class=" form-label">Decimal Places</label>
                                    <div  class="">
                                        <input name="decimal_places" id="decimal_places" type="text" placeholder="Enter decimal places" class="form-control">
                                    </div>
                                </div>
                              </div>
                              </div>
                             
                   <div class="text-right">
                        <button type="button" onclick="closeModel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary saveChange">Save changes</button>
                        <button type="submit" class="btn btn-primary updateChange" style="display: none;">Update changes</button>
                    </div>
					</div>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
    <script>
	var baseUrl = "https://sislac.com.br";
    CKEDITOR.replace('summery-ckeditor');
    $("#save-parameter").on("submit", function(e) {
        e.preventDefault();
        var form_data = $(this);

        $.ajax({
            type: "POST",
            url: baseUrl+'/store-parameter',
            data: form_data.serialize(),
            beforeSend: function() {
                $('#pageloader').show()
            },
            success: function(response) {
                toastr.success(response.message, 'Success Alert', {
                    timeOut: 2000
                });
                location.reload();
            },
            error: function(response) {
                toastr.error(response.responseJSON.message, {
                    timeOut: 20000
                });
            },
            complete: function() {
                $('#pageloader').hide();
            }
        });
    });
    $("#reportParameterForm").on("submit", function(e) {
		
        e.preventDefault();
        var form_data = $(this);
		var hiddenId = $("#hiddenId").val();
        var form_data = $(this);       
        var lastId = $('.table_form tr:last').children("th:first").text();
        var id = parseInt(lastId)+1;
        var parameter = $('#parameter').val();
        var type = $('#type').find(":selected").text();
        var formula = $('#formula').val();
        var size = $('#size').val();
        var decimal_places = $('#decimal_places').val();
        $.ajax({
            type: "POST",
            url: baseUrl+'/store-parameter',
            data: form_data.serialize(),
            //beforeSend: function() {
             //   $('#pageloader').show()
           // },
            success: function(response) {	
           			
				 //console.log(response);return false;
				 if(response.success==1){
				  $('.showMsg').show(); 
			     $('.showMsg').html(response.data);
				 return false;
				 }
				$('#reportModal').modal('toggle');
		 
                toastr.success(response.message, 'Success Alert', {
                    timeOut: 2000
                });
			if(hiddenId==''){
				console.log('idff');
				 $('#showTableModal').modal('toggle');
                var newRowContent ="<tr><th>"+id+"</th><th>"+parameter+"</th><th>"+type+"</th><th colspan='2'>"+formula+"</th><th class='text-center'>"+size+"</th><th class='text-center'>"+decimal_places+"</th><th><button type='button' data-id='"+response.data.id+"' class='btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0 updateParameter' title='Update Parameter' data-backdrop='static' data-toggle='modal' data-target='#reportModal' data-keyboard='false'><i class='mdi mdi-lead-pencil'></i></button>"+" "+"<button type='button' onclick='deleteParameter("+response.data.id+")' class='btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0' title='Delete Parameter' data-backdrop='static' data-keyboard='false'><i class='mdi mdi-trash-can'></i></button></th></tr>"  
                $(".table_form tbody").append(newRowContent);
            } 

            else{
 $('#showTableModal').modal('toggle');
                           // location.reload();
            }
     
            },
            error: function(response) {
                toastr.error(response.responseJSON.message, {
                    timeOut: 20000
                });
            },
            complete: function() {
                $('#pageloader').hide();
            }
        });
    });
    $('body').on('click', '.updateParameter', function () {
        $('#showTableModal').modal('toggle');
        var id = $(this).attr('data-id');
        console.log(id);
        $.ajax({
            type: "GET",
            url: baseUrl+"/parameter/" + id,
            beforeSend: function() {
                $('#pageloader').show()
            },
            success: function(response) {
                $.each(response.data, function(key, value) {
                    $("#hiddenId").val(value.id);
                    $("#parameter").val(value.parameter);
                    $("#type").val(value.type);
                    $("#unit").val(value.unit);
                    $("#abbreviations").val(value.abbreviations);
                    $("#standard_value").val(value.standard_value);
                    $("#formula").val(value.formula);
                    $("#size").val(value.size);
                    $("#decimal_places").val(value.decimal_places);
                    $("#decimal_mask").val(value.decimal_mask);
                    $("#minimum").val(value.minimum);
                    $("#maximum").val(value.maximum);
                    $("#block_recording").val(value.block_recording);
                    $("#mandatory_parameter").val(value.mandatory_parameter);
                    $("#imp_ruler").val(value.imp_ruler);
                    $("#previous_imp").val(value.previous_imp);
                    $("#description").val(value.description);
                    $("#reference_value").val(value.reference_value);
                    $("#support_parameter").val(value.support_parameter);
                    $("#evolutionary_report_parameter").val(value.evolutionary_report_parameter);
                    $(".saveChange").css({"display": "none"});
                    $(".updateChange").removeAttr("style");
                });
                $("#reportModal").modal('show');
            },
            error: function(response) {
                toastr.error(response.responseJSON.message, {
                    timeOut: 20000
                });
            },
            complete: function() {
                $('#pageloader').hide();
            }
        });
    });
    function deleteParameter(id) {
        if (confirm('Are you sure want to delete parameter?')) {
            $.ajax({
                type: "DELETE",
                url: 'parameter/' + id,
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id:id,
                },
                beforeSend: function() {
                    $('#pageloader').show()
                },
                success: function(response) {
                    toastr.success(response.message, 'Success Alert', {
                        timeOut: 2000
                    });
                    location.reload();
                },
                error: function(response) {
                    toastr.error(response.responseJSON.message,{
                        timeOut: 20000
                    });
                },
                complete: function() {
                    $('#pageloader').hide();
                }
            });
        }
    }
    function closeModel() {
        $("#parameter").val('');
        $("#type").val('text');
        $("#unit").val('');
        $("#abbreviations").val('');
        $("#standard_value").val('');
        $("#formula").val('');
        $("#size").val('');
        $("#decimal_places").val('');
        $("#decimal_mask").val('0');
        $("#minimum").val('');
        $("#maximum").val('');
        $("#block_recording").val('0');
        $("#mandatory_parameter").val('0');
        $("#imp_ruler").val('1');
        $("#previous_imp").val('1');
        $("#description").val('');
        $("#reference_value").val('');
        $("#support_parameter").val('');
        $("#evolutionary_report_parameter").val('1');
        $(".saveChange").removeAttr("style");
        $(".updateChange").css({"display": "none"});
    }
	
	function closeModal(){
		//$("#showTableModal").toggle();
		$('#showTableModal').modal('hide');
	}
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/exam/editexam.blade.php ENDPATH**/ ?>