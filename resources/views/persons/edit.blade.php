@extends('layouts.app')

@section('content')
<h1>Edit Person - {{ $person->title }} </h1>
<p class="lead">Edit this person below. <a href="{{ route('persons.index') }}">Go back to all Persons.</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($person, [
    'method' => 'PATCH',
    'route' => ['persons.update', $person->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('designation', 'Designation', ['class' => 'control-label']) !!}
    {!! Form::text('designation', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Update a New Person', ['class' => 'btn btn-success btn-block']) !!}
</div>

<div class="form-group">
	<a href="{{ route('persons.index') }}" class="btn btn-danger btn-block">Cancel</a>
</div>

{!! Form::close() !!}

@stop