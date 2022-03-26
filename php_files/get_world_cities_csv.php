<?php
$file = "/home/datavis/worldcities.csv";
$openfile = fopen($file, "r");
$cont = fread($openfile, filesize($file));
// echo "<script>";
// echo "world_cities_data = {$cont}";
// echo "</script>";

// echo gettype($cont); string
// echo $cont; -- > whole csv string

?> 