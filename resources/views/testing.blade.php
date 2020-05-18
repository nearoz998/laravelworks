{{-- @extends('layouts.app') --}}
{{-- @extends('adminlte::page')

@section('content')
    <div class='pl-3'>
        <a href='/'>Home</a>
        <h1>Testing page</h1>
        <p>This one is the testing page</p>
    </div>
    <p class='text-end'><div class='text-center'><a href='/'>Back to home</div></p>
    
@endsection --}}

@if (Route::has('login'))
    @auth
        @extends('adminlte::page')
        @section('content')
            {{'asd'}}
        @endsection
    @else
    @section('content')
        <a href="{{ route('login') }}"class='btn btn-primary'>Login</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}"class='btn btn-success'>Register</a>
        @endif
        {{'Hello'}}
        @endsection
    @endauth
@endif