{!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
    @include('modules.admin.users.partials.messager')
    <div class="form-group">
        {!! Form::label('username', trans('form.label.username'), array('class' => 'control-label')) !!}
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su  '.trans('form.label.username')]) !!}
    </div>
    @include('modules.admin.users.partials_profile.update')
{!! Form::close() !!}