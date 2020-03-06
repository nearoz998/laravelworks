@extends('adminlte::page')

@section('content')
    <a href='/posts' class='btn btn-default'>Go back</a>
    <div class='text-left'><a href='/'>Home</a></div>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <small>Updated on {{$post->updated_at}}</small>
        <hr>
        <a href='/posts/{{$post->id}}/edit' class='btn btn-secondary'>Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'class'=>'pull-right']) !!}
        @csrf
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
        {{-- <a href='/posts/{{$post->id}}/destroy' class='btn btn-danger'>Delete</a> --}}
@endsection