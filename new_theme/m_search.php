<!DOCTYPE HTML>
<html>

<head>
	<title>Travel Vision | Search for </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" type="../Login_v1/assets/css/images/png" href="assets/css/images/Plane.ico"/>
	<noscript>
	<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>
	<link rel="stylesheet" href="../css/world_Map.css">
</head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<body class="is-preload">
	
	<?php
		$datatype="integrate";
	?>
	
	<div id="page-wrapper">

		<!-- Header -->
		<?php
			include('m_header.php');
		?>

		<!-- Main -->
		<div id="main" class="wrapper style1">
			<div class="container">
				<header class="major">
					<h2>Search for Your Information</h2>
				</header>
				<!-- Content -->
				<section id="content">
					<!-- Select Form -->
					<div class="intro-left tm-bg-dark" style="margin:0 auto">
						<h2 class="mb-4">Select A Location</h2>
						<svg width="960" height="500" style="display: block; margin: auto;"></svg>
						<script src="../js_files/worldMap.js"></script>
						<h3 class="mb-4">
							Please choose a country and one of its city. <br /><br />
						</h3>

						<div class="select_country_city_form" style="text-align:center;">
								<form method="post" action="">
								<p>
								<select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
									<option value="">Select country</option>
								</select>
								</br>
								<select id="city-dropdown" name="city">
									<option value="">Select city</option>
								</select>
								</p>
								<div class="col-4 col-12-medium">
									<input type="radio" id="priority-low" name="type">
									<label for="priority-low">Low Priority</label>
									
									<input type="radio" id="health_care_d3" name="type">
									<label for="priority-normal">Epidemic</label>
									
									<input type="radio" id="priority-high" name="type">
									<label for="priority-high">High Priority</label>
								</div>
								<br>
								<input type="submit" name="submit" value="Submit the form" class="search search-hover primary"/>
								<input type="reset" value="Reset" />
							</form>
						</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<!-- Footer -->
		<?php
			include('m_footer.php');
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
		include ('../php_files/dump_country_city_to_js.php');
	?>

	<script src="../js_files/gen_country_city_form.js"></script>

	<?php
		include ('../php_files/connect_to_spark.php');
	?>

	<?php
		include('../php_files/covid_get_date.php');
	?>

	<!-- D3 of HE -->
	<script src="https://d3js.org/d3.v3.min.js"></script>
	<script src="../js_files/gen_he_d3.js"></script>

</body>
</html>