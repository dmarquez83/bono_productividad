<!-- PORTLET MAIN -->
<div class="portlet light profile-sidebar-portlet ">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
        <img src="{{ asset('img/profile/'.$userProfile->avatar)}}" class="img-responsive" alt="" >
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