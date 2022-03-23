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
    <title>Travel Vision - 你專屬的旅行夥伴</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
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
                                        <a class="nav-link" href="#0">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

            <div class="container-fluid tm-content-container">

            <div class="circle intro-circle-1"></div>
            <div class="circle intro-circle-2"></div>
            <div class="circle intro-circle-3"></div>
            <div class="circle intro-circle-4"></div>    
        
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark" style="margin:0 auto">
                                <div style="text-align:center">    
                                    <h2>LOG IN</h2>
                                </div>
                                <p>
                                <!-- Login Box -->
                                <form name="form" action="http://140.123.173.10/mem_index.php" method="POST" accept-charset="UTF-8">
                                    <p>
                                    Account : <input type="text" name="memid" size="15" style="width:150px; height:15px; background:rgba(0,0,0,0); border:none; border-bottom: 1px solid white;" /> <br/><br/>

                                        Password : <input type="password" name="pw" size="15" style="width:144px; height:15px; background:rgba(0,0,0,0); border:none; border-bottom: 1px solid white;" /> <br/>
                                </p>
                                <p class="mb-4">
                                    <input type="reset" value="Reset"  class="loginbox loginbox-hover">
                                    <input type="submit" style="text-align:right;" value="Submit" class="loginbox loginbox-hover;"></br>
                                </p>

                                </form>
                                </p>
                                

                                <p class="mb-4">
                                    付費方式待討論。</p>
                                <p class="mb-0">
                                    方案選擇<a rel="nofollow" href="https://templatemo.com/contact" target="_blank">選擇</a> 點此。 </p>
                                
                            </div>

                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                        </div></div>

                        <div class="text-center">
                           
            
        </div>
        <div class="container-fluid">
            <footer class="row mx-auto tm-footer">
                <div class="col-md-6 px-0">
                    Call us for any questions.</br>1-800-000-0000
                </div>
                <div class="col-md-6 px-0 tm-footer-right">
                © 2021 by Dept. MIS CCU 
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

</html>
