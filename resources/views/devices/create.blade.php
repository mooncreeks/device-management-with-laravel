

@extends('layouts.app')

@section('content')

<h1>Add a Device</h1>

@include('partials.alerts.errors')

{!! Form::open(['route'=>'devices.store']) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('serial_number', 'Serial Number', ['class' => 'control-label']) !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label name="">Select a person</label>
    <select class="js-example-basic-multiple form-control" name="person_id">
      @foreach($personList as $aPerson)
        <option value="{{$aPerson->id}}">{{$aPerson->name}}</option>
      @endforeach
    </select>
  </div>

<div class="form-group">
	{!! Form::submit('Add a New Device', ['class' => 'btn btn-success btn-block']) !!}
</div>

<div class="form-group">
	<a href="{{ route('devices.index') }}" class="btn btn-danger btn-block">Cancel</a>
</div>

{!! Form::close() !!}

@stop

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('select').select2();
});
</script>

@endsection