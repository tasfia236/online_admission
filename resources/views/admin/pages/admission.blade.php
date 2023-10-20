@extends('admin.layouts.default')
@section('main')

<div>
    <h1 style="text-align:center">All Department</h1>
</div>
<table class="table table-striped">
    <thead>
        <th rowspan="2">Session</th>
    </thead>
    <tbody>
        @foreach($departments as $d)
        <tr>
            <td>{{ $d->dept_name }}</td>
            <td>{{ $d->dept_code }}</td>
            <td>{{ $d->established_date }}</td>
            <td>
                <a href="{{ url('department/edit/'.$d->id) }}" class="btn btn-secondary"> Edit<a>
                        <a href="{{ url('department/delete/'.$d->id) }}" class="btn btn-danger" data-toggle="modal"
                            data-target="#myModal{{ $d->id }}"> Delete<a>
                                <div class="modal" id="myModal{{ $d->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete <b>{{ $d->dept_name }}</b> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close</button>
                                                <a href="{{ url('department/delete/'.$d->id) }}"
                                                    class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection