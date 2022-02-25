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
                            <a class="navbar-brand" href="index.php"><img src="/img/Mark.png" alt="Mark" width="170" height="95"></a>
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
                                        <a class="nav-link" href="test_HE.php">Health & Epidemic</a>
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
                                <h2 class="mb-4">Welcome to Astro Motion</h2>
                                <p class="mb-4">
                                    This HTML template has a motion video background loop which is provided by <a rel="sponsored" href="https://getfreepictures.com" target="_blank">Get Free Pictures</a>. This is one-page responsive layout for your websites.
                                    Feel free to use this for a commercial purpose. </p>
                                <p class="mb-0">
                                    You are not permitted to redistribute this template on your Free CSS collection websites. Please <a rel="nofollow" href="https://templatemo.com/contact" target="_blank">contact us</a> for more information. </p>
                            </div>
                            <div class="intro-right">
                                <img src="img/home-img-1.jpg" alt="Image" class="img-fluid intro-img-1">
                                <img src="img/home-img-2.jpg" alt="Image" class="img-fluid intro-img-2">
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
                <li data-page-no="2">
                    <!-- Image Carousel -->
                    <div class="mx-auto position-relative gallery-container">
                        <div class="circle intro-circle-1"></div>
                        <div class="circle intro-circle-2"></div>
                        <div class="mx-auto tm-border-top gallery-slider">
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-01.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-02.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-03.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-04.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-05.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-06.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-07.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-08.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                            <figure class="effect-julia item">
                                <img src="img/gallery-img-09.jpg" alt="Image">
                                <figcaption>
                                    <div>
                                        <p>Julia dances in the deep dark</p>
                                    </div>
                                    <a href="#">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </li>
                <li data-page-no="3" class="px-3">
                    <div class="position-relative page-width-1 page-right tm-border-top tm-border-bottom">
                        <div class="circle intro-circle-1"></div>
                        <div class="circle intro-circle-2"></div>
                        <div class="circle intro-circle-3"></div>
                        <div class="circle intro-circle-4"></div>
                        <div class="tm-bg-dark content-pad">
                            <h2 class="mb-4">About our company</h2>
                            <p class="mb-4">
                                You are <span class="highlight">allowed</span> to use Astro Motion HTML Template for your websites. You are not allowed to re-distribute this template ZIP file on any Free CSS template collection website. Illegal redistribution
                                is strongly prohibited.
                            </p>
                            <p>
                                Praesent auctor rhoncus arcu, vitae blandit est vestibulum sit amet. Integer erat turpis, vestibulum pellentesque aliquam ultricies, finibus nec dui. Donec bibendum enim mi, at tristique leo feugiat at. Thank you for visiting Template Mo.
                            </p>
                        </div>
                    </div>
                </li>
                <li data-page-no="4">
                    <div class="mx-auto page-width-2">
                        <div class="row">
                            <div class="col-md-6 me-0 ms-auto">
                                <h2 class="mb-4">Contact Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 tm-contact-left">
                                <form action="#" method="POST" class="contact-form">
                                    <div class="input-group tm-mb-30">
                                        <input name="name" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Name">
                                    </div>
                                    <div class="input-group tm-mb-30">
                                        <input name="email" type="text" class="form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Email">
                                    </div>
                                    <div class="input-group tm-mb-30">
                                        <textarea rows="5" name="message" class="textarea form-control rounded-0 border-top-0 border-end-0 border-start-0" placeholder="Message"></textarea>
                                    </div>
                                    <div class="input-group justify-content-end">
                                        <input type="submit" class="btn btn-primary tm-btn-pad-2" value="Send">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 tm-contact-right">
                                <p class="mb-4">
                                    Integer erat turpis, vestibulum pellentesque aliquam ultricies, finibus nec dui. Donec bibendum enim mi, at tristique leo feugiat at.
                                </p>
                                <div>
                                    Email: <a href="mailto:info@company.com" class="tm-link-white">info@company.com</a>
                                </div>
                                <div class="tm-mb-45">
                                    Tel: <a href="tel:0100200340" class="tm-link-white">010-020-0340</a>
                                </div>
                                <!-- Map -->
                                <div class="map-outer">
                                    <div class="gmap-canvas">
                                        <iframe width="100%" height="400" id="gmap-canvas" src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
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
