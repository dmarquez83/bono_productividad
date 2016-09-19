@extends('layouts.app')
@section('content')
@include('partials.home.header')
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    @include('partials.home.sidebar_menu')
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    @yield('configure')
                    @include('partials.home.page_bar')
                    @include('partials.home.title')
                    @yield('sidebar')

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            @include('partials.home.quick_sidebar')
        </div>
        <!-- END CONTAINER -->
@endsection
