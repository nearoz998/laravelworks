@extends ('layouts.app')

@section('content')
    <div class='text-left'><a href='/'>Home</a></div>
    <a href='/form1' class='btn btn-default'>Go back</a>
        <h1>Name: {{$form->name}}</h1>
        <div class='card'>
        <div class='column'>
           <p>University: {{$form->university}}</p>
            <p>College: {{$form->college}}</p>
            <p>Faculty: {{$form->faculty}}</p>
            <p>CRN: {{$form->crn}}</p>
        </div>
        <div>{{$form->description}}</div>
        </div>
    </div>
        <hr>
        <small>Written on {{$form->created_at}}</small>
@endsection