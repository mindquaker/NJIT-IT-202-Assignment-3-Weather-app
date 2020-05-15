<?php

$api = "Your API KEY.";
$lat = $_GET["lat"];
$long = $_GET["long"];

//this is the original link.
//api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={your api key}
$url2  = "http://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$long."&appid=".$api;
sleep(2.5);
//Your API Key has to be obtained from openweathermap.org
$fp = fopen ( $url2 , "r" );
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}

echo $contents ;

?>
