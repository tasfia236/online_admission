        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo"><img height="100%" src=" {{asset('assets/images/pucbglogo.png')}}"
                        alt="logo" /></a>

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <!--button class="navbar-toggler navbar-toggler align-self-center" type="text" data-toggle="minimize"
                    disabled>
                    <span class="font-weight-bold text-black">Premier University</span>
                </button-->

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img height="30px" src="{{asset('assets/images/loginlogo.png')}}" alt="profile">
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold text-black">{{ Session::get('admin_name') }} </span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="{{ url('admin/logout') }}">
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </nav>