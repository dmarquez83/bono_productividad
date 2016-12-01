{!! Form::model($user, ['route' => ['admin.users.update.password', $user], 'method' => 'POST']) !!}
<div class="form-group">
    {!! Form::label('password', trans('form.label.password').' Nueva ', array('class' => 'control-label')) !!}
    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su Nueva '.trans('form.label.password')]) !!}
</div>
<div class="form-group">
    {!! Form::label('password_confirmation', 'Repita la '.trans('form.label.password'), array('class' => 'control-label')) !!}
    {!! Form::text('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Por favor Repita su Nueva '.trans('form.label.password')]) !!}
</div>
@include('modules.admin.users.partials_profile.update')
{!! Form::close() !!}