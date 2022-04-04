<!DOCTYPE HTML>
<html>

<head>
	<title>Travel Vision | Property Prices</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" type="../Login_v1/assets/css/images/png" href="assets/css/images/Plane.ico"/>
	<noscript>
	<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<body class="is-preload">
	
	<?php
		$datatype="PP";
	?>
	
	<div id="page-wrapper">

		<!-- Header -->
		<?php
			include('header.php');
		?>

		<!-- Main -->
		<div id="main" class="wrapper style1">
			<div class="container">
				<header class="major">
					<h2>Property Prices Statistics</h2>
					<p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
				</header>

				<!-- Content -->
				<section id="content">
					<!-- Select Form -->
					<div class="intro-left tm-bg-dark" style="margin:0 auto">
						<h2 class="mb-4">Select A Location</h2>
						<h3 class="mb-4">
							Please choose a country and one of its city. <br /><br />
						</h3>

						<div class="select_country_city_form" style="text-align:center;">
								<form method="post" action="">
								<p>
								<select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
									<option value="">-Select country-</option>
								</select>
								</br>
								<select id="city-dropdown" name="city">
									<option value="">-Select city-</option>
								</select>
								</br>
								<select id="type-dropdown" name="type_dropdown">
									<option value="">-Choose a Type-</option>    
									<option value="Rent Per Month">Rent Per Month</option>
									<option value="Buy Apartment Price">Buy Apartment Price</option>
									<option value="Salaries And Financing">Salaries And Financing</option>
								</select>
								</p>
								<br>
								<input type="submit" name="submit" value="Submit the form" class="search search-hover primary"/>
								<input type="reset" value="Reset" />
							</form>
						</div>
						</div>
					</div>
				</section>

				<!-- D3 TAG -->
				<center><div id="property_price_d3" name="property_price_d3"></div></div></center>
			</div>
		</div>
		<!-- Footer -->
		<?php
			include('footer.php');
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
	<?php
	include('../php_files/dump_country_city_to_js.php');
	?>

	<script src="../js_files/gen_country_city_form.js"></script>

	<?php
	include('../php_files/connect_to_spark.php');
	?>

	<!-- D3 of PP -->
	<script src="https://d3js.org/d3.v5.min.js"></script>

	<!-- 表情包😀 -->
	<script src="../js_files/pp_emoji.js"></script>
	<script src="../js_files/gen_pp_d3.js"></script>
</body>
</html>