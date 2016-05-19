@extends('layouts.app')

@section('content')
	<h1>{{ $device->title }}</h1>

	<p class="lead">{{ $device->serial }}</p>

	<p class="lead">{{ $device->description }}</p>

	<hr>
	<div class="row">
	<div class="col-md-6">
	<a href="{{ route('devices.index') }}" class="btn btn-info">Back to all devices</a>

	<a href="{{ route('devices.edit', $device->id) }}" class="btn btn-primary">Edit Device info</a>
	</div>

	<div class="col-md-6 text-right">
		{!! Form::open([
            'method' => 'DELETE',
            'route' => ['devices.destroy', $device->id]
        ]) !!}
            {!! Form::submit('Delete this device?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
	</div>
	</div>
@stop