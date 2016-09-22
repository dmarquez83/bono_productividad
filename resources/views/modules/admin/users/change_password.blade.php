@extends('partials.home.app')
@section('name')
    Usuarios
@endsection
@section('title')
    : Cambio de Contraseña
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
                        <span class="caption-subject bold uppercase">Cambio de Contraseña</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.users.partials.messager')
                    @include('modules.admin.users.partials.password')

                </div>
            </div>
        </div>
    </div>
@endsection