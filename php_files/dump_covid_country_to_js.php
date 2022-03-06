<?php
    ini_set('display_errors','1');
    error_reporting(E_ALL);
    $spark_test_file = fopen("/home/datavis/covid_country.json", "r") or die("Unable to open file!");
    $country_txt_text = fread($spark_test_file, filesize("/home/datavis/covid_country.json"));
    echo "<script>";
    echo "covid_country = {$country_txt_text}";
    echo "</script>";
    fclose($spark_test_file);
    //echo "close";
?>