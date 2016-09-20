@extends('partials.home.app')
@section('name')
    Grupo
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
                        <i class="icon-users font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Editar Grupo: {{ $group->name }}</span>
                    </div>
                    @include('modules.admin.groups.partials.action')
                </div>
                <div class="portlet-body form">
                    @include('modules.admin.groups.partials.messager')
                    {!! Form::model($group, ['route' => ['admin.groups.update', $group], 'method' => 'PUT']) !!}
                    <div class="form-body">
                        @include('modules.admin.groups.partials.fields')
                        <div class="col-xs-5 col-sm-6 text-center">
                            <button type="submit" class="btn blue">Actualizar Grupo</button>
                        </div>
                    {!! Form::close() !!}
                        <div class="col-xs-5 col-sm-6 text-center">
                            @include('modules.admin.groups.partials.delete')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection