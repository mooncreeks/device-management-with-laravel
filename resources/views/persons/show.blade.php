@extends('layouts.app')

@section('content')
	<h1>{{ $person->title }}</h1>

	<p class="lead">{{ $person->name }}</p>

	<p class="lead">{{ $person->designation }}</p>

	<p class="lead">{{ $person->email }}</p>

	<p class="lead">{{ $person->status }}</p>

	<hr>
	<div class="row">
	<div class="col-md-6">
	<a href="{{ route('persons.index') }}" class="btn btn-info">Back to all persons</a>

	<a href="{{ route('persons.edit', $person->id) }}" class="btn btn-primary">Edit person info</a>
	</div>

	<div class="col-md-6 text-right">
		{!! Form::open([
            'method' => 'DELETE',
            'route' => ['persons.destroy', $person->id]
        ]) !!}
            {!! Form::submit('Delete this person?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
	</div>
	</div>
@stop
