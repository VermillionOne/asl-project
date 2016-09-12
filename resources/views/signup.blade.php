<!-- Sign-in Blade template : /resources/views/signin.blade.php -->
@extends('master')

@section('content')

    <section class="listr-form-holder">

        {!! Form::open() !!}

            {!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username']) !!}
            {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
            {!! Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
            {!! Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Re-enter Password']) !!}
            {!! Form::submit('Sign Up', ['class' => 'btn listr-form-submit']) !!}
            <a href="" type="button" class="btn btn-primary listr-form-change">Sign-In Here</a>

        {!! Form::close() !!}

    </section>

@stop
