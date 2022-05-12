<!-- Theme element -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Travel Vision | Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php
				include('p_header.php');
			?>
				<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Contact Now</h2>
							<p>We are here to help and answer any question you might have. We look forward to hearing from you🙂</p>
						</header>

				<!-- Form -->
					<section>
						<h3>We’d love to hear from you!</h3>
						<form method="post" action="#">
							<div class="row gtr-uniform gtr-50">
								<div class="col-6 col-12-xsmall">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<select name="category" id="category">
										<option value="">Type of query</option>
										<option value="1">About Website</option>
										<option value="1">About Membership</option>
										<option value="1">About Source of Information</option>
										<option value="1">Other Questions</option>
									</select>
								</div>
								<div class="col-6 col-12-medium">
									<input type="radio" id="member" name="member">
									<label for="member">Our member?  Please tell us your username.</label>
									<input type="text" name="username" id="username" value="" placeholder="Username" />
								</div>
								<div class="col-6 col-12-medium">
									<input type="radio" id="notmember" name="notmember">
									<label for="notmember">I'm not a member.</label>
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
					</div>
				</div>

			<!-- Footer -->
			<?php
				include('p_footer.php');
			?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>