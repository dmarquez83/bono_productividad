<div class="tab-content">
    <!-- PERSONAL INFO TAB -->
    <div class="tab-pane active" id="fields_profile">
        @include('modules.user.partials_profile.fields_profile')
    </div>
    <!-- END PERSONAL INFO TAB -->
    <!-- CHANGE AVATAR TAB -->
    <div class="tab-pane" id="avatar">
        <p> Dale Vida a tu Perfil, carga una imagen y disfruta. </p>
        @include('modules.user.partials_profile.avatar')
    </div>
    <!-- END CHANGE AVATAR TAB -->
    <!-- CHANGE PASSWORD TAB -->
    <div class="tab-pane" id="password_chance">
        @include('modules.user.partials_profile.password')
    </div>
    <!-- END CHANGE PASSWORD TAB -->
    <!-- PRIVACY SETTINGS TAB -->
    <div class="tab-pane" id="groups_profile">
        @include('modules.user.partials_profile.groups')
    </div>
    <!-- END PRIVACY SETTINGS TAB -->
</div>