<!-- Dump country-city data to JS -->
<?php

    $spark_test_file = fopen("../Crawler/country_city_dict.json", "r") or die("Unable to open file!");
    $json_text = fread($spark_test_file, filesize("../Crawler/country_city_dict.json"));
    echo "<script>";
    echo "country_city = {$json_text}";
    echo "</script>";
    fclose($spark_test_file);
    //echo "close";
?>
<!-- <script>console.log(country_city)</script> -->