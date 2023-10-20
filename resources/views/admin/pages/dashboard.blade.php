@extends('admin.layouts.default')
@section('main')
<!-- partial -->


<div class="page-header">
    <h3 class="page-title">
        Dashboard
    </h3>
</div>
<div class="row">
    @if(Session::has('admin_role') && Session::get('admin_role')=="Super Admin")
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                <h3 class="font-weight-normal mb-3">Departments</h3>
                <h4 class="mb-5">Total Department (<b>{{ $departments->count() }}</b>)</h4>
                <a type="button" href="{{ url('department/all') }}">
                    <h6>View</h6>
                </a>
            </div>
        </div>
    </div>
    @endif
    @if(Session::has('admin_role') && Session::get('admin_role')=="Super Admin")
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                <h3 class="font-weight-normal mb-3">Department Admin</h3>
                <h4 class="mb-5">Total Department Admin (<b>{{ $admins->count()-1 }}</b>)</h4>
                <h6><a type="button" href="{{ url('admin/view') }}">
                        View
                    </a></h6>
            </div>
        </div>
    </div>
    @endif
    @if(Session::has('admin_role') && Session::get('admin_role')=="Department Admin")
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                <h3 class="font-weight-normal mb-3">Department Admin</h3>
                <h4 class="mb-5"><b>_________________________</b></h4>
                <h6><a type="button" href="{{ url('admin/view') }}">
                        View
                    </a></h6>
            </div>
        </div>
    </div>
    @endif
    @if(Session::has('admin_role') && Session::get('admin_role')=="Super Admin")
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                <h3 class="font-weight-normal mb-3">Applicant's</h3>
                <h4 class="mb-5">Total Applicant (<b>{{ $users->count() }}</b>)</h4>
                <h6><a type="button" href="{{ url('admin/genarate') }}">
                        View
                    </a></h6>
            </div>
        </div>
    </div>
    @endif
    @if(Session::has('admin_role') && Session::get('admin_role')=="Department Admin")
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute"
                    alt="circle-image" />
                <h3 class="font-weight-normal mb-3">Applicant's</h3>
                <h4 class="mb-5"><b>_________________________</b></h4>
                <h6><a type="button" href="{{ url('admin/applicant') }}">
                        View
                    </a></h6>
            </div>
        </div>
    </div>
    @endif
</div>
<div class="row">

</div>

@endsection