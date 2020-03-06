@extends('adminlte::page')

@section('content')
    <a href='/posts' class='btn btn-primary'>Go back</a>
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST']) !!}
    @csrf
    <div class='container'>
        <div class='form-group'>
            <h3> {{Form::label('title', 'Title')}} </h3>
            {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('body', 'Body')}}</h3>
            {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection