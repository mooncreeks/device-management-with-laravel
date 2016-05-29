@extends('layouts.app')

@section('content')

<h1>Edit Device - {{ $device->title }} </h1>
<p class="lead">Edit this device below. <a href="{{ route('devices.index') }}">Go back to all Devices.</a></p>
<hr>

@include('partials.alerts.errors')

{!! Form::model($device, [
    'method' => 'PATCH',
    'route' => ['devices.update', $device->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('serial_number', 'Serial Number:', ['class' => 'control-label']) !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!} 
</div>


<div class="form-group">

{!! Form::submit('Update this Device', ['class' => 'btn btn-success btn-block']) !!}

<a href="{{ route('devices.index') }}" class="btn btn-danger btn-block">Cancel</a>

</div>
{!! Form::close() !!}

@stop