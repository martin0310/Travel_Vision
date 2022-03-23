<!DOCTYPE html>
<html lang="en">
<?php
	
	echo "WHY CSS DOESN'T WORK?";
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
    <title>Travel Vision - 你專屬的旅行夥伴</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://d3js.org/d3.v5.min.js"></script>
    <script src="https://unpkg.com/topojson@3.0.2/dist/topojson.min.js"></script>
    <link rel="stylesheet" href="css/world_Map.css">
    <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
</head>

<body>
    <video autoplay muted loop id="bg-video">
        <source src="video/Video.mp4" type="video/mp4">
    </video>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cd-slider-nav">
                        <nav class="navbar navbar-expand-lg" id="tm-nav">
                            <a class="navbar-brand" href="index.php"><img src="/img/Mark.png" alt="Mark" width="190" height="105"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse drop-down-menu" id="navbar-supported-content">
                            <ul id="navi" class="navbar-nav mb-2 mb-lg-0">
                                    <li id="navi_01" class="nav-item">
                                        <a class="nav-link" href="#0">About</a>
                                    </li>

                                    <li id="navi_02" class="nav-item">
                                        <a class="nav-link" href="#">Epidemic & Health</a>
                                        <ul id="a1">
                                            <li class="nav-item"><a class="nav-link" href="test_HE.php">Epidemic</a></li>
                                            <li class="nav-item"><a class="nav-link" href="test_HE.php">Health Care</a></li>
                                        </ul>
                                    </li>

                                    <li id="navi_03" class="nav-item">
                                        <a class="nav-link" href="test_QOL.php">Quality of Life</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link" href="test_crime.php">Crime</a></li>
                                            <li class="nav-item"><a class="nav-link" href="test_pollution.php">Pollution</a></li>
                                            <li class="nav-item"><a class="nav-link" href="test_traffic.php">Traffic</a></li>
                                        </ul>
                                    </li>

                                    <li id="navi_04" class="nav-item">
                                        <a class="nav-link" href="test_PP.php">Property Prices</a>
                                    </li>

                                    <li id="navi_04" class="nav-item">
                                        <a class="nav-link" href="test_COL.php">Cost of Living</a>

                                    </li>

                                    <li id="navi_05" class="nav-item">
                                        <a class="nav-link" href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

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
            <div class="circle intro-circle-3"></div>
            <div class="circle intro-circle-4"></div>    
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
        <div class="container-fluid">
            <footer class="row mx-auto tm-footer">
                <div class="col-md-6 px-0">
                    Call us for any questions.</br>1-800-000-0000
                </div>
                <div class="col-md-6 px-0 tm-footer-right">
                © 2021 by Dept. MIS CCU </br>Mail : ccuTravelVision@gmail.com
                </div>
            </footer>
        </div>
    </div>
    <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

<?php
include __DIR__.'/php_files/dump_country_city_to_js.php';
?>

<?php
include __DIR__.'/php_files/dump_world_cities_to_js.php';
?>

</html>
