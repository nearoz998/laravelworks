@extends ('layouts.app');

@section('content')
    <div class='text-left'><a href='/'>Home</a></div>
    <a href='/form1' class='btn btn-default'>Go back</a>
        <h1>{{$form->name}}</h1>
        <div class='card'>
        <div class='column'>
            {{$form->university}}{{$form->college}}{{$form->faculty}}{{$form->crn}}
        </div>
        <div>{{$form->description}}</div>
        </div>
    </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
@endsection