@extends('layouts.app')

@section('content')
	<h1>Add a Team</h1>

	@include('partials.alerts.errors')

	{!! Form::open(['route' => 'teams.store']) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Add Team', ['class' => 'btn btn-success btn-block']) !!}
	</div>
	<div class="form-group">
		<a href="{{ route('teams.index') }}" class="btn btn-danger btn-block">Cancel</a>
	</div>
	{!! Form::close() !!}
@stop