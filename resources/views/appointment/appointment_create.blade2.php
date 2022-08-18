@extends('layouts.master-layouts')
@section('title') {{ __('Book Appointment') }} @endsection
@section('css')
    <!-- Calender -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('body')
    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') New Appointment @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Booked Appointment @endslot
        @endcomponent
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <a href="{{ url('/appointment/create') }}"
                    class="btn btn-primary text-white waves-effect waves-light mb-4">
                    <i class="mdi mdi-arrow-left  font-size-16 align-middle mr-2"></i> {{ __('Back') }}
                </a>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('appointment-store') }}" id="" method="POST">
                            @csrf
                            <div class="row" style="background: #f8f8fb;padding: 10px 5px;">
                                <div class="col-md-2">
                                    <p><b>Id Appointment</b><br>
                                    ---</p>
                                </div>
                                <div class="col-md-2">
                                    <p><b>Registration Date</b><br>
                                     {{\Carbon\Carbon::now()->format('d/m/Y')}}</p>
                                </div>
                                <div class="col-md-2">
                                    <p><b>Password</b><br>
                                    <span id="showPassword"> <span></p>
                                    <input name="row_password" id="user_pass" type="hidden">
                                </div>
                                <div class="col-md-3">
                                    <p><b>User</b><br>
                                    {{$user->first_name}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p><b>Unit</b><br>
                                        Matriz</p>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <input type="hidden" name="patient_id" id="patient_id" value="" />
                                                <input type="hidden" name="user_id" id="user_id" value="" />
                                                <label class="control-label">{{ __('Patient Name') }}<span
                                                        class="text-danger">*</span></label>
                                                <select class="js-data-example-ajax form-control"  id="patient_name" name="patient_name">

                                                </select>
                                                <!--<select class="form-control select2 @error('appointment_for') is-invalid @enderror"
                                                    name="appointment_for" id="patient">
                                                    <option disabled selected>{{ __('Select') }}</option>
                                                    @foreach ($patients as $patient)
                                                        <option value="{{ $patient->id }}">{{ $patient->first_name }}
                                                            {{ $patient->last_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('appointment_for')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror-->
                                            </div>
                                            <div class="col-md-1 form-group">
                                                    <label class="control-label">{{__('Sex')}}<span
                                                        class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-control" name="gender" id="gender">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Birth date')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="date" class="form-control" name="birthdate" id="birthdate" required />
                                            </div>
                                            <div class="col-md-1 form-group">
                                                <label class="control-label">{{__('Age')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" name="age" id="age"  required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('CPF')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="cpf" required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Responsible')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="responsible" required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Zip Code')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="number" class="form-control" name="zip_code" id="zip_code"  required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('City')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="city" id="city" required />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                    <label class="control-label">{{__('Address')}}<span
                                                        class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="address" id="address" required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                    <label class="control-label">{{__('Phone')}}<span
                                                        class="text-danger">*</span>
                                                    </label>
                                                    <input type="phone" class="form-control" name="phone" id="phone" required />
                                            </div>
                                            
                                            <div class="col-md-2 form-group">
                                                    <label class="control-label">{{__('Email')}}<span
                                                        class="text-danger">*</span>
                                                    </label>
                                                    <input type="email" class="form-control" name="email" id="email" required />
                                            </div>
                                            <!--
                                            <div class="col-md-3 form-group">
                                                <label class="control-label">{{__('RG')}}<span
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
                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{__('CRM')}}<span
                                                 class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" name="crm" required onchange="selectdoctor(this.value)">
                                                <option>Please select</option>
                                                @foreach($doctors as $doc)
                                                    <option value="{{$doc->id}}">{{$doc->first_name.' '.$doc->last_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" class="form-control" name="crm1"  />
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label class="control-label">{{__('Requester/Doctor')}}<span
                                                 class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="doctor_name" name="doctor" required />
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{__('Code')}}<span
                                                 class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="code" required />
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{__('Health Insurance')}}<span
                                                 class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="insurance" required />
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{__('Company')}}<span
                                                 class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="company" required />
                                        </div>
                            </div>
                            <hr/>
                            <div class="table-resposive">
                                <table class="table table-bordered" id="serving">
                                    <thead class="">
                                        <tr>
                                            <th>Item</th>
                                            <th>Abbreviation</th>
                                            <th>Exam Name</th>
                                            <th>Code AMB </th>
                                            <th>Collection Date</th>
                                            <th>Price (R$)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="row-{{$row=1}}">
                                            <td width="250">
                                                <input type="hidden" name="exam[1][name]" class="examname" />
                                                <select  name="exam[1][id]" class="form-control examnameselect"  onchange="addexam({{$row=1}})">
                                                    <option value="0">Please Select Exam</option>
                                                    @foreach($examlist as $exam)
                                                    <option value="{{$exam->id}}">{{$exam->abbreviation}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="abbreviation"></td>
                                            <td class="examdesc"></td>
                                            <td class="examambcode"></td>
                                            <td class="examdate"></td>
                                            <td>
                                                <input type="text" name="exam[1][price]" class="price" value="" readonly/>
                                            </td>
                                        </td>
                                    </tbody>
                                </table>
                                <button type="button" onclick="addnewrow()"class="btn btn-primary text-white waves-effect waves-light mb-4 rounded">+</button>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    
                                    <div class="row">
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Delivery date')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="date" class="form-control" name="delivery_date" required />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">{{__('Hour')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="time" class="form-control" name="hour" required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Fast')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="fast" required />
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="control-label">{{__('Dum')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="dum" required />
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox"  name="urgencia" value="1" checked>
                                                <label class="form-check-label">Urgency</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="send_email" value="1" checked>
                                                <label class="form-check-label">send email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                              <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="send_whatsapp" value="1" checked>
                                                <label class="form-check-label">send whatsapp</label>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="control-label">{{__('Diagnosis')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="diagnosis" required />
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label">{{__('Medicines')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="medicines" required />
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label">{{__('Comments')}}<span
                                                    class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="comments" required />
                                            </div>
   
                                    </div>
                                </div>
                                <div class="col-md-4 table-responsive">
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
                                                    <td><b>DISCOUNT (-)</b></td>
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
                                                    <td><b>Entrance</b></td>
                                                    <td class="text-right"><input id="entry_amt" name="entrance"  type="text" value="0.00" onchange="countotal()"></td>
                                                </tr>
                                                <tr>
                                                    <td><b style="color:red;">Balance Remaining</b></td>
                                                    <td class="text-right" id="balanace">R$ 0.00</td>
                                                </tr>

                                        </tbody>
                                    </table>
                                    <div class="action_btn">
                                        <button type="reset" style="width:100px;border: 1px solid #b9b5b5;" class="btn btn-default">
                                            {{ __('Cancel') }}
                                        </button>
                                        <button type="submit" style="width:100px" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('script')
        <!-- Calender Js-->
        <script src="{{ URL::asset('assets/libs/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/moment/moment.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
        <!-- Get App url in Javascript file -->
        <script type="text/javascript">
            var aplist_url ="{{ url('appointmentList') }}";
        </script>
        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/appointment.js') }}"></script>


        <script>
            function selectdoctor(doc){
                console.log(doc);
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });
                jQuery.ajax({
                  url: "{{ url('/getdoctor/') }}",
                  method: 'get',
                  data: {
                     id: doc,
                  },
                  success: function(result){
                     console.log(result.data);
                     jQuery('#doctor_name').val(result.data.first_name+' '+result.data.last_name);
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
                  url: "{{ url('/gealltexam') }}",
                  method: 'get',
                  success: function(result){
                     //console.log(result);
                     let select="<select name='exam["+tablerow+"][id]' class='examnameselect form-control' onchange='addexam("+tablerow+")'>";
                     select +="<option value='0'>Please Select Exam</option>";
                     $.each(result.data, function(index, value) {
                        select +="<option value='"+value.id+"'>"+value.abbreviation+"</option>";
                     });
                     select +="</select>";

                    html  = '<tr id="row-'+ tablerow +'">';
                    html += '<td td width="250"><input type="hidden" name="exam['+tablerow+'][name]" class="examname" />'+select+'</td>';
                    html += '<td class="abbreviation"></td>';
                    html += '<td class="examdesc"></td>';
                    html += '<td class="examambcode"></td>';
                    html += '<td class="examdate"></td>';
                    html += '<td><input type="text" name="exam['+tablerow+'][price]" class="price"  readonly></td>';
                    html += '</tr>';
                     $('#serving > tbody').append(html);
                  }});

                  tablerow ++;
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
                  url: "{{ url('/getexambyid') }}",
                  method: 'get',
                  data: {
                     id: id,
                  },
                  success: function(result){
                     console.log(result);
                     jQuery('#row-'+rowid+' .abbreviation').text(result.data[0].abbreviation);
                     jQuery('#row-'+rowid+' .examname').val(result.data[0].name);
                     jQuery('#row-'+rowid+' .examdesc').text(result.data[0].name);
                     jQuery('#row-'+rowid+' .examambcode').text(result.data[0].id);
                     jQuery('#row-'+rowid+' .price').val(result.data[0].exam_price);
                     countotal();
                  }});
            }
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
            $('#patient_name').select2({
                ajax: {
                    url: '{{route('getpatientlist')}}',
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

                $('#patient_name').on('change', function() {
                    var text = $("#patient_name option:selected").text();
                    var id = $("#patient_name option:selected").val();
                     console.log(id)
                     //ajax to update form
                     jQuery.ajax({
                        url: "{{ url('/getpatient')}}/"+id,
                        method: 'get',
                        success: function(result){
                            console.log(result);
                            jQuery('#patient_id').val(result.patient.id);
                            jQuery('#user_id').val(result.id);
                            jQuery('#gender').val(result.patient.gender);
                            //jQuery('#birthdate').val(result.patient.gender);
                            jQuery('#age').val(result.patient.age);
                            jQuery('#address').val(result.patient.address);

                            jQuery('#email').val(result.email);
                            jQuery('#phone').val(result.mobile);
        
                        }
                     });
                })


        </script>
    @endsection
