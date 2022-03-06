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
<?php
    $datatype="PP";
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
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark" style="margin:0 auto">
                                <h2 class="mb-4">Select A Location</h2>
                                <h6 class="mb-4">
                                    Please enter a country or a city. <br/><br/>
                                    Example <br/>
                                    Chosse Taiwan：Enter "Taiwan,not_a_city"<br/>
                                    Choose Taipei：Enter "Taiwan,Taipei"
                                </h6>

                            <div class="select_country_city_form">
                                 <form method="post" action="">  <!--set method to POST -->
                                    <select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
                                        <option value="">---Select country---</option>
                                    </select>
                                    <select id="city-dropdown" name="city">
                                        <option value="">---Select city---</option>
                                    </select>
                                    <input type="submit" name="submit" value="Submit the form" class="search search-hover"/>
                                </form>
                            </div>
                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                            </div><br/>
                        
                            </div>
                        </div>


                    <div id="property_price_d3" name="property_price_d3"></div>

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

<?php
include __DIR__.'/php_files/dump_country_city_to_js.php';
?>

<script src="js_files/gen_country_city_form.js"></script>

<?php
include __DIR__.'/php_files/connect_to_spark.php';
?>

<!-- D3 of PP -->
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="js_files/gen_pp_d3.js"></script>

</body>

</html>