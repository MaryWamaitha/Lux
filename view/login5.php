<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../CSS/loginutil.css">
	<link rel="stylesheet" type="text/css" href="../CSS/loginmain.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../Images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					 Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="../Actions/login_process.php" method="post">

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="email" name="email" placeholder="Valid Email Address" required>
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				<?php
                    if (isset($_GET["error"]) && $_GET["error"]==1)
   							echo ' <div class="alert alert-danger" role="alert"> The password entered was incorrect. Please try again</div>' ;
					if (isset($_GET["error"]) && $_GET["error"]==0)
   						 echo ' <div class="alert alert-danger" role="alert">Email does not exist in system. Please sign up<br></div>' ;
					if (isset($_GET["error"]) && $_GET["error"]==2)
   						 echo ' <div class="alert alert-danger" role="alert">You are already registered, please log in. <br></div>' ;
				?>
                </form>
                
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
	<script src="../js/loginmain.js"></script>

</body>
</html>