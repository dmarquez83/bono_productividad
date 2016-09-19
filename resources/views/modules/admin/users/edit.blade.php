@extends('partials.home.app')
@section('name')
    Usuarios
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
                        <span class="caption-subject bold uppercase">Editar Usuario: {{ $user->FullName }}</span>
                    </div>
                    @include('modules.admin.users.partials.action')
                </div>
                <div class="portlet-body form">
                    @include('modules.admin.users.partials.messager')
                    {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
                    <div class="form-body">
                        @include('modules.admin.users.partials.fields')
                        <div class="col-xs-5 col-sm-6 text-center">
                            <button type="submit" class="btn blue">Actualizar Usuario</button>
                        </div>
                    {!! Form::close() !!}
                        <div class="col-xs-5 col-sm-6 text-center">
                            @include('modules.admin.users.partials.delete')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection