<!DOCTYPE html>
<html lang="en">
<head>
	<title>Travel Vision | Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="../Login_v1/assets/css/images/png" href="assets/css/images/Plane.ico"/>
	<link rel="stylesheet" type="text/css" href="./Login_v1/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/css/main.css">
	<link rel="stylesheet" type="text/css" href="./Login_v1/css/header.css" />
</head>
<?php
	include('p_header.php');
?> 

<body>
	<div></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				</br></br>
					<img src="images/world.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Create an Account
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
					<input class="input100" type="text" name="name" placeholder="Username">	
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o " aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password again">
						<input class="input100" type="password" name="password_confirm" id="password_confirm" oninput="check(this)" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						</span>
						<script language='javascript' type='text/javascript'>
							function check(input) {
								if (input.value != document.getElementById('password').value) {
									input.setCustomValidity('Password Must be Matching.');
								} else {
									// input is valid -- reset the error message
									input.setCustomValidity('');
								}
							}
						</script>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" href="member.php">
							Sign Up
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Already have an Account? Login!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Footer -->
	<?php
		include('p_footer.php');
	?>

</div>

	<!-- script -->
	<script src="./Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="./Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="./Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="./Login_v1/vendor/select2/select2.min.js"></script>
	<script src="./Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="./Login_v1/js/main.js"></script>

</body>
</html>