<!DOCTYPE html>

<html lang="en">

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
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

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
                            <a class="navbar-brand" href="index.php"><img src="/img/Mark.png" alt="Mark" width="170"
                                    height="95"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbar-supported-content" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar-supported-content">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="0">About</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="1">Health & Epidemic</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="2">Quality of Life</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="3">Property Prices</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="4">Cost of Living</a>
                                        <div class="circle"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" data-no="5">Login</a>
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

                            <div class="select_country_form">
                                <form method="get" action="">
                                    <select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
                                        <option value="">---Select country---</option>
                                    </select>
                                </form>
                            </div>

                            <div class="select_city_form">
                                <form method="get" action="">
                                    <select id="city-dropdown" name="city">
                                        <option value="">---Select city---</option>
                                    </select>
                                </form>
                            </div><br/>

                            <!-- Enter bottom -->
                            <!--<form action="http://140.123.173.10/test_HE.php">
                                <input class="search" type="button" value="Search" name="Search" style="width:50px;height:25px;" >
                            </form><br/>-->
                            <div class="text-center">
                                <a href="http://140.123.173.10/test_HE.php" class="search search-hover" >
                                    Search</a>
                            </div><br/>
                            
                                    <!-- Map -->
                                    <!--<div class="map-outer">
                                        <div class="gmap-canvas">
                                            <iframe width="100%" height="400" id="gmap-canvas"
                                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe>
                                        </div>
                                    </div>-->
                            </div>
                        </div>
                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                    </div>

                    <div class="container-fluid">
                        <footer class="row mx-auto tm-footer">
                            <div class="col-md-6 px-0">
                                Copyright 2021 Astro Motion Company Limited. All rights reserved.
                            </div>
                            <div class="col-md-6 px-0 tm-footer-right">
                                Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank"
                                    class="tm-link-white">TemplateMo</a>
                            </div>
                        </footer>
                    </div></li></ul>
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

<!-- Dump country-city data to JS -->
<?php
    $spark_test_file = fopen("./Crawler/country_city_dict.json", "r") or die("Unable to open file!");
    $json_text = fread($spark_test_file, filesize("./Crawler/country_city_dict.json"));
    echo "<script>";
    echo "country_city = {$json_text}";
    echo "</script>";
    fclose($spark_test_file);
    //echo "close";
?>
<!-- <script>console.log(country_city)</script> -->

<!-- Generate Form -->
<script>
    // console.log(Object.keys(country_city).length);
    country_count = Object.keys(country_city).length;
    for(i = 0; i < country_count; i++) {
        // console.log(i);
        temp_option_tag = document.createElement("option");
        country_name = Object.keys(country_city)[i];
        temp_option_tag.innerHTML = country_name;
        temp_option_tag.setAttribute("value", country_name);
        document.getElementById("country-dropdown").appendChild(temp_option_tag);
    }

    // if country selected
    function coutrySelected(country){

        city_dropdown = document.getElementById("city-dropdown");
            
        // clear previous options
        while(city_dropdown.lastChild) {
            city_dropdown.removeChild(city_dropdown.lastChild);
        }
        select_text = "---Select city---";
        temp_option_tag = document.createElement("option");
        temp_option_tag.innerHTML = select_text;
        city_dropdown.appendChild(temp_option_tag);

        city_count = country_city[country].length

        for(i = 0; i < city_count; i++) {
            // generate new options
            temp_option_tag = document.createElement("option");
            city_name = country_city[country][i];
            temp_option_tag.innerHTML = city_name;
            temp_option_tag.setAttribute("value", country_name);
            city_dropdown.appendChild(temp_option_tag);
        }
    }
</script>

</body>

</html>