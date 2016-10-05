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
                        <i class="icon-briefcase font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Nueva Empresa</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.companies.partials.messager')
                    {!! Form::open(['route' => 'admin.companies.store', 'POST' ,'role' => 'form' ]) !!}
                    <div class="form-body">
                        @include('modules.admin.companies.partials.fields')
                        <div class="text-center">
                            <button type="submit" class="btn blue">Crear Empresa</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                @include('index')
                <div ui-view="filters"></div>
            </div>
        </div>
    </div>
@endsection