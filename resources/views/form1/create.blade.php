@extends('layouts.app');

@section('content')
<a href='/' class='btn btn-primary'>Go back</a>
<h2>Register your id</h2>
{!! Form::open(['action' => 'form1Controller@store']) !!}
    @csrf
    <div class='container'>
        <div class='form-group'>
            <h3> {{Form::label('name', 'Name')}} </h3>
            {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'<Your Name>'])}}
        </div>
        <div class='form-group'>
            <h3> {{Form::label('university', 'University')}} </h3>
            {{Form::text('university', '', ['class'=>'form-control', 'placeholder'=>'<Example: Pokhara University>'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('college', 'College')}}</h3>
            {{Form::text('college', '', ['class'=>'form-control', 'placeholder'=>'<Example: Nepal Engineering College>'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('faculty', 'Faculty')}}</h3>
            {{Form::text('faculty', '', ['class'=>'form-control', 'placeholder'=>'<Example: Electronics and Communication Engineering>'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('crn', 'CRN')}}</h3>
            {{Form::text('crn', '', ['class'=>'form-control', 'placeholder'=>'<Example: 016419>'])}}
        </div>
        <div class='form-group'>
            <h3>{{Form::label('description', 'Description')}}</h3>
            {{Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'<Describe yourself>'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}

@endsection