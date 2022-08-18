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
<style>
    .topheader {
        box-sizing: border-box;
        position: absolute;
        width: 1071px;
        height: 66px;
        left: 22px;
        top: 21px;
        background: #F8F9FA;
        border: 1.5px solid #EFF2F7;
        border-radius: 2px;
    }
    .whole-content {
        position: absolute;
        width: 1119px;
        height: 1026px;
        left: 150px;
        top: 197px;
        /* White Color */
        background: #FFFFFF;
        box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.03);
        border-radius: 2px;
    }
</style>
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
                <i class="mdi mdi-arrow-left  font-size-16 align-middle mr-2"></i> {{ __('Back Appointment List') }}
            </a>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row topheader">
                        <div class="col-2 page-title-box"><h4>{{ __('Id Appointment') }}</h4></div>
                        <div class="col-4 page-title-box"><h4>{{ __('Name') }}</h4></div>
                        <div class="col-2 page-title-box"><h4>{{ __('Age') }}</h4></div>
                        <div class="col-2 page-title-box"><h4>{{ __('Date') }}</h4></div>
                        <div class="col-2 page-title-box"><h4>{{ __('Unit') }}</h4></div>
                    </div>
                    

                    <!--                    <form action="{{ url('appointment-store') }}" id="" method="POST">
                                            @csrf 
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-primary" style="width: 100px;">
                                                        {{ __('Cancle') }}
                                                    </button>
                                                    <button type="submit" class="btn btn-primary" style="width: 100px;">
                                                        {{ __('Save') }}
                                                    </button>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </form>-->
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
    </script>
    <!-- Init js-->
    <script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/appointment.js') }}"></script>
    <script>
    </script>
    @endsection
