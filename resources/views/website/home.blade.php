<link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<body>
    <div>
        <nav class="centered-navbar">
            <div class="logo">
                <img src="{{ asset('assets/images') }}/pic3.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>

                <li><a href="#">Admission</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
            <a class="login-button" href="{{ url('/login') }}">Log In</a>

        </nav>
    </div>
    <div class="content">
        <h6 class="btn btn-block"><b>
                @foreach($mxvalue as $m)
                @if($m->status == 0)
                <marquee behavior="" direction="">
                    {{ $m->session }} Session Admission Going ON
                </marquee>
                @endif
                @endforeach
            </b>
        </h6>
        <h1>"Build Your Carrier <br>
            With The Best University<br>
            In The City"
            <h1>
                <p>Empowering Minds, Enriching Futures: Your Journey to Excellence Starts Here<br>
                    Fostering Knowledge, Inspiring Innovation: Your Pathway to Success
                </p>
                <!-- <div>
        <button class="button">Get an Admission</button>
        </div> -->

    </div>
    <div>

        <img src="{{ asset('assets/images') }}/pic2.png" width="200" height="00" class="img-feature" />
    </div>
    @foreach($mxvalue as $m)
    @if($m->status == 0)
    <div class="wrapper">
        <a class="button" href="{{ url('/register') }}">APPLY ONLINE</a>
    </div>
    @else
    <div class="wrapper">
        <a class="button" href="">APPLY ONLINE</a>
    </div>
    @endif
    @endforeach
    <!-- Filter: https://css-tricks.com/gooey-effect/ -->
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                    result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>


</body>