@extends('layouts.app')

@section('content')

<h1>Edit Team - {{ $team->name }} </h1>
<p class="lead">Edit this team below. <a href="{{ route('teams.index') }}">Go back to all Teams.</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($team, [
    'method' => 'PATCH',
    'route' => ['teams.update', $team->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">

{!! Form::submit('Update this Team', ['class' => 'btn btn-success btn-block']) !!}

<a href="{{ route('teams.index') }}" class="btn btn-danger btn-block">Cancel</a>

</div>
{!! Form::close() !!}

@stop