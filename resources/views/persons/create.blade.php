@extends('layouts.app')

@section('content')

<h1>Add a Person</h1>

@include('partials.alerts.errors')

{!! Form::open([
    'route' => 'persons.store'
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
	{!! Form::submit('Add a New Person', ['class' => 'btn btn-success btn-block']) !!}
</div>

<div class="form-group">
	<a href="{{ route('persons.index') }}" class="btn btn-danger btn-block">Cancel</a>
</div>

{!! Form::close() !!}

@stop