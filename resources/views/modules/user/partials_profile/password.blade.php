{!! Form::model($user, ['route' => ['user.profile', $user], 'method' => 'POST']) !!}
<div class="form-group">
    {!! Form::label('password_ac', trans('form.label.password').' Actual ', array('class' => 'control-label')) !!}
    {!! Form::text('password_ac', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su '.trans('form.label.password').' actual']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', trans('form.label.password').' Nueva ', array('class' => 'control-label')) !!}
    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su Nueva '.trans('form.label.password')]) !!}
</div>
<div class="form-group">
    {!! Form::label('password_confirmation', 'Repita la '.trans('form.label.password'), array('class' => 'control-label')) !!}
    {!! Form::text('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Por favor Repita su Nueva '.trans('form.label.password')]) !!}
</div>
<div class="margiv-top-10">
    <button type="submit" class="btn green">Guardar</button>
</div>
{!! Form::close() !!}