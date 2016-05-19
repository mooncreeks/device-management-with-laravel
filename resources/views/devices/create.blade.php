@extends('layouts.app')

@section('content')

<h1>Add a Device</h1>

@include('partials.alerts.errors')

{!! Form::open([
    'route' => 'devices.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('serial_number', 'Serial Number', ['class' => 'control-label']) !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Add a New Device', ['class' => 'btn btn-success btn-block']) !!}
</div>

<div class="form-group">
	<a href="{{ route('devices.index') }}" class="btn btn-danger btn-block">Cancel</a>
</div>

{!! Form::close() !!}

@stop