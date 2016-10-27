@extends('partials.home.app')
@section('name')
    Modulos
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
                        <i class="icon-briefcase font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Editar Modulos: {{ $module->name }}</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    @include('modules.admin.modules.partials.messager')
                    {!! Form::model($module, ['route' => ['admin.modules.update', $module], 'method' => 'PUT']) !!}
                    <div class="form-body">
                        @include('modules.admin.modules.partials.fields_edit')
                        @include('modules.admin.modules.partials.insert')
                    {!! Form::close() !!}
                    {!! Form::open(['route' => ['admin.modules.destroy', $module], 'method' => 'DELETE']) !!}
                        @include('modules.admin.modules.partials.remove')
                    {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection