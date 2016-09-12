<!-- Listr Main Page Blade template : /resources/views/listr_main.blade.php -->
@extends('master')

@section('content')

    <section class="listr-form-holder listr-create-form">


{{--         <form action="" method="POST" role="form">

            <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="List Item Input">
            </div>

            <textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>

            <div class="listr-main-new-form-fields-holder">
                <button class="listr-new-form-fields-toggle toggled" type="button" class="btn btn-primary">
                    <svg class="listr-toggle-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.01 21.01">
                        <path d="M21,10.5h0a1,1,0,0,0-1-1H11.5V1a1,1,0,0,0-1-1h0a1,1,0,0,0-1,1V9.5H1a1,1,0,0,0-1,1H0a1,1,0,0,0,1,1H9.5V20a1,1,0,0,0,1,1h0a1,1,0,0,0,1-1V11.5H20A1,1,0,0,0,21,10.5Z" fill="#ff7e33"/>
                    </svg>
                </button>
                <ul>
                    <li><a href=""><span class="fa fa-plus"></span>List</a></li>
                    <li><a href=""><span class="fa fa-plus"></span>Note</a></li>
                </ul>
            </div>

            <button type="submit" class="btn listr-form-submit">Create Note</button>

        </form> --}}

        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'List Item Input']) !!}
                {!! Form::textarea('note', '', ['class' => 'form-control', 'placeholder' => 'Note Item Input', 'rows' => '3']) !!}
            </div>
                <div class="listr-main-new-form-fields-holder">
                    <ul>
                        <li><a href=""><span class="fa fa-plus"></span>List</a></li>
                        <li><a href=""><span class="fa fa-plus"></span>Note</a></li>
                    </ul>
                </div>
        {!! Form::close() !!}

    </section>

    <section class="listr-main-lists-holder">

        <article class="listr-main-list">
            <h2>List Title <button class="fa fa-ellipsis-v listr-main-list-menu-toggle"></button></h2>

            <ul>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
            </ul>

        </article>

        <article class="listr-main-list">
            <h2>List Title <button class="fa fa-ellipsis-v listr-main-list-menu-toggle"></button></h2>

            <ul>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
            </ul>

        </article>

        <article class="listr-main-list">
            <h2>List Title <button class="fa fa-ellipsis-v listr-main-list-menu-toggle"></button></h2>

            <ul>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
            </ul>

        </article>

        <article class="listr-main-list">
            <h2>List Title <button class="fa fa-ellipsis-v listr-main-list-menu-toggle"></button></h2>

            <ul>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
                <li><span class="fa fa-square-o"></span>List Item</li>
            </ul>

        </article>

    </section>

@stop
