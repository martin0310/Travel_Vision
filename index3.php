<?php
	$spark_test_file = fopen("population_by_country_2020.csv", "r") or die("Unable to open file!");
	echo fread($spark_test_file, 1024);
	echo "hello";
	fclose($spark_test_file);
	echo "close";
?>
