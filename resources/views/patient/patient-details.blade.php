@extends('layouts.master-layouts')
@section('title')
    @if ($patient )
        {{ __('Update Patient Details') }}
    @else
        {{ __('Add New Patient') }}
    @endif
@endsection
@section('body')
<script>

// 	function addHyphen (element) {
//     	let ele = document.getElementById(element.id);
//         ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.
       
//                 let finalVal = ele.match(/.{1,3}/g).join('-');
//         document.getElementById(element.id).value = finalVal;
     
    
//     }
    
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
    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">
                        @if ($patient && $patient_info && $medical_info)
                            {{ __('Update Patient Details') }}
                        @else
                            {{ __('ADICIONAR NOVO PACIENTE') }}
                        @endif
                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('patient') }}">{{ __('Patients') }}</a></li>
                            <li class="breadcrumb-item active">
                                @if ($patient)
                                    {{ __('Update Patient Details') }}
                                @else
                                    {{ __('ADICIONAR NOVO PACIENTE') }}
                                @endif
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                @if ($patient && $patient_info && $medical_info)
                    @if ($role == 'patient')
                        <a href="{{ url('/') }}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                <i
                                    class="bx bx-arrow-back font-size-16 align-middle mr-2"></i>{{ __('Back to Dashboard') }}
                            </button>
                        </a>
                    @else
                        <a href="{{ url('patient/' . $patient->id) }}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                <i
                                    class="bx bx-arrow-back font-size-16 align-middle mr-2"></i>{{ __('Back to Profile') }}
                            </button>
                        </a>
                    @endif
                @else
                    <a href="{{ url('patient') }}">
                        <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                            <i
                                class="bx bx-arrow-back font-size-16 align-middle mr-2"></i>{{ __('Voltar a lista de Pacientes') }}
                        </button>
                    </a>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form action="@if ($patient ) {{ url('patient/' . $patient->id) }} @else {{ route('patient.store') }} @endif" method="post" enctype="multipart/form-data">
                            @csrf
                            @if ($patient )
                                <input type="hidden" name="_method" value="PATCH" />
                            @endif


                        <!-- my code start here-->

                            <div class="row">

                                <div class="col-md-7">
                                    <blockquote>{{ __('Informações Básicas') }}</blockquote>

                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label class="control-label">{{ __('Nome do Paciente') }}<span
                                                        class="text-danger">*</span></label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="full_name" id=""
                                                   value="@if ($patient && $patient_info){{ $patient->full_name }}@elseif(old('full_name')){{ old('full_name') }}@endif"
                                                   placeholder="{{ __('Digite o nome do paciente') }}"
                                                   required
                                                   >
                                            {{--@error('full_name')--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                            {{--<strong>{{ $message }}</strong>--}}
                                            {{--</span>--}}
                                            {{--@enderror--}}
                                        </div>

                                        <div class="col-md-4">

                                            <label class="control-label">{{ __(' Sexo ') }}</label>
                                            <select class="form-control" name="user_sex" required>

                                                <option selected disabled>{{ __('Selecione') }} </option>
                                                <option value="Masculino" @if (($patient_info && $patient->user_sex == 'Masculino') || old('user_sex') == 'Masculino') selected @endif>{{ __('Masculino') }}</option>
                                                <option value="Feminino" @if (($patient_info && $patient->user_sex == 'Feminino') || old('user_sex') == 'Feminino') selected @endif>{{ __('Feminino') }}
                                                </option>

                                            </select>


                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{ __('Data Nascimento') }}<span
                                                        class="text-danger">*</span></label>
                                            <input type="date"
                                                   class="form-control @error('patient_dob') is-invalid @enderror"
                                                   name="patient_dob" id="" tabindex="1"
                                                   value="@if ($patient && $patient_info){{ $patient_info->patient_dob }}@elseif(old('patient_dob')){{ old('patient_dob') }}@endif"
                                                   placeholder="{{ __('') }}"
                                                   required
												   onchange="handler(event);"
												   
                                                   >

                                            {{--@error('patient_dob')--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}

                                        </div>



                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{ __(' Idade ') }}</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="patient_Age" id="" tabindex="1"
                                                   value="@if ($patient && $patient_info){{ $patient_info->patient_Age }}@elseif(old('patient_Age')){{ old('patient_Age') }}@endif"
                                                   placeholder="{{ __('Idade') }}">

                                        </div>

                                        <div class="col-md-2 form-group">
                                            <label class="control-label">{{ __(' RG ') }}</label>
                                            <input type="number"
                                                   class="form-control"
                                                   name="patient_rg" id="" tabindex="1"
                                                   value="@if ($patient && $patient_info){{ $patient_info->patient_rg }}@elseif(old('patient_rg')){{ old('patient_rg') }}@endif"
                                                  >

                                        </div>
										<div class="col-md-3 form-group">
                                            <label class="control-label">{{ __(' SUS ') }}</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="sus" id="" tabindex="1"
                                                   value="@if ($patient && $patient_info){{ $patient_info->sus }}@elseif(old('sus')){{ old('sus') }}@endif"
                                                  >

                                        </div>
										    
										<div class="col-md-3 form-group">
										
										   <label class="control-label">{{ __('CPF') }}</label>
                                            <input type="text"
                                                   class="form-control @error('patient_CPF') is-invalid @enderror"
                                                   name="patient_CPF" id="" tabindex="1"
                                                   value="@if ($patient && $patient_info){{ $patient_info->patient_CPF }}@elseif(old('patient_CPF')){{ old('patient_CPF') }}@endif"
                                                   placeholder="{{ __('Digite o nº do CPF') }}"
                                                  
                                                   >

                                            @error('doc_CPF')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										

                                        </div>
										

                                      
                                        <!--
                                        <div class="col-md-6 form-group">
                                            <label class="control-label">{{ __('Responsible') }}<span
                                                        class="text-danger">*</span></label>

                                            <input type="text" class="form-control"
                                                   name="patient_responsible"
                                                   value="@if ($patient && $patient_info){{ $patient_info->patient_responsible }}@elseif(old('patient_responsible')){{ old('patient_responsible') }}@endif"

                                                   placeholder="{{ __('') }}" />

                                        </div>
                                        -->
                                    

                                        <!--div class="col-md-6 form-group">
                                                <label class="control-label">{{ __('Password ') }}</label>
                                                <input type="password" class="form-control"
                                                       name="password"
                                                       value="@if ($patient && $patient_info){{ $patient->password }}@elseif(old('password')){{ old('password') }}@endif"
                                                       placeholder="{{ __('Enter your password') }}">

                                     </div-->



                                    </div>



                                </div>
                                    
                                <div class="col-md-5">
                                    <blockquote>{{ __('Endereço') }}</blockquote>
                                    <!--- id="cpefield"
                                                    onkeyup="addHyphen(this)"-->
                                    <div class="row">
                                        <div class="col-md-5 form-group">
                                            <label class="control-label">{{ __('CEP') }}</label>
                                            <input type="text"
         
                                                   class="form-control"
                                                   value="@if ($patient && $patient_info){{ $patient->zip_code }}@elseif(old('zip_code')){{ old('zip_code') }}@endif"
                                                   name="zip_code" 
                                                   >

                                        </div>
                                        <div class="col-md-7 form-group">
                                            <label class="control-label">{{ __('Rua/AV') }}</label>
                                            <input type="text"
                                                   class="form-control"
                                                   value="@if ($patient && $patient_info){{ $patient->user_address }}@elseif(old('user_address')){{ old('user_address') }}@endif"
                                                   name="user_address" id=""
                                                   placeholder="{{ __('Address') }}">
                                        </div>
                                    </div>
                                    <div class="row">

                                        

                                        <div class="col-md-6 form-group">
                                            <label class="control-label">{{ __('Telefone') }}</label>
                                            <input type="tel" class="form-control"
                                                   name="mobile" tabindex="4"
                                                   value="@if ($patient && $patient_info){{ $patient->mobile }}@elseif(old('mobile')){{ old('mobile') }}@endif"
                                                   placeholder="{{ __('Número de contato') }}" 
                                                   
                                                   >

                                        </div>
										  <div class="col-md-6 form-group">
                                         	
                                            <label class="control-label">{{ __('Cidade ') }}</label>
                                            <input type="text" class="form-control"
                                                   name="city"
                                                   value="@if ($patient && $patient_info){{ $patient->city }}@elseif(old('city')){{ old('city') }}@endif"
                                                   placeholder="{{ __('city') }}">

                                        </div>

                                    </div>
                                    <div class="row">

                                        


                                    </div>
                                </div>


                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-3 form-group">
                                            <label class="control-label">{{ __('Email ') }}<span
                                                        class="text-danger"></span></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                   name="email" id="email"
                                                   value="@if ($patient && $patient_info){{ $patient->email }}@elseif(old('email')){{ old('email') }}@endif"
                                                   placeholder="{{ __('Enter Email') }}"
                                                   autocomplete="off"
                                                   >
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Convênio') }}</label>

                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                           name="patient_health" value="@if ($patient && $patient_info){{ $patient_info->patient_health }}@elseif(old('patient_health')){{ old('patient_health') }}@endif"
                                           placeholder="{{ __('Convênio') }}">

                                </div>
                                <!---

                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Empresa') }}</label>

                                    <input type="text" class="form-control @error('patient_company') is-invalid @enderror"
                                           name="patient_company" value="@if ($patient && $patient_info){{ $patient_info->patient_company }}@elseif(old('patient_company')){{ old('patient_company') }}@endif"
                                           placeholder="{{ __('Empresa') }}">

                                </div>


                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Matrícula') }}</label>

                                    <input type="text" class="form-control @error('patient_enrollment') is-invalid @enderror"
                                           name="patient_enrollment" value="@if ($patient && $patient_info){{ $patient_info->patient_enrollment }}@elseif(old('patient_enrollment')){{ old('patient_enrollment') }}@endif"
                                           placeholder="{{ __('Matrícula') }}">

                                </div>

                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Plano') }}</label>

                                    <input type="text" class="form-control @error('patient_plan') is-invalid @enderror"
                                           name="patient_plan" value="@if ($patient && $patient_info){{ $patient_info->patient_plan }}@elseif(old('patient_plan')){{ old('patient_plan') }}@endif"
                                           placeholder="{{ __('Plano') }}">

                                </div>

                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Observação') }}</label>

                                    <input type="text" class="form-control @error('patient_observation') is-invalid @enderror"
                                           name="patient_observation" value="@if ($patient && $patient_info){{ $patient_info->patient_observation }}@elseif(old('patient_observation')){{ old('patient_observation') }}@endif"
                                           placeholder="{{ __('Obs') }}">

                                </div>

                                <div class="col-md-2 form-group">
                                    <label class="control-label">{{ __('Nome Social') }}</label>

                                    <input type="text" class="form-control @error('patient_social_name') is-invalid @enderror"
                                           name="patient_social_name" value="@if ($patient && $patient_info){{ $patient_info->patient_social_name }}@elseif(old('patient_social_name')){{ old('patient_social_name') }}@endif"
                                           placeholder="{{ __('Nome Social') }}">

                                </div>
                                -->

                            </div>


                            <!--my code end here-->


                            {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('First Name ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text"--}}
                                                {{--class="form-control @error('first_name') is-invalid @enderror"--}}
                                                {{--name="first_name" id="FirstName" tabindex="1"--}}
                                                {{--value="@if ($patient){{ old('first_name', $patient->first_name) }}@elseif(old('first_name')){{ old('first_name') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter First Name') }}">--}}
                                            {{--@error('first_name')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="form-group col-md-12">--}}
                                            {{--<label for="formmessage">{{ __('Gender ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<select class="form-control @error('gender') is-invalid @enderror" tabindex="3"--}}
                                                {{--name="gender">--}}
                                                {{--<option selected disabled>{{ __('-- Select Gender --') }}</option>--}}
                                                {{--<option value="Male" @if (($patient_info && $patient_info->gender == 'Male') || old('gender') == 'Male') selected @endif>{{ __('Male') }}</option>--}}
                                                {{--<option value="Female" @if (($patient_info && $patient_info->gender == 'Female') || old('gender') == 'Female') selected @endif>{{ __('Female') }}--}}
                                                {{--</option>--}}
                                                {{--<option value="Other" @if (($patient_info && $patient_info->gender == 'Other') || old('gender') == 'Other') selected @endif>{{ __('Other') }}</option>--}}
                                            {{--</select>--}}
                                            {{--@error('gender')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Email ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="email" class="form-control @error('email') is-invalid @enderror"--}}
                                                {{--tabindex="5" name="email" id="patientEmail" value="@if ($patient){{ old('email', $patient->email) }}@elseif(old('email')){{ old('email') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Email') }}">--}}
                                            {{--@error('email')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Current Address ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<textarea id="formmessage" name="address" tabindex="7"--}}
                                                {{--class="form-control @error('address') is-invalid @enderror" rows="3"--}}
                                                {{--placeholder="{{ __('Enter Current Address') }}">@if ($patient && $patient_info ){{ $patient_info->address }}@elseif(old('address')){{ old('address') }}@endif</textarea>--}}
                                            {{--@error('address')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Last Name ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('last_name') is-invalid @enderror"--}}
                                                {{--tabindex="2" name="last_name" id="LastName" value="@if ($patient){{ old('last_name', $patient->last_name) }}@elseif(old('last_name')){{ old('last_name') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Last Name') }}">--}}
                                            {{--@error('last_name')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Age ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('age') is-invalid @enderror"--}}
                                                {{--tabindex="4" name="age" id="patientAge" value="@if ($patient && $patient_info ){{ old('age', $patient_info->age) }}@elseif(old('age')){{ old('age') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Age') }}">--}}
                                            {{--@error('age')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Contact Number ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="tel" class="form-control @error('mobile') is-invalid @enderror"--}}
                                                {{--tabindex="6" name="mobile" id="patientMobile"--}}
                                                {{--value="@if ($patient ){{ old('mobile', $patient->mobile) }}@elseif(old('mobile')){{ old('mobile') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Contact Number') }}">--}}
                                            {{--@error('mobile')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Profile Photo ') }}</label>--}}
                                            {{--<img class="@error('profile_photo') is-invalid @enderror "--}}
                                                {{--src="@if ($patient && $patient->profile_photo != null){{ URL::asset('storage/images/users/' . $patient->profile_photo) }}@else{{ URL::asset('assets/images/users/noImage.png') }}@endif" onclick="triggerClick()"--}}
                                                {{--data-toggle="tooltip" data-placement="top"--}}
                                                {{--title="Click to Upload Profile Photo" id="profile_display" />--}}
                                            {{--<input type="file"--}}
                                                {{--class="form-control @error('profile_photo') is-invalid @enderror"--}}
                                                {{--tabindex="8" name="profile_photo" id="profile_photo" style="display:none;"--}}
                                                {{--onchange="displayProfile(this)">--}}
                                            {{--@error('profile_photo')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<blockquote>{{ __('Medical Information') }}</blockquote>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Height ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('height') is-invalid @enderror"--}}
                                                {{--name="height" tabindex="9" value="@if ($patient && $patient_info && $medical_info){{ old('height', $medical_info->height) }}@elseif(old('height')){{ old('height') }}@endif"--}}
                                                {{--id="patientHeight" placeholder="{{ __('Enter Height') }}">--}}
                                            {{--@error('height')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="form-group col-md-12">--}}
                                            {{--<label for="formmessage">{{ __('Blood Group ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<select class="form-control @error('b_group') is-invalid @enderror"--}}
                                                {{--tabindex="11" name="b_group">--}}
                                                {{--<option selected disabled>{{ __('-- Select Blood Group --') }}</option>--}}
                                                {{--<option value="A+" @if (($medical_info && $medical_info->b_group == 'A+') || old('b_group') == 'A+') selected @endif>{{ __('A+') }}</option>--}}
                                                {{--<option value="A-" @if (($medical_info && $medical_info->b_group == 'A-') || old('b_group') == 'A-') selected @endif>{{ __('A-') }}</option>--}}
                                                {{--<option value="B+" @if (($medical_info && $medical_info->b_group == 'B+') || old('b_group') == 'B+') selected @endif>{{ __('B+') }}</option>--}}
                                                {{--<option value="B-" @if (($medical_info && $medical_info->b_group == 'B-') || old('b_group') == 'B-') selected @endif>{{ __('B-') }}</option>--}}
                                                {{--<option value="O+" @if (($medical_info && $medical_info->b_group == 'O+') || old('b_group') == 'O+') selected @endif>{{ __('O+') }}</option>--}}
                                                {{--<option value="O-" @if (($medical_info && $medical_info->b_group == 'O-') || old('b_group') == 'O-') selected @endif>{{ __('O-') }}</option>--}}
                                                {{--<option value="AB+" @if (($medical_info && $medical_info->b_group == 'AB+') || old('b_group') == 'AB+') selected @endif>{{ __('AB+') }}</option>--}}
                                                {{--<option value="AB-" @if (($medical_info && $medical_info->b_group == 'AB-') || old('b_group') == 'AB-') selected @endif>{{ __('AB-') }}</option>--}}
                                            {{--</select>--}}
                                            {{--@error('b_group')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Pulse ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('pulse') is-invalid @enderror"--}}
                                                {{--tabindex="13" name="pulse" value="@if ($patient && $patient_info && $medical_info){{ old('pulse', $medical_info->pulse) }}@elseif(old('pulse')){{ old('pulse') }}@endif"--}}
                                                {{--id="patientPulse" placeholder="{{ __('Enter Pulse') }}">--}}
                                            {{--@error('pulse')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Allergy ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('allergy') is-invalid @enderror"--}}
                                                {{--tabindex="15" name="allergy" id="patientAllergy"--}}
                                                {{--value="@if ($patient && $patient_info && $medical_info){{ old('allergy', $medical_info->allergy) }}@elseif(old('allergy')){{ old('allergy') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Allergy Symptoms') }}">--}}
                                            {{--@error('allergy')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Weight ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="text" class="form-control @error('weight') is-invalid @enderror"--}}
                                                {{--tabindex="10" name="weight" id="patientWeight"--}}
                                                {{--value="@if ($patient && $patient_info && $medical_info){{ old('weight', $medical_info->weight) }}@elseif(old('weight')){{ old('weight') }}@endif" placeholder="{{ __('Enter Weight') }}">--}}
                                            {{--@error('weight')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Blood Pressure ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="tel"--}}
                                                {{--class="form-control @error('b_pressure') is-invalid @enderror"--}}
                                                {{--tabindex="12" name="b_pressure" id="blood_pressure"--}}
                                                {{--value="@if ($patient && $patient_info && $medical_info){{ old('b_pressure', $medical_info->b_pressure) }}@elseif(old('b_pressure')){{ old('b_pressure') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Blood Pressure') }}">--}}
                                            {{--@error('b_pressure')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Respiration ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<input type="tel"--}}
                                                {{--class="form-control @error('respiration') is-invalid @enderror"--}}
                                                {{--tabindex="14" name="respiration" id="patientRespiration"--}}
                                                {{--value="@if ($patient && $patient_info && $medical_info){{ old('respiration', $medical_info->respiration) }}@elseif(old('respiration')){{ old('respiration') }}@endif"--}}
                                                {{--placeholder="{{ __('Enter Respiration') }}">--}}
                                            {{--@error('respiration')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-12 form-group">--}}
                                            {{--<label class="control-label">{{ __('Diet ') }}<span--}}
                                                    {{--class="text-danger">*</span></label>--}}
                                            {{--<select class="form-control @error('diet') is-invalid @enderror" tabindex="16"--}}
                                                {{--name="diet">--}}
                                                {{--<option selected disabled>{{ __('-- Select Diet --') }}</option>--}}
                                                {{--<option value="Vegetarian" @if (($medical_info && $medical_info->diet == 'Vegetarian') || old('diet') == 'Vegetarian') selected @endif>--}}
                                                    {{--{{ __('Vegetarian') }}</option>--}}
                                                {{--<option value="Non-vegetarian" @if (($medical_info && $medical_info->diet == 'Non-vegetarian') || old('diet') == 'Non-vegetarian') selected @endif>--}}
                                                    {{--{{ __('Non-vegetarian') }}</option>--}}
                                                {{--<option value="Vegan" @if (($medical_info && $medical_info->diet == 'Vegan') || old('diet') == 'Vegan') selected @endif>{{ __('Vegan') }}--}}
                                                {{--</option>--}}
                                            {{--</select>--}}
                                            {{--@error('diet')--}}
                                                {{--<span class="invalid-feedback" role="alert">--}}
                                                    {{--<strong>{{ $message }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@enderror--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        @if ($patient && $patient_info)
                                            {{ __('Salvar') }}
                                        @else
                                            {{ __('Salvar') }}
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
    @section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
          $("input[name='mobile']").inputmask({"mask":"(83) 9 9999 - 9999"});
          $("input[name='patient_CPF']").inputmask({"mask":"999.999.999-99"});
          $("input[name='sus']").inputmask({"mask":"999 9999 9999 9999"});
          $("input[name='zip_code']").inputmask({"mask":"99999 - 999"});
        });
    </script>
        <script>
            // Profile Photo
            function triggerClick() {
                document.querySelector('#profile_photo').click();
            }
		function handler(e){
			var date = e.target.value;
		    var today = new Date();
			var birthDate = new Date(date);
			var age = today.getFullYear() - birthDate.getFullYear();
			var m = today.getMonth() - birthDate.getMonth();
			if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
				age--;
			}
           $('.age').val(age)
}

$('body').on('keyup paste', '#email', function (e) {
	console.log('yesssss')
	console.log($(this).val().length)
		if($(this).val().length>=15){
			 var val=$(this).val();
			 $(this).val(val+'@sislac.com.br')
			e.preventDefault();
			return false;
		}
		
	})

            function displayProfile(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.querySelector('#profile_display').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }
        </script>
    @endsection
