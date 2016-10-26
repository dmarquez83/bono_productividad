<div class="form-group">
    {!! Form::label('name', 'Nompre del Modulo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-tags"></i>
        </span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el Nombre del modulo']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('dewscription', 'Descripcion del Modulo') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca la Descripcion del Modulo']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-navicon"></i>
        </span>
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    </div>
</div>
<div class="form-group">
{!! Form::label('icon', 'Seleccione el Icono') !!}
    <div class="input-group">
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="{!! $module->icon !!}"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="{!! $module->icon !!}" checked> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-user"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-user" > </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-user-female"></span> &nbsp; <input type="radio" name="icon" class="icheck" value="icon-user-female"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-users"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-users"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-user-follow"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-user-follow"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-user-following"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-user-following"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-user-unfollow"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-user-unfollow"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-trophy"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-trophy"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-speedometer"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-speedometer"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-youtube"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-youtube"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-twitter"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-twitter"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-tumblr"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-tumblr"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-facebook"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-facebook"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-dropbox"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-dropbox"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-social-dribbble"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-social-dribbble"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-shield"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-shield"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-screen-tablet"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-screen-tablet"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-screen-smartphone"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-screen-smartphone"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-screen-desktop"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-screen-desktop"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-plane"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-plane"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-notebook"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-notebook"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-moustache"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-moustache"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-mouse"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-mouse "></span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-magnet"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-magnet "></span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-magic-wand"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-magic-wand"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-hourglass"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-hourglass"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-graduation"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-graduation"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-ghost"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-ghost"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-game-controller"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-game-controller"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-fire"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-fire"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-eyeglasses"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-eyeglasses"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-envelope-open"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-envelope-open"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-envelope-letter"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-envelope-letter"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-energy"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-energy"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-emoticon-smile"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-emoticon-smile"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-disc"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-disc"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-cursor-move"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-cursor-move"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-crop"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-crop"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-credit-card"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-credit-card"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-chemistry"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-chemistry"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bell"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bell"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-badge"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-badge"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-anchor"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-anchor"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-action-redo"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-action-redo"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-action-undo"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-action-undo"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bag"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bag"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-basket"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-basket"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-basket-loaded"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-basket-loaded"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-book-open"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-book-open"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-briefcase"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-briefcase"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bubbles"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bubbles"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-calculator"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-calculator"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-call-end"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-call-end"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-call-in"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-call-in"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-call-out"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-call-out"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-compass"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-compass"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-cup"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-cup"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-diamond"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-diamond"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-direction"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-direction"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-directions"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-directions"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-docs"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-docs"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-drawer"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-drawer"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-drop"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-drop"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-earphones"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-earphones"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-earphones-alt"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-earphones-alt"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-feed"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-feed"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-film"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-film"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-folder-alt"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-folder-alt"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-frame"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-frame"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-globe"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-globe"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-globe-alt"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-globe-alt"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-handbag"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-handbag"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-layers"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-layers"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-map"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-map"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-picture"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-picture"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-pin"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-pin"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-playlist"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-playlist"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-present"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-present"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-printer"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-printer"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-puzzle"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-puzzle"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-speech"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-speech"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-vector"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-vector"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-wallet"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-wallet"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-arrow-down"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-arrow-down"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-arrow-left"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-arrow-left"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-arrow-right"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-arrow-right"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-arrow-up"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-arrow-up"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bar-chart"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bar-chart"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bulb"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bulb"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-calendar"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-calendar"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-end"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-end"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-forward"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-forward"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-pause"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-pause"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-play"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-play"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-rewind"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-rewind"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-control-start"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-control-start"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-cursor"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-cursor"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-dislike"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-dislike"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-equalizer"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-equalizer"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-graph"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-graph"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-grid"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-grid"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-home"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-home"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-like"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-like"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-list"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-list"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-login"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-login"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-logout"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-logout"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-loop"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-loop"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-microphone"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-microphone"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-music-tone"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-music-tone"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-music-tone-alt"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-music-tone-alt"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-note"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-note"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-pencil"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-pencil"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-pie-chart"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-pie-chart"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-question"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-question"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-rocket"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-rocket"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-share"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-share"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-share-alt"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-share-alt"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-shuffle"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-shuffle"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-size-actual"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-size-actual"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-size-fullscreen"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-size-fullscreen"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-support"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-support"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-tag"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-tag"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-trash"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-trash"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-umbrella"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-umbrella"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-wrench"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-wrench"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-ban"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-ban"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-bubble"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-bubble"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-camcorder"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-camcorder"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-camera"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-camera"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-check"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-check"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-clock"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-clock"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-close"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-close"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-cloud-download"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-cloud-download"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-cloud-upload"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-cloud-upload"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-doc"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-doc"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-envelope"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-envelope"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-eye"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-eye"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-flag"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-flag"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-folder"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-folder"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-heart"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-heart"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-info"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-info"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-key"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-key"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-link"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-link"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-lock"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-lock"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-lock-open"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-lock-open"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-magnifier"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-magnifier"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-magnifier-add"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-magnifier-add"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-magnifier-remove"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-magnifier-remove"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-paper-clip"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-paper-clip"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-paper-plane"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-paper-plane"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-plus"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-plus"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-pointer"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-pointer"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-power"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-power"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-refresh"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-refresh"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-reload"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-reload"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-settings"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-settings"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-star"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-star"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-symbol-female"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-symbol-female"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-symbol-male"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-symbol-male"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-target"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-target"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-volume-1"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-volume-1"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-volume-2"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-volume-2"> </span>
        </span>
        <span class="item-box">
        <span class="item">
            <span aria-hidden="true" class="icon-volume-off"></span> &nbsp;<input type="radio" name="icon" class="icheck" value="icon-volume-off"> </span>
        </span>
    </div>
</div>
