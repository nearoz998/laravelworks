{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
<a href='/posts' class='btn btn-primary'>Go back</a>
<h2>Register your identity</h2>
{!! Form::open(['action' => 'form1Controller@store']) !!}
    @csrf
    <div class='card col-md-5'>
        <div class='form-group'>
            <p> {{Form::label('name', 'Name')}} </p>
            {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'<Your Name>'])}}
        </div>
        <div class='form-group'>
            <p> {{Form::label('university', 'University')}} </p>
            {{Form::text('university', '', ['class'=>'form-control', 'placeholder'=>'<Example: Pokhara University>'])}}
        </div>
        <div class='form-group'>
            <p>{{Form::label('college', 'College')}}</p>
            {{Form::text('college', '', ['class'=>'form-control', 'placeholder'=>'<Example: Nepal Engineering College>'])}}
        </div>
        <div class='form-group'>
            <p>{{Form::label('faculty', 'Faculty')}}</p>
            {{Form::text('faculty', '', ['class'=>'form-control', 'placeholder'=>'<Example: Electronics and Communication Engineering>'])}}
        </div>
        <div class='form-group'>
            <p>{{Form::label('crn', 'CRN')}}</p>
            {{Form::text('crn', '', ['class'=>'form-control', 'placeholder'=>'<Example: 016419>'])}}
        </div>
        <div class='form-group'>
            <p>{{Form::label('description', 'Description')}}</p>
            {{Form::textarea('description', '', ['class'=>'form-control', 'placeholder'=>'<Describe yourself>'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}

@endsection