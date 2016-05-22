@extends('layouts.app')

@section('content')



<h1>Details of {{ $device->title }}</h1>

<hr>


<table class="table table-hover table-condensed table-striped">
	<thead>
		<tr>
			<th>Device Description:</th>
			<th>Serial Number</th>
			<th>Associated Person: </th>
			<th>Action</th>
		</tr>	
	</thead>
	<tbody>
		<tr>
			<td>{{ $device->description }}</td>
			<td>{{ $device->serial_number }}</td>
			<td>{{ $device->person->name }}</td>
			<td>
				<a href="{{ route('devices.show', $device->id) }}"><i class="fa fa-eye" aria-hidden="true">View</i></a> | 
				<!--<a href="{{ route('devices.destroy', $device->id) }}" ><i class="fa fa-pencil-square-o" aria-hidden="true">Delete</i></a>-->
				{!! Form::open([
            'method' => 'DELETE',
            'route' => ['devices.destroy', $device->id]
        ]) !!}
        <button type="submit" class="fa fa-eye">Delete</button>
        {!! Form::close() !!}
			</td>
		</tr>
	</tbody>
</table>

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