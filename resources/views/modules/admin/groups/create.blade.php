@extends('partials.home.app')
@section('name')
    Grupo
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
                        <i class="icon-user font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Nuevo Grupo</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.groups.partials.messager')
                    {!! Form::open(['route' => 'admin.groups.store', 'POST' ,'role' => 'form' ]) !!}
                    <div class="form-body">
                        @include('modules.admin.groups.partials.fields')
                        <div class="text-center">
                            <button type="submit" class="btn blue">Crear Grupo</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection