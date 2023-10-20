<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/reg.css')}}">
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
        <header>Admission Form</header> <br>
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
        <form action="{{ url('/registretion') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form first bg-success">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>


                        <div class="input-field">
                            <label>Father's name</label>
                            <input type="text" name="father_name" placeholder="Enter Your Fathers name" required>
                        </div>
                        <div class="input-field">
                            <label>Mother's name</label>
                            <input type="text" name="mother_name" placeholder="Enter Your Mothers name" required>
                        </div>
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" required>
                        </div>

                        <div class="input-field">
                            <label>Confirm Password</label>
                            <input type="password" name="cnf_password" placeholder="Confirm Password" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Enter birth date" required>
                        </div>
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Dapartment</label>
                            <select name="dept_name" required>
                                <option value="" disabled selected>Select department</option>
                                @foreach($departments as $d)
                                <option value="{{ $d->id }}">{{ $d->dept_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-field">
                            <label>SSC CGPA</label>
                            <input type="number" step="0.01" min="0.00" max="5.00" name="ssc_gpa"
                                placeholder="Enter SSC gpa" required>
                        </div>
                        <div class="input-field">
                            <label>HSC CGPA</label>
                            <input type="number" step="0.01" min="0.00" max="5.00" name="hsc_gpa"
                                placeholder="Enter Hsc Gpa" required>
                        </div>


                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Permanent or Temporary" required>
                        </div>
                        <div class="">
                            <label for="file">upload picture</label>
                            <input type="file" name="picture" required>
                        </div>

                    </div>
                </div>
                <div class="fields bg-success">
                    <button class="sumbit" name="submit" value="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <div class="fields">
                        <p>Already Have An Account? <a href="/login" class="login-link">Sign In</a></p>
                    </div>
                </div>

            </div>
        </form>


    </card>
</body>


</body>

</html>