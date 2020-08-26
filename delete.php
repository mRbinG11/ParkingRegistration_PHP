<!DOCTYPE html>
<html lang="en">
<head>
	<?php session_start(); ?>
	<title>Delete</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/delete.svg"/>
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
				<button type="submit" class="btns fa fa-home" onclick="home();return false;">
					<span class="fbtn">Home</span>
				</button>
				<button type="submit" class="btns fa fa-refresh" onclick="update();return false;">
					<span class="fbtn">Update</span>
				</button>
				<button type="submit" class="btns fa fa-search" onclick="search();return false;">
					<span class="fbtn">Search</span>
				</button>
				<br>
				<?php
					include 'showfunc.php';
					error_reporting (E_ALL ^ E_NOTICE);
					$link = mysqli_connect("localhost", "root", "", "test");
					 
					if($link === false){
					    die("ERROR: Could not connect. " . mysqli_connect_error());
					}

					$dres = $_SESSION["success"];

					showfunc();
					
					mysqli_close($link);
				?>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-22 p-b-22">
				<form class="login100-form validate-form" action="bgdelete.php" method="post">
					<span class="login100-form-title p-b-39">
						Delete
						<a href="" class="txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" onclick="del();return false;">
							<i class="fa fa fa-refresh m-l-5"></i>
						</a>
					</span>

					<label class="cont">Unique ID
					  <input type="radio" id="rbuid" name="type" value="0" onclick="rad(0)">
					  <span class="check"></span>
					</label>

					<label class="cont">Name
					  <input type="radio" id="rbname" name="type" value="1" onclick="rad(1)">
					  <span class="check"></span>
					</label>

					<label class="cont">RFID
					  <input type="radio" id="rbrfid" name="type" value="2" onclick="rad(2)">
					  <span class="check"></span>
					</label>

					<label class="cont">Vehicle No.
					  <input type="radio" id="rbvno" name="type" value="3" onclick="rad(3)">
					  <span class="check"></span>
					</label>

					<div class="wrap-input100 " id="cuid" style="display:none;">
						<span class="label-input100">Unique ID</span>
						<input class="input100" type="text" name="uid" id="uid" placeholder="Unique ID" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="cname" style="display:none;">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" id="name" placeholder="Name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="crfid" style="display:none;">
						<span class="label-input100">RFID</span>
						<input class="input100" type="text" name="rfid" id="rfid" placeholder="RFID" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="cvno" style="display:none;">
						<span class="label-input100">Vehicle No.</span>
						<input class="input100" type="text" name="vno" id="vno" placeholder="Vehicle No." required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								<i class="fa fa-trash m-l-5"></i>
								Delete
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