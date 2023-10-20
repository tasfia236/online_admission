<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

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

    <div class="background-container">
        <!-- Your content goes here -->
    </div>



    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div>

    </div>
    <card>
        <!-- <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div> -->
        @if( Session::has('success') )
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @if( Session::has('error') )
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif
        <form class="user" method="post" action="{{ url('/user-login') }}">
            @csrf
            <h3>Login Here</h3>
            <div class="login">
                <label for="email">Email</label>
                <input type="text" placeholder="Email" name="email">

                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div>

            </div>
            <button type='submit' class="btn btn-primary btn-user btn-block">Login</button>
            <!--div class="fields">
                <br>
                <p>If you want to register. Click <a href="/register" class="login-link">Register</a></p>
            </div-->

        </form>
    </card>
</body>

</body>

</html>