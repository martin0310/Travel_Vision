<!DOCTYPE HTML>
<html>

<head>
	<title>Travel Vision | Cost of Living</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="icon" type="../Login_v1/assets/css/images/png" href="assets/css/images/Plane.ico"/>
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
	<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

<?php
	$datatype="COL";
?>
	<div id="page-wrapper">

		<!-- Header -->
		<?php
			include('p_header.php');
		?>

		<!-- Main -->
		<div id="main" class="wrapper style1">
			<div class="container">
				<header class="major">
					<h2>Cost of Living</h2>
				</header>

				<!-- Content -->
				<section id="content">
					<!-- Select Form -->
					<div class="intro-left tm-bg-dark" style="margin:0 auto">
						<h2 class="mb-4">Select A Location</h2>
						<h3 class="mb-4">
							Please choose a country. <br /><br />
						</h3>

						<div class="select_country_city_form">
							<form method="post" action="">
								<!--set method to POST -->
								<select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
									<option value="">Select country</option>
								</select>
								<br>
								<select id="city-dropdown" name="city">
									<option value="">Select city</option>
								</select>
								<br>
								<!-- choose type -->
								<select id="type-dropdown" name="type_dropdown">
                                        <option value="">Choose a Type</option>    
                                        <option value="Buy Apartment Price">Buy Apartment Price</option>
                                        <option value="Childcare">Childcare</option>
                                        <option value="Clothing And Shoes">Clothing And Shoes</option>
                                        <option value="Markets">Markets</option>
                                        <option value="Rent Per Month">Rent Per Month</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Salaries And Financing">Salaries And Financing</option>
                                        <option value="Sports And Leisure">Sports And Leisure</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Utilities (Monthly)">Utilities (Monthly)</option>
                                    </select>
								</br></br>
								<ul class="actions">
									<li><input class="search search-hover primary" type="submit" name="submit" value="Submit the form"/></li>
									<li><input type="reset" value="Reset" /></li>
								</ul>
							</form>
						</div>
						</div>
					</div>
				</section>

				<!-- D3 TAG -->
				<!-- <link rel=stylesheet type="text/css" href="../css/bar_chart_css.css"> -->
				<center><div id="cost_of_living_d3" name="cost_of_living_d3"></div></center>
				<script src="https://d3js.org/d3.v5.min.js"></script>
				<script src='../js_files/d3_test_col_chart.js'></script>
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

<?php
include('../php_files/dump_country_city_to_js.php');
?>

<script src="../js_files/gen_country_city_form.js"></script>

<?php
include('../php_files/connect_to_spark.php');
?>

<!-- D3 of COL -->
<script src="https://d3js.org/d3.v5.min.js"></script>

<!-- 表情包😀 -->
<script src="../js_files/col_emoji.js"></script>

<script src="../js_files/gen_col_d3.js"></script>
<script src='../js_files/d3_test_col_chart.js'></script>

</body>
</html>