@extends('admin.layouts.default')
@section('main')

<div>
    <h1 style="text-align:center">All Department Admin</h1>
</div>
<table class="table table-striped">
    <thead>
        <th><b>Admin Name</b></th>
        <th><b>Department Name</b></th>
        <th><b>Email</b></th>
        <th><b>Number</b></th>
        <th><b>Address</b></th>
        <th><b>Action</b></th>
    </thead>
    <tbody>
        @foreach($admins as $a)
        @if($a->role == 'Department Admin')
        <tr>
            <td>{{ $a->name }}</td>
            <td>{{ $a->dept_name }}</td>
            <td>{{ $a->email }}</td>
            <td>{{ $a->number }}</td>
            <td>{{ $a->address }}</td>
            <td>
                <a href="{{ url('admin/delete/'.$a->id) }}" class="btn btn-danger" data-toggle="modal"
                    data-target="#myModal{{ $a->id }}"> Delete<a>
                        <div class="modal" id="myModal{{ $a->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete <b>{{ $a->dept_name }}</b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Close</button>
                                        <a href="{{ url('admin/delete/'.$a->id) }}" class="btn btn-danger">Yes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

@endsection