@extends ('layouts.app');

@section('content')
    <div class='text-left'><div class='pl-3'><a href='/'>Home</a></div></div>
    <div class='text-right'><div class='pr-3'><a href='/posts/create'>Create Post</a></div></div>
    <h1>Posts</h1>
    @if (count($posts) >= 1)
        @foreach($posts as $post)
            <div class = 'well'>
                <h3><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} </small>
            </div>
        @endforeach
    @else
        <div class='text-center'>
            <p>No posts.</p>
            <p><a href = '/'>Back to home</a></p>
        </div>
        {{-- paginate in Postscontroller --}}
        {{$posts->links()}}
    @endif
@endsection