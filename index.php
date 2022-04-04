<!DOCTYPE html>
<html lang="en">
<?php
        // $spark_test_file = fopen("population_by_country_2020.csv", "r") or die("Unable to open file!");
        // echo fread($spark_test_file, 1024);
        // echo "hello";
        // fclose($spark_test_file);
        // echo "close";
        
        // test connect php file with python file 
        
        // $country_city = "(Norway,Bodo)";
        // $country_city = '(Afghanistan,not_a_city)';
        // $command = escapeshellcmd("python3 /var/www/html/spark_test.py {$country_city}");
        // $command = escapeshellcmd("python3 /var/www/html/spark_test.py $country_city");
        // $country_city=escapeshellarg($country_city);
        // $output = shell_exec($command);
        // $output = shell_exec($command);
        // echo $output;
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vision | 你專屬的旅行夥伴</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>
    <link rel="stylesheet" href="css/world_Map.css">

</head>

<body>

<?php
    include('header.php');
?>

            <div class="container-fluid tm-content-container">
                <svg width="960" height="500" style="display: block; margin: auto;"></svg>
                <script src="js_files/worldMap.js"></script>
            <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container w3-content">
                        
            <!-- banner -->
            <img class="mySlides" src="img/food2.png" alt="cost_of_living_no1" style="width:900px; height:480px; margin:0 auto">
            <img class="mySlides" src="img/travel2.png" alt="quality_of_life_no1" style="width:900px; height:480px; margin:0 auto">
            <img class="mySlides" src="img/crime1.png" alt="crime_rate_no1" style="width:900px; height:480px; margin:0 auto">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
            function plusDivs(n) {
            showDivs(slideIndex += n);
            }
            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for(i = 0; i < x.length; i++) {x[i].style.display = "none";}
                 x[slideIndex-1].style.display = "block"; 
                }
        </script>
            <div class="circle intro-circle-1"></div>
            <div class="circle intro-circle-2"></div>
            <!-- <div class="circle intro-circle-3"></div> -->
            <!-- <div class="circle intro-circle-4"></div>     -->
            </div>

                <ul class="cd-hero-slider mb-0 py-5">                     
                <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                <div class="intro-left tm-bg-dark" style="margin:0 auto">
                    <div style="text-align:center">
                        <h2>WELCOME !</h2>
                        <h6 class="mb-4">Registering for free trial !</h6>
                    </div>
                        <p class="mb-4">
                            Advantages for Member mode : </br>
                            1. Browsing <b><front color="#FFEE99">integration information</front></b> of one country.</br>
                            2. Enjoying member only information - variety of <b>ranks of countries</b>.</p>
                    <div style="text-align:center">
                        <h6 class="mb-4">
                            Go to <a rel="nofollow" href="register.php" target="_blank">Register</a> / <a rel="nofollow" href="login.php" target="_blank">Log in</a> .</h6>
                    </div>
                </div>

                    <div class="circle intro-circle-1"></div>
                    <div class="circle intro-circle-2"></div>
                    <div class="circle intro-circle-3"></div>
                    <div class="circle intro-circle-4"></div>
                </div></div>
                </ul>
                <div class="text-center">
        </div>
        
<?php
include('footer.php');
?>  
    
</body>

<?php
include __DIR__.'/php_files/dump_country_city_to_js.php';
?>

<?php
include __DIR__.'/php_files/dump_world_cities_to_js.php';
?>

<?php
include __DIR__.'/php_files/get_world_cities_csv.php';
?>

</html>
