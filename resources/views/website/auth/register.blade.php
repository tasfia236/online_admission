<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Registration</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reg.css')}}">
</head>

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

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Get an admission</strong></h2>
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
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform" action="{{ url('/registretion') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="1"><strong>Step 1</strong></li>
                                <li id="2"><strong>Step 2</strong></li>
                                <li id="3"><strong>Step 3</strong></li>
                            </ul>
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">

                                    <h2 class="fs-title row justify-content-center mt-0">Personal Information</h2>

                                    <!-- <input type="email" name="email" placeholder="First Name"/>
                                    <input type="text" name="uname" placeholder="Last Name"/>
                                    <input type="password" name="pwd" placeholder="Password"/>  <input type="password" name="pwd" placeholder="Password"/>
                                    <input type="password" name="cpwd" placeholder="Confirm Password"/> -->
                                    <div class="two-col">
                                        <div class="col1">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    name="first_name" id="first_name">
                                            </div>
                                        </div>

                                        <div class="col2">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    name="last_name">
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="email" class="form-control" placeholder="Email ID"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="Phone Number"
                                                    name="number">
                                            </div>
                                        </div>

                                        <div class="col1">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="Father's Name"
                                                    name="father_name">
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="Mother's Name"
                                                    name="mother_name">
                                            </div>
                                        </div>

                                        <div class="col1">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="text" class="form-control" placeholder="Fathers Number"
                                                    name="father_number">
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password">
                                            </div>
                                        </div>

                                        <div class="col1">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="file" class="form-control" placeholder="Picture"
                                                    name="picture">
                                            </div>
                                        </div>


                                        <div class="col2">
                                            <div class="form-holder">
                                                <i class="zmdi zmdi-smartphone-android"></i>
                                                <input type="date" class="form-control" placeholder="Date Of Birth"
                                                    name="date_of_birth">
                                            </div>
                                        </div>
                                        <div class="row form-inline">
                                            <div class="w-25 col-sm">
                                                <div class="input-field1 form-inline">
                                                    <select name="dept_name" required>
                                                        <option value="" disabled selected>Select department</option>
                                                        @foreach($departments as $d)
                                                        <option value="{{ $d->id }}">{{ $d->dept_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w-25 col-sm">
                                                <div class="input-field2 form-inline">
                                                    <select name="session" required>
                                                        <option value="" disabled selected>Select Session</option>
                                                        @foreach($sessions as $s)
                                                        @if($s->status == 0)
                                                        <option value="{{ $s->id }}">
                                                            {{ $s->session }}
                                                        </option>
                                                        @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title row justify-content-center mt-0">Educational Information</h2>
                                    <!-- <input type="text" name="fname" placeholder="First Name"/>
                                    <input type="text" name="lname" placeholder="Last Name"/>
                                    <input type="text" name="phno" placeholder="Contact No."/>
                                    <input type="text" name="phno_2" placeholder="Alternate Contact No."/> -->
                                    <div class="two-col">
                                        <div class="col1">
                                            <div class="input-field">
                                                <label>SSC CGPA</label>
                                                <input type="number" step="0.01" min="0.00" max="5.00" name="ssc_gpa"
                                                    placeholder="Enter SSC gpa" required>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="input-field">
                                                <label>HSC CGPA</label>
                                                <input type="number" step="0.01" min="0.00" max="5.00" name="hsc_gpa"
                                                    placeholder="Enter Hsc Gpa" required>
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="input-field form-inline">
                                                <select name="ssc_board" required>
                                                    <option value="" disabled selected>Select SSC Board</option>
                                                    <option value="Chittagong">Chittagong</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Comilla">Comilla</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Barisal">Barisal</option>
                                                    <option value="Sylhet">Sylhet</option>
                                                    <option value="Dinajpur">Dinajpur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="input-field form-inline">
                                                <select name="hsc_board" required>
                                                    <option value="" disabled selected>Select HSC Board</option>
                                                    <option value="Chittagong">Chittagong</option>
                                                    <option value="Dhaka">Dhaka</option>
                                                    <option value="Comilla">Comilla</option>
                                                    <option value="Rajshahi">Rajshahi</option>
                                                    <option value="Jessore">Jessore</option>
                                                    <option value="Barisal">Barisal</option>
                                                    <option value="Sylhet">Sylhet</option>
                                                    <option value="Dinajpur">Dinajpur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="input-field form-inline">
                                                <select name="ssc_group" required>
                                                    <option value="" disabled selected>Select SSC Group</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="Arts">Arts</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="input-field form-inline">
                                                <select name="hsc_group" required>
                                                    <option value="" disabled selected>Select HSC Group</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="Arts">Arts</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title row justify-content-center mt-0">Address Information</h2>

                                    <div class="form-holder">
                                        <i class="zmdi zmdi-account"></i>
                                        <input type="text" class="form-control" placeholder="Address" name="address"
                                            id="address">
                                    </div>

                                    <div class="input-field">
                                        <select name="division" id="division" required>
                                            <option value="" disabled selected>Select Division</option>
                                            @foreach($divisions as $di)
                                            <option value="{{ $di->id }}">{{ $di->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-field">

                                        <select name="district" id="district" required>
                                            <option value="" disabled selected>Select District</option>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                </div>
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <div class="form-inline d-flex justify-content-center">
                                    <button type="submit" class="submit btn btn-info" name="submit" value="submit">
                                        Submit
                                    </button>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.3.2.min.js"></script>
<script src="assets/js/jquery.steps.1.js"></script>
<script src="assets/js/admission_new.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#division").change(function() {
        var divId = $(this).val();
        $('#district').empty();
        var str = '<option value="">Select District</option>';
        $.ajax({
            url: 'http://127.0.0.1:8000/api/districts/' + divId,
            datatype: "json",
            type: 'GET',
            success: function(res) {
                var districts = res.districts;
                var len = districts.length;
                for (var i = 0; i < len; i++) {
                    str += '<option value="' + districts[i].id + '">' + districts[i]
                        .name + '</option>'
                    console.log(str)
                }
                $('#district').html(str);
            }
        })

    });
    //    $('#msform').submit(function(e) {
    //      e.preventDefault();
    //    alert($("#address"))
    //    var name = $("#first_name").val();
    //  var division = $("#division").val();
    //var district = $("#district").val();
    //    $.ajax({
    //      url: 'http://127.0.0.1:8000/api/registretion',
    //    datatype: "json",
    //  type: 'post',
    //            data: {
    //              emp_name: name,
    //            emp_division: division,
    //          emp_district: district
    //    },
    //        success: function(res) {
    //          console.log(res);
    //        $('#msform')[0].reset();
    //  }
    //    });
    // });

})
</script>