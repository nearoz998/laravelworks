@extends ('layouts.app');

@section('content')
    <a href='/posts' class='btn btn-primary'>Go back</a>
    <h1>Create Post</h1>
    <form method="POST" action="/profile">
        @csrf
    
        ...
    </form>
@endsection