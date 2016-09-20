@extends('partials.home.app')
@section('name')
    Empresa
@endsection
@section('title')
    : Editar
@endsection
@section('configure')
@endsection
@section('sidebar')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-red-sunglo">
                        <i class="icon-user font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Editar Empresa: {{ $company->name }}</span>
                    </div>
                    @include('modules.admin.companies.partials.action')
                </div>
                <div class="portlet-body form">
                    @include('modules.admin.companies.partials.messager')
                    {!! Form::model($company, ['route' => ['admin.companies.update', $company], 'method' => 'PUT']) !!}
                    <div class="form-body">
                        @include('modules.admin.companies.partials.fields')
                        <div class="col-xs-5 col-sm-6 text-center">
                            <button type="submit" class="btn blue">Actualizar Empresa</button>
                        </div>
                    {!! Form::close() !!}
                        <div class="col-xs-5 col-sm-6 text-center">
                            @include('modules.admin.companies.partials.delete')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection