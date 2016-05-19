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
            @if(Auth::user())
            <table class="table">
                <thead>
                    {!! Form::open(['route' => 'persons.index', 'method' => 'GET']) !!}
                    <div class="form-group text-right">
                        {!! Form::text('name', null, ['class' => '']) !!}
                        {!! Form::submit('Search', ['class' => 'btn btn-default btn-xs']) !!}
                    </div>
                    {!! Form::close() !!}
                    <tr>
                        <th>Device Name</th>
                        <th>Associated Person/Team</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            abc
                        </td>
                    </tr>
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection
