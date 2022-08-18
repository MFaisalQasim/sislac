<?php $__env->startSection('title'); ?> <?php echo e(__('Book Appointment')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/fullcalendar/fullcalendar.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="<?php echo e(URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/datatables/datatables.min.css')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        td .price{
           border: unset;
        }
        .payment-info input{
            border: unset;
            text-align: right;
        }
        .is-invalid .select2-selection{
          border-color:red !important;
        }
        .exam-table .table td {
            padding: 0.5rem;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <!-- start page title -->
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Novo Atendimento <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Booked Appointment <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <a href="<?php echo e(url('/appointment/create')); ?>"
                    class="btn btn-primary text-white waves-effect waves-light mb-4">
                    <i class="mdi mdi-arrow-left  font-size-16 align-middle mr-2"></i> <?php echo e(__('Voltar Lista de Atendimento')); ?>

                </a>
            </div> <!-- end col -->
        </div> <!-- end row -->
         
         <?php
            $today=\Carbon\Carbon::now()->format('d/m/Y')
        ?>
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
                        <form action="<?php echo e(route("appointment.update",['id' => $appointment->id])); ?>" id="" method="POST" onsubmit="return ValidationEvent()">
                            <?php echo csrf_field(); ?>
                             <?php echo method_field('PUT'); ?>
                            <div class="row" style="background: #f8f8fb;padding: 10px 5px;">
                                <div class="col-md-2">
                                    <p><b>ID Atendimento</b><br>
                                    ---</p>
                                </div>
                                <div class="col-md-2">
                                    <p><b>Data</b><br>
                                     <?php echo e($today); ?>

                                     </p>
                                </div>
                                <div class="col-md-2">
                                    <p><b>Senha</b><br>
                                    <span id="showPassword"> <span></p>
                                    <input name="row_password" id="user_pass" type="hidden">
                                </div>
                                <div class="col-md-3">
                                    <p><b>Usuário</b><br>
                                    <?php echo e($user->first_name); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <p><b>Unidade</b><br>
                                        Matriz</p>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <input type="hidden" name="patient_id" id="patient_id" value="<?php echo e($appointment->patient_id); ?>" />
                                                <input type="hidden" name="user_id" id="user_id" value="<?php echo e($appointment->user_id); ?>" />
                                                <input type="hidden" name="patientname" id="patientname" value="<?php echo e($appointment->patient_name); ?>" />
                                                <label class="control-label"><?php echo e(__('Nome do Paciente')); ?><span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="patient_name" class="form-control" value="<?php echo e($appointment->patient_name); ?>" />
                               
                                            </div>
                                            <div class="col-md-1 form-group">
                                                    <label class="control-label"><?php echo e(__('Sexo')); ?></label>
                                                    <select class="form-control" name="gender" id="gender">
                                                        <option <?php echo e(($appointment->gender=='Masculino')?'selected':''); ?>>Masculino</option>
                                                        <option <?php echo e(($appointment->gender=='Feminino')?'selected':''); ?>>Feminino</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Data Nascimento')); ?><span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="birthdate" id="birthdate" value="<?php echo e($appointment->birthdate); ?>" />
                                            </div>
                                            <div class="col-md-1 form-group">
                                                <label class="control-label"><?php echo e(__('Idade')); ?> </label>
                                                <input type="number" class="form-control" name="age" id="age"  value="<?php echo e($appointment->age); ?>" />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('CPF')); ?></label>
                                                <input type="text" class="form-control" name="cpf" id="patient_CPF" value="<?php echo e($appointment->cpf); ?>" />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Responsável')); ?></label>
                                                <input type="text" class="form-control" name="responsible"  id="responsible" value="<?php echo e($appointment->responsible); ?>"/>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('CEP')); ?></label>
                                                <input type="number" class="form-control" name="zip_code" id="zip_code"  value="<?php echo e($appointment->zip_code); ?>" />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Cidade')); ?></label>
                                                <input type="text" class="form-control" name="city" id="city" value="<?php echo e($appointment->city); ?>" />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                    <label class="control-label"><?php echo e(__('Endereço')); ?></label>
                                                    <input type="text" class="form-control" name="address" id="address" value="<?php echo e($appointment->address); ?>"  />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                    <label class="control-label"><?php echo e(__('Telefone')); ?></label>
                                                    <input type="phone" class="form-control" name="phone" id="phone" value="<?php echo e($appointment->phone); ?>" />
                                            </div>
                                            
                                            <div class="col-md-2 form-group">
                                                    <label class="control-label"><?php echo e(__('E-mail')); ?></label>
                                                    <input type="email" class="form-control" name="email" id="email"  value="<?php echo e($appointment->email); ?>" />
                                            </div>
                                            <!--
                                            <div class="col-md-3 form-group">
                                                <label class="control-label"><?php echo e(__('RG')); ?><span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="rg" required />
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            
                                           
                                            
                                            
                                        </div>
                                    </div>
                            </div>
                            <hr/>
                            <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__('CRM Médico/ Solicitante')); ?><span
                                                 class="text-danger">*</span>
                                            </label>
                                            <select class="form-control js-example-basic-single" name="crm" id="selectcrm" required onchange="selectdoctor(this.value)">
                                                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($doc->id); ?>" <?php echo e(($appointment->appointdoctor->id == $doc->id)?"selected":""); ?>><?php echo e($doc->id); ?> | <?php echo e($doc->full_name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <input type="hidden" class="form-control" name="crm1"  />
                                            
                                        </div>
                                        <!--
                                        <div class="col-md-4 form-group">
                                            <label class="control-label"><?php echo e(__('Médico/ Solicitante')); ?><span
                                                 class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="doctor_name" name="doctor" required />
                                        </div>
                                        -->
                                        <input type="hidden" class="form-control" id="doctor_name" name="doctor" value="<?php echo e($appointment->doctor); ?>" required />
                                        <div class="col-md-2 form-group">
                                            <label class="control-label"><?php echo e(__('Código')); ?></label>
                                            <input type="text" class="form-control" name="code"  value="<?php echo e($appointment->code); ?>"/>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="control-label"><?php echo e(__('Plano de saúde')); ?></label>
                                            <input type="text" class="form-control" name="insurance" value="<?php echo e($appointment->insurance); ?>" />
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="control-label"><?php echo e(__('Empresa')); ?></label>
                                            <input type="text" class="form-control" name="company"  value="<?php echo e($appointment->ins_company); ?>" />
                                        </div>
                            </div>
                            <hr/>
                            <div class="table-resposive exam-table">
                                <table class="table table-bordered" id="serving">
                                    <thead class="">
                                        <tr>
                                            <th>Item</th>
                                            <th width="450">Código Nome do Exame</th>
                                            <th>Código AMB </th>
                                            <th>Dada da Coleta</th>
                                            <th>Preço R$</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($appointment->exams) && !empty($appointment->exams)): ?>
                                            <?php
                                            $row=1
                                            ?>
                                            <?php $__currentLoopData = $appointment->exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr id="row-<?php echo e($row); ?>">
                                                <td class="item">
                                                    <?php echo e($row); ?>

                                                </td>
                                                <td  class="abbreviation d-flex">
                                                    <button type="button" onclick="$(this).closest('tr').remove();countotal();updateindex();" class="mr-2 btn btn-danger text-white waves-effect waves-light  rounded"> - </button>
                                                    <input type="hidden" name="exam[<?php echo e($row); ?>][name]" class="examname" value="<?php echo e($product->name); ?>"/>
                                                    <select  name="exam[<?php echo e($row); ?>][id]" class="form-control examnameselect"  onchange="addexam(<?php echo e($row); ?>)">
                                                       <!-- <option disabled>ID | Abbreviation</option>-->
                                                        <?php $__currentLoopData = $examlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($exam->id); ?>" <?php echo e(($product->id == $exam->id)?"selected":''); ?>><?php echo e($exam->abbreviation); ?> | <?php echo e($exam->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td class="examambcode"><?php echo e($product->id); ?></td>
                                                <td class="examdate"><?php echo e($today); ?></td>
                                                <td>
                                                    <input type="text" name="exam[<?php echo e($row); ?>][price]" class="price" value="<?php echo e($product->exam_price); ?>" readonly/>
                                                </td>
                                            </tr>
                                            <?php ($row++); ?>
 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                        <tr id="row-<?php echo e($row=1); ?>">
                                            <td class="item">
                                                1
                                            </td>
                                            <td  class="abbreviation d-flex">
                                                <button type="button" onclick="$(this).closest('tr').remove();countotal();updateindex();" class="mr-2 btn btn-danger text-white waves-effect waves-light  rounded"> - </button>
                                                <input type="hidden" name="exam[1][name]" class="examname" />
                                                <select  name="exam[1][id]" class="form-control examnameselect"  onchange="addexam(<?php echo e($row=1); ?>)">
                                                   <!-- <option disabled>ID | Abbreviation</option>-->
                                                    <?php $__currentLoopData = $examlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($exam->id); ?>"><?php echo e($exam->abbreviation); ?> | <?php echo e($exam->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <option disabled selected value="Select Exam">Select Exam | </option>
                                                </select>
                                            </td>
                                            <td class="examambcode"></td>
                                            <td class="examdate"><?php echo e($today); ?></td>
                                            <td>
                                                <input type="text" name="exam[1][price]" class="price" value="" readonly/>
                                            </td>
                                        </tr>
                                        <?php endif; ?>
                                        
                                    </tbody>
                                </table>
                                &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="addnewrow()"class="ml-2 btn btn-primary text-white waves-effect waves-light mb-4 rounded">+</button>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    
                                    <div class="row">
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Data de entrega')); ?></label>
                                                <input type="date" class="form-control" name="delivery_date"  value="<?php echo e($appointment->appointment_date); ?>" required/>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label"><?php echo e(__('Hora')); ?></label>
                                                <input type="time" class="form-control" name="hour" value="09:00" required />
                                            </div>
                                            <div class="col-md-1 form-group">
                                                <label class="control-label"><?php echo e(__('Jejum')); ?></label>
                                                <!--<input type="text" class="form-control" name="fast"  /> -->
                                            </div>
                                            <div class="col-md-1 form-group">
                                               <div class="form-check col-md-2 form-radio-primary mb-3">
                                                        <input class="form-check-input" type="radio" name="fast" id="formradioRight5" value="Sim" checked>
                                                        <label class="form-check-label" for="formradioRight5">
                                                            <?php echo e(__('Sim')); ?> 
                                                        </label>
                                                </div>
                                            </div>
                                            <div class="col-md-1 form-group">
                                               <div class="form-check col-md-2 form-radio-primary mb-3">
                                                        <input class="form-check-input" type="radio" name="fast" id="formradioRight6" value="Não" >
                                                        <label class="form-check-label" for="formradioRight6">
                                                            <?php echo e(__('Não')); ?> 
                                                        </label>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Jejum')); ?></label>
                                                <input type="text" class="form-control" name="fast"  />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label"><?php echo e(__('Dum')); ?></label>
                                                <input type="text" class="form-control" name="dum"  />
                                            </div>
                                            -->
                                    </div>
                                    <div class="row">
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox"  name="urgencia" value="1" >
                                                <label class="form-check-label">Urgência</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="send_email" value="1" >
                                                <label class="form-check-label">Enviar E-mail</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="send_whatsapp" value="1" >
                                                <label class="form-check-label">Enviar WhatsApp</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="control-label"><?php echo e(__('Diagnóstico')); ?></label>
                                                <input type="text" class="form-control" name="diagnosis" value="<?php echo e($appointment->diagnosis); ?>" />
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label"><?php echo e(__('Medicamentos')); ?></label>
                                                <input type="text" class="form-control" name="medicines"  value="<?php echo e($appointment->medicines); ?>"/>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label"><?php echo e(__('Observações')); ?></label>
                                                <input type="text" class="form-control" name="comments" value="<?php echo e($appointment->comments); ?>" />
                                            </div>
   
                                    </div>
                                </div>
                                <div class="col-md-4 table-responsive payment-info">
                                      <input type="hidden" id="sub_total_input" name="sub_total" value="0"/>
                                      <input type="hidden" id="total_input" name="total" value="0"/>
                                      <input type="hidden" id="balanace_input" name="balance" value="0"/>
                                     <table class="table" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                                <tr>
                                                    <td><b>SUBTOTAL</b></td>
                                                    <td class="text-right" id="sub_total">R$ 0.00</td>
                                                </tr>
                                                <tr>
                                                    <td><b>DESCONTO (-)</b></td>
                                                    <td class="text-right"><input id="tbDesconto" name="discount"  type="text" value="0.00" onchange="countotal()"></td>
                                                </tr>
                                                <tr>
                                                    <td><b style="color: #61c39c;">TOTAL</b></td>
                                                    <td class="text-right" id="f_total">R$ 0.00</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <table class="table" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                                <tr>
                                                    <td><b>SINAL</b></td>
                                                    <td class="text-right"><input id="entry_amt" name="entrance"  type="text" value="0.00" onchange="countotal()"></td>
                                                </tr>
                                                <tr>
                                                    <td><b style="color:red;">SALDO DEVEDOR</b></td>
                                                    <td class="text-right" id="balanace">R$ 0.00</td>
                                                </tr>

                                        </tbody>
                                    </table>
                                    <div class="action_btn">
                                        <button type="reset" style="width:100px;border: 1px solid #b9b5b5;" class="btn btn-default">
                                            <?php echo e(__('Cancelar ')); ?>

                                        </button>
                                        <button type="submit" style="width:100px" class="btn btn-primary">
                                            <?php echo e(__('Salvar')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>
        <!-- Calender Js-->
        <script src="<?php echo e(URL::asset('assets/libs/jquery-ui/jquery-ui.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/moment/moment.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.js')); ?>"></script>
        <!-- Get App url in Javascript file -->
        <script type="text/javascript">
            var aplist_url ="<?php echo e(url('appointmentList')); ?>";
        </script>
        <!-- Init js-->
        <script src="<?php echo e(URL::asset('assets/js/pages/form-advanced.init.js')); ?>"></script>
        <script src="<?php echo e(URL::asset('assets/js/pages/appointment.js')); ?>"></script>


        <script>
            function selectdoctor(doc){
                console.log(doc);
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });
                jQuery.ajax({
                  url: "<?php echo e(url('/getdoctor/')); ?>",
                  method: 'get',
                  data: {
                     id: doc,
                  },
                  success: function(result){
                     console.log(result.data);
                     jQuery('#doctor_name').val(result.data.full_name);
                  }});

                //doctor_name
            }
            var tablerow=2;
            function addnewrow(){
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });
                jQuery.ajax({
                  url: "<?php echo e(url('/gealltexam')); ?>",
                  method: 'get',
                  success: function(result){
                     //console.log(result);
                     let date="<?php echo e($today); ?>";
                     let select="<select name='exam["+tablerow+"][id]' class='examnameselect form-control' onchange='addexam("+tablerow+")'>";
                     //select +="<option disabled>ID | Abbreviation</option>";
                     
                     $.each(result.data, function(index, value) {
                        select +="<option value='"+value.id+"'>"+value.abbreviation+" | "+value.name+"</option>";
                     });
                     
                     select +="<option value='0' selected disabled> Select Exam | </option>";
                     select +="</select>";
                    onclickevent="$(this).closest('tr').remove();countotal();updateindex();";
                    
                    
                    var trlen=$('#serving > tbody tr').length;
                     for (let i = 0; i < trlen; i++) {
                          $('#serving').find(' tbody tr:eq('+i+') .item').text(i+1);
                     }
                     
                    /*
                    html  = '<tr id="row-'+ tablerow +'">';
                    html += '<td td width="250"><input type="hidden" name="exam['+tablerow+'][name]" class="examname" />'+select+'</td>';
                    html += '<td class="abbreviation"></td>';
                    html += '<td class="examdesc"></td>';
                    html += '<td class="examambcode"></td>';
                    html += '<td class="examdate"></td>';
                    html += '<td><input type="text" name="exam['+tablerow+'][price]" class="price"  readonly></td>';
                    html +='<td><button type="button" onclick='+onclickevent+' class="btn btn-danger text-white waves-effect waves-light mb-4 rounded"> - </button></td>';
                    html += '</tr>';
                    */
                    
                    html  = '<tr id="row-'+ tablerow +'">';
                    html += '<td class="item">'+ (Number(trlen) + Number(1)) +'</td>';
                    html += '<td class="abbreviation d-flex">';
                    html += '<button type="button" onclick='+onclickevent+' class="mr-2 btn btn-danger text-white waves-effect waves-light rounded"> - </button>';
                    html += '<input type="hidden" name="exam['+tablerow+'][name]" class="examname" />';
                    html += select;
                    html += '</td>';
                    html += '<td class="examambcode"></td>';
                    html += '<td class="examdate">'+date+'</td>';
                    html += '<td><input type="text" name="exam['+tablerow+'][price]" class="price"  readonly></td>';
                    html += '</tr>';
                    
                     $('#serving > tbody').append(html);
                     select2call();
                     
                     
                  }});

                  tablerow ++;
            }
            
            function updateindex(){
                 var trlen=$('#serving > tbody tr').length;
                     for (let i = 0; i < trlen; i++) {
                          $('#serving').find(' tbody tr:eq('+i+') .item').text(i+1);
                     }
            }
            
            function addexam(rowid){
                id=jQuery('#row-'+rowid+' .examnameselect').val();
                console.log(id);
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });
                jQuery.ajax({
                  url: "<?php echo e(url('/getexambyid')); ?>",
                  method: 'get',
                  data: {
                     id: id,
                  },
                  success: function(result){
                     console.log(result);
                     //jQuery('#row-'+rowid+' .abbreviation').text(result.exams[0].abbreviation);
                     jQuery('#row-'+rowid+' .examname').val(result.exams[0].name);
                     jQuery('#row-'+rowid+' .examdesc').text(result.exams[0].name);
                     jQuery('#row-'+rowid+' .examambcode').text(result.exams[0].id);
                     jQuery('#row-'+rowid+' .price').val(result.exams[0].exam_price);
                     countotal();
                  }});
            }
            countotal();
            function countotal(){
                total=0;
                $('td .price').each(function() {
                    total += parseFloat($(this).val());
                });
                $('#sub_total').text('R$ '+total.toFixed(2));
                $('#sub_total_input').val(total.toFixed(2));
                var dis=$('#tbDesconto').val();
                var ftotal=total -dis;
                $('#f_total').text('R$ '+ ftotal.toFixed(2));
                $('#total_input').val(ftotal.toFixed(2));
                var entry_amt=$('#entry_amt').val();
                var balance=ftotal -entry_amt;
                $('#balanace').text('R$ '+ balance.toFixed(2));
                $('#balanace_total').val(balance.toFixed(2));

                
            }
        </script>
        <script type="text/javascript">
            function randomPassword() {
                var length = 6;
                var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
                var pass = "";
                for (var x = 0; x < length; x++) {
                    var i = Math.floor(Math.random() * chars.length);
                    pass += chars.charAt(i);
                }
                document.getElementById("user_pass").value = pass;

                document.getElementById("showPassword").innerHTML = pass;

            }
            randomPassword();
        </script>

        <script>
            $('#patient_name1').select2({
                ajax: {
                    url: '<?php echo e(route('getpatientlist')); ?>',
                    data: function (params) {
                        var query = {
                            search: '',
                        }
                    return query;
                    },
                    processResults: function (response) {
                        console.log(response)
                        return {
                            results:response
                        };
                    },
                    cache: true
                }
            });

            $('#patient_name').select2({            
                        placeholder: 'Nome do Paciente',
                        theme: 'bootstrap',
                        templateResult: function(data) {
                            var r = data.text.split('|');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-12">' + r[0] + '</div>' +
                                '</div>'
                            );
                            return result;
                        },
                        templateSelection: function(data) {
                            var r = data.text.split('|');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-12">' + r[0] + '</div>' +
                                '</div>'
                            );
                            return result;
                        }
                });

                $('#patient_name').on('change', function() {
                    var text = $("#patient_name option:selected").text();
                    var id = $("#patient_name option:selected").val();
                     console.log(id)
                     //ajax to update form
                     jQuery.ajax({
                        url: "<?php echo e(url('/getpatient')); ?>/"+id,
                        method: 'get',
                        success: function(result){
                            console.log(result);
                            jQuery('#patient_id').val(result.patient.id);
                            jQuery('#patientname').val(result.full_name);
                            jQuery('#user_id').val(result.id);
                            jQuery('#gender').val(result.user_sex);
                            
                            jQuery('#birthdate').val(result.patient.patient_dob);
                            jQuery('#age').val(result.patient.patient_Age);
                            jQuery('#patient_CPF').val(result.patient.patient_CPF);
                            jQuery('#responsible').val(result.patient.patient_responsible);
                            
                            jQuery('#address').val(result.user_address);
                            jQuery('#city').val(result.city);
                            jQuery('#email').val(result.email);
                            jQuery('#phone').val(result.mobile);
                            jQuery('#zip_code').val(result.zip_code);
                            
                             $("#patient_name + span").removeClass("is-invalid");
        
                        }
                     });
                })
    
                $('#selectcrm').select2({            
                        placeholder: '',
                        theme: 'bootstrap',
                        templateResult: function(data) {
                            var r = data.text.split('| ');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-3">' + r[0] + '</div>' +
                                    '<div class="col-md-9">' + r[1] + '</div>' +
                                '</div>'
                            );
                            return result;
                        },
                        templateSelection: function(data) {
                            var r = data.text.split('| ');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-3">' + r[0] + '</div>' +
                                    '<div class="col-md-9">' + r[1] + '</div>' +
                                '</div>'
                            );
                            return result;
                        }
                });
                function select2call(){
                $('.examnameselect').select2({            
                        placeholder: '',
                        templateResult: function(data) {
                            var r = data.text.split('| ');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-4">' + r[0] + '</div>' +
                                    '<div class="col-md-8">' + r[1] + '</div>' +
                                '</div>'
                            );
                            return result;
                        },
                        templateSelection: function(data) {
                            var r = data.text.split('| ');
                            var result = jQuery(
                                '<div class="row">' +
                                    '<div class="col-md-4">' + r[0] + '</div>' +
                                    '<div class="col-md-8">' + r[1] + '</div>' +
                                '</div>'
                            );
                            return result;
                        }
                });
                }
                select2call();
                
                
                function ValidationEvent(){
                    var validation=true;
                    var lpatientname = document.getElementById("patientname").value;
                    var luser_id = document.getElementById("user_id").value;
                    var lpatient_id = document.getElementById("patient_id").value;
                    var lselectcrm = document.getElementById("selectcrm").value;
                    
                    if(lpatientname=='' || luser_id=='' || lpatient_id==''){
                        
                        $("#patient_name + span").addClass("is-invalid");
                        $('#patient_name').select2('focus');
                        validation=false;
                        //return false;
                    }
                    if(lselectcrm=='' || lselectcrm=='Select CRM'){
                        $("#selectcrm + span").addClass("is-invalid");
                        validation=false;
                        //return false;
                    }
                    $('.examnameselect').each(function(index, value) {
                          if(value){
                              if(value.value=='Select Exam' || value.value==''){
                                    //validation=false;
                              }
                          }
                    });
                    if(validation){
                        return true;
                    }
                    alert("Informe os campos obrigatório");
                    return false;
                    
                }
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/appointment/appointment_edit.blade.php ENDPATH**/ ?>