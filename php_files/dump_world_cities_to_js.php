<!-- Dump country-city data to JS -->
<?php
    $spark_test_file = fopen("/home/datavis/worldcities.csv", "r") or die("Unable to open file!");
    $json_text = fread($spark_test_file, filesize("/home/datavis/worldcities.csv"));
    echo "<script>";
    echo "world_cities_data = {$csv_text}";
    echo "</script>";
    fclose($spark_test_file);
    //echo "close";
?>
