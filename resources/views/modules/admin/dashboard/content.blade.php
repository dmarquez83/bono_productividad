@extends('partials.home.index')
@section('name')
Dashboard
@endsection
@section('title')
dashboard & statistics
@endsection
@section('configure')
@include('partials.home.theme-panel')
@endsection
@section('sidebar')
<!-- BEGIN DASHBOARD-->
@include('modules.admin.dashboard.stats') <!-- cuadros que muestran numeros-->
<div class="row">
    <div class="col-md-6 col-sm-6">
        @include('modules.admin.dashboard.portlet')
    </div>
</div>
<!-- END DASHBOARD-->
@endsection
