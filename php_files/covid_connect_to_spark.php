<?php
    ini_set('display_errors','1');
    error_reporting(E_ALL);
    
    
    $covid_country = "";
    if(isset($_POST['submit_covid'])){
        // $country = "";
        $covid_country = $_POST['covid_country'];
        
        // $start_time = strtotime($_POST['start-time']);
        // $end_time = strtotime($_POST['end-time']);
        // $new_start_time = date('Y-m-d', $start_time);
        // $new_end_time = date('Y-m-d', $end_time);
        // echo $new_start_time;
        // echo $new_end_time;

        $start_time = $_POST['start-time'];
        $end_time = $_POST['end-time'];
        // echo $start_time;
        // echo $end_time;


        $shell_cmd = "python3 /var/www/html/spark_covid_get_data.py $covid_country $start_time $end_time";
        $command = escapeshellcmd($shell_cmd);
        $output = shell_exec($command); 
        echo $output;
        // $output = json_decode($output);
        // echo gettype($output);
        echo "<script>";
        echo "covid_data_from_spark = {$output}";
        echo "</script>";
    }

    
?>