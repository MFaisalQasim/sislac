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
                            LISTA DE  Exam
                        </h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active"> LISTA DE  Exam</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">
            
                            <a href="{{route('add_exam')}}">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> {{ __('Novo Exame') }}
                                </button>
                            </a>
            
                        </div>
            
                        <div class="col-lg-9 text-right">
            
                            <form action="">
                                <div class="form-group d-inline-flex">
                                    <input class="form-control mr-1" type="text" placeholder="Pesquisar Exame" name="search_name"  />
                                    <button type="submit" value="" class="btn btn-primary">Pesquisar</button>
                                </div>
                            </form>
                        </div>
            
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="detail_box">
                                <table class="table sislac_table table_form">
                                    <thead>
                                    <tr>                            
                                        <th>Nome do Exame</th>
                                        <th>Abreviação</th>
                                        <th>Categoria</th>
                                        <th>Prazo</th>
                                        <th>Destino</th>
                                        <th>G. Rótulos</th>                            
                                        <th>Qtd. Etiquetas</th>
                                        <th>Kit</th>                            
                                        <th>Preço R$</th>              
            
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($exam as $key => $item)
            
                                    <tr>
                                        
                                        <td> {{ $item->name }} </td>
                                        <td> {{ $item->abbreviation }} </td>
                                        <td> {{ $item->category }} </td>
                                        <td> {{ $item->deadline }} </td>
                                        <td> {{ $item->destiny }} </td>
                                        <td> {{ $item->label_group }} </td>
                                        <td> {{ $item->quantity_label }} </td>
                                        <td> {{ $item->exam_kit }} </td>
                                        <td> {{ $item->exam_price }} </td>
                                        
                                        
                                        <td>
                                            <a href="{{ url('exam/' . $item->id . '/edit') }}">
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0 updateExamProfile"
                                                        title="Update Profile">
                                                    <i class="mdi mdi-lead-pencil"></i>
                                                </button>
                                            </a>
                                            <a href="{{ url('exam-delete/'. $item->id) }}">
                                                <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                        title="Deactivate Profile"
                                                        id="delete-doctor">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </a>
                                        </td>
            
                                    </tr>
            
                                    @endforeach
            
                                    </tbody>
                                </table>
                               <div class="row">
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-start">
                                            Mostrando de {{ $exam->firstItem() }} a {{ $exam->lastItem() }} de
                                            {{ $exam->total() }} entradas
                                        </div>
                                     </div>
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-end">
                                            {{ $exam->links() }}
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection

