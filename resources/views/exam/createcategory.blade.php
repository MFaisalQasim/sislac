@extends('layouts.master-layouts')
@section('title') {{ __('Appointment list') }} @endsection

@section('body')
    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">
                            CRIAR CATEGORIA
                        </h4>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                     <a href="{{route('category')}}">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class=" font-size-16 align-middle mr-2"></i> {{ __('Voltar a Lista de Categoria') }}
                                </button>
                    </a>
                </div> <!-- end col -->
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="detail_box">
                                <div class="detail_box">
                                    <h4>ADICIONAR NOVA CATEGORIA</h4>
                                    <form action="{{ route('StoreCategory') }}" name="doctorform" class="" method="post">
                                        @csrf

                                        <table class="table sislac_table table_form">
                                            <thead>
                                            <tr>
                                                
                                                <th>Nome</th>
                                                <th>abreviação</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <th><input class="form-control" name="category_name" type="text" /></th>
                                            <th><input class="form-control" name="abbreviation" type="text" /></th>
                                            
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