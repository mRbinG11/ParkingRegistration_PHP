<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/home.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;" onload="noBack();">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more">
				<button type="submit" class="btns fa fa-search" onclick="search();return false;">
					<span class="fbtn">Search</span>
				</button>
				<button type="submit" class="btns fa fa-refresh" onclick="update();return false;">
					<span class="fbtn">Update</span>
				</button>
				<button type="submit" class="btns fa fa-trash" onclick="del();return false;">
					<span class="fbtn">Delete</span>
				</button>
				<br>
				<?php
					include 'showfunc.php';
					$link = mysqli_connect("localhost", "root", "", "test");
					 
					if($link === false){
					    die("ERROR: Could not connect. " . mysqli_connect_error());
					}

					showfunc();

					mysqli_close($link);
				?>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-22 p-b-22">
				<form class="login100-form validate-form" action="bginsert.php" method="post">
					<span class="login100-form-title p-b-39">	
						Register
						<a href="" class="txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" onclick="home();return false;">
							<i class="fa fa-refresh m-l-5"></i>
						</a>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Unique ID is required">
						<span class="label-input100">Unique ID</span>
						<input class="input100" type="text" name="uid" placeholder="Unique ID">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="text" name="mailid" placeholder="Email address">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Phone No. is required">
						<span class="label-input100">Phone No.</span>
						<input class="input100" type="tel" pattern="[0-9]{10}" name="phno" placeholder="Phone No.">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "RFID is required">
						<span class="label-input100">RFID</span>
						<input class="input100" type="text" name="rfid" placeholder="RFID">
						<span class="focus-input100"></span>
					</div>

					<span class="label-input100">Register Vehicle?</span>
					<span class="focus-input100"></span>

					<label class="cont">Yes
					  <input type="radio" id="yes" name="type" value="yes" onclick="veh(1)" checked="checked">
					  <span class="check"></span>
					</label>

					<label class="cont">No
					  <input type="radio" id="no" name="type" value="no" onclick="veh(0)">
					  <span class="check"></span>
					</label>

					<div class="wrap-input100" id="vno">
						<span class="label-input100">Vehicle No.</span>
						<input class="input100" type="text" name="vno" id="ivno" placeholder="Vehicle No." required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>