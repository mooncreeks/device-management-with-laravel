@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div> -->
            @if (Auth::user())
            <table class="table">
                <thead>

                    {!! Form::open(['route' => 'searches.index', 'method' => 'get']) !!}
                    <div class="input-group">
                        {!! Form::text('title',null, ['class'=>'form-control']) !!}
                      <span class="input-group-btn">
                        {!! Form::submit('Search', ['class'=>'btn btn-secondary']) !!}
                      </span>
                    </div>
                    {!! Form::close() !!}
                    <tr>
                        <th>Device Name</th>
                        <th>Associated Person/Team</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deviceTitle as $device)
                    <tr>

                        <td>
                            {{ $device->title }}
                        </td>
                        <td>{{ $device->person->name }}</td>
                        <td>
                            <a href="{{ route('devices.show', $device->id) }}"><i class="fa fa-eye" aria-hidden="true">View</i></a> | 
                            <a href="{{ route('devices.edit', $device->id) }}" ><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i>
                        </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection
