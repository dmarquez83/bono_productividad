@extends('partials.home.profile')
@section('name')
    Perfil
@endsection
@section('title')
     de Usuario | Cuenta
@endsection
@section('configure')
@endsection
@section('sidebar')
       <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="">
                <div class="row">
                    <div class="col-md-12">

                        <!-- BEGIN PROFILE SIDEBAR -->
                        <div class="profile-sidebar">
                            <!-- PORTLET MAIN -->
                            <div class="portlet light profile-sidebar-portlet ">
                                <!-- SIDEBAR USERPIC -->
                                <div class="profile-userpic">
                                    <img src="{{ asset('assets/pages/media/profile/profile_user.jpg')}}" class="img-responsive" alt="" >
                                </div>
                                <!-- END SIDEBAR USERPIC -->
                                <!-- SIDEBAR USER TITLE -->
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name"> {{ $userProfile->name }} </div>
                                    <div class="profile-usertitle-job"> {{ $user->username }} </div>
                                </div>
                                <!-- END SIDEBAR USER TITLE -->

                                <!-- SIDEBAR MENU -->
                                <div class="profile-usermenu">
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="{{ route($userProfile->home_page) }}">
                                                <i class="icon-home"></i> Home </a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- END MENU -->
                            </div>
                            <!-- END PORTLET MAIN -->
                            <!-- PORTLET MAIN -->
                            <div class="portlet light ">
                                <div>
                                    <h4 class="profile-desc-title">Usuario de Windows</h4>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-windows"></i>{{  $userProfile->user_name_windows }}
                                    </div>
                                    <h4 class="profile-desc-title">Telefono</h4>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-phone"></i>{{  $userProfile->phone }}
                                    </div>
                                    <h4 class="profile-desc-title">Extension</h4>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-phone-square"></i>{{  $userProfile->extending }}
                                    </div>
                                    <h4 class="profile-desc-title">Email</h4>
                                    <div class="margin-top-20 profile-desc-link">
                                        <i class="fa fa-envelope"></i>{{  $user->email }}
                                    </div>
                                </div>
                            </div>
                            <!-- END PORTLET MAIN -->
                        </div>
                        <!-- END BEGIN PROFILE SIDEBAR -->
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="profile-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption caption-md">
                                                <i class="icon-globe theme-font hide"></i>
                                                <span class="caption-subject font-blue-madison bold uppercase">Cuenta de Perfil</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#fields_profile" data-toggle="tab">Informacion de Usuario </a>
                                                </li>
                                                <li>
                                                    <a href="#avatar" data-toggle="tab">Cambiar Avatar</a>
                                                </li>
                                                <li>
                                                    <a href="#password_chance" data-toggle="tab">Cambiar Contraseña</a>
                                                </li>
                                                <li>
                                                    <a href="#groups_profile" data-toggle="tab">Grupos</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="fields_profile">
                                                    @include('modules.admin.users.partials.fields_profile')
                                                </div>
                                                <!-- END PERSONAL INFO TAB -->
                                                <!-- CHANGE AVATAR TAB -->
                                                <div class="tab-pane" id="avatar">
                                                    <p> Dale Vida a tu Perfil, carga una imagen y disfruta. </p>
                                                    @include('modules.admin.users.partials.avatar')
                                                </div>
                                                <!-- END CHANGE AVATAR TAB -->
                                                <!-- CHANGE PASSWORD TAB -->
                                                <div class="tab-pane" id="password_chance">
                                                    @include('modules.admin.users.partials.password')
                                                </div>
                                                <!-- END CHANGE PASSWORD TAB -->
                                                <!-- PRIVACY SETTINGS TAB -->
                                                <div class="tab-pane" id="groups_profile">
                                                    @include('modules.admin.users.partials.groups')
                                                </div>
                                                <!-- END PRIVACY SETTINGS TAB -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
@endsection

@section('scripts_interno')

@endsection