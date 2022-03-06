<?php
    ini_set('display_errors','1');
    error_reporting(E_ALL);
    
    
    $covid_country = "";
    if(isset($_POST['submit_covid'])){
        // $country = "";
        $covid_country = $_POST['covid_country'];
    }

    $shell_cmd = "python3 /var/www/html/spark_covid_get_data.py $covid_country";
    $command = escapeshellcmd($shell_cmd);
    $output = shell_exec($command); 
    echo $output;
?>