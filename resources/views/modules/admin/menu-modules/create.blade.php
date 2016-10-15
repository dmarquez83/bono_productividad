@extends('partials.home.app')
@section('name')
    Mantenimiento de Pantallas
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
                        <span class="caption-subject bold uppercase">Nuevo Mantenimiento de Pantallas</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.menu-modules.partials.messager')
                    {!! Form::open(['route' => 'admin.menu-modules.store', 'POST' ,'role' => 'form' ]) !!}
                    <div class="form-body">
                        @include('modules.admin.menu-modules.partials.fields')
                        <div class="text-center">
                            <button type="submit" class="btn blue">Crear Modulo</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
               {{-- @include('index')
                <div ui-view="filters"></div> --}}
            </div>
        </div>
    </div>
@endsection