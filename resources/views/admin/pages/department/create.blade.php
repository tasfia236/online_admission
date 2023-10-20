@extends('admin.layouts.default')
@section('main')
@if( Session::has('success') )
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
<div>
    <h1 style="text-align:center"> Create Department</h1>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <form class="forms-sample" action="{{ url('department/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Department Name</label>
                    <input type="text" class="form-control" name="dept_name" value="">
                </div>

                <div class="form-group">
                    <label>Department Code</label>
                    <input type="text" class="form-control" name="dept_code" value="">
                </div>

                <div class="form-group">
                    <label>Established Date</label>
                    <input type="date" class="form-control" name="established_date" value="">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection