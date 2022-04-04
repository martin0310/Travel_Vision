<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vision | Cost of Living</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <!-- <link rel="stylesheet" href="css/bar_chart_css.css"> -->
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<body>

<?php
    $datatype="COL";
?>

<?php
    include('header.php');
?>

        <div class="container-fluid tm-content-container">
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark"  style="margin:0 auto">
                                <h2 class="mb-4">Select A Location</h2>
                                <h6 class="mb-4">
                                    Please choose a country and one of its city.  <br/><br/>
                                </h6>

                            <div class="select_country_city_form">
                                 <form method="post" action="">
                                    <!--set method to POST -->
                                    <select id="country-dropdown" name="country" onchange="coutrySelected(this.value);">
                                        <option value="">---Select country---</option>
                                    </select>
                                    <select id="city-dropdown" name="city">
                                        <option value="">---Select city---</option>
                                    </select>
                                    <!-- choose type -->
                                    <select id="type-dropdown" name="type_dropdown">
                                        <option value="">---Choose a Type---</option>    
                                        <option value="Buy Apartment Price">Buy Apartment Price</option>
                                        <option value="Childcare">Childcare</option>
                                        <option value="Clothing And Shoes">Clothing And Shoes</option>
                                        <option value="Markets">Markets</option>
                                        <option value="Rent Per Month">Rent Per Month</option>
                                        <option value="Restaurants">Restaurants</option>
                                        <option value="Salaries And Financing">Salaries And Financing</option>
                                        <option value="Sports And Leisure">Sports And Leisure</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Utilities (Monthly)">Utilities (Monthly)</option>
                                    </select>
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
                    <div id="cost_of_living_d3" name="cost_of_living_d3" style="orange"></div>
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

<!-- D3 of COL -->
<script src="https://d3js.org/d3.v5.min.js"></script>

<!-- 表情包😀 -->
<script src="js_files/col_emoji.js"></script>

<!-- <script src="js_files/gen_col_d3.js"></script> -->
<!-- test D3 20220328 -->
<script src='js_files/d3_test_col_chart.js'></script>

</body>

</html>
