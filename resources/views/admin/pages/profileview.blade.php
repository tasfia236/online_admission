</html>

<head>
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bgclr">
    <div class="">
        <nav class="centered-navbar">
            <div class="logo">
                <img src="{{ asset('assets/images') }}/pic3.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>

                <li><a href="#">Admission</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
            <a class="logout-button btn btn-primary" href="{{ url('admin/logout') }}">Log Out</a>

        </nav>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('/thumbnail/'.$applicant->picture) }}" alt="Admin" class="rounded-circle"
                                width="150">
                            <div class="mt-3">
                                <h4>{{ $applicant->first_name }} {{ $applicant->last_name }}</h4>
                                <p class="text-secondary mb-1">Noob Developer</p>
                                <p class="text-muted font-size-sm">Bangladesh</p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-globe mr-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>Website</h6>
                            <span class="text-secondary">https://bootdey.com</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-github mr-2 icon-inline">
                                    <path
                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                    </path>
                                </svg>Github</h6>
                            <span class="text-secondary">bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-twitter mr-2 icon-inline text-info">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>Twitter</h6>
                            <span class="text-secondary">@bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>Instagram</h6>
                            <span class="text-secondary">bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                    </path>
                                </svg>Facebook</h6>
                            <span class="text-secondary">bootdey</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <!--                <form class="user" method="post" action="{{ url('/user-login') }}">
                            @csrf
-->
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0"><b>Full Name: </b>&nbsp;&nbsp;
                                    {{ $applicant->first_name }} {{ $applicant->last_name }}</h6>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0"><b>Email : </b>&nbsp;&nbsp;{{ $applicant->email }}</h6>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0"><b>Date of birth : </b>&nbsp;&nbsp;{{ $applicant->date_of_birth }}</h6>
                            </div>
                        </div>
                        <hr>


                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0"><b>Mobile Number : </b> &nbsp;&nbsp; 0{{ $applicant->number }}
                                </h6>
                            </div>
                            <div class="col-sm-5">
                                <h6 class="mb-0"><b>Father's Mobile Number : </b> &nbsp;&nbsp;
                                    0{{ $applicant->father_number }}
                                </h6>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>SSC GPA : </b>&nbsp;&nbsp;{{ $applicant->ssc_gpa }}</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>SSC Group : </b>&nbsp;&nbsp;{{ $applicant->ssc_group }}</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>SSC Board : </b>&nbsp;&nbsp;{{ $applicant->ssc_board }}</h6>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>HSC GPA : </b>&nbsp;&nbsp;{{ $applicant->hsc_gpa }}</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>HSC Group : </b>&nbsp;&nbsp;{{ $applicant->hsc_group }}</h6>
                            </div>
                            <div class="col-sm-4">
                                <h6 class="mb-0"><b>HSC Board : </b>&nbsp;&nbsp;{{ $applicant->hsc_board }}</h6>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="mb-0"><b>Address : </b>&nbsp;&nbsp;{{ $applicant->address }}</h6>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <button>
                        <a class="btn btn-sm btn-success" href="{{ url('admin/genarate') }}">Back</a>
                    </button>
                </div>


</body>