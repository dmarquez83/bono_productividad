@extends('partials.home.app')
@section('name')
    Mantenimiento de Pantallas
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
                        <i class="icon-layers font-red-sunglo"></i>
                        <span class="caption-subject bold uppercase">Editar Mantenimiento de Pantallas: {{ $menu_module->name }}</span>
                    </div>
                    @include('modules.admin.menu-modules.partials.action')
                </div>
                <div class="portlet-body form">
                    @include('modules.admin.menu-modules.partials.messager')
                    {!! Form::model($menu_module, ['route' => ['admin.menu-modules.update', $menu_module], 'method' => 'PUT']) !!}
                    <div class="form-body">
                        @include('modules.admin.menu-modules.partials.fields')
                        <div class="col-xs-5 col-sm-6 text-center">
                            <button type="submit" class="btn blue">Actualizar Mantenimiento de Pantallas</button>
                        </div>
                        {!! Form::close() !!}
                        <div class="col-xs-5 col-sm-6 text-center">
                            @include('modules.admin.menu-modules.partials.delete')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection