<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vision - Crime</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<body>
<?php
    $datatype="crime";
?>

<?php
    include('header.php');
?>

        <div class="container-fluid tm-content-container">
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark" style="margin:0 auto">
                            <div style="text-align:center">
                                <h2 class="mb-4">Select A Location</h2>
                                <h6 class="mb-4">
                                Please choose a country and one of its city.  <br/><br/>
                                </h6>
                            </div>

                            <div class="select_country_city_form" style="text-align:center;">
                                 <form method="" action="mem_integrate_choose.php">
                                    <p>
                                    <select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
                                        <option value="">---Select country---</option>
                                    </select>
                                    <select id="city-dropdown" name="city">
                                        <option value="">---Select city---</option>
                                    </select>
                                    </p><br>
                                    <input type="submit" name="submit" value="Submit the form" class="search search-hover"/>
                                </form>
                            </div>
                            
                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>                            
                        </div>        
                    </div>

                    <!-- d3 tag -->
                    <ul class="cd-hero-slider mb-0 py-5">                     
                    <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                    <div id="crime_d3" name="crime_d3"></div>
                        <div class="circle intro-circle-1"></div>
                        <div class="circle intro-circle-2"></div>
                        <div class="circle intro-circle-3"></div>
                        <div class="circle intro-circle-4"></div>
                    </div></ul>
                    </div>

<?php
    include('footer.php');
?>

<?php
include __DIR__.'/php_files/dump_country_city_to_js.php';
?>

<script src="js_files/gen_country_city_form.js"></script>

<?php
include __DIR__.'/php_files/connect_to_spark.php';
?>

<!-- D3 of QOL -->
<script src="https://d3js.org/d3.v5.min.js"></script>
<script src="js_files/gen_qol_d3.js"></script>

</body>

</html>