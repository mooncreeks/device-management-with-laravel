@extends('layouts.app')

@section('content')

<h1>Device List</h1>
<p class="lead">Here's a list of all your devices. <a href="{{ route('devices.create') }}" class="btn btn-primary">Add a new one?</a></p>

<hr>


<table class="table table-hover table-condensed table-striped">
	<thead>
		<tr>
			<th>SL</th>
			<th>Name</th>
			<th>Description</th>
			<th>Action</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($devices as $device)
			<tr>
				<td>{{ $device->serial_number }}</td>
				<td>{{ $device->title }}</td>
				<td>{{ str_limit($device->description, 25) }}</td>
				<td>
					<a href="{{ route('devices.show', $device->id) }}"><i class="fa fa-eye" aria-hidden="true">View</i></a> | 
					<a href="{{ route('devices.edit', $device->id) }}" ><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<!-- 
@foreach($devices as $device)
	<h3>{{ $device->title }}</h3>

	<p>{{ $device->serial_number }}</p>

	<p>{{ $device->description }}</p>

	<p>
		<a href="{{ route('devices.show', $device->id) }}" class="btn btn-info">View Details</a>

		<a href="{{ route('devices.edit', $device->id) }}" class="btn btn-primary">Edit device info</a>
	</p>

@endforeach -->

@stop