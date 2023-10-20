@extends('admin.layouts.default')
@section('main')

<div>
    <center>
        <h1>Registered Applicants</h1>
    </center>
</div>

<div class="d-flex justify-content-end mb-3">

    <form class="form-inline float-right" action="{{ url('/filter') }}" method="GET">
        <input class="form-control-inline" type="number" step="0.01" min="0.00" max="5.00" name="start_gpa"
            id="searched" placeholder="Search..." aria-label="Search">
        <input class="form-control-inline" type="number" step="0.01" min="0.00" max="5.00" name="end_gpa" id="searched"
            placeholder="Search..." aria-label="Search">

        <button type="submit" class="btn btn-primary py-2">Filter</button>

    </form>
</div>
<table class="table table-striped">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>SSC Gpa</th>
        <th>HSC Gpa</th>
        <th>Department</th>
        <th>Session</th>
        <th>Status</th>
    </thead>
    <tbody>
        @if($users->count())
        @foreach($users as $u)
        @if($u->dept_id == Session::get('admin_deptid'))
        <tr>
            <td>{{Session::get('user_fname')}}
                {{Session::get('user_lname')}}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->ssc_gpa }}</td>
            <td>{{ $u->hsc_gpa }}</td>
            <td>{{ $u->dept_name }}</td>
            <td>{{ $u->session }}</td>
            <td>
                @if($u->status)
                <span class="badge badge-success">Approved</span>
                @else
                <span class="badge badge-info">Not Approved</span>
                @endif
            </td>
        </tr>
        @endif
        @endforeach
        @else
        <td><b>No record found.</b></td>
        @endif

    </tbody>

</table>

@endsection

@section('srcipt')
<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/datatables-demo.js')}}"></script>
@endsection