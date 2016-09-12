<!-- Sign-in Blade template : /resources/views/signin.blade.php -->
@extends('master')

@section('content')
    <section class="listr-form-holder">

        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) !!}
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
            </div>
            {!! Form::submit('Sign In', ['class' => 'btn listr-form-submit']) !!}
            <a href="" type="button" class="btn btn-primary listr-form-change">New Account</a>

        {!! Form::close() !!}


    </section>

@stop
