<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company Employee Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<!--===============================================================================================-->

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Images/icons/favicon.ico"/>
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
					Register
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="../Actions/register_process.php" method="post" onsubmit="return ValidationEvent()">
				<?php
                    if (isset($_GET["error"]) && $_GET["error"]==1)
   							echo ' <div class="alert alert-danger" role="alert"> Registration unsucessful</div>' ;
					if (isset($_GET["error"]) && $_GET["error"]==0)
   						 echo ' <div class="alert alert-danger" role="alert">Email already exists in the system, please log in <br></div>' ;
				?>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text"  placeholder="Full Name"  name="name" id="username">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="email" placeholder="Valid Email"  name="email" id="email">
						<span class="focus-input100" ></span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password"  placeholder="Password"  name="password" id="password">
						<span class="focus-input100" ></span>
                    </div>
                   
					<div class="wrap-input100 validate-input" data-validate = "Enter country">
						<input class="input100" type="country"  placeholder="Country"   name="country" id="country">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter city" >
						<input class="input100" type="text"  placeholder="City"   name="city" id="city">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter Phone">
						<input class="input100" type="text" placeholder="Phone Number "  name ="contact" id="contact">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
                        
						<button   class="login100-form-btn" name="Register">
							Sign Up
						</button>
						
						
					</div>
					

                </form>
                
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../JS/validation.js?v=0.2"></script>

</body>
</html>