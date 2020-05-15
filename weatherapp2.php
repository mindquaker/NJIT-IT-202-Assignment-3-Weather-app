<?php

$api = "cc53c949f404f4064ac9b4e6c1e60c41";
$lat = $_GET["lat"];
$long = $_GET["long"];
$url2  = "http://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$long."&appid=".$api;
sleep(2.5);
//Your API Key has to be obtained from openweathermap.org
$fp = fopen ( $url2 , "r" );
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}
     //this overrides commented earlier hardcoded $data

echo $contents ;

?>
