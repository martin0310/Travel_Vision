<!DOCTYPE HTML>
<html>

<head>
	<title>Travel Vision | Epidemic</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" type="../Login_v1/assets/css/images/png" href="assets/css/images/Plane.ico"/>
	<noscript>
	<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<?php
		$datatype="HE";
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
					<h2>Epidemic Statistics</h2>
					<p>Ipsum dolor feugiat aliquam tempus sed magna lorem consequat accumsan</p>
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
								<select id="country-dropdown" name="covid_country">
									<option value="">-Select country-</option>
								</select>
								<br>
								<div class="row gtr-uniform gtr-50">
									<div class="col-6">
										<h3><label for="start">Start Date ↓</label></h3>
										<input type="date" id="start" name="start-time" value="2021-01-01" min="2021-01-01"
											max="2021-10-03">
									</div>
									<div class="col-6">
									<h3><label for="end">End Date ↓</label></h3>
										<input type="date" id="end" name="end-time" value="2021-01-01" min="2021-01-01"
										max="2021-10-03">
									</div>
								</div>
								</br></br>
								<ul class="actions center">
									<li><input class="search search-hover primary" type="submit" name="submit_covid" value="Submit the form"/></li>
									<li><input type="reset" value="Reset" /></li>
								</ul>
							</form>
						</div>
						</div>
					</div>
				</section>

				<!-- D3 TAG -->
				<link rel=stylesheet type="text/css" href="../css/line_graph_css.css">
				<center><div id="health_care_d3" name="health_care_d3"></div></center>
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
		include('../php_files/dump_covid_country_to_js.php');
	?>

	<script src="../js_files/gen_covid_country_form.js"></script>

	<?php
		include('../php_files/covid_connect_to_spark.php');
	?>

	<?php
		include('../php_files/covid_get_date.php');
	?>

	<!-- D3 of HE -->
	<script src="https://d3js.org/d3.v3.min.js"></script>
	<script src="../js_files/gen_he_d3.js"></script>
</body>
</html>