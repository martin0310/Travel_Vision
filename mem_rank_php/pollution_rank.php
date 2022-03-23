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
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/slick.css" type="text/css" />
        <link rel="stylesheet" href="../css/templatemo-style.css">
        <!--
    
TemplateMo 560 Astro Motion

https://templatemo.com/tm-560-astro-motion

-->
    </head>

    <body>
        <?php
            $datatype="pollution_rank";
        ?>
        <video autoplay muted loop id="bg-video">
        <source src="video/Video.mp4" type="video/mp4">
    </video>
        <div class="page-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="cd-slider-nav">
                            <nav class="navbar navbar-expand-lg" id="tm-nav">
                                <a class="navbar-brand" href="mem_index.php"><img src="../img/Mark.png" alt="Mark" width="170" height="95"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbar-supported-content">
                                    <ul class="navbar-nav mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#0">About</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../mem_epidemic.php">Epidemic Information</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../mem_rank.php">Rank of Countries</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../mem_integrate.php" data-no="3">Integrate Info of Country</a>
                                            <div class="circle"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../index.php" data-no="4">Log Out</a>
                                            <div class="circle"></div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

                <!-- d3 tag -->
                <ul class="cd-hero-slider mb-0 py-5">
                    <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                        <div id="pollution_rank_d3" name="pollution_rank_d3"></div>
                        <div class="circle intro-circle-1"></div>
                        <div class="circle intro-circle-2"></div>
                        <div class="circle intro-circle-3"></div>
                        <div class="circle intro-circle-4"></div>
                        <p style="margin:0 auto">
                            <a style="text-decoration: underline; font-size: 18px;" href="../mem_rank.php">Back</a>
                        </p>
                    </div>
                </ul>

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

            <script src="../js/jquery-3.5.1.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/slick.js"></script>
            <script src="../js/templatemo-script.js"></script>
    </body>

</html>
