@extends('layouts.master-layouts')
@section('title') {{ __('Complete Appointment list') }} @endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') Lista De Atendimentos @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Appointment @endslot
        @endcomponent
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{url('novo-atendimento')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                        <i class="bx bx-plus font-size-16 align-middle mr-2"></i> {{ __('NOVO ATENDIMENTO') }}
                                    </button>
                                </a>
                            </div>
                            <div class="col-lg-9 text-right">
                                <form action="">
                                    <div class="form-group d-inline-flex">
                                        <input class="form-control mr-1" type="text" placeholder="Id" name="search_id" value="{{$search_id}}" />
                                        <input class="form-control mr-1" type="text" placeholder="Nome do Paciente" name="search_name" value="{{$search}}" />
                                        <button type="submit" value="" class="btn btn-primary">Pesquisar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('today-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block">{{ __("Today's Appointment List") }}</span>
                                </a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('all-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block">{{ __("All") }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('pending-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="far fa-calendar"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Pending Appointment List') }}</span>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('upcoming-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-week"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Upcoming Appointment List') }}</span>
                                </a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('complete-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-check-square"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Complete Appointment List') }}</span>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('cancel-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-window-close"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Cancel Appointment List') }}</span>
                                </a>
                            </li>
                            -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="PendingAppointmentList" role="tabpanel">
                                <div class="table-responsive">
                                     <table class="table table-bordered dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>{{ __('ID') }}</th>
                                                <th>{{ __('Date') }}</th>
                                                <th>{{ __('Nome do Paciente') }}</th>
                                                <th>{{ __('Doctor Name') }}</th>
                                                <th>{{ __('Convênio') }}</th>
                                                <th>{{ __('Resultado') }}</th>
                                                <th>{{ __('Status Entrega') }}</th>
                                                <th>{{ __('Opções') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (session()->has('page_limit'))
                                                @php
                                                    $per_page = session()->get('page_limit');
                                                @endphp
                                            @else
                                                @php
                                                    $per_page = Config::get('app.page_limit');
                                                @endphp
                                            @endif
                                            @php
                                                $currentpage = $Complete_appointment->currentPage();
                                            @endphp
                                            @foreach ($Complete_appointment as $item)
                                                <tr>
                                                    <td> {{ $item->id  }} </td>
                                                     <td>{{ $item->appointment_date }}</td>
                                                     <td> {{ $item->patient_name}}</td>
                                                    <td> {{ $item->doctor  }} </td>
                                                    <td> {{ $item->patientinfo->patient_health}} </td>
                                                    <td> {{($item->status==='0')?"Pending":""}} {{($item->status==='1')?"Complete":""}}</td>
                                                     <td> </td>

                                                    <td>    
                                                           
                                                            
                                                            <a href="{{ route('appointment.exams',['id' => $item->id]) }}">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                    title="View Profile">
                                                                    <i class="mdi mdi-eye"></i>
                                                                </button>
                                                            </a>
                                                        <a href="{{ route('appointment.edit',['id' => $item->id]) }}">
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                                title="Update Profile">
                                                                <i class="mdi mdi-lead-pencil"></i>
                                                            </button>
                                                        </a>

                                                            <form action="{{ route('appointment.remove',['id' => $item->id]) }}" method="post" style="display: inline-block;">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0">
                                                                    <i class="mdi mdi-trash-can"></i>
                                                                </button>
                                                            </form>
                                                            
      
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                         Mostrando de {{ $Complete_appointment->firstItem() }} a
                                        {{ $Complete_appointment->lastItem() }} de
                                        {{ $Complete_appointment->total() }}
                                        entradas
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {{ $Complete_appointment->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/notification.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/appointment.js') }}"></script>
    @endsection
