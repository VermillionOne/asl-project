<!-- Listr Main Page Blade template : /resources/views/listr_main.blade.php -->
@extends('layouts.app')

@section('content')

    <section class="listr-form-holder listr-create-form">

        {!! Form::open(['url' => 'books']) !!}
            <div class="form-group">
                {!! Form::text('book_title', '', ['class' => 'form-control', 'placeholder' => 'Name Your Notepad']) !!}
            </div>

            <div class="form-group">
                <ul class="list-group" >

                    <list-item></list-item>

                    <li class="list-group-item">{!! Form::text('list-item.1', '', ['class' => 'form-control', 'placeholder' => 'List Item Input']) !!}</li>

                </ul>
            </div>

            <div class="form-group">
                {!! Form::textarea('note_body', ( isset($book->note->title) ? $climb->route->name : null ), ['class' => 'form-control', 'placeholder' => 'Note Item Input', 'rows' => '3']) !!}
            </div>

            <div class="listr-main-new-form-fields-holder">
                <ul>
                    <li><a href=""><span class="fa fa-plus"></span>Image</a></li>
                    <li><a href=""><span class="fa fa-plus"></span>Video</a></li>
                </ul>
            </div>

            <div class="form-group">
                <button type="submit" class="btn listr-form-submit">Create Note</button>
            </div>

        {!! Form::close() !!}

    </section>

    <section class="listr-main-lists-holder">
        @for($i = 0; $i < count($books); $i++)
            <article class="listr-main-list">
                <h2>{{$books[$i]->book_title}} <button class="fa fa-ellipsis-v listr-main-list-menu-toggle"></button></h2>

                <ul>
                    @foreach($list_items[$i] as $item)
                        <li><span class="fa fa-square-o"></span>{{$item}}</li>
                    @endforeach
                </ul>

                <p>
                    {{$books[$i]->note[0]->note_body}}
                </p>

            </article>
        @endfor
    </section>

@stop
