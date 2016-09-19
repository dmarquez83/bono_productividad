@extends('partials.home.app')
@section('name')
    Usuarios
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
                        <span class="caption-subject bold uppercase">Nuevo Usuario</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.users.partials.messager')
                    {!! Form::open(['route' => 'admin.users.store', 'POST' ,'role' => 'form' ]) !!}
                    <div class="form-body">
                        @include('modules.admin.users.partials.fields')
                        <div class="text-center">
                            <button type="submit" class="btn blue">Crear Usuario</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection