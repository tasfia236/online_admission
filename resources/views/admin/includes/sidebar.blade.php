<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <br>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        @if(Session::has('admin_role') && Session::get('admin_role')=="Super Admin")
        <li class="nav-item">
            <a class="nav-link" href="{{url('department/create')}}">
                <span class="menu-title">Create Department</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        <li class="nav-item">
            <a class="nav-link" href="{{url('department/all')}}">
                <span class="menu-title">View Department</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/form') }}">
                <span class="menu-title">Create Department Admin</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/view') }}">
                <span class="menu-title">View Department Admin</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        @if(Session::has('admin_role') && Session::get('admin_role')=="Department Admin" &&
        Session::get('admin_deptid'))
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/applicant')}}">
                <span class="menu-title">View Applicants</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        @endif
        @if(Session::has('admin_role') && Session::get('admin_role')=="Super Admin")
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/genarate') }}">
                <span class="menu-title">Generate Admit Card</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        @endif
        <div class="nav-item">
            <a class="nav-link btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account Pages
            </a>
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/"> Home </a></li>
                <li class="nav-item"> <a class="nav-link" href="/login"> Login </a></li>
            </ul>

        </div>

    </ul>
</nav>