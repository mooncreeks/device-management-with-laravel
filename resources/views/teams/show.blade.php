@extends('layouts.app')

@section('content')
	<h1>{{ $team->name }}</h1>

	<p class="lead">{{ $team->description }}</p>

	<hr>
	<div class="row">
	<div class="col-md-6">
	<a href="{{ route('teams.index') }}" class="btn btn-info">Back to all teams</a>

	<a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">Edit Teams info</a>
	</div>

	<div class="col-md-6 text-right">
		{!! Form::open([
            'method' => 'DELETE',
            'route' => ['teams.destroy', $team->id]
        ]) !!}
            {!! Form::submit('Delete this team?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
	</div>
	</div>
@stop