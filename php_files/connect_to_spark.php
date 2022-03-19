<?php
    ini_set('display_errors','1');
    error_reporting(E_ALL);
    // ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
    // curl_setopt($c, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727;)');
    // $html=file_get_contents($url);
    // // $file = fopen("test_HE.php","r");
    // // echo $file;
    // $Doc = new DOMDocument();
    // $Doc->loadHTMLFile("http://140.123.173.10/test_HE.php;");
    // echo getTextFromDocument($Doc)."\n";

    // if($_GET['myLinkVar'] == "1") {
    // if(isset($_POST['country']){
    // echo $_POST['country'];
    // echo $_POST['city'];
    if($datatype == "COL"){
        if(isset($_POST['submit'])){
            $country_city = "";
            // (United States,Abilene, TX)
            if(isset($_POST['country'])){
                // echo $_POST['country'];
            }
            else{
                // echo "no country";
            }
    
            // TYPE
            $col_type_var = $_POST['type_dropdown'];
            // echo ">>>".$col_type_var;
    
            echo "<script>";
            echo "col_type_var_js = \"" . $col_type_var . "\"";
            echo "</script>";
            // 20220314
    
    
            if(isset($_POST['city'])){
                // echo $_POST['city'];
            }
            else{
                // echo "no city";
            }
    
            if($_POST['country'] == "United States"){
                $country_city = "(United States," . $_POST['city'] . ")";
                // echo $country_city;
            }
            else{
                $country_city = "(" . $_POST['country'] . "," . $_POST['city'] . ")";
                // echo $_POST['city'];
            }
    
            $shell_cmd = "python3 /var/www/html/spark_test.py $datatype $country_city";
            // echo "shell command: " . $shell_cmd;
                                        
            $command = escapeshellcmd($shell_cmd);
            $output = shell_exec($command); 
            
            // test pp 20220316 success
            // echo $output;
            
            echo "<script>";
            echo "col_data = " . $output;
            echo "country_city_d3 = \"" . $country_city . "\"";
            echo "</script>";
            // echo gettype($_POST['country']);
            // echo gettype($_POST['city']);
        }
        else{
            // echo "None!!!!";
        }
    }
    else if($datatype == "PP"){
        if(isset($_POST['submit'])){
            $country_city = "";
            // (United States,Abilene, TX)
            if(isset($_POST['country'])){
                // echo $_POST['country'];
            }
            else{
                // echo "no country";
            }
    
            // TYPE
            $pp_type_var = $_POST['type_dropdown'];
            // echo ">>>".$col_type_var;
    
            echo "<script>";
            echo "pp_type_var_js = \"" . $pp_type_var . "\"";
            echo "</script>";
            // 20220314
    
    
            if(isset($_POST['city'])){
                // echo $_POST['city'];
            }
            else{
                // echo "no city";
            }
    
            if($_POST['country'] == "United States"){
                $country_city = "(United States," . $_POST['city'] . ")";
                // echo $country_city;
            }
            else{
                $country_city = "(" . $_POST['country'] . "," . $_POST['city'] . ")";
                // echo $_POST['city'];
            }
    
            $shell_cmd = "python3 /var/www/html/spark_test.py $datatype $country_city";
            // echo "shell command: " . $shell_cmd;
                                        
            $command = escapeshellcmd($shell_cmd);
            $output = shell_exec($command); 
            
            // test pp 20220316 success
            // echo $output;
            
            echo "<script>";
            echo "pp_data = " . $output;
            echo "country_city_d3 = \"" . $country_city . "\"";
            echo "</script>";
            // echo gettype($_POST['country']);
            // echo gettype($_POST['city']);
        }
        else{
            // echo "None!!!!";
        }
    }
?>
