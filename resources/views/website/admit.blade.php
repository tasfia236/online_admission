<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admit Card</title>
    <link rel="stylesheet" href="{{asset('assets/css/admit.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
    <center>
        <section>
            <div class="container">
                <div class="admit-card">
                    <div class="BoxA border- padding mar-bot">
                        <div class="row">
                            <div class="col-sm-4">
                                <h5>PREMIER UNIVERSITY</h5>
                                <p>Dampara Wasa Chittagong - 312901 <br> CHATTAGRAM, BANGLADESH</p>
                            </div>
                            <div class="col-sm-4 txt-center">
                                <img src="" width="100px;" />
                            </div>
                            <div class="col-sm-4">
                                <h5>Admit Card</h5>
                                <br>
                                <h5>{{Session::get('user_session')}}</h5>
                                <!--    <p>B.Sc - 2023</p>  -->
                            </div>
                        </div>
                    </div>
                    <div class="BoxC border- padding mar-bot">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5>Enrollment No : {{ Session::get('user_id') }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="BoxD border- padding mar-bot">
                        <div class="row">
                            <div class="col-sm-10">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Student Name: </b>{{Session::get('user_fname')}}
                                                {{Session::get('user_lname')}}</td>
                                            <td><b>Department: </b> {{ Session::get('user_dept') }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Father Name: </b> {{ Session::get('father_name') }}</td>
                                            <td><b>DOB: </b> {{ Session::get('user_dob') }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Mother Name: </b> {{ Session::get('mother_name') }}</td>
                                            <td colspan="1" style="    height: 62.5px;"><b>Address:</b>
                                                {{ Session::get('user_address') }}</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" style="    height: 62.5px;"><b>Exam Date: </b> 30 April 2023
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-2 txt-center">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row txt-center"><img
                                                    src="{{ URL::asset('thumbnail/'.Session::get('user_pic')) }}"
                                                    width="123px" height="165px" /></th>
                                        </tr>
                                        <!-- <tr>
							  <th scope="row txt-center"><img src="" /></th>
							</tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="BoxE border- padding mar-bot txt-center">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5>EXAMINATION VENUE</h5>
                                <p>NH - 21 Wasa 2no - 312901 <br> CHATTAGRAM, BANGLADESH</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="BoxF border- padding mar-bot txt-center">
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sr. No.</th>
									<th>Subject/Paper</th>
									<th>Exam Date</th>
								</tr>
							</thead>
						  <tbody>
							<tr>
							  <td>1</td>
							  <td>English</td>
							  <td>5 July 2019</td>
							</tr>
							<tr>
							  <td>2</td>
							  <td>English</td>
							  <td>5 July 2019</td>
							</tr>
							<tr>
							  <td>3</td>
							  <td>English</td>
							  <td>5 July 2019</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div> -->
                    <footer class="txt-center">
                        <p>*** PREMIER UNIVERSITY ***</p>
                    </footer>
                    <button class="download-btn">Download</button>
                </div>
            </div>

        </section>
        <script>
        const downloadBtn = document.querySelector(".download-btn");

        downloadBtn.addEventListener("click", () => {
            window.print();
        });
        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </center>
</body>

</html>