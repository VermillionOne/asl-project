<!-- Sign-in Blade template : /resources/views/signin.blade.php -->
@extends('master')

@section('content')
    <section class="listr-form-holder">

        <form action="" method="POST" role="form">

            <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="Username">
                <input type="" class="form-control" id="" placeholder="Password">
            </div>

            <button type="submit" class="btn listr-form-submit">Login</button>
            <a href="" type="submit" class="btn btn-primary listr-form-change">New Account</a>
        </form>
    </section>
@stop
