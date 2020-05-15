<?php

$key = "cc53c949f404f4064ac9b4e6c1e60c41";
$z = $_GET["zip"];
$url  = "https://api.openweathermap.org/data/2.5/weather?zip=".$z.",us&units=imperial&appid=".$key;

sleep(2.5);
$fp = fopen ( $url , "r" );
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}


echo $contents ;

?>
