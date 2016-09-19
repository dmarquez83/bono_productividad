@extends('layouts.login')
@section('content')
    {!! Form::open(['route' => 'auth/login', 'class' => 'form-horizontal']) !!}
    @include('modules.admin.users.partials.messager')
    <div class="form-group has-feedback">
        {!! Form::email('email', '', ['class'=> 'form-control','placeholder' => trans('form.label.email')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        {!! Form::password('password', ['class'=> 'form-control','placeholder' => trans('form.label.password')]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox">{{ trans('form.label.remember') }}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            {!! Form::submit(trans('form.login.submit'),['class' => 'btn btn-primary btn-block btn-flat']) !!}
        </div>
        <!-- /.col -->
    </div>

    {!! Form::close() !!}
    <a href="{{ url('password/email') }}" class="btn btn-primary">{{ trans('passwords.forgot') }}</a><br>
@endsection
