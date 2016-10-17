@extends('partials.home.app')
@section('name')
    Derechos de Acceso
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
                        <span class="caption-subject bold uppercase">Nuevo Derecho de Accesos</span>
                    </div>

                </div>
                <div class="portlet-body form">
                    @include('modules.admin.menu-modules.partials.messager')
                    <div class="form-body">
                        @include('modules.admin.access-modules.partials.fields')

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts_interno')
    <script src="{{ asset('assets/js/app_access_modules.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/accessModulesCtrl.js') }}"></script>
    <!--<script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}"></script>-->
@endsection
@section('head_interno')
    {!! Html::style('assets/global/plugins/icheck/skins/all.css') !!}
@endsection