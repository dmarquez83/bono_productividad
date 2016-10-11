@extends('partials.home.app')
@section('name')
    Grupo
@endsection
@section('title')
    : Asignar Usuarios
@endsection
@section('configure')
@endsection
@section('sidebar')
    @include('modules.admin.groups.user_group')
@endsection
@section('scripts_interno')
    <script src="{{ asset('assets/js/app_group.js') }}"></script>
    <script src="{{ asset('assets/js/controllers/groupUserCtrl.js') }}"></script>
@endsection