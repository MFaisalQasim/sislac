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
                      {{ __('LISTA DE Categoria') }}
                    </h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Dashboard') }}</a></li>
                            <li class="breadcrumb-item active">
                                {{ __('LISTA DE Categoria') }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3">
        
                            <a href="{{route('CreateCategory')}}">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> {{ __('Nova Categoria') }}
                                </button>
                            </a>
        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="detail_box">
                            <table class="table sislac_table table_form">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Abreviação</th>
                                    <th>Opções</th>

                                </tr>
                                </thead>
                                <tbody>

                                    @foreach ($category as $key => $item)
                                        <tr>
                                            <td> {{ $item->name }}</td>
                                            <td> {{ $item->abbreviation }}</td>
                                            <td>
                                                <a href="{{route('EditCategory',['id'=>$item->id])}}">
                                                    <button type="button"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                            title="Update Profile">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('DeleteCategory',['id'=>$item->id])}}" method="POST" class="d-inline">
                                                    <!--@csrf   
                                                    @method('DELETE')-->
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>

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
@endsection