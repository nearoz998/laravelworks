@extends ('layouts.app')

@section('content')
    <div class='text-left'><div class='pl-3'><a href='/'>Home</a></div></div>
    <div class='text-right'><div class='pr-3'><a href='/form1/create'>Register Form</a></div></div>
    <h1>Students Data</h1>
    @if (count($number_registered) > 0)
        @foreach($number_registered as $form)
            <div class = 'well'>
                <h3><a href='/form1/{{$form->id}}'>{{$form->name}}</a></h3>
            </div>
        @endforeach
    @else
        <div class='text-center'>
            <p>No registrations!!!</p>
            <p><a href = '/'>Back to home</a></p>
        </div>
        {{-- {{$$number_registered->links()}} --}}
    @endif
@endsection