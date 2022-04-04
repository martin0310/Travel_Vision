<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vision | Epidemic</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/line_graph_css.css">
</head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<body>
<?php
    $datatype="HE";
?>

<?php
    include('header.php');
?> 

        <div class="container-fluid tm-content-container">
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark"  style="margin:0 auto">
                                <h2 class="mb-4">Select A Location</h2>
                                <h6 class="mb-4">
                                    Please choose a country and one of its city. <br/><br/>
                                </h6>

                            <div class="select_country_city_form">
                                 <form method="post" action="">  <!--set method to POST -->
                                    <select id="country-dropdown" name="covid_country" onchange="coutrySelected(this.value);">
                                        <option value="">---Select country---</option>
                                    </select>
                                    <!-- <select id="city-dropdown" name="city">
                                        <option value="">---Select city---</option>
                                    </select> -->
                                    <br> <!-- To next line -->
                                    <label for="start">Start date:</label>

                                    <input type="date" id="start" name="start-time"
                                        value="2021-01-01"
                                        min="2021-01-01" max="2021-10-03">

                                    <label for="end">End date:</label>

                                        <input type="date" id="end" name="end-time"
                                            value="2021-01-01"
                                            min="2021-01-01" max="2021-10-03">
                                        
                                    <input type="submit" name="submit_covid" value="Submit the form" class="search search-hover"/>
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
                    <div id="health_care_d3" name="health_care_d3"></div>
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
include __DIR__.'/php_files/dump_covid_country_to_js.php';
?>

<script src="js_files/gen_covid_country_form.js"></script>

<?php
include __DIR__.'/php_files/covid_connect_to_spark.php';
?>

<?php
include __DIR__.'/php_files/covid_get_date.php';
?>

<!-- D3 of HE -->
<script src="https://d3js.org/d3.v3.min.js"></script>
<script src="js_files/gen_he_d3.js"></script>

</body>

</html>
