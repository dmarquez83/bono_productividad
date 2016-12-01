{!! Form::model($userProfile, ['route' => ['admin.users.update.profile', $user], 'method' => 'POST']) !!}
    @include('modules.admin.users.partials.messager')
    <div class="form-group">
        {!! Form::label('name', trans('form.label.name'), array('class' => 'control-label')) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.name')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', trans('form.label.email'), array('class' => 'control-label')) !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.email')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('phone', trans('form.label.phone'), array('class' => 'control-label')) !!}
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su N# de '.trans('form.label.phone')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('extending', trans('form.label.extending'), array('class' => 'control-label')) !!}
        {!! Form::text('extending', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.extending')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user_name_windows', trans('form.label.user_name_windows'), array('class' => 'control-label')) !!}
        {!! Form::text('user_name_windows', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el '.trans('form.label.user_name_windows')]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('home_page', 'Pagina de Inicio') !!}
        {!! Form::select('home_page', ['' => 'Selecione el la Pagina de Inicio','home' => 'Home'], null, ['class' => 'form-control'] ) !!}
    </div>
    @include('modules.admin.users.partials_profile.update')
{!! Form::close() !!}