@extends('layouts.master-layouts')
@section('title') {{ __('Lista De Exames') }} @endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') Lista De Exame @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Exame @endslot
        @endcomponent
        <!-- end page title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="PendingAppointmentList" role="tabpanel">
                                <div class="table-responsive">

                                    <table class="table table-bordered dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Item') }}</th>
                                                <th>{{ __('Abreviação') }}</th>
                                                <th>{{ __('Nome do Exame') }}</th>
                                                <th>{{ __('Categoria') }}</th>
                                                <th>{{ __('Resultado') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $appoint= $appointment->toArray(); ?>
                                            @foreach ($appointment->exams as $item)
                                                <tr>
                                                    <td> </td>
                                                    <td>{{ $item->abbreviation }}</td>
                                                    <td>{{ $item->name }}</td>
                                                     <td>{{ $item->category }}</td>
                                                    <td><?php $result=$item->appointmentresults($appoint['id'])->get(); 
                                                             $fresult=$result->toArray(); 
                                                            if(isset($fresult[0])){
                                                                echo $fresult[0]['result'];
                                                            }
                                                    ?></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
