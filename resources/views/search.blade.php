@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'queries.index', 'class'=>'form navbar-form navbar-right searchform']) !!}
{!! Form::text('search', null,
['required',
'class'=>'form-control',
'placeholder'=>'Search for a device...']) !!}
{!! Form::submit('Search',
['class'=>'btn btn-default']) !!}
{!! Form::close() !!}

@stop



@foreach($device as $abc)
{{ $device->title }}
@endforeach