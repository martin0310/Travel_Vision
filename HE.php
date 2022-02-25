<!DOCTYPE html>
<html lang="en">
<?php
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
</head>

<body>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <video autoplay muted loop id="bg-video">
        <source src="video/Video.mp4" type="video/mp4">
    </video>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="cd-slider-nav">
                        <nav class="navbar navbar-expand-lg" id="tm-nav">
                            <a class="navbar-brand" href="index.php"><img src="/img/Mark.png" alt="Mark" width="170" height="95"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="0">About</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="1">Health & Epidemic</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="2">Quality of Life</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="3">Property Prices</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="4">Cost of Living</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#0" data-no="5">Login</a>
                                        <div class="circle"></div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid tm-content-container">
            <ul class="cd-hero-slider mb-0 py-5">
            <li class="px-3" data-page-no="1">
                    <div class="page-width-1 page-left">
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark">
                                <h2 class="mb-4">Select A Location</h2>
                                <h6 class="mb-4">
                                    Please enter a country or a city. <br/><br/>
                                    Example <br/>
                                    Chosse Taiwan：Enter "Taiwan,not_a_city"<br/>
                                    Choose Taipei：Enter "Taiwan,Taipei"
                                </h6>
                                <div class="before_or_select_location_form">

                                <form action=".php" method="get" style="display: inline; margin:0; padding:0;">
                                    <select name="country"  id="country" onchange="if (checkSelectedSomeText('country')) this.form.submit();">
                                        <option value="">---Select country---</option>
                                        <select name="meal" id="">
                                            
                                        </select>
                                      
                                    </select>
                                </form>
                                <script>
                                    var requestURL='http://140.123.173.10/Crawler/country_city_dict.json';
                                    var request = new XMLHttpRequest();
                                    request.open('GET', requestURL);
                                    request.responseType = 'json';
                                    request.send();
                                    request.onload = function() {
                                    var country = request.response;
                                    populateHeader(country);
                                    showHeroes(country);
                                    }

                                </script>
                                <?php
                                    $test = file_get_contents('Crawler/country_city_dict.json') or die("Unable to open file!");
                                    //decode
                                    $test1 = json_decode($test, true);
                                    //var_dump($test1);
                                    //echo fread($test1, 2048);
                                    //if(is_array($test1)==true){echo"true";}
                                    //else{echo"false";}
                                    fclose($test);
                                    echo "close";
                                    
                                ?>
                                </div>
                            </div>
                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                        </div>
                        <div class="text-center">
                            <a href="#0" data-page-no="2" class="btn btn-primary tm-intro-btn tm-page-link">
                  View Gallery
                </a>
                        </div>
                    </div>
                </li>

                </ul>
        </div>
        <div class="container-fluid">
            <footer class="row mx-auto tm-footer">
                <div class="col-md-6 px-0">
                    Copyright 2021 Astro Motion Company Limited. All rights reserved.
                </div>
                <div class="col-md-6 px-0 tm-footer-right">
                    Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank" class="tm-link-white">TemplateMo</a>
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

