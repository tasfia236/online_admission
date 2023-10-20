@extends('admin.layouts.default')
@section('main')



<div>
    <center>
        <h1>Generate Admit Card</h1>
    </center>
</div>
<div>
    <center>All Registered Applicant's = {{ $pending_users->count() }}</center>
</div>

<div class="d-flex justify-content-end mb-3">
    <form class="form-inline float-right" action="{{ url('/userfilter') }}" method="GET">
        <select name="dept_name" id="">
            <option value="">Select Department ...</option>
            @foreach($department as $d)
            <option value="{{ $d->dept_name }}">{{ $d->dept_name }}</option>
            @endforeach
        </select>
        <input class="form-control-inline" type="number" step="0.01" min="0.00" max="5.00" name="start_gpa"
            id="searched" placeholder="Search... GPA" aria-label="Search">
        <input class="form-control-inline" type="number" step="0.01" min="0.00" max="5.00" name="end_gpa" id="searched"
            placeholder="Search... GPA" aria-label="Search">
        <button type="submit" class="btn btn-primary py-2">Filter</button>
    </form>
</div>

<div class="panel panel-body">
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Session</th>
            <th>SSC GPA</th>
            <th>HSC GPA</th>
            <th>Department</th>
            <th>Profile</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </thead>
        <tbody>
            @if($pending_users->count())
            @foreach($pending_users as $pu)
            <tr>
                <td>{{ $pu->first_name }} {{ $pu->last_name }}</td>
                <td>{{ $pu->email }}</td>
                <td>{{ $pu->session }}</td>
                <td>{{ $pu->ssc_gpa }}</td>
                <td>{{ $pu->hsc_gpa }}</td>
                <td>{{ $pu->dept_name }}</td>
                <td><a class="btn btn-sm btn-success" href="{{ url('profile/'.$pu->id) }}">Profile</a></td>
                <td>
                    @if($pu->status)
                    <span class="badge badge-success">Approved</span>
                    @else
                    <span class="badge badge-info">Not Approved</span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ url('admin/approve-user/'.$pu->id) }}">Accept</a>
                    <a href="{{ url('admin/delete-user/'.$pu->id) }}" class="btn btn-danger" data-toggle="modal"
                        data-target="#myModal{{ $pu->id }}"> Reject<a>
                            <div class="modal" id="myModal{{ $pu->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <b>{{ $pu->dept_name }}</b> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                data-dismiss="modal">Close</button>
                                            <a href="{{ url('admin/delete-user/'.$pu->id) }}"
                                                class="btn btn-danger">Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </td>
            </tr>
            @endforeach
            @else
            <td><b>No record found.</b></td>
            @endif
        </tbody>
    </table>
</div>


</div>
</div>
</div>
@endsection