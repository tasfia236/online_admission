@extends('admin.layouts.default')
@section('main')
@if( Session::has('success') )
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
<div>
    <h1 style="text-align:center"> Create Department Admin </h1>
</div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <form class="forms-sample" action="{{ url('admin/take') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Department Name</label>
                    <select name="dept_name" class="form-control" required>
                        <option value="" disabled selected>Select department</option>
                        @foreach($departments as $d)
                        <option value="{{ $d->id }}">{{ $d->dept_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword4">Number</label>
                    <input type="text" class="form-control" name="number" placeholder="Number">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection