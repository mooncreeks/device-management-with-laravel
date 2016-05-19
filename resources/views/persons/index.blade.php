@extends('layouts.app')

@section('content')

<h1>Person List</h1>
<p class="lead">Here's a list of all your persons. <a href="{{ route('persons.create') }}" class="btn btn-primary">Add a new one?</a></p>

<hr>


<table class="table table-hover table-condensed table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Designation</th>
			<th>Email</th>
			<th>Status</th>
			<th>Action</th>
		</tr>	
	</thead>
	<tbody>
		@foreach($persons as $person)
			<tr>
				<td>{{ $person->name }}</td>
				<td>{{ $person->designation }}</td>
				<td>{{ $person->email }}</td>
				<td>{{ $person->status }}</td>
				<td>
					<a href="{{ route('persons.show', $person->id) }}"><i class="fa fa-eye" aria-hidden="true">View</i></a> | 
					<a href="{{ route('persons.edit', $person->id) }}" ><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@stop