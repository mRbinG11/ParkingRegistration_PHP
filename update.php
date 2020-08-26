<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/update.svg"/>
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
				<button type="submit" class="btns fa fa-search" onclick="search();return false;">
					<span class="fbtn">Search</span>
				</button>
				<button type="submit" class="btns fa fa-trash" onclick="del();return false;">
					<span class="fbtn">Delete</span>
				</button>
				<br>
				<?php
					include 'showfunc.php';
					error_reporting (E_ALL ^ E_NOTICE);
					$link = mysqli_connect("localhost", "root", "", "test");
					 
					if($link === false){
					    die("ERROR: Could not connect. " . mysqli_connect_error());
					}

					showfunc();
					
					mysqli_close($link);
				?>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-22 p-b-22">
				<form class="login100-form validate-form" action="bgupdate.php" method="post">
					<span class="login100-form-title p-b-39">
						Update
						<a href="" class="txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30" onclick="update();return false;">
							<i class="fa fa fa-refresh m-l-5"></i>
						</a>
					</span>

					<div class="wrap-input100 " id="cuid">
						<span class="label-input100">Person's Unique ID who has to be updated</span>
						<input class="input100" type="text" name="uid" id="uid" placeholder="Unique ID" required>
						<span class="focus-input100"></span>
					</div>

					<label class="conta">Name
					  <input type="checkbox" id="cbname" name="type0" value="0" onclick="chb(0)">
					  <span class="checkm"></span>
					</label>

					<label class="conta">Email ID
					  <input type="checkbox" id="cbmail" name="type1" value="1" onclick="chb(1)">
					  <span class="checkm"></span>
					</label>

					<label class="conta">Phone No.
					  <input type="checkbox" id="cbphno" name="type2" value="2" onclick="chb(2)">
					  <span class="checkm"></span>
					</label>

					<label class="conta">RFID
					  <input type="checkbox" id="cbrfid" name="type3" value="3" onclick="chb(3)">
					  <span class="checkm"></span>
					</label>

					<label class="conta">Vehicle No.
					  <input type="checkbox" id="cbvno" name="type4" value="4" onclick="chb(4)">
					  <span class="checkm"></span>
					</label>

					<div class="wrap-input100 " id="cname" style="display:none;">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" id="name" placeholder="Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="cmail" style="display:none;">
						<span class="label-input100">Email ID</span>
						<input class="input100" type="text" name="mail" id="mail" placeholder="Email ID">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="cphno" style="display:none;">
						<span class="label-input100">Phone No.</span>
						<input class="input100" type="text" name="phno" id="phno" placeholder="Phone No.">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="crfid" style="display:none;">
						<span class="label-input100">RFID</span>
						<input class="input100" type="text" name="rfid" id="rfid" placeholder="RFID">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 " id="cvno" style="display:none;">
						<span class="label-input100">Vehicle No.</span>
						<input class="input100" type="text" name="vno" id="vno" placeholder="Vehicle No.">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								<i class="fa fa-refresh m-l-5"></i>
								Update
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