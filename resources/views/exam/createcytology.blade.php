@extends('layouts.master-layouts')
@section('title') {{ __('Appointment list') }} @endsection

@section('body')
    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
    
    <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') CRIAR CATEGORIA @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') CATEGORIA @endslot
        @endcomponent
        <!-- end page title -->
        
        <div class="">
           
            <div class="card">
                <div class="card-body">
                     <div class="row">
                            <div class="col-lg-12">
        
                                <a href="{{route('cytology')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                        <i class=" font-size-16 align-middle mr-2"></i> {{ __('Voltar a Lista de Categoria') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail_box">
                                <div class="detail_box">
                              
                                    <form action="{{ route('StoreCytology') }}" name="doctorform" class="" method="post">
                                        @csrf

                                        <table class="table sislac_table table_form">
                                            <thead>
                                            <tr>

                                                <th>Nome</th>



                                            </tr>
                                            </thead>
                                            <tbody>
                                            <th><input class="form-control" name="cytology_name" type="text" /></th>


                                            </tbody>
                                        </table>
                                        <div class="text-right"><button type="submit" class="btn btn-primary">Salvar</button></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection