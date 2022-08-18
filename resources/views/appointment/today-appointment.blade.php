@extends('layouts.master-layouts')
@section('title') {{ __('Today Appointment list') }} @endsection
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
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('today-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-day"></i></span>
                                    <span class="d-none d-sm-block">{{ __("Today's Appointment List") }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('pending-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="far fa-calendar"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Pending Appointment List') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('upcoming-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-calendar-week"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Upcoming Appointment List') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('complete-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-check-square"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Complete Appointment List') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('cancel-appointment') }}">
                                    <span class="d-block d-sm-none"><i class="fas fa-window-close"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Cancel Appointment List') }}</span>
                                </a>
                            </li>
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
                                                <th>{{ __('Doctor Name') }}</th>
                                                <th>{{ __('Patient Name') }}</th>
                                                <th>{{ __('Patient Contact No') }}</th>
                                                <th>{{ __('Patient Email') }}</th>
                                                
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Action') }}</th>
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
                                                $currentpage = $Today_appointment->currentPage();
                                            @endphp
                                            @foreach ($Today_appointment as $item)
                                                <tr>
                                                    <td>{{ $item->id  }}</td>
                                                    <td>{{ $item->appointment_date }}</td>
                                                    <td> {{ $item->doctor  }}</td>
                                                    <td> {{ $item->patient_name}}
                                                    </td>
                                                    <td> {{ $item->phone }} </td>
                                                    <td> {{ $item->email }} </td>
                                                    
                                                    <td>
                                                        @if ($item->status == 1)
                                                            <span class="badge  badge-success">Complete</span>
                                                        @elseif( $item->status == 2)
                                                            <span class="badge  badge-danger ">Cancel</span>
                                                        @elseif( $item->status == 0)
                                                            <span class="badge  badge-info ">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 0)
                                                            @if ($role == 'doctor' || $role == 'receptionist')
                                                                <button type="button" class="btn btn-success complete"
                                                                    data-id="{{ $item->id }}">Complete</button>
                                                            @endif
                                                            <button type="button" class="btn btn-danger cancel"
                                                                data-id="{{ $item->id }}">Cancel</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Mostrando de  {{ $Today_appointment->firstItem() }} a
                                        {{ $Today_appointment->lastItem() }} de {{ $Today_appointment->total() }}
                                        entradas
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {{ $Today_appointment->links() }}
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
