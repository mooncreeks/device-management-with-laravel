@extends('layouts.app')

@section('content')
	<h1>Team List</h1>

	<p class="lead">Here's a list of all your Teams. <a href="{{ route('teams.create') }}" class="btn btn-primary">Add a new one?</a></p>

	<hr>

	<table class="table table-hover table-condensed table-striped">
		<thead>
		<tr>
			<th>Team Name</th>
			<th>Team Description</th>
		</tr>
		</thead>
		<tbody>
		@foreach($teams as $team)
		<tr>
			<td>{{ $team->name }}</td>
			<td>{{ $team->description }}</td>
			<td>
				<a href="{{ route('teams.show', $team->id) }}"><i class="fa fa-eye" aria-hidden="true">View</i></a> | 
				<a href="{{ route('teams.edit', $team->id) }}" ><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></a>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

	@stop