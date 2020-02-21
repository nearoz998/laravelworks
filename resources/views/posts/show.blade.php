@extends ('layouts.app');

@section('content')
    <a href='posts' class='btn btn-default'>Go back</a>
    <div class='text-left'><a href='/'>Home</a></div>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
@endsection