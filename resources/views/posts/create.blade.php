@extends ('layouts.app')

@section('content')
    <a href='/posts' class='btn btn-primary'>Go back</a>
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store']) !!}
    @csrf
    <div class='container'>
        <div class='form-group'>
            <h3> {{Form::label('title', 'Title')}} </h3>
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('body', 'Body')}}</h3>
            {{Form::textarea('body', '', ['class'=>'form-control', 'placeholder'=>'Body Text'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection