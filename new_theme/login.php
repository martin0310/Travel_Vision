<!DOCTYPE html>
<html lang="en">
<head>
	<title>Travel Vision | Login</title>
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
	<link rel="stylesheet" href="./Login_v1/css/header.css" />
</head>
<?php
	include('p_header.php');
?> 

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v13.0&appId=5057750957651424&autoLogAppEvents=1" nonce="sltc7ws9"></script>
	<div></div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./Login_v1/images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post" action="check.php">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
					<input class="input100" type="text" name="username" placeholder="Username" >	
					<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o " aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" input type="submit" name="login"  value="Login">
							Login
						</button>
						</br></br>
						<div class="fb-login-button" data-size="medium" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false">
						</div>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot your
						</span>
						<a class="txt2" href="member.php">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="signup.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Facebook Login -->
	<script>
	function statusChangeCallback(response) {
	console.log('statusChangeCallback');
	console.log(response);
	if (response.status === 'connected') {
		testAPI();  
	} else {
		document.getElementById('status').innerHTML = 'Please log ' +
		'into this webpage.';
	}
	}
	function checkLoginState() {
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
	}
	window.fbAsyncInit = function() {
	FB.init({
		appId      : '1252905088573327',
		cookie     : true,
		xfbml      : true,
		version    : 'v13.0'
	});
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
	};
	function testAPI() {
	console.log('Welcome!  Fetching your information.... ');
	FB.api('/me', function(response) {
		console.log('Successful login for: ' + response.name);
		document.getElementById('status').innerHTML =
		'Thanks for logging in, ' + response.name + '!';
	});
	}
	</script>

	<!-- Load the JS SDK asynchronously -->
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
	
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
	<!--===============================================================================================-->
	<script src="./Login_v1/js/main.js"></script>

</body>
</html>