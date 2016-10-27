@extends('partials.home.app')
@section('name')
    Empresa
@endsection
@section('title')
    : Registro
@endsection
@section('configure')
@endsection
@section('sidebar')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-layers font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Nuevo Modulo</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.modules.partials.messager')
                    {!! Form::open(['route' => 'admin.modules.store', 'POST' ,'role' => 'form' ]) !!}
                    <div class="form-body">
                        @include('modules.admin.modules.partials.fields')
                        @include('modules.admin.modules.partials.insert')
                    </div>
                    {!! Form::close() !!}
                </div>
               {{-- @include('index')
                <div ui-view="filters"></div> --}}
            </div>
        </div>
    </div>
@endsection