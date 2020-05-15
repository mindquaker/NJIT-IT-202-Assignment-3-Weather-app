<?php

$key = "Your API KEY";
$z = $_GET["zip"];
$url  = "https://api.openweathermap.org/data/2.5/weather?zip=".$z.",us&units=imperial&appid=".$key;

//this is the original link.
//api.openweathermap.org/data/2.5/weather?zip={zip code},{country code}&appid={your api key} 
sleep(2.5);
$fp = fopen ( $url , "r" );
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}


echo $contents ;

?>
