@extends('layouts.app')

@if (Auth::user())

@section('content')
    <table class="table table-bordered" id="devices-table">
        <thead>
            <tr>

                <th>Title</th>
                <th>Serial Number</th>
                <th>Description</th>
                <th>Given Person Name</th>
            </tr>
        </thead>
    </table>
@stop

@section('script')
<script>
$(function() {
    $('#devices-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [

            { data: 'title', name: 'devices.title' },
            { data: 'serial_number', name: 'devices.serial_number' },
            { data: 'description', name: 'devices.description' },
            { data: 'person.name', name: 'person.name' },

        ]
    });
});
</script>
@stop

@endif